<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Mono - Responsive Admin & Dashboard Template</title>

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
        <link href="plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
        <link href="plugins/simplebar/simplebar.css" rel="stylesheet" />

        <!-- PLUGINS CSS STYLE -->
        <link href="plugins/nprogress/nprogress.css" rel="stylesheet" />

        <!-- MONO CSS -->
        <link id="main-css-href" rel="stylesheet" href="css/style.css" />




        <!-- FAVICON -->
        <link href="images/favicon.png" rel="shortcut icon" />

        <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
        <script src="plugins/nprogress/nprogress.js"></script>
    </head>

</head>

<body class="bg-light-gray" id="body">
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
        <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-xl-5 col-md-10 ">
                    <div class="card card-default mb-0">
                        <div class="card-header pb-0">
                            <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                                <a class="w-auto pl-0" href="/index.html">
                                    <img src="images/logo.png" alt="Mono">
                                    <span class="brand-name text-dark">MONO</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body px-5 pb-5 pt-0">
                            <h4 class="text-dark text-center mb-5">Sign Up</h4>

                            <form action="{{ route('branch-register-before.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="text" class="form-control input-lg" id="BranchId"
                                            name="BranchId" aria-describedby="nameHelp" placeholder="Branch Id"
                                            value="{{ old('BranchId') }}">
                                        @error('BranchId')
                                            <strong style="color: red">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="text" class="form-control input-lg" id="BranchName"
                                            name="BranchName" aria-describedby="emailHelp" placeholder="Branch Name"
                                            value="{{ old('BranchName') }}">
                                        @error('BranchName')
                                            <strong style="color: red"> {{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control input-lg" id="city"
                                            name="city" placeholder="City" value="{{ old('city') }}">
                                        @error('city')
                                            <strong style="color: red">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control input-lg" id="address"
                                            name="address" placeholder="Branch Address" value="{{ old('address') }}">
                                        @error('address')
                                            <strong style="color: red">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control input-lg" id="contactNumber"
                                            name="ContactNumber" placeholder="Contact Number"
                                            value="{{ old('ContactNumber') }}">
                                        @error('ContactNumber')
                                            <strong style="color: red">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="email" class="form-control input-lg" id="email"
                                            name="email" placeholder="email" value="{{ old('email') }}">
                                        @error('email')
                                            <strong style="color: red">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control rounded-left" name="description" placeholder="" rows="10" id="description"
                                            cols="50">{{ old('description') }}</textarea>
                                        @error('description')
                                            <strong style="color: red">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control rounded-left" name="location" placeholder="Ad Location" rows="4" id="location"
                                            cols="50">{{ old('location') }}</textarea>
                                        @error('location')
                                            <strong style="color: red">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-pill mb-4">Sign Up</button>
                                        <p>Already have an account?
                                            <a class="text-blue" href="{{ route('register') }}">Go Back to Sign
                                                Up</a>
                                        </p>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
