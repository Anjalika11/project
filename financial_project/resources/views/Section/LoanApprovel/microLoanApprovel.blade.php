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

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Setup-Loan</a>

                        </div>
                    </div>
                </div>
                <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                    <table id="example" class="table table-hover table-product" style="width: 100%; ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Contact No</th>
                                <th>NIC</th>
                                <th>Requested <br> Amount</th>
                                <th>Payment <br> Method</th>
                                <th>Veiw</th>
                                <th>Create Loan</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgb(252, 97, 120); ">
                    <h3 class="modal-title" style="color: aliceblue" id="exampleModalLarge">SETUP NEW LOAN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                {{-- <h3><i class="fa fa-money" aria-hidden="true" style="margin-right: 20px; margin-left: 10px;"></i>𝒮𝑒𝓉𝓊𝓅
                𝐿𝑜𝒶𝓃</h3> --}}
                <div class="container">
                    {{-- <div class="row" style="margin:  0px 0px 0px 0px; padding:0px;">
                        <div class="col-md-2">
                            <div id="qrcode">

                            </div>
                        </div>
                        <div class="col-md-10">
                            <img src="image/loan_coverimg.png" alt="..." class="autoCoverImage" />
                        </div>
                    </div> --}}
                    <div class="row" style="margin: 5px 40px 5px 40px; padding:10px;">
                        <div class="col-sm">
                            <label for="middle-name" class="label-align"></label>
                            <input type="hidden" id="cusId" name="last-name" required="required" class="form-control ">
                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                    </div>



                    <div class="row" style="margin: 5px 40px 5px 40px; padding:10px;">
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Customer Id<span class="required">*</span></label>
                            <input type="test" id="LoanId" name="last-name" required="required" class="form-control ">
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Requested Amount<span
                                    class="required">*</span></label>
                            <input type="test" id="RequestedAmount" name="last-name" required="required"
                                class="form-control ">
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Payment Method<span
                                    class="required">*</span></label>
                            <input type="test" id="PaymentMethod" name="last-name" required="required"
                                class="form-control ">
                        </div>
                    </div>




                    <div class="row" style="margin: 5px 40px 5px 40px; padding:10px;">
                        <div class="col-sm">
                            <input type="checkbox" name="checkbox" id="SelectLoanAmount" />
                            <label for="SelectLoanAmount">Select Loan Amount</label>
                        </div>
                        <div class="col-sm">
                            <input type="checkbox" name="checkbox" id="CreateLoanAmount" />
                            <label for="CreateLoanAmount">Create Loan Amount</label>
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Create Loan ID<span
                                    class="required">*</span></label>
                            <input type="test" id="CustomLoanId" name="last-name" required="required"
                                class="form-control ">
                        </div>


                    </div>
                    <div class="SelectLoan" style="display: none;">
                        <div class="row" style="margin:  5px 40px 5px 40px; padding:10px;">

                            <div class="col-sm">
                                <label for="middle-name" class="label-align">Select Loan Type<span
                                        class="required">*</span></label>
                                <div class="column" style="border: 1px solid rgb(98, 98, 98);">
                                    <select id="framework" name="framework[]" multiple class="form-control">
                                        {{-- <option>Loading...</option> --}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm">
                                <label for="middle-name" class="label-align">Maximum Amount<span
                                        class="required">*</span></label>
                                <input type="test" id="MaximumAmount" name="last-name" required="required"
                                    class="form-control MaximumAmount">
                            </div>
                            <div class="col-sm">
                                <label for="middle-name" class="label-align ">Duration Time<span
                                        class="required">*</span></label>

                                <input type="text" id="DurationTime" name="last-name" required="required"
                                    class="form-control DurationTime">
                            </div>
                        </div>
                        <div class="row" style="margin: 5px 40px 5px 40px; padding:10px;">
                            <div class="col-sm">
                                <label for="middle-name" class="label-align">Percentage of interest<span
                                        class="required">*</span></label>
                                <input type="test" id="interestPresentage" name="last-name" required="required"
                                    class="form-control InterestRate">
                            </div>
                            <div class="col-sm">
                                <label for="middle-name" class="label-align">Interest schema<span
                                        class="required">*</span></label>
                                <input type="test" id="interestScema" name="last-name" required="required"
                                    class="form-control LoaninterestSchema">
                            </div>
                            <div class="col-sm">
                                <label for="middle-name" class="label-align">Total Amount<span
                                        class="required">*</span></label>
                                <input type="test" id="TotalAmount" name="last-name" required="required"
                                    class="form-control TotalAmount">
                            </div>
                        </div>
                    </div>
                    <div class="CreateLoan" style="display: none;">
                        <div class="row" style="margin:  5px 40px 5px 40px; padding:10px;">

                            <div class="col-sm">
                                <label for="middle-name" class="label-align">Maximum Amount<span
                                        class="required">*</span></label>
                                <input type="test" name="last-name" id="newMaximumAmount" required="required"
                                    class="form-control MaximumAmount">
                            </div>
                            <div class="col-sm">
                                <label for="middle-name" class="label-align">Select Duration<span
                                        class="required">*</span></label>

                                <div class="column" style="border: 1px solid rgb(98, 98, 98);">
                                    <select id="Duration" name="Duration[]" multiple class="form-control DurationTime">
                                        <option value='30 Days'>30 Days</option>
                                        <option value='60 Days'>60 days</option>
                                        <option value='90 Days'>90 Days</option>
                                        <option value='06 Months (180 Days)'>6 Months</option>
                                        <option value='1 year'>01 Year</option>
                                        <option value='2 years'>02 Year</option>


                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="row" style="margin:  5px 40px 5px 40px; padding:10px;">

                            <div class="col-sm">
                                <label for="middle-name" class="label-align">Interest Rate<span
                                        class="required">*</span></label>
                                <input type="test" name="last-name" id="newInterestRate" required="required"
                                    class="form-control InterestRate ">
                            </div>
                            <div class="col-sm">
                                <label for="middle-name" class="label-align">Interest schema<span
                                        class="required">*</span></label>
                                <div class="column" style="border: 1px solid rgb(98, 98, 98);">
                                    <select id="LoaninterestSchema" name="LoaninterestSchema[]" multiple
                                        class="form-control LoaninterestSchema">
                                        <option value="Each Day">Each Day (සෑම දිනකටම)</option>
                                        <option value="Daily">Daily (මාසික පොලීයෙන් දිනකට)</option>
                                        <option value="Weakly">Weakly</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="For Each Months">For Each Months</option>
                                        <option value="For total amount">For the total amount</option>
                                        <option value="year">For a year</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm">
                                <label for="middle-name" class="label-align">Total Amount<span
                                        class="required">*</span></label>
                                <input type="test" name="last-name" id="newTotalAmount" required="required"
                                    class="form-control TotalAmount">
                            </div>

                        </div>
                    </div>


                    <div class="row" style="margin: 5px 40px 5px 40px; padding:10px;">
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">payment method<span
                                    class="required">*</span></label>
                            <div class="column" style="border: 1px solid rgb(98, 98, 98);">
                                <select id="interest" name="interest[]" multiple class="form-control">
                                    {{-- <option>Loading...</option> --}}
                                    <option value="Daily">Daily</option>
                                    <option value="Once in two days">Once in two days</option>
                                    <option value="Weakly">Weakly</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="At once">At once</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm">
                            <label for="middle-name" class="label-align">The amount payable for an installment<span
                                    class="required">*</span></label>
                            <input type="number" id="installmentPayment" name="last-name" required="required"
                                class="form-control ">
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Number of installments<span
                                    class="required">*</span></label>
                            <input type="test" id="Numberofinstallments" name="last-name" required="required"
                                class="form-control ">
                        </div>
                    </div>

                    <div class="row" style="margin: 5px 40px 5px 40px; padding:10px;">
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Start Date<span
                                    class="required">*</span></label>
                            <input type="date" id="StartDate" name="last-name" required="required"
                                class="form-control ">
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">End Date<span class="required">*</span></label>
                            <input type="date" id="EndDate" name="last-name" required="required"
                                class="form-control ">
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Minimum Interest Amount</label>
                            <input type="number" id="fixedInterest" name="last-name" value='250'
                                class="form-control ">
                        </div>
                    </div>
                    <div class="row" style="margin: 5px 40px 5px 40px; padding:10px;">
                        <div class="col-sm">
                            <label for="option1" class="radio-label">Add penalty charge</label>
                            <input type="radio" id="option1" class="radio-btn" name="options">
                        </div>
                        <div class="col-sm">
                            <label for="option2" class="radio-label">No penalty will be charged</label>
                            <input type="radio" id="option2" class="radio-btn" name="options">
                        </div>
                        <div class="col-sm">

                        </div>
                    </div>

                    <div class="row" id="green-fields"
                        style="margin: 15px 40px 15px 40px; padding:10px;  display: none;">

                        <div class="col-sm">
                            <label for="middle-name" class="label-align">penalty Method<span
                                    class="required">*</span></label>
                            <div class="column" style="border: 1px solid rgb(98, 98, 98);">
                                <select id="penaltyMethod" name="penaltyMethod[]" multiple class="form-control">
                                    {{-- <option>Loading...</option> --}}

                                    <option value="For the balance"> For the balance</option>
                                    <option value="Daily">Daily</option>
                                    <option value="Once in two days">Once in two days</option>
                                    <option value="Weakly">Weakly</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="At once">At once</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">penalty presentage<span
                                    class="required">*</span></label>
                            <input type="number" id="penaltypresentage" name="last-name" required="required"
                                class="form-control ">
                        </div>
                        <div class="col-sm">

                        </div>

                    </div>

                    <div class="row" class="col-md-12 " style="margin: 5px 40px 5px 40px; padding:10px;">
                        <div class="col-md-6 col-sm-6 ">
                            <div class="file-upload-container">
                                <div class="file-input-container">
                                    <label for="promissory_note" class="file-input-label">Upload </label>
                                    <input type="file" id="promissory_note" name='promissory_note' class="file-input"
                                        accept="image/*,.pdf">
                                </div>
                                <button id="cancel-promissory_note">Cancel</button>
                            </div>
                            <div id="promissory_note_preview"></div>
                        </div>
                        <div class="col-md-6 col-sm-6">

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-11" style="margin: 0px 10px 10px 40px; padding:20px;">
                            <textarea id="comment" name="" class="form-control " rows="4" cols="50"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="submitMicroLoan" class="btn btn-primary">Submit</button>
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
            ajax: "{{ route('get-micro-verify-costomer-details') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'fullname',
                    name: 'fullname'
                },
                {
                    data: 'address',
                    name: 'address'
                },
                {
                    data: 'contactNumber',
                    name: 'contactNumber'
                },
                {
                    data: 'nic',
                    name: 'nic'
                },
                {
                    data: 'requestedAmount',
                    name: 'requestedAmount'
                },
                {
                    data: 'paymentMethod',
                    name: 'paymentMethod'
                },
                {
                    data: 'id',
                    name: 'id',
                    render: function(data, type, row) {
                        var action = '<td>' +
                            '<div class="dropdown">' +
                            '<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>' +
                            '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">' +
                            '<a class="dropdown-item delete-member" href="#" data-id="' + data +
                            '">Delete</a>' +
                            '<a class="dropdown-item  view-profile" data-id="' + data +
                            '">View</a>' +
                            '</div>' +
                            '</div>' +
                            '</td>';

                        return action;
                    }
                },
                {
                    data: 'id',
                    name: 'verify',
                    render: function(data, type, row, meta) {
                        return `<button type="button" class="btn btn-danger adLoan-btn" data-toggle="modal" data-target=".bd-example-modal-xl" data-id="${data}">Setup Loan</button>`;
                    }
                }



            ]
        });



        $(document).on('click', '.view-profile', function() {
            var userId = $(this).data('id');

            var url = '/customer-profile-blade?id=' + userId;
            window.location.href = url;
        });

        $(document).on('click', '.delete-member', function() {
            var costomerId = $(this).data('id');

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            });

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
                        url: "{{ route('delete.customer') }}",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "POST",
                        data: {
                            costomerId: costomerId
                        },
                        success: function(data) {
                            Swal.fire(
                                'Good job!',
                                data.message,
                                'success'
                            );
                            // Reload the page after successful deletion
                            location.reload();
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            if (xhr.status === 422) {
                                var errors = xhr.responseJSON.errors;
                                var errorMessage = '';

                                // Loop through the validation errors and construct an error message
                                for (var field in errors) {
                                    errorMessage += errors[field][0] + '<br>';
                                }

                                Swal.fire({
                                    icon: 'error',
                                    title: 'Validation Error',
                                    html: errorMessage,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    confirmButtonText: 'OK',
                                });
                            } else {
                                alert('Form submission failed!');
                            }
                        }
                    });
                    swalWithBootstrapButtons.fire(
                        'Loan Delete!',
                        'Your Loan has been Deleted.',
                        'success'
                    );
                } else if (
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    );
                }
            });
        });


        var pngDataUrl;
        $('#example').on('click', '.adLoan-btn', function() {
            var userId = $(this).data('id');

            $('#cusId').val(userId);

            $.ajax({
                url: '/setupLoanForm/' + userId,
                method: 'GET',
                success: function(response) {
                    var data = response.data;
                    console.log(data);
                    $('#LoanId').val(data[0].id);
                    var customerNic = data[0].nic;
                    var loanDetails = data[1];
                    $('#RequestedAmount').val(data[0].requestedAmount);
                    $('#PaymentMethod').val(data[0].paymentMethod);

                    var CustomerloanId;
                    if (data[1] && data[1].CustomLoanId) {
                        CustomerloanId = data[1].CustomLoanId;
                    } else {
                        CustomerloanId = data[2].CustomLoanId;
                    }


                    function getNextLoanId(currentLoanId) {
                        var parts = currentLoanId.split('-');
                        var prefix = parts[0];
                        var number = parseInt(parts[1]);
                        var nextNumber = number + 1;
                        var nextLoanId = prefix + '-' + nextNumber.toString();
                        return nextLoanId;
                    }

                    // Get the next loan ID
                    var nextLoanId = getNextLoanId(CustomerloanId);
                    $('#CustomLoanId').val(nextLoanId);


                    $.ajax({
                        url: '/loanType',
                        type: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            var options = '';

                            for (var i = 0; i < response.length; i++) {
                                options += '<option value="' + response[i].id +
                                    '">' + response[i].loan_name +
                                    '</option>';
                            }

                            $('#framework').html(options);
                            $('#framework').multiselect('rebuild');
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });

        });




        $('#framework').on('change', function() {
            const loanID = $(this).val();
            const token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '/loanType-details',
                type: 'POST',
                data: {
                    loanID: loanID
                },
                headers: {
                    'X-CSRF-Token': token
                },
                dataType: 'json',
                success: function(response) {

                    $('#MaximumAmount').val(response.amount);
                    var durationTime = response.time_input;
                    if (durationTime == 1) {
                        $('#DurationTime').val("30 Days");
                    }
                    if (durationTime == 2) {
                        $('#DurationTime').val("60 Days");
                    }
                    if (durationTime == 3) {
                        $('#DurationTime').val("90 Days");
                    }
                    if (durationTime == 6) {
                        $('#DurationTime').val("06 Months (180 Days)");
                    }
                    if (durationTime == 12) {
                        $('#DurationTime').val("1 year");
                    }
                    if (durationTime == 24) {
                        $('#DurationTime').val("2 years");
                    }
                    // else{
                    //   $('#DurationTime').val(durationTime);
                    // }
                    $('#interestPresentage').val(response.interest_percentage) * 100;
                    $('#interestScema').val(response.interest_schema);
                    $('#TotalAmount').val(response.total_payment);





                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    W
                }
            });
        });

        $('#SelectLoanAmount').click(function() {
            if ($(this).is(':checked')) {
                $('#CreateLoanAmount').prop('checked', false);
                $('.SelectLoan').show();
                $('.CreateLoan').hide();
            } else {
                $('.SelectLoan').hide();
                $('.CreateLoan').hide();
            }
        });
        $('#CreateLoanAmount').click(function() {
            if ($(this).is(':checked')) {
                $('#SelectLoanAmount').prop('checked', false);
                $('.SelectLoan').hide();
                $('.CreateLoan').show();
            } else {
                $('.SelectLoan').hide();
                $('.CreateLoan').hide();
            }
        });

        $('#interest').on('change', function() {
            const paymentmthd = $(this).val();
            var TotalAmount = '';
            $('.TotalAmount').each(function() {
                var elementValue = $(this).val();
                TotalAmount += elementValue;
            });

            var DurationTime = '';
            $('.DurationTime').each(function() {
                var elementValue = $(this).val();
                DurationTime += elementValue;
            });

            // var TotalAmount = $('#TotalAmount').val();
            // var DurationTime = $('#DurationTime').val();
            if (paymentmthd == 'Each Day') {
                if (DurationTime.trim() == '30 Days') {
                    installmentPayment = (TotalAmount / 30)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(30);

                }
                if (DurationTime.trim() == '60 Days') {
                    installmentPayment = (TotalAmount / 60)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(60);

                }
                if (DurationTime.trim() == '90 Days') {
                    installmentPayment = (TotalAmount / 90)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(90);

                }
                if (DurationTime.trim() == '06 Months (180 Days)') {
                    installmentPayment = (TotalAmount / 180)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(180);
                    alert(TotalAmount)

                }
                if (DurationTime.trim() == '1 year') {
                    installmentPayment = (TotalAmount / 360)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(360 + '01 Year');

                }
            }

            if (paymentmthd == 'Daily') {
                if (DurationTime.trim() == '30 Days') {
                    installmentPayment = (TotalAmount / 30)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(30);

                }
                if (DurationTime.trim() == '60 Days') {
                    installmentPayment = (TotalAmount / 60)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(60);

                }
                if (DurationTime.trim() == '90 Days') {
                    installmentPayment = (TotalAmount / 90)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(90);

                }
                if (DurationTime.trim() == '06 Months (180 Days)') {
                    installmentPayment = (TotalAmount / 180)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(180);
                    alert(TotalAmount)

                }
                if (DurationTime.trim() == '1 year') {
                    installmentPayment = (TotalAmount / 360)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(360 + '01 Year');

                }
            }


            if (paymentmthd == 'Once in two days') {
                if (DurationTime.trim() == '30 Days') {
                    installmentPayment = (TotalAmount / 15)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(15);

                }
                if (DurationTime.trim() == '60 Days') {
                    installmentPayment = (TotalAmount / 30)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(30);

                }
                if (DurationTime.trim() == '90 Days') {
                    installmentPayment = (TotalAmount / 45)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(45);

                }
                if (DurationTime.trim() == '06 Months (180 Days)') {
                    installmentPayment = (TotalAmount / 90)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(90);

                }
                if (DurationTime.trim() == '1 year') {
                    installmentPayment = (TotalAmount / 180)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(180);

                }
            }
            if (paymentmthd == 'Weakly') {
                if (DurationTime.trim() == '30 Days') {
                    installmentPayment = (TotalAmount / 4)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(4);

                }
                if (DurationTime.trim() == '60 Days') {
                    installmentPayment = (TotalAmount / 8)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(8);

                }
                if (DurationTime.trim() == '90 Days') {
                    installmentPayment = (TotalAmount / 12)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(12);

                }
                if (DurationTime.trim() == '06 Months (180 Days)') {
                    installmentPayment = (TotalAmount / 24)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(24);

                }
                if (DurationTime.trim() == '1 year') {
                    installmentPayment = (TotalAmount / 48)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(48);

                }
            }
            if (paymentmthd == 'Monthly') {
                if (DurationTime.trim() == '30 Days') {
                    installmentPayment = (TotalAmount / 1)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(1);

                }
                if (DurationTime.trim() == '60 Days') {
                    installmentPayment = (TotalAmount / 2)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(2);

                }
                if (DurationTime.trim() == '90 Days') {
                    installmentPayment = (TotalAmount / 3)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(3);

                }
                if (DurationTime.trim() == '06 Months (180 Days)') {
                    installmentPayment = (TotalAmount / 6)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(6);

                }
                if (DurationTime.trim() == '1 year') {
                    installmentPayment = (TotalAmount / 12)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(12);

                }
            }
            if (paymentmthd == 'Weakly') {
                if (DurationTime.trim() == '30 Days') {
                    installmentPayment = (TotalAmount / 4)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(4);

                }
                if (DurationTime.trim() == '60 Days') {
                    installmentPayment = (TotalAmount / 8)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(8);

                }
                if (DurationTime.trim() == '90 Days') {
                    installmentPayment = (TotalAmount / 12)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(12);

                }
                if (DurationTime.trim() == '06 Months (180 Days)') {
                    installmentPayment = (TotalAmount / 24)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(24);

                }
                if (DurationTime.trim() == '1 year') {
                    installmentPayment = (TotalAmount / 48)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(48);

                }
            }
            if (paymentmthd == 'At once') {
                if (DurationTime.trim() == '30 Days') {
                    installmentPayment = (TotalAmount / 1)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(1);

                }
                if (DurationTime == '60 Days') {
                    installmentPayment.trim() = (TotalAmount / 1)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(2);

                }
                if (DurationTime.trim() == '90 Days') {
                    installmentPayment = (TotalAmount / 1)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(3);

                }
                if (DurationTime.trim() == '06 Months (180 Days)') {
                    installmentPayment = (TotalAmount / 1)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(6);

                }
                if (DurationTime.trim() == '1 year') {
                    installmentPayment = (TotalAmount / 1)
                    var rounded = Math.ceil(installmentPayment);
                    $('#installmentPayment').val(rounded);
                    $('#Numberofinstallments').val(12);

                }
            }


        });
        $(document).on('change', '#LoaninterestSchema', function() {
            var newMaximumAmount = parseFloat($('#newMaximumAmount').val());
            var newInterestRate = parseFloat($('#newInterestRate').val());
            var durationSelectedVal = $('#Duration').val();
            var LoaninterestSchemaSelectedVal = $(this).val();
            var timeInput = '';
            var totalAmount = '';
            if (durationSelectedVal == '30 Days') {
                timeInput = 1;
            } else if (durationSelectedVal == '60 Days') {
                timeInput = 2;
            } else if (durationSelectedVal == '90 Days') {
                timeInput = 3;
            } else if (durationSelectedVal == '06 Months (180 Days)') {
                timeInput = 6;
            } else if (durationSelectedVal == '1 year') {
                timeInput = 12;
            }

            if (LoaninterestSchemaSelectedVal == "Monthly") {
                interest = ((newMaximumAmount * newInterestRate) * timeInput) / 100;
                totalAmount = newMaximumAmount + interest;
                $('#newTotalAmount').val(totalAmount);

            } else if (LoaninterestSchemaSelectedVal == "Weakly") {
                interest = (((newMaximumAmount * newInterestRate) * 4) * timeInput) / 100;
                totalAmount = newMaximumAmount + interest;
                $('#newTotalAmount').val(totalAmount);


            } else if (LoaninterestSchemaSelectedVal == "Each Day") {
                var actualInterestRate = newInterestRate;
                interest = (((newMaximumAmount * actualInterestRate) * 30) * timeInput) / 100;
                totalAmount = newMaximumAmount + interest;
                $('#newTotalAmount').val(totalAmount);

            } else if (LoaninterestSchemaSelectedVal == "Daily") {
                var actualInterestRate = newInterestRate / 30;
                interest = (((newMaximumAmount * actualInterestRate) * 30) * timeInput) / 100;
                totalAmount = newMaximumAmount + interest;
                $('#newTotalAmount').val(totalAmount);

            } else if (LoaninterestSchemaSelectedVal == "For total amount") {
                interest = (newMaximumAmount * newInterestRate) / 100;
                totalAmount = newMaximumAmount + interest;
                $('#newTotalAmount').val(totalAmount);

            } else if (LoaninterestSchemaSelectedVal == "For Each Months") {
                interest = ((newMaximumAmount * newInterestRate) * timeInput) / 100;
                totalAmount = newMaximumAmount + interest;
                $('#newTotalAmount').val(totalAmount);
            }

        });


        $('#StartDate').on('change', function() {

            var startDate = new Date($('#StartDate').val());
            // var DurationTime = $('#DurationTime').val();
            var DurationTime = '';
            $('.DurationTime').each(function() {
                var elementValue = $(this).val();
                DurationTime += elementValue + ' ';
            });
            if (DurationTime.trim() == '30 Days') {
                startDate.setDate(startDate.getDate() + 30);
                var endDate = startDate.toISOString().substring(0, 10);
                $('#EndDate').val(endDate)
            }
            if (DurationTime.trim() == '60 Days') {
                startDate.setDate(startDate.getDate() + 60);
                var endDate = startDate.toISOString().substring(0, 10);
                $('#EndDate').val(endDate)

            }
            if (DurationTime.trim() == '90 Days') {
                startDate.setDate(startDate.getDate() + 90);
                var endDate = startDate.toISOString().substring(0, 10);
                $('#EndDate').val(endDate)

            }
            if (DurationTime.trim() == '06 Months (180 Days)') {
                startDate.setDate(startDate.getDate() + 180);
                var endDate = startDate.toISOString().substring(0, 10);
                $('#EndDate').val(endDate)

            }

            if (DurationTime.trim() == '1 year') {
                startDate.setDate(startDate.getDate() + 360);
                var endDate = startDate.toISOString().substring(0, 10);
                $('#EndDate').val(endDate)

            }

        });
        $('#framework').multiselect({
            nonSelectedText: 'Select Loan Type',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '100%',
        });

        $('#interest').multiselect({
            nonSelectedText: 'payment method',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '100%',

        });
        $('#LoaninterestSchema').multiselect({
            nonSelectedText: 'Interest Schema',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '100%',

        });


        $('#penaltyMethod').multiselect({
            nonSelectedText: 'penalty method',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '100%',

        });

        $('#Duration').multiselect({
            nonSelectedText: 'Select Duration Time',
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


        $(document).on('click', '#submitMicroLoan', function() {
            // $(this).prop("disabled", true);
            var LoanId = $('#LoanId').val();
            var RequestedAmount = $('#RequestedAmount').val();
            var PaymentMethodRequest = $('#PaymentMethod').val();
            var cusId = $('#cusId').val();


            var LoanType = $('#framework').val();

            var MaximumAmount = ''; // Initialize an empty string
            $('.MaximumAmount').each(function() {
                var elementValue = $(this).val();
                MaximumAmount += elementValue + ' ';
            });

            var DurationTime = '';
            $('.DurationTime').each(function() {
                var elementValue = $(this).val();
                DurationTime += elementValue + ' ';
            });
            var interestPresentage = '';
            $('.InterestRate').each(function() {
                var elementValue = $(this).val();
                interestPresentage += elementValue + ' ';
            });
            var interestScema = '';
            $('.LoaninterestSchema').each(function() {
                var elementValue = $(this).val();
                interestScema += elementValue + ' ';
            });

            var TotalAmount = '';
            $('.TotalAmount').each(function() {
                var elementValue = $(this).val();
                TotalAmount += elementValue + ' ';
            });
            // $('.TotalAmount').each(function() {
            //     var elementValue = $(this).val();
            //     TotalAmount += elementValue + ' '; 
            // });
            var Numberofinstallments = $('#Numberofinstallments').val();

            var PaymentMethod = $('#interest').val();

            var installmentPayment = $('#installmentPayment').val();
            var comment = $('#comment').val();

            var StartDate = $('#StartDate').val();
            var EndDate = $('#EndDate').val();
            var penaltyState;
            if ($('#option1').is(':checked')) {
                penaltyState = 1;
            } else if ($('#option2').is(':checked')) {
                penaltyState = 0;
            }

            var penaltyMethod = $('#penaltyMethod').val();
            var penaltypresentage = $('#penaltypresentage').val();
            var CustomLoanId = $("#CustomLoanId").val()
            // const img = new Image();
            // img.src = pngDataUrl;


            var isValid = true;
            var errorMessage = '';

            // Perform individual validation checks for each input field
            if (MaximumAmount.trim() === '') {
                errorMessage += 'Maximum Amount is required.<br>';
                isValid = false;
            }
            if (DurationTime.trim() === '') {
                errorMessage += 'Duration Time is required.<br>';
                isValid = false;
            }
            if (interestPresentage.trim() === '') {
                errorMessage += 'Interest Presentage is required.<br>';
                isValid = false;
            }
            if (TotalAmount.trim() === "") {
                errorMessage += 'Total Amount is required.<br>';
                isValid = false;
            }
            if (CustomLoanId.trim() === "") {
                errorMessage += 'Custom LoanId is required.<br>';
                isValid = false;
            }
            if (StartDate.trim() === "") {
                errorMessage += 'Start Date is required.<br>';
                isValid = false;
            }
            if (EndDate.trim() === "") {
                errorMessage += 'End Date is required.<br>';
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
                formData.append('ad_previes_outstand', 0);
                formData.append('LoanId', LoanId);
                formData.append('loan_type', 'microloan');
                formData.append('fixedInterest', $("#fixedInterest").val());
                formData.append('CustomLoanId', CustomLoanId);
                formData.append('RequestedAmount', RequestedAmount);
                formData.append('PaymentMethodRequest', PaymentMethodRequest);
                formData.append('cusId', cusId);
                formData.append('LoanType', LoanType);
                formData.append('Previousoutstandingloans', 'NaN');
                formData.append('MaximumAmount', MaximumAmount);
                formData.append('DurationTime', DurationTime);
                formData.append('interestPresentage', interestPresentage);
                formData.append('interestScema', interestScema);
                formData.append('TotalAmount', TotalAmount);
                formData.append('PaymentMethod', PaymentMethod);
                formData.append('installmentPayment', installmentPayment);
                formData.append('Numberofinstallments', Numberofinstallments);
                formData.append('StartDate', StartDate);
                formData.append('EndDate', EndDate);

                formData.append('penaltyState', penaltyState);
                formData.append('penaltyMethod', penaltyMethod);
                formData.append('penaltypresentage', penaltypresentage);
                formData.append('comments', comment);

                var promissoryNote = document.getElementById('promissory_note').files[0];
                formData.append('promissory_note', promissoryNote);

                $.ajax({
                    url: "/loans-store",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data, status, xhr) {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Success',
                            text: data.success || 'Loan Creation Success!',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        // For testing, call location.reload() directly
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        // Error message when CustomLoanId is taken
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Error',
                            text: xhr.responseJSON
                                .error, // Display the error message from the server
                            showConfirmButton: true,
                        });
                    }
                });
            }
        });


    });
</script>
