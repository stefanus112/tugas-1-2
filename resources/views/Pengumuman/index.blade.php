@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Pengumuman</div>
                <div class="card-body">

                    <div class="card-body">
                        <div class="row justify-content-right">
                            <a href="{!! route('Pengumuman.create') !!}" class="btn btn-danger">Tambah Data</a>
                            <a href="{!! route('Pengumuman.trash') !!}" class="btn btn-success">See delete data</a>
                        </div>
                    </div>

                <table class="table table-bordered">
                    <thead class="bg-info">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Users Id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Update</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $Pengumuman as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->kategori_pengumuman_id !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                        <td>{!! $item->updated_at->format('d/m/Y H:i:s')!!}</td>
                        <td>
                         <a href="{!! route('Pengumuman.show',[$item->id]) !!}"class="btn btn-danger">Lihat</a>

                         <a href="{!! route('Pengumuman.edit',[$item->id]) !!}" class="btn btn-sm btn-warning">
                         Ubah</a>

                         {!! Form::open(['route' => ['Pengumuman.destroy', $item->id],'method'=>'delete']); !!}

                         {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm('Apakah anda yakin menghapus data ini ?')"]); !!}

                         {!! Form::close() !!}

                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection