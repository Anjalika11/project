@extends('layout.layout')
@section('content')
    <div class="card card-default" style="position: relative;">

        <div class="card-body1">
            <div class="collapse" id="collapse-nav-underline-justify">

            </div>
            <div class="border p-6">
                <ul class="nav nav-underline-active-primary mb-3 justify-content-between" id="pills-tab12" role="tablist">



                    {{-- <li class="nav-item">
                        <a class="nav-link" id="nav-Penalty-loan-tab" data-toggle="pill" href="#nav-profile-Penalty-loan"
                            role="tab" aria-controls="nav-profile" aria-selected="false" aria-disabled="true">Loan With
                            Penalty</a>
                    </li> --}}



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
                            <div class="col-xl-4 col-md-6">
                                <div class="card card-default bg-secondary">
                                    <div class="d-flex p-5 align-items-center flex-column">
                                        <div class="icon-md bg-white rounded-circle " style="height: 50px; width:50px;">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-secondary"
                                                style="line-height: 50px !important"></i>
                                        </div>
                                        <h3 class=" d-block text-white">Total Properties</h3>
                                        <div class="text-center">
                                            <span class="h2 d-block text-white">{{ $total_Properties }}</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card card-default bg-success">
                                    <div class="d-flex p-5 align-items-center flex-column">
                                        <div class="icon-md bg-white rounded-circle " style="height: 50px; width:50px;">
                                            <i class="mdi mdi-alert-outline text-success"
                                                style="line-height: 50px !important"></i>
                                        </div>
                                        <h3 class=" d-block text-white">Available Properties</h3>
                                        <div class="text-center">
                                            <span class="h2 d-block text-white">{{ $available_Properties }}</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card card-default bg-primary">
                                    <div class="d-flex p-5 align-items-center flex-column">
                                        <div class="icon-md bg-white rounded-circle " style="height: 50px; width:50px;">
                                            <i class="mdi mdi-close-circle-outline text-primary"
                                                style="line-height: 50px !important"></i>
                                        </div>
                                        <h3 class=" d-block text-white">Released Properties</h3>
                                        <div class="text-center">
                                            <span class="h2 d-block text-white">{{ $total_Properties }}</span>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                            <table id="vehicleList" class="table table-hover table-product  nowrap" style="width: 100%; ">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Loan Id</th>
                                        <th>Owner</th>
                                        <th>Type</th>
                                        <th>Model</th>
                                        <th>Vehicle Number</th>
                                        <th>Remaining Dates</th>
                                        <th>Status</th>
                                        <th>View</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>Loan Id</th>
                                        <th>Owner</th>
                                        <th>Type</th>
                                        <th>Model</th>
                                        <th>Vehicle Number</th>
                                        <th>Remaining Dates</th>
                                        <th>Status</th>
                                        <th>View</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>





                </div>

            </div>
        </div>
    </div>
@endsection
@include('layout.footerlink')
<script>
    $(document).ready(function() {
        $('#vehicleList').DataTable({
            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            dataSrc: function(json) {
                console.log(json); // Log the received data
                return json;
            },
            processing: true,
            info: true,
            responsive: true,
            lengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
            ],

            ajax: {
                url: "{{ route('getPropertiesmortgagelist') }}",
                type: "GET",
                dataSrc: function(json) {
                    console.log(json); // Log the received data
                    return json.data; // Assuming your data is inside the 'data' property
                },
            },

            columns: [{
                    data: 'itemId',
                    name: 'itemId'
                },
                {
                    data: 'loanId',
                    name: 'loanId'
                },
                {
                    data: 'fullname',
                    name: 'fullname'
                },

                {
                    data: 'auto_vehicle_brand',
                    name: 'auto_vehicle_brand'
                },
                {
                    data: 'auto_vehicle_model',
                    name: 'auto_vehicle_model'
                },
                {
                    data: 'auto_vehicle_engine_number',
                    name: 'auto_vehicle_engine_number'
                },

                {
                    data: 'penalty_start_date',
                    name: 'penalty_start_date',

                    render: function(data, type, row, meta) {
                        const EndDate = new Date(row.end_date);
                        const today = new Date();
                        const timeDiff = EndDate.getTime() - today.getTime();
                        const daysDiff = Math.floor(timeDiff / 86400000);
                        return daysDiff + ' ' + 'days left';
                    }
                },

                // { data: 'status', name: 'status'},
                {
                    data: 'loanType',
                    name: 'loanType',
                    render: function(data, type, row, meta) {
                        if (row.status === 'Available') {
                            return `<span class="badge badge-xl badge-pill" style="background-color:pink; font-size:13px; color:black;">Available</span>`;
                        } else if (row.status === 'Released') {
                            return `<span class="badge badge-xl badge-pill"  style="background-color:green; font-size:13px; color:white;">Released</span>`;
                        } else {
                            return data;
                        }
                    }
                },
                {
                    data: 'id',
                    name: 'view',
                    render: function(data, type, row, meta) {
                        return `<a type="button"  href="{{ url('getmortgageloanUserDetails') }}/${row.CustomerId}" class="btn btn-outline-primary btn-sm view-btn"  data-id="${data}">view</a>`;
                    }
                },
                {
                    data: 'itemId',
                    name: 'view',
                    render: function(data, type, row, meta) {
                        return `<a type="button"  class="btn btn-outline-danger btn-sm edit_goldstatus"  data-id="${data}">Edit status</a>`;
                    }
                },




            ]
        });



    });
</script>
