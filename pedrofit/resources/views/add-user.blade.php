<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Adicionar Usuario</div>
            @if (Session::has('falha'))


               <span class="alert alert-danger p-2">{{ Session::get('falha') }}</span> 
            
                
            @endif
            <div class="card-body">
                <form action="{{ route('AddUser') }}" method="post">
                    @csrf
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nome Completo</label>
                    <input type="text" name="nome_completo" value="{{ old('nome_completo') }}" class="form-control" id="formGroupExampleInput" placeholder="nome completo por favor">
                    @error('nome_completo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Nome do Livro</label>
                        <input type="livro" name="livro"  value="{{ old('livro') }}" class="form-control" id="formGroupExampleInput2" placeholder="livro por favor">
                        @error('livro')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Ano de Publicação</label>
                    <input type="number" name="ano_de_publicacao"  value="{{ old('ano_de_publicacao') }}" class="form-control" id="formGroupExampleInput2" placeholder="editora por favor">
                    @error('ano_de_publicacao')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">editora</label>
                    <input type="editora" name="editora"  value="{{ old('editora') }}" class="form-control" id="formGroupExampleInput2" placeholder="ano de publicação  por favor">
                    @error('editora')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Autor</label>
                    <input type="text" name="autor"  value="{{ old('autor') }}" class="form-control" id="formGroupExampleInput2" placeholder="autor por favor">
                    @error('autor')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
</body>
</html>