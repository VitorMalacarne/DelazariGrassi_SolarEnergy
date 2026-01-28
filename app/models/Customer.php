<?php

class Customer
{
    public static function all($name = null)
    {
        $db = Database::getConnection();

        if ($name) {
            $stmt = $db->prepare("
                SELECT * 
                FROM TB_CLIENTE 
                WHERE CLI_NOME LIKE :name
                ORDER BY CLI_NOME
            ");
            $stmt->execute(['name' => "%{$name}%"]);
        } else {
            $stmt = $db->query("SELECT * FROM TB_CLIENTE ORDER BY CLI_NOME");
        }

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id)
    {
        $db = Database::getConnection();

        $stmt = $db->prepare("
            SELECT c.*, e.*, cid.CID_NOME
            FROM TB_CLIENTE c
            JOIN TB_ENDERECO e ON e.END_ID = c.CLI_ENDERECO_ID
            JOIN TB_CIDADE cid ON cid.CID_ID = e.END_CIDADE_ID
            WHERE c.CLI_ID = :id
        ");

        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
