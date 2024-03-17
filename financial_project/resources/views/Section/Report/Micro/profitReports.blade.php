@extends('layout.layout')
@section('content')
    {{-- <div class="row">
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
                        <h2 id="totalInterest"></h2>
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
    </div> --}}
    <div class="card card-default" style="position: relative; ">

        <div class="card-body1">
            <div class="collapse" id="collapse-nav-underline-justify">

            </div>
            <div class="border p-6">
                <ul class="nav nav-underline-active-primary mb-3 justify-content-between" id="pills-tab12" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-home-underline-primary"
                            role="tab" aria-controls="nav-tabs" aria-selected="true">Profit Report</a>
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
                            <table id="profitReport" class="table table-hover table-product  nowrap" style="width: 100%; ">
                                <thead>
                                    <tr class="table-header">
                                        <th>Loan ID</th>
                                        <th>Name</th>
                                        <th>Interst</th>
                                        <th>Loan</th>
                                        <th>Paid</th>
                                        <th>Due</th>
                                        <th>Capital</th>
                                        <th>Profit</th>
                                        <th>Start Date</th>
                                        <th>Completed Date</th>
                                        <th>Action</th>


                                        {{-- <th>Action</th>  --}}
                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Loan ID</th>
                                        <th>Name</th>
                                        <th>Interst</th>
                                        <th>Loan</th>
                                        <th>Paid</th>
                                        <th>Due</th>
                                        <th></th>
                                        <th>Profit</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>


                                        {{-- <th>Action</th>  --}}
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile-Salary-primary" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        <h2 style="text-align: center; margin-bottom:20px;">This Report For Daily Collection</h2>
                        {{-- {{-- <table id="ongoinLoan" class="display nowrap" style="width:100%"> --}}

                    </div>
                    <div class="tab-pane fade" id="nav-profile-Penalty-loan" role="tabpanel"
                        aria-labelledby="nav-Penalty-loan-tab">


                    </div>



                </div>

            </div>
        </div>
    </div>
@endsection
@include('layout.footerlink')
<script>
    $(document).ready(function() {

        var profitReport = $('#profitReport').DataTable({
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
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
            ],
            ajax: "{{ route('get-micro-Loan-all-report') }}",
            createdRow: function(row, data, dataIndex) {
                endDate = data.end_date;
                var today = new Date();
                today.setHours(0, 0, 0, 0);
                formattedToday = today.toISOString().slice(0, 10);

                if (data.id === null) {
                    $(row).hide();
                } else if (data.loan_status === 2) {
                    $(row).addClass('green-row');
                }
            },
            rowCallback: function(row, data, index) {
                if (data.loan_status === 2) {
                    $(row).find('td').css('background-color', '#42b883').css('color', 'white');
                }
                if (data.loan_status === 1) {
                    var rowEndDate = new Date(data.end_date);
                    if (rowEndDate < new Date(formattedToday)) {
                        $(row).find('td').css('background-color', 'red').css('color', 'white');
                    }
                }

            },
            columns: [{
                    data: 'CustomLoanId',
                    name: 'CustomLoanId'
                },
                {
                    data: 'fullname',
                    name: 'fullname'
                },
                {
                    data: 'totalAmount',
                    name: 'interestAmount',
                    render: function(data, type, row, meta) {
                        var totalInterstSum = 0;
                        var interest_schema = row.interest_schema;
                        interestSc = interest_schema;
                        const EndDate = new Date(row.end_date);
                        var sum_interest_amount = parseInt(row.sum_interest_amount);
                        const StartDate = new Date(row.start_date);
                        var penalty_interest = parseInt(row.penaltyInterest);
                        var interest_amount = parseInt(row.interest_amount);
                        const today = new Date();
                        var maximum_amount = parseInt(row.capital_amount);
                        var totalAmount = parseInt(row.totalAmount);
                        const complete_date = new Date(row.loan_complete_date);
                        var loan_status = parseInt(row.loan_status);
                        var interest_rate = parseInt(row.interest_rate);
                        const interest = interest_rate;
                        var result = '';
                        var result2 = '';
                        var resultCount = 0;
                        if (interest_schema == 'For Each Months') {
                            var difDate = '';
                            if (loan_status == 2) {
                                difDate = complete_date.getTime();
                            } else {
                                difDate = today.getTime();
                            }
                            while (StartDate <= difDate) {
                                resultCount++;
                                var amountInterest = maximum_amount + (maximum_amount *
                                    interest_rate / 100);
                                result = amountInterest.toFixed(2);
                                result2 = amountInterest + penalty_interest;
                                // totalAmountAccordingTime = amountInterest;
                                interest_rate += interest
                                StartDate.setDate(StartDate.getDate() + 30);

                            }
                            if (sum_interest_amount > 0) {
                                if (penalty_interest > 0) {
                                    return (penalty_interest + (result2 - maximum_amount)) -
                                        sum_interest_amount;
                                } else {
                                    return (result - maximum_amount) - sum_interest_amount;
                                }
                            } else {
                                if (penalty_interest > 0) {
                                    return (penalty_interest + result2) - maximum_amount;
                                } else {
                                    return result - maximum_amount;
                                }
                            }

                        }
                        if (interest_schema == 'Daily') {
                            var timeDiff = ''
                            if (loan_status == 2) {

                                timeDiff = complete_date.getTime() - StartDate.getTime();

                            } else {

                                timeDiff = today.getTime() - StartDate.getTime();
                            }

                            const daysDiff = Math.floor(timeDiff / 86400000);
                            var interest_rate_for_date = (interest_rate / 30) * daysDiff;
                            amountInterestForDate = maximum_amount + (maximum_amount *
                                interest_rate_for_date / 100);
                            result = amountInterestForDate.toFixed(3)
                            var interst_amount = result - maximum_amount
                            var currentInterest = interst_amount - sum_interest_amount

                            if (sum_interest_amount > 0) {
                                if (penalty_interest > 0) {
                                    var currentInterestWithPenalty = currentInterest +
                                        penalty_interest
                                    return currentInterestWithPenalty.toFixed(3);
                                } else {
                                    return currentInterest.toFixed(3);
                                }

                                // return interest_amount
                            } else {
                                if (penalty_interest > 0) {
                                    return interst_amount + penalty_interest;

                                } else {
                                    return interst_amount.toFixed(3);
                                }

                            }


                        } else {
                            return totalAmount - maximum_amount;
                        }

                    }
                },
                {
                    data: 'totalAmount',
                    name: 'totalAmount',
                    render: function(data, type, row, meta) {
                        var interest_schema = row.interest_schema;
                        var Previousoutstandingloans = parseFloat(row.Previousoutstandingloans);
                        var interest_amount = parseInt(row.interest_amount);
                        interestSc = interest_schema;
                        const EndDate = new Date(row.end_date);
                        const StartDate = new Date(row.start_date);
                        const complete_date = new Date(row.loan_complete_date);
                        var loan_status = parseInt(row.loan_status);
                        const today = new Date();
                        var maximum_amount = parseInt(row.capital_amount);
                        var totalAmount = parseInt(row.totalAmount);
                        var penalty_interest = parseInt(row.penaltyInterest);
                        var interest_rate = parseInt(row.interest_rate);
                        const interest = interest_rate;
                        var result = '';
                        var result2 = '';
                        var result3 = '';
                        var amountInterestWithPreviousWithPenalty = '';
                        var resultWithIntersetPaymentWithPenalty = '';
                        var resultWithIntersetPayment = '';
                        var resultCount = 0;
                        if (interest_schema == 'For Each Months') {
                            var amountInterestWithPrevious = " "
                            var difDate = '';
                            if (loan_status == 2) {
                                difDate = complete_date.getTime();
                            } else {
                                difDate = today.getTime();
                            }
                            while (StartDate <= difDate) {
                                resultCount++;
                                var amountInterest = maximum_amount + (maximum_amount *
                                    interest_rate / 100);
                                amountInterestWithPrevious = amountInterest +
                                    Previousoutstandingloans;
                                result = '(' + interest_rate + ')%' + " " +
                                    amountInterestWithPrevious.toFixed(2) + '\n';
                                amountInterestWithPreviousWithPenalty =
                                    amountInterestWithPrevious + penalty_interest
                                result4 = '(' + interest_rate + ')%' + " " +
                                    amountInterestWithPreviousWithPenalty.toFixed(2) + '\n';

                                resultWithIntersetPayment = amountInterestWithPrevious -
                                    interest_amount;
                                result2 = '(' + interest_rate + ')%' + " " +
                                    resultWithIntersetPayment.toFixed(2) + '\n';

                                resultWithIntersetPaymentWithPenalty =
                                    resultWithIntersetPayment + penalty_interest
                                result3 = '(' + interest_rate + ')%' + " " +
                                    resultWithIntersetPaymentWithPenalty.toFixed(2) + '\n';
                                interest_rate += interest
                                StartDate.setDate(StartDate.getDate() + 30);

                            }
                            totalAmountAccordingTime = amountInterestWithPrevious;
                            if (interest_amount > 0) {
                                if (penalty_interest > 0) {
                                    return result3
                                } else {
                                    return result2;
                                }


                            } else {
                                if (penalty_interest > 0) {
                                    return result4
                                } else {
                                    return result;
                                }
                            }
                            // return result;
                        }
                        if (interest_schema == 'Daily') {
                            var timeDiff = ''
                            if (loan_status == 2) {

                                timeDiff = complete_date.getTime() - StartDate.getTime();

                            } else {

                                timeDiff = today.getTime() - StartDate.getTime();
                            }

                            const daysDiff = Math.floor(timeDiff / 86400000);
                            const interest_rate_for_date = (interest_rate / 30) * daysDiff;
                            const amountInterestForDate = maximum_amount + (maximum_amount *
                                interest_rate_for_date / 100);
                            var amountInterestForDateWithPrevious = amountInterestForDate +
                                Previousoutstandingloans;
                            var amountInterestForDateWithPreviousWithPenalty =
                                amountInterestForDateWithPrevious + penalty_interest

                            if (interest_amount > 0) {
                                if (penalty_interest > 0) {
                                    var result = (amountInterestForDateWithPrevious +
                                        penalty_interest) - interest_amount
                                    return `(${interest_rate_for_date.toFixed(3)}%) ${result.toFixed(3)}`;
                                } else {
                                    var result = amountInterestForDateWithPrevious -
                                        interest_amount.toFixed(3)
                                    return `(${interest_rate_for_date.toFixed(3)}%) ${result.toFixed(3)}`;
                                }

                            } else {
                                if (penalty_interest > 0) {
                                    return `(${interest_rate_for_date.toFixed(3)}%) ${amountInterestForDateWithPreviousWithPenalty.toFixed(3)}`;

                                } else {
                                    return `(${interest_rate_for_date.toFixed(3)}%) ${amountInterestForDateWithPrevious.toFixed(3)}`;
                                }

                            }



                        }
                        if (interest_amount > 0) {
                            return (totalAmount + Previousoutstandingloans) - interest_amount;
                        } else {
                            return (totalAmount + Previousoutstandingloans);
                        }

                    }
                },
                // {
                //     data: 'id',
                //     name: 'balance',
                //     render: function(data, type, row, meta) {
                //         var total_amount = parseInt(row.totalAmount);
                //         var due_amount = parseInt(row.due_amount);
                //         var paid_amount = total_amount - due_amount;
                //         return paid_amount;
                //     }
                // },
                {
                    data: 'pay_amount',
                    name: 'pay_amount'
                },
                {
                    data: 'id',
                    name: 'due_amount',
                    render: function(data, type, row, meta) {
                        var Previousoutstandingloans = parseFloat(row.Previousoutstandingloans);
                        var interest_schema = row.interest_schema;
                        var due_amount = parseInt(row.due_amount);
                        const EndDate = new Date(row.end_date);
                        const complete_date = new Date(row.loan_complete_date);
                        const StartDate = new Date(row.start_date);
                        var loan_status = parseInt(row.loan_status);
                        const today = new Date();
                        var maximum_amount = parseInt(row.capital_amount);
                        var totalAmount = parseInt(row.totalAmount);
                        var interest_rate = parseInt(row.interest_rate);
                        var sum_pay_amount = parseInt(row.sum_pay_amount);
                        var penalty_interest = parseInt(row.penaltyInterest);
                        const interest = interest_rate;
                        var result = '';
                        var resultCount = 0;
                        var dueWithPenalty = '';
                        if (interest_schema == 'For Each Months') {
                            var difDate = '';
                            if (loan_status == 2) {
                                difDate = complete_date.getTime();
                            } else {
                                difDate = today.getTime();
                            }
                            while (StartDate <= difDate) {
                                resultCount++;
                                var amountInterest = maximum_amount + (maximum_amount *
                                    interest_rate / 100);
                                var amountInterestWithPrevious = amountInterest +
                                    Previousoutstandingloans;
                                result = amountInterestWithPrevious.toFixed(2);
                                var resultWithPanelty = amountInterestWithPrevious +
                                    penalty_interest;
                                // totalAmountAccordingTime = amountInterestWithPrevious;
                                interest_rate += interest
                                StartDate.setDate(StartDate.getDate() + 30);

                            }
                            if (penalty_interest > 0) {
                                return (resultWithPanelty) - sum_pay_amount;
                            } else {
                                return result - sum_pay_amount;
                            }

                        }
                        if (interest_schema == 'Daily') {
                            var timeDiff = ''
                            if (loan_status == 2) {

                                timeDiff = complete_date.getTime() - StartDate.getTime();

                            } else {

                                timeDiff = today.getTime() - StartDate.getTime();
                            }
                            const daysDiff = Math.floor(timeDiff / 86400000);
                            var interest_rate_for_date = (interest_rate / 30) * daysDiff;
                            var total_amount = parseInt(row.totalAmount);

                            var due_amount = parseInt(row.due_amount);
                            var paid_amount = total_amount - due_amount;
                            amountInterestForDate = maximum_amount + (maximum_amount *
                                interest_rate_for_date / 100);
                            var amountInterestForDateWithPrevious = amountInterestForDate +
                                Previousoutstandingloans;
                            var dueAmount = amountInterestForDateWithPrevious - sum_pay_amount;
                            if (penalty_interest > 0) {
                                dueWithPenalty = dueAmount + penalty_interest
                                return dueWithPenalty.toFixed(3);
                            } else {
                                return dueAmount.toFixed(3);
                            }

                            // return amountInterestForDateWithPrevious.toFixed(3);


                        } else {
                            return due_amount;
                        }

                    }
                },

                {
                    data: 'maximum_amount',
                    name: 'maximum_amount'
                },
                {
                    data: 'installment_amount',
                    name: 'installment_amount',

                    render: function(data, type, row, meta) {
                        var maximum_amount = parseInt(row.capital_amount);
                        var pay_amount = parseInt(row.pay_amount);
                        var profit = pay_amount - maximum_amount
                        return profit

                    }
                },
                {
                    data: 'start_date',
                    name: 'start_date'
                },

                {
                    data: 'loan_complete_date',
                    name: 'loan_complete_date',

                },

                {
                    data: 'customer_id',
                    name: 'id',
                    render: function(data, type, row) {
                        var action = '<td>' +
                            '<div class="dropdown">' +
                            '<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>' +
                            '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">' +
                            '<a class="dropdown-item  view-profile" data-id="' + data +
                            '">View</a>' +
                            '<a class="dropdown-item  view-profile" data-id="' + data +
                            '">Payment History</a>' +
                            '</div>' +
                            '</div>' +
                            '</td>';

                        return action;
                    }
                },


            ]
        });

        profitReport.on('draw', function() {
            var totalCapitalSum = profitReport.column(6).data().reduce(function(a, b) {
                return a + b;
            }, 0);

            var formattedCapitalSum = new Intl.NumberFormat('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }).format(totalCapitalSum);

            var totalPaidSum = profitReport.column(4).data().reduce(function(a, b) {
                return a + b;
            }, 0);

            var formattedPaidSum = new Intl.NumberFormat('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }).format(totalPaidSum);



            $(profitReport.column(4).footer()).html(formattedPaidSum);
            $(profitReport.column(6).footer()).html(formattedCapitalSum);



        });


    });
</script>
