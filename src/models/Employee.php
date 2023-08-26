<?php

require_once __DIR__ . '/connection.php';


class Employee {
    
    public static function getAll() {
        global $pdo;

        $query = "SELECT * FROM employees";
        $stmnt = $pdo->query($query);

        $data = [];
        while ($row = $stmnt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }

        return $data;
    }

    public static function delete($id) {
        global $pdo;// Usando sua conexão existente.
        $statement = $pdo->prepare("DELETE FROM employees WHERE id = ?");
        return $statement->execute([$id]);
    }
    
    
}
