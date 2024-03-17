@extends('layout.layout')
@section('content')
    <div class="card card-default">

        <div class="card-body1">
            <div class="collapse" id="collapse-nav-underline-justify">

            </div>
            <div class="border p-6">
                <ul class="nav nav-underline-active-primary mb-3 justify-content-between" id="pills-tab12" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-home-underline-primary"
                            role="tab" aria-controls="nav-tabs" aria-selected="true">Ongoing Loan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile-Salary-primary"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Over due Loan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-Penalty-loan-tab" data-toggle="pill" href="#nav-profile-Penalty-loan"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Loan With Penalty</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile-Attendence-primary"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Complete Loan</a>
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

                        {{-- {{-- <table id="ongoinLoan" class="display nowrap" style="width:100%"> --}}
                        <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                            <table id="ongoinLoan" class="table table-hover table-product  nowrap" style="width: 100%; ">
                                <thead>
                                    <tr class="table-header">
                                        <th>Loan ID</th>
                                        <th>Name</th>
                                        <th>Interst</th>
                                        <th>Paid Interest</th>
                                        <th>Loan</th>
                                        <th>Paid</th>
                                        <th>Due</th>
                                        <th>Capital</th>
                                        <th>Installment</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th> Remaining <br> Dates</th>
                                        <th>Action</th>
                                        <th>Ad Payment</th>

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
                                        <th>Paid Interest</th>
                                        <th>Loan</th>
                                        <th>Paid</th>
                                        <th>Due</th>
                                        <th>Capital</th>
                                        <th>installment</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th> Remaining <br> Dates</th>
                                        <th>Action</th>
                                        <th>Ad Payment</th>

                                        {{-- <th>Action</th>  --}}
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile-Salary-primary" role="tabpanel"
                        aria-labelledby="nav-profile-tab">

                        <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                            <table id="overDueLoan" class="table table-hover table-product  nowrap" style="width: 100%; ">
                                <thead>
                                    <tr>
                                        <th>Loan ID</th>
                                        <th>NIC</th>
                                        <th>Loan</th>
                                        <th>Paid</th>
                                        <th>Due</th>
                                        <th>Duration</th>
                                        <th>Installment</th>
                                        <th>Installments <br>
                                            count</th>
                                        <th>Pay <br> Method</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th> Remaining <br> Dates</th>

                                        <th>Ad Penalty</th>
                                        <th>Payment <br> History</th>
                                        {{-- <th>Action</th>  --}}
                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Loan ID</th>
                                        <th>NIC</th>
                                        <th>Loan</th>
                                        <th>Paid</th>
                                        <th>Due</th>
                                        <th>Duration</th>
                                        <th>installment</th>
                                        <th>installments <br>
                                            count</th>
                                        <th>Pay <br> Method</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th> Remaining <br> Dates</th>

                                        <th>Ad Penalty</th>
                                        <th>Payment <br> History</th>
                                        {{-- <th>Action</th>  --}}
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile-Penalty-loan" role="tabpanel"
                        aria-labelledby="nav-Penalty-loan-tab">
                        vvvvvvvvvvvvvvvvvv
                    </div>
                    <div class="tab-pane fade" id="nav-profile-Attendence-primary" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                            <table id="completedLoan" class="table table-hover table-product  nowrap" style="width: 100%; ">
                                <thead>
                                    <tr class="table-header">
                                        <th>Loan ID</th>
                                        <th>Name</th>
                                        <th>Expected</th>
                                        <th>Capital</th>
                                        <th>Amount due</th>
                                        <th>Paid</th>
                                        <th>Duration</th>
                                        <th>Pay <br> Method</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th> complete <br> Dates</th>
                                        <th> complete <br> Time</th>
                                        <th> Remaining <br> Dates</th>

                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Loan ID</th>
                                        <th>Name</th>
                                        <th>Expected</th>
                                        <th>Capital</th>
                                        <th>Amount due</th>
                                        <th>Paid</th>
                                        <th>Duration</th>
                                        <th>Pay <br> Method</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th> complete <br> Dates</th>
                                        <th> complete <br> Time</th>
                                        <th> Remaining <br> Dates</th>

                                    </tr>
                                </tfoot>
                            </table>

                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Payment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">
                                    </label>
                                    <div class="col-md-8 col-sm-6 ">
                                        <input type="hidden" id="Id" required="required" class="form-control ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Loan Id
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-6 ">
                                        <input type="text" id="LoanId" required="required" class="form-control"
                                            readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Select
                                        Date <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-6 ">
                                        <input type="date" id="PaymentDate" required="required"
                                            class="form-control  ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Installment Amount <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-6 ">
                                        <input type="text" id="InstallmentAmount" required="required"
                                            class="form-control">
                                    </div>

                                    <div class="col-md-8 col-sm-6 ">
                                        <input type="hidden" id="due_amount" required="required" class="form-control">
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Type of
                                        Payment <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-6 ">
                                        <select class="form-control" aria-label="Default select example"
                                            id="TypeOfPayment">
                                            <option value="Total loan amount">Total loan amount</option>
                                            <option value="Capital amount only">Capital amount only</option>
                                            <option value="Interest amount only">Interest amount only</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Remarks</span>
                                    </label>
                                    <div class="col-md-8 col-sm-6 ">
                                        <textarea id="w3review" name="w3review" class="form-control" id="Remind" rows="4" cols="50">

                                </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-success submitPayment " id="subm">Submit</button>
                    <button type="button" class="btn btn-sm btn-secondary hideThis" id="close"
                        data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-secondary hideThis" id="print">Print</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="border-style: none;">

                <div id="invoice-POS">

                    <center id="top">
                        <div class="logo">
                            <img src="image/logo.jpg" alt="Company Name" style="width: 60px" />
                        </div>
                        <div class="info">
                            <p style="font-size: 1.2em; color:black;">Ranro Holdings</p>
                            <p style="font-size: 1em; color:black;">
                                Address : No. 85 Teldeniya Rd, Menikhinna</br>
                                Phone : 081-4505999</br>
                            </p>

                        </div>
                        <!--End Info-->
                    </center>
                    <!--End InvoiceTop-->

                    <div id="mid">
                        <div class="info">
                            <p style="font-size: 1em; color:black;">Invoice Id :<strong id="invoiceId"
                                    style="font-size: 1em; color:black;"></strong></p>
                            <p style="font-size: 1em; color:black;">Loan Id :<strong id="lId"
                                    style="font-size: 1em; color:black;"></strong></p>
                            <p style="font-size: 1em; color:black;">Date :<strong id="paymentDate"
                                    style="font-size: 1em; color:black;"></strong></p>

                        </div>
                    </div>
                    <!--End Invoice Mid-->

                    <div id="bot">

                        <div id="table">
                            <table>

                                <tr class="service">
                                    <td class="tableitem">
                                        <p class="itemtext" style="font-size: 1em;">𝐃𝐞𝐭𝐚𝐢𝐥𝐬</p>
                                    </td>
                                    <td class="tableitem">
                                        <p class="itemtext"></p>
                                    </td>
                                    <td class="tableitem">
                                        <p class="itemtext"></p>
                                    </td>
                                    <td class="tableitem">
                                        <p class="itemtext"
                                            style="font-size: 1em; color:black; position:relative; right:-50px;">
                                            𝐀𝐦𝐨𝐮𝐧𝐭
                                        </p>
                                    </td>
                                </tr>

                                <br>
                                <tr class="service">
                                    <td class="tableitem">
                                        <p class="itemtext" style="font-size: 0.9em; color:black;">Paid Amount</p>
                                    </td>
                                    <td class="tableitem">
                                        <p class="itemtext"></p>
                                    </td>
                                    <td class="tableitem">
                                        <p class="itemtext"></p>
                                    </td>
                                    <td class="tableitem">
                                        <p class="itemtext"></p>
                                    </td>
                                    <td class="tableitem">
                                        <p class="itemtext" id="PAmount" style="font-size: 0.9em; color:black;"></p>
                                    </td>
                                </tr>

                                <tr class="service">
                                    <td class="tableitem">
                                        <p class="itemtext" style="font-size: 0.9em; color:black;">Total Paid</p>
                                    </td>
                                    <td class="tableitem">
                                        <p class="itemtext"></p>
                                    </td>
                                    <td class="tableitem">
                                        <p class="itemtext"></p>
                                    </td>
                                    <td class="tableitem">
                                        <p class="itemtext"></p>
                                    </td>
                                    <td class="tableitem">
                                        <p class="itemtext" id="TAmount" style="font-size: 0.9em; color:black;"></p>
                                    </td>
                                </tr>
                                <br>
                            </table>
                        </div>
                        <br>
                        <!--End Table-->
                        <div id="legalcopy">
                            <p class="legal" style="font-size: 1em; color:black;"><strong>Thank you for your business!
                                </strong> Dear <strong id="customerName"> </strong> Your loan repayment period ends
                                on <strong id="edate"> </strong>
                            </p>
                        </div>
                    </div>
                    <!--End InvoiceBot-->
                </div>
                <!--End Invoice-->


            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg penaltymodel" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                        <div class="row">
                            <div class="col">
                                <label for="fname">Loan Id:</label><br>
                                <input type="text" id="LoanIdNumber" name="fname" class="form-control col"
                                    style="width: 100%"><br>
                            </div>
                            <div class="col">
                                <label for="fname">Due Amount:</label><br>
                                <input type="text" id="DueAmount" name="fname" class="form-control col"
                                    style="width: 100%"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="fname">Penalty Percentage:</label><br>
                                <input type="text" id="PenaltyPercentage" name="fname" class="form-control col"
                                    style="width: 100%"><br>
                            </div>
                            <div class="col-sm">
                                <label for="middle-name" class="label-align">penalty Method<span
                                        class="required">*</span></label>
                                <div class="column" style="border: 1px solid rgb(98, 98, 98);">
                                    <select id="penaltyMethod" name="penaltyMethod[]" multiple class="form-control">
                                        {{-- <option>Loading...</option> --}}
                                        <option value="For the balance"> For the balance</option>
                                        <option value="Daily">Daily</option>
                                        <option value="Each Day">Each Day</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="fname">Sart Date:</label><br>
                                <input type="date" id="StartDate" name="" class="form-control col"
                                    style="width: 100%"><br>
                            </div>
                            <div class="col">
                                <label for="fname">End Date:</label><br>
                                <input type="date" id="EndDate" name="fname" class="form-control col"
                                    style="width: 100%"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="fname">Total Amount:</label><br>
                                <input type="text" id="TotalAmount" name="SartDate" class="form-control col"
                                    style="width: 100%"><br>
                            </div>
                            <div class="col-sm">
                                <label for="middle-name" class="label-align">payment method<span
                                        class="required">*</span></label>
                                <div class="column" style="border: 1px solid rgb(98, 98, 98);">
                                    <select id="paymentMethod" name="interest[]" multiple class="form-control">
                                        {{-- <option>Loading...</option> --}}
                                        <option value="Daily">Daily</option>
                                        <option value="Once in two days">Once in two days</option>
                                        <option value="Weakly">Weakly</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="Quarter">Quarter</option>
                                        <option value="At once">At once</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary submit-penalty-btn">Save changes</button>
                </div>
            </div>

        </div>
    </div>
@endsection
@include('layout.footerlink')
<script>
    $(document).ready(function() {
        var sumTotalValue = 0
        $('#ongoinLoan').DataTable({
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
            ajax: "{{ route('get-ongoing-mortgage-Loan') }}",
            createdRow: function(row, data, dataIndex) {
                // data.capital_date.forEach(function(item) {
                //     console.log(item.payment_date);
                // });
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
                // {
                //     data: 'totalAmount',
                //     name: 'totalAmount',
                //     render: function(data, type, row, meta) {
                //         // row.capital_date.forEach(function(item) {
                //         //     console.log(item.payment_date);
                //         // });
                //         var interest_schema = row.interest_schema;
                //         interestSc = interest_schema;
                //         const EndDate = new Date(row.end_date);
                //         var sum_interest_amount = parseInt(row.sum_interest_amount);
                //         const StartDate = new Date(row.start_date);
                //         var penalty_interest = parseInt(row.penaltyInterest);
                //         var interest_amount = parseInt(row.interest_amount);
                //         const today = new Date();
                //         var maximum_amount = parseInt(row.capital_amount);
                //         var totalAmount = parseInt(row.totalAmount);
                //         var interest_rate = parseInt(row.interest_rate);
                //         const interest = interest_rate;
                //         var result = '';
                //         var result2 = '';
                //         var resultCount = 0;
                //         if (interest_schema == 'For Each Months') {
                //             while (StartDate <= today) {
                //                 resultCount++;
                //                 var amountInterest = maximum_amount + (maximum_amount *
                //                     interest_rate / 100);
                //                 result = amountInterest.toFixed(2);
                //                 result2 = amountInterest + penalty_interest;
                //                 // totalAmountAccordingTime = amountInterest;
                //                 interest_rate += interest
                //                 StartDate.setDate(StartDate.getDate() + 30);

                //             }
                //             if (sum_interest_amount > 0) {
                //                 if (penalty_interest > 0) {
                //                     return (penalty_interest + (result2 - maximum_amount)) -
                //                         sum_interest_amount;
                //                 } else {
                //                     return (result - maximum_amount) - sum_interest_amount;
                //                 }
                //             } else {
                //                 if (penalty_interest > 0) {
                //                     return (penalty_interest + result2) - maximum_amount;
                //                 } else {
                //                     return result - maximum_amount;
                //                 }
                //             }

                //         }
                //         if (interest_schema == 'Daily') {
                //             const timeDiff = today.getTime() - StartDate.getTime();
                //             const daysDiff = Math.floor(timeDiff / 86400000);
                //             var interest_rate_for_date = (interest_rate / 30) * daysDiff;
                //             amountInterestForDate = maximum_amount + (maximum_amount *
                //                 interest_rate_for_date / 100);
                //             result = amountInterestForDate.toFixed(3)
                //             var interst_amount = result - maximum_amount
                //             var currentInterest = interst_amount - sum_interest_amount


                //             if (sum_interest_amount > 0) {
                //                 if (penalty_interest > 0) {
                //                     var currentInterestWithPenalty = currentInterest +
                //                         penalty_interest
                //                     return currentInterestWithPenalty.toFixed(3);
                //                 } else {
                //                     return currentInterest.toFixed(3);
                //                 }

                //                 // return interest_amount
                //             } else {
                //                 if (penalty_interest > 0) {
                //                     return interst_amount + penalty_interest;

                //                 } else {
                //                     return interst_amount.toFixed(3);
                //                 }

                //             }


                //         } else {
                //             return totalAmount - maximum_amount;
                //         }

                //     }
                // },
                {
                    data: '',
                    name: '',
                    render: function(data, type, row, meta) {
                        var interest_schema = row.interest_schema;
                        interestSc = interest_schema;
                        const EndDate = new Date(row.end_date);
                        var sum_interest_amount = parseFloat(row.sum_interest_amount);
                        const StartDate = new Date(row.start_date);
                        var penalty_interest = parseFloat(row.penaltyInterest);
                        var interest_amount = parseFloat(row.interest_amount);
                        const today = new Date();
                        var maximum_amount = parseFloat(row.capital_amount);
                        var totalAmount = parseFloat(row.totalAmount);
                        var interest_rate = parseFloat(row.interest_rate);
                        const interest = interest_rate;
                        var result = '';
                        var result2 = '';
                        var resultCount = 0;

                        if (interest_schema == 'For Each Months') {
                            while (StartDate <= today) {
                                resultCount++;
                                var amountInterest = maximum_amount + (maximum_amount *
                                    interest_rate / 100);
                                result = amountInterest.toFixed(2);
                                result2 = amountInterest + penalty_interest;

                                interest_rate += interest
                                StartDate.setDate(StartDate.getDate() + 30);
                            }

                            var calculatedValue = 0;

                            if (sum_interest_amount > 0) {
                                if (penalty_interest > 0) {
                                    calculatedValue = (penalty_interest + (result2 -
                                        maximum_amount)) - sum_interest_amount;
                                } else {
                                    calculatedValue = (result - maximum_amount) -
                                        sum_interest_amount;
                                }
                            } else {
                                if (penalty_interest > 0) {
                                    calculatedValue = (penalty_interest + result2) -
                                        maximum_amount;
                                } else {
                                    calculatedValue = result - maximum_amount;
                                }
                            }

                            // Add the value to the sum
                            sumTotalValue += parseFloat(calculatedValue);

                            return calculatedValue.toFixed(2);
                        }

                        if (interest_schema == 'Daily') {
                            const timeDiff = today.getTime() - StartDate.getTime();
                            const daysDiff = Math.floor(timeDiff / 86400000);
                            var interest_rate_for_date = (interest_rate / 30) * daysDiff;
                            amountInterestForDate = maximum_amount + (maximum_amount *
                                interest_rate_for_date / 100);
                            result = amountInterestForDate.toFixed(3)
                            var interst_amount = result - maximum_amount
                            var currentInterest = interst_amount - sum_interest_amount

                            var calculatedValue = 0;

                            if (sum_interest_amount > 0) {
                                if (penalty_interest > 0) {
                                    var currentInterestWithPenalty = currentInterest +
                                        penalty_interest
                                    calculatedValue = currentInterestWithPenalty.toFixed(3);
                                } else {
                                    calculatedValue = currentInterest.toFixed(3);
                                }
                            } else {
                                if (penalty_interest > 0) {
                                    calculatedValue = interst_amount + penalty_interest;
                                } else {
                                    calculatedValue = interst_amount.toFixed(3);
                                }
                            }

                            // Add the value to the sum
                            sumTotalValue += parseFloat(calculatedValue);

                            return calculatedValue;
                        } else {
                            var calculatedValue = totalAmount - maximum_amount;

                            // Add the value to the sum
                            sumTotalValue += parseFloat(calculatedValue);

                            return calculatedValue.toFixed(2);
                        }
                    }
                },


                {
                    data: 'sum_interest_amount',
                    name: 'sum_interest_amount'
                },
                {
                    data: 'totalAmount',
                    name: 'totalAmount',
                    render: function(data, type, row, meta) {
                        var interest_schema = row.interest_schema;
                        var Previousoutstandingloans = 0;
                        var interest_amount = parseFloat(row.interest_amount);
                        interestSc = interest_schema;
                        const EndDate = new Date(row.end_date);
                        const StartDate = new Date(row.start_date);
                        const today = new Date();
                        var maximum_amount = parseFloat(row.capital_amount);
                        var ad_previes_outstand = parseFloat(row.ad_previes_outstand);
                        if (ad_previes_outstand == 1) {
                            Previousoutstandingloans = parseFloat(row.Previousoutstandingloans);
                        } else {
                            Previousoutstandingloans = 0;
                        }
                        var totalAmount = parseFloat(row.totalAmount);
                        var penalty_interest = parseFloat(row.penaltyInterest);
                        var interest_rate = parseFloat(row.interest_rate);
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
                            while (StartDate <= today) {
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
                            const timeDiff = today.getTime() - StartDate.getTime();
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



                        } else {
                            if (interest_amount > 0) {
                                return (totalAmount + Previousoutstandingloans) -
                                    interest_amount;
                            } else {
                                return (totalAmount + Previousoutstandingloans);
                            }
                        }


                    }
                },

                {
                    data: 'pay_amount',
                    name: 'pay_amount'
                },
                {
                    data: 'due_amount',
                    name: 'due_amount',
                    render: function(data, type, row, meta) {
                        var Previousoutstandingloans = 0;
                        var ad_previes_outstand = parseFloat(row.ad_previes_outstand);
                        if (ad_previes_outstand == 1) {
                            Previousoutstandingloans = parseFloat(row.Previousoutstandingloans);
                        } else {
                            Previousoutstandingloans = 0;
                        }
                        var interest_schema = row.interest_schema;
                        var due_amount = parseFloat(row.due_amount);
                        const EndDate = new Date(row.end_date);
                        const StartDate = new Date(row.start_date);
                        const today = new Date();
                        var maximum_amount = parseFloat(row.capital_amount);
                        var totalAmount = parseFloat(row.totalAmount);
                        var interest_rate = parseFloat(row.interest_rate);
                        var sum_pay_amount = parseFloat(row.sum_pay_amount);
                        var penalty_interest = parseFloat(row.penaltyInterest);
                        const interest = interest_rate;
                        var result = '';
                        var resultCount = 0;
                        var dueWithPenalty = '';
                        if (interest_schema == 'For Each Months') {
                            while (StartDate <= today) {
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
                            const timeDiff = today.getTime() - StartDate.getTime();
                            const daysDiff = Math.floor(timeDiff / 86400000);
                            var interest_rate_for_date = (interest_rate / 30) * daysDiff;
                            var total_amount = parseFloat(row.totalAmount);

                            var due_amount = parseFloat(row.due_amount);
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
                    name: 'installment_amount'
                },

                {
                    data: 'start_date',
                    name: 'start_date'
                },

                {
                    data: 'end_date',
                    name: 'end_date'
                },
                {
                    data: 'start_date',
                    name: 'start_date',

                    render: function(data, type, row, meta) {
                        const EndDate = new Date(row.end_date);
                        const today = new Date();
                        const timeDiff = EndDate.getTime() - today.getTime();
                        const daysDiff = Math.floor(timeDiff / 86400000);
                        return daysDiff + ' ' + 'days left';
                    }
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
                            '<a class="dropdown-item  payment-history" data-id="' +
                            `${row.id}` +
                            '">Payment History</a>' +
                            '</div>' +
                            '</div>' +
                            '</td>';

                        return action;
                    }
                },

                {
                    data: 'id',
                    name: 'ad Payment',
                    render: function(data, type, row, meta) {
                        return `<button type="button" class="btn btn-sm btn-primary ad-payment-btn" data-toggle="modal" data-target="#exampleModalCenter"  data-id="${data}">Pay</button>`;
                    }
                },

            ],


        });







        var endDate, formattedToday;
        var today;

        $('#overDueLoan').DataTable({
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
            ajax: "{{ route('get-overdue-mortgage-Loan') }}",

            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'fullname',
                    name: 'fullname'
                },
                {
                    data: 'totalAmount',
                    name: 'totalAmount',
                    render: function(data, type, row, meta) {
                        var interest_schema = row.interest_schema;
                        var Previousoutstandingloans = 0;
                        var ad_previes_outstand = parseFloat(row.ad_previes_outstand);
                        if (ad_previes_outstand == 1) {
                            Previousoutstandingloans = parseFloat(row.Previousoutstandingloans);
                        } else {
                            Previousoutstandingloans = 0;
                        }
                        var interest_amount = parseFloat(row.interest_amount);
                        interestSc = interest_schema;
                        const EndDate = new Date(row.end_date);
                        const StartDate = new Date(row.start_date);
                        const today = new Date();
                        var maximum_amount = parseFloat(row.capital_amount);
                        var totalAmount = parseFloat(row.totalAmount);
                        var interest_rate = parseFloat(row.interest_rate);
                        const interest = interest_rate;
                        var result = '';
                        var resultWithIntersetPayment = '';
                        var resultCount = 0;
                        if (interest_schema == 'For Each Months') {
                            while (StartDate <= today) {
                                resultCount++;
                                var amountInterest = maximum_amount + (maximum_amount *
                                    interest_rate / 100);
                                var amountInterestWithPrevious = amountInterest +
                                    Previousoutstandingloans;
                                result = '(' + interest_rate + ')%' + " " +
                                    amountInterestWithPrevious.toFixed(2) + '\n';
                                // totalAmountAccordingTime = amountInterestWithPrevious;
                                resultWithIntersetPayment = amountInterestWithPrevious -
                                    interest_amount;
                                result2 = '(' + interest_rate + ')%' + " " +
                                    resultWithIntersetPayment.toFixed(2) + '\n';
                                interest_rate += interest
                                StartDate.setDate(StartDate.getDate() + 30);

                            }
                            if (interest_amount > 0) {

                                return result2;
                            } else {
                                return result;
                            }
                            // return result;
                        }
                        if (interest_schema == 'Daily') {
                            const timeDiff = today.getTime() - StartDate.getTime();
                            const daysDiff = Math.floor(timeDiff / 86400000);
                            const interest_rate_for_date = (interest_rate / 30) * daysDiff;
                            const amountInterestForDate = maximum_amount + (maximum_amount *
                                interest_rate_for_date / 100);
                            var amountInterestForDateWithPrevious = amountInterestForDate +
                                Previousoutstandingloans;

                            if (interest_amount > 0) {
                                return `(${interest_rate_for_date.toFixed(3)}%) ${amountInterestForDateWithPrevious - interest_amount.toFixed(3)}`;
                                // return interest_amount
                            } else {
                                return `(${interest_rate_for_date.toFixed(3)}%) ${amountInterestForDateWithPrevious.toFixed(3)}`;
                            }



                        }
                        if (interest_amount != null) {
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
                    data: 'due_amount',
                    name: 'due_amount',
                    render: function(data, type, row, meta) {
                        var Previousoutstandingloans = 0;
                        var ad_previes_outstand = parseFloat(row.ad_previes_outstand);
                        if (ad_previes_outstand == 1) {
                            Previousoutstandingloans = parseFloat(row.Previousoutstandingloans);
                        } else {
                            Previousoutstandingloans = 0;
                        }
                        var interest_schema = row.interest_schema;
                        var due_amount = parseFloat(row.due_amount);
                        const EndDate = new Date(row.end_date);
                        const StartDate = new Date(row.start_date);
                        const today = new Date();
                        var maximum_amount = parseFloat(row.capital_amount);
                        var totalAmount = parseFloat(row.totalAmount);
                        var interest_rate = parseFloat(row.interest_rate);
                        var sum_pay_amount = parseFloat(row.sum_pay_amount);
                        const interest = interest_rate;
                        var result = '';
                        var resultCount = 0;
                        if (interest_schema == 'For Each Months') {
                            while (StartDate <= today) {
                                resultCount++;
                                var amountInterest = maximum_amount + (maximum_amount *
                                    interest_rate / 100);
                                var amountInterestWithPrevious = amountInterest +
                                    Previousoutstandingloans;
                                result = amountInterestWithPrevious.toFixed(2);
                                // totalAmountAccordingTime = amountInterestWithPrevious;
                                interest_rate += interest
                                StartDate.setDate(StartDate.getDate() + 30);

                            }
                            return result - sum_pay_amount;
                        }
                        if (interest_schema == 'Daily') {
                            const timeDiff = today.getTime() - StartDate.getTime();
                            const daysDiff = Math.floor(timeDiff / 86400000);
                            var interest_rate_for_date = (interest_rate / 30) * daysDiff;
                            var total_amount = parseFloat(row.totalAmount);

                            var due_amount = parseFloat(row.due_amount);
                            var paid_amount = total_amount - due_amount;
                            amountInterestForDate = maximum_amount + (maximum_amount *
                                interest_rate_for_date / 100);
                            var amountInterestForDateWithPrevious = amountInterestForDate +
                                Previousoutstandingloans;
                            var dueAmount = amountInterestForDateWithPrevious - sum_pay_amount;
                            return dueAmount.toFixed(3);
                            // return amountInterestForDateWithPrevious.toFixed(3);


                        } else {
                            return due_amount;
                        }

                    }
                },

                {
                    data: 'duration_time',
                    name: 'duration_time'
                },
                {
                    data: 'installment_amount',
                    name: 'installment_amount'
                },
                {
                    data: 'installments_count',
                    name: 'installments_count'
                },
                {
                    data: 'payment_method',
                    name: 'payment_method'
                },
                {
                    data: 'start_date',
                    name: 'start_date'
                },

                {
                    data: 'end_date',
                    name: 'end_date'
                },
                {
                    data: 'start_date',
                    name: 'start_date',

                    render: function(data, type, row, meta) {
                        const EndDate = new Date(row.end_date);
                        const today = new Date();
                        const timeDiff = EndDate.getTime() - today.getTime();
                        const daysDiff = Math.floor(timeDiff / 86400000);
                        return daysDiff + ' ' + 'days left';
                    }
                },


                {
                    data: 'id',
                    name: 'ad Payment',
                    render: function(data, type, row, meta) {
                        if (row.penalty_status == 0) {
                            return `<button type="button" class="btn btn-sm btn-warning ad-payment-btn" data-toggle="modal"   data-id="${data}">Extend time</button>`;
                        } else {
                            return `<button type="button" class="btn btn-sm btn-warning ad-penalty-btn" data-toggle="modal" data-target=".penaltymodel"  data-id="${data}">Add penalties</button>`;
                        }

                    }
                },
                {
                    data: 'id',
                    name: 'ad Payment',
                    render: function(data, type, row, meta) {
                        return `<a href="{{ url('paymentHistory') }}/${row.id}" type="button" class="btn btn-sm btn-info  payment-history"  style='color:white;' data-id="${data}">Pay History</a>`;
                    }
                },
            ]
        });

        $(document).on('click', '.payment-history', function() {
            var userId = $(this).data('id');

            var url = '/payment-history?id=' + userId;
            window.location.href = url;
        });


        $(document).on('click', '.view-profile', function() {
            var userId = $(this).data('id');

            var url = '/all-Applicant-Profile-Controller?id=' + userId;
            window.location.href = url;
        });

        var interestSchema = '';
        var amountInterestFor_Date = 0;
        var amountInterestForDatewithPreviousO = 0;
        var amountInterestForDatewithPreviousForEM = 0;
        var fixedInterest = 0;
        var lmaxAmount = 0;
        var Previousoutstanding = 0;
        var penaltyInterest = 0;
        var totalPaid = 0;


        $(document).on('click', '.ad-payment-btn', function() {
            var userId = $(this).data('id');
            var loanInvoiceId;
            $.ajax({
                url: '/loan-detail/' + userId,
                method: 'GET',

                success: function(response) {
                    var data = response.data;
                    loanInvoiceId = parseFloat(response.latestLoanId.id);

                    $.each(data, function(index, item) {
                        interestSchema = item.interest_schema;
                        FullPaidAmount = parseFloat(item.total_amount);
                        totalPaid = parseFloat(item.pay_amount);
                        penaltyInterest = parseFloat(item.penaltyInterest);
                        fixedInterest = parseFloat(item.fixedInterest);
                        const LEDate = new Date(item.end_date);
                        const LSDate = new Date(item.start_date);
                        const CurrentD = new Date();
                        var lmaximumAmount = parseFloat(item.capital_amount);
                        // loanInvoiceId = parseFloat(item.invoiceId);
                        // Previousoutstanding = parseFloat(item
                        //     .Previousoutstandingloans);

                        var Previousoutstanding = 0;
                        var ad_previes_outstand = parseFloat(item
                            .ad_previes_outstand);
                        if (ad_previes_outstand == 1) {
                            Previousoutstanding = parseFloat(item
                                .Previousoutstandingloans);
                        } else {
                            Previousoutstanding = 0;
                        }
                        lmaxAmount = lmaximumAmount
                        var ltotalAmount = parseFloat(item.totalAmount);
                        var interest_rate = parseFloat(item.interest_rate);

                        if (interestSchema == 'Daily') {
                            const timeDiff = CurrentD.getTime() - LSDate.getTime();
                            const dayDiff = Math.floor(timeDiff / 86400000);
                            var interestRateForDate = (interest_rate / 30) *
                                dayDiff;
                            amountInterestFor_Date = lmaximumAmount + (
                                lmaximumAmount * interestRateForDate / 100);
                            amountInterestForDatewithPreviousO = parseFloat(
                                amountInterestFor_Date + Previousoutstanding);

                        }

                        var name = "Dear" + " " + item.fullname;
                        var edate = item.end_date;
                        const customerName = document.getElementById(
                            "customerName");
                        customerName.innerHTML = name;
                        var LiD = item.CustomLoanId;
                        const customerloanID = document.getElementById("lId");
                        customerloanID.innerHTML = LiD;




                        const e_date = document.getElementById("edate");
                        e_date.innerHTML = edate;

                        if (loanInvoiceId > 0) {
                            newloanInvoiceId = loanInvoiceId + 1;
                            $('#invoiceId').html(LiD + '/' +
                                newloanInvoiceId);
                        }



                        $('#Id').val(item.id);
                        $('#LoanId').val(item.id);
                        $('#InstallmentAmount').val(item.installment_amount);
                        $('#due_amount').val(item.due_amount);
                        $('#TAmount').html(totalPaid);


                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });

        });




        $(document).on('click', '.submitPayment', function() {
            var Id = $('#Id').val();
            var LoanId = $('#LoanId').val();
            var InstallmentAmount = $('#InstallmentAmount').val();
            var installmentAmountInt = parseFloat(InstallmentAmount);
            var CategoryOfPayment = $("#TypeOfPayment").val();
            var PaymentDate = $('#PaymentDate').val();
            var Remind = $('#Remind').val();
            var due_price = $('#due_amount').val();
            var due_priceInt = parseFloat(due_price);

            var isValid = true;
            var errorMessage = '';

            if (PaymentDate.trim() === "") {
                errorMessage += 'Date is required.<br>';
                isValid = false;
            }

            if (!isValid) {
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    html: errorMessage,
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                    confirmButtonText: 'OK',
                });
                return;
            } else {
                var formData = new FormData();
                formData.append('Id', Id);
                formData.append('LoanId', LoanId);
                formData.append('CategoryOfPayment', CategoryOfPayment);
                formData.append('InstallmentAmount', InstallmentAmount);
                formData.append('Remind', Remind);
                formData.append('PaymentDate', PaymentDate);

                var successMessage = 'Success';
                var errorMessage = 'Error';

                function makeAjaxCall(url, data) {
                    $.ajax({
                        url: url,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST',
                        data: data,
                        contentType: false,
                        processData: false,
                        success: function(data, status, xhr) {
                            if (data.status === successMessage) {
                                Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: data.status,
                                    text: data.message,
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            } else if (xhr.status === 422) {
                                Swal.fire({
                                    position: 'center',
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Input Valid Data!',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            } else {
                                Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: 'success',
                                    text: "Payments are added",
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }
                        },
                    });
                }

                if (interestSchema === 'For Each Months') {
                    var url = '/loans/addpayment/' + Id;

                    makeAjaxCall(url, formData);

                    if ((totalPaid + installmentAmountInt) >= (
                            totalAmountAccordingTime + Previousoutstanding)) {

                        if (penaltyInterest > 0) {
                            if ((totalPaid + installmentAmountInt) >= (
                                    totalAmountAccordingTime + Previousoutstanding +
                                    penaltyInterest)) {

                                $.ajax({
                                    url: '/completLoan',
                                    headers: {
                                        'X-CSRF-TOKEN': $(
                                                'meta[name="csrf-token"]')
                                            .attr('content')
                                    },
                                    type: 'POST',
                                    data: {
                                        'LoanId': LoanId
                                    },
                                    success: function(response) {
                                        Swal.fire({
                                            position: 'center',
                                            icon: 'success',
                                            title: "success",
                                            text: "Loan Complete Succesfully",
                                            showConfirmButton: false,
                                            timer: 1500
                                        });
                                    },
                                    error: function(xhr, status, error) {

                                    }
                                });

                            }
                        } else {


                            $.ajax({
                                url: '/completLoan',
                                headers: {
                                    'X-CSRF-TOKEN': $(
                                            'meta[name="csrf-token"]')
                                        .attr('content')
                                },
                                type: 'POST',
                                data: {
                                    'LoanId': LoanId
                                },
                                success: function(response) {
                                    Swal.fire({
                                        position: 'center',
                                        icon: 'success',
                                        title: "success",
                                        text: "Loan Complete Succesfully",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                },
                                error: function(xhr, status, error) {

                                }
                            });

                        }
                    }
                } else if (interestSchema === 'Daily') {
                    var url = '/loans/addpayment/' + Id;
                    makeAjaxCall(url, formData);

                    if ((totalPaid + installmentAmountInt) >=
                        amountInterestForDatewithPreviousO) {



                        if ((fixedInterest + lmaxAmount) <= (totalPaid +
                                installmentAmountInt)) {


                            if (penaltyInterest > 0) {
                                alert(amountInterestForDatewithPreviousO +
                                    penaltyInterest)
                                if ((amountInterestForDatewithPreviousO +
                                        penaltyInterest) <= (totalPaid +
                                        installmentAmountInt)) {

                                    $.ajax({
                                        url: '/completLoan',
                                        headers: {
                                            'X-CSRF-TOKEN': $(
                                                    'meta[name="csrf-token"]'
                                                )
                                                .attr(
                                                    'content')
                                        },
                                        type: 'POST',
                                        data: {
                                            'LoanId': LoanId
                                        },
                                        success: function(response) {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'success',
                                                title: "success",
                                                text: "Loan Complete Succesfully",
                                                showConfirmButton: false,
                                                timer: 1500
                                            });
                                        },
                                        error: function(xhr, status,
                                            error) {
                                            // Handle error if needed
                                        }
                                    });

                                }

                            } else {
                                $.ajax({
                                    url: '/completLoan',
                                    headers: {
                                        'X-CSRF-TOKEN': $(
                                                'meta[name="csrf-token"]')
                                            .attr(
                                                'content')
                                    },
                                    type: 'POST',
                                    data: {
                                        'LoanId': LoanId
                                    },
                                    success: function(response) {
                                        Swal.fire({
                                            position: 'center',
                                            icon: 'success',
                                            title: "success",
                                            text: "Loan Complete Succesfully",
                                            showConfirmButton: false,
                                            timer: 1500
                                        });
                                    },
                                    error: function(xhr, status, error) {
                                        // Handle error if needed
                                    }
                                });
                            }


                        }
                    }
                } else {
                    var url = '/loans/addpayment/' + Id;
                    makeAjaxCall(url, formData);

                    if ((due_priceInt - (installmentAmountInt + Previousoutstanding)) <= 0) {
                        var LoanId = $('#LoanId').val();
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'success',
                            text: "Your loan has been successfully completed",
                            showConfirmButton: false,
                            timer: 1500
                        });
                        $.ajax({
                            url: '/completLoan',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'POST',
                            data: {
                                'LoanId': LoanId
                            },
                            success: function(response) {
                                console.log(response);
                            },
                            error: function(xhr, status, error) {

                            }
                        });
                    }
                }
            }

        });




        // $(document).on('click', '.submitPayment', function() {

        //     var Id = $('#Id').val();
        //     var LoanId = $('#LoanId').val();
        //     var InstallmentAmount = $('#InstallmentAmount').val();
        //     var installmentAmountInt = parseInt(InstallmentAmount);
        //     var CategoryOfPayment = $("#TypeOfPayment").val();
        //     var PaymentDate = $('#PaymentDate').val();
        //     var Remind = $('#Remind').val();
        //     var due_price = $('#due_amount').val();
        //     var due_priceInt = parseInt(due_price);
        //     alert(interestSchema)


        //     var formData = new FormData();

        //     formData.append('Id', Id);
        //     formData.append('LoanId', LoanId);
        //     formData.append('CategoryOfPayment', CategoryOfPayment);
        //     formData.append('InstallmentAmount', InstallmentAmount);
        //     formData.append('Remind', Remind);
        //     formData.append('PaymentDate', PaymentDate);
        //     if (interestSchema == 'For Each Months') {

        //         $.ajax({
        //             url: '/loans/addpayment/' + Id,
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //             },
        //             type: "POST",
        //             data: formData,
        //             contentType: false,
        //             processData: false,
        //             success: function(data, status, xhr) {
        //                 if ((totalPaid + installmentAmountInt) >= (
        //                         totalAmountAccordingTime + Previousoutstanding)) {

        //                     if (penaltyInterest > 0) {
        //                         if ((totalPaid + installmentAmountInt) >= (
        //                                 totalAmountAccordingTime + Previousoutstanding +
        //                                 penaltyInterest)) {

        //                             $.ajax({
        //                                 url: '/completLoan',
        //                                 headers: {
        //                                     'X-CSRF-TOKEN': $(
        //                                             'meta[name="csrf-token"]')
        //                                         .attr('content')
        //                                 },
        //                                 type: 'POST',
        //                                 data: {
        //                                     'LoanId': LoanId
        //                                 },
        //                                 success: function(response) {
        //                                     console.log(response);
        //                                 },
        //                                 error: function(xhr, status, error) {

        //                                 }
        //                             });
        //                             alert(totalPaid + installmentAmountInt)
        //                             alert(totalAmountAccordingTime + Previousoutstanding +
        //                                 penaltyInterest)
        //                             alert("hi")

        //                         }
        //                     } else {


        //                         $.ajax({
        //                             url: '/completLoan',
        //                             headers: {
        //                                 'X-CSRF-TOKEN': $(
        //                                         'meta[name="csrf-token"]')
        //                                     .attr('content')
        //                             },
        //                             type: 'POST',
        //                             data: {
        //                                 'LoanId': LoanId
        //                             },
        //                             success: function(response) {
        //                                 Swal.fire({
        //                                     position: 'center',
        //                                     icon: 'success',
        //                                     title: "success",
        //                                     text: "Loan Complete Succesfully",
        //                                     showConfirmButton: false,
        //                                     timer: 1500
        //                                 });
        //                             },
        //                             error: function(xhr, status, error) {

        //                             }
        //                         });

        //                     }

        //                 }

        //                 if (data.status == 'Success') {

        //                     // Do something with success message here
        //                     Swal.fire({
        //                         position: 'center',
        //                         icon: 'success',
        //                         title: data.status,
        //                         text: data.message,
        //                         showConfirmButton: false,
        //                         timer: 1500
        //                     })
        //                 } else if (xhr.status == 422) {
        //                     // handle the validation errors
        //                     // ----------------------------------------------------------------------------------
        //                     // var errors = data.errors;
        //                     // loop through the errors and show them
        //                     // for (var key in errors) {
        //                     Swal.fire({
        //                         position: 'center',
        //                         icon: 'error',
        //                         title: 'Error',
        //                         text: 'Input Valid Data!',
        //                         // title: key,
        //                         // text: errors[key][0],
        //                         showConfirmButton: false,
        //                         timer: 1500
        //                     });
        //                     // }
        //                 } else {
        //                     // Do something with failure message here
        //                     Swal.fire({
        //                         position: 'center',
        //                         icon: 'success',
        //                         title: data.status,
        //                         text: data.message,
        //                         showConfirmButton: false,
        //                         timer: 1500
        //                     })
        //                 }
        //             },
        //         });
        //     }
        //     if (interestSchema == 'Daily') {
        //         // 
        //         $.ajax({
        //             url: '/loans/addpayment/' + Id,
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //             },
        //             type: "POST",
        //             data: formData,
        //             contentType: false,
        //             processData: false,
        //             success: function(data, status, xhr) {

        //                 if ((totalPaid + installmentAmountInt) >=
        //                     amountInterestForDatewithPreviousO) {

        //                     if ((fixedInterest + lmaxAmount) <= (totalPaid +
        //                             installmentAmountInt)) {


        //                         if (penaltyInterest > 0) {
        //                             alert(amountInterestForDatewithPreviousO +
        //                                 penaltyInterest)
        //                             if ((amountInterestForDatewithPreviousO +
        //                                     penaltyInterest) <= (totalPaid +
        //                                     installmentAmountInt)) {

        //                                 $.ajax({
        //                                     url: '/completLoan',
        //                                     headers: {
        //                                         'X-CSRF-TOKEN': $(
        //                                                 'meta[name="csrf-token"]'
        //                                             )
        //                                             .attr(
        //                                                 'content')
        //                                     },
        //                                     type: 'POST',
        //                                     data: {
        //                                         'LoanId': LoanId
        //                                     },
        //                                     success: function(response) {
        //                                         Swal.fire({
        //                                             position: 'center',
        //                                             icon: 'success',
        //                                             title: "success",
        //                                             text: "Loan Complete Succesfully",
        //                                             showConfirmButton: false,
        //                                             timer: 1500
        //                                         });
        //                                     },
        //                                     error: function(xhr, status,
        //                                         error) {
        //                                         // Handle error if needed
        //                                     }
        //                                 });

        //                             }

        //                         } else {
        //                             $.ajax({
        //                                 url: '/completLoan',
        //                                 headers: {
        //                                     'X-CSRF-TOKEN': $(
        //                                             'meta[name="csrf-token"]')
        //                                         .attr(
        //                                             'content')
        //                                 },
        //                                 type: 'POST',
        //                                 data: {
        //                                     'LoanId': LoanId
        //                                 },
        //                                 success: function(response) {
        //                                     console.log(response);
        //                                 },
        //                                 error: function(xhr, status, error) {
        //                                     // Handle error if needed
        //                                 }
        //                             });
        //                         }


        //                     }
        //                 }
        //                 // }

        //                 if (data.status == 'Success') {
        //                     // Do something with success message here
        //                     Swal.fire({
        //                         position: 'center',
        //                         icon: 'success',
        //                         title: data.status,
        //                         text: data.message,
        //                         showConfirmButton: false,
        //                         timer: 1500
        //                     });
        //                 } else if (xhr.status == 422) {
        //                     // Handle validation errors if needed
        //                     Swal.fire({
        //                         position: 'center',
        //                         icon: 'error',
        //                         title: 'Error',
        //                         text: 'Input Valid Data!',
        //                         showConfirmButton: false,
        //                         timer: 1500
        //                     });
        //                 } else {
        //                     // Do something with failure message here
        //                     Swal.fire({
        //                         position: 'center',
        //                         icon: 'success',
        //                         title: data.status,
        //                         text: data.message,
        //                         showConfirmButton: false,
        //                         timer: 1500
        //                     });
        //                 }
        //             },
        //         });

        //     } else {
        //         $.ajax({
        //             url: '/loans/addpayment/' + Id,
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //             },
        //             type: "POST",
        //             data: formData,
        //             contentType: false,
        //             processData: false,
        //             success: function(data, status, xhr) {
        //                 if ((due_priceInt - (installmentAmountInt + Previousoutstanding)) <=
        //                     0) {
        //                     var LoanId = $('#LoanId').val();
        //                     alert(LoanId)
        //                     $.ajax({
        //                         url: '/completLoan',
        //                         headers: {
        //                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
        //                                 .attr('content')
        //                         },
        //                         type: 'POST',
        //                         data: {
        //                             'LoanId': LoanId
        //                         },
        //                         success: function(response) {
        //                             console.log(response);
        //                         },
        //                         error: function(xhr, status, error) {

        //                         }
        //                     });
        //                 }

        //                 if (data.status == 'Success') {

        //                     // Do something with success message here
        //                     Swal.fire({
        //                         position: 'center',
        //                         icon: 'success',
        //                         title: data.status,
        //                         text: data.message,
        //                         showConfirmButton: false,
        //                         timer: 1500
        //                     })
        //                 } else if (xhr.status == 422) {
        //                     // handle the validation errors
        //                     // ----------------------------------------------------------------------------------
        //                     // var errors = data.errors;
        //                     // loop through the errors and show them
        //                     // for (var key in errors) {
        //                     Swal.fire({
        //                         position: 'center',
        //                         icon: 'error',
        //                         title: 'Error',
        //                         text: 'Input Valid Data!',
        //                         // title: key,
        //                         // text: errors[key][0],
        //                         showConfirmButton: false,
        //                         timer: 1500
        //                     });
        //                     // }
        //                 } else {
        //                     // Do something with failure message here
        //                     Swal.fire({
        //                         position: 'center',
        //                         icon: 'success',
        //                         title: data.status,
        //                         text: data.message,
        //                         showConfirmButton: false,
        //                         timer: 1500
        //                     })
        //                 }
        //             },
        //         });
        //     }

        // });

        $('#completedLoan').DataTable({
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
            ajax: "{{ route('get-completed-mortgage-Loan') }}",
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
                    $(row).find('td').css('background-color', '#A3E1B4').css('color',
                        '#000000');
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
                    name: 'totalAmount'
                },
                {
                    data: 'maximum_amount',
                    name: 'maximum_amount'
                },
                {
                    data: 'totalAmount',
                    name: 'totalAmount',
                    render: function(data, type, row, meta) {
                        var interest_schema = row.interest_schema;
                        interestSc = interest_schema;
                        const EndDate = new Date(row.end_date);
                        const StartDate = new Date(row.start_date);
                        const complete_date = new Date(row.loan_complete_date);
                        var maximum_amount = parseFloat(row.capital_amount);
                        var totalAmount = parseFloat(row.totalAmount);
                        var interest_rate = parseFloat(row.interest_rate);
                        const interest = interest_rate;
                        var result = '';
                        var resultCount = 0;
                        if (interest_schema == 'For Each Months') {
                            while (StartDate <= complete_date) {
                                resultCount++;
                                var amountInterest = maximum_amount + (maximum_amount *
                                    interest_rate / 100);
                                result = '(' + interest_rate + ')%' + " " + amountInterest
                                    .toFixed(2) + '\n';
                                // totalAmountAccordingTime = amountInterest;
                                interest_rate += interest
                                StartDate.setDate(StartDate.getDate() + 30);

                            }
                            return result;
                        }
                        if (interest_schema == 'Daily') {
                            const timeDiff = complete_date.getTime() - StartDate.getTime();
                            const daysDiff = Math.floor(timeDiff / 86400000);
                            var interest_rate_for_date = (interest_rate / 30) * daysDiff;
                            amountInterestForDate = maximum_amount + (maximum_amount *
                                interest_rate_for_date / 100);

                            return '(' + interest_rate_for_date.toFixed(3) + ')%' + " " +
                                amountInterestForDate.toFixed(3);


                        } else {

                        }
                        return totalAmount;
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
                // {
                //     data: 'due_amount',
                //     name: 'due_amount'
                // },
                {
                    data: 'pay_amount',
                    name: 'pay_amount'
                },
                {
                    data: 'duration_time',
                    name: 'duration_time'
                },

                {
                    data: 'payment_method',
                    name: 'payment_method'
                },
                {
                    data: 'start_date',
                    name: 'start_date'
                },

                {
                    data: 'end_date',
                    name: 'end_date'
                },
                {
                    data: 'loan_complete_date',
                    name: 'loan_complete_date'
                },
                {
                    data: 'loan_complete_time',
                    name: 'loan_complete_time'
                },
                {
                    data: 'start_date',
                    name: 'start_date',

                    render: function(data, type, row, meta) {
                        const complete_date = new Date(row.loan_complete_date);
                        const EndDate = new Date(row.end_date);
                        const timeDiff = EndDate.getTime() - complete_date.getTime();
                        const daysDiff = Math.floor(timeDiff / 86400000);
                        return daysDiff + ' ' + 'days left';
                    }
                },


            ]
        });

        var dueAmount, penaltyRate, interestAmount, totalAmount, dueAmountForPanaltyLoan;

        $(document).on('click', '.ad-penalty-btn', function() {
            var LoanId = $(this).data('id');

            $.ajax({
                url: '/loan-detail/' + LoanId,
                method: 'GET',

                success: function(response) {
                    var data = response.data;
                    console.log(data);
                    $.each(data, function(index, item) {

                        var id = item.id;
                        // var due_amount = item.due_amount;
                        var penalty_rate = item.penalty_rate;

                        var Previousoutstandingloans = parseFloat(item
                            .Previousoutstandingloans);
                        var interest_schema = item.interest_schema;
                        var due_amount = parseFloat(item.due_amount);
                        const EndDate = new Date(item.end_date);
                        const StartDate = new Date(item.start_date);
                        const today = new Date();
                        var maximum_amount = parseFloat(item.capital_amount);
                        var totalAmount = parseFloat(item.totalAmount);
                        var interest_rate = parseFloat(item.interest_rate);
                        var sum_pay_amount = parseFloat(item.sum_pay_amount);
                        const interest = interest_rate;
                        var result = '';
                        var resultCount = 0;
                        if (interest_schema == 'For Each Months') {

                            while (StartDate <= today) {
                                resultCount++;
                                var amountInterest = maximum_amount + (
                                    maximum_amount *
                                    interest_rate / 100);
                                var amountInterestWithPrevious =
                                    amountInterest +
                                    Previousoutstandingloans;
                                result = amountInterestWithPrevious.toFixed(2);
                                // totalAmountAccordingTime =
                                //     amountInterestWithPrevious;
                                interest_rate += interest
                                StartDate.setDate(StartDate.getDate() + 30);

                            }
                            dueAmountForPanaltyLoan = result - sum_pay_amount;
                            $('#DueAmount').val(dueAmountForPanaltyLoan);

                        }
                        if (interest_schema == 'Daily') {
                            const timeDiff = today.getTime() - StartDate
                                .getTime();
                            const daysDiff = Math.floor(timeDiff / 86400000);
                            var interest_rate_for_date = (interest_rate / 30) *
                                daysDiff;
                            var total_amount = parseFloat(item.totalAmount);

                            var paid_amount = total_amount - due_amount;
                            var amountInterestForDate = maximum_amount + (
                                maximum_amount * interest_rate_for_date /
                                100);
                            var amountInterestForDateWithPrevious =
                                amountInterestForDate +
                                Previousoutstandingloans;
                            var dueAmount = amountInterestForDateWithPrevious -
                                sum_pay_amount;

                            dueAmountForPanaltyLoan = dueAmount.toFixed(3);
                            // return amountInterestForDateWithPrevious.toFixed(3);


                        }
                        // else {
                        //     dueAmountForPanaltyLoan = due_amount;
                        // }


                        $('#LoanIdNumber').val(id);
                        $('#DueAmount').val(dueAmountForPanaltyLoan);
                        $('#PenaltyPercentage').val(penalty_rate);
                        // $('#penaltyMethod').val(item.penalty_method);

                        $("#penaltyMethod").on("change", function() {
                            if ($('#penaltyMethod').val() ==
                                'For the balance') {
                                dueAmount = parseFloat($('#DueAmount')
                                    .val());
                                penaltyRate = parseFloat($(
                                    '#PenaltyPercentage').val());
                                // var intersetAmount = (dueAmount/100)*penaltyRate;
                                interestAmount = Math.ceil((dueAmount /
                                    100) * penaltyRate);
                                var totalAmount = dueAmount +
                                    interestAmount;
                                $('#TotalAmount').val(totalAmount);

                            }

                        });
                        $("#EndDate").on("change", function() {
                            var EndDate = new Date($("#EndDate").val());
                            var StartDate = new Date($('#StartDate')
                                .val());
                            const timeDiff = EndDate.getTime() -
                                StartDate
                                .getTime();
                            const daysDiff = Math.floor(timeDiff /
                                86400000);
                            penaltyRate = parseFloat($(
                                    '#PenaltyPercentage')
                                .val());
                            if ($('#penaltyMethod').val() ==
                                "Each Day") {
                                interestAmount = Math.ceil(((dueAmount *
                                        penaltyRate) / 100) *
                                    daysDiff);
                                var totalAmount = dueAmount +
                                    interestAmount;
                                $('#TotalAmount').val(totalAmount);

                            } else if ($('#penaltyMethod').val() ==
                                "Daily") {
                                var newPenaltyRate = penaltyRate / 30;
                                interestAmount = Math.ceil(((dueAmount *
                                        newPenaltyRate) / 100) *
                                    daysDiff);
                                var totalAmount = dueAmount +
                                    interestAmount;
                                $('#TotalAmount').val(totalAmount);

                            }
                        });



                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });


        });
        $('#penaltyMethod').multiselect({
            nonSelectedText: 'penalty method',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '100%',

        });

        $('#paymentMethod').multiselect({
            nonSelectedText: 'payment method',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '100%',

        });

        $('#option1').click(function() {
            if ($(this).is(':checked')) {
                $('#green-fields').show();
            }
        });
        $('#option2').click(function() {
            if ($(this).is(':checked')) {
                $('#green-fields').hide();
            }
        });


        $(document).on('click', '.submit-penalty-btn', function() {

            var formData = new FormData();
            formData.append('LoanId', $('#LoanIdNumber').val());
            formData.append("DueAmount", $('#DueAmount').val());
            formData.append('PenaltyPercentage', $('#PenaltyPercentage').val());
            formData.append('penaltyMethod', $('#penaltyMethod').val());
            formData.append('TotalAmount', $('#TotalAmount').val());
            formData.append('interestAmount', interestAmount);
            formData.append('SartDate', $('#StartDate').val());
            formData.append('EndDate', $('#EndDate').val());
            formData.append('paymentMethod', $('#paymentMethod').val());
            $.ajax({
                url: "/penalty-store",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data, status, xhr) {
                    if (data.status == 'success') {
                        // Do something with success message here
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Success',
                            text: data.success,
                            showConfirmButton: false,
                            timer: 1500
                        })
                    } else {
                        // Do something with failure message here
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'success',
                            text: 'Loan Creation Success!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                },
            });
        })

        $("#print").click(function() {
            var InstallmentAmount = $('#InstallmentAmount').val();
            var PaymentD = $('#PaymentDate').val();
            const paymentDate = $("#paymentDate");
            const PAmount = $("#PAmount");

            PAmount.text(InstallmentAmount);
            paymentDate.text(PaymentD);

            const modalContent = $("#exampleModalCenter2 .modal-content");
            var opt = {
                margin: 2,
                padding: 2,
                filename: 'myfile.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'mm',
                    format: [80, 120], // Adjusted width and height
                    orientation: 'portrait'
                },
                onBeforeHtmlParse: function(doc) {
                    doc.content.forEach(function(item) {
                        if (item.hasOwnProperty('style')) {
                            item.style.padding = '5';
                        } else {
                            item.style = {
                                padding: '5'
                            };
                        }
                    });
                }
            };

            var pdf = html2pdf().from(modalContent.get(0)).set(opt);

            // Open the PDF in a new window
            pdf.output('blob').then(function(blob) {
                var url = URL.createObjectURL(blob);
                window.open(url, '_blank');
            });

        });

    });
</script>
