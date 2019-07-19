<?php


namespace wx\Database\Connectors;

use wx\Database\Connectors\Connector;
use wx\Database\Connectors\ConnectorInterface;

class MySqlConnector extends Connector implements ConnectorInterface
{
    /**
     * ��������
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
     * ����dsn�ַ���
     */
    protected function getDsn(array $config)
    {
        //����ͬ����������
        extract($config, EXTR_SKIP);

        return isset($port) ? "mysql:host={$host};dbname={$dbname};port={$port}"
                            : "mysql:host={$host};dbname={$dbname}";
    }

}