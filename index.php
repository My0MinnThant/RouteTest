<?php

// require 'app/controllers/controllers.php';
require 'app/controllers/test.php';
require 'function.php';




// $controller = "HomeController";


// if (function_exists($controller)) {
//     call_user_func($controller);

   

    
// }else{
//     echo "404";
// }



$url = ($_SERVER['REQUEST_URI']);

if ($url == '/') {
    $dd = "HomeController";
    if (function_exists($dd)) {
        call_user_func($dd);
      
}
}elseif(($url == '/blog')) {
    $dd = "MyController";
    if(function_exists($dd)){
        call_user_func($dd);
    }
}elseif(($url == '/about')) {
    $dd = "BBController";
    if(function_exists($dd)){
        call_user_func($dd);
    
    }
}else{
    error();
}
