@extends('layouts.master')

@section('content')

    <div id="app">
        <!-- <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Dashboard</h2>
                <ol class="breadcrumb">
                    <li>
                        <a>Dashboard</a>
                    </li>
                    <li class="active">
                        <strong>Home</strong>
                    </li>
                </ol>
            </div>
        </div> -->

        <div class="wrapper wrapper-content animated fadeInRight">

            @include('partials.flash_messages.flashMessages')

            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="cardDashboard bg-c-yellow">
                            <div class="card-block">
                                <img src="img/students.png" alt="">
                                <h4 class="text-c-yellow f-w-600"> <a href=teachers> SHISHYA</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="cardDashboard bg-c-red">
                            <div class="card-block">
                                <img src="img/schoolboy.png" alt="">
                                <h4 class="text-c-yellow f-w-600"> VIDYARTHI</h4>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="ibox float-e-margins dashboardContentWrapper">
                        <div class="ibox-content p-4">

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="dashboardLeftSection">
                                        <h4>Seva Foundation</h4>
                                        <p>SEVA Foundation is an organization conceptualized, founded, and managed by a group of spiritually enlightened human beings under the able leadership and guidance of Shri Pradeep Bhaiya Ji Maharaj with its primary objective to serve the humanity, society and nation with value-based education, health services and self-reliance embedded with spiritualism.
                                            Since its inception, SEVA foundation is engaged in establishing, managing, and running schools, health centers and skill development centers in social and economic deprived regions through Social Empowerment Voluntary Activity (SEVA) by its distinguished team and members. Volunteers take a pledge to serve those who are not so fortunate</p>
                                        <a href="https://sevafoundationdeoghar.com/" class="btn btn-warning">Read More</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="dashboardRightSection">
                                        <img src="img/Seva-Foundation--about.jpeg" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection()
