<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
             #video{
                display: none;
               // margin-left: 500px;
            }
            //#titulo{
               // margin-left: 680px;
           // }
            //#botao{
              //  margin-left: 730px;
           // }
            #bt1{
                display: none;
            }
            #label{
                display:none;
                color: red;
            }
        </style>
        <script type="text/javascript" src="jquery-1.11.3.min.js"> </script>
        <script type="text/javascript">
        $(document).ready(function() {
              $('#botao').click(function() {
                  $('#video').show('slow');
                  $('#botao').hide('fast');
              });
        });
        function correcao(){
            perg1 = document.getElementById("2");
            perg2 = document.getElementById("7");
            perg3 = document.getElementById("12");
            perg4 = document.getElementById("14");
            perg5 = document.getElementById("20");
            perg6 = document.getElementById("21");
            
            if((perg1.selected == true) && (perg2.selected == true) && (perg3.selected == true) && (perg4.selected == true) && (perg5.selected == true) && (perg6.selected == true)){
                alert("Acertou todas as questões! Parabéns!");
            }else{   
                  $('#bt1').show('slow');
                  $('#bt').hide('fast');  
                  alert("Resposta Errada. Você tem a opção de verificar as resposta ou tentar novamente!");
                  return false;
            }
             $(document).ready(function() {
              $('#bt1').click(function() {
                  $('#label').show('slow');
              });
        });
        }
    </script>
    </head>
    <body>
        <h1 id="titulo"> Mentalizando </h1>
        <p> </p><br>
        <input type="button" id="botao" value="Assistir vídeo"> 
        <div id="video">
            <video width="560" height="315" controls="controls" > 
                <source src="video/FRUTAS_VIDEO_curto.mp4" type="video/mp4"> 
                <object data="" width="560" height="315"> 
                    <embed width="560" height="315" src="video/FRUTAS_VIDEO_curto.mp4"/>
                </object>
            </video>
           <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/CzqtMT1Zfb0" frameborder="0" allowfullscreen></iframe> -->
        </div>
        
        <form action="" onsubmit="correcao()">
            <label> 1)Quantas frutas tem no vídeo? </label> <br>
            <select id="pergunta1">
               <option id="1" > 1</option>
               <option id="2" > 5</option>
               <option id="3" > 9</option>
               <option id="4" > 4</option>
           </select> <br>
           <label id="label"> Resposta: 5 </label>
           <br>
            <label> 2)Quais frutas possuem a cor VERMELHA? </label><br>
            <select id="pergunta2">
               <option id="5" > Laranja e Banana</option>
               <option id="6" > Melancia e Uva</option>
               <option id="7" > Maçã e Melancia</option>
               <option id="8" > Banana e Mçã</option>
           </select> <br>
           <label id="label"> Resposta: Maçã e Melancia </label>
            <br>
            <label> 3)Qual fruta começa com a letra “L”?</label><br>
            <select id="pergunta4">
               <option id="13" > Maçã</option>
               <option id="14" > Laranja</option>
               <option id="15" > Uva</option>
               <option id="16" > Melancia</option>
           </select> <br>
           <label id="label"> Resposta: Laranja </label>
            <br>
            <label> 4)Quais frutas começam com a letra “M”?</label><br>
            <select id="pergunta3">
               <option id="9" > Uva e Maçã</option>
               <option id="10" > Laranja e Melancia</option>
               <option id="11" > Banana e Uva</option>
               <option id="12" > Melancia e Maçã</option>
           </select> <br>
           <label id="label"> Resposta: Melancia e Maçã </label>
            <br>
            <label> 5)Quais frutas tem a casca amarela? </label><br>
             <select id="pergunta4">
               <option id="17" > Maçã Goiaba</option>
               <option id="18" > Laranja e Uva</option>
               <option id="19" > Uva e Melancia</option>
               <option id="20" > Banana e Laranja</option>
           </select> <br>
           <label id="label"> Resposta: Banana e Laranja </label>
            <br>
            <label> 6)	Quais frutas tem folhas?</label><br>
             <select id="pergunta4">
               <option id="21" > Uva, Maçã e Laranja</option>
               <option id="22" > Laranja</option>
               <option id="23" > Uva e Melância </option>
               <option id="24" > Maçã e Melancia</option>
           </select> <br>
           <label id="label"> Resposta: Uva, Maçã e Laranja </label>
            <br>
            <br>
            <input type="submit" id="bt" value="Responder"/>
            <input type="button" id="bt1" name="bt1" value="Ver Correção"/>         
        </form> 
        <?php
        // put your code here
        ?>
    </body>
</html>
