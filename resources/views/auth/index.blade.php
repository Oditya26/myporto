<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login with Google</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="bg-light">
    <main class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="col-6 mx-auto text-center px-5 py-5 border rounded bg-white">
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
                
            @endif
            <h1>Login</h1>
            <p>Silahkan login dengan Akun Google yang terdaftar</p>
            <div class="d-flex justify-content-center gap-2 flex-wrap">
                <a href="{{ url('/') }}" class="btn btn-outline-secondary">Kembali ke Halaman Utama</a>
                <a href='{{ url('oauth2/redirect') }}' class="btn border border-primary"><img width="20px"
                        style="margin-bottom:3px; margin-right:5px" alt="Google sign-in"
                        src="https://img.icons8.com/?size=100&id=17949&format=png&color=000000" />
                    Login dengan Google</a>
            </div>
        </div>
    </main>
</body>
</html>