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

                        <h1 class="page-header" style="text-align: center;color:blue;">Manage Offer Info </h1>
                    @endif
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Offer Id</th>
                            <th>Offer Title</th>
                            <th>Offer Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        @foreach($alloffers as $alloffer)
                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $alloffer->id }}</td>
                                <td>{{ $alloffer->offer_title }}</td>
                                <td>{{ $alloffer->offer_description }}</td>
                                <td>{{ $alloffer->publication_status ==1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($alloffer->publication_status ==1)
                                        <a href="{{ url('/unpublished-offer/'.$alloffer->id) }}" class="btn btn-success btn-xs" title="Published offer">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/published-offer/'.$alloffer->id) }}" class="btn btn-warning btn-xs" title="Unpublished offer">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif

                                    <a href="{{ url('/edit-offer/'.$alloffer->id) }}" class="btn btn-primary btn-xs" title="Edit offer">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete-offer/'.$alloffer->id) }}" class="btn btn-danger btn-xs" title="Delete offer" onclick="return confirm('Are you sure to delete this'); ">
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