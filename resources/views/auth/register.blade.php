<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Family Fun Day</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>

<body>
    <div class="row m-0 h-100">
        <div class="col p-0 bg-custom d-flex justify-content-center align-items-center flex-column w-100">
            <form class="w-50" 
            action="" method="POST">
                <div class="text-center">
                    <img src="{{ asset('img/logo.png') }}" class="w-60" />
                </div>
                <div class="text-center">
                    @csrf
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name"
                        placeholder="Nama" required>
                </div>  
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email"
                        placeholder="Alamat Email" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Number Phone</label>
                    <input type="number" class="form-control" name="telepon"
                        placeholder="Number Phone" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password"
                        placeholder="Password" required>
                </div>
                @if (Session::has('fail'))
                    <div class="alert alert-danger mt-2">
                        {{ Session::get('fail') }}
                    </div>
                @endif
                <script>
                    function loading() {
                        $(".btn .loader").removeClass("d-none");
                        $(".btn .btn-text").html("");
                    }
                </script>
                <button class="btn w-100 btn-custom" id="submit" onclick="loading()" type="submit">
                    <span class="spinner-border spinner-border-sm d-none loader" role="status"
                        aria-hidden="true"></span>
                    <span class="btn-text">Register</span>
                </button>
            </form>
        </div>
    </div>
</body>
<script src="{{ asset('plugins/jquery/jquery-3.6.1.min.js') }}"></script>

</html>
