<?php 

namespace MvcPhp\Database;

class Model{

    protected static  $table;

    public static function get(){
        return \DB::selectAll(Model::$table);
    }

    public static function find($col,$value){

        return \DB::selectone(Model::$table,$col,$value);
    }
    public static function findone($key , $val){

        return \DB::selectsingle(Model::$table,$key,$val);
    }


    public static function create($arr_data){
       
        return \DB::insert(Model::$table,$arr_data);
    }

    public static function update($arr_data,$id){
       
        return \DB::update_item(Model::$table,$arr_data,$id);
    }

    public static function destory($colName,$id){
       
        return \DB::delete(Model::$table,$colName,$id);
    }

    public static function query($query){
       
        return \DB::sql_query($query);
    }

    public static function join($sql, $table1,$table1_Col,$table2,$table2_Col){

        return \DB::fjoin($sql, $table1,$table1_Col,$table2,$table2_Col);
    }







    public static function findAll($key,  $val)
    {

        return \DB::selectAllBaseBydKey(Model::$table, $key, $val);
    }
    
}