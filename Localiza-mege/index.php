<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2ecd7b4161.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style-index.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>
          <h1>Localiza-mege</h1>
        </header>
        <form action="Grupos_de_carros.php" method="post">
    <section id="dados">
            <div class="row">
        <div class="col-5 ">
          <label for="exampleFormControlInput1" class="form-label" id="local"></label>
          <input type="text" class="form-control input" name="local-retirada" placeholder="Digite o local de retirada"  >
          </div>
          <div class="col-3 ">
          <label for="exampleFormControlInput1" class="form-label"></label>
          <input type="date" class="form-control input " id="exampleFormControlInput2" name="data-retirada" placeholder="Data:">
        </div>
        <div class="col-3">
          <label for="exampleFormControlInput1" class="form-label"></label>
          <input type="time" class="form-control input " id="exampleFormControlInput1" name="hora-retirada" placeholder="Hora:">
        </div>
        </div>
        <div class="row">
        <div class="col-5">
          <label for="exampleFormControlInput1" class="form-label" id="local" ></label>
          <input type="text" class="form-control input" name="local-devolucao" placeholder="Digite o local de devolucao">
          </div>
          <div class="col-3">
          <label for="exampleFormControlInput1" class="form-label"></label>
          <input type="date" class="form-control input " id="exampleFormControlInput1" name="data-devolucao" placeholder="Data:">
        </div>
        <div class="col-3">
          <label for="exampleFormControlInput1" class="form-label"></label>
          <input type="time" class="form-control input" id="exampleFormControlInput1" name="hora-devolucao" placeholder="Hora:">
        </div>
        </div>
        <div id="date">
          <h1 id="data">Dados Pessoais</h1>
        </div>
              <div class="row ">
                <div class="col-4 mb-3">
                  <input type="text" class="form-control input" placeholder="Nome" name="nome">
                </div>
                <div class="col-4 mb-3">
                  <input type="text" class="form-control input" placeholder="Número" name="numero">
                </div>
                <div class="col-3 mb-3">
                  <input type="text" class="form-control input " placeholder="Cupom" name="cupom">
                </div>
              </div>
              <div class="row">
                <div class="col-4 mb-3">
                  <input type="text" class="form-control input" placeholder="CPF" name="cpf">
                </div>
                <div class="col-4 mb-3">
                  <input type="text" class="form-control input" placeholder="E-mail" name="email">
                </div>
                <div class="col-3 mb-3">
                  <input type="text" class="form-control input" placeholder="Nacionalidade" name="nacionalidade">
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <input type="submit" class="form-control botton">
                </div>
                <div class="col">
        </div>
        </div>
        </form>
    </section>
</div>
</body>
</html>
