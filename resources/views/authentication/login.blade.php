@extends('layouts.master',['navbar' => false])
@section('content')
    <style>
        .active{
            background: lightgrey !important;
        }
        .nav-link{
            border-color: #dee2e6 !important;
        }
    </style>
    <!-- Main Wrapper -->
    <div class="login-wrapper columns is-gapless">
        <!--Left Side (Desktop Only)-->
        <div class="column is-6 is-hidden-mobile hero-banner">
            <div class="hero is-fullheight is-login">
                <div class="hero-body">
                    <div class="container">
                        <div class="left-caption">
                            <h2>Join an Exciting Social Experience.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Right Side-->
        <div class="column is-6">
            <div class="hero form-hero is-fullheight">
                <!--Logo-->
                <div class="logo-wrap">
                    <div class="wrap-inner">
                        <img src="assets/img/logo/friendkit-white.svg" alt="">
                    </div>
                </div>
                <!--Login Form-->
                <div class="hero-body">
                    <div class="form-wrapper">
                        <!--Avatar-->
                        <div class="avatar">
                            <div class="badge">
                                <i data-feather="check"></i>
                            </div>
                            <img src="https://placehold.it/128x128" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        </div>
                        <!--Form-->
                        <form method="POST"  action="{{ route('post.login') }}">
                            @csrf
                            <center><label>Login As:</label></center>
                            <ul class="nav nav-tabs justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#" data-value="pet_owner">Pet Owner</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-value="fonder">Fonder</a>
                                </li>
                            </ul>
                            <br>
                            <div class="login-form">
                                <div class="field">
                                    <div class="control">
                                        <input class="input email-input" type="text" name="email" placeholder="jennadavis@gmail.com">
                                        <div class="input-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input class="input password-input" type="password" name="password" placeholder="●●●●●●●">
                                        <div class="input-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <input type="hidden" value="pet_owner" name="login_as">
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <button class="button is-solid primary-button raised is-rounded is-fullwidth">Login</button>
                                    </div>
                                </div>
                            </div>
                            <div class="section forgot-password">
                                <div class="has-text-centered">
                                    <a href="#">Forgot password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        $('.nav-link').click(function () {
            $('.nav-link').toggleClass('active')
            $("input[name='login_as']").val($(this).data('value'))
        });
        (function (){
        })();
    </script>

@endsection
