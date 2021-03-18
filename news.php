<?php

//modelo de pagina do site
//copie este modelo para gerar novas paginas do site

//carrega as configurações da pagina
require('_config.php');

//aqui entram todos os seus códigos php desta pagina 

//configura o title dessa pagina
$T['pageTitle'] = 'Notícias';

//define as folhas de estilo dessa página
$T['pageCSS'] = '/css/news.css';

//Define o Javascript desta pagina 
$T['pageJS'] = '/js/jquery.rss.min.js';



//aqui entram todos os seus códigos php desta pagina 


// carrega o header da pagina

require('_header.php');


?>
            <article>
            <div id="news">
                <h2>Notícias atualizadas</h2>
            </div>
            
            </article>

  
      
      <?php
            // carrega o header da pagina

require('_footer.php');

?>