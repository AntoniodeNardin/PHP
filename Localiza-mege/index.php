<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2ecd7b4161.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>

        input[type="date"]:before {
  color: grey;
  content: attr(placeholder) !important;
  margin-right: 0.5em;
}
input[type="date"]:focus:before {
  content: '' !important;
}
input[type="time"]:before {
  color: grey;
  content: attr(placeholder) !important;
  margin-right: 0.5em;
}
input[type="time"]:focus:before {
  content: '' !important;
}

i{
    margin-left: 230px;
    padding: 0;
}
#dados{
    background-color: #004A33;
}
header{
    height: 120px;
    margin-top: 20px;
    background-color: #009849;
}
.input{
    padding: 15px;
    margin: 0px 20px;
}
.botao{
    padding: 0px;
}
    </style>
</head>
<body>
    <div class="container">
        <header></header>
    <section id="dados">
        <form action="Grupos_de_carros.php" method="post">
            <div class="row">
        <div class="col-5 mb-3">
          <label for="exampleFormControlInput1" class="form-label" id="local"></label>
          <input type="text" class="form-control input" name="local-retirada" placeholder="Digite o local de retirada"  >
          </div>
          <div class="col-3 mb-3">
          <label for="exampleFormControlInput1" class="form-label"></label>
          <input type="date" class="form-control input " id="exampleFormControlInput2" name="data-retirada" placeholder="Data:">
        </div>
        <div class="col-3 mb-3">
          <label for="exampleFormControlInput1" class="form-label"></label>
          <input type="time" class="form-control input " id="exampleFormControlInput1" name="hora-retirada" placeholder="Hora:">
        </div>
        </div>
        <div class="row">
        <div class="col-5 mb-3">
          <label for="exampleFormControlInput1" class="form-label" id="local" ></label>
          <input type="text" class="form-control input" name="local-devolucao" placeholder="Digite o local de devolucao">
          </div>
          <div class="col-3 mb-3">
          <label for="exampleFormControlInput1" class="form-label"></label>
          <input type="date" class="form-control input " id="exampleFormControlInput1" name="data-devolucao" placeholder="Data:">
        </div>
        <div class="col-3 mb-3">
          <label for="exampleFormControlInput1" class="form-label"></label>
          <input type="time" class="form-control input" id="exampleFormControlInput1" name="hora-devolucao" placeholder="Hora:">
        </div>
        <button class=" btn btn-warning btn-md ">Enviar</button>
        </div>
        </div>
        </form>
    </section>
</div>
</body>
</html>
