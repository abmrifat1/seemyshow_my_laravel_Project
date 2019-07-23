@extends('admin.master')
@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="well">



                @if(Session::get('message'))
                    <h2 style="text-align: center;color: blue;font-weight: 700;">{{Session::get('message')}}</h2>
                    <hr/>
                @else
                    <h2 style="text-align: center;color: blue;font-weight: 700;">EDIT CUSTOMER ORDER</h2>
                    <hr/>
                @endif

                <form  action="{{ url('/update-order') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-3">Order Status</label>
                        <div class="col-sm-9">
                            <input required type="text" value="{{$orderById->order_status}}" name="order_status" class="form-control"/>
                            <input type="hidden" value="{{$orderById->id}}" name="order_id" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Payment Status</label>
                        <div class="col-sm-9">
                            <input required type="text" value="{{$paymentById->payment_status}}" name="payment_status" class="form-control"/>
                            <input type="hidden" value="{{$paymentById->id}}" name="id" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Order Status"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection