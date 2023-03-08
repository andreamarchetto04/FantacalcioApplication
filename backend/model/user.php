<?php

require __DIR__ . " /../common/errorHandler.php";

set_exception_handler("errorHandler::handleException");
set_error_handler("errorHandler::handleError");

class User 
{
    public $conn;
    function __construct($connection)
    {
        $this->conn = $connection;
    }

    function login($nickname, $mail, $pw)
    {
        $sql = sprintf("SELECT nickname, mail, pw, id
        FROM `user`
        where 1=1");

        $result = $this->conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            if ($this->conn->real_escape_string($nickname) == $this->conn->real_escape_string($row["nickname"]) && $this->conn->real_escape_string($row["mail"]) == $this->conn->real_escape_string($mail) && $this->conn->real_escape_string($row["pw"]) == $this->conn->real_escape_string($pw)) {
                return $this->conn->real_escape_string($row["id"]);
            }
        }

        return false;
    }

    function registration($nickname, $mail, $pw)
    {
        $sql = "INSERT INTO user (nickname, mail, pw) VALUES ('$nickname', '$mail', '$pw')";

        $result = $this->conn->query($sql);
        return $result;
    }
}
?>