<template>
    <div class="d-flex flex-column-fluid align-items-start container-xxl">
        <div class="content flex-row-fluid" id="kt_content">
            <div class="row gy-0 gx-10">
                <div class="col-xl-12">
                    <div class="mb-10">
                        <ul class="nav row mb-10">
                            <li disabled="" v-for="check in checkStep" class="nav-item col-lg-2  col-lg mb-5 mb-lg-0 ">
                                <a disabled="" aria-selected="true"
                                   class="nav-link disabled btn btn-flex btn-color-muted btn-outline btn-outline-success  d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                   data-bs-toggle="tab">

                                    <!--                                    <span class="svg-icon svg-icon-3x mb-5 mx-0" v-html="ste['icon']">-->
                                    <!--                                            </span>-->
                                    <span class="svg-icon svg-icon-3x mb-5 mx-0 fa fa-check text-success  "
                                          style="font-size: 24px">
                                                                                                                                                        </span>

                                    <span class="fs-6 fw-bold">{{ check['name'] }}</span>
                                </a>
                            </li>
                            <li v-for="ste in step" class="nav-item col-lg-2  col-lg mb-5 mb-lg-0 ">
                                <a aria-selected="true" v-bind:class="classFUN(ste['id_step'])" v-if="ste['id_step'] > user_Data['status_request']"
                                   class="nav-link nav-link btn btn-flex btn-color-muted btn-outline btn-outline-success btn-active-success d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                   data-bs-toggle="tab" v-bind:href="'#item_'+ste['id_step']">

                                    <span class="svg-icon svg-icon-3x mb-5 mx-0" v-html="ste['icon']">
                                            </span>
                                    <!--                                    <span class="svg-icon svg-icon-3x mb-5 mx-0 fa fa-check text-success  "-->
                                    <!--                                          style="font-size: 24px">-->
                                    <!--                                                                                                                    </span>-->

                                    <span class="fs-6 fw-bold">{{ ste['name'] }}</span>
                                </a>
                                <a aria-selected="true" v-bind:class="classFUN(ste['id_step'])" v-if="ste['id_step'] === user_Data['status_request']"
                                   class="nav-link nav-link btn btn-flex btn-color-muted btn-outline btn-outline-warning  btn-active-warning d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                   data-bs-toggle="tab" v-bind:href="'#item_'+ste['id_step']">

                                    <span class="svg-icon svg-icon-3x mb-5 mx-0" v-html="ste['icon']">
                                            </span>
                                    <!--                                    <span class="svg-icon svg-icon-3x mb-5 mx-0 fa fa-check text-success  "-->
                                    <!--                                          style="font-size: 24px">-->
                                    <!--                                                                                                                    </span>-->

                                    <span class="fs-6 fw-bold">{{ ste['name'] }}</span>
                                </a>
                                <a aria-selected="true" v-bind:class="classFUN(ste['id_step'])" v-if="ste['id_step'] < user_Data['status_request']"
                                   class="nav-link nav-link btn btn-flex disabled btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                   data-bs-toggle="tab">

                                    <span class="svg-icon svg-icon-3x mb-5 mx-0" v-html="ste['icon']">
                                            </span>
                                    <!--                                    <span class="svg-icon svg-icon-3x mb-5 mx-0 fa fa-check text-success  "-->
                                    <!--                                          style="font-size: 24px">-->
                                    <!--                                                                                                                    </span>-->

                                    <span class="fs-6 fw-bold">{{ ste['name'] }}</span>
                                </a>
                            </li>


                        </ul>
                        <div v-bind:class="this.user_Data['pending']==1?'d-block':'d-none'" class="alert alert-primary d-flex align-items-center p-5">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2hx svg-icon-primary me-3">...</span>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column">
                                <!--begin::Title-->
                                <h4 class="mb-1 text-dark">This is an alert</h4>
                                <!--end::Title-->
                                <!--begin::Content-->
                                <span>The alert component can be used to highlight certain parts of your page for higher content visibility.</span>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <div class="tab-content">

                            <div class="tab-pane fade " v-bind:class="show(6)" id="item_6">
                                <Personal :user="user_Data" :check="validation" :saveParent="save"/>
                            </div>
                            <div class="tab-pane fade" v-bind:class="show(5)" id="item_5">
                                <Education :backStep="backStep" :user="user_Data" :check="validation" :saveParent="save"/>
                            </div>
                            <div class="tab-pane fade " v-bind:class="show(4)" id="item_4">
                                <Language :backStep="backStep" :user="user_Data" :check="validation" :saveParent="save"/>

                            </div>
                            <div class="tab-pane fade" v-bind:class="show(3)" id="item_3">
                                <Upload :backStep="backStep" :user="user_Data"  :upload="upload"/>
                            </div>
                            <div class="tab-pane fade" v-bind:class="show(2)" id="item_2">
                                <Apply :backStep="backStep" :user="user_Data" :check="validation" :saveParent="save"/>
                            </div>
                            <div class="tab-pane fade" v-bind:class="show(1)" id="item_1">
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</template>
<script>
import Personal from './componnet/personal.vue'
import Education from './componnet/educatio.vue'
import Language from './componnet/language.vue'
import Upload from './componnet/upload.vue'
import Apply from './componnet/apply.vue'

export default {
    props: {
        step: Object,
        checkStep: Object,
        user: Object,

    },
    components: {
        Personal, Education, Language, Upload,Apply
    },
    data() {
        return {
            showTab: this.user['status_request'],
            form_item: '',
            step_id: null,
            user_Data: this.user,
            validation: null
        }
    },
    methods: {
        show(id) {
            if (id === this.showTab) {
                this.step_id = id

                return 'active show'
            }
        },
        async save(value, status_id, obj = null) {
            console.log(1)
            // try {
                let array = []
                let ob = new Object()
                console.log(2)

                value.map(function (item) {
                    ob[item] = document.getElementsByName(item)[0].value
                })
                console.log(3)

                ob['status'] = status_id
                ob['id'] = this.user_Data['id']
                if (obj != null) {
                    ob[obj[1]] = obj[0]
                }
                if (obj != 'error') {
                    await axios.post('/api/request', ob).then(response => {
                        if (response.data[0] === 'error') {
                            value.map(function (item) {
                                // if (response.data[0]!=0&&response.data[0]!=null){
                                if (response.data[1][item]) {
                                    document.getElementsByName(item)[0].className = 'form-control form-control-solid border-danger is-invalid'
                                    document.getElementById(item).innerHTML = response.data[1][item]
                                    // document.getElementById(item).style.display='block'

                                }

                            })
                            toastr.options = {
                                "closeButton": true,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toastr-top-right",
                                "preventDuplicates": false,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            };
                            toastr.error("Your have error in form !!");
                            this.validation = response.data[1]
                        } else {
                            this.user_Data = response.data
                            this.showTab = this.user_Data['status_request']
                            console.log(this.user_Data['status_request'])

                            if (this.user_Data['pending']==0&&this.user_Data['status_request']!=2){
                                toastr.options = {
                                    "closeButton": true,
                                    "debug": false,
                                    "newestOnTop": false,
                                    "progressBar": true,
                                    "positionClass": "toastr-top-right",
                                    "preventDuplicates": false,
                                    "onclick": null,
                                    "showDuration": "300",
                                    "hideDuration": "1000",
                                    "timeOut": "5000",
                                    "extendedTimeOut": "1000",
                                    "showEasing": "swing",
                                    "hideEasing": "linear",
                                    "showMethod": "fadeIn",
                                    "hideMethod": "fadeOut"
                                };

                                toastr.success("Successfully (:");
                            }else {

                                Swal.fire({
                                    text: "Here's a basic example of SweetAlert!",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            }

                        }
                    }).catch(e=>console.log(e))
                }

            // }catch (e) {
            //
            //     console.log(e)
            // }

            // }

        },
        upload(step) {
            this.showTab = step
            this.user_Data['status_request'] = step
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toastr-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.success("Successfully (:");
        },
        backStep(id){
            this.showTab=id

        },
        classFUN(id){
           return  id==this.showTab?'active':''
        }
    }
}
</script>
