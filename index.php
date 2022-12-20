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
                    <p>Hola, bienvenido. Cual es tu nombre?</p>
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
        let index = 1;
        $(document).ready(function() {
            $("#send-btn").on("click", function() {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $index =(index);
                index = $index + 1;
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    //data: 'text=' + $value,
                    data: 'text=' + $index,
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
            })
        })
    </script>


</body>

</html>