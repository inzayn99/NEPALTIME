<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to User</title>
    <link rel="stylesheet" type="text/css" href="{{url('frontend/user/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontend/user/css/fontawesome-wholepage.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontend/user/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontend/user/css/user.css')}}">
</head>
<body>
<div class="form-body without-side">
    <div class="website-logo">
            <div class="logo">
                <img class="logo-size" src="{{url('frontend/user/img/logo.png')}}" alt="">
            </div>
        </a>
    </div>
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                <img src="{{url('frontend/user/img/background.svg')}}" alt="">
            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Login to user account</h3>
                    @include('backend.layouts.message')
                    <p>Access to the whole users</p>

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









                                    <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="">Forget password?</a>
                            </div>
                    </form>
                    <div class="other-links">
                        <div class="text">Or login with</div>


                        <div class="other-links">
                            <a href="">Facebook</a>
                            <a href="">Google</a><a href="">Linkedin</a><a href="">Instagram</a>


                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
----------------------------



