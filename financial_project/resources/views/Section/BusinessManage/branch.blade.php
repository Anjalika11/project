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
                                data-target="#exampleModal" href="#">Setup Branch</a>

                        </div>
                    </div>
                </div>
                <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                    <table id="example" class="table table-hover table-product" style="width: 100%; ">
                        <thead>
                            <tr>
                                <th>Branch Name</th>
                                <th>Branch Id </th>
                                <th>Branch Address</th>
                                <th>City</th>
                                <th>Branch Contact</th>
                                <th>email</th>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('branch-register-before.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <input type="text" class="form-control input-lg" id="BranchId" name="BranchId"
                                    aria-describedby="nameHelp" placeholder="Branch Id" value="{{ old('BranchId') }}">
                                @error('BranchId')
                                    <strong style="color: red">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group col-md-12 mb-4">
                                <input type="text" class="form-control input-lg" id="BranchName" name="BranchName"
                                    aria-describedby="emailHelp" placeholder="Branch Name" value="{{ old('BranchName') }}">
                                @error('BranchName')
                                    <strong style="color: red"> {{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control input-lg" id="city" name="city"
                                    placeholder="City" value="{{ old('city') }}">
                                @error('city')
                                    <strong style="color: red">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control input-lg" id="address" name="address"
                                    placeholder="Branch Address" value="{{ old('address') }}">
                                @error('address')
                                    <strong style="color: red">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control input-lg" id="contactNumber" name="ContactNumber"
                                    placeholder="Contact Number" value="{{ old('ContactNumber') }}">
                                @error('ContactNumber')
                                    <strong style="color: red">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control input-lg" id="email" name="email"
                                    placeholder="email" value="{{ old('email') }}">
                                @error('email')
                                    <strong style="color: red">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control rounded-left" name="description" placeholder="Description" rows="10"
                                    id="description" cols="50">{{ old('description') }}</textarea>
                                @error('description')
                                    <strong style="color: red">{{ $message }}</strong>
                                @enderror
                            </div>

                            <div class="form-group col-md-12">
                                <textarea class="form-control rounded-left" name="location" placeholder="Ad Location" rows="4" id="location"
                                    cols="50">{{ old('location') }}</textarea>
                                @error('location')
                                    <strong style="color: red">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="col-md-12">

                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary btn-pill">Save Changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@include('layout.footerlink')
<script>
    $(document).ready(function() {


        $('#framework').multiselect({
            nonSelectedText: 'Select Duration Time',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '100%',

        });
        $('#interest').multiselect({
            nonSelectedText: 'Interest schema',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '100%',

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
            lengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
            ],

            ajax: "{{ route('get-branch-details') }}",

            columns: [{
                    data: 'brach_id',
                    name: 'brach_id'
                },
                {
                    data: 'branch_name',
                    name: 'branch_name'
                },

                {
                    data: 'city',
                    name: 'city'
                },
                {
                    data: 'address',
                    name: 'address'
                },
                {
                    data: 'contact_number',
                    name: 'contact_number'
                },
                {
                    data: 'email',
                    name: 'email'
                },

                {
                    data: 'id',
                    name: 'id',
                    render: function(data, type, row) {
                        var action = '<td>' +
                            '<div class="dropdown">' +
                            '<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>' +
                            '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">' +
                            '<a class="dropdown-item  view-profile" data-id="' + data +
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
        });

        $(document).on('click', '.view-profile', function() {
            var branchid = $(this).data('id');

            var url = '/branches-profile-blade?id=' + branchid;
            window.location.href = url;
        });

    });
</script>
