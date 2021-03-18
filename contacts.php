<?php

//Página de contatos


//carrega as configurações da pagina
require('_config.php');

//aqui entram todos os seus códigos php desta pagina 

//configura o title dessa pagina
$T['pageTitle'] = 'Faça contato';

//define as folhas de estilo dessa página
$T['pageCSS'] = '/css/contacts.css';

//Define o Javascript desta pagina 
$T['pageJS'] = '';



//aqui entram todos os seus códigos php desta pagina 

$feedback = false;


if(isset($_POST['contactSend'])) {

$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$subject = trim(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING));
$message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));


$sql = "

INSERT INTO contacts (name, email, subject, message) VALUES 
('{$name}', '{$email}', '{$subject}', '{$message}');";

$conn->query($sql);

$feedback = true;

}

// carrega o header da pagina

require('_header.php');


?>
            <article>

                <h2><?php echo $T['pageTitle'] ?></h2>

                <?php 

                if(!$feedback):
                ?>
               
                <form method="POST" name="contacts" id="contacts">

                <p> Preencha os campos abaixo para entrar em contato com <?php echo $T['fullSiteName'] ?>.</p>

                <p class="advise">* Todos os campos são obrigatórios.</p>

                <input type="hidden" name="contactSend" value="Ok">

                <p>
                
                   <label for="name">Nome:</label>
                   <input type="text" name="name" id="name" required minlength="3" class="valid" placeholder="Digite o nome">
                
                </p>

                
                <p>
                
                   <label for="email">E-mail:</label>
                   <input type="email" name="email" id="email" required class="valid" placeholder="Digite o e-mail">
                
                </p>

                
                <p>
                
                   <label for="subject">Assunto:</label>
                   <input type="text" name="subject" id="subject" required minlength="5" class="valid" placeholder="Digite o assunto">
                
                </p>

                <p>
                
                   <label for="message">Mensagem:</label>
                   <textarea name="message" id="message" required minlength="5" class="valid" placeholder="Digite a mensagem"></textarea>
                
                </p>

                <p>
                
                   <label for="submit"></label>
                   <button type="submit" name="submit" id="submit">Enviar</button> 
                </p>
</form>


      <?php 


      else :


      ?>

      <p><strong>Olá <?php echo $name ?>!</strong></p>
    <p>Seu contato foi enviado com sucesso.</p>
    <p><em>Obrigado...</em></p>
    <p class="center">
        <a href="/index.php"><i class="fas fa-fw fa-home"></i></a>
    </p>


    <?php 

    endif;

    ?>
            </article>

      <?php
            // carrega o header da pagina

require('_footer.php');

?>