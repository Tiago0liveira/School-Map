<?php


//Verifica se o Botão de enviar foi pressionado
if (isset($_POST['submit'])) {

  //Inclue o arquivo de configuração 
  include_once('config.php');

  //Atribui os valores dos dados enviados pelo formulário 
  //BD            VA name
  $nome = $_POST['nome'];
  $rg = $_POST['rg'];
  $cpf = $_POST['cpf'];
  $tipo_sanguineo = $_POST['tipo_sanguineo'];
  $naturalidade = $_POST['naturalidade'];
  $tipo_escola = $_POST['tipo_escola'];
  $nome_escola = $_POST['nome_escola'];
  $ano_escolar = $_POST['ano_escolar'];
  $data_nasc = $_POST['data_nascimento'];
  $genero = $_POST['genero'];
  $formulario = $_POST['formulario'];
  $ensino_escolar = $_POST['ensino_escolar'];
  $turno = $_POST['periodo'];
  $cep = $_POST['cep'];
  $logradouro = $_POST['logradouro'];
  $bairro = $_POST['bairro'];
  $cidade = $_POST['cidade'];
  $numero = $_POST['numero'];
  $complemento = $_POST['complemento'];
  $nome_mae = $_POST['nome_mae'];
  $tel_mae = $_POST['tel_mae'];
  $profi_mae = $_POST['profi_mae'];
  $cpf_mae = $_POST['cpf_mae'];
  $email_mae = $_POST['email_mae'];
  $pai_registro = $_POST['pai_registro'];
  $nome_pai = $_POST['nome_pai'];
  $tel_pai = $_POST['tel_pai'];
  $profi_pai = $_POST['profi_pai'];
  $cpf_pai = $_POST['cpf_pai'];
  $email_pai = $_POST['email_pai'];

  //Adiciona os dados registrados no formulario ao banco de dados
  $result = mysqli_query($conexao, "INSERT INTO  matriculas(nome,rg,cpf,tipo_sanguineo,naturalidade,tipo_escola,nome_escola,ano_escolar,data_nasc,genero,formulario,ensino_escolar,turno,
  cep,logradouro,bairro,cidade,numero,complemento,nome_mae,tel_mae,profi_mae,cpf_mae,email_mae,pai_registro,nome_pai,tel_pai,profi_pai,cpf_pai,email_pai )
  VALUES('$nome','$rg','$cpf', '$tipo_sanguineo','$naturalidade', '$tipo_escola','$nome_escola', '$ano_escolar','$data_nasc', '$genero',
  ' $formulario','$ensino_escolar','$turno','$cep','$logradouro', '$bairro','$cidade','$numero','$complemento','$nome_mae','$tel_mae','$profi_mae',
  '$cpf_mae','$email_mae','$pai_registro','$nome_pai','$tel_pai','$profi_pai','$cpf_pai','$email_pai') ");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Formulário de Inscrição</title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <link rel="shortcut icon" href="img/local.jpg" type="image/x-icon">

  <!-- Conecta o CSS com o formulario html contido no arquivo php -->
  <link rel="stylesheet" type="text/css" href="formulario.css">

</head>

<body>

  <h1>Formulário de Pré-Cadastro de Matriculas</h1>
  <form action="#" method="post">
    <fieldset>

      <label for="nome">Nome Completo:</label>
      <input type="text" name="nome" id="nome" required>

      <label for="rg">Nº RG:</label>
      <input type="text" name="rg" id="rg" placeholder="0000000" pattern="\d{7,10}" required>


      <label for="cpf">Nº CPF:</label>
      <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required>


      <label for="naturalidade">Naturalidade:</label>
      <input type="text" name="naturalidade" placeholder="Ex: Lages" id="naturalidade" required>

      <label for="ano_escolar">Turma Escolar em 2022:</label>
      <input type="text" name="ano_escolar" placeholder="Ex: 9º" id="ano_escolar" required>

      <label for="data_nascimento">Data de Nascimento:</label>
      <input type="date" name="data_nascimento" id="data_nascimento" required>


      <label for="tipo_sanguineo">Tipo Sanguineo:</label>
      <select name="tipo_sanguineo" id="tipo_sanguineo" required>
        <option value=""></option>
        <option value="Tipo A+">A+</option>
        <option value="Tipo A-">A-</option>
        <option value="Tipo B+">B+</option>
        <option value="Tipo B-">B-</option>
        <option value="Tipo AB+">AB+</option>
        <option value="Tipo AB-">AB-</option>
        <option value="Tipo O+">O+</option>
        <option value="Tipo O-">O-</option>
      </select>


      <label for="tipo_escola">Qual o tipo da escola?</label>
      <select name="tipo_escola" id="tipo_escola" required onchange="mostrarCampoCeim(), mostrarCampoEmeb(), mostrarCampoEmef()">
        <option value="">-- Selecione --</option>
        <option value="ceim">CEIM</option>
        <option value="emeb">EMEB</option>
        <option value="emef">EMEF</option>
      </select>

      <div id="campo-ceim" style="display:none;">
        <label for="escola_ceim">Selecione Uma Escola CEIM:</label>
        <select id="escola_ceim">
          <option value="">-- Selecione --</option>
          <option value="CEIM Adelina Tramontin Sommariva">CEIM Adelina Tramontin Sommariva</option>
          <option value="CEIM Adotai">CEIM Adotai</option>
          <option value="CEIM Adriana Ap. Lourenço">CEIM Adriana Ap. Lourenço</option>
          <option value="CEIM Alfeu Rogério de Liz e Silva">CEIM Alfeu Rogério de Liz e Silva</option>
          <option value="CEIM Alfredo Bianchini De Mathia">CEIM Alfredo Bianchini De Mathia</option>
          <option value="CEIM Andrea Maris Santa Ana">CEIM Andrea Maris Santa Ana </option>
          <option value="CEIM Araucária">CEIM Araucária</option>
          <option value="CEIM Aristides de Oliveira Campolin">CEIM Aristides de Oliveira Campolin </option>
          <option value="CEIM Assistência Nossa Senhora dos Prazeres">CEIM Assistência Nossa Senhora dos Prazeres </option>
          <option value="CEIM Bairro Caroba">CEIM Bairro Caroba</option>
          <option value="CEIM Bairro Conta Dinheiro">CEIM Bairro Conta Dinheiro</option>
          <option value="CEIM Bairro Guadalajara">CEIM Bairro Guadalajara</option>
          <option value="CEIM Bairro Jardim Celina extensão CEIM André Luiz">CEIM Bairro Jardim Celina extensão CEIM André Luiz </option>
          <option value="CEIM Bairro Jardim Residencial Bela Vista">CEIM Bairro Jardim Residencial Bela Vista</option>
          <option value="CEIM Bairro Santa Cândida">CEIM Bairro Santa Cândida</option>
          <option value="CEIM Bairro Santa Maria">CEIM Bairro Santa Maria</option>
          <option value="CEIM Bairro Santa Mônica">CEIM Bairro Santa Mônica</option>
          <option value="CEIM Bairro São Pedro">CEIM Bairro São Pedro </option>
          <option value="CEIM Bairro Vila Maria">CEIM Bairro Vila Maria</option>
          <option value="CEIM Bom Jesus">CEIM Bom Jesus</option>
          <option value="CEIM Cacilda Altomar">CEIM Cacilda Altomar</option>
          <option value="CEIM Cantinho Feliz">CEIM Cantinho Feliz</option>
          <option value="CEIM Celina Tomé Melegari">CEIM Celina Tomé Melegari </option>
          <option value="CEIM Chapeuzinho Vermelho">CEIM Chapeuzinho Vermelho </option>
          <option value="CEIM Claricio Madruga de Andrade">CEIM Claricio Madruga de Andrade</option>
          <option value="CEIM Distrito de Indios">CEIM Distrito de Indios</option>
          <option value="CEIM Domingas Biachini">CEIM Domingas Biachini </option>
          <option value="CEIM Elvas Flávio Lenzi">CEIM Elvas Flávio Lenzi </option>
          <option value="CEIM Emilia Furtado Ramos">CEIM Emilia Furtado Ramos</option>
          <option value="CEIM Emília Ribeiro de Barros">CEIM Emília Ribeiro de Barros</option>
          <option value="CEIM Eudalto Lopes de Sá">CEIM Eudalto Lopes de Sá </option>
          <option value="CEIM Filhos dos Funcionários da Prefeitura">CEIM Filhos dos Funcionários da Prefeitura</option>
          <option value="CEIM Gente Miúda">CEIM Gente Miúda</option>
          <option value="CEIM Girassol">CEIM Girassol</option>
          <option value="CEIM Gralha Azul">CEIM Gralha Azul</option>
          <option value="CEIM Hermínia Graciosa Zago">CEIM Hermínia Graciosa Zago</option>
          <option value="CEIM Iraci Souza Steinke">CEIM Iraci Souza Steinke</option>
          <option value="CEIM Irmã Dulce">CEIM Irmã Dulce</option>
          <option value="CEIM Ivo Pacheco de Andrade">CEIM Ivo Pacheco de Andrade</option>
          <option value="CEIM Jhonatan Kuster Lehmkuhl">CEIM Jhonatan Kuster Lehmkuhl</option>
          <option value="CEIM João José Theodoro da Costa Netto">CEIM João José Theodoro da Costa Netto</option>
          <option value="CEIM Juarez Pereira da Silva">CEIM Juarez Pereira da Silva</option>
          <option value="CEIM Judite Terezinha Dias">CEIM Judite Terezinha Dias</option>
          <option value="CEIM Justine Barth">CEIM Justine Barth</option>
          <option value="CEIM Leonina Rodrigues da Costa">CEIM Leonina Rodrigues da Costa </option>
          <option value="CEIM Marco Floriani Bordin">CEIM Marco Floriani Bordin </option>
          <option value="CEIM Maria Conceição Nunes">CEIM  Maria Conceição Nunes</option>
          <option value="CEIM Maria de Castro Arruda">CEIM Maria de Castro Arruda </option>
          <option value="CEIM Maria Joana de Arruda">CEIM Maria Joana de Arruda</option>
          <option value="CEIM Marieta Camargo dos Santos">CEIM Marieta Camargo dos Santos </option>
          <option value="CEIM Marina Martins Borges">CEIM Marina Martins Borges</option>
          <option value="CEIM Maura do Pilar">CEIM Maura do Pilar </option>
          <option value="CEIM Miriam Regina de Oliveira Koeche">CEIM Miriam Regina de Oliveira Koeche</option>
          <option value="CEIM Moranguinho">CEIM Moranguinho </option>
          <option value="CEIM Mutirão">CEIM Mutirão</option>
          <option value="CEIM Nelson Martins de Almeida">CEIM Nelson Martins de Almeida </option>
          <option value="CEIM Noé José dos Santos">CEIM Noé José dos Santos</option>
          <option value="CEIM Nossa Senhora do Caravágio">CEIM Nossa Senhora do Caravágio </option>
          <option value="CEIM Nossa Senhora dos Prazeres">CEIM Nossa Senhora dos Prazeres </option>
          <option value="CEIM Pequeno Príncipe">CEIM Pequeno Príncipe </option>
          <option value="CEIM Primeiros Passos">CEIM Primeiros Passos</option>
          <option value="CEIM Prof. Rosvita Lima Borges ">CEIM Prof. Rosvita Lima Borges </option>
          <option value="CEIM Professor Trajano">CEIM Professor Trajano</option>
          <option value="CEIM Professora Maria Sônia De Quevedo">CEIM Professora Maria Sônia De Quevedo</option>
          <option value="CEIM Professora Rosimery Guimarães Lira">CEIM Professora Rosimery Guimarães Lira </option>
          <option value="CEIM Professora Valéria Guimarães Goss">CEIM Professora Valéria Guimarães Goss </option>
          <option value="CEIM Salto do Caveiras">CEIM Salto do Caveiras </option>
          <option value="CEIM São Paulo">CEIM São Paulo </option>
          <option value="CEIM Sebastião Waltrick Farias">CEIM Sebastião Waltrick Farias </option>
          <option value="CEIM Sempre Viva">CEIM Sempre Viva</option>
          <option value="CEIM Sepé Tiarajú">CEIM Sepé Tiarajú</option>
          <option value="CEIM Suzete Conceição Soares Córdova">CEIM Suzete Conceição Soares Córdova</option>
          <option value="CEIM Tia Anita">CEIM Tia Anita</option>
          <option value="CEIM Tia Bira">CEIM Tia Bira</option>
          <option value="CEIM Vila da Criança">CEIM Vila da Criança</option>
          <option value="CEIM Vivaldino Silva Lourenço">CEIM Vivaldino Silva Lourenço</option>


        </select>
      </div>

      <div id="campo-emeb" style="display:none;">
        <label for="escola_emeb">Selecione Uma Escola EMEB:</label>
        <select name="" id="escola_emeb">
          <option value="">-- Selecione --</option>
          <option value="EMEB Aline Giovana Schmitt">EMEB Aline Giovana Schmitt</option>
          <option value="EMEB Anjo da Guarda">EMEB Anjo da Guarda</option>
          <option value="EMEB Bom Jesus">EMEB Bom Jesus</option>
          <option value="EMEB Cel. Manoel Thiago de Castro">EMEB Cel. Manoel Thiago de Castro</option>
          <option value="EMEB Dom Daniel Hostin">EMEB Dom Daniel Hostin</option>
          <option value="EMEB Frei Bernardino">EMEB Frei Bernardino</option>
          <option value="EMEB Herminio Pinheiro Junior">EMEB Herminio Pinheiro Junior</option>
          <option value="EMEB Indios">EMEB Indios</option>
          <option value="EMEB Itinerante Maria Alice Wolff de Souza">EMEB Itinerante Maria Alice Wolff de Souza</option>
          <option value="EMEB Izabel Thiesen Roseto">EMEB Izabel Thiesen Roseto</option>
          <option value="EMEB Izidoro Marin">EMEB Izidoro Marin</option>
          <option value="EMEB Jardelina Furtado Pereira">EMEB Jardelina Furtado Pereira</option>
          <option value="EMEB Juscelino Kubitschek de Oliveira">EMEB Juscelino Kubitschek de Oliveira</option>
          <option value="EMEB Lupércio de Oliveira Köeche">EMEB Lupércio de Oliveira Köeche</option>
          <option value="EMEB Mutirão">EMEB Mutirão</option>
          <option value="EMEB Nicanor Rodrigues Goulart">EMEB Nicanor Rodrigues Goulart</option>
          <option value="EMEB Nossa Senhora da Penha">EMEB Nossa Senhora da Penha</option>
          <option value="EMEB Nossa Senhora dos Prazeres">EMEB Nossa Senhora dos Prazeres</option>
          <option value="EMEB Ondina Neves Bleyer">EMEB Ondina Neves Bleyer</option>
          <option value="EMEB Oscar Schweitzer">EMEB Oscar Schweitzer</option>
          <option value="EMEB Prefeito Waldo Costa">EMEB Prefeito Waldo Costa</option>
          <option value="EMEB Professor Antônio Joaquim Henriques">EMEB Professor Antônio Joaquim Henriques</option>
          <option value="EMEB Professor Eduardo Pedro Amaral">EMEB Professor Eduardo Pedro Amaral</option>
          <option value="EMEB Professor Fausta Rath">EMEB Professor Fausta Rath</option>
          <option value="EMEB Professor Osni Medeiros Régis">EMEB Professor Osni Medeiros Régis</option>
          <option value="EMEB Professor Pedro Cândido">EMEB Professor Pedro Cândido</option>
          <option value="EMEB Professor Trajano">EMEB Professor Trajano</option>
          <option value="EMEB Professora Belizária Rodrigues">EMEB Professora Belizária Rodrigues</option>
          <option value="EMEB Professora Madalena Miranda Largura">EMEB Professora Madalena Miranda Largura</option>
          <option value="EMEB Santa Helena">EMEB Santa Helena</option>
          <option value="EMEB São Vicente">EMEB São Vicente</option>
          <option value="EMEB Saul de Athayde">EMEB Saul de Athayde</option>
          <option value="EMEB Suzana Albino França">EMEB Suzana Albino França</option>

        </select>
      </div>


      <div id="campo-emef" style="display:none;">
        <label for="escola_emef">Selecione Uma Escola EMEF:</label>
        <select name="" id="escola_emef">
          <option value="">-- Selecione --</option>
          <option value="EMEF Antonieta de Barros">EMEF Antonieta de Barros</option>
          <option value="EMEF Barreiros">EMEF Barreiros</option>
          <option value="EMEF Cândido Batista Dias (Rancho de Tabuas)">EMEF Cândido Batista Dias (Rancho de Tabuas)</option>
          <option value="EMEF Dom Honorato Piazzera(São Sebastião)">EMEF Dom Honorato Piazzera(São Sebastião)</option>
          <option value="EMEF Gramados">EMEF Gramados</option>
          <option value="EMEF Irene Rafaeli de Andrade(Cadeado)">EMEF Irene Rafaeli de Andrade(Cadeado)</option>
          <option value="EMEF Macacos">EMEF Macacos</option>
          <option value="EMEF Pedras Brancas (Mirantes)">EMEF Pedras Brancas (Mirantes)</option>
          <option value="EMEF Professor Edson Pereira (Potreiros)">EMEF Professor Edson Pereira (Potreiros)</option>
          <option value="EMEF Professora Eni Rosa Dos Santos (Cajurú)">EMEF Professora Eni Rosa Dos Santos (Cajurú)</option>
          <option value="EMEF Rio Câdeado">EMEF Rio Câdeado</option>
          <option value="EMEF Salto do Caveiras">EMEF Salto do Caveiras</option>
          <option value="EMEF Serraria Segredo(Pedras Brancas)">EMEF Serraria Segredo(Pedras Brancas)</option>
          <option value="EMEF Vergílio Godinho (Lambedor)">EMEF Vergílio Godinho (Lambedor)</option>
          <option value="EMEF Visconde de Araguaia (Coxilha Rica)">EMEF Visconde de Araguaia (Coxilha Rica)</option>

        </select>
      </div>

      <!-- Valida qual campo foi o tipo de escola selecionado -->

      <script>
        function mostrarCampoCeim() {
          var tipoEscola = document.getElementById("tipo_escola").value;
          if (tipoEscola === "ceim") {
            document.getElementById("campo-ceim").style.display = "block";
            document.getElementById("escola_emef").setAttribute("name", "");
            document.getElementById("escola_emeb").setAttribute("name", "");
            document.getElementById("escola_ceim").setAttribute("name", "nome_escola");
          } else {
            document.getElementById("campo-ceim").style.display = "none";
          }
        }

        function mostrarCampoEmeb() {
          var tipoEscola = document.getElementById("tipo_escola").value;
          if (tipoEscola === "emeb") {
            document.getElementById("campo-emeb").style.display = "block";
            document.getElementById("escola_emef").setAttribute("name", "");
            document.getElementById("escola_emeb").setAttribute("name", "nome_escola");
            document.getElementById("escola_ceim").setAttribute("name", "");
          } else {
            document.getElementById("campo-emeb").style.display = "none";
          }
        }

        function mostrarCampoEmef() {
          var tipoEscola = document.getElementById("tipo_escola").value;
          if (tipoEscola === "emef") {
            document.getElementById("campo-emef").style.display = "block";
            document.getElementById("escola_emef").setAttribute("name", "nome_escola");
            document.getElementById("escola_emeb").setAttribute("name", "");
            document.getElementById("escola_ceim").setAttribute("name", "");
          } else {
            document.getElementById("campo-emef").style.display = "none";
          }
        }
      </script>

      <label for="genero">Sexo:</label>
      <select name="genero" id="genero" required>

        <option value="">Selecione uma opção</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
        <option value="Outro">Outro</option>
      </select>


      <label for="formulario">Formulario:</label>
      <select id="formulario" name="formulario">
        <option value=""></option>
        <option value="Matricula">Matrícula</option>
        <option value="Rematricula">Rematrícula</option>
      </select>
      <br>

      <label for="ensino_escolar">Nivel Escolar:</label>
      <select name="ensino_escolar" id="ensino_escolar" required>
        <option value=""></option>
        <option value="Infantil">Educação Infantil</option>
        <option value="Fundamental">Ensino Fundamental</option>
        <option value="Medio">Ensino Médio</option>
      </select>

      <label for="periodo">Turno:</label>
      <select name="periodo" id="periodo" required>
        <option value="">Selecione um turno</option>
        <option value="Matutino">Matutino</option>
        <option value="Vespertino">Vespertino</option>
        <option value="Noturno">Noturno</option>
        <option value="Integral">Integral</option>
      </select>


      <label for="cep">CEP:</label>
      <input type="text" name="cep" id="cep" placeholder="00000-000" pattern="\d{5}-?\d{3}" required>

      <div id="endereco">
        <label for="logradouro">Logradouro:</label>
        <input type="text" name="logradouro" id="logradouro" readonly>

        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="bairro" readonly>

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade" readonly>

        <label for="numero">Número:</label>
        <input type="text" name="numero" id="numero" required>

        <label for="complemento">Complemento:</label>
        <input type="text" name="complemento" placeholder="Ex: Apto 301, Bloco B" id="complemento" required>
      </div>

      <div id="mae">
        <label for="nome_mae">Nome da mãe:</label>
        <input type="text" name="nome_mae" id="nome_mae" required>

        <label for="tel_mae">Telefone:</label>
        <input type="tel" name="tel_mae" id="tel_mae" placeholder="Ex: (99) 99999-9999" pattern="\d{10,11}" required>

        <label for="profi_mae">Profissão:</label>
        <input type="text" name="profi_mae" id="profi_mae" required>

        <label for="cpf_mae">Nº CPF:</label>
        <input type="text" name="cpf_mae" id="cpf_mae" placeholder="000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required>

        <label for="email_mae">Email:</label>
        <input type="email" name="email_mae" placeholder="usuario@dominio.com" id="email_mae" required>
      </div>

      <label for="pai_registro">O Nome do pai consta no registro?</label>
      <select name="pai_registro" id="pai_registro" required>
        <option value="">-- Selecione --</option>
        <option value="sim">Sim</option>
        <option value="nao">Não</option>
      </select>



      <div id="pai">
        <label for="nome_pai">Nome:</label>
        <input type="text" name="nome_pai" id="nome_pai">

        <label for="tel_pai">Telefone:</label>
        <input type="tel" name="tel_pai" id="tel_pai" placeholder="Ex: (99) 99999-9999" pattern="\d{10,11}">

        <label for="profi_pai">Profissão:</label>
        <input type="text" name="profi_pai" id="profi_pai">

        <label for="cpf_pai">Nº CPF:</label>
        <input type="text" name="cpf_pai" id="cpf_pai" placeholder="000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">

        <label for="email_pai">E-mail:</label>
        <input type="email" name="email_pai" placeholder="usuario@dominio.com" id="email_pai">

      </div>



      <input type="submit" value="Enviar" name="submit" id="submit">



      <script>
        // Verifica qual é o valor de pai_registro  e adiciona os campos ou mantem oculto
        $(document).ready(function() {
          function toggleCamposPai() {
            var paiRegistro = $('#pai_registro').val();

            if (paiRegistro === 'sim') {
              $('#pai').show();
            } else {
              $('#pai').hide();
            }
          }

          $('#pai_registro').on('change', toggleCamposPai);

          // Ocultar campos do pai no carregamento inicial
          toggleCamposPai();
        });


        // Busca o endereço a partir do CEP informado
        function buscaEndereco(cep) {
          // Monta a URL da API do ViaCEP com o CEP informado
          const url = `https://viacep.com.br/ws/${cep}/json/`;

          // Faz a requisição à API
          fetch(url)
            .then(response => response.json())
            .then(data => {
              // Preenche os campos de logradouro, bairro e cidade com os valores retornados pela API
              document.getElementById("logradouro").value = data.logradouro;
              document.getElementById("bairro").value = data.bairro;
              document.getElementById("cidade").value = data.localidade;
            })
            .catch(error => console.error(error));
        }

        // Adiciona o evento de "blur" no campo de CEP
        const cepInput = document.getElementById("cep");
        cepInput.addEventListener("blur", () => {
          const cep = cepInput.value.replace(/\D/g, ""); // Remove todos os caracteres não numéricos do CEP
          if (cep.length === 8) { // Verifica se o CEP tem 8 dígitos
            buscaEndereco(cep);
          }
        });
      </script>

    </fieldset>

  </form>

  <script>
    //Função para validar CPF
    function validarCPF(cpf) {
      cpf = cpf.replace(/[^\d]+/g, '');
      if (cpf == '') return false;
      // Elimina CPFs invalidos conhecidos    
      if (cpf.length != 11 ||
        cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999")
        return false;
      // Valida 1° digito 
      add = 0;
      for (i = 0; i < 9; i++)
        add += parseInt(cpf.charAt(i)) * (10 - i);
      rev = 11 - (add % 11);
      if (rev == 10 || rev == 11)
        rev = 0;
      if (rev != parseInt(cpf.charAt(9)))
        return false;
      // Valida 2° digito 
      add = 0;
      for (i = 0; i < 10; i++)
        add += parseInt(cpf.charAt(i)) * (11 - i);
      rev = 11 - (add % 11);
      if (rev == 10 || rev == 11)
        rev = 0;
      if (rev != parseInt(cpf.charAt(10)))
        return false;
      return true;
    }



    // Seleciona os elementos HTML dos campos de input para o CPF do pai e da mãe
     const cpfPaiInput = document.getElementById('cpf_pai');
     const cpfMaeInput = document.getElementById('cpf_mae');

     // Adiciona o evento de "blur" no campo de CPF Pai
    cpfPaiInput.addEventListener('blur', () => {
      if (!validarCPF(cpfPaiInput.value)) {
        alert('CPF do pai inválido');
        cpfPaiInput.value = '';
        cpfPaiInput.focus();
      }
    });

    // Adiciona o evento de "blur" no campo de CPF Mãe
    cpfMaeInput.addEventListener('blur', () => {
      if (!validarCPF(cpfMaeInput.value)) {
        alert('CPF da mãe inválido');
        cpfMaeInput.value = '';
        cpfMaeInput.focus();
      }
    });


    //Função para validar RG
    function validarRG(rg) {
      rg = rg.replace(/[^\d]+/g, '');
      if (rg == '') return false;
      // Verifica se o RG possui de 7 a 10 caracteres
      if (rg.length < 7 || rg.length > 10) return false;
      // Verifica se todos os caracteres são números
      if (!/^\d{7,10}$/.test(rg)) return false;
      return true;
    }

    function validarCEP(cep) {
      cep = cep.replace(/[^\d]+/g, '');
      if (cep == '') return false;
      // Verifica se o CEP possui 8 caracteres
      if (cep.length != 8) return false;
      // Verifica se o CEP está no formato correto (xxxxx-xxx ou xxxxxxxx)
      if (!/^\d{5}-?\d{3}$/.test(cep)) return false;
      return true;
    }

    //Função para validar os Campos do formulario
    function validarFormulario() {
      var nome = document.getElementById("nome").value;
      var cpf = document.getElementById("cpf").value;
      var rg = document.getElementById("rg").value;
      var data_nascimento = document.getElementById("data_nascimento").value;
      var nivel_ensino = document.getElementById("nivel_ensino").value;
      var cp = document.getElementById("cp").value;



      if (nome == "" || cpf == "" || rg == "" || data_nascimento == "" || nivel_ensino == "") {
        alert("Todos os campos são obrigatórios!");
        return false;
      }
    }