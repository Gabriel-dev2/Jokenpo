<?php
    $name = $_GET["nome"];
    $escolha_player1= $_GET["weapon"];

    $array_playMachine = [
        "Rock" => "Rock",
        "Scissor" => "Scissor",
        "Paper" => "Paper"
    ];

    $escolha_player2 = array_rand($array_playMachine);

    $winner = jokenpo($escolha_player1, $escolha_player2);

function jokenpo($escolha_player1, $escolha_player2){
    if ($escolha_player1 === $escolha_player2){
        return ($escolha_player1.', it is Tied');
    }
    elseif (($escolha_player1 === 'Rock') and ($escolha_player2 === 'Scissor')){
        return ('Rock, you win!!!');
    }
    elseif (($escolha_player1 === 'Scissor') and ($escolha_player2 === 'Paper')){
        return ('Scissor, you win!!!');
    }
    elseif (($escolha_player1 === 'Paper') and ($escolha_player2 === 'Rock')){
        return ('Paper, you win!!!');
    }
    elseif (($escolha_player2 === 'Rock') and ($escolha_player1 === 'Scissor')){
        return ('Rock, you lose!!!');
    }
    elseif (($escolha_player2 === 'Scissor') and ($escolha_player1 === 'Paper')){
        return ('Scissor, you lose!!!');
    }
    elseif (($escolha_player2 === 'Paper') and ($escolha_player1 === 'Rock')){
        return ('Paper, you lose!!!');
    }
}

    echo "<html>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<title>Result</title>";
    echo "<link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.3/examples/navbar-bottom/\">";
    echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
          integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">";
    echo "</head>";
    echo "<body data-gr-c-s-loaded='true'>";
    echo "<div class='container'>";
    echo "<div class='jumbotron mt-3'>";
    echo "<h1>Let´s see the result...</h1>";
    if($escolha_player1 === "Rock"){
        echo "<img class=\"mb-4\" src=\"../images/rock.png\" alt=\"\" width=\"200\" height=\"200\">";
    } elseif ($escolha_player1 === "Paper"){
        echo "<img class=\"mb-4\" src=\"../images/paper.png\" alt=\"\" width=\"200\" height=\"200\">";
    } elseif ($escolha_player1 === "Scissor"){
        echo "<img class=\"mb-4\" src=\"../images/scissor.png\" alt=\"\" width=\"200\" height=\"200\">";
    }
    echo "<p class='lead'>Versus</p>";
    if($escolha_player2 === "Rock"){
        echo "<img class=\"mb-4\" src=\"../images/rock.png\" alt=\"\" width=\"200\" height=\"200\">";
    } elseif ($escolha_player2 === "Paper"){
        echo "<img class=\"mb-4\" src=\"../images/paper.png\" alt=\"\" width=\"200\" height=\"200\">";
    } elseif ($escolha_player2 === "Scissor"){
        echo "<img class=\"mb-4\" src=\"../images/scissor.png\" alt=\"\" width=\"200\" height=\"200\">";
    }
    echo "<p class='lead'>The palyer2 choosed $escolha_player2</p>";
    echo "<p class='lead'>$name you choose $winner</p>";
    echo "<a class='btn btn-lg btn-primary' href='../Jokenpo.php' role='button'>Play again</a>";
    echo "</div>";
    echo "</body>";
    echo "</html>";




