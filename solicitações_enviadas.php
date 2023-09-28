<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
   header('location:login.php');
}

if(isset($_POST['delete'])){

    $delete_id = $_POST['request_id'];
    $delete_id = filter_var($delete_id, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

 
    $verify_delete = $conn->prepare("SELECT * FROM `requests` WHERE id = ?");
    $verify_delete->execute([$delete_id]);
 
    if($verify_delete->rowCount() > 0){
       $delete_request = $conn->prepare("DELETE FROM `requests` WHERE id = ?");
       $delete_request->execute([$delete_id]);
       $success_msg[] = 'Solicitação deletada com sucesso!';
    }else{
       $warning_msg[] = 'Solicitação já deletada!';
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Solicitações enviadas</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="requests">

   <h1 class="heading">Minhas solicitações enviadas</h1>

   <div class="box-container">

   <?php
      $select_requests = $conn->prepare("SELECT * FROM `requests` WHERE sender = ?");
      $select_requests->execute([$user_id]);
      if($select_requests->rowCount() > 0){
         while($fetch_request = $select_requests->fetch(PDO::FETCH_ASSOC)){

        $select_receiver = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
        $select_receiver->execute([$fetch_request['receiver']]);
        $fetch_receiver = $select_receiver->fetch(PDO::FETCH_ASSOC);

        $select_property = $conn->prepare("SELECT * FROM `property` WHERE id = ?");
        $select_property->execute([$fetch_request['property_id']]);
        $fetch_property = $select_property->fetch(PDO::FETCH_ASSOC);
   ?>
   <!-- ... Código anterior ... -->

<div class="box">
    <p>nome : <span><?= $fetch_receiver['name']; ?></span></p>
    <p>número : <a href="tel:<?= $fetch_receiver['number']; ?>"><?= $fetch_receiver['number']; ?></a></p>
    <p>email : <a href="mailto:<?= $fetch_receiver['email']; ?>"><?= $fetch_receiver['email']; ?></a></p>
    <p>solicitação  para : <span><?= $fetch_property['property_name']; ?></span></p>
    <form action="" method="POST">
        <input type="hidden" name="request_id" value="<?= $fetch_request['id']; ?>">
        <input type="submit" value="apagar solicitação" class="btn" onclick="return confirm('Remover este pedido?');" name="delete">
    </form>
    <a href="ver_propriedade.php?get_id=<?= $fetch_property['id']; ?>" class="btn">Ver Propriedade</a>
    <a href="painel.php?get_id=<?= $fetch_request['id']; ?>" class="btn">Painel</a>
</div>

<!-- ... Código posterior ... -->

   <?php
    }
   }else{
      echo '<p class="empty">Nenhuma solicitação enviada!</p>';
      echo '<a href="painel.php" class="btn">Painel</a>';
   }
   ?>

   </div>

</section>

</body>
</html>


<!-- ... Código posterior ... -->


<!-- ... Código posterior ... -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>
<?php include 'components/message.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>

</section>