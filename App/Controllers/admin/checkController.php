<?php

namespace App\Controllers\admin;

use App\Controllers\controller;
use App\Models\admin\orders;
use App\Models\admin\users;
use App\Models\User;
use PDO;
use Exception;

class checkController 
{

        public function index()
        {
                $users = users::get();
                $Orders = orders::get();
               
                return view("Dashboard/orders/checks", ["users" => $users, "Orders" => $Orders]);
        }

        public function get_check()
        {
                try {
                        $start = request()->post('start');
                        $end = request()->post('end');
                        $id = request()->post('userId');
                      
                        // dump($end);
                  
                        
                  

                        if($start != "" || $id != "" || $end != ""){
                             if($start != "" && $id && "" && $end != "") {
                                 $filterOrders = orders::query("SELECT * FROM orders WHERE `created_at` 
                                between '$start 00:00:00' and '$end 23:59:59' and oreders.user_id =$id; ");
                              }          
                          elseif ($start !="" || $end !=""){
                                        if($start !="" && $end !=""  )
                                        {
                                                $filterOrders = orders::query("SELECT * FROM orders WHERE `created_at` 
                                                between '$start 00:00:00' and '$end 23:59:59';");
        
                                        }elseif($start !=""){
                                                $filterOrders = orders::query("SELECT * FROM orders WHERE `created_at` 
                                                between '$start 00:00:00' and 'date(Y-m-d)';");
                                            
                                        }else{
                                                $filterOrders = orders::query("SELECT * FROM orders WHERE `created_at` 
                                                between '00-00-00 00:00:00' and '$end 23:59:59' ;");
                                        }
                                  
                                               
                                }else{ $filterOrders = orders::query("SELECT * FROM orders WHERE `user_id` = $id");}
        
                    
               

                                $users = users::get();
                                return view("../Dashboard/orders/checks", ["users" => $users, "Orders" => $filterOrders]);
                        
                        }else{

                                redirectTo('admin/checks');
                        }
                     
               
                
                } catch (Exception $e) {
                        dump("error" . $e->getMessage());
                }
        }

        public function showOrderDEtails()
        {
           
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
}//end class
