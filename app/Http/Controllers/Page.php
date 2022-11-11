<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class Page extends Controller { 
    public function show($id) { 
        return $id ; 
    }  
    public function showOne($id) { 
        $pages = 
[ 1 => 'страница 1', 
2 => 'страница 2', 
3 => 'страница 3', 
4 => 'страница 4', 
5 => 'страница 5', ] ;
        return $pages[$id] ; 
}
public function showAll($param1, $param2) { 
    return $param1 . ' ' .$param2; 
}  
public function showF($num1, $num2) { 
    return $num1+$num2 ;
}
}