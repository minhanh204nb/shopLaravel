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
                        <?php
                        $message = Session::get('message');
                        if ($message) {
                            echo $message;
                            Session::put('message', null);
                        }
                        ?>
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
                                <th>Name Category</th>
                                <th>Ẩn/Hiện</th>
                                <th style="width:30px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_category as $category)
                                <tr>
                                    <td>
                                        <label class="i-checks m-b-none">
                                            <input type="checkbox" name="post[]"><i></i>
                                        </label>
                                    </td>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name_category }}</td>
                                    <td>
                                        @if ($category->status_category === '1')
                                            <a href="{{ url('un-action-category/' . $category->id) }}">
                                                <i class="fa fa-thumbs-up"
                                                    style="font-size:35px;color:rgb(115, 0, 255)"></i>
                                            </a>
                                        @else
                                            <a href="{{ url('action-category/' . $category->id) }}">
                                                <i class="fa fa-thumbs-down" style="font-size:35px;color:red"></i>
                                            </a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('edit-category/' . $category->id) }}" class="active"
                                            ui-toggle-class="">
                                            <i class="fa fa-check text-success text-active"></i>

                                        </a>
                                        <a href="{{ url('delete-category/' . $category->id) }}" class="active"
                                            ui-toggle-class="">
                                            <i class="fa fa-times text-danger text"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

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
