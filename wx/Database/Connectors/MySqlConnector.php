<?php


namespace wx\Database\Connectors;

use wx\Database\Connectors\Connector;
use wx\Database\Connectors\ConnectorInterface;

class MySqlConnector extends Connector implements ConnectorInterface
{
    /**
     * 建立连接
     */
    public function connect(array $config)
    {
        $dsn = $this->getDsn($config);

        $options = $this->getOptions($config);

        $connection = $this->createConnection($dsn, $config, $options);

        if (!empty($config["database"])) {
            $connection->exec("use {$config["database"]};");
        }

        return $connection;
    }

    /**
     * 构造dsn字符串
     */
    protected function getDsn(array $config)
    {
        //有相同变量不覆盖
        extract($config, EXTR_SKIP);

        return isset($port) ? "mysql:host={$host};dbname={$dbname};port={$port}"
                            : "mysql:host={$host};dbname={$dbname}";
    }

}