<?php
class Squad
{
    protected $conn;
    public function __construct($db)
    {
        $this->conn = $db;
    }

}
?>