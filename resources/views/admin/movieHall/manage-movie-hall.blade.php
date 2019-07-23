@extends('admin.master')
@section('content')
    <div class="row" style="padding: 20px;">
        <div class="col-lg-12">

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if( $message = Session::get('message') )
                        <h1 class="page-header" style="text-align: center;color:blue;">{{ $message }}</h1>

                    @else

                        <h1 class="page-header" style="text-align: center;color:deeppink;font-weight: 700;">Manage Show Place </h1>
                    @endif
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Show Place ID</th>
                            <th>Show Place Name</th>
                            <th>Show Place Category</th>
                            <th>Show Place Address</th>
                            <th>Show Place Phone</th>
                            <th>Show Place Web Site</th>
                            <th>Show Place Image</th>
                            <th>Show Place Description</th>
                            <th>publicatio Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        @foreach($places as $place)
                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $place->id }}</td>
                                <td>{{ $place->hall_name }}</td>
                                <td>{{ $place->place_category_name }}</td>
                                <td>{{ $place->hall_address }}</td>
                                <td>{{ $place->hall_phone }}</td>
                                <td>{{ $place->hall_website }}</td>
                                <td><img src="{{asset($place->hall_image)}}" style="height: 80px; width: 80px" alt=""></td>
                                <td>{{ $place->hall_description }}</td>
                                <td>{{ $place->publication_status ==1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($place->publication_status ==1)
                                        <a href="{{ url('/unpublished-place/'.$place->id) }}" class="btn btn-success btn-xs" title="Published Show Place">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/published-place/'.$place->id) }}" class="btn btn-warning btn-xs" title="Unpublished Show Place">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif

                                    <a href="{{ url('/edit-place/'.$place->id) }}" class="btn btn-primary btn-xs" title="Edit Show Place">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete-place/'.$place->id) }}" class="btn btn-danger btn-xs" title="Delete Show Place" onclick="return confirm('Are you sure to delete this'); ">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection