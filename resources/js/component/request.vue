<template>
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

                    <tr name="tr" class="tr-o" >
                        <td>

                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input widget-13-check" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td class="">

                            <a href="#"
                               class="text-dark fw-bold text-hover-primary fs-6"></a>
                        </td>
                        <td>
                            <a href="#"
                               class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6"></a>
                        </td>
                        <td>
                            <a href="#"
                               class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6"></a>
                        </td>

                        <td class=" ribbon  ribbon-top ribbon-vertical">
                                    <span
                                        class="badge badge-light-success"
                                        ></span>
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
                                            </select>

                                        </div>
                                    </div>
                                    <div id="div-1" class="mb-10">
                                        <label class="form-label fw-semibold">Status:</label>
                                        <div
                                             class="form-check form-check-custom form-check-solid mb-5 mt-5 test">
                                            <input onchange="pay(this)" class="form-check-input test"
                                                   type="checkbox" name="step"

                                                   />
                                            <label
                                                   class="form-check-label test"
                                                   >

                                            </label>
                                        </div>

                                        <div name="pay"
                                             class="form-check form-switch form-check-custom form-check-solid">
                                            <input name="pay"

                                                   class="form-check-input"
                                                   type="checkbox"
                                                   id="pay" value="pay"/>
                                            <label name="pay" class="form-check-label" for="pay">
                                                Payment Submit
                                            </label>
                                        </div>
                                        <div name="pay" disabled="disabled"
                                             class="form-check form-switch form-check-custom form-check-solid disabled">
                                            <input name="pay"

                                                   class="form-check-input disabled"
                                                   type="checkbox"
                                                   id="pay" disabled="disabled" value="pay"/>
                                            <label name="pay" disabled="disabled"
                                                   class="form-check-label disabled" for="pay">
                                                Payment Submit
                                            </label>
                                        </div>
                                        <div name="pay" style="display:none;"
                                             class="form-check form-switch form-check-custom form-check-solid">
                                            <input name="pay" style="display:none;"

                                                   class="form-check-input"
                                                   type="checkbox"
                                                   id="pay" disabled value="pay"/>
                                            <label name="pay" style="display:none;" class="form-check-label"
                                                   for="pay">
                                                Payment Submit
                                            </label>
                                        </div>

                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button type="button"
                                                class="btn btn-sm btn-primary">Apply
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <a href="#"
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

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</template>
