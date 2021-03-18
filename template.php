<?php

//modelo de pagina do site
//copie este modelo para gerar novas paginas do site

//carrega as configurações da pagina
require('_config.php');

//aqui entram todos os seus códigos php desta pagina 

//configura o title dessa pagina
$T['pageTitle'] = '';

//define as folhas de estilo dessa página
$T['pageCSS'] = '/css/template.css';

//Define o Javascript desta pagina 
$T['pageJS'] = '/js/template.js';



//aqui entram todos os seus códigos php desta pagina 


// carrega o header da pagina

require('_header.php');


?>
            <article>

                <h2>Título da Página</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus numquam debitis quis doloremque
                    illo ab dolorem sed, ducimus reprehenderit? Culpa nulla tempora numquam quo quae explicabo harum
                    possimus cum porro?</p>
                <picture>
                    <img class="flush" src="https://picsum.photos/400/300" alt="Imagem aleatória">
                </picture>
                <p><a href="/">Link de teste</a></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ut ex voluptatibus, quibusdam,
                    consectetur neque enim iure aliquid cum dolore alias error facere deserunt quos itaque dolorem
                    inventore officiis fugit.</p>

            </article>


      
      <?php
            // carrega o header da pagina

require('_footer.php');

?>