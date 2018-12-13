@extends('layouts.dashboard')

@section('header')
    <h1>
        Edit Vehicle
        <small></small>
    </h1>
@endsection

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-info">
            <br>
            {!! Form::open(['action' => ['VehiclesController@update',$vehicle->id],'method'=>'POST','enctype' => 'multipart/form-data','class'=>'form-horizontal']) !!}
            <div class="box-body">
                <div class="form-group">
                        {{ Form::label('vehicle_no','Vehicle No:',['class'=>'col-sm-2 control-label']) }}
                    <div class="col-sm-8">
                        {{Form::text('vehicle_no',$vehicle->vehicle_no, ['class'=> 'form-control','placeholde'=>'Title' ])}}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('insurance_expairy','Insurance Expairy Day' ,['class'=>'col-sm-2 control-label']) }}
                    <div class="col-sm-8">
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" value="{{$vehicle->insurance_expairy}}" class="form-control pull-right" name="insurance_expairy" id="datepicker">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('licence_expairy','Licences Expairy Day' ,['class'=>'col-sm-2 control-label']) }}
                    <div class="col-sm-8">
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" value="{{$vehicle->licence_expairy}}" name="licence_expairy" id="datepicker1">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('fitness_expairy','Fitness Expairy Day' ,['class'=>'col-sm-2 control-label']) }}
                    <div class="col-sm-8">
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" value="{{$vehicle->fitness_expairy}}" name="fitness_expairy" id="datepicker2">
                        </div>
                    </div>
                </div>

            </div>
            {{Form::hidden('_method','PUT')}}
            <!-- /.box-body -->
            <div class="box-footer">
                {{Form::submit('Add',['class'=>'btn btn-info pull-right"','name' => 'submitbutton', 'value' => 'save'])}}
            </div>
            <!-- /.box-footer -->
            {!! Form::close() !!}
        </div>
    </div>


@endsection

@section('page_JavaScrips')
    <script>
        $('#datepicker').datepicker({
            autoclose: true
        })
        $('#datepicker1').datepicker({
            autoclose: true
        })
        $('#datepicker2').datepicker({
            autoclose: true
        })
    </script>
@endsection