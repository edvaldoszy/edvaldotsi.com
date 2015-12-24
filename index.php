<?php
    function menu($name)
    {
        if (isset($_GET['__uri'])) {
            return ($name == $_GET['__uri']) ? 'active' : '';
        } else {
            return ($name == 'home') ? 'active' : '';
        }
    }

?><!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Edvaldo Szymonek</title>
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Edvaldo Szymonek - Soluções Web e Mobile">
	<meta name="keywords" content="soluções, web, mobile, android, ios, internet">
	<meta property="og:url" content="http://edvaldotsi.com">
	<meta property="og:locale" content="pt_BR">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Edvaldo's personal website">
	<meta property="og:site_name" content="Edvaldo Szymonek">
	<meta property="og:description" content="Edvaldo Szymonek - Soluções Web e Mobile">
	<link rel="shortcut icon" href="assets/img/icon/favicon.png" type="image/png">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css">
	<link rel="stylesheet" href="assets/css/normalize.css" media="all">
	<link rel="stylesheet" href="assets/css/index.css?v=1.0" media="all">
</head>
<body>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-66124446-1', 'auto');
		ga('send', 'pageview');
	</script>
	<div class="wrap">
		<div class="wrap-header">
			<div class="content">
				<div class="navbar">
					<ul class="topmenu">
						<li><a class="<?= menu('home') ?>" href="/" title="Página inicial">Home</a></li>
						<li><a href="http://blog.edvaldotsi.com" title="Artigos, tutoriais e muito mais" target="_blank">Blog</a></li>
						<li><a class="<?= menu('portfolio') ?>" href="portfolio.html" title="Meus trabalhos">Portfólio</a></li>
						<li><a class="<?= menu('contato') ?>" href="/contato.html" title="Entre em contato">Contato</a></li>
					</ul>
				</div>
				<h1>Edvaldo Szymonek</h1>
			</div>
		</div><!-- .wrap-header -->

		<div class="wrap-main">
			<section class="wrap-about container">
				<div class="content">
					<p>Brasileiro, desenvolvedor na empresa BLZ Soluções Web, moro em Campo Mourão e sou estudante de Tecnologia em Analise e Desenvolvimento de sistemas na faculdade Integrado de Campo Mourão</p>
				</div>
			</section>
			<section class="wrap-services container">
				<div class="content clear">
					<div class="sv pull-left span3 text-center">
						<img class="img-fluid" src="assets/img/icon/web.png" alt="Desenvolvimento Web">
						<h3>Desenvolvimento Web</h3>
					</div>
					<div class="sv pull-left span3 text-center">
						<img class="img-fluid" src="assets/img/icon/mobile.png" alt="Desenvolvimento Mobile">
						<h3>Desenvolvimento Mobile</h3>
					</div>
					<div class="sv pull-left span3 text-center">
						<img class="img-fluid" src="assets/img/icon/responsive.png" alt="Design Responsivo">
						<h3>Design Responsivo</h3>
					</div>
				</div>
			</section>
            <section class="wrap-project container">
                <div class="content">

                </div>
            </section>
            <!--
            <section class="wrap-mobile container">
                <div class="content clear">
                    <img class="img-fluid pull-right" src="assets/img/content/nexus-portrait.png" alt=""/>
                </div>
            </section>
            -->
			<section class="wrap-footer container">
				<div class="content">
					<div class="social clear">
						<ul>
							<li>Website</li>
							<li><a href="/" title="Página inicial">Home</a></li>
							<li><a href="http://blog.edvaldotsi.com" title="Artigos, tutoriais e muito mais" target="_blank">Blog</a></li>
							<li><a href="/portfolio.html" title="Meus trabalhos">Portfólio</a></li>
							<li><a href="/contato.html" title="Entre em contato">Contato</a></li>
						</ul>
						<ul>
							<li>Redes Sociais</li>
							<li><a target="_blank" href="https://fb.com/edvaldoszy" title="Seja meu amigo no Facebook">Facebook</a></li>
							<li><a target="_blank" href="https://plus.google.com/u/0/102934675252501071967" title="Siga-me no Google Plus">Google Plus</a></li>
							<li><a target="_blank" href="https://twitter.com/edvaldoszy" title="Siga-me no Twitter">Twitter</a></li>
							<li><a target="_blank" href="https://youtube.com/dredvaldo" title="Inscreva-se no canal">YouTube</a></li>
						</ul>
						<ul>
							<li>Comunidade</li>
							<li><a target="_blank" href="https://github.com/edvaldoszy" title="Copie, modifique, contribua com projetos">Github</a></li>
						</ul>
					</div>
				</div>
			</section>
		</div><!-- .wrap-main -->
	</div><!-- .wrap -->
</body>
</html>