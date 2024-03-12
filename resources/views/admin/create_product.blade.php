@extends('admin_layout')
@section('content')
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Product
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form">
                                    <div class="form-gourp">
                                        <label for="">Category</label>
                                        <select class="form-control m-bot15">
                                            <option>Apple</option>
                                            <option>Samsung</option>
                                            <option>Oppo</option>
                                        </select>
                                    </div>
                                    <div class="form-gourp">
                                        <label for="">Brand</label>
                                        <select class="form-control m-bot15">
                                            <option>Nike</option>
                                            <option>Jodan</option>
                                            <option>Lv</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name Product</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Price Product</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Describe</label>
                                        <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Add Image Product</label>
                                        <input type="file" id="exampleInputFile">
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
