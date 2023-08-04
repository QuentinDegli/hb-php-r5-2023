<?php

function displayStringLayout(string $str, string $htmltagcode): void
{
    if ($htmltagcode == 'p'){
        echo "<p>" . $str . "</p>";
    }
    if ($htmltagcode == 'd'){
        echo "<div>" . $str . "</div>";
    }
}
