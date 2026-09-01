<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Clientes | Valéria Maciel Estética
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/admin.css') }}"
    >

</head>


<body>



<div class="admin-clientes">

    <h1>Clientes</h1>

    <div class="lista-clientes">

        @if($clientes->count() > 0)

            <table class="tabela-clientes">

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

                            <td>
                                @if($cliente->foto_perfil)
                                    <img
                                        src="{{ asset('storage/' . $cliente->foto_perfil) }}"
                                        class="foto-cliente-admin"
                                        alt="Foto do cliente"
                                    >
                                @else
                                    Sem foto
                                @endif
                            </td>

                            <td>
                                {{ $cliente->user->name }}
                            </td>

                            <td>
                                {{ $cliente->user->email }}
                            </td>

                            <td>
                                {{ $cliente->telefone ?? '-' }}
                            </td>

                            <td>
                                <a
                                    href="{{ route('admin.clientes.show', $cliente) }}"
                                    class="btn-ver-cliente"
                                >
                                    Ver cliente
                                </a>
                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        @else

            <p class="sem-clientes">
                Nenhum cliente cadastrado.
            </p>

        @endif

    </div>

</div>

</main>


@include('_partials.footer')


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>