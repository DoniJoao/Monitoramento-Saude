
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/color-modes.js"></script>

    <title>Sistema Acadêmico</title>
</head>

<body>
    <!-- Cabecalho pagina -->
    <session>
        <header class="d-block p-5 text-bg-dark">
            <div class="container">
                <div class="d-flex ">
                    <!-- Titulo página -->
                    <div class="col-sm-6">
                        <h3>Sistema de controle de saude</h3>
                    </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Página Inicial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="medicamentos/medicamento-listar.php">Ver Seus Medicamentos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="medicamentos/medicamento-inserir.php">Cadastrar novo Medicamento</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </session>

    <div class="container">

        <div class="my-2">
            <div class="row justify-content-between">
                <div class="col-3">
                    <h3>
                        NOVO MEDICAMENTO
                    </h3>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-3"></div>
                <div class="col-6 bg-light p-3">
                    <form enctype="multipart/form-data" action="alunos-gravar.php" method="POST">
                        <div class="mb-3">
                            <label for="txtnome" class="form-label">Nome do medicamento</label>
                            <input type="text" name="txtnome" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtemail" class="form-label">Descrição:</label>
                            <input type="text" name="txtemail" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtfoto" class="form-label">Quantidade de doses:</label>
                            <input type="number" name="Quantidade" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="selturma" class="form-label">Tipo de medicamento:</label>
                            <select name="selturma" class="form-control">
                                <option value=''>Selecione...</option>
                                <option value='1'>Genérico</option>
                                <option value='2'>Referência</option>
                                <option value='3'>Similar</option>
                                                        </select>
                                                        </div>
                                                        <div class="mb-3">
                            <label for="txtfoto" class="form-label">Começo do tratamento:</label>
                            <input type="date" name="Quantidade" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="txtfoto" class="form-label">Final do tratamento:</label>
                            <input type="date" name="Quantidade" class="form-control">
                        </div>

                        </div>
                        <button type="submit" class="btn btn-primary btn-block">ADICIONAR</button>

                    </form>
                </div>
                <div class="col-3"></div>

            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>