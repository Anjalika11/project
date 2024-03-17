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
                                data-target="#exampleModallarge" href="#">Setup-Loan</a>

                        </div>
                    </div>
                </div>
                <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                    <table id="example" class="table table-hover table-product" style="width: 100%; ">
                        <thead>
                            <tr>
                                <th>Loan Name</th>
                                <th>Loan Amount</th>
                                <th>Loan Duration</th>
                                <th>Interest schema</th>
                                <th>Interest Rate</th>
                                <th>Total Amount</th>
                                <th>Message</th>
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

    <div class="modal fade" id="exampleModallarge" tabindex="-1" role="dialog" aria-labelledby="exampleModalLarge"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLarge">Setup New Loan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        @csrf
                        {{-- <span class="section"></span> --}}
                        <div class="field item form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label class="col-form-label  label-align">Loan Name *</label>
                                    <input class="form-control" data-validate-length-range="6" id="LoanName"
                                        data-validate-words="2" name="name" required="required" />
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label class="col-form-label  label-align">Select Duration *</label>
                                    <div class="column" style="border: 1px solid rgb(98, 98, 98);">
                                        <select id="framework" name="framework[]" multiple class="form-control">
                                            <option value=1>30 Days</option>
                                            <option value=2>60 days</option>
                                            <option value=3>90 Days</option>
                                            <option value=6>6 Months</option>
                                            <option value=12>01 Year</option>
                                            <option value=24>02 Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field item form-group">


                        </div>
                        <div class="field item form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label class="col-form-label  label-align">Ad New Duration Time</label>
                                    <button type="button" class="btn btn-info" style="width:100%;"
                                        id="AdNewDurationTime">Ad New Duration Time</button>
                                </div>
                                <div class="col-md-6 col-sm-6" id="adNewDuration" style="display: none">
                                    <label class="col-form-label  label-align">New Duraton Time</label>
                                    <input class="form-control" name="adDuration" id='adDuration' type="number" />
                                </div>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label class="col-form-label  label-align">Maximum Amount *</label>
                                    <input class="form-control" name="MaximumAmount" class='email' id="MaximumAmount"
                                        required="required" type="text" />
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label class="col-form-label  label-align">Interest Rate *</label>
                                    <input class="form-control" name="interestRate" id="interestRate" required="required"
                                        type="number" />
                                </div>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label for="">Interest schema *</label>
                                    <div class="column" style="border: 1px solid rgb(98, 98, 98);">
                                        <select id="interest" name="interest[]" multiple class="form-control">
                                            <option value="Each Day">Each Day</option>
                                            <option value="Weakly">Weakly</option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="For total amount">For the total amount</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label class="col-form-label   label-align">Total Amount *</label>
                                    <input class="form-control" type="text" name="TotalAmount" id="TotalAmount"
                                        required='required' />
                                </div>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Profit Amount
                                *</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="Profit" required='required' />
                            </div>
                        </div>


                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Message *</label>
                            <div class="col-md-12 col-sm-12">
                                <textarea required="required" class="form-control" id="message" rows="4" name='message'></textarea>
                            </div>
                        </div>



                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                    <button type="button" id="setupLoan" class="btn btn-primary btn-pill">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('layout.footerlink')
<script>
    $(document).ready(function() {
        $('#AdNewDurationTime').click(function() {
            $('#adNewDuration').toggle();
        });



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




        var MaximumAmount;
        var timeInput;
        var amountdue;
        var interestRate;
        var interestpresentage;
        var interest;
        var totalAmount;
        var Amount;
        var InterestSchema;
        var selectDurationTime;
        $('#framework').on('change', function() {
            selectDurationTime = $('#framework').val();
        });


        $('#MaximumAmount').on('change', function() {
            MaximumAmount = $('#MaximumAmount').val();
        });



        $('#interestRate').on('change', function() {
            interestRate = $('#interestRate').val();


        });

        $('#interest').on('change', function() {
            var adNewDuration = $('#adDuration').val();

            if (adNewDuration.trim() !== "") {
                timeInput = adNewDuration;
                InterestSchema = $('#interest').val();
                interestpresentage = interestRate / 100;

                // Round MaximumAmount to the nearest whole number
                Amount = parseFloat(MaximumAmount);

                if (InterestSchema == "Each Day") {
                    interest = (Amount * interestpresentage) * timeInput;

                } else if (InterestSchema == "Weakly") {

                    interest = ((MaximumAmount * interestpresentage) / 4) * timeInput;
                } else if (InterestSchema == "Monthly") {

                    interest = Math.ceil((Amount * interestpresentage) * (timeInput / 30));
                } else if (InterestSchema == "For total amount") {

                    interest = (Amount * interestpresentage);
                }

                totalAmount = Amount + interest;
                $('#TotalAmount').val(totalAmount);
                $('#Profit').val(interest);
            } else {
                timeInput = selectDurationTime
                InterestSchema = $('#interest').val();
                interestpresentage = interestRate / 100;
                if (InterestSchema == "Monthly") {
                    interest = (MaximumAmount * interestpresentage) * timeInput;

                } else if (InterestSchema == "Weakly") {
                    interest = ((MaximumAmount * interestpresentage) * 4) * timeInput;


                } else if (InterestSchema == "Each Day") {
                    interest = ((MaximumAmount * interestpresentage) * 30) * timeInput;

                } else if (InterestSchema == "For total amount") {
                    interest = (MaximumAmount * interestpresentage);

                }
                Amount = parseFloat(MaximumAmount);
                totalAmount = Amount + interest;
                $('#TotalAmount').val(totalAmount);
                $('#Profit').val(interest);
            }

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
        });

        $('#setupLoan').click(function(e) {
            e.preventDefault();
            var LoanName = $('#LoanName').val();
            var totalpayment = totalAmount;
            var message = $('#message').val();
            var form_data = new FormData();
            // form_data.append('_token', $('meta[name="csrf-token"]').attr('content'));
            form_data.append('_token', '{{ csrf_token() }}');
            form_data.append('LoanName', LoanName);
            form_data.append('totalpayment', totalpayment);
            form_data.append('message', message);
            form_data.append('timeInput', timeInput);
            form_data.append('interestpresentage', interestpresentage);
            form_data.append('Amount', Amount);
            form_data.append('InterestSchema', InterestSchema);

            // Validation checks
            var isValid = true;
            var errorMessage = '';

            // Perform individual validation checks for each input field
            if (LoanName.trim() === '') {
                errorMessage += 'Loan Name is required.<br>';
                isValid = false;
            }
            if (totalpayment <= 0) {
                errorMessage += 'Total Payment should be greater than zero.<br>';
                isValid = false;
            }



            // Add validation checks for other input fields
            // ...

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
            }

            // All validations passed, submit the data
            $.ajax({
                url: "{{ route('store.loan') }}",
                type: 'POST',
                data: form_data,
                processData: false,
                contentType: false,

                success: function(data) {
                    Swal.fire(
                        'Good job!',
                        data.message,
                        'success'
                    );
                },
                error: function(xhr, textStatus, errorThrown) {
                    alert('Form submission failed!');
                }
            });
        });
    });
</script>
