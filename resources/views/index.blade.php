<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina iniciaL</title>
    
</head>
<body>
        @if(session()->has('msg'))
    <div>
        {{session()->get('msg')}}
    </div>
    @endif
    <h1>Estou na index!</h1>
    <table>
        
        <tr>
            <th>Nome</th>
            <th>Descricao</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        @foreach($dados as $dado)
        <tr>
            <td>{{$dado->nome}}</td>
            <td>{{$dado->descricao}}</td>
            <td>{{$dado->email}}</td>
            <td><a href="{{route('editar',$dado->id)}}" button type="button">Editar</a><a href="{{route('delete',$dado->id)}}" button type="button">Excluir</a>
        </tr>
        
        @endforeach

        
    </table>
    <form action="{{route('cadastro')}}">
        <button type="submit">Cadastro</button>
    </form>
    
</body>
</html>