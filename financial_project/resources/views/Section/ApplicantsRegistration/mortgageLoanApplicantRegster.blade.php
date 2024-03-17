@extends('layout.layout')
@section('content')
    <div class="card card-default">
        <div class="card-header" style="background-color:#FC6178">
            <h2 style=" margin: 0px 10px 10px 10px; color:aliceblue;">Register Mortgage Loan Applicants</h2>

            <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-nav-with-icon" role="button"
                aria-expanded="false" aria-controls="collapse-nav-with-icon"> </a>


        </div>
        <div class="card-body">
            <div class="collapse" id="collapse-nav-with-icon">

            </div>
            {{-- <div class="border p-6"> --}}
            <ul class="nav nav-tabs mb-3" id="pills-tab2" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-tabs-home2" role="tab"
                        aria-controls="nav-tabs " aria-selected="true">
                        <i class="mdi mdi-account"></i>
                        Personal Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile2" role="tab"
                        aria-controls="nav-profile" aria-selected="false">
                        <i class="mdi mdi-star-outline"></i>
                        Professional Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-Mortgage-tab" data-toggle="pill" href="#nav-Mortgage" role="tab"
                        aria-controls="nav-profile" aria-selected="false">
                        <i class="mdi mdi-account-check"></i>
                        Mortgage Items</a>
                </li>

            </ul>
            <div class="tab-content mt-5" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-tabs-home2" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium" for="">Name<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="name">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium" for="">NIC<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account-card-details"
                                                id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="NIC">
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Address<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-google-maps" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="address">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Mobile Number<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-cellphone-iphone"
                                                id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="phone">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Home phone number</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-phone-classic" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="Homephone">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Email</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-email" id="basic-addon1"></span>
                                        </div>
                                        <input type="email" class="form-control" id="emailAddress">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Requested Amount<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-cash-multiple" id="basic-addon1"></span>
                                        </div>
                                        <input type="number" id="RequestedAmount" required="required"
                                            class="form-control  ">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">How to Pay<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account-question"
                                                id="basic-addon1"></span>
                                        </div>
                                        <select id="payment_method" class="form-select form-control">
                                            <option value="Daily">Daily</option>
                                            <option value="Once in two days">Once in two days</option>
                                            <option value="Weakly">Weakly</option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="Quarter">Quarter</option>
                                            <option value="At once">At once</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Monthly Gross Income</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-cash-usd" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="MonthlyGrossIncome">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Monthly Expenses</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-cash-multiple" id="basic-addon1"></span>
                                        </div>
                                        <input type="number" id="MonthlyExpenses" required="required"
                                            class="form-control  ">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>
                                                    <input id="male" type="radio" name="gender"
                                                        value="male" />
                                                    <span class="radio"></span>
                                                    <span class="label">Male</span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label>
                                                    <input id="female" type="radio" name="gender"
                                                        value="female" />
                                                    <span class="radio"></span>
                                                    <span class="label">Female</span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- </div> --}}
                                </div>
                                {{-- </div> --}}
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium" for="">Assign Collectors</label>
                                    <div class="input-group mb-3">
                                        <div class="column col-xl-12" style="border: 1px solid rgb(98, 98, 98);">
                                            <select id="staffmembers" class="form-control" name="staffmembers[]"
                                                multiple="multiple" required>
                                                @foreach ($staffmembers as $staffmember)
                                                    <option value="{{ $staffmember->id }}">
                                                        {{ $staffmember->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>

                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label class="upload__btn">
                                                <p>Upload Profile image</p>
                                                <input type="file" multiple data-max_length="20"
                                                    name='CustomerPropic[]' class="upload__inputfile" />
                                            </label>
                                        </div>
                                        <div class="upload__img-wrap"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label class="upload__btn">
                                                <p>Upload NIC image</p>
                                                <input type="file" multiple data-max_length="20"
                                                    name='CustomernNICpic[]' class="upload__inputfile" />
                                            </label>
                                        </div>
                                        <div class="upload__img-wrap"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Describe previous loans, If any</label>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control rounded-left" placeholder="" rows="4" id="description" cols="50"></textarea>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="nav-Mortgage" role="tabpanel" aria-labelledby="nav-Mortgage-tab">
                    <div class="card-body">
                        <div class="container">
                            <h3 style="text-align: center">SELECT TYPE OF MORTGAGE</h3>
                            <br>
                            <div class="row col-md-12">

                                <div class="col-sm loantype">

                                    <div class="loan micro ">
                                        <div>
                                            <h3>𝘈𝘶𝘵𝘰 </h3>
                                        </div>
                                        <img src="images/free-car-lyv.png" alt="..." class="loanImage" />
                                        <div>
                                            <p></p>
                                        </div>
                                        {{-- <a href="#step-5"  class="btn btn-info" >Click Here to get started...</a> --}}
                                        <button type="button" id="btn_select_auto_mortgage"
                                            class="btn_selected_mortgage_type btn btn-primary" data-toggle="modal"
                                            data-target=".bd-example-modal-xl">Click Here to get
                                            started...</button>
                                        {{-- <button type="button" class="btn btn-info">Click Here to get started...</button> --}}
                                    </div>

                                </div>
                                <div class="col-sm loantype">
                                    <div class="loan mortgage">
                                        <div class="loan micro ">
                                            <div>
                                                <h3>𝘗𝘳𝘰𝘱𝘦𝘳𝘵𝘺 </h3>
                                            </div>
                                            <img src="images/transparent-png.png" alt="..." class="loanImage" />
                                            <div>
                                                <p></p>
                                            </div>
                                            {{-- <a class="btn btn-info" >Click Here to get started...</a> --}}
                                            {{-- <button type="button" class="btn btn-info">Click Here to get started...</button> --}}
                                            <button type="button" id="btn_select_property_mortgage"
                                                class="btn_selected_mortgage_type btn btn-primary" data-toggle="modal"
                                                data-target=".bd-example-modal-xl2">Click Here
                                                to get
                                                started...</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm loantype">
                                    <div class="loan other">
                                        <div class="loan micro ">
                                            <div>
                                                <h3>𝘖𝘵𝘩𝘦𝘳 </h3>
                                            </div>
                                            <img src="images/top-bann.png" alt="..." class="loanImage" />
                                            <div>
                                                <p></p>
                                            </div>
                                            <button type="button" id="btn_select_other_mortgage"
                                                class="btn_selected_mortgage_type btn btn-primary" data-toggle="modal"
                                                data-target=".otherMortgage">Click Here to get
                                                started...</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="container rounded bg-white mt-5 mb-5">
                        <div class="row">
                            <div class="col-md-6 border-right">
                                <div class=" col-md-12 col-sm-6" style="position: relative; top:25px; ">
                                    <div class="d-flex justify-content-between align-items-center mb-3"
                                        style="background-color:#9E6DE0">
                                        <h4 class="text-right" style=" margin: 10px 10px 10px 10px; color:aliceblue;">Bank
                                            Details
                                        </h4>
                                    </div>
                                    <label for="middle-name" class="label-align">Account No :<span
                                            class="required"></span></label>
                                    <input type="number" id="accountNo" required="required" class="form-control  ">
                                    <label for="middle-name" class="label-align">Name Of Bank<span
                                            class="required"></span></label>

                                    <input id="BankName" class="form-control col" type="text" name="middle-name">
                                    <label for="middle-name" class="label-align">Branch Name<span
                                            class="required"></span></label>

                                    <input id="Branchname" class="form-control col" type="text" name="middle-name">
                                    <br><br>
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label class="upload__btn">
                                                <p>Upload Bank Statement</p>
                                                <input type="file" multiple data-max_length="20"
                                                    name='customerBankStatement[]' class="upload__inputfile" />
                                            </label>
                                        </div>
                                        <div class="upload__img-wrap"></div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-6 border-right">
                                <div class="p-3 py-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3"
                                        style="background-color:#9E6DE0  ">
                                        <h4 class="text-right" style="  margin: 10px 10px 10px 10px;  color:aliceblue;">
                                            Source of Income
                                        </h4>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="form-group row">

                                            <div style="position: relative; right: -100px;">
                                                <label for="button1" class="l-radio">
                                                    <input type="radio" id="button1" name="selector" tabindex="1"
                                                        value="1" style="font-size: 40px" checked>
                                                    <span>Job</span>
                                                </label>
                                                <label for="button2" class="l-radio">
                                                    <input type="radio" id="button2" name="selector" tabindex="2"
                                                        value="2">
                                                    <span>Business</span>
                                                </label>
                                                <label for="button3" class="l-radio">
                                                    <input type="radio" id="button3" name="selector" tabindex="3"
                                                        value="2">
                                                    <span>Self employed</span>
                                                </label>
                                            </div>

                                        </div>
                                        {{-- <div class="form-group row "> --}}

                                        <div id="show1" class="hide col-md-12 col-sm-6">
                                            <label for="middle-name" class="label-align">Job role<span
                                                    class="required">*</span></label>

                                            <input id="Jobrole" class="form-control col" type="text"
                                                name="middle-name">
                                            <label for="middle-name" class="label-align">Company Name<span
                                                    class="required">*</span></label>

                                            <input id="CompanyName" class="form-control col" type="text"
                                                name="middle-name">
                                            <label for="middle-name" class="label-align">Address<span
                                                    class="required">*</span></label>

                                            <input id="CompanyAddress" class="form-control col" type="text"
                                                name="middle-name">
                                            <label for="jobContactNumber" class="label-align">Contact Number<span
                                                    class="required">*</span></label>

                                            <input id="jobContactNumber" class="form-control col" type="text"
                                                name="middle-name">
                                            <br>
                                            <div class="upload__box">
                                                <div class="upload__btn-box">
                                                    <label class="upload__btn">
                                                        <p>Upload 2 Pat Sheets</p>
                                                        <input type="file" multiple data-max_length="20"
                                                            name='customerPaySheets[]' class="upload__inputfile" />
                                                    </label>
                                                </div>
                                                <div class="upload__img-wrap"></div>
                                            </div>
                                            <div id="preview-container"></div>
                                        </div>
                                        <div id="show2" class="hide col-md-12 col-sm-6">
                                            <label for="TypeofBusiness" class="label-align">Type of Business<span
                                                    class="required">*</span></label>

                                            <input id="TypeofBusiness" class="form-control col" type="text"
                                                name="TypeofBusiness">
                                            <label for="BusinessName" class="label-align">Business Name<span
                                                    class="required">*</span></label>

                                            <input id="BusinessName" class="form-control col" type="text"
                                                name="middle-name">
                                            <label for="middle-name" class="label-align">Address<span
                                                    class="required">*</span></label>

                                            <input id="BussinessAddress" class="form-control col" type="text"
                                                name="middle-name">
                                            <label for="BussinessMoreInfo" class="label-align">More Info..<span
                                                    class="required">*</span></label>

                                            <textarea class="form-control col" id="BussinessMoreInfo" name="BussinessMoreInfo" rows="4" cols="50"
                                                placeholder="More Info.."></textarea>
                                        </div>
                                        <div id="show3" class="hide col-md-12 col-sm-6">
                                            <label for="middle-name" class="label-align">Type of Income<span
                                                    class="required">*</span></label>

                                            <input id="TypeofIncome" class="form-control col" type="text"
                                                name="middle-name">
                                            <label for="SelfEmployinfo" class="label-align">More Info..<span
                                                    class="required">*</span></label>

                                            <textarea class="form-control col" id="SelfEmployinfo" name="w3review" rows="4" cols="50"
                                                placeholder="More Info..">
        
                                                </textarea>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- 
            </div> --}}
        </div>
    </div>
    <div class="modal fade otherMortgage" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #1F305E; ">
                    <h3 class="modal-title" style="color: aliceblue" id="exampleModalLarge">OTHER MORTGAGE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="container">
                    <div class="row" style="margin:  5px 40px 5px 40px; padding:10px;">
                        <div class="col-sm">

                            <label for="middle-name" class="label-align">Select a type of
                                Mortgage<span class="required">*</span></label>
                            <div class="column" style="border: 1px solid rgb(98, 98, 98);">
                                <select id="Mortgage_Type" name="Mortgage_Type" class="form-control form-select ">
                                    <option value=""></option>
                                    <option value="Gold items">Gold items</option>
                                    <option value="Electronic Devices">Electronic Devices</option>

                                    <option value="Other">Other</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-sm" style="display: none;" id="electricDevicesType">
                            <label for="middle-name" class="label-align">Devices Type<span
                                    class="required">*</span></label>
                            <div class="column" style="border: 1px solid rgb(98, 98, 98);">
                                <select name="property_province" class="form-control form-select mortgage_sub_type"
                                    id="electricDevicesSelect">
                                    <option value=" ">Select Device </option>
                                    <option value="Mobile Phones">Mobile Phones</option>
                                    <option value="Laptop/Computers">Laptop/Computers</option>
                                    <option value="TV/Radio">TV/Radio</option>
                                    <option value="Domestic Appliances">Domestic Appliances</option>
                                    <option value="Industrial Electrical Equipment">Industrial Electrical Equipment
                                    </option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm" style="display: none;" id="goldType">
                            <label for="middle-name" class="label-align">Devices Type<span
                                    class="required">*</span></label>
                            <div class="column" style="border: 1px solid rgb(98, 98, 98);">
                                <select name="property_province" class="form-control form-select mortgage_sub_type select"
                                    id="goldTypeSelect">
                                    <option value="">Select </option>
                                    <option value="Chain">Chain</option>
                                    <option value="Bangles">Bangles</option>
                                    <option value="necklace">necklace</option>
                                    <option value="Rings">Rings</option>
                                    <option value="Bracelets">Bracelets</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm" id="TotalPoundField" style="display: none;">
                            <label for="middle-name" class="label-align">Total Carat<span
                                    class="required">*</span></label>

                            <input type="text" id="TotalPound" name="TotalPound" class="form-control ">
                        </div>
                        <div class="col-sm" id="TotalweightField" style="display: none;">
                            <label for="middle-name" class="label-align">Total Weight (eg:-10.5g)<span
                                    class="required">*</span></label>

                            <input type="text" id="Totalweight" name="Totalweight" class="form-control ">
                        </div>
                        <div class="col-sm" id="otherTitleField" style="display: none;">
                            <label for="middle-name" class="label-align">Title<span class="required">*</span></label>

                            <input type="text" id="otherTitle" name="otherTitle" class="form-control ">
                        </div>
                    </div>
                    <div class="row" style="margin: 5px 40px 5px 40px; padding:10px; display: none;"
                        id="OtherGoldItem">
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Other Gold Items<span
                                    class="required">*</span></label>
                            <input type="test" id="Other_gold_item" class="form-control ">
                        </div>

                    </div>
                    <div class="row" style="margin: 5px 40px 5px 40px; padding:10px;" id="brandandModel"
                        style="display: none;">
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Brand<span class="required">*</span></label>
                            <input type="test" id="DeviceBrand" name="property_address1" class="form-control ">
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Model<span class="required">*</span></label>
                            <input type="test" id="DeviceModel" name="property_address2" class="form-control ">
                        </div>

                    </div>
                    <div class="row" style="margin: 5px 40px 5px 40px; padding:10px;">
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Assessed value<span
                                    class="required">*</span></label>
                            <input type="number" id="other_assessed_value" name="other_assessed_value"
                                class="form-control ">
                        </div>

                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Suggested value<span
                                    class="required">*</span></label>
                            <input type="number" id="other_suggested_value" name="other_suggested_value"
                                class="form-control ">
                        </div>
                    </div>


                    <div class="row" style="margin: 5px 40px 5px 40px; padding:10px;">
                        <div class="col-md-6 col-sm-6 ">
                            <div class="upload__box">
                                <div class="upload__btn-box">
                                    <label class="upload__btn">
                                        <p>Upload Items Images</p>
                                        <input type="file" multiple data-max_length="20" id="other_mortgage_images"
                                            name='other_mortgage_images[]' class="upload__inputfile" />
                                    </label>
                                </div>
                                <div class="upload__img-wrap"></div>
                            </div>
                            <div id="preview-container"></div>
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea id="other_more" name="other_more" class="form-control form-select" rows="4">More...</textarea>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6" style="margin: 0px 10px 10px 40px; padding:20px;">
                            <button type="button" class="btn btn-outline-primary" id="adToTable">AD Item</button>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11" style="margin: 0px 10px 10px 40px; padding:20px;">
                            <table id="itemTable" class="table">
                                <tbody>
                                    <!-- Data will be appended here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="btn_submit_loan_request"
                        class="btn_submit_loan_request btn btn-primary submitApplicant">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgb(252, 97, 120); ">
                    <h3 class="modal-title" style="color: aliceblue" id="exampleModalLarge">AUTO MORTGAGE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="container">

                    <div class="row" style="margin:  5px 40px 5px 40px; padding:10px;">
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Select a vehicle
                                Category<span class="required">*</span></label>
                            <div class="column" style="">
                                <select id="auto_vehicle_category" name="auto_vehicle_category"
                                    class="form-control form-select">

                                    <option value="Car">Car</option>
                                    <option value="Van">Van</option>
                                    <option value="Bus">Bus</option>
                                    <option value="Mini Van">Mini Van</option>
                                    <option value="Moror Bicycle">Moror Bicycle</option>
                                    <option value="Three-Wheeler">Three-Wheeler</option>
                                    <option value="Lorry">Lorry</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Brand Name<span
                                    class="required">*</span></label>
                            <input type="text" id="auto_vehicle_brand" name="auto_vehicle_brand"
                                class="form-control ">
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Model Name<span
                                    class="required">*</span></label>
                            <input type="text" id="auto_vehicle_model" name="auto_vehicle_model"
                                class="form-control ">
                        </div>
                    </div>
                    <div class="row" style="margin: 5px 40px 5px 40px; padding:10px;">
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Year of Manufacture<span
                                    class="required">*</span></label>
                            <input type="number" id="auto_vehicle_year" name="auto_vehicle_year" class="form-control ">
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Mileage (km)<span
                                    class="required">*</span></label>
                            <input type="number" id="auto_vehicle_mileage" name="auto_vehicle_mileage"
                                class="form-control ">
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Engine capacity (cc)<span
                                    class="required">*</span></label>
                            <input type="number" id="auto_vehicle_engine_capacity" name="auto_vehicle_engine_capacity"
                                class="form-control ">
                        </div>
                    </div>
                    <div class="row" style="margin: 5px 40px 5px 40px; padding:10px;">
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Marcket Price<span
                                    class="required">*</span></label>
                            <input type="number" id="auto_vehicle_market_price" name="auto_vehicle_market_price"
                                class="form-control ">
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Suggested Price<span
                                    class="required">*</span></label>
                            <input type="number" id="auto_vehicle_suggested_price" name="auto_vehicle_suggested_price"
                                class="form-control ">
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Engine Number<span
                                    class="required">*</span></label>
                            <input type="test" id="auto_vehicle_engine_number" name="auto_vehicle_engine_number"
                                class="form-control ">
                        </div>
                    </div>
                    <div class="row" style="margin: 5px 40px 5px 40px; padding:10px;">
                        <div class="col-md-6 col-sm-6 ">
                            <div class="mb-5">
                                <div class="upload__box">
                                    <div class="upload__btn-box">
                                        <label class="upload__btn">
                                            <p>Upload NIC image</p>
                                            <input type="file" id="auto_mortgage" multiple data-max_length="20"
                                                name='vehicle_images[]' class="upload__inputfile" />
                                        </label>
                                    </div>
                                    <div class="upload__img-wrap"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">

                            <div class="mb-5">
                                <div class="upload__box">
                                    <div class="upload__btn-box">
                                        <label class="upload__btn">
                                            <p>Upload Vehicle Book Image/pdf</p>
                                            <input type="file" id="vehicle_book" multiple data-max_length="20"
                                                name='vehicle_book_images[]' class="upload__inputfile" />
                                        </label>
                                    </div>
                                    <div class="upload__img-wrap"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-11" style="margin: 0px 10px 10px 40px; padding:20px;">
                            <textarea id="auto_vehicle_more" name="auto_vehicle_more" class="form-control " rows="4">More...</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="btn_submit_loan_request"
                        class="btn_submit_loan_request btn btn-primary submitApplicant">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-xl2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #00AB66; ">
                    <h3 class="modal-title" style="color: aliceblue" id="exampleModalLarge">PROPERTY MORTGAGE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="container">
                    <div class="row" style="margin:  5px 40px 5px 40px; padding:10px;">
                        <div class="col-sm">

                            <label for="middle-name" class="label-align">Select a type of
                                property<span class="required">*</span></label>
                            <div class="column" style="border: 1px solid rgb(98, 98, 98);">
                                <select id="property_type" name="property_type" class="form-control form-select">
                                    <option value=" "></option>
                                    <option value="House">House</option>
                                    <option value="Land">Land</option>
                                    <option value="Commercial property">Commercial property
                                    </option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Select a Province<span
                                    class="required">*</span></label>
                            <div class="column" style="border: 1px solid rgb(98, 98, 98);">
                                <select id="property_province" name="property_province" class="form-control form-select">
                                    <option value="Central">Central</option>
                                    <option value="North-Central">North-Central</option>
                                    <option value="Northern">Northern</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Select a District<span
                                    class="required">*</span></label>

                            <input type="text" id="property_district" name="property_district" class="form-control ">
                        </div>
                    </div>
                    <div class="row" style="margin: 5px 40px 5px 40px; padding:10px;">
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Address Line <span
                                    class="required">*</span></label>
                            <input type="test" id="property_address" name="property_address" class="form-control ">
                        </div>

                        <div class="col-sm">
                            <label for="middle-name" class="label-align">State<span class="required">*</span></label>
                            <input type="test" id="property_state" name="property_state" class="form-control ">
                        </div>
                    </div>
                    <div class="row" style="margin: 5px 40px 5px 40px; padding:10px;">
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Assessed value<span
                                    class="required">*</span></label>
                            <input type="number" id="property_assessed_value" name="property_assessed_value"
                                class="form-control ">
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Suggested value<span
                                    class="required">*</span></label>
                            <input type="number" id="property_suggested_value" name="property_suggested_value"
                                class="form-control ">
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Postal Code<span
                                    class="required">*</span></label>
                            <input type="test" id="property_postal_code" name="property_postal_code"
                                class="form-control ">
                        </div>
                    </div>

                    <div class="row col-md-12" style="margin: 15px 40px 15px 40px; padding:10px; ">

                        <div class="col-md-3" id="lSize" style="display:none;">
                            <label for="middle-name" class="label-align">Land Size<span class="required">*</span></label>
                            <input type="text" id="property_land_size" name="property_land_size"
                                class="form-control ">
                        </div>
                        <div class="col-md-3" id="p_size_sqft" style="display:none;">
                            <label for="middle-name" class="label-align">property size
                                (sqft)<span class="required">*</span></label>
                            <input type="number" id="property_size_sqft" name="property_size_sqft"
                                class="form-control ">
                        </div>

                        <div class="col-md-2" id="p_bed_rooms" style="display:none;">
                            <label for="middle-name" class="label-align">Bed Rooms<span class="required">*</span></label>
                            <input type="number" id="property_bed_rooms" name="property_bed_rooms"
                                class="form-control ">
                        </div>

                    </div>

                    <div class="row" class="col-md-12 " style="margin: 5px 40px 5px 40px; padding:10px;">
                        <div class="col-md-6 col-sm-6 ">
                            <div class="upload__box">
                                <div class="upload__btn-box">
                                    <label class="upload__btn">
                                        <p>Upload Property Images</p>
                                        <input type="file" id="property_images" multiple data-max_length="20"
                                            name='property_images[]' class="upload__inputfile" />
                                    </label>
                                </div>
                                <div class="upload__img-wrap"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="upload__box">
                                <div class="upload__btn-box">
                                    <label class="upload__btn">
                                        <p>Upload Property Book Images</p>
                                        <input type="file" id="property_book_images" multiple data-max_length="20"
                                            name='property_book_images[]' class="upload__inputfile" />
                                    </label>
                                </div>
                                <div class="upload__img-wrap"></div>
                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-11" style="margin: 0px 10px 10px 40px; padding:20px;">
                            <textarea id="property_more" name="property_more" class="form-control form-select" rows="4">More...</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="btn_submit_loan_request"
                        class="btn_submit_loan_request btn btn-primary submitApplicant">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('layout.footerlink')
<script>
    jQuery(document).ready(function() {
        ImgUpload();
    });

    function ImgUpload() {
        var imgWrap = "";
        var imgArray = [];

        $(".upload__inputfile").each(function() {
            $(this).on("change", function(e) {
                imgWrap = $(this).closest(".upload__box").find(".upload__img-wrap");
                var maxLength = $(this).attr("data-max_length");

                var files = e.target.files;
                var filesArr = Array.prototype.slice.call(files);
                var iterator = 0;
                filesArr.forEach(function(f, index) {
                    if (!f.type.match("image.*")) {
                        return;
                    }

                    if (imgArray.length > maxLength) {
                        return false;
                    } else {
                        var len = 0;
                        for (var i = 0; i < imgArray.length; i++) {
                            if (imgArray[i] !== undefined) {
                                len++;
                            }
                        }
                        if (len > maxLength) {
                            return false;
                        } else {
                            imgArray.push(f);

                            var reader = new FileReader();
                            reader.onload = function(e) {
                                var html =
                                    "<div class='upload__img-box'><div style='background-image: url(" +
                                    e.target.result +
                                    ")' data-number='" +
                                    $(".upload__img-close").length +
                                    "' data-file='" +
                                    f.name +
                                    "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                imgWrap.append(html);
                                iterator++;
                            };
                            reader.readAsDataURL(f);
                        }
                    }
                });
            });
        });

        $("body").on("click", ".upload__img-close", function(e) {
            var file = $(this).parent().data("file");
            for (var i = 0; i < imgArray.length; i++) {
                if (imgArray[i].name === file) {
                    imgArray.splice(i, 1);
                    break;
                }
            }
            $(this).parent().parent().remove();
        });
    }

    $(document).ready(function() {
        $('#staffmembers').multiselect({
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            placeholder: 'Search and select collectors',
            allowClear: true,
            buttonWidth: '100%',

        });

        var selectedStaffmembers = '';
        $(document).on("change", "#staffmembers", function() {
            selectedStaffmembers = $(this).val();

        });

        var branch_id = {{ Session::get('branch_id') }};

        $("#goldTypeSelect").change(function() {
            var OtherGoldItem = $("#OtherGoldItem");
            var goldTypeSelect = $(this).val();
            if (goldTypeSelect === "Others") {

                OtherGoldItem.show();

            } else {
                OtherGoldItem.hide();
            }
        })
        var mortgageType = '';
        $("#Mortgage_Type").change(function() {
            mortgageType = $(this).val();
            var electricDevicesType = $("#electricDevicesType");
            var TotalPound = $("#TotalPoundField");
            var TotalweightField = $("#TotalweightField");
            var otherTitleField = $("#otherTitleField");
            var goldType = $("#goldType");
            var brandandModel = $("#brandandModel");

            if (mortgageType === "Electronic Devices") {
                electricDevicesType.show();
                TotalweightField.hide();
                brandandModel.show();
                goldType.hide();
                TotalPound.hide();
                otherTitleField.hide();
            } else if (mortgageType === "Gold items") {

                goldType.show();
                TotalPound.show();
                electricDevicesType.hide();
                brandandModel.hide();
                otherTitleField.hide();
                TotalweightField.show();
            } else {
                otherTitleField.show();
                electricDevicesType.hide();
                goldType.hide();
                TotalweightField.hide();
                TotalPound.hide();
                brandandModel.hide();
            }
        });

        var mortgageDataArray = []; // Create an empty array to store the mortgage data

        var mortgageSubType = ''; // Initialize mortgageSubType
        var rowData = '';
        $('.mortgage_sub_type').on('change', function() {
            mortgageSubType = $(this).val();
        });

        $("#adToTable").click(function() {
            // Get the selected values from the dropdowns
            var mortgageType = $("#Mortgage_Type").val();
            var goldType = $("#goldTypeSelect").val(); // Assuming you have this field for gold items
            var TotalPound = $("#TotalPound").val();
            var Totalweight = $("#Totalweight").val();
            var other_more = $("#other_more").val();
            var other_assessed_value = $("#other_assessed_value").val();
            var other_suggested_value = $("#other_suggested_value").val();

            // Get the selected images
            var images = $("#other_mortgage_images")[0].files;

            // Check if both dropdowns have valid selections
            if (mortgageType == 'Gold items' && goldType) {
                // Create an object to store the data for this row
                rowData = {
                    mortgageType: mortgageType,
                    mortgageSubType: mortgageSubType, // Add mortgageSubType to the rowData object
                    goldType: goldType,
                    TotalPound: TotalPound,
                    Totalweight: Totalweight,
                    other_assessed_value: other_assessed_value,
                    other_suggested_value: other_suggested_value,
                    other_more: other_more,
                    images: []
                };

                // Push the selected images into the images array of the rowData object
                for (var i = 0; i < images.length; i++) {
                    rowData.images.push(images[i]);
                }

                // Push the rowData object into the mortgageDataArray
                mortgageDataArray.push(rowData);

                // Create a new row in the table with a "Remove" button
                if ($("#itemTable tbody tr").length === 0) {
                    $("#itemTable tbody").append(
                        "<tr style='background-color: #1F305E; color: white;'><th >Gold Type</th><th>Total Carat</th><th>Total Weight</th><th>Assessed value</th><th>Suggested value</th><th>Description</th><th>Images</th><th>Action</th></tr>"
                    );
                }
                var newRow = "<tr><td class='table_font_color'>" + mortgageSubType +
                    "</td><td class='table_font_color'>" +
                    TotalPound + "</td><td class='table_font_color'>" +
                    Totalweight + "</td><td class='table_font_color'>" + other_assessed_value +
                    "</td><td class='table_font_color'>" +
                    other_suggested_value + "</td><td class='table_font_color'>" + other_more +
                    "</td><td>";

                // Append image previews
                for (var i = 0; i < images.length; i++) {
                    newRow += "<img src='" + URL.createObjectURL(images[i]) +
                        "' width='50' height='50'>";
                }

                newRow +=
                    "</td><td><button class='btn btn-danger btn-remove-row'><i class='mdi mdi-delete'></i></button></td></tr>";

                $("#itemTable tbody").append(newRow);
            }

            // Reset the dropdowns and fields to their initial state
            // $("#Mortgage_Type").val("");
            $("#goldTypeSelect").val("");
            $("#TotalPound").val("");
            $("#Totalweight").val("");
            $("#other_assessed_value").val("");
            $("#other_suggested_value").val("");
            $("#other_mortgage_images").val(null); // Clear the file input
            $("#other_mortgage_preview").empty(); // Clear the image preview

            // Hide the device type dropdown (you can modify this based on your requirements)
            $("#electricDevicesType").hide();
        });

        // Preview uploaded images
        $("#other_mortgage_images").change(function() {
            var previewContainer = $("#other_mortgage_preview");
            previewContainer.empty();

            var images = this.files;
            for (var i = 0; i < images.length; i++) {
                var img = $("<img>").attr("src", URL.createObjectURL(images[i])).css({
                    width: "100px",
                    height: "auto",
                    margin: "5px"
                });
                previewContainer.append(img);
            }
        });

        $("#property_type").change(function() {
            var select = $("#property_type");
            var lSize = $("#lSize");
            var p_size_sqft = $("#p_size_sqft");
            var p_bed_rooms = $("#p_bed_rooms");

            if (select.val() === "Land") {
                lSize.css("display", "block");
                p_size_sqft.css("display", "none");
                p_bed_rooms.css("display", "none");
            } else if (select.val() === "House") {
                lSize.css("display", "block");
                p_size_sqft.css("display", "block");
                p_bed_rooms.css("display", "block");
            } else {
                lSize.css("display", "none");
                p_size_sqft.css("display", "none");
                p_bed_rooms.css("display", "none");
            }
        });

        // Remove table row when the "Remove" button is clicked
        $(document).on("click", ".btn-remove-row", function() {
            var rowIndex = $(this).closest("tr").index();
            mortgageDataArray.splice(rowIndex, 1); // Remove the corresponding data from the array
            $(this).closest("tr").remove();
        });


        $("#show1").removeClass("hide");
        $("#show2, #show3").addClass("hide");

        $("#button1").click(function() {
            $("#show1").removeClass("hide");
            $("#show2, #show3").addClass("hide");
        });

        $("#button2").click(function() {
            $("#show1").addClass("hide");
            $("#show2").removeClass("hide");
            $("#show3").addClass("hide");
        });

        $("#button3").click(function() {
            $("#show1").addClass("hide");
            $("#show2").addClass("hide");
            $("#show3").removeClass("hide");
        });

        var selectedMortgageType;

        $('#btn_select_auto_mortgage').click(function() {
            selectedMortgageType = "auto_mortgage";
        });
        $('#btn_select_property_mortgage').click(function() {
            selectedMortgageType = "property_mortgage";
        });
        $('#btn_select_other_mortgage').click(function() {
            selectedMortgageType = "other_mortgage";
        });


        $(document).on('click', '.submitApplicant', function(e) {
            e.preventDefault();

            var name = $('#name').val();
            var nic = $('#NIC').val();
            var address = $('#address').val();
            var phone = $('#phone').val();
            var RequestedAmount = $('#RequestedAmount').val();
            var Homephone = $('#Homephone').val();
            var emailAddress = $('#emailAddress').val();
            var payment_method = $('#payment_method').val();
            var MonthlyGrossIncome = $('#MonthlyGrossIncome').val();
            var MonthlyExpenses = $('#MonthlyExpenses').val();
            var description = $('#description').val();

            var accountNo = $('#accountNo').val();
            var BankName = $('#BankName').val();
            var Branchname = $('#Branchname').val();

            var Jobrole = $('#Jobrole').val();
            var CompanyName = $('#CompanyName').val();
            var jobContactNumber = $('#jobContactNumber').val();
            var CompanyAddress = $('#CompanyAddress').val();

            var TypeofBusiness = $('#TypeofBusiness').val();
            var BusinessName = $('#BusinessName').val();
            var BussinessAddress = $('#BussinessAddress').val();
            var BussinessMoreInfo = $('#BussinessMoreInfo').val();

            var SelfEmployinfo = $('#SelfEmployinfo').val();
            var TypeofIncome = $('#TypeofIncome').val();

            var gender;
            if ($('#male').is(':checked')) {
                gender = 'male';
            } else if ($('#female').is(':checked')) {
                gender = 'female';
            }
            var incomeSource;
            if ($('#button1').is(':checked')) {
                incomeSource = 'Job';
            } else if ($('#button2').is(':checked')) {
                incomeSource = 'Business';
            } else if ($('#button3').is(':checked')) {
                incomeSource = 'SelfEmplyed';
            }


            var property_type = $('#property_type').val();
            var property_province = $('#property_province').val();
            var property_district = $('#property_district').val();
            var property_address = $('#property_address').val();
            var property_state = $('#property_state').val();
            var property_assessed_value = $('#property_assessed_value').val();
            var property_suggested_value = $('#property_suggested_value').val();
            var property_postal_code = $('#property_postal_code').val();
            var property_land_size = $('#property_land_size').val();
            var property_size_sqft = $('#property_size_sqft').val();
            var property_bed_rooms = $('#property_bed_rooms').val();
            var property_more = $('#property_more').val();


            var auto_vehicle_category = $('#auto_vehicle_category').val();
            var auto_vehicle_brand = $('#auto_vehicle_brand').val();
            var auto_vehicle_model = $('#auto_vehicle_model').val();
            var auto_vehicle_year = $('#auto_vehicle_year').val();
            var auto_vehicle_mileage = $('#auto_vehicle_mileage').val();
            var auto_vehicle_engine_capacity = $('#auto_vehicle_engine_capacity').val();
            var auto_vehicle_market_price = $('#auto_vehicle_market_price').val();
            var auto_vehicle_suggested_price = $('#auto_vehicle_suggested_price').val();
            var auto_vehicle_engine_number = $('#auto_vehicle_engine_number').val();
            var auto_vehicle_more = $('#auto_vehicle_more').val();


            var OtherGoldItem = $('#Other_gold_item').val();
            var Mortgage_Type = $('#Mortgage_Type').val();
            var DeviceBrand = $('#DeviceBrand').val();
            var DeviceModel = $('#DeviceModel').val();
            var other_more = $('#other_more').val();
            var other_assessed_value = $('#other_assessed_value').val();
            var other_suggested_value = $('#other_suggested_value').val();


            var CustomernNICpic = $('input[name="CustomernNICpic[]"]').prop('files');
            var CustomerPropic = $('input[name="CustomerPropic[]"]').prop('files');
            var customerBankStatement = $('input[name="customerBankStatement[]"]').prop('files');
            var customerPaySheets = $('input[name="customerPaySheets[]"]').prop('files');

            var propertyImages = $('input[name="property_images[]"]').prop('files');
            var propertyBookImages = $('input[name="property_book_images[]"]').prop('files');
            var vehicleImages = $('input[name="vehicle_images[]"]').prop('files');
            var vehicleBookImages = $('input[name="vehicle_book_images[]"]').prop('files');

            var isValid = true;
            var errorMessage = '';

            // Perform individual validation checks for each input field
            if (name.trim() === '') {
                errorMessage += 'Name is required.<br>';
                isValid = false;
            }
            if (address.trim() === '') {
                errorMessage += 'Address is required.<br>';
                isValid = false;
            }
            if (phone.trim() === '') {
                errorMessage += 'phone number is required.<br>';
                isValid = false;
            }
            if (RequestedAmount.trim() === "") {
                errorMessage += 'Requested Amount is required.<br>';
                isValid = false;
            }
            if (selectedMortgageType === 'other_mortgage' && mortgageType === "Gold items") {
                if (rowData) {
                    if (rowData.mortgageType && rowData.mortgageSubType && rowData.goldType && rowData
                        .TotalPound && rowData.Totalweight) {
                        // All required fields are present and not empty, so you can append rowData to the array.

                    } else {
                        // Handle the case where required fields are missing or empty.
                        alert("Please fill in all required fields.");
                    }
                } else {
                    // Handle the case where rowData is null or undefined.
                    errorMessage += 'Gold items is required.<br>';
                    isValid = false;
                }
            }
            if (selectedMortgageType === 'auto_mortgage') {
                if (auto_vehicle_category.trim() === '') {
                    errorMessage += 'Vehicle category is required.<br>';
                    isValid = false;
                }
                if (auto_vehicle_brand.trim() === '') {
                    errorMessage += 'Vehicle brand is required.<br>';
                    isValid = false;
                }
                if (auto_vehicle_model.trim() === '') {
                    errorMessage += 'Vehicle model is required.<br>';
                    isValid = false;
                }
                if (auto_vehicle_market_price.trim() === "") {
                    errorMessage += 'Market price is required.<br>';
                    isValid = false;
                }
                if (auto_vehicle_suggested_price.trim() === "") {
                    errorMessage += 'Suggested price is required.<br>';
                    isValid = false;
                }

            }
            if (selectedMortgageType === 'property_mortgage') {
                if (property_type.trim() === '') {
                    errorMessage += 'Property type is required.<br>';
                    isValid = false;
                }
                if (property_province.trim() === '') {
                    errorMessage += 'Property province is required.<br>';
                    isValid = false;
                }
                if (property_district.trim() === '') {
                    errorMessage += 'Property District is required.<br>';
                    isValid = false;
                }
                if (property_address.trim() === '') {
                    errorMessage += 'Property address is required.<br>';
                    isValid = false;
                }
                if (property_assessed_value.trim() === '') {
                    errorMessage += 'Property assessed value is required.<br>';
                    isValid = false;
                }
                if (property_suggested_value.trim() === '') {
                    errorMessage += 'Property suggested value is required.<br>';
                    isValid = false;
                }

            }


            if (!isValid) {
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    html: errorMessage,
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                    confirmButtonText: 'OK',
                });
                return;
            } else {
                var formData = new FormData();
                // Add the customer data to the FormData object
                formData.append('branchId', branch_id);
                formData.append('selectedStaffmembers', selectedStaffmembers);
                formData.append('name', name);
                formData.append('nic', nic);
                formData.append('address', address);
                formData.append('RequestedAmount', RequestedAmount);
                formData.append('email', emailAddress);
                formData.append('phone', phone);
                formData.append('incomeSource', incomeSource);
                formData.append('gender', gender);
                formData.append('Homephone', Homephone);
                formData.append('payment_method', payment_method);
                formData.append('MonthlyGrossIncome', MonthlyGrossIncome);
                formData.append('MonthlyExpenses', MonthlyExpenses);
                formData.append('accountNo', accountNo);
                formData.append('BankName', BankName);
                formData.append('Branchname', Branchname);
                formData.append('description', description);

                formData.append('Jobrole', Jobrole);
                formData.append('CompanyName', CompanyName);
                formData.append('jobContactNumber', jobContactNumber);
                formData.append('CompanyAddress', CompanyAddress);

                formData.append('TypeofBusiness', TypeofBusiness);
                formData.append('BusinessName', BusinessName);
                formData.append('BussinessAddress', BussinessAddress);
                formData.append('BussinessMoreInfo', BussinessMoreInfo);

                formData.append('SelfEmployinfo', SelfEmployinfo);
                formData.append('TypeofIncome', TypeofIncome);


                // formData.append('mortgage_sub_type', mortgageSubType);
                formData.append('selected_mortgage_type', selectedMortgageType);


                if (selectedMortgageType === 'auto_mortgage') {
                    formData.append('mortgage_sub_type', 'auto');
                    formData.append('auto_vehicle_category', auto_vehicle_category);
                    formData.append('auto_vehicle_brand', auto_vehicle_brand);
                    formData.append('auto_vehicle_model', auto_vehicle_model);
                    formData.append('auto_vehicle_year', auto_vehicle_year);
                    formData.append('auto_vehicle_mileage', auto_vehicle_mileage);
                    formData.append('auto_vehicle_engine_capacity', auto_vehicle_engine_capacity);
                    formData.append('auto_vehicle_market_price', auto_vehicle_market_price);
                    formData.append('auto_vehicle_suggested_price', auto_vehicle_suggested_price);
                    formData.append('auto_vehicle_engine_number', auto_vehicle_engine_number);
                    formData.append('auto_vehicle_more', auto_vehicle_more);
                }

                if (selectedMortgageType === 'property_mortgage') {
                    formData.append('mortgage_sub_type', 'property');
                    formData.append('property_type', property_type);
                    formData.append('property_province', property_province);
                    formData.append('property_district', property_district);
                    formData.append('property_address', property_address);
                    formData.append('property_state', property_state);
                    formData.append('property_assessed_value', property_assessed_value);
                    formData.append('property_suggested_value', property_suggested_value);
                    formData.append('property_postal_code', property_postal_code);
                    formData.append('property_land_size', property_land_size);
                    formData.append('property_size_sqft', property_size_sqft);
                    formData.append('property_bed_rooms', property_bed_rooms);
                    formData.append('property_more', property_more);

                }
                if (selectedMortgageType === 'other_mortgage') {
                    formData.append('mortgage_sub_type', Mortgage_Type);
                    formData.append('mortgageType', mortgageType);
                    formData.append('OtherGoldItem', OtherGoldItem);
                    formData.append('Mortgage_Type', Mortgage_Type);
                    formData.append('DeviceBrand', DeviceBrand);
                    formData.append('DeviceModel', DeviceModel);
                    formData.append('other_more', other_more);
                    formData.append('other_assessed_value', other_assessed_value);
                    formData.append('other_suggested_value', other_suggested_value);

                }


                $.each(mortgageDataArray, function(i, rowData) {
                    formData.append('mortgageData[' + i + '][mortgageType]', rowData
                        .mortgageType);
                    formData.append('mortgageData[' + i + '][other_more]', rowData.other_more);
                    formData.append('mortgageData[' + i + '][mortgageSubType]', rowData
                        .mortgageSubType); // Append mortgageSubType
                    formData.append('mortgageData[' + i + '][goldType]', rowData.goldType);
                    formData.append('mortgageData[' + i + '][TotalPound]', rowData.TotalPound);
                    formData.append('mortgageData[' + i + '][Totalweight]', rowData
                        .Totalweight);
                    formData.append('mortgageData[' + i + '][other_assessed_value]', rowData
                        .other_assessed_value);
                    formData.append('mortgageData[' + i + '][other_suggested_value]', rowData
                        .other_suggested_value);

                    // Append the images to formData
                    $.each(rowData.images, function(j, image) {
                        formData.append('mortgageData[' + i + '][images][]', image);
                    });
                });


                $.each(CustomernNICpic, function(i, file) {
                    formData.append('CustomernNICpic[]', file);
                });
                $.each(CustomerPropic, function(i, file) {
                    formData.append('CustomerPropic[]', file);
                });
                $.each(customerBankStatement, function(i, file) {
                    formData.append('customerBankStatement[]', file);
                });
                $.each(customerPaySheets, function(i, file) {
                    formData.append('customerPaySheets[]', file);
                });

                $.each(propertyImages, function(i, file) {
                    formData.append('property_images[]', file);
                });
                $.each(propertyBookImages, function(i, file) {
                    formData.append('property_book_images[]', file);
                });
                $.each(vehicleImages, function(i, file) {
                    formData.append('vehicle_images[]', file);
                });
                $.each(vehicleBookImages, function(i, file) {
                    formData.append('vehicle_book_images[]', file);
                });

                $.ajax({
                    url: "{{ route('store.mortgage-customer') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        Swal.fire(
                            'Good job!',
                            data.message,
                            'success'
                        );
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            var errorMessage = '';

                            // Loop through the validation errors and construct an error message
                            for (var field in errors) {
                                errorMessage += errors[field][0] + '<br>';
                            }

                            Swal.fire({
                                icon: 'error',
                                title: 'Validation Error',
                                html: errorMessage,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                confirmButtonText: 'OK',
                            });
                        } else {
                            alert('Form submission failed!');
                        }
                    }
                    // location.reload();
                });

            }

        });
    });
</script>
