<template>
    <div class="card">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Contact Info</span>
                <span
                    class="text-muted mt-1 fw-semibold fs-7">Your Contact Information</span>
            </h3>

        </div>
        <div class="card-body py-3">
            <form class="form" action="#" method="post">
                <!--begin::Input group-->
                <div class="fv-row">
                    <div class="col-lg-12 col-12 fv-row mb-7 fv-plugins-icon-container">
                        <label class=" fs-6 fw-semibold mb-2">passport:</label>
                        <div class="dropzone" id="passport">
                            <!--begin::Message-->
                            <div class="dz-message needsclick">
                                <!--begin::Icon-->
                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                <!--end::Icon-->

                                <!--begin::Info-->
                                <div class="ms-4">
                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                    <span class="fs-7 fw-semibold text-gray-400">Upload up to 10 files</span>
                                </div>
                                <!--end::Info-->
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 col-12 fv-row mb-7 fv-plugins-icon-container">
                        <label class=" fs-6 fw-semibold mb-2">national:</label>
                        <div class="dropzone" id="national">
                            <!--begin::Message-->
                            <div class="dz-message needsclick">
                                <!--begin::Icon-->
                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                <!--end::Icon-->

                                <!--begin::Info-->
                                <div class="ms-4">
                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                    <span class="fs-7 fw-semibold text-gray-400">Upload up to 10 files</span>
                                </div>
                                <!--end::Info-->
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 col-12 fv-row mb-7 fv-plugins-icon-container">
                        <label class=" fs-6 fw-semibold mb-2">education:</label>
                        <div class="dropzone" id="education">
                            <!--begin::Message-->
                            <div class="dz-message needsclick">
                                <!--begin::Icon-->
                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                <!--end::Icon-->

                                <!--begin::Info-->
                                <div class="ms-4">
                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                    <span class="fs-7 fw-semibold text-gray-400">Upload up to 10 files</span>
                                </div>
                                <!--end::Info-->
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 col-12 fv-row mb-7 fv-plugins-icon-container">
                        <label class=" fs-6 fw-semibold mb-2">CV:</label>
                        <div class="dropzone" id="CV">
                            <!--begin::Message-->
                            <div class="dz-message needsclick">
                                <!--begin::Icon-->
                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                <!--end::Icon-->

                                <!--begin::Info-->
                                <div class="ms-4">
                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                    <span class="fs-7 fw-semibold text-gray-400">Upload up to 10 files</span>
                                </div>
                                <!--end::Info-->
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 col-12 fv-row mb-7 fv-plugins-icon-container">
                        <label class=" fs-6 fw-semibold mb-2">GRE:</label>
                        <div class="dropzone" id="GRE">
                            <!--begin::Message-->
                            <div class="dz-message needsclick">
                                <!--begin::Icon-->
                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                <!--end::Icon-->

                                <!--begin::Info-->
                                <div class="ms-4">
                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                    <span class="fs-7 fw-semibold text-gray-400">Upload up to 10 files</span>
                                </div>
                                <!--end::Info-->
                            </div>
                        </div>

                    </div>

                    <!--begin::Dropzone-->
                    <button type="button" style="float:  right"

                            @click="save()"
                            class="btn btn-primary">Next
                    </button>
                    <button type="button" @click="backStep(4)" style="float:  left" class="btn btn-light m-4">Back</button>


                </div>
                <!--end::Input group-->
            </form>
        </div>
    </div>
    <div v-if="comment!=null" class="card card-flush mb-6 mb-xl-9 mt-10" id="kt_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header" id="kt_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#"
                       class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Admin</a>
                    <!--begin::Info-->


                </div>
                <!--end::User-->
            </div>

        </div>
        <!--end::Card header-->
        <!--begin::Card body-->

        <div class="card-body overflow-auto  h-350px" id="kt_chat_messenger_body">


            <!--begin::Messages-->
            <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto"
                 data-kt-element="messages"
                 data-kt-scroll="true"
                 data-kt-scroll-activate="{default: false, lg: true}"
                 data-kt-scroll-max-height="auto"
                 data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer"
                 data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body"
                 data-kt-scroll-offset="5px" id="message_3">

                <!--begin::Message(in)-->
                <div v-for="com in comment">
                    <!--begin::Wrapper-->
                    <!--end::Message(in)-->
                    <div v-if="com['from_user']!=user['id']"
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
A
                                                                    </span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-3">
                                        <a href="#"
                                           class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Admin</a>
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

                    <div v-if="com['to_user']!=user['id']"
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
            <textarea id="messagee_3" class="form-control form-control-flush mb-3"
                      rows="2"
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

</template>
<script>
export default {
    props: {
        user: Object,
        upload: Function,
        backStep:Function

    },
    data() {
        return {
            passport: [],
            national: [],
            education: [],
            CV: [],
            GRE: [],
            comment: null

        }
    },
    mounted() {
        let passport = []
        let national = []
        let education = []
        let CV = []
        let GRE = []

        var passport1 = new Dropzone("#passport", {
            url: "/api/uploade", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            accept: function (file, done,) {
                if (file.name == "wow.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        });
        passport1.on('thumbnail', function (file, dataURL) {
            passport.push(dataURL)
        });
        var national1 = new Dropzone("#national", {
            url: "/api/uploade", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            accept: function (file, done) {

                if (file.name == "wow.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        });
        national1.on('thumbnail', function (file, dataURL) {
            national.push(dataURL)
        });
        var education1 = new Dropzone("#education", {
            url: "/api/uploade", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            accept: function (file, done) {

                if (file.name == "wow.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        });
        education1.on('thumbnail', function (file, dataURL) {
            education.push(dataURL)
        });
        var CV1 = new Dropzone("#CV", {
            url: "/api/uploade", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            accept: function (file, done) {

                if (file.name == "wow.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        });
        CV1.on('thumbnail', function (file, dataURL) {
            CV.push(dataURL)
        });
        var GRE1 = new Dropzone("#GRE", {
            url: "/api/uploade", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            accept: function (file, done) {

                if (file.name == "wow.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        });
        GRE1.on('thumbnail', function (file, dataURL) {
            GRE.push(dataURL)
        });
        this.passport = passport
        this.national = national
        this.CV = CV
        this.GRE = GRE
        this.education = education
    },
    methods: {
        save() {
            axios.post('/api/request', {
                'passport': this.passport,
                'national': this.national,
                'education': this.education,
                'CV': this.CV,
                'GRE': this.GRE,
                'status': 3,
                'id': this.user['id']
            }).then(response => {
                this.upload(response.data['status_request'])
            })

        },
        showte() {
            axios.post('/api/get-comment', {
                'id': this.user['id'],
                'step_id': 3
            }).then(response => this.comment = response.data)

        },
        storeComment(step_id) {
            axios.post('/api/new-comment', {
                'message': document.getElementById('messagee_' + step_id).value,
                'from_user': this.user['id'],
                'to_user': 0,
                'step_id': step_id
            }).then(response => this.comment.push(response.data))
        },
    }
}
</script>
