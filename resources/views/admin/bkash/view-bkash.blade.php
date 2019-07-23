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

                        <h1 class="page-header" style="text-align: center;color:blue;">Manage Show Category </h1>
                    @endif
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Order ID</th>
                            <th>Ticket ID</th>
                            <th>Bkash Number</th>
                            <th>Transition ID</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        @foreach($bkashs as $bkash)
                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $bkash->order_id }}</td>
                                <td>{{ $bkash->ticket_id }}</td>
                                <td>{{ $bkash->phone_no }}</td>
                                <td>{{ $bkash->t_id }}</td>
                                <td>

                                    <a href="{{ url('/delete-bkash/'.$bkash->id) }}" class="btn btn-danger btn-xs" title="Delete Bkash Info" onclick="return confirm('Are you sure to delete this'); ">
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