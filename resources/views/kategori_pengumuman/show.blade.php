@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kategori Pengumuman</div>

                    <div class="card-body">

                  <div class="from-group row">
                  <label class="col-md-4 col-form-label text-md-right">ID</label>
                   <label class="col-md-8 col-form-label text-md-left">{!! $kategori_pengumuman->id !!}</label>
               </div>

                    <div class="from-group row">
                  <label class="col-md-4 col-form-label text-md-right">nama</label>
                   <label class="col-md-8 col-form-label text-md-left">{!! $kategori_pengumuman->nama !!}</label>
               </div>

                   <div class="from-group row">
                  <label class="col-md-4 col-form-label text-md-right">user id</label>
                   <label class="col-md-8 col-form-label text-md-left">{!! $kategori_pengumuman->users_id !!}</label>
                </div>

                <div class="from-group row">
                  <label class="col-md-4 col-form-label text-md-right">create</label>
                   <label class="col-md-8 col-form-label text-md-left">{!! $kategori_pengumuman->created_at->format('d/m/y H:I') !!}</label>
                </div>

                <div class="from-group row">
                  <label class="col-md-4 col-form-label text-md-right">updated</label>
                   <label class="col-md-8 col-form-label text-md-left">{!! $kategori_pengumuman->updated_at->format('d/m/y H:I') !!}</label>
                </div>
                <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <a href="{!! route('kategori_galeri.index')!!}" class="btn btn-primary">
                                Back
                            </a>

            </div>
        @endsection