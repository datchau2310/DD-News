@extends('site.admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="top-bar clearfix">
        <div class="row gutter">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="page-title">
                    <h3>Dashboard</h3>
                    <p>Welcome to Admin Dashboard</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <ul class="right-stats" id="mini-nav-right">
                    <li>
                        <a href="javascript:void(0)" class="btn btn-danger">
                            <span id="salesOdometer" class="odometer">0</span>Sales
                        </a>
                    </li>
                    <li>
                        <a href="tasks.html" class="btn btn-success">
                            <span id="tasksOdometer" class="odometer">0</span>Tasks
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="btn btn-info">
                            <i class="icon-download6"></i> Export
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row gutter">
        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="panel">
                <div class="social-details clearfix">
                    <div class="social-icon float-left">
                        <div class="round-icon red-icon">
                            <i class="icon-calendar"></i>
                        </div>
                    </div>
                    <div class="social-num">
                        <h2>
                            <span id="appointmentsOdometer" class="odometer">0</span>
                            <span class="label label-danger">7%</span>
                        </h2>
                        <p>Appointments</p>
                        <div class="progress progress-xsx">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="panel">
                <div class="social-details clearfix">
                    <div class="social-icon float-left">
                        <div class="round-icon yellow-icon">
                            <i class="icon-tools"></i>
                        </div>
                    </div>
                    <div class="social-num">
                        <h2>
                            <span id="projectsOdometer" class="odometer">0</span>
                            <span class="label label-warning">8%</span>
                        </h2>
                        <p>Projects</p>
                        <div class="progress progress-xsx">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="panel">
                <div class="social-details clearfix">
                    <div class="social-icon float-left">
                        <div class="round-icon green-icon">
                            <i class="icon-briefcase"></i>
                        </div>
                    </div>
                    <div class="social-num">
                        <h2>
                            <span id="shopOdometer" class="odometer">0k</span>
                            <span class="label label-success">9%</span>
                        </h2>
                        <p>Shop</p>
                        <div class="progress progress-xsx">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="panel">
                <div class="social-details clearfix">
                    <div class="social-icon float-left">
                        <div class="round-icon blue-icon">
                            <i class="icon-presentation"></i>
                        </div>
                    </div>
                    <div class="social-num">
                        <h2>
                            <span id="interviewsOdometer" class="odometer">0</span>
                            <span class="label label-info">9+</span>
                        </h2>
                        <p>Interviews</p>
                        <div class="progress progress-xsx">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection
