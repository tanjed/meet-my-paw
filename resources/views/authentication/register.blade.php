@extends('layouts.master',['navbar' => false])
@section('content')
<!-- Pageloader -->
<div class="pageloader"></div>
<div class="infraloader is-active"></div>
<div class="signup-wrapper">

    <div class="fake-nav">
        <a href="/" class="logo">
            <img src="assets/img/logo/friendkit-bold.svg" width="112" height="28" alt="">
        </a>
    </div>

    <div class="process-bar-wrap" style="display: none">
        <div class="process-bar">
            <div class="progress-wrap">
                <div class="track"></div>
                <div class="bar"></div>
                <div id="step-dot-1" class="dot is-first is-active is-current" data-step="0">
                    <i data-feather="smile"></i>
                </div>
                <div id="step-dot-2" class="dot is-second" data-step="25">
                    <i data-feather="user"></i>
                </div>
                {{-- <div id="step-dot-3" class="dot is-third" data-step="50">
                    <i data-feather="image"></i>
                </div> --}}
                <div id="step-dot-4" class="dot is-fourth" data-step="75">
                    <i data-feather="lock"></i>
                </div>
                <div id="step-dot-5" class="dot is-fifth" data-step="100">
                    <i data-feather="flag"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="outer-panel">
        <div class="outer-panel-inner">
            <br>
            <div class="process-title">
                <h2 id="step-title-1" class="step-title is-active">Welcome, select an account type.</h2>
                <h2 id="step-title-2" class="step-title">Tell us more about you.</h2>
                {{-- <h2 id="step-title-3" class="step-title">Upload a profile picture.</h2> --}}
                <h2 id="step-title-4" class="step-title">Secure your account.</h2>
                <h2 id="step-title-5" class="step-title">You're all set. Ready?</h2>
                @include('includes.message')
            </div>

            <form action="{{route('post.register')}}" method="POST">
                @csrf
                <input type="hidden" id="type" name="type">
                <div id="signup-panel-1" class="process-panel-wrap is-active">
                    <div class="columns mt-6">

                        <div class="column is-6">
                            <div class="account-type">
                                <div class="type-image">
                                    <img class="type-illustration" src="assets/img/illustrations/signup/type-2.svg" alt="">
                                    <img class="type-bg light-image" src="assets/img/illustrations/signup/type-2-bg.svg" alt="">
                                    <img class="type-bg dark-image" src="assets/img/illustrations/signup/type-2-bg-dark.svg" alt="">
                                </div>
                                <h3>Pet Owner</h3>
                                <p>Create a Pet Owner account to be able to do some awesome things.</p>
                                <a class="button is-fullwidth process-button type-select" data-step="step-dot-2" data-value="pet_owner">
                                    Continue
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="account-type">
                                <div class="type-image">
                                    <img class="type-illustration" src="assets/img/illustrations/signup/type-3.svg" alt="">
                                    <img class="type-bg light-image" src="assets/img/illustrations/signup/type-3-bg.svg" alt="">
                                    <img class="type-bg dark-image" src="assets/img/illustrations/signup/type-3-bg-dark.svg" alt="">
                                </div>

                                <h3>Pet Seeker</h3>
                                <p>Create a Funder account to be able to do some awesome things.</p>
                                <a class="button is-fullwidth process-button type-select" data-step="step-dot-2" data-value="funder">
                                    Continue
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="signup-panel-2" class="process-panel-wrap is-narrow">
                    <div class="form-panel">
                        <div class="field">
                            <label>First Name</label>
                            <div class="control">
                                <input type="text" class="input" placeholder="Enter your first name" name="first_name">
                            </div>
                        </div>
                        <div class="field">
                            <label>Last Name</label>
                            <div class="control">
                                <input type="text" class="input" placeholder="Enter your last name" name="last_name">
                            </div>
                        </div>
                        <div class="field">
                            <label>Email</label>
                            <div class="control">
                                <input type="text" class="input" placeholder="Enter your email address" name="email">
                            </div>
                        </div>
                    </div>

                    <div class="buttons">
                        <a class="button process-button" data-step="step-dot-1">Back</a>
                        <a class="button process-button is-next" data-step="step-dot-4">Next</a>
                    </div>
                </div>

                {{-- <div id="signup-panel-3" class="process-panel-wrap is-narrow">
                    <div class="form-panel">
                        <div class="photo-upload">
                            <div class="preview">
                                <a class="upload-button">
                                    <i data-feather="plus"></i>
                                </a>
                                <img id="upload-preview" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/avatar-w.png" alt="">
                               <form id="profile-pic-dz" class="dropzone is-hidden" action="https://friendkit.cssninja.io/"></form>
                            </div>
                            <div class="limitation">
                                <small>Only images with a size lower than 3MB are allowed.</small>
                            </div>
                        </div>
                    </div>

                    <div class="buttons">
                        <a class="button process-button" data-step="step-dot-2">Back</a>
                        <a class="button process-button is-next" data-step="step-dot-4">Next</a>
                    </div>
                </div> --}}

                <div id="signup-panel-4" class="process-panel-wrap is-narrow">
                    <div class="form-panel">
                        <div class="field">
                            <label>Password</label>
                            <div class="control">
                                <input type="password" class="input" placeholder="Choose a password" name="password">
                            </div>
                        </div>
                        <div class="field">
                            <label>Repeat Password</label>
                            <div class="control">
                                <input type="password" class="input" placeholder="Repeat your password" name="password_confirmation">
                            </div>
                        </div>
{{--                        <div class="field">--}}
{{--                            <label>Phone Number</label>--}}
{{--                            <div class="control">--}}
{{--                                <input type="text" class="input" placeholder="Enter your phone number">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>

                    <div class="buttons">
                        <a class="button process-button" data-step="step-dot-3">Back</a>
                        <a class="button process-button is-next" data-step="step-dot-5">Next</a>
                    </div>
                </div>

                <div id="signup-panel-5" class="process-panel-wrap is-narrow">
                    <div class="form-panel">
                        <img class="success-image" src="assets/img/illustrations/signup/mailbox.svg" alt="">
                        <div class="success-text">
                            <h3>Congratulations! Your account has been successfully created.</h3>
                            <button type="submit" id="signup-finish" class="button is-fullwidth">Let Me In</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <!--Edit Credit card Modal-->
    <div id="crop-modal" class="modal is-small crop-modal is-animated">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="modal-card">
                <header class="modal-card-head">
                    <h3>Crop your picture</h3>
                    <div class="close-wrap">
                        <button class="close-modal" aria-label="close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                </header>
                <div class="modal-card-body">
                    <div id="cropper-wrapper" class="cropper-wrapper">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        $('.type-select').click(function (){
            console.log($(this).data('value'))
            $('#type').val($(this).data('value'))
        });
    </script>
@endsection
