@extends('admin.layout.admin')
@section('content')
<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Properties List Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-admin">
                                    <thead>
                                        <tr>
											<th>Id</th>
											<th>Name</th>
                                            <th>type</th>
                                            <th>address</th>
											<th>state</th>
											<th>price</th>
                                            <th>created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									{!!$PropertiesList!!}
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
		
@endsection