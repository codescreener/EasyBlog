<?php
  define('DB_SERVER', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS_KEY', 'hb28180@');
  define('DB_NAME', 'widget_corp');
//    $DB_SERVER = DB_SERVER;
    $DB_USER = DB_USER;
    $DB_PASS_KEY = DB_PASS_KEY;
    $DB_NAME = DB_NAME;

/*$constants: associative array*/
    function modifyConstants($constants) {
        foreach ($constants as $constant => $value) {
            $GLOBALS[$constant] = $value;
//            echo $GLOBALS[$constant].'<br>';
        }
    }
?>
