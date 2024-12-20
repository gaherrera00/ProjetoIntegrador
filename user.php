<!-- pagina de avaliacao para o usuario -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // coleta os dados do formulario
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : '';
    $avaliacao = isset($_POST['avaliacao']) ? $_POST['avaliacao'] : '';

    // gravacao das avaliacoes em um arquivo txt
    if (!empty($nome) && !empty($mensagem) && !empty($avaliacao)) {
        $avaliacaoFormatada = "Nome: $nome\nMensagem: $mensagem\nAvaliação: $avaliacao estrelas\n\n";
        $arquivo = "historico_de_avaliacoes.txt";
        $file = fopen($arquivo, "a");
        if ($file) {
            fwrite($file, $avaliacaoFormatada);
            fclose($file);
            echo "<script>alert('Agradecemos pela sua avaliação!'); window.location.href = 'secao1.php';</script>";
        }
}
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Satisfação</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(242, 236, 190);
            color: rgb(154, 59, 59);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        .voltar {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: transparent;
            color: rgb(154, 59, 59);
            border: none;
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .voltar:hover {
            text-decoration: underline;
        }

        .voltar i {
            margin-right: 8px;
        }

        .container {
            background-color: rgb(226, 199, 153);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            z-index: 1;
        }

        h2 {
            text-align: center;
            color: rgb(154, 59, 59);
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: bold;
            color: rgb(154, 59, 59);
        }

        input[type="text"],
        textarea {
            width: 93.5%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid rgb(192, 130, 97);
            border-radius: 6px;
            background-color: #fff;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: rgb(154, 59, 59);
        }

        input[type="submit"] {
            background-color: rgb(154, 59, 59);
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 45px;
        }

        input[type="submit"]:hover {
            background-color: rgb(192, 130, 97);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .caixa {
            text-align: center;
            background-color: rgba(192, 130, 97, 0.2);
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
        }

        .avaliacao-estrelas {
            font-size: 40px;
            color: #ccc;
            cursor: pointer;
        }

        .avaliacao-estrelas .estrela {
            transition: color 0.5s ease;
        }

        .avaliacao-estrelas .estrela.selecionada {
            color: gold;
        }
    </style>
    <script>
        // Função para selecionar estrelas de avaliação
        function avaliar(valor) {
            const estrelas = document.querySelectorAll('.avaliacao-estrelas .estrela');
            let delay = 0;
            estrelas.forEach((estrela, index) => {
                setTimeout(() => {
                    if (parseInt(estrela.getAttribute('data-valor')) <= valor) {
                        estrela.classList.add('selecionada');
                    } else {
                        estrela.classList.remove('selecionada');
                    }
                    // leve atraso para completar as estrelas
                }, delay);
                delay += 100;
            });
            document.getElementById("avaliacaoInput").value = valor;
        }
    </script>
</head>

<body>
    <a href="secao1.php"><button class="voltar"><i class="fa-solid fa-angle-left"></i>Voltar</button></a>

    <div class="container">
        <h2>Pesquisa de Satisfação</h2>
        <!-- formulariode avaliacao -->
        <form action="" method="POST">
            <div class="form-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="4" required></textarea>
            </div>

            <div class="caixa">
                <label for="avaliacao">Avaliação:</label>
                <div class="avaliacao-estrelas" id="avaliacao">
                    <span class="estrela" data-valor="1" onclick="avaliar(1)">&#9733;</span>
                    <span class="estrela" data-valor="2" onclick="avaliar(2)">&#9733;</span>
                    <span class="estrela" data-valor="3" onclick="avaliar(3)">&#9733;</span>
                    <span class="estrela" data-valor="4" onclick="avaliar(4)">&#9733;</span>
                    <span class="estrela" data-valor="5" onclick="avaliar(5)">&#9733;</span>
                </div>
            </div>
            <input type="hidden" id="avaliacaoInput" name="avaliacao">
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>