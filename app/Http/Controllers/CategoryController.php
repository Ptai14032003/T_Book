<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\select;

class CategoryController extends Controller
{
    //
    public function index(request $request){
        // $categories = DB::table('categories as c')
        //     ->join('categories as p', function (JoinClause $join) {
        //         $join->on('c.cate_id', '=', 'p.id')->where('c.cate_id', '<>', 'null');
        //     })
        //     ->select('c.id', 'c.category_name', 'c.description', 'p.category_name as parent')
        //     ->get();
        $categories = Category::all();
        // $categories = DB::table('categories as c')
        //         ->when(function ($query) {
        //             return $query->whereNotNull('cate_id')
        //                 ->join('categories as p', 'c.cate_id', '=', 'p.id')
        //                 ->select('c.id', 'c.category_name', 'c.description', 'p.category_name as parent');
        //                 })
        //         ->when(function ($query) {
        //             return $query->whereNull('cate_id')
        //             ->select('c.id', 'c.category_name', 'c.description', 'c.cate_id as parent');
        //         })
        //     ->get();
           
        $title = "List of Category";
        return view('categories.list', compact(['categories', 'title']));
    }

    public function store(CategoryRequest $request){
        $title = "Add Book Category";
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $category = Category::create($params);
            if($category->id){
                Session::flash('success', 'Add new Book Category Successfully');
            }
        }
        $categories = Category::all();
        return view('categories.store', compact(['title','categories']));
    }
    public function checkCategory($id){
        //$category = DB::table('categories')->where('id', $id)->first();
        $parent_category = Category::where('cate_id', $id)->get();
        $a = [];
        if($parent_category){
            foreach($parent_category as $pa){
                $a[]=$pa->id;
            }
        }
        return $a;
    }

    public function update(CategoryRequest $request,$id){
        $title = "Update Book Category";
        $category = DB::table('categories')->where('id', $id)->first();
        $parent_category[] = $this->checkCategory($id);
        $arr = array_reduce($parent_category, 'array_merge', []);

            while(true){
                $a = [];
                for ($i = 0; $i < count($parent_category); $i++) {
                    if(!empty($this->checkCategory($parent_category[$i]))){
                        $a[] = $this->checkCategory($parent_category[$i]);
                        $a = array_reduce($a, 'array_merge', []);
                    }
                }
                if(!empty($a)) {
                    $arr= array_merge($arr,$a);
                    $parent_category = $a;
                    $a = [];
                }else{
                    break;
                }
            }
        array_push($arr,(int)$id);
        $m='';
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $cate_id = (int)$params['cate_id'];
            if(in_array($cate_id,$arr)){
                $m = "Không thể đặt danh mục cha thành danh mục con của danh mục con (hoặc chính nó)";
            }else{
                $category = Category::where('id', $id)->update($params);
                if($category){
                    Session::flash('success', 'Update Book Category Successfully');
                    return redirect()->route('edit_category', ['id' => $id]);
                }
            }
        }
        $parent_id = $category->cate_id;
        $parent = '';
        if($parent_id){
            $parent = Category::where('id', $parent_id)->first();
        }
        $categories = Category::all();
        return view('categories.update', compact(['title', 'category','categories','parent','m']));
    }
    public function destroy($id){
        if(!empty($this->checkCategory($id))){
            $parent_category[] = $this->checkCategory($id);
            $arr = array_reduce($parent_category, 'array_merge', []);
                while(true){
                    $a = [];
                    for ($i = 0; $i < count($parent_category); $i++) {
                        if(!empty($this->checkCategory($parent_category[$i]))){
                            $a[] = $this->checkCategory($parent_category[$i]);
                            $a = array_reduce($a, 'array_merge', []);
                        }
                    }
                    if(!empty($a)) {
                        $arr= array_merge($arr,$a);
                        $parent_category = $a;
                        $a = [];
                    }else{
                        break;
                    }
                }
                for ($i = (count($arr) - 1); $i >=0; $i--) {  
                    $cateDL= DB::table('categories')->where('id', $arr[$i])->delete();
                }    
        }
        $categoryDL = DB::table('categories')->where('id', $id)->delete();
        if($categoryDL){
            Session::flash('success', 'Delete This Category Successfully');
            return redirect()->route('categories');
        }

    }
}




