
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

                        <h1 class="page-header" style="text-align: center;color:deeppink;font-weight: 700;">Manage <span style="color: #00A8FF">{{$movies->movie_name}}</span> Movie Ticket</h1>
                    @endif
                </div>

                <div class="panel-body">

                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <a href="{{url('/add-ticket/'.$movies->id)}}" style="float: right"><button class="btn btn-success">Add New</button></a><br/>

                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Hall Name</th>
                            <th>Date</th>
                            <th>Shift Time</th>
                            <th>Available Ticket</th>
                            <th>Seat no</th>
                            <th>Price</th>
                            <th>Publication Station</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        @foreach($tickets_details as $ticket_details)
                            <tr class="odd gradeX">

                                <td>{{$i}}</td>
                                <td>{{$ticket_details->hall_name}}</td>
                                <td>{{$ticket_details->date}}</td>
                                <td>{{$ticket_details->time}}</td>
                                <td>{{$ticket_details->available_ticket}}</td>
                                <td>{{$ticket_details->no_of_seat}}</td>
                                <td>{{$ticket_details->price}}</td>
                                <td>{{$ticket_details->publication_status ==1 ? 'Published' : 'Unpublished' }}</td>

                                <td>


                                    <a href="{{ url('/edit-ticket/'.$ticket_details->id) }}" class="btn btn-primary btn-xs" title="Edit Ticket Info">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete-ticket/'.$ticket_details->id) }}" class="btn btn-danger btn-xs" title="Delete Ticket Info" onclick="return confirm('Are you sure to delete this'); ">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>

                            </tr>
                            <?php $i++?>
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