@extends('blade-scafolding.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Employee</h4>
                        <!--Errors-->
                    @include('blade-scafolding.partials.errors')
                    @include('blade-scafolding.partials.success')

                    <!--End of Errors-->


                <form class="form-horizontal" method="POST" action="{{route('blade-scafolding.employees.save')}}" enctype="multipart/form-data">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Emails Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" placeholder="Phone Number" name="phone_number" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Sex / Gender</label>
                                <select class="custom-select form-control pull-right" name="gender" >
                                    <option selected disabled>Select Here</option>
                                    <option value="2">Female</option>
                                    <option value="1">Male</option>


                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Department</label>
                                <select class="custom-select form-control pull-right" name="department_id" required>
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}" id="">{{$department->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Skills</label>
                                <textarea class="form-control" placeholder="Skills : Web Design" name="skills"></textarea>
                            </div>
                        </div>
                    </div>







                            <div class="form-group">
                                <label>Document Attachemnt</label>
                                <input type="file" class="form-control" name="profile_img">
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Create
                                        </button>
                                    </div>
                                </div>
                            </div>

                            </form>
                    </div>
                </div>
                    </div>

                </div>
                <div class="col-md-2"></div>

            </div>
        </div>



@endsection