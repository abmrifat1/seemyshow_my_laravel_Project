@extends('admin.master')
@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="well">

                @if(Session::get('message'))
                    <h2 style="text-align: center;color: blue;font-weight: 700;">{{ Session::get('message') }}</h2>
                @else
                    <h2 style="text-align: center;color: blue;font-weight: 700;">ADD <span style="color: deeppink">{{$movies->movie_name}}</span> EDIT TICKET </h2>
                @endif

                <form name="editTicketForm" action="{{ url('/update-ticket') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label class="col-sm-3"></label>
                        <div class="col-sm-9">
                            <input type="hidden" name="movie_name" value="{{$movies->movie_name}}" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('movie_name') ? $errors->first('movie_name') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Movie Hall Name</label>
                        <div class="col-sm-9">
                            <select name="hall_name" class="form-control">
                                <option>---Select Hall Name---</option>

                                @foreach($halls as $hall)
                                    <option value="{{ $hall->hall_name }}">{{ $hall->hall_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-sm-3">Date</label>
                        <div class="col-sm-9">
                            <input type="date" name="date" value="{{$ticketById->date}}" class="form-control"/>
                            <input type="hidden" name="id" value="{{$ticketById->id}}" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('date') ? $errors->first('date') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Shift Time</label>
                        <div class="col-sm-9">
                            <select name="time" class="form-control">
                                <option>---Add Shift Time---</option>

                                @foreach($shifts as $shift)
                                    <option value="{{ $shift->shift_time }}">{{ $shift->shift_time }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{--<div class="form-group">--}}
                        {{--<label class="col-sm-3">Seat Type</label>--}}
                        {{--<div class="col-sm-9">--}}
                            {{--<select name="seat" class="form-control">--}}
                                {{--<option>---Add Shift Time---</option>--}}

                                {{--@foreach($seats as $seat)--}}
                                    {{--<option value="{{ $seat->seat_type }}">{{ $seat->seat_type }}</option>--}}
                                {{--@endforeach--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group">
                        <label class="col-sm-3">Available Ticket</label>
                        <div class="col-sm-9">
                            <input type="number" value="{{$ticketById->available_ticket}}" name="available_ticket" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('available_ticket') ? $errors->first('available_ticket') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Seat No</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{$ticketById->no_of_seat}}" name="no_of_seat" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('no_of_seat') ? $errors->first('no_of_seat') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Ticket Price</label>
                        <div class="col-sm-9">
                            <input type="number" value="{{$ticketById->price}}" name="price" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('price') ? $errors->first('price') : ' ' }}</span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3">Publication Status</label>
                        <div class="col-sm-9">
                            <select name="publication_status" class="form-control">
                                <option>---Select Publication Status---</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Ticket Info"/>
                        </div>
                    </div>
                </form>

                    <script>
                        document.forms['editTicketForm'].elements['publication_status'].value = '{{ $ticketById->publication_status }}';
                        document.forms['editTicketForm'].elements['hall_name'].value = '{{ $ticketById->hall_name }}';
                        document.forms['editTicketForm'].elements['time'].value = '{{ $ticketById->time }}';
                        document.forms['editTicketForm'].elements['seat'].value = '{{ $ticketById->seat }}';
                    </script>

            </div>
        </div>
    </div>
@endsection