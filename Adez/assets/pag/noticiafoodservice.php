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
  <meta content="Nóticia de marketing e o crescimento digital" name="description">
  <link href="../img/Foguete amarelo.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="canonical" href="https://adezcomunica.com/assets/pag/noticiafoodservice.html">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
</head>
<body>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
          <a href="/index.html" class="logo d-flex align-items-center me-auto me-lg-0">
            <img src="../img/2.png" alt="logo-ADEZ">
          </a>
          <nav id="navmenu" class="navmenu">
            <ul class="linkli">
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
            </li>
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
                    <h1> Marketing e Food Service: Como o Setor reagiu ao maior movimento digital dos consumidores</h1>
                    <p class="meta">Brendon Esteves - 31/07/2024</p>
                </header>
                <img src="../img/noticiamarketing.jpg" alt="Marketing">
                <br><br>
                <p>
                  O mundo voltou aos trilhos após três anos de pandemia. Os setores retomam suas atividades, movimentando o mercado e difundindo seus produtos entre os consumidores. No Brasil, o crescimento do setor de serviços foi de 0,4%, quase alcançando sua média histórica. 
                  <br><br>  
                  Para um setor específico, esse crescimento foi ainda mais inovador: o Food Service. Apesar da melhora pouco expressiva (apenas 5% em comparação ao período pré-pandemia), os estabelecimentos têm apostado na elevação de sua reputação digital, seja em plataformas de delivery ou redes sociais.
                  <br><br>
                  Mas o que despertou esse interesse nos empreendedores de médios e pequenos negócios? Foi justamente o aumento do uso de plataformas digitais e a busca dos clientes por marcas de Food Service com maior relevância na internet. Basicamente, o cliente agora valoriza consumir o conteúdo de um restaurante.
                </p>
                <br>
                <h2>Presença Digital: Qual a Importância para o Food Service?</h2>
                <br>
                <p>
                  Segundo uma pesquisa realizada pela SEBRAE junto à ABRASEL, cerca de 50% dos entrevistados aumentaram seu faturamento mensal investindo em vendas Delivery, enquanto 10% atribuíram às vendas Online. Destes, quase 75% vende ou pretende vender pelas Redes Sociais.
                  <br><br>
                  Outro dado relevante é que 46% do setor de Restaurantes investe parte de seu faturamento em se tornar mais relevante nas principais plataformas da internet, como Google Meu Negócio, Facebook e Instagram. Consequentemente, aplicar capital em marketing digital profissional se tornou parte das despesas mensais dos empresários.
                  <br><br>
                  <p>Esse movimento significativo no Food Service ocorre devido à mudança brusca no comportamento dos clientes e à voracidade com que consomem conteúdos. Assim, o investimento em marketing no setor exigiu maior atenção dos donos que buscavam expandir seus pequenos negócios em um cenário atual, mais digital e presente em marketing e propaganda.        
                </p>
                <br>
                <h2>Como Alcançar Mais Clientes Através do Marketing?</h2>
                <br>
                <p>Analisando o cenário atual apresentado pela pesquisa do SEBRAE, os empresários têm observado seus negócios se tornando grandes fontes de conteúdo, principalmente humanizado, e alcançando pessoas de diversos nichos, transformando-os em clientes interessados, seja para provar um prato novo ou participar de um desafio de comida.
                O uso de técnicas de captação, como despertar o desejo por um produto, criar escassez de oportunidades para obtê-lo e urgência em ações rápidas e limitadas, também se mostra eficaz. Gerar esses gatilhos nos clientes demanda tempo, habilidades e conhecimento, muitas vezes ausentes na rotina do empreendedor.</p>
                  <br>
                  <p>Portanto, ter à disposição uma equipe especializada que cuide de todas as áreas do marketing, escrita criativa, artes gráficas e captação audiovisual, dando vida e sentido à presença digital e posicionando a sua marca, é de grande valor.</p>
                  <br>
                  <p>Se o seu negócio faz parte das estatísticas de Restaurantes que desejam crescer no marketing digital e conquistar clientes que se alimentam de conteúdos diversos e criativos, nós da Adez somos a agência que pode tornar seu Food Service relevante e mais atrativo, tanto nas redes sociais quanto nas plataformas de delivery. Vem decolar com a gente!</p>
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
                  <p class="card-summary"> O iFood está entre as maiores plataformas de delivery do Brasil e já conta com mais de 60 milhões de pedidos por mês em todo país. Por conta disso, não é de se impressionar que mais de 300 mil lojas já fizeram o cadastro iFood na expectativa de alavancar suas vendas.</p>
              </div>
          </div>
            <div class="card">
              <img src="../img/innovation week noticia.jpg" alt="Imagem da Notícia 2" class="card-img">
              <div class="card-content">
                  <a class="link-noticia" href="./noticiainnovation.php"><h2 class="card-title">Rio Innovation Week 2024: Economia, IA e Diversidade!</h2></a>
                  <p class="card-summary">Agosto traz a Rio Innovation Week 2024, a maior feira de tecnologia do mundo, com mais de 150 mil visitantes e R$2.6 bilhões em novos negócios!</p>
              </div>
          </div>
          <div class="card">
            <img src="../img/innovation week inicio.jpg" alt="Imagem da Notícia 2" class="card-img">
            <div class="card-content">
              <a class="link-noticia" href="/assets/pag/dadoenovobacon.php"><h2 class="card-title"> Marketing e Food Service: Como o Setor reagiu ao maior movimento digital dos consumidores</h2></a>
                <p class="card-summary"> O Rio Innovation Week chegou ao fim, deixando para trás inúmeras experiências marcantes. Este ano, a edição do maior evento global de tecnologia apresentou números expressivos durante seus quatro dias de intenso vai e vem de pessoas no Píer Mauá. </p>
            </div>
          </div>
        </main>
  <script src="../js/main.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!-- footer -->
    <footer class="footer">
      <div class="copyright-noticia">
        <div class="container text-center">
          <p>© <span>Copyright</span> <strong class="px-1 sitename">adezcomunicação</strong> <span>Todos os direitos reservados</span></p>
        </div>
      </div>
    </footer>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGZQLT2P"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
</body>
</html>
