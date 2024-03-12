<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class CategoryController extends Controller
{
    public function displayCreateCategory()
    {
        return view('admin.create_category');
    }
    public function displayListCategory()
    {
        return view('admin.list_category');
    }
}
