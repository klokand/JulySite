@extends('admin.layout.admin')
@section('content')
<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           News List Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-admin">
                                    <thead>
                                        <tr>
											<th>Id</th>
											<th>Type</th>
											<th>Author</th>
                                            <th>Title</th>
                                            <th>Created at</th>
											<th>Updated at</th>
											<th>Delete</th>
											<th>update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									{!!$newsList!!}
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