<!DOCTYPE html>
<html>

<head lang="pt-br">
  <!-- Essential metadatas -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="/app-help-desk/assets/logo.png">
  <!-- Style -->
  <link rel="stylesheet" href="/app-help-desk/style/bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="/app-help-desk/style/style.css">

  <title>App Help Desk</title>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a href="#top" class="navbar-brand">
      <img src="/app-help-desk/assets/logo.png" alt="Logo da Página" class="d-inline-block align-top">
      App Help Desk
    </a>
  </nav>

  <div class="container">
    <div class="row">
      <div class="card-padrao">

      <div class="card">
        <div class="card-header">Abertura de chamado</div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <form>
                <div class="form-group">
                  <label for="">Título</label>
                  <input type="text" placeholder="Título" class="form-control">
                </div>

                <div class="form-group">
                  <label for="">Categoria</label>
                  <select class="form-control">
                    <option value="">Criação Usuário</option>
                    <option value="">Impressora</option>
                    <option value="">Hardware</option>
                    <option value="">Software</option>
                    <option value="">Rede</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Descrição</label>
                  <textarea rows="3" class="form-control"></textarea>
                </div>

                <div class="row mt-5">
                  <div class="col-6">
                    <button class="btn btn-lg btn-warning btn-block" type="submit">Voltar</button>
                  </div>
                  <div class="col-6">
                    <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>

</body>

</html>