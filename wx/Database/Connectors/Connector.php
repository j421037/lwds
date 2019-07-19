<?php


namespace wx\Database\Connectors;

use PDO;

class Connector
{
    /**
     * Ĭ��pdoѡ��
     *
     * @var array
     *
     */
    protected $options = [
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_ORACLE_NULLS => PDO::NULL_NATURAL,
        PDO::ATTR_STRINGIFY_FETCHES => false,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    /**
     * ��������
     */
    protected function createConnection($dsn, $config,$options)
    {
        list($user, $passwd) = [$config["user"] ? $config["user"] : null, $config["passwd"] ? $config["passwd"] : null];

        return $this->createPdoConnection($dsn,$user,$passwd,$options);
    }

    /**
     * ����һ��pdo��ʵ����
     */
    protected function createPdoConnection($dsn,$user, $passwd, $options)
    {
        return new PDO($dsn, $user, $passwd, $options);
    }

    public function getDefaultOptions()
    {
        return $this->options;
    }

    public function setDefaultOptions(array $option)
    {
        $this->options = $option;
    }

    public function getOptions(array $config)
    {
        $options = $config["options"] ? $config["options"]: [];

        return array_diff_key($this->options, $options) + $options;
    }
}