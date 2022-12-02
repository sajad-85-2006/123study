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

            <form id="form_5" @submit="save">
                <div class="row">
                    <div id="emergency_div" class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">
                        <label for="phone" class=" fs-6 fw-semibold mb-2">Highest Level Education:</label>
                        <select
                            class="form-control form-control-solid" v-bind:value="user['highestLevelEducation']"
                            name="highestLevelEducation">
                            <option>P.H.D</option>
                            <option>Master</option>
                            <option>Bachelor</option>
                            <option>College</option>
                            <option>HighSchool</option>
                            <option>Middle School</option>
                            <option>Elementary School</option>
                            <option>None</option>
                        </select>
                        <div class="fv-plugins-message-container invalid-feedback" id="highestLevelEducation"></div>

                    </div>
                    <div id="phone_div" class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">
                        <label for="cou" class="required fs-6 fw-semibold mb-2">Country Education:</label>
                        <select id="cou"  v-bind:value="user['countryEducation']"
                                class="form-control form-control-solid " name="countryEducation">
                            <option>Canada</option>
                            <option>USA</option>
                        </select>
                        <div class="fv-plugins-message-container invalid-feedback" id="countryEducation"></div>

                    </div>
                </div>
                <div class="col-lg-12 col-12 fv-row mb-7 fv-plugins-icon-container">
                    <label class="required fs-6 fw-semibold mb-2">Field Study:</label>
                    <input type="text" class="form-control form-control-solid"
                           v-bind:value="user['fieldStudy']" placeholder="Write Your Field Study" name="fieldStudy">
                    <div class="fv-plugins-message-container invalid-feedback" id="fieldStudy"></div>

                </div>
                <div class="row">
                    <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">
                        <label class="required fs-6 fw-semibold mb-2">Year Of Graduation:</label>
                        <input type="text" class="form-control form-control-solid"
                               v-bind:value="user['yearGraduation']" placeholder="Write Your Field Study"
                               name="yearGraduation">
                        <div class="fv-plugins-message-container invalid-feedback" id="yearGraduation"></div>

                    </div>
                    <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">
                        <label class="required fs-6 fw-semibold mb-2">GPA:</label>
                        <input type="text" class="form-control form-control-solid"
                               v-bind:value="user['GPA']" placeholder="Write Your GPA" name="GPA">
                        <div class="fv-plugins-message-container invalid-feedback" id="GPA"></div>

                    </div>
                </div>
                <div v-for="(item,index) in numberTag" id="add"
                     class="col-lg-12 col-12 fv-row mb-7 fv-plugins-icon-container">
                    <div v-if="this.user['school']!=null&& objForm(index)" class="card">
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Contact Info</span>
                                <span
                                    class="text-muted mt-1 fw-semibold fs-7">Your Contact Information</span>
                            </h3>
                            <div class="card-toolbar" data-kt-buttons="true" data-kt-initialized="1">
                                <a @click="plus()" class="btn text-hover-white btn-outline-success btn-hover-rise bi bi-plus-circle"></a>
                                <a @click="remove(index)" class="btn text-hover-white btn-outline-danger btn-hover-rise  bi bi-dash-circle"></a>
                            </div>
                        </div>
                        <div class="card-body py-3">
                            <div class="row">
                                <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">
                                    <label class="required fs-6 fw-semibold mb-2">School Name:</label>
                                    <input v-bind:value="objectForm[index]['schoolName']" type="text"
                                           class="form-control form-control-solid"
                                           placeholder="Write Your School Name" name="schoolName">
                                    <!--                        <div class="fv-plugins-message-container invalid-feedback" id="fieldStudy"></div>-->
                                </div>
                                <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">

                                    <label class="required fs-6 fw-semibold mb-2">Field Study:</label>
                                    <input v-bind:value="objectForm[index]['fieldStudy2']" type="text"
                                           class="form-control form-control-solid"
                                           placeholder="Write Your Field Study" name="fieldStudy2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">
                                    <label class="required fs-6 fw-semibold mb-2">Level:</label>
                                    <input v-bind:value="objectForm[index]['level']" type="text"
                                           class="form-control form-control-solid"
                                           placeholder="Write Your Level" name="level">
                                    <!--                        <div class="fv-plugins-message-container invalid-feedback" id="fieldStudy"></div>-->
                                </div>
                                <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">

                                    <label class="required fs-6 fw-semibold mb-2">Language Of Study:</label>
                                    <input v-bind:value="objectForm[index]['languageStudy']" type="text"
                                           class="form-control form-control-solid"
                                           placeholder="Write Your Language Of Study" name="languageStudy">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">
                                    <label class="required fs-6 fw-semibold mb-2">Medium Of Instruction:</label>
                                    <input v-bind:value="objectForm[index]['mediumInstruction']" type="text"
                                           class="form-control form-control-solid"
                                           placeholder="Write Your Medium Of Instruction" name="mediumInstruction">
                                    <!--                        <div class="fv-plugins-message-container invalid-feedback" id="fieldStudy"></div>-->
                                </div>
                                <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">

                                    <label class="required fs-6 fw-semibold mb-2">Address:</label>
                                    <input v-bind:value="objectForm[index]['address2']" type="text"
                                           class="form-control form-control-solid"
                                           placeholder="Write Your Field Study" name="address2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">
                                    <label class="required fs-6 fw-semibold mb-2">Studied From:</label>
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
                                        <input v-bind:value="objectForm[index]['studiedFrom']"
                                               class="form-control d-block form-control-solid"
                                               style="padding-left: 35px"
                                               placeholder="Pick date range" name="studiedFrom"
                                               type="date">
                                        <!--                            <div class="fv-plugins-message-container invalid-feedback" id="birthDate"></div>-->
                                        <br>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">

                                    <label class="required fs-6 fw-semibold mb-2">Graduated At:</label>
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
                                        <input v-bind:value="objectForm[index]['graduated']"
                                               class="form-control d-block form-control-solid"
                                               style="padding-left: 35px"
                                               placeholder="Pick date range" name="graduated"
                                               type="date">
                                        <!--                            <div class="fv-plugins-message-container invalid-feedback" id="birthDate"></div>-->
                                        <br>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12 fv-row mb-7 fv-plugins-icon-container">
                                <label class="required fs-6 fw-semibold mb-2">GPA:</label>
                                <input v-bind:value="objectForm[index]['GPA2']" type="text"
                                       class="form-control form-control-solid"
                                       placeholder="Write Your GPA" name="GPA2">
                                <!--                        <div class="fv-plugins-message-container invalid-feedback" id="fieldStudy"></div>-->
                            </div>
                        </div>
                    </div>
                    <div v-else class="card">
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Contact Info</span>
                                <span
                                    class="text-muted mt-1 fw-semibold fs-7">Your Contact Information</span>
                            </h3>
                            <div class="card-toolbar" data-kt-buttons="true" data-kt-initialized="1">
                                <a @click="plus()" class="btn text-hover-white btn-outline-success btn-hover-rise bi bi-plus-circle"></a>
                                <a @click="remove(index)" class="btn text-hover-white btn-outline-danger btn-hover-rise  bi bi-dash-circle"></a>
                            </div>
                        </div>
                        <div class="card-body py-3">
                            <div class="row">
                                <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">
                                    <label class="required fs-6 fw-semibold mb-2">School Name:</label>
                                    <input type="text" class="form-control form-control-solid"
                                           placeholder="Write Your School Name" name="schoolName">
                                    <!--                        <div class="fv-plugins-message-container invalid-feedback" id="fieldStudy"></div>-->
                                </div>
                                <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">

                                    <label class="required fs-6 fw-semibold mb-2">Field Study:</label>
                                    <input type="text" class="form-control form-control-solid"
                                           placeholder="Write Your Field Study" name="fieldStudy2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">
                                    <label class="required fs-6 fw-semibold mb-2">Level:</label>
                                    <input type="text" class="form-control form-control-solid"
                                           placeholder="Write Your Level" name="level">
                                    <!--                        <div class="fv-plugins-message-container invalid-feedback" id="fieldStudy"></div>-->
                                </div>
                                <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">

                                    <label class="required fs-6 fw-semibold mb-2">Language Of Study:</label>
                                    <input type="text" class="form-control form-control-solid"
                                           placeholder="Write Your Language Of Study" name="languageStudy">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">
                                    <label class="required fs-6 fw-semibold mb-2">Medium Of Instruction:</label>
                                    <input type="text" class="form-control form-control-solid"
                                           placeholder="Write Your Medium Of Instruction" name="mediumInstruction">
                                    <!--                        <div class="fv-plugins-message-container invalid-feedback" id="fieldStudy"></div>-->
                                </div>
                                <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">

                                    <label class="required fs-6 fw-semibold mb-2">Address:</label>
                                    <input type="text" class="form-control form-control-solid"
                                           placeholder="Write Your Field Study" name="address2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">
                                    <label class="required fs-6 fw-semibold mb-2">Studied From:</label>
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
                                            class="form-control d-block form-control-solid"
                                            style="padding-left: 35px"
                                            placeholder="Pick date range" name="studiedFrom"
                                            type="date">
                                        <!--                            <div class="fv-plugins-message-container invalid-feedback" id="birthDate"></div>-->
                                        <br>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 fv-row mb-7 fv-plugins-icon-container">

                                    <label class="required fs-6 fw-semibold mb-2">Graduated At:</label>
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
                                            class="form-control d-block form-control-solid"
                                            style="padding-left: 35px"
                                            placeholder="Pick date range" name="graduated"
                                            type="date">
                                        <!--                            <div class="fv-plugins-message-container invalid-feedback" id="birthDate"></div>-->
                                        <br>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12 fv-row mb-7 fv-plugins-icon-container">
                                <label class="required fs-6 fw-semibold mb-2">GPA:</label>
                                <input type="text" class="form-control form-control-solid"
                                       placeholder="Write Your GPA" name="GPA2">
                                <!--                        <div class="fv-plugins-message-container invalid-feedback" id="fieldStudy"></div>-->
                            </div>
                        </div>
                    </div>
                </div>

                <!--                </div>-->

                <button type="button" style="float:  right"

                        @click="saveParent(['highestLevelEducation','countryEducation','fieldStudy','yearGraduation','GPA'
                            ],5,[add(),'school'])"
                        class="btn btn-primary">Next
                </button>
                <button type="button" @click="backStep(6)" style="float:  left" class="btn btn-light m-4">Back</button>


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
                 data-kt-scroll-offset="5px" id="message_5">

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
            <textarea id="messagee_5" class="form-control form-control-flush mb-3"
                      rows="2"
                      placeholder="Type a message"></textarea>
            <!--end::Input-->
            <!--begin:Toolbar-->
            <div class="d-flex flex-stack">
                <!--begin::Actions-->

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

</template>
<script>
export default {
    props: {
        user: Object,
        saveParent: Function,
        check: {
            type: Object,
        },
        backStep:Function
    },

    data() {
        return {
            numberTag: 1,
            objectForm: null,
            comment: null

        }
    },
    mounted() {
        if (this.objectForm!=null&&this.user['school']!='[]'){
            this.numberTag=this.objectForm.length
        }
    },
    methods: {
        add() {
            let ob;
            let ar = [];
            let e=[]
            for (let x = 0; x <= this.numberTag - 1; x++) {
                ob = new Object()
                if (document.getElementsByName('schoolName')[x].value != '') {
                    ob['schoolName'] = document.getElementsByName('schoolName')[x].value

                } else {
                    e.push(['schoolName',x])
                }
                if (document.getElementsByName('fieldStudy2')[x].value != '') {
                    ob['fieldStudy2'] = document.getElementsByName('fieldStudy2')[x].value

                } else {
                    e.push(['fieldStudy2',x])

                }
                if (document.getElementsByName('level')[x].value != '') {
                    ob['level'] = document.getElementsByName('level')[x].value


                } else {
                    e.push(['level',x])

                }
                if (document.getElementsByName('languageStudy')[x].value != '') {
                    ob['languageStudy'] = document.getElementsByName('languageStudy')[x].value

                } else {
                    e.push(['languageStudy',x])

                }
                if (document.getElementsByName('mediumInstruction')[x].value != '') {
                    ob['mediumInstruction'] = document.getElementsByName('mediumInstruction')[x].value

                } else {
                    e.push(['mediumInstruction',x])

                }
                if (document.getElementsByName('address2')[x].value != '') {
                    ob['address2'] = document.getElementsByName('address2')[x].value

                } else {
                    e.push(['address2',x])

                }
                if (document.getElementsByName('studiedFrom')[x].value != '') {
                    ob['studiedFrom'] = document.getElementsByName('studiedFrom')[x].value

                } else {
                    e.push(['studiedFrom',x])

                }
                if (document.getElementsByName('graduated')[x].value != '') {
                    ob['graduated'] = document.getElementsByName('graduated')[x].value


                } else {
                    e.push(['graduated',x])

                }
                if (document.getElementsByName('GPA2')[x].value != '') {
                    ob['GPA2'] = document.getElementsByName('GPA2')[x].value

                } else {
                    e.push(['GPA2',x])

                }

                ar.push(ob)
            }
            e.map(function (item) {
                document.getElementsByName(item[0])[item[1]].className='form-control form-control-solid border-danger is-invalid'
            })
            if (e.length==0){
                return ar
            }
            return 'error'
        },
        objForm(index) {
            if (this.user['school']!=null){
                if (typeof this.user['school'] != 'object'){
                    this.objectForm = JSON.parse(this.user['school'])

                }else {
                    this.objectForm = this.user['school']
                }
                return this.objectForm[index]
            }
        },
        plus(){
            this.numberTag++;
            window.scroll({
                top: 5000,
                // left: 100,
                behavior: 'smooth'
            })
        },
        remove(index){
            if (this.objectForm[index]){
                this.objectForm.splice(index)

            }
            this.numberTag--;
            window.scroll({
                top: 600,
                // left: 100,
                behavior: 'smooth'
            })
        },
        showte() {
            axios.post('/api/get-comment', {
                'id': this.user['id'],
                'step_id': 5
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
