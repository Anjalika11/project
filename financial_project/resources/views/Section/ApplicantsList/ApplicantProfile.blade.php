@extends('layout.layout')
@section('content')
    <div class="content-wrapper" style="position: relative; top:-50px;">
        <div class="content">
            <!-- Card Profile -->
            <div class="card card-default card-profile">
                <div class="card-header-bg" style="background-image: url(images/other/img4.jpg)"></div>

                <div class="card-body card-profile-body">
                    <div class="profile-avata">
                        @if ($customers->CustomersProPic->isNotEmpty())
                            <img class="rounded-circle"
                                src="{{ asset('img/customers/ProPic/' . $customers->CustomersProPic[0]->customer_proPic) }}"
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

                        <button type="button" class="btn bg-primary text-white btn-pill mb-3 mb-xxl-0" data-toggle="modal"
                            data-target="#exampleModallarge">
                            Upgrade Detail
                        </button>
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
                    {{-- <li class="nav-item">
                        <a class="nav-link" id="nav-profile-tab" data-toggle="pill" href="#nav-profile-Attendence-primary"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Attendence</a>
                    </li> --}}
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
                        @if ($customers->customer_mortgage_type == 'Gold items')
                            @foreach ($customers->customersGoldItems as $data)
                                <div class="row " style="  margin:10px;">
                                    <div class="col-xl-4"
                                        style=" padding:10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                        <!-- Settings -->
                                        <div class="card card-default" style="position: relative; top:30px;">
                                            <div class="card-header">
                                                <h2>ITEMS IMAGES</h2>
                                            </div>

                                            <div class="card-body pt-0">

                                                @if ($data->GoldItemsImages->isNotEmpty())
                                                    <img src="{{ asset('img/mortgages/otherImages/goldImages/' . $data->GoldItemsImages[0]->gold_image) }}"
                                                        alt="Gold Image" style="height: 250px; width:250px;">
                                                @else
                                                    <p>No Gold Images found for this Gold Item.</p>
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
                                                                    {{ $data->gold_type }}</h6>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div>
                                                                <h6><label for="lastName">Available
                                                                        Status :&nbsp; </label>{{ $data->status }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-lg-6">
                                                            <div>

                                                                <h6><label for="firstName">Gold Carat
                                                                        :&nbsp;</label>{{ $data->gold_pound }}</h6>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div>

                                                                <h6><label for="lastName">Gold Weight
                                                                        :&nbsp;</label>{{ $data->weight }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">

                                                                <h6><label for="firstName">Requested Amount
                                                                        :&nbsp;</label>{{ $data->gold_market_price }}</h6>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">

                                                                <h6><label for="lastName">Payment Method
                                                                        :&nbsp;</label>{{ $data->gold_suggested_price }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label for="userName">More Details</label>
                                                        <textarea class="form-control rounded-left" placeholder="" rows="5" id="jobDescription" cols="50">{{ $data->gold_more }}</textarea>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        {{-- <div class="card1">
                                            <nav>
                                                <svg class="arrow" version="1.1" viewBox="0 0 512 512" width="512px"
                                                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <polygon
                                                        points="352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 "
                                                        stroke="#727272" />
                                                </svg>
                                                <h4>{{ $data->gold_type }}</h4>
                                                <svg class="heart" version="1.1" viewBox="0 0 512 512" width="512px"
                                                    xml:space="preserve" stroke="#727272"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <path
                                                        d="M340.8,98.4c50.7,0,91.9,41.3,91.9,92.3c0,26.2-10.9,49.8-28.3,66.6L256,407.1L105,254.6c-15.8-16.6-25.6-39.1-25.6-63.9  c0-51,41.1-92.3,91.9-92.3c38.2,0,70.9,23.4,84.8,56.8C269.8,121.9,302.6,98.4,340.8,98.4 M340.8,83C307,83,276,98.8,256,124.8  c-20-26-51-41.8-84.8-41.8C112.1,83,64,131.3,64,190.7c0,27.9,10.6,54.4,29.9,74.6L245.1,418l10.9,11l10.9-11l148.3-149.8  c21-20.3,32.8-47.9,32.8-77.5C448,131.3,399.9,83,340.8,83L340.8,83z"
                                                        stroke="#727272" />
                                                </svg>
                                            </nav>
                                           
                                            <div class="description">

                                                <div class="row mb-2">
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <h5>Gold Carat :&nbsp;{{ $data->gold_pound }}</h5>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div>
                                                            <h5>Gold Weight :&nbsp;{{ $data->weight }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="row mb-2">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <h5>Requested Amount :&nbsp;{{ $data->gold_market_price }}</h5>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <h5>Payment Method :&nbsp;{{ $data->gold_suggested_price }}
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>{{ $data->gold_more }}</p>
                                                <button>EDIT</button>
                                                <button>DELETE</button>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        @if ($customers->customer_mortgage_type == 'Electronic Devices')
                            @foreach ($customers->customersElectronicDevices as $data)
                                <div class="row " style="  margin:10px;">
                                    <div class="col-xl-4"
                                        style=" padding:10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                        <!-- Settings -->
                                        <div class="card card-default" style="position: relative; top:30px;">
                                            <div class="card-header">
                                                <h2>ITEMS IMAGES</h2>
                                            </div>

                                            <div class="card-body pt-0">

                                                @if ($data->ElectronicDevicesImages->isNotEmpty())
                                                    <img src="{{ asset('img/mortgages/otherImages/ElectronicDevices/' . $data->ElectronicDevicesImages[0]->devices_image) }}"
                                                        alt="Gold Image" style="height: 250px; width:250px;">
                                                @else
                                                    <p>No Devices Images found for this Gold Item.</p>
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
                                                                    {{ $data->devices_type }}</h6>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div>
                                                                <h6><label for="lastName">Device Brand
                                                                        Status :&nbsp; </label>{{ $data->devices_brand }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-lg-6">
                                                            <div>

                                                                <h6><label for="firstName">Device Model
                                                                        :&nbsp;</label>{{ $data->devices_model }}</h6>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div>

                                                                <h6><label for="lastName">Device State
                                                                        :&nbsp;</label>{{ $data->status }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">

                                                                <h6><label for="firstName">Maraket Price
                                                                        :&nbsp;</label>{{ $data->devices_market_price }}
                                                                </h6>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">

                                                                <h6><label for="lastName">Suggested Price
                                                                        :&nbsp;</label>{{ $data->devices_suggested_price }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label for="userName">More Details</label>
                                                        <textarea class="form-control rounded-left" placeholder="" rows="5" id="jobDescription" cols="50">{{ $data->devices_more }}</textarea>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        @endif
                        @if ($customers->customer_mortgage_type == 'auto')
                            @foreach ($customers->customersVehicleMortgage as $data)
                                <div class="row " style="  margin:10px; position: relative;top:10px;">
                                    <div class="col-xl-4"
                                        style=" padding:10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                        <!-- Settings -->
                                        <div class="card card-default" style="position: relative; top:30px;">
                                            <div class="card-header">
                                                <h2>ITEMS IMAGES</h2>
                                            </div>

                                            <div class="card-body1 pt-0">

                                                @if ($data->VehicleImages->isNotEmpty())
                                                    <img src="{{ asset('img/mortgages/vehicles/vehicle_images/' . $data->VehicleImages[0]->vehicle_image) }}"
                                                        alt="Gold Image" style="height: 250px; width:330px;">
                                                @else
                                                    <img src="img/defult/vehicles.png" alt="Gold Image"
                                                        style="height: 220px; width:auto;">
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
                                                <h4>{{ $data->gold_type }}</h4>
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
                                                                <h6><label for="lastName">Vehicle Category
                                                                        :&nbsp;</label>{{ $data->auto_vehicle_category }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div>
                                                            <div class="form-group">
                                                                <h6><label for="userName">Vehicle Brand
                                                                        :&nbsp;</label>{{ $data->auto_vehicle_brand }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <h4>Popular House Plant</h4> --}}
                                                <div class="row mb-2">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <h6><label for="userName">Vehicle Model
                                                                    :&nbsp;</label>{{ $data->auto_vehicle_model }}</h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <h6><label for="userName">Vehicle Manufacture year
                                                                    :&nbsp;</label>{{ $data->auto_vehicle_year }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <h6><label for="userName">Vehicle Mileage
                                                                    :&nbsp;</label>{{ $data->auto_vehicle_mileage }}
                                                            </h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <h6><label for="userName">Vehicle Engine Capacity
                                                                    :&nbsp;</label>{{ $data->auto_vehicle_engine_capacity }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <h6><label for="userName">Vehicle Maraket Price
                                                                    :&nbsp;</label>{{ $data->auto_vehicle_market_price }}
                                                            </h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <h6><label for="userName">Vehicle Suggested Price
                                                                    :&nbsp;</label>{{ $data->auto_vehicle_suggested_price }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>{{ $data->auto_vehicle_more }}</p>
                                                <button>EDIT</button>
                                                <button>DELETE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        @if ($customers->customer_mortgage_type == 'property')
                            @foreach ($customers->customersPropertyMortgage as $data)
                                <div class="row " style="  margin:10px; position: relative;top:10px;">
                                    <div class="col-xl-4"
                                        style=" padding:10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                        <!-- Settings -->
                                        <div class="card card-default" style="position: relative; top:30px;">
                                            <div class="card-header">
                                                <h2>PROPERTY IMAGES</h2>
                                            </div>

                                            <div class="card-body1 pt-0">

                                                @if ($data->propertyImages->isNotEmpty())
                                                    <img src="{{ asset('img/mortgages/properties/property_images/' . $data->propertyImages[0]->property_image) }}"
                                                        alt="Gold Image" style="height: 250px; width:330px;">
                                                @else
                                                    <img src="img/defult/vehicles.png" alt="Gold Image"
                                                        style="height: 220px; width:auto;">
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
                                                <h4>{{ $data->gold_type }}</h4>
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
                                                                        :&nbsp;</label>{{ $data->property_type }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div>
                                                            <div class="form-group">
                                                                <h6><label for="userName">Property Province
                                                                        :&nbsp;</label>{{ $data->property_province }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <h4>Popular House Plant</h4> --}}
                                                <div class="row mb-2">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <h6><label for="userName">Property District
                                                                    :&nbsp;</label>{{ $data->property_district }}</h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <h6><label for="userName">Address
                                                                    :&nbsp;</label>{{ $data->property_address }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <h6><label for="userName">Vehicle Maraket Price
                                                                    :&nbsp;</label>{{ $data->property_assessed_value }}
                                                            </h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <h6><label for="userName">Vehicle Suggested Price
                                                                    :&nbsp;</label>{{ $data->property_suggested_value }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>{{ $data->property_more }}</p>
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
                        <table id="attendence" class="table table-hover table-product" style="width: 100%; ">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Month</th>
                                    <th>Total Attendence</th>
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

    });
</script>
