<?php
class League
{
    protected $conn;
    public function __construct($db)
    {
        $this->conn = $db;
    }
}
?>