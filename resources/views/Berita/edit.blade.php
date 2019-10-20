@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info" button class="btn btn-primary">Tambah Kategori Artikel</div>
          
                <div class="card-body">                   
                    {!! Form::model($Berita, ['route' => ['Berita.update', $Berita->id],'method'=>'patch']) !!}
                        
                        @include('Berita.form')
                    
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
     </div>
@endsection