@extends('layouts.apps')

@section('title')
Halaman Pertama
@endsection

@section('table-title')
Montly Activity
@endsection

@section('sub-title-table')

@endsection

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        @foreach ($staff as $item)
                        <h3 class="card-title">Nama : {{$item->nama}} </h3> <br>
                        <h3 class="card-title">Level : {{$item->level}} </h3> <br>
                        <h3 class="card-title">Bulan : {{$item->created_at = date('d-m-Y')}}</h3>
                        @endforeach

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                @foreach ($staff as $item)
                                <h3 class="card-title">ID Number : {{$item->id_number}} </h3> <br>                                    
                                @endforeach
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama/Inisial Perusahaan</th>
                                    <th>Uraian Pekerjaan</th>
                                    <th>Kode Pek</th>
                                    <th>Jumlah</th>
                                    <th>Paraf SVP</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($monthlyActivities as $item)
                                <tr>
                                    <td>{{$item->nama_perusahaan}}</td>
                                    <td>{{$item->uraian_pekerjaan}}</td>
                                    <td>{{$item->kode_pek}}</td>
                                    <td>{{$item->jumlah}}</td>
                                    <td>{{$item->paraf_svp}}</td>
                                    {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                    <td>{{$item->keterangan}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection