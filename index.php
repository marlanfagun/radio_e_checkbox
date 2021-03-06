<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Teste de Checkbox</title>
</head>

<body>
  <div class="container ">
    <div class="mt-5">
      <h3>Selecionar as opções abaixo para salvar:</h3>
      <form action="salvar.php" method="POST">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="check[]" value="Opção 01"  id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">Check 01</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="check[]" value="Opção 02"  id="defaultCheck2">
          <label class="form-check-label" for="defaultCheck2">Check 02</label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="Radio 1">
          <label class="form-check-label" for="inlineRadio1">Radio 1</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="Radio 2">
          <label class="form-check-label" for="inlineRadio2">Radio 2</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="Radio 3">
          <label class="form-check-label" for="inlineRadio2">Radio 3</label>
        </div><br>

        <button type="submit" class="btn btn-success" name="btnSalvar">Salvar</button>
      </form>
    </div>
  </div>











  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>