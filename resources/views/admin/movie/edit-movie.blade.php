@extends('admin.master')
@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="well">

                @if(Session::get('message'))
                    <h2 style="text-align: center;color: blue;font-weight: 700;">{{ Session::get('message') }}</h2>
                @else
                    <h2 style="text-align: center;color: blue;font-weight: 700;">ADD SHOW </h2>
                @endif

                <form name="editShowForm" action="{{ url('/update-movie') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label class="col-sm-3">Show Name</label>
                        <div class="col-sm-9">
                            <input required value="{{$movieById->movie_name}}" type="text" name="movie_name" class="form-control"/>
                            <input  value="{{$movieById->id}}" type="hidden" name="id" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('movie_name') ? $errors->first('movie_name') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Category Name</label>
                        <div class="col-sm-9">
                            <select required name="category_id" class="form-control">
                                <option value="">---Select Category Name---</option>

                                @foreach($normal_categories as $normal_category)
                                    <option value="{{ $normal_category->id }}">{{ $normal_category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3">Showing Status Name</label>
                        <div class="col-sm-9">
                            <select required name="show_status" class="form-control">
                                <option value="">---Select Showing Status Name---</option>

                                @foreach($Showing_categories as $Showing_category)
                                    <option value="{{$Showing_category->id }}">{{ $Showing_category->status_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>




                    <div class="form-group">
                        <label class="col-sm-3">Country Name</label>
                        <div class="col-sm-9">
                            <input required value="{{$movieById->country_name}}" type="text" name="country_name" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('country_name') ? $errors->first('country_name') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Year</label>
                        <div class="col-sm-9">
                            <input required value="{{$movieById->year}}" type="text" name="year" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('year') ? $errors->first('year') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Show Release Date</label>
                        <div class="col-sm-9">
                            <input required value="{{$movieById->duration}}" type="text" name="duration" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('duration') ? $errors->first('duration') : ' ' }}</span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3">Director/Sponsor</label>
                        <div class="col-sm-9">
                            <input required value="{{$movieById->director}}" type="text" name="director" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('director') ? $errors->first('director') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Actor/Team</label>
                        <div class="col-sm-9">
                            <input required type="text" value="{{$movieById->actor}}" name="actor" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('actor') ? $errors->first('actor') : ' ' }}</span>
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-sm-3">Show Image</label>
                        <div class="col-sm-9">
                            <input  type="file" name="movie_image" accept="image/*">
                            <img src="{{asset($movieById->movie_image)}}" style="width: 80px; height: 80px" alt="">
                            <span style="color: red;">{{ $errors->has('movie_image') ? $errors->first('movie_image') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Trailer Link</label>
                        <div class="col-sm-9">
                            <input required value="{{$movieById->trailer_link}}" type="text" name="trailer_link" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('trailer_link') ? $errors->first('trailer_link') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Show Place Name</label>
                        <div class="col-sm-9">
                            <input required value="{{$movieById->movie_hall_id}}" type="text" name="movie_hall_id" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('movie_hall_id') ? $errors->first('movie_hall_id') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Show Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="movie_description">{{$movieById->movie_description}}</textarea>
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
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Show Info"/>
                        </div>
                    </div>
                </form>

                    <script>
                        document.forms['editShowForm'].elements['publication_status'].value = '{{ $movieById->publication_status }}';
                        document.forms['editShowForm'].elements['category_id'].value = '{{ $movieById->category_id }}';
                        document.forms['editShowForm'].elements['show_status'].value = '{{ $movieById->show_status }}';
                    </script>
            </div>
        </div>
    </div>
@endsection