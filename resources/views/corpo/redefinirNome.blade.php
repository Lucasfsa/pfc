@section('pageTitle', 'Redefinir Nome -')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/configuracao.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/nome.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<h3 class="text-center mt-4">Configurações</h3>

<div id="buttonmenu" >

    <div class="menuedit" align="center" >
        <a class="btn buttonstyle" href="redefinir-senha"> Redefinir Senha</a>
        <a class="btn buttonstyle" href="redefinir-nome"> Redefinir Nome </a>
        <a class="btn buttonstyle" href="desativar-conta"> Desativar Conta</a>
    </div>

    <div  id="subcorpo">
        
        <form method="POST" action="">

            <p align="center">Redefinir Nome</p>

            <div class="form-group">

                <label>Digite o novo nome</label>
                <input class="form-control" class="inputredefinir" type="text" name="novoNome" placeholder="Digite o seu novo nome...">

                <br>

                <button class="buttonredefinir" type="submit" > Confirmar </button>

            </div>

        </form>
    </div>

</div>
@endsection
