<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 22.11.18
 * Time: 20:40
 */

/**
 * @var PDO
 */

class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $classname)
    {
        $stmt = $this->pdo->query("SELECT * FROM $table");
        return $stmt ->fetchALL(PDO::FETCH_CLASS, $classname);
    }

    public function delete($table, $id)
    {
        $this->pdo->query("DELETE * FROM $table WHERE id = $id");
    }
}