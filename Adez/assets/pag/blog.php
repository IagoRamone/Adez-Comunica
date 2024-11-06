<?php 
    session_start();
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AdaNews</title>
  <meta content="Blog com informações de mercado food service e tecnologia" name="description">
  <link rel="stylesheet" href="../css/pagstyle.css">
  <link href="../img/Foguete amarelo.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="canonical" href="https://adezcomunica.com/assets/pag/blog.php">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
<!-- Meta Pixel Code -->
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
            <img src="../img/2.png" alt="logo-ADEZ"  width="auto" height="auto">
          </a>
          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="/index.html">Página Inicial</a></li>
              <li><a href="/assets/pag/nossotime.html">Nosso Time</a></li>
              <li><a href="/assets/pag/contato.html">Contato</a></li>
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
      <div class="banner">
        <h1>AdaNews</h1>
      </div>
    <main>
        <section class="noticias">
        <a class="artigo" href="./rappi.php">
            <article>
              <h2>“Como se cadastrar no Rappi</h2>
              <p><strong>Data:</strong> 29 de outubro de 2024</p>
              <p> O <strong>Rappi</strong>, atualmente o segundo maior aplicativo de delivery no Brasil, se consolidou como uma das principais opções para plataformas de entrega. Fundado na Colômbia em 2015, ele surgiu com a proposta inovadora de entregar 'qualquer coisa', o que impulsionou sua rápida expansão pela América Latina.
              Hoje, o Rappi conta com mais de quatrocentos mil entregadores espalhados pelo Brasil, sendo uma ferramenta muito útil na expansão de Bares e Restaurantes ao serviço delivery. </p>
          </article></a>
          <a class="artigo" href="/assets/pag/dadoenovobacon.php">
            <article>
              <h2>“O Dado é o novo Bacon!”: Tudo o que vimos no RIW 2024</h2>
              <p><strong>Data:</strong> 02 de setembro de 2024</p>
              <p>O Rio Innovation Week chegou ao fim, deixando para trás inúmeras experiências marcantes. Este ano, a edição do maior evento global de tecnologia apresentou números expressivos durante seus quatro dias de intenso vai e vem de pessoas no Píer Mauá. </p>
          </article></a>
          <a class="artigo" href="./noticia.php">
            <article>
                <h2>Cadastro iFood: saiba como se inscrever na plataforma de delivery</h2>
                <p><strong>Data:</strong> 31 de Julho de 2024</p>
                <p>O iFood está entre as maiores plataformas de delivery do Brasil e já conta com mais de 60 milhões de pedidos por mês em todo país. Por conta disso, não é de se impressionar que mais de 300 mil lojas já fizeram o cadastro iFood na expectativa de alavancar suas vendas.</p>
            </article>
          </a>
          <a class="artigo" href="/assets/pag/noticiainnovation.php">
            <article>
                <h2>Rio Innovation Week 2024: Economia, IA e Diversidade!</h2>
                <p><strong>Data:</strong> 31 de Julho de 2024</p>
                <p>O mês de agosto chegou e com ele uma das maiores feiras de tecnologia do mundo, a Rio Innovation Week 2024. Segundo a organização, o evento que acontecerá entre os dias 13 e 16 no Pier Mauá pretende receber mais de 150 mil visitantes e movimentar mais de R$2.6 bilhões em novos negócios.
                </p>
            </article>
            </a>
            <a class="artigo" href="/assets/pag/noticiafoodservice.php">
            <article>
              <h2>Marketing e Food Service: Como o Setor reagiu ao maior movimento digital dos consumidores</h2>
              <p><strong>Data:</strong> 31 de Julho de 2024</p>
              <p>O mundo voltou aos trilhos após três anos de pandemia. Os setores retomam suas atividades, movimentando o mercado e difundindo seus produtos entre os consumidores. No Brasil, o crescimento do setor de serviços foi de 0,4%, quase alcançando sua média histórica. </p>
          </article>
          </a>
        </section>
        
        <aside class="sidebar">
            <h3>Escolha do editor</h3>
            <ul class="link-list">
                <li><a href="/assets/pag/rappi.php">Como se cadastrar no Rappi</a></li>
                <li><a href="/assets/pag/dadoenovobacon.php"> “O Dado é o novo Bacon!”: Tudo o que vimos no RIW 2024</a></li>
                <li><a href="/assets/pag/noticia.php">Cadastro iFood: saiba como se inscrever na plataforma de delivery</a></li>
                <li><a href="/assets/pag/noticiainnovation.php">Rio Innovation Week espera 150 mil pessoas</a></li>
                <li><a href="/assets/pag/noticiafoodservice.php">Marketing e Food Service: Como o Setor reagiu ao maior movimento digital dos consumidores</a></li>
            </ul>
        </aside>
    </main>
  <script src="../js/main.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- footer -->
    <footer class="footer">
      <div class="footer-top">
        <div class="container d-flex flex-wrap justify-content-between align-items-start">
          <!-- Seção Principal do Footer -->
          <div class="footer-about col-lg-6 col-md-12">
            <h1 class="sitenameh">Adez Comunicação</h1>
            <div class="footer-contact pt-3">
              <p>Av. José da Silva de Azevedo Neto 200</p>
              <p>117, Rio de Janeiro, RJ, Rio de Janeiro BR</p>
              <p class="mt-3"><strong>Phone:</strong> <span>+55 (21) 97197-1972</span></p>
              <p><strong>Email:</strong> <span>atendimento@adezcomunica.com</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href="https://www.behance.net/adezcomunica" target="_blank"><i class="bi bi-behance" aria-label="Behance"></i></a>
              <a href="https://www.instagram.com/adezcomunica/" target="_blank"><i class="bi bi-instagram" aria-label="Instagram"></i></a>
              <a href="https://www.linkedin.com/search/results/all/?heroEntityKey=urn%3Ali%3Aorganization%3A81461872&keywords=ADEZ&origin=ENTITY_SEARCH_HOME_HISTORY&sid=cMw" aria-label="Linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
    
          <!-- Mapa -->
          <div id="map" class="footer-map col-lg-6 col-md-12">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.7890607789664!2d-43.36871782796311!3d-22.994783010463618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bda3035c9dc45%3A0xcdceefdc21baae1!2sAv.%20Jos%C3%A9%20Silva%20de%20Azevedo%20Neto%2C%20200%20-%20Barra%20da%20Tijuca%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2022775-056!5e0!3m2!1spt-PT!2sbr!4v1725288118205!5m2!1spt-PT!2sbr"
              width="100%"
              height="250"
              style="border:0;"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              aria-label="Localização de Av. José da Silva de Azevedo Neto 200, 117, Rio de Janeiro, RJ"
            ></iframe>
          </div>
        </div>
      </div>
    
      <div class="copyright">
        <div class="container text-center">
          <p>© <span>Copyright</span> <strong class="px-1 sitename">adezcomunicação</strong> <span>Todos os direitos reservados</span></p>
        </div>
      </div>
    </footer>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGZQLT2P"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

 <script>
  document.getElementById('userMenu').addEventListener('click', function(event) {
    event.preventDefault();
    var dropdown = document.getElementById('dropdownOptions');
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
});
window.onclick = function(event) {
    if (!event.target.matches('#userMenu') && !event.target.closest('.dropdown')) {
        var dropdown = document.getElementById('dropdownOptions');
        if (dropdown.style.display === 'block') {
            dropdown.style.display = 'none';
        }
    }
};
</script>
</body>
</html>
