@extends('layout.layout')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h3>Total Loan</h3>
                    <div class="sub-title">
                        <br>
                        <h2></h2>
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
                        <h2></h2>
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
                        <h2></h2>
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
                        <h2>
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
    <div class="row" style="position: relative; top:-70px;">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Products Inventory</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <table id="MortgageReport" class="table table-hover table-product  nowrap" style="width: 100%; ">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Total Issued</th>
                                <th>Total Collected</th>
                                <th>Total Collected <br>Capital</th>
                                <th>Total Collected <br>Interest</th>
                                <th>Difference</th>
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
                                <th>View Loan</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('layout.footerlink')
<script>
    $(document).ready(function() {
        var table = $('#MortgageReport').DataTable({
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

            ajax: "{{ route('get-branch-loan') }}",

            columns: [{
                    data: 'branch_name',
                    name: 'branch_name'
                },
                {
                    data: 'total_issue',
                    name: 'total_issue',
                    render: function(data, type, row, meta) {
                        var formattedNumber = new Intl.NumberFormat('en-US', {
                            minimumFractionDigits: 2,
                            maximumFractionDigits: 2
                        }).format(row.total_issue);

                        return formattedNumber;
                    }
                },

                {
                    data: 'total_collect',
                    name: 'total_collect',
                    render: function(data, type, row, meta) {
                        var formattedNumber = new Intl.NumberFormat('en-US', {
                            minimumFractionDigits: 2,
                            maximumFractionDigits: 2
                        }).format(row.total_collect);

                        return formattedNumber
                    }
                },
                {
                    data: 'total_collect_capital',
                    name: 'total_collect_capital',
                    render: function(data, type, row, meta) {
                        var formattedNumber = new Intl.NumberFormat('en-US', {
                            minimumFractionDigits: 2,
                            maximumFractionDigits: 2
                        }).format(row.total_collect_capital);

                        return formattedNumber
                    }
                },
                {
                    data: 'total_collect_interest',
                    name: 'total_collect_interest',
                    render: function(data, type, row, meta) {
                        var formattedNumber = new Intl.NumberFormat('en-US', {
                            minimumFractionDigits: 2,
                            maximumFractionDigits: 2
                        }).format(row.total_collect_interest);

                        return formattedNumber
                    }

                },

                {
                    data: 'id',
                    name: 'view',
                    render: function(data, type, row, meta) {
                        var total_issue = parseFloat(row.total_issue);
                        var total_collect = parseFloat(row.total_collect);
                        return total_collect - total_issue;
                    }
                },

                {
                    data: 'id',
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
                // Display the sum in an alert

            }
        });



        // $(document).on('click', '.view-btn', function() {
        //     var date = $(this).data('id');

        //     $.ajax({
        //         url: '/get-paied-amount-mortgage-monthly-report',
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         type: "POST",
        //         data: {
        //             'date': date
        //         },
        //         success: function(response) {
        //             var data = response.data;
        //             console.log(data);

        //             var totalPayment = 0;
        //             $.each(data, function(index, item) {
        //                 totalPayment += parseFloat(item.sum_payment);
        //             });

        //             // Update the total payment display
        //             $('#totalPayment').text(totalPayment.toFixed(2));

        //             // Destroy existing DataTable instance
        //             var table = $('#example1').DataTable();
        //             if ($.fn.DataTable.isDataTable('#example1')) {
        //                 table.destroy();
        //             }

        //             // Initialize DataTable
        //             table = $('#example1').DataTable({
        //                 dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
        //                     "<'row'<'col-sm-12'tr>>" +
        //                     "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        //                 buttons: ['csv', 'excel', 'pdf'],
        //                 order: [
        //                     [0, 'desc']
        //                 ],
        //                 lengthMenu: [
        //                     [5, 10, 25, 50, 100, 200, -1],
        //                     [5, 10, 25, 50, 100, 200, "All"]
        //                 ]
        //             }).clear().draw();

        //             // Add data to the DataTable
        //             $.each(data, function(index, item) {
        //                 table.row.add([
        //                     item.loan_id,
        //                     item.fullname,
        //                     item.sum_payment,
        //                     item.total_Capital_amount,
        //                     item.total_interest_amount,
        //                 ]).draw();
        //             });
        //         },
        //         error: function(xhr, status, error) {
        //             console.error(xhr.responseText);
        //         }
        //     });

        // });
        // $(document).on('click', '.view_given_loan', function() {
        //     var date = $(this).data('id');

        //     $.ajax({
        //         url: '/get-mortgage-capital-issued-monthly',
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         type: "POST",
        //         data: {
        //             'date': date
        //         },
        //         success: function(response) {
        //             var data = response.data;
        //             console.log(data);

        //             var totalPayment = 0;
        //             $.each(data, function(index, item) {
        //                 totalPayment += parseFloat(item.maximum_amount);
        //             });

        //             // Update the total payment display
        //             $('#totalPaymentDailyCollection').text(totalPayment.toFixed(2));

        //             // Destroy existing DataTable instance
        //             var table = $('#dailyCollectionReport').DataTable();
        //             if ($.fn.DataTable.isDataTable('#dailyCollectionReport')) {
        //                 table.destroy();
        //             }

        //             // Initialize DataTable
        //             table = $('#dailyCollectionReport').DataTable({
        //                 dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
        //                     "<'row'<'col-sm-12'tr>>" +
        //                     "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        //                 buttons: ['csv', 'excel', 'pdf'],
        //                 order: [
        //                     [0, 'desc']
        //                 ],
        //                 lengthMenu: [
        //                     [5, 10, 25, 50, 100, 200, -1],
        //                     [5, 10, 25, 50, 100, 200, "All"]
        //                 ]
        //             }).clear().draw();

        //             // Add data to the DataTable
        //             $.each(data, function(index, item) {
        //                 table.row.add([
        //                     item.id,
        //                     item.fullname,
        //                     item.start_date,
        //                     item.maximum_amount,
        //                 ]).draw();
        //             });
        //         },
        //         error: function(xhr, status, error) {
        //             console.error(xhr.responseText);
        //         }
        //     });


        // });

    });
</script>
