@extends('pet_owner_dashboard.layout.master')
@section('content')
    <div>
{{--        <div class="toolbar-v1-fixed-wrap">--}}
{{--            <div class="toolbar-v1 is-narrow">--}}
{{--                <!-- Sidebar Trigger -->--}}
{{--                <div class="friendkit-hamburger sidebar-v1-trigger">--}}
{{--                    <span class="menu-toggle has-chevron">--}}
{{--            	            <span class="icon-box-toggle">--}}
{{--            	                <span class="rotate">--}}
{{--            	                    <i class="icon-line-top"></i>--}}
{{--            	                    <i class="icon-line-center"></i>--}}
{{--            	                    <i class="icon-line-bottom"></i>--}}
{{--            	                </span>--}}
{{--                    </span>--}}
{{--                    </span>--}}
{{--                </div>--}}
{{--                <h1>Timeline</h1>--}}
{{--                <div class="controls">--}}
{{--                    <div class="navbar-item is-icon drop-trigger">--}}
{{--                        <a class="icon-link is-friends" href="javascript:void(0);">--}}
{{--                            <i data-feather="heart"></i>--}}
{{--                            <span class="indicator"></span>--}}
{{--                        </a>--}}

{{--                        <div class="nav-drop is-right">--}}
{{--                            <div class="inner">--}}
{{--                                <div class="nav-drop-header">--}}
{{--                                    <span>Friend requests</span>--}}
{{--                                    <a href="#">--}}
{{--                                        <i data-feather="search"></i>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="nav-drop-body is-friend-requests">--}}
{{--                                    <!-- Friend request -->--}}
{{--                                    <div class="media">--}}
{{--                                        <figure class="media-left">--}}
{{--                                            <p class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/bobby.jpg" alt="">--}}
{{--                                            </p>--}}
{{--                                        </figure>--}}
{{--                                        <div class="media-content">--}}
{{--                                            <a href="#">Bobby Brown</a>--}}
{{--                                            <span>Najeel verwick is a common friend</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-right">--}}
{{--                                            <button class="button icon-button is-solid grey-button raised">--}}
{{--                                                <i data-feather="user-plus"></i>--}}
{{--                                            </button>--}}
{{--                                            <button class="button icon-button is-solid grey-button raised">--}}
{{--                                                <i data-feather="user-minus"></i>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Friend request -->--}}
{{--                                    <div class="media">--}}
{{--                                        <figure class="media-left">--}}
{{--                                            <p class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" alt="">--}}
{{--                                            </p>--}}
{{--                                        </figure>--}}
{{--                                        <div class="media-content">--}}
{{--                                            <a href="#">Dan Walker</a>--}}
{{--                                            <span>You have 4 common friends</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-right">--}}
{{--                                            <button class="button icon-button is-solid grey-button raised">--}}
{{--                                                <i data-feather="user-plus"></i>--}}
{{--                                            </button>--}}
{{--                                            <button class="button icon-button is-solid grey-button raised">--}}
{{--                                                <i data-feather="user-minus"></i>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Friend request -->--}}
{{--                                    <div class="media">--}}
{{--                                        <figure class="media-left">--}}
{{--                                            <p class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" alt="">--}}
{{--                                            </p>--}}
{{--                                        </figure>--}}
{{--                                        <div class="media-content">--}}
{{--                                            <span>You are now friends with <a href="#">Nelly Schwartz</a>. Check her <a href="#">profile</a>.</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-right">--}}
{{--                                            <div class="added-icon">--}}
{{--                                                <i data-feather="tag"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Friend request -->--}}
{{--                                    <div class="media">--}}
{{--                                        <figure class="media-left">--}}
{{--                                            <p class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" alt="">--}}
{{--                                            </p>--}}
{{--                                        </figure>--}}
{{--                                        <div class="media-content">--}}
{{--                                            <a href="#">Milly Augustine</a>--}}
{{--                                            <span>You have 8 common friends</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-right">--}}
{{--                                            <button class="button icon-button is-solid grey-button raised">--}}
{{--                                                <i data-feather="user-plus"></i>--}}
{{--                                            </button>--}}
{{--                                            <button class="button icon-button is-solid grey-button raised">--}}
{{--                                                <i data-feather="user-minus"></i>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Friend request -->--}}
{{--                                    <div class="media">--}}
{{--                                        <figure class="media-left">--}}
{{--                                            <p class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="">--}}
{{--                                            </p>--}}
{{--                                        </figure>--}}
{{--                                        <div class="media-content">--}}
{{--                                            <span>You are now friends with <a href="#">Elise Walker</a>. Check her <a href="#">profile</a>.</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-right">--}}
{{--                                            <div class="added-icon">--}}
{{--                                                <i data-feather="tag"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Friend request -->--}}
{{--                                    <div class="media">--}}
{{--                                        <figure class="media-left">--}}
{{--                                            <p class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" alt="">--}}
{{--                                            </p>--}}
{{--                                        </figure>--}}
{{--                                        <div class="media-content">--}}
{{--                                            <span>You are now friends with <a href="#">Edward Mayers</a>. Check his <a href="#">profile</a>.</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-right">--}}
{{--                                            <div class="added-icon">--}}
{{--                                                <i data-feather="tag"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="nav-drop-footer">--}}
{{--                                    <a href="#">View All</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="navbar-item is-icon drop-trigger">--}}
{{--                        <a class="icon-link" href="javascript:void(0);">--}}
{{--                            <i data-feather="bell"></i>--}}
{{--                            <span class="indicator"></span>--}}
{{--                        </a>--}}

{{--                        <div class="nav-drop is-right">--}}
{{--                            <div class="inner">--}}
{{--                                <div class="nav-drop-header">--}}
{{--                                    <span>Notifications</span>--}}
{{--                                    <a href="#">--}}
{{--                                        <i data-feather="bell"></i>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="nav-drop-body is-notifications">--}}
{{--                                    <!-- Notification -->--}}
{{--                                    <div class="media">--}}
{{--                                        <figure class="media-left">--}}
{{--                                            <p class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" alt="">--}}
{{--                                            </p>--}}
{{--                                        </figure>--}}
{{--                                        <div class="media-content">--}}
{{--                                            <span><a href="#">David Kim</a> commented on <a href="#">your post</a>.</span>--}}
{{--                                            <span class="time">30 minutes ago</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-right">--}}
{{--                                            <div class="added-icon">--}}
{{--                                                <i data-feather="message-square"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Notification -->--}}
{{--                                    <div class="media">--}}
{{--                                        <figure class="media-left">--}}
{{--                                            <p class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" alt="">--}}
{{--                                            </p>--}}
{{--                                        </figure>--}}
{{--                                        <div class="media-content">--}}
{{--                                            <span><a href="#">Daniel Wellington</a> liked your <a href="#">profile.</a></span>--}}
{{--                                            <span class="time">43 minutes ago</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-right">--}}
{{--                                            <div class="added-icon">--}}
{{--                                                <i data-feather="heart"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Notification -->--}}
{{--                                    <div class="media">--}}
{{--                                        <figure class="media-left">--}}
{{--                                            <p class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" alt="">--}}
{{--                                            </p>--}}
{{--                                        </figure>--}}
{{--                                        <div class="media-content">--}}
{{--                                            <span><a href="#">Stella Bergmann</a> shared a <a href="#">New video</a> on your wall.</span>--}}
{{--                                            <span class="time">Yesterday</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-right">--}}
{{--                                            <div class="added-icon">--}}
{{--                                                <i data-feather="youtube"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Notification -->--}}
{{--                                    <div class="media">--}}
{{--                                        <figure class="media-left">--}}
{{--                                            <p class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="">--}}
{{--                                            </p>--}}
{{--                                        </figure>--}}
{{--                                        <div class="media-content">--}}
{{--                                            <span><a href="#">Elise Walker</a> shared an <a href="#">Image</a> with you an 2 other people.</span>--}}
{{--                                            <span class="time">2 days ago</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-right">--}}
{{--                                            <div class="added-icon">--}}
{{--                                                <i data-feather="image"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="nav-drop-footer">--}}
{{--                                    <a href="#">View All</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="navbar-item is-icon drop-trigger">--}}
{{--                        <a class="icon-link is-active" href="javascript:void(0);">--}}
{{--                            <i data-feather="mail"></i>--}}
{{--                            <span class="indicator"></span>--}}
{{--                        </a>--}}

{{--                        <div class="nav-drop is-right">--}}
{{--                            <div class="inner">--}}
{{--                                <div class="nav-drop-header">--}}
{{--                                    <span>Messages</span>--}}
{{--                                    <a href="messages-inbox.html">Inbox</a>--}}
{{--                                </div>--}}
{{--                                <div class="nav-drop-body is-friend-requests">--}}
{{--                                    <!-- Message -->--}}
{{--                                    <div class="media">--}}
{{--                                        <figure class="media-left">--}}
{{--                                            <p class="image">--}}
{{--                                                <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/nelly.png" data-user-popover="9" alt="">--}}
{{--                                            </p>--}}
{{--                                        </figure>--}}
{{--                                        <div class="media-content">--}}
{{--                                            <a href="#">Nelly Schwartz</a>--}}
{{--                                            <span>I think we should meet near the Starbucks so we can get...</span>--}}
{{--                                            <span class="time">Yesterday</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-right is-centered">--}}
{{--                                            <div class="added-icon">--}}
{{--                                                <i data-feather="message-square"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Message -->--}}
{{--                                    <div class="media">--}}
{{--                                        <figure class="media-left">--}}
{{--                                            <p class="image">--}}
{{--                                                <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">--}}
{{--                                            </p>--}}
{{--                                        </figure>--}}
{{--                                        <div class="media-content">--}}
{{--                                            <a href="#">Edward Mayers</a>--}}
{{--                                            <span>That was a real pleasure seeing you last time we really should...</span>--}}
{{--                                            <span class="time">last week</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-right is-centered">--}}
{{--                                            <div class="added-icon">--}}
{{--                                                <i data-feather="message-square"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Message -->--}}
{{--                                    <div class="media">--}}
{{--                                        <figure class="media-left">--}}
{{--                                            <p class="image">--}}
{{--                                                <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1" alt="">--}}
{{--                                            </p>--}}
{{--                                        </figure>--}}
{{--                                        <div class="media-content">--}}
{{--                                            <a href="#">Dan Walker</a>--}}
{{--                                            <span>Hey there, would it be possible to borrow your bicycle, i really need...</span>--}}
{{--                                            <span class="time">Jun 03 2018</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-right is-centered">--}}
{{--                                            <div class="added-icon">--}}
{{--                                                <i data-feather="message-square"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="nav-drop-footer">--}}
{{--                                    <a href="#">Clear All</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="navbar-item is-cart">--}}
{{--                        <div class="cart-button">--}}
{{--                            <i data-feather="shopping-cart"></i>--}}
{{--                            <div class="cart-count">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Cart dropdown -->--}}
{{--                        <div class="shopping-cart">--}}
{{--                            <div class="cart-inner">--}}

{{--                                <!--Loader-->--}}
{{--                                <div class="navbar-cart-loader is-active">--}}
{{--                                    <div class="loader is-loading"></div>--}}
{{--                                </div>--}}

{{--                                <div class="shopping-cart-header">--}}
{{--                                    <a href="ecommerce-cart.html" class="cart-link">View Cart</a>--}}
{{--                                    <div class="shopping-cart-total">--}}
{{--                                        <span class="lighter-text">Total:</span>--}}
{{--                                        <span class="main-color-text">$193.00</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!--end shopping-cart-header -->--}}

{{--                                <ul class="shopping-cart-items">--}}
{{--                                    <li class="cart-row">--}}
{{--                                        <img src="assets/img/products/2.svg" alt="" />--}}
{{--                                        <span class="item-meta">--}}
{{--            	                                <span class="item-name">Cool Shirt</span>--}}
{{--                                        <span class="meta-info">--}}
{{--            	                                    <span class="item-price">$29.00</span>--}}
{{--                                        <span class="item-quantity">Qty: 01</span>--}}
{{--                                        </span>--}}
{{--                                        </span>--}}
{{--                                    </li>--}}

{{--                                    <li class="cart-row">--}}
{{--                                        <img src="assets/img/products/3.svg" alt="" />--}}
{{--                                        <span class="item-meta">--}}
{{--            	                                <span class="item-name">Military Short</span>--}}
{{--                                        <span class="meta-info">--}}
{{--            	                                    <span class="item-price">$39.00</span>--}}
{{--                                        <span class="item-quantity">Qty: 01</span>--}}
{{--                                        </span>--}}
{{--                                        </span>--}}
{{--                                    </li>--}}

{{--                                    <li class="cart-row">--}}
{{--                                        <img src="assets/img/products/4.svg" alt="" />--}}
{{--                                        <span class="item-meta">--}}
{{--            	                                <span class="item-name">Cool Backpack</span>--}}
{{--                                        <span class="meta-info">--}}
{{--            	                                    <span class="item-price">$125.00</span>--}}
{{--                                        <span class="item-quantity">Qty: 01</span>--}}
{{--                                        </span>--}}
{{--                                        </span>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}

{{--                                <a href="#" class="button primary-button is-raised">Checkout</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div id="account-dropdown" class="navbar-item is-account drop-trigger has-caret">--}}
{{--                        <div class="user-image">--}}
{{--                            <img src="https://via.placeholder.com/400x400" data-demo-src="assets/img/avatars/jenna.png" alt="">--}}
{{--                            <span class="indicator"></span>--}}
{{--                        </div>--}}

{{--                        <div class="nav-drop is-account-dropdown">--}}
{{--                            <div class="inner">--}}
{{--                                <div class="nav-drop-header">--}}
{{--                                    <span class="username">Jenna Davis</span>--}}
{{--                                    <label class="theme-toggle">--}}
{{--                                        <input type="checkbox">--}}
{{--                                        <span class="toggler">--}}
{{--            	                                <span class="dark">--}}
{{--            	                                    <i data-feather="moon"></i>--}}
{{--            	                                </span>--}}
{{--                                        <span class="light">--}}
{{--            	                                    <i data-feather="sun"></i>--}}
{{--            	                                </span>--}}
{{--                                        </span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <div class="nav-drop-body account-items">--}}
{{--                                    <a id="profile-link" href="profile-main.html" class="account-item">--}}
{{--                                        <div class="media">--}}
{{--                                            <div class="media-left">--}}
{{--                                                <div class="image">--}}
{{--                                                    <img src="https://via.placeholder.com/400x400" data-demo-src="assets/img/avatars/jenna.png" alt="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="media-content">--}}
{{--                                                <h3>Jenna Davis</h3>--}}
{{--                                                <small>Main account</small>--}}
{{--                                            </div>--}}
{{--                                            <div class="media-right">--}}
{{--                                                <i data-feather="check"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <hr class="account-divider">--}}
{{--                                    <a href="pages-main.html" class="account-item">--}}
{{--                                        <div class="media">--}}
{{--                                            <div class="media-left">--}}
{{--                                                <div class="image">--}}
{{--                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/hanzo.svg" alt="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="media-content">--}}
{{--                                                <h3>Css Ninja</h3>--}}
{{--                                                <small>Company page</small>--}}
{{--                                            </div>--}}
{{--                                            <div class="media-right is-hidden">--}}
{{--                                                <i data-feather="check"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a href="pages-main.html" class="account-item">--}}
{{--                                        <div class="media">--}}
{{--                                            <div class="media-left">--}}
{{--                                                <div class="image">--}}
{{--                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/icons/logos/fastpizza.svg" alt="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="media-content">--}}
{{--                                                <h3>Fast Pizza</h3>--}}
{{--                                                <small>Company page</small>--}}
{{--                                            </div>--}}
{{--                                            <div class="media-right is-hidden">--}}
{{--                                                <i data-feather="check"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a href="pages-main.html" class="account-item">--}}
{{--                                        <div class="media">--}}
{{--                                            <div class="media-left">--}}
{{--                                                <div class="image">--}}
{{--                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/icons/logos/slicer.svg" alt="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="media-content">--}}
{{--                                                <h3>Slicer</h3>--}}
{{--                                                <small>Company page</small>--}}
{{--                                            </div>--}}
{{--                                            <div class="media-right is-hidden">--}}
{{--                                                <i data-feather="check"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <hr class="account-divider">--}}
{{--                                    <a href="options-settings.html" class="account-item">--}}
{{--                                        <div class="media">--}}
{{--                                            <div class="icon-wrap">--}}
{{--                                                <i data-feather="settings"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="media-content">--}}
{{--                                                <h3>Settings</h3>--}}
{{--                                                <small>Access widget settings.</small>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a class="account-item">--}}
{{--                                        <div class="media">--}}
{{--                                            <div class="icon-wrap">--}}
{{--                                                <i data-feather="life-buoy"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="media-content">--}}
{{--                                                <h3>Help</h3>--}}
{{--                                                <small>Contact our support.</small>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a class="account-item">--}}
{{--                                        <div class="media">--}}
{{--                                            <div class="icon-wrap">--}}
{{--                                                <i data-feather="power"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="media-content">--}}
{{--                                                <h3>Log out</h3>--}}
{{--                                                <small>Log out from your account.</small>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Container -->
        <div id="main-feed" class="container sidebar-boxed" data-open-sidebar data-page-title="Timeline">

            <div class="toolbar-v1 is-narrow">
                <!-- Sidebar Trigger -->
                <div class="friendkit-hamburger sidebar-v1-trigger">
                    <span class="menu-toggle has-chevron">
            	            <span class="icon-box-toggle">
            	                <span class="rotate">
            	                    <i class="icon-line-top"></i>
            	                    <i class="icon-line-center"></i>
            	                    <i class="icon-line-bottom"></i>
            	                </span>
                    </span>
                    </span>
                </div>
                <h1>Timeline</h1>
            </div>
            <!-- Content placeholders at page load -->
            <!-- /html/partials/global/placeload/feed-page/feed-menu-shadow-dom.html -->
            <!-- this holds the animated content placeholders that show up before content -->
{{--            <div id="shadow-dom" class="view-wrap">--}}
{{--                <div class="columns">--}}

{{--                    <div class="column is-8">--}}

{{--                        <!-- Placeload element -->--}}
{{--                        <div class="placeload compose-placeload">--}}
{{--                            <div class="header">--}}
{{--                                <div class="content-shape is-lg loads"></div>--}}
{{--                                <div class="content-shape is-lg loads"></div>--}}
{{--                                <div class="content-shape is-lg loads"></div>--}}
{{--                            </div>--}}
{{--                            <div class="body">--}}
{{--                                <div class="img loads"></div>--}}
{{--                                <div class="inner-wrap">--}}
{{--                                    <div class="content-shape loads"></div>--}}
{{--                                    <div class="content-shape loads"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Placeload element -->--}}
{{--                        <div class="placeload post-placeload">--}}
{{--                            <div class="header">--}}
{{--                                <div class="img loads"></div>--}}
{{--                                <div class="header-content">--}}
{{--                                    <div class="content-shape loads"></div>--}}
{{--                                    <div class="content-shape loads"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="image-placeholder loads"></div>--}}
{{--                            <div class="placeholder-footer">--}}
{{--                                <div class="footer-block">--}}
{{--                                    <div class="img loads"></div>--}}
{{--                                    <div class="inner-wrap">--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Placeload element -->--}}
{{--                        <div class="placeload post-placeload">--}}
{{--                            <div class="header">--}}
{{--                                <div class="img loads"></div>--}}
{{--                                <div class="header-content">--}}
{{--                                    <div class="content-shape loads"></div>--}}
{{--                                    <div class="content-shape loads"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="image-placeholder loads"></div>--}}
{{--                            <div class="placeholder-footer">--}}
{{--                                <div class="footer-block">--}}
{{--                                    <div class="img loads"></div>--}}
{{--                                    <div class="inner-wrap">--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Placeload element -->--}}
{{--                        <div class="placeload post-placeload">--}}
{{--                            <div class="header">--}}
{{--                                <div class="img loads"></div>--}}
{{--                                <div class="header-content">--}}
{{--                                    <div class="content-shape loads"></div>--}}
{{--                                    <div class="content-shape loads"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="image-placeholder loads"></div>--}}
{{--                            <div class="placeholder-footer">--}}
{{--                                <div class="footer-block">--}}
{{--                                    <div class="img loads"></div>--}}
{{--                                    <div class="inner-wrap">--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Placeload element -->--}}
{{--                        <div class="placeload post-placeload">--}}
{{--                            <div class="header">--}}
{{--                                <div class="img loads"></div>--}}
{{--                                <div class="header-content">--}}
{{--                                    <div class="content-shape loads"></div>--}}
{{--                                    <div class="content-shape loads"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="image-placeholder loads"></div>--}}
{{--                            <div class="placeholder-footer">--}}
{{--                                <div class="footer-block">--}}
{{--                                    <div class="img loads"></div>--}}
{{--                                    <div class="inner-wrap">--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="column is-4">--}}

{{--                        <!-- Placeload element -->--}}
{{--                        <div class="placeload stories-placeload">--}}
{{--                            <div class="header">--}}
{{--                                <div class="content-shape loads"></div>--}}
{{--                            </div>--}}
{{--                            <div class="body">--}}
{{--                                <div class="flex-block">--}}
{{--                                    <div class="img loads"></div>--}}
{{--                                    <div class="inner-wrap">--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="flex-block">--}}
{{--                                    <div class="img loads"></div>--}}
{{--                                    <div class="inner-wrap">--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="flex-block">--}}
{{--                                    <div class="img loads"></div>--}}
{{--                                    <div class="inner-wrap">--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="flex-block">--}}
{{--                                    <div class="img loads"></div>--}}
{{--                                    <div class="inner-wrap">--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Placeload element -->--}}
{{--                        <div class="placeload mini-widget-placeload">--}}
{{--                            <div class="body">--}}
{{--                                <div class="inner-wrap">--}}
{{--                                    <div class="img loads"></div>--}}
{{--                                    <div class="content-shape loads"></div>--}}
{{--                                    <div class="content-shape loads"></div>--}}
{{--                                    <div class="content-shape loads"></div>--}}
{{--                                    <div class="button-shape loads"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Placeload element -->--}}
{{--                        <div class="placeload list-placeload">--}}
{{--                            <div class="header">--}}
{{--                                <div class="content-shape loads"></div>--}}
{{--                            </div>--}}
{{--                            <div class="body">--}}
{{--                                <div class="flex-block">--}}
{{--                                    <div class="img loads"></div>--}}
{{--                                    <div class="inner-wrap">--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="flex-block">--}}
{{--                                    <div class="img loads"></div>--}}
{{--                                    <div class="inner-wrap">--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="flex-block">--}}
{{--                                    <div class="img loads"></div>--}}
{{--                                    <div class="inner-wrap">--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="flex-block">--}}
{{--                                    <div class="img loads"></div>--}}
{{--                                    <div class="inner-wrap">--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                        <div class="content-shape loads"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Feed page main wrapper -->--}}
{{--            <div id="activity-feed" class="view-wrap true-dom is-hidden">--}}
{{--                <div class="columns">--}}

{{--                    <!-- Middle column -->--}}
{{--                    <div class="column is-8">--}}

{{--                        <!-- Publishing Area -->--}}
{{--                        <!-- /partials/pages/feed/compose-card.html -->--}}
{{--                        <div id="compose-card" class="card is-new-content">--}}
{{--                            <!-- Top tabs -->--}}
{{--                            <div class="tabs-wrapper">--}}
{{--                                <div class="tabs is-boxed is-fullwidth">--}}
{{--                                    <ul>--}}
{{--                                        <li class="is-active">--}}
{{--                                            <a>--}}
{{--                                                <span class="icon is-small"><i data-feather="edit-3"></i></span>--}}
{{--                                                <span>Publish</span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a class="modal-trigger" data-modal="albums-help-modal">--}}
{{--                                                <span class="icon is-small"><i data-feather="image"></i></span>--}}
{{--                                                <span>Albums</span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a class="modal-trigger" data-modal="videos-help-modal">--}}
{{--                                                <span class="icon is-small"><i data-feather="video"></i></span>--}}
{{--                                                <span>Video</span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <!-- Close X button -->--}}
{{--                                        <li class="close-wrap">--}}
{{--                                            <span class="close-publish">--}}
{{--                                                    <i data-feather="x"></i>--}}
{{--                                                </span>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}

{{--                                <!-- Tab content -->--}}
{{--                                <div class="tab-content">--}}
{{--                                    <!-- Compose form -->--}}
{{--                                    <div class="compose">--}}
{{--                                        <div class="compose-form">--}}
{{--                                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="">--}}
{{--                                            <div class="control">--}}
{{--                                                <textarea id="publish" class="textarea" rows="3" placeholder="Write something about you..."></textarea>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div id="feed-upload" class="feed-upload">--}}

{{--                                        </div>--}}

{{--                                        <div id="options-summary" class="options-summary"></div>--}}

{{--                                        <div id="tag-suboption" class="is-autocomplete is-suboption is-hidden">--}}
{{--                                            <!-- Tag friends suboption -->--}}
{{--                                            <div id="tag-list" class="tag-list"></div>--}}
{{--                                            <div class="control">--}}
{{--                                                <input id="users-autocpl" type="text" class="input" placeholder="Who are you with?">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i data-feather="search"></i>--}}
{{--                                                </div>--}}
{{--                                                <div class="close-icon is-main">--}}
{{--                                                    <i data-feather="x"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- /Tag friends suboption -->--}}

{{--                                        <!-- Activities suboption -->--}}
{{--                                        <div id="activities-suboption" class="is-autocomplete is-suboption is-hidden">--}}
{{--                                            <div id="activities-autocpl-wrapper" class="control has-margin">--}}
{{--                                                <input id="activities-autocpl" type="text" class="input" placeholder="What are you doing right now?">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i data-feather="search"></i>--}}
{{--                                                </div>--}}
{{--                                                <div class="close-icon is-main">--}}
{{--                                                    <i data-feather="x"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- Mood suboption -->--}}
{{--                                            <div id="mood-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">--}}
{{--                                                <div class="control has-margin">--}}
{{--                                                    <input id="mood-autocpl" type="text" class="input is-subactivity" placeholder="How do you feel?">--}}
{{--                                                    <div class="input-block">--}}
{{--                                                        Feels--}}
{{--                                                    </div>--}}
{{--                                                    <div class="close-icon is-subactivity">--}}
{{--                                                        <i data-feather="x"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- Drinking suboption child -->--}}
{{--                                            <div id="drinking-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">--}}
{{--                                                <div class="control has-margin">--}}
{{--                                                    <input id="drinking-autocpl" type="text" class="input is-subactivity" placeholder="What are you drinking?">--}}
{{--                                                    <div class="input-block">--}}
{{--                                                        Drinks--}}
{{--                                                    </div>--}}
{{--                                                    <div class="close-icon is-subactivity">--}}
{{--                                                        <i data-feather="x"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- Eating suboption child -->--}}
{{--                                            <div id="eating-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">--}}
{{--                                                <div class="control has-margin">--}}
{{--                                                    <input id="eating-autocpl" type="text" class="input is-subactivity" placeholder="What are you eating?">--}}
{{--                                                    <div class="input-block">--}}
{{--                                                        Eats--}}
{{--                                                    </div>--}}
{{--                                                    <div class="close-icon is-subactivity">--}}
{{--                                                        <i data-feather="x"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- Reading suboption child -->--}}
{{--                                            <div id="reading-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">--}}
{{--                                                <div class="control has-margin">--}}
{{--                                                    <input id="reading-autocpl" type="text" class="input is-subactivity" placeholder="What are you reading?">--}}
{{--                                                    <div class="input-block">--}}
{{--                                                        Reads--}}
{{--                                                    </div>--}}
{{--                                                    <div class="close-icon is-subactivity">--}}
{{--                                                        <i data-feather="x"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- Watching suboption child -->--}}
{{--                                            <div id="watching-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">--}}
{{--                                                <div class="control has-margin">--}}
{{--                                                    <input id="watching-autocpl" type="text" class="input is-subactivity" placeholder="What are you watching?">--}}
{{--                                                    <div class="input-block">--}}
{{--                                                        Watches--}}
{{--                                                    </div>--}}
{{--                                                    <div class="close-icon is-subactivity">--}}
{{--                                                        <i data-feather="x"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- Travel suboption child -->--}}
{{--                                            <div id="travel-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">--}}
{{--                                                <div class="control has-margin">--}}
{{--                                                    <input id="travel-autocpl" type="text" class="input is-subactivity" placeholder="Where are you going?">--}}
{{--                                                    <div class="input-block">--}}
{{--                                                        Travels--}}
{{--                                                    </div>--}}
{{--                                                    <div class="close-icon is-subactivity">--}}
{{--                                                        <i data-feather="x"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                        <!-- /Activities suboption -->--}}

{{--                                        <!-- Location suboption -->--}}
{{--                                        <div id="location-suboption" class="is-autocomplete is-suboption is-hidden">--}}
{{--                                            <div id="location-autocpl-wrapper" class="control is-location-wrapper has-margin">--}}
{{--                                                <input id="location-autocpl" type="text" class="input" placeholder="Where are you now?">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i data-feather="map-pin"></i>--}}
{{--                                                </div>--}}
{{--                                                <div class="close-icon is-main">--}}
{{--                                                    <i data-feather="x"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <!-- Link suboption -->--}}
{{--                                        <div id="link-suboption" class="is-autocomplete is-suboption is-hidden">--}}
{{--                                            <div id="link-autocpl-wrapper" class="control is-location-wrapper has-margin">--}}
{{--                                                <input id="link-autocpl" type="text" class="input" placeholder="Enter the link URL">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i data-feather="link-2"></i>--}}
{{--                                                </div>--}}
{{--                                                <div class="close-icon is-main">--}}
{{--                                                    <i data-feather="x"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <!-- GIF suboption -->--}}
{{--                                        <div id="gif-suboption" class="is-autocomplete is-suboption is-hidden">--}}
{{--                                            <div id="gif-autocpl-wrapper" class="control is-gif-wrapper has-margin">--}}
{{--                                                <input id="gif-autocpl" type="text" class="input" placeholder="Search a GIF to add" autofocus>--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i data-feather="search"></i>--}}
{{--                                                </div>--}}
{{--                                                <div class="close-icon is-main">--}}
{{--                                                    <i data-feather="x"></i>--}}
{{--                                                </div>--}}
{{--                                                <div class="gif-dropdown">--}}
{{--                                                    <div class="inner">--}}
{{--                                                        <div class="gif-block">--}}
{{--                                                            <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/1.gif" alt="">--}}
{{--                                                            <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/2.gif" alt="">--}}
{{--                                                            <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/3.gif" alt="">--}}
{{--                                                            <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/4.gif" alt="">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="gif-block">--}}
{{--                                                            <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/5.gif" alt="">--}}
{{--                                                            <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/6.gif" alt="">--}}
{{--                                                            <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/7.gif" alt="">--}}
{{--                                                            <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/8.gif" alt="">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="gif-block">--}}
{{--                                                            <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/9.gif" alt="">--}}
{{--                                                            <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/10.gif" alt="">--}}
{{--                                                            <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/11.gif" alt="">--}}
{{--                                                            <img src="https://via.placeholder.com/478x344" data-demo-src="assets/img/demo/gif/12.gif" alt="">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /Compose form -->--}}

{{--                                    <!-- General extended options -->--}}
{{--                                    <div id="extended-options" class="compose-options is-hidden">--}}
{{--                                        <div class="columns is-multiline is-full">--}}
{{--                                            <!-- Upload action -->--}}
{{--                                            <div class="column is-6 is-narrower">--}}
{{--                                                <div class="compose-option is-centered">--}}
{{--                                                    <i data-feather="camera"></i>--}}
{{--                                                    <span>Photo/Video</span>--}}
{{--                                                    <input id="feed-upload-input-1" type="file" accept=".png, .jpg, .jpeg" onchange="readURL(this)">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- Mood action -->--}}
{{--                                            <div class="column is-6 is-narrower">--}}
{{--                                                <div id="extended-show-activities" class="compose-option is-centered">--}}
{{--                                                    <img src="assets/img/icons/emoji/emoji-1.svg" alt="">--}}
{{--                                                    <span>Mood/Activity</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- Tag friends action -->--}}
{{--                                            <div class="column is-6 is-narrower">--}}
{{--                                                <div id="open-tag-suboption" class="compose-option is-centered">--}}
{{--                                                    <i data-feather="tag"></i>--}}
{{--                                                    <span>Tag friends</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- Post location action -->--}}
{{--                                            <div class="column is-6 is-narrower">--}}
{{--                                                <div id="open-location-suboption" class="compose-option is-centered">--}}
{{--                                                    <i data-feather="map-pin"></i>--}}
{{--                                                    <span>Post location</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- Share link action -->--}}
{{--                                            <div class="column is-6 is-narrower">--}}
{{--                                                <div id="open-link-suboption" class="compose-option is-centered">--}}
{{--                                                    <i data-feather="link-2"></i>--}}
{{--                                                    <span>Share link</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- Post GIF action -->--}}
{{--                                            <div class="column is-6 is-narrower">--}}
{{--                                                <div id="open-gif-suboption" class="compose-option is-centered">--}}
{{--                                                    <i data-feather="image"></i>--}}
{{--                                                    <span>Post GIF</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /General extended options -->--}}

{{--                                    <!-- General basic options -->--}}
{{--                                    <div id="basic-options" class="compose-options">--}}
{{--                                        <!-- Upload action -->--}}
{{--                                        <div class="compose-option">--}}
{{--                                            <i data-feather="camera"></i>--}}
{{--                                            <span>Media</span>--}}
{{--                                            <input id="feed-upload-input-2" type="file" type="file" accept=".png, .jpg, .jpeg" onchange="readURL(this)">--}}
{{--                                        </div>--}}
{{--                                        <!-- Mood action -->--}}
{{--                                        <div id="show-activities" class="compose-option">--}}
{{--                                            <img src="assets/img/icons/emoji/emoji-1.svg" alt="">--}}
{{--                                            <span>Activity</span>--}}
{{--                                        </div>--}}
{{--                                        <!-- Expand action -->--}}
{{--                                        <div id="open-extended-options" class="compose-option">--}}
{{--                                            <i data-feather="more-horizontal"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /General basic options -->--}}

{{--                                    <!-- Hidden Options -->--}}
{{--                                    <div class="hidden-options">--}}
{{--                                        <div class="target-channels">--}}
{{--                                            <!-- Publication Channel -->--}}
{{--                                            <div class="channel">--}}
{{--                                                <div class="round-checkbox is-small">--}}
{{--                                                    <div>--}}
{{--                                                        <input type="checkbox" id="checkbox-1" checked>--}}
{{--                                                        <label for="checkbox-1"></label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="channel-icon">--}}
{{--                                                    <i data-feather="bell"></i>--}}
{{--                                                </div>--}}
{{--                                                <div class="channel-name">Activity Feed</div>--}}
{{--                                                <!-- Dropdown menu -->--}}
{{--                                                <div class="dropdown is-spaced is-modern is-right is-neutral dropdown-trigger">--}}
{{--                                                    <div>--}}
{{--                                                        <button class="button" aria-haspopup="true">--}}
{{--                                                            <i class="main-icon" data-feather="smile"></i>--}}
{{--                                                            <span>Friends</span>--}}
{{--                                                            <i class="caret" data-feather="chevron-down"></i>--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="dropdown-menu" role="menu">--}}
{{--                                                        <div class="dropdown-content">--}}
{{--                                                            <a href="#" class="dropdown-item">--}}
{{--                                                                <div class="media">--}}
{{--                                                                    <i data-feather="globe"></i>--}}
{{--                                                                    <div class="media-content">--}}
{{--                                                                        <h3>Public</h3>--}}
{{--                                                                        <small>Anyone can see this publication.</small>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                            <a class="dropdown-item">--}}
{{--                                                                <div class="media">--}}
{{--                                                                    <i data-feather="users"></i>--}}
{{--                                                                    <div class="media-content">--}}
{{--                                                                        <h3>Friends</h3>--}}
{{--                                                                        <small>only friends can see this publication.</small>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                            <a class="dropdown-item">--}}
{{--                                                                <div class="media">--}}
{{--                                                                    <i data-feather="user"></i>--}}
{{--                                                                    <div class="media-content">--}}
{{--                                                                        <h3>Specific friends</h3>--}}
{{--                                                                        <small>Don't show it to some friends.</small>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                            <hr class="dropdown-divider">--}}
{{--                                                            <a class="dropdown-item">--}}
{{--                                                                <div class="media">--}}
{{--                                                                    <i data-feather="lock"></i>--}}
{{--                                                                    <div class="media-content">--}}
{{--                                                                        <h3>Only me</h3>--}}
{{--                                                                        <small>Only me can see this publication.</small>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- Publication Channel -->--}}
{{--                                            <div class="channel">--}}
{{--                                                <div class="round-checkbox is-small">--}}
{{--                                                    <div>--}}
{{--                                                        <input type="checkbox" id="checkbox-2">--}}
{{--                                                        <label for="checkbox-2"></label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="story-icon">--}}
{{--                                                    <div class="plus-icon">--}}
{{--                                                        <i data-feather="plus"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="channel-name">My Story</div>--}}
{{--                                                <!-- Dropdown menu -->--}}
{{--                                                <div class="dropdown is-spaced is-modern is-right is-neutral dropdown-trigger">--}}
{{--                                                    <div>--}}
{{--                                                        <button class="button" aria-haspopup="true">--}}
{{--                                                            <i class="main-icon" data-feather="smile"></i>--}}
{{--                                                            <span>Friends</span>--}}
{{--                                                            <i class="caret" data-feather="chevron-down"></i>--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="dropdown-menu" role="menu">--}}
{{--                                                        <div class="dropdown-content">--}}
{{--                                                            <a href="#" class="dropdown-item">--}}
{{--                                                                <div class="media">--}}
{{--                                                                    <i data-feather="globe"></i>--}}
{{--                                                                    <div class="media-content">--}}
{{--                                                                        <h3>Public</h3>--}}
{{--                                                                        <small>Anyone can see this publication.</small>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                            <a class="dropdown-item">--}}
{{--                                                                <div class="media">--}}
{{--                                                                    <i data-feather="users"></i>--}}
{{--                                                                    <div class="media-content">--}}
{{--                                                                        <h3>Friends</h3>--}}
{{--                                                                        <small>only friends can see this publication.</small>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                            <a class="dropdown-item">--}}
{{--                                                                <div class="media">--}}
{{--                                                                    <i data-feather="users"></i>--}}
{{--                                                                    <div class="media-content">--}}
{{--                                                                        <h3>Friends and contacts</h3>--}}
{{--                                                                        <small>Your friends and contacts.</small>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <!-- Friends list -->--}}
{{--                                        <div class="friends-list is-hidden">--}}
{{--                                            <!-- Header -->--}}
{{--                                            <div class="list-header">--}}
{{--                                                <span>Send in a message</span>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <a id="open-compose-search" href="javascript:void(0);" class="search-trigger">--}}
{{--                                                        <i data-feather="search"></i>--}}
{{--                                                    </a>--}}
{{--                                                    <!-- Hidden filter input -->--}}
{{--                                                    <div id="compose-search" class="control is-hidden">--}}
{{--                                                        <input type="text" class="input" placeholder="Search People">--}}
{{--                                                        <span>--}}
{{--                                                                <i data-feather="search"></i>--}}
{{--                                                            </span>--}}
{{--                                                    </div>--}}
{{--                                                    <a href="javascript:void(0);" class="is-inverted modal-trigger" data-modal="create-group-modal">Create group</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- List body -->--}}
{{--                                            <div class="list-body">--}}

{{--                                                <!-- Friend -->--}}
{{--                                                <div class="friend-block">--}}
{{--                                                    <div class="round-checkbox is-small">--}}
{{--                                                        <div>--}}
{{--                                                            <input type="checkbox" id="checkbox-3">--}}
{{--                                                            <label for="checkbox-3"></label>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" alt="">--}}
{{--                                                    <div class="friend-name">Dan Walker</div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Friend -->--}}
{{--                                                <div class="friend-block">--}}
{{--                                                    <div class="round-checkbox is-small">--}}
{{--                                                        <div>--}}
{{--                                                            <input type="checkbox" id="checkbox-4">--}}
{{--                                                            <label for="checkbox-4"></label>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" alt="">--}}
{{--                                                    <div class="friend-name">Daniel Wellington</div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Friend -->--}}
{{--                                                <div class="friend-block">--}}
{{--                                                    <div class="round-checkbox is-small">--}}
{{--                                                        <div>--}}
{{--                                                            <input type="checkbox" id="checkbox-5">--}}
{{--                                                            <label for="checkbox-5"></label>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" alt="">--}}
{{--                                                    <div class="friend-name">Stella Bergmann</div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Friend -->--}}
{{--                                                <div class="friend-block">--}}
{{--                                                    <div class="round-checkbox is-small">--}}
{{--                                                        <div>--}}
{{--                                                            <input type="checkbox" id="checkbox-6">--}}
{{--                                                            <label for="checkbox-6"></label>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" alt="">--}}
{{--                                                    <div class="friend-name">David Kim</div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Friend -->--}}
{{--                                                <div class="friend-block">--}}
{{--                                                    <div class="round-checkbox is-small">--}}
{{--                                                        <div>--}}
{{--                                                            <input type="checkbox" id="checkbox-7">--}}
{{--                                                            <label for="checkbox-7"></label>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" alt="">--}}
{{--                                                    <div class="friend-name">Nelly Schwartz</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Footer buttons -->--}}
{{--                                    <div class="more-wrap">--}}
{{--                                        <!-- View more button -->--}}
{{--                                        <button id="show-compose-friends" type="button" class="button is-more" aria-haspopup="true">--}}
{{--                                            <i data-feather="more-vertical"></i>--}}
{{--                                            <span>View More</span>--}}
{{--                                        </button>--}}
{{--                                        <!-- Publish button -->--}}
{{--                                        <button id="publish-button" type="button" class="button is-solid accent-button is-fullwidth is-disabled">--}}
{{--                                            Publish--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Post 1 -->--}}
{{--                        <!-- /partials/pages/feed/posts/feed-post1.html -->--}}
{{--                        <!-- POST #1 -->--}}
{{--                        <div id="feed-post-1" class="card is-post">--}}
{{--                            <!-- Main wrap -->--}}
{{--                            <div class="content-wrap">--}}
{{--                                <!-- Post header -->--}}
{{--                                <div class="card-heading">--}}
{{--                                    <!-- User meta -->--}}
{{--                                    <div class="user-block">--}}
{{--                                        <div class="image">--}}
{{--                                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="user-info">--}}
{{--                                            <a href="#">Dan Walker</a>--}}
{{--                                            <span class="time">July 26 2018, 01:03pm</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Right side dropdown -->--}}
{{--                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->--}}
{{--                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                        <div>--}}
{{--                                            <div class="button">--}}
{{--                                                <i data-feather="more-vertical"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="dropdown-menu" role="menu">--}}
{{--                                            <div class="dropdown-content">--}}
{{--                                                <a href="#" class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="bookmark"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Bookmark</h3>--}}
{{--                                                            <small>Add this post to your bookmarks.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                                <a class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="bell"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Notify me</h3>--}}
{{--                                                            <small>Send me the updates.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                                <hr class="dropdown-divider">--}}
{{--                                                <a href="#" class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="flag"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Flag</h3>--}}
{{--                                                            <small>In case of inappropriate content.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Post header -->--}}

{{--                                <!-- Post body -->--}}
{{--                                <div class="card-body">--}}
{{--                                    <!-- Post body text -->--}}
{{--                                    <div class="post-text">--}}
{{--                                        <p>Yesterday with--}}
{{--                                            <a href="#">@Karen Miller</a> and--}}
{{--                                            <a href="#">@Marvin Stemperd</a> at the--}}
{{--                                            <a href="#">#Rock'n'Rolla</a> concert in LA. Was totally fantastic! People were really excited about this one!</p>--}}
{{--                                    </div>--}}
{{--                                    <!-- Featured image -->--}}
{{--                                    <div class="post-image">--}}
{{--                                        <a data-fancybox="post1" data-lightbox-type="comments" data-thumb="assets/img/demo/unsplash/1.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/1.jpg">--}}
{{--                                            <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/1.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                        <!-- Action buttons -->--}}
{{--                                        <!-- /partials/pages/feed/buttons/feed-post-actions.html -->--}}
{{--                                        <div class="like-wrapper">--}}
{{--                                            <a href="javascript:void(0);" class="like-button">--}}
{{--                                                <i class="mdi mdi-heart not-liked bouncy"></i>--}}
{{--                                                <i class="mdi mdi-heart is-liked bouncy"></i>--}}
{{--                                                <span class="like-overlay"></span>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}

{{--                                        <div class="fab-wrapper is-share">--}}
{{--                                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" data-modal="share-modal">--}}
{{--                                                <i data-feather="link-2"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}

{{--                                        <div class="fab-wrapper is-comment">--}}
{{--                                            <a href="javascript:void(0);" class="small-fab">--}}
{{--                                                <i data-feather="message-circle"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Post body -->--}}

{{--                                <!-- Post footer -->--}}
{{--                                <div class="card-footer">--}}
{{--                                    <!-- Followers avatars -->--}}
{{--                                    <div class="likers-group">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1" alt="">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4" alt="">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" data-user-popover="7" alt="">--}}
{{--                                    </div>--}}
{{--                                    <!-- Followers text -->--}}
{{--                                    <div class="likers-text">--}}
{{--                                        <p>--}}
{{--                                            <a href="#">Milly</a>,--}}
{{--                                            <a href="#">David</a>--}}
{{--                                        </p>--}}
{{--                                        <p>and 23 more liked this</p>--}}
{{--                                    </div>--}}
{{--                                    <!-- Post statistics -->--}}
{{--                                    <div class="social-count">--}}
{{--                                        <div class="likes-count">--}}
{{--                                            <i data-feather="heart"></i>--}}
{{--                                            <span>27</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="shares-count">--}}
{{--                                            <i data-feather="link-2"></i>--}}
{{--                                            <span>9</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="comments-count">--}}
{{--                                            <i data-feather="message-circle"></i>--}}
{{--                                            <span>3</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Post footer -->--}}
{{--                            </div>--}}
{{--                            <!-- /Main wrap -->--}}

{{--                            <!-- Post #1 Comments -->--}}
{{--                            <div class="comments-wrap is-hidden">--}}
{{--                                <!-- Header -->--}}
{{--                                <div class="comments-heading">--}}
{{--                                    <h4>Comments--}}
{{--                                        <small>(8)</small></h4>--}}
{{--                                    <div class="close-comments">--}}
{{--                                        <i data-feather="x"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Header -->--}}

{{--                                <!-- Comments body -->--}}
{{--                                <div class="comments-body has-slimscroll">--}}

{{--                                    <!-- Comment -->--}}
{{--                                    <div class="media is-comment">--}}
{{--                                        <!-- User image -->--}}
{{--                                        <div class="media-left">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Content -->--}}
{{--                                        <div class="media-content">--}}
{{--                                            <a href="#">Dan Walker</a>--}}
{{--                                            <span class="time">28 minutes ago</span>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et--}}
{{--                                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.</p>--}}
{{--                                            <!-- Actions -->--}}
{{--                                            <div class="controls">--}}
{{--                                                <div class="like-count">--}}
{{--                                                    <i data-feather="thumbs-up"></i>--}}
{{--                                                    <span>4</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="reply">--}}
{{--                                                    <a href="#">Reply</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="edit">--}}
{{--                                                    <a href="#">Edit</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- Nested Comment -->--}}
{{--                                            <div class="media is-comment">--}}
{{--                                                <!-- User image -->--}}
{{--                                                <div class="media-left">--}}
{{--                                                    <div class="image">--}}
{{--                                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4" alt="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Content -->--}}
{{--                                                <div class="media-content">--}}
{{--                                                    <a href="#">David Kim</a>--}}
{{--                                                    <span class="time">15 minutes ago</span>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et--}}
{{--                                                        dolore magna aliqua.</p>--}}
{{--                                                    <!-- Actions -->--}}
{{--                                                    <div class="controls">--}}
{{--                                                        <div class="like-count">--}}
{{--                                                            <i data-feather="thumbs-up"></i>--}}
{{--                                                            <span>0</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="reply">--}}
{{--                                                            <a href="#">Reply</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Right side dropdown -->--}}
{{--                                                <div class="media-right">--}}
{{--                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                        <div>--}}
{{--                                                            <div class="button">--}}
{{--                                                                <i data-feather="more-vertical"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="dropdown-menu" role="menu">--}}
{{--                                                            <div class="dropdown-content">--}}
{{--                                                                <a class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="x"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Hide</h3>--}}
{{--                                                                            <small>Hide this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="dropdown-divider"></div>--}}
{{--                                                                <a href="#" class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="flag"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Report</h3>--}}
{{--                                                                            <small>Report this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /Nested Comment -->--}}

{{--                                        </div>--}}
{{--                                        <!-- Right side dropdown -->--}}
{{--                                        <div class="media-right">--}}
{{--                                            <!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->--}}
{{--                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                <div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <i data-feather="more-vertical"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="dropdown-menu" role="menu">--}}
{{--                                                    <div class="dropdown-content">--}}
{{--                                                        <a class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="x"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Hide</h3>--}}
{{--                                                                    <small>Hide this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                        <div class="dropdown-divider"></div>--}}
{{--                                                        <a href="#" class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="flag"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Report</h3>--}}
{{--                                                                    <small>Report this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /Comment -->--}}

{{--                                    <!-- Comment -->--}}
{{--                                    <div class="media is-comment">--}}
{{--                                        <!-- User image -->--}}
{{--                                        <div class="media-left">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Content -->--}}
{{--                                        <div class="media-content">--}}
{{--                                            <a href="#">Rolf Krupp</a>--}}
{{--                                            <span class="time">9 hours ago</span>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et--}}
{{--                                                dolore magna aliqua. Exercitation ullamco laboris consequat.</p>--}}
{{--                                            <!-- Actions -->--}}
{{--                                            <div class="controls">--}}
{{--                                                <div class="like-count">--}}
{{--                                                    <i data-feather="thumbs-up"></i>--}}
{{--                                                    <span>2</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="reply">--}}
{{--                                                    <a href="#">Reply</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- Nested Comment -->--}}
{{--                                            <div class="media is-comment">--}}
{{--                                                <!-- User image -->--}}
{{--                                                <div class="media-left">--}}
{{--                                                    <div class="image">--}}
{{--                                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Content -->--}}
{{--                                                <div class="media-content">--}}
{{--                                                    <a href="#">Elise Walker</a>--}}
{{--                                                    <span class="time">8 hours ago</span>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et--}}
{{--                                                        dolore magna aliqua.</p>--}}
{{--                                                    <!-- Actions -->--}}
{{--                                                    <div class="controls">--}}
{{--                                                        <div class="like-count">--}}
{{--                                                            <i data-feather="thumbs-up"></i>--}}
{{--                                                            <span>0</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="reply">--}}
{{--                                                            <a href="#">Reply</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Right side dropdown -->--}}
{{--                                                <div class="media-right">--}}
{{--                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                        <div>--}}
{{--                                                            <div class="button">--}}
{{--                                                                <i data-feather="more-vertical"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="dropdown-menu" role="menu">--}}
{{--                                                            <div class="dropdown-content">--}}
{{--                                                                <a class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="x"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Hide</h3>--}}
{{--                                                                            <small>Hide this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="dropdown-divider"></div>--}}
{{--                                                                <a href="#" class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="flag"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Report</h3>--}}
{{--                                                                            <small>Report this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /Nested Comment -->--}}

{{--                                            <!-- Nested Comment -->--}}
{{--                                            <div class="media is-comment">--}}
{{--                                                <!-- User image -->--}}
{{--                                                <div class="media-left">--}}
{{--                                                    <div class="image">--}}
{{--                                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Content -->--}}
{{--                                                <div class="media-content">--}}
{{--                                                    <a href="#">Rolf Krupp</a>--}}
{{--                                                    <span class="time">7 hours ago</span>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et--}}
{{--                                                        dolore magna aliqua.</p>--}}
{{--                                                    <!-- Actions -->--}}
{{--                                                    <div class="controls">--}}
{{--                                                        <div class="like-count">--}}
{{--                                                            <i data-feather="thumbs-up"></i>--}}
{{--                                                            <span>1</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="reply">--}}
{{--                                                            <a href="#">Reply</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Right side dropdown -->--}}
{{--                                                <div class="media-right">--}}
{{--                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                        <div>--}}
{{--                                                            <div class="button">--}}
{{--                                                                <i data-feather="more-vertical"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="dropdown-menu" role="menu">--}}
{{--                                                            <div class="dropdown-content">--}}
{{--                                                                <a class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="x"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Hide</h3>--}}
{{--                                                                            <small>Hide this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="dropdown-divider"></div>--}}
{{--                                                                <a href="#" class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="flag"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Report</h3>--}}
{{--                                                                            <small>Report this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /Nested Comment -->--}}

{{--                                            <!-- Nested Comment -->--}}
{{--                                            <div class="media is-comment">--}}
{{--                                                <!-- User image -->--}}
{{--                                                <div class="media-left">--}}
{{--                                                    <div class="image">--}}
{{--                                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Content -->--}}
{{--                                                <div class="media-content">--}}
{{--                                                    <a href="#">Elise Walker</a>--}}
{{--                                                    <span class="time">6 hours ago</span>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et--}}
{{--                                                        dolore magna aliqua.</p>--}}
{{--                                                    <!-- Actions -->--}}
{{--                                                    <div class="controls">--}}
{{--                                                        <div class="like-count">--}}
{{--                                                            <i data-feather="thumbs-up"></i>--}}
{{--                                                            <span>0</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="reply">--}}
{{--                                                            <a href="#">Reply</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Right side dropdown -->--}}
{{--                                                <div class="media-right">--}}
{{--                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                        <div>--}}
{{--                                                            <div class="button">--}}
{{--                                                                <i data-feather="more-vertical"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="dropdown-menu" role="menu">--}}
{{--                                                            <div class="dropdown-content">--}}
{{--                                                                <a class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="x"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Hide</h3>--}}
{{--                                                                            <small>Hide this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="dropdown-divider"></div>--}}
{{--                                                                <a href="#" class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="flag"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Report</h3>--}}
{{--                                                                            <small>Report this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /Nested Comment -->--}}

{{--                                        </div>--}}
{{--                                        <!-- Right side dropdown -->--}}
{{--                                        <div class="media-right">--}}
{{--                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                <div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <i data-feather="more-vertical"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="dropdown-menu" role="menu">--}}
{{--                                                    <div class="dropdown-content">--}}
{{--                                                        <a class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="x"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Hide</h3>--}}
{{--                                                                    <small>Hide this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                        <div class="dropdown-divider"></div>--}}
{{--                                                        <a href="#" class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="flag"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Report</h3>--}}
{{--                                                                    <small>Report this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /Comment -->--}}

{{--                                    <!-- Comment -->--}}
{{--                                    <div class="media is-comment">--}}
{{--                                        <!-- User image -->--}}
{{--                                        <div class="media-left">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/lana.jpeg" data-user-popover="10" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Content -->--}}
{{--                                        <div class="media-content">--}}
{{--                                            <a href="#">Lana Henrikssen</a>--}}
{{--                                            <span class="time">10 hours ago</span>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore--}}
{{--                                                et dolore magna aliqua.</p>--}}
{{--                                            <!-- Comment actions -->--}}
{{--                                            <div class="controls">--}}
{{--                                                <div class="like-count">--}}
{{--                                                    <i data-feather="thumbs-up"></i>--}}
{{--                                                    <span>5</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="reply">--}}
{{--                                                    <a href="#">Reply</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Right side dropdown -->--}}
{{--                                        <div class="media-right">--}}
{{--                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                <div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <i data-feather="more-vertical"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="dropdown-menu" role="menu">--}}
{{--                                                    <div class="dropdown-content">--}}
{{--                                                        <a class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="x"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Hide</h3>--}}
{{--                                                                    <small>Hide this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                        <div class="dropdown-divider"></div>--}}
{{--                                                        <a href="#" class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="flag"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Report</h3>--}}
{{--                                                                    <small>Report this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /Comment -->--}}

{{--                                </div>--}}
{{--                                <!-- /Comments body -->--}}

{{--                                <!-- Comments footer -->--}}
{{--                                <div class="card-footer">--}}
{{--                                    <div class="media post-comment has-emojis">--}}
{{--                                        <!-- Comment Textarea -->--}}
{{--                                        <div class="media-content">--}}
{{--                                            <div class="field">--}}
{{--                                                <p class="control">--}}
{{--                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <!-- Additional actions -->--}}
{{--                                            <div class="actions">--}}
{{--                                                <div class="image is-32x32">--}}
{{--                                                    <img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="toolbar">--}}
{{--                                                    <div class="action is-auto">--}}
{{--                                                        <i data-feather="at-sign"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="action is-emoji">--}}
{{--                                                        <i data-feather="smile"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="action is-upload">--}}
{{--                                                        <i data-feather="camera"></i>--}}
{{--                                                        <input type="file">--}}
{{--                                                    </div>--}}
{{--                                                    <a class="button is-solid primary-button raised">Post Comment</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Comments footer -->--}}
{{--                            </div>--}}
{{--                            <!-- /Post #1 Comments -->--}}
{{--                        </div>--}}
{{--                        <!-- POST #1 -->--}}
{{--                        <!-- Post 2 -->--}}
{{--                        <!-- /partials/pages/feed/posts/feed-post2.html -->--}}
{{--                        <!-- POST #2 -->--}}
{{--                        <div class="card is-post">--}}
{{--                            <!-- Main wrap -->--}}
{{--                            <div class="content-wrap">--}}
{{--                                <!-- Post header -->--}}
{{--                                <div class="card-heading">--}}
{{--                                    <!-- User meta -->--}}
{{--                                    <div class="user-block">--}}
{{--                                        <div class="image">--}}
{{--                                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="user-info">--}}
{{--                                            <a href="#">Edward Mayers</a>--}}
{{--                                            <span class="time">July 26 2018, 11:14am</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Right side dropdown -->--}}
{{--                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->--}}
{{--                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                        <div>--}}
{{--                                            <div class="button">--}}
{{--                                                <i data-feather="more-vertical"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="dropdown-menu" role="menu">--}}
{{--                                            <div class="dropdown-content">--}}
{{--                                                <a href="#" class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="bookmark"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Bookmark</h3>--}}
{{--                                                            <small>Add this post to your bookmarks.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                                <a class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="bell"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Notify me</h3>--}}
{{--                                                            <small>Send me the updates.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                                <hr class="dropdown-divider">--}}
{{--                                                <a href="#" class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="flag"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Flag</h3>--}}
{{--                                                            <small>In case of inappropriate content.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Post header -->--}}

{{--                                <!-- Post body -->--}}
{{--                                <div class="card-body">--}}
{{--                                    <!-- Post body text -->--}}
{{--                                    <div class="post-text">--}}
{{--                                        <p>You all know how i love bootstrap, but i didn't have time to dig deeper into it. Therefore i found this very--}}
{{--                                            interesting video i wanted to share with you all.--}}
{{--                                            <a href="#">#bootsrap #webdesign</a>--}}
{{--                                        <p>--}}
{{--                                    </div>--}}
{{--                                    <!-- Featured youtube video -->--}}
{{--                                    <div class="post-link is-video">--}}
{{--                                        <!-- Link image -->--}}
{{--                                        <div class="link-image">--}}
{{--                                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/demo/video/bootstrap.jpg" alt="">--}}
{{--                                            <div class="video-overlay"></div>--}}
{{--                                            <a class="video-button" data-fancybox href="https://www.youtube.com/watch?v=N8GksI_-iIM">--}}
{{--                                                <img src="assets/img/icons/video/play.svg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <!-- Link content -->--}}
{{--                                        <div class="link-content">--}}
{{--                                            <h4>--}}
{{--                                                <a href="#">What's new in Bootstrap 4 ?</a>--}}
{{--                                            </h4>--}}
{{--                                            <p>Before I create the new Bootstrap 4 crash course I want to go over some of the changes from Bootstrap--}}
{{--                                                3.</p>--}}
{{--                                            <small>Youtube.com</small>--}}
{{--                                        </div>--}}
{{--                                        <!-- Post actions -->--}}
{{--                                        <!-- /partials/pages/feed/buttons/feed-post-actions.html -->--}}
{{--                                        <div class="like-wrapper">--}}
{{--                                            <a href="javascript:void(0);" class="like-button">--}}
{{--                                                <i class="mdi mdi-heart not-liked bouncy"></i>--}}
{{--                                                <i class="mdi mdi-heart is-liked bouncy"></i>--}}
{{--                                                <span class="like-overlay"></span>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}

{{--                                        <div class="fab-wrapper is-share">--}}
{{--                                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" data-modal="share-modal">--}}
{{--                                                <i data-feather="link-2"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}

{{--                                        <div class="fab-wrapper is-comment">--}}
{{--                                            <a href="javascript:void(0);" class="small-fab">--}}
{{--                                                <i data-feather="message-circle"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Post body -->--}}

{{--                                <!-- Post footer -->--}}
{{--                                <div class="card-footer">--}}
{{--                                    <!-- Followers -->--}}
{{--                                    <div class="likers-group">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" data-user-popover="3" alt="">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="likers-text">--}}
{{--                                        <p>--}}
{{--                                            <a href="#">Daniel</a> and--}}
{{--                                            <a href="#">Elise</a>--}}
{{--                                        </p>--}}
{{--                                        <p>liked this</p>--}}
{{--                                    </div>--}}
{{--                                    <!-- Post statistics -->--}}
{{--                                    <div class="social-count">--}}
{{--                                        <div class="likes-count">--}}
{{--                                            <i data-feather="heart"></i>--}}
{{--                                            <span>2</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="shares-count">--}}
{{--                                            <i data-feather="link-2"></i>--}}
{{--                                            <span>0</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="comments-count">--}}
{{--                                            <i data-feather="message-circle"></i>--}}
{{--                                            <span>2</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Post footer -->--}}
{{--                            </div>--}}
{{--                            <!-- /Main wrap -->--}}

{{--                            <!-- Post #2 comments -->--}}
{{--                            <div class="comments-wrap is-hidden">--}}
{{--                                <!-- Header -->--}}
{{--                                <div class="comments-heading">--}}
{{--                                    <h4>Comments--}}
{{--                                        <small>(2)</small></h4>--}}
{{--                                    <div class="close-comments">--}}
{{--                                        <i data-feather="x"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Header -->--}}

{{--                                <!-- Comments body -->--}}
{{--                                <div class="comments-body has-slimscroll">--}}

{{--                                    <!-- Comment -->--}}
{{--                                    <div class="media is-comment">--}}
{{--                                        <!-- User image -->--}}
{{--                                        <div class="media-left">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Content -->--}}
{{--                                        <div class="media-content">--}}
{{--                                            <a href="#">Elise Walker</a>--}}
{{--                                            <span class="time">2 days ago</span>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et--}}
{{--                                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.</p>--}}
{{--                                            <!-- Comment actions -->--}}
{{--                                            <div class="controls">--}}
{{--                                                <div class="like-count">--}}
{{--                                                    <i data-feather="thumbs-up"></i>--}}
{{--                                                    <span>1</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="reply">--}}
{{--                                                    <a href="#">Reply</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- Nested Comment -->--}}
{{--                                            <div class="media is-comment">--}}
{{--                                                <!-- User image -->--}}
{{--                                                <div class="media-left">--}}
{{--                                                    <div class="image">--}}
{{--                                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" data-user-popover="3" alt="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Content -->--}}
{{--                                                <div class="media-content">--}}
{{--                                                    <a href="#">Daniel Wellington</a>--}}
{{--                                                    <span class="time">2 days ago</span>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et--}}
{{--                                                        dolore magna aliqua.</p>--}}
{{--                                                    <!-- Comment actions -->--}}
{{--                                                    <div class="controls">--}}
{{--                                                        <div class="like-count">--}}
{{--                                                            <i data-feather="thumbs-up"></i>--}}
{{--                                                            <span>0</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="reply">--}}
{{--                                                            <a href="#">Reply</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Right side dropdown -->--}}
{{--                                                <div class="media-right">--}}
{{--                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                        <div>--}}
{{--                                                            <div class="button">--}}
{{--                                                                <i data-feather="more-vertical"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="dropdown-menu" role="menu">--}}
{{--                                                            <div class="dropdown-content">--}}
{{--                                                                <a class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="x"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Hide</h3>--}}
{{--                                                                            <small>Hide this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="dropdown-divider"></div>--}}
{{--                                                                <a href="#" class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="flag"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Report</h3>--}}
{{--                                                                            <small>Report this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /Nested Comment -->--}}

{{--                                        </div>--}}
{{--                                        <!-- Right side dropdown -->--}}
{{--                                        <div class="media-right">--}}
{{--                                            <!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->--}}
{{--                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                <div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <i data-feather="more-vertical"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="dropdown-menu" role="menu">--}}
{{--                                                    <div class="dropdown-content">--}}
{{--                                                        <a class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="x"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Hide</h3>--}}
{{--                                                                    <small>Hide this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                        <div class="dropdown-divider"></div>--}}
{{--                                                        <a href="#" class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="flag"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Report</h3>--}}
{{--                                                                    <small>Report this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /Comment -->--}}

{{--                                </div>--}}
{{--                                <!-- /Comments body -->--}}

{{--                                <!-- Comments footer -->--}}
{{--                                <div class="card-footer">--}}
{{--                                    <!-- User image -->--}}
{{--                                    <div class="media post-comment has-emojis">--}}
{{--                                        <!-- Textarea -->--}}
{{--                                        <div class="media-content">--}}
{{--                                            <div class="field">--}}
{{--                                                <p class="control">--}}
{{--                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <!-- Additional actions -->--}}
{{--                                            <div class="actions">--}}
{{--                                                <div class="image is-32x32">--}}
{{--                                                    <img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="toolbar">--}}
{{--                                                    <div class="action is-auto">--}}
{{--                                                        <i data-feather="at-sign"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="action is-emoji">--}}
{{--                                                        <i data-feather="smile"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="action is-upload">--}}
{{--                                                        <i data-feather="camera"></i>--}}
{{--                                                        <input type="file">--}}
{{--                                                    </div>--}}
{{--                                                    <a class="button is-solid primary-button raised">Post Comment</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Comments footer -->--}}
{{--                            </div>--}}
{{--                            <!-- /Post #2 comments -->--}}
{{--                        </div>--}}
{{--                        <!-- /POST #2 -->--}}
{{--                        <!-- Post 3 -->--}}
{{--                        <!-- /partials/pages/feed/posts/feed-post3.html -->--}}
{{--                        <!-- POST #3 -->--}}
{{--                        <div class="card is-post">--}}
{{--                            <!-- Main wrap -->--}}
{{--                            <div class="content-wrap">--}}
{{--                                <!-- Header -->--}}
{{--                                <div class="card-heading">--}}
{{--                                    <div class="user-block">--}}
{{--                                        <div class="image">--}}
{{--                                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="user-info">--}}
{{--                                            <a href="#">Elise Walker</a>--}}
{{--                                            <span class="time">July 19 2018, 19:42pm</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->--}}
{{--                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                        <div>--}}
{{--                                            <div class="button">--}}
{{--                                                <i data-feather="more-vertical"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="dropdown-menu" role="menu">--}}
{{--                                            <div class="dropdown-content">--}}
{{--                                                <a href="#" class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="bookmark"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Bookmark</h3>--}}
{{--                                                            <small>Add this post to your bookmarks.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                                <a class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="bell"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Notify me</h3>--}}
{{--                                                            <small>Send me the updates.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                                <hr class="dropdown-divider">--}}
{{--                                                <a href="#" class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="flag"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Flag</h3>--}}
{{--                                                            <small>In case of inappropriate content.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Header -->--}}

{{--                                <!-- Post body -->--}}
{{--                                <div class="card-body">--}}
{{--                                    <!-- Post body text -->--}}
{{--                                    <div class="post-text">--}}
{{--                                        <p>Thanks a lot to--}}
{{--                                            <a href="#">@Gaelle</a> and--}}
{{--                                            <a href="#">@Rolf</a> for this wonderful team lunch. The food was really tasty and we had some great laughs. Thanks--}}
{{--                                            to all the team, you're all awesome !--}}
{{--                                        <p>--}}
{{--                                    </div>--}}
{{--                                    <!-- Featured image -->--}}
{{--                                    <div class="post-image">--}}
{{--                                        <a data-fancybox="post2" data-lightbox-type="comments" data-thumb="assets/img/demo/unsplash/2.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/2.jpg">--}}
{{--                                            <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/2.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                        <!-- Post actions -->--}}
{{--                                        <!-- /partials/pages/feed/buttons/feed-post-actions.html -->--}}
{{--                                        <div class="like-wrapper">--}}
{{--                                            <a href="javascript:void(0);" class="like-button">--}}
{{--                                                <i class="mdi mdi-heart not-liked bouncy"></i>--}}
{{--                                                <i class="mdi mdi-heart is-liked bouncy"></i>--}}
{{--                                                <span class="like-overlay"></span>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}

{{--                                        <div class="fab-wrapper is-share">--}}
{{--                                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" data-modal="share-modal">--}}
{{--                                                <i data-feather="link-2"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}

{{--                                        <div class="fab-wrapper is-comment">--}}
{{--                                            <a href="javascript:void(0);" class="small-fab">--}}
{{--                                                <i data-feather="message-circle"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Post body -->--}}

{{--                                <!-- Post footer -->--}}
{{--                                <div class="card-footer">--}}
{{--                                    <!-- Followers -->--}}
{{--                                    <div class="likers-group">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/gaelle.jpeg" data-user-popover="11" alt="">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" data-user-popover="9" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="likers-text">--}}
{{--                                        <p>--}}
{{--                                            <a href="#">Gaelle</a>,--}}
{{--                                            <a href="#">Edward</a>--}}
{{--                                        </p>--}}
{{--                                        <p>and 1 more liked this</p>--}}
{{--                                    </div>--}}
{{--                                    <!-- Post statistics -->--}}
{{--                                    <div class="social-count">--}}
{{--                                        <div class="likes-count">--}}
{{--                                            <i data-feather="heart"></i>--}}
{{--                                            <span>3</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="shares-count">--}}
{{--                                            <i data-feather="link-2"></i>--}}
{{--                                            <span>0</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="comments-count">--}}
{{--                                            <i data-feather="message-circle"></i>--}}
{{--                                            <span>5</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Post footer -->--}}
{{--                            </div>--}}
{{--                            <!-- /Main wrap -->--}}

{{--                            <!-- Post #3 comments -->--}}
{{--                            <div class="comments-wrap is-hidden">--}}
{{--                                <!-- Header -->--}}
{{--                                <div class="comments-heading">--}}
{{--                                    <h4>Comments--}}
{{--                                        <small>(5)</small></h4>--}}
{{--                                    <div class="close-comments">--}}
{{--                                        <i data-feather="x"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Header -->--}}

{{--                                <!-- Comments body -->--}}
{{--                                <div class="comments-body has-slimscroll">--}}

{{--                                    <!-- Comment -->--}}
{{--                                    <div class="media is-comment">--}}
{{--                                        <!-- User image -->--}}
{{--                                        <div class="media-left">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/gaelle.jpeg" data-user-popover="11" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Content -->--}}
{{--                                        <div class="media-content">--}}
{{--                                            <a href="#">Gaelle Morris</a>--}}
{{--                                            <span class="time">2 days ago</span>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et--}}
{{--                                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.</p>--}}
{{--                                            <!-- Comment actions -->--}}
{{--                                            <div class="controls">--}}
{{--                                                <div class="like-count">--}}
{{--                                                    <i data-feather="thumbs-up"></i>--}}
{{--                                                    <span>3</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="reply">--}}
{{--                                                    <a href="#">Reply</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- Nested Comment -->--}}
{{--                                            <div class="media is-comment">--}}
{{--                                                <!-- User image -->--}}
{{--                                                <div class="media-left">--}}
{{--                                                    <div class="image">--}}
{{--                                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Content -->--}}
{{--                                                <div class="media-content">--}}
{{--                                                    <a href="#">Elise Walker</a>--}}
{{--                                                    <span class="time">2 days ago</span>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et--}}
{{--                                                        dolore magna aliqua.</p>--}}
{{--                                                    <!-- Comment actions -->--}}
{{--                                                    <div class="controls">--}}
{{--                                                        <div class="like-count">--}}
{{--                                                            <i data-feather="thumbs-up"></i>--}}
{{--                                                            <span>1</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="reply">--}}
{{--                                                            <a href="#">Reply</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Right side dropdown -->--}}
{{--                                                <div class="media-right">--}}
{{--                                                    <!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->--}}
{{--                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                        <div>--}}
{{--                                                            <div class="button">--}}
{{--                                                                <i data-feather="more-vertical"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="dropdown-menu" role="menu">--}}
{{--                                                            <div class="dropdown-content">--}}
{{--                                                                <a class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="x"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Hide</h3>--}}
{{--                                                                            <small>Hide this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="dropdown-divider"></div>--}}
{{--                                                                <a href="#" class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="flag"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Report</h3>--}}
{{--                                                                            <small>Report this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /Nested Comment -->--}}

{{--                                            <!-- Nested Comment -->--}}
{{--                                            <div class="media is-comment">--}}
{{--                                                <!-- User image -->--}}
{{--                                                <div class="media-left">--}}
{{--                                                    <div class="image">--}}
{{--                                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Content -->--}}
{{--                                                <div class="media-content">--}}
{{--                                                    <a href="#">Rolf Krupp</a>--}}
{{--                                                    <span class="time">2 days ago</span>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt.</p>--}}
{{--                                                    <!-- Comment actions -->--}}
{{--                                                    <div class="controls">--}}
{{--                                                        <div class="like-count">--}}
{{--                                                            <i data-feather="thumbs-up"></i>--}}
{{--                                                            <span>1</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="reply">--}}
{{--                                                            <a href="#">Reply</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Right side dropdown -->--}}
{{--                                                <div class="media-right">--}}
{{--                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                        <div>--}}
{{--                                                            <div class="button">--}}
{{--                                                                <i data-feather="more-vertical"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="dropdown-menu" role="menu">--}}
{{--                                                            <div class="dropdown-content">--}}
{{--                                                                <a class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="x"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Hide</h3>--}}
{{--                                                                            <small>Hide this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="dropdown-divider"></div>--}}
{{--                                                                <a href="#" class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="flag"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Report</h3>--}}
{{--                                                                            <small>Report this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /Nested Comment -->--}}

{{--                                            <!-- Nested Comment -->--}}
{{--                                            <div class="media is-comment">--}}
{{--                                                <!-- User image -->--}}
{{--                                                <div class="media-left">--}}
{{--                                                    <div class="image">--}}
{{--                                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Content -->--}}
{{--                                                <div class="media-content">--}}
{{--                                                    <a href="#">Elise Walker</a>--}}
{{--                                                    <span class="time">2 days ago</span>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et--}}
{{--                                                        dolore magna aliqua.</p>--}}
{{--                                                    <!-- Comment actions -->--}}
{{--                                                    <div class="controls">--}}
{{--                                                        <div class="like-count">--}}
{{--                                                            <i data-feather="thumbs-up"></i>--}}
{{--                                                            <span>1</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="reply">--}}
{{--                                                            <a href="#">Reply</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Right side dropdown -->--}}
{{--                                                <div class="media-right">--}}
{{--                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                        <div>--}}
{{--                                                            <div class="button">--}}
{{--                                                                <i data-feather="more-vertical"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="dropdown-menu" role="menu">--}}
{{--                                                            <div class="dropdown-content">--}}
{{--                                                                <a class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="x"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Hide</h3>--}}
{{--                                                                            <small>Hide this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="dropdown-divider"></div>--}}
{{--                                                                <a href="#" class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="flag"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Report</h3>--}}
{{--                                                                            <small>Report this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /Nested Comment -->--}}

{{--                                        </div>--}}
{{--                                        <!-- Right side dropdown -->--}}
{{--                                        <div class="media-right">--}}
{{--                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                <div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <i data-feather="more-vertical"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="dropdown-menu" role="menu">--}}
{{--                                                    <div class="dropdown-content">--}}
{{--                                                        <a class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="x"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Hide</h3>--}}
{{--                                                                    <small>Hide this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                        <div class="dropdown-divider"></div>--}}
{{--                                                        <a href="#" class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="flag"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Report</h3>--}}
{{--                                                                    <small>Report this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /Comment -->--}}

{{--                                    <!-- Comment -->--}}
{{--                                    <div class="media is-comment">--}}
{{--                                        <!-- User image -->--}}
{{--                                        <div class="media-left">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" data-user-popover="9" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Content -->--}}
{{--                                        <div class="media-content">--}}
{{--                                            <a href="#">Nelly Schwartz</a>--}}
{{--                                            <span class="time">2 days ago</span>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et--}}
{{--                                                dolore magna aliqua.</p>--}}
{{--                                            <!-- Comment actions -->--}}
{{--                                            <div class="controls">--}}
{{--                                                <div class="like-count">--}}
{{--                                                    <i data-feather="thumbs-up"></i>--}}
{{--                                                    <span>1</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="reply">--}}
{{--                                                    <a href="#">Reply</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Right side dropdown -->--}}
{{--                                        <div class="media-right">--}}
{{--                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                <div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <i data-feather="more-vertical"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="dropdown-menu" role="menu">--}}
{{--                                                    <div class="dropdown-content">--}}
{{--                                                        <a class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="x"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Hide</h3>--}}
{{--                                                                    <small>Hide this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                        <div class="dropdown-divider"></div>--}}
{{--                                                        <a href="#" class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="flag"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Report</h3>--}}
{{--                                                                    <small>Report this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /Comment -->--}}
{{--                                </div>--}}
{{--                                <!-- Comments body -->--}}

{{--                                <!-- Comments footer -->--}}
{{--                                <div class="card-footer">--}}
{{--                                    <div class="media post-comment has-emojis">--}}
{{--                                        <!-- Textarea -->--}}
{{--                                        <div class="media-content">--}}
{{--                                            <div class="field">--}}
{{--                                                <p class="control">--}}
{{--                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <!-- Additional actions -->--}}
{{--                                            <div class="actions">--}}
{{--                                                <div class="image is-32x32">--}}
{{--                                                    <img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="toolbar">--}}
{{--                                                    <div class="action is-auto">--}}
{{--                                                        <i data-feather="at-sign"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="action is-emoji">--}}
{{--                                                        <i data-feather="smile"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="action is-upload">--}}
{{--                                                        <i data-feather="camera"></i>--}}
{{--                                                        <input type="file">--}}
{{--                                                    </div>--}}
{{--                                                    <a class="button is-solid primary-button raised">Post Comment</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Comments footer -->--}}
{{--                            </div>--}}
{{--                            <!-- /Post #3 Comments -->--}}
{{--                        </div>--}}
{{--                        <!-- /POST #3 -->--}}
{{--                        <!-- Post 4 -->--}}
{{--                        <!-- /partials/pages/feed/posts/feed-post4.html -->--}}
{{--                        <!-- POST #4 -->--}}
{{--                        <div class="card is-post">--}}
{{--                            <!-- Main wrap -->--}}
{{--                            <div class="content-wrap">--}}
{{--                                <!-- Header -->--}}
{{--                                <div class="card-heading">--}}
{{--                                    <div class="user-block">--}}
{{--                                        <div class="image">--}}
{{--                                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" data-user-popover="2" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="user-info">--}}
{{--                                            <a href="#">Stella Bergmann</a>--}}
{{--                                            <span class="time">July 19 2018, 15:13pm</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Right side dropdown -->--}}
{{--                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->--}}
{{--                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                        <div>--}}
{{--                                            <div class="button">--}}
{{--                                                <i data-feather="more-vertical"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="dropdown-menu" role="menu">--}}
{{--                                            <div class="dropdown-content">--}}
{{--                                                <a href="#" class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="bookmark"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Bookmark</h3>--}}
{{--                                                            <small>Add this post to your bookmarks.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                                <a class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="bell"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Notify me</h3>--}}
{{--                                                            <small>Send me the updates.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                                <hr class="dropdown-divider">--}}
{{--                                                <a href="#" class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="flag"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Flag</h3>--}}
{{--                                                            <small>In case of inappropriate content.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Header -->--}}

{{--                                <!-- Post body -->--}}
{{--                                <div class="card-body">--}}
{{--                                    <!-- Post body text -->--}}
{{--                                    <div class="post-text">--}}
{{--                                        <p>Hey friends ! Iam back and i wanted to share with you some awesome pictures we took during our trip to Santa--}}
{{--                                            Monica. We had wonderful holidays at the beach. Kisses to all !--}}
{{--                                        <p>--}}
{{--                                    </div>--}}
{{--                                    <!-- Featured image -->--}}
{{--                                    <div class="post-image">--}}
{{--                                        <!-- CSS masonry wrap -->--}}
{{--                                        <div class="masonry-grid">--}}
{{--                                            <!-- Left column -->--}}
{{--                                            <div class="masonry-column-left">--}}
{{--                                                <a data-fancybox="post3" data-lightbox-type="comments" data-thumb="assets/img/demo/unsplash/3.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/3.jpg">--}}
{{--                                                    <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/3.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                                <a data-fancybox="post3" data-lightbox-type="comments" data-thumb="assets/img/demo/unsplash/4.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/4.jpg">--}}
{{--                                                    <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/4.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <!-- Right column -->--}}
{{--                                            <div class="masonry-column-right">--}}
{{--                                                <a data-fancybox="post3" data-lightbox-type="comments" data-thumb="assets/img/demo/unsplash/5.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/5.jpg">--}}
{{--                                                    <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/5.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                                <a data-fancybox="post3" data-lightbox-type="comments" data-thumb="assets/img/demo/unsplash/6.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/6.jpg">--}}
{{--                                                    <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/6.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                                <a data-fancybox="post3" data-lightbox-type="comments" data-thumb="assets/img/demo/unsplash/7.jpg" href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/7.jpg">--}}
{{--                                                    <img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/7.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <!-- Post actions -->--}}
{{--                                            <!-- /partials/pages/feed/buttons/feed-post-actions.html -->--}}
{{--                                            <div class="like-wrapper">--}}
{{--                                                <a href="javascript:void(0);" class="like-button">--}}
{{--                                                    <i class="mdi mdi-heart not-liked bouncy"></i>--}}
{{--                                                    <i class="mdi mdi-heart is-liked bouncy"></i>--}}
{{--                                                    <span class="like-overlay"></span>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}

{{--                                            <div class="fab-wrapper is-share">--}}
{{--                                                <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" data-modal="share-modal">--}}
{{--                                                    <i data-feather="link-2"></i>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}

{{--                                            <div class="fab-wrapper is-comment">--}}
{{--                                                <a href="javascript:void(0);" class="small-fab">--}}
{{--                                                    <i data-feather="message-circle"></i>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Post body -->--}}

{{--                                <!-- Post footer -->--}}
{{--                                <div class="card-footer">--}}
{{--                                    <!-- Followers -->--}}
{{--                                    <div class="likers-group">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/mike.jpg" data-user-popover="12" alt="">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" data-user-popover="3" alt="">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="likers-text">--}}
{{--                                        <p>--}}
{{--                                            <a href="#">Gaelle</a>,--}}
{{--                                            <a href="#">Rolf</a>--}}
{{--                                        </p>--}}
{{--                                        <p>and 31 more liked this</p>--}}
{{--                                    </div>--}}
{{--                                    <!-- Post statistics -->--}}
{{--                                    <div class="social-count">--}}
{{--                                        <div class="likes-count">--}}
{{--                                            <i data-feather="heart"></i>--}}
{{--                                            <span>33</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="shares-count">--}}
{{--                                            <i data-feather="link-2"></i>--}}
{{--                                            <span>1</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="comments-count">--}}
{{--                                            <i data-feather="message-circle"></i>--}}
{{--                                            <span>9</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Post footer -->--}}
{{--                            </div>--}}
{{--                            <!-- Main wrap -->--}}

{{--                            <!-- Post #4 comments -->--}}
{{--                            <div class="comments-wrap is-hidden">--}}
{{--                                <!-- Header -->--}}
{{--                                <div class="comments-heading">--}}
{{--                                    <h4>Comments--}}
{{--                                        <small>(9)</small></h4>--}}
{{--                                    <div class="close-comments">--}}
{{--                                        <i data-feather="x"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Header -->--}}

{{--                                <!-- Comments body -->--}}
{{--                                <div class="comments-body has-slimscroll">--}}

{{--                                    <!-- Comment -->--}}
{{--                                    <div class="media is-comment">--}}
{{--                                        <!-- User image -->--}}
{{--                                        <div class="media-left">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Content -->--}}
{{--                                        <div class="media-content">--}}
{{--                                            <a href="#">Jenna Davis</a>--}}
{{--                                            <span class="time">30 minutes ago</span>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et--}}
{{--                                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.</p>--}}
{{--                                            <!-- Comment actions -->--}}
{{--                                            <div class="controls">--}}
{{--                                                <div class="like-count">--}}
{{--                                                    <i data-feather="thumbs-up"></i>--}}
{{--                                                    <span>0</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="reply">--}}
{{--                                                    <a href="#">Reply</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- Nested Comment -->--}}
{{--                                            <div class="media is-comment">--}}
{{--                                                <!-- User image -->--}}
{{--                                                <div class="media-left">--}}
{{--                                                    <div class="image">--}}
{{--                                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/lana.jpeg" data-user-popover="10" alt="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Content -->--}}
{{--                                                <div class="media-content">--}}
{{--                                                    <a href="#">Lana Henrikssen</a>--}}
{{--                                                    <span class="time">15 minutes ago</span>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>--}}
{{--                                                    <!-- Comment actions -->--}}
{{--                                                    <div class="controls">--}}
{{--                                                        <div class="like-count">--}}
{{--                                                            <i data-feather="thumbs-up"></i>--}}
{{--                                                            <span>2</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="reply">--}}
{{--                                                            <a href="#">Reply</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Right side dropdown -->--}}
{{--                                                <div class="media-right">--}}
{{--                                                    <!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->--}}
{{--                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                        <div>--}}
{{--                                                            <div class="button">--}}
{{--                                                                <i data-feather="more-vertical"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="dropdown-menu" role="menu">--}}
{{--                                                            <div class="dropdown-content">--}}
{{--                                                                <a class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="x"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Hide</h3>--}}
{{--                                                                            <small>Hide this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="dropdown-divider"></div>--}}
{{--                                                                <a href="#" class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="flag"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Report</h3>--}}
{{--                                                                            <small>Report this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /Nested Comment -->--}}

{{--                                            <!-- Nested Comment -->--}}
{{--                                            <div class="media is-comment">--}}
{{--                                                <!-- User image -->--}}
{{--                                                <div class="media-left">--}}
{{--                                                    <div class="image">--}}
{{--                                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4" alt="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Content -->--}}
{{--                                                <div class="media-content">--}}
{{--                                                    <a href="#">David Kim</a>--}}
{{--                                                    <span class="time">12 minutes ago</span>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et--}}
{{--                                                        dolore magna aliqua.</p>--}}
{{--                                                    <div class="controls">--}}
{{--                                                        <div class="like-count">--}}
{{--                                                            <i data-feather="thumbs-up"></i>--}}
{{--                                                            <span>5</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="reply">--}}
{{--                                                            <a href="#">Reply</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Right side dropdown -->--}}
{{--                                                <div class="media-right">--}}
{{--                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                        <div>--}}
{{--                                                            <div class="button">--}}
{{--                                                                <i data-feather="more-vertical"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="dropdown-menu" role="menu">--}}
{{--                                                            <div class="dropdown-content">--}}
{{--                                                                <a class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="x"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Hide</h3>--}}
{{--                                                                            <small>Hide this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="dropdown-divider"></div>--}}
{{--                                                                <a href="#" class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="flag"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Report</h3>--}}
{{--                                                                            <small>Report this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /Nested Comment -->--}}

{{--                                            <!-- Nested Comment -->--}}
{{--                                            <div class="media is-comment">--}}
{{--                                                <!-- User image -->--}}
{{--                                                <div class="media-left">--}}
{{--                                                    <div class="image">--}}
{{--                                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/mike.jpg" data-user-popover="12" alt="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Content -->--}}
{{--                                                <div class="media-content">--}}
{{--                                                    <a href="#">Mike Lasalle</a>--}}
{{--                                                    <span class="time">8 minutes ago</span>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt.</p>--}}
{{--                                                    <div class="controls">--}}
{{--                                                        <div class="like-count">--}}
{{--                                                            <i data-feather="thumbs-up"></i>--}}
{{--                                                            <span>5</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="reply">--}}
{{--                                                            <a href="#">Reply</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Right side dropdown -->--}}
{{--                                                <div class="media-right">--}}
{{--                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                        <div>--}}
{{--                                                            <div class="button">--}}
{{--                                                                <i data-feather="more-vertical"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="dropdown-menu" role="menu">--}}
{{--                                                            <div class="dropdown-content">--}}
{{--                                                                <a class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="x"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Hide</h3>--}}
{{--                                                                            <small>Hide this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="dropdown-divider"></div>--}}
{{--                                                                <a href="#" class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="flag"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Report</h3>--}}
{{--                                                                            <small>Report this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /Nested Comment -->--}}

{{--                                            <!-- Nested Comment -->--}}
{{--                                            <div class="media is-comment">--}}
{{--                                                <!-- User image -->--}}
{{--                                                <div class="media-left">--}}
{{--                                                    <div class="image">--}}
{{--                                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" data-user-popover="2" alt="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Content -->--}}
{{--                                                <div class="media-content">--}}
{{--                                                    <a href="#">Stella Bergmann</a>--}}
{{--                                                    <span class="time">Just now</span>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt.</p>--}}
{{--                                                    <div class="controls">--}}
{{--                                                        <div class="like-count">--}}
{{--                                                            <i data-feather="thumbs-up"></i>--}}
{{--                                                            <span>2</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="reply">--}}
{{--                                                            <a href="#">Reply</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Right side dropdown -->--}}
{{--                                                <div class="media-right">--}}
{{--                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                        <div>--}}
{{--                                                            <div class="button">--}}
{{--                                                                <i data-feather="more-vertical"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="dropdown-menu" role="menu">--}}
{{--                                                            <div class="dropdown-content">--}}
{{--                                                                <a class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="x"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Hide</h3>--}}
{{--                                                                            <small>Hide this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="dropdown-divider"></div>--}}
{{--                                                                <a href="#" class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="flag"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Report</h3>--}}
{{--                                                                            <small>Report this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /Nested Comment -->--}}

{{--                                        </div>--}}
{{--                                        <!-- Right side dropdown -->--}}
{{--                                        <div class="media-right">--}}
{{--                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                <div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <i data-feather="more-vertical"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="dropdown-menu" role="menu">--}}
{{--                                                    <div class="dropdown-content">--}}
{{--                                                        <a class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="x"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Hide</h3>--}}
{{--                                                                    <small>Hide this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                        <div class="dropdown-divider"></div>--}}
{{--                                                        <a href="#" class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="flag"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Report</h3>--}}
{{--                                                                    <small>Report this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /Comment -->--}}

{{--                                    <!-- Comment -->--}}
{{--                                    <div class="media is-comment">--}}
{{--                                        <!-- User image -->--}}
{{--                                        <div class="media-left">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" data-user-popover="3" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Content -->--}}
{{--                                        <div class="media-content">--}}
{{--                                            <a href="#">Daniel Wellington</a>--}}
{{--                                            <span class="time">5 hours ago</span>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore--}}
{{--                                                et dolore magna aliqua.</p>--}}
{{--                                            <!-- Comment actions -->--}}
{{--                                            <div class="controls">--}}
{{--                                                <div class="like-count">--}}
{{--                                                    <i data-feather="thumbs-up"></i>--}}
{{--                                                    <span>1</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="reply">--}}
{{--                                                    <a href="#">Reply</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Right side dropdown -->--}}
{{--                                        <div class="media-right">--}}
{{--                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                <div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <i data-feather="more-vertical"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="dropdown-menu" role="menu">--}}
{{--                                                    <div class="dropdown-content">--}}
{{--                                                        <a class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="x"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Hide</h3>--}}
{{--                                                                    <small>Hide this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                        <div class="dropdown-divider"></div>--}}
{{--                                                        <a href="#" class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="flag"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Report</h3>--}}
{{--                                                                    <small>Report this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /Comment -->--}}

{{--                                    <!-- Comment -->--}}
{{--                                    <div class="media is-comment">--}}
{{--                                        <!-- User image -->--}}
{{--                                        <div class="media-left">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/bobby.jpg" data-user-popover="8" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Content -->--}}
{{--                                        <div class="media-content">--}}
{{--                                            <a href="#">Bobby Brown</a>--}}
{{--                                            <span class="time">7 hours ago</span>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore--}}
{{--                                                et dolore magna aliqua.</p>--}}
{{--                                            <!-- Comment actions -->--}}
{{--                                            <div class="controls">--}}
{{--                                                <div class="like-count">--}}
{{--                                                    <i data-feather="thumbs-up"></i>--}}
{{--                                                    <span>1</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="reply">--}}
{{--                                                    <a href="#">Reply</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- Nested Comment -->--}}
{{--                                            <div class="media is-comment">--}}
{{--                                                <!-- User image -->--}}
{{--                                                <div class="media-left">--}}
{{--                                                    <div class="image">--}}
{{--                                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" data-user-popover="2" alt="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Content -->--}}
{{--                                                <div class="media-content">--}}
{{--                                                    <a href="#">Stella Bergmann</a>--}}
{{--                                                    <span class="time">7 hours ago</span>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt.</p>--}}
{{--                                                    <div class="controls">--}}
{{--                                                        <div class="like-count">--}}
{{--                                                            <i data-feather="thumbs-up"></i>--}}
{{--                                                            <span>2</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="reply">--}}
{{--                                                            <a href="#">Reply</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Right side dropdown -->--}}
{{--                                                <div class="media-right">--}}
{{--                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                        <div>--}}
{{--                                                            <div class="button">--}}
{{--                                                                <i data-feather="more-vertical"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="dropdown-menu" role="menu">--}}
{{--                                                            <div class="dropdown-content">--}}
{{--                                                                <a class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="x"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Hide</h3>--}}
{{--                                                                            <small>Hide this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="dropdown-divider"></div>--}}
{{--                                                                <a href="#" class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="flag"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Report</h3>--}}
{{--                                                                            <small>Report this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /Nested Comment -->--}}

{{--                                            <!-- Nested Comment -->--}}
{{--                                            <div class="media is-comment">--}}
{{--                                                <!-- User image -->--}}
{{--                                                <div class="media-left">--}}
{{--                                                    <div class="image">--}}
{{--                                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/lana.jpeg" data-user-popover="10" alt="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Content -->--}}
{{--                                                <div class="media-content">--}}
{{--                                                    <a href="#">Lana Henrikssen</a>--}}
{{--                                                    <span class="time">15 minutes ago</span>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>--}}
{{--                                                    <!-- Comment actions -->--}}
{{--                                                    <div class="controls">--}}
{{--                                                        <div class="like-count">--}}
{{--                                                            <i data-feather="thumbs-up"></i>--}}
{{--                                                            <span>2</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="reply">--}}
{{--                                                            <a href="#">Reply</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Right side dropdown -->--}}
{{--                                                <div class="media-right">--}}
{{--                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                        <div>--}}
{{--                                                            <div class="button">--}}
{{--                                                                <i data-feather="more-vertical"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="dropdown-menu" role="menu">--}}
{{--                                                            <div class="dropdown-content">--}}
{{--                                                                <a class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="x"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Hide</h3>--}}
{{--                                                                            <small>Hide this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="dropdown-divider"></div>--}}
{{--                                                                <a href="#" class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="flag"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Report</h3>--}}
{{--                                                                            <small>Report this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /Nested Comment -->--}}

{{--                                        </div>--}}
{{--                                        <!-- Right side dropdown -->--}}
{{--                                        <div class="media-right">--}}
{{--                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                <div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <i data-feather="more-vertical"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="dropdown-menu" role="menu">--}}
{{--                                                    <div class="dropdown-content">--}}
{{--                                                        <a class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="x"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Hide</h3>--}}
{{--                                                                    <small>Hide this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                        <div class="dropdown-divider"></div>--}}
{{--                                                        <a href="#" class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="flag"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Report</h3>--}}
{{--                                                                    <small>Report this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /Comment -->--}}

{{--                                </div>--}}
{{--                                <!-- /Comments body -->--}}

{{--                                <!-- Comments footer -->--}}
{{--                                <div class="card-footer">--}}
{{--                                    <div class="media post-comment has-emojis">--}}
{{--                                        <!-- Textarea -->--}}
{{--                                        <div class="media-content">--}}
{{--                                            <div class="field">--}}
{{--                                                <p class="control">--}}
{{--                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <!-- Additional actions -->--}}
{{--                                            <div class="actions">--}}
{{--                                                <div class="image is-32x32">--}}
{{--                                                    <img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="toolbar">--}}
{{--                                                    <div class="action is-auto">--}}
{{--                                                        <i data-feather="at-sign"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="action is-emoji">--}}
{{--                                                        <i data-feather="smile"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="action is-upload">--}}
{{--                                                        <i data-feather="camera"></i>--}}
{{--                                                        <input type="file">--}}
{{--                                                    </div>--}}
{{--                                                    <a class="button is-solid primary-button raised">Post Comment</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Comments footer -->--}}
{{--                            </div>--}}
{{--                            <!-- /Post #4 comments -->--}}
{{--                        </div>--}}
{{--                        <!-- /POST #4 -->--}}
{{--                        <!-- Post 5 -->--}}
{{--                        <!-- /partials/pages/feed/posts/feed-post5.html -->--}}
{{--                        <!-- POST #5 -->--}}
{{--                        <div class="card is-post">--}}
{{--                            <!-- Main wrap -->--}}
{{--                            <div class="content-wrap">--}}
{{--                                <!-- Header -->--}}
{{--                                <div class="card-heading">--}}
{{--                                    <!-- User image -->--}}
{{--                                    <div class="user-block">--}}
{{--                                        <div class="image">--}}
{{--                                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="user-info">--}}
{{--                                            <a href="#">David Kim</a>--}}
{{--                                            <span class="time">August 02 2018, 03:04pm</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Right side dropdown -->--}}
{{--                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->--}}
{{--                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                        <div>--}}
{{--                                            <div class="button">--}}
{{--                                                <i data-feather="more-vertical"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="dropdown-menu" role="menu">--}}
{{--                                            <div class="dropdown-content">--}}
{{--                                                <a href="#" class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="bookmark"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Bookmark</h3>--}}
{{--                                                            <small>Add this post to your bookmarks.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                                <a class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="bell"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Notify me</h3>--}}
{{--                                                            <small>Send me the updates.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                                <hr class="dropdown-divider">--}}
{{--                                                <a href="#" class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="flag"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Flag</h3>--}}
{{--                                                            <small>In case of inappropriate content.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Header -->--}}

{{--                                <!-- Post body -->--}}
{{--                                <div class="card-body">--}}
{{--                                    <!-- Post body text -->--}}
{{--                                    <div class="post-text">--}}
{{--                                        <p>Just discovered this awesome CSS framework named--}}
{{--                                            <a href="#">#bulmaCss</a>. It's based on flexbox, so easy to use and comes with so many mobile first modifiers. You--}}
{{--                                            can build anything from scratch easily with Bulma.--}}
{{--                                            <a href="#">#webdesign #bulmaio</a>--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                    <!-- Featured link -->--}}
{{--                                    <div class="post-link">--}}
{{--                                        <!-- link image -->--}}
{{--                                        <div class="link-image">--}}
{{--                                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/demo/video/bulma2.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <!-- Link content -->--}}
{{--                                        <div class="link-content">--}}
{{--                                            <h4>--}}
{{--                                                <a href="#">Bulma CSS Framework</a>--}}
{{--                                            </h4>--}}
{{--                                            <p>Bulma is a mobile first CSS framework built on top of Flexbox. It's awesome and so easy to use.</p>--}}
{{--                                            <small>Bulma.io</small>--}}
{{--                                        </div>--}}
{{--                                        <!-- Post actions -->--}}
{{--                                        <!-- /partials/pages/feed/buttons/feed-post-actions.html -->--}}
{{--                                        <div class="like-wrapper">--}}
{{--                                            <a href="javascript:void(0);" class="like-button">--}}
{{--                                                <i class="mdi mdi-heart not-liked bouncy"></i>--}}
{{--                                                <i class="mdi mdi-heart is-liked bouncy"></i>--}}
{{--                                                <span class="like-overlay"></span>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}

{{--                                        <div class="fab-wrapper is-share">--}}
{{--                                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" data-modal="share-modal">--}}
{{--                                                <i data-feather="link-2"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}

{{--                                        <div class="fab-wrapper is-comment">--}}
{{--                                            <a href="javascript:void(0);" class="small-fab">--}}
{{--                                                <i data-feather="message-circle"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Post body -->--}}

{{--                                <!-- Post footer -->--}}
{{--                                <div class="card-footer">--}}
{{--                                    <!-- Followers -->--}}
{{--                                    <div class="likers-group">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/lana.jpeg" data-user-popover="10" alt="">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/mike.jpg" data-user-popover="12" alt="">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/gaelle.jpeg" data-user-popover="11" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="likers-text">--}}
{{--                                        <p>--}}
{{--                                            <a href="#">Lana</a>,--}}
{{--                                            <a href="#">Mike</a>--}}
{{--                                        </p>--}}
{{--                                        <p>and 1 more liked this</p>--}}
{{--                                    </div>--}}
{{--                                    <!-- Post statistics -->--}}
{{--                                    <div class="social-count">--}}
{{--                                        <div class="likes-count">--}}
{{--                                            <i data-feather="heart"></i>--}}
{{--                                            <span>11</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="shares-count">--}}
{{--                                            <i data-feather="link-2"></i>--}}
{{--                                            <span>3</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="comments-count">--}}
{{--                                            <i data-feather="message-circle"></i>--}}
{{--                                            <span>2</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Post footer -->--}}
{{--                            </div>--}}
{{--                            <!-- /Main wrap -->--}}

{{--                            <!-- Post #5 comments -->--}}
{{--                            <div class="comments-wrap is-hidden">--}}
{{--                                <!-- Header -->--}}
{{--                                <div class="comments-heading">--}}
{{--                                    <h4>--}}
{{--                                        Comments--}}
{{--                                        <small>(2)</small>--}}
{{--                                    </h4>--}}
{{--                                    <div class="close-comments">--}}
{{--                                        <i data-feather="x"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Header -->--}}

{{--                                <!-- Comments body -->--}}
{{--                                <div class="comments-body has-slimscroll">--}}

{{--                                    <!-- Comment -->--}}
{{--                                    <div class="media is-comment">--}}
{{--                                        <!-- User image -->--}}
{{--                                        <div class="media-left">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/lana.jpeg" data-user-popover="10" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Content -->--}}
{{--                                        <div class="media-content">--}}
{{--                                            <a href="#">Lana Henrikssen</a>--}}
{{--                                            <span class="time">2 days ago</span>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et--}}
{{--                                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.</p>--}}
{{--                                            <!-- Comment actions -->--}}
{{--                                            <div class="controls">--}}
{{--                                                <div class="like-count">--}}
{{--                                                    <i data-feather="thumbs-up"></i>--}}
{{--                                                    <span>1</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="reply">--}}
{{--                                                    <a href="#">Reply</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- Nested Comment -->--}}
{{--                                            <div class="media is-comment">--}}
{{--                                                <!-- User image -->--}}
{{--                                                <div class="media-left">--}}
{{--                                                    <div class="image">--}}
{{--                                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4" alt="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Content -->--}}
{{--                                                <div class="media-content">--}}
{{--                                                    <a href="#">David Kim</a>--}}
{{--                                                    <span class="time">2 days ago</span>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et--}}
{{--                                                        dolore magna aliqua.</p>--}}
{{--                                                    <!-- Comment actions -->--}}
{{--                                                    <div class="controls">--}}
{{--                                                        <div class="like-count">--}}
{{--                                                            <i data-feather="thumbs-up"></i>--}}
{{--                                                            <span>0</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="reply">--}}
{{--                                                            <a href="#">Reply</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Right side dropdown -->--}}
{{--                                                <div class="media-right">--}}
{{--                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                        <div>--}}
{{--                                                            <div class="button">--}}
{{--                                                                <i data-feather="more-vertical"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="dropdown-menu" role="menu">--}}
{{--                                                            <div class="dropdown-content">--}}
{{--                                                                <a class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="x"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Hide</h3>--}}
{{--                                                                            <small>Hide this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="dropdown-divider"></div>--}}
{{--                                                                <a href="#" class="dropdown-item">--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <i data-feather="flag"></i>--}}
{{--                                                                        <div class="media-content">--}}
{{--                                                                            <h3>Report</h3>--}}
{{--                                                                            <small>Report this comment.</small>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /Nested Comment -->--}}

{{--                                        </div>--}}
{{--                                        <!-- Right side dropdown -->--}}
{{--                                        <div class="media-right">--}}
{{--                                            <!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->--}}
{{--                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                                <div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <i data-feather="more-vertical"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="dropdown-menu" role="menu">--}}
{{--                                                    <div class="dropdown-content">--}}
{{--                                                        <a class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="x"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Hide</h3>--}}
{{--                                                                    <small>Hide this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                        <div class="dropdown-divider"></div>--}}
{{--                                                        <a href="#" class="dropdown-item">--}}
{{--                                                            <div class="media">--}}
{{--                                                                <i data-feather="flag"></i>--}}
{{--                                                                <div class="media-content">--}}
{{--                                                                    <h3>Report</h3>--}}
{{--                                                                    <small>Report this comment.</small>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /Comment -->--}}

{{--                                </div>--}}
{{--                                <!-- Comments body -->--}}

{{--                                <!-- Comments footer -->--}}
{{--                                <div class="card-footer">--}}
{{--                                    <div class="media post-comment has-emojis">--}}
{{--                                        <!-- Textarea -->--}}
{{--                                        <div class="media-content">--}}
{{--                                            <div class="field">--}}
{{--                                                <p class="control">--}}
{{--                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <!-- Additional actions -->--}}
{{--                                            <div class="actions">--}}
{{--                                                <div class="image is-32x32">--}}
{{--                                                    <img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="toolbar">--}}
{{--                                                    <div class="action is-auto">--}}
{{--                                                        <i data-feather="at-sign"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="action is-emoji">--}}
{{--                                                        <i data-feather="smile"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="action is-upload">--}}
{{--                                                        <i data-feather="camera"></i>--}}
{{--                                                        <input type="file">--}}
{{--                                                    </div>--}}
{{--                                                    <a class="button is-solid primary-button raised">Post Comment</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Comments footer -->--}}
{{--                            </div>--}}
{{--                            <!-- /Post #5 comments -->--}}
{{--                        </div>--}}
{{--                        <!-- /POST #5 -->--}}
{{--                        <!-- Post 6 -->--}}
{{--                        <!-- /partials/pages/feed/posts/feed-post6.html -->--}}
{{--                        <!-- POST #6 -->--}}
{{--                        <div class="card is-post is-simple">--}}
{{--                            <!-- Main wrap -->--}}
{{--                            <div class="content-wrap">--}}
{{--                                <!-- Header -->--}}
{{--                                <div class="card-heading">--}}
{{--                                    <!-- User image -->--}}
{{--                                    <div class="user-block">--}}
{{--                                        <div class="image">--}}
{{--                                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/bobby.jpg" data-user-popover="8" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="user-info">--}}
{{--                                            <a href="#">Bobby Brown</a>--}}
{{--                                            <span class="time">July 26 2018, 11:14am</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->--}}
{{--                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">--}}
{{--                                        <div>--}}
{{--                                            <div class="button">--}}
{{--                                                <i data-feather="more-vertical"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="dropdown-menu" role="menu">--}}
{{--                                            <div class="dropdown-content">--}}
{{--                                                <a href="#" class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="bookmark"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Bookmark</h3>--}}
{{--                                                            <small>Add this post to your bookmarks.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                                <a class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="bell"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Notify me</h3>--}}
{{--                                                            <small>Send me the updates.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                                <hr class="dropdown-divider">--}}
{{--                                                <a href="#" class="dropdown-item">--}}
{{--                                                    <div class="media">--}}
{{--                                                        <i data-feather="flag"></i>--}}
{{--                                                        <div class="media-content">--}}
{{--                                                            <h3>Flag</h3>--}}
{{--                                                            <small>In case of inappropriate content.</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Header -->--}}

{{--                                <!-- Post body -->--}}
{{--                                <div class="card-body">--}}
{{--                                    <!-- Post body text -->--}}
{{--                                    <div class="post-text">--}}
{{--                                        <p>Today, when i was walking back home from my job, i figured that i should build the best social media template--}}
{{--                                            in ThemeForest. As soon as i got back, i started working on this fresh and new project. Any suggestions--}}
{{--                                            about where i could find some interesting resources for social media design?--}}
{{--                                            <a href="#">#webdesign #socialmedia</a>--}}
{{--                                        <p>--}}
{{--                                    </div>--}}
{{--                                    <!-- Post actions -->--}}
{{--                                    <div class="post-actions">--}}
{{--                                        <!-- /partials/pages/feed/buttons/feed-post-actions.html -->--}}
{{--                                        <div class="like-wrapper">--}}
{{--                                            <a href="javascript:void(0);" class="like-button">--}}
{{--                                                <i class="mdi mdi-heart not-liked bouncy"></i>--}}
{{--                                                <i class="mdi mdi-heart is-liked bouncy"></i>--}}
{{--                                                <span class="like-overlay"></span>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}

{{--                                        <div class="fab-wrapper is-share">--}}
{{--                                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" data-modal="share-modal">--}}
{{--                                                <i data-feather="link-2"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}

{{--                                        <div class="fab-wrapper is-comment">--}}
{{--                                            <a href="javascript:void(0);" class="small-fab">--}}
{{--                                                <i data-feather="message-circle"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Post body -->--}}

{{--                                <!-- Post footer -->--}}
{{--                                <div class="card-footer">--}}
{{--                                    <!-- Followers -->--}}
{{--                                    <div class="likers-group">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" data-user-popover="3" alt="">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="likers-text">--}}
{{--                                        <p>--}}
{{--                                            <a href="#">Daniel</a> and--}}
{{--                                            <a href="#">Elise</a>--}}
{{--                                        </p>--}}
{{--                                        <p>liked this</p>--}}
{{--                                    </div>--}}
{{--                                    <!-- Post statistics -->--}}
{{--                                    <div class="social-count">--}}
{{--                                        <div class="likes-count">--}}
{{--                                            <i data-feather="heart"></i>--}}
{{--                                            <span>2</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="shares-count">--}}
{{--                                            <i data-feather="link-2"></i>--}}
{{--                                            <span>0</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="comments-count">--}}
{{--                                            <i data-feather="message-circle"></i>--}}
{{--                                            <span>0</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Post footer -->--}}
{{--                            </div>--}}
{{--                            <!-- /Main wrap -->--}}

{{--                            <!-- Post #6 comments -->--}}
{{--                            <div class="comments-wrap is-hidden">--}}
{{--                                <!-- Header -->--}}
{{--                                <div class="comments-heading">--}}
{{--                                    <h4>--}}
{{--                                        Comments--}}
{{--                                        <small>(0)</small>--}}
{{--                                    </h4>--}}
{{--                                    <div class="close-comments">--}}
{{--                                        <i data-feather="x"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Header -->--}}

{{--                                <!-- Comments body -->--}}
{{--                                <div class="comments-body has-slimscroll">--}}
{{--                                    <div class="comments-placeholder">--}}
{{--                                        <img src="assets/img/icons/feed/bubble.svg" alt="">--}}
{{--                                        <h3>Nothing in here yet</h3>--}}
{{--                                        <p>Be the first to post a comment.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Comments body -->--}}

{{--                                <!-- Comments footer -->--}}
{{--                                <div class="card-footer">--}}
{{--                                    <div class="media post-comment has-emojis">--}}
{{--                                        <!-- Textarea -->--}}
{{--                                        <div class="media-content">--}}
{{--                                            <div class="field">--}}
{{--                                                <p class="control">--}}
{{--                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <!-- Additional actions -->--}}
{{--                                            <div class="actions">--}}
{{--                                                <div class="image is-32x32">--}}
{{--                                                    <img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="toolbar">--}}
{{--                                                    <div class="action is-auto">--}}
{{--                                                        <i data-feather="at-sign"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="action is-emoji">--}}
{{--                                                        <i data-feather="smile"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="action is-upload">--}}
{{--                                                        <i data-feather="camera"></i>--}}
{{--                                                        <input type="file">--}}
{{--                                                    </div>--}}
{{--                                                    <a class="button is-solid primary-button raised">Post Comment</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Comments footer -->--}}
{{--                            </div>--}}
{{--                            <!-- /Post #6 comments -->--}}
{{--                        </div>--}}
{{--                        <!-- /POST #6 -->--}}
{{--                        <!-- Load more posts -->--}}
{{--                        <div class=" load-more-wrap has-text-centered">--}}
{{--                            <a href="#" class="load-more-button">Load More</a>--}}
{{--                        </div>--}}
{{--                        <!-- /Load more posts -->--}}

{{--                    </div>--}}
{{--                    <!-- /Middle column -->--}}

{{--                    <!-- Right side column -->--}}
{{--                    <div class="column is-4">--}}

{{--                        <!-- Stories widget -->--}}
{{--                        <!-- /partials/widgets/stories-widget.html -->--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-heading is-bordered">--}}
{{--                                <h4>Stories</h4>--}}
{{--                                <div class="dropdown is-spaced is-neutral is-right dropdown-trigger">--}}
{{--                                    <div>--}}
{{--                                        <div class="button">--}}
{{--                                            <i data-feather="more-vertical"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="dropdown-menu" role="menu">--}}
{{--                                        <div class="dropdown-content">--}}
{{--                                            <a href="#" class="dropdown-item">--}}
{{--                                                <div class="media">--}}
{{--                                                    <i data-feather="tv"></i>--}}
{{--                                                    <div class="media-content">--}}
{{--                                                        <h3>Browse stories</h3>--}}
{{--                                                        <small>View all recent stories.</small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a class="dropdown-item">--}}
{{--                                                <div class="media">--}}
{{--                                                    <i data-feather="settings"></i>--}}
{{--                                                    <div class="media-content">--}}
{{--                                                        <h3>Settings</h3>--}}
{{--                                                        <small>Access widget settings.</small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <hr class="dropdown-divider">--}}
{{--                                            <a href="#" class="dropdown-item">--}}
{{--                                                <div class="media">--}}
{{--                                                    <i data-feather="trash-2"></i>--}}
{{--                                                    <div class="media-content">--}}
{{--                                                        <h3>Remove</h3>--}}
{{--                                                        <small>Removes this widget from your feed.</small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-body no-padding">--}}
{{--                                <!-- Story block -->--}}
{{--                                <div class="story-block">--}}
{{--                                    <a id="add-story-button" href="#" class="add-story">--}}
{{--                                        <i data-feather="plus"></i>--}}
{{--                                    </a>--}}
{{--                                    <div class="story-meta">--}}
{{--                                        <span>Add a new Story</span>--}}
{{--                                        <span>Share an image, a video or some text</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Story block -->--}}
{{--                                <div class="story-block">--}}
{{--                                    <div class="img-wrapper">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="story-meta">--}}
{{--                                        <span>Dan Walker</span>--}}
{{--                                        <span>1 hour ago</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Story block -->--}}
{{--                                <div class="story-block">--}}
{{--                                    <div class="img-wrapper">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/bobby.jpg" data-user-popover="8" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="story-meta">--}}
{{--                                        <span>Bobby Brown</span>--}}
{{--                                        <span>3 days ago</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Story block -->--}}
{{--                                <div class="story-block">--}}
{{--                                    <div class="img-wrapper">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="story-meta">--}}
{{--                                        <span>Elise Walker</span>--}}
{{--                                        <span>Last week</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Birthday widget -->--}}
{{--                        <!-- /partials/widgets/birthday-widget.html -->--}}
{{--                        <div class="card is-birthday-card has-background-image" data-background="assets/img/illustrations/cards/birthday-bg.svg">--}}
{{--                            <div class="card-heading">--}}
{{--                                <i data-feather="gift"></i>--}}
{{--                                <div class="dropdown is-spaced is-right dropdown-trigger is-light">--}}
{{--                                    <div>--}}
{{--                                        <div class="button">--}}
{{--                                            <i data-feather="more-vertical"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="dropdown-menu" role="menu">--}}
{{--                                        <div class="dropdown-content">--}}
{{--                                            <a href="#" class="dropdown-item">--}}
{{--                                                <div class="media">--}}
{{--                                                    <i data-feather="clock"></i>--}}
{{--                                                    <div class="media-content">--}}
{{--                                                        <h3>Remind me</h3>--}}
{{--                                                        <small>Remind me of this later today.</small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a class="dropdown-item">--}}
{{--                                                <div class="media">--}}
{{--                                                    <i data-feather="message-circle"></i>--}}
{{--                                                    <div class="media-content">--}}
{{--                                                        <h3>Message</h3>--}}
{{--                                                        <small>Send an automatic greeting message.</small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <hr class="dropdown-divider">--}}
{{--                                            <a href="#" class="dropdown-item">--}}
{{--                                                <div class="media">--}}
{{--                                                    <i data-feather="trash-2"></i>--}}
{{--                                                    <div class="media-content">--}}
{{--                                                        <h3>Remove</h3>--}}
{{--                                                        <small>Removes this widget from your feed.</small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <div>--}}
{{--                                    <div class="birthday-avatar">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" alt="">--}}
{{--                                        <div class="birthday-indicator">--}}
{{--                                            31--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="birthday-content">--}}
{{--                                        <h4>Dan turns 31 today!</h4>--}}
{{--                                        <p>Send him your best wishes by leaving something on his wall.</p>--}}
{{--                                        <button type="button" class="button light-button">Write Message</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Suggested friends widget -->--}}
{{--                        <!-- /partials/widgets/suggested-friends-1-widget.html -->--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-heading is-bordered">--}}
{{--                                <h4>Suggested Friends</h4>--}}
{{--                                <div class="dropdown is-spaced is-right dropdown-trigger">--}}
{{--                                    <div>--}}
{{--                                        <div class="button">--}}
{{--                                            <i data-feather="more-vertical"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="dropdown-menu" role="menu">--}}
{{--                                        <div class="dropdown-content">--}}
{{--                                            <a href="#" class="dropdown-item">--}}
{{--                                                <div class="media">--}}
{{--                                                    <i data-feather="users"></i>--}}
{{--                                                    <div class="media-content">--}}
{{--                                                        <h3>All Suggestions</h3>--}}
{{--                                                        <small>View all friend suggestions.</small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a class="dropdown-item">--}}
{{--                                                <div class="media">--}}
{{--                                                    <i data-feather="settings"></i>--}}
{{--                                                    <div class="media-content">--}}
{{--                                                        <h3>Settings</h3>--}}
{{--                                                        <small>Access widget settings.</small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <hr class="dropdown-divider">--}}
{{--                                            <a href="#" class="dropdown-item">--}}
{{--                                                <div class="media">--}}
{{--                                                    <i data-feather="trash-2"></i>--}}
{{--                                                    <div class="media-content">--}}
{{--                                                        <h3>Remove</h3>--}}
{{--                                                        <small>Removes this widget from your feed.</small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-body no-padding">--}}
{{--                                <!-- Suggested friend -->--}}
{{--                                <div class="add-friend-block transition-block">--}}
{{--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" data-user-popover="9" alt="">--}}
{{--                                    <div class="page-meta">--}}
{{--                                        <span>Nelly Schwartz</span>--}}
{{--                                        <span>Melbourne</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="add-friend add-transition">--}}
{{--                                        <i data-feather="user-plus"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Suggested friend -->--}}
{{--                                <div class="add-friend-block transition-block">--}}
{{--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/lana.jpeg" data-user-popover="10" alt="">--}}
{{--                                    <div class="page-meta">--}}
{{--                                        <span>Lana Henrikssen</span>--}}
{{--                                        <span>Helsinki</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="add-friend add-transition">--}}
{{--                                        <i data-feather="user-plus"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Suggested friend -->--}}
{{--                                <div class="add-friend-block transition-block">--}}
{{--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/gaelle.jpeg" data-user-popover="11" alt="">--}}
{{--                                    <div class="page-meta">--}}
{{--                                        <span>Gaelle Morris</span>--}}
{{--                                        <span>Lyon</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="add-friend add-transition">--}}
{{--                                        <i data-feather="user-plus"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Suggested friend -->--}}
{{--                                <div class="add-friend-block transition-block">--}}
{{--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/mike.jpg" data-user-popover="12" alt="">--}}
{{--                                    <div class="page-meta">--}}
{{--                                        <span>Mike Lasalle</span>--}}
{{--                                        <span>Toronto</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="add-friend add-transition">--}}
{{--                                        <i data-feather="user-plus"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Suggested friend -->--}}
{{--                                <div class="add-friend-block transition-block">--}}
{{--                                    <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">--}}
{{--                                    <div class="page-meta">--}}
{{--                                        <span>Rolf Krupp</span>--}}
{{--                                        <span>Berlin</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="add-friend add-transition">--}}
{{--                                        <i data-feather="user-plus"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- New job widget -->--}}
{{--                        <!-- /partials/widgets/new-job-widget.html -->--}}
{{--                        <div class="card is-new-job-card has-background-image" data-background="assets/img/illustrations/cards/job-bg.svg">--}}
{{--                            <div class="card-heading">--}}
{{--                                <i data-feather="briefcase"></i>--}}
{{--                                <div class="dropdown is-spaced is-right dropdown-trigger is-light">--}}
{{--                                    <div>--}}
{{--                                        <div class="button">--}}
{{--                                            <i data-feather="more-vertical"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="dropdown-menu" role="menu">--}}
{{--                                        <div class="dropdown-content">--}}
{{--                                            <a href="#" class="dropdown-item">--}}
{{--                                                <div class="media">--}}
{{--                                                    <i data-feather="clock"></i>--}}
{{--                                                    <div class="media-content">--}}
{{--                                                        <h3>Remind me</h3>--}}
{{--                                                        <small>Remind me of this later today.</small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a class="dropdown-item">--}}
{{--                                                <div class="media">--}}
{{--                                                    <i data-feather="message-circle"></i>--}}
{{--                                                    <div class="media-content">--}}
{{--                                                        <h3>Message</h3>--}}
{{--                                                        <small>Send an automatic congratz message.</small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <hr class="dropdown-divider">--}}
{{--                                            <a href="#" class="dropdown-item">--}}
{{--                                                <div class="media">--}}
{{--                                                    <i data-feather="trash-2"></i>--}}
{{--                                                    <div class="media-content">--}}
{{--                                                        <h3>Remove</h3>--}}
{{--                                                        <small>Removes this widget from your feed.</small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <div>--}}
{{--                                    <div class="job-avatar">--}}
{{--                                        <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="job-content">--}}
{{--                                        <h4>Nelly has a new job!</h4>--}}
{{--                                        <p>Send her message congratulating her for getting this job.</p>--}}
{{--                                        <button type="button" class="button light-button">Write Message</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- /Right side column -->--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </div>

@endsection
