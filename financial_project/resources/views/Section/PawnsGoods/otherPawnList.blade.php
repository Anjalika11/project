@extends('layout.layout')
@section('content')
    <div class="card card-default" style="position: relative;">

        <div class="card-body1">
            <div class="collapse" id="collapse-nav-underline-justify">

            </div>
            <div class="border p-6">
                <ul class="nav nav-underline-active-primary mb-3 justify-content-between" id="pills-tab12" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-home-underline-primary"
                            role="tab" aria-controls="nav-tabs" aria-selected="true">Gold</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-Penalty-loan-tab" data-toggle="pill" href="#nav-profile-overdive-gold"
                            role="tab" aria-controls="nav-profile" aria-selected="false" aria-disabled="true">Over-due
                            Gold
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile-Salary-primary"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Electric Devices</a>
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
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>
                </ul>
                <div class="tab-content mt-5" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home-underline-primary" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-default bg-secondary">
                                    <div class="d-flex p-5 align-items-center flex-column">
                                        <div class="icon-md bg-white rounded-circle " style="height: 50px; width:50px;">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-secondary"
                                                style="line-height: 50px !important"></i>
                                        </div>
                                        <h3 class=" d-block text-white">Total Gold</h3>
                                        <div class="text-center">
                                            <span class="h2 d-block text-white">{{ $total_gold }}</span>
                                            <p class="text-white">{{ $sumGoldWeight }} g</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-default bg-success">
                                    <div class="d-flex p-5 align-items-center flex-column">
                                        <div class="icon-md bg-white rounded-circle " style="height: 50px; width:50px;">
                                            <i class="mdi mdi-alert-outline text-success"
                                                style="line-height: 50px !important"></i>
                                        </div>
                                        <h3 class=" d-block text-white">Available Gold</h3>
                                        <div class="text-center">
                                            <span class="h2 d-block text-white">{{ $available_gold }}</span>
                                            <p class="text-white">{{ $sumAvailableGoldWeight }} g</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-default bg-primary">
                                    <div class="d-flex p-5 align-items-center flex-column">
                                        <div class="icon-md bg-white rounded-circle " style="height: 50px; width:50px;">
                                            <i class="mdi mdi-close-circle-outline text-primary"
                                                style="line-height: 50px !important"></i>
                                        </div>
                                        <h3 class=" d-block text-white">Released Gold</h3>
                                        <div class="text-center">
                                            <span class="h2 d-block text-white">{{ $released_gold }}</span>
                                            <p class="text-white">{{ $sumReleasedGoldWeight }} g</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-default " style="background-color: #234779">
                                    <div class="d-flex p-5 align-items-center flex-column">
                                        <div class="icon-md bg-white rounded-circle " style="height: 50px; width:50px;">
                                            <i class="mdi mdi-close-circle-outline text-primary"
                                                style="line-height: 50px !important"></i>
                                        </div>
                                        <h3 class=" d-block text-white">Auctioned Gold</h3>
                                        <div class="text-center">
                                            <span class="h2 d-block text-white">{{ $auction_gold }}</span>
                                            <p class="text-white">{{ $sumAuctionGoldWeight }} g</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="start_date">Start Date:</label>
                                    <input type="date" id="start_date" class="form-control"
                                        placeholder="Select start date">
                                </div>
                                <div class="col-md-4">
                                    <label for="end_date">End Date:</label>
                                    <input type="date" id="end_date" class="form-control"
                                        placeholder="Select end date">
                                </div>
                                <div class="col-md-2">
                                    <label>&nbsp;</label>
                                    <button id="filterBtn" class="btn btn-primary btn-block">Filter</button>
                                </div>
                                <div class="col-md-2">
                                    <label>&nbsp;</label>
                                    <button id="resetBtn" class="btn btn-success btn-block">Reset</button>
                                </div>
                            </div>
                            <table id="goldItems" class="table table-hover table-product  nowrap" style="width: 100%; ">
                                <thead>
                                    <tr>

                                        <th>Loan Id</th>
                                        <th>Owner</th>
                                        <th>Type</th>
                                        <th>karat</th>
                                        <th>Weight</th>
                                        <th>Date</th>
                                        <th>Remaining <br>Dates</th>
                                        <th>Status</th>
                                        <th>View</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                <tfoot>
                                    <tr>

                                        <th>Loan Id</th>
                                        <th>Owner</th>
                                        <th>Type</th>
                                        <th>karat</th>
                                        <th>Weight</th>
                                        <th>Date</th>
                                        <th>Remaining <br>Dates</th>
                                        <th>Status</th>
                                        <th>View</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile-overdive-gold" role="tabpanel"
                        aria-labelledby="nav-profile-tab">

                        <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                            <table id="goldItemsoverdue" class="table table-hover table-product  nowrap"
                                style="width: 100%; ">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Loan Id</th>
                                        <th>Owner</th>
                                        <th>Type</th>
                                        <th>karat</th>
                                        <th>Weight</th>
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
                                        <th>karat</th>
                                        <th>Weight</th>
                                        <th>Remaining Dates</th>
                                        <th>Status</th>
                                        <th>View</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="nav-profile-Salary-primary" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card card-default bg-secondary">
                                    <div class="d-flex p-5 align-items-center flex-column">
                                        <div class="icon-md bg-white rounded-circle " style="height: 50px; width:50px;">
                                            <i class="mdi mdi-checkbox-marked-circle-outline text-secondary"
                                                style="line-height: 50px !important"></i>
                                        </div>
                                        <h3 class=" d-block text-white">Total Devices</h3>
                                        <div class="text-center">
                                            <span class="h2 d-block text-white">{{ $total_devices }}</span>

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
                                        <h3 class=" d-block text-white">Available Devices</h3>
                                        <div class="text-center">
                                            <span class="h2 d-block text-white">{{ $available_devices }}</span>

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
                                        <h3 class=" d-block text-white">Released Devices</h3>
                                        <div class="text-center">
                                            <span class="h2 d-block text-white">{{ $released_devices }}</span>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        {{-- {{-- <table id="ongoinLoan" class="display nowrap" style="width:100%"> --}}
                        <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                            <table id="ElectronicDevices" class="table table-hover table-product  nowrap"
                                style="width: 100%; ">

                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Loan Id</th>
                                        <th>Owner</th>
                                        <th>Type</th>
                                        <th>Brand</th>
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
                                        <th>Brand</th>
                                        <th>Remaining Dates</th>
                                        <th>Status</th>
                                        <th>View</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile-Penalty-loan" role="tabpanel"
                        aria-labelledby="nav-Penalty-loan-tab">
                        <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">

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





        var table = $('#goldItems').DataTable({
            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            dataSrc: function(json) {
                console.log('Received data:', json);
                return json.data; // Assuming your data is inside the 'data' property
            },
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

            ajax: {
                url: "{{ route('getgoldmortgagelist') }}",
                type: "GET",
                dataSrc: function(json) {
                    console.log(json); // Log the received data
                    return json.data; // Assuming your data is inside the 'data' property
                },
            },

            columns: [{
                    data: 'loanId',
                    name: 'loanId'
                },
                {
                    data: 'fullname',
                    name: 'fullname'
                },

                {
                    data: 'gold_type',
                    name: 'gold_type'
                },
                {
                    data: 'gold_pound',
                    name: 'gold_pound'
                },
                {
                    data: 'weight',
                    name: 'weight'
                },
                {
                    data: 'start_date',
                    name: 'start_date',
                    type: 'date'
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
                        } else if (row.status === 'For auction') {
                            return `<span class="badge badge-xl badge-pill"  style="background-color:red; font-size:13px; color:white;">For auction</span>`;
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
                    name: 'verify',
                    render: function(data, type, row, meta) {
                        let bgColor = '';
                        let selectDisabled = true;
                        let selectValue = '';
                        let fColor = '';

                        switch (row.status) {

                            case 'For auction':
                                fColor = 'white';
                                bgColor = 'red';
                                selectDisabled = false;
                                selectValue = 2;
                                break;
                            case 'Released':
                                fColor = 'white';
                                bgColor = 'green';
                                selectValue = 1;
                                break;
                            case 'Available':
                                fColor = 'black';
                                selectValue = 0;
                                selectDisabled = false;
                                break;
                        }

                        return `
                        <select id="verify-select-${data}" data-id="${data}" class="form-select form-control verify-select" aria-label="Verify" ${selectDisabled ? 'disabled' : ''} style="background-color: ${bgColor}; color: ${fColor};">
              <option value="Available" data-id="${data}" ${selectValue === 0 ? 'selected' : ''} >Available</option>
              <option value="Released" data-id="${data}" ${selectValue === 1 ? 'selected' : ''}>Released</option>
              <option value="For auction" data-id="${data}" ${selectValue === 2 ? 'selected' : ''}>For auction</option>
              </select>
              `;
                    }
                }


            ]
        });


        function applyDateRangeFilter(startDate, endDate) {
            // Get the column index for the 'start_date' column
            var columnIndex = table.column('start_date:name').index();

            // Custom filter function to check if the date is within the specified range
            $.fn.dataTable.ext.search.push(
                function(settings, data, dataIndex) {
                    var currentDate = new Date(data[columnIndex]);
                    var filterStartDate = new Date(startDate);
                    var filterEndDate = new Date(endDate);

                    return currentDate >= filterStartDate && currentDate <= filterEndDate;
                }
            );

            // Redraw the DataTable
            table.draw();

            // Remove the custom filter function
            $.fn.dataTable.ext.search.pop();
        }

        // Function to reset the DataTable
        function resetDataTable() {
            // Clear the date range inputs
            $('#start_date').val('');
            $('#end_date').val('');

            // Clear any existing search on the 'start_date' column
            table.columns('start_date:name').search('').draw();

            // Redraw the DataTable
            table.draw();
        }

        // Event handler for the filter button
        $('#filterBtn').on('click', function() {
            var startDate = $('#start_date').val();
            var endDate = $('#end_date').val();

            applyDateRangeFilter(startDate, endDate);
        });

        // Event handler for the reset button
        $('#resetBtn').on('click', function() {
            resetDataTable();
        });


        $('#goldItemsoverdue').DataTable({
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
                url: "{{ route('getOverduegoldmortgagelist') }}",
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
                    data: 'gold_type',
                    name: 'gold_type'
                },
                {
                    data: 'gold_pound',
                    name: 'gold_pound'
                },
                {
                    data: 'weight',
                    name: 'weight'
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
                        } else if (row.status === 'For auction') {
                            return `<span class="badge badge-xl badge-pill"  style="background-color:red; font-size:13px; color:white;">For auction</span>`;
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
                // {
                //     data: 'itemId',
                //     name: 'view',
                //     render: function(data, type, row, meta) {
                //         return `<a type="button"  class="btn btn-outline-danger btn-sm edit_goldstatus"  data-id="${data}">Edit status</a>`;
                //     }
                // },
                {
                    data: 'itemId',
                    name: 'verify',
                    render: function(data, type, row, meta) {
                        let bgColor = '';
                        let selectDisabled = true;
                        let selectValue = '';
                        let fColor = '';

                        switch (row.loanStatus) {

                            case 'For auction':
                                fColor = 'white';
                                bgColor = 'red';
                                selectDisabled = false;
                                selectValue = 2;
                                break;
                            case 'Released':
                                fColor = 'white';
                                bgColor = 'green';
                                selectValue = 1;
                                break;
                            case 'Available':
                                fColor = 'black';
                                selectValue = 0;
                                selectDisabled = false;
                                break;
                        }

                        return `
              <select id="verify-select-${data}" data-id="${data}" class="form-select form-control verify-select" aria-label="Verify" ${selectDisabled ? 'disabled' : ''} style="background-color: ${bgColor}; color: ${fColor};">
              <option value="Available" data-id="${data}" ${selectValue === 'Available' ? 'selected' : ''} >Available</option>
              <option value="Released" data-id="${data}" ${selectValue === 'Released' ? 'selected' : ''}>Released</option>
              <option value="For auction" data-id="${data}" ${selectValue === 'For auction' ? 'selected' : ''}>For auction</option>
              </select>
              `;
                    }
                }



            ]
        });

        $('#ElectronicDevices').DataTable({
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

            ajax: "{{ route('getdevicesmortgagelist') }}",

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
                    data: 'devices_type',
                    name: 'devices_type'
                },
                {
                    data: 'devices_brand',
                    name: 'devices_brand'
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
                        return `<a type="button"  href="{{ url('getmortgageloanUserDetails') }}/${row.id}" class="btn btn-outline-primary btn-sm view-btn"  data-id="${data}">view</a>`;
                    }
                },
                {
                    data: 'id',
                    name: 'view',
                    render: function(data, type, row, meta) {
                        return `<a type="button"  class="btn btn-outline-danger btn-sm edit_devicestatus"  data-id="${data}">Edit status</a>`;
                    }
                },




            ]
        });

        const defaultColor = "#f1f1f1";
        const verifiedColor = "green";
        const rejectedColor = "red";

        $('#goldItems').on('change', '.verify-select', function() {
            const selectedValue = $(this).val();
            const selectEl = $(this);

            var goldId = $(this).data('id');

            if (selectedValue === "Released") {
                selectEl.css("background-color", verifiedColor);

                selectEl.css("color", "white");
            } else if (selectedValue === "For auction") {
                selectEl.css("background-color", rejectedColor);
                selectEl.css("color", "white");
            } else if (selectedValue === "Available") {
                selectEl.css("background-color", defaultColor);
                selectEl.css("color", "");
            }


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
                confirmButtonText: 'Yes, Release it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/editGoldStatus',
                        type: 'POST',
                        data: {
                            id: goldId,
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
                    swalWithBootstrapButtons.fire(
                        'item Released!',
                        'Your Pawn item has been Released.',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your item is safe :)',
                        'error'
                    )
                }
            })

        });

    });
</script>
