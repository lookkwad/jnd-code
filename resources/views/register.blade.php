@extends('layouts.page')
@section('title', 'Login')
@section('content')
@section('style')
    <style>
    
    </style>
@endsection
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
                                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="firstname" name="firstname" placeholder="First Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="lastname" name="lastname" placeholder="Last Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required>
                                        </div>
                                        <a class="btn btn-primary btn-user btn-block" id="btn_register"> Register Account</a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a href="{{ route('login') }}" class="small" href="login.html">Already have an account? Login!</a>
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
            $('#btn_register').click(function (e) {
                const firstname = $('#firstname').val();
                const lastname = $('#lastname').val();
                const email = $('#email').val();
                const password = $('#password').val();
                let datas = {
                    "firstname": firstname,
                    "lastname": lastname,
                    "email": email,
                    "password": password,
                }
                            
                $.ajax({
                    url: '/register/insert',
                    type: 'POST',
                    data: datas,
                    success: function(response) {
                        Swal.fire({
                            title: "Success!",
                            icon: "success",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '/';
                            }
                        });
                    },
                    error: function(error) {
                        showError(error);
                    }
                });
            });
        });
    </script>
@endsection