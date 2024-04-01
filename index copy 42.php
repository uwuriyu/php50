<?php
function count_calls() {
    static $counter = 0;
    $counter++;
    return $counter;
}

echo "Количество вызовов функции: " . count_calls();
?>