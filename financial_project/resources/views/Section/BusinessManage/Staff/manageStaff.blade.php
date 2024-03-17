@extends('layout.layout')
@section('content')
    <div class="card card-default">
        <div class="card-header">
            <h2>Justified Tabs</h2>

            <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-nav-underline-justify" role="button"
                aria-expanded="false" aria-controls="collapse-nav-underline-justify"> </a>

        </div>
        <div class="card-body">
            <div class="collapse" id="collapse-nav-underline-justify">
            </div>
            <div class="border p-6">
                <ul class="nav nav-underline-active-primary mb-3 justify-content-between" id="pills-tab12" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-home-underline-primary"
                            role="tab" aria-controls="nav-tabs" aria-selected="true">STAFF LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile-salary-primary"
                            role="tab" aria-controls="nav-profile" aria-selected="false">SALARY LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile-underline-primary"
                            role="tab" aria-controls="nav-profile" aria-selected="false">SAMPLE</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#" role="tab"
                            aria-controls="nav-profile" aria-selected="false"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#" role="tab"
                            aria-controls="nav-profile" aria-selected="false"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#" role="tab"
                            aria-controls="nav-profile" aria-selected="false"></a>
                    </li>
                </ul>
                <div class="tab-content mt-5" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home-underline-primary" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                            <table id="example" class="table table-hover table-product" style="width: 100%; ">
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
                    <div class="tab-pane fade" id="nav-profile-salary-primary" role="tabpanel"
                        aria-labelledby="nav-profile-tab">

                        <table id="salary" class="table table-hover table-product" style="width: 100%; ">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Salary</th>
                                    <th>Number of Months</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>



                            </tbody>

                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-profile-underline-primary" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        Accusamus cumque unde autem asperiores voluptatem aut quidem cum. Ullam quas alias repellat ipsum
                        exercitationem
                        blanditiis explicabo, distinctio qui nam, omnis nisi suscipit ipsa, magnam aperiam? Recusandae at,
                        quae rem
                        quaerat
                        officiis perferendis hic? Pariatur minima iusto voluptate qui.
                    </div>
                </div>

            </div>
        </div>
    </div>




    <div class="modal fade" id="AttendanceModalForm" tabindex="-1" role="dialog"
        aria-labelledby="AttendanceModalFormTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgb(252, 97, 120);">
                    <h5 class="modal-title" id="AttendanceModalFormTitle" style="color:white;">Attendance Mark</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        @csrf
                        <div class="form-group">
                            <input id="staff_Id" type="text" class="form-control " style="display: none"
                                name="name" required autocomplete="name" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date</label>
                            <input id="attendence_date" type="date" class="form-control " name="attendence_date"
                                required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Arrival Time</label>
                            <input id="arrival_time" type="time" class="form-control " name="arrival_time" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Departure</label>
                            <input id="departure_time" type="time" class="form-control " name="departure_time"
                                required>
                        </div>
                        <div class="form-check pl-0">
                            <label class="control control-checkbox">Check me out
                                <input type="checkbox" checked="checked" />
                                <div class="control-indicator"></div>
                            </label>
                        </div>
                        <button type="submit" id="submitAttendence" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgb(252, 97, 120);">
                    <h5 class="modal-title" id="exampleModalFormTitle" style="color:white;">Add Salary</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        @csrf
                        <div class="form-group">
                            <input id="staffId" type="text" class="form-control " style="display: none"
                                name="name" required autocomplete="name" autofocus>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date</label>
                            <input id="submitDate" type="date" class="form-control " name="submitDate" required
                                autofocus>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Amount</label>
                            <input id="amount" type="text" class="form-control " name="amount" required>
                        </div>
                        <div class="form-check pl-0">
                            <label class="control control-checkbox">Check me out
                                <input type="checkbox" checked="checked" />
                                <div class="control-indicator"></div>
                            </label>
                        </div>
                        <button type="submit" id="submitSalary" class="btn btn-primary">Submit</button>
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
    $(document).ready(function() {
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
            info: true,
            ajax: {
                url: "{{ route('get-staff-list') }}",
                dataSrc: 'data', // Assuming your data is in a 'data' property
            },
            lengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
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
                            '<a class="dropdown-item delete-member" href="#" data-id="' + data +
                            '">Delete</a>' +
                            '<a class="dropdown-item ad-salary" data-toggle="modal" data-id="' +
                            data + '" data-target="#exampleModalForm">Ad Salary</a>' +
                            '<a class="dropdown-item attendance" data-toggle="modal" data-id="' +
                            data + '" data-target="#AttendanceModalForm">Mark Attendance</a>' +
                            '<a class="dropdown-item  view-profile" data-id="' + data +
                            '">View</a>' +
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

        $('#salary').DataTable({
            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            responsive: true,
            processing: true,
            scrollX: true,
            info: true,
            ajax: {
                url: "{{ route('get-staff-total-salary') }}",
                dataSrc: 'data', // Assuming your data is in a 'data' property
            },
            lengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
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
                    data: 'staff_id',
                    name: 'staff_id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'total_salary',
                    name: 'total_salary'
                },
                {
                    data: 'number_of_months',
                    name: 'number_of_months'
                },

                {
                    data: 'staff_id',
                    name: 'staff_id',
                    render: function(data, type, row) {
                        var action = '<td>' +
                            '<div class="dropdown">' +
                            '<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>' +
                            '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">' +
                            '<a class="dropdown-item  view-profile" data-id="' + data +
                            '">View</a>' +
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



        // $(document).on('change', '.switch-input', function() {
        //     var userid = $(this).data('userid');
        //     var status;
        //     if ($(this).prop('checked')) {
        //         status = 1;


        //     } else {
        //         status = 0;


        //     }

        // Log the status to the browser's console

        //     $.ajax({
        //         url: "{{ route('edit-user-status') }}",
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         type: 'POST',
        //         data: {
        //             status: status,
        //             userid: userid
        //         },
        //         success: function(data) {
        //             Swal.fire(
        //                 'Good job!',
        //                 data.message,
        //                 'success'
        //             );
        //         },
        //         error: function(xhr, textStatus, errorThrown) {
        //             console.error(xhr, textStatus,
        //                 errorThrown); // Log the error for debugging
        //             Swal.fire({
        //                 icon: 'error',
        //                 title: 'Oops...',
        //                 text: 'Something went wrong!',
        //             });
        //         }
        //     });
        // });

        $(document).on('click', '.view-profile', function() {
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
        $(document).on('click', '.ad-salary', function(event) {
            var userId = $(this).data('id');
            $('#staffId').val(userId);

        });
        $(document).on('click', '.attendance', function(event) {
            var userId = $(this).data('id');
            $('#staff_Id').val(userId);

        });



        $(document).on('click', '#submitSalary', function(event) {
            event.preventDefault()
            var userId = $('#staffId').val();
            var submitDate = $('#submitDate').val();
            var Amount = $('#amount').val();


            var isValid = true;
            var errorMessage = '';

            // Perform individual validation checks for each input field
            if (submitDate.trim() === '') {
                errorMessage += 'Name is required.<br>';
                isValid = false;
            }
            if (Amount.trim() === '') {
                errorMessage += 'Address is required.<br>';
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
                formData.append('userId', userId);
                formData.append('submitDate', submitDate);
                formData.append('Amount', Amount);

                $.ajax({
                    url: "{{ route('store.staff-salary') }}",
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
        $(document).on('click', '#submitAttendence', function(event) {
            event.preventDefault()
            var userId = $('#staff_Id').val();
            var attendence_date = $('#attendence_date').val();
            var arrival_time = $('#arrival_time').val();
            var departure_time = $('#departure_time').val();


            var isValid = true;
            var errorMessage = '';

            // Perform individual validation checks for each input field
            if (attendence_date.trim() === '') {
                errorMessage += 'Name is required.<br>';
                isValid = false;
            }
            if (arrival_time.trim() === '') {
                errorMessage += 'Address is required.<br>';
                isValid = false;
            }
            if (departure_time.trim() === '') {
                errorMessage += 'Address is required.<br>';
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
                formData.append('userId', userId);
                formData.append('attendence_date', attendence_date);
                formData.append('arrival_time', arrival_time);
                formData.append('departure_time', departure_time);

                $.ajax({
                    url: "{{ route('store.staff-attendence') }}",
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



    // });
</script>
