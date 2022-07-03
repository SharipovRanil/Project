<?php
    require_once("./api/Database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Только CSS -->
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <?php
        require_once('./header.php');
    ?>
        <div class="div" style="max-width: 480px; margin: 0 auto">
    
            <form style="background: #C0C0C0; padding: 30px; 40px;" action="./api/sign-up.php">
                <h2 style="text-align: center">Регистрация</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ваш логин</label>
                    <input name="login"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ваш пароль</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Введите имя</label>
                    <input name="name" type="text" class="form-control" id="exampleInputPassword1">
                </div>
        
                <button type="submit" class="btn btn-primary">Создать профиль</button>
                <div class="">
                    <a href="./sign_in.php">Вход</a>
                </div>
            </form>
        </div>     
</body>
<style>
            form{
    border-radius: 30px;
}
        </style>
</html>