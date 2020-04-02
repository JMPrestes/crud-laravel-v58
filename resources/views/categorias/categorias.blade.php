@extends('layouts.app', ["current" => "categorias"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Categorias</h5>

            @if (count($cats) > 0)

                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Categoria</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($cats as $cat)

                            <form action="/categorias/deletar/{{$cat->id}}" method="post">
                                @method('DELETE')
                                @csrf
                                <tr>
                                    <td>{{ $cat->id }}</td>
                                    <td>{{ $cat->nome }}</td>
                                    <td>
                                        <a href="/categorias/editar/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>
                                        <input type="submit" class="btn btn-sm btn-danger" value="Apagar">
                                    </td>
                                </tr>
                            </form>
        
                        @endforeach

                    </tbody>
                </table>
                
            @else

                <p>Não há categorias disponíveis</p>

            @endif

            <div class="card-footer">
                <a href="/categorias/novo" class="btn btn-sm btn-primary" role="button">Criar Categoria</a>
            </div>

        </div>
    </div>

@endsection