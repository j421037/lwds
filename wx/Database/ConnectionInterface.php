<?php


namespace wx\Database;


interface ConnectionInterface
{
    public function table($table);

    public function select($query, $bindings = []);

    public function insert($query, $bindings = []);

    public function update($query, $bindings = []);

    public function delete($query, $bindings = []);

    public function find($id);

}