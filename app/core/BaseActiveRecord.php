<?php

use PDO;
use PDOException;

class baseActiveRecord
{
    public $pdo;
    public $tablename;
    public $dbfields = array();

    public function __construct()
    {
        $this->setupConnection();
        $this->getFields();
    }

    public function setupConnection()
    {
        if (!isset($this->pdo)) {
            try {
                $config = require 'app/config/dbAuthorisation.php';
                $this->pdo = new PDO("mysql:dbname=" . $config['name'] . "; host=" . $config['host'] . "; char-set=utf8", $config['user'], $config['password']);
            } catch (PDOException $ex) {
                exit("Connection faild" . $ex->getMessage());
            }
        }
    }

    public function getFields()
    {
        $stmt = $this->pdo->query("SHOW FIELDS FROM " . $this->tablename);
        while ($row = $stmt->fetch()) {
            $this->dbfields[$row['Field']] = $row['Type'];
        }
    }

    public function find($id)
    {
        $sql = "SELECT * FROM " . $this->tablename . " WHERE id=$id";
        $stmt = $this->pdo->query($sql);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
        $ar_obj = new static();
        foreach ($row as $key => $value) {
            $ar_obj->$key = $value;
        }
        return $ar_obj;
    }

    public function getData() {
        foreach ($this->dbfields as $field => $field_type) {
            $value = $this->$field;
            if (strpos($field_type, 'int') === false) $value = "'$value'";
            $fields[] = $field;
            $values[] = $value;
        }
        return [$values, $fields];
    }

    public function findAll($where = '') {
        $sql = "SELECT * FROM " . $this->tablename . ' ' . $where;
        $stmt = $this->pdo->query($sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!$rows) {
            return null;
        }

        $ar_objs = array();
        foreach ($rows as $row) {
            $obj = new static();
            foreach ($row as $key => $value) {
                $obj->$key = $value;
            }
            array_push($ar_objs, $obj);
        }

        return $ar_objs;
    }

    function save() {
        [$values, $fields] = $this->getData();

        if (isset($this->id)) {
            $countFields = count($fields);
            for ($i = 0; $i < $countFields; $i++) {
                $fields_list[] = $fields[$i] . ' = ' . $values[$i];
            }
            $sql = "UPDATE " . $this->tablename . " SET " . join(', ', array_slice($fields_list, 1)) . " WHERE ID=" . $this->id;
        } else {
            $sql = "INSERT INTO " . $this->tablename . " (" . join(', ', array_slice($fields, 1)) . ") VALUES(" . join(', ', array_slice($values, 1)) . ")";
        }

        return $this->pdo->query($sql);
    }

    public function delete()
    {
        $sql = "DELETE FROM " .$this->tablename . " WHERE ID=" . $this->id;
        $stmt = $this->pdo->query($sql);
        if ($stmt) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            print_r($this->pdo->errorInfo());
        }
    }
}