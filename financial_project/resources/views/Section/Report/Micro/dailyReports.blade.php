@extends('layout.layout')
@section('content')
    <div class="row">
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
    </div>
    <div class="card card-default" style="position: relative; top:-100px;">

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
                            <table id="DailyReport" class="table table-hover table-product  nowrap" style="width: 100%; ">
                                <thead>
                                    <tr class="table-header">
                                        <th>Date</th>
                                        <th>Total Collected</th>
                                        <th>Interset Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr class="table-footer">
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile-Salary-primary" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        <h2 style="text-align: center; margin-bottom:20px;">This Report For Daily Collection</h2>
                        {{-- {{-- <table id="ongoinLoan" class="display nowrap" style="width:100%"> --}}
                        <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                            <table id="DailyCollection" class="table table-hover table-product  nowrap"
                                style="width: 100%; ">
                                <thead>
                                    <tr class="table-header">
                                        <th>Date</th>
                                        <th>Total Collected</th>
                                        <th>Interset Amount</th>
                                        <th>Expected Amount</th>

                                        <th>Difference</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr class="table-footer">
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
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
                                        <th>Payment</th>
                                        <th>Nic</th>

                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Loan Id</th>
                                        <th>Name</th>
                                        <th>Payment</th>
                                        <th>Nic</th>

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
                                        <th>Payment</th>
                                        <th>Nic</th>

                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Loan Id</th>
                                        <th>Name</th>
                                        <th>Payment</th>
                                        <th>Nic</th>

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
        var DailyCollection = $('#DailyCollection').DataTable({
            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            processing: true,
            info: true,
            responsive: true,
            order: [
                [0, 'desc']
            ],
            lengthMenu: [
                [5, 10, 25, 50, 100, 200, -1],
                [5, 10, 25, 50, 100, 200, "All"]
            ],
            ajax: "{{ route('get-micro-Loan-daily-collect-report') }}",
            columns: [{
                    data: 'payment_date',
                    name: 'payment_date'
                },

                {
                    data: 'paymentSum',
                    name: 'paymentSum'
                },
                {
                    data: 'interestSum',
                    name: 'interestSum'
                },


                {
                    data: 'totalInstallmentAmount',
                    name: 'totalInstallmentAmount'
                },
                {
                    data: 'difference',
                    name: 'difference'
                },



                {
                    data: 'payment_date',
                    name: 'payment_date',
                    render: function(data, type, row) {
                        var action = '<td>' +
                            '<div class="dropdown">' +
                            '<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>' +
                            '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">' +
                            '<a class="dropdown-item delete-member view-btn2" data-toggle="modal" data-target=".bd-example-modal-lg2"  data-id="' +
                            data +
                            '">view</a>' +
                            '</div>' +
                            '</div>' +
                            '</td>';

                        return action;
                    }
                },

            ],

        });
        DailyCollection.on('draw', function() {
            var totalSum = DailyCollection.column(1).data().reduce(function(a, b) {
                return a + b;
            }, 0);

            var formattedSum = new Intl.NumberFormat('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }).format(totalSum);

            var totalinterest = DailyCollection.column(2).data().reduce(function(a, b) {
                return a + b;
            }, 0);

            var formattedinterest = new Intl.NumberFormat('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }).format(totalinterest);

            var totalexpectAmount = DailyCollection.column(3).data().reduce(function(a, b) {
                return a + b;
            }, 0);

            var formattedexpectAmount = new Intl.NumberFormat('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }).format(totalexpectAmount);

            $(DailyCollection.column(1).footer()).html(formattedSum);
            $(DailyCollection.column(2).footer()).html(formattedinterest);
            $(DailyCollection.column(3).footer()).html(formattedexpectAmount);
        });


        var table = $('#DailyReport').DataTable({
            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            processing: true,
            info: true,
            responsive: true,
            order: [
                [0, 'desc']
            ],
            lengthMenu: [
                [5, 10, 25, 50, 100, 200, -1],
                [5, 10, 25, 50, 100, 200, "All"]
            ],
            ajax: "{{ route('get-micro-Loan-daily-report') }}",
            columns: [{
                    data: 'payment_date',
                    name: 'payment_date'
                },

                {
                    data: 'paymentSum',
                    name: 'paymentSum'
                },
                {
                    data: 'interestSum',
                    name: 'interestSum'
                },


                {
                    data: 'payment_date',
                    name: 'payment_date',
                    render: function(data, type, row) {
                        var action = '<td>' +
                            '<div class="dropdown">' +
                            '<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>' +
                            '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">' +
                            '<a class="dropdown-item delete-member view-btn" data-toggle="modal" data-target=".bd-example-modal-lg"  data-id="' +
                            data +
                            '">View</a>' +
                            '</div>' +
                            '</div>' +
                            '</td>';

                        return action;
                    }
                },

            ],

        });
        table.on('draw', function() {
            var totalSum = table.column(1).data().reduce(function(a, b) {
                return a + b;
            }, 0);

            var formattedSum = new Intl.NumberFormat('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }).format(totalSum);

            var totalinterest = table.column(2).data().reduce(function(a, b) {
                return a + b;
            }, 0);

            var formattedinterest = new Intl.NumberFormat('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }).format(totalinterest);
            $(table.column(1).footer()).html(formattedSum);
            $(table.column(2).footer()).html(formattedinterest);
        });

        $(document).on('click', '.view-btn', function() {
            var date = $(this).data('id');

            $.ajax({
                url: '/getDailyReport-PaidCustomer',
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
                    $('#totalPayment').text(totalPayment.toFixed(2));

                    $('#example1').DataTable({
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
                        $('#example1').DataTable().row.add([
                            item.CustomLoanId,
                            item.fullname,
                            item.payment,
                            item.nic,

                        ]).draw();
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);

                }
            });

        });
        $(document).on('click', '.view-btn2', function() {
            var date = $(this).data('id');

            $.ajax({
                url: '/getDailyCollectionReport-PaidCustomer',
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
                            item.payment,
                            item.nic,

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
