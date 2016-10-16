@extends('template.temp')

@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <ol class="breadcrumb panel-heading">                    
                    <li class="active">produtos</li>
                </ol>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p>
                        <a class="btn btn-info" href="{{ route('produto.adicionar') }}">Adicinar</a>
                    </p>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Descrição</th>
                                <th>Preço</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produtos as $produto)

                            <tr>
                                <th scope="row">{{ $produto->id }}</th>
                                <td>{{ $produto->descricao }}</td>
                                <td>{{ $produto->preco }}</td>
                                <td>
                                    <a class="btn btn-default" href="{{route('produto.editar',$produto->id)}}">Editar</a>
                                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse registro?') ? window.location.href='{{route('produto.deletar',$produto->id)}}' : false)">Deletar</a>
                                </td>
                            </tr>                            

                            @endforeach
                            
                        </tbody>
                        
                    </table>

                    <div align="center">
                        {!! $produtos->links() !!}
                    </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    @endsection