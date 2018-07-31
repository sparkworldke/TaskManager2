@if(count($errors))>0)


@foreach($errors->all() as $error)


    <div class="alert alert-rounded alert-danger close pull-left" style="font-size: 12px">
        {{$error}}

    </div>
    <br>



@endforeach
@endif