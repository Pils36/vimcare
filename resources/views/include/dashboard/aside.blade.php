        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ Auth::user()->avatar }}" class="img-circle" alt="User Image">
                        
                    </div>
                    <div class="pull-left info">
                        <p>{{ Auth::user()->name }}</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                {{-- <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                    class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- /.search form --> --}}
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Menu</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="{{ route('dashboard') }}"><i class="fa fa-circle-o text-red"></i> Dashboard</a></li>
                            <li><a href="{{ route('home') }}"><i class="fa fa-circle-o text-green"></i> Return Home</a></li>
                        </ul>
                    </li>
                    
                    
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-pie-chart"></i>
                            <span>Opportunity</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                {{--  <small class="label pull-right bg-green">15</small>  --}}

                            </span>
                            
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('view appointments') }}"><i class="fa fa-circle-o text-red"></i> {{ (strlen("Appointment") > 20) ? substr("Appointment", 0, 20)."..." : "Appointment" }}</a> </li>
                            {{--  <small class="label pull-right bg-blue">8</small>  --}}
                            <li><a href="{{ route('view opportunity') }}"><i class="fa fa-circle-o text-green"></i> {{ (strlen("Opportunity Posts") > 20) ? substr("Opportunity Posts", 0, 20)."..." : "Opportunity Posts" }} </a> </li>
                            {{--  <small class="label pull-right bg-red">7</small>  --}}
                            <li><a href="{{ route('view approved estimates') }}"><i class="fa fa-circle-o text-orange"></i> {{ (strlen("Approved Estimates") > 20) ? substr("Approved Estimates", 0, 20)."..." : "Approved Estimates" }}</a></li>
                            <li><a href="{{ route('view submitted estimates') }}"><i class="fa fa-circle-o text-red"></i> {{ (strlen("Submitted Estimates") > 20) ? substr("Submitted Estimates", 0, 20)."..." : "Submitted Estimates" }}</a></li>
                            <li><a href="{{ route('view job done') }}"><i class="fa fa-circle-o text-green"></i> {{ (strlen("Job Done") > 20) ? substr("Job Done", 0, 20)."..." : "Job Done" }}</a></li>
                            <li><a href="{{ route('view phone appointment list') }}"><i class="fa fa-circle-o text-orange"></i> {{ (strlen("Phone Appointment List") > 20) ? substr("Phone Appointment List", 0, 20)."..." : "Phone Appointment List" }}</a></li>
                        </ul>
                    </li>



                    <li>
                        <a href="{{ route('review') }}">
                            <i class="fa fa-edit"></i>
                            <span>Service Review</span>
                            {{--  <span class="pull-right-container">
                                <small class="label pull-right bg-red">4</small>
                            </span>  --}}
                        </a>
                    </li>


                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i> <span>Shop Management</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                            <ul class="treeview-menu">

                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o text-red"></i> Vehicle Maintenance
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> Prepare Estimate</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-green"></i> Find Maintenance Record</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-orange"></i> Register a Vehicle</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-green"></i> IVIM</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-orange"></i> Performance</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> My Client List</a></li>
                                    </ul>
                                </li>


                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o text-green"></i> Manage Inventory
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> Create Vendor</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-green"></i> Create Category</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-orange"></i> Create Inventory Item</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-green"></i> Create Purchase Order</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-orange"></i> Manage Purchase Order</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-green"></i> Pay Vendors</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-orange"></i> Inventory Record</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> Update Vendor's Profile</a></li>
                                    </ul>
                                </li>


                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o text-orange"></i> Manage Labour
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> Manage Labour Schedule</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-green"></i> Create Labour Category</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-orange"></i> Create Labour Record</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> Add Labour</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-gren"></i> Manage Time Sheet</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-orange"></i> List Technicians</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> Clocking Sheet</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-green"></i> Pay Labour</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-orange"></i> Pay Schedule</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> Labour Pay Stub</a></li>
                                    </ul>
                                </li>


                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o text-red"></i> Revenue
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> Invoices</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-green"></i> Receive Payment</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-orange"></i> View Paid Invoices</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> View Unpaid Invoices</a></li>
                                    </ul>
                                </li>


                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o text-green"></i> Expenditure
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> Vendor Invoices</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-green"></i> Vendor Unpaid Invoices</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-orange"></i> Vendor Paid Invoices</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> Vendor Statement</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-green"></i> Technician Pay Schedule</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-orange"></i> Technician Pay Stub</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> Technician Unpaid Work</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-green"></i> Technician Paid Work</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-orange"></i> Technician Payment History</a></li>
                                    </ul>
                                </li>


                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o text-orange"></i> Business Report
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> Client Balances</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-green"></i> Vendor Balances</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-orange"></i> Labour Balances</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> Cash Balances</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-green"></i> Credit Card Balances</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o text-orange"></i> Bank Balances</a></li>
                                    </ul>
                                </li>

                                
                            </ul>
                            
                    </li>

                    <li>
                        <a href="{{ route('phoneappointment') }}">
                            <i class="fa fa-phone"></i> <span>Appointment on Phone</span>
                            
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('vinlookup') }}">
                            <i class="fa fa-calendar"></i> <span>VIN Lookup</span>
                            
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('createticket') }}">
                            <i class="fa fa-folder"></i> <span>Create Ticket</span>
                            
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-wrench"></i>
                            <span>Settings</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o text-red"></i> Personal Information</a> </li>
                            <li><a href="#"><i class="fa fa-circle-o text-green"></i> My Connections</a> </li>
                            <li><a href="#"><i class="fa fa-circle-o text-orange"></i> Additional Emails</a></li>
                            <li><a href="#"><i class="fa fa-circle-o text-red"></i> Set Customer Aditional Email</a></li>
                            <li><a href="#"><i class="fa fa-circle-o text-green"></i> Reminder Settings</a></li>
                            <li><a href="#"><i class="fa fa-circle-o text-orange"></i> Set Customr Reminder Settings</a></li>
                            <li><a href="#"><i class="fa fa-circle-o text-red"></i> Invite Contacts</a></li>
                            <li><a href="javascript:void()" onclick="$('#logout-form').submit()"><i class="fa fa-circle-o text-green"></i> Logout</a>
                            
                                <form id="loginout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>

                    {{-- <li>
                        <a href="#">
                            <i class="fa fa-envelope"></i> <span>Mailbox</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-yellow">12</small>
                                <small class="label pull-right bg-green">16</small>
                                <small class="label pull-right bg-red">5</small>
                            </span>
                        </a>
                    </li> --}}
                    
                    
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>