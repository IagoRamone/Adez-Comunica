<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AdaNews</title>
  <meta content="Blog sobre tudo que há de novo no mundo da tecnologia " name="description">
  <link rel="stylesheet" href="../css/noticia.css">
  <link href="../img/Foguete amarelo.png" rel="icon">
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
      </header>
        <main class="container">
            <article>
                <header>
                    <h1>Como se cadastrar no Rappi</h1>
                    <p class="meta">Brendon Esteves - 29/10/2024</p>
                </header>
                <img src="../img/artigos/homem-barbudo.jpg" alt="cadastro rappi">
                <br><br>
                <p>
                  O <strong>Rappi</strong> , atualmente o segundo maior aplicativo de delivery no Brasil, se consolidou como uma das principais opções para plataformas de entrega. Fundado na Colômbia em 2015, ele surgiu com a proposta inovadora de entregar 'qualquer coisa', o que impulsionou sua rápida expansão pela América Latina.
Hoje, o Rappi conta com mais de quatrocentos mil entregadores espalhados pelo Brasil, sendo uma ferramenta muito útil na expansão de Bares e Restaurantes ao serviço delivery.
                  <br><br>
                  Saiba aqui neste artigo como fazer seu <a href="https://merchants.rappi.com/pt-br?utm_source=google&utm_medium=cpc&utm_content=&utm_content=&utm_keyword=rappi%20cadastro&utm_id=18486730275&gad_source=1&gclid=Cj0KCQjwj4K5BhDYARIsAD1Ly2rWwdiUSvh4kebjXbWGFC8HZGNghH-w0HA_wFKBK7oYvzgPk-ol778aAkYFEALw_wcB" target="_blank" >cadastro Rappi</a> e quais são as vantagens para o seu negócio.
                  <br><br>                
                </p>
                <br>
                <h2>Por que cadastrar seu restaurante no Rappi?</h2>
                <br>
                <p>
                Além de ser a plataforma líder em proporção de assinantes premium - cerca de 50% dos usuários brasileiros assinam a versão premium - o Rappi oferece uma gama de vantagens ao dono que cadastrar sua loja, seu Bar ou Restaurante:
                  <ul>
                  <li>Aumento de até 30% nas vendas sem mexer no custo da operação;</li>
                  <li>Propio: uma plataforma de gestão de pedidos on-line com baixa comissão;</li>
                  <li>O Rappi é um SuperApp que integra vários serviços em um único aplicativo;</li>
                  <li>Maior visibilidade com o <a href="https://merchants.rappi.com/pt-br/ads" target="_blank" >Rappi Ads</a>, sistema de anúncios do próprio Rappi.</li>
                </ul>      
                </p>
                <h2>Passo a Passo: Como Realizar o Cadastro da Sua Loja no Rappi</h2>
                <br>
                <p>Para completar seu cadastro na plataforma de delivery, você deve preencher a alguns requisitos básicos e fornecer os documentos necessários, que são:
                  <ul>
                  <li>RG ou CNH que contenham o CPF do representante legal do estabelecimento;</li>
                  <li>Comprovante bancário da conta cadastrada (em caso de empreendedor MEI, será aceita conta de pessoa física; caso contrário, será necessária uma conta em nome de PJ);</li>
                  <li>Cartão CNPJ (você consegue emitir o seu pelo site da <a href="" target="_blank">Receita Federal</a>);</li>
                  <li> Alvará de Funcionamento (Vigilância Sanitária para empresas no Rio de Janeiro e Bahia);</li>
                  <li>Contrato Social (para Pessoa Jurídica).</li>
                </p>
                  <br>
                    <p>Além disso, é necessário ter um cardápio com, no mínimo, cinco itens para cadastro no aplicativo e que respondam a algumas exigências de formato:</p>
                  <li>Pelo menos 5 produtos para registrar;</li>
                  <li>Uma foto de cada produto (maior que 360px X 360px e preferencialmente horizontal);</li>
                  <li>Um nome e uma breve descrição para os produtos;</li>
                  <li>Um preço para cada produto.</li>
                </ul>
                  <br>
                   <p> Por fim, é preciso ter Logotipo e imagem de capa para cada filial da marca, itens que são de enorme importância para que o cliente consiga identificar sua marca dentro da plataforma e assim visualizar seus produtos com clareza.</p>
                   <h2>Rappi Turbo: um destaque para a entrega ultra rápida</h2>
                   <br>
                   <p>Vale destacar que, em 2021, o Rappi lançou seu serviço mais desafiador: o Rappi Turbo, que promete a entrega na porta do cliente em até 10 minutos. Em junho deste ano, a vertical completou três anos e já passou por cerca de 13 milhões de pedidos só no Brasil. Esta proposta ressalta o diferencial em relação a outros estabelecimentos (e até mesmo a outras plataformas) com entregas em tempo padrão de até 50 minutos, e veio para fortalecer a confiança do consumidor tanto da plataforma quanto do serviço para empresas.
                   Sobre a aderência ao serviço ultra rápido, o número de pedidos em 2024 em relação ao ano de lançamento cresceu 41%, e teve um aumento considerável no número de usuários - 1.740%!</p> 
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
              <img src="../img/innovation week inicio.jpg" alt="Imagem Ifood" class="card-img">
              <div class="card-content">
                  <a class="link-noticia" href="./dadoenovobacon.php"><h2 class="card-title">“O Dado é o novo Bacon!”: Tudo o que vimos no RIW 2024</h2></a>
                  <p class="card-summary"> O Rio Innovation Week chegou ao fim, deixando para trás inúmeras experiências marcantes. Este ano, a edição do maior evento global de tecnologia apresentou números expressivos durante seus quatro dias de intenso vai e vem de pessoas no Píer Mauá. 
                  </p>
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
