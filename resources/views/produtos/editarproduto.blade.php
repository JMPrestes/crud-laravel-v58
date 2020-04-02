@extends('layouts.app', ["current" => "produtos"])

@section('body')
    
    <div class="card-border">
        <div class="card-body">
            <form action="/produtos/{{$prod->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto"
                            id="nomeProduto" value="{{$prod->nome}}" placeholder="Insira nome aqui">
                    <label for="qtdProduto">Quantidade em Estoque</label>
                    <input type="number" class="form-control" name="qtdProduto"
                            id="qtdProduto" value={{$prod->estoque}} min=0 placeholder="0">
                    <label for="prcProduto">Preço do Produto</label>
                    <input type="number" class="form-control" name="prcProduto"
                            id="prcProduto" step=0.01 value={{$prod->preco}} min=0.00 placeholder="0.00"> 
                    <label for="catProduto">Categoria do Produto</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        </div>
                        <select class="custom-select" name="catProduto" id="catProduto" required>

                            @foreach ($cats as $cat)

                                @if ($prod->categoria_id == $cat->id)
                                    <option value="{{$cat->id}}" selected>{{$cat->nome}}</option>
                                @else
                                    <option value="{{$cat->id}}">{{$cat->nome}}</option>
                                @endif

                            @endforeach
                            
                        </select>
                    </div> 
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            </form>
        </div>
    </div>
@endsection