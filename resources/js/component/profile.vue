<template>
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Navbar-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                        <!--begin: Pic-->
                        <div class="me-7 mb-4">
                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                <span style="font-size: 30px" class="symbol-label  bg-light-primary text-primary  fw-bolder">{{user['name'][0]}}</span>
                                <div
                                    class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                            </div>
                        </div>
                        <!--end::Pic-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <!--begin::User-->
                                <div class="d-flex flex-column">
                                    <!--begin::Name-->
                                    <div class="d-flex align-items-center mb-2">
                                        <a href="#"
                                           class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{
                                                user['name']
                                            }}</a>
                                        <a href="#">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                     height="24px" viewBox="0 0 24 24">
																	<path
                                                                        d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z"
                                                                        fill="currentColor"/>
																	<path
                                                                        d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z"
                                                                        fill="white"/>
																</svg>
															</span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </div>
                                    <!--end::Name-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">

                                        <a v-if="user['address'] != null" href="#"
                                           class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3"
                                                                      d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                      fill="currentColor"/>
																<path
                                                                    d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                    fill="currentColor"/>
															</svg>
														</span>
                                            <!--end::Svg Icon-->{{ user['address'] }}</a>
                                        <a href="#"
                                           class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3"
                                                                      d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                                      fill="currentColor"/>
																<path
                                                                    d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                                    fill="currentColor"/>
															</svg>
														</span>
                                            <!--end::Svg Icon-->{{ user['email'] }}</a>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::Actions-->
                                <div class="d-flex my-4">
                                    <a href="#" class="btn btn-sm btn-outline-danger btn-outline me-2">

                                        Delete Account

                                    </a>
                                    <a href="/panel/dashboard" class="btn btn-sm btn-primary me-2">Back To Dashboard</a>
                                    <!--begin::Menu-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap flex-stack">
                                <!--begin::Wrapper-->
                                <!--end::Wrapper-->
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                        <span class="fw-semibold fs-6 text-gray-400">Profile Compleation</span>
                                        <span class="fw-bold fs-6">{{ han }}%</span>
                                    </div>
                                    <div class="h-5px mx-3 w-100 bg-light mb-3">
                                        <div class="bg-success rounded h-5px" role="progressbar"
                                             v-bind:style="{width:[han+'%']}" aria-valuenow="50" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Navs-->
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                        <!--begin::Nav item-->
                        <li v-for="ste in step" class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5 " data-bs-toggle="tab"
                               v-bind:href="'#kt_tab_pane_'+ ste['id_step']"
                               v-bind:class="idStep===ste['id_step']?'active':''">{{ ste['name'] }}</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->

                        <!--end::Nav item-->
                    </ul>
                    <!--begin::Navs-->
                </div>
            </div>
            <!--end::Navbar-->
            <!--begin::details View-->
            <div class="tab-content">
                <div class="tab-pane fade active show" role="tabpanel" id="kt_tab_pane_6">
                    <!--begin::Card header-->
                    <div class="card mb-5 mb-xl-10 tab-pane">
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Contact Info</h3>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Action-->
                            <a href="settings.html" class="btn btn-primary align-self-center">Edit Profile</a>
                            <!--end::Action-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <!--begin::Row-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Email</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{ user['email'] }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7">

                                <label class="col-lg-4 fw-semibold text-muted">Phone Number</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{ user['phoneNumber'] }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7">

                                <label class="col-lg-4 fw-semibold text-muted">Address</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{ user['address'] }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>
                        <!--end::Row-->

                        <!--end::Notice-->
                    </div>
                </div>
                <div class="tab-pane fade " role="tabpanel" id="kt_tab_pane_5">
                    <!--begin::Card header-->
                    <div class="card mb-5 mb-xl-10 tab-pane">
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Personal Info</h3>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Action-->
                            <a href="settings.html" class="btn btn-primary align-self-center">Edit Profile</a>
                            <!--end::Action-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <!--begin::Row-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Given Name</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{ user['givenName'] }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Middle Name</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{ user['middleName'] }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Family Name</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{ user['familyName'] }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Birth Day</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{ user['birthDate'] }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Gender</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{ user['gender'] }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->

                            <!--end::Notice-->
                        </div>
                    </div>

                    <!--end::Card body-->
                </div>
                <div class="tab-pane fade " role="tabpanel" id="kt_tab_pane_4">
                    <!--begin::Card header-->
                    <div class="card mb-5 mb-xl-10 tab-pane">
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Job & Education</h3>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Action-->
                            <a href="settings.html" class="btn btn-primary align-self-center">Edit Profile</a>
                            <!--end::Action-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <!--begin::Row-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">job</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{ user['detail_job'] }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">certificate</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div v-if="user['certificate']!=null" class="col-lg-8">

                                    <img class="h-40px d-inline-block"
                                         v-bind:src="'/assets/Panel/media/svg/files/'+this.certificate[1]+'.png'">
                                    <p class="d-inline-block">{{ this.certificate[0] }}</p>
                                </div>
                                <div v-else class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">Null</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->

                            <!--end::Notice-->
                        </div>
                    </div>

                    <!--end::Card body-->
                </div>
                <div class="tab-pane fade " role="tabpanel" id="kt_tab_pane_3">
                    <!--begin::Card header-->
                    <div class="card mb-5 mb-xl-10 tab-pane">
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Language Skill</h3>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Action-->
                            <!--end::Action-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <!--begin::Row-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Certificate Language</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{ user['certificate_language'] }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">certificate language file</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div v-if="user['certificate_language_file']!=null" class="col-lg-8">

                                    <img class="h-40px d-inline-block"
                                         v-bind:src="'/assets/Panel/media/svg/files/'+this.certificate_language_file[1]+'.png'">
                                    <p class="d-inline-block">{{ this.certificate_language_file[0] }}</p>
                                </div>
                                <div v-else class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">Null</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Notice-->
                        </div>
                    </div>

                    <!--end::Card body-->
                </div>
                <div class="tab-pane fade " role="tabpanel" id="kt_tab_pane_2">
                    <!--begin::Card header-->
                    <div class="card mb-5 mb-xl-10 tab-pane">
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Profile Details</h3>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Action-->
                            <a href="settings.html" class="btn btn-primary align-self-center">Edit Profile</a>
                            <!--end::Action-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <!--begin::Row-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">Max Smith</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->

                            <!--end::Notice-->
                        </div>
                    </div>

                    <!--end::Card body-->
                </div>
                <!--end::Card body-->
            </div>

            <!--end::details View-->
            <!--begin::Row-->
        </div>

        <!--end::Row-->
    </div>
    <!--end::Post-->

</template>
<script>
export default {
    props: {
        step: Object,
        user: Object,

    },
    data() {
        return {
            idStep: 6,
            han: 0,
            certificate: null,
            certificate_language_file:null
        }
    },
    mounted() {
        if (this.user['certificate'] != null) {
            this.certificate[0] = this.user['certificate'].split('/')
            this.certificate[0] = this.certificate[0][this.certificate[0].length - 1]
            let s = this.user['certificate'];
            s = s.slice(s.length - 8, s.length);
            this.certificate[1] = s.split('.')[1]
        }
        if (this.user['certificate_language_file'] != null) {
            this.certificate_language_file[0] = this.user['certificate_language_file'].split('/')
            this.certificate_language_file[0] = this.certificate_language_file[0][this.certificate_language_file[0].length - 1]
            let s = this.user['certificate_language_file'];
            s = s.slice(s.length - 8, s.length);
            this.certificate_language_file[1] = s.split('.')[1]
        }
        // certificate_language_file
        this.han = Math.ceil((100 / 6) * (6 - (this.user['status_request'] - 1)))
    }
}
</script>
