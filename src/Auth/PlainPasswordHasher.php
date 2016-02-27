<?php
namespace App\Auth;

use Cake\Auth\AbstractPasswordHasher;

class PlainPasswordHasher extends AbstractPasswordHasher{

    public function hash($password){
//        return sha1($password);
        return $password;
    }

    public function check($password, $hashedPassword){
//        return sha1($password) === $hashedPassword;
        return $password === $hashedPassword;
    }
}
