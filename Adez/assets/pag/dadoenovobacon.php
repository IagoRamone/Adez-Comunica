<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AdaNews</title>
  <meta content="Blog sobre que há de novo com relção aos dados " name="description">
  <link rel="stylesheet" href="../css/noticia.css">
  <link href="../img/Foguete amarelo.png" rel="icon">
  <link rel="canonical" href="https://adezcomunica.com/assets/pag/noticia.html">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
</head>
<body>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
          <a href="/index.html" class="logo d-flex align-items-center me-auto me-lg-0">
            <img src="../img/2.png" alt="logo - Adez">
          </a>
          <nav id="navmenu" class="navmenu">
            <ul class="linkli">
              <li class="link"><a href="/index.html">Página Inicial</a></li>
              <li><a href="./blog.php">AdaNews</a></li>
              <li id="contato"><a href="/assets/pag/contato.html" >Contato</a></li>
              <?php
              if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) {
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
      </header>
        <main class="container">
            <article>
                <header>
                    <h1> “O Dado é o novo Bacon!”: Tudo o que vimos no RIW 2024</h1>
                    <p class="meta">Brendon Esteves - 02/09/2024</p>
                </header>
                <img src="../img/innovation week inicio.jpg" alt="rio Innovation week">
                <br><br>
                <p>
                    O Rio Innovation Week chegou ao fim, deixando para trás inúmeras experiências marcantes. Este ano, a edição do maior evento global de tecnologia apresentou números expressivos durante seus quatro dias de intenso vai e vem de pessoas no Píer Mauá. 
                    <br><br>
                    Com a participação de 3,3 mil palestrantes abordando uma variedade de temas e setores, o evento atraiu cerca de 185 mil visitantes entre estudantes ávidos por novas tecnologias, empresários procurando por novas formas de inovar, além de gamers, curiosos, etc. Mais de 2 mil startups exibiram seus ousados projetos, desde comidas inteligentes até robôs dançantes e falantes.
                    <br><br>
                    Nina Bassetti, uma jovem participante, destacou em entrevista à Adez sua surpresa com a diversidade de pesquisas apresentadas, especialmente em robótica. “Achei muito maneiro como tem muitas pesquisas de universidades! Eu estou aprendendo muita coisa que nem fazia ideia, pra ser sincera.”
                    <br><br>
                    Em entrevista à revista eletrônica Exame, o idealizador e diretor-geral do RIW 2024, Jerônimo Vargas, revelou que houve um crescimento geral de 30% nos números do evento, mostrando o potencial da capital carioca de ser palco de projetos inovadores e novas tendências. Durante o evento, foram movimentados R$ 3,8 bilhões, posicionando a cidade como um epicentro tecnológico.
                </p>
                <br>
                <img class="palestra" src="../img/palestra.jpeg" alt="palestra">
                <h2>Inovação no Setor de Bares e Restaurantes</h2>
                <br>
                <p>
                    Inovação e Tecnologia no Foodservice: este foi o tema de uma das palestras ministradas no dia 13, primeiro dia do Rio Innovation Week, no palco Conecta Varejo. Discorrendo sobre quais foram as suas experiências como um dos grandes players do setor Food Service, Fernando Blower, presidente do SindRio Sindicato de Bares e Restaurantes do Rio de Janeiro, iniciou a conversa tratando sobre o impacto da pandemia no setor de Alimentação fora do lar.
                <br><br>
                <p>“Gerou o encerramento de marcas queridas, principalmente de restaurantes independentes e de marcas mais antigas que não conseguiram se adaptar.” comentou Fernando. “Mas também gerou aprendizados! E eu acho que o principal deles foi como a tecnologia passa, de fato, a fazer parte do nosso setor.”    
                <br><br>
                <p>“O Dado é o novo Bacon!” Foi assim que o empresário Luiz Marcelo, CDO/CMO do Grupo Trigo e uma das maiores autoridades em Marketing no setor Food da atualidade, se referiu à nova prática dos restaurantes de reter informações reais dos seus clientes, tornando seu atendimento o mais personalizado possível ao seu público.</p>
                <br>  
                <p>“É importante como os dados nos ajudam bastante a saber essas tendências do cliente [na jornada de compra no restaurante], cliente a cliente, para que a gente possa entrar nessa jornada de forma cada vez mais eficiente.”</p>
                <br>
                <p>Na palestra, os especialistas presentes destacaram as transformações ocorridas nos últimos anos, com a popularização do delivery, tecnologias de autoatendimento, e a crescente personalização do atendimento com base em dados dos clientes.</p>
                <br>
                <h2>Principais palestrantes e convidados especiais</h2>
                <br>
                <p>Entre influenciadores digitais, artistas empreendedores, cientistas renomados e Prêmios Nobel, os temas das palestras trataram sobre os mais diversos tópicos da sociedade e como o mundo vem se comportando frente às evoluções estensivas do cenário tecnológico. 
                </p>
                <p>Xuxa Meneghel, Larissa Manoela e Camila Farani foram algumas das convidadas dentre outras tantas que compartilharam suas experiências sobre resiliência feminina, na educação financeira e a rotina de influencer em contraste com a vida real.
                </p> 
                <p>Já figuras ilustres como Kip Thorne, Orkut Buyukkokten e Ivair Gontijo trouxeram seus olhares da ciência e das tecnologias e os maiores impactos de ambas na sociedade. Outros destaques incluíram o influenciador e empresário Matheus Costa, que ganhou fama após fazer vídeos com seu pai no meio da pandemia, e hoje é 3º maior influencer do Brasil, e Igor Coelho, também empresário e fundador do Flow Podcast, um dos maiores do YouTube Brasil.</p>   
            </article>

            <?php
          if (!isset($_SESSION['usuario'])) {
          echo "Você precisa estar logado para comentar. <a href='login.php'>Login aqui</a>";
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
              <img src="../img/noticiamarketing.jpg" alt="Imagem da Notícia 2" class="card-img">
              <div class="card-content">
                <a class="link-noticia" href="/assets/pag/noticiafoodservice.php"><h2 class="card-title"> Marketing e Food Service: Como o Setor reagiu ao maior movimento digital dos consumidores</h2></a>
                  <p class="card-summary"> O mundo voltou aos trilhos após três anos de pandemia. Os setores retomam suas atividades, movimentando o mercado e difundindo seus produtos entre os consumidores.</p>
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
          <p>©<span>Copyright 2025</span> <strong class="px-1 sitename">adezcomunicação</strong> <span>Todos os direitos reservados - produzido por <a href="/index.html" id="adez-rodape">Adez</a></span></p>
        </div>
      </div>
    </footer>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGZQLT2P"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
</body>
</html>
