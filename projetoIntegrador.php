<?php
require_once 'cardapio.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- comeco do style -->
    <style>

        body {
            background-color: rgb(242, 236, 190);
        }

/* tag do primeiro titulo pra dar um espacamento diferente */
        .primeiro {
            color: rgb(154, 59, 59);
            text-align: center;
            font-size: 50px;
            margin-bottom: 25px;
        }

        h1 {
            color: rgb(154, 59, 59);
            text-align: center;
            font-size: 50px;
            margin-top: 150px;
            margin-bottom: 50px;
        }

        h3 {
            color: rgb(154, 59, 59);
            text-align: center;
            font-size: 30px;
            margin-bottom: 15px;
        }

        footer {
            width: 100%;
            margin-top: 100px;
        }

        .footertext {
            background-color: rgb(226, 199, 153);
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .links {
            margin-top: 10px;
            color: white;
            margin: 0 10px;
            text-decoration: none;
            cursor: pointer;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 50px;
            max-width: 1200px;
            width: 100%;
            margin: 50px auto;
        }

        .card {
            display: flex;
            background-color: rgb(226, 199, 153);
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            color: black;
            width: 470px;
            height: 180px;
        }

        .card img {
            width: 150px;
            height: 150px;
            border-radius: 5px;
            margin-top: 15px;
        }

        .info {
            margin-left: 15px;
            width: 300px;
        }
    </style>
</head>
<header>
    <!-- navegacao -->
</header>

<body>
    <h1 class="primeiro">Entradas</h1>
    <div class="container">
        <?php
        //contador para percorrer o array   
        $contador1 = 0;

        //foreach para montar o card  das entradas
        foreach ($entrada as $entra) {
            echo '
            <a href="pratos.php?codigoprato=' . $contador1 . '" class="card">
                    <div class="info">
                        <h3>' . $entra['nome'] . '</h3>
                        <p>' . $entra['resumo'] . '</p>
                        <b class="preco"> ' . $entra['preco'] . '</b  >
                    </div>
                    <div class="img">
                        <img src="./imagem/' . $entra['imagem'] . '">
                    </div>     
                </a>';
            $contador1++;
        }
        ?>
    </div>
    <h1>Pratos Principais</h1>
    <div class="container">
        <?php
        //contador para percorrer o array 
        $contador2 = 0;

        //foreach para montar o card dos pratos principais  
        foreach ($pratoPrincipal as $princ) {
            echo '
            <a href="pratos.php?codigoprato=' . $contador2 . '" class="card">
                    <div class="info">
                        <h3>' . $princ['nome'] . '</h3>
                        <p>' . $princ['resumo'] . '</p>
                        <b class="preco"> ' . $princ['preco'] . '</b  >
                    </div>
                    <div class="img">
                        <img src="./imagem/' . $princ['imagem'] . '">
                    </div>     
                </a>';
            $contador2++;
        }
        ?>
    </div>
    <h1>Acompanhamentos</h1>
    <div class="container">
        <?php
        //contador para percorrer o array    
        $contador3 = 0;

        //foreach para montar o card dos acompanhamentos
        foreach ($acompanhamento as $acomp) {
            echo '
            <a href="pratos.php?codigoprato=' . $contador3 . '" class="card">
                    <div class="info">
                        <h3>' . $acomp['nome'] . '</h3>
                        <p>' . $acomp['resumo'] . '</p>
                        <b class="preco"> ' . $acomp['preco'] . '</b  >
                    </div>
                    <div class="img">
                        <img src="./imagem/' . $acomp['imagem'] . '">
                    </div>     
                </a>';
            $contador3++;
        }
        ?>
    </div>
    <h1>Bebidas</h1>
    <div class="container">
        <?php
        //contador para percorrer o array   
        $contador4 = 0;

        //foreach para montar o card das bebidas
        foreach ($bebidas as $bebid) {
            echo '
            <a href="pratos.php?codigoprato=' . $contador4 . '" class="card">
                    <div class="info">
                        <h3>' . $bebid['nome'] . '</h3>
                        <p>' . $bebid['resumo'] . '</p>
                        <b class="preco"> ' . $bebid['preco'] . '</b  >
                    </div>
                    <div class="img">
                        <img src="./imagem/' . $bebid['imagem'] . '">
                    </div>     
                </a>';
            $contador4++;
        }
        ?>
    </div>
    <h3>Drinks:</h3>
    <div class="container">
        <?php
        //contador para percorrer o array   
        $contador5 = 0;
        foreach ($drinks as $drink) {
            echo '
            <a href="pratos.php?codigoprato=' . $contador5 . '" class="card">
                    <div class="info">
                        <h3>' . $drink['nome'] . '</h3>
                        <p>' . $drink['resumo'] . '</p>
                        <b class="preco"> ' . $drink['preco'] . '</b  >
                    </div>
                    <div class="img">
                        <img src="./imagem/' . $drink['imagem'] . '">
                    </div>     
                </a>';
            $contador5++;
        }
        ?>
    </div>
    <footer>
        <div class="footertext">
            <p>&copy; 2024 Gusteau's. Todos os direitos reservados.</p>
            <p>Endereço: R. Santo André, 680 - Boa Vista, São Caetano do Sul-SP</p>
            <p>Telefone: (11) 4227-7450 | Email: contato@restaurante.com.br</p>
            <div class="links">
                <i class="fa-brands fa-instagram" href="https://www.instagram.com/senai.sp/" style="padding:7px;"></i>
                <i class="fa-brands fa-x-twitter" href="https://www.twitter.com/seutwitter" style="padding:7px;"></i>
                <i class="fa-brands fa-facebook" href="https://www.facebook.com/seufacebook" style="padding:7px;"></i>
            </div>
        </div>

    </footer>
</body>

</html>