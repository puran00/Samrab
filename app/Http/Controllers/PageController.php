<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function RegPage(){
        return view('registration.reg');
    }

    public function AuthPage(){
        return view('authorization.auth');
    }

    public function admin(){
        $categories = Category::all();
        $contents = Content::all();
        return view('admin.admin', ['categories'=>$categories],['contents'=>$contents]);
    }

    public function category(){
        return view('category.newCategory');
    }

    public function content(){
        $categories = Category::all();
        return view('content.addContent',['categories'=>$categories]);
    }
}
