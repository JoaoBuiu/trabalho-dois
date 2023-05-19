<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <link
      rel="shortcut icon"
      href="./public/icons/LogoPronta.svg"
      type="image/x-icon"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Estoque | Bom Look</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="./src/js/slider.js" defer></script>
    <script src="./src/js/snackbar.js" defer></script>

    <script
      src="https://kit.fontawesome.com/b5ad8d5d3f.js"
      crossorigin="anonymous"
      defer
    ></script>
    <link rel="stylesheet" href="{{asset('css/globalStyle.css')}}" />
    <link rel="stylesheet" href="{{asset('css/layout.css')}}" />
    <link rel="stylesheet" href="{{asset('css/header.css')}}" />
    <link rel="stylesheet" href="{{asset('css/exprodutoedit.css')}}" />
    <link rel="stylesheet" href="{{asset('css/snackbar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/indexadm.css')}}" />
  </head>
  <style>
    #edit {
      width: 3rem;
      transition: transform 0.3s;
    }
    #edit:hover {
      transform: scale(1.1);
    }
    #edit:active {
      transform: scale(1);
    }
    #excluir {
      width: 3rem;
      transition: transform 0.3s;
    }
    #excluir:hover {
      transform: scale(1.1);
    }
    #excluir:active {
      transform: scale(0.8);
    }
    #add {
      width: 2.6rem;
      transition: transform 0.3s;
    }
    #dgrey:hover {
      cursor: pointer;
      background-color: #4c4c4e;
    }
    #add:hover {
      transform: scale(1.1);
    }
    #add:active {
      transform: scale(0.8);
    }
    #dgrey {
      background-color: #3b3b3f;
    }
    .content {
      align-items: center;
      justify-content: center;
      display: flex;
      flex-direction: column;
      padding-top: 7rem;
    }
    table {
      width: 100%;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
      text-align: center;
      border-collapse: collapse;
      cursor: default;
      border-radius: 0.3em;
      border: 1px solid #505053;
      text-indent: initial;
      border-spacing: 2px;
    }
    th {
      padding-top: 0.1em;
      padding-bottom: 0.1em;
      background-color: #3b3b3f;
      color: #fafafa;
      padding-left: 2em;
      padding-right: 2em;
      display: table-cell;
      vertical-align: inherit;
      font-weight: bold;
      text-align: -internal-center;
      border: 1px solid #505053;
    }
    td {
      padding: 0.5rem 2rem 0.5rem 2rem;
      display: table-cell;
      vertical-align: inherit;
      border: 1px solid #505053;
    }
    h1 {
    color: var(--text);
    font-size: 3.5rem;
    font-weight: 500;
    margin-right: 2em;
    margin-bottom: 1rem;
}
    tr:hover {
      background-color: #d6d4d49f;
    }
    input {
    width: 20rem;
    padding: 0.3em;
    background-color: rgb(230, 227, 227);
    border-radius: 0.3em 0 0 0.3em;
    box-shadow: 0 0 0.5em 0 rgb(0 0 0 / 10%);
    transition: transform 0.2s;
    font-family: "Lato", sans-serif;
    font-size: 13px;
    border: 1px solid #f1f1f1;
    font-weight: 500;
    border: 1px solid var(--text);
}
select:not(:-internal-list-box) {
    overflow: visible !important;
}
select {
    margin-left: 2em;
    width: 12em;
    padding: 0.32em;
    background-color: rgb(230, 227, 227);
    border-radius: 0.3em;
    box-shadow: 0 0 0.5em 0 rgb(0 0 0 / 10%);
    transition: transform 0.2s;
    font-family: "Lato", sansserif;
    font-size: 12px;
    font-weight: 500;
    border: 1px solid var(--text);
}
select:hover {
  outline: none;
  border: 1px solid var(--text);
}

select:focus {
  outline: none;
}
.search {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 1.5em;
}
#search-ico {
  width: 1.5rem;
}
#search-button {
    border: 1px solid var(--text);
    background-color: rgb(230, 227, 227);
    border-radius: 0 0.3em 0.3em 0;
    padding: 0.12em;
    margin: 0em;
}
  </style>

  <body class="layout">
    <header>
      <div class="header_adm">
      <a href="./FornecedorList.php">Fornecedores</a><br>
        <a href="./ProdutoList.php">Estoque</a><br>
        <a href="./SuporteList.php">Suporte</a><br>
        <a href="./UsuarioList.php">Usuarios</a><br>
      </div>
      <div>
        <nav>
          <div class="dropdown3">
        <a href="adm.html"><img src="./public/icons/adm.svg"><img> </a>

      <div class="dropdown-content3">
          <a href="UsuarioForm.php">Cadastrar</a>
        </div>
      </div>
  </nav>  <a href="index.php">
          <img
            src="./public/icons/LogoPronta.svg"
            alt="Bom Look Logo"
            class="logo-adm"
        /></a>
      </div>
    </header>
    <div class="content">
    <h1>Controle de Estoque</h1><br>
      <div class="search">
        <form action="ProdutoList.php" method="post">
        <select name="campo">
            <option value="id">Id</option>
            <option value="nome">Nome</option>
        </select>
        <input type="text" name="valor"/>
        <input type="submit" value="Buscar"/>
        <a class="btn btn-success" href='{{ action('App\Http\Controllers\ProdutoController@create') }}'><i
            class="fa-solid fa-plus"></i> Cadastrar</a>



    </form>
      </div>
      <div class="card">
        <div id="myDIV">
          <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>imagem</th>
                    <th>Editar</th>
                    <th>Excluir</th>
            </tr>
            </thead>
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

                        <td><img src="/storage/{{ $nome_imagem }}" width="100px" class="img-thumbnail" /> </td>
                        <td><a href="{{ action('App\Http\Controllers\ProdutoController@edit', $item->id) }}"><i
                                    class='fa-solid fa-pen-to-square' style='color:orange;'></i></a></td>
                        <td>
                            <form method="POST"
                                action="{{ action('App\Http\Controllers\ProdutoController@destroy', $item->id) }}">
                                <input type="hidden" name="_method" value="DELETE">
                                @csrf
                                <button type="submit" onclick='return confirm("Deseja Excluir?")'
                                    style='all: unset;'><i class='fa-solid fa-trash' style='color:red;'></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
          </table>
        </div>
      </div>
    </div>
    <footer>
      <div>
        <i></i>
        <i></i>
        <i></i>
      </div>
      <div>
        <p>Alunos: Bernardo Augusto Picoli e João Vitor de Carvalho</p>
      </div>
      <div></div>
    </footer>
    <div id="snackbar"></div>
  </body>
</html>
