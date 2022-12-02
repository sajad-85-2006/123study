<!DOCTYPE html>

<html lang="en">
<head>
    <title>Login Panel</title>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="/assets/Panel/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/Panel/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>
<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">

<div class="d-flex flex-column flex-root">
    <style>body { background-image: url('/assets/Panel/media/auth/bg10.jpg'); } [data-theme="dark"] body { background-image: url('/assets/Panel/media/auth/bg10-dark.jpg'); }</style>
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="d-flex flex-lg-row-fluid">
            <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="/assets/Panel/media/auth/agency.png" alt="" />
                <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="/assets/Panel/media/auth/agency-dark.png" alt="" />
                <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Fast, Efficient and Productive</h1>
                <div class="text-gray-600 fs-base text-center fw-semibold">In this kind of post,
                    <a href="#" class="opacity-75-hover text-primary me-1">the blogger</a>introduces a person they’ve interviewed
                    <br />and provides some background information about
                    <a href="#" class="opacity-75-hover text-primary me-1">the interviewee</a>and their
                    <br />work following this is a transcript of the interview.</div>
            </div>
        </div>
        <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
            <div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
                <div class="w-md-400px">
                    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="post"  action="{{route('login')}}">
                        @csrf
                        <div class="text-center mb-11">
                            <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                            <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
                        </div>
                        <div class="row g-3 mb-9">
                            <div class="col-md-12">
                                <a href="/google-login" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                    <img alt="Logo" src="/assets/Panel/media/svg/brand-logos/google-icon.svg" class="h-15px me-3" />Sign in with Google</a>
                            </div>

                        </div>
                        <div class="separator separator-content my-14">
                            <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
                        </div>
                        <div class="fv-row mb-8">
                            <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent @error('email') border-danger is-invalid @enderror" />
                            @error('email')
                            <p class="invalid-feedback" style="display: block">{{$message }}</p>
                            @enderror
                        </div>

                        <div class="fv-row mb-3">
                            <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent @error('password') border-danger is-invalid @enderror" />
                            @error('password')
                            <p class="invalid-feedback" style="display: block">{{$message }}</p>
                            @enderror
                        </div>
                        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                            <div></div>
                            <a href="{{route('password.request')}}" class="link-primary">Forgot Password ?</a>
                        </div>
                        <div class="d-grid mb-10">
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                <span class="indicator-label">Sign In</span>
                                <span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
                            <a href="/register" class="link-primary">Sign up</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>var hostUrl = "/assets/Panel/index.html";</script>
<script src="/assets/Panel/plugins/global/plugins.bundle.js"></script>
<script src="/assets/Panel/js/scripts.bundle.js"></script>
<script src="/assets/Panel/js/custom/authentication/sign-in/general.js"></script>
</body>
</html>
