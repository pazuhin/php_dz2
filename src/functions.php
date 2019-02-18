<?php
$array = ['string_1', 'string_2', 'string_3'];
function task1($arr, $flag = false)
{
    if ($flag) {
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

function task3($row, $col)
{
    if ($row < 1 || $col < 1) {
        echo 'Переданы значения, не удовлетворяющие условиям задачи';
        return null;
    }
    echo '<table>';
    for ($i = 1; $i <= $row; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $col; $j++) {
            echo '<td style="border: 1px solid; text-align: center; padding: 5px">' . $j * $i . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

function task4()
{
    echo date('d.m.Y H:i') . "<br>";
    $date = '24.02.2016 00:00:00';
    echo strtotime($date);
}

function task5()
{
    $str = 'Карл у Клары украл Кораллы' . "<br>";
    echo str_replace('К', '', $str);
    $str1 = 'Две бутылки лимонада';
    echo $str1 . "<br>";
    echo 'Новая стока : ' . str_replace('Две', 'Три', $str1);
}

function task6()
{
    $test = 'Hello again';
    file_put_contents('test.txt', $test);
}

$fileName = 'test.txt';
function task7($fileName)
{
    echo file_get_contents($fileName);
}
