@extends('layout.layout')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h3>Loan Amount</h3>
                    <div class="sub-title">
                        <br>
                        <h2 id="loanAmount"></h2>
                    </div>


                    <div class="sub-title">
                        <span class="mr-1">Interst Rate</span> |
                        <span class="mx-1 finalInterestrate"></span>
                        <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>Interest Amount</h2>
                    <div class="sub-title">
                        <br>
                        <h2 id="finalInterestAmount"></h2>
                    </div>

                    <div class="sub-title">
                        <span class="mr-1">Interst Rate</span> |
                        <span class="mr-1 finalInterestrate" id="finalInterestrate"></span>
                        <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>Total Paid</h2>
                    <div class="sub-title">
                        <br>
                        <h2 id="totalPaid"></h2>
                    </div>


                    <div class="sub-title">
                        <span class="mr-1">Paid Percentage</span> |
                        <span class="mx-1 paymentPrecentage"></span>
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
                        <h2 id="different"></h2>
                    </div>
                    <div class="sub-title">
                        <span class="mr-1" id='note'></span>

                        <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row" style="position: relative; top:-50px;">
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
                    <table id="example" class="table table-hover table-product" style="width: 100%; ">
                        <thead>
                            <tr>
                                <th>Invoice Id</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Payment Category</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($loanDetails as $loanDetail)
                                <tr>
                                    <td>{{ $loanDetail->CustomLoanId }}/{{ $loanDetail->id }}</td>
                                    <td>{{ $loanDetail->payment_date }}</td>
                                    <td>{{ $loanDetail->payment }}</td>
                                    <td>{{ $loanDetail->category_of_payment }}</td>
                                    <td>{{ $loanDetail->payment_time }}</td>
                                    <td><button type="button" class="btn-sm btn-danger delete"
                                            data-id="{{ $loanDetail->id }}">Delete</button></td>
                                </tr>
                            @endforeach

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
        });


        var loanId = @json($id);
        $.ajax({
            url: '/loan-history-bycustomer/' + loanId,
            method: 'GET',

            success: function(response) {
                var data = response.data;
                console.log(data);
                $.each(data, function(index, item) {
                    var interest_schema = item.interest_schema;
                    var Previousoutstandingloans = 0;
                    var ad_previes_outstand = parseInt(item.ad_previes_outstand);
                    if (ad_previes_outstand == 1) {
                        Previousoutstandingloans = parseFloat(item
                            .Previousoutstandingloans);
                    } else {
                        Previousoutstandingloans = 0;
                    }
                    var interest_amount = parseInt(item.interest_amount);
                    interestSc = interest_schema;
                    var pay_amount = parseInt(item.pay_amount);
                    const EndDate = new Date(item.end_date);
                    const StartDate = new Date(item.start_date);
                    const today = new Date();
                    var maximum_amount = parseInt(item.capital_amount);
                    const complete_date = item.loan_complete_date;

                    var totalAmount = parseInt(item.totalAmount);
                    var penalty_interest = parseInt(item.penaltyInterest);
                    var interest_rate = parseInt(item.interest_rate);
                    var sum_interest_amount = parseInt(item.sum_interest_amount);
                    const interest = interest_rate;
                    var result = '';
                    var result2 = '';
                    var result3 = '';
                    var amountInterestWithPreviousWithPenalty = '';
                    var resultWithIntersetPaymentWithPenalty = '';
                    var resultWithIntersetPayment = '';
                    var resultCount = 0;
                    var finalLoanAmount = 0;
                    var finalInterestrate = 0;
                    var finalInterestAmount = 0;
                    var range = ''
                    if (interest_schema == 'For Each Months') {
                        var amountInterestWithPrevious = " ";
                        var resultCount = 0;
                        if (complete_date != null) {
                            var loan_complete_date = new Date(complete_date);
                            range = loan_complete_date;
                        } else {
                            range = today;
                        }
                        while (StartDate <= range) {
                            resultCount++;
                            var amountInterest = maximum_amount + (maximum_amount *
                                interest_rate / 100);
                            amountInterestWithPrevious = amountInterest +
                                Previousoutstandingloans;

                            var interestWithoutPenaltyInterest = amountInterest.toFixed(2);
                            var interestWithPenaltyInterest = amountInterest +
                                penalty_interest;


                            if (sum_interest_amount > 0) {

                                if (penalty_interest > 0) {
                                    finalInterestAmount = (penalty_interest + (
                                        interestWithPenaltyInterest -
                                        maximum_amount)) - sum_interest_amount;
                                } else {
                                    finalInterestAmount = (interestWithoutPenaltyInterest -
                                            maximum_amount) -
                                        sum_interest_amount;
                                }
                            } else {

                                if (penalty_interest > 0) {

                                    finalInterestAmount = (penalty_interest +
                                            interestWithPenaltyInterest) -
                                        maximum_amount;
                                } else {

                                    finalInterestAmount = interestWithoutPenaltyInterest -
                                        maximum_amount;
                                }
                            }

                            if (interest_amount > 0) {
                                if (penalty_interest > 0) {
                                    finalLoanAmount = (amountInterestWithPrevious +
                                        penalty_interest) - interest_amount;
                                } else {
                                    finalLoanAmount = amountInterestWithPrevious -
                                        interest_amount;
                                }
                            } else {
                                if (penalty_interest > 0) {
                                    finalLoanAmount = amountInterestWithPrevious +
                                        penalty_interest;
                                } else {
                                    finalLoanAmount = amountInterestWithPrevious;
                                }
                            }

                            interest_rate += interest;
                            StartDate.setDate(StartDate.getDate() + 30);
                            finalInterestrate = interest;
                        }
                    } else if (interest_schema == 'Daily') {
                        var timeDiff = ''
                        if (complete_date != null) {
                            var loan_complete_date = new Date(complete_date);
                            timeDiff = loan_complete_date.getTime() - StartDate.getTime();
                        } else {
                            timeDiff = today.getTime() - StartDate.getTime();
                        }

                        const daysDiff = Math.floor(timeDiff / 86400000);
                        const interest_rate_for_date = (interest_rate / 30) * daysDiff;
                        const amountInterestForDate = maximum_amount + (maximum_amount *
                            interest_rate_for_date / 100);
                        var amountInterestForDateWithPrevious = amountInterestForDate +
                            Previousoutstandingloans;
                        result = amountInterestForDate.toFixed(3)
                        var interst_amount = result - maximum_amount
                        var currentInterest = interst_amount - sum_interest_amount

                        if (sum_interest_amount > 0) {
                            if (penalty_interest > 0) {
                                var currentInterestWithPenalty = currentInterest +
                                    penalty_interest
                                finalInterestAmount = currentInterestWithPenalty.toFixed(2);
                            } else {
                                finalInterestAmount = currentInterest.toFixed(2);
                            }

                            // return interest_amount
                        } else {
                            if (penalty_interest > 0) {
                                finalInterestAmount = interst_amount + penalty_interest;

                            } else {
                                finalInterestAmount = interst_amount.toFixed(2);
                            }

                        }

                        if (interest_amount > 0) {
                            if (penalty_interest > 0) {
                                finalInterestrate = interest_rate_for_date.toFixed(3);
                                finalLoanAmount = (amountInterestForDateWithPrevious +
                                    penalty_interest) - interest_amount;
                            } else {
                                finalInterestrate = interest_rate_for_date.toFixed(3);
                                finalLoanAmount = amountInterestForDateWithPrevious -
                                    interest_amount;
                            }
                        } else {
                            if (penalty_interest > 0) {
                                finalInterestrate = interest_rate_for_date.toFixed(3);
                                finalLoanAmount = amountInterestForDateWithPrevious +
                                    penalty_interest;
                            } else {
                                finalInterestrate = interest_rate_for_date.toFixed(3);
                                finalLoanAmount = amountInterestForDateWithPrevious;
                            }
                        }
                    } else {
                        if (interest_amount > 0) {
                            finalLoanAmount = (totalAmount + Previousoutstandingloans) -
                                interest_amount;
                            finalInterestrate = totalAmount - maximum_amount
                        } else {
                            finalLoanAmount = totalAmount + Previousoutstandingloans;
                            finalInterestrate = totalAmount - maximum_amount
                        }
                    }





                    var diff = finalLoanAmount - pay_amount;
                    if (diff > 0) {
                        $('#different').html(diff.toFixed(2));
                        $('#note').html("The outstanding Amount");
                    } else {
                        $('#different').html(Math.abs(diff.toFixed(2)));
                        $('#note').html("Excess settled Amount");
                    }
                    var paymentPrecentage = (pay_amount / finalLoanAmount) * 100
                    $('.paymentPrecentage').html(paymentPrecentage.toFixed(2) + "%");
                    $('#totalPaid').html(pay_amount);
                    $('.finalInterestrate').html(finalInterestrate + "%");
                    $('#finalInterestAmount').html(finalInterestAmount);
                    $('#loanAmount').html(finalLoanAmount.toFixed(2));

                });
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });


        $(document).on('click', '.delete', function() {
            var paymentHistoryId = $(this).data('id');


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
                confirmButtonText: 'Yes, Delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "/paymentHistory-delete",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "POST",
                        data: JSON.stringify({
                            'paymentHistoryId': paymentHistoryId
                        }),
                        contentType: "application/json",
                        success: function(response) {
                            console.log(response)
                        },
                    });
                    swalWithBootstrapButtons.fire(
                        'Loan Delete!',
                        'Your Loan has been Deleted.',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })

        });





    });
</script>
