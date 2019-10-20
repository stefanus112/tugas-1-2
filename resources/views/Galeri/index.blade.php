@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Galeri</div>
                <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-danger">
                         <a href="{!! route('Galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
                         <a href="{!! route('Galeri.trash') !!}" class="btn btn-danger">
                         See delete data</a>
                         
                        <tr>
                         <th scope="col">ID</th>
                        <th scope="col">nama</th>
                        <th scope="col">keterangan</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Users Id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $Galeri as $item)
                       <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->keterangan !!}</td>
                        <td>{!! $item->kategori_galeri_id !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                        <td>
                         <a href="{!! route('Galeri.show',[$item->id]) !!}"class="btn btn-success">Lihat</a>
                          <a href="{!! route('Galeri.edit',[$item->id]) !!}" class="btn btn-sm btn-warning">
                         Ubah</a>

                         {!! Form::open(['route' => ['Galeri.destroy', $item->id],'method'=>'delete']); !!}

                         {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm('Apakah anda yakin menghapus data ini ?')"]); !!}

                         {!! Form::close() !!}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        @endsection