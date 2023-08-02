<?php

require_once "exception\ValidationException.php";
require_once "data\LoginRequest.php";
require_once "helper\Validation.php";

$loginRequest=new LoginRequest();
$loginRequest->username="fajar";
$loginRequest->password="fajar";

// validateLoginRequest($loginRequest);

// echo "VALID".PHP_EOL;

// menggunakan try catch
// try{
//     validateLoginRequest($loginRequest);
// }catch(ValidationException $exception){
//     echo "Error : {$exception->getMessage()}".PHP_EOL;
// }

// Multiple Try Catch
// try{
//     validateLoginRequest($loginRequest);
// }catch(ValidationException $exception){
//     echo "Error : {$exception->getMessage()}".PHP_EOL;
// }catch(Exception $exception){
//     echo "Error : {$exception->getMessage()}".PHP_EOL;
// }

// Menggunakan operator OR atau pipe |
try{
    validateLoginRequest($loginRequest);
}catch(ValidationException | Exception $exception){
    echo "Error : {$exception->getMessage()}".PHP_EOL;

    var_dump($exception->getTrace());

    echo $exception->getTraceAsString().PHP_EOL;
}finally{
    echo "Error atau engggak akan tetap dieksekusi".PHP_EOL;
}