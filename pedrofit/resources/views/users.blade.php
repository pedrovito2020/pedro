<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
      <div class="container">
        <div class="card">
            <div class="card-header">
                Laravel 11 CRUD system
                <a href="/add/user" class="btn btn-sucess btn-sm float-end">Adicionar</a>
      </div>
      @if (Session::has('sucesso'))


               <span class="alert alert-success p-2">{{ Session::get('sucesso') }}</span> 
            
                
            @endif

            @if (Session::has('falha'))


            <span class="alert alert-danger p-2">{{ Session::get('falha') }}</span> 
         
             
         @endif
      <div class="card-body">
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <th>S/N</th>
                <th>Nome completo</th>
                <th>Livro</th>
                <th>Ano de Publicaçao</th>
                <th>editora</th>
                <th>autor</th>
            </thead>
            <tbody>
                 @if (count($all_users) > 0)
                    @foreach ($all_users as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nome_completo }}</td>
                            <td>{{ $item->livro }}</td>
                            <td>{{ $item->ano_de_publicacao }}</td>
                            <td>{{ $item->editora }}</td>
                            <td>{{ $item->autor }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->update_at }}</td>
                            <td><a href="/edit/{{ $item->id }}" class="btn btn bg-primary btn-sm">editar</a></td>
                            <td><a href="/delete/{{ $item->id }}" class="btn btn-danger btn-sm">apagar</a></td>
                        </tr>
                        
                    @endforeach
                     
                 @else
                     <tr>
                        <td>nenhum usuario encontrado</td>
                     </tr>
                 @endif

            </tbody>

        </table>
      </div>
</body>
</html>