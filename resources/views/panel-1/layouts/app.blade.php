<!DOCTYPE html>

<html lang="en">

<head>
    @include('panel.includes.linkHeader')
    @yield('header')
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-enabled">

<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
    @include('panel.includes.side')

    <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
        @include('panel.includes.header')

        <!--end::Header-->
            <!--begin::Toolbar-->
            <!--end::Toolbar-->
            <!--begin::Container-->
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Card-->
{{--                    <div class="card">--}}
        @yield('content')
{{--                    </div>--}}
                </div>
            </div>

        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>


@include('panel.includes.linkBody')
</body>
<!--end::Body-->

</html>
