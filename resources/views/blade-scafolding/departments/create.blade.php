@extends('blade-scafolding.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title">Create Department </h4>
                        <div class="row">
                            <div class="col-md-12">
                                <!--Errors-->
                            @include('blade-scafolding.partials.errors')
                            @include('blade-scafolding.partials.success')

                            <!--End of Errors-->
                            </div>
                        </div>

                        <form class="form-horizontal" method="POST" action="{{route('blade-scafolding.departments.save')}}" enctype="multipart/form-data">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Department name</label>
                                <input type="text" class="form-control" placeholder="Enter Department Name" name="name" >
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea  class="form-control" placeholder="Department Tasks & Brief" name="desc" ></textarea>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="custom-select form-control pull-right" name="status" >

                                            <option value="1">Active</option>
                                            <option value="0">Pending</option>

                                        </select>
                                    </div>
                                </div>


                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-4">
                                                <input type="submit" class="btn btn-success" value="Create">


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </form>
                        </form>
                    </div>

                </div>
                <div class="col-md-2"></div>

            </div>
        </div>



@endsection