<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class ProductController extends Controller
{
    public function displayCreateProduct()
    {
        return view('admin.create_product');
    }
    public function displayListProduct()
    {
        return view('admin.list_product');
    }
}
