@extends('layout.layout')
@section('content')
    <div class="card card-default">
        <div class="card-header">
            <h2>Register the staff members</h2>
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Action
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink"
                    style="border-style: none">
                    <a type="button" type="button" class="btn bg-primary text-white btn-pill mb-3 mb-xxl-0 dropdown-item"
                        data-toggle="modal" data-target="#exampleModalForm" href="#">Ad Job Role</a>

                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-6">
                    <div class="mb-5">
                        <label class="text-dark font-weight-medium" for="">Name</label>
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
                        <label class="text-dark font-weight-medium">Address</label>
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
                        <label class="text-dark font-weight-medium">Mobile Number</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text mdi mdi-cellphone-iphone" id="basic-addon1"></span>
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
                        <label class="text-dark font-weight-medium" for="">Job Role</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text mdi mdi-briefcase-edit" id="basic-addon1"></span>
                            </div>
                            <select id="jobRole" class="form-control " name="jobRole" required>
                                <option value="" disabled selected>Select a Job Role</option>
                                @foreach ($jobRoles as $jobRole)
                                    <option value="{{ $jobRole->id }}"
                                        {{ old('branch') == $jobRole->id ? 'selected' : '' }}>
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
                                        {{ old('branch') == $branch->id ? 'selected' : '' }}>
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
                            <div class="upload__img-wrap"></div>
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
                            <textarea class="form-control rounded-left" placeholder="" rows="4" id="description" cols="50"></textarea>
                        </div>

                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="mb-5">

                        <button type="submit" id='submit' class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgb(185, 121, 245); ">
                    <h5 class="modal-title" id="exampleModalFormTitle" style="color:white;">Add New Job Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Job Role</label>
                            <input id="newJobRole" type="text" class="form-control " name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea class="form-control rounded-left" placeholder="" rows="4" id="jobDescription" cols="50"></textarea>
                        </div>
                        <button type="submit" id="jobRoleSubmit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>

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
        $(document).on('click', '#submit', function(event) {
            event.preventDefault()
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
                    url: "{{ route('store.staff-Member') }}",
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

        $(document).on('click', '#jobRoleSubmit', function(event) {
            event.preventDefault()
            var newJobRole = $('#newJobRole').val()
            var jobDescriptionText = $("#jobDescription").val();


            var isValid = true;
            var errorMessage = '';

            // Perform individual validation checks for each input field
            if (newJobRole.trim() === '') {
                errorMessage += 'Job Role is required.<br>';
                isValid = false;
            }

            // Add validation checks for other input fields
            // ...

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
                $.ajax({
                    url: "{{ route('store.jobRole') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    data: {
                        newJobRole: newJobRole,
                        jobDescriptionText: jobDescriptionText
                    },
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
