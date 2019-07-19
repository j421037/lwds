<?php
namespace wx\Database\Connectors;

use wx\Database\Connection;
use wx\Database\Connectors\MySqlConnector;
use wx\Database\MySqlConnection;

class ConnectionFactory
{



    /**
     * �������ݿⵥ�����Ӷ���
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
     * ��������pdo����
     *
     */
    protected function createPdoResolver(array $config)
    {
        return $this->createConnector($config)->connect($config);
    }

    /**
     * ����������
     */
    protected function createConnector(array $config)
    {
        if (!isset($config["driver"])) {
            throw new InvalidArgumentException("���������ݿ�����");
        }

        switch(strtolower($config["driver"])) {
            case "mysql":
                return new MySqlConnector;
        }

        throw new InvalidArgumentException("���ݿ���������");
    }

    /**
     * �����������Ӷ���
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