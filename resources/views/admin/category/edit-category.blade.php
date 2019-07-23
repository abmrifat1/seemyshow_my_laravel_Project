@extends('admin.master')
@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">

                {{ Session::get('message') }}

                <form name="editCategoryForm" action="{{ url('/update-category') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-3">Category Name</label>
                        <div class="col-sm-9">
                            <input required type="text" value="{{ $categoryById->category_name }}" name="category_name" class="form-control"/>
                            <input type="hidden" value="{{ $categoryById->id }}" name="t" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">Category Description</label>
                        <div class="col-sm-9">
                            <textarea required class="form-control" name="category_description">{{ $categoryById->category_description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">Publication Status</label>
                        <div class="col-sm-9">
                            <select required name="publication_status" class="form-control">
                                <option>---Select Publication Status---</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Category Info"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.forms['editCategoryForm'].elements['publication_status'].value = '{{ $categoryById->publication_status }}';
    </script>
@endsection









