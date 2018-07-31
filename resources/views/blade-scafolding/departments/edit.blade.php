@extends('blade-scafolding.layout.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title">Update Department : <strong>{{$department->name }}</strong></h4>
                        <div class="row">
                            <div class="col-md-12">
                                <!--Errors-->
                                <!--Errors-->
                            @include('blade-scafolding.partials.errors')

                            <!--Success Messages-->
                            @include('blade-scafolding.partials.success')
                            <!--End of Errors-->
                            </div>
                        </div>

                        <form class="form-horizontal" method="POST" action="{{route('blade-scafolding.departments.update',['id'=>$department->id])}}" enctype="multipart/form-data">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Department name</label>
                                <input type="text" class="form-control" value="{{$department->name }}" name="name" >
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea  class="form-control" name="desc" >{{$department->desc }}</textarea>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="custom-select form-control pull-right" name="status" >

                                            @if($department->status ==1)
                                                <option selected value="{{$department->status}}">Active</option>
                                                <option value="0">Pending</option>
                                            @elseif ($department->status ==0)
                                                <option  value="1">Active</option>
                                                <option selected value="{{$department->status}}">Pending</option>
                                            @else

                                            @endif




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
                                                <input type="submit" class="btn btn-success" value="Update">


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