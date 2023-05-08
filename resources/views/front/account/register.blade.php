@extends('front.layout.master')
@section('title', 'Register')
@section('body')
<!--  -->
<!-- Breacumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.html"><i class="fa fa-home"></i>Home</a>
                    <span>Register</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breacumb Section End -->

<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="register-form">
                    <h2>Register</h2>

                    @if(session('notificationError'))
                    <div class="alert alert-danger" role="alert">
                        {{session('notificationError')}}
                    </div>
                    @endif

                    <form action="" method="post">
                        @csrf
                        <div class="group-input">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div class="group-input">
                            <label for="email">Email address *</label>
                            <input type="text" id="email" name="email">
                        </div>
                        <div class="group-input">
                            <label for="password">Password *</label>
                            <input type="password" id="password" name="password">
                        </div>
                        <div class="group-input">
                            <label for="con-pass">Confirm Password *</label>
                            <input type="password" id="con-pass" name="password_confirmation">
                        </div>
                        <button type="submit" class="site-btn register-btn">Register</button>
                    </form>
                    <div class="switch-login">
                        <a href="./account/login" class="or-login">Or Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Section End -->
@endsection