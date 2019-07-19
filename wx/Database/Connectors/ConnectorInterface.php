<?php


namespace wx\Database\Connectors;


Interface ConnectorInterface
{
    /**
     * 建立连接
     */
    public function connect(array $config);
}