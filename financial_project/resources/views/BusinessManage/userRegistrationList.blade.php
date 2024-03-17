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
                            <a type="button" type="button" class="btn btn-info btn-pill" data-toggle="modal"
                                data-target="#exampleModalForm" href="#">User Register</a>

                        </div>
                    </div>
                </div>
                <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                    <table id="example" class="table table-hover table-product" style="width: 100%; ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Branch</th>
                                <th>Status</th>
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

    <div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalFormTitle">New User Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <a class="btn btn-success" href="" style="width: 100%">Create New Branch</a>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Select Branch</label>
                            <select id="branch" class="form-control @error('branch') is-invalid @enderror" name="branch"
                                required>
                                <option value="" disabled selected>Select a branch</option>
                                @foreach ($branches as $branch)
                                    <option value="{{ $branch->id }}"
                                        {{ old('branch') == $branch->id ? 'selected' : '' }}>
                                        {{ $branch->branch_name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('branch')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password">
                        </div>

                        <div class="form-check pl-0">
                            <label class="control control-checkbox">Check me out
                                <input type="checkbox" checked="checked" />
                                <div class="control-indicator"></div>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
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
                url: "{{ route('get-user-list') }}",
                dataSrc: 'data', // Assuming your data is in a 'data' property
            },
            lengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
            ],
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'role',
                    name: 'role'
                },
                {
                    data: 'branch_name',
                    name: 'branch_name'
                },

                {
                    data: 'status',
                    name: 'status',
                    render: function(data, type, row) {
                        // Create a switch based on the 'status' value
                        var userid = row.id;
                        var switchHtml =
                            '<label class="switch switch-icon switch-success form-control-label mr-2">' +
                            '<input type="checkbox" class="switch-input form-check-input" value="on" data-userid="' +
                            userid + '"';

                        if (data == 0) {
                            switchHtml += '>';
                        } else {
                            switchHtml += 'checked>';
                        }

                        switchHtml += '<span class="switch-label"></span>' +
                            '<span class="switch-handle"></span>' +
                            '</label>';

                        return switchHtml;
                    }
                },
                {
                    data: 'created_at',
                    name: 'created_at',
                    render: function(data, type, row) {
                        // Format the date using moment.js
                        return moment(data).format('YYYY-MM-DD');
                    }
                },
                {
                    data: 'status',
                    name: 'status',
                    render: function(data, type, row) {
                        var action = '<td>' +
                            '<div class="dropdown">' +
                            '<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>' +
                            '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">' +
                            '<a class="dropdown-item" href="#">Change Password</a>' +
                            '<a class="dropdown-item" href="#">Edit</a>' +
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

        $(document).on('change', '.switch-input', function() {
            var userid = $(this).data('userid');
            var status;
            if ($(this).prop('checked')) {
                status = 1;


            } else {
                status = 0;


            }

            // Log the status to the browser's console

            $.ajax({
                url: "{{ route('edit-user-status') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                data: {
                    status: status,
                    userid: userid
                },
                success: function(data) {
                    Swal.fire(
                        'Good job!',
                        data.message,
                        'success'
                    );
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.error(xhr, textStatus,
                        errorThrown); // Log the error for debugging
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    });
                }
            });
        });

    });

    // });
</script>
