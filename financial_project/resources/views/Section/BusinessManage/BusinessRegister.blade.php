@extends('layout.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Products Inventory</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Action
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink"
                            style="border-style: none">
                            <a type="button" type="button"
                                class="btn bg-primary text-white btn-pill mb-3 mb-xxl-0 dropdown-item" data-toggle="modal"
                                data-target="#exampleModallarge" href="#">Setup-Loan</a>

                        </div>
                    </div>
                </div>
                <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                    <table id="example" class="table table-hover table-product" style="width: 100%; ">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Company Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Contact Number</th>
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
    <div class="modal fade" id="exampleModallarge" tabindex="-1" role="dialog" aria-labelledby="exampleModalLarge"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLarge">Register The Business</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="mb-5">
                                <label class="text-dark font-weight-medium" for="">Company Name</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-bank" id="basic-addon1"></span>
                                    </div>
                                    <input type="text" class="form-control" id="name">
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="mb-5">
                                <label class="text-dark font-weight-medium">Company Address</label>
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
                                <label class="text-dark font-weight-medium">Contact Number</label>
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
                                <label class="text-dark font-weight-medium">Business Registration Number</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-tooltip-edit" id="basic-addon1"></span>
                                    </div>
                                    <input type="text" class="form-control" id="br">
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
                                <label class="text-dark font-weight-medium">Date of Start</label>
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
                                            <p>Upload Logo image</p>
                                            <input type="file" multiple data-max_length="20" name='businessLogo[]'
                                                class="upload__inputfile" />
                                        </label>
                                    </div>
                                    <div class="upload__img-wrap"></div>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                    <button type="button" id="setupLoan" class="btn btn-primary btn-pill">Save Changes</button>
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
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="mb-5">
                                <label class="text-dark font-weight-medium" for="">Company Name</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-bank" id="basic-addon1"></span>
                                    </div>
                                    <input type="text" class="form-control" id="name">
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="mb-5">
                                <label class="text-dark font-weight-medium">Company Address</label>
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
                                <label class="text-dark font-weight-medium">Contact Number</label>
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
                                <label class="text-dark font-weight-medium">Business Registration Number</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-tooltip-edit" id="basic-addon1"></span>
                                    </div>
                                    <input type="text" class="form-control" id="br">
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
                                <label class="text-dark font-weight-medium">Date of Start</label>
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
                                            <p>Upload Logo image</p>
                                            <input type="file" multiple data-max_length="20" name='businessLogo[]'
                                                class="upload__inputfile" />
                                        </label>
                                    </div>
                                    <div class="upload__img-wrap"></div>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
        $(document).on('click', '#submit', function(event) {
            event.preventDefault()
            var name = $('#name').val()
            var address = $('#address').val()
            var phone = $('#phone').val()
            var br = $('#br').val()
            var emailAddress = $('#emailAddress').val()
            var date = $('#date').val()
            var description = $('#description').val()
            var businessLogo = $('input[name="businessLogo[]"]').prop('files');

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
                formData.append('br', br);
                formData.append('email', emailAddress);
                formData.append('phone', phone);
                formData.append('date', date);
                formData.append('description', description);

                $.each(businessLogo, function(i, file) {
                    formData.append('businessLogo[]', file);
                });

                $.ajax({
                    url: "{{ route('store.business') }}",
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
        $('#example').DataTable({
            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            responsive: true,
            processing: true,
            scrollX: true,
            ajax: "{{ route('get-business-details') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'business_name',
                    name: 'business_name'
                },
                {
                    data: 'address',
                    name: 'address'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'phone_number',
                    name: 'phone_number'
                },


                {
                    data: 'id',
                    name: 'id',
                    render: function(data, type, row, meta) {
                        return `<button type="button" class="btn btn-outline-danger update" data-toggle="modal" data-target=".bd-example-modal-lg" data-id="${data}" style="height:32px; margin:0px;">view</button>`;
                    }
                },

            ]
        });

        $(document).on('click', '.update', function() {
            var id = $(this).data('id');
            
        })
    });
</script>
