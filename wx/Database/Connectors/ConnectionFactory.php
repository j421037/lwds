<?php
namespace wx\Database\Connectors;

use wx\Database\Connection;
use wx\Database\Connectors\MySqlConnector;
use wx\Database\MySqlConnection;

class ConnectionFactory
{



    /**
     * 构建数据库单例链接对象
     *
     * @param array $config
     *
     * @return wx\Database\Connectors\Connection
     **/
    public function createSingleConnection(array $config)
    {
        $pdo = $this->createPdoResolver($config);

        return $this->createConnection($config["driver"],$pdo, $config["prefix"], $config);
    }

    /**
     * 构建单例pdo对象
     *
     */
    protected function createPdoResolver(array $config)
    {
        return $this->createConnector($config)->connect($config);
    }

    /**
     * 构建连接器
     */
    protected function createConnector(array $config)
    {
        if (!isset($config["driver"])) {
            throw new InvalidArgumentException("请设置数据库驱动");
        }

        switch(strtolower($config["driver"])) {
            case "mysql":
                return new MySqlConnector;
        }

        throw new InvalidArgumentException("数据库驱动无限");
    }

    /**
     * 创建单例连接对象
     *
     * @param string $driver
     * @param \PDO\Closure $connection
     * @param  string $data
     * @param  string $prefix
     * @param  array $config
     * @return Connection
     */
    protected function createConnection($driver, $connection, $database, $prefix = '', array $config = [])
    {
        return new MySqlConnection($connection, $database, $prefix, $config);
    }
}