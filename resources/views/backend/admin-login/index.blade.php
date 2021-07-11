

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Login</title>
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontend/login/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontend/login/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontend/login/css/login.css')}}">
</head>
<body>
<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <div class="website-logo-inside">
                            <div class="logo">
                                <img class="logo-size" src="{{url('frontend/login/img/logo.png')}}" alt="">
                            </div>
                        </a>
                    </div>
                    <h3>Get more things done with Loggin Dashboard.</h3>
                    @include('backend.layouts.message')
                    <p>Access to the whole admin.</p>
                    <div class="page-links">
                        <a href="" class=" ">Login To Dashboard</a><!-- <a href="">User</a> -->
                    </div>

                    {{--start--}}
                    <form action="" method="post">
                        {{csrf_field()}}
                        <div class="group">
                            <label for="username"><a style="color: red;">{{$errors->first('username')}}</a></label>
                            <input type="text" name="username" placeholder="Username" class="form-control" id="username">


                            <div class="form-group">
                                <label for="password"><a style="color: red;">{{$errors->first('password')}}</a></label>
                                <input type="password" name="password" placeholder="Password" class="form-control" id="password">
                            </div>



                            {{--<input class="form-contr ol" type="text" name="username"  placeholder="User name" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>--}}

                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                                <a href="">Forget password?</a>
                            </div>
                            {{--End--}}
                        </div>
                    </form>
                    <div class="other-links">
                        <span>Or login with</span><a href="">Facebook</a><a href="">Google</a><a
                            href="">Linkedin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
{{--------------------------------------------------------------------}}




