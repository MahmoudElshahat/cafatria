<?php 
namespace App\Models\admin;
use MvcPhp\Database\Model;
// use Model;
class products extends Model
{
    public function __construct($table)
    {
     Model::$table=$table;
    }
}
new products("products");