<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function displayCreateCategory()
    {
        return view('admin.create_category');
    }

    public function displayListCategory()
    {
        $all_category =  DB::table('tbl_category')->get();
        return view('admin_layout')->with('all_category', view('admin.list_category', compact('all_category')));
    }

    public function createCategory(Request $request)
    {
        $data = [
            'name_category' => $request->input('name_category'),
            'status_category' => $request->input('status_category'),
        ];


        DB::table('tbl_category')->insert($data);
        Session::put('message', 'Thêm Thành Công');
        return Redirect::to('list-category');
    }

    public function actionCategory($id)
    {

        DB::table('tbl_category')->where('id', $id)->update(['status_category' => 1]);
        Session::put('message', 'Kích hoạt Thành Công');
        return Redirect::to('list-category');
    }

    public function unActionCategory($id)
    {

        DB::table('tbl_category')->where('id', $id)->update(['status_category' => 0]);
        Session::put('message', 'Không Kích hoạt Thành Công');
        return Redirect::to('list-category');
    }

    public function editCategory($id)
    {

        $edit_category = DB::table('tbl_category')->where('id', $id)->get();
        return view('admin_layout')->with('edit_category', view('admin.edit_category', compact('edit_category')));
    }
    public function updateCategory(Request $request, $id)
    {
        $data = [
            'name_category' => $request->input('name_category')
        ];

        DB::table('tbl_category')->where('id', $id)->update($data);
        Session::put('message', 'Cập nhật Thành Công');
        return Redirect::to('list-category');
    }


    public function deleteCategory($id)
    {
        DB::table('tbl_category')->where('id', $id)->delete();
        Session::put('message', 'Xóa Thành Công');
        return Redirect::to('list-category');
    }
}
