<!DOCTYPE html>

<html lang="en">

<head>
    <title>Sing Up</title>
    <meta charset="utf-8"/>

    <link href="/assets/Panel/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/Panel/css/style.bundle.css" rel="stylesheet" type="text/css"/>
</head>
<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">

<div class="d-flex flex-column flex-root">
    <style>body {
            background-image: url('/assets/Panel/media/auth/bg10.jpg');
        }

        [data-theme="dark"] body {
            background-image: url('/assets/Panel/media/auth/bg10-dark.jpg');
        }</style>
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="d-flex flex-lg-row-fluid">

            <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                     src="/assets/Panel/media/auth/agency.png" alt=""/>
                <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                     src="/assets/Panel/media/auth/agency-dark.png" alt=""/>
                <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Fast, Efficient and Productive</h1>
                <div class="text-gray-600 fs-base text-center fw-semibold">In this kind of post,
                    <a href="#" class="opacity-75-hover text-primary me-1">the blogger</a>introduces a person they’ve
                    interviewed
                    <br/>and provides some background information about
                    <a href="#" class="opacity-75-hover text-primary me-1">the interviewee</a>and their
                    <br/>work following this is a transcript of the interview.
                </div>
            </div>
        </div>
        <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
            <div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
                <div class="w-md-400px">
                    <form class="form w-100" method="post" action="{{route('register')}}">
                        @csrf
                        <div class="text-center mb-11">
                            <h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
                            <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
                        </div>

                        <div class="separator separator-content my-14">
                            <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
                        </div>
                        <div class="fv-row mb-8">
                            <input type="text" placeholder="Username" name="name" autocomplete="off"
                                   class="form-control bg-transparent @error('name') border-danger is-invalid @enderror"/>
                            @error('name')
                            <p class="invalid-feedback" style="display: block">{{$message }}</p>
                            @enderror
                        </div>
                        <div class="fv-row mb-8">
                            <input type="text" placeholder="Email" name="email" autocomplete="off"
                                   class="form-control bg-transparent @error('email') border-danger is-invalid @enderror"/>
                            @error('email')
                            <p class="invalid-feedback" style="display: block">{{$message }}</p>
                            @enderror
                        </div>
                        <div class="fv-row mb-8" data-kt-password-meter="true">
                            <div class="mb-1">
                                <div class="position-relative mb-3">
                                    <input class="form-control bg-transparent @error('password') border-danger  @enderror"
                                           type="password" placeholder="Password" name="password" autocomplete="off"/>

                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                          data-kt-password-meter-control="visibility">
												<i class="bi bi-eye-slash fs-2"></i>
												<i class="bi bi-eye fs-2 d-none"></i>
											</span>
                                    {{----}}
                                </div>
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                            </div>
                            @if(!$errors->any)
                                <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &
                                    symbols.
                                </div>

                            @endif
                            @error('password')
                            <p class="invalid-feedback" style="display: block">{{$message }}</p>
                            @enderror

                        </div>
                        <div class="fv-row mb-8">
                            <input placeholder="Repeat Password" name="password_confirmation" type="password"
                                   autocomplete="off" class="form-control bg-transparent"/>
                        </div>

                        <div class="d-grid mb-10">
                            <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                                <span class="indicator-label">Sign up</span>
                                <span class="indicator-progress">Please wait...
                                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account?
                            <a href="{{route('login')}}" class="link-primary fw-semibold">Sign in</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<script>var hostUrl = "/assets/Panel/index.html";</script>--}}
<script src="/assets/Panel/plugins/global/plugins.bundle.js"></script>
<script src="/assets/Panel/js/scripts.bundle.js"></script>
<script src="/assets/Panel/js/custom/authentication/sign-up/general.js"></script>
</body>

</html>
