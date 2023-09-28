<?php

include '../components/connect.php';

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING); 
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING); 

   $select_admins = $conn->prepare("SELECT * FROM `admins` WHERE name = ? AND password = ? LIMIT 1");
   $select_admins->execute([$name, $pass]);
   $row = $select_admins->fetch(PDO::FETCH_ASSOC);

   if($select_admins->rowCount() > 0){
      setcookie('admin_id', $row['id'], time() + 60*60*24*30, '/');
      header('location:painel.php');
   }else{
      $warning_msg[] = 'Usuário ou senha incorretos!';
   }

}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body style="padding-left: 0;">
    
    <style>
        footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    text-align: center;
    background-color: #000;
    padding: 3rem;
    font-size: 2rem;
    color: #eee;   
} 
    </style>
    
<!-- login section starts  -->

<section class="form-container" style="min-height: 100vh;">

   <form action="" method="POST">
      <h3>bem vindo de volta!</h3>
      <input type="text" name="name" placeholder="insira nome de usuário" maxlength="20" class="box" required oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" placeholder="digite a senha" maxlength="20" class="box" required oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="Entrar" name="submit" class="btn">
   </form>

</section>

<!-- login section ends -->















    <footer>
        <div class="créditos">
            <p> Copyright&copy; 2023 <span>Fraseadotec | Tecnologia da Informação</span></p>
        </div>
    </footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/message.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>