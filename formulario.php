<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Formulário</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script
      src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"
      crossorigin="anonymous"
    ></script>
    <!-- Google fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/steps.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />

</head>
<body>
<nav
      class="navbar navbar-expand-lg navbar-dark fixed-top header-vitae"
      id="mainNav"
    >
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">
          <img
            class="logo-vitae"
            src="./assets/img/logos/logo-vitae-png.png"
            alt="Logo Vitae Solutions"
          />
        </a>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          Menu
          <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio"
                >Serviços</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#jobs">Vagas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <form class="container" style="margin-top: 10%; margin-bottom: 5%" id="example-basic">
      <h3>Informações pessoais</h3>
      <section>
        <div class="row form-group">
          <div class="col-4">
            <label for="name">Nome</label>
            <input id="name" type="text" class="input-group">
          </div>
          <div class="col-4">
            <label for="email">E-mail</label>
            <input id="email" type="email" class="input-group">
          </div>
          <div class="col-4">
            <label for="phone">Celular</label>
            <input id="phone" type="tel" class="input-group">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-4">
            <label for="tax">CPF</label>
            <input id="tax" type="text" class="input-group">
          </div>
          <div class="col-4">
            <label for="cv">Anexar CV</label>
            <input id="cv" type="file" class="input-group">
          </div>
          <div class="col-4">
            <label for="linkedin">LinkedIn</label>
            <input id="linkedin" type="text" class="input-group">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-4">
            <label for="date">Data de nascimento</label>
            <input id="date" type="date" class="input-group">
          </div>
          <div class="col-4">
            <label for="gender">Sexo</label>
            <select class="input-group" name="" id="gender">
              <option value="" disabled selected>Selecione</option>
              <option value="Masculino">Masculino</option>
              <option value="Feminino">Feminino</option>
              <option value="Outro">Outro</option>
            </select>
          </div>
          <div class="col-4">
            <label for="maritalStatus">Estado civil</label>
            <select class="input-group" name="" id="maritalStatus">
              <option value="" disabled selected>Selecione</option>
              <option value="Casado(a)">Casado(a)</option>
              <option value="Solteiro(a)">Solteiro(a)</option>
              <option value="Divorciado(a)">Divorciado(a)</option>
              <option value="Indeterminado(a)">Indeterminado(a)</option>
              <option value="Separado(a)">Separado(a)</option>
              <option value="Viúvo(a)">Viúvo(a)</option>
            </select>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-4">
            <label for="schooling">Escolaridade</label>
            <select class="input-group" name="" id="schooling">
              <option value="" disabled selected>Selecione</option>
              <option value="Ensino fundamental incompleto">Ensino fundamental incompleto</option>
              <option value="Ensino fundamental cursando">Ensino fundamental cursando</option>
              <option value="Ensino fundamental completo">Ensino fundamental completo</option>
              <option value="Ensino médio incompleto">Ensino médio incompleto</option>
              <option value="Ensino médio cursando">Ensino médio cursando</option>
              <option value="Ensino médio completo">Ensino médio completo</option>
              <option value="Ensino superior incompleto">Ensino superior incompleto</option>
              <option value="Ensino superior cursando">Ensino superior cursando</option>
              <option value="Ensino superior completo">Ensino superior completo</option>
              <option value="Pós graduação incompleto">Pós graduação incompleto</option>
              <option value="Pós graduação cursando">Pós graduação cursando</option>
              <option value="Pós graduação completo">Pós graduação completo</option>
              <option value="MBA incompleto">MBA incompleto</option>
              <option value="MBA cursando">MBA cursando</option>
              <option value="MBA completo">MBA completo</option>
              <option value="Doutorado incompleto">Doutorado incompleto</option>
              <option value="Doutorado cursando">Doutorado cursando</option>
              <option value="Doutorado completo">Doutorado completo</option>
            </select>
          </div>
          <div class="col-4">
            <label for="languages">Idiomas</label>
            <select class="input-group" name="" id="languages">
              <option value="" disabled selected>Selecione</option>
              <option value="Inglês">Inglês</option>
              <option value="Espanhol">Espanhol</option>
              <option value="Alemão">Alemão</option>
              <option value="Francês">Francês</option>
              <option value="Italiano">Italiano</option>
              <option value="Outro">Outro</option>
            </select>
          </div>
          <div class="col-4">
            <label for="languageLevel">Nível</label>
            <select class="input-group" name="" id="languageLevel">
              <option value="" disabled selected>Selecione</option>
              <option value="Básico">Básico</option>
              <option value="Intermediário">Intermediário</option>
              <option value="Avançado">Avançado</option>
              <option value="Fluente">Fluente</option>
              <option value="Nativo">Nativo</option>
            </select>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-4">
            <label for="workingActually">Trabalhando atualmente</label>
            <select class="input-group" name="" id="workingActually">
              <option value="" disabled selected>Selecione</option>
              <option value="Sim">Sim</option>
              <option value="Não">Não</option>
            </select>
          </div>
          <div class="col-4">
            <label for="acceptTurn">Aceita turno</label>
            <select class="input-group" name="" id="acceptTurn">
              <option value="" disabled selected>Selecione</option>
              <option value="Sim">Sim</option>
              <option value="Não">Não</option>
            </select>
          </div>
          <div class="col-4">
            <label for="availableToTrips">Disponível para viagens</label>
            <select class="input-group" name="" id="availableToTrips">
              <option value="" disabled selected>Selecione</option>
              <option value="Sim">Sim</option>
              <option value="Não">Não</option>
            </select>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-4">
            <label for="availableHalfPeriod">Disponível para meio período</label>
            <select class="input-group" name="" id="availableHalfPeriod">
              <option value="" disabled selected>Selecione</option>
              <option value="Sim">Sim</option>
              <option value="Não">Não</option>
            </select>
          </div>
          <div class="col-4">
            <label for="acceptTemporary">Aceita temporário</label>
            <select class="input-group" name="" id="acceptTemporary">
              <option value="" disabled selected>Selecione</option>
              <option value="Sim">Sim</option>
              <option value="Não">Não</option>
            </select>
          </div>
          <div class="col-4">
            <label for="newJobs">Deseja receber novas vagas?</label>
            <select class="input-group" name="" id="newJobs">
              <option value="" disabled selected>Selecione</option>
              <option value="Sim">Sim</option>
              <option value="Não">Não</option>
            </select>
          </div>
        </div>
      </section>
      <h3>Endereço</h3>
      <section>
        <div class="row form-group">
          <div class="col-4">
            <label for="cepInput">CEP</label>
            <input id="cepInput" type="tel" maxlength="7" class="input-group">
          </div>
          <div class="col-4">
            <label for="ruaInput">Rua</label>
            <input id="ruaInput" type="text" class="input-group">
          </div>
          <div class="col-4">
            <label for="number">Número</label>
            <input id="number" type="tel" class="input-group">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-4">
            <label for="addendum">Complemento</label>
            <input id="addendum" type="text" class="input-group">
          </div>
          <div class="col-4">
            <label for="bairroInput">Bairro</label>
            <input id="bairroInput" type="text" class="input-group">
          </div>
          <div class="col-4">
            <label for="ufInput">Estado</label>
            <input id="ufInput" type="tel" class="input-group">
          </div>
        </div>
      </section>
      <h3>Experiência profissional</h3>
      <section>
          <p>The next and previous buttons help you to navigate through your content.</p>
      </section>
    </form>
    <footer class="footer py-4 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 text-lg-left">
            <img
              src="./assets/img/logos/logo-vitae-png.png"
              width="150"
              alt="Logo Vitae"
            />
            <p class="mt-2">Copyright © Vitae Solutions 2020</p>
          </div>
          <div class="col-lg-4 my-3 my-lg-0">
            <a class="btn btn-dark btn-social mx-2" href="#!"
              ><i class="fab fa-twitter"></i
            ></a>
            <a class="btn btn-dark btn-social mx-2" href="#!"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a class="btn btn-dark btn-social mx-2" href="#!"
              ><i class="fab fa-linkedin-in"></i
            ></a>
          </div>
          <!-- <div class="col-lg-4 text-lg-right">
            <a class="mr-3" href="#!">Privacy Policy</a>
            <a href="#!">Terms of Use</a>
          </div> -->
        </div>
      </div>
    </footer>
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="./js/jquery.steps.min.js"></script>
    <script src="./js/form.js"></script>
    <script>
      const cepInput = document.querySelector("#cepInput");
      const ruaInput = document.querySelector("#ruaInput");
      const bairroInput = document.querySelector("#bairroInput");
      const ufInput = document.querySelector("#ufInput");

      cepInput.oninput = async () => {
        if (cepInput.value.length < 7) return

        console.log(cepInput.value)

        const response = await fetch(
          `https://proxier.now.sh/api?url=https://viacep.com.br/ws/${cepInput.value}/json`
        );
        const data = await response.json();
        const { logradouro, bairro, uf, cep } = data;

        ruaInput.value = logradouro;
        bairroInput.value = bairro;
        ufInput.value = uf;
        cepInput.value = cep;
      };
    </script>
</body>
</html>