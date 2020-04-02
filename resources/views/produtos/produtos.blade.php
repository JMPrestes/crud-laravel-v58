@extends('layouts.app', ["current" => "produtos"])

@section('body')

    <div class="card border">
        
        <div class="card-body">
            <h5 class="card-title">Cadastro de Produtos</h5>

            @if (count($prods) > 0)

                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Produto</th>
                            <th>Estoque</th>
                            <th>Preço</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($prods as $prod)

                            <tr>
                                <form action="/produtos/deletar/{{$prod->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td>{{ $prod->id }}</td>
                                    <td>{{ $prod->nome }}</td>
                                    <td>{{ $prod->estoque }}</td>
                                    <td>R$ {{ number_format($prod->preco, 2) }}</td>
                                    <td>{{ $cats[$list->search($prod->categoria_id)]['nome'] }}</td>

                                    <td>
                                        <a href="/produtos/editar/{{$prod->id}}" class="btn btn-sm btn-primary">Editar</a>
                                        <input type="submit" value="Apagar" class="btn btn-sm btn-danger"> 
                                    </td>
                                </form>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
                
            @else

                <p>Não há categorias disponíveis</p>

            @endif

            <div class="card-footer">
                <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Adicionar Produtos</a>
            </div>

        </div>
    </div>

@endsection