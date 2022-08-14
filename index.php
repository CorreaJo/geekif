<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geek IF Itapetininga</title>
    <link rel="stylesheet" href="style.css">
   <!-- <link rel="shortcut icon" href="/src/imagens/favicon16.ico"/> -->
    <link rel="shortcut icon" type="imagem/x-icon" href="src/imagens/favicon64.ico"/>	
</head>
<body>
    <?php require "crud.php"; ?>
    <header>
        <div class="Topo">
            <div class="cabecalho">
				<div id = "logoif">
                <a href="https://itp.ifsp.edu.br/" target="_blank">
				<img src="src/imagens/logoif_branco.png" alt="logo_if"></a>
				</div>
				<div id = "logogeek">
				<a href="index.html" target="_self">
                <img src="src/imagens/logogeek.png" alt="logo_evento"></a>
				</div>
				
                <div class="redes_sociais">
                    <a href="https://www.instagram.com/ifspitapetininga" target="_blank">
                        <img src="src/imagens/logoinstagram.png" alt="Instagram">
                    </a>
                    <a href="https://www.facebook.com/ifspitape" target="_blank">
                        <img src="src/imagens/logofacebook.png" alt="Facebook">
                    </a>
					<a></a>
				</div>
            </div>
        <!--<nav>
                <button id="mob">&#9776;</button>
                <div class="Barra_Utilidades">
                    <a href="">Ingressos</a>
                    <a href="">Atrações</a>
                    <a href="">Torneios</a>
                    <a href="">Cosplays</a>
                    <a href="">Expositores</a>
                    <a href="">Programação</a>
                    <a href="">Como Chegar</a>
                    <a href="">Organização</a>
                </div>
            </nav>-->

			<div class="menu-content">
				<label class="open-menu-all" for="open-menu-all">
                    <input class="input-menu-all" id="open-menu-all" type="checkbox" name="menu-open">
                    
                    <div class="navegacao-mobile">
                        <span class="linha-menu"></span>
                        <span class="linha-menu"></span>
                        <span class="linha-menu"></span>
                    </div>
                    
                    <ul class="list-menu">
                        <li class="item-menu">
                        <a href="index.html" target="_self" class="link-menu">Home</a>
                        </li>
                        <li class="item-menu">
                        <a href="ingressos.html" target="_self" class="link-menu">Ingressos</a>
                        </li>
                        <li class="item-menu">
                        <a href="breve.html" target="_blank" class="link-menu">Atrações</a>
                        </li>
                        <li class="item-menu">
                        <a href="breve.html" target="_blank" class="link-menu">Torneios</a>
                        </li>
                        <li class="item-menu">
                        <a href="breve.html" target="_blank" class="link-menu">Cosplays</a>
                        </li>
                        <li class="item-menu">
                        <a href="breve.html" target="_blank" class="link-menu">Expositores</a>
                        </li>
                        <li class="item-menu">
                        <a href="breve.html" target="_blank" class="link-menu">Programação</a>
                        </li>
                        <li class="item-menu">
                        <a href="comochegar.html" target="_self" class="link-menu">Como Chegar</a>
                        </li>
                        <li class="item-menu">
                        <a href="breve.html" target="_blank" class="link-menu">Organização</a>
                        </li>
                    </ul>
			    </label>
		    </div>
        </div>
    </header>

    <section id="banners">
        <div class="slides animation">
            <img src="src/imagens/geekif.jpg" alt="Banner 1">
        </div>
        <div class="slides animation">
            <img src="src/imagens/torneios.jpg" alt="Banner 2">
        </div>
        <div class="slides animation">
            <img src="src/imagens/cosplay.jpg" alt="Banner 3">
        </div>
       
    </section>

	<div id="sub_atracoes"><h2 class="sub-titulo">ATRAÇÕES</h2></div>
    <section id="atracoes">
        
        <div class="flip">
            <div class="flip-inner">
                <div class="flip-front">
					<img src = "src/imagens/kungfu-frente.jpg">
                    
                </div>
                <div class="flip-back">
                    <div class="bg-image"></div>
                    <div class="atr-text">
                        <h2>Kung Fu</h2>
                        <p>O Kung Fu Garra de Águia é uma arte milenar chinesa que se inspira na águia para executar seus movimentos, apresenta técnicas versáteis e movimentos suaves, permitindo a definição, tonificação e fortalecimento do corpo. A academia de Itapetininga é administrada pelo Mestre Benedito Ribeiro Neto e está há mais de 20 anos formando artistas marciais.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src = "src/imagens/hapkido-frente.jpg">
                </div>
                <div class="flip-back">
                    <div class="bg-image"></div>
                    <div class="atr-text">
                        <h2>Hapkido</h2>
                        <p>O Hapkido é uma arte marcial coreana usada para defesa pessoal e tratamento do corpo, tem como foco a coordenação, união e harmonia. Seu preceito é que uma sociedade melhor e mais desenvolvida gera menos conflitos. A academia de Hapkido Contato Brasil é administrada pelo Mestre Marcos Silvério e está há mais de 30 anos formando artistas marciais.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src = "src/imagens/nisshindaiko-frente.jpg">
                </div>
                <div class="flip-back">
                    <div class="bg-image"></div>
                    <div class="atr-text">
                        <h2>Nisshin Daiko</h2>
                        <p>O Taiko (tambor) é um instrumento da cultura japonesa que foi muito usado como meio de comunicação, em festivais, em guerras e no teatro. Sua prática melhora o condicionamento físico e a coordenação motora, além de agregar valores como disciplina, respeito e trabalho em grupo. O grupo Nisshin Daiko, divulga os valores culturais e éticos desta arte desde 2004.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src = "src/imagens/victor-frente.jpg">
                </div>
                <div class="flip-back">
                    <div class="bg-image"></div>
                    <div class="atr-text">
                        <h2>Victor Duarte Studio</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src = "src/imagens/daniel-frente.jpg">
                </div>
                <div class="flip-back">
                    <div class="bg-image"></div>
                    <div class="atr-text">
                        <h2>Daniel Duarte</h2>
                        <p>.</p>
                    </div>
                </div>
            </div>
        </div>
		<div class="flip">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src = "src/imagens/doutores-frente.jpg">
                </div>
                <div class="flip-back">
                    <div class="bg-image"></div>
                    <div class="atr-text">
                        <h2>Doutores do Rock</h2>
                        <p>Doutores do Rock é uma banda talentosa que toca estilos como Rock, Hard Rock e também Heavy Metal. A banda já tem 9 anos de formação e seus integrantes são todos professores e doutores em suas áreas do conhecimento, por isto, o nome da banda une suas duas paixões, ensino e rock'n'roll.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flip">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src = "src/imagens/herois_itape.jpg">
                </div>
                <div class="flip-back">
                    <div class="bg-image"></div>
                    <div class="atr-text">
                        <h2>Heróis Itapê</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip">
            <div class="flip-inner">
                <div class="flip-front">
                    <h2>Em Breve</h2>
                </div>
                <div class="flip-back">
                    <div class="bg-image"></div>
                    <div class="atr-text">
                        <h2>Aguardem mais novidades</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
		<div class="flip">
            <div class="flip-inner">
                <div class="flip-front">
                    <h2>Em Breve</h2>
                </div>
                <div class="flip-back">
                    <div class="bg-image"></div>
                    <div class="atr-text">
                        <h2>Aguardem mais novidades</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div><div class="flip">
            <div class="flip-inner">
                <div class="flip-front">
                    <h2>Em Breve</h2>
                </div>
                <div class="flip-back">
                    <div class="bg-image"></div>
                    <div class="atr-text">
                        <h2>Aguardem mais novidades</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="patrocinadores">
            <p>PATROCÍNIO</p>
            <div>
                <!--
                    logos e nomes de todos os patrocinadores
                -->
            </div>
        </div>
        <div class="patrocinadores">
            <p>APOIO</p>
            <!--
                logos e nomes dos apoiadores
            -->
        </div>
    </section>
    <footer>
        <h3 id="copy">GeekIF 2022 - All Rights Reserved | Todos Os Direitos Reservados</h3>
    </footer>
    

	<script>
        let slideIndex = 0
        showSlides()

        function showSlides(){
            
            let slides = document.getElementsByClassName('slides')

            for(let i = 0; i < slides.length; i++){
                slides[i].style.display = 'none'
            }

            slideIndex++

            if(slideIndex > slides.length){
                slideIndex = 1
            }

            slides[slideIndex-1].style.display = "block"

            setTimeout(showSlides, 10000)
        }
    </script>

</body>
</html>