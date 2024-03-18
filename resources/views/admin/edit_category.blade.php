@extends('admin_layout')
@section('content')
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Category
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                @foreach ($edit_category as $category)
                                    <form role="form" action="{{ url('update-category/'. $category->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name Category</label>
                                            <input type="text" value="{{ $category->name_category }}"
                                                name="name_category" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter email">
                                        </div>
                                        <button type="submit" name="update_category" class="btn btn-info">Update
                                            category</button>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
