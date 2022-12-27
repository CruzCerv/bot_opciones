<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot ConfiguroWeb</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <form class="boton">
        <div class="title">
            ChatBot
            <div class="recarga"></div>
        </div>

        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hola, bienvenido. ¿Como puedo ayudarte?</p>
                    <div id="lista" class="preguntas">
                        <input type="submit" id="1" value='$pregunta'></input> 
                        <input type="submit" id="2" value='$pregunta'></input>
                        <input type="submit" id="3" value='$pregunta'></input>
                        <input type="submit" id="4" value='$pregunta'></input>
                        <input type="submit" id="5" value='$pregunta'></input>
                        
                    
                        <!--<script>
                            $(document).ready(function(){
                                $('#opciones').on("click", function(){
                                    
                                    $value2 = $('#opciones').val();
                                    $msg2 = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value2 + '</p></div></div>';
                                    $(".form").append($msg2);
                                    
                                    $.ajax({
                                        url: 'message.php',
                                        type: 'POST',
                                        data: 'text=' + $pregunta,
                                        //data: 'text=' + $index,
                                        success: function(result) {
                                            $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                                            $(".form").append($replay);
                                            // cuando el chat baja, la barra de desplazamiento llega automáticamente al final
                                            $(".form").scrollTop($(".form")[0].scrollHeight);

                                            /*if (index>=7 ){
                                            document.getElementById("data").disabled = true;
                                            }else{}*/
                                        }
                                    });
                                })
                            })
                        </script>-->
                    </div>
                </div>
                <input id="index" type="hidden"></input>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" class="i" type="text" placeholder="Escribe algo aquí.." required></input>
                <button id="send-btn" class="boton">Enviar</button>
            </div>
        </div>
        </form>
    </div>

    <script>
        //let index = 1;
        $(document).ready(function() {
            $numero = $("#id").val();
            $,ajax({
                //url: 'message.php',
                type: 'POST',
                data: 'text='+$numero,
                success: function(result) {
                    $pregunta = "" + result + "";
                }
            })
            /*$("#send-btn").on("click", function() {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                //$index =(index);
                //index = $index + 1;
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text=' + $value,
                    //data: 'text=' + $index,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                        $(".form").append($replay);
                        // cuando el chat baja, la barra de desplazamiento llega automáticamente al final
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                        if (index>=7 ){
                            document.getElementById("data").disabled = true;
                        }else{}
                    }
                });
            })*/
        })
    </script>
    <?php
        
        /*$connect = mysqli_connect('localhost','root','','chatbot');
        $obtener_datos = "select pregunta from general where id like '%$numero%'";
        $datos_encontrados = mysqli_query($connect, $obtener_datos);
        while($mostrar = mysqli_fetch_array($datos_encontrados)){
        $id ="select id from general";
        $encontrar_id = mysqli_query($connect, $id);
        while($mostrar_id = mysqli_fetch_array($encontrar_id)){
        $num_id = $mostrar_id['id'];
        $pregunta = $mostrar['pregunta'];
        echo "<input id='opciones' type='submit' value='$pregunta'>" . $num_id . "</input>";
        }
        }*/
    >
    

</body>

</html>