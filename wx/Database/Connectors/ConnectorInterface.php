<?php


namespace wx\Database\Connectors;


Interface ConnectorInterface
{
    /**
     * ��������
     */
    public function connect(array $config);
}