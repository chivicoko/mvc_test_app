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
        return self::$db ?: new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);   
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


