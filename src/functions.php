<?php
$array = ['string_1', 'string_2', 'string_3'];
function task1($arr)
{
    if (in_array(1, func_get_args())) {
        return implode($arr);
    }
    for ($i = 0; $i < sizeof($arr); $i++) {
        echo '<p>' . $arr[$i] . '</p>';
    }
}

function task2()
{
    $calcArray = func_get_args();
    switch ($calcArray[0]) {
        case '+':
            $sum = 0;
            for ($i = 1; $i < sizeof($calcArray); $i++) {
                $sum += $calcArray[$i];
            }
            echo 'Результат : ';
            $end_element = array_pop($calcArray);
            foreach ($calcArray as $key => $value) {
                if ($key === 0) {
                    continue;
                }
                echo $value . ' ' . $calcArray[0] . ' ';
            }
            echo $end_element;
            echo ' = ' . $sum;
            break;
        case '-':
            $diff = $calcArray[1];
            for ($i = 2; $i < sizeof($calcArray) + 1; $i++) {
                $diff = $diff - $calcArray[$i];
            }
            echo 'Результат : ';
            $end_element = array_pop($calcArray);
            foreach ($calcArray as $key => $value) {
                if ($key === 0) {
                    continue;
                }
                echo $value . ' ' . $calcArray[0] . ' ';
            }
            echo $end_element;
            echo ' = ' . $diff;
            break;
        case '/':
            $div = $calcArray[1];
            for ($i = 1; $i < sizeof($calcArray); $i++) {
                if ($calcArray[$i + 1] != 0) {
                    $div = $div / $calcArray[$i + 1];
                }
            }
            echo 'Результат : ';
            $end_element = array_pop($calcArray);
            foreach ($calcArray as $key => $value) {
                if ($key === 0) {
                    continue;
                }
                echo $value . ' ' . $calcArray[0] . ' ';
            }
            echo $end_element;
            echo ' = ' . $div;
            break;
        case '*':
            $multiplication = 1;
            for ($i = 1; $i < sizeof($calcArray); $i++) {
                $multiplication *= $calcArray[$i];
            }
            echo 'Результат : ';
            $end_element = array_pop($calcArray);
            foreach ($calcArray as $key => $value) {
                if ($key === 0) {
                    continue;
                }
                echo $value . ' ' . $calcArray[0] . ' ';
            }
            echo $end_element;
            echo ' = ' . $multiplication;
            break;
    }
}

function task3($one, $two)
{
    if (!is_int($one) || !is_int($two)) {
        echo 'Переданы значения, не удовлетворяющие условиям задачи';
    } else {
        echo '<table>';
        $row = $one;
        $col = $two;
        for ($i = 1; $i <= $row; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $col; $j++) {
                echo '<td style="border: 1px solid; text-align: center; padding: 5px">' . $j * $i . '</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';

}
