@extends('admin.master')
@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="well">

                @if(Session::get('message'))
                <h2 style="text-align: center;color: blue;font-weight: 700;">{{ Session::get('message') }}</h2>
                @else
                    <h2 style="text-align: center;color: blue;font-weight: 700;">ADD SHOW PLACE</h2>
                @endif
                <hr/>


                <form action="{{ url('/new-movie-hall') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-3">Show Place Name</label>
                        <div class="col-sm-9">
                            <input required type="text" name="hall_name" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('hall_name') ? $errors->first('hall_name') : ' ' }}</span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Category Name</label>
                        <div class="col-sm-9">
                            <select required name="place_category" class="form-control">
                                <option value="">---Select Category Name---</option>

                                @foreach($place_categories as $place_category)
                                    <option value="{{$place_category->id }}">{{ $place_category->place_category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Show Place Address</label>
                        <div class="col-sm-9">
                            <textarea required class="form-control" name="hall_address"></textarea>
                            <span style="color: red;">{{ $errors->has('hall_address') ? $errors->first('hall_address') : ' ' }}</span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">Show Place Phone Number</label>
                        <div class="col-sm-9">
                            <input required type="text" name="hall_phone" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('hall_phone') ? $errors->first('hall_phone') : ' ' }}</span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3"> Official Website</label>
                        <div class="col-sm-9">
                            <textarea required class="form-control" name="hall_website"></textarea>
                            <span style="color: red;">{{ $errors->has('hall_website') ? $errors->first('hall_website') : ' ' }}</span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">Show Place Image</label>
                        <div class="col-sm-9">
                            <input required type="file" name="hall_image" accept="image/*">
                            <span style="color: red;">{{ $errors->has('hall_image') ? $errors->first('hall_image') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Show Place Description</label>
                        <div class="col-sm-9">
                            <textarea required class="form-control" name="hall_description"></textarea>
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
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Show Palce Info"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection