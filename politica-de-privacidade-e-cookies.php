<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<?php include 'components/user_header.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Privacidade e Cookies</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <style>

        body {
            font-family: 'Montserrat', sans-serif;
        }

        header {
            
            color: #fff;
            text-align: center;
        }

        main {
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            margin: 0;
            font-size: 3.5rem;
            color: black;
            padding: 3rem;
        
        }

        h2 {
            margin-top: 2rem;
            font-size: 3rem;
            color: #DA2C32;
            text-align: center;
            padding: 2rem;
        }

        h3 {
            margin-top: 1.5rem;
            font-size: 1.8rem;
        }

        p {
            margin-bottom: 1.5rem;
            font-size: 1.4rem;
        }

        .separator {
            width: 100%;
            height: 1px;
            background-color: #333;
            margin: 2rem 0;
        }

        .image-container {
            display: flex;
            justify-content: center; 
            margin: 2rem auto;
        }

        .image-container img {
            max-width: 50%;
            height: auto;
            padding: 1rem;
            display: block;
        }

    </style>
</head>
<body>
    <header>
        <h1>Política de Privacidade e Cookies</h1>
    </header>

    <div class="image-container">
            <img src="images/polkies.png" alt="Imagem de exemplo">
        </div>

    <main>
        <section id="privacidade">
            <h2>Privacidade</h2>
            <p>
                Bem-vindo(a) à política de privacidade e cookies do Fraseadotec Imob. Nós valorizamos a
                sua privacidade e estamos comprometidos em proteger as suas informações pessoais.
                Abaixo, explicamos como coletamos, usamos e protegemos seus dados:
            </p>

            <h3>1. Coleta de informações</h3>
            <p>
                Coletamos informações pessoais, como nome, endereço de e-mail, número de telefone, e preferências 
                de busca de imóveis. Essas informações são
                fornecidas por você voluntariamente através de nosso site ou aplicativo.
            </p>

            <h3>2. Uso das informações</h3>
            <p>
                As informações coletadas são usadas para fornecer os serviços da plataforma,
                incluindo a busca de imóveis, a exibição de anúncios relevantes e o contato com
                você sobre oportunidades imobiliárias. Também podemos utilizar os dados para fins
                de marketing, desde que você tenha dado o seu consentimento.
            </p>

            <h3>3. Compartilhamento de informações</h3>
            <p>
                Suas informações pessoais não serão compartilhadas com terceiros sem o seu
                consentimento, exceto quando necessário para fornecer os serviços da plataforma,
                como para os proprietários dos imóveis anunciados ou para fins legais quando
                exigido por lei.
            </p>

            <h3>4. Segurança dos dados</h3>
            <p>
                Empregamos medidas de segurança para proteger suas informações contra acesso não
                autorizado ou uso indevido. No entanto, lembre-se de que nenhum método de transmissão
                pela Internet ou método de armazenamento eletrônico é 100% seguro.
            </p>

            <h3>5. Seus direitos</h3>
            <p>
                Você tem o direito de acessar, atualizar, corrigir ou excluir suas informações
                pessoais. Caso queira exercer esses direitos, entre em contato conosco através dos
                canais fornecidos no final desta política.
            </p>
        </section>

        <div class="separator"></div>

        <section id="cookies">
            <h2>Cookies</h2>
            <p>
                O Fraseadotec Imob utiliza cookies para melhorar a sua experiência em nosso
                site. Cookies são pequenos arquivos de texto que são armazenados em seu dispositivo
                quando você visita nosso site. Abaixo, explicamos como utilizamos cookies:
            </p>

            <h3>1. Cookies essenciais</h3>
            <p>
                Utilizamos cookies essenciais que são necessários para o funcionamento básico do
                site, como permitir o acesso a áreas restritas e autenticação de usuários. Estes
                cookies não coletam informações pessoais.
            </p>

            <h3>2. Cookies de desempenho</h3>
            <p>
                Utilizamos cookies de desempenho para acompanhar o tráfego do site e entender como
                os usuários interagem com ele. Essas informações são usadas para melhorar o
                desempenho e a usabilidade do site.
            </p>

            <h3>3. Gerenciando cookies</h3>
            <p>
                Você pode gerenciar suas preferências de cookies através das configurações do seu
                navegador. Note que desativar determinados cookies pode afetar a funcionalidade do
                site.
            </p>
        </section>
    </main>








<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>



</body>

</html>

