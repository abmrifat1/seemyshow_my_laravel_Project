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
                    <h2 style="text-align: center;color: blue;font-weight: 700;">EDIT TICKET SHIFT</h2>
                    <hr/>
                @endif

                <form name="editShiftForm" action="{{ url('/update-shift') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-3">Shift Time</label>
                        <div class="col-sm-9">
                            <input required type="time" value="{{$shiftById->shift_time}}" name="shift_time" class="form-control"/>
                            <input type="hidden" value="{{$shiftById->id}}" name="id" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">Shift Description</label>
                        <div class="col-sm-9">
                            <textarea required class="form-control" name="shift_description">{{$shiftById->shift_description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">Publication Status</label>
                        <div class="col-sm-9">
                            <select required name="publication_status" class="form-control">
                                <option value="">---Select Publication Status---</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Ticket Shift Info"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.forms['editShiftForm'].elements['publication_status'].value = '{{ $shiftById->publication_status }}';
    </script>
@endsection