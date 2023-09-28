<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sobre nós</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-img.png" alt="">
      </div>
      <div class="content">
         <h3>Por que escolher-nos?</h3>
         <p><h2>Experiência e Profissionalismo: <span style="font-weight: normal;">Equipe experiente e dedicada.</span></h2>
         <br>
<h2>Ampla Seleção de Propriedades: <span style="font-weight: normal;">Diversidade de opções disponíveis.</span></h2>
<br>
<h2>Atendimento Personalizado: <span style="font-weight: normal;">Abordagem adaptada às suas necessidades.</span></h2>
<br>
<h2>Agentes Especializados: <span style="font-weight: normal;">Especialistas locais oferecendo orientação confiável.</span></h2>
<br>
<h2>Simplificado: <span style="font-weight: normal;">Facilitamos a pesquisa, aluguel e compra de propriedades.</span></h2>
<br>
<h2>Suporte Contínuo: <span style="font-weight: normal;">Estamos aqui para ajudar mesmo após a compra.</span></h2>
<br>
<h2>Satisfação do Cliente: <span style="font-weight: normal;">Priorizamos a felicidade e satisfação dos clientes.</span></p></h2>
         <a href="contato.php" class="inline-btn">Contate-nos</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 passos simples</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Pesquisa de propriedade</h3>
         <p>Encontre a propriedade ideal com nossa pesquisa abrangente. Explore opções de casas encantadoras e apartamentos modernos em diversas localizações.</p>
      </div>
      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Contatar agentes</h3>
         <p>Nossos experientes agentes imobiliários estão prontos para ajudá-lo. Receba orientação personalizada e apoio em todas as etapas do processo até a posse.</p>
      </div>
      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Aproveite a propriedade</h3>
         <p>Parabéns pela sua nova propriedade! Agora é hora de desfrutar do seu novo lar. Conte com nossa equipe para qualquer suporte futuro necessário.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">comentários do cliente</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>Juliana Mendes</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
         <p>"Encontrei minha casa dos sonhos graças à pesquisa de propriedade fácil e intuitiva. Foi incrível como encontrei exatamente o que procurava!"</p>
      </div>
     <div class="box">
         <div class="user">
            <img src="images/pic-5.png" alt="">
            <div>
               <h3>Pedro Almeida</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
         <p>"Minha experiência com a plataforma de pesquisa foi excelente. Pude filtrar as opções de acordo com meus critérios e encontrar a casa perfeita!" </p>
      </div>


      <div class="box">
         <div class="user">
            <img src="images/pic-3.png" alt="">
            <div>
               <h3>Rafael Mendes</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>"Os agentes foram muito atenciosos e me ajudaram a negociar o melhor preço para minha nova casa. Estou extremamente feliz com a compra!"</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.png" alt="">
            <div>
               <h3>João Oliveira</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>"O suporte dos agentes foi fundamental para tomar a decisão certa. Eles me ajudaram a encontrar o apartamento perfeito para minha família!"</p>
      </div>
            <div class="box">
         <div class="user">
            <img src="images/pic-2.png" alt="">
            <div>
               <h3>Lucas Silva</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
         <p>"Os agentes imobiliários foram extremamente prestativos, tornando todo o processo de compra tão tranquilo. Estou muito satisfeito com minha escolha!"</p>
      </div>
      <div class="box">
         <div class="user">
            <img src="images/pic-6.png" alt="">
            <div>
               <h3>Gabriela Oliveira</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>"Finalmente tenho meu próprio cantinho graças à equipe dedicada desta empresa. Agradeço por tornarem todo o processo suave e sem estresse!"</p>
      </div>

   </div>

</section>

<!-- review section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>