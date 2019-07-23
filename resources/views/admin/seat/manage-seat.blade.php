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

                        <h1 class="page-header" style="text-align: center;color:blue;">Manage Type Of Ticket Info </h1>
                    @endif
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Ticket Type Id</th>
                            <th>Ticket Type Name</th>
                            <th>Ticket Type Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        @foreach($allseats as $allseat)
                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $allseat->id }}</td>
                                <td>{{ $allseat->seat_type }}</td>
                                <td>{{ $allseat->seat_description }}</td>
                                <td>{{ $allseat->publication_status ==1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($allseat->publication_status ==1)
                                        <a href="{{ url('/unpublished-seat/'.$allseat->id) }}" class="btn btn-success btn-xs" title="Published Ticket type Info">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/published-seat/'.$allseat->id) }}" class="btn btn-warning btn-xs" title="Unpublished Ticket type Info">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif

                                    <a href="{{ url('/delete-seat/'.$allseat->id) }}" class="btn btn-danger btn-xs" title="Delete Ticket type Info" onclick="return confirm('Are you sure to delete this'); ">
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