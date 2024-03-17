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
                                <th>Requested <br> Amount</th>
                                <th>Payment <br> Method</th>
                                <th>Veiw</th>
                                <th>Verify</th>
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
            ajax: "{{ route('get-mortgage-costomer-details') }}",
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
                    data: 'requestedAmount',
                    name: 'requestedAmount'
                },
                {
                    data: 'paymentMethod',
                    name: 'paymentMethod'
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
                {
                    data: 'id',
                    name: 'verify',
                    render: function(data, type, row, meta) {
                        let bgColor = '';
                        let selectDisabled = true;
                        let selectValue;
                        let fColor = '';

                        switch (row.loanStatus) {
                            case 4:
                                fColor = 'white';
                                bgColor = 'green';
                                selectValue = 4;
                                break;
                            case 3:
                                fColor = 'white';
                                bgColor = 'green';
                                selectValue = 3;
                                break;
                            case 2:
                                fColor = 'white';
                                bgColor = 'red';
                                selectDisabled = false;
                                selectValue = 2;
                                break;
                            case 1:
                                fColor = 'white';
                                bgColor = 'green';
                                selectValue = 1;
                                break;
                            case 0:
                                fColor = 'black';
                                selectValue = 0;
                                selectDisabled = false;
                                break;
                        }

                        return `
              <select id="verify-select-${data}" data-id="${data}" class="form-select form-control verify-select" aria-label="Verify" ${selectDisabled ? 'disabled' : ''} style="background-color: ${bgColor}; color: ${fColor};">
              <option value="0" data-id="${data}" ${selectValue === 0 ? 'selected' : ''} >Waiting..</option>
              <option value="1" data-id="${data}" ${selectValue === 1 || selectValue === 3 || selectValue === 4 ? 'selected' : ''}>Verified</option>
              <option value="2" data-id="${data}" ${selectValue === 2 ? 'selected' : ''}>Rejected</option>
              </select>
              `;
                    }
                }
            ]
        });


        const defaultColor = "#f1f1f1";
        const verifiedColor = "green";
        const rejectedColor = "red";

        $('#example').on('change', '.verify-select', function() {
            const selectedValue = $(this).val();
            const selectEl = $(this);
            var userId = $(this).data('id');


            if (selectedValue === "1") {
                selectEl.css("background-color", verifiedColor);

                selectEl.css("color", "white");
            } else if (selectedValue === "2") {
                selectEl.css("background-color", rejectedColor);
                selectEl.css("color", "white");
            } else {
                selectEl.css("background-color", defaultColor);
                selectEl.css("color", "");
            }
            $.ajax({
                url: '/verify-costomer',
                type: 'POST',
                data: {
                    id: userId,
                    selectedValue: selectedValue
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    Swal.fire({
                        title: 'Success',
                        text: 'Loan has been verified!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });
        $(document).on('click', '.view-profile', function() {
            var userId = $(this).data('id');

            var url = '/customer-profile-blade?id=' + userId;
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
