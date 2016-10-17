 @extends('template.temp')

@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">                
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('produto.index') }}">produtos</a></li>
                    <li class="active">Adicionar</li>
                </ol>

                <div class="panel-body">                                    
                    <form action="{{ route('produto.salvar') }}" method="post">
                        {{ csrf_field() }}
                        
                         <div class="form-group {{ $errors->has('descricao') ? 'has-error' : '' }}">
                            <label for="descricao">Descrição</label>
                            <input type="text" name="descricao" class="form-control" placeholder="Descrição do produto">
                            @if($errors->has('descricao'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('descricao') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('preco') ? 'has-error' : '' }}">
                            <label for="preco">Preço</label>
                            <input type="text" name="preco" class="form-control" placeholder="preco do produto">
                            @if($errors->has('preco'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('preco') }}</strong>
                                </span>
                            @endif
                        </div>
                       
                        <button class="btn btn-info">Salvar</button>
                        
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection