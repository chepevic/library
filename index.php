<?php
require_once("config/parameters.php");
require_once("config/autoload.php");
//require_once("models/conexion.php");

$params="";
//* SAVE IF THE URL COMES WITH PARAMETERS

//* SAVE WHAT WE GET IN THE URL
if(isset($_GET["url"])){
    $url=$_GET["url"];
    $url=explode("/",$url);
}

function error(){
    //autoload.php incluye el controlador
    $error= new errorController();
    $error->index();
}
//* RUN WHEN THE CONTROLLER OR METHOD DON'T EXIST


if(!empty($url[0])){
    $controller_name=$url[0]."Controller";
    $model=$url[0];
}
else{
    $controller_name=CONTROLLER_DEFAULT;
}
//* END ADD CONTROLLER
if(!empty($url[1])){
    $method=$url[1];
}
else{
    $method=METHOD_DEFAULT;
}
//* END ADD METHOD

if(!empty($url[2])){
    
    for($i=2;$i<count($url);$i++){
        $params.=$url[$i].",";
    }
    $params=trim($params,",");
}
//* END ADD PARAMETERS


//* VERIFY IF THE CONTROLLER EXITS
$controller_ruta="controllers/".$controller_name.".php";
    if(file_exists($controller_ruta)){

        //* autoload.php ADD CONTROLLER
        $controller=new $controller_name();
        //* ADD METHOD AND PARAMETERS
        if(method_exists($controller, $method)){
            $controller->{$method}($params);
        }
        else{
           error();
        }
    }
        else{
        error();
        }