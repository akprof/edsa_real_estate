<?php
class Model {
    private $conn;
    private $table;

    public function __construct($db, $tb) 
    {
        $this->conn = $db;
        $this->table = $tb;
    }

    // Sanitize data coming from users
    public function sanitize($data) 
    {
        $clean_data = [];
        //sanitize post data
        foreach ($data as $key => $value) {
            $clean_data[$key] = htmlspecialchars(strip_tags($value));    
        }
        return $clean_data;
    }

    // Select all records from the table
    public function readRecords($where_clause = 1, $data = [], $column = "*")
    {
        $query = "SELECT $column FROM $this->table WHERE $where_clause ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($data);
        return $stmt->fetchAll();
    }

    // Select a single record from the table
    public function readSingleRecord($where_clause = 1, $data = [], $column = "*")
    {
        $query = "SELECT $column FROM $this->table WHERE $where_clause ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($data);
        return $stmt->fetch();
    }

    // Create a record in the table
    public function create($column, $value, $data = [])
    {
        $query = "INSERT INTO $this->table($column) VALUES ($value) ";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute($data);
    }

    // Update table record
    public function update($column, $where_clause, $data = [])
    {
        $query = "UPDATE $this->table SET $column WHERE $where_clause ";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute($data);
    }

    // Delete table record
    public function delete($where_clause, $data = [])
    {
        $query = "DELETE FROM $this->table WHERE $where_clause ";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute($data);
    }


}