<?php 
namespace App\Controllers\admin;

use App\Models\admin\products;
use App\Models\admin\Categories;
use App\Models\admin\orders;
use App\Models\admin\order_product;
use App\Models\admin\users;
use App\Models\User;
use PDO;

class orderController
{
//  ==============================================================

// ================================================================
public function index(){
    $where = "";
    if(request()->get('userId'))
    {   $id= request()->get('userId');
        $where = "where orders.user_id = $id";

    }
    $sql="SELECT
            orders.id as ordr_id,
            users.id as usr_id,
            users.email,
            users.room_no,
            status,
            total_price,
            deliverd_at
    FROM orders
    JOIN users
    ON
    orders.user_id =users.id $where";
    $user_orders=orders::query($sql)->fetchAll(PDO::FETCH_ASSOC);
    $users=users::get();
    return view("Dashboard/orders/index",["user_orders"=>$user_orders, "users" => $users]);
}
//  ==============================================================


public function cancle(){

        $id=request()->get('id');
        $value=["status"=>"cancled"];
        orders::update($value,$id);
      return back();
}


public function to_delvery(){

    $id= $id=request()->get('id');
    // dump($id);
    $value=["status"=>"out for delivery"];
    orders::update($value,$id);
  return back();
}


public function done(){

    $id= $id=request()->get('id');
    // dump($id);
    $date=date('Y/m/d h:i:s',time());
    // dump($date);
    $value=["status"=>"done","deliverd_at"=>$date];
    orders::update($value,$id);
    return back();
}
// ================================================================
public function delete(){
    $id= $id=request()->get('id');
    order_product::destory("order_id",$id);
    orders::destory("id",$id);
    return back();
}

// =========================================================
public function userOrder(){
    // users.email,
    $id=$_POST["userId"];
    $sql="SELECT
             *,
             orders.id as ordrId,
             order_product.id as orPrId,
             products.id as proId,
             users.email
            FROM orders
            JOIN order_product ON orders.id = order_product.order_id
            JOIN products ON order_product.product_id = products.id
            join users ON users.id = $id
            where orders.user_id = $id";

    $user_orders=orders::query($sql)->fetchAll(PDO::FETCH_ASSOC);
    // dump($user_orders);
    $users=users::get();
  
    return view("Dashboard/orders/userorder",["user_orders"=>$user_orders, 'users'=>$users]);
}



public function showOrderDEtails()
{
        dump(request()->get());
        $orderId = request()->get('id');
        $userId = request()->get('userId');
        $sql = "SELECT order_product.price,image,name
        FROM products ,order_product,orders
        WHERE order_product.order_id=$orderId 
        and `product_id`=products.id 
        AND orders.user_id=$userId";
        $orderDetails = orders::query($sql);
        // dump($orderDetails);
        // $details=true;
        // dump($orderDetails);
        return view("Dashboard/orders/orderdetails",["orderDetail"=>$orderDetails]);
}



}