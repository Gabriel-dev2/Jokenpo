<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>JOKENPO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }

    *, ::after, ::before {
        box-sizing: border-box;
    }

    form {
        display: block;
        margin-top: 0em;
    }

    .text-center {
        text-align: center!important;
    }

    body {
        margin: 0;
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff;
    }
</style>
    <link href="../css/style.css" rel="stylesheet">
</head>
<body class="text-center">
                <?php
                echo "<form class=\"form-signin\" method=\"get\" action=\"../jogo/Action.php\">";
                echo "<img class=\"mb-4\" src=\"../images/jokenpo.jpg\" alt=\"\" width=\"200\" height=\"200\">";
                echo "<h1 class=\"h3 mb-3 font-weight-normal\">Let´s play!!!</h1>";
                echo "<label for=\"jogadaJokenpo1\">Type your name</label>";
                echo "<input type=\"text\" class=\"form-control\" id=\"jogadaJokenpo1\" name=\"nome\">";
                echo "<label for=\"jogadaJokenpo\">Choose your weapon</label>";
                echo "<select class=\"form-control\" id=\"jogadaJokenpo\" name=\"weapon\">";
                echo "<option></option>";
                echo "<option value=\"Rock\">Rock</option>";
                echo "<option value=\"Scissor\">Scissor</option>";
                echo "<option value=\"Paper\">Paper</option>";
                echo "</select>";
                echo "<button type=\"submit\" class=\"btn btn-lg btn-primary btn-block\" name=\"Play\">Play</button>";
                echo "</form>";
                ?>
</body>
</html>

