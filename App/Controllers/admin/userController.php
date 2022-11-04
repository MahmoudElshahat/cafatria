<?php

namespace App\Controllers\admin;
use App\Models\admin\users;
use App\Models\admin\rooms;
use App\Models\admin\Products;

class userController
{

   public function index()
   {
     $usersData= users::get();
   //   dump($usersData);
      return view('../Dashboard/users/index',["usersData"=>$usersData]);
   }  
// =================================================
   public function add()
   {
      $rooms=rooms::get();
      return view('../Dashboard/users/add',["rooms"=>$rooms]);
   }  
// =================================================
public function store()
{   


   $file = $_FILES['image'];
            $file_type = $_FILES['image']['type'];
            $arr = explode('/', $file_type);
            $ext = end($arr);
            $image = time() . ".$ext";
            move_uploaded_file($file['tmp_name'],"../public/assets/images/".$image);
   $userData=[
      "name" => request()->post('name'),
      "image"=>$image,
      "email"=>request()->post('email'),
      // "password"=>$_POST["password"],
      "password"=> password_hash($_POST["password"],PASSWORD_DEFAULT),
      "room_no"=>request()->post('room'),
      "ext"=>request()->post('ext')
   ];
   users::create($userData);
  return  header('Location:'.$_SERVER["HTTP_REFERER"]);
   // return  dump($_POST["name"]);
} 

// =================================================
   public function edite()
   {
      $singleuser=users::find("id",$_POST["userid"]);
      return view('../Dashboard/users/edite',["user"=>$singleuser]);
   }  

// =================================================

   public function delete()
   {
      
      users::destory("id",$_POST["userid"]);
      return  redirectTo('admin/users');
   } 
   
// =================================================
   
    








}//end class






