<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function categories($id)
    {
        $categories = DB::table("categories")->where("id", '=', $id)->get();
        return $categories;
    }
    public function index()
    {
        $book_outstandings = DB::table("books")
            ->where('publisher_id', '=', 1)
            ->get();//Lấy sách nổi bật

        $categories = DB::table('categories')->where('cate_id', '=', null)->get();
        $cate = new CategoryController();
        $subcategories = [];//menu con 1
        $subcategories1=[];//menu con 2
        $subcate1_id = [];//id menu con 2
        foreach ($categories as $category) {
            if ($cate->checkCategory($category->id)) {//nếu có tồn tại id sách tại danh mục khác thì lấy ra id
                $category->subcategory = $cate->checkCategory($category->id);
                foreach ($category->subcategory as $subcategory) { //lấy thông tin danh mục qua từng id con
                    $subcategories[$subcategory] = json_decode(json_encode($this->categories($subcategory)), true);//chuyển từ object sang array

                    if ($cate->checkCategory($subcategory)) {//check tiếp danh mục con đó nếu tồn tại id tại cate_id của danh mục khác thì lấy id ra
                        $subcate1_id[$subcategory] = $cate->checkCategory($subcategory);//lưu lại id menu con 2
                        foreach ($cate->checkCategory($subcategory) as $subcategory1) {
                            $subcategories1[$subcategory1] = json_decode(json_encode($this->categories($subcategory1)), true);//lấy thông tin danh mục con 2 qua id 
                        }
                    }else{
                        $subcate1_id[$subcategory] = [];
                    }
                }
            } else {
                $category->subcategory = [];
            }
        }
        return view('clients.home', compact(['book_outstandings', 'categories', 'subcategories','subcategories1','subcate1_id']));
    }
}
