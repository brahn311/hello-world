<?php
class DBStatic
{
  public static $db_user = 'aomana03';
  public static $db_password = '1234';
  public static $db_database_name = 'PHP_OO_BD';

  public static function conect()

  {
    echo "Conectando con: " . self::$db_user . ":" . self::$db_password . ":" . self::$db_database_name;
  }
}

echo DBStatic::$db_user;
echo "\n";
echo DBStatic::$db_password;
echo "\n";
echo DBStatic::$db_database_name;
echo "\n";
DBStatic::conect();
echo "\n";

?>
