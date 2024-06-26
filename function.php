<?php 

function error(){
    echo "<h1> 404 View file not found </h1>";
}


function DD($view){
    $view_file = 'views'.'/'.$view.'.php';
   if (file_exists($view_file)) {
        require $view_file;
   }else{
    echo "View File မရှိပါ";
   }
}
