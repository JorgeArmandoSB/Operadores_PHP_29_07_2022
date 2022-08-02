<?php
    
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json");
    // print_r(json_encode((object) [
    //     "Mensaje" => (string) "Realizar los operadores de la calculadora",
    //     "Servidor" => $_SERVER["HTTP_HOST"]
    // ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG));

    $_DATA = file_get_contents("php://input");
    $_DATA = json_decode($_DATA, true);
    extract($_DATA);

    
    var_dump("la respuesta es: ". $_DATA["ans"] . " "  .$_SERVER['HTTP_HOST']);
   

    

   

   
  
  

?>