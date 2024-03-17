@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>{{ $capitalAmount }}</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="sub-title">
                        <span class="mr-1">Issued Capital</span>
                        {{-- <span class="mx-1">45%</span> --}}
                        <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                        <div>
                            <div id="spline-area-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>{{ $collectedAmount }}</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="sub-title">
                        <span class="mr-1">Collected Amount</span>

                        <i class="mdi mdi-arrow-down-bold text-danger"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                        <div>
                            <div id="spline-area-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>{{ $collectedInterestAmount }}</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="sub-title">
                        <span class="mr-1">Collected Interest</span>
                        {{-- <span class="mx-1">20%</span> --}}
                        <i class="mdi mdi-arrow-down-bold text-danger"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                        <div>
                            <div id="spline-area-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>{{ $different }}</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="sub-title">
                        <span class="mr-1">Different</span>
                        {{-- <span class="mx-1">35%</span> --}}
                        <i class="mdi mdi-arrow-down-bold text-danger"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                        <div>
                            <div id="spline-area-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header centered-text RegisterApplicant">
                    <div class="sub-title">
                        <h2>Micro Loan</h2>
                        <div>
                            <img src="images/img/micro.png" alt="" class="loanImages">
                        </div>
                        <div>
                            <br>
                            <a type="button" class="mb-1 btn btn-primary"
                                href="{{ route('register-micro-applicant') }}">
                                CLICK HERE TO GET START
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header centered-text RegisterApplicant">
                    <div class="sub-title">
                        <h2>Mortgage Loan</h2>
                        <div>
                            <img src="images/img/mortage.png" alt="" class="loanImages">
                        </div>
                        <div>
                            <br>
                            <a type="button" class="mb-1 btn btn-primary"
                                href="{{ route('register-mortgage-applicant') }}">
                                CLICK HERE TO GET START
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header center centered-text RegisterApplicant">
                    <div class="sub-title">
                        <h2>Other Loan</h2>
                        <div>
                            <img src="images/img/guarantor-for-loan.png" alt="" class="loanImages">
                        </div>
                        <br>
                        <div>
                            <a type="button" class="mb-1 btn btn-primary"
                                href="{{ route('register-other-applicant') }}">
                                CLICK HERE TO GET START
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="row" style="position: relative; top:-70px">
        <div class="col-xl-8">
            <!-- Income and Express -->
            <div class="card card-default">
                <div class="card-header">
                    <h2>Income And Expenses</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                        <div id="mixed-chart-1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <!-- Chat -->
            <div class="card card-default chat">
                <div class="card-header">
                    <h2>Selena Wagner</h2>
                    <div class="dropdown dropdown-chat-state">
                        <button class="dropdown-toggle btn btn-primary btn-rounded-circle" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            data-display="static">
                            <i class="mdi mdi-account-alert"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <li>
                                <a href="#" class="user-link">
                                    <img src="images/user/user-sm-01.jpg" alt="User Image" />
                                    <span class="username">anna patuary
                                        <span class="badge badge-secondary">18</span>
                                    </span>
                                    <span class="state active">
                                        <i class="mdi mdi-circle-medium"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="user-link">
                                    <img src="images/user/user-sm-02.jpg" alt="User Image" />
                                    <span class="username">riman Ghose
                                        <span class="badge badge-secondary">18</span>
                                    </span>
                                    <span class="state"> 1hrs </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="user-link">
                                    <img src="images/user/user-sm-03.jpg" alt="User Image" />
                                    <span class="username">riman Ghose
                                        <span class="badge badge-secondary">18</span>
                                    </span>
                                    <span class="state"> 1hrs </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="user-link">
                                    <img src="images/user/user-sm-04.jpg" alt="User Image" />
                                    <span class="username">riman Ghose
                                        <span class="badge badge-secondary">18</span>
                                    </span>
                                    <span class="state"> 1hrs </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="user-link">
                                    <img src="images/user/user-sm-05.jpg" alt="User Image" />
                                    <span class="username">riman Ghose</span>
                                    <span class="state">15min</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body pb-0" data-simplebar style="height: 363px">
                    <!-- Media Chat Left -->
                    <div class="media media-chat">
                        <img src="images/user/user-sm-01.jpg" class="rounded-circle" alt="Avata Image" />
                        <div class="media-body">
                            <div class="text-content">
                                <span class="message">Hello my name is anna.</span>
                                <time class="time">5 mins ago</time>
                            </div>
                        </div>
                    </div>

                    <!-- Media Chat Right -->
                    <div class="media media-chat media-chat-right">
                        <div class="media-body">
                            <div class="text-content">
                                <span class="message">Hello i am Riman.</span>
                                <time class="time">4 mins ago</time>
                            </div>
                            <div class="text-content">
                                <span class="message">I want to know about yourself</span>
                                <time class="time">3 mins ago</time>
                            </div>
                        </div>
                        <img src="images/user/user-sm-02.jpg" class="rounded-circle" alt="Avata Image" />
                    </div>

                    <!-- Media Chat Left -->
                    <div class="media media-chat">
                        <img src="images/user/user-sm-01.jpg" class="rounded-circle" alt="Avata Image" />
                        <div class="media-body">
                            <div class="text-content">
                                <span class="message">Its had resolving otherwise she contented
                                    therefore.</span>
                                <time class="time">1 mins ago</time>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chat-footer">
                    <form>
                        <div class="input-group input-group-chat">
                            <div class="input-group-prepend">
                                <span class="emoticon-icon mdi mdi-emoticon-happy-outline"></span>
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with dropdown button" />
                            <div class="input-group-prepend">
                                <span class="emoticon-icon mdi mdi-arrow-right-drop-circle-outline"></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('layout.footerlink')
