<?php
/**
 *
 */
class Connection
{
  private static $_user = 'root';
  private static $_pass = '12345678';
  private static $_instance = null;

  public function getInstance()
  {
    if(is_null(self::$_instance)) {
      self::$_instance = new PDO('mysql:host=localhost;dbname=movie_app',
        self::$_user, self::$_pass);
    }

    return self::$_instance;
  }
}

?>
