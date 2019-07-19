<?php


namespace wx\Database;

use PDO;
use wx\Database\ConnectionInterface;

class Connection implements ConnectionInterface
{
    /**
     * @var wx\Database\Connectors\connector
     */
    protected $pdo;

    /**
     * @var primarykey
     */
    protected $pk = "id";
    /**
     * @var int
     */
    protected $fetchMode = PDO::FETCH_OBJ;

    protected $tableName;

    protected static $resolvers = [];
    protected $where = [];

    public function __construct($pdo, $database, $tablePrefix = '')
    {
        $this->pdo = $pdo;
    }

    /**
     * 设置表名称
     */
    public function table($table)
    {
        $this->tableName = $table;

        return $this;
    }

    /**
     * 执行一条sql语句
     */
    protected function run($query, $bindings = [], $callback)
    {
        return $callback($query, $bindings);
    }

    public function select($query, $bindings = [])
    {
        return $this->run($query, $bindings, function($query, $bindings) {

            $statement = $this->prepared($this->pdo->prepare($query));

            $this->bindingValues($statement, $bindings);

            $statement->execute();

            return $statement->fetchAll();

        });
    }

    public function insert($query, $bindings = [])
    {}

    public function update($query, $bindings = [])
    {}

    public function delete($query, $bindings = [])
    {}

    public function find($id)
    {
        return $this->select("SELECT * FROM {$this->tableName} WHERE {$this->pk} = ?", [$id]);
    }

    public function all()
    {
        $query = "SELECT * FROM {$this->tableName}";

        return $this->select($query);
    }

    public function where(array $where)
    {
        array_push($this->where,$where);

        return $this;
    }

    public function get()
    {
        if (count($this->where) < 1)
            return $this->all();

        return $this->parseWhere($this->where);
    }

    public function createTableInfo()
    {
        $result = $this->select("SHOW CREATE TABLE {$this->tableName}");

        $var = "Create Table";

        return $result[0]->$var;
    }

    public function exec($sql)
    {
        return $this->pdo->exec($sql);
    }

    public function getColumns()
    {
        $columns = [];
        $result = $this->select("desc {$this->tableName}");

        foreach ($result as $key => $value) {
            array_push($columns, $value->Field);
        }

        return $columns;
    }

    public function columnToString($columns = [])
    {
        if (!$columns)
            $columns = $this->getColumns();

        return implode(",", $columns);
    }

    public function insertBatch(array $data)
    {
        $colums = $this->getColumns();

        $params = [];

        foreach ($colums as $colum) {
            array_push($params, sprintf(":%s",$colum));
        }

        $param = implode(",",$params);

        $query = "INSERT INTO {$this->tableName} VALUES ({$param})";

        return $this->insertPrepared($query, $data);
    }

    protected function insertPrepared($query, array $data)
    {
        return $this->run($query, $data, function($query, array $bindings) {
            $statement = $this->prepared($this->pdo->prepare($query));

            foreach ($bindings as $binding) {
                $this->bindingValues($statement, $binding);
                $statement->execute();
            }

            return true;
        });
    }

    /**
     * sql 预处理
     * @params  \PDOStatement $statement
     */
    protected function prepared(\PDOStatement $statement)
    {
        $statement->setFetchMode($this->fetchMode);

        return $statement;
    }

    /**
     * 绑定
     */
    protected function bindingValues(\PDOStatement $statement, $bindings)
    {
        foreach ($bindings as $k => $v) {
            $statement->bindValue(
                is_string($k) ? $k : $k + 1,
                $v
            );
        }
    }

    /**
     * @reutrn string primary key
     */
    public function getPrimaryKey()
    {
        return $this->pk;
    }

    /**
     * @params  string $key
     *
     *
     */
    public function setPrimaryKey($key)
    {
        $this->pk = $key;
    }

    protected function parseWhere(array $where)
    {
        $bindings = [];
        $sql = "SELECT * FROM {$this->tableName} WHERE ";


        foreach ($where as $key => $value) {
            if ($key > 0) {
                $sql .= " AND ";
            }

            if ($this->isAssoc($value)) {
                $keys = array_keys($value);
                $key = $keys[0];
                $sql .= " {$key} = ?";
                array_push($bindings, $value[$key]);
            }
            else {
                $sql .= " {$value[0]} {$value[1]} ? ";
                array_push($bindings, $value[2]);
            }
        }


        return $this->select($sql, $bindings);
    }

    /**
     * @params array $array
     * @return bool true  多维数组
     */
    protected function is_multi(array $array)
    {
        return count($array) != count($array, COUNT_RECURSIVE);
    }

    /**
     * @params array $array
     * @return bool true  是否关联数组
     */
    protected function isAssoc(array  $array)
    {
        if(array() == $array)
            return false;
        return array_keys($array) !== range(0, count($array) - 1);
    }
}