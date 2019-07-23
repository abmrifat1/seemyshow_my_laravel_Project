@extends('admin.master')
@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="well">

                @if(Session::get('message'))
                    <h2 style="text-align: center;color: blue;font-weight: 700;">{{ Session::get('message') }}</h2>
                @else
                    <h2 style="text-align: center;color: blue;font-weight: 700;">ADD LIVE MATCH </h2>
                @endif

                <form action="{{ url('/new-match') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label class="col-sm-3">Match Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="match_name" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('match_name') ? $errors->first('match_name') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Category Name</label>
                        <div class="col-sm-9">
                            <select name="category_name" class="form-control">
                                <option>---Select Category Name---</option>

                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->sports_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3">Match Status Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="match_status" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('match_status') ? $errors->first('match_status') : ' ' }}</span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3">Stadium Name</label>
                        <div class="col-sm-9">
                        <select name="stadium_name" class="form-control">
                            <option>---Select Category Name---</option>

                            @foreach($stadiums as $stadium)
                                <option value="{{ $stadium->stadium_name }}">{{ $stadium->stadium_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Team</label>
                        <div class="col-sm-9">
                            <input type="text" name="team" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('team') ? $errors->first('team') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Date</label>
                        <div class="col-sm-9">
                            <input type="date" name="date" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('date') ? $errors->first('date') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Time</label>
                        <div class="col-sm-9">
                            <input type="time" name="time" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('time') ? $errors->first('time') : ' ' }}</span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3">Number Of Ticket</label>
                        <div class="col-sm-9">
                            <input type="number" name="ticket" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('ticket') ? $errors->first('ticket') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Ticket Status</label>
                        @foreach($statuses as $status)
                            <div class="col-sm-6">
                                <lebel><input type="checkbox" name="ticket_status[]" value="{{$status->status_name}}"/>{{$status->status_name}}</lebel>

                            </div>
                            @endforeach

                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Sponsor</label>
                        <div class="col-sm-9">
                            <input type="text" name="sponsor" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('sponsor') ? $errors->first('sponsor') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Match  Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control textarea" rows="15" name="description"></textarea>
                            <span style="color: red;">{{ $errors->has('description') ? $errors->first('description') : ' ' }}</span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3">Match Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="match_image" accept="image/*">
                            <span style="color: red;">{{ $errors->has('match_image') ? $errors->first('match_image') : ' ' }}</span>
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
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Live Match Info"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection