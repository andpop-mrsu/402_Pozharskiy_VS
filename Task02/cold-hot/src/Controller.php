<?php
    namespace anviory\cold_hot\Controller;
    use function anviory\cold_hot\View\showGame;

    function startGame(){
        echo "Game started".PHP_EOL;
        showGame();
    }
?>