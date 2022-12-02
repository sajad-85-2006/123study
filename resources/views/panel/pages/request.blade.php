@extends('panel.layouts.app')
@section('header')
    <style>
        .not {
            text-align: center;
            color: grey
        }
    </style>
@endsection
@section('content')
    {{--    @foreach($requests as $key=>$request)--}}

    {{--        @foreach($steps as $step)--}}
    {{--            @php--}}
    {{--                explode(' ',$step['name'])[0]==$request['status_request']?dd(  explode(' ',$step['name'])):''--}}
    {{--            @endphp--}}
    {{--            <option--}}
    {{--                value="{{$step['id_step']}}" {{explode(' ',$step['name'])[0]==$request['status_request']?'selected':''}} >{{$step['name']}}</option>--}}
    {{--        @endforeach--}}
    {{--    @endforeach--}}
    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Recent Orders</span>
                <span class="text-muted mt-1 fw-semibold fs-7">Over 500 orders</span>
            </h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                     viewBox="0 0 24 24">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="5" y="5" width="5" height="5" rx="1"
                                                              fill="currentColor"/>
														<rect x="14" y="5" width="5" height="5" rx="1"
                                                              fill="currentColor" opacity="0.3"/>
														<rect x="5" y="14" width="5" height="5" rx="1"
                                                              fill="currentColor" opacity="0.3"/>
														<rect x="14" y="14" width="5" height="5" rx="1"
                                                              fill="currentColor" opacity="0.3"/>
													</g>
												</svg>
											</span>
                </button>
                <div
                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                    data-kt-menu="true">
                    <div class="menu-item px-3">
                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                    </div>
                    <div class="separator mb-3 opacity-75"></div>
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">New Ticket</a>
                    </div>
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">New Customer</a>
                    </div>
                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                        <a href="#" class="menu-link px-3">
                            <span class="menu-title">New Group</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Admin Group</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Staff Group</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Member Group</a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">New Contact</a>
                    </div>
                    <div class="separator mt-3 opacity-75"></div>
                    <div class="menu-item px-3">
                        <div class="menu-content px-3 py-3">
                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body py-3">
            <div class="table-responsive">
                @if(count($requests)!=0)
                    <table id="table_req" class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                        <thead>
                        <tr class="fw-bold text-muted">
                            <th class="w-25px">
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" data-kt-check="true"
                                           data-kt-check-target=".widget-13-check"/>
                                </div>
                            </th>
                            <th class="min-w-150px">User Name</th>
                            <th class="min-w-140px">Phone Number</th>
                            <th class="min-w-120px">Email</th>
                            <th class="min-w-120px">Status</th>
                            <th class="min-w-100px text-end">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($requests as $key=>$request)

                            <tr name="tr" class="tr-o" id="{{$request['id']}}-tr">
                                <td>

                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input widget-13-check" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="">

                                    <a href="#"
                                       class="text-dark fw-bold text-hover-primary fs-6">{{$request['name']}}</a>
                                </td>
                                <td>
                                    <a href="#"
                                       class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$request['phone_Number']}}</a>
                                </td>
                                <td>
                                    <a href="#"
                                       class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$request['email']}}</a>
                                </td>

                                <td class=" ribbon  ribbon-top ribbon-vertical">
                                    <span
                                        class="badge badge-light-success"
                                        id="status-{{$request['id']}}">{{$request['status_request']}}</span>
                                </td>
                                <td class="text-end ribbon  ribbon-top ribbon-vertical">
                                    <button data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                        fill="currentColor"/>
																	<path opacity="0.3"
                                                                          d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                          fill="currentColor"/>
																</svg>
															</span>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                         data-kt-menu="true">
                                        <div class="px-7 py-5">
                                            <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                        </div>
                                        <div class="separator border-gray-200"></div>
                                        <div class="px-7 py-5">
                                            <div class="mb-10">
                                                <label class="form-label fw-semibold">Status:</label>
                                                <div>
                                                    <select name="status"
                                                            class="form-select form-select-solid text-gray-500">
                                                        @foreach($steps as $key=>$step)
                                                            @if($step['id_step']!=1)
                                                                <option
                                                                    value="{{$step['id_step']}}"
                                                                    {{\App\Models\User::query()->where('id',$request['user_id'])->first()['status_request']==$step['id_step']?'selected':''}}  name="select">{{$step['name']}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                            <div id="div-1" class="mb-10">
                                                <label class="form-label fw-semibold">Status:</label>
                                                @foreach($steps as $step)
                                                    @if(\App\Models\User::query()->where('id',$request['user_id'])->first()['status_request']+1<=$step['id_step'])
                                                        <div id="{{explode(' ',$step['name'])[0]}}-div"
                                                             class="form-check form-check-custom form-check-solid mb-5 mt-5 test">
                                                            <input onchange="pay(this)" class="form-check-input test"
                                                                   type="checkbox" name="step"
                                                                   value="{{$step['id_step']}}"
                                                                   id="{{explode(' ',$step['name'])[0]}}"/>
                                                            <label id="{{explode(' ',$step['name'])[0]}}-label"
                                                                   class="form-check-label test"
                                                                   for="{{explode(' ',$step['name'])[0]}}">
                                                                {{$step['name']}}
                                                            </label>
                                                        </div>

                                                    @endif
                                                @endforeach
                                                @if(\App\Models\User::query()->where('id',$request['user_id'])->first()['status_request']==2)
                                                    @if(count(json_decode(\App\Models\Requst::query()->where('user_id',$request['user_id'])->first('check')['check']))==5)
                                                        <div name="pay"
                                                             class="form-check form-switch form-check-custom form-check-solid">
                                                            <input name="pay"
                                                                   onchange="select_2(this,{{$request['user_id']}},{{$request['id']}})"
                                                                   class="form-check-input"
                                                                   type="checkbox"
                                                                   id="pay" value="pay"/>
                                                            <label name="pay" class="form-check-label" for="pay">
                                                                Payment Submit
                                                            </label>
                                                        </div>
                                                    @else
                                                        <div name="pay" disabled="disabled"
                                                             class="form-check form-switch form-check-custom form-check-solid disabled">
                                                            <input name="pay"
                                                                   onchange="select_2(this,{{$request['user_id']}},{{$request['id']}})"
                                                                   class="form-check-input disabled"
                                                                   type="checkbox"
                                                                   id="pay" disabled="disabled" value="pay"/>
                                                            <label name="pay" disabled="disabled"
                                                                   class="form-check-label disabled" for="pay">
                                                                Payment Submit
                                                            </label>
                                                        </div>
                                                    @endif
                                                @else
                                                    <div name="pay" style="display:none;"
                                                         class="form-check form-switch form-check-custom form-check-solid">
                                                        <input name="pay" style="display:none;"
                                                               onchange="select_2(this,{{$request['user_id']}},{{$request['id']}})"
                                                               class="form-check-input"
                                                               type="checkbox"
                                                               id="pay" disabled value="pay"/>
                                                        <label name="pay" style="display:none;" class="form-check-label"
                                                               for="pay">
                                                            Payment Submit
                                                        </label>
                                                    </div>

                                                @endif
                                            </div>

                                            <div class="d-flex justify-content-end">
                                                <button type="button"
                                                        onclick="update_request({{$request['user_id']}},{{$request['id']}},{{$key}})"
                                                        class="btn btn-sm btn-primary">Apply
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="#" onclick="delete_request({{$request['id']}},{{$request['user_id']}})"
                                       class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                        <span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="currentColor"/>
																	<path opacity="0.5"
                                                                          d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                          fill="currentColor"/>
																	<path opacity="0.5"
                                                                          d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                          fill="currentColor"/>
																</svg>
															</span>
                                    </a>

                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                @else
                    <h3 id="not_req" class="not">Not Found!</h3>
                @endif
            </div>
        </div>
    </div>
    <script>
        function update_request(id, id_request, kay) {
            let xml = new XMLHttpRequest()
            xml.onload = function () {

                let json = JSON.parse(this.responseText)
                if (json[0] == '200') {
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
                    toastr.info("Changes were recorded");
                    document.getElementById('status-' + id_request).innerHTML = json[1]
                    let item_1;
                    console.log(json[2])
                    json[2].map(function (item, index) {
                        item_1 = item['name'].split(" ")[0]

                        if (document.getElementById(item_1)) {
                            for (let z = 0; z < document.getElementsByClassName('test').length; z++) {
                                document.getElementsByClassName('test')[z].style.display = 'none'
                            }
                            document.getElementById(item_1 + '-label').id = item_1 + '-' + index
                            document.getElementById(item_1 + '-div').id = item_1 + '-' + index
                            document.getElementById(item_1).name = item_1 + '-' + index
                            document.getElementById(item_1).id = item_1 + '-' + index
                        }
                    })
                    json[2].map(function (item, index) {
                        item_1 = item['name'].split(" ")[0]
                        let div_3 = document.getElementById('div-1')
                        let div_2 = document.createElement('div')

                        let div = div_3.appendChild(div_2)
                        div.className = 'form-check form-check-custom form-check-solid mb-5 mt-5 test'
                        div.id = item_1 + '-div'
                        let input = document.createElement('input')
                        let label = document.createElement('label')
                        let nodeLabel = document.createTextNode(item['name'])
                        label.appendChild(nodeLabel)
                        let input_w = div.appendChild(input)
                        input_w.id = item_1
                        input_w.type = 'checkbox'
                        input_w.className = 'form-check-input test'
                        input_w.name = 'step'
                        input_w.value = item['name']
                        let label_w = div.appendChild(label)
                        label_w.className = 'form-check-label test'
                        label_w.htmlFor = item_1
                        label_w.id = item_1 + '-label'
                    })
                    if (json[1] != 'Apply') {
                        for (let r = 0; r <= document.getElementsByName('pay').length - 1; r++) {
                            document.getElementsByName('pay')[r].style.display = 'none'
                        }
                    } else {

                    }
                } else {
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

                    toastr.error("Your Have Error 500");
                }

            }
            let form = ''
            if (document.getElementsByName('step')) {

                for (let x = 1; x <= document.getElementsByName('step').length; x++) {

                    form = form + 'step-' + x + '=' + document.getElementsByName('step')[x - 1].value + '@' + document.getElementsByName('step')[x - 1].checked + '&'
                }
            }
            form = form + 'select' + '=' + document.getElementsByName('status')[0].value + '&' + 'id' + '=' + id + '&' + 'id_request' + '=' + id_request;
            xml.open('POST', '/api/update')
            xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xml.send(form)
        }

        function delete_request(id, user_id) {
            let xml = new XMLHttpRequest()
            xml.onload = function () {
                let json = JSON.parse(this.responseText)
                if (json == '200') {
                    document.getElementById(id + '-tr').remove()
                    if (document.getElementsByClassName("tr-o").length === 0) {
                        document.getElementById('table_req').style.display = 'none'

                        const para = document.createElement("h3");
                        const node = document.createTextNode("Not Found!");
                        para.appendChild(node);
                        const element = document.getElementsByClassName("table-responsive")[0];
                        element.appendChild(para).className = 'not';
                    }

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

                    toastr.success("Changes were recorded");
                } else {
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

                    toastr.error("Your Have Error 500");
                }
            }
            xml.open('POST', '/api/delete')
            xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xml.send('id=' + id + '&' + 'user_id' + '=' + user_id)
        }

        const pay = (doc) => {
            if(document.getElementsByName('step').length===5){
                if (document.getElementById('Apply').checked && document.getElementById('Job').checked && document.getElementById('Contact').checked && document.getElementById('Personal').checked && document.getElementById('Language').checked) {
                    document.getElementById('pay').disabled = false
                } else {
                    document.getElementById('pay').disabled = 'disabled'
                    document.getElementById('pay').checked = false
                }
            }
        }

        const select_2 = (check, id, id_request) => {
            if (check.checked == true) {
                let docxml = new XMLHttpRequest()
                docxml.onload = function () {

                }
                let form;
                if (document.getElementsByName('step')) {

                    for (let x = 1; x <= document.getElementsByName('step').length; x++) {

                        form = form + 'step-' + x + '=' + document.getElementsByName('step')[x - 1].value + '@' + document.getElementsByName('step')[x - 1].checked + '&'
                    }
                }
                form = form + 'select' + '=' + document.getElementsByName('status')[0].value + '&' + 'id' + '=' + id + '&' + 'id_request' + '=' + id_request;
                docxml.open('POST', '/api/update')
                docxml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                docxml.send(form)
            }
        }
    </script>
@endsection
