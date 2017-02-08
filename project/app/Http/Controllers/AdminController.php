<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //加载后台页面
    public function getIndex(){
        // echo "这是后台页面";
        return view('Admin.index');
    }
}
