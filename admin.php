<?php
    require_once("./api/Database.php");

    if (isset($user['role'])){
        if ($user['role'] != 1){
            header("Location: ./index.php");
        }
        
    } else{
        header("Location: ./index.php");
    }
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
    
            <form enctype="multipart/form-data" style="background: #C0C0C0; padding: 30px; 40px;" action="./api/insert_news.php" method="post">
                <h2 style="text-align: center">Добавление новости</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Загрузите файл</label>
                    <input name="file"  type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Заголовок</label>
                    <input name="title"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Краткое описание</label>
                    <input name="description" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Контент</label>
                    <textarea name="content" id="" cols="30" rows="10" style="display: block; width: 100%; resize: none"></textarea>
                </div>
        
                <button type="submit" class="btn btn-primary">Добавить</button>
              
            </form>
        </div>     
</body>
</html>