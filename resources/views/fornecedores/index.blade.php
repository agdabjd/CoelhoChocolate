@extends('standard')

@section('title')
 Fornecedores
@stop

@section('content')
    <div class="container mt-4">
        <h1 class="display-4 mb-4">Fornecedores</h1>

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

        @if (session('error'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row mb-4">
            <div class="col-md-8">
                <h2>Fornecedores Cadastrados</h2>
                @if ($fornecedores->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>CNPJ</th>
                                    <th>Cidade</th>
                                    <th>Estado</th>
                                    <th>Chocolates</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fornecedores as $fornecedor)
                                    <tr>
                                        <td>{{ $fornecedor->id }}</td>
                                        <td>{{ $fornecedor->nome }}</td>
                                        <td>{{ $fornecedor->cnpj }}</td>
                                        <td>{{ $fornecedor->cidade }}</td>
                                        <td>{{ strtoupper($fornecedor->estado) }}</td>
                                        <td>
                                            <span class="badge {{ $fornecedor->chocolates_count > 0 ? 'bg-danger' : 'bg-success' }}">
                                                {{ $fornecedor->chocolates_count }}
                                            </span>
                                        </td>
                                        <td>
                                            @if ($fornecedor->chocolates_count == 0)
                                                <form action="{{ route('fornecedores.destroy', $fornecedor->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja deletar este fornecedor?');">
                                                        Deletar
                                                    </button>
                                                </form>
                                            @else
                                                <button type="button" class="btn btn-sm btn-danger" disabled title="Fornecedor possui chocolates cadastrados">
                                                    Deletar
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-dark">
                        Nenhum fornecedor cadastrado ainda.
                    </div>
                @endif
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Cadastrar Novo Fornecedor</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('fornecedores.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" placeholder="Ex: Chocolates Finos LTDA" value="{{ old('nome') }}" required>
                                @error('nome')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="cnpj" class="form-label">CNPJ</label>
                                <input type="number" class="form-control @error('cnpj') is-invalid @enderror" id="cnpj" name="cnpj" placeholder="Ex: 12345678901234" value="{{ old('cnpj') }}" required>
                                @error('cnpj')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control @error('cidade') is-invalid @enderror" id="cidade" name="cidade" placeholder="Ex: São Paulo" value="{{ old('cidade') }}" required>
                                @error('cidade')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="estado" class="form-label">Estado</label>
                                <input type="text" class="form-control @error('estado') is-invalid @enderror" id="estado" name="estado" placeholder="Ex: SP" maxlength="2" value="{{ old('estado') }}" required>
                                @error('estado')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-dark w-100">
                                Cadastrar Fornecedor
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop