<template>
    <!--begin::Theme mode setup on page load-->
    <!--End::Google Tag Manager (noscript) -->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <!--end::Aside-->
            <!--begin::Wrapper-->

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                <!--begin::Post-->

                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-lg-row">
                        <!--begin::Sidebar-->
                        <div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0">
                            <!--begin::Contacts-->
                            <div class="card card-flush">
                                <!--begin::Card header-->
                                <div class="card-header pt-7" id="kt_chat_contacts_header">
                                    <!--begin::Form-->
                                    <form class="w-100 position-relative" autocomplete="off">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                        <span
                                            class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                              height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                              fill="currentColor"/>
														<path
                                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                            fill="currentColor"/>
													</svg>
												</span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid px-15"
                                               name="search" value="" placeholder="Search by username or email..."/>
                                        <!--end::Input-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->

                                <div class="card-body pt-5 overflow-auto " style="height: 504px"
                                     id="kt_chat_contacts_body">
                                    <!--begin::List-->
                                    <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true"
                                         data-kt-scroll-activate="{default: false, lg: true}"
                                         data-kt-scroll-max-height="auto"
                                         data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_toolbar, #kt_app_toolbar, #kt_footer, #kt_app_footer, #kt_chat_contacts_header"
                                         data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_contacts_body"
                                         data-kt-scroll-offset="5px">
                                        <!--begin::User-->
                                        <div v-for="inf in info" class="d-flex flex-stack py-4">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-45px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">{{
                                                                inf['name'][0]
                                                            }}</span>
                                                    <div v-if="inf['last_seen']==='true'"
                                                         class="symbol-badge bg-success start-100 top-100 border-4 h-10px w-10px ms-n2 mt-n2"></div>

                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-5">
                                                    <a v-on:click="check(inf['id'])"
                                                       class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">{{
                                                            inf['name']
                                                        }}</a>
                                                    <div class="fw-semibold text-muted">{{ inf['email'] }}</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Lat seen-->
                                            <div class="d-flex flex-column align-items-end ms-2">
                                                <!--                                                <span class="text-muted fs-7 mb-1">3 hrs</span>-->
                                                <!--                                                <span-->
                                                <!--                                                    class="badge badge-sm badge-circle badge-light-danger">{{ seen(inf['id']) }}</span>-->
                                            </div>
                                            <!--end::Lat seen-->
                                        </div>
                                    </div>
                                    <!--end::List-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Contacts-->
                        </div>

                        <!--end::Sidebar-->
                        <!--begin::Content-->
                        <div v-if="message!==false" class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
                            <!--begin::Messenger-->
                            <div class="card" id="kt_chat_messenger">
                                <!--begin::Card header-->
<!--                                <div id="load" style="z-index: 10;opacity: 75%;transition: 1s" class="position-absolute w-100 h-100 bg-black ">-->
<!--                                    <div class="text-center">-->
<!--                                        <div style="    text-align: center;-->
<!--                                        margin: auto !important;-->
<!--                                        top: 264px;-->
<!--    position: absolute;-->
<!--    width: 3rem; height: 3rem;" class="spinner-border text-danger" role="status">-->
<!--                                            <span class="visually-hidden">Loading...</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="card-header" id="kt_chat_messenger_header">
                                    <!--begin::Title-->
                                    <div class="card-title">
                                        <!--begin::User-->
                                        <div class="d-flex justify-content-center flex-column me-3">
                                            <a href="#"
                                               class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">{{
                                                    user_to_info['name']
                                                }}</a>
                                            <!--begin::Info-->
                                            <div v-if="online==='true'" class="mb-0 lh-1">
                                                    <span
                                                        class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                                <span class="fs-7 fw-semibold text-muted">Active</span>
                                            </div>
                                            <div v-if="online==='false'" class="mb-0 lh-1">
                                                    <span
                                                        class="badge badge-dark opacity-50 badge-circle w-10px h-10px me-1"></span>
                                                <span class="fs-7 fw-semibold text-muted">Offline</span>
                                            </div>
                                        </div>
                                        <!--end::User-->
                                    </div>

                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div id="load1234" style="z-index: 100;opacity: 75%;transition: 2s" class="position-absolute w-100 h-100 bg-black ">
                                    <div class="text-center">
                                        <div style="    text-align: center;
                                        margin: auto !important;
                                        top: 264px;
    position: absolute;
    width: 3rem; height: 3rem;" class="spinner-border text-danger" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                                <div

                                    data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                    data-kt-scroll-max-height="auto"
                                    data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer"
                                    data-kt-scroll-wrappers="#kt_content, #kt_app_content"
                                    data-kt-scroll-offset="5px" class="card-body  h-350px scroll-y"
                                    id="kt_chat_messenger_body">

                                    <!--begin::Messages-->
                                    <div  class="me-n5 pe-5 h-300px h-lg-auto">

                                        <div class="d-flex justify-content-end mb-10">
                                            <div class="d-flex flex-column align-items-end">
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <!--begin::Details-->
                                                    <div class="me-3">
                                                        <span class="text-muted fs-7 mb-1">Auto</span>
                                                        <a href="#"
                                                           class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                                    <span
                                                                        class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">
                                                                        H

                                                                    </span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Text-->
                                                <div
                                                    class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                                    data-kt-element="message-text">Hello
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                        </div>

                                        <!--begin::Message(in)-->
                                        <div v-for="mas in message">
                                            <!--begin::Wrapper-->
                                            <!--end::Message(in)-->
                                            <div class="d-flex justify-content-start mb-10"
                                                 v-if="mas['from_user']===user_to">
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
                                                                                                                                            {{
                                                                            user_to_info['name'][0]
                                                                        }}

                                                                    </span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-3">
                                                                <a href="#"
                                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">{{
                                                                        user_to_info['name']
                                                                    }}</a>
                                                                <span
                                                                    class="text-muted fs-7 mb-1">{{
                                                                        timesend(mas['created_at'])
                                                                    }}</span>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Text-->
                                                        <div
                                                            class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                                            data-kt-element="message-text">{{ mas['message'] }}
                                                        </div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Text-->
                                            </div>

                                            <div class="d-flex justify-content-end mb-10"
                                                 v-if="mas['to_user']===user_to">
                                                <div class="d-flex flex-column align-items-end">
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <!--begin::Details-->
                                                        <div class="me-3">
                                                            <span
                                                                class="text-muted fs-7 mb-1">{{
                                                                    timesend(mas['created_at'])
                                                                }}</span>
                                                            <a href="#"
                                                               class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                                    <span
                                                                        class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">
                                                                        {{ user['name'][0] }}

                                                                    </span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Text-->
                                                    <div
                                                        class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                                        data-kt-element="message-text">{{ mas['message'] }}
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                            </div>
                                            <!--                                                end::Wrapper-->
                                        </div>
                                    </div>
                                    <!--end::Messages-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                                    <!--begin::Input-->
                                    <textarea v-bind:id="'text_'+user_to['id']"
                                              class="form-control form-control-flush mb-3" rows="2"
                                              placeholder="Type a message"></textarea>
                                    <!--end::Input-->
                                    <!--begin:Toolbar-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center me-2">

                                        </div>
                                        <!--end::Actions-->
                                        <!--begin::Send-->
                                        <button @click="store()" class="btn btn-primary" type="button"
                                                data-kt-element="send">Send
                                        </button>
                                        <!--end::Send-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Card footer-->
                            </div>
                            <!--end::Messenger-->
                        </div>

                        <!--end::Content-->
                    </div>
                    <!--end::Layout-->
                    <!--begin::Modals-->
                    <!--begin::Modal - View Users-->

                    <!--end::Modal - Users Search-->
                    <!--end::Modals-->
                </div>
                <!--end::Post-->
            </div>

            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--begin::Button-->
    <!--begin::Button-->
    <!--end::Button-->

    <!--begin::Toast-->
    <div class="position-fixed bottom-0 end-0 p-3 z-index-3">
        <div id="kt_docs_toast_toggle" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <div class="symbol symbol-35px symbol-circle">
                                                                    <span
                                                                        class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">
                                                                        {{
                                                                            message_info != null ? message_info['name'][0] : ""
                                                                        }}
                                                                    </span>
                </div>
                <strong class="me-auto"> {{ message_info != null ? message_info['name'] : "" }}
                </strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ message_new != null ? message_new['message'] : "" }}
            </div>
        </div>
    </div>
    <!--end::Toast-->
</template>
<script>
import axios from "axios";

export default {
    props: {
        info: Array,
        user: Object,
        user_id: Number
    },
    data() {
        return {
            message: false,
            user_to: null,
            user_to_info: {'name': ' '},
            text: '',
            online: 'false',
            onlines: [],
            notSeen: null,
            notSeen1: [],
            message_info: null,
            message_new: null
        }
    },
    mounted() {

        this.check(this.info[0]['id'])
        this.listen()
    },
    methods: {
        async messages() {
            await axios.post('/api/seen-message').then(response => {
                this.notSeen = response.data
            })
        },
        async check(id) {
            this.message = []
            this.user_to = id
            await axios.post('/api/get-user', {
                'id': id,
            }).then(response => {
                // console.log(response.data)
                this.user_to_info = response.data
            })
            this.online = this.user_to_info['last_seen']
            await axios.post('/api/get-message', {
                'to_user': id,
                'from_user': 0,
                'id': this.user_id
            }).then(response => {
                this.message = response.data
            })
            setTimeout(function () {
                document.getElementById('load1234').style.opacity=0
                let ch1 = document.querySelector('#kt_chat_messenger_body')

                ch1.scrollTop = parseInt(ch1.scrollHeight)
            }, 1000)
            setTimeout(function () {
                document.getElementById('load1234').style.display='none'
            },2000)

        },


        async store() {
            await axios.post('/api/store-message', {
                'message': document.getElementById('text_' + this.user_to['id']).value,
                'from_user': 0,
                'to_user': this.user_to
            }).then(response => {
                this.message.push(response.data)
                document.getElementById('text_' + this.user_to['id']).value = ''
            })
            let ch1 = document.querySelector('#kt_chat_messenger_body')

            ch1.scrollTop = parseInt(ch1.scrollHeight)
        },
        listen() {
            let play;
            Echo.channel('message-chat').listen('NewMessage', (e) => {

                if (e.message['to_user'] !== this.user_to) {
                    this.message.push(e.message);

                    // new Audio('/assets/noth.mp3').play()
                    //
                    // const toastElement = document.getElementById('kt_docs_toast_toggle');
                    // const toast = bootstrap.Toast.getOrCreateInstance(toastElement);
                    //
                    // this.message_info = e.user
                    // this.message_new = e.message

                    // toast.show();
                    let ch1 = document.querySelector('#kt_chat_messenger_body')

                    ch1.scrollTop = parseInt(ch1.scrollHeight)
                }
            })
            Echo.channel('online-user').listen('OnlineUser', (e) => {
                if (e.online[1] === this.user_to) {
                    this.online = e.online[0]
                }
                this.onlines = e.online
            })
        },
        timesend(timese) {
            let timeNot = Math.abs(new Date(timese) - new Date())
            let timeSec = Math.floor(timeNot / (1000))
            let timeMin = Math.floor(timeNot / (1000 * 60))
            let timeHe = Math.floor(timeNot / (1000 * 60 * 60))
            let timeDay = Math.floor(timeNot / (1000 * 60 * 60 * 24))
            let timeMon = Math.floor(timeNot / (1000 * 60 * 60 * 24 * 30))
            let time;

            if (timeDay > 30) {
                time = timeMon + ' Month'
            } else if (timeHe > 24) {
                time = timeDay + ' Day'
            } else if (timeMin > 60) {
                time = timeHe + ' Hour'
            } else if (timeSec > 60) {
                time = timeMin + ' Min'
            } else {
                time = timeSec + ' Second'

            }
            return time
        }
    }

}
</script>
