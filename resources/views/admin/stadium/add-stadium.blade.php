@extends('admin.master')
@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="well">

                @if(Session::get('message'))
                    <h2 style="text-align: center;color: blue;font-weight: 700;">{{ Session::get('message') }}</h2>
                @else
                    <h2 style="text-align: center;color: blue;font-weight: 700;">ADD VENUE</h2>
                @endif
                <hr/>


                <form action="{{ url('/new-stadium') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-3">Stadium Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="stadium_name" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('stadium_name') ? $errors->first('stadium_name') : ' ' }}</span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">Stadium Address</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="Stadium_address"></textarea>
                            <span style="color: red;">{{ $errors->has('Stadium_address') ? $errors->first('Stadium_address') : ' ' }}</span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Stadium Official Website</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="stadium_website"></textarea>
                            <span style="color: red;">{{ $errors->has('stadium_website') ? $errors->first('stadium_website') : ' ' }}</span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Contract Number</label>
                        <div class="col-sm-9">
                            <input type="text" name="stadium_phone" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('stadium_phone') ? $errors->first('stadium_phone') : ' ' }}</span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Stadium Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="stadium_image" accept="image/*">
                            <span style="color: red;">{{ $errors->has('stadium_image') ? $errors->first('stadium_image') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Stadium Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="stadium_description"></textarea>
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
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Stadium Info"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection