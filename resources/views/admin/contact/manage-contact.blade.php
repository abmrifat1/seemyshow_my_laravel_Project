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

                        <h1 class="page-header" style="text-align: center;color:blue;">Manage Customer message </h1>
                    @endif
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Customer Name</th>
                            <th>Customer Mail</th>
                            <th>Customer Message</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        @foreach($customer_messages as $customer_message)
                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $customer_message->user_name }}</td>
                                <td>{{ $customer_message->user_email }}</td>
                                <td>{{ $customer_message->message }}</td>
                                <td>{{ $customer_message->status }}</td>
                                <td>

                                    <a href="{{ url('/edit-sms-info/'.$customer_message->id) }}" class="btn btn-primary btn-xs" title="Edit Customer sms Info">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete-sms-info/'.$customer_message->id) }}" class="btn btn-danger btn-xs" title="Delete Customer sms Info" onclick="return confirm('Are you sure to delete this'); ">
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