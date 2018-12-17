@extends('layouts.dashboard')


@section('styles')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection

@section('header')
<h1>
    Up coming Expirations
    <small>Licences,Fittness and Servies expirations</small>
</h1>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="box box-info" style="min-height: 600px">
            <div class="box-body">
                <br><br>
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Vehicle No</th>
                        <th>Licence Expiry Date</th>
                        <th>Insurance Expiry Date</th>
                        <th>Fitness Expiry Date</th>
                        <th>Service Expiry Date</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($eventsList as $vehicle)
                        <tr>
                            <td>{{$vehicle->vehicle_no}}</td>
                            <td  @if(\Carbon\Carbon::now()->month == \Carbon\Carbon::createFromFormat('Y-m-d', $vehicle->insurance_expairy)->month)
                                 style="color: red"
                                    @endif >{{$vehicle->insurance_expairy}}</td>
                            <td  @if(\Carbon\Carbon::now()->month == \Carbon\Carbon::createFromFormat('Y-m-d', $vehicle->licence_expairy)->month)
                                 style="color: red"
                                    @endif>{{$vehicle->licence_expairy}}</td>
                            <td  @if(\Carbon\Carbon::now()->month == \Carbon\Carbon::createFromFormat('Y-m-d', $vehicle->fitness_expairy)->month)
                                 style="color: red"
                                    @endif>{{$vehicle->fitness_expairy}}</td>
                            <td  @if(\Carbon\Carbon::now()->month == \Carbon\Carbon::createFromFormat('Y-m-d', $vehicle->service_expiration)->month)
                                 style="color: red"
                                    @endif>{{$vehicle->service_expiration}}</td>
                            <td>
                                <a href = "/vehicles/{!! $vehicle->id !!}/edit" class= " btn btn-link" > Edit </a>
                                {!!Form::open(['action' => ['VehiclesController@destroy', $vehicle->id],'method'=>'POST','class' => 'pull-right'])!!}

                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-link'])}}

                                {!!Form::close()!!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page_JavaScrips')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : true
        })
    })
</script>
@endsection