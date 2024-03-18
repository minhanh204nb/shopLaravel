@extends('admin_layout')
@section('content')
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Create Category
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{ url('save-categoty') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name Category</label>
                                        <input type="text" name="name_category" class="form-control"
                                            id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select class="form-control" name="status_category" id="">
                                            <option value="1">Hiện</option>
                                            <option value="0">Ẩn</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="add_category" class="btn btn-info">Add</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
