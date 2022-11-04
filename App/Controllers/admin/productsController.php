<?php
namespace App\Controllers\admin;
use App\Models\admin\products;
use App\Models\admin\Categories;
use PDO;

class productsController
{
    public function index()
    {
      $sql="SELECT
                products.id,
                price,
                image,
                products.name as pName,
                categories.name as cName
               FROM products
               JOIN categories
               ON
               products.category_id =categories.id";
        $products=products::query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return view("../Dashboard/products/products",["products"=>$products]);
    }
    // add new product
    public function add()
    {
      $categoires= Categories::get();
      return view("../Dashboard/products/add",["categoiresData"=>$categoires]);
    }
    // get data and add product
    public function store()
    {
        if (request()->post()) {

            $name = request()->post('name');
            $price = request()->post('price');
            $category = request()->post('categorieId');

            $file = $_FILES['image'];
            $file_type = $_FILES['image']['type'];
            $arr = explode('/', $file_type);
            $ext = end($arr);
            $image = time() . ".$ext";
            move_uploaded_file($file['tmp_name'],"../public/assets/images/".$image);
              $data = [
                "name" => $name,
                "price" =>  $price,
                "image" => $image,
                "category_id" => $category,
              ];
            Products::create($data);
               return view("../Dashboard/products/add",["success" => "Product Added Successfully"]);
            }
    }

    public function edit()
    {
                $id= request()->get('id');
                 $product=products::find("id",$id);
                 $categories=Categories::get();
              return view("Dashboard/products/edit",["productData"=>$product,"categorieData"=>$categories]);
    }
    public function update()
    {
        if (request()->post()) {
            $id= request()->post('productId');
            $name=request()->post('name');
            $price=request()->post('price');
            $category=request()->post('categorieId');
       
            $file = $_FILES['image'];
          $image= request()->post('image');
          if($file['name'])
          {
            $file_type = $_FILES['image']['type'];
            $arr = explode('/', $file_type);
            $ext = end($arr);
            $image = time() . ".$ext";
            $path = base_path()."public/assets/images/$image";
      
            move_uploaded_file($file['tmp_name'],$path);
            
            
          }else{
            $image = products::query("select image from products where id = $id")->fetch(PDO::FETCH_ASSOC)['image'];
          }
          
            $data = [
              "name" => $name,
              "price" =>  $price,
              "image" => $image,
              "category_id" => $category,
            ];
              Products::update($data,$id);
              // dump("sucss");
               return back();
            }
        
    }
    // delete product
    public function delete()
    {
        $id = request()->get('id');
         products::destory("id",$id);
         return back();
    }
}