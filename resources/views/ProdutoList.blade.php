@extends('base.app')
@section('conteudo')
@section('tituloPagina', 'Produto Formulário')
<h1>Controle de Estoque</h1><br>
<div class="search">
    <form action="ProdutoList.php" method="post">
        <select name="campo">
            <option value="id">Id</option>
            <option value="nome">Nome</option>
        </select>
        <input type="text" name="valor" />
        <input type="submit" value="Buscar" />
        <a class="btn btn-success" href='{{ action('App\Http\Controllers\ProdutoController@create') }}'><i
                class="fa-solid fa-plus"></i> Cadastrar</a>



    </form>
</div>
<div class="card">
    <div id="myDIV">
        <table>
            <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Tamanho</th>
                <th>imagem</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>

            @foreach ($produtos as $item)
                @php
                    $nome_imagem = !empty($item->imagem) ? $item->imagem : 'sem_imagem.jpg';
                @endphp
                <tr>
                    <td scope='row'>{{ $item->id }}</td>
                    <td>{{ $item->nome }}</td>
                    <td>{{ $item->preco }}</td>
                    <td>{{ $item->quantidade }}</td>
                    <td>{{ $item->tamanho }}</td>

                    <td><img src="/storage/{{ $nome_imagem }}" width="1px" height="1px"
                            style="width:100px; height:100px; margin-top:1px" /> </td>
                    <td><a href="{{ action('App\Http\Controllers\ProdutoController@edit', $item->id) }}"><i
                                class='fa-solid fa-pen-to-square' style='color:orange;'></i></a></td>
                    <td>
                        <form method="POST"
                            action="{{ action('App\Http\Controllers\ProdutoController@destroy', $item->id) }}">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <button type="submit" onclick='return confirm("Deseja Excluir?")' style='all: unset;'><i
                                    class='fa-solid fa-trash' style='color:red;'></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
