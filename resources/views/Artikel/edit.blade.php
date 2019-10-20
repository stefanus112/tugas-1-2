@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info" button class="btn btn-primary">Tambah Kategori Artikel</div>
          
                <div class="card-body">                   
                    {!! Form::model($Artikel, ['route' => ['Artikel.update', $Artikel->id],'method'=>'patch']) !!}
                        
                        @include('Artikel.form')
                    
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
     </div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>

        <script>
                $(document).ready(function() {
                 CKEDITOR.replace( 'isi' );


                });
        </script>
@endsection