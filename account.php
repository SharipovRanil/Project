<?php
    require_once("./api/Database.php");
    if (!$user){
      header('Location: ./sign_in.php');
  }
  $query = $pdo->prepare("SELECT * FROM `tickets` WHERE `id_user`=?");
  $query->execute(array($user['id_user']));
  $result = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
        require_once('./header.php');
     ?>
      <!-- Первый блок -->
      <section class="intro-section">
            <div class="container" style="display: block">

            <?php if(!count($result)) :?>
              <a href="./ticket_form.php">Приобретайте билеты на сайте!</a>
            <?php endif; ?>
            <?php foreach($result as $ticket) :?>
              <div class="ticket-item" style="background: rgb(187, 187, 187); padding: 20px 30px; width: 100%; margin-bottom: 20px">
                <h2>Билет в зоопарк</h2>
                <div style="margin-bottom: 20px;">
                   ФИО: <?=  $ticket['guest_fio'];?>
                 </div>
                 <div style="margin-bottom: 20px;">
                   Дата: <?=  $ticket['ticket_date'];?>
                 </div>
                 <a class="t-btn" style="padding: 10px 0" href="./api/deleteTicket.php?id=<?=  $ticket['id_ticket'];?>">Отменить</a>
               
               </div>
            <?php endforeach; ?>
             
               
             
            </div>
        </section>
        
</body>
</html>