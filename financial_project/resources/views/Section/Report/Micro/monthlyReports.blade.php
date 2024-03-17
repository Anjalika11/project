@extends('layout.layout')
@section('content')
    {{-- <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h3>Total Loan</h3>
                    <div class="sub-title">
                        <br>
                        <h2>{{ $activeLoanCount }}</h2>
                    </div>


                    <div class="sub-title">
                        <span class="mr-1">Revenue of this year</span> |
                        <span class="mx-1">35%</span>
                        <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>Issued Capital</h2>
                    <div class="sub-title">
                        <br>
                        <h2>{{ number_format($loanDetails->sum('total_issued'), 2, '.', ',') }}</h2>
                    </div>

                    <div class="sub-title">
                        <span class="mr-1">Revenue of this year</span> |
                        <span class="mx-1">35%</span>
                        <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>Total Collection</h2>
                    <div class="sub-title">
                        <br>
                        <h2>{{ number_format($loanDetails->sum('total_payment'), 2, '.', ',') }}</h2>
                    </div>


                    <div class="sub-title">
                        <span class="mr-1">Revenue of this year</span> |
                        <span class="mx-1">35%</span>
                        <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>Deffrent</h2>
                    <div class="sub-title">
                        <br>
                        <h2>{{ number_format($loanDetails->sum('total_payment') - $loanDetails->sum('total_issued'), 2, '.', ',') }}
                        </h2>
                    </div>
                    <div class="sub-title">
                        <span class="mr-1">Revenue of this year</span> |
                        <span class="mx-1">35%</span>
                        <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    <div class="card card-default" style="position: relative; ">

        <div class="card-body1">
            <div class="collapse" id="collapse-nav-underline-justify">

            </div>
            <div class="border p-6">
                <ul class="nav nav-underline-active-primary mb-3 justify-content-between" id="pills-tab12" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-home-underline-primary"
                            role="tab" aria-controls="nav-tabs" aria-selected="true">Daily Report</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile-Salary-primary"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Daily Collection Loan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-Penalty-loan-tab" data-toggle="pill" href="#nav-profile-Penalty-loan"
                            role="tab" aria-controls="nav-profile" aria-selected="false" aria-disabled="true">Loan With
                            Penalty</a>
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
                        <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                            <table id="monthlyReport" class="table table-hover table-product  nowrap" style="width: 100%; ">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Total Issued</th>
                                        <th>Total Collected</th>
                                        <th>Total Collected <br>Capital</th>
                                        <th>Total Collected <br>Interest</th>
                                        <th>Difference</th>
                                        <th>View Payment</th>
                                        <th>View Loan</th>
                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Date</th>
                                        <th>Total Issued</th>
                                        <th>Total Collected</th>
                                        <th>Total Collected <br>Capital</th>
                                        <th>Total Collected <br>Interest</th>
                                        <th>Difference</th>
                                        <th>View Payment</th>
                                        <th>View Loan</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile-Salary-primary" role="tabpanel"
                        aria-labelledby="nav-profile-tab">

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
                    <div class="container">
                        <h3>Total Payment: <span id="totalPayment">0.00</span></h3>
                        <br>
                        <div class="card-box table-responsive">
                            <table id="example1" class="table table-hover table-product  nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Loan Id</th>
                                        <th>Name</th>
                                        <th>Total payment</th>
                                        <th>Total Interest <br> payment</th>
                                        <th>Total Capital <br> payment</th>


                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Loan Id</th>
                                        <th>Name</th>
                                        <th>Total payment</th>
                                        <th>Total Interest <br> payment</th>
                                        <th>Total Capital <br> payment</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
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
                    <div class="container">
                        <h3>Total Payment: <span id="totalPaymentDailyCollection">0.00</span></h3>
                        <br>
                        <div class="card-box table-responsive">
                            <table id="dailyCollectionReport" class="table table-hover table-product  nowrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Loan Id</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Capital Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Loan Id</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Capital Amount</th>
                                    </tr>
                                </tfoot>
                            </table>
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
    $(document).ready(function() {
        var table = $('#monthlyReport').DataTable({
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

            ajax: "{{ route('get-micro-monthly-report') }}",

            columns: [{
                    data: 'year',
                    name: 'year'
                },
                {
                    data: 'total_issue',
                    name: 'total_issue'
                },

                {
                    data: 'total_collect',
                    name: 'total_collect'
                },
                {
                    data: 'total_collect_capital',
                    name: 'total_collect_capital'
                },
                {
                    data: 'total_collect_interest',
                    name: 'total_collect_interest'
                },

                {
                    data: 'id',
                    name: 'view',
                    render: function(data, type, row, meta) {
                        var total_issue = row.total_issue
                        var total_collect = row.total_collect
                        return total_collect - total_issue;
                    }
                },
                {
                    data: 'year',
                    name: 'view',
                    render: function(data, type, row, meta) {
                        return `<button type="button" class="btn btn-outline-danger view-btn" data-toggle="modal" data-target=".bd-example-modal-lg" data-id="${data}" style="height:32px; margin:0px;">view</button>`;
                    }
                },
                {
                    data: 'year',
                    name: 'view',
                    render: function(data, type, row, meta) {
                        return `<button type="button" class="btn  btn-outline-success view_given_loan" data-toggle="modal" data-target=".bd-example-modal-lg2" data-id="${data}" style="height:32px; margin:0px;">view</button>`;
                    }
                },
            ],
            initComplete: function() {
                // Calculate the sum of the "total_collect" column
                var sumTotalCollect = table
                    .column('total_collect:name')
                    .data()
                    .reduce(function(acc, val) {
                        return acc + parseFloat(val);
                    }, 0);
                var sumTotalIssued = table
                    .column('total_issue:name')
                    .data()
                    .reduce(function(acc, val) {
                        return acc + parseFloat(val);
                    }, 0);
                var sumTotalCollectedCapital = table
                    .column('total_collect_capital:name')
                    .data()
                    .reduce(function(acc, val) {
                        return acc + parseFloat(val);
                    }, 0);
                var sumTotalCollectedInterest = table
                    .column('total_collect_interest:name')
                    .data()
                    .reduce(function(acc, val) {
                        return acc + parseFloat(val);
                    }, 0);

                var totalProfit = sumTotalCollect - sumTotalIssued;
                var formattedTotalProfit = totalProfit.toLocaleString('en-US', {
                    minimumFractionDigits: 2
                });

                var formattedTotalCollect = sumTotalCollect.toLocaleString('en-US', {
                    minimumFractionDigits: 2
                });

                var formattedTotalIssued = sumTotalIssued.toLocaleString('en-US', {
                    minimumFractionDigits: 2
                });
                var formattedTotalCollectedInterest = sumTotalCollectedInterest.toLocaleString(
                    'en-US', {
                        minimumFractionDigits: 2
                    });
                var formattedTotalCollectedCapital = sumTotalCollectedCapital.toLocaleString(
                    'en-US', {
                        minimumFractionDigits: 2
                    });

                // Update HTML elements with the formatted values
                // $('#TotalIssued').html(formattedTotalIssued);
                // $('#TotalCollect').html(formattedTotalCollect);
                // $('#TotalCollectedInterest').html(formattedTotalCollectedInterest);
                // $('#TotalCollectedCapital').html(formattedTotalCollectedCapital);
                // $('#totalProfit').html(formattedTotalProfit);
                // // Display the sum in an alert

            }
        });

        $(document).on('click', '.view-btn', function() {
            var date = $(this).data('id');

            // Check if DataTable is already initialized and destroy it
            if ($.fn.DataTable.isDataTable('#example1')) {
                $('#example1').DataTable().destroy();
            }

            $.ajax({
                url: '/get-moonthly-micro-Report-bycase',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: {
                    'date': date
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

                    // Initialize DataTable and add rows
                    var example1DataTable = $('#example1').DataTable({
                        dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        buttons: ['csv', 'excel', 'pdf'],
                        order: [
                            [0, 'desc']
                        ],
                        lengthMenu: [
                            [5, 10, 25, 50, 100, 200, -1],
                            [5, 10, 25, 50, 100, 200, "All"]
                        ]
                    });

                    // Clear existing data and add new rows
                    example1DataTable.clear().draw();
                    $.each(data, function(index, item) {
                        example1DataTable.row.add([
                            item.CustomLoanId,
                            item.fullname,
                            item.sum_payment,
                            item.total_Capital_amount,
                            item.total_interest_amount,
                        ]).draw();
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        $(document).on('click', '.view_given_loan', function() {
            var date = $(this).data('id');

            $.ajax({
                url: '/get-issued-capital-byMonthly',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: {
                    'date': date
                },
                success: function(response) {
                    var data = response.data;
                    console.log(data);

                    var totalPayment = 0;
                    $.each(data, function(index, item) {
                        totalPayment += parseFloat(item.payment);
                    });

                    // Update the total payment display
                    $('#totalPaymentDailyCollection').text(totalPayment.toFixed(2));

                    $('#dailyCollectionReport').DataTable({
                        dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        buttons: ['csv', 'excel', 'pdf'],
                        order: [
                            [0, 'desc']
                        ],
                        lengthMenu: [
                            [5, 10, 25, 50, 100, 200, -1],
                            [5, 10, 25, 50, 100, 200, "All"]
                        ]
                    }).clear().draw();
                    $.each(data, function(index, item) {
                        $('#dailyCollectionReport').DataTable().row.add([
                            item.CustomLoanId,
                            item.fullname,
                            item.start_date,
                            item.maximum_amount,
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
