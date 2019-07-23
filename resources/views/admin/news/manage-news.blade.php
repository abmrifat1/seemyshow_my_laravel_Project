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

                        <h1 class="page-header" style="text-align: center;color:deeppink;font-weight: 700;">Manage  news </h1>
                    @endif
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>News ID</th>
                            <th>News Title</th>
                            <th>News Image</th>
                            <th>Description</th>
                            <th>Author Name</th>
                            <th>Author Description</th>
                            <th>publicatio Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        @foreach($allnews as $news)
                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $news->id }}</td>
                                <td>{{ $news->news_title }}</td>
                                <td><img src="{{asset($news->news_image)}}" style="height: 80px; width: 80px" alt=""></td>
                                <td>{{ $news->news_description }}</td>
                                <td>{{ $news->author_name }}</td>
                                <td><img src="{{asset($news->author_image)}}" style="height: 80px; width: 80px" alt=""></td>
                                <td>{{ $news->author_description }}</td>
                                <td>{{ $news->publication_status ==1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($news->publication_status ==1)
                                        <a href="{{ url('/unpublished-news/'.$news->id) }}" class="btn btn-success btn-xs" title="Published News">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/published-news/'.$news->id) }}" class="btn btn-warning btn-xs" title="Unpublished News">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif

                                    <a href="{{ url('/edit-news/'.$news->id) }}" class="btn btn-primary btn-xs" title="Edit News">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete-news/'.$news->id) }}" class="btn btn-danger btn-xs" title="Delete News" onclick="return confirm('Are you sure to delete this'); ">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
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