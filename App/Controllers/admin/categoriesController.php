<?php
namespace App\Controllers\admin;
use App\Models\admin\Categories;
use App\Models\admin\Pages;
use App\Controllers\controller;
use App\Models\admin\Products;

class categoriesController
{

   public function index()
   {
      $Data= Categories::get();
      return view('Dashboard/categories/index',["Data"=>$Data]);
   }  
// =================================================
   public function add()
   {
      return view('Dashboard/categories/add');
   }  
// =================================================
public function store()
{   
   $CategorieData=[
      "name"=> request()->post('name'),
   ];
   Categories::create($CategorieData);

   return back();
} 

// =================================================
   public function edit()
   {
      $id = request()->get('id');
      $categorie=Categories::find("id",$id);
      return view('Dashboard/categories/edite',["categorie"=>$categorie]);
   }  

// =================================================
public function update()
{
       $value=["name"=>request()->post("name")];
       $id = request()->post("id");
       Categories::update($value, $id);

       redirectTo('admin/categories');
}  


// ======================================================
   public function delete()
   {
      $id = request()->get("id");
      Categories::destory("id",$id);
      redirectTo('admin/categories');
   } 
   
// =================================================
   
    








}//end class






