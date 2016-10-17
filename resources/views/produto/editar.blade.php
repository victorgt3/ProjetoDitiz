@extends('template.temp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">                
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('produto.index') }}">produtos</a></li>
                    <li class="active">Editar</li>
                </ol>

                <div class="panel-body">                                    
                    <form action="{{ route('produto.atualizar',$produto->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                         <div class="form-group {{ $errors->has('descricao') ? 'has-error' : '' }}">
                            <label for="descricao">Descrição</label>
                            <input type="text" name="descricao" class="form-control" placeholder="Descrição do produto" value="{{$produto->descricao}}">
                            @if($errors->has('descricao'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('descricao') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('preco') ? 'has-error' : '' }}">
                            <label for="preco">Preço</label>
                            <input type="text" name="preco" class="form-control" placeholder="preco do produto" value="{{$produto->preco}}">
                            @if($errors->has('preco'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('preco') }}</strong>
                                </span>
                            @endif
                        </div>
                       
                        <button class="btn btn-info">Atualizar</button>
                        
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div> 
 @endsection