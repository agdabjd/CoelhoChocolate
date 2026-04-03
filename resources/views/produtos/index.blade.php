@extends('standard')

@section('title')
 Produtos
@stop

@section('content')
    <div class="container mt-4">
        <h1 class="display-4 mb-4">Chocolates</h1>

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Erros no formulário:</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row mb-4">
            <div class="col-md-8">
                <h2>Chocolates Cadastrados</h2>
                @if ($chocolates->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Tipo</th>
                                    <th>Gramas</th>
                                    <th>Fornecedor</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chocolates as $chocolate)
                                    <tr>
                                        <td>{{ $chocolate->id }}</td>
                                        <td>{{ $chocolate->nome }}</td>
                                        <td>{{ $chocolate->tipo }}</td>
                                        <td>{{ $chocolate->gramas }}g</td>
                                        <td>{{ $chocolate->fornecedor->nome ?? 'N/A' }}</td>
                                        <td>
                                            <form action="{{ route('produtos.destroy', $chocolate->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-dark" onclick="return confirm('Tem certeza que deseja deletar este chocolate?');">
                                                    Deletar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-dark">
                        Nenhum chocolate cadastrado ainda.
                    </div>
                @endif
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Cadastrar Novo Chocolate</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('produtos.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" placeholder="Ex: Chocolate ao Leite" value="{{ old('nome') }}" required>
                                @error('nome')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo</label>
                                <input type="text" class="form-control @error('tipo') is-invalid @enderror" id="tipo" name="tipo" placeholder="Ex: Ao Leite, Amargo, Branco" value="{{ old('tipo') }}" required>
                                @error('tipo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="gramas" class="form-label">Gramas</label>
                                <input type="number" class="form-control @error('gramas') is-invalid @enderror" id="gramas" name="gramas" placeholder="Ex: 100" value="{{ old('gramas') }}" required min="1">
                                @error('gramas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="fornecedor_id" class="form-label">Fornecedor</label>
                                <select class="form-select @error('fornecedor_id') is-invalid @enderror" id="fornecedor_id" name="fornecedor_id" required>
                                    <option value="">Selecione um fornecedor</option>
                                    @foreach ($fornecedores as $fornecedor)
                                        <option value="{{ $fornecedor->id }}" {{ old('fornecedor_id') == $fornecedor->id ? 'selected' : '' }}>
                                            {{ $fornecedor->nome }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('fornecedor_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-dark w-100">
                                Cadastrar Chocolate
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop