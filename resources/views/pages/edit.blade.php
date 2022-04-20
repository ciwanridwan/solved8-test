@extends('layouts.apps')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Input</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('update', $timeSheet->id)}}">
                        @csrf
                        @method('POST')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="jam">Jam</label>
                                @if ($timeSheet->jam == 'null')
                                <input type="text" class="form-control" id="jam" placeholder="Input Jam" name="jam">    
                                @else
                                <input type="text" class="form-control" id="jam"  name="jam" value="{{$timeSheet->jam}}">    
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                @if ($timeSheet->deskripsi == 'null')
                                <input type="text" class="form-control" id="deskripsi" placeholder="Input Deskripsi" name="deskripsi">    
                                @else
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$timeSheet->deskripsi}}">
                                @endif
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->


        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection