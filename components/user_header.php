<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="inicio.php" class="logo"><i class="fas fa-house"></i>Frtec Imob</a>

         <ul>
            <li><a href="postagem_propriedade.php">Postar propriedade<i class="fas fa-paper-plane"></i></a></li>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="#">Minha lista<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="painel.php">Painel</a></li>
                     <li><a href="postagem_propriedade.php">Postar propriedade</a></li>
                     <li><a href="minhas_listas.php">Minha lista</a></li>
                  </ul>
               </li>
               <li><a href="#">Opções<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="pesquisa.php">Pesquisa de filtro</a></li>
                     <li><a href="listas.php">Toda a lista</a></li>
                  </ul>
               </li>
               <li><a href="#">Ajuda<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="sobre.php">Sobre nós</a></i></li>
                     <li><a href="contato.php">Contate-nos</a></i></li>
                     <li><a href="contato.php#faq">FAQ</a></i></li>
                  </ul>
               </li>
            </ul>
         </div>

         <ul>
            <li><a href="salvo.php">Salvo <i class="far fa-heart"></i></a></li>
            <li><a href="#">Conta <i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="login.php">Entrar</a></li>
                  <!-- <li><a href="register.php">registrar novo</a></li> -->
                  <?php if($user_id != ''){ ?>
                  <li><a href="atualização.php">Atualizar perfil</a></li>
                  <li><a href="components/user_logout.php" onclick="return confirm('sair deste site?');">Sair</a>
                  <?php } ?></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->