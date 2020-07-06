<?php 
$erro = 0;
if (isset($_POST['nome']) && $_POST['verifica'] == 10) {
    $sender = 'ideabox@sispro.com.br';
    $recipient = 'sis.hub@sispro.com.br';

    $subject = "Contato via site IdeaBOX";
    $message = "Nome:".$_POST['nome']."; ";
    $message .= "Empresa:".$_POST['empresa']."; ";
    $message .= "E-mail:".$_POST['email'].".";
    $headers = 'From:' . $sender;

    if (mail($recipient, $subject, $message, $headers))
    {
        $erro = 1;
    }
    elseif(isset($_POST['nome']))
    {
        $erro = 2;
    }
} if ($_POST['verifica'] != 10 && isset($_POST['nome'])) {
  $erro = 3;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <script type="module" src="https://unpkg.com/ionicons@5.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>

    <title>Ideabox - Acelerando Ideias Inovadoras</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha256-4hqlsNP9KM6+2eA8VUT0kk4RsMRTeS7QGHIM+MZ5sLY=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />


</head>

<body>

    <div class="ib-menu-overlay ib-toggle-menu"></div>

<!--      TOPBAR      -->

    <header class="ib-topbar">
        <div class="ib-logo">
            <a href="#ib-home-presentation"><img src="images/logo-ideabox.svg" alt="Ideabox - Acelerando Ideias Inovadoras"/></a>
        </div>

        <nav class="ib-navbar">
            <a href="#ib-quem-somos-link" target="_top">Quem Somos</a>
            <a href="#ib-section-solucoes" target="_top">Soluções</a>
            <a href="#ib-section-cases" target="_top">Cases</a>
            <a href="#ib-section-contato" target="_top"><button class="ib-navbar-cta" type="button">SOLICITE UMA DEMONSTRAÇÃO</button></a>
        </nav>
    </header>


<!--      toogle navbar      -->
    <button class="ib-btn-menu-mob ib-toggle-menu">
        <ion-icon name="menu-outline"></ion-icon>
    </button>

    <nav class="ib-menu-mob ib-menu-is-closed">
        <a href="#ib-home-presentation" target="_top">Home</a>
        <a href="#ib-quem-somos-link" target="_top">Quem Somos</a>
        <a href="#ib-section-solucoes" target="_top">Soluções</a>
        <a href="#ib-section-cases" target="_top">Cases</a>
    </nav>

<!--     HOME      -->
    <section class="ib-home-presentation" id="ib-home-presentation">
        <div class="ib-home-overlay">
            <h1>Soluções inovadoras em qualquer tipo de organização.</h1>
            <p>Uma nova maneira de acelerar a inovação na sua empresa!</p>
            <a href="#ib-section-contato">
                <button class="ib-home-cta" type="button">SOLICITE UMA DEMONSTRAÇÃO</button>
            </a>
            <div class="ib-home-powered" id="ib-home-powered">
                <p>Desenvolvido por</p>
                <img src="images/sispro-logo-footer.png" alt="Ideabox - POWERED BY SISPRO"/>
                <div id="ib-quem-somos-link"></div>
            </div>
        </div>
    </section>

   
<!--      QUEM SOMOS      -->
        <section class="ib-quem-somos" id="ib-quem-somos">
                <div class="ib-quem-somos-texto">
                    <img src="images/logo-tagline.svg" class="ib-logo-tagline" alt="Ideabox - Acelerando Ideias Inovadoras"/>
                    <p>Uma plataforma colaborativa que conecta ideias e pessoas, que utiliza gamificação para facilitar e acelerar a inovação dentro de organizações: esse é o <b>ideabox</b>.</p>
                    <p>Auxiliando no processo de Inovação e estimulando a geração de ideias entre  usuários, a plataforma passa a impactar diretamente na cultura da empresa, conectando os desafios da empresa e as ideias dos colaboradores.</p>
                    <p>O funcionário terá certeza de que sua ideia chegou até onde precisava chegar. O gestor terá a certeza de que os desafios da empresa se tornaram claros e de fácil acesso.</p>
                    <p>Não importa em que etapa sua empresa esteja no caminho da inovação, o <b>ideabox</b> é a solução ideal para facilitar essa jornada.</p>
                </div>
                <img src="images/quem-somos.png" class="ib-img-quem-somos" alt="Ideabox - Quem Somos"/>
        </section>

<!--      SOLUÇÕES      -->

    <section class="ib-section-solucoes" id="ib-section-solucoes">
        <h2>Soluções</h2>

<!--      SOLUÇÕES - Carrossel      -->
        <div class="ib-solucoes-carrousel">
            <div class="ib-solucoes-thumb">
                <img src="images/thumb-01.png" alt="Ideabox - Lance Desafios" title="Ideabox - Lance Desafios"/>
                <h3>Lance Desafios</h3>
                <p>Lance desafios de todos os níveis para que os colaboradores e clientes possam compartilhar ideias criativas e inovadoras para transformar sua empresa.</p>
            </div>

            <div class="ib-solucoes-thumb">
                <img src="images/thumb-02.png" alt="Ideabox - Lance Desafios" title="Ideabox - Lance Desafios"/>
                <h3>Priorize Ideias</h3>
                <p>De forma simples e ágil, analise e selecione as ideias mais relevantes para o seu projeto</p>
            </div>

            <div class="ib-solucoes-thumb">
                <img src="images/thumb-03.png" alt="Ideabox - Lance Desafios" title="Ideabox - Lance Desafios"/>
                <h3>Fomente a Cultura da Inovação</h3>
                <p>Transforme seus colaboradores em agentes da inovação. Com um sistema de gamificação, recompensas e rankeamento, é possível fazer com que todos os participantes do programa de inovação sejam reconhecidos por seu desempenho.</p>
            </div>

            <div class="ib-solucoes-thumb">
                <img src="images/thumb-04.png" alt="Ideabox - Lance Desafios" title="Ideabox - Lance Desafios"/>
                <h3>Indicadores de Inovação</h3>
                <p>Tome decisões e saiba como está o nível de criatividade e inovação de sua empresa a partir de nossos KPIs de inovação</p>
            </div>
        </div>
    </section>


<!--      SISPRO      -->

    <section class="ib-section-sispro">
        <div class="ib-sispro-paragraph">
            <p><b>O ideabox é uma plataforma que faz parte das soluções de gestão da SISPRO.</b>

            <br><p>A SISPRO é uma software house de gestão empresarial que vem há décadas inovando, estando sempre atenta as mudanças de mercado. O seu propósito é criar soluções que transformem pessoas e negócios.</p>
                
            <br><p>Com o entedimento de que existem vários desafios para inovar em um mundo que está mudando cada vez mais rápido, foi criado o <b>ideabox</b>, uma spinoff, nascida no Sis.Hub, o núcleo de inovação da SISPRO, para auxiliar empresas a gerirem os processos de inovação e se reiventarem.</p>
                
            <br><p>Evidentemente, não existe uma receita de bolo ou fórmula mágica para alcançar a inovação. Cada organização tem as particularidades e um jeito de fazer a inovação acontecer. Mas existem princípios indispensáveis para se inovar: colaboração, cocriação e conexão com o ecossistema inovador.</p>
                
            <br><p><b>A sua empresa está preparada para essa transformação?</b></p>

            <a href="https://www.sispro.com.br/" target="_blank"><button class="ib-sispro-cta" type="button">Conheça a Sispro! </button></a>
        </div>

        <p class="ib-sispro-paragraph-mob">
            Com o entendimento de que um dos
            fatores determinantes para a inovação
            é o relacionamento em rede,
            percebeu-se a necessidade de conectar
            a <b>SISPRO</b> com o ecossistema de
            empreendedorismo e inovação.
            Nesta linha, foi desenvolvida uma
            spin off da empresa, <b>o ideabox.</b></p>
            <img src="images/ideabox-powered-by-sispro.svg"/>
            <a href="https://www.sispro.com.br/" target="_blank"><button class="ib-sispro-cta-mob" type="button">Conheça a Sispro! </button></a>
    </section>

<!--      NÚMEROS      -->

    <section class="ib-section-numeros">
        <h2>Alguns números
            que demonstram
            <b>nossas conquistas!</b></h2>

    <div class="ib-numeros-group-thumb1">
        <div class="ib-numeros-thumb">
                <img src="images/desafios-criados.svg"/>
                <h1>20</h1>
            <p>Desafios Criados</p>
        </div>
        <div class="ib-numeros-thumb">
            <img src="images/ideias-geradas.svg"/>
            <h1>+250</h1>
            <p>Ideias Geradas</p>
        </div>
    </div>

    <div class="ib-numeros-group-thumb2">
        <div class="ib-numeros-thumb">
            <img src="images/projetos-finalizados.svg"/>
            <h1>12</h1>
            <p>Projetos Finalizados</p>
        </div>
        <div class="ib-numeros-thumb">
            <img src="images/pessoas-impactadas.svg"/>
            <h1>571</h1>
            <p>Pessoas Impactadas</p>
        </div>
    </div>
    
    </section>

<!--      REVIEW      -->

    <section class="ib-section-review">
        <h2>Acelerando a inovação dentro de organizações:</h2>

        <div class="ib-review-carrousel">

            <div class="ib-review-group1">

                <div class="ib-review-thumb">
                    <img src="images/estrelas.svg" id="ib-review-estrelas"/>
                    <p>"Com o <b>Ideabox</b> conseguimos facilitar e ampliar o processo de construção de soluções para nossa empresa. Dando voz aos colaboradores e parceiros tornamos o processo de ideação colaborativo e dinâmico, conseguindo um engajamento do time que não teríamos sem o uso da ferramenta."</p>
                    <div class="ib-review-reviewer">
                        <img src="images/vicente-engel.png" id="ib-review-foto"/>
                        <h1>Vicente Engel</h1>
                        <h3>Diretor Executivo | Muck</h3>
                    </div>
                </div>

                <div class="ib-review-thumb">
                    <img src="images/estrelas.svg" id="ib-review-estrelas"/>
                    <p>"O <b>Ideabox</b> é uma ferramenta gameficada incrível para apoiar projetos de inovação aberta, sobretudo na fase de ideação! É personalizável e gera engajamento por meio da gameficação, permitindo a criação e a gestão de campanhas de recompensas."</p>
                    <div class="ib-review-reviewer">
                        <img src="images/marcio-machado.png" id="ib-review-foto"/>
                        <h1>Marcio Machado</h1>
                        <h3>Diretor de Inovação | ULBRA</h3>
                    </div>
                </div>

                <div class="ib-review-thumb">
                    <img src="images/estrelas.svg" id="ib-review-estrelas"/>
                    <p>"Com o <b>IdeaBox</b> é possível democratizar, engajar e sistematizar o processo de inovação de um jeito divertido e colaborativo. A dinâmica da plataforma permite, não só gerarmos ideias mais completas, como também, desenvolvermos uma cultura de inovação nas organizações."</p>
                    <div class="ib-review-reviewer">   
                        <img src="images/bruno-bittencourt.png" id="ib-review-foto"/>
                        <h1>Bruno Bittencourt </h1>
                        <h3>Consultor de Inovação e Liderança</h3>
                    </div>
                </div>

            </div>

            <div class="ib-review-group2">

                <div class="ib-review-thumb">
                    <img src="images/estrelas.svg" id="ib-review-estrelas"/>
                    <p>"O <b>Ideabox</b> nos viabilizou uma nova forma de integrar a empresa, potencializando a capacidade de todos os colaboradores para a descoberta de situações a serem tratadas, bem como na proposição de melhorias em nossos produtos e processos."</p>
                    <div class="ib-review-reviewer">      
                        <img src="images/gilberto-bueno.png" id="ib-review-foto"/>
                        <h1>Gilberto Bueno</h1>
                        <h3>Supervisor de Desenvolvimento | CTD</h3>
                    </div>    
                </div>

                <div class="ib-review-thumb">
                    <img src="images/estrelas.svg" id="ib-review-estrelas"/>
                    <p>"O <b>Ideabox</b> é uma ferramenta que colabora com o processo de inovação no que tange captação de ideias dos colaboradores a partir dos desafios que são propostos pela empresa. Ela tem uma interface amigável “clean” e o sistema de ranqueamento com os pontos acumulados  estimulam os colegas a contribuírem com novas ideias."</p>
                    <div class="ib-review-reviewer">
                        <img src="images/marcelo-saldanha.png" id="ib-review-foto"/>
                        <h1>Marcelo Saldanha</h1>
                        <h3>Gerente- Sispro ERP Cloud | SISPRO</h3>
                    </div>
                </div>
            
            </div>

        </div>

    </section>

<!--      CASES      -->

    <section class="ib-section-cases" id="ib-section-cases">
        <h3>Cases</h3>
    <div class="ib-cases-images">
        <a href="https://www.site.ctd.com.br/"> <img src="images/logo-ctd.png" alt="Logo CTD"></a>
        <a href="http://www.muck.com.br/"> <img src="images/logo-muck.png" alt="Logo Imobiliária Muck"></a>
        <a href="http://ideathon.online/"> <img src="images/logo-ideathon.png" alt="Logo Ideathon Covid-19"></a>
    </div>
    </section>

<!--      CONTATO      -->

    <section class="ib-section-contato" id="ib-section-contato">
        <h3>Quer saber mais?</h3>
        <form id="ib-form" method="post" action="index.php#empresa" name="email-form" data-name="Email Form" class="ib-form">

            <label for="Nome" class="nome">Nome*</label>
            <input type="text" class="text-field w-input" maxlength="256" name="nome" data-name="Nome" id="Nome" required="">

            <label for="empresa" class="empresa">Empresa*</label>
            <input type="text" class="text-field-2 w-input" maxlength="256" name="empresa" data-name="empresa" id="empresa" required="">
                                
            <label for="e-mail">E-mail*</label>
            <input type="email" class="text-field-3 w-input" maxlength="256" name="email" data-name="e-mail" id="e-mail" required="">

            <label for="verifica-o">8+2=?*</label>
            <input type="number" class="text-field-4 w-input" maxlength="256" name="verifica" data-name="verificação" id="verifica-o" required="">

            <input type="submit" value="ENVIAR" data-wait="Enviando..." class="ib-contato-cta" id="ib-contato-cta">
        </form>

        <?php if ($erro == 1) { ?>
            <div class="success-message w-form-done" style="display: block; background-color: #16ea16; border-radius: 3px;">
              <div class="text-block-9" style="color: white;">Obrigado! Sua mensagem foi enviada com sucesso!</div>
            </div>
            <?php } if ($erro == 3) { ?>
            <div class="w-form-fail" style="display: block; background-color: #e82020; border-radius: 3px;">
            <div class="text-block-10" style="color: white; text-align: center;">Oops! Você é um robo? Pois seu cálculo está errado :(</div>
            </div>
            <?php } if ($erro == 2) { ?>
            <div class="w-form-fail" style="display: block; background-color: #e82020; border-radius: 3px;">
              <div class="text-block-10" style="color: white; text-align: center;">Oops! Algo não está certo :( Vamos tentar de novo?</div>
            </div>
        <?php } ?>

        <img src="images/contato.png" class="ib-img-contato" alt="Ideabox - Quem Somos"/>

    </section>

<!--      FOOTER      -->

    <section class="ib-section-footer">
        <div class="ib-footer-logo">
            <img src="images/ideabox-logo-footer.svg"/>
            <img src="images/sispro-logo-footer.png"/>
        </div>
        <h2>Endereço:<br>
            Av. Getúlio Vargas, 5450 <br>
            Centro, Canoas - RS, 92010-012</h2>
            <h2>Fone: (51) 9 8455.3300</h2>
            <h2>E-mail: ideabox@sispro.com.br</h2>
        <div class="ib-footer-social-media">
            <a href="https://www.facebook.com/SisproERP/"><img src="images/logo-facebook.svg" class="ib-footer-logo-facebook"></a>
            <a href="https://www.instagram.com/sis.hub/"><img src="images/logo-instagram.svg" class="ib-footer-logo-instagram"></a>
        </div>
    </section>


<!--      SCRIPTS      -->
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>

<!--      SCRIPTS / carrossel soluções      -->
    <script type="text/javascript">
        $('.ib-solucoes-carrousel').slick({
            infinite: true,
            arrows: true,
            dots: true,
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 1,
            responsive: [
        {
            breakpoint: 992,
            settings: {
                arrows: true,
                dots: true,
                draggable: true,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        },
    {
            breakpoint: 320,
            settings: {
            dots: true,
            arrows: false,
            centerMode: true,
            centerPadding: '',
            slidesToShow: 1
            }
    }
    ]
    });
    </script>


</body>
</html>