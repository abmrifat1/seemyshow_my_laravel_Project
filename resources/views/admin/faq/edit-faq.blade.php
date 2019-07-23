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
                    <h2 style="text-align: center;color: blue;font-weight: 700;">EDIT FAQ INFO</h2>
                    <hr/>
                @endif

                <form name="editFaqForm" action="{{ url('/update-faq') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-3">FAQ question</label>
                        <div class="col-sm-9">
                            <input required type="text" name="name" value="{{$faqById->name}}" class="form-control"/>
                            <input  type="hidden" name="id" value="{{$faqById->id}}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">FAQ ans</label>
                        <div class="col-sm-9">
                            <textarea required class="form-control" name="description">{{$faqById->description}}</textarea>
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
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update FAQ Info"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.forms['editFaqForm'].elements['publication_status'].value = '{{ $faqById->publication_status }}';
    </script>
@endsection