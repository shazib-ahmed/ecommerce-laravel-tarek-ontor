@extends('partials.frontend.app')
@section('title')
{{ 'Products' }}
@endsection

@section('content')
<main class="main">
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}"><i class="d-icon-home"></i></a></li>
                <li>Login</li>
            </ul>
        </div>
    </nav>
    <div class="page-content mt-6 pb-2 mb-10">
        <div class="container">
            <div class="login-popup">
                <div class="form-box">
                    <div class="tab tab-nav-simple tab-nav-boxed form-tab">
                        <ul class="nav nav-tabs nav-fill align-items-center border-no justify-content-center mb-5"
                            role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active border-no lh-1 ls-normal" href="#signin">Login</a>
                            </li>
                            <li class="delimiter">or</li>
                            <li class="nav-item">
                                <a class="nav-link border-no lh-1 ls-normal" href="#register">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="signin">
                                <form action="#">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" id="singin-email" name="singin-email"
                                            placeholder="Username or Email Address *" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="singin-password"
                                            name="singin-password" placeholder="Password *" required />
                                    </div>
                                    <div class="form-footer">
                                        <div class="form-checkbox">
                                            <input type="checkbox" class="custom-checkbox" id="signin-remember"
                                                name="signin-remember" />
                                            <label class="form-control-label" for="signin-remember">Remember
                                                me</label>
                                        </div>
                                        <a href="#" class="lost-link">Lost your password?</a>
                                    </div>
                                    <button class="btn btn-dark btn-block btn-rounded" type="submit">Login</button>
                                </form>
                                <div class="form-choice text-center">
                                    <label class="ls-m">or Login With</label>
                                    <div class="social-links">
                                        <a href="#" class="social-link social-google fab fa-google border-no"></a>
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f border-no"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter border-no"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="register">
                                <form action="#">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="register-email"
                                            name="register-email" placeholder="Your Email address *" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="register-password"
                                            name="register-password" placeholder="Password *" required />
                                    </div>
                                    <div class="form-footer">
                                        <div class="form-checkbox">
                                            <input type="checkbox" class="custom-checkbox" id="register-agree"
                                                name="register-agree" required />
                                            <label class="form-control-label" for="register-agree">I agree to
                                                the
                                                privacy policy</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-dark btn-block btn-rounded" type="submit">Register</button>
                                </form>
                                <div class="form-choice text-center">
                                    <label class="ls-m">or Register With</label>
                                    <div class="social-links">
                                        <a href="#" class="social-link social-google fab fa-google border-no"></a>
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f border-no"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter border-no"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/animate/animate.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/magnific-popup/magnific-popup.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/sticky-icon/stickyicon.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.min.css')}}">
@endsection

@section('scripts')
<script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/vendor/elevatezoom/jquery.elevatezoom.min.js')}}"></script>
<script src="{{asset('frontend/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('frontend/js/main.min.js')}}"></script>
@endsection