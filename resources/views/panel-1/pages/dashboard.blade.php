@extends('panel.layouts.app')

@section('content')
    <div class="d-flex flex-column-fluid align-items-start container-xxl">
        <div class="content flex-row-fluid" id="kt_content">
            <div class="row gy-0 gx-10">
                <div class="col-xl-12">
                    <div class="mb-10">
                        <ul class="nav row mb-10">
                            @if($user['status_request'] !=1)
                                <li class="nav-item col-lg-2  col-lg mb-5 mb-lg-0 ">
                                    <a aria-selected="true"
                                       class="nav-link"
                                       data-bs-toggle="tab" href="#item_6">

                                    <span class="svg-icon svg-icon-3x mb-5 mx-0">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3"
                                                          d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z"
                                                          fill="currentColor"></path>
													<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                                                          fill="currentColor"></path>
												</svg>
													</span>
                                        <span class="fs-6 fw-bold">Contact
													<br/>Info</span>
                                    </a>
                                </li>
                                <li class="nav-item col-lg-2  col-lg mb-5 mb-lg-0">
                                    <a class="nav-link"
                                       data-bs-toggle="tab" href="#item_5">
                                    <span class="svg-icon svg-icon-3x mb-5 mx-0">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="currentColor"></path>
													<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                          fill="currentColor"></rect>
												</svg>
													</span>
                                        <span class="fs-6 fw-bold">Personal
													<br/>Info</span>
                                    </a>
                                </li>
                                <li class="nav-item col-lg-2  col-lg mb-5 mb-lg-0">
                                    <a class="nav-link"
                                       data-bs-toggle="tab" aria-selected="false" href="#item_4">
                                    <span class="svg-icon svg-icon-3x mb-5 mx-0">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3"
                                                                  d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                                  fill="currentColor"/>
															<path
                                                                    d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                                    fill="currentColor"/>
														</svg>
													</span>
                                        <span class="fs-6 fw-bold">Job
													<br/>Education</span>
                                    </a>
                                </li>
                                <li class="nav-item col-lg-2  col-lg mb-5 mb-lg-0">
                                    <a class="nav-link"
                                       data-bs-toggle="tab" href="#item_3">
                                    <span class="svg-icon svg-icon-3x mb-5 mx-0">
<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3"
                                                          d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z"
                                                          fill="currentColor"></path>
													<path
                                                            d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z"
                                                            fill="currentColor"></path>
												</svg>
													</span>
                                        <span class="fs-6 fw-bold">Language
													<br/>Skills</span>
                                    </a>
                                </li>
                                <li class="nav-item col-lg-2  col-lg mb-5 mb-lg-0">
                                    <a class="nav-link"
                                       data-bs-toggle="tab" href="#item_2">
                                    <span class="svg-icon svg-icon-3x mb-5 mx-0">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
                                                            d="M8.7 4.19995L4 6.30005V18.8999L8.7 16.8V19L3.1 21.5C2.6 21.7 2 21.4 2 20.8V6C2 5.4 2.3 4.89995 2.9 4.69995L8.7 2.09998V4.19995Z"
                                                            fill="currentColor"></path>
													<path
                                                            d="M15.3 19.8L20 17.6999V5.09992L15.3 7.19989V4.99994L20.9 2.49994C21.4 2.29994 22 2.59989 22 3.19989V17.9999C22 18.5999 21.7 19.1 21.1 19.3L15.3 21.8998V19.8Z"
                                                            fill="currentColor"></path>
													<path opacity="0.3"
                                                          d="M15.3 7.19995L20 5.09998V17.7L15.3 19.8V7.19995Z"
                                                          fill="currentColor"></path>
													<path opacity="0.3"
                                                          d="M8.70001 4.19995V2L15.4 5V7.19995L8.70001 4.19995ZM8.70001 16.8V19L15.4 22V19.8L8.70001 16.8Z"
                                                          fill="currentColor"></path>
													<path opacity="0.3"
                                                          d="M8.7 16.8L4 18.8999V6.30005L8.7 4.19995V16.8Z"
                                                          fill="currentColor"></path>
												</svg>
													</span>
                                        <span class="fs-6 fw-bold">Apply
													<br/>Now</span>
                                    </a>
                                </li>
                            @else
                                <li class="nav-item col-lg-2  col-lg mb-5 mb-lg-0 ">
                                    <a aria-selected="true"
                                       class="nav-link"
                                       data-bs-toggle="tab" href="#item_6">

                                    <span class="svg-icon svg-icon-3x mb-5 mx-0 fa fa-check text-success"
                                          style="font-size: 24px">
                                    </span>
                                        <span class="fs-6 fw-bold">Contact<br/>Info</span>
                                    </a>
                                </li>
                                <li class="nav-item col-lg-2  col-lg mb-5 mb-lg-0">
                                    <a class="nav-link"
                                       data-bs-toggle="tab" href="#item_5">
                                                                        <span class="svg-icon svg-icon-3x mb-5 mx-0 fa fa-check text-success"
                                                                              style="font-size: 24px">
                                                                        </span>
                                        <span class="fs-6 fw-bold">Personal
													<br/>Info</span>
                                    </a>
                                </li>
                                <li class="nav-item col-lg-2  col-lg mb-5 mb-lg-0">
                                    <a class="nav-link"
                                       data-bs-toggle="tab" aria-selected="false" href="#item_4">
                                                                        <span class="svg-icon svg-icon-3x mb-5 mx-0 fa fa-check text-success"
                                                                              style="font-size: 24px">
                                                                        </span>
                                        <span class="fs-6 fw-bold">Job
													<br/>Education</span>
                                    </a>
                                </li>
                                <li class="nav-item col-lg-2  col-lg mb-5 mb-lg-0">
                                    <a class="nav-link"
                                       data-bs-toggle="tab" href="#item_3">
                                        <span class="svg-icon svg-icon-3x mb-5 mx-0 fa fa-check text-success" style="font-size: 24px"></span>
                                        <span class="fs-6 fw-bold">Language
													<br/>Skills</span>
                                    </a>
                                </li>
                                <li class="nav-item col-lg-2  col-lg mb-5 mb-lg-0">
                                    <a class="nav-link"
                                       data-bs-toggle="tab" href="#item_2">
                                        <span class="svg-icon svg-icon-3x mb-5 mx-0 fa fa-check text-success" style="font-size: 24px">
                                        </span>
                                        <span class="fs-6 fw-bold">Apply
													<br/>Now</span>
                                    </a>
                                </li>

                            @endif
                            <li class="nav-item col-lg-2  col-lg mb-5 mb-lg-0">
                                <a class="nav-link"
                                   data-bs-toggle="tab" href="#item_1">
                                    <span class="svg-icon svg-icon-3x mb-5 mx-0">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3"
                                                          d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                          fill="currentColor"></path>
													<path
                                                            d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                            fill="currentColor"></path>
												</svg>
													</span>
                                    <span class="fs-6 fw-bold">Payment
													<br/>Submission</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            @if($user['status_request'] !=1)
                                <div class="tab-pane fade" id="item_6">
                                    <div class="card">
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold fs-3 mb-1">Personal Info</span>
                                                <span
                                                        class="text-muted mt-1 fw-semibold fs-7">Your Personal Information</span>
                                            </h3>

                                        </div>
                                        <div class="card-body py-3">
                                            <div class="table-responsive">
                                                <form id="form_6">
                                                    @csrf
                                                    <div class="fv-row mb-7 fv-plugins-icon-container">
                                                        <label class="required fs-6 fw-semibold mb-2">Email:</label>
                                                        <input disabled value="{{$user['email']}}" type="text"
                                                               class="form-control form-control-solid"
                                                               placeholder="Write Your Email" name="email">
                                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                                    </div>
                                                    <div id="phone_div" class="fv-row mb-7 fv-plugins-icon-container">
                                                        <label for="phone" class="required fs-6 fw-semibold mb-2">Phone
                                                            Number:</label>
                                                        <input value="{{$user['phoneNumber']}}" id="phone" type="text"
                                                               class="form-control form-control-solid"
                                                               placeholder="Write Your Email" name="phone">
                                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                                    </div>

                                                    <div id="address_div" class="fv-row mb-15">
                                                        <label for="address"
                                                               class="fs-6 fw-semibold mb-2">Address</label>
                                                        <input value="{{$user['address']}}" id="address" type="text"
                                                               class="form-control form-control-solid "
                                                               placeholder="Write Your Address" name="address">
                                                    </div>
                                                    <button type="button" style="float:  right"
                                                            onclick="next([{'status':6},'phone','address'])"
                                                            class="btn btn-primary">Next
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="item_5">
                                    <div class="card">
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold fs-3 mb-1">Contact Info</span>
                                                <span
                                                        class="text-muted mt-1 fw-semibold fs-7">Your Contact Information</span>
                                            </h3>

                                        </div>
                                        <div class="card-body py-3">

                                            <form id="form_5">
                                                <div class="row">
                                                    <div id="given_name_div"
                                                         class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">
                                                        <label class="required fs-6 fw-semibold mb-2">Given
                                                            Name:</label>
                                                        <input value="{{$user['givenName']}}" type="text"
                                                               class="form-control form-control-solid"
                                                               placeholder="Write Your Email" name="given_name">
                                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                                    </div>
                                                    <div id="middle_name_div"
                                                         class="fv-row col-lg-6 col-12 mb-7 fv-plugins-icon-container">
                                                        <label class=" fs-6 fw-semibold mb-2">Middel Name:</label>
                                                        <input value="{{$user['middleName']}}" type="text"
                                                               class="form-control form-control-solid"
                                                               placeholder="Write Your Email" name="middle_name">
                                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                                    </div>
                                                </div>

                                                <div class="fv-row mb-7 fv-plugins-icon-container" id="family_div">
                                                    <label class="fs-6 required fw-semibold mb-2">Family Name</label>
                                                    <input value="{{$user['familyName']}}" type="text"
                                                           class="form-control form-control-solid"
                                                           placeholder="Write Your Address" name="family">
                                                </div>
                                                <div class="fv-row mb-7  fv-plugins-icon-container" id="birth_day_div">
                                                    <label class="fs-6 required fw-semibold mb-2">Birth Date:</label>
                                                    <div class="position-relative d-flex align-items-center ">
                                                    <span class="svg-icon svg-icon-2 position-absolute mx-4"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24" fill="none"><path opacity="0.3"
                                                                                                      d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                                                      fill="black"></path><path
                                                                    d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                    fill="black"></path><path
                                                                    d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                    fill="black"></path></svg></span>
                                                        <input value="{{$user['birthDate']}}"
                                                               class="form-control form-control-solid"
                                                               style="padding-left: 35px"
                                                               placeholder="Pick date range" name="birth_day"
                                                               type="date">
                                                    </div>
                                                </div>
                                                <div class="fv-row mb-7 fv-plugins-icon-container" id="country">
                                                    <label class="fs-6 required fw-semibold mb-2">Country of
                                                        Citizenship</label>
                                                    <select type="text" class="form-control form-control-solid"
                                                            name="country">
                                                        @foreach($country as $c)
                                                            <option {{$user['country']==$c['name']?'selected':''}} >{{$c['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="fv-row mb-15 mt-5" id="gender_div">
                                                    <label class="fs-6 required fw-semibold mb-2">
                                                        Inter Your Gender
                                                    </label>
                                                    <input checked style="margin-right: 3px;margin-left: 10px"
                                                           class="form-check-input " type="radio" value="male"
                                                           name="gender"/>
                                                    <label class="form-check-label" for="flexCheckboxSm">
                                                        Male
                                                    </label>
                                                    <input style="margin-right: 3px;" class="form-check-input "
                                                           type="radio"
                                                           value="female" name="gender"/>
                                                    <label class="form-check-label" for="flexCheckboxSm">
                                                        Female
                                                    </label>

                                                </div>
                                                <button type="button" style="float:  left" onclick="back(5)"
                                                        class="btn btn-light">Back
                                                </button>
                                                <button type="button" style="float:  right"
                                                        onclick="next([{'status':5},'gender','family','country','birth_day','middle_name','given_name'])"
                                                        class="btn btn-primary">Next
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="item_4">
                                    <div class="card">
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold fs-3 mb-1">Job & Education</span>
                                                <span
                                                        class="text-muted mt-1 fw-semibold fs-7">More than 400 new products</span>
                                            </h3>

                                        </div>
                                        <div class="card-body py-3">
                                            <div class="tab-content">
                                                {{--                                            <div class="tab-pane fade show active">--}}
                                                <form method="post" action="/api/upload" enctype="multipart/form-data"
                                                      id="form_4">
                                                    <div class="fv-row mb-7  fv-plugins-icon-container"
                                                         id="detail_job_div">
                                                        <label class="fs-6 fw-semibold mb-2">Country of
                                                            Citizenship</label>
                                                        <textarea style="height: 200px" type="text"
                                                                  class="form-control  form-control-solid"
                                                                  name="detail_job">{{$user['detail_job']}}</textarea>
                                                    </div>
                                                    <div>
                                                        <img style="width: 20%;
    height: 20%;
    background-size: cover;
    border-radius: 4px;
    margin: 10px auto;
    box-shadow: 0px 0px 5px 0px #e1e1e1;
    display: block;
    border: 2px solid #efefef;
    padding: 11px;
display: none" id="blah">
                                                    </div>
                                                    <div class="fv-row mb-15">
                                                        <label class="required fs-6 fw-bold mb-2" for="file-job">Upload
                                                            Screen Shot (jpg,png)</label>
                                                        <label class="btn btn-lg btn-light" style="width: 100%;"
                                                               for="file-job">Upload</label>
                                                        <input accept="image/jpeg,jpg,png" type="file" name="file"
                                                               id="file-job"
                                                               style="display:none;">
                                                    </div>
                                                    <button type="button" style="float:  left" onclick="back(4)"
                                                            class="btn btn-light">Back
                                                    </button>
                                                    <button type="button" style="float:  right"
                                                            onclick="next([{status:4},'file','detail_job'],'form_4')"
                                                            class="btn btn-primary">Next
                                                    </button>
                                                </form>

                                                {{--                                            </div>--}}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="item_3">
                                    <div class="card">
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold fs-3 mb-1">Language Skill</span>
                                                <span
                                                        class="text-muted mt-1 fw-semibold fs-7">Please Select Your Certificate</span>
                                            </h3>
                                        </div>
                                        <div class="card-body py-3">
                                            <div class="tab-content">
                                                {{--                                            <div class="tab-pane fade show active" >--}}
                                                <form id="form_3" method="post" enctype="multipart/form-data">

                                                    <div id="certificate_language_div"
                                                         class="fv-row mb-7 fv-plugins-icon-container">
                                                        <label class="fs-6 fw-semibold mb-2">Country of
                                                            Citizenship</label>
                                                        <select type="text" class="form-control form-control-solid"
                                                                name="certificate_language">
                                                            <option>IELTS</option>
                                                            <option>TOEFL</option>
                                                            <option>IELTS Home Edition</option>
                                                            <option>Toefl Edition</option>
                                                            <option>PTE, Duolingo</option>
                                                            <option>I don’t have at the moment</option>
                                                        </select>
                                                    </div>
                                                    <p></p>
                                                    <img style="width: 20%;
    height: 20%;
    background-size: cover;
    border-radius: 4px;
    margin: 10px auto;
    box-shadow: 0px 0px 5px 0px #e1e1e1;
    display: block;
    border: 2px solid #efefef;
    padding: 11px;
display: none" id="blah2">
                                                    <label class="required fs-6 fw-bold mb-2" for="screen">Upload Screen
                                                        Shot (jpg,png)</label>
                                                    <label class="btn btn-lg btn-light" style="width: 100%;" for="file">Upload</label>
                                                    <input accept="image/jpeg,jpg,png" type="file"
                                                           name="certificate_language_file" id="file"
                                                           style="display:none;">
                                                    <button type="button" style="float:  left" onclick="back(3)"
                                                            class="btn btn-light">Back
                                                    </button>
                                                    <button type="button" style="float:  right"
                                                            onclick="next([{status:3},'certificate_language','certificate_language_file'],'form_3')"
                                                            class="btn btn-primary">Next
                                                    </button>
                                                </form>

                                                {{--                                            </div>--}}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="item_2">
                                    <div class="card">
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold fs-3 mb-1">Apply Now </span>
                                                <span class="text-muted fw-semibold fs-7">Pending 10 tasks</span>
                                            </h3>
                                        </div>
                                        <div class="card-body py-3">
                                            <form>
                                                <div id="status_div" class=" fv-row mb-7 fv-plugins-icon-container">
                                                    <label class="required fs-6 fw-semibold mb-2">Status:</label>
                                                    <select name="status" class="form-control form-control-solid">
                                                        <option></option>
                                                    </select>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <div id="country_div" class="fv-row  mb-7 fv-plugins-icon-container">
                                                    <label class="required fs-6 fw-semibold mb-2">Country of Insert
                                                        :</label>
                                                    <select name="country" class="form-control form-control-solid">
                                                        @foreach($country as $c)
                                                            <option {{$user['countryInsert']==$c['name']?'selected':''}} >{{$c['name']}}</option>

                                                        @endforeach
                                                    </select>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>

                                                <div id="service_div" class="fv-row mb-7 fv-plugins-icon-container">
                                                    <label class="fs-6 fw-semibold mb-2">Service of Insert</label>
                                                    <select name="service" class="form-control form-control-solid">
                                                        <option></option>
                                                    </select>
                                                </div>
                                                <button type="button" style="float:  left" onclick="back(2)"
                                                        class="btn btn-light">Back
                                                </button>
                                                <button type="button" style="float:  right"
                                                        onclick="next([{status:2},'service','country','status'])"
                                                        class="btn btn-primary">Next
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="tab-pane fade" id="item_1">
                                <div class="card">
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold fs-3 mb-1">Payment Submission</span>
                                            <span class="text-muted fw-semibold fs-7">Pending 10 tasks</span>
                                        </h3>
                                    </div>
                                    <div class="card-body py-3">
                                        <form>
                                            <div class="row">
                                                <div class="col-6 fv-row mb-7 fv-plugins-icon-container">
                                                    <label class="required fs-6 fw-semibold mb-2">Given Name:</label>
                                                    <input type="text"
                                                           class="form-control form-control-solid"
                                                           placeholder="Write Your Email" name="email">
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <div class="fv-row col-6 mb-7 fv-plugins-icon-container">
                                                    <label class="required fs-6 fw-semibold mb-2">Middel Name:</label>
                                                    <input type="text"
                                                           class="form-control form-control-solid"
                                                           placeholder="Write Your Email" name="phone">
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                                <label class="fs-6 fw-semibold mb-2">Family Name</label>
                                                <input type="text" class="form-control form-control-solid"
                                                       placeholder="Write Your Address" name="description">
                                            </div>
                                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                                <label class="fs-6 fw-semibold mb-2">Birth Date:</label>
                                                <div class="position-relative d-flex align-items-center ">
                                                    <span class="svg-icon svg-icon-2 position-absolute mx-4"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24" fill="none"><path opacity="0.3"
                                                                                                      d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                                                      fill="black"></path><path
                                                                    d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                    fill="black"></path><path
                                                                    d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                    fill="black"></path></svg></span>
                                                    <input
                                                            class="form-control form-control-solid "
                                                            style="padding-left: 35px"
                                                            placeholder="Pick date range" name="start_date" type="date">
                                                </div>
                                            </div>
                                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                                <label class="fs-6 fw-semibold mb-2 ">Country of Citizenship</label>
                                                <select type="text" class="form-control  form-control-solid"
                                                        name="country">
                                                    <option>Canada</option>
                                                </select>
                                            </div>

                                            <button type="button"
                                                    style="margin-right: auto;margin-left: auto;display: block"
                                                    onclick="next()"
                                                    class="btn  btn-primary ">Submit
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    {{--    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>--}}
    {{--    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>--}}
    <script>


        var status = {{$user['status_request']}};
        if (status != 1) {
            show_image('file-job', 'blah')
            show_image('file', 'blah2')
        }

        function show_image(input, img) {
            console.log(document.getElementById(input))
            document.getElementById(input).addEventListener('change', function () {
                if (this.files && this.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function (e) {
                        console.log(e.target.result)
                        document.getElementById(img).src = e.target.result
                        document.getElementById(img).style.display = 'block'
                    };

                    reader.readAsDataURL(this.files[0]);
                }
            })
        }

        var data_api;
        let upload_file = async (form) => {
            await fetch('/api/upload', {
                method: 'POST',
                body: new FormData(document.getElementById(form)),
            }).then((response) => response.json()).then((data) => {
                data_api = data
            })

        }
        console.log(status)

        function next(value, form_id) {
            let status1 = null

            if (status != value[0]['status']) {
                status1 = Number(value[0]['status'])
            }
            status = Number(status)
            let xml = new XMLHttpRequest()

            value = value.slice(1);
            let json
            xml.onload = function () {
                json = JSON.parse(this.responseText)
                console.log(json)
                if (json['status'] === 'error') {
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
                    for (let z = 1; z <= document.getElementsByClassName('form-control').length - 1; z++) {
                        document.getElementsByClassName('form-control')[z].className = 'form-control form-control-solid'
                        // document.getElementById( + '_div').removeChild(document.getElementsByClassName('invalid-feedback')[z])
                    }
                    if (document.getElementsByClassName('invalid-feedback').length != 0) {
                        for (let t = 0; t <= document.getElementsByClassName('invalid-feedback').length - 1; t++) {
                            document.getElementsByClassName('invalid-feedback')[t].style.display = 'none'
                            // document.getElementById( + '_div').removeChild(document.getElementsByClassName('invalid-feedback')[z])
                        }
                    }

                    let tag, textTag, div;
                    value.map(function (item) {
                        if (json[0][item]) {
                            document.getElementsByName(item)[0].className = 'form-control form-control-solid is-invalid border-danger'
                            div = document.getElementById(item + '_div')
                            tag = document.createElement("p")
                            textTag = document.createTextNode(json[0][item][0])
                            tag.appendChild(textTag)
                            div.appendChild(tag).className = 'invalid-feedback'
                        }
                    })
                    status = Number(status)
                    next_item(status1)
                    return;
                }

                if (json['status'] == 400) {
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
                    for (let z = 0; z <= document.getElementsByClassName('form-control').length - 1; z++) {

                        document.getElementsByClassName('form-control')[z].className = 'form-control form-control-solid'
                        // document.getElementById( + '_div').removeChild(document.getElementsByClassName('invalid-feedback')[z])
                    }
                    if (document.getElementsByClassName('invalid-feedback').length != 0) {

                        for (let t = 0; t <= document.getElementsByClassName('invalid-feedback').length - 1; t++) {
                            document.getElementsByClassName('invalid-feedback')[t].style.display = 'none'
                            // document.getElementById( + '_div').removeChild(document.getElementsByClassName('invalid-feedback')[z])
                        }
                    }
                    // value.map(function (item) {
                    // if (json[0][item]) {

                    // }
                    // })
                }
                if (json['status'] == 401) {
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
                status = Number(json[0])
                next_item(status1)

            }
            let form_item;
            if (status1 == null) {
                form_item = 'status=' + status
            } else {
                form_item = 'status=' + status1
            }
            let file_form;
            value.map(function (item) {
                if (document.getElementsByName(item)[0].type !== 'file') {
                    form_item = form_item + '&' + item + '=' + document.getElementsByName(item)[0].value + '&'
                } else {
                    file_form = item
                }
                if (document.getElementsByName(item)[0].type === 'file') {
                    upload_file(form_id)
                    form_item = form_item + '&' + file_form + '=' + data_api
                }
            })

            console.log(form_item)
            xml.open('POST', '/api/request/' + {{\Illuminate\Support\Facades\Auth::id()}})
            xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xml.send(form_item);
        }

        function next_item(status_1 = null) {

            if (document.getElementsByClassName('show').length !== 0) {
                for (let i = 0; i <= document.getElementsByClassName('show').length - 1; i++) {

                    document.getElementsByClassName('show')[i].className = 'tab-pane fade'
                }
            }
            if (status_1 == null) {
                document.getElementById('item_' + status).className = 'tab-pane fade show active'

            } else {
                document.getElementById('item_' + status_1).className = 'tab-pane fade show active'

            }
            for (let x = 0; x <= document.getElementsByClassName('nav-link').length - 1; x++) {
                if (!status_1) {
                    var class_s = 'nav-link  btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px'


                    if (document.getElementsByClassName('nav-link')[x].href === window.document.documentURI + '#item_' + status) {
                        document.getElementsByClassName('nav-link')[x].className = 'nav-link  btn btn-flex btn-color-muted btn-outline btn-outline-warning btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px active'
                    } else {
                        class_s = class_s + ' disabled'
                        document.getElementsByClassName('nav-link')[x].className = class_s
                    }
                    if (x >= status) {
                        document.getElementsByClassName('nav-item')[x].className = 'nav-item col-lg-2  col-lg mb-5 mb-lg-0'
                        document.getElementsByClassName('nav-link')[x - status].className = 'nav-link btn btn-flex btn-color-muted btn-outline btn-outline-success btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px'
                        document.getElementsByClassName('nav-item')[x].className = 'nav-item col-lg-2  col-lg mb-5 mb-lg-0 '
                    }
                } else {

                }

            }
        }

        next_item()

        function back(value) {
            value = value + 1
            if (document.getElementsByClassName('show').length !== 0) {
                for (let i = 0; i <= document.getElementsByClassName('show').length - 1; i++) {

                    document.getElementsByClassName('show')[i].className = 'tab-pane fade'
                }
            }
            document.getElementById('item_' + value).className = 'tab-pane fade show active'

            if (document.getElementsByClassName('btn-outline-success btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px active')[0]) {
                document.getElementsByClassName('btn-outline-success btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px active')[0].className = 'nav-link  btn btn-flex btn-color-muted btn-outline btn-outline-success btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px'
            }
            if (document.getElementsByClassName('btn-outline-warning btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px active')[0]) {
                document.getElementsByClassName('btn-outline-warning btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px active')[0].className = 'nav-link  btn btn-flex btn-color-muted btn-outline btn-outline-warning btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px'

            }
            for (let x = 0; x <= document.getElementsByClassName('nav-link').length - 1; x++) {
                if (document.getElementsByClassName('nav-link')[x].href === window.document.documentURI + '#item_' + value) {
                    document.getElementsByClassName('nav-link')[x].className = 'nav-link  btn btn-flex btn-color-muted btn-outline btn-outline-success btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px active'
                }

            }
        }


        var class_s = 'nav-link opacity-50 btn btn-flex btn-color-muted btn-outline btn-outline-success btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px'

        if (status == 1) {
            for (let x = 0; x <= document.getElementsByClassName('nav-link').length - 1; x++) {

                class_s = class_s + ' disabled'
                document.getElementsByClassName('nav-link')[x].className = class_s
            }
            document.getElementsByClassName('nav-link')[5].className = 'nav-link active btn btn-flex btn-color-muted btn-outline btn-outline-warning btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px'

        }
    </script>
@endsection

@section('header')
    <title>Panel Dashboard</title>
@endsection
