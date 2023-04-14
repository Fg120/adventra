<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Adventra</title>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/register.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!------ Include the above in your HEAD tag ---------->
</head>

<body class="hold-transition login-page">
    @include('sweetalert::alert')
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="/img/home/logo.png" alt="" />
                <h3> Adventra</h3>
                <p>Adventuring Worry-Free With Us!</p>
                <div>
                    <label for="sidebutton">Doesnt have account?</label>
                    <a href="{{route('register')}}">
                        <input type="submit" id="sidebutton" style="margin-top: -10px" value="Register">
                    </a>
                </div>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" role="tab" aria-controls="home"
                            aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" role="tab" aria-controls="profile"
                            aria-selected="false">Adventra</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Login</h3>
                        <form action="{{ route('login') }}" method="post">
                            <div class="register-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email"
                                                value="{{ old('email') }}" name="email" />
                                            @error('email')
                                                <p class="text-danger fs-6">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" value="{{ old('password') }}" name="password" />
                                            @error('password')
                                                <p class="text-danger fs-6">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" class="btnRegister flex-end" value="Login" value=""/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
