@extends('layout.layout')
@section('content')
    <div class="content-wrapper" style="position: relative; top:-50px;">
        <div class="content">
            <!-- Card Profile -->
            <div class="card card-default card-profile">
                <div class="card-header-bg" style="background-image: url(images/other/img4.jpg)"></div>

                <div class="card-body card-profile-body">
                    <div class="profile-avata">
                        @if (!empty($RegisterStaffMembers->proImages))
                            @if (isset($RegisterStaffMembers->proImages[0]))
                                <img class="rounded-circle"
                                    src="{{ asset('img/staff/profilePicture/' . $RegisterStaffMembers->proImages[0]->staff_profile_img) }}"
                                    alt="Avatar Image" style="width: 270px; position:relative; top:-50px;" />
                            @endif
                        @endif


                        <a class="h2 d-block mt-3 mb-2" href="#">{{ $RegisterStaffMembers->name }}</a>
                        <a class="d-block text-color" href="#">{{ $RegisterStaffMembers->email }}</a>
                    </div>

                    <ul class="nav nav-profile-follow">
                        @if ($RegisterStaffMembers->job_role == 'Collector')
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="h5 d-block">1503</span>
                                    <span class="text-color d-block">ONGOING</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="h5 d-block">2905</span>
                                    <span class="text-color d-block">COMPLETE</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="h5 d-block">1200</span>
                                    <span class="text-color d-block">OVER DUE</span>
                                </a>
                            </li>
                        @endif
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
                            role="tab" aria-controls="nav-profile" aria-selected="false">Salary Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile-Attendence-primary"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Attendence</a>
                    </li>
                    @if ($RegisterStaffMembers->job_role == 'Collector')
                        <li class="nav-item">
                            <a class="nav-link" id="nav-profile-tab" data-toggle="pill"
                                href="#nav-profile-customers-primary" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Debtors in charge</a>
                        </li>
                    @endif
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
                            <div class="col-xl-4" style="background-color: blueviolet">
                                <!-- Settings -->
                                <div class="card card-default" style="position: relative; top:30px;">
                                    <div class="card-header">
                                        <h2>CONTACT DETAILS</h2>
                                    </div>

                                    <div class="card-body pt-0">
                                        <ul class="nav nav-settings">
                                            <li class="nav-item">
                                                <a class="nav-link" href="user-profile-settings.html"
                                                    style="color: black; font-size:17px;">
                                                    <i class="mdi mdi-email mr-1"></i>{{ $RegisterStaffMembers->email }}
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="user-account-settings.html"
                                                    style="color: black; font-size:17px;">
                                                    <i
                                                        class="mdi mdi-cellphone-iphone mr-1"></i>{{ $RegisterStaffMembers->phone_number }}
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="user-planing-settings.html"style="color: black; font-size:17px;">
                                                    <i
                                                        class="mdi mdi-phone-classic mr-1"></i>{{ $RegisterStaffMembers->fix_phone_number }}
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="user-billing.html"
                                                    style="color: black; font-size:17px;">
                                                    <i
                                                        class="mdi mdi-map-marker mr-1"></i>{{ $RegisterStaffMembers->address }}
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <!-- Account Settings -->
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h2 class="mb-5">PROFESSIONAL DETAILS</h2>
                                    </div>

                                    <div class="card-body">
                                        <form>
                                            <div class="row mb-2">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="firstName">Role</label>

                                                        <h5>{{ $RegisterStaffMembers->job_role }}</h5>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="lastName">Branch</label>
                                                        <h5>{{ $RegisterStaffMembers->branch_name }}</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="userName">User name</label>
                                                <textarea class="form-control rounded-left" placeholder="" rows="10" id="jobDescription" cols="50">{{ $RegisterStaffMembers->description }}</textarea>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile-Salary-primary" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        <table id="salary" class="table table-hover table-product" style="width: 100%; ">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Salary</th>
                                    <th>Months</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>



                            </tbody>

                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-profile-Attendence-primary" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        <table id="attendence" class="table table-hover table-product" style="width: 100%; ">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Month</th>
                                    <th>Total Attendence</th>
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
    <div class="modal fade" id="exampleModalGrid" tabindex="-1" role="dialog" aria-labelledby="exampleModalGrid"
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
    </div>

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
                                    <label class="text-dark font-weight-medium" for="">Name</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="name"
                                            value="{{ $RegisterStaffMembers->name }}">
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
                                            value="{{ $RegisterStaffMembers->address }}">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Mobile Number</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-cellphone-iphone"
                                                id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="phone"
                                            value="{{ $RegisterStaffMembers->phone_number }}">
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
                                        <input type="text" class="form-control" id="Homephone"
                                            value="{{ $RegisterStaffMembers->fix_phone_number }}">
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
                                            value="{{ $RegisterStaffMembers->email }}">
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium" for="">Job Role</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-briefcase-edit"
                                                id="basic-addon1"></span>
                                        </div>
                                        <select id="jobRole" class="form-control " name="jobRole" required>
                                            <option value="" disabled selected>Select a Job Role</option>
                                            @foreach ($jobRoles as $jobRole)
                                                <option value="{{ $jobRole->id }}"
                                                    {{ $RegisterStaffMembers->jobRoleId == $jobRole->id ? 'selected' : '' }}>
                                                    {{ $jobRole->job_role }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium" for="">Branch</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-home" id="basic-addon1"></span>
                                        </div>
                                        <select id="branch" class="form-control " name="branch" required>
                                            <option value=" " disabled selected>Select a branch</option>
                                            @foreach ($branches as $branch)
                                                <option value="{{ $branch->id }}"
                                                    {{ $RegisterStaffMembers->branchId == $branch->id ? 'selected' : '' }}>
                                                    {{ $branch->branch_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div>


                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Date of joining the job</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi mdi-calendar" id="basic-addon1"></span>
                                        </div>
                                        <input type="date" class="form-control" id="date">
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label class="upload__btn">
                                                <p>Upload Profile image</p>
                                                <input type="file" multiple data-max_length="20" name='staffPropic[]'
                                                    class="upload__inputfile" />
                                            </label>
                                        </div>
                                        <div class="upload__img-wrap">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label class="upload__btn">
                                                <p>Upload CV as a PDF</p>
                                                <input type="file" multiple data-max_length="20" name='staffCVPdf[]'
                                                    class="upload__inputfile" accept="application/pdf" />
                                            </label>
                                        </div>
                                        <div class="upload__pdf-wrap"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-12">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Description</label>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control rounded-left" placeholder="" rows="10" id="description" cols="50">{{ $RegisterStaffMembers->description }}</textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-5">

                                    <button type="submit" id='submit' data-id="{{ $RegisterStaffMembers->id }}"
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

    jQuery(document).ready(function() {
        PdfUpload();
    });

    function PdfUpload() {
        var pdfWrap = "";
        var pdfArray = [];

        $(".upload__inputfile").each(function() {
            $(this).on("change", function(e) {
                pdfWrap = $(this).closest(".upload__box").find(".upload__pdf-wrap");
                var maxLength = $(this).attr("data-max_length");

                var files = e.target.files;
                var filesArr = Array.prototype.slice.call(files);
                var iterator = 0;
                filesArr.forEach(function(f, index) {
                    if (!f.type.match("application/pdf")) {
                        return;
                    }

                    if (pdfArray.length > maxLength) {
                        return false;
                    } else {
                        var len = 0;
                        for (var i = 0; i < pdfArray.length; i++) {
                            if (pdfArray[i] !== undefined) {
                                len++;
                            }
                        }
                        if (len > maxLength) {
                            return false;
                        } else {
                            pdfArray.push(f);

                            var pdfName = f.name;
                            var html =
                                "<div class='upload__pdf-box'><div data-file='" +
                                pdfName +
                                "' class='pdf-link'><a href='" +
                                URL.createObjectURL(f) +
                                "' target='_blank'>" +
                                pdfName +
                                "</a><div class='upload__pdf-close'></div></div></div>";
                            pdfWrap.append(html);
                            iterator++;
                        }
                    }
                });
            });
        });

        $("body").on("click", ".upload__pdf-close", function(e) {
            var file = $(this).parent().data("file");
            for (var i = 0; i < pdfArray.length; i++) {
                if (pdfArray[i].name === file) {
                    pdfArray.splice(i, 1);
                    break;
                }
            }
            $(this).parent().parent().remove();
        });
    }


    $(document).ready(function() {
        var staffMemberId = {{ $RegisterStaffMembers->id }};
        $(document).on('click', '#submit', function(event) {
            var dataIdValue = $(this).data("id");
            var name = $('#name').val()
            var address = $('#address').val()
            var phone = $('#phone').val()
            var Homephone = $('#Homephone').val()
            var emailAddress = $('#emailAddress').val()
            var jobRole = $('#jobRole').val()
            var branch = $('#branch').val()
            var date = $('#date').val()
            var description = $('#description').val()

            var staffPropic = $('input[name="staffPropic[]"]').prop('files');
            var staffCVPdf = $('input[name="staffCVPdf[]"]').prop('files');


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
            if (jobRole === "") {
                errorMessage += 'Job Role is required.<br>';
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
                formData.append('name', name);
                formData.append('address', address);
                formData.append('Homephone', Homephone);
                formData.append('email', emailAddress);
                formData.append('phone', phone);
                formData.append('jobRole', jobRole);
                formData.append('branch', branch);
                formData.append('date', date);
                formData.append('description', description);

                $.each(staffPropic, function(i, file) {
                    formData.append('staffPropic[]', file);
                });
                $.each(staffCVPdf, function(i, file) {
                    formData.append('staffCVPdf[]', file);
                });

                $.ajax({
                    url: "{{ route('update.staff-Member') }}",
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

        $('#salary').DataTable({
            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            processing: true,
            info: true,
            responsive: true,
            ajax: {
                url: "{{ route('get-staff-salary', ['id' => 'staffMemberId']) }}"
                    .replace('staffMemberId', staffMemberId),
                dataSrc: 'data', // Assuming your data is in a 'data' property
            },
            lengthMenu: [
                [5, 10, 25, 50, 100, 200, -1],
                [5, 10, 25, 50, 100, 200, "All"]
            ],

            columns: [{
                    data: 'proImages',
                    name: 'proImages',
                    render: function(data, type, row) {
                        if (Array.isArray(data) && data.length > 0) {
                            // Construct the image tag with specified height and width
                            return '<img src="img/staff/profilePicture/' + data[0]
                                .staff_profile_img +
                                '" alt="Profile Image" style="height:80px ; width:80px;">';
                        } else {
                            return 'No Image';
                        }
                    }
                },

                {
                    data: 'staff_name',
                    name: 'staff_name'
                },
                {
                    data: 'amount',
                    name: 'amount'
                },
                {
                    data: 'date',
                    name: 'date'
                },

                {
                    data: 'id',
                    name: 'id',
                    render: function(data, type, row) {
                        var action = '<td>' +
                            '<div class="dropdown">' +
                            '<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>' +
                            '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">' +
                            '<a class="dropdown-item  delete" data-id="' + data +
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



        $('#attendence').DataTable({
            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            processing: true,
            info: true,
            responsive: true,
            ajax: {
                url: "{{ route('get-staff-attendence', ['id' => 'staffMemberId']) }}"
                    .replace('staffMemberId', staffMemberId),
                dataSrc: 'data', // Assuming your data is in a 'data' property
            },
            lengthMenu: [
                [5, 10, 25, 50, 100, 200, -1],
                [5, 10, 25, 50, 100, 200, "All"]
            ],

            columns: [{
                    data: 'proImages',
                    name: 'proImages',
                    render: function(data, type, row) {
                        if (Array.isArray(data) && data.length > 0) {
                            // Construct the image tag with specified height and width
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
                    data: 'month_year',
                    name: 'month_year'
                },
                {
                    data: 'total_attendance',
                    name: 'total_attendance'
                },

                {
                    data: 'staff_id',
                    name: 'staff_id',
                    render: function(data, type, row) {
                        var action = '<td>' +
                            '<div class="dropdown">' +
                            '<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>' +
                            '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">' +
                            '<a class="dropdown-item  viewAttendence" data-toggle="modal" data-target="#exampleModalGrid"  data-id="' +
                            data +
                            '">Veiw</a>' +
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




        $(document).on('click', '.delete', function() {
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
                        url: "{{ route('delete-staff-salary') }}",
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


        $(document).on('click', '.viewAttendence', function() {
            var Attendid = $(this).data('id');

            $.ajax({
                url: '/get-each-daily-attendence',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: {
                    'Attendid': Attendid
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

                    $('#example1').DataTable({
                            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                                "<'row'<'col-sm-12'tr>>" +
                                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                            buttons: [
                                'excel', 'pdf', 'print'
                            ]
                        }

                    ).clear().draw();
                    $.each(data, function(index, item) {
                        $('#example1').DataTable().row.add([
                            item.date,
                            item.arrival,
                            item.departure,


                        ]).draw();
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);

                }
            });

        });

    });
</script>
