<?php 
namespace App\Models\admin;
use MvcPhp\Database\Model;
// use Model;
class rooms extends Model
{
    public function __construct($table)
    {
     Model::$table=$table;
    }
 
}
new rooms("rooms");