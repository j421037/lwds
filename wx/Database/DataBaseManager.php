<?php
namespace wx\Database;

use wx\Database\Connectors\ConnectionFactory;

class DataBaseManager
{
    private $config = [
        "host"      => "localhost",
        "dbname"        => "lwds_utf8",
        "user"      => "admin",
        "passwd"  => "sb123.++",
        "driver"    => "mysql"
    ];

    protected $factory;

    protected function makeConnection()
    {
        $factory = new ConnectionFactory();
        $this->factory = $factory->createSingleConnection($this->config);
    }

    public function connection()
    {
        if (!$this->factory)
            $this->makeConnection();

        return $this->factory;
    }

    public function __call($method, $parameters)
    {
        return $this->connection()->$method(...$parameters);
    }

}