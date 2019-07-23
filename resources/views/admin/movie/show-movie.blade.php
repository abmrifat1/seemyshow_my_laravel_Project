
@extends('admin.master')
@section('content')
    <div class="row" style="padding: 20px;">
        <div class="col-lg-12">

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if( $message = Session::get('message') )
                        <h1 class="page-header" style="text-align: center;color:blue;">{{ $message }}</h1>

                    @else

                        <h1 class="page-header" style="text-align: center;color:deeppink;font-weight: 700;">Manage Show</h1>
                    @endif
                </div>

                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Show Name</th>
                            <th>Director/Sponsor</th>
                            <th>Category Name</th>
                            <th>Showing Status</th>
                            <th>Country</th>
                            <th>Reliase Date</th>
                            <th>Place Name</th>
                            <th>Ticket Management</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        @foreach($movies as $movie)
                            <tr class="odd gradeX">

                            <td>{{$i}}</td>
                            <td>{{$movie->movie_name}}</td>
                            <td>{{$movie->director}}</td>
                            <td>{{$movie->category_name}}</td>
                            <td>{{$movie->status_name}}</td>
                            <td>{{$movie->country_name}}</td>
                            <td>{{$movie->duration}}</td>
                            <td>{{$movie->movie_hall_id}}</td>
                            <td><a href="{{url('/manage-ticket/'.$movie->id)}}"><button class="btn btn-primary">Manage Ticket</button></a></td>
                                <td>
                                    @if($movie->publication_status ==1)
                                        <a href="{{ url('/unpublished-show/'.$movie->id) }}" class="btn btn-success btn-xs" title="Published Show">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/published-show/'.$movie->id) }}" class="btn btn-warning btn-xs" title="Unpublished Show">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif

                                    <a href="{{ url('/edit-show/'.$movie->id) }}" class="btn btn-primary btn-xs" title="Edit show">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete-show/'.$movie->id) }}" class="btn btn-danger btn-xs" title="Delete Show" onclick="return confirm('Are you sure to delete this'); ">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>

                            </tr>
                            <?php $i++?>
                         @endforeach




                        </tbody>


                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection