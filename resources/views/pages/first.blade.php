@extends('layouts.apps')

@section('title')
    Halaman Pertama
@endsection

@section('table-title')
    Timesheet Harian
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
                                        <th>Tanggal</th>
                                        <th>Klien</th>
                                        <th>Kode Pek</th>
                                        <th>Jenis Penugasan</th>
                                        <th>Tahun</th>
                                        <th>Kode Akun</th>
                                        <th>Akun</th>
                                        <th>Jam</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($timeSheetHarian as $item)
                                    <tr>
                                        <td>{{$item->created_at = date('d-m-Y')}}</td>
                                        <td>{{$item->klien}}</td>
                                        <td>{{$item->kode_pek}}</td>
                                        <td>{{$item->jenis_penugasan}}</td>
                                        {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                        <td>{{$item->tahun}}</td>
                                        <td>{{$item->kode_akun}}</td>
                                        <td>{{$item->akun}}</td>
                                        @if ($item->jam == 'null')
                                        <td>-</td>    
                                        @else
                                        {{$item->jam}}
                                        @endif

                                        @if ($item->deskripsi == 'null')
                                        <td>-</td>    
                                        @else
                                        <td>{{$item->deskripsi}}</td>
                                        @endif
                                        
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