@extends('layouts.app')

    <div class="container" style="margin-top:60px;">
        <div class="bgim img-fluid" style="margin-left:10px;">
            <img src="{{asset ('img/banner_principal.jpg') }}">
        </div>
        <div class="conteudo" style="margin-left: 10px;">
        <form action="" method="get">
            {{ csrf_field() }}
            <div class="row">
                <div class="centraliza">
                    <div class="alert-info col-sm-12 col-md-12 col-lg-12" style="margin-top:20px;padding:2px;border-radius: 5px;">
                        <ul>
                            <li>Selecione o processo e informe o seu CPF.</li>
                            <li><b><a href="{{url('requisitos') }}" target="_blank">Clique aqui</a></b>para ler os pré-requisitos</li>
                        </ul>
                    </div>
                    <div class="row col-sm-10 col-md-10 col-lg-10" style="margin-top: 15px;margin-left:50px;">
                        <div class="form-group col-sm-12 col-md-12 col-lg-12">
                            <label for="cargo_processo">Processo Seletivo</label>
                            <select  class="form-control" name="cargo_processo" id="cargo_processo" tabindex="1" required>
                                <option value=""selected>-- Selecione --</option>
                                @foreach ($cargo as $C)
                                    <option value="{{$C->id}}">{{$C->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="row col-sm-10 col-md-10 col-lg-10" style="margin-top: 15px;margin-left:50px;">
                        <div class="form-group col-sm-12 col-md-12 col-lg-12">
                            <input type="text" class="form-control col-md-2" id="cpf" name="cpf"  placeholder="CPF" required>
                        </div>
                    </div>
                    <div class="row col-sm-10 col-md-10 col-lg-10" style="margin-top: 15px;margin-left:50px;">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success col-md-12"> Cadastrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
