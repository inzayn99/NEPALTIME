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
                            <h2><i class="fa fa-eye"></i>Show User <a href="{{route('add-admin-user')}}"
                                                                      class="btn-sm btn-success"><i
                                        class="fa fa-plus"></i>
                                </a></h2>
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
                                    @include('backend.layouts.message')
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>S.n</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>User Types</th>
                                            <th>status</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($usersData as $key=>$users)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$users->name}}</td>
                                                <td>{{$users->username}}</td>
                                                <td>{{$users->email}}</td>
                                                <td>

                                                    @if($users->admin_type=='super-admin')

                                                    <button name="super_admin" class="btn-sm btn-success"
                                                            title="Super Admin"><i
                                                            class="fa fa-users"></i></button>

                                                    @else
                                                        <button name="admin" class="btn-sm btn-info" title="Admin">
                                                            <i class="fa fa-user"></i></button>

                                                    @endif


                                                </td>
                                                <td>
                                                    <form action="{{route('update-admin-status')}}" method="post">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="criteria" value="{{$users->id}}">
                                                        @if($users->status==1)
                                                            <button name="active" class="btn-xs btn-primary"><i
                                                                    class="fa fa-check"></i>
                                                            </button>

                                                        @else
                                                            <button name="inactive" class="btn-xs btn-warning"><i
                                                                    class="fa fa-times"></i>
                                                            </button>
                                                        @endif
                                                    </form>
                                                </td>
                                                <td>
                                                    <img src="{{url('uploads/admins/'.$users->image)}}" width="30"
                                                         alt="">
                                                </td>
                                                <td>
                                                    <a href="" class="btn-sm btn-primary"><i class="fa fa-edit">
                                                        </i></a>
                                                    <a href="" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                </td>


                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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
