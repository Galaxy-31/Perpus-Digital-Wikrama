<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Login | Perpustakaan</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
   @include('auth.logincss')
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form role="form" action="{{ route('login') }}" method="POST">
        <h3>Silahkan Login</h3>
        @csrf

        <div class="mb-3">
            <p>Email</p>
            <input type="email" class="form-control form-control-lg @error('email') has-error @enderror"
                placeholder="Masukkan Email Anda" aria-label="Email" name="email" value="{{ old('email') }}" required
                autocomplete="email" autofocus>
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <p>Password</p>
            <input type="password" class="form-control form-control-lg @error('password') has-error @enderror"
                placeholder="Masukkan Password Anda" aria-label="Password" name="password" required autocomplete="current-password">
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Masuk</button>
        </div>
    </form>
</body>

</html>
