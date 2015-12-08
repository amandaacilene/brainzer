<?php include "conexao.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
            #perg1, #perg2, #perg3, #perg4, #perg5, #perg6{
                display: none;
            }
            #final{
                display: none;
            }
            #finalizar1,#finalizar2, #finalizar3, #finalizar4, #finalizar5, #finalizar6{
                display: none;
            }
            #h3{
                color: red;
            }
            .div{
                width: 130px;
                height: 80px;
                color: white;
                margin: 20px;
                background:  #0066ff;
            }
        </style>
        <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#comecar').click(function () {
                    $('#perg1').show('fast');
                    $('#orientacao').hide('fast');

                });
            });
            $(document).ready(function () {
                $('#proximo1').click(function () {
                    $('#perg2').show('fast');
                    $('#perg1').hide('fast');

                });
            });
            $(document).ready(function () {
                $('#proximo2').click(function () {
                    $('#perg3').show('fast');
                    $('#perg2').hide('fast');

                });
            });$(document).ready(function () {
                $('#proximo3').click(function () {
                    $('#perg4').show('fast');
                    $('#perg3').hide('fast');

                });
            });$(document).ready(function () {
                $('#proximo4').click(function () {
                    $('#perg5').show('fast');
                    $('#perg4').hide('fast');

                });
            });
            $(document).ready(function () {
                $('#proximo5').click(function () {
                    $('#perg6').show('fast');
                    $('#perg5').hide('fast');
                    $('#finalizar6').show('fast');
                    $('#proximo6').hide('fast');

                });
            });
            $(document).ready(function () {
                $('#finalizar6').click(function () {
                    $('#final').show('fast');
                    $('#perg6').hide('fast');

                });
            });
            function selecaoBotao(){
                
            }
        </script>
    </head>

    <body>
        <h1> "Quantos?" </h1>
        <div id="orientacao">
            <h3> No jogo dos "Quantos?" você terá que: <br><br>
                - Responder perguntas sobre quantidades. </h3>
            <input type="button" value="Começar" id="comecar"/>
        </div>

        <?php
        $id_jogo = 2;
        $a = 0;
        $quesito = "select * from quesito where jogo_id=$id_jogo";
        $result = mysqli_query($con, $quesito);
        if ($result) {
            while ($reg = mysqli_fetch_array($result)) {
                $a++;
                echo "<div id='perg$a'> ";
                echo "<h2>$a" . "ª Pergunta </h2>";
                echo "<h3>" . $reg['pergunta'] . "</h3> ";
                if ($reg['id']) {
                    $pergunta = $reg['id'];
                    $resp = "select * from respostas where quesito_id = '$pergunta'";
                    $resultado = mysqli_query($con, $resp);
                    if ($resultado) {
                        while ($regis = mysqli_fetch_array($resultado)) {
                            echo "<input type='button' class='div' onclick='selecaoBotao()' id='resp1$a' value= '".$regis['alternativa1']."'/>";
                            echo "<input type='button' class='div' onclick='selecaoBotao()' id='resp2$a' value= '".$regis['alternativa2']."'/> <br> <br>";
                            echo "<input type='button' class='div' onclick='selecaoBotao()' id='resp3$a' value= '".$regis['alternativa3']."'/>";
                            echo "<input type='button' class='div' onclick='selecaoBotao()' id='resp4$a' value= '".$regis['alternativa4']."'/> <br>";

                            echo "<input type='button' id='proximo$a' value='Próximo'/>";
                            echo "<input type='button' id='finalizar$a' value='Finalizar'/>";
                        }
                    }
                }
                echo "</div>";
            }
        }
        //$mysqli_close($con);
        ?>

        <div id="final">
            <h3> Você errou tantas questões! </h3>
            <input type='button' id='correcao' value='Ver Correção'/>
            <input type='button' id='respnova' value='Responder Novamente'/>
            <input type='button' id='sair' value='Sair'/>
            
        </div>


    </body>
</html>