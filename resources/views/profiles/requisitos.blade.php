@extends('layouts.app')

@section('title')


    <br><br>

    <div class="container" style="margin-top: 120px;">

        @include('messages.alert')

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mui-panel">
            <span><h3 style="color: black;text-align: center">Pré-Requisitos</h3></span>
            <p><b>1 – TÉCNICO DE ENFERMAGEM GERAL:</b></p>

                <p><b>a) Requisitos Obrigatórios: </b>Ensino Médio Completo; Curso de Técnico de Enfermagem; Registro Profissional no Órgão de Classe competente; aptidão para o serviço; e condições de saúde compatíveis ao desempenho das atribuições.
                </p>

            <p><b>2 – TÉCNICO DE ENFERMAGEM EXPERIÊNCIA EM UTI:</b></p>

            <p><b>a) Requisitos Obrigatórios:</b> Ensino Médio Completo; Curso de Técnico de Enfermagem; Registro Profissional no Órgão de Classe competente; EXPERIENCIA COMPROVADA NA AREA DE UTI; aptidão para o serviço; e condições de saúde compatíveis ao desempenho das atribuições.
                </p>

            </p>
        </div>
    </div>
