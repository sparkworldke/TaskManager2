@extends('blade-scafolding.layout.master')

@section('content')
    <!-- Row -->
    <div class="row page-titles" style="background:url(../assets/images/background/user-bg.jpg) no-repeat center top">
        <div class="col-lg-12 text-center">
            <h1 class="m-t-30"><small>
                    @if($project->status ==1)
                        <span class="text-primary"><i class="fa fa-check-circle"></i> </span>

                    @elseif ($project->status ==0)
                        <span class="text-primary"><i class="fa fa-times-circle"></i> </span>
                    @else

                    @endif
                </small>{{$project->name}}  </h1>
            <h5 class="text-muted m-b-30"> Brief</h5>
            <p>
                {{$project->desc }}
            </p>
        </div>
    </div>
    <!-- Row -->
    <!--project Details-->
    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i></h2>
                        <h3 class="">2456</h3>
                        <h6 class="card-subtitle">All Tasks</h6></div>
                    <div class="col-12">
                        <div class="progress">
                            <!--<div class="progress-bar bg-info" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                        <h3 class="">546</h3>
                        <h6 class="card-subtitle">Pending Tasks</h6></div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="m-b-0"><i class="mdi mdi-wallet text-purple"></i></h2>
                        <h3 class="">$24561</h3>
                        <h6 class="card-subtitle">Complete Tasks</h6></div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 56%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="m-b-0"><i class="mdi mdi-buffer text-warning"></i></h2>
                        <h3 class="">$30010</h3>
                        <h6 class="card-subtitle">Team</h6></div>
                    <div class="col-12">
                        <div class="progress">
                            <!--<div class="progress-bar bg-warning" role="progressbar" style="width: 26%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./End of projects --->
    <!--
    Recent tasks received, tasks completed, tasks pending
    -->
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pending Tasks</h4>
                    <h6 class="card-subtitle">Recently Assigned / Ongoing Tasks</h6> </div>
                <!-- ============================================================== -->
                <!-- Comment widgets -->
                <!-- ============================================================== -->
                <div class="comment-widgets m-b-20">
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2"><span class="round"><img src="../assets/images/users/1.jpg" alt="user" width="50"></span></div>
                        <div class="comment-text w-100">
                            <h5>James Anderson</h5>
                            <div class="comment-footer">
                                <span class="date">April 14, 2016</span>
                                <span class="label label-info">Pending</span> <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="mdi mdi-pencil-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-heart"></i></a>
                                                </span>
                            </div>
                            <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row ">
                        <div class="p-2"><span class="round"><img src="../assets/images/users/2.jpg" alt="user" width="50"></span></div>
                        <div class="comment-text active w-100">
                            <h5>Michael Jorden</h5>
                            <div class="comment-footer">
                                <span class="date">April 14, 2016</span>
                                <span class="label label-success">Approved</span> <span class="action-icons active">
                                                    <a href="javascript:void(0)"><i class="mdi mdi-pencil-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle text-success"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-heart text-danger"></i></a>
                                                </span>
                            </div>
                            <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2"><span class="round"><img src="../assets/images/users/3.jpg" alt="user" width="50"></span></div>
                        <div class="comment-text w-100">
                            <h5>Johnathan Doeting</h5>
                            <div class="comment-footer">
                                <span class="date">April 14, 2016</span>
                                <span class="label label-danger">Rejected</span> <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="mdi mdi-pencil-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-heart"></i></a>
                                                </span>
                            </div>
                            <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2"><span class="round"><img src="../assets/images/users/4.jpg" alt="user" width="50"></span></div>
                        <div class="comment-text w-100">
                            <h5>James Anderson</h5>
                            <div class="comment-footer">
                                <span class="date">April 14, 2016</span>
                                <span class="label label-info">Pending</span> <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="mdi mdi-pencil-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-heart"></i></a>
                                                </span>
                            </div>
                            <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Completed Tasks</h4>
                    <h6 class="card-subtitle">All Completed Tasks</h6> </div>
                <!-- ============================================================== -->
                <!-- Comment widgets -->
                <!-- ============================================================== -->
                <div class="comment-widgets m-b-20">
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2"><span class="round"><img src="../assets/images/users/1.jpg" alt="user" width="50"></span></div>
                        <div class="comment-text w-100">
                            <h5>James Anderson</h5>
                            <div class="comment-footer">
                                <span class="date">April 14, 2016</span>
                                <span class="label label-info">Pending</span> <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="mdi mdi-pencil-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-heart"></i></a>
                                                </span>
                            </div>
                            <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row ">
                        <div class="p-2"><span class="round"><img src="../assets/images/users/2.jpg" alt="user" width="50"></span></div>
                        <div class="comment-text active w-100">
                            <h5>Michael Jorden</h5>
                            <div class="comment-footer">
                                <span class="date">April 14, 2016</span>
                                <span class="label label-success">Approved</span> <span class="action-icons active">
                                                    <a href="javascript:void(0)"><i class="mdi mdi-pencil-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle text-success"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-heart text-danger"></i></a>
                                                </span>
                            </div>
                            <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2"><span class="round"><img src="../assets/images/users/3.jpg" alt="user" width="50"></span></div>
                        <div class="comment-text w-100">
                            <h5>Johnathan Doeting</h5>
                            <div class="comment-footer">
                                <span class="date">April 14, 2016</span>
                                <span class="label label-danger">Rejected</span> <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="mdi mdi-pencil-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-heart"></i></a>
                                                </span>
                            </div>
                            <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2"><span class="round"><img src="../assets/images/users/4.jpg" alt="user" width="50"></span></div>
                        <div class="comment-text w-100">
                            <h5>James Anderson</h5>
                            <div class="comment-footer">
                                <span class="date">April 14, 2016</span>
                                <span class="label label-info">Pending</span> <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="mdi mdi-pencil-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-heart"></i></a>
                                                </span>
                            </div>
                            <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Log Activity</h4>
                    <h6 class="card-subtitle">Team Activity</h6> </div>
                <!-- ============================================================== -->
                <!-- Comment widgets -->
                <!-- ============================================================== -->
                <div class="comment-widgets m-b-20">
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2"><span class="round"><img src="../assets/images/users/1.jpg" alt="user" width="50"></span></div>
                        <div class="comment-text w-100">
                            <h5>James Anderson</h5>
                            <div class="comment-footer">
                                <span class="date">April 14, 2016</span>
                                <span class="label label-info">Pending</span> <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="mdi mdi-pencil-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-heart"></i></a>
                                                </span>
                            </div>
                            <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row ">
                        <div class="p-2"><span class="round"><img src="../assets/images/users/2.jpg" alt="user" width="50"></span></div>
                        <div class="comment-text active w-100">
                            <h5>Michael Jorden</h5>
                            <div class="comment-footer">
                                <span class="date">April 14, 2016</span>
                                <span class="label label-success">Approved</span> <span class="action-icons active">
                                                    <a href="javascript:void(0)"><i class="mdi mdi-pencil-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle text-success"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-heart text-danger"></i></a>
                                                </span>
                            </div>
                            <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2"><span class="round"><img src="../assets/images/users/3.jpg" alt="user" width="50"></span></div>
                        <div class="comment-text w-100">
                            <h5>Johnathan Doeting</h5>
                            <div class="comment-footer">
                                <span class="date">April 14, 2016</span>
                                <span class="label label-danger">Rejected</span> <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="mdi mdi-pencil-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-heart"></i></a>
                                                </span>
                            </div>
                            <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2"><span class="round"><img src="../assets/images/users/4.jpg" alt="user" width="50"></span></div>
                        <div class="comment-text w-100">
                            <h5>James Anderson</h5>
                            <div class="comment-footer">
                                <span class="date">April 14, 2016</span>
                                <span class="label label-info">Pending</span> <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="mdi mdi-pencil-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle"></i></a>
                                                    <a href="javascript:void(0)"><i class="mdi mdi-heart"></i></a>
                                                </span>
                            </div>
                            <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection