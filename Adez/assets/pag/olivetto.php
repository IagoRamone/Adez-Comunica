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
  <style>
    .video-container {
      position: relative;
      width: 100%;
      max-width: 800px;
      margin: 20px auto;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .video-container iframe {
      width: 100%;
      height: 450px;
      border: none;
    }
  </style>
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
                    <h1>A Propaganda brasileira ainda é a melhor do mundo?</h1>
                    <p class="meta">Brendon Esteves - 29/01/2025</p>
                </header>
                <img src="../img/artigos/olivetto.jpeg" alt="Foto do Olivetto">
                <br><br>
                <p>
                Há um tempo atrás, quando estávamos assistindo a um vídeo no YouTube ou um filme no streaming, era ótimo não ser interrompido por propagandas. Desse tempo para cá, isso não só mudou, mas se intensificou tanto que assistir a um comercial se tornou algo errado, sem fundamento.               
                </p>
                <br>
                <p>
                Entretanto, se voltarmos mais alguns anos, os comerciais dominavam a mente e o gosto do brasileiro. Era divertido, agradável e, como não dizer, satisfatório quando, no meio de um programa sério e importante, entrava um jingle novo do Guaraná Antártica®, ou o novo"filme" da Pepsi®, em que jogadores estrelados participavam do comercial".  
                </p>
                <p>Para completar seu cadastro na plataforma de delivery, você deve preencher a alguns requisitos básicos e fornecer os documentos necessários, que são:
                    A televisão brasileira era marcada por intervalos comerciais marcantes, com críticas ácidas e embates entre as marcas, direta e indiretamente, e a forma irreverente de como o produto era apresentado cativava muito mais facilmente do que hoje em dia que as propagandas cabem em vídeos de 30 segundos com botão de pular. O que mudou na publicidade contemporânea?
                </p>
                  <br>
                  <h2>O que aconteceu com a publicidade brilhante? </h2>
                    <p>Em uma de suas últimas entrevistas, o maior publicitário do Brasil - Washington Olivetto, diz que a publicidade perdeu o brilho no mundo inteiro - e no Brasil mais ainda - por muitos fatores. “Publicidade é intromissão”, ele diz. “Você está entrando na vida dos outros, e o mínimo que você tem que ser é inteligente e bem educado.”</p>
                  <br>
                   <p> Ele ainda trata o embate de audiência entre o "online e offline" como “ridícula” e diz que deveriam se somar. Ele traz ainda que há decadência e piora nos grandes veículos de comunicação, além de obsessão pelo que ele chama de “cultura dos algoritmos”. </p>
                   <br>
                   <p>Quando você soma tudo isso, você tem uma publicidade sem brilho - Olivetto finaliza.</p>
                   <h2>A visão de Washington Olivetto</h2>
                   <br>
                   <p>Segundo o criador da W/Brasil, “vender mais, construir marcas e entrar para a cultura popular". (...)” são os três pontos que constituem uma boa e saudosa publicidade brilhante. Entretanto, o ponto que Olivetto dá maior destaque é o último - transformar o consumidor em mídia. “As pessoas passam a repetir a sua campanha de publicidade” Olivetto destaca. </p>
                   <br> 
                   <p>Na entrevista, ele faz uma pergunta: “quais são as últimas propagandas publicitárias brasileiras que ficaram na tua memória?” Raras são as vezes que tratamos as campanhas mais atuais da mesma forma como recebíamos anos atrás, com “sedução e encanto”. </p>
                   <br>
                   <h2>Propagandas que marcaram a história</h2>
                   <p>Desde o icônico garoto Bombril até a frase mais repetida na hora de comprar uma lava roupas, Washington Olivetto tornou a publicidade nacional cada vez mais surpreendente e deliciosa. </p>
                   <br>
                   <ul>
                   <li>“Não é, assim, uma Brastemp…” (1991) - Uma das campanhas mais lembradas pelos brasileiros.</li>
                   <br>
                   <div class="video-container">
                    <iframe width="560" height="315" 
                    src="https://www.youtube.com/embed/NnLjj2G0hx4" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                    </iframe>
                   </div>
                   <br>
                   <p>Essa frase foi tão repetida que virou quase um adjetivo para algo que não é tão potente, tão bom ou tão eficaz, seja o que for. Criada pela Talent, agência de Olivetto, “Não é, assim, uma Brastemp” tornou-se uma das campanhas mais lembradas pelos brasileiros.</p>
                   <br>
                   <li>“Passeata”, da calça jeans Staroup (1988) - Ironia não compreendida no Festival de Cannes.</li>
                   <br>
                   <div class="video-container">
    <iframe width="560" height="315" 
    src="https://www.youtube.com/embed/uSydvBEe9lg" 
    frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen>
    </iframe>
</div>
                   <br>
                   <p>Essa campanha foi simplesmente uma das que recebeu mais vaias no Festival de Cannes. Um telão exibindo jovens fugindo e entrando em confronto com policiais ao som de música clássica  não caiu bem aos jurados da época, que criticaram duramente a peça sem nunca notar o tom de ironia da propaganda.</p>
                   <br>
                   <li>“Cachorrinho da Cofap”, Turbogás Cofap (1991) - Tornou “Cofap” sinônimo de cachorro Dachshund.</li>
                   <br>
                   <div class="video-container">
    <iframe width="560" height="315" 
    src="https://www.youtube.com/embed/FQC-VvBQjfk" 
    frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen>
    </iframe>
</div>

                   <br>
                   <p>
                    Depois desse comercial, simplesmente era impossível não chamar um cãozinho Dachshund de “Cofap”. Apesar de ser extremamente marcante, este comercial não recebeu nenhum prêmio, e Washington explica que fez essa peça pra conquistar o público, não o festival.
                   </p>
                   <br>
                   <li>“Hitler”, Folha de São Paulo (1987) - Mostrou como a verdade pode ser manipulada.</li>
                   <br>
                   <div class="video-container">
    <iframe width="560" height="315" 
    src="https://www.youtube.com/embed/ThyoQ-BaveA" 
    frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen>
    </iframe>
</div>

                   <br>
                   <p>Imagine alguém contando coisas boas sobre o período do terceiro reich como um aceno a dizer apenas a verdade? Foi dessa forma que Olivetto decidiu comunicar a Folha de São Paulo como um veículo sério e que nunca se vende. A comprometedora descrição e a frase “É possível contar um monte de mentiras dizendo somente a verdade” busca levar o leitor a tomar cuidado com as informações falsas.
                   </p>
                   <br>
                   <li>“O Garoto Bombril” (1978) - Um dos comerciais mais icônicos da publicidade nacional.</li>
                   <br>
                   <div class="video-container">
    <iframe width="560" height="315" 
    src="https://www.youtube.com/embed/MMZsWdbY4t4" 
    frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen>
    </iframe>
</div>

                   <br>
                   <p>Por anos foi possível acompanhar a inigualável campanha do “Garoto Bombril”, que mudou de vez a publicidade no Brasil. Seu orgulhoso criador recebeu o reconhecimento de não apenas uma incrível propaganda, mas também como a mais longa - entrou para o Guinness World Records como uma das mais longas com o mesmo personagem em publicidade global, e ainda marcou o ator Carlos Moreno um rosto familiar em praticamente todos os lares brasileiros.</p>
                   <br>
                   <p>A propaganda pode até ter perdido um pouco do brilho, mas isso não significa que sua marca precisa brilhar menos. Se você quer campanhas que façam história – e não só preencham espaços – vem trocar uma ideia com a gente no Instagram!</p> 
                </ul>
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
