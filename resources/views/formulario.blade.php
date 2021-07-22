<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Processo Seletivo</title>
</head>
<body>
    @extends('layouts.app')

@section('title')


    <br><br>

        <div class="container" style="margin-top: 40px;">

            {{-- @include('messages.alert')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}



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



                              <div class="form-row">
                                  <div class="form-group col-sm-8 col-md-8 col-lg-8">
                                      <label>CPF<span class="obrigatorio">*</span></label>
                                      <input name="cpf" class="form-control" value="" maxlength="100" readonly />
                                  </div>
                              </div>



                              <div class="form-row">
                                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                      {{-- @php
                                          $funcao = \App\Models\FuncaoCargo::all();
                                      @endphp --}}

                                      <label>Função<span class="obrigatorio">*</span></label>
                                      <select class="form-control" name="id_funcao_cargo" id="id_funcao_cargo" tabindex="1" onchange="comprovaexp(this.value)" required>
                                          <option value="" selected>-- Selecione --</option>
                                          @foreach($funcao as $E)
                                                <!-- M.Santos onchange -->
                                                <option value="{{$E->id}}" @if(old('id_funcao_cargo')==$E->id) {{'selected="selected"'}} @endif>{{$E->nome}}</option>
                                          @endforeach
                                      </select>
                                  </div>
                              </div>


                              <div class="form-row">
                                      <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                          <label>Nome<span class="obrigatorio">*</span></label>
                                          <input name="nome" class="form-control" value="{{old('nome')}}" maxlength="100" tabindex="2"/>
                                      </div>
                              </div>


                            <div class="form-row">
                                <div class="form-group col-sm-6 col-md-6 col-lg-6">

                                    @php
                                        $escolaridade = \App\Models\Escolaridade::all();
                                    @endphp

                                    <label>Escolaridade<span class="obrigatorio">*</span></label>
                                    <select class="form-control" name="id_escolaridade" id="id_escolaridade" tabindex="13" required>
                                        <option value="" selected>-- Selecione --</option>
                                        @foreach($escolaridade as $E)
                                            <option value="{{$E->id}}" @if(old('id_escolaridade')==$E->id) {{'selected="selected"'}} @endif >{{$E->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                    <label>Sexo<span class="obrigatorio">*</span></label>
                                    <select class="form-control" name="sexo" id="sexo" onchange="sexoCampos(this.value)" tabindex="14" required>
                                        <option value="" @if(old('sexo')=="") {{'selected="selected"'}} @endif>--Selecione--</option>
                                        <option value="F" @if(old('sexo')=="F") {{'selected="selected"'}} @endif >Feminino</option>
                                        <option value="M" @if(old('sexo')=="M") {{'selected="selected"'}} @endif >Masculino</option>
                                    </select>

                                </div>
                            </div>


                              <div class="form-row">
                                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                      <label>Data de nascimento<span class="obrigatorio">*</span></label>
                                      <input name="nascimento" id="nascimento" class="form-control" value="{{old('nascimento')}}" maxlength="100" tabindex="2" required />
                                  </div>
                                  <div class="form-group col-sm-6 col-md-6 col-lg-6">

                                      @php
                                          $estado_civil = \App\Models\EstadoCivil::all();
                                      @endphp

                                      <label>Estado Civil<span class="obrigatorio">*</span></label>
                                      <select class="form-control" name="estado_civil" id="estado_civil" onchange="campoEstadoCivil(this.value)" tabindex="3" required>
                                          <option value="" selected>-- Selecione --</option>
                                          @foreach($estado_civil as $E)
                                              <option value="{{$E->id}}" @if(old('estado_civil')==$E->id) {{'selected="selected"'}} @endif >{{$E->nome}}</option>
                                          @endforeach
                                      </select>
                                  </div>
                              </div>


                              <div class="form-row">
                                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                      <label>Nacionalidade<span class="obrigatorio">*</span></label>
                                      <input name="nacionalidade" class="form-control" value="{{old('nacionalidade')}}" maxlength="100" tabindex="4"/>
                                  </div>
                                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                      <label>Naturalidade (UF) <span class="obrigatorio">*</span></label>
                                      <input name="naturalidade" class="form-control" value="{{old('naturalidade')}}" maxlength="100" tabindex="5"/>
                                  </div>
                              </div>



                              <div class="form-row">
                                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                      <label>RG<span class="obrigatorio">*</span></label>
                                      <input name="rg" class="form-control" value="{{old('rg')}}" maxlength="100" tabindex="6" required />
                                  </div>
                                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                      <label>Órgão Emissor<span class="obrigatorio">*</span></label>
                                      <input name="orgao_emissor" class="form-control" value="{{old('orgao_emissor')}}" tabindex="7" maxlength="100" required />
                                  </div>
                              </div>


                              <div class="form-row">
                                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                      <label>PIS/PASEP<span class="obrigatorio">*</span></label>
                                      <input name="pis_pasep" class="form-control" value="{{old('pis_pasep')}}" maxlength="100" tabindex="8" required />
                                  </div>
										  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                      <label>Título Eleitor<span class="obrigatorio">*</span></label>
                                      <input name="titulo_eleitor" class="form-control" value="{{old('titulo_eleitor')}}" maxlength="100" tabindex="9" required />
                                  </div>
                              </div>



                              <div class="form-row">


                                  <div id="input_cert_reservista" class="col-sm-6 col-md-6 col-lg-6" >
                                      <label cla>Certificado de Reservista<span class="obrigatorio">*</span></label>
                                      <input name="cert_reservista" id="cert_reservista" class="form-control" value="{{old('cert_reservista')}}" maxlength="100" tabindex="10"/>
                                  </div>
									<div class="col-sm-6 col-md-6 col-lg-6">
                                      <label>Reg. Conselho<span class="obrigatorio">*</span></label>
                                      <input name="reg_conselho" class="form-control" value="{{old('reg_conselho')}}" maxlength="100" tabindex="11" required />
                                  </div>
                              </div>





                              <div class="form-row">
                                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                      <label>Nome da Mãe<span class="obrigatorio">*</span></label>
                                      <input name="nome_mae" class="form-control" value="{{old('nome_mae')}}" maxlength="100" tabindex="15" required />
                                  </div>
                                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                      <label>Nome do Pai<span class="obrigatorio">*</span></label>
                                      <input name="nome_pai" class="form-control" value="{{old('nome_pai')}}" maxlength="100" tabindex="16" required />
                                  </div>
                              </div>



                              <div class="form-row">
                                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                      <label>E-mail<span class="obrigatorio">*</span></label>
                                      <input type="email" name="email" class="form-control" value="{{old('email')}}" maxlength="100" tabindex="17" required />
                                  </div>
                                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                      <label>Telefone (DD + NUMERO)<span class="obrigatorio">*</span></label>
                                      <input name="telefone" id="telefone" class="form-control" value="{{old('telefone')}}" tabindex="18" maxlength="50" minlength="9" tabindex="18" required/>
                                  </div>
                              </div>



                              <div class="form-row">
                                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                      <label>Endereço Completo<span class="obrigatorio">*</span></label>
                                      <input name="endereco" class="form-control" value="{{old('endereco')}}" maxlength="255" tabindex="19" required />
                                  </div>
                              </div>


                              <div class="form-row">
                                  <div class="form-group col-sm-2 col-md-2 col-lg-2">
                                      <label>CEP<span class="obrigatorio">*</span></label>
                                      <input name="cep" id="cep" class="form-control" value="{{old('cep')}}" maxlength="100" tabindex="20" required />
                                  </div>
                                  <div class="form-group col-sm-2 col-md-2 col-lg-2">
                                      <label>UF<span class="obrigatorio">*</span></label>
                                      <input name="uf" class="form-control" value="{{old('uf')}}" maxlength="2" tabindex="22" required />
                                  </div>

                                  <div class="form-group col-sm-2 col-md-2 col-lg-2">
                                      <label>Cidade<span class="obrigatorio">*</span></label>
                                      <input name="cidade" class="form-control" value="{{old('cidade')}}" maxlength="255" tabindex="21" required />
                                  </div>

                              </div>
                            </div>

                          <hr>
                          <br>
                          <div class="row">
                          <h4 style="color: #1b6d85">COMPROVANTE DE EXPERIÊNCIA</h4>

                              <div class="form-row">
                                  <div class="form-group col-sm-6 col-md-6 col-lg-6 form-experiencias">
                                      <label>Experiência<span class="obrigatorio">*</span></label>
                                      <input name="experiencia_1" id="experiencia_1" class="form-control" value="{{old('experiencia_1')}}" maxlength="255" tabindex="23" required/>
                                  </div>
                                  <div class="form-group col-sm-2 col-md-2 col-lg-2 form-experiencias">
                                      <label>Total Meses<span class="obrigatorio">*</span></label>
                                      <input name="meses_1" id="meses_1" class="form-control" value="{{old('meses_1')}}" maxlength="5" tabindex="24" required/>
                                  </div>
                                  <div class="form-group col-sm-2 col-md-2 col-lg-2 form-experiencias">
                                      <label>Anexar Arquivo<span class="obrigatorio">*</span></label>
                                      <input class="btn-file" name="caminho_experiencia_1" id="caminho_experiencia_1" type="file" value="" tabindex="25" required>
                                  </div>
                              </div>


                              <div class="form-row">
                                  <div class="form-group col-sm-6 col-md-6 col-lg-6 form-experiencias">
                                      <label>Curso de qualificação na área de saúde acima de 100h<span class="obrigatorio">*</span></label>
                                      <input name="experiencia_2" id="experiencia_2" class="form-control" value="{{old('experiencia_2')}}" maxlength="255" tabindex="26" required/>
                                  </div>
                                  <div class="form-group col-sm-2 col-md-2 col-lg-2 form-experiencias">
                                      <label>Total Meses<span class="obrigatorio">*</span></label>
                                      <input name="meses_2" id="meses_2" class="form-control" value="{{old('meses_2')}}" maxlength="5" tabindex="27" required/>
                                  </div>
                                  <div class="form-group col-sm-2 col-md-2 col-lg-2 form-experiencias">
                                      <label>Anexar Arquivo<span class="obrigatorio">*</span></label>
                                      <input class="btn-file" name="caminho_experiencia_2" id="caminho_experiencia_2" type="file" value="" tabindex="28" required>
                                  </div>
                              </div>



                              <div class="form-row">
                                  <div class="form-group col-sm-6 col-md-6 col-lg-6 form-experiencias">
                                      <label>Curso de qualificação na área de saúde de 60 a 99h<span class="obrigatorio">*</span></label>
                                      <input name="experiencia_3" id="experiencia_3" class="form-control" value="{{old('experiencia_3')}}" maxlength="255" tabindex="29" required/>
                                  </div>
                                  <div class="form-group col-sm-2 col-md-2 col-lg-2 form-experiencias">
                                      <label>Total Meses<span class="obrigatorio">*</span></label>
                                      <input name="meses_3" id="meses_3" class="form-control" value="{{old('meses_3')}}" maxlength="5" tabindex="30" required/>
                                  </div>
                                  <div class="form-group col-sm-2 col-md-2 col-lg-2 form-experiencias">
                                      <label>Anexar Arquivo<span class="obrigatorio">*</span></label>
                                      <input class="btn-file" name="caminho_experiencia_3" id="caminho_experiencia_3" type="file" value="" tabindex="31" required>
                                  </div>
                              </div>
                            </div>

                          <hr>
                          <h4 style="color: #1b6d85">ANEXAR DOCUMENTAÇÃO</h4>

                              <div class="form-row">
                                  <div class="form-group col-sm-5 col-md-5 col-lg-5">
                                      <label>Doc. de Identidade com foto<span class="obrigatorio">*</span></label>
                                      <input class="btn-file" name="caminho_rg" id="caminho_rg" type="file" value="{{old('caminho_rg')}}" tabindex="32" required>
                                  </div>
                              </div>


                              <div class="form-row">
                                  <div class="form-group col-sm-5 col-md-5 col-lg-5">
                                      <label>CPF<span class="obrigatorio">*</span></label>
                                      <input class="btn-file" name="caminho_cpf" id="caminho_cpf" type="file" value="{{old('caminho_cpf')}}" tabindex="33" required>
                                  </div>
                              </div>


                              <div class="form-row">
                                  <div class="form-group col-sm-5 col-md-5 col-lg-5">
                                      <label>Título de Eleitor<span class="obrigatorio">*</span></label>
                                      <input class="btn-file" name="caminho_titulo" id="caminho_titulo" type="file" value="{{old('caminho_titulo')}}" tabindex="34" required>
                                  </div>
                              </div>



                              <div class="form-row">
                                  <div class="form-group col-sm-5 col-md-5 col-lg-5">
                                      <label>Comprovante de Quitação Eleitoral<span class="obrigatorio">*</span></label>
                                      <input class="btn-file" name="caminho_quitacao" id="caminho_quitacao" type="file" value="{{old('caminho_quitacao')}}" tabindex="35" required>
                                  </div>
                              </div>


                              <div class="form-row">
                                  <div class="form-group col-sm-5 col-md-5 col-lg-5">
                                      <label>PIS/PASEP<span class="obrigatorio">*</span></label>
                                      <input class="btn-file" name="caminho_pis" id="caminho_pis" type="file" value="{{old('caminho_pis')}}" tabindex="36" required>
                                  </div>
                              </div>


                              <div id="input_doc_reservista" class="form-row">
                                  <div class="form-group col-sm-5 col-md-5 col-lg-5">

                                      <label for="caminho_reservista">Certificado de Reservista<span class="obrigatorio">*</span></label>
                                      <input class="btn-file" name="caminho_reservista" id="caminho_reservista" type="file" tabindex="37" value="{{old('caminho_reservista')}}">
                                  </div>
                              </div>


                              <div class="form-row">
                                  <div class="form-group col-sm-5 col-md-5 col-lg-5">
                                      <label>Comprovante de Residência<span class="obrigatorio">*</span></label>
                                      <input class="btn-file" name="caminho_residencia" id="caminho_residencia" type="file" value="{{old('caminho_residencia')}}" tabindex="38" required>
                                  </div>
                              </div>


                              <div id="input_doc_estado_civil" class="form-row">
                                  <div class="form-group col-sm-5 col-md-5 col-lg-5">
                                      <label>Certidão de Casamento/União Estável/etc</label>
                                      <input class="btn-file" name="caminho_certidao" id="caminho_casamento" type="file" tabindex="39" value="{{old('caminho_casamento')}}">
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group col-sm-5 col-md-5 col-lg-5">
                                      <label>Comprovante de Escolaridade<span class="obrigatorio">*</span></label>
                                      <input class="btn-file" name="caminho_escolaridade" id="caminho_escolaridade" type="file" value="{{old('caminho_escolaridade')}}" tabindex="40" required>
                                  </div>
                              </div>


                              <div class="form-row">
                                  <div class="form-group col-sm-5 col-md-5 col-lg-5">
                                      <label>Comprovante de Curso Profissionalizante<span class="obrigatorio">*</span></label>
                                      <input class="btn-file" name="caminho_curso" id="caminho_curso" type="file" value="{{old('caminho_curso')}}" tabindex="41" required>
                                  </div>
                              </div>


                              <div class="form-row">
                                  <div class="form-group col-sm-5 col-md-5 col-lg-5">
                                      <label>Registro no Conselho<span class="obrigatorio">*</span></label>
                                      <input class="btn-file" name="caminho_registro" id="caminho_registro" type="file" value="{{old('caminho_registro')}}" tabindex="42" required>
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group col-sm-5 col-md-5 col-lg-5">
                                      <label>Dados Bancários Bradesco</label>
                                      <input class="btn-file" name="caminho_banco" id="caminho_banco" type="file" value="{{old('caminho_banco')}}" tabindex="43">
                                  </div>
                              </div>

                          <div class="row" style="margin-top: 20px;">
                              <div class="form-row">
                                  <div class="form-group col-sm-8 col-md-8 col-lg-8">
                                      <button class="btn btn-primary" type="submit">Enviar</button>
                                      <a class="btn btn-default" href="{{url('/') }}">Cancelar</a>
                                  </div>
                              </div>
                          </div>


                      </form>
                  </div>

          </div>

    <script src="{{asset('js/lib/jquery.js')}}"></script>
    <script src="{{asset('js/lib/jquery.mask.min.js')}}"></script>
    <script type="text/javascript">

      $(document).ready(function () {

        $("#nascimento").mask("99/99/9999");
        $("#cpf").mask("999.999.999-99");
        $("#telefone").mask("(99)9999-9999");
        $("#cep").mask("99999-999");
        $("#meses_1").mask("99999");
        $("#meses_2").mask("99999");
        $("#meses_3").mask("99999");


        //checa campos obrigatorios
        comprovaexp($('#id_funcao_cargo').val());
        // sexocampos($('#sexo').val());



      });
        // function sexocampos() {
        //     var x = document.getElementById("sexo").value;

        //     document.getElementById("caminho_reservista").value= "teste teste teste";
        // }

        function sexoCampos() {
            var a = document.getElementById("sexo").value;
            console.log(a);
            // document.getElementById("demo").innerHTML = "You selected: ";
        }
        // M.Santos
      function comprovaexp(valor){
           if(valor==3){
                $('#experiencia_1').prop('required',false);
                $('#meses_1').prop('required',false);
                $('#caminho_experiencia_1').prop('required',false);
                $('#experiencia_2').prop('required',false);
                $('#meses_2').prop('required',false);
                $('#caminho_experiencia_2').prop('required',false);
                $('#experiencia_3').prop('required',false);
                $('#meses_3').prop('required',false);
                $('#caminho_experiencia_3').prop('required',false);

                $('.form-experiencias').find('span').hide();

           }else{
                $('#experiencia_1').prop('required',true);
                $('#meses_1').prop('required',true);
                $('#caminho_experiencia_1').prop('required',true);
                $('#experiencia_2').prop('required',true);
                $('#meses_2').prop('required',true);
                $('#caminho_experiencia_2').prop('required',true);
                $('#experiencia_3').prop('required',true);
                $('#meses_3').prop('required',true);
                $('#caminho_experiencia_3').prop('required',true);
                $('.form-experiencias').find('span').show();
           }
      }

      function sexoCampos(valor){
        if (valor == 'M'){
          $('#cert_reservista').prop('required', true);
          $('#caminho_reservista').prop('required', true);
          certificadoReverter();
        }else{
          $('#cert_reservista').prop('required', false);
          $('#caminho_reservista').prop('required', false);
          certificado()
        }
      }
      function certificado(){
        document.getElementById("input_cert_reservista").style.display = "none";
        document.getElementById("input_doc_reservista").style.display = "none";
      }
      function certificadoReverter(){
        document.getElementById("input_cert_reservista").style.display = "block";
        document.getElementById("input_doc_reservista").style.display = "block";
      }





      function campoEstadoCivil(valor2){
        if (valor2 == '1'){
          $('#estado_civil').prop('required', true);
          $('#caminho_casamento').prop('required', true);
          estadoCivilReverter();
        }else{
          $('#caminho_casamento').prop('required', false);
          estadoCivil()
        }
      }
      function estadoCivil(){
        document.getElementById("input_doc_estado_civil").style.display = "block";
      }
      function estadoCivilReverter(){
        document.getElementById("input_doc_estado_civil").style.display = "none";
      }
    </script>







</body>
</html>
