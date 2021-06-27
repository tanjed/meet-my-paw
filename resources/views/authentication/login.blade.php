@extends('layouts.master',['navbar' => false])
@section('content')
    <style>
        .active{
            background: lightgrey !important;
        }
        .nav-link{
            border-color: #dee2e6 !important;
        }
        .tabs {
            list-style: none;
            margin: 0;
            padding: 0;
            position: relative;
        }
        .tabs li {
            /*margin: 0 2px;*/
            /*padding: 10px;*/
            cursor: pointer;
            background: white;
            display: inline-block;
        }
        .tabs li:not(.active):hover
        {
            background: #ccc;
            border-top-right-radius: 4px;
            border-top-left-radius: 4px;
        }
        .tabs li > a
        {
            text-decoration: none;
            color: gray
        }
        .tabs li.active
        {
            z-index: 1000;
            border-top-right-radius: 4px;
            border-top-left-radius: 4px;
            border: 1px solid #ccc;
            border-bottom-color: #fff;
            color: grey;
            cursor: default;
        }
        .tabs:after
        {
            position: absolute;
            content: "";
            width: 100%;
            z-index: 1;
            bottom: 0;
            left:0;
            border-bottom: 1px solid #ddd;
        }
        .tabs:before
        {
            z-index: 1;
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
                            <h2>Meet My Paws</h2>
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
{{--                            <div class="badge">--}}
{{--                                <i data-feather="check"></i>--}}
{{--                            </div>--}}
                            <img src="{{asset('/assets/brand.png')}}" alt="">
                        </div>
                        @include('includes.message')
                        <!--Form-->
                        <form method="POST"  action="{{ route('post.login') }}">
                            @csrf
                            <center><label>Login As:</label></center>
                            <ul class="tabs">
                                <li class="nav-item" style="width: 50% !important;">
                                    <a class="nav-link active" href="#" data-value="pet_owner">Pet Owner</a>
                                </li>
                                <li class="nav-item" style="width: 50% !important;">
                                    <a class="nav-link" href="#" data-value="pet_seeker">Pet Seeker</a>
                                </li>
                            </ul>
{{--                            <ul class="nav nav-tabs justify-content-center">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link active" href="#" data-value="pet_owner">Pet Owner</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="#" data-value="fonder">Fonder</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
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
                            {{-- <div class="section forgot-password">
                                <div class="has-text-centered">
                                    <a href="#">Forgot password?</a>
                                </div>
                            </div> --}}
                            <div class="section forgot-password">
                                <div class="has-text-centered">
                                    <a href="/register">Sign Up</a>
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
            $('.nav-link').removeClass('active')
            $(this).addClass('active')
            $("input[name='login_as']").val($(this).data('value'))
        });
        (function (){
        })();
    </script>

@endsection
