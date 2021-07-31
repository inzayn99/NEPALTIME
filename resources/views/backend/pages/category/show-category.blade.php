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
                            <h2><i class="fa fa-eye"></i>Show Category
                                <a href="{{route('add-category')}}"
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
                                            <th>S.N</th>
                                            <th>Cat_Name</th>
                                            <th>Status</th>
                                            <td>Posted By</td>
                                            <td>Created At</td>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categoryData as $key=>$category)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$category->cat_name}}</td>
                                                {{--                                                <td>{{$category->username}}</td>--}}
                                                {{--                                                <td>{{$users->email}}</td>--}}

                                                <td>
                                                    <form action="{{route('update-category-status')}}" method="post">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="criteria" value="{{$category->id}}">
                                                        @if($category->status==1)
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
                                                <td>{{$category->postedBy->username}}</td>
                                                <td>{{$category->created_at->diffForHumans()}}</td>

                                                <td>
                                                    <a href="{{route('edit-category').'/'.$category->id}}"
                                                       class="btn-sm btn-primary"><i class="fa fa-edit">
                                                        </i></a>
                                                    <a href="{{route('delete-category').'/'.$category->id}}"
                                                       class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
