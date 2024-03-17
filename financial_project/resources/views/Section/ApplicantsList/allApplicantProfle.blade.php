@extends('layout.layout')
@section('content')
    <div class="content-wrapper" style="position: relative; top:-50px;">
        <div class="content">
            <!-- Card Profile -->
            <div class="card card-default card-profile">
                <div class="card-header-bg" style="background-image: url(images/other/img4.jpg)"></div>

                <div class="card-body card-profile-body">
                    <div class="profile-avata">
                        @if ($CustomersProPic->isNotEmpty())
                            <img class="rounded-circle"
                                src="{{ asset('img/customers/ProPic/' . $CustomersProPic[0]->customer_proPic) }}"
                                alt="Avatar Image" style="width: 270px; height:270px; position:relative; top:-50px;" />
                        @else
                            <h1>No Images</h1>
                        @endif
                        <a class="h2 d-block mt-3 mb-2" href="#">{{ $customers->fullname }}</a>
                        <a class="d-block text-color" href="#">{{ $customers->email }}</a>
                    </div>

                    <ul class="nav nav-profile-follow">
                        {{-- @if ($RegisterStaffMembers->job_role == 'Collector')
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="h5 d-block">1503</span>
                                    <span class="text-color d-block">ONGOING</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="h5 d-block">2905</span>
                                    <span class="text-color d-block">COMPLETE</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="h5 d-block">1200</span>
                                    <span class="text-color d-block">OVER DUE</span>
                                </a>
                            </li>
                        @endif --}}
                    </ul>

                    <div class="profile-button">

                        {{-- <button type="button" class="btn bg-primary text-white btn-pill mb-3 mb-xxl-0" data-toggle="modal"
                            data-target="#exampleModallarge">
                            Upgrade Detail
                        </button> --}}

                        <div class="btn-group mb-1" style="position: relative; left:100px;">
                            <button type="button" class="btn btn-primary ">ACTION</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" data-toggle="modal" data-target="#exampleModallarge">Upgrade
                                    Detail</a>
                                <a class="dropdown-item AdmicoLoan" data-toggle="modal" data-target=".bd-example-modal-xl"
                                    data-id="{{ $customers->id }}">Ad mico Loan</a>
                                <a class="dropdown-item create_mortgage" href="#">Ad mortgage Loan</a>
                                <a class="dropdown-item" href="#">Ad Other Loan</a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>


        </div>
    </div>
    <div class="card card-default" style="position: relative; top:-50px;">

        <div class="card-body1">
            <div class="collapse" id="collapse-nav-underline-justify">

            </div>
            <div class="border p-6">
                <ul class="nav nav-underline-active-primary mb-3 justify-content-between" id="pills-tab12" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#nav-home-underline-primary"
                            role="tab" aria-controls="nav-tabs" aria-selected="true">personal Details</a>
                    </li>
                    @if ($customers->loanType == 'mortgageloan')
                        <li class="nav-item">
                            <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile-Salary-primary"
                                role="tab" aria-controls="nav-profile" aria-selected="false">Mortgage</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile-Attendence-primary"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Ongoin Loan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-CompleteLoan-primary"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Complete Loan</a>
                    </li>
                    {{-- @if ($RegisterStaffMembers->job_role == 'Collector')
                        <li class="nav-item">
                            <a class="nav-link" id="nav-profile-tab" data-toggle="pill"
                                href="#nav-profile-customers-primary" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Debtors in charge</a>
                        </li>
                    @endif --}}
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
                            <div class="col-xl-4" style="background-color: blueviolet">
                                <!-- Settings -->
                                <div class="card card-default" style="position: relative; top:30px;">
                                    <div class="card-header">
                                        <h2>CONTACT DETAILS</h2>
                                    </div>

                                    <div class="card-body pt-0">
                                        <ul class="nav nav-settings">
                                            <li class="nav-item">
                                                <a class="nav-link" href="user-profile-settings.html"
                                                    style="color: black; font-size:17px;">
                                                    <i class="mdi mdi-email mr-1"></i>{{ $customers->email }}
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="user-account-settings.html"
                                                    style="color: black; font-size:17px;">
                                                    <i
                                                        class="mdi mdi-cellphone-iphone mr-1"></i>{{ $customers->contactNumber }}
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="user-planing-settings.html"style="color: black; font-size:17px;">
                                                    <i
                                                        class="mdi mdi-phone-classic mr-1"></i>{{ $customers->contactNumberFixed }}
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="user-billing.html"
                                                    style="color: black; font-size:17px;">
                                                    <i class="mdi mdi-map-marker mr-1"></i>{{ $customers->address }}
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <!-- Account Settings -->
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h2 class="mb-5">PROFESSIONAL DETAILS</h2>
                                    </div>

                                    <div class="card-body">
                                        <form>
                                            <div class="row mb-2">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="firstName">Gender</label>

                                                        <h5>{{ $customers->gender }}</h5>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="lastName">NIC</label>
                                                        <h5>{{ $customers->nic }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="firstName">Loan Type</label>

                                                        <h5>{{ $customers->loanType }}</h5>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="lastName">Branch </label>
                                                        <h5>{{ $customers->branch_name }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="firstName">Requested Amount</label>

                                                        <h5>{{ $customers->requestedAmount }}</h5>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="lastName">Payment Method </label>
                                                        <h5>{{ $customers->paymentMethod }}</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="userName">User name</label>
                                                <h6>{{ $customers->detailspreviousloans }}</h6>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <!-- Settings -->
                                <div class="card card-default" style="position: relative; top:30px;">
                                    <div class="card-header" style="background-color: blueviolet;">
                                        <h2 style="color:aliceblue;">BANK DETAILS</h2>
                                    </div>

                                    <div class="card-body pt-0">
                                        <ul class="nav nav-settings">
                                            <li class="nav-item">
                                                <a class="nav-link" href="user-profile-settings.html"
                                                    style="color: black; font-size:17px;">
                                                    <i>Account Number : </i>{{ $customers->account_no }}
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="user-account-settings.html"
                                                    style="color: black; font-size:17px;">
                                                    <i>Bank Name : </i>{{ $customers->bankName }}
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="user-planing-settings.html"style="color: black; font-size:17px;">
                                                    <i>Branch Name : </i>{{ $customers->branchname }}
                                                </a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!-- Settings -->
                                <div class="card card-default" style="position: relative; top:30px;">
                                    <div class="card-header" style="background-color: blueviolet; ">
                                        <h2 style="color:aliceblue;">INCOME SOURCE</h2>
                                    </div>
                                    @if ($customers->incomeSource == 'Job')
                                        <div class="card-body pt-0">
                                            <ul class="nav nav-settings">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="user-profile-settings.html"
                                                        style="color: black; font-size:17px;">
                                                        <i>Job Role : </i>{{ $customers->jobrole }}
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="user-account-settings.html"
                                                        style="color: black; font-size:17px;">
                                                        <i>Company Name : </i>{{ $customers->companyName }}
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="user-planing-settings.html"style="color: black; font-size:17px;">
                                                        <i>Company Address : </i>{{ $customers->companyAddress }}
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="user-billing.html"
                                                        style="color: black; font-size:17px;">
                                                        <i>Company Contact Number : </i>{{ $customers->jobContactNumber }}
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    @endif
                                    @if ($customers->incomeSource == 'Business')
                                        <div class="card-body pt-0">
                                            <ul class="nav nav-settings">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="user-profile-settings.html"
                                                        style="color: black; font-size:17px;">
                                                        <i>Type of Business : </i>{{ $customers->typeofBusiness }}
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="user-account-settings.html"
                                                        style="color: black; font-size:17px;">
                                                        <i>Business Name : </i>{{ $customers->businessName }}
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="user-planing-settings.html"style="color: black; font-size:17px;">
                                                        <i>Business Address : </i>{{ $customers->bussinessAddress }}
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="user-billing.html"
                                                        style="color: black; font-size:17px;">
                                                        <i>Business More Infor : </i>{{ $customers->bussinessMoreInfo }}
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    @endif

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile-Salary-primary" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        @if ($customerMortgageTypes->contains('mortgage_type', 'Gold items'))
                            @foreach ($customersGoldItems as $data)
                                <div class="row " style="  margin:10px;">
                                    <div class="col-xl-4"
                                        style=" padding:10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                        <!-- Settings -->
                                        <div class="card card-default" style="position: relative; top:30px;">
                                            <div class="card-header">
                                                <h2>ITEMS IMAGES</h2>
                                            </div>

                                            <div class="card-body pt-0">

                                                @if (!empty($data['GoldItemsImages']))
                                                    @if (!empty($data['GoldItemsImages'][0]))
                                                        <img src="{{ asset('img/mortgages/otherImages/goldImages/' . $data['GoldItemsImages'][0]['gold_image']) }}"
                                                            alt="Gold Image" style="height: 250px; width: 250px;">
                                                    @else
                                                        <p>No Gold Images found for this Gold Item.</p>
                                                    @endif
                                                @else
                                                    <p>No Gold Items Images found for this Gold Item.</p>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8" style="background-color: blueviolet; ">
                                        <!-- Account Settings -->
                                        <div class="card card-default">
                                            <div class="card-header mortgage-item-view">
                                                <h2 class="mb-5">GOLD ITEMS</h2>
                                            </div>

                                            <div class="card-body">
                                                <form>
                                                    <div class="row mb-2">
                                                        <div class="col-lg-6">
                                                            <div>
                                                                <h6> <label for="lastName">Gold Type :&nbsp;</label>
                                                                    {{ $data['gold_type'] }}</h6>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div>
                                                                <h6><label for="lastName">Available
                                                                        Status :&nbsp; </label>{{ $data['status'] }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-lg-6">
                                                            <div>

                                                                <h6><label for="firstName">Gold Carat
                                                                        :&nbsp;</label>{{ $data['gold_pound'] }}</h6>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div>

                                                                <h6><label for="lastName">Gold Weight
                                                                        :&nbsp;</label>{{ $data['weight'] }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">

                                                                <h6><label for="firstName">Requested Amount
                                                                        :&nbsp;</label>{{ $data['gold_market_price'] }}
                                                                </h6>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">

                                                                <h6><label for="lastName">Payment Method
                                                                        :&nbsp;</label>{{ $data['gold_suggested_price'] }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label for="userName">More Details</label>
                                                        <textarea class="form-control rounded-left" placeholder="" rows="5" id="jobDescription" cols="50">{{ $data['gold_more'] }}</textarea>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        @endif
                        @if ($customerMortgageTypes->contains('mortgage_type', 'auto'))
                            @foreach ($customersVehicleMortgage as $data)
                                <div class="row " style="  margin:10px; position: relative;top:10px; padding:20px;">


                                    <div class="col-xl-4"
                                        style=" padding:10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">

                                        <div class="card card-default" style="position: relative; top:30px;">
                                            <div class="card-header">
                                                <h2>ITEMS IMAGES</h2>
                                            </div>

                                            <div class="card-body1 pt-0">
                                                @if (!empty($data['VehicleImages']))
                                                    @if (!empty($data['VehicleImages'][0]))
                                                        <img src="{{ asset('img/mortgages/vehicles/vehicle_images/' . $data['VehicleImages'][0]['gold_image']) }}"
                                                            alt="Gold Image" style="height: 250px; width: 250px;">
                                                    @else
                                                        <p>No Gold Images found for this Gold Item.</p>
                                                    @endif
                                                @else
                                                    <p>No Gold Items Images found for this Gold Item.</p>
                                                @endif



                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8" style="background-color: rgb(230, 210, 249); padding:20px;">
                                        <div class="description">

                                            <div class="row mb-2">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="form-group">
                                                            <h6><label for="lastName">Vehicle Category
                                                                    :&nbsp;</label>{{ $data['auto_vehicle_category'] }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="form-group">
                                                            <h6><label for="userName">Vehicle Brand
                                                                    :&nbsp;</label>{{ $data['auto_vehicle_brand'] }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <h6><label for="userName">Vehicle Model
                                                                :&nbsp;</label>{{ $data['auto_vehicle_model'] }}</h6>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <h6><label for="userName">Vehicle Manufacture year
                                                                :&nbsp;</label>{{ $data['auto_vehicle_year'] }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <h6><label for="userName">Vehicle Mileage
                                                                :&nbsp;</label>{{ $data['auto_vehicle_mileage'] }}
                                                        </h6>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <h6><label for="userName">Vehicle Engine Capacity
                                                                :&nbsp;</label>{{ $data['auto_vehicle_engine_capacity'] }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <h6><label for="userName">Vehicle Maraket Price
                                                                :&nbsp;</label>{{ $data['auto_vehicle_market_price'] }}
                                                        </h6>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <h6><label for="userName">Vehicle Suggested Price
                                                                :&nbsp;</label>{{ $data['auto_vehicle_suggested_price'] }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>{{ $data['auto_vehicle_more'] }}</p>

                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        @endif
                        @if ($customerMortgageTypes->contains('mortgage_type', 'Electronic Devices'))
                            @foreach ($customersElectronicDevices as $data)
                                <div class="row " style="  margin:10px;">
                                    <div class="col-xl-4"
                                        style=" padding:10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                        <!-- Settings -->
                                        <div class="card card-default" style="position: relative; top:30px;">
                                            <div class="card-header">
                                                <h2>ITEMS IMAGES</h2>
                                            </div>

                                            <div class="card-body pt-0">
                                                @if (!empty($data['ElectronicDevicesImages']))
                                                    @if (!empty($data['ElectronicDevicesImages'][0]))
                                                        <img src="{{ asset('img/mortgages/otherImages/ElectronicDevices/' . $data['ElectronicDevicesImages'][0]['gold_image']) }}"
                                                            alt="Gold Image" style="height: 250px; width: 250px;">
                                                    @else
                                                        <p>No Gold Images found for this Gold Item.</p>
                                                    @endif
                                                @else
                                                    <p>No Gold Items Images found for this Gold Item.</p>
                                                @endif



                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8" style="background-color: blueviolet; ">
                                        <!-- Account Settings -->
                                        <div class="card card-default">
                                            <div class="card-header mortgage-item-view">
                                                <h2 class="mb-5">Device</h2>
                                            </div>

                                            <div class="card-body">
                                                <form>
                                                    <div class="row mb-2">
                                                        <div class="col-lg-6">
                                                            <div>
                                                                <h6> <label for="lastName">Device Type :&nbsp;</label>
                                                                    {{ $data['devices_type'] }}</h6>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div>
                                                                <h6><label for="lastName">Device Brand
                                                                        Status :&nbsp; </label>{{ $data['devices_brand'] }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-lg-6">
                                                            <div>

                                                                <h6><label for="firstName">Device Model
                                                                        :&nbsp;</label>{{ $data['devices_model'] }}</h6>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div>

                                                                <h6><label for="lastName">Device State
                                                                        :&nbsp;</label>{{ $data['status'] }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">

                                                                <h6><label for="firstName">Maraket Price
                                                                        :&nbsp;</label>{{ $data['devices_market_price'] }}
                                                                </h6>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">

                                                                <h6><label for="lastName">Suggested Price
                                                                        :&nbsp;</label>{{ $data['devices_suggested_price'] }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label for="userName">More Details</label>
                                                        <textarea class="form-control rounded-left" placeholder="" rows="5" id="jobDescription" cols="50">{{ $data['devices_more'] }}</textarea>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        @endif
                        @if ($customerMortgageTypes->contains('mortgage_type', 'property'))
                            @foreach ($customersPropertyMortgage as $data)
                                <div class="row " style="  margin:10px; position: relative;top:10px;">
                                    <div class="col-xl-4"
                                        style=" padding:10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                        <!-- Settings -->
                                        <div class="card card-default" style="position: relative; top:30px;">
                                            <div class="card-header">
                                                <h2>PROPERTY IMAGES</h2>
                                            </div>

                                            <div class="card-body1 pt-0">
                                                @if (!empty($data['propertyImages']))
                                                    @if (!empty($data['propertyImages'][0]))
                                                        <img src="{{ asset('img/mortgages/properties/property_images/' . $data['propertyImages'][0]['property_image']) }}"
                                                            alt="Gold Image" style="height: 250px; width: 250px;">
                                                    @else
                                                        <p>No Gold Images found for this Gold Item.</p>
                                                    @endif
                                                @else
                                                    <p>No Gold Items Images found for this Gold Item.</p>
                                                @endif


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8" style="background-color: blueviolet; ">

                                        <div class="card1">
                                            <nav>
                                                <svg class="arrow" version="1.1" viewBox="0 0 512 512" width="512px"
                                                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <polygon
                                                        points="352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 "
                                                        stroke="#727272" />
                                                </svg>
                                                <h4>{{ $data['property_type'] }}</h4>
                                                <svg class="heart" version="1.1" viewBox="0 0 512 512" width="512px"
                                                    xml:space="preserve" stroke="#727272"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <path
                                                        d="M340.8,98.4c50.7,0,91.9,41.3,91.9,92.3c0,26.2-10.9,49.8-28.3,66.6L256,407.1L105,254.6c-15.8-16.6-25.6-39.1-25.6-63.9  c0-51,41.1-92.3,91.9-92.3c38.2,0,70.9,23.4,84.8,56.8C269.8,121.9,302.6,98.4,340.8,98.4 M340.8,83C307,83,276,98.8,256,124.8  c-20-26-51-41.8-84.8-41.8C112.1,83,64,131.3,64,190.7c0,27.9,10.6,54.4,29.9,74.6L245.1,418l10.9,11l10.9-11l148.3-149.8  c21-20.3,32.8-47.9,32.8-77.5C448,131.3,399.9,83,340.8,83L340.8,83z"
                                                        stroke="#727272" />
                                                </svg>
                                            </nav>
                                            {{-- <div class="photo">
                                        <img
                                            src="https://s-media-cache-ak0.pinimg.com/236x/3b/36/ca/3b36ca3afe0fa0fd4984b9eee2e154bb.jpg">
                                    </div> --}}
                                            <div class="description">

                                                <div class="row mb-2">
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <div class="form-group">
                                                                <h6><label for="lastName">Property Type
                                                                        :&nbsp;</label>{{ $data['property_type'] }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div>
                                                            <div class="form-group">
                                                                <h6><label for="userName">Property Province
                                                                        :&nbsp;</label>{{ $data['property_province'] }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <h4>Popular House Plant</h4> --}}
                                                <div class="row mb-2">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <h6><label for="userName">Property District
                                                                    :&nbsp;</label>{{ $data['property_district'] }}</h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <h6><label for="userName">Address
                                                                    :&nbsp;</label>{{ $data['property_address'] }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <h6><label for="userName">Vehicle Maraket Price
                                                                    :&nbsp;</label>{{ $data['property_assessed_value'] }}
                                                            </h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <h6><label for="userName">Vehicle Suggested Price
                                                                    :&nbsp;</label>{{ $data['property_suggested_value'] }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>{{ $data['property_more'] }}</p>
                                                <button>EDIT</button>
                                                <button>DELETE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="tab-pane fade" id="nav-profile-Attendence-primary" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
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
                                        <th>Loan Type</th>
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
                                        <th>Loan Type</th>
                                        <th>Action</th>
                                        <th>Ad Payment</th>

                                        {{-- <th>Action</th>  --}}
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="nav-CompleteLoan-primary" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                            <table id="completedLoan" class="table table-hover table-product  nowrap"
                                style="width: 100%; ">
                                <thead>
                                    <tr class="table-header">
                                        <th>Loan ID</th>
                                        <th>Name</th>
                                        <th>Expected</th>
                                        <th>Capital</th>
                                        <th>Loan Amount </th>
                                        <th>Paid</th>
                                        <th>Duration</th>
                                        <th>Pay <br> Method</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th> complete <br> Dates</th>
                                        <th> complete <br> Time</th>
                                        <th> Remaining <br> Dates</th>
                                        <th> Loan Type </th>
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
                                        <th>Loan Amount </th>
                                        <th>Paid</th>
                                        <th>Duration</th>
                                        <th>Pay <br> Method</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th> complete <br> Dates</th>
                                        <th> complete <br> Time</th>
                                        <th> Loan Type </th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>

                    </div>




                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalGrid" tabindex="-1" role="dialog" aria-labelledby="exampleModalGrid"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalGridTitle">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-box table-responsive">
                        <table id="example1" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Arrive</th>
                                    <th>Departure </th>

                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Date</th>
                                    <th>Arrive</th>
                                    <th>Departure </th>


                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModallarge" tabindex="-1" role="dialog" aria-labelledby="exampleModalLarge"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgb(252, 97, 120); ">
                    <h3 class="modal-title" style="color: aliceblue" id="exampleModalLarge">EDIT STAFF DETAILS</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium" for="">Name<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="name"
                                            value="{{ $customers->fullname }}">
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Address<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-google-maps" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="address"
                                            value="{{ $customers->address }}">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Mobile Number<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-cellphone-iphone"
                                                id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="phone"
                                            value="{{ $customers->contactNumber }}">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Home phone number</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-phone-classic" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="Homephone"
                                            value="{{ $customers->contactNumberFixed }}">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Email</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-email" id="basic-addon1"></span>
                                        </div>
                                        <input type="email" class="form-control" id="emailAddress"
                                            value="{{ $customers->email }}">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">NIC<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account-card-details"
                                                id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="nic"
                                            value="{{ $customers->nic }}">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Request Amount<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-cash" id="basic-addon1"></span>
                                        </div>
                                        <input type="email" class="form-control" id="RequestedAmount"
                                            value="{{ $customers->requestedAmount }}">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">How to Pay<span
                                            style="color: rgb(250, 64, 104); font-size:20px;">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account-question"
                                                id="basic-addon1"></span>
                                        </div>
                                        <select id="payment_method" class="form-select form-control">
                                            @if ($customers->paymentMethod)
                                                <option value="{{ $customers->paymentMethod }}" selected>
                                                    {{ $customers->paymentMethod }}</option>
                                            @endif

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
                            <div class="col-xl-6">
                                <label class="text-dark font-weight-medium" for="">Gender</label>
                                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>
                                                    <input id="male" type="radio" name="gender" value="male"
                                                        {{ $customers->gender === 'male' ? 'checked' : '' }} />
                                                    <span class="radio"></span>
                                                    <span class="label">Male</span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label>
                                                    <input id="female" type="radio" name="gender" value="female"
                                                        {{ $customers->gender === 'female' ? 'checked' : '' }} />
                                                    <span class="radio"></span>
                                                    <span class="label">Female</span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium" for="">Assign
                                        Collectors</label>
                                    <div class="input-group mb-3">
                                        <div class="column col-xl-12" style="border: 1px solid rgb(98, 98, 98);">
                                            <select id="staffmembers" class="form-control" name="staffmembers[]"
                                                required>
                                                @foreach ($staffmembers as $staffmember)
                                                    <option value="{{ $staffmember->id }}"
                                                        {{ in_array($staffmember->id, $selectedCollectors) ? 'selected' : '' }}>
                                                        {{ $staffmember->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label class="upload__btn">
                                                <p>Upload Profile image</p>
                                                <input type="file" multiple data-max_length="20" name='staffPropic[]'
                                                    class="upload__inputfile" />
                                            </label>
                                        </div>
                                        <div class="upload__img-wrap">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-5">
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label class="upload__btn">
                                                <p>Upload NIC Images</p>
                                                <input type="file" multiple data-max_length="20" name='staffCVPdf[]'
                                                    class="upload__inputfile" accept="application/pdf" />
                                            </label>
                                        </div>
                                        <div class="upload__pdf-wrap"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-4">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Bank</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-bank" id="basic-addon1"></span>
                                        </div>
                                        <input type="email" class="form-control" id="BankName"
                                            value="{{ $customers->bankName }}">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Account Number</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-format-align-justify"
                                                id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="accountNo"
                                            value="{{ $customers->account_no }}">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Branch</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-city" id="basic-addon1"></span>
                                        </div>
                                        <input type="email" class="form-control" id="Branchname"
                                            value="{{ $customers->branchname }}">
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Description</label>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control rounded-left" placeholder="" rows="10" id="description" cols="50">{{ $customers->detailspreviousloans }}</textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-5">

                                    <button type="submit" id='submit_Primery_data' data-id="{{ $customers->id }}"
                                        class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>

                    </div>
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
                        {{-- <div class="col-sm">
                            <label for="middle-name" class="label-align"></label>
                            <input type="hidden" id="cusId" name="last-name" required="required"
                                class="form-control ">
                        </div> --}}
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                    </div>



                    <div class="row" style="margin: 5px 40px 5px 40px; padding:10px;">
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Customer Id<span
                                    class="required">*</span></label>
                            <input type="test" id="LoanId" name="last-name" required="required"
                                class="form-control ">
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Requested Amount<span
                                    class="required">*</span></label>
                            <input type="test" id="LoanRequestedAmount" name="last-name" required="required"
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
                            <input type="checkbox" name="checkbox" id="SelectLoanAmount" class="custom-checkbox">
                            <label for="SelectLoanAmount">Select Loan Amount</label>
                        </div>
                        <div class="col-sm">
                            <input type="checkbox" name="checkbox" id="CreateLoanAmount" class="custom-checkbox">
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
                                        <option value="Each Day">Each Day</option>
                                        <option value="Daily">Daily</option>
                                        <option value="Weakly">Weakly</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="For Each Months">For Each Months</option>
                                        <option value="Quarter">Quarter</option>
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
                    <div class="row"
                        style="margin: 5px 40px 5px 40px; padding:10px; background-color:rgb(243, 229, 255);">
                        <div class="col-sm">
                            <label for="middle-name" class="label-align">Previous outstanding loans<span
                                    class="required">*</span></label>
                            <input type="text" id="Previousoutstandingloans" name="last-name" required="required"
                                class="form-control ">
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align"><span class="required">Ad Outstanding loan to
                                    new loan without interest*</span></label>
                            <li><input type="checkbox"
                                    class="checkboxright withoutInterest checkbox--light-blue custom-checkbox"
                                    id="withoutInterestCheckbox" /> Ad Tick</li>
                        </div>
                        <div class="col-sm">
                            <label for="middle-name" class="label-align"><span class="required">Ad Outstanding loan to
                                    new loan with interest*</span></label>
                            <li><input type="checkbox"
                                    class="checkboxright withInterest checkbox--light-blue custom-checkbox"
                                    id="withInterestCheckbox" /> Ad Tick</li>
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

                                    <option value="Quarter">Quarter</option>
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

                                    <option value="Quarter">Quarter</option>
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
                                    <input type="file" id="promissory_note" name='promissory_note'
                                        class="file-input" accept="image/*,.pdf">
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

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                        <input type="hidden" id="Id" required="required"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Loan Id
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-6 ">
                                        <input type="text" id="Custom_Loan_Id" required="required"
                                            class="form-control" readonly>
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
                                        <input type="hidden" id="due_amount" required="required"
                                            class="form-control">
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
                    <button type="button" class="btn btn-sm btn-success submitPayment "
                        id="subm">Submit</button>
                    <button type="button" class="btn btn-sm btn-secondary hideThis" id="close"
                        data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-secondary hideThis" id="print"
                        disabled>Print</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">






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
                                        <p class="itemtext" style="font-size: 1em; color:black;"> 𝐀𝐦𝐨𝐮𝐧𝐭</p>
                                    </td>
                                </tr>


                                <tr class="service">
                                    <td class="tableitem">
                                        <p class="itemtext" style="font-size: 0.9em; color:black;">Loan Amount</p>
                                    </td>
                                    <td class="tableitem">
                                        <p class="itemtext"></p>
                                    </td>
                                    <td class="tableitem">
                                        <p class="itemtext" id="LAmount" style="font-size: 0.9em; color:black;"></p>
                                    </td>
                                </tr>



                                <tr class="service">
                                    <td class="tableitem">
                                        <p class="itemtext" style="font-size: 0.9em; color:black;">Paid Amount</p>
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
                                        <p class="itemtext" id="TAmount" style="font-size: 0.9em; color:black;"></p>
                                    </td>
                                </tr>


                                <tr class="service">
                                    <td class="tableitem">
                                        <p class="itemtext" style="font-size: 0.9em; color:black;">Remaining Amount</p>
                                    </td>
                                    <td class="tableitem">
                                        <p class="itemtext"></p>
                                    </td>
                                    <td class="tableitem">
                                        <p class="itemtext" id="RAmount" style="font-size: 0.9em; color:black;"></p>
                                    </td>
                                </tr>



                            </table>
                        </div>
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
@endsection
@include('layout.footerlink')
<script>
    // jQuery(document).ready(function() {
    //     ImgUpload();
    // });

    // function ImgUpload() {
    //     var imgWrap = "";
    //     var imgArray = [];

    //     $(".upload__inputfile").each(function() {
    //         $(this).on("change", function(e) {
    //             imgWrap = $(this).closest(".upload__box").find(".upload__img-wrap");
    //             var maxLength = $(this).attr("data-max_length");

    //             var files = e.target.files;
    //             var filesArr = Array.prototype.slice.call(files);
    //             var iterator = 0;
    //             filesArr.forEach(function(f, index) {
    //                 if (!f.type.match("image.*")) {
    //                     return;
    //                 }

    //                 if (imgArray.length > maxLength) {
    //                     return false;
    //                 } else {
    //                     var len = 0;
    //                     for (var i = 0; i < imgArray.length; i++) {
    //                         if (imgArray[i] !== undefined) {
    //                             len++;
    //                         }
    //                     }
    //                     if (len > maxLength) {
    //                         return false;
    //                     } else {
    //                         imgArray.push(f);

    //                         var reader = new FileReader();
    //                         reader.onload = function(e) {
    //                             var html =
    //                                 "<div class='upload__img-box'><div style='background-image: url(" +
    //                                 e.target.result +
    //                                 ")' data-number='" +
    //                                 $(".upload__img-close").length +
    //                                 "' data-file='" +
    //                                 f.name +
    //                                 "' class='img-bg'><div class='upload__img-close'></div></div></div>";
    //                             imgWrap.append(html);
    //                             iterator++;
    //                         };
    //                         reader.readAsDataURL(f);
    //                     }
    //                 }
    //             });
    //         });
    //     });

    //     $("body").on("click", ".upload__img-close", function(e) {
    //         var file = $(this).parent().data("file");
    //         for (var i = 0; i < imgArray.length; i++) {
    //             if (imgArray[i].name === file) {
    //                 imgArray.splice(i, 1);
    //                 break;
    //             }
    //         }
    //         $(this).parent().parent().remove();
    //     });
    // }

    // jQuery(document).ready(function() {
    //     PdfUpload();
    // });

    // function PdfUpload() {
    //     var pdfWrap = "";
    //     var pdfArray = [];

    //     $(".upload__inputfile").each(function() {
    //         $(this).on("change", function(e) {
    //             pdfWrap = $(this).closest(".upload__box").find(".upload__pdf-wrap");
    //             var maxLength = $(this).attr("data-max_length");

    //             var files = e.target.files;
    //             var filesArr = Array.prototype.slice.call(files);
    //             var iterator = 0;
    //             filesArr.forEach(function(f, index) {
    //                 if (!f.type.match("application/pdf")) {
    //                     return;
    //                 }

    //                 if (pdfArray.length > maxLength) {
    //                     return false;
    //                 } else {
    //                     var len = 0;
    //                     for (var i = 0; i < pdfArray.length; i++) {
    //                         if (pdfArray[i] !== undefined) {
    //                             len++;
    //                         }
    //                     }
    //                     if (len > maxLength) {
    //                         return false;
    //                     } else {
    //                         pdfArray.push(f);

    //                         var pdfName = f.name;
    //                         var html =
    //                             "<div class='upload__pdf-box'><div data-file='" +
    //                             pdfName +
    //                             "' class='pdf-link'><a href='" +
    //                             URL.createObjectURL(f) +
    //                             "' target='_blank'>" +
    //                             pdfName +
    //                             "</a><div class='upload__pdf-close'></div></div></div>";
    //                         pdfWrap.append(html);
    //                         iterator++;
    //                     }
    //                 }
    //             });
    //         });
    //     });

    //     $("body").on("click", ".upload__pdf-close", function(e) {
    //         var file = $(this).parent().data("file");
    //         for (var i = 0; i < pdfArray.length; i++) {
    //             if (pdfArray[i].name === file) {
    //                 pdfArray.splice(i, 1);
    //                 break;
    //             }
    //         }
    //         $(this).parent().parent().remove();
    //     });
    // }


    $(document).ready(function() {




        var userId = ('{{ $customers->id }}');

        $(document).on('click', '.create_mortgage', function() {
            var url = '/next-mortgage?id=' + userId;
            window.location.href = url;
        });

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
            ajax: {
                url: "{{ route('get-costomer-Loan', ['id' => 'userId']) }}"
                    .replace('userId', userId),
                dataSrc: 'data', // Assuming your data is in a 'data' property
            },
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
                {
                    data: 'totalAmount',
                    name: 'totalAmount',
                    render: function(data, type, row, meta) {
                        // row.capital_date.forEach(function(item) {
                        //     console.log(item.payment_date);
                        // });
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
                        var interest_rate = parseInt(row.interest_rate);
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
                            const timeDiff = today.getTime() - StartDate.getTime();
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
                    data: 'sum_interest_amount',
                    name: 'sum_interest_amount'
                },
                {
                    data: 'totalAmount',
                    name: 'totalAmount',
                    render: function(data, type, row, meta) {
                        var interest_schema = row.interest_schema;
                        var Previousoutstandingloans = 0;
                        var ad_previes_outstand = parseInt(row.ad_previes_outstand);
                        if (ad_previes_outstand == 1) {
                            Previousoutstandingloans = parseFloat(row.Previousoutstandingloans);
                        } else {
                            Previousoutstandingloans = 0;
                        }
                        var interest_amount = parseInt(row.interest_amount);
                        interestSc = interest_schema;
                        const EndDate = new Date(row.end_date);
                        const StartDate = new Date(row.start_date);
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
                    data: 'due_amount',
                    name: 'due_amount',
                    render: function(data, type, row, meta) {
                        var Previousoutstandingloans = 0;
                        var ad_previes_outstand = parseInt(row.ad_previes_outstand);
                        if (ad_previes_outstand == 1) {
                            Previousoutstandingloans = parseFloat(row.Previousoutstandingloans);
                        } else {
                            Previousoutstandingloans = 0;
                        }
                        var interest_schema = row.interest_schema;
                        var due_amount = parseInt(row.due_amount);
                        const EndDate = new Date(row.end_date);
                        const StartDate = new Date(row.start_date);
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
                    data: 'loanType',
                    name: 'loanType',
                    render: function(data, type, row, meta) {
                        if (data === 'microloan') {
                            return `<span class="badge badge-xl badge-pill" style="background-color:pink; color:black;">Micro</span>`;
                        } else if (data === 'mortgageloan') {
                            return `<span class="badge badge-xl badge-pill"  style="background-color:purple; color:white;">Mortgage</span>`;
                        } else {
                            return data;
                        }
                    }
                },
                {
                    data: 'id',
                    name: 'id',
                    render: function(data, type, row) {
                        var action = '<td>' +
                            '<div class="dropdown">' +
                            '<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>' +
                            '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">' +
                            '<a class="dropdown-item  finishLoan" data-id="' + data +
                            '">Finish Loan</a>' +
                            '<a class="dropdown-item  view-profile" data-id="' + data +
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

            ]
        });



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
            ajax: {
                url: "{{ route('get-complete-costomer-Loan', ['id' => 'userId']) }}"
                    .replace('userId', userId),
                dataSrc: 'data', // Assuming your data is in a 'data' property
            },
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
                        var maximum_amount = parseInt(row.capital_amount);
                        var totalAmount = parseInt(row.totalAmount);
                        var interest_rate = parseInt(row.interest_rate);
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
                {
                    data: 'loanType',
                    name: 'loanType',
                    render: function(data, type, row, meta) {
                        if (data === 'microloan') {
                            return `<span class="badge badge-xl badge-pill" style="background-color:pink; color:black;">Micro</span>`;
                        } else if (data === 'mortgageloan') {
                            return `<span class="badge badge-xl badge-pill"  style="background-color:purple; color:white;">Mortgage</span>`;
                        } else {
                            return data;
                        }
                    }
                },


            ]
        });



        var interestSchema = '';
        var amountInterestFor_Date = '';
        var amountInterestForDatewithPreviousO = '';
        var amountInterestForDatewithPreviousForEM = '';
        var fixedInterest = '';
        var lmaxAmount = '';
        var Previousoutstanding = '';
        var penaltyInterest = '';
        var totalPaid = '';


        $(document).on('click', '.ad-payment-btn', function() {
            var userId = $(this).data('id');

            $.ajax({
                url: '/loan-detail/' + userId,
                method: 'GET',

                success: function(response) {
                    var data = response.data;
                    console.log(data);
                    $.each(data, function(index, item) {
                        interestSchema = item.interest_schema;
                        FullPaidAmount = item.total_amount;
                        totalPaid = item.pay_amount;
                        penaltyInterest = item.penaltyInterest;
                        fixedInterest = item.fixedInterest;
                        const LEDate = new Date(item.end_date);
                        const LSDate = new Date(item.start_date);
                        const CurrentD = new Date();
                        var lmaximumAmount = parseFloat(item.capital_amount);
                        var Previousoutstanding = 0;
                        var ad_previes_outstand = parseInt(item
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
                            amountInterestForDatewithPreviousO =
                                amountInterestFor_Date + Previousoutstanding;

                        }

                        var name = "Dear" + " " + item.fullname;
                        var edate = item.end_date;
                        const customerName = document.getElementById(
                            "customerName");
                        customerName.innerHTML = name;
                        var LiD = item.id;
                        const customerloanID = document.getElementById("lId");
                        customerloanID.innerHTML = LiD;
                        var LAmount = item.total_amount;
                        let formattedNumber = LAmount.toLocaleString('en-US', {
                            minimumFractionDigits: 2,
                            maximumFractionDigits: 2
                        });
                        const customerLAmount = document.getElementById("LAmount");
                        customerLAmount.innerHTML = formattedNumber;

                        const e_date = document.getElementById("edate");
                        e_date.innerHTML = edate;


                        $('#Id').val(item.id);
                        $('#Custom_Loan_Id').val(item.id);
                        $('#InstallmentAmount').val(item.installment_amount);
                        $('#due_amount').val(item.due_amount);

                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });

        });




        $(document).on('click', '.submitPayment', function() {
            var Id = $('#Id').val();
            var LoanId = $('#Custom_Loan_Id').val();
            var InstallmentAmount = $('#InstallmentAmount').val();
            var installmentAmountInt = parseInt(InstallmentAmount);
            var CategoryOfPayment = $("#TypeOfPayment").val();
            var PaymentDate = $('#PaymentDate').val();
            var Remind = $('#Remind').val();
            var due_price = $('#due_amount').val();
            var due_priceInt = parseInt(due_price);

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



        $('.AdmicoLoan').click(function() {
            var userId = $(this).data('id');
            $.ajax({
                url: '/setupLoanForm/' + userId,
                method: 'GET',
                success: function(response) {
                    var data = response.data;
                    console.log(data)
                    if (Array.isArray(data) && data.length >= 2) {
                        var customerDetails = data[0]; // Accessing CustomerDetails
                        var loanDetails = data[1];

                        $('#LoanId').val(customerDetails.id);
                        var customerNic = customerDetails.nic;
                        const StartDate = new Date(loanDetails.start_date);
                        const currentDate = new Date();
                        const loan_complete_date = new Date(loanDetails.loan_complete_date);
                        const interest_schema = loanDetails.interest_schema;
                        const maximum_amount = loanDetails.maximum_amount;
                        var Previousoutstandingloans = parseFloat(loanDetails
                            .Previousoutstandingloans);
                        var interest_rate = parseInt(loanDetails.interest_rate);
                        var pay_amount = loanDetails.pay_amount;
                        var CustomerloanId;
                        if (data[1] && data[1].CustomLoanId) {
                            CustomerloanId = data[1].CustomLoanId;
                        } else {
                            CustomerloanId = data[2].CustomLoanId;
                        }

                        $('#LoanRequestedAmount').val(customerDetails.requestedAmount);
                        console.log(loanDetails.interest_schema)


                        if (loanDetails.interest_schema == 'Daily') {
                            if (loanDetails.loan_complete_date != null) {
                                const timeDiff = loan_complete_date.getTime() - StartDate
                                    .getTime();
                                const daysDiff = Math.floor(timeDiff / 86400000);
                                const interest_rate_for_date = (interest_rate / 30) *
                                    daysDiff;
                                const amountInterestForDate = maximum_amount + (
                                    maximum_amount *
                                    interest_rate_for_date / 100);
                                $('#Previousoutstandingloans').val((amountInterestForDate +
                                        Previousoutstandingloans) -
                                    pay_amount);

                            } else {
                                const timeDiff = currentDate.getTime() - StartDate
                                    .getTime();
                                const daysDiff = Math.floor(timeDiff / 86400000);
                                const interest_rate_for_date = (interest_rate / 30) *
                                    daysDiff;
                                const amountInterestForDate = maximum_amount + (
                                    maximum_amount *
                                    interest_rate_for_date / 100);
                                $('#Previousoutstandingloans').val((amountInterestForDate +
                                        Previousoutstandingloans) -
                                    pay_amount);

                            }

                        } else {
                            $('#Previousoutstandingloans').val(loanDetails.due_amount);
                        }

                        function getNextLoanId(currentLoanId) {
                            var parts = currentLoanId.split('-');
                            var prefix = parts[0];
                            var number = parseInt(parts[1]);
                            var nextNumber = number + 1;
                            var nextLoanId = prefix + '-' + nextNumber.toString();
                            return nextLoanId;
                        }
                        var nextLoanId = getNextLoanId(CustomerloanId);
                        $('#CustomLoanId').val(nextLoanId);
                        $('#PaymentMethod').val(customerDetails.paymentMethod);


                    } else {
                        var data = response.data;

                        $('#LoanId').val(data.id);
                        var customerNic = data.nic;
                        $('#LoanRequestedAmount').val(data.requestedAmount);
                        $('#PaymentMethod').val(data.paymentMethod);


                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
            // alert('ID: ' + id);
        });


        var selectedStaffmembers = '';
        $(document).on("change", "#staffmembers", function() {
            selectedStaffmembers = $(this).val();

        });


        var gender;
        if ($('#male').is(':checked')) {
            gender = 'male';
        } else if ($('#female').is(':checked')) {
            gender = 'female';
        }

        // $('#staffmembers').multiselect({
        //     enableFiltering: true,
        //     enableCaseInsensitiveFiltering: true,
        //     placeholder: 'Search and select collectors',
        //     allowClear: true,
        //     buttonWidth: '100%',

        // });

        $(document).on('click', '#submit_Primery_data', function() {

            var id = $(this).data('id');
            var name = $('#name').val();
            var nic = $('#nic').val();
            var address = $('#address').val();
            var phone = $('#phone').val();
            var RequestedAmount = $('#RequestedAmount').val();
            var Homephone = $('#Homephone').val();
            var emailAddress = $('#emailAddress').val();
            var payment_method = $('#payment_method').val();
            var MonthlyGrossIncome = $('#MonthlyGrossIncome').val();
            var MonthlyExpenses = $('#MonthlyExpenses').val();
            var description = $('#description').val();

            var accountNo = $('#accountNo').val();
            var BankName = $('#BankName').val();
            var Branchname = $('#Branchname').val();
            var isValid = true;
            var errorMessage = '';

            // Perform individual validation checks for each input field
            if (name.trim() === '') {
                errorMessage += 'Name is required.<br>';
                isValid = false;
            }
            if (address.trim() === '') {
                errorMessage += 'Address is required.<br>';
                isValid = false;
            }
            if (phone.trim() === '') {
                errorMessage += 'phone number is required.<br>';
                isValid = false;
            }
            if (RequestedAmount.trim() === "") {
                errorMessage += 'Requested Amount is required.<br>';
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

                if (selectedStaffmembers != null) {
                    formData.append('selectedStaffmembers', selectedStaffmembers);
                }

                formData.append('id', id);
                formData.append('name', name);
                formData.append('nic', nic);
                formData.append('address', address);
                formData.append('RequestedAmount', RequestedAmount);
                formData.append('email', emailAddress);
                formData.append('phone', phone);
                formData.append('gender', gender);
                formData.append('Homephone', Homephone);
                formData.append('payment_method', payment_method);
                formData.append('MonthlyGrossIncome', MonthlyGrossIncome);
                formData.append('MonthlyExpenses', MonthlyExpenses);
                formData.append('accountNo', accountNo);
                formData.append('BankName', BankName);
                formData.append('Branchname', Branchname);
                formData.append('description', description);


            }
            $.ajax({
                url: "{{ route('edit.customer') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    Swal.fire(
                        'Good job!',
                        data.message,
                        'success'
                    );
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
                // location.reload();
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






        var withoutInteresTotalAmount = 0;



        $('#withoutInterestCheckbox').change(function() {
            var TotalAmount = 0;
            if ($(this).is(':checked')) {

                $('.TotalAmount').each(function() {
                    var elementValue = $(this).val();
                    TotalAmount += elementValue;
                });
                var Previousoutstandingloans = parseInt($('#Previousoutstandingloans').val());
                var FinalTotalAmount = parseInt(TotalAmount) + Previousoutstandingloans;
                if ($('#CreateLoanAmount').is(':checked')) {
                    $('#newTotalAmount').val(FinalTotalAmount)
                }

            } else {
                var Previousoutstandingloans = parseInt($('#Previousoutstandingloans').val());
                var newTotalAmount = $('#newTotalAmount').val()
                var FinalTotalAmount = parseInt(newTotalAmount) - Previousoutstandingloans;
                if ($('#CreateLoanAmount').is(':checked')) {
                    $('#newTotalAmount').val(FinalTotalAmount)
                }

            }
        });

        // Add event listener for withInterestCheckbox
        $('#withInterestCheckbox').change(function() {
            if ($(this).is(':checked')) {
                alert('With Interest checkbox is checked!');
            }
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


        $(document).on('click', '#submitMicroLoan', function() {

            // $(this).prop("disabled", true);
            var LoanId = $('#LoanId').val();
            var RequestedAmount = $('#RequestedAmount').val();
            var Previousoutstandingloans = parseFloat($('#Previousoutstandingloans').val());
            var PaymentMethodRequest = $('#PaymentMethod').val();
            var cusId = LoanId;

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
                formData.append('LoanId', LoanId);
                formData.append('fixedInterest', $("#fixedInterest").val());
                formData.append('CustomLoanId', $("#CustomLoanId").val());
                formData.append('RequestedAmount', RequestedAmount);
                formData.append('Previousoutstandingloans', Previousoutstandingloans);
                formData.append('PaymentMethodRequest', PaymentMethodRequest);
                formData.append('cusId', cusId);
                formData.append('LoanType', LoanType);
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
                    url: "/loans-checkstatus",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    data: JSON.stringify({
                        'cusId': cusId
                    }),
                    contentType: "application/json",
                    success: function(response) {
                        var loanstatus = response.data;
                        console.log(loanstatus)
                        if (loanstatus == 4 || loanstatus == 2) {
                            $.ajax({
                                url: "/loans-store-again",
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
                                        .attr('content')
                                },
                                type: "POST",
                                data: formData,
                                contentType: false,
                                processData: false,
                                success: function(data, status, xhr) {
                                    if (data.success) {
                                        // Success message
                                        Swal.fire({
                                            position: 'center',
                                            icon: 'success',
                                            title: 'Success',
                                            text: data.success,
                                            showConfirmButton: false,
                                            timer: 1500
                                        });
                                    } else {
                                        // Handle other success case if needed
                                        Swal.fire({
                                            position: 'center',
                                            icon: 'success',
                                            title: 'Success',
                                            text: 'Loan Creation Success!',
                                            showConfirmButton: false,
                                            timer: 1500
                                        });
                                    }
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

                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Please finalize the existing loan!',
                                footer: '<a href="">Why do I have this issue?</a>'
                            })
                        }

                    },
                });
            }





        });


        $(document).on('click', '.finishLoan', function() {
            var loanId = $(this).data('id');
            alert(loanId)

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
                confirmButtonText: 'Yes, Finish it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/completLoan',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST',
                        data: {
                            'LoanId': loanId
                        },
                        success: function(response) {
                            console.log(response);
                        },
                        error: function(xhr, status, error) {

                        }
                    });
                    swalWithBootstrapButtons.fire(
                        'Loan Finish!',
                        'Your Loan has been Finished.',
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



    });
</script>
