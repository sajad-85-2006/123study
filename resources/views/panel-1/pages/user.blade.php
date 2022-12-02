@extends('panel.layouts.app')
@section('content')
    <div class="card">

        <div class="card-header border-0 pt-6">
            <div class="card-title">
                <div class="d-flex align-items-center position-relative my-1">
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
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
                    <input type="text" data-kt-user-table-filter="search"
                           class="form-control form-control-solid w-250px ps-14" placeholder="Search user"/>
                </div>
            </div>
        </div>
        <div class="card-body py-4">
            @if(count($users) !=0)
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                    <thead>
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">

                        <th class="min-w-125px">User</th>
                        <th class="min-w-125px">Role</th>
                        <th class="min-w-125px">Status Request</th>
                        <th class="min-w-125px">Sing Up at</th>
                        <th class="text-end min-w-100px">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                    @foreach($users as $user)
                        <tr>

                            <td class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="view.html">
                                        <div class="symbol-label">
                                            {{$user['name'][0]}}
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column">
                                    <a id="{{$user['id']}}-name" href="view.html"
                                       class="text-gray-800 text-hover-primary mb-1">{{$user['name']}}
                                    </a>
                                    <span id="{{$user['id']}}-email">{{$user['email']}}</span>
                                </div>
                            </td>
                            <td>{{$user['rule']}}</td>

                            @if(\App\Models\Requst::query()->where('user_id',$user['id'])->first('status_request'))
                                <td>{{\App\Models\Requst::query()->where('user_id',$user['id'])->first('status_request')['status_request']}}</td>
                            @else
                                <td>Not Set</td>
                            @endif
                            <td>{{$user['created_at']}}</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                   data-kt-menu-trigger="click"
                                   data-kt-menu-placement="bottom-end">Actions
                                    <span class="svg-icon svg-icon-5 m-0">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
															<path
                                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                fill="currentColor"/>
														</svg>
													</span>
                                </a>
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    @if(\App\Models\Requst::query()->where('user_id',$user['id'])->first('status_request'))

                                        <div class="menu-item px-3">
                                            <a href="view.html" class="menu-link px-3">Request</a>
                                        </div>
                                    @endif
                                    <div class="menu-item px-3">
                                        <a onclick="open_modal({{$user['id']}})" data-bs-target="click"
                                           class="menu-link px-3"
                                           data-kt-users-table-filter="delete_row">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Modal title</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <form id="form_modal">
                        <input value="" type="hidden" name="id">
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="fs-6 fw-semibold mb-2">Name</label>
                            <input type="text" class="form-control form-control-solid"
                                   placeholder="Write Your Name" name="name_modal">
                        </div>
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="fs-6 fw-semibold mb-2">Email</label>
                            <input type="text" class="form-control  form-control-solid"
                                   placeholder="Write Your Email" name="email_modal">
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" onclick="hide_y()" class="btn btn-light">Close</button>
                    <button type="button" onclick="save()" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        // function hide_y() {
        //     alert('l,ollfuilvlfy6u')
        //     var myModall = new bootstrap.Modal(document.getElementById('kt_modal_1'), {
        //     })
        //     myModall.hide('kt_modal_1')
        // }

        let id_form;

        function open_modal(id) {
            xml = new XMLHttpRequest()
            xml.onload = function () {
                let json = JSON.parse(this.responseText)
                document.getElementsByName('email_modal')[0].value = json['email']
                document.getElementsByName('name_modal')[0].value = json['name']
                document.getElementsByName('id')[0].value = json['id']
                // console.log(json['id'])
            }
            xml.open('POST', '/api/get-user')
            xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xml.send('id=' + id)

            id_form = id
            var myModal = new bootstrap.Modal(document.getElementById('kt_modal_1'), {})
            myModal.show('kt_modal_1')

        }

        async function save() {
            await fetch('/api/save-user', {
                method: 'POST',
                body: new FormData(document.getElementById('form_modal'))
            }).then(response => response.json()).then(data => {
                if (data['errors']) {
                    if (data['errors']['email_modal']) {
                        document.getElementsByName('email_modal')[0].className = 'form-control border-danger is-invalid form-control-solid'
                    }
                    if (data['errors']['name_modal']) {
                        document.getElementsByName('name_modal')[0].className = 'form-control border-danger is-invalid form-control-solid'
                    }
                }
                if (data == 200) {
                    // id_form=document.getElementsByName('id')[0].value
                    document.getElementById(id_form + '-name').innerHTML = document.getElementsByName('name_modal')[0].value;
                    document.getElementById(id_form + '-email').innerHTML = document.getElementsByName('email_modal')[0].value;

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
                    toastr.success("Inconceivable!");
document.getElementsByClassName('modal fade show')[0].className='modal fade'
document.getElementsByClassName('modal-backdrop fade')[0].style.display='none'
                }
            })

        }

    </script>
@endsection
