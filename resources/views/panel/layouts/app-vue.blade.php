<!DOCTYPE html>

<html lang="en">

<head>
    @include('panel.includes.linkHeader')
    @yield('header')
    @vite(['resources/js/app.js','resources/css/app.css'])

    @inertiaHead
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-enabled">

<div class="d-flex flex-column flex-root">
    <div class="page d-flex flex-row flex-column-fluid">
    @include('panel.includes.side')

        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        @include('panel.includes.header')

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                <div class="content flex-row-fluid" id="kt_content">
{{--                    @yield('content')--}}

                    @inertia
                    @vite('resources/js/app.js')

                </div>
            </div>

        </div>
    </div>
</div>



@include('panel.includes.linkBody')

</body>

</html>
