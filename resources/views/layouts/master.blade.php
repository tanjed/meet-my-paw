<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from friendkit.cssninja.io/navbar-v1-feed-posts-triple.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 05:10:35 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

@include('includes.header')

<body class="is-white">
    @if (isset($navbar) && $navbar == false)
        @yield('content')
    @else
        @include('includes.navbar')
        <div class="mt-5">
            @yield('content')
        </div>
    @endif

    <!-- Concatenated js plugins and jQuery -->
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/app.js') }}"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/data/tipuedrop_content.js') }}"></script>

    <!-- Core js -->
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/global.js') }}"></script>

    <!-- Navigation options js -->
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/navbar-v1.js') }}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/navbar-v2.js') }}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/navbar-mobile.js') }}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/navbar-options.js') }}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/sidebar-v1.js') }}"></script>

    <!-- Core instance js -->
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/main.js') }}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/chat.js') }}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/touch.js') }}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/tour.js') }}"></script>

    <!-- Components js -->
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/explorer.js') }}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/widgets.js') }}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/modal-uploader.js') }}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/popovers-users.js') }}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/popovers-pages.js') }}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/lightbox.js') }}"></script>
    <script src="/assets/js/signup.js"></script>
</body>
