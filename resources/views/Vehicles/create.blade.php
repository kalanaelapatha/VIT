@extends('layouts.dashboard')

@section('header')
    <h1>
        Add Vehicle
        <small></small>
    </h1>
@endsection

@section('content')

    <div class="col-md-8 col-md-offset-2">

        <div class="box box-info">
            {!! Form::open(['action' => 'VehiclesController@store','method'=>'POST','enctype' => 'multipart/form-data','class'=>'form-horizontal']) !!}
            <div class="box-body">
                <br>

                <div class="form-group">
                    {{ Form::label('vehicle_no','Vehicle No',['class'=>'col-sm-2 control-label']) }}
                    <div class="col-sm-8">
                        {{Form::text('vehicle_no','',['class'=> 'form-control','placeholde'=>'Title' ])}}
                    </div>
                </div>

                @if(count($suppliers)>0)
                    <div class="form-group">
                        {{Form::label('supplier_id','Supplier',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-8">
                            <select class="form-control" id="supplier_id" name="supplier_id">
                                <option disabled>Select a supplier</option>
                                @foreach($suppliers as $supplier)
                                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <small>New Supplier ? <a href='/settings' target="_blank">Add Supplier</a></small>
                    </div>
                @else
                   <center> <h4 class="text-red">You need a supplier to add a vehicle</h4></center>
                    <br>
                @endif

                <div class="form-group">
                    {{ Form::label('insurance_expairy','Insurance Expairy Day' ,['class'=>'col-sm-2 control-label']) }}
                    <div class="col-sm-8">
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" name="insurance_expairy" id="datepicker">
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
                            <input type="text" class="form-control pull-right" name="licence_expairy" id="datepicker1">
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
                            <input type="text" class="form-control pull-right" name="fitness_expairy" id="datepicker2">
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            @if(count($suppliers)>0)
            <div class="box-footer">
                {{Form::submit('Add',['class'=>'btn btn-info pull-right"','name' => 'submitbutton', 'value' => 'save'])}}
            </div>
            @endif
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