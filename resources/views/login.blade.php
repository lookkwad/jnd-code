@extends('layouts.page')
@section('title', 'Login')
@section('content')
<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">
                                        </div>
                                        <a class="btn btn-primary btn-user btn-block" id="btn_login">Login</a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a href="{{ route('register') }}" class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#btn_login').click(function (e) {
                const email = $('#email').val();
                const password = $('#password').val();
                let datas = {
                    "email": email,
                    "password": password,
                }
                            
                $.ajax({
                    url: '/login/check',
                    type: 'POST',
                    data: datas,
                    success: function(response) {
                        if (response == 'success') {
                            window.location.href = '/links';
                        } else {
                            Swal.fire("email or password is incorrect", "", "error");
                        }
                    },
                    error: function(error) {
                        showError(error);
                    }
                });
            });
        });
    </script>
@endsection