<?php
class Rosa
{
    protected $conn;
    public function __construct($db)
    {
        $this->conn = $db;
    }

}
?>