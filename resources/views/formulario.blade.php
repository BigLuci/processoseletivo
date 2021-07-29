@extends('layouts.app')
@section('title')

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=2.0, maximum-scale=2.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Processo Seletivo</title>

</head>
<body>

    <div class="mui-panel">

        <div class="col-md page-header">
            <h2 class="page-header-title text-center">Cadastro</h2>
        </div>

        <div class="alert-info" style="padding: 8px;border-radius: 5px;">
            <b>Bem vindo(a), por favor atente para as seguintes recomendações:</b>
            <ul>
                <li>Os campos preenchidos de forma equivocada serão mostrados com um alerta.</li>
                <li>Os campos com <b>'*'</b> são de preenchimento OBRIGATÓRIO.</li>
                <li>O <b>Nome</b> deve ser completo conforme documento.</li>
                <li>Os <b>Arquivos</b> podem ser do tipo <b>PDF, IMAGEM (JPEG) ou DOCX (WORD)</b>.</li>
                <li>O <b>Tamanho Máximo</b> de cada arquivo NÃO pode ultrapassar 5MB.</li>
            </ul>
        </div>
        <br>

        <form action="" enctype="multipart/form-data" method="post">

            {{ csrf_field() }}


            <div class="row">
                <div class="form-row">
                    <div class="form-group col-sm-8 col-md-8 col-lg-8">
                        <label>CPF<span class="obrigatorio">*</span></label>
                        <input name="cpf" class="form-control" value="{{old('cpf')}}" maxlength="100" readonly />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-row">
                    <div class="form-group col-sm-8 col-md-8 col-lg-8">

                        <label>Função<span class="obrigatorio">*</span></label>
                        <select class="form-control" name="id_funcao_cargo" id="id_funcao_cargo" tabindex="1" onchange="comprovaexp(this.value)" required>
                            <option value="" selected>-- Selecione --</option>
                            @foreach($funcao as $name)
                                  <!-- M.Santos onchange -->
                                  <option value="{{$name->id}}" @if(old('id_funcao_cargo')==$name->id) {{'selected="selected"'}} @endif>{{$name->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

        </form>

    </div>



</body>

</html>

