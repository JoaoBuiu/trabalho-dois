<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="shortcut icon" href="./public/icons/LogoPronta.svg" type="image/x-icon" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editar produto | Bom Look</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet" />
    <script src="./src/js/slider.js" defer></script>
    <script src="./src/js/snackbar.js" defer></script>

    <script src="https://kit.fontawesome.com/b5ad8d5d3f.js" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="{{ asset('css/globalStyle.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/exprodutoedit.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/snackbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/indexadm.css') }}" />
</head>

@php
    if (!empty($produto->id)) {
        $route = route('produto.update', $produto->id);
    } else {
        $route = route('produto.store');
    }
@endphp

<body class="layout">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

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
            </nav> <a href="index.php">
                <img src="./public/icons/LogoPronta.svg" alt="Bom Look Logo" class="logo-adm" /></a>
        </div>
    </header>
    <div class="content">
        <div class="container">
        <form action='{{ $route }}' method="POST" enctype="multipart/form-data">
            <br>
            @php
                $nome_imagem = !empty($produto->imagem) ? $produto->imagem : 'sem_imagem.jpg';
            @endphp


            <br>
            <img class="img-thumbnail" src="/storage/{{ $nome_imagem }}" style="width:500px; height:500px; margin-top:10px" /><br>
            <input type="file" class="imgadd" name="imagem" style="margin-top:10px; margin-left: 80px; margin-right:200px; " />
            <br>

        </div>

            @csrf
            @if (!empty($produto->id))
                @method('PUT')
            @endif

            <div class="aside">
                <input type="hidden" name="id"
                    value="@if (!empty(old('id'))) {{ old('id') }} @elseif(!empty($produto->id)) {{ $produto->id }} @else {{ '' }} @endif" /><br>

                <h4>Nome</h4>
                <input type="text" class="editrs_input" name="nome" placeholder="Nome produto.."
                    value="@if (!empty(old('nome'))) {{ old('nome') }} @elseif(!empty($produto->nome)) {{ $produto->nome }} @else {{ '' }} @endif" /><br>

                <h4>Preço</h4>
                <input type="text" class="editrs_input" name="preco" placeholder="R$"
                    value="@if (!empty(old('nome'))) {{ old('nome') }} @elseif(!empty($produto->preco)) {{ $produto->preco }} @else {{ '' }} @endif" /><br>

                <h4>Quantidade</h4>
                <input type="text" class="editrs_input" name="quantidade"
                    value="@if (!empty(old('nome'))) {{ old('nome') }} @elseif(!empty($produto->quantidade)) {{ $produto->quantidade }} @else {{ '' }} @endif" /><br>

                <h4>Adicionar Tamanho</h4>
                <input type="text" class="editrs_input" name="tamanho" placeholder="P, M, G, GG"
                    value="@if (!empty(old('nome'))) {{ old('nome') }} @elseif(!empty($produto->tamanho)) {{ $produto->tamanho }} @else {{ '' }} @endif" /><br>


                <h3>Descrição</h3>
                <input type="text" class="editdesc_input" name="descricao" placeholder="Descrição..."
                    value="@if (!empty(old('nome'))) {{ old('nome') }} @elseif(!empty($produto->descricao)) {{ $produto->descricao }} @else {{ '' }} @endif" />
                <br>
                <br>
                <button class="btn btn-success" type="submit">
                    <i class="fa-solid fa-save"></i> Salvar
                </button>
                <a href='{{ route('produto.index') }}' class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>
                    Voltar</a>

            </div>

        </form>


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
