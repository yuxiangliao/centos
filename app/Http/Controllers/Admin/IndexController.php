<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Psy\Test\Exception\RuntimeExceptionTest;

class IndexController extends CommonController
{
    public function index(Request $request){
        return view('admin.index');
    }

    public function info(Request $request){
        return view('admin.info');
    }
}
