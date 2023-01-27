<?php
/** created by : kingston-5 @ 8/01/23 **/

namespace kingstonenterprises\application\models;

use kingstonenterprises\core\Application;
use kingstonenterprises\core\Model;

abstract class DbModel extends Model
{
    abstract public static function tableName(): string;

    public static function primaryKey(): string
    {
        return 'id';
    }

    public function save()
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => ":$attr", $attributes);
        $statement = self::prepare("INSERT INTO $tableName (" . implode(",", $attributes) . ") 
                VALUES (" . implode(",", $params) . ")");
        
        foreach ($attributes as $attribute) {
            $statement->bindValue(":$attribute", $this->{$attribute});
        }
        $statement->execute();
        return true;
    }
    
    public static function merge($arr1, $arr2){
    	$new = array();
    	for($i = 0; $i < count($arr1); $i++){
    		array_push($new, $arr1[$i] . " = " . $arr2[$i]);
    	}
    	
    	return $new;
    }
    
    public function update(int $id)
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => ":$attr", $attributes);
        $paramlist = $this->merge($attributes, $params);
     
        $statement = self::prepare("UPDATE $tableName SET " . implode(", ", $paramlist) ." WHERE id = ". $id ."");
        
        foreach ($attributes as $attribute) {
            $statement->bindValue(":$attribute", $this->{$attribute});
        }
        $statement->execute();
        return true;
    }

    public static function prepare($sql): \PDOStatement
    {
        return Application::$app->db->prepare($sql);
    }
    
    public static function getAll()
    {
        $tableName = static::tableName();
        $statement = self::prepare("SELECT * FROM $tableName");
        
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_CLASS);
    }
    
    public static function findAll($where)
    {
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode(" AND ", array_map(fn($attr) => "$attr = :$attr", $attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");
       
        foreach ($where as $key => $item) {
            $statement->bindValue(":$key", $item);
        }
        $statement->execute();
        //var_dump($statement->fetchAll(\PDO::FETCH_CLASS));
        //exit();
        return $statement->fetchAll(\PDO::FETCH_CLASS);
    }

    public static function findOne($where)
    {
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode("AND", array_map(fn($attr) => "$attr = :$attr", $attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");
        foreach ($where as $key => $item) {
            $statement->bindValue(":$key", $item);
        }
        $statement->execute();
        return $statement->fetchObject(static::class);
    }
}
