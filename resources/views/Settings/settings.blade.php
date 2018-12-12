@extends('layouts.dashboard')

@section('header')
    <h1>
        Settings
        <small></small>
    </h1>
@endsection

@section('content')

        <div class="row">
            <div  class="col-md-8">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Brands</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Vehicle Types</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Vehicle Sub Types</a></li>
                    </ul>
                    <div style="min-height: 556px" class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                             <table id="example2" class="table table-bordered table-hover">
                                 <thead>
                                 <tr>
                                     <th>Id</th>
                                     <th>Name</th>
                                     <th>No of Vehicles</th>
                                     <th></th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                 @foreach ($brands as $brand)
                                 <tr>
                                     <td>{{$brand->id}}</td>
                                     <td>{{$brand->name}}</td>
                                     <td>2</td>
                                     <td> delet</td>
                                 </tr>
                                 @endforeach
                                 </tbody>
                             </table>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            The European languages are members of the same family. Their separate existence is a myth.
                            For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                            in their grammar, their pronunciation and their most common words. Everyone realizes why a
                            new common language would be desirable: one could refuse to pay expensive translators. To
                            achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                            words. If several languages coalesce, the grammar of the resulting language is more simple
                            and regular than that of the individual languages.
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                            like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.box -->
            </div>
            <div class="col-md-4">
                <!--brand add form-->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">New Brand</h3>
                    </div>
                    {!! Form::open(['action' => 'SettingsController@storebrand','method'=>'POST','enctype' => 'multipart/form-data','class'=>'form-horizontal']) !!}
                        <div class="box-body">
                            <div class="form-group">
                                {{ Form::label('name','Name',['class'=>'col-sm-2 control-label']) }}
                                <div class="col-sm-10">
                                    {{Form::text('name','',['class'=> 'form-control','placeholde'=>'Title' ])}}
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            {{Form::submit('Add',['class'=>'btn btn-info pull-right"','name' => 'submitbutton', 'value' => 'save'])}}
                        </div>
                        <!-- /.box-footer -->
                    {!! Form::close() !!}
                </div>

                <br>
                <!--vehical type add form-->
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">New Vehicle Type</h3>
                    </div>
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Type </label>

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right">Add</button>
                        </div>
                    </form>
                </div>

                <br>
                <!-- new sub type add form -->

                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">New Vehicle Sub Type</h3>
                    </div>
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Sub Type </label>

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right">Add</button>
                        </div>
                    </form>
                </div>

            </div>
            </div>
        </div>



@endsection

@section('page_JavaScrips')
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection