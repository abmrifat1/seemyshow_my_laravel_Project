


@extends('admin.master')

@section('content')





    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if( $message = Session::get('message') )
                        <h1 class="page-header" style="text-align: center;color:blue;">{{ $message }}</h1>

                    @else

                        <h1 class="page-header" style="text-align: center;color:blue;">Manage Menu Category </h1>
                    @endif
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                        <h1>Customer Info</h1>
                        <hr/>
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Customer Name</th>
                                <td>{{$customer->first_name.' '.$customer->last_name}}</td>
                            </tr>
                            <tr>
                                <th>Customer Email</th>
                                <td>{{$customer->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{$customer->phone_number}}</td>
                            </tr>


                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <h1>Shipping Info</h1>
                        <hr/>
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Shipping Name</th>
                                <td>{{$shipping->full_name}}</td>
                            </tr>
                            <tr>
                                <th>Shipping Email</th>
                                <td>{{$shipping->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{$shipping->phone_number}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$shipping->address}}</td>
                            </tr>

                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                        <h1>Product Info</h1>
                        <hr/>
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Order Id</th>
                                <th>Show Id</th>
                                <th>Show Name</th>
                                <th>Place Name</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Number Of Seat</th>
                                <th>Ticket Price</th>
                                <th>Ticket Quantity</th>
                                <th>Total Price</th>
                            </tr>
                            @php($i=1)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$ticket->order_id}}</td>
                                    <td>{{$ticket->show_id}}</td>
                                    <td>{{$ticket->name}}</td>
                                    <td>{{$ticket->place}}</td>
                                    <td>{{$ticket->date}}</td>
                                    <td>{{$ticket->time}}</td>
                                    <td>{{$ticket->seat_number}}</td>
                                    <td>TK. {{$ticket->price}}</td>
                                    <td>{{$ticket->quantity}}</td>
                                    <td>TK. {{$ticket->price*$ticket->quantity}}</td>
                                </tr>


                            </thead>
                            <tbody>



                            </tbody>
                        </table>


                        <h1>Payment Info</h1>
                        <hr/>
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Payment Type</th>
                                <td>{{$payment->payment_type}}</td>
                            </tr>
                            <tr>
                                <th>Payment Status</th>
                                <td>{{$payment->payment_status}}</td>
                            </tr>

                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>

@endsection

