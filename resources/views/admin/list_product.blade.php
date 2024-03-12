@extends('admin_layout')
@section('content')
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List Category
                </div>
                <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <input type="text" class="input-sm form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light">
                        <thead>
                            <tr>
                                <th style="width:20px;">
                                    <label class="i-checks m-b-none">
                                        <input type="checkbox"><i></i>
                                    </label>
                                </th>
                                <th>Id</th>
                                <th>Name Product</th>
                                <th>Price Product</th>
                                <th>Category Product</th>
                                <th>Brand Product</th>
                                <th>Thumb Product</th>
                                <th>Describe Product</th>
                                <th style="width:30px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                                </td>
                                <td>1</td>
                                <td>PS4</td>
                                <td>299$</td>
                                <td>Apple</td>
                                <td>Sony</td>
                                <td>
                                    <img width="150px" height="100px" class="img-fluid"
                                        src="https://source.unsplash.com/random"alt="">
                                </td>
                                <td>
                                    <textarea class="form-control" name="" id="" cols="70" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae neque quis earum consectetur officia aut incidunt tempora fugiat quam pariatur! Impedit nesciunt minus sequi dicta vero a nulla modi soluta.</textarea>
                                </td>
                                <td>
                                    <a href="" class="active" ui-toggle-class=""><i
                                            class="fa fa-check text-success text-active"></i><i
                                            class="fa fa-times text-danger text"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-5 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                        </div>
                        <div class="col-sm-7 text-right text-center-xs">
                            <ul class="pagination pagination-sm m-t-none m-b-none">
                                <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                                <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </section>
@endsection
