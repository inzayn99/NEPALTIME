@extends('backend.master.master')

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Add User</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{route('add-admin-user')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="name">Name: <a
                                                    style="color: red;">{{$errors->first('name')}}</a></label>
                                            <input type="text" name="name" class="form-control form-control-sm"
                                                   id="name" value="{{old('name')}}">

                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username: <a
                                                    style="color: red;">{{$errors->first('username')}}</a></label>
                                            <input type="text" name="username" class="form-control form-control-sm"
                                                   id="username" value="{{old('username')}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email: <a
                                                    style="color: red;">{{$errors->first('email')}}</a></label>
                                            <input type="text" name="email" class="form-control form-control-sm"
                                                   id="email" value="{{old('email')}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Password: <a
                                                    style="color: red;">{{$errors->first('password')}}</a></label>
                                            <input type="password" name="password" class="form-control form-control-sm"
                                                   id="password" value="{{old('password')}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password: <a
                                                    style="color: red;">{{$errors->first('password_confirmation')}}</a></label>
                                            <input type="password" name="password_confirmation" class="form-control form-control-sm"
                                                   id="password_confirmation" value="{{old('password_confirmation')}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Image: <a
                                                    style="color: red;">{{$errors->first('image')}}</a></label><br>
                                            <input type="file" name="image" class="btn btn-default">
                                        </div>

                                        <div class="form-group">
                                           <button class="btn btn-success">Add Record</button>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

@endsection
