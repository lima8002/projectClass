<?php
namespace oldspice;

class Navigation {
    private static $nav_items = array(
        array('name' => 'Home', 'link' => 'index.php'),
        array('name' => 'Login', 'link' => 'login.php'),
        array('name' => 'Register', 'link' => 'register.php'),
        array('name' => 'Contact', 'link' => 'contact.php'),
        array('name' => 'About', 'link' => 'about.php')
    );
    private static $auth_items = array(
        array('name' => 'Home', 'link' => 'index.php'),
        array('name' => 'Contact', 'link' => 'contact.php'),
        array('name' => 'About', 'link' => 'about.php'),
        array('name' => 'Logout', 'link' => 'logout.php')
    );
    public static function getNavigation(){
        // check if session is not enabled
        if(session_status() == PHP_SESSION_NONE ) {
            //if not enabled, enable it
            session_start();
        } 
        if ( isset($_SESSION['auth']) ){
            // when using static, refer to the class as self
            // when private, use this
            return self::$auth_items;
        }
        else {
            return self::$nav_items;
        }
    }
}
?>