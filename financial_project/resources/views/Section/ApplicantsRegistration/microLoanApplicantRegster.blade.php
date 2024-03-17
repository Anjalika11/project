@extends('layout.layout')
@section('content')
    <div class="card card-default">
        <div class="card-header" style="background-color:#FC6178">
            <h2 style=" margin: 0px 10px 10px 10px; color:aliceblue;">Register Micro Loan Applicants</h2>

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
                        <div class="col-md-12">
                            <button type="button" class="mb-1 btn btn-primary submitApplicant" id="submitApplicant"
                                style="position: absolute; right:0px; ">
                                SUBMIT
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 
            </div> --}}
        </div>
    </div>
@endsection
@include('layout.footerlink')
<script>
    // Get the 'branch_id' session variable and assign it to a JavaScript variable
</script>
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
        var selectedStaffmembers = '';
        $(document).on("change", "#staffmembers", function() {
            selectedStaffmembers = $(this).val();

        });

        $('#staffmembers').multiselect({
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            placeholder: 'Search and select collectors',
            allowClear: true,
            buttonWidth: '100%',

        });
        var branch_id = {{ Session::get('branch_id') }};
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
            var CustomernNICpic = $('input[name="CustomernNICpic[]"]').prop('files');
            var CustomerPropic = $('input[name="CustomerPropic[]"]').prop('files');
            var customerBankStatement = $('input[name="customerBankStatement[]"]').prop('files');
            var customerPaySheets = $('input[name="customerPaySheets[]"]').prop('files');

            var isValid = true;
            var errorMessage = '';

            // Perform individual validation checks for each input field
            if (name.trim() === '') {
                errorMessage += 'Name is required.<br>';
                isValid = false;
            }
            if (nic.trim() === '') {
                errorMessage += 'NIC is required.<br>';
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

                $.ajax({
                    url: "{{ route('store.micoLoan-customer') }}",
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
                            Swal.fire({
                                icon: 'error',
                                title: 'Validation Error',
                                html: 'Form submission failed!',
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                confirmButtonText: 'OK',
                            });

                        }
                    }
                    // location.reload();
                });

            }

        });
    });
</script>
