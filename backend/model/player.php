<?php
class Player
{
    protected $conn;
    public function __construct($db)
    {
        $this->conn = $db;
    }

    function getArchivePlayer()
    {
        $sql = "SELECT quotation, name, `role`,  team
              FROM player
              WHERE 1=1
              order by quotation DESC;
                ";
        return $sql;
    }
}
?>