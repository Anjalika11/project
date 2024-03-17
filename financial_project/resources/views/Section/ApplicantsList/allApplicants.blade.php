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

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Setup-Loan</a>

                        </div>
                    </div>
                </div>
                <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                    <table id="example" class="table table-hover table-product" style="width: 100%; ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Contact No</th>
                                <th>NIC</th>
                                <th>Branch</th>
                                <th>Requested <br> Amount</th>
                                <th>Payment <br> Method</th>
                                <th>Loan Type</th>
                                <th>Veiw</th>

                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
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
            ajax: "{{ route('getallApplicantsDetails') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'fullname',
                    name: 'fullname'
                },
                {
                    data: 'address',
                    name: 'address'
                },
                {
                    data: 'contactNumber',
                    name: 'contactNumber'
                },
                {
                    data: 'nic',
                    name: 'nic'
                },

                {
                    data: 'branch_name',
                    name: 'branch_name',
                    render: function(data, type, row, meta) {

                        return `<span class="badge badge-xl badge-pill" style="background-color:#6a5acd; color:white;">` +
                            data + `</span>`;

                    }
                },


                {
                    data: 'requestedAmount',
                    name: 'requestedAmount'
                },
                {
                    data: 'paymentMethod',
                    name: 'paymentMethod'
                },
                {
                    data: 'loanType',
                    name: 'loanType',
                    render: function(data, type, row, meta) {
                        if (data === 'microloan') {
                            return `<span class="badge badge-xl badge-pill" style="background-color:pink; color:black;">Micro</span>`;
                        } else if (data === 'mortgageloan') {
                            return `<span class="badge badge-xl badge-pill"  style="background-color:purple; color:white;">Mortgage</span>`;
                        } else {
                            return data;
                        }
                    }
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
                            '<a class="dropdown-item  view-profile" data-id="' + data +
                            '">View</a>' +
                            '</div>' +
                            '</div>' +
                            '</td>';

                        return action;
                    }
                },

            ]
        });


        $(document).on('click', '.view-profile', function() {
            var userId = $(this).data('id');

            var url = '/all-Applicant-Profile-Controller?id=' + userId;
            window.location.href = url;
        });


        $(document).on('click', '.delete-member', function() {
            var costomerId = $(this).data('id');

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            });

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
                        url: "{{ route('delete.customer') }}",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "POST",
                        data: {
                            costomerId: costomerId
                        },
                        success: function(data) {
                            Swal.fire(
                                'Good job!',
                                data.message,
                                'success'
                            );
                            // Reload the page after successful deletion
                            location.reload();
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
                    });
                    swalWithBootstrapButtons.fire(
                        'Loan Delete!',
                        'Your Loan has been Deleted.',
                        'success'
                    );
                } else if (
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    );
                }
            });
        });
    });
</script>
