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
<?php require "crud.php"; 
    
?>
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
    <section id="form-container">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div  id="form-generic">
                <div class="form-group">
                    <label for="nome">Nome da atração: </label>
                    <input type="text" name="nome" id="nome" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição: </label>
                    <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="imagem" id="file">Inserir imagem<input type="file" name="imagem" id="imagem"></label>
                </div>
            </div>
        </form>
    </section>
    <footer>
        <h3 id="copy">GeekIF 2022 - All Rights Reserved | Todos Os Direitos Reservados</h3>
    </footer>
</body>
</html>