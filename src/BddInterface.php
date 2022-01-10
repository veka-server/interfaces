<?php

namespace VekaServer\Interfaces;

interface BddInterface
{

    /**
     * @param bool $check_conn
     * @throws \Exception
     */
    public function connect(bool $check_conn = true);

    /**
     * @throws \Exception
     */
    public function exec($sql, $param = []);

    /**
     * @param       $sql
     * @param array $param_sql
     *
     * @return array|bool|false|int|resource
     * @throws \Exception
     */
    public function open($sql, array $param_sql = array());

    /**
     * @throws \Exception
     */
    public function beginTransaction();

    public function commit();

    public function rollback() ;

    public function fetch($stmt);

    public function fetchAll($stmt);

}