<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- This page CSS -->
  <link rel="stylesheet" href="css/app.css">
  <title>Тест коммуникации</title>  
</head>
<body>
  <p id="page-date"><?= "Страница обновлена : ".NOW();?></p>
  <h3>Тест коммуникации</h3>
  <h4>Laravel <=> JavaScript</h4>

  <form>
   @csrf

    <div class="form-group">
      <label for="age">Сколько Вам лет ?</label>
      <input type="number" class="form-control" id="age" name="age">    
    </div>

          <div id="button-div">
            <button class="btn btn-primary" id="checkButton">Проверить</button>
          </div> 

    <div class="alert alert-info" role="alert" id="info">
      Ваш возраст : <strong>{{$age}}</strong>
    </div>

    <div class="alert alert-danger" role="alert" id="danger">
      Вам не можете купить алкоголь.
    </div>

    <div class="alert alert-success" role="alert" id="success">
      Вам можете купить алкоголь.
    </div>    

  </form>

  <!--JS-->
  <script src="js/checkAge.js"></script>

  </body>
</html>