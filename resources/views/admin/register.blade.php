<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <!-- meta tags -->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <base href="{{ asset('') }}">
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="{{ asset('') }}css/fontawesome-all.css" rel="stylesheet"/>
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <!-- /google fonts-->
</head>
<body>
<h1>Đăng Ký</h1>
<div class=" w3l-login-form">
    <h2>Đăng Ký</h2>
    <form method="POST">
        @csrf
        @if(session('thongbao'))
            <script>
                alert('{{session('thongbao')}}')
            </script>
        @endif
        <div class=" w3l-form-group">
            <label>Username</label>
            <div class="group">
                <i class="fas fa-user"></i>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Username"/>
            </div>
        </div>
        <div class=" w3l-form-group">
            <label>Email</label>
            <div class="group">
                <i class="fas fa-user"></i>
                <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email"/>
            </div>
            @if($errors->has('email'))
                <p class="frame">{{$errors->first('email')}}</p>
            @endif
        </div>
        <div class=" w3l-form-group">
            <label>Password</label>
            <div class="group">
                <i class="fas fa-unlock"></i>
                <input type="password" class="form-control" name="password" placeholder="Password"/>
            </div>
            @if($errors->has('password'))
                <p class="frame">{{$errors->first('password')}}</p>
            @endif
        </div>
        <div class=" w3l-form-group">
            <label>Nhập lại password</label>
            <div class="group">
                <i class="fas fa-unlock"></i>
                <input type="password" class="form-control" name="password" placeholder="Password"/>
            </div>
        </div>
        <button type="submit">Đăng Ký</button>
    </form>
</div>
</body>
</html>


