<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Exception;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    private $cached_category;

    public function setCategory(){
        $this->cached_category = DB::table('categories')->get();
    }

    public function getCategory(){
        return $this->cached_category;
    }

    public function displayCategory(int $category){
        $data = [];
        $this->setCategory();
        try{
            $data = Category::where('id',$category)->get();
        }catch(Exception $e){
        }
        return view('category',['data'=>$data]);
    }

    public function displayBook(int $book){
        $data = [];
        $this->setCategory();
        try{
            $data = Book::where('id',$book)->get();
        }catch(Exception $e){
        }
        return view('book',['data'=>$data]);
    }

    public function displayHome(){
        $this->setCategory();
        return view('home',[
            'data'=>Book::paginate(3)
        ]);
    }

    public function displayContact(){
        return view('contact');
    }
}
