@extends('layout.layout')
@section('content')
    <div class="content-wrapper" style="position: relative; top:-50px;">
        <div class="content">
            <!-- Card Profile -->
            <div class="card card-default card-profile">
                <div class="card-header-bg" style="background-image: url(images/other/img4.jpg)"></div>

                <div class="card-body card-profile-body">
                    <div class="profile-avata">

                        <a class="h2 d-block mt-3 mb-2" href="#">{{ $branch->branch_name }}</a>
                        <a class="d-block text-color" href="#">{{ $branch->email }}</a>
                    </div>

                    <ul class="nav nav-profile-follow">

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="h5 d-block">{{ $ongoingLoanCount }}</span>
                                <span class="text-color d-block">ONGOING</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="h5 d-block">{{ $completedLoanCount }}</span>
                                <span class="text-color d-block">COMPLETE</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="h5 d-block">{{ $overdueLoanCount }}</span>
                                <span class="text-color d-block">OVER DUE</span>
                            </a>
                        </li>

                    </ul>

                    <div class="profile-button">

                        <button type="button" class="btn bg-primary text-white btn-pill mb-3 mb-xxl-0" data-toggle="modal"
                            data-target="#exampleModallarge">
                            Upgrade Detail
                        </button>
                    </div>
                </div>


            </div>


        </div>
    </div>
    <div class="card card-default" style="position: relative; top:-50px;">

        <div class="card-body1">
            <div class="collapse" id="collapse-nav-underline-justify">

            </div>
            <div class="border p-6">
                <ul class="nav nav-underline-active-primary mb-3 justify-content-between" id="pills-tab12" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-home-underline-primary"
                            role="tab" aria-controls="nav-tabs" aria-selected="true">personal Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile-Salary-primary"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Micro Loan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile-Attendence-primary"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Mortgage Loan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile-Monthly-Report"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Monthly Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile-expenses-Report"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Monthly Expences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile-staff-Report"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Staff </a>
                    </li>
                    {{-- @if ($RegisterStaffMembers->job_role == 'Collector')
                        <li class="nav-item">
                            <a class="nav-link" id="nav-profile-tab" data-toggle="pill"
                                href="#nav-profile-customers-primary" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Debtors in charge</a>
                        </li>
                    @endif --}}
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>
                </ul>
                <div class="tab-content mt-5" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home-underline-primary" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Account Settings -->
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h2 class="mb-5">BRANCH DETAILS</h2>
                                    </div>

                                    <div class="card-body">
                                        <form>
                                            <div class="row mb-2">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="firstName">Branch ID</label>

                                                        <h5 style="background-color: rgb(241, 226, 255) ; padding:10px;">
                                                            {{ $branch->brach_id }}</h5>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="lastName">Branch Name</label>
                                                        <h5 style="background-color: rgb(241, 226, 255) ; padding:10px;">
                                                            {{ $branch->branch_name }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="firstName">Branch City</label>

                                                        <h5 style="background-color: rgb(241, 226, 255) ; padding:10px;">
                                                            {{ $branch->city }}</h5>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="lastName">Branch Contact Number</label>
                                                        <h5 style="background-color: rgb(241, 226, 255) ; padding:10px;">
                                                            {{ $branch->contact_number }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="firstName">Branch Email</label>

                                                        <h5 style="background-color: rgb(241, 226, 255) ; padding:10px;">
                                                            {{ $branch->email }}</h5>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="lastName">Branch Address</label>
                                                        <h5 style="background-color: rgb(241, 226, 255) ; padding:10px;">
                                                            {{ $branch->address }}</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="userName">Description</label>
                                                <textarea class="form-control rounded-left" placeholder="" rows="10" id="jobDescription" cols="50">{{ $branch->description }}</textarea>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile-Salary-primary" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                            <table id="ongoinLoan" class="table table-hover table-product  nowrap" style="width: 100%; ">
                                <thead>
                                    <tr class="table-header">
                                        <th>Loan ID</th>
                                        <th>Name</th>
                                        <th>Interst</th>
                                        <th>Paid Interst</th>
                                        <th>Loan</th>
                                        <th>Paid</th>
                                        <th>Due</th>
                                        <th>Capital</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Loan ID</th>
                                        <th>Name</th>
                                        <th>Interst</th>
                                        <th>Paid Interst</th>
                                        <th>Loan</th>
                                        <th>Paid</th>
                                        <th>Due</th>
                                        <th>Capital</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>


                                        {{-- <th>Action</th>  --}}
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile-Attendence-primary" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                            <table id="mortgageLoan" class="table table-hover table-product  nowrap"
                                style="width: 100%; ">
                                <thead>
                                    <tr class="table-header">
                                        <th>Loan ID</th>
                                        <th>Name</th>
                                        <th>Interst</th>
                                        <th>Paid Interst</th>
                                        <th>Loan</th>
                                        <th>Paid</th>
                                        <th>Due</th>
                                        <th>Capital</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Loan ID</th>
                                        <th>Name</th>
                                        <th>Interst</th>
                                        <th>Paid Interst</th>
                                        <th>Loan</th>
                                        <th>Paid</th>
                                        <th>Due</th>
                                        <th>Capital</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>


                                        {{-- <th>Action</th>  --}}
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="nav-profile-Monthly-Report" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                            <table id="MortgageReport" class="table table-hover table-product  nowrap"
                                style="width: 100%; ">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Total Issued</th>
                                        <th>Total Collected</th>
                                        <th>Total Collected <br>Capital</th>
                                        <th>Total Collected <br>Interest</th>
                                        <th>Difference</th>
                                        <th>View Payment</th>
                                        <th>View Loan</th>
                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Date</th>
                                        <th>Total Issued</th>
                                        <th>Total Collected</th>
                                        <th>Total Collected <br>Capital</th>
                                        <th>Total Collected <br>Interest</th>
                                        <th>Difference</th>
                                        <th>View Payment</th>
                                        <th>View Loan</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="nav-profile-expenses-Report" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                    </div>
                    <div class="tab-pane fade" id="nav-profile-staff-Report" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                            <table id="staffmember" class="table table-hover table-product" style="width: 100%; ">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>address</th>
                                        <th>contact Number</th>
                                        <th>Branch</th>
                                        <th>job role</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    @if ($branch->location != null)
        <div class="card card-default" style="position: relative; top:-50px;">

            <div class="card-body1">
                <iframe src="{{ $branch->location }}" width="100%" height="450" style="border:0;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    @endif
    {{-- <div class="modal fade" id="exampleModalGrid" tabindex="-1" role="dialog" aria-labelledby="exampleModalGrid"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalGridTitle">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-box table-responsive">
                        <table id="example1" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Arrive</th>
                                    <th>Departure </th>

                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Date</th>
                                    <th>Arrive</th>
                                    <th>Departure </th>


                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}

    <div class="modal fade" id="exampleModallarge" tabindex="-1" role="dialog" aria-labelledby="exampleModalLarge"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgb(252, 97, 120); ">
                    <h3 class="modal-title" style="color: aliceblue" id="exampleModalLarge">EDIT STAFF DETAILS</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium" for="">ID</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account-card-details"
                                                id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="branchId"
                                            value="{{ $branch->brach_id }}">
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Branch</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-bank" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="branch_Name"
                                            value="{{ $branch->branch_name }}">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">City</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-city" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="city"
                                            value="{{ $branch->city }}">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Phone number</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-phone-classic" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="phone_number"
                                            value="{{ $branch->contact_number }}">
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
                                        <input type="email" class="form-control" id="emailAddress"
                                            value="{{ $branch->email }}">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Address</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-google-maps" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="address"
                                            value=" {{ $branch->address }}">
                                    </div>

                                </div>
                            </div>


                            <div class="col-xl-12">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Description</label>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control rounded-left" placeholder="" rows="10" id="description" cols="50">{{ $branch->description }}</textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-5">

                                    <button type="submit" id='submit' data-id="{{ $branch->id }}"
                                        class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h3>Total Payment: <span id="totalPayment">0.00</span></h3>
                        <br>
                        <div class="card-box table-responsive">
                            <table id="example1" class="table table-hover table-product  nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        {{-- <th>Loan Id</th> --}}
                                        <th>Loan Id</th>
                                        <th>Name</th>
                                        <th>Payment</th>
                                        <th>Nic</th>

                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        {{-- <th>Loan Id</th> --}}
                                        <th>Loan Id</th>
                                        <th>Name</th>
                                        <th>Payment</th>
                                        <th>Nic</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h3>Total Payment: <span id="totalPaymentDailyCollection">0.00</span></h3>
                        <br>
                        <div class="card-box table-responsive">
                            <table id="dailyCollectionReport" class="table table-hover table-product  nowrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Loan Id</th>
                                        <th>Name</th>
                                        <th>Payment</th>
                                        <th>Nic</th>

                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Loan Id</th>
                                        <th>Name</th>
                                        <th>Payment</th>
                                        <th>Nic</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>

        </div>
    </div>
@endsection
@include('layout.footerlink')


<script>
    $(document).ready(function() {
        var branch_Id = '{{ $branch->id }}';
        $(document).on('click', '#submit', function(event) {
            var dataIdValue = $(this).data("id");
            var branchId = $('#branchId').val()
            var address = $('#address').val()
            var phone = $('#phone_number').val()
            var city = $('#city').val()
            var emailAddress = $('#emailAddress').val()
            var branch_Name = $('#branch_Name').val()
            var description = $('#description').val()


            var isValid = true;
            var errorMessage = '';

            // Perform individual validation checks for each input field
            if (branchId.trim() === '') {
                errorMessage += 'Branch Id is required.<br>';
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
            if (city.trim() === "") {
                errorMessage += 'City is required.<br>';
                isValid = false;
            }
            if (emailAddress.trim() === "") {
                errorMessage += 'Email is required.<br>';
                isValid = false;
            }
            if (branch_Name.trim() === "") {
                errorMessage += 'Branch Name is required.<br>';
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
                formData.append('dataIdValue', dataIdValue);
                formData.append('branch_Name', branch_Name);
                formData.append('address', address);
                formData.append('email', emailAddress);
                formData.append('phone', phone);
                formData.append('branchId', branchId);
                formData.append('city', city);
                formData.append('description', description);


                $.ajax({
                    url: "{{ route('update.branch-Details') }}",
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

        $('#ongoinLoan').DataTable({
            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            processing: true,
            info: true,
            responsive: true,
            order: [
                [0, 'desc']
            ],
            lengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
            ],
            ajax: "{{ url('get-branch-micro-Loan') }}" + '/' + branch_Id,
            createdRow: function(row, data, dataIndex) {
                console.log(data.Previousoutstandingloans)
                endDate = data.end_date;
                var today = new Date();
                today.setHours(0, 0, 0, 0);
                formattedToday = today.toISOString().slice(0, 10);

                if (data.id === null) {
                    $(row).hide();
                } else if (data.loan_status === 2) {
                    $(row).addClass('green-row');
                }
            },
            rowCallback: function(row, data, index) {
                if (data.loan_status === 2) {
                    $(row).find('td').css('background-color', '#42b883').css('color', 'white');
                }
                if (data.loan_status === 1) {
                    var rowEndDate = new Date(data.end_date);
                    if (rowEndDate < new Date(formattedToday)) {
                        $(row).find('td').css('background-color', 'red').css('color', 'white');
                    }
                }

            },
            columns: [{
                    data: 'CustomLoanId',
                    name: 'CustomLoanId'
                },
                {
                    data: 'fullname',
                    name: 'fullname'
                },
                {
                    data: 'totalAmount',
                    name: 'totalAmount',
                    render: function(data, type, row, meta) {
                        var interest_schema = row.interest_schema;
                        interestSc = interest_schema;
                        const EndDate = new Date(row.end_date);
                        var sum_interest_amount = parseInt(row.sum_interest_amount);
                        const StartDate = new Date(row.start_date);
                        var penalty_interest = parseInt(row.penaltyInterest);
                        var interest_amount = parseInt(row.interest_amount);
                        const today = new Date();
                        var loan_status = row.loan_status;
                        const complete_date = new Date(row.loan_complete_date);
                        var maximum_amount = parseInt(row.capital_amount);

                        var totalAmount = parseInt(row.totalAmount);
                        var interest_rate = parseInt(row.interest_rate);
                        const interest = interest_rate;
                        var result = '';
                        var result2 = '';
                        var resultCount = 0;
                        if (interest_schema == 'For Each Months') {
                            var timeDifferent = '';
                            if (loan_status === 2) {
                                timeDifferent = complete_date;
                            } else {
                                timeDifferent = today;
                            }
                            while (StartDate <= timeDifferent) {
                                resultCount++;
                                var amountInterest = maximum_amount + (maximum_amount *
                                    interest_rate / 100);
                                result = amountInterest.toFixed(2);
                                result2 = amountInterest + penalty_interest;
                                // totalAmountAccordingTime = amountInterest;
                                interest_rate += interest
                                StartDate.setDate(StartDate.getDate() + 30);

                            }
                            if (sum_interest_amount > 0) {
                                if (penalty_interest > 0) {
                                    return (penalty_interest + (result2 - maximum_amount)) -
                                        sum_interest_amount;
                                } else {
                                    return (result - maximum_amount) - sum_interest_amount;
                                }
                            } else {
                                if (penalty_interest > 0) {
                                    return (penalty_interest + result2) - maximum_amount;
                                } else {
                                    return result - maximum_amount;
                                }
                            }

                        }
                        if (interest_schema == 'Daily') {
                            var timeDiff = '';
                            if (loan_status === 2) {
                                timeDiff = complete_date.getTime() - StartDate.getTime();
                            } else {
                                timeDiff = today.getTime() - StartDate.getTime();
                            }

                            const daysDiff = Math.floor(timeDiff / 86400000);
                            var interest_rate_for_date = (interest_rate / 30) * daysDiff;
                            amountInterestForDate = maximum_amount + (maximum_amount *
                                interest_rate_for_date / 100);
                            result = amountInterestForDate.toFixed(3)
                            var interst_amount = result - maximum_amount
                            var currentInterest = interst_amount - sum_interest_amount

                            if (sum_interest_amount > 0) {
                                if (penalty_interest > 0) {
                                    var currentInterestWithPenalty = currentInterest +
                                        penalty_interest
                                    return currentInterestWithPenalty.toFixed(3);
                                } else {
                                    return currentInterest.toFixed(3);
                                }

                                // return interest_amount
                            } else {
                                if (penalty_interest > 0) {
                                    return interst_amount + penalty_interest;

                                } else {
                                    return interst_amount.toFixed(3);
                                }

                            }


                        } else {
                            return totalAmount - maximum_amount;
                        }

                    }
                },
                {
                    data: 'sum_interest_amount',
                    name: 'sum_interest_amount'
                },
                {
                    data: 'totalAmount',
                    name: 'totalAmount',
                    render: function(data, type, row, meta) {
                        var interest_schema = row.interest_schema;
                        var Previousoutstandingloans = parseFloat(row.Previousoutstandingloans);
                        var interest_amount = parseInt(row.interest_amount);
                        interestSc = interest_schema;
                        const EndDate = new Date(row.end_date);
                        const StartDate = new Date(row.start_date);
                        const today = new Date();
                        var maximum_amount = parseInt(row.capital_amount);
                        var totalAmount = parseInt(row.totalAmount);
                        var penalty_interest = parseInt(row.penaltyInterest);
                        var interest_rate = parseInt(row.interest_rate);
                        var loan_status = row.loan_status;
                        const complete_date = new Date(row.loan_complete_date);
                        const interest = interest_rate;
                        var result = '';
                        var result2 = '';
                        var result3 = '';
                        var amountInterestWithPreviousWithPenalty = '';
                        var resultWithIntersetPaymentWithPenalty = '';
                        var resultWithIntersetPayment = '';
                        var resultCount = 0;
                        if (interest_schema == 'For Each Months') {
                            var timeDifferent = '';
                            if (loan_status === 2) {
                                timeDifferent = complete_date;
                            } else {
                                timeDifferent = today;
                            }
                            var amountInterestWithPrevious = " "
                            while (StartDate <= timeDifferent) {
                                resultCount++;
                                var amountInterest = maximum_amount + (maximum_amount *
                                    interest_rate / 100);
                                amountInterestWithPrevious = amountInterest +
                                    Previousoutstandingloans;
                                result = '(' + interest_rate + ')%' + " " +
                                    amountInterestWithPrevious.toFixed(2) + '\n';
                                amountInterestWithPreviousWithPenalty =
                                    amountInterestWithPrevious + penalty_interest
                                result4 = '(' + interest_rate + ')%' + " " +
                                    amountInterestWithPreviousWithPenalty.toFixed(2) + '\n';

                                resultWithIntersetPayment = amountInterestWithPrevious -
                                    interest_amount;
                                result2 = '(' + interest_rate + ')%' + " " +
                                    resultWithIntersetPayment.toFixed(2) + '\n';

                                resultWithIntersetPaymentWithPenalty =
                                    resultWithIntersetPayment + penalty_interest
                                result3 = '(' + interest_rate + ')%' + " " +
                                    resultWithIntersetPaymentWithPenalty.toFixed(2) + '\n';
                                interest_rate += interest
                                StartDate.setDate(StartDate.getDate() + 30);

                            }
                            totalAmountAccordingTime = amountInterestWithPrevious;
                            if (interest_amount > 0) {
                                if (penalty_interest > 0) {
                                    return result3
                                } else {
                                    return result2;
                                }


                            } else {
                                if (penalty_interest > 0) {
                                    return result4
                                } else {
                                    return result;
                                }
                            }
                            // return result;
                        }
                        if (interest_schema == 'Daily') {
                            var timeDiff = '';
                            if (loan_status === 2) {
                                timeDiff = complete_date.getTime() - StartDate.getTime();
                            } else {
                                timeDiff = today.getTime() - StartDate.getTime();
                            }
                            const daysDiff = Math.floor(timeDiff / 86400000);
                            const interest_rate_for_date = (interest_rate / 30) * daysDiff;
                            const amountInterestForDate = maximum_amount + (maximum_amount *
                                interest_rate_for_date / 100);
                            var amountInterestForDateWithPrevious = amountInterestForDate +
                                Previousoutstandingloans;
                            var amountInterestForDateWithPreviousWithPenalty =
                                amountInterestForDateWithPrevious + penalty_interest

                            if (interest_amount > 0) {
                                if (penalty_interest > 0) {
                                    var result = (amountInterestForDateWithPrevious +
                                        penalty_interest) - interest_amount
                                    return `(${interest_rate_for_date.toFixed(3)}%) ${result.toFixed(3)}`;
                                } else {
                                    var result = amountInterestForDateWithPrevious -
                                        interest_amount.toFixed(3)
                                    return `(${interest_rate_for_date.toFixed(3)}%) ${result.toFixed(3)}`;
                                }

                            } else {
                                if (penalty_interest > 0) {
                                    return `(${interest_rate_for_date.toFixed(3)}%) ${amountInterestForDateWithPreviousWithPenalty.toFixed(3)}`;

                                } else {
                                    return `(${interest_rate_for_date.toFixed(3)}%) ${amountInterestForDateWithPrevious.toFixed(3)}`;
                                }

                            }



                        }
                        if (interest_amount > 0) {
                            return (totalAmount + Previousoutstandingloans) - interest_amount;
                        } else {
                            return (totalAmount + Previousoutstandingloans);
                        }

                    }
                },
                // {
                //     data: 'id',
                //     name: 'balance',
                //     render: function(data, type, row, meta) {
                //         var total_amount = parseInt(row.totalAmount);
                //         var due_amount = parseInt(row.due_amount);
                //         var paid_amount = total_amount - due_amount;
                //         return paid_amount;
                //     }
                // },
                {
                    data: 'pay_amount',
                    name: 'pay_amount'
                },
                {
                    data: 'due_amount',
                    name: 'due_amount',
                    render: function(data, type, row, meta) {
                        var Previousoutstandingloans = parseFloat(row.Previousoutstandingloans);
                        var interest_schema = row.interest_schema;
                        var due_amount = parseInt(row.due_amount);
                        const EndDate = new Date(row.end_date);
                        const StartDate = new Date(row.start_date);
                        var loan_status = row.loan_status;
                        const complete_date = new Date(row.loan_complete_date);
                        const today = new Date();
                        var maximum_amount = parseInt(row.capital_amount);
                        var totalAmount = parseInt(row.totalAmount);
                        var interest_rate = parseInt(row.interest_rate);
                        var sum_pay_amount = parseInt(row.sum_pay_amount);
                        var penalty_interest = parseInt(row.penaltyInterest);
                        const interest = interest_rate;
                        var result = '';
                        var resultCount = 0;
                        var dueWithPenalty = '';
                        if (interest_schema == 'For Each Months') {
                            var timeDifferent = '';
                            if (loan_status === 2) {
                                timeDifferent = complete_date;
                            } else {
                                timeDifferent = today;
                            }
                            while (StartDate <= timeDifferent) {
                                resultCount++;
                                var amountInterest = maximum_amount + (maximum_amount *
                                    interest_rate / 100);
                                var amountInterestWithPrevious = amountInterest +
                                    Previousoutstandingloans;
                                result = amountInterestWithPrevious.toFixed(2);
                                var resultWithPanelty = amountInterestWithPrevious +
                                    penalty_interest;
                                // totalAmountAccordingTime = amountInterestWithPrevious;
                                interest_rate += interest
                                StartDate.setDate(StartDate.getDate() + 30);

                            }
                            if (penalty_interest > 0) {
                                return (resultWithPanelty) - sum_pay_amount;
                            } else {
                                return result - sum_pay_amount;
                            }

                        }
                        if (interest_schema == 'Daily') {
                            var timeDiff = '';
                            if (loan_status === 2) {
                                timeDiff = complete_date.getTime() - StartDate.getTime();
                            } else {
                                timeDiff = today.getTime() - StartDate.getTime();
                            }
                            const daysDiff = Math.floor(timeDiff / 86400000);
                            var interest_rate_for_date = (interest_rate / 30) * daysDiff;
                            var total_amount = parseInt(row.totalAmount);

                            var due_amount = parseInt(row.due_amount);
                            var paid_amount = total_amount - due_amount;
                            amountInterestForDate = maximum_amount + (maximum_amount *
                                interest_rate_for_date / 100);
                            var amountInterestForDateWithPrevious = amountInterestForDate +
                                Previousoutstandingloans;
                            var dueAmount = amountInterestForDateWithPrevious - sum_pay_amount;
                            if (penalty_interest > 0) {
                                dueWithPenalty = dueAmount + penalty_interest
                                return dueWithPenalty.toFixed(3);
                            } else {
                                return dueAmount.toFixed(3);
                            }

                            // return amountInterestForDateWithPrevious.toFixed(3);


                        } else {
                            return due_amount;
                        }

                    }
                },

                {
                    data: 'maximum_amount',
                    name: 'maximum_amount'
                },

                {
                    data: 'start_date',
                    name: 'start_date'
                },

                {
                    data: 'end_date',
                    name: 'end_date'
                },

                {
                    data: 'customer_id',
                    name: 'id',
                    render: function(data, type, row) {
                        var action = '<td>' +
                            '<div class="dropdown">' +
                            '<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>' +
                            '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">' +
                            '<a class="dropdown-item  view-profile" data-id="' + data +
                            '">View</a>' +
                            '<a class="dropdown-item  payment-history" data-id="' +
                            `${row.id}` +
                            '">Payment History</a>' +
                            '</div>' +
                            '</div>' +
                            '</td>';

                        return action;
                    }
                },



            ]
        });




        $('#mortgageLoan').DataTable({
            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            processing: true,
            info: true,
            responsive: true,
            order: [
                [0, 'desc']
            ],
            lengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
            ],
            ajax: "{{ url('get-branch-mortgage-Loan') }}" + '/' + branch_Id,
            createdRow: function(row, data, dataIndex) {
                console.log(data.Previousoutstandingloans)
                endDate = data.end_date;
                var today = new Date();
                today.setHours(0, 0, 0, 0);
                formattedToday = today.toISOString().slice(0, 10);

                if (data.id === null) {
                    $(row).hide();
                } else if (data.loan_status === 2) {
                    $(row).addClass('green-row');
                }
            },
            rowCallback: function(row, data, index) {
                if (data.loan_status === 2) {
                    $(row).find('td').css('background-color', '#42b883').css('color', 'white');
                }
                if (data.loan_status === 1) {
                    var rowEndDate = new Date(data.end_date);
                    if (rowEndDate < new Date(formattedToday)) {
                        $(row).find('td').css('background-color', 'red').css('color', 'white');
                    }
                }

            },
            columns: [{
                    data: 'CustomLoanId',
                    name: 'CustomLoanId'
                },
                {
                    data: 'fullname',
                    name: 'fullname'
                },
                {
                    data: 'totalAmount',
                    name: 'totalAmount',
                    render: function(data, type, row, meta) {
                        var interest_schema = row.interest_schema;
                        interestSc = interest_schema;
                        const EndDate = new Date(row.end_date);
                        var sum_interest_amount = parseInt(row.sum_interest_amount);
                        const StartDate = new Date(row.start_date);
                        var penalty_interest = parseInt(row.penaltyInterest);
                        var interest_amount = parseInt(row.interest_amount);
                        const today = new Date();
                        var loan_status = row.loan_status;
                        const complete_date = new Date(row.loan_complete_date);
                        var maximum_amount = parseInt(row.capital_amount);

                        var totalAmount = parseInt(row.totalAmount);
                        var interest_rate = parseInt(row.interest_rate);
                        const interest = interest_rate;
                        var result = '';
                        var result2 = '';
                        var resultCount = 0;
                        if (interest_schema == 'For Each Months') {
                            var timeDifferent = '';
                            if (loan_status === 2) {
                                timeDifferent = complete_date;
                            } else {
                                timeDifferent = today;
                            }
                            while (StartDate <= timeDifferent) {
                                resultCount++;
                                var amountInterest = maximum_amount + (maximum_amount *
                                    interest_rate / 100);
                                result = amountInterest.toFixed(2);
                                result2 = amountInterest + penalty_interest;
                                // totalAmountAccordingTime = amountInterest;
                                interest_rate += interest
                                StartDate.setDate(StartDate.getDate() + 30);

                            }
                            if (sum_interest_amount > 0) {
                                if (penalty_interest > 0) {
                                    return (penalty_interest + (result2 - maximum_amount)) -
                                        sum_interest_amount;
                                } else {
                                    return (result - maximum_amount) - sum_interest_amount;
                                }
                            } else {
                                if (penalty_interest > 0) {
                                    return (penalty_interest + result2) - maximum_amount;
                                } else {
                                    return result - maximum_amount;
                                }
                            }

                        }
                        if (interest_schema == 'Daily') {
                            var timeDiff = '';
                            if (loan_status === 2) {
                                timeDiff = complete_date.getTime() - StartDate.getTime();
                            } else {
                                timeDiff = today.getTime() - StartDate.getTime();
                            }

                            const daysDiff = Math.floor(timeDiff / 86400000);
                            var interest_rate_for_date = (interest_rate / 30) * daysDiff;
                            amountInterestForDate = maximum_amount + (maximum_amount *
                                interest_rate_for_date / 100);
                            result = amountInterestForDate.toFixed(3)
                            var interst_amount = result - maximum_amount
                            var currentInterest = interst_amount - sum_interest_amount

                            if (sum_interest_amount > 0) {
                                if (penalty_interest > 0) {
                                    var currentInterestWithPenalty = currentInterest +
                                        penalty_interest
                                    return currentInterestWithPenalty.toFixed(3);
                                } else {
                                    return currentInterest.toFixed(3);
                                }

                                // return interest_amount
                            } else {
                                if (penalty_interest > 0) {
                                    return interst_amount + penalty_interest;

                                } else {
                                    return interst_amount.toFixed(3);
                                }

                            }


                        } else {
                            return totalAmount - maximum_amount;
                        }

                    }
                },
                {
                    data: 'sum_interest_amount',
                    name: 'sum_interest_amount'
                },
                {
                    data: 'totalAmount',
                    name: 'totalAmount',
                    render: function(data, type, row, meta) {
                        var interest_schema = row.interest_schema;
                        var Previousoutstandingloans = parseFloat(row.Previousoutstandingloans);
                        var interest_amount = parseInt(row.interest_amount);
                        interestSc = interest_schema;
                        const EndDate = new Date(row.end_date);
                        const StartDate = new Date(row.start_date);
                        const today = new Date();
                        var maximum_amount = parseInt(row.capital_amount);
                        var totalAmount = parseInt(row.totalAmount);
                        var penalty_interest = parseInt(row.penaltyInterest);
                        var interest_rate = parseInt(row.interest_rate);
                        var loan_status = row.loan_status;
                        const complete_date = new Date(row.loan_complete_date);
                        const interest = interest_rate;
                        var result = '';
                        var result2 = '';
                        var result3 = '';
                        var amountInterestWithPreviousWithPenalty = '';
                        var resultWithIntersetPaymentWithPenalty = '';
                        var resultWithIntersetPayment = '';
                        var resultCount = 0;
                        if (interest_schema == 'For Each Months') {
                            var timeDifferent = '';
                            if (loan_status === 2) {
                                timeDifferent = complete_date;
                            } else {
                                timeDifferent = today;
                            }
                            var amountInterestWithPrevious = " "
                            while (StartDate <= timeDifferent) {
                                resultCount++;
                                var amountInterest = maximum_amount + (maximum_amount *
                                    interest_rate / 100);
                                amountInterestWithPrevious = amountInterest +
                                    Previousoutstandingloans;
                                result = '(' + interest_rate + ')%' + " " +
                                    amountInterestWithPrevious.toFixed(2) + '\n';
                                amountInterestWithPreviousWithPenalty =
                                    amountInterestWithPrevious + penalty_interest
                                result4 = '(' + interest_rate + ')%' + " " +
                                    amountInterestWithPreviousWithPenalty.toFixed(2) + '\n';

                                resultWithIntersetPayment = amountInterestWithPrevious -
                                    interest_amount;
                                result2 = '(' + interest_rate + ')%' + " " +
                                    resultWithIntersetPayment.toFixed(2) + '\n';

                                resultWithIntersetPaymentWithPenalty =
                                    resultWithIntersetPayment + penalty_interest
                                result3 = '(' + interest_rate + ')%' + " " +
                                    resultWithIntersetPaymentWithPenalty.toFixed(2) + '\n';
                                interest_rate += interest
                                StartDate.setDate(StartDate.getDate() + 30);

                            }
                            totalAmountAccordingTime = amountInterestWithPrevious;
                            if (interest_amount > 0) {
                                if (penalty_interest > 0) {
                                    return result3
                                } else {
                                    return result2;
                                }


                            } else {
                                if (penalty_interest > 0) {
                                    return result4
                                } else {
                                    return result;
                                }
                            }
                            // return result;
                        }
                        if (interest_schema == 'Daily') {
                            var timeDiff = '';
                            if (loan_status === 2) {
                                timeDiff = complete_date.getTime() - StartDate.getTime();
                            } else {
                                timeDiff = today.getTime() - StartDate.getTime();
                            }
                            const daysDiff = Math.floor(timeDiff / 86400000);
                            const interest_rate_for_date = (interest_rate / 30) * daysDiff;
                            const amountInterestForDate = maximum_amount + (maximum_amount *
                                interest_rate_for_date / 100);
                            var amountInterestForDateWithPrevious = amountInterestForDate +
                                Previousoutstandingloans;
                            var amountInterestForDateWithPreviousWithPenalty =
                                amountInterestForDateWithPrevious + penalty_interest

                            if (interest_amount > 0) {
                                if (penalty_interest > 0) {
                                    var result = (amountInterestForDateWithPrevious +
                                        penalty_interest) - interest_amount
                                    return `(${interest_rate_for_date.toFixed(3)}%) ${result.toFixed(3)}`;
                                } else {
                                    var result = amountInterestForDateWithPrevious -
                                        interest_amount.toFixed(3)
                                    return `(${interest_rate_for_date.toFixed(3)}%) ${result.toFixed(3)}`;
                                }

                            } else {
                                if (penalty_interest > 0) {
                                    return `(${interest_rate_for_date.toFixed(3)}%) ${amountInterestForDateWithPreviousWithPenalty.toFixed(3)}`;

                                } else {
                                    return `(${interest_rate_for_date.toFixed(3)}%) ${amountInterestForDateWithPrevious.toFixed(3)}`;
                                }

                            }



                        }
                        if (interest_amount > 0) {
                            return (totalAmount + Previousoutstandingloans) - interest_amount;
                        } else {
                            return (totalAmount + Previousoutstandingloans);
                        }

                    }
                },
                // {
                //     data: 'id',
                //     name: 'balance',
                //     render: function(data, type, row, meta) {
                //         var total_amount = parseInt(row.totalAmount);
                //         var due_amount = parseInt(row.due_amount);
                //         var paid_amount = total_amount - due_amount;
                //         return paid_amount;
                //     }
                // },
                {
                    data: 'pay_amount',
                    name: 'pay_amount'
                },
                {
                    data: 'due_amount',
                    name: 'due_amount',
                    render: function(data, type, row, meta) {
                        var Previousoutstandingloans = parseFloat(row.Previousoutstandingloans);
                        var interest_schema = row.interest_schema;
                        var due_amount = parseInt(row.due_amount);
                        const EndDate = new Date(row.end_date);
                        const StartDate = new Date(row.start_date);
                        var loan_status = row.loan_status;
                        const complete_date = new Date(row.loan_complete_date);
                        const today = new Date();
                        var maximum_amount = parseInt(row.capital_amount);
                        var totalAmount = parseInt(row.totalAmount);
                        var interest_rate = parseInt(row.interest_rate);
                        var sum_pay_amount = parseInt(row.sum_pay_amount);
                        var penalty_interest = parseInt(row.penaltyInterest);
                        const interest = interest_rate;
                        var result = '';
                        var resultCount = 0;
                        var dueWithPenalty = '';
                        if (interest_schema == 'For Each Months') {
                            var timeDifferent = '';
                            if (loan_status === 2) {
                                timeDifferent = complete_date;
                            } else {
                                timeDifferent = today;
                            }
                            while (StartDate <= timeDifferent) {
                                resultCount++;
                                var amountInterest = maximum_amount + (maximum_amount *
                                    interest_rate / 100);
                                var amountInterestWithPrevious = amountInterest +
                                    Previousoutstandingloans;
                                result = amountInterestWithPrevious.toFixed(2);
                                var resultWithPanelty = amountInterestWithPrevious +
                                    penalty_interest;
                                // totalAmountAccordingTime = amountInterestWithPrevious;
                                interest_rate += interest
                                StartDate.setDate(StartDate.getDate() + 30);

                            }
                            if (penalty_interest > 0) {
                                return (resultWithPanelty) - sum_pay_amount;
                            } else {
                                return result - sum_pay_amount;
                            }

                        }
                        if (interest_schema == 'Daily') {
                            var timeDiff = '';
                            if (loan_status === 2) {
                                timeDiff = complete_date.getTime() - StartDate.getTime();
                            } else {
                                timeDiff = today.getTime() - StartDate.getTime();
                            }
                            const daysDiff = Math.floor(timeDiff / 86400000);
                            var interest_rate_for_date = (interest_rate / 30) * daysDiff;
                            var total_amount = parseInt(row.totalAmount);

                            var due_amount = parseInt(row.due_amount);
                            var paid_amount = total_amount - due_amount;
                            amountInterestForDate = maximum_amount + (maximum_amount *
                                interest_rate_for_date / 100);
                            var amountInterestForDateWithPrevious = amountInterestForDate +
                                Previousoutstandingloans;
                            var dueAmount = amountInterestForDateWithPrevious - sum_pay_amount;
                            if (penalty_interest > 0) {
                                dueWithPenalty = dueAmount + penalty_interest
                                return dueWithPenalty.toFixed(3);
                            } else {
                                return dueAmount.toFixed(3);
                            }

                            // return amountInterestForDateWithPrevious.toFixed(3);


                        } else {
                            return due_amount;
                        }

                    }
                },

                {
                    data: 'maximum_amount',
                    name: 'maximum_amount'
                },

                {
                    data: 'start_date',
                    name: 'start_date'
                },

                {
                    data: 'end_date',
                    name: 'end_date'
                },

                {
                    data: 'customer_id',
                    name: 'id',
                    render: function(data, type, row) {
                        var action = '<td>' +
                            '<div class="dropdown">' +
                            '<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>' +
                            '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">' +
                            '<a class="dropdown-item  view-profile" data-id="' + data +
                            '">View</a>' +
                            '<a class="dropdown-item  payment-history" data-id="' +
                            `${row.id}` +
                            '">Payment History</a>' +
                            '</div>' +
                            '</div>' +
                            '</td>';

                        return action;
                    }
                },



            ]
        });

        $(document).on('click', '.payment-history', function() {
            var userId = $(this).data('id');

            var url = '/payment-history?id=' + userId;
            window.location.href = url;
        });



        var table = $('#MortgageReport').DataTable({
            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            processing: true,
            info: true,
            lengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
            ],
            ajax: "{{ url('get-Mortgage-Monthly-Reprt-bybranch') }}" + '/' + branch_Id,

            columns: [{
                    data: 'year',
                    name: 'year'
                },
                {
                    data: 'total_issue',
                    name: 'total_issue'
                },

                {
                    data: 'total_collect',
                    name: 'total_collect'
                },
                {
                    data: 'total_collect_capital',
                    name: 'total_collect_capital'
                },
                {
                    data: 'total_collect_interest',
                    name: 'total_collect_interest'
                },

                {
                    data: 'id',
                    name: 'view',
                    render: function(data, type, row, meta) {
                        var total_issue = row.total_issue
                        var total_collect = row.total_collect
                        return total_collect - total_issue;
                    }
                },
                {
                    data: 'year',
                    name: 'view',
                    render: function(data, type, row, meta) {
                        return `<button type="button" class="btn btn-outline-primary view-btn" data-toggle="modal" data-target=".bd-example-modal-lg" data-id="${data}" style="height:32px; margin:0px;">view</button>`;
                    }
                },
                {
                    data: 'year',
                    name: 'view',
                    render: function(data, type, row, meta) {
                        return `<button type="button" class="btn  btn-outline-success view_given_loan" data-toggle="modal" data-target=".bd-example-modal-lg2" data-id="${data}" style="height:32px; margin:0px;">view</button>`;
                    }
                },
            ],



        });

        $(document).on('click', '.view-btn', function() {
            var date = $(this).data('id');

            $.ajax({
                url: '/get-paied-amount-monthly-report-bybranch',

                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: {
                    'date': date,
                    'branch_Id': branch_Id
                },
                success: function(response) {
                    var data = response.data;
                    console.log(data);

                    var totalPayment = 0;
                    $.each(data, function(index, item) {
                        totalPayment += parseFloat(item.sum_payment);
                    });

                    // Update the total payment display
                    $('#totalPayment').text(totalPayment.toFixed(2));

                    // Destroy existing DataTable instance
                    var table = $('#example1').DataTable();
                    if ($.fn.DataTable.isDataTable('#example1')) {
                        table.destroy();
                    }

                    // Initialize DataTable
                    table = $('#example1').DataTable({
                        dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        buttons: ['csv', 'excel', 'pdf'],
                        order: [
                            [0, 'desc']
                        ],
                        lengthMenu: [
                            [5, 10, 25, 50, 100, 200, -1],
                            [5, 10, 25, 50, 100, 200, "All"]
                        ]
                    }).clear().draw();

                    // Add data to the DataTable
                    $.each(data, function(index, item) {
                        table.row.add([
                            // item.loan_id,
                            item.CustomLoanId,
                            item.fullname,
                            item.sum_payment,
                            item.total_Capital_amount,
                            item.total_interest_amount,
                        ]).draw();
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });

        });
        $(document).on('click', '.view_given_loan', function() {
            var date = $(this).data('id');

            $.ajax({
                url: '/get-capital-issued-monthly-bybranch',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: {
                    'date': date,
                    'branch_Id': branch_Id
                },
                success: function(response) {
                    var data = response.data;
                    console.log(data);

                    var totalPayment = 0;
                    $.each(data, function(index, item) {
                        totalPayment += parseFloat(item.maximum_amount);
                    });

                    // Update the total payment display
                    $('#totalPaymentDailyCollection').text(totalPayment.toFixed(2));

                    // Destroy existing DataTable instance
                    var table = $('#dailyCollectionReport').DataTable();
                    if ($.fn.DataTable.isDataTable('#dailyCollectionReport')) {
                        table.destroy();
                    }

                    // Initialize DataTable
                    table = $('#dailyCollectionReport').DataTable({
                        dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        buttons: ['csv', 'excel', 'pdf'],
                        order: [
                            [0, 'desc']
                        ],
                        lengthMenu: [
                            [5, 10, 25, 50, 100, 200, -1],
                            [5, 10, 25, 50, 100, 200, "All"]
                        ]
                    }).clear().draw();

                    // Add data to the DataTable
                    $.each(data, function(index, item) {
                        table.row.add([
                            item.CustomLoanId,
                            item.fullname,
                            item.start_date,
                            item.maximum_amount,
                        ]).draw();
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });


        });

        $('#staffmember').DataTable({
            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            processing: true,
            info: true,
            responsive: true,
            ajax: "{{ url('get-staff-list-byBranch') }}" + '/' + branch_Id,
            lengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
            ],

            columns: [{
                    data: 'proImages',
                    name: 'proImages',
                    render: function(data, type, row) {
                        if (Array.isArray(data) && data.length > 0) {
                            return '<img src="img/staff/profilePicture/' + data[0]
                                .staff_profile_img +
                                '" alt="Profile Image" style="height:80px ; width:80px;">';
                        } else {
                            return 'No Image';
                        }
                    }
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'address',
                    name: 'address'
                },
                {
                    data: 'phone_number',
                    name: 'phone_number'
                },
                {
                    data: 'branch_name',
                    name: 'branch_name'
                },
                {
                    data: 'job_role',
                    name: 'job_role'
                },

                {
                    data: 'date_of_joining',
                    name: 'date_of_joining',
                    // render: function(data, type, row) {
                    //     // Format the date using moment.js
                    //     return moment(data).format('YYYY-MM-DD');
                    // }
                },
                {
                    data: 'id',
                    name: 'id',
                    render: function(data, type, row) {
                        var action = '<td>' +
                            '<div class="dropdown">' +
                            '<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>' +
                            '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">' +
                            '<a class="dropdown-item  staff-view-profile" data-id="' + data +
                            '">View</a>' +
                            '<a class="dropdown-item delete-member" href="#" data-id="' + data +
                            '">Delete</a>' +
                            '</div>' +
                            '</div>' +
                            '</td>';

                        return action;
                    }
                },
            ],
            initComplete: function(settings, json) {
                console.log(json); // Log the data received from the server
            }
        });
        $(document).on('click', '.staff-view-profile', function() {
            var userId = $(this).data('id');

            var url = '/staff-profile-blade?id=' + userId;
            window.location.href = url;
        });

        $(document).on('click', '.delete-member', function() {
            var userId = $(this).data('id');

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('delete-staff-member') }}",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
                                .attr('content')
                        },
                        type: "POST",
                        data: JSON.stringify({
                            'userId': userId
                        }),
                        contentType: "application/json",
                        success: function(response) {
                            console.log(response)
                        },
                    });
                    swalWithBootstrapButtons.fire(
                        'Loan Delete!',
                        'Your Loan has been Deleted.',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })

        });

    });
</script>
