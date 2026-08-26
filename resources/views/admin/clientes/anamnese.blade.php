<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Anamnese | Valéria Maciel Estética</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>


<main class="container py-5">

    <h1 class="mb-4">
        Ficha de Anamnese
    </h1>

    <h4 class="mb-4">
        Cliente: {{ $cliente->user->name ?? 'Cliente' }}
    </h4>

    <form
        method="POST"
        action="{{ route('admin.clientes.anamnese.update', $cliente) }}"
    >

        @csrf
        @method('PUT')


        <div class="mb-3">

            <label class="form-label">
                Alergias
            </label>

            <textarea
                name="alergias"
                class="form-control"
                rows="3"
            >{{ old('alergias', $anamnese->alergias ?? '') }}</textarea>

        </div>


        <div class="mb-3">

            <label class="form-label">
                Medicamentos em uso
            </label>

            <textarea
                name="medicamentos"
                class="form-control"
                rows="3"
            >{{ old('medicamentos', $anamnese->medicamentos ?? '') }}</textarea>

        </div>


        <div class="mb-3">

            <label class="form-label">
                Doenças
            </label>

            <textarea
                name="doencas"
                class="form-control"
                rows="3"
            >{{ old('doencas', $anamnese->doencas ?? '') }}</textarea>

        </div>


        <div class="mb-3">

            <label class="form-label">
                Cirurgias
            </label>

            <textarea
                name="cirurgias"
                class="form-control"
                rows="3"
            >{{ old('cirurgias', $anamnese->cirurgias ?? '') }}</textarea>

        </div>


        <div class="form-check mb-3">

            <input
                class="form-check-input"
                type="checkbox"
                name="gestante"
                value="1"
                id="gestante"
                {{ old('gestante', $anamnese->gestante ?? false) ? 'checked' : '' }}
            >

            <label
                class="form-check-label"
                for="gestante"
            >
                Gestante
            </label>

        </div>


        <div class="form-check mb-3">

            <input
                class="form-check-input"
                type="checkbox"
                name="pressao_alta"
                value="1"
                id="pressao_alta"
                {{ old('pressao_alta', $anamnese->pressao_alta ?? false) ? 'checked' : '' }}
            >

            <label
                class="form-check-label"
                for="pressao_alta"
            >
                Pressão alta
            </label>

        </div>


        <div class="form-check mb-3">

            <input
                class="form-check-input"
                type="checkbox"
                name="diabetes"
                value="1"
                id="diabetes"
                {{ old('diabetes', $anamnese->diabetes ?? false) ? 'checked' : '' }}
            >

            <label
                class="form-check-label"
                for="diabetes"
            >
                Diabetes
            </label>

        </div>


        <div class="mb-3">

            <label class="form-label">
                Observações
            </label>

            <textarea
                name="observacoes"
                class="form-control"
                rows="5"
            >{{ old('observacoes', $anamnese->observacoes ?? '') }}</textarea>

        </div>


        <button
            type="submit"
            class="btn btn-success"
        >
            Salvar Anamnese
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