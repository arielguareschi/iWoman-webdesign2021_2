@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Formulário de Conteúdos
                    <a href="{{ url('conteudos') }}" class="float-right btn btn-success">
                        <i class="fas fa-table"></i> Listar Conteúdos
                    </a>
                </div>
                <div class="card-body">
                    @if(Session::has('mensagem') && Session::has('msgtype'))
                        <div class="alert alert-{{ Session::get('msgtype') }}">
                            {{ Session::get('mensagem') }}
                        </div>
                    @endif
                    @if(Route::is('conteudos.show'))
                        {!! Form::model($conteudo, ['method'=>'PATCH', 'url'=>'conteudos/'.$conteudo->id]) !!}
                    @else
                        {!! Form::open(['method'=>'POST', 'url'=>'conteudos']) !!}
                    @endif
                    {!! Form::label('titulo', 'Titulo') !!}
                    {!! Form::input('text', 'titulo', null, ['class'=>'form-control', 'autofocus', 'placeholder'=>'Titulo', 'required']) !!}
                    {!! Form::label('texto', 'Texto') !!}
                    {!! Form::textarea('texto', null, ['class'=>'form-control ckeditor']) !!}
                    {!! Form::submit('Salvar', ['class'=>'btn btn-primary float-right mt-3']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor({
            filebrowserUploadUrl: "{{route('editor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    });
</script>
@endsection
