<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AdaNews</title>
  <meta content="Geração Z " name="description">
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
                    <h1> “Como a Geração Z Está Mudando o Jogo do Marketing: Macetes e Estratégias</h1>
                    <p class="meta">Brendon Esteves - 03/01/2025</p>
                </header>
                <img src="../img/geracaoz.jpg" alt="">
                <br><br>
                <p>
                  “Me responda uma coisa: Como funcionaria sua vida sem redes sociais?” Numa entrevista a um grupo de pessoas multigeracionais com essa pergunta, esperaria-se que a pessoa de maior idade dissesse que vive muito bem sem sua dose diária de vídeos rápidos. Por outro lado, os mais novos tremeriam só de imaginar essa possibilidade..
                </p>
                <br>
                <p>
                  Muito ouvimos ultimamente sobre o distanciamento das gerações que hoje compõem a nossa sociedade. Tantas são as nomenclaturas - e se você respondeu como a primeira pessoa à pergunta no início, você é um Millennial - com características únicas e formas distintas de se relacionarem e verem o mundo.
                </p>
                <h2>Mais de 20% da população brasileira se enquadra na Geração Z</h2>
                <br>
                <p>
                  Segundo uma pesquisa do IBGE, a Geração Z corresponde a mais de 20% da população Brasileira, jovens e adolescentes entre 14 e 27 anos que vivem quase que totalmente à mercê da vida online. São chamados pelos “mais antigos” de nativos digitais, pois essa é a primeira geração a nascer com a tecnologia como a conhecemos já atrelada à sua rotina.
                <br><br>
                <p>Em suma, seu comportamento é bem mais tolerante e prático, preferindo em seu dia a dia tudo que trouxer facilidade e, de quebra, personalização em sua experiência. Não à toa, o mercado aposta suas fichas nesse público que representa mais de 40 milhões de consumidores ávidos por boa publicidade e atentos à situação financeira.    
                <br><br>
                <h2>E quando uma marca quer alcançar a geração Z?</h2>
                <p>Um dado levantado pelo blog negociossc.com.br diz que seis em cada dez desta faixa etária consome conteúdos de entretenimento online. Além do quê, como este público é atraído por diversão e simplicidade, uma marca que espera se conectar com os jovens da Geração Z precisa atualizar sua forma de comunicação. </p>
                <ul>
                  <li>
                      <strong>Use o engajamento de um produto para aproximar:</strong> 
                      Uma marca de varejo esportivo, como a Sports Direct, criou um clube de corrida exclusivo acessível por meio de um app. Essa iniciativa, voltada para membros do programa de fidelidade, ajudou a nutrir o engajamento de clientes da Geração Z ao proporcionar experiências pessoais e direcionadas.
                  </li>
                  <li>
                      <strong>Ofereça facilidade e abuse das ofertas:</strong>
                      O comportamento da Geração Z valoriza a simplicidade. Ofertas personalizadas e entregas rápidas são fundamentais. Segundo a Ticket, 51% dos consumidores entre 14 e 27 anos consomem comida via apps de delivery, e 11% fazem até dois pedidos por semana.
                  </li>
                  <li>
                      <strong>Invista num ambiente “Instagramável”:</strong>
                      Ambientes agradáveis e visualmente atraentes são essenciais para atrair jovens que compartilham momentos no Instagram. Um local que não se adapta para ser fotografado terá baixa probabilidade de fidelizar esse público.
                  </li>
                  <li>
                      <strong>Pense no impacto ambiental:</strong>
                      A Geração Z valoriza causas ambientais. Investir em práticas sustentáveis, como redução da pegada de carbono e uso de materiais reciclados, aumenta o engajamento com essa geração consciente.
                  </li>
              </ul>
              <p> Como este é um público altamente exigente e engajado (não deixa de reclamar ou elogiar quando devido), a marca deve se preocupar em estar presente no dia da Geração Z por completo. Ser omnichannel, ou seja, investir tempo e energia em todos os canais de comunicação de forma inteligente e que solucione problemas rapidamente. </p>
              <br><br>
              <p>Uma geração que prefere trocar o fogão por consumir sua refeição de um restaurante em casa tem que estar no radar do empresário food 24/7, a todo instante. Um cliente geração Z detrator transformado em promotor da marca vale mais do que mil clientes satisfeitos e transitórios. </p>
              <h2>Geração Z: Para alcançar, é preciso conhecer</h2>
              <p>Faça o teste você onde quiser, eu fiz o meu, e o resultado sempre será o mesmo. Pronto? Chame uma criança (eu testei com meu filho) que ainda não tenha chegado aos doze anos e peça para fazer uma ligação imaginária. Se ela puser a mão aberta espalmada ao lado do ouvido, ele foi influenciado pela Geração Z.</p>
              <p>Há ainda resultados mais diversos a esse teste: há crianças que simulam uma chamada de vídeo. A Geração Z nasceu inteiramente cercada de tecnologia, e toda a definição de infância que tínhamos anteriormente foi subitamente trocada por essa mais digital e apressada.</p>  
              <p>E não só a definição de infância, mas praticamente tudo que antes pertencia à sólida base de mundo dos Millenials (nascidos antes de 1996) está em processo de decomposição. Desde brinquedos, aparelhos eletrônicos, computadores e até mesmo a comida, a questão ambiental e a pluralidade de pensamentos, hoje são muito mais responsivos e complexos. Em conclusão, o comportamento da Geração Z é moldado pela rápida adaptação ao mundo digital e por sua preferência por experiências práticas e personalizadas.</p>
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
