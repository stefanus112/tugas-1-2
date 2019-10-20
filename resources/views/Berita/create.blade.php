@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Berita</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'Berita.store', 'method' => 'post']) !!}
                        
                        @include('Berita.form')
                    
                    {!! Form::close() !!}
                </div>
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