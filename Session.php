<?php
// if (session_status() === PHP_SESSION_NONE) {
//   session_start();
// }

class Session
{
public static function init(){
  session_start();
}

public static function set($key,$value){
    $_SESSION[$key] = $value;
}

public static function get($key){
   if (isset($_SESSION[$key])){
    $result = $_SESSION[$key];
}

if (isset($result)) {
    return $result;
}else{
  return false;
 }
}

public static function checkSession(){
  //  self::init();
   if(self::get("login") == false){
    self::destroy();
   header("Location:login.php");
  }
}

public static function checkLogin(){
  //  self::init();

  //  var_dump($_SESSION); exit;
   if(self::get("login") == true){

   header("Location:index.php");
   exit();
  }
}

public static function destroy(){
   session_destroy();
   header("Location:login.php");
 }
}


// // session_start();
// // Class funcs for are better for security. I think the naming tells pretty mush what they do.
// class Session
//     {
//     public static function init(){
//       session_start();
//     }

//     public static function set($key,$value){
//         $_SESSION[$key] = $value;
//         // var_dump($_SESSION); exit;
//     }

//     public static function get($key){
//       // var_dump($_SESSION[$key]); exit;
//        if (isset($_SESSION[$key])){
//         $result = $_SESSION[$key];
//     }

//     if (isset($result)) {
//         return $result;
//     }else{
//       return false;
//      }
//     }

//     public static function checkSession(){
//       self::init();
//       //var_dump($_SESSION); exit;
//        if(self::get("login") == false){
//         self::destroy();

//         // redirect to login.php
//        header("Location: login.php");
//       }
//     }

//     public static function checkLogin(){
//        self::init();
       
//        if(self::get("login") == true){
//          // redirect to index.php
//         //  echo("I'm inside"); exit;
//         //var_dump(self::get("login")); exit;
//        header("Location: index.php");
//        //exit;
//       }
      
//     }

//     public static function destroy(){
//        session_destroy(); // destroys session
//       // exit();
//        header("Location:login.php");// redirect to login.php
//      }
//     }