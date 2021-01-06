<?php //habilitando o cors
    header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/plain" rel="author" href="humans.txt" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <meta name="title" content="Gold Banks - Consultoria" />
    <meta name="author" content="@jlbnunes" />
    <meta name="description" content="Gold Banks - Consultoria tecnologia em finanças" />
    <meta name="geo.region" content="BR-RJ" />
    <meta name="geo.placename" content="Rio de Janeiro" />
    <meta name="geo.position" content="-22.999406;-43.343839" />
    <meta name="ICBM" content="-22.999406, -43.343839" />
    <meta property="og:image" content="<?php echo BASE_URL; ?>assets/images/goldbanks-shout.png"/>
    <meta property="og:image:width" content="432"/>
    <meta property="og:image:height"  content="415" />
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/goldbanks-shout.png" type="image/png">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/vivid-icons@1.0.10" type="text/javascript"></script>
    <title>Gold Banks - Investimentos</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-negocio fixed-top align-items-center"  data-menu="suave">
		<a class="navbar-brand" href="home">
			<img src="<?php echo BASE_URL;?>/assets/images/slogan-branco-sem-fundo.png" alt="" width="220" height="100">
		</a>
		
		<div data-menu="button" aria-expanded="false" aria-controls="menu" class="mt-2" data-menu="button">
            <i  data-vi-primary="#ffd935" data-vi-accent="#fff" data-vi="arrow-right"></i>
        </div>
        <div class="nav flex-column text-center position-fixed pt-5 mt-0" data-menu="list">
            <div class="text-center pb-5">
                <div class="">
                    <img src="<?php echo BASE_URL;?>/assets/images/slogan-branco-sem-fundo.png" alt="" width="220" height="100" class="circle" id="quemsou">
                </div>
            </div>
            <a href="<?php echo BASE_URL; ?>#home" class="nav-link mt-3">Sobre</a>
            <a href="<?php echo BASE_URL; ?>#servicos" class="nav-link mt-2">Serviços</a>
            <a href="<?php echo BASE_URL; ?>#contato" class="nav-link mt-2">Contato</a>
            <a href="<?php echo BASE_URL; ?>#vagas" class="nav-link mt-2">Vagas</a>
            <a href="<?php echo BASE_URL; ?>equipe" class="nav-link mt-2">Equipe</a>
            <section class="d-flex justify-content-center mt-5">
                <a href="https://api.whatsapp.com/send?phone=552196435-9287">
                    <img src="assets/images/icones/035-whatsapp.svg" class="w-50" class="d-inline-block" alt="" >
                </a>
            </section>
        </div>
		<!-- <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link" href="#home" tabindex="-1">Inicio <span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="#servicos" tabindex="-1">Serviços</a>
				<a class="nav-item nav-link" href="#contato" tabindex="-1" >Contato</a>
				<a class="nav-item nav-link" href="equipe" >Equipe</a>
			</div>
		</div> -->
	</nav>