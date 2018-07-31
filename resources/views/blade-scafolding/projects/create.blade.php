@extends('blade-scafolding.layout.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Project</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <!--Errors-->
                            @include('blade-scafolding.partials.errors')
                            @include('blade-scafolding.partials.success')

                            <!--End of Errors-->
                            </div>
                        </div>

                        <form class="form-horizontal" method="POST" action="{{route('blade-scafolding.projects.save')}}" enctype="multipart/form-data">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Task name</label>
                                <input type="text" class="form-control" placeholder="Enter Project Name" name="name">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea  class="form-control" placeholder="Enter Project Brief" name="desc"></textarea>
                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Start Date / Time</label>
                                        <input type="datetime-local" class="form-control" id="starttime" name="start_date"  >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Due Date / Time</label>
                                        <input  id="endtime" type="datetime-local"  class="form-control"  name="due_date"  >
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <select class="custom-select form-control pull-right" name="department_id" id="department">
                                            <option selected disabled>Please Select</option>
                                            @foreach($departments as $department)
                                                <option value="{{$department->id}}" id="">{{$department->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Document Attachemnt</label>
                                        <input type="file" class="form-control" name="document">
                                    </div>
                                </div>


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
            <div class="col-md-2"></div>

        </div>
    </div>


@endsection