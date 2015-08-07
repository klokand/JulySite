@extends('admin.layout.admin')
@section('content')
<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Admin List Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-admin">
                                    <thead>
                                        <tr>
											<th>Id</th>
											<th>Email</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Activated</th>
											<th>Created Date</th>
											<th>Last Login</th>
											<th>update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									{!!$AdminList!!}
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