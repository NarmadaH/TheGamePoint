<?php
/**
 * Created by PhpStorm.
 * User: Achini
 * Date: 4/30/2016
 * Time: 1:05 PM
 */

Class DBConnection{
    private static $server_name = "localhost";
    private static $user_name = "root";
    private static $password = "";
    private static $db_name= "the game point";
    private static $conn;

    protected function __construct()
    {
    }

    // get a connection instance
    static function get_database_connection()
    {
        //Backup::backup_tables('localhost','root','Veerjay@1','presentia_db');
        if(null===static::$conn)
        {
            $conn = new mysqli(static::$server_name, static::$user_name, static::$password, static::$db_name);
            if ($conn->connect_error) {

                die("Connection failed: " . $conn->connect_error); // Check connection
            }
        }else
        {
            echo "Connected successfully";
            return static::$conn;
        }
        return $conn;
    }

    static function close_database_connection($conn)
    {
        mysqli_close($conn);
    }

}
?>