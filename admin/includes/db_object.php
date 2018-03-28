<?php
/**
 * Created by PhpStorm.
 * User: williamdelrosario
 * Date: 3/28/18
 * Time: 7:42 AM
 */

class Db_object
{
    protected static $db_table = 'users';

    public static function find_all()
    {
        return static::find_this_query("SELECT * FROM " . static::$db_table . " ");
    }

    public static function find_user_by_id($user_id)
    {
        global $database;

        $the_result_array= static::find_this_query(
            "SELECT * FROM " . static::$db_table . " WHERE id=$user_id LIMIT 1");

        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public static function find_this_query($sql)
    {
        global $database;
        $result_set = $database->query($sql);
        $the_object_array = array();

        while ($row = mysqli_fetch_array($result_set)) {

            $the_object_array[] = static::instantiation($row);

        }
        return $the_object_array;
    }

    public static function instantiation($the_record)
    {
        $calling_class = get_called_class();
        $the_object = new $calling_class;

//        $the_object->id         = $found_user['id'];
//        $the_object->username   = $found_user['username'];
//        $the_object->password   = $found_user['password'];
//        $the_object->first_name = $found_user['first_name'];
//        $the_object->last_name  = $found_user['last_name'];

        foreach ($the_record as $the_attribute => $value){
            if ($the_object->has_the_attribute($the_attribute)){
                $the_object->$the_attribute = $value;
            }
        }

        return $the_object;
    }

    private function has_the_attribute($the_attribute)
    {
        $object_properties = get_object_vars($this);

        return array_key_exists($the_attribute, $object_properties);
    }
}