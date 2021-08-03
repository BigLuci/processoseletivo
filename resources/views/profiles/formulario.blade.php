@extends('layouts.app')
@section('title')

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-6">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=2.0, maximum-scale=2.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Processo Seletivo</title>

</head>
<body>
    <div class="container" style="margin-top: 40px;">
        <div class="mui-panel">

            <div class="col-md page-header">
                <h2 class="page-header-title text-center">Cadastro</h2>
            </div>

            <div class="alert-info" style="padding: 6px;border-radius: 5px;">
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

                <div class="form-row">
                    <div class="form-group col-sm- col-md-8 col-lg-8">
                        <label>CPF<span class="obrigatorio">*</span></label>
                        <input name="cpf" class="form-control" value={{"$cpf"}} maxlength="100" readonly />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-sm-6 col-md-6 col-lg-6">
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

                <div class="form-row">
                    <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label>Nome <span class="obrigarorio">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" maxlength="100">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label >Escolaridade<span class="obrigatorio">*</span></label>
                        <select class="form-control" name="id_escolaridade" id="id_escolaridade" required>
                            <option value="" selected>-- Selecione --</option>
                            @foreach ($escola as $name)
                                <option value="{{$name->id}}" @if (old('id_escolaridade')==$name->id){{'selected="selected"'}} @endif>{{$name->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-sm-l col-md-6 col-lg-6">
                        <label>Sexo<span class="obrigatorio">*</span></label>
                        <select class="form-control" name="id_sexo" id="id_sexo" required>
                        <option value="" selected>-- Selecione --</option>
                            @foreach ($sexo as $name)
                                <option value="{{ $name->id }}" @if (old('id_sexo')==$name->id){{'selected="selected"'}}@endif>
                                    {{$name->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </form>
        </div>
    </div>


</body>

</html>

