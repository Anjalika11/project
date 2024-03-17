<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/index.html">
                <img src="images/logo.png" alt="Mono" />
                <span class="brand-name">MONO</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="active">
                    <a class="sidenav-item-link" href="{{ url('/') }}">
                        <i class="mdi mdi-home"></i>
                        <span class="nav-text">Home</span>
                    </a>
                </li>

                <li>
                    <a class="sidenav-item-link" href="{{ route('manage-loan') }}">
                        <i class="mdi mdi-chart-line"></i>
                        <span class="nav-text">Manage Loan</span>
                    </a>
                </li>

                {{-- <li class="section-title">Apps</li> --}}



                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#email"
                        aria-expanded="false" aria-controls="email">
                        <i class="mdi mdi-account"></i>
                        <span class="nav-text">Applicants</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="email" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ route('all-applicant') }}">
                                    <span class="nav-text">All</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ route('waiting-applicant') }}">
                                    <span class="nav-text">Wating</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ route('approved-applicant') }}">
                                    <span class="nav-text">Approved</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('rejected-applicant') }}">
                                    <span class="nav-text">Rejected</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="section-title">Setup Process</li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-account-check"></i>
                        <span class="nav-text">Verify Applicants</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ route('verify-micro-applicant') }}">
                                    <span class="nav-text">Micro Applicants</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ route('verify-mortgage-applicant') }}">
                                    <span class="nav-text">Mortage Applicants</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('verify-other-applicant') }}">
                                    <span class="nav-text">Other Applicants</span>
                                </a>
                            </li>





                        </div>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                        aria-expanded="false" aria-controls="charts">
                        <i class="mdi mdi-marker-check"></i>
                        <span class="nav-text">Loan Approval</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="charts" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ route('micro-loan-approval') }}">
                                    <span class="nav-text">Micro Applicants</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ route('mortgage-loan-approval') }}">
                                    <span class="nav-text">Mortage Applicants</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('other-loan-approval') }}">
                                    <span class="nav-text">Other Applicants</span>
                                </a>
                            </li>

                        </div>
                    </ul>
                </li>

                <li>
                    <hr width="80%" color="white" style="position: relative; right:-15px;" />
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#users" aria-expanded="false" aria-controls="users">
                        <i class="mdi mdi-loop"></i>
                        <span class="nav-text">Processing Loans</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="users" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ route('micro-processing-loan') }}">
                                    <span class="nav-text">Micro Applicants</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ route('mortgage-processing-loan') }}">
                                    <span class="nav-text">Mortage Applicants</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('other-processing-loan') }}">
                                    <span class="nav-text">Other Applicants</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#authentication" aria-expanded="false" aria-controls="authentication">
                        <i class="mdi mdi-account"></i>
                        <span class="nav-text">Reports</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="authentication" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li>
                                <a class="sidenav-item-link" href="{{ route('total-profit-report') }}">
                                    <span class="nav-text">Total P&L</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('branch-Report') }}">
                                    <span class="nav-text">Branch Report</span>
                                </a>
                            </li>

                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#Micro" aria-expanded="false" aria-controls="Micro">
                                    <span class="nav-text">Micro</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="Micro">
                                    <div class="sub-menu">

                                        <li>
                                            <a href="{{ route('micro-daily-report') }}">Daily Report</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('micro-monthly-report') }}">Monthly Report</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('micro-profit-report') }}">Profit Report</a>
                                        </li>


                                    </div>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#Mortage" aria-expanded="false" aria-controls="Mortage">
                                    <span class="nav-text">Mortage</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="Mortage">
                                    <div class="sub-menu">

                                        <li>
                                            <a href="{{ route('mortgage-daily-report') }}">Daily Report</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('mortgage-monthly-report') }}">Monthly Report</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('mortgage-profit-report') }}">Profit Report</a>
                                        </li>


                                    </div>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#Other" aria-expanded="false" aria-controls="Other">
                                    <span class="nav-text">Other</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="Other">
                                    <div class="sub-menu">

                                        <li>
                                            <a href="{{ route('other-daily-report') }}">Daily Report</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('other-monthly-report') }}">Monthly Report</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('other-profit-report') }}">Profit Report</a>
                                        </li>


                                    </div>
                                </ul>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('total-expences-report') }}">
                                    <span class="nav-text">Total Expenses</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#other-page" aria-expanded="false" aria-controls="other-page">
                        <i class="mdi mdi-view-list"></i>
                        <span class="nav-text">Pawned Goods List</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="other-page" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ route('properies-pawn-list') }}">
                                    <span class="nav-text">Properties</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ route('vehicles-pawn-list') }}">
                                    <span class="nav-text">Auto</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ route('other-pawn-list') }}">
                                    <span class="nav-text">Other</span>
                                </a>
                            </li>


                        </div>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#other-auction-page" aria-expanded="false" aria-controls="other-page">
                        <i class="mdi mdi-view-list"></i>
                        <span class="nav-text">Auction Goods List</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="other-auction-page" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ route('properies-pawn-list') }}">
                                    <span class="nav-text">Properties</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ route('vehicles-pawn-list') }}">
                                    <span class="nav-text">Auto</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ route('auction-gold') }}">
                                    <span class="nav-text">gold</span>
                                </a>
                            </li>


                        </div>
                    </ul>
                </li>
                <li class="section-title">Documentation</li>


                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#ManageBusiness" aria-expanded="false" aria-controls="other-page">
                        <i class="mdi mdi-bank"></i>
                        <span class="nav-text">Manage Business</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="ManageBusiness" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ route('business-register') }}">
                                    <span class="nav-text">Company Registration</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('branches') }}">
                                    <span class="nav-text">Branch</span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#Staff" aria-expanded="false" aria-controls="Staff">
                                    <span class="nav-text">Staff</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="Staff">
                                    <div class="sub-menu">

                                        <li>
                                            <a href="{{ route('staff-registration-blade') }}">Add Staff</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('staff-manage-blade') }}">Manage Staff</a>
                                        </li>

                                    </div>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#Expenses" aria-expanded="false" aria-controls="Expenses">
                                    <span class="nav-text">Expenses</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="Expenses">
                                    <div class="sub-menu">

                                        <li>
                                            <a href="button-default.html">Add Expenses</a>
                                        </li>

                                        <li>
                                            <a href="button-dropdown.html">List Expenses</a>
                                        </li>

                                    </div>
                                </ul>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ route('user-registration-list') }}">
                                    <span class="nav-text">User Registration</span>
                                </a>
                            </li>



                            <li>
                                <a class="sidenav-item-link" href="{{ route('items-adding-blade') }}">
                                    <span class="nav-text">Ad Items</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{ route('gold-price') }}" aria-expanded="false"
                        aria-controls="customization">
                        <i class="mdi mdi-square-edit-outline"></i>
                        <span class="nav-text">Customization</span>
                        <b class="caret"></b>
                    </a>

                </li>
            </ul>
        </div>

        <div class="sidebar-footer">
            <div class="sidebar-footer-content">
                <ul class="d-flex">
                    <li>
                        <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i
                                class="mdi mdi-settings"></i></a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" title="No chat messages"><i
                                class="mdi mdi-chat-processing"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
