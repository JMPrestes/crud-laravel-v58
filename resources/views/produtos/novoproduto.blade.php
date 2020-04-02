@extends('layouts.app', ["current" => "produtos"])

@section('body')
    
    <div class="card-border">
        <div class="card-body">
            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto"
                            id="nomeProduto" placeholder="Insira nome aqui">
                    <label for="qtdProduto">Quantidade em Estoque</label>
                    <input type="number" class="form-control" name="qtdProduto"
                            id="qtdProduto" value=0 min=0 placeholder="0">
                    <label for="prcProduto">Preço do Produto</label>
                    <input type="number" class="form-control" name="prcProduto"
                            id="prcProduto" step=0.01 value=0.00 min=0.00 placeholder="0.00"> 
                    <label for="catProduto">Categoria do Produto</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        </div>
                        <select class="custom-select" name="catProduto" id="catProduto" required>
                            <option selected>Opções...</option>

                            @foreach ($cats as $cat)
                                <option value="{{$cat->id}}">{{$cat->nome}}</option>
                            @endforeach
                            
                        </select>
                    </div> 
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            </form>
        </div>
    </div>
@endsection