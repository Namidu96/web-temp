<?php

/**

 * Description of User

 *

 * @author sublime holdings

 * @web www.sublime.lk

 * */
class Database {


//    private $host = 'localhost';
//    private $name = 'gallnwxt_romayavilla';
//    private $user = 'gallnwxt_romayavilla';
//    private $password = '0rGm5Szxcg]O';



     private $host = 'localhost';
     private $name = 'web-temp';
     private $user = 'root';
     private $password = '';

    public function __construct() {

        mysql_connect($this->host, $this->user, $this->password) or die("Invalid host  or user details");

        mysql_select_db($this->name) or die("Unable to select database");
    }

    public function readQuery($query) {



        $result = mysql_query($query) or die(mysql_error());

        return $result;



//        $qu1 = explode(" ", $query)[0];
//
//        if ($qu1 === 'SELECT' || $qu1 === 'select') {
//            $result = mysql_query($query) or die(mysql_error());
//            return $result;
//        } else {
//            if (!isset($_SESSION)) {
//                session_start();
//            }
//
//            if (
//                    $_SESSION["LOGIN"] === true &&
//                    parse_url($_SERVER['HTTP_REFERER'])["host"] == $this->domain &&
//                    $_SESSION['TOKEN'] == 'Vr-EFV!Fn6qCCUHYF2&cFzLw_thehorizonvilla-H5Dx'
//            ) {
//
//                $result = mysql_query($query) or die(mysql_error());
//                return $result;
//            } else {
//                sendSecurityAlert($this->domain);
//            }
//        }
    }

}
