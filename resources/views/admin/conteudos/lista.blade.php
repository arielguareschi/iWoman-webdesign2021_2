@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lista de Conteúdos
                    <a href="{{ url('conteudos/create') }}" class="float-right btn btn-success">
                        <i class="fas fa-plus-circle"></i>
                        Novo Conteúdo
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-sm table-hover">
                        <thead>
                            <tr>
                                <th>@sortablelink('id')</th>
                                <th>@sortablelink('titulo')</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($conteudos as $conteudo)
                                <tr>
                                    <td>{{ $conteudo->id }}</td>
                                    <td>{{ $conteudo->titulo }}</td>
                                    <td>
                                        <a href="{{ url('conteudos/'.$conteudo->id) }}" class="btn btn-primary">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        {!! Form::open(['method'=>'DELETE', 'url'=>'conteudos/' . $conteudo->id, 'style'=>'display:inline']) !!}
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash-alt"></i> Excluir
                                        </button>
                                        {!! Form::close()  !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination justify-content-center">
                        {{ $conteudos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
