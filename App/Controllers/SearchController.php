<?php 
namespace App\Controllers;

use App\Models\Product;
use App\Models\Products;
use PDO;

class SearchController{

  public static function search(){

      $search=$_POST['search'];
      $sql='SELECT * FROM products WHERE  name like "%'.$search.'%"' ;
      $products=Product::query($sql)->fetchAll(PDO::FETCH_ASSOC);
     return view("search",["products"=>$products]);
  }


}