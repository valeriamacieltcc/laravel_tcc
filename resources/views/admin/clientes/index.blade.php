<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Cliente | Admin</title>

    <!-- FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Parisienne&family=Playfair+Display+SC&display=swap"
        rel="stylesheet"
    >

    <!-- BOOTSTRAP -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- CSS -->
    <link
        rel="stylesheet"
        href="{{ asset('css/admin.css') }}"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >

</head>

<body class="admin-clientes-body">

    {{-- HEADER DO ADMIN --}}
    @include('admin._partials_admin.header_admin')


    <main class="admin-clientes">

        <div class="admin-clientes-container">

            {{-- TOPO --}}
            <div class="admin-clientes-topo">

                <div>
                    <h1 class="admin-clientes-titulo">
                        Clientes
                    </h1>

                    <p class="admin-clientes-subtitulo">
                        Gerenciamento dos clientes cadastrados
                    </p>
                </div>

            </div>


            {{-- TABELA --}}
            <div class="admin-clientes-tabela-wrapper">

                @if($clientes->count() > 0)

                    <table class="admin-clientes-tabela">

                        <thead>

                            <tr>

                                <th>Foto</th>

                                <th>Nome</th>

                                <th>Email</th>

                                <th>Telefone</th>

                                <th>Ações</th>

                            </tr>

                        </thead>


                        <tbody>

                            @foreach($clientes as $cliente)

                                <tr>

                                    {{-- FOTO --}}
                                    <td>

                                        @if($cliente->foto_perfil)

                                            <img
                                                src="{{ asset('storage/' . $cliente->foto_perfil) }}"
                                                class="admin-clientes-imagem"
                                                alt="Foto de {{ $cliente->user->name }}"
                                            >

                                        @else

                                            <span class="admin-clientes-sem-imagem">
                                                Sem foto
                                            </span>

                                        @endif

                                    </td>


                                    {{-- NOME --}}
                                    <td>
                                        {{ $cliente->user->name }}
                                    </td>


                                    {{-- EMAIL --}}
                                    <td>
                                        {{ $cliente->user->email }}
                                    </td>


                                    {{-- TELEFONE --}}
                                    <td>
                                        {{ $cliente->telefone ?? '-' }}
                                    </td>


                                    {{-- AÇÃO --}}
                                    <td>

                                        <div class="admin-clientes-acoes">

                                            <a
                                                href="{{ route('admin.clientes.show', $cliente) }}"
                                                class="admin-clientes-botao"
                                            >
                                                Ver cliente
                                            </a>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                @else

                    <div class="admin-clientes-vazio">
                        Nenhum cliente cadastrado.
                    </div>

                @endif

            </div>
            {{-- PAGINAÇÃO --}}
@if($clientes->hasPages())

    <div class="admin-paginacao">
        {{ $clientes->links() }}
    </div>

@endif
        </div>

    </main>


    {{-- FOOTER DO ADMIN --}}
    @include('admin._partials_admin.footer_admin')


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>