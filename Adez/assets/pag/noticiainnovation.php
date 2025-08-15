<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AdaNews</title>
  <link rel="stylesheet" href="../css/noticia.css">
  <meta content="noticia da rio innovation week" name="description">
  <link href="../img/Foguete amarelo.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="canonical" href="https://adezcomunica.com/assets/pag/noticiainnovation.html">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
</head>
<body>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
          <a href="/index.html" class="logo d-flex align-items-center me-auto me-lg-0">
            <img src="../img/2.png" alt="logo-ADEZ">
          </a>
          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="/index.html">Página Inicial</a></li>
              <li><a href="./blog.php">AdaNews</a></li>
              <li id="contato"><a href="/assets/pag/contato.html">Contato</a></li>
              <?php
              if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) {
                // Exibir o nome do usuário e o ícone
                echo '<li class="dropdown">
                        <a  id="userMenu" class="dropdown-toggle">
                            <ion-icon name="person-circle-outline"></ion-icon>
                            Bem-vindo, ' . htmlspecialchars($_SESSION['usuario'], ENT_QUOTES, 'UTF-8') . '
                        </a>
                        <ul class="dropdown-menu" id="dropdownOptions">
                            <li><a href="/assets/php/logout.php">Sair</a></li>
                        </ul>
                      </li>';
            } else { 
                echo '<li><a href="/assets/pag/login.html">Login</a></li>';
            }
            ?>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
        </div>
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '323174092715612');
          fbq('track', 'PageView');
          </script>
          <noscript><img height="1" width="1" style="display:none"
          src="https://www.facebook.com/tr?id=323174092715612&ev=PageView&noscript=1"
          /></noscript>
          <!-- End Meta Pixel Code -->
           <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-GKH2X96WJW"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-GKH2X96WJW');
        </script>
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PGZQLT2P');</script>
  <!-- End Google Tag Manager -->
      </header>
        <main class="container">
            <article>
                <header>
                    <h1>Rio Innovation Week 2024: Economia, IA e Diversidade!</h1>
                    <p class="meta">Lucas Bichão e Brendon Esteves - 31/07/2024</p>
                </header>
                <img class="imagemnoticia" src="../img/innovation week noticia.jpg" alt="rio Innovation week">
                <br><br>
                <p>
                    O mês de agosto chegou e com ele uma das maiores feiras de tecnologia do mundo, a <strong>Rio Innovation Week 2024</strong>. Segundo a organização, o evento que acontecerá entre os dias 13 e 16 no Pier Mauá pretende receber mais de 150 mil visitantes e movimentar mais de R$2.6 bilhões em novos negócios.
                  <br><br>
                  Essa é a oportunidade perfeita para entender o presente e ficar de olho no futuro. E para isso, a feira disponibilizará uma série de palestras e atividades divididas em 14 trilhas que vão desde o agronegócio até a economia criativa. Em sua quarta edição, a RIW deste ano pretende ser a maior já realizada até então.
                </p>
                <br>
                <h2>Rio Innovation Week 2024: Humanização em Tempos de Inteligência Artificial</h2>
                <br>
                <p>
                    Como tema principal, a Rio Innovation Week 2024 traz um debate essencial e completamente atual: a humanização em tempos de inteligência artificial. Por isso, diversas palestras estarão voltadas para o uso de IA em níveis e áreas distintas. 
                  <br><br>
                  Um exemplo disso está no .FUTURO, onde ocorrerão conferências como “O Rio está pronto para ser uma capital da IA?” e “A humanidade aumentada: quais são as novas fronteiras da saúde?”. Apenas com isso dá para ver que o evento promete trazer muitas abordagens para o uso dessa ferramenta inovadora.
                  <br><br>
                  Mas, não apenas de IA será o RIW. Como a ideia é também humanizar os debates do mercado e uso de tecnologia, diversas palestras estarão voltadas para ecologia, diversidade, governabilidade e mais. Para isso, o evento separou uma série de personalidades para guiar e mediar as conversas.
                  <br><br> 
                  Dentre os principais palestrantes estarão a ganhadora do Prêmio Nobel da Paz <strong>Nadia Murad</strong>, o físico teórico <strong>Kip Thorne</strong>, a filósofa e ativista ambiental <strong>Vandana Shiva</strong> e o CEO da Magazine Luiza <strong>Fred Trajano</strong>. Ao todo serão aproximadamente 2 mil palestrantes de diferentes esferas em 26 palcos simultâneos.
                  <br><br>
                  O espaço ainda contará com diversos pólos de negócios e mais de 2,5 mil startups para gerar oportunidades importantes para o mercado. É desta ação que a organização do evento estima que aumentar em 13% os valores movimentados na última edição, que estiveram em torno de R$2,3 bilhões. 
                </p>
                  <h2>Onde será a Rio Innovation Week 2024?</h2>
                <br>
                <p>O RIW 2024 será realizado no Pier Mauá, no Centro da Cidade do Rio de Janeiro, e contará com um espaço de 75 mil m². Além de todos os armazéns do pier, o MAR também servirá como palco para o evento.
                  <br>
                  Para chegar ao espaço de credenciamento, a organização do evento sugere duas formas:
                  <ul>
                  <li> VLT - Estação parada dos Museus.</li>
                  <li> Metrô - Estação Cinelândia, Carioca ou Uruguaiana e fazer baldeação para VLT.</li>
                  </ul>
                  <p>O endereço do evento fica na Av. Rodrigues Alves, nº 10. Caso a pessoa opte por transporte particular é importante estar atento ao local de credenciamento e/ou estacionamento nas redondezas.
                  <br><br>
                  Ainda dá tempo de garantir sua presença, já que ainda existem ingressos disponíveis no site oficial. Vale levar papel, caneta e a mente aberta e conferir as novidades deste evento tão relevante para a tecnologia mundial.</p>
                  
            </article>
            <?php
            if (!isset($_SESSION['usuario'])) {
            echo "Você precisa estar logado para comentar. <a href='login.php'>Login aqui</a>";
            header("Location: login.php");
             exit;
  } else {
            
            echo '<div class="comments-section">
              <h2>Comentários</h2>
            
              <!-- Formulário para adicionar um comentário -->
              <form class="comment-form">
                <label for="name">Nome:</label>
                <input type="text" id="name" placeholder="Seu nome" required>
            
                <label for="comment">Comentário:</label>
                <textarea id="comment" placeholder="Escreva seu comentário" maxlength="400" required></textarea>
            
                <button type="submit">Adicionar Comentário</button>
              </form>
            
              <div class="comments-list">
                <h3>Comentários anteriores:</h3>
                <div class="comment">
                  <h4>Nome do Usuário</h4>
                  <p>Esse é um comentário de exemplo.</p>
                </div>
              </div>
            </div>';
  }
  ?>
            <br><br>
            <div class="editor-choice-banner">
              <h2>Escolha do Editor</h2>
          </div>
          <div class="card-container">
            <div class="card">
                <img src="../img/Foto - Capa do Artigo.jpg" alt="Imagem Ifood" class="card-img">
                <div class="card-content">
                    <a class="link-noticia" href="./noticia.php"><h2 class="card-title">Cadastro iFood: saiba como se inscrever na plataforma de delivery</h2></a>
                    <p class="card-summary"> O iFood está entre as maiores plataformas de delivery do Brasil e já conta com mais de 60 milhões de pedidos por mês em todo país.</p>
                </div>
            </div>
            <div class="card">
                <img src="../img/innovation week inicio.jpg" alt="Imagem da Notícia 2" class="card-img">
                <div class="card-content">
                    <a class="link-noticia" href="./dadoenovobacon"><h2 class="card-title">Rio Innovation Week 2024: Economia, IA e Diversidade!</h2></a>
                    <p class="card-summary">O Rio Innovation Week chegou ao fim, deixando para trás inúmeras experiências marcantes. Este ano, a edição do maior evento global de tecnologia apresentou números expressivos durante seus quatro dias de intenso vai e vem de pessoas no Píer Mauá.</p>
                </div>
            </div>
            <div class="card">
              <img src="../img/noticiamarketing.jpg" alt="Imagem da Notícia 2" class="card-img">
              <div class="card-content">
                <a class="link-noticia" href="/assets/pag/noticiafoodservice.php"><h2 class="card-title"> Marketing e Food Service: Como o Setor reagiu ao maior movimento digital dos consumidores</h2></a>
                  <p class="card-summary"> O mundo voltou aos trilhos após três anos de pandemia. Os setores retomam suas atividades, movimentando o mercado e difundindo seus produtos entre os consumidores.</p>
              </div>
          </div>
        </main>
    
  <script src="./assets/vendor/aos/aos.js"></script>
  <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../js/main.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!-- footer -->
    <footer class="footer">
      <div class="copyright-noticia">
        <div class="container text-center">
          <p>©<span>Copyright 2025</span> <strong class="px-1 sitename">adezcomunicação</strong> <span>Todos os direitos reservados - produzido por <a href="/index.html" id="adez-rodape"><img src="/assets/img/icones/adezfooter.png" style="width: 50px; margin-bottom: 5px;" alt="Adez Logo"></a></span></p>
        </div>
      </div>
    </footer>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGZQLT2P"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
</body>
</html>
