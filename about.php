<?php

//modelo de pagina do site
//copie este modelo para gerar novas paginas do site

//carrega as configurações da pagina
require('_config.php');

//aqui entram todos os seus códigos php desta pagina 

//configura o title dessa pagina
$T['pageTitle'] = 'Sobre nós';

//define as folhas de estilo dessa página
$T['pageCSS'] = '/css/about.css';

//Define o Javascript desta pagina 
$T['pageJS'] = '';



//aqui entram todos os seus códigos php desta pagina 


// carrega o header da pagina

require('_header.php');


?>
            <article>

                <h2>Sobre nós</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus numquam debitis quis doloremque
                    illo ab dolorem sed, ducimus reprehenderit? Culpa nulla tempora numquam quo quae explicabo harum
                    possimus cum porro?</p>
                <picture>
                    <img class="flush" src="/img/lucaslaranja.png"  alt="Imagem aleatória" style="width:300px; height:300px;">
                </picture>
                <p><a href="https://www.ambev.com.br/">Conheça o site oficial da AMBEV</a></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ut ex voluptatibus, quibusdam,
                    consectetur neque enim iure aliquid cum dolore alias error facere deserunt quos itaque dolorem
                    inventore officiis fugit.</p>

            </article>


      
      <?php
            // carrega o header da pagina

require('_footer.php');

?>