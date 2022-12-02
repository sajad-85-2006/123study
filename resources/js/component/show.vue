<template>
    <span class="bi bi-ter"></span>
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Sidebar-->
                <div v-if="user['status_request']!=6" class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
                    <!--begin::Card-->
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Summary-->
                            <!--begin::User Info-->
                            <div class="d-flex flex-center flex-column py-5">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-100px symbol-circle mb-7">
                                    <span class="symbol-label bg-light-danger text-danger fs-1 fw-bolder">
                                        {{ user['name'][0] }}
                                    </span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <a href="#"
                                   class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">{{ user['name'] }}</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="mb-9">
                                    <!--                                    begin::Badge-->
                                    <div class="badge badge-lg  badge-light-primary d-inline">{{ user['rule'] }}</div>
                                    <!--begin::Badge-->
                                </div>
                                <!--end::Position-->
                                <!--begin::Info-->
                                <!--begin::Info heading-->

                                <!--end::Info heading-->
                                <!--end::Info-->
                            </div>
                            <!--end::User Info-->
                            <!--end::Summary-->
                            <!--begin::Details toggle-->
                            <div class="d-flex flex-stack fs-4 py-3">
                                <div class="fw-bold rotate collapsible" data-bs-toggle="collapse"
                                     href="#kt_user_view_details" role="button" aria-expanded="false"
                                     aria-controls="kt_user_view_details">Details
                                    <span class="ms-2 rotate-180">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
															<path
                                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                fill="currentColor"/>
														</svg>
													</span>
                                        <!--end::Svg Icon-->
												</span></div>
                                <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
													<a href="#" class="btn btn-sm btn-light-primary"
                                                       data-bs-toggle="modal" data-bs-target="#kt_modal_update_details">Edit</a>
												</span>
                            </div>
                            <!--end::Details toggle-->
                            <div class="separator"></div>
                            <!--begin::Details content-->
                            <div id="kt_user_view_details" class="collapse show">
                                <div class="pb-5 fs-6">
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5">User Name</div>
                                    <div class="text-gray-600">{{ user['name'] }}</div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5">Email</div>
                                    <div class="text-gray-600">
                                        <a href="#" class="text-gray-600 text-hover-primary">{{ user['email'] }}</a>
                                    </div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5">Sign Up</div>
                                    <div class="text-gray-600">
                                        <a href="#"
                                           class="text-gray-600 text-hover-primary">{{ user['created_at'] }}</a>
                                    </div>
                                    <!--begin::Details item-->

                                    <!--begin::Details item-->
                                </div>
                            </div>
                            <!--end::Details content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Connected Accounts-->
                    <!--end::Connected Accounts-->
                </div>
                <div v-if="user['status_request']==6" class="flex-column w-100 mb-10">
                    <!--begin::Card-->
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Summary-->
                            <!--begin::User Info-->
                            <div class="d-flex flex-center flex-column py-5">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-100px symbol-circle mb-7">
                                    <span class="symbol-label bg-light-danger text-danger fs-1 fw-bolder">
                                        {{ user['name'][0] }}
                                    </span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <a href="#"
                                   class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">{{ user['name'] }}</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="mb-9">
                                    <!--                                    begin::Badge-->
                                    <div class="badge badge-lg  badge-light-primary d-inline">{{ user['rule'] }}</div>
                                    <!--begin::Badge-->
                                </div>
                                <!--end::Position-->
                                <!--begin::Info-->
                                <!--begin::Info heading-->

                                <!--end::Info heading-->
                                <!--end::Info-->
                            </div>
                            <!--end::User Info-->
                            <!--end::Summary-->
                            <!--begin::Details toggle-->
                            <div class="d-flex flex-stack fs-4 py-3">
                                <div class="fw-bold rotate collapsible" data-bs-toggle="collapse"
                                     href="#kt_user_view_details" role="button" aria-expanded="false"
                                     aria-controls="kt_user_view_details">Details
                                    <span class="ms-2 rotate-180">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
															<path
                                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                fill="currentColor"/>
														</svg>
													</span>
                                        <!--end::Svg Icon-->
												</span></div>
                                <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
													<a href="#" class="btn btn-sm btn-light-primary"
                                                       data-bs-toggle="modal" data-bs-target="#kt_modal_update_details">Edit</a>
												</span>
                            </div>
                            <!--end::Details toggle-->
                            <div class="separator"></div>
                            <!--begin::Details content-->
                            <div id="kt_user_view_details" class="collapse show">
                                <div class="pb-5 fs-6">
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5">User Name</div>
                                    <div class="text-gray-600">{{ user['name'] }}</div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5">Email</div>
                                    <div class="text-gray-600">
                                        <a href="#" class="text-gray-600 text-hover-primary">{{ user['email'] }}</a>
                                    </div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5">Sign Up</div>
                                    <div class="text-gray-600">
                                        <a href="#"
                                           class="text-gray-600 text-hover-primary">{{ user['created_at'] }}</a>
                                    </div>
                                    <!--begin::Details item-->

                                    <!--begin::Details item-->
                                </div>
                            </div>
                            <!--end::Details content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Connected Accounts-->
                    <!--end::Connected Accounts-->
                </div>
                <div v-if="user['status_request']!=6" class="flex-lg-row-fluid ms-lg-15">
                    <!--begin:::Tabs-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                        <!--begin:::Tab item-->
                        <li v-for="ste in step" class="nav-item">
                            <a v-on:click="idStep=Number(ste['id_step']);showte()"
                               class="btn btn-icon btn-light pulse pulse-primary me-10">
<span class="svg-icon svg-icon svg-icon-1" v-html="ste['icon']">

										</span>
                                <span class="pulse-ring border-1"></span>
                            </a>

                        </li>


                        <li class="nav-item ms-auto">
                            <!--begin::Action menu-->
                            <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click"
                               data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-2 me-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
													<path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="currentColor"/>
												</svg>
											</span>
                                <!--end::Svg Icon--></a>
                            <!--begin::Menu-->
                            <!--end::Menu-->
                            <!--end::Menu-->
                        </li>
                        <!--end:::Tab item-->
                    </ul>
                    <!--end:::Tabs-->
                    <!--begin:::Tab content-->

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade " id="step_6" v-bind:class="show(6)" role="tabpanel">
                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Profile</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 pb-5">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed gy-5"
                                               id="kt_table_users_login_session">
                                            <!--begin::Table body-->
                                            <tbody class="fs-6 fw-semibold text-gray-600">
                                            <tr>
                                                <td>Email</td>
                                                <td>{{ user['email'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Mailing</td>
                                                <td>{{ user['mailing'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>******</td>
                                            </tr>
                                            <tr>
                                                <td>Phone</td>
                                                <td>{{ user['phoneNumber'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Emergency Contact</td>
                                                <td>{{ user['emergency'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>{{ user['address'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Given Name</td>
                                                <td>{{ user['givenName'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Middle Name</td>
                                                <td>{{ user['middleName'] }}</td>

                                            </tr>
                                            <tr>
                                                <td>Family Name</td>
                                                <td>{{ user['familyName'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Passport Number</td>
                                                <td>{{ user['passportNumber'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Expiry Date Passport</td>
                                                <td>{{ user['expiryDate'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Birth Date</td>
                                                <td>{{ user['birthDate'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Country of Citizenship</td>
                                                <td>{{ user['countryCitizenship'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td>{{ user['gender'] }}</td>
                                            </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>

                            <!--end::Card-->
                            <!--begin::Tasks-->
                            <!--begin::Card header-->
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <!--begin::Messenger-->
                            <div class="card card-flush mb-6 mb-xl-9" id="kt_chat_messenger">
                                <!--begin::Card header-->
                                <div class="card-header" id="kt_chat_messenger_header">
                                    <!--begin::Title-->
                                    <div class="card-title">
                                        <!--begin::User-->
                                        <div class="d-flex justify-content-center flex-column me-3">
                                            <a href="#"
                                               class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Admin</a>
                                            <!--begin::Info-->
                                            <div class="mb-0 lh-1">
                                                    <span
                                                        class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                                <span class="fs-7 fw-semibold text-muted">Active</span>
                                            </div>

                                        </div>
                                        <!--end::User-->
                                    </div>

                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->

                                <div class="card-body overflow-auto h-350px" id="kt_chat_messenger_body">


                                    <!--begin::Messages-->
                                    <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto"
                                         data-kt-element="messages"
                                         data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                         data-kt-scroll-max-height="auto"
                                         data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer"
                                         data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body"
                                         data-kt-scroll-offset="5px">

                                        <!--begin::Message(in)-->
                                        <div v-for="com in comment">
                                            <!--begin::Wrapper-->
                                            <!--end::Message(in)-->
                                            <div v-if="com['from_user']==user['id']"
                                                 class="d-flex justify-content-start mb-10"
                                            >
                                                <!--begin::User-->
                                                <div class="d-flex justify-content-start mb-10">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-column align-items-start">
                                                        <!--begin::User-->
                                                        <div class="d-flex align-items-center mb-2">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                    <span
                                                                        class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">
{{ user['name'][0] }}
                                                                    </span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-3">
                                                                <a href="#"
                                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">{{
                                                                        user['name']
                                                                    }}</a>
                                                                <span
                                                                    class="text-muted fs-7 mb-1"></span>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Text-->
                                                        <div
                                                            class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                                            data-kt-element="message-text">{{ com['message'] }}
                                                        </div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Text-->
                                            </div>

                                            <div v-if="com['to_user']==user['id']"
                                                 class="d-flex justify-content-end mb-10"
                                            >
                                                <div class="d-flex flex-column align-items-end">
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <!--begin::Details-->
                                                        <div class="me-3">
                                                            <span
                                                                class="text-muted fs-7 mb-1"></span>
                                                            <a href="#"
                                                               class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                                    <span
                                                                        class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">
                                                                        Y

                                                                    </span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Text-->
                                                    <div
                                                        class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                                        data-kt-element="message-text">{{ com['message'] }}
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Messages-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                                    <!--begin::Input-->
                                    <textarea id="text_6" class="form-control form-control-flush mb-3" rows="2"
                                              placeholder="Type a message"></textarea>
                                    <!--end::Input-->
                                    <!--begin:Toolbar-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center me-2">
                                            <button class="btn btn-sm btn-icon btn-active-light-primary me-1"
                                                    type="button" data-bs-toggle="tooltip" title="Coming soon">
                                                <i class="bi bi-paperclip fs-3"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-active-light-primary me-1"
                                                    type="button" data-bs-toggle="tooltip" title="Coming soon">
                                                <i class="bi bi-upload fs-3"></i>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                        <!--begin::Send-->
                                        <button @click="storeComment(6)" class="btn btn-primary" type="button"
                                                data-kt-element="send">Send
                                        </button>
                                        <!--end::Send-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Card footer-->
                            </div>
                            <!--end::Messenger-->

                            <!--end::Tasks-->
                        </div>
                        <div class="tab-pane fade " v-if="5>user['status_request']" v-bind:class="show(5)"
                             id="step_5"
                             role="tabpanel">
                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Profile</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 pb-5">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed gy-5">
                                            <!--begin::Table body-->
                                            <tbody class="fs-6 fw-semibold text-gray-600">
                                            <tr>
                                                <td>Highest Level Education</td>
                                                <td>{{ user['highestLevelEducation'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Country Education</td>
                                                <td>{{ user['countryEducation'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Field Study</td>
                                                <td>{{ user['fieldStudy'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Year Graduation</td>
                                                <td>{{ user['yearGraduation'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>GPA</td>
                                                <td>{{ user['GPA'] }}</td>
                                            </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <table v-for="sc in school" class="table align-middle table-row-dashed gy-5">
                                            <!--begin::Table body-->
                                            <tbody class="fs-6 fw-semibold text-gray-600">
                                            <tr>
                                                <td>Name</td>
                                                <td>{{ sc['schoolName'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Country Education</td>
                                                <td>{{ sc['level'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Field Study</td>
                                                <td>{{ sc['fieldStudy2'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Graduated</td>
                                                <td>{{ sc['graduated'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>GPA</td>
                                                <td>{{ sc['GPA2'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>{{ sc['address2'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>language Study</td>
                                                <td>{{ sc['languageStudy'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Medium Instruction</td>
                                                <td>{{ sc['mediumInstruction'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Studied From</td>
                                                <td>{{ sc['studiedFrom'] }}</td>
                                            </tr>
                                            <!--                                            -->
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>


                            <!--end::Card-->
                            <!--begin::Tasks-->
                            <div class="card card-flush mb-6 mb-xl-9" id="kt_chat_messenger">
                                <!--begin::Card header-->
                                <div class="card-header" id="kt_chat_messenger_header">
                                    <!--begin::Title-->
                                    <div class="card-title">
                                        <!--begin::User-->
                                        <div class="d-flex justify-content-center flex-column me-3">
                                            <a href="#"
                                               class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Admin</a>
                                            <!--begin::Info-->
                                            <div class="mb-0 lh-1">
                                                    <span
                                                        class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                                <span class="fs-7 fw-semibold text-muted">Active</span>
                                            </div>

                                        </div>
                                        <!--end::User-->
                                    </div>

                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->

                                <div class="card-body overflow-auto h-350px" id="kt_chat_messenger_body">


                                    <!--begin::Messages-->
                                    <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto"
                                         data-kt-element="messages"
                                         data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                         data-kt-scroll-max-height="auto"
                                         data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer"
                                         data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body"
                                         data-kt-scroll-offset="5px">

                                        <!--begin::Message(in)-->
                                        <div v-for="com in comment">
                                            <!--begin::Wrapper-->
                                            <!--end::Message(in)-->
                                            <div v-if="com['from_user']==user['id']"
                                                 class="d-flex justify-content-start mb-10"
                                            >
                                                <!--begin::User-->
                                                <div class="d-flex justify-content-start mb-10">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-column align-items-start">
                                                        <!--begin::User-->
                                                        <div class="d-flex align-items-center mb-2">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                    <span
                                                                        class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">
{{ user['name'][0] }}
                                                                    </span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-3">
                                                                <a href="#"
                                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">{{
                                                                        user['name']
                                                                    }}</a>
                                                                <span
                                                                    class="text-muted fs-7 mb-1"></span>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Text-->
                                                        <div
                                                            class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                                            data-kt-element="message-text">{{ com['message'] }}
                                                        </div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Text-->
                                            </div>

                                            <div v-if="com['to_user']==user['id']"
                                                 class="d-flex justify-content-end mb-10"
                                            >
                                                <div class="d-flex flex-column align-items-end">
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <!--begin::Details-->
                                                        <div class="me-3">
                                                            <span
                                                                class="text-muted fs-7 mb-1"></span>
                                                            <a href="#"
                                                               class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                                    <span
                                                                        class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">
                                                                        Y

                                                                    </span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Text-->
                                                    <div
                                                        class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                                        data-kt-element="message-text">{{ com['message'] }}
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Messages-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                                    <!--begin::Input-->
                                    <textarea id="text_5" class="form-control form-control-flush mb-3" rows="2"
                                              placeholder="Type a message"></textarea>
                                    <!--end::Input-->
                                    <!--begin:Toolbar-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center me-2">
                                            <button class="btn btn-sm btn-icon btn-active-light-primary me-1"
                                                    type="button" data-bs-toggle="tooltip" title="Coming soon">
                                                <i class="bi bi-paperclip fs-3"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-active-light-primary me-1"
                                                    type="button" data-bs-toggle="tooltip" title="Coming soon">
                                                <i class="bi bi-upload fs-3"></i>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                        <!--begin::Send-->
                                        <button @click="storeComment(5)" class="btn btn-primary" type="button"
                                                data-kt-element="send">Send
                                        </button>
                                        <!--end::Send-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Card footer-->
                            </div>

                            <!--end::Tasks-->
                        </div>
                        <div class="tab-pane fade " v-if="4>user['status_request']" v-bind:class="show(4)"
                             id="step_4"
                             role="tabpanel">
                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Profile</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 pb-5">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed gy-5">
                                            <!--begin::Table body-->
                                            <tbody v-for="lang in language" class="fs-6 fw-semibold text-gray-600">
                                            <tr>
                                                <td>Job Detail</td>
                                                <td>{{ lang['certificate'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Score</td>
                                                <td>{{ lang['score'] }}</td>
                                            </tr>


                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>


                            <!--end::Card-->
                            <!--begin::Tasks-->
                            <div class="card card-flush mb-6 mb-xl-9" id="kt_chat_messenger">
                                <!--begin::Card header-->
                                <div class="card-header" id="kt_chat_messenger_header">
                                    <!--begin::Title-->
                                    <div class="card-title">
                                        <!--begin::User-->
                                        <div class="d-flex justify-content-center flex-column me-3">
                                            <a href="#"
                                               class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Admin</a>
                                            <!--begin::Info-->
                                            <div class="mb-0 lh-1">
                                                    <span
                                                        class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                                <span class="fs-7 fw-semibold text-muted">Active</span>
                                            </div>

                                        </div>
                                        <!--end::User-->
                                    </div>

                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->

                                <div class="card-body overflow-auto h-350px" id="kt_chat_messenger_body">


                                    <!--begin::Messages-->
                                    <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto"
                                         data-kt-element="messages"
                                         data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                         data-kt-scroll-max-height="auto"
                                         data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer"
                                         data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body"
                                         data-kt-scroll-offset="5px">

                                        <!--begin::Message(in)-->
                                        <div v-for="com in comment">
                                            <!--begin::Wrapper-->
                                            <!--end::Message(in)-->
                                            <div v-if="com['from_user']==user['id']"
                                                 class="d-flex justify-content-start mb-10"
                                            >
                                                <!--begin::User-->
                                                <div class="d-flex justify-content-start mb-10">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-column align-items-start">
                                                        <!--begin::User-->
                                                        <div class="d-flex align-items-center mb-2">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                    <span
                                                                        class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">
{{ user['name'][0] }}
                                                                    </span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-3">
                                                                <a href="#"
                                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">{{
                                                                        user['name']
                                                                    }}</a>
                                                                <span
                                                                    class="text-muted fs-7 mb-1"></span>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Text-->
                                                        <div
                                                            class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                                            data-kt-element="message-text">{{ com['message'] }}
                                                        </div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Text-->
                                            </div>

                                            <div v-if="com['to_user']==user['id']"
                                                 class="d-flex justify-content-end mb-10"
                                            >
                                                <div class="d-flex flex-column align-items-end">
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <!--begin::Details-->
                                                        <div class="me-3">
                                                            <span
                                                                class="text-muted fs-7 mb-1"></span>
                                                            <a href="#"
                                                               class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                                    <span
                                                                        class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">
                                                                        Y

                                                                    </span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Text-->
                                                    <div
                                                        class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                                        data-kt-element="message-text">{{ com['message'] }}
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Messages-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                                    <!--begin::Input-->
                                    <textarea id="text_4" class="form-control form-control-flush mb-3" rows="2"
                                              placeholder="Type a message"></textarea>
                                    <!--end::Input-->
                                    <!--begin:Toolbar-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center me-2">
                                            <button class="btn btn-sm btn-icon btn-active-light-primary me-1"
                                                    type="button" data-bs-toggle="tooltip" title="Coming soon">
                                                <i class="bi bi-paperclip fs-3"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-active-light-primary me-1"
                                                    type="button" data-bs-toggle="tooltip" title="Coming soon">
                                                <i class="bi bi-upload fs-3"></i>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                        <!--begin::Send-->
                                        <button @click="storeComment(4)" class="btn btn-primary" type="button"
                                                data-kt-element="send">Send
                                        </button>
                                        <!--end::Send-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Card footer-->
                            </div>

                            <!--end::Tasks-->
                        </div>
                        <div class="tab-pane fade " v-if="3>user['status_request']" v-bind:class="show(3)"
                             id="step_3"
                             role="tabpanel">
                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Profile</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 pb-5">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed gy-5">
                                            <!--begin::Table body-->
                                            <tbody class="fs-6 fw-semibold text-gray-600">
                                            <tr>
                                                <td>Certificate Language</td>
                                                <td>{{ user['certificate_language'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Certificate</td>
                                                <td v-if="this.certificate_language.length !=0">
                                                    <img class="h-40px d-inline-block"
                                                         v-bind:src="'/assets/Panel/media/svg/files/'+this.certificate_language[1]+'.png'">
                                                    <p class="d-inline-block">{{ this.certificate_language[0] }}</p>
                                                </td>
                                                <td v-if="this.certificate_language.length ===0">
                                                    <p class="d-inline-block text-gray-500">Null</p>
                                                </td>
                                                <td class="text-end">
                                                    <button type="button"
                                                            class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_update_password">
                                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                        <span class="svg-icon svg-icon-3">
																				<svg width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     xmlns="http://www.w3.org/2000/svg">
																					<path opacity="0.3"
                                                                                          d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                          fill="currentColor"></path>
																					<path
                                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                        fill="currentColor"></path>
																				</svg>
																			</span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </td>
                                            </tr>


                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>

                            <!--end::Card-->
                            <!--begin::Tasks-->
                            <div class="card card-flush mb-6 mb-xl-9" id="kt_chat_messenger">
                                <!--begin::Card header-->
                                <div class="card-header" id="kt_chat_messenger_header">
                                    <!--begin::Title-->
                                    <div class="card-title">
                                        <!--begin::User-->
                                        <div class="d-flex justify-content-center flex-column me-3">
                                            <a href="#"
                                               class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Admin</a>
                                            <!--begin::Info-->
                                            <div class="mb-0 lh-1">
                                                    <span
                                                        class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                                <span class="fs-7 fw-semibold text-muted">Active</span>
                                            </div>

                                        </div>
                                        <!--end::User-->
                                    </div>

                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->

                                <div class="card-body overflow-auto h-350px" id="kt_chat_messenger_body">


                                    <!--begin::Messages-->
                                    <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto"
                                         data-kt-element="messages"
                                         data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                         data-kt-scroll-max-height="auto"
                                         data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer"
                                         data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body"
                                         data-kt-scroll-offset="5px">

                                        <!--begin::Message(in)-->
                                        <div v-for="com in comment">
                                            <!--begin::Wrapper-->
                                            <!--end::Message(in)-->
                                            <div v-if="com['from_user']==user['id']"
                                                 class="d-flex justify-content-start mb-10"
                                            >
                                                <!--begin::User-->
                                                <div class="d-flex justify-content-start mb-10">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-column align-items-start">
                                                        <!--begin::User-->
                                                        <div class="d-flex align-items-center mb-2">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                    <span
                                                                        class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">
{{ user['name'][0] }}
                                                                    </span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-3">
                                                                <a href="#"
                                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">{{
                                                                        user['name']
                                                                    }}</a>
                                                                <span
                                                                    class="text-muted fs-7 mb-1"></span>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Text-->
                                                        <div
                                                            class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                                            data-kt-element="message-text">{{ com['message'] }}
                                                        </div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Text-->
                                            </div>

                                            <div v-if="com['to_user']==user['id']"
                                                 class="d-flex justify-content-end mb-10"
                                            >
                                                <div class="d-flex flex-column align-items-end">
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <!--begin::Details-->
                                                        <div class="me-3">
                                                            <span
                                                                class="text-muted fs-7 mb-1"></span>
                                                            <a href="#"
                                                               class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                                    <span
                                                                        class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">
                                                                        Y

                                                                    </span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Text-->
                                                    <div
                                                        class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                                        data-kt-element="message-text">{{ com['message'] }}
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Messages-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                                    <!--begin::Input-->
                                    <textarea id="text_3" class="form-control form-control-flush mb-3" rows="2"
                                              placeholder="Type a message"></textarea>
                                    <!--end::Input-->
                                    <!--begin:Toolbar-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Actions-->

                                        <!--end::Actions-->
                                        <!--begin::Send-->
                                        <button @click="storeComment(3)" class="btn btn-primary" type="button"
                                                data-kt-element="send">Send
                                        </button>
                                        <!--end::Send-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Card footer-->
                            </div>

                            <!--end::Tasks-->
                        </div>
                        <div class="tab-pane fade" v-if="user['pending']==1" v-bind:class="show(2)"
                             id="step_2"
                             role="tabpanel">
                            <!--begin::Card-->
                            <div class="card card-xl-stretch mb-5 mb-xl-8">
                                <!--begin::Header-->
                                <div class="card-header border-0">
                                    <h3 class="card-title fw-bold text-dark">Todo</h3>
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button type="button"
                                                class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            <span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                             height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1"
                                                                      fill="currentColor"></rect>
																<rect x="14" y="5" width="5" height="5" rx="1"
                                                                      fill="currentColor" opacity="0.3"></rect>
																<rect x="5" y="14" width="5" height="5" rx="1"
                                                                      fill="currentColor" opacity="0.3"></rect>
																<rect x="14" y="14" width="5" height="5" rx="1"
                                                                      fill="currentColor" opacity="0.3"></rect>
															</g>
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 3-->
                                        <div
                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                            data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                    Payments
                                                </div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Create Invoice</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                       data-bs-toggle="tooltip"
                                                       aria-label="Specify a target name for future usage and reference"
                                                       data-bs-original-title="Specify a target name for future usage and reference"
                                                       data-kt-initialized="1"></i></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Generate Bill</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                 data-kt-menu-placement="right-end">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">Subscription</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Plans</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Billing</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Statements</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-2"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3">
                                                            <!--begin::Switch-->
                                                            <label
                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input w-30px h-20px"
                                                                       type="checkbox" value="1" checked="checked"
                                                                       name="notifications">
                                                                <!--end::Input-->
                                                                <!--end::Label-->
                                                                <span
                                                                    class="form-check-label text-muted fs-6">Recuring</span>
                                                                <!--end::Label-->
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-1">
                                                <a href="#" class="menu-link px-3">Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 3-->
                                        <!--end::Menu-->
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-2">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-8">
                                        <!--begin::Bullet-->
                                        <!--                                        <span class="bullet bullet-vertical h-40px bg-success"></span>-->
                                        <!--end::Bullet-->
                                        <!--begin::Checkbox-->
                                        <div class="text-start text-gray-500  fs-3 me-5 ms-5">
                                            Email:
                                        </div>
                                        <!--end::Checkbox-->
                                        <!--begin::Description-->
                                        <div class="flex-grow-1">
                                            <a href="#"
                                               class="text-gray-800 text-hover-primary fw-bold fs-6">{{
                                                    user['email']
                                                }}</a>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <div class="d-flex align-items-center mb-8">
                                        <!--begin::Bullet-->
                                        <!--                                        <span class="bullet bullet-vertical h-40px bg-success"></span>-->
                                        <!--end::Bullet-->
                                        <!--begin::Checkbox-->
                                        <div class="text-start text-gray-500  fs-3 me-5 ms-5">
                                            Phone Number:
                                        </div>
                                        <!--end::Checkbox-->
                                        <!--begin::Description-->
                                        <div class="flex-grow-1">
                                            <a href="#"
                                               class="text-gray-800 text-hover-primary fw-bold fs-6">{{
                                                    user['phoneNumber']
                                                }}</a>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <div class="d-flex align-items-center mb-8">
                                        <!--begin::Bullet-->
                                        <!--                                        <span class="bullet bullet-vertical h-40px bg-success"></span>-->
                                        <!--end::Bullet-->
                                        <!--begin::Checkbox-->
                                        <div class="text-start text-gray-500  fs-3 me-5 ms-5">
                                            Address:
                                        </div>
                                        <!--end::Checkbox-->
                                        <!--begin::Description-->
                                        <div class="flex-grow-1">
                                            <a href="#"
                                               class="text-gray-800 text-hover-primary fw-bold fs-6">{{
                                                    user['address']
                                                }}</a>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end:Item-->
                                    <!--begin::Item-->

                                    <!--end:Item-->
                                </div>
                                <!--end::Body-->
                            </div>

                            <!--end::Card-->
                            <!--begin::Tasks-->
                            <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                                <!--begin::Input-->
                                <textarea id="text_2" class="form-control form-control-flush mb-3" rows="2"
                                          placeholder="Type a message"></textarea>
                                <!--end::Input-->
                                <!--begin:Toolbar-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Actions-->
                                    <div class="d-flex align-items-center me-2">
                                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1"
                                                type="button" data-bs-toggle="tooltip" title="Coming soon">
                                            <i class="bi bi-paperclip fs-3"></i>
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1"
                                                type="button" data-bs-toggle="tooltip" title="Coming soon">
                                            <i class="bi bi-upload fs-3"></i>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                    <!--begin::Send-->
                                    <button @click="storeComment(2)" class="btn btn-primary" type="button"
                                            data-kt-element="send">Send
                                    </button>
                                    <!--end::Send-->
                                </div>
                                <!--end::Toolbar-->
                            </div>

                            <!--end::Tasks-->
                        </div>
                        <div class="tab-pane fade " v-if="user['lastStep']==1" v-bind:class="show(1)"
                             id="step_1"
                             role="tabpanel">
                            <!--begin::Card-->
                            <div class="card card-xl-stretch mb-5 mb-xl-8">
                                <!--begin::Header-->
                                <div class="card-header border-0">
                                    <h3 class="card-title fw-bold text-dark">Todo</h3>
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button type="button"
                                                class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            <span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                             height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1"
                                                                      fill="currentColor"></rect>
																<rect x="14" y="5" width="5" height="5" rx="1"
                                                                      fill="currentColor" opacity="0.3"></rect>
																<rect x="5" y="14" width="5" height="5" rx="1"
                                                                      fill="currentColor" opacity="0.3"></rect>
																<rect x="14" y="14" width="5" height="5" rx="1"
                                                                      fill="currentColor" opacity="0.3"></rect>
															</g>
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 3-->
                                        <div
                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                            data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                    Payments
                                                </div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Create Invoice</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                       data-bs-toggle="tooltip"
                                                       aria-label="Specify a target name for future usage and reference"
                                                       data-bs-original-title="Specify a target name for future usage and reference"
                                                       data-kt-initialized="1"></i></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Generate Bill</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                 data-kt-menu-placement="right-end">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">Subscription</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Plans</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Billing</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Statements</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-2"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3">
                                                            <!--begin::Switch-->
                                                            <label
                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input w-30px h-20px"
                                                                       type="checkbox" value="1" checked="checked"
                                                                       name="notifications">
                                                                <!--end::Input-->
                                                                <!--end::Label-->
                                                                <span
                                                                    class="form-check-label text-muted fs-6">Recuring</span>
                                                                <!--end::Label-->
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-1">
                                                <a href="#" class="menu-link px-3">Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 3-->
                                        <!--end::Menu-->
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-2">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-8">
                                        <!--begin::Bullet-->
                                        <!--                                        <span class="bullet bullet-vertical h-40px bg-success"></span>-->
                                        <!--end::Bullet-->
                                        <!--begin::Checkbox-->
                                        <div class="text-start text-gray-500  fs-3 me-5 ms-5">
                                            Email:
                                        </div>
                                        <!--end::Checkbox-->
                                        <!--begin::Description-->
                                        <div class="flex-grow-1">
                                            <a href="#"
                                               class="text-gray-800 text-hover-primary fw-bold fs-6">{{
                                                    user['email']
                                                }}</a>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <div class="d-flex align-items-center mb-8">
                                        <!--begin::Bullet-->
                                        <!--                                        <span class="bullet bullet-vertical h-40px bg-success"></span>-->
                                        <!--end::Bullet-->
                                        <!--begin::Checkbox-->
                                        <div class="text-start text-gray-500  fs-3 me-5 ms-5">
                                            Phone Number:
                                        </div>
                                        <!--end::Checkbox-->
                                        <!--begin::Description-->
                                        <div class="flex-grow-1">
                                            <a href="#"
                                               class="text-gray-800 text-hover-primary fw-bold fs-6">{{
                                                    user['phoneNumber']
                                                }}</a>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <div class="d-flex align-items-center mb-8">
                                        <!--begin::Bullet-->
                                        <!--                                        <span class="bullet bullet-vertical h-40px bg-success"></span>-->
                                        <!--end::Bullet-->
                                        <!--begin::Checkbox-->
                                        <div class="text-start text-gray-500  fs-3 me-5 ms-5">
                                            Address:
                                        </div>
                                        <!--end::Checkbox-->
                                        <!--begin::Description-->
                                        <div class="flex-grow-1">
                                            <a href="#"
                                               class="text-gray-800 text-hover-primary fw-bold fs-6">{{
                                                    user['address']
                                                }}</a>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end:Item-->
                                    <!--begin::Item-->

                                    <!--end:Item-->
                                </div>
                                <!--end::Body-->
                            </div>

                            <!--end::Card-->
                            <!--begin::Tasks-->
                            <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                                <!--begin::Input-->
                                <textarea id="text_1" class="form-control form-control-flush mb-3" rows="2"
                                          placeholder="Type a message"></textarea>
                                <!--end::Input-->
                                <!--begin:Toolbar-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Actions-->
                                    <div class="d-flex align-items-center me-2">
                                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1"
                                                type="button" data-bs-toggle="tooltip" title="Coming soon">
                                            <i class="bi bi-paperclip fs-3"></i>
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1"
                                                type="button" data-bs-toggle="tooltip" title="Coming soon">
                                            <i class="bi bi-upload fs-3"></i>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                    <!--begin::Send-->
                                    <button @click="storeComment(1)" class="btn btn-primary" type="button"
                                            data-kt-element="send">Send
                                    </button>
                                    <!--end::Send-->
                                </div>
                                <!--end::Toolbar-->
                            </div>

                            <!--end::Tasks-->
                        </div>

                    </div>
                    <!--end:::Tab content-->
                </div>
                <!--end::Content-->
            </div>

        </div>
        <!--end::Post-->
    </div>
    <div class="modal fade" id="kt_modal_update_email" tabindex="-1" style="display: none;" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Update Email Address</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                              rx="1" transform="rotate(-45 6 17.3137)"
                                                              fill="currentColor"></rect>
														<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                              transform="rotate(45 7.41422 6)"
                                                              fill="currentColor"></rect>
													</svg>
												</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_update_email_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                          action="#">
                        <!--begin::Notice-->
                        <!--begin::Notice-->
                        <div
                            class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                            <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                                  rx="10" fill="currentColor"></rect>
															<rect x="11" y="14" width="7" height="2" rx="1"
                                                                  transform="rotate(-90 11 14)"
                                                                  fill="currentColor"></rect>
															<rect x="11" y="17" width="2" height="2" rx="1"
                                                                  transform="rotate(-90 11 17)"
                                                                  fill="currentColor"></rect>
														</svg>
													</span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                                <!--begin::Content-->
                                <div class="fw-semibold">
                                    <div class="fs-6 text-gray-700">Please note that a valid email address is required
                                        to complete the email verification.
                                    </div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                        <!--end::Notice-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mb-2">
                                <span class="required">Email Address</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid" placeholder="" name="profile_email"
                                   value="smith@kpmg.com">
                            <!--end::Input-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">
                                Discard
                            </button>
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
														<span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>

</template>
<script>
export default {
    props: {
        user: Object,
        step: Object
    },
    data() {
        return {
            idStep: 6,
            passportBio: [],
            certificate_language: [],
            comment: null,
            school: JSON.parse(this.user['school']),
            language: JSON.parse(this.user['language'])
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
            this.certificate_language[0] = this.user['certificate_language_file'].split('/')
            this.certificate_language[0] = this.certificate_language[0][this.certificate_language[0].length - 1]
            let s = this.user['certificate_language_file'];
            s = s.slice(s.length - 8, s.length);
            this.certificate_language[1] = s.split('.')[1]
        }

        Echo.channel('new-comment').listen('NewComment', (e) => {
            if (e.comment['from_user'] === this.user['id']) {
                this.comment.push(e.comment)

            }
        })
    },
    methods: {
        show(id) {

            if (this.idStep == id) {
                return 'active show'
            }
        },
        storeComment(step_id) {
            axios.post('/api/new-comment', {
                'message': document.getElementById('text_' + this.idStep).value,
                'from_user': 0,
                'to_user': this.user['id'],
                'step_id': this.idStep
            }).then(response => this.comment.push(response.data))
        },
        showte() {
            axios.post('/api/get-comment', {
                'id': this.user['id'],
                'step_id': this.idStep
            }).then(response => this.comment = response.data)

        },

    }
}
</script>
<style scoped>.image-input-placeholder {
    background-image: url('/assets/Panel/media/svg/avatars/blank.svg');
}

[data-theme="dark"] .image-input-placeholder {
    background-image: url('/assets/Panel/media/svg/avatars/blank-dark.svg');
}</style>
