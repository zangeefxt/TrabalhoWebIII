<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <a href="{{ url('auth/google') }}" class="btn btn-primary">Login com Google</a>

    
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Lista de Clientes</h2>
        
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('clientes.create') }}" class="btn btn-primary">Cadastrar Novo Cliente</a>
        </div>


        <div class="form-group">
            <input type="text" id="searchInput" class="form-control" placeholder="Filtrar por Nome, Número ou CPF">
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="clientesTable">
                <thead class="thead-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Número</th>
                        <th>CPF</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->numero }}</td>
                        <td>{{ $cliente->cpf }}</td>
                        <td>
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Função de filtro
        document.getElementById('searchInput').addEventListener('keyup', function() {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll('#clientesTable tbody tr');

            rows.forEach(row => {
                let name = row.cells[0].textContent.toLowerCase();
                let number = row.cells[1].textContent.toLowerCase();
                let cpf = row.cells[2].textContent.toLowerCase();

                // Verifica se o filtro está contido no nome, número ou CPF
                if (name.includes(filter) || number.includes(filter) || cpf.includes(filter)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
