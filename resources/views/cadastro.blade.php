<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Cadastro</title>
</head>
<body>
    @if(session()->has('msg'))
    <div>
        {{session()->get('msg')}}
    </div>
    @endif
    <form method='post' action="{{isset($dado->id) ? route('update',$dado->id) : route('cadastrar')}}">
        @csrf
        @php
            if(isset($dado->id)){
                echo "@method('put')";
            }
        @endphp
        <input type="text" hidden id="id" name="id" value=""{{isset($dado->id) ? $dado->id : ''}}>
        Nome: <input type="text" id='nome' name='nome' value='{{isset($dado->nome) ? $dado->nome : ''}}'><br>
        Descrição: <input type="text" id='descricao' name='descricao' value='{{isset($dado->descricao) ? $dado->descricao : ''}}'><br>
        Email: <input type="text" id='email' name='email' value='{{isset($dado->email) ? $dado->email : ''}}'><br>
        <button type="submit">SALVAR</button>
        
    </form>
    
</body>
</html>