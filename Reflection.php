<?php

require_once "exception/validationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request=new LoginRequest();
$request->username="fajar";
$request->password="password123";
// ValidationUtil::validate($request); 

ValidationUtil::validateReflection($request);

class RegisterUserRequest{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register=new RegisterUserRequest();
$register->name="Fajar";

ValidationUtil::validateReflection($register);
