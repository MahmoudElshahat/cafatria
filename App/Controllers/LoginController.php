<?php

namespace App\Controllers;

use App\Models\Login;
use App\Models\user;
use MvcPhp\Cookie;

class LoginController
{
    protected $errors = [];
    public  $user;
    private $token;
    public function index()
    {
        if($this->isLogged())
        {
            return redirectTo('home');
        }
        return view('login', ['errors' => $this->errors]);
    }

    public function login()
    {
       if($this->isVaild())
       {
        if(request()->post('remember'))
        {
            cookie()->set('login', $this->token);
        }else{
          
            session()->set('login', $this->token );
            
        }

            return redirectTo('home');
       }else {
           return $this->index();
       }
    }
    public function isVaild()
    {
        $email = request()->post('email');
        $password = request()->post('password');

        if (!$email) {
            $this->errors[] = 'Please Insert your Email';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = 'Please Enter  Vaild Email ';
        }

        if (!$password) {
            $this->errors[] = 'Please Insert your password';
        }

        if (!$this->errors) {
            if (!$this->isVaildLogin($email, $password)) {
                $this->errors[] = 'Please Insert Valid Data';
            }
        }
        return empty($this->errors);
    }


    public function isVaildLogin($email, $password)
    {
        $user = user::findone('email', $email);
        if (!$user) {
            return false;
        }

        if(password_verify($password, $user['password']))
        {
            $token = sha1(time()*rand(1,200));
            $id = $user['id'];
            user::query("UPDATE users SET token='$token' where id=$id");
             $this->token = $token;
             $this->user = $user;
             
             return true;
        }
        return false;
    }

    public function isLogged()
    {

        if (cookie()->has('login')) {
            $token = cookie()->get('login');
        } else if (session()->has('login')) {
            $token = session()->get('login');
        } else {
            $token = '';
        }
        $user =  user::findone('token' , $token);
        $this->user = $user;
        if (!$user) return false;
        return true;
    }

    public function auth()
    {
        return $this->user;
    }
}
