
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

                        <h1 class="page-header" style="text-align: center;color:blue;"> Customer Order details </h1>
                    @endif
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Order Id</th>
                                <th>Customer Name</th>
                                <th>Order Total</th>
                                <th>Order Status</th>
                                <th>Payment Type</th>
                                <th>Payment Status</th>
                                <th>Order Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;?>
                            @foreach($orders as $order)

                                <tr class="odd gradeX">
                                    <td>{{$i++}}</td>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->first_name.' '.$order->last_name}}</td>
                                    <td>TK. {{$order->order_total}}</td>
                                    <td>{{$order->order_status}}</td>
                                    <td>{{$order->payment_type}}</td>
                                    <td>{{$order->payment_status}}</td>
                                    <td>{{$order->created_at}}</td>

                                    <td>

                                        <a href="{{url('/view-order-details/'.$order->id) }}" class="btn btn-info btn-xs" title="View Order Details">
                                            <span class="glyphicon glyphicon-zoom-in"></span>
                                        </a>

                                        <a href="{{url('/view-order-invoice/'.$order->id) }}" class="btn btn-warning btn-xs" title="View Order Invoice">
                                            <span class="glyphicon glyphicon-zoom-out"></span>
                                        </a>


                                        {{--<a href="{{url('/download-invoice/'.$order->id)}}" class="btn btn-primary btn-xs" title="Download Invoice">--}}
                                            {{--<span class="glyphicon glyphicon-download"></span>--}}
                                        {{--</a>--}}
                                        <a href="{{url('/edit-order/'.$order->id)}}" class="btn btn-success  btn-xs"  title="Edit Order Info">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{url('/delete-order/'.$order->id)}}" class="btn btn-danger btn-xs" onclick="return confirm('are you sure to remove this??')" title="Delete Order Info">
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
        <!-- /.row -->
    </div>

@endsection

