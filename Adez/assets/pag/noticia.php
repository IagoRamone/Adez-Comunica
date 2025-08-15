<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AdaNews</title>
  <meta content="Blog sobre tudo que há de novo no mundo da tecnpologia " name="description">
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
                    <h1>Cadastro iFood: saiba como se inscrever na plataforma de delivery</h1>
                    <p class="meta">Lucas Bichão - 31/07/2024</p>
                </header>
                <img src="../img/Foto - Capa do Artigo.jpg" alt="rio Innovation week">
                <br><br>
                <p>
                  O <strong>iFood</strong> está entre as maiores plataformas de delivery do Brasil e já conta com mais de 60 milhões de pedidos por mês em todo país. Por conta disso, não é de se impressionar que mais de 300 mil lojas já fizeram o <strong>cadastro iFood</strong> na expectativa de alavancar suas vendas.
                  <br><br>
                  Muito do sucesso da plataforma se deve ao fato de ela ser um facilitador que faz a ponte entre restaurantes e seus clientes. Mas, apesar de simplificar as coisas, muitos donos de restaurantes ainda têm dúvidas de como ser um parceiro iFood.
                  <br><br>
                  E aqui você verá um passo a passo completo rumo ao sucesso do seu negócio!                  
                </p>
                <br>
                <h2>Quais documentos preciso para fazer o cadastro iFood?</h2>
                <br>
                <p>
                  O primeiro passo para ser um parceiro da plataforma de pedidos é reunir a documentação necessária. Sem ela não será possível completar o cadastro, por esse motivo é imprescindível ter todos esses dados em mãos.
                  <br><br>
                  Abaixo está a lista de documentos que você deve possuir:
                  <br>
                  <ul>
                  <li><strong>CPF</strong> e <strong>RG</strong> do responsável legal da loja;</li>
                  <li>CNPJ válido e CNAE do ramo alimentício;</li>
                  <li>Endereço completo da loja;</li>
                  <li>Conta bancária atrelada ao CNPJ ou ao CPF do responsável legal (para o caso de MEI).</li>
                </ul>
                  <p>Também são necessárias algumas outras informações como telefone para contato e e-mail de acesso. Esses itens são importantes para algumas validações do iFood, portanto busque fornecer dados consistentes para que não haja problemas futuros de acesso.</p>       
                  <br>       
                </p>
                <h2>Passo a passo do cadastro iFood:</h2>
                <br>
                <p>Agora que você já sabe os documentos necessários para o cadastro iFood, vamos ao passo a passo de como abrir uma loja na plataforma. O processo é bem simples e orgânico, basta seguir as instruções abaixo:
                  <ul>
                  <li> <strong>1º Passo:</strong> Acesse a página para realizar o <a href="https://parceiros.ifood.com.br/" target="_blank">cadastro</a> e escolha o tipo de comércio que você se enquadra: restaurantes ou mercados</li>
                  <br>
                  <p>Obs: A categoria “Restaurante” serve para lanchonetes, pizzarias, conveniência, bebidas, etc. Já a “Mercados” refere-se a empórios, farmácias, pet shop, açougues, hortifruti, etc.</p>
                  <li><strong> 2º Passo:</strong> Você deve preencher o cadastro com as informações de contato, que são e-mail, telefone e nome do responsável. Mais uma vez é válido lembrar que esses dados precisam ser válidos para não haver problemas futuros;</li>
                  <li> <strong>3º Passo:</strong> Aqui será necessário preencher o endereço real da sua loja, incluindo o CEP. Atente-se para revisar bem os dados inseridos e só após isso clicar em continuar;</li>
                  <li> <strong>4º Passo:</strong> Escolha o plano do seu negócio, entre <strong>Básico</strong> e <strong>Entrega</strong>. Para saber mais sobre as diferenças entre os serviços veja abaixo em <strong>Principais Dúvidas</strong>;</li>
                  <li> <strong>5º Passo:</strong> Agora você deve preencher os dados do responsável da loja, com itens como CPF e RG;</li>
                  <li> <strong>6º Passo:</strong> Em seguida será a vez dos dados do negócio, com informações como CNPJ, razão social, telefone e área de atuação;</li>
                  <li> <strong>7º Passo:</strong> O penúltimo passo é preencher as informações bancárias atreladas ao CNPJ ou ao CPF (em caso de MEI). Nesse ponto o iFood auxilia as pessoas que não possuem conta jurídica, com um facilitador da Conta Digital iFood.</li>
                  <li> <strong>8º Passo:</strong> Por fim, escolha um e-mail para receber a confirmação de cadastro iFood e das comunicações importantes da plataforma.</li><br>
                  <p>Após a validação da conta, você receberá o contrato que deverá ser assinado e poderá configurar o seu restaurante dentro da plataforma.</p>
                  </p>
                  <img src="../img/noticia-ifood.jpg" alt="placeholder de Publicidade">
                <h2>Dúvidas Frequentes sobre o iFood:</h2>
                  <br><ul class="ulespecial">
                  <li>É realmente necessário ter um CNPJ?</li>
                  <br>
                    <p>Sim, por lei é necessário que toda loja possua um CNPJ com CNAE do ramo alimentício para fazer o cadastro iFood. 
                    A exceção só é válida para algumas cidades, lugares esses em que é possível usar o CPF para ser parceiro da plataforma. No entanto, mesmo com esse método de inscrição, o dono do negócio terá até 12 meses para regularizar a situação e obter um CNPJ.
                    Para saber se sua cidade possui vendas no iFood pelo CPF basta digitar o CEP do seu restaurante no campo indicado. 
Caso esteja habilitado, haverá uma opção para prosseguir com o documento de Pessoa Física.</p>
                  <li>Principais diferenças entre os planos Básico e Entrega</li>
                  <br>
                   <p> No Plano Básico é o restaurante que fica responsável pelo delivery de seu negócio. Já no Plano Entrega é o iFood que dá total suporte através de seus entregadores parceiros. 
                    No plano Entrega também existem uma série de vantagens para que seja possível resguardar tanto o restaurante, quanto o cliente no caso de possíveis golpes. Por isso ele conta com rastreio de entrega em tempo real, atendimento iFood até a conclusão da entrega e seguro contra fraudes.
                    É importante verificar quais são as necessidades do seu restaurante, pois cada plano possui taxas e mensalidades diferentes para a manutenção do serviço prestado.</p>
                    <li>Quais são as taxas do iFood?</li>
                    <br>
                    <p>Plano Base:
                    12% de comissão sobre o valor total de pedidos no iFood. 
                    <br>
                    3,5% de taxa sobre pagamentos feitos no aplicativo.
                    <br>
                    Mensalidade de R$ 110,00*</p>
                    <li>Plano Entrega:</li>
                    <br>
                    <p>23% de comissão sobre o valor total dos pedidos no iFood.
                    3,5% de taxa sobre pagamentos feitos no aplicativo. 
                    Mensalidade de R$ 150,00*
                    *Vale ressaltar que a mensalidade só é cobrada nos restaurantes que tiverem uma venda acima de R$1.800 no mês.</p>
                    <li>Como vender mais no iFood?</li>
                    <br>
                    <p>Com o cadastro iFood feito, chegou a hora de montar seu cardápio e começar a vender! Mas, às vezes surge uma dúvida: como faturar mais no iFood? Aqui na Adez Comunica temos a resposta com nosso serviço de Consultoria de Delivery, em que realizamos desde a engenharia de cardápio até a moderação de avaliações. Quer saber mais? <a href="/index.html">Clique aqui.</a>
                    </p>
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
