
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Special Offers</title>
    <link rel="shortcut icon" href="../img/logo%20marca/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/cover.css" rel="stylesheet">

    <!-- Bootstrap JavaScript -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../bootstrap/js/bootstrap-notify.min.js" type="text/javascript"></script>

   

    <!-- JavaScript -->
    <script src="js/javaspcrit.js" type="text/javascript"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118360413-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-118360413-1');
    </script>

    




</head>

<body class="text-center">
    '<?php
        extract($_POST);

        $nascimento = implode('-', array_reverse(explode('/', $datN)));

        $date1 = new DateTime("now");
        $date2 = new DateTime($nascimento);
        
        $idade = $date1->diff($date2)->y;
            
        $servername = "localhost";
        $username = "user";
        $password = "password";
        $dbname = "projeto";

        // Conectar
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "INSERT INTO cadastros (nascimento, genero, promocao)
        VALUES ('{$idade}', '{$genero}', '{$promocao}')";

       $conn->query($sql);

        $conn->close();


    ?>
 

    

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column ">
        <header class="text-center mb-4">
            <div class="inner">
                <h1 class=" masthead-brand"><img src="../img/logo marca/Special Offers_ico.png" alt="" width="50" height="50"> Special Offers</h1>
                
            </div>
        </header>

        <main role="main" class="inner cover">
            <h2 class="cover-heading">Engenharia Social 🕵️‍️</h2><hr>
            <p class="lead text">A Engenharia Social é a arte de trapacear, construir métodos e estratégias de enganar em cima de informações cedidas 
                por pessoas ou ganhar a confiança para obter informações, são ações antigas, ganharam um novo termo: Engenharia Social. (SANTOS, 2004, P.22).</p>
            
            <h2 class="cover-heading">Phishing 🎣‍</h2><hr>
            <p class="lead text">A palavra Phishing, uma corruptela do verbo inglês fishing (pescar, em português), é utilizada para designar alguns tipos de
                 condutas fraudulentas que são cometidas na rede. (FILHO, 2005).</p>
            <p class="lead text">Segundo Cert.br (2012; p.9), O phishing ocorre por meio do envio de mensagens eletrônicas que:  
                <ul class="text">
                    <li>“Tentam se passar pela comunicação oficial de uma instituição conhecida, como um banco, uma empresa ou um site popular”;</li>
                    <li>“Procuram atrair a atenção do usuário, seja por curiosidade, por caridade ou pela possibilidade de obter alguma vantagem financeira”;</li>
                    <li>“Informam que a não execução dos procedimentos descritos pode acarretar sérias consequências, como a inscrição em serviços de proteção de crédito e o cancelamento de um cadastro, de uma conta bancária ou de um cartão de crédito”;</li>
                    <li>“Tentam induzir o usuário a fornecer dados pessoais e financeiros, por meio do acesso a páginas falsas, que tentam se passar pela página oficial da instituição; da instalação de códigos maliciosos, projetados para coletar informações 
                        sensíveis, e do preenchimento de formulários contidos na mensagem ou em páginas Web”.</li>
                </ul>

            </p>     
            
            <h2 class="cover-heading">TCC - Trabalho de Conclusão de Curso 👨‍🎓</h2><hr>
            <h4 >JUSTIFICATIVA</h4>
                <p class="lead text">O trabalho consiste em várias ocorrências frequentes na sociedade ao utilizar a engenharia social (como ferramenta o phishing) que permite pessoas mal intencionadas conseguir acesso a
                 informações privilegiadas ou sensíveis, e também existem empresas que treinam seus funcionários para conscientizar sobre a segurança da informação. Faz-se então, necessária a investigação da possibilidade dos 
                 usuários no momento que chegar uma propaganda fraudulenta, avaliando as vítimas no decorrer da sua trajetória.</p>  
            <h4 >OBJETIVO</h4>
                <p class="lead text">Este trabalho tem como objetivo utilizar a engenharia social, como a principal ferramenta o phishing, no website de promoções, para induzir os usuários a fornecer seus dados sigilosos.      
                </p> 
            <h4 >OBSERVAÇÃO</h4>
                <p class="lead text">Quero deixar bem claro que os únicos dados capturados é a <b>Idade</b>, <b>Gênero</b> e a <b>Promoção</b>! </p>           
            
            
        </main>

        
    </div>


</body>
</html>
