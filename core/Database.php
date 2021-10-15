<?php

class Database {
    private static $db = null;
    public $table;

    public function __construct()
    {
        self::$db = self::dbInstance();
    }

    private static function dbInstance()
    { 
        if(self::$db == null) {
            $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $pdo;
        }
        
        return self::$db;   
    }

    public function select($selects, $where, $order, $limit, $startFrom, $all = true)
    {
        $sql = 'SELECT ';
        $sql .= $selects != null ? " $selects " : ' * ';
        $sql .= "FROM {$this->table} ";
        $sql .= $where != null ? " WHERE $where " : '';
        $sql .= $order != null ? "ORDER BY $order" : '';
        if($limit != null) {
            $sql .= $startFrom != null ? " LIMIT $startFrom, $limit " : " LIMIT $limit ";
        }
        
        $query = $this->executeSql($sql);
        return $all ? $query->fetchAll() : $query->fetch();
    }

    public function insert(array $data = []) {
        $keyArray = array_keys($data);
        $keys = implode(', ', $keyArray);

        $valueArray = array_values($data);
        $values = "'".implode("', '", $valueArray)."'";

        $sql = "INSERT INTO $this->table ({$keys}) VALUES($values)";

        $query = $this->executeSql($sql);
        return $query ? self::$db->lastinsertid() : false;
    }

    public function update(array $data = [], $where = 0) {
        $params = $this->updateParams($data);

        $sql = "UPDATE {$this->table} SET {$params} WHERE {$where}";
        $query = $this->executeSql($sql);

        return $query ? true : false;
    }

    private function updateParams($data)
    {
        $params = '';
        foreach ($data as $key => $value) {
            $params .= "$key='$value', ";
        }
        return rtrim($params, ', ');
    }

    private function executeSql($sql)
    {
        return self::$db->query($sql);
    }


}


