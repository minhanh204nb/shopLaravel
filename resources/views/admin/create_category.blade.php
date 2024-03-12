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
                                <form role="form">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name Category</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                    </div>
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
