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
                    <h2 style="text-align: center;color: blue;font-weight: 700;">ADD SHOWING STATUS</h2>
                    <hr/>
                @endif

                <form action="{{ url('/new-showing') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-3">Showing Status Name</label>
                        <div class="col-sm-9">
                            <input type="text" required name="status_name" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">Showing Description</label>
                        <div class="col-sm-9">
                            <textarea required class="form-control" name="status_description"></textarea>
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
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Showing Status Info"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection