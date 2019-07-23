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
                    <h2 style="text-align: center;color: blue;font-weight: 700;">ADD OFFER</h2>
                    <hr/>
                @endif

                <form name="editOfferForm" action="{{ url('/update-offer') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-3">Offer Title</label>
                        <div class="col-sm-9">
                            <input required type="text" name="offer_title" value="{{$offerById->offer_title}}" class="form-control"/>
                            <input required type="hidden" name="id" value="{{$offerById->id}}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">Offer Description</label>
                        <div class="col-sm-9">
                            <textarea required class="form-control" name="offer_description">{{$offerById->offer_description}}</textarea>
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
                            <input required type="submit" name="btn" class="btn btn-success btn-block" value="Update Offer Info"/>
                        </div>
                    </div>
                </form>

                    <script>
                        document.forms['editOfferForm'].elements['publication_status'].value = '{{ $offerById->publication_status }}';
                    </script>
            </div>
        </div>
    </div>
@endsection