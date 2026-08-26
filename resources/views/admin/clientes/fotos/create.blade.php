<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Adicionar Fotos | Valéria Maciel Estética</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>



<main class="container py-5">


    <h1 class="mb-3">
        Adicionar Fotos
    </h1>


    <h4 class="mb-4">
        Cliente:
        {{ $cliente->user->name ?? 'Cliente' }}
    </h4>


    @if($errors->any())

        <div class="alert alert-danger">

            @foreach($errors->all() as $erro)

                <p class="mb-1">
                    {{ $erro }}
                </p>

            @endforeach

        </div>

    @endif


    <form
        method="POST"
        action="{{ route('admin.clientes.fotos.store', $cliente) }}"
        enctype="multipart/form-data"
    >

        @csrf


        <div class="mb-3">

            <label class="form-label">
                Procedimento
            </label>

            <input
                type="text"
                name="procedimento"
                class="form-control"
                value="{{ old('procedimento') }}"
                placeholder="Ex: Limpeza de pele"
            >

        </div>


        <div class="mb-3">

            <label class="form-label">
                Data
            </label>

            <input
                type="date"
                name="data"
                class="form-control"
                value="{{ old('data') }}"
            >

        </div>


        <div class="row">


            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Foto Antes
                </label>

                <input
                    type="file"
                    name="foto_antes"
                    class="form-control"
                    accept="image/*"
                >

            </div>


            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Foto Depois
                </label>

                <input
                    type="file"
                    name="foto_depois"
                    class="form-control"
                    accept="image/*"
                >

            </div>


        </div>


        <div class="mb-3">

            <label class="form-label">
                Observação
            </label>

            <textarea
                name="observacao"
                class="form-control"
                rows="4"
                placeholder="Ex: Resultado após 3 sessões..."
            >{{ old('observacao') }}</textarea>

        </div>


        <button
            type="submit"
            class="btn btn-success"
        >
            Salvar Fotos
        </button>


        <a
            href="{{ route('admin.clientes.show', $cliente) }}"
            class="btn btn-secondary"
        >
            Voltar
        </a>


    </form>


</main>


@include('_partials.footer')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>