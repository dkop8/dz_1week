<?php
    function task1 (array $mas, bool $flAnswer = false) {
        if ($flAnswer) {
            $st = '';
            for ($i = 0; $i < count($mas); $i++) {
                $st .= "<p> $mas[$i] </p>";
            }
            return $st;
        } else {
            for ($i = 0; $i < count($mas); $i++) {
                echo "<p> $mas[$i] </p>";
            }
        }
    }

    function task2 (string $action, ...$args) {
        $calculation = 0;
        $st = '';
        for ($i = 0; $i < count($args); $i++) {
            $element = $args[$i];
            if (!is_int($element) && !is_float($element)) {
                trigger_error("Переданный аргумент не является числом: #{$i} -> {$element}");
                echo 'Переданы неверные аргументы';
                return 0;
            }
        }  
        $st = implode(" " . $action . " ", $args);             
        switch ($action) {
            case '+' : 
                $calculation  = array_sum($args);
                break;
            case '-' : 
                $calculation  = array_shift($args) - array_sum($args); 
                break;
            case '*' : 
                $calculation = array_product($args); 
                break; 
            case '/' : 
                    $calculation = $args[0];
                    $st = '';
                    $st .= $args[0] . ' ' . $action . ' ';
                
                for ($i = 1; $i < count($args); $i++) {
                        $calculation /= $args[$i];
                        if ($i != count($args) - 1) {
                            $st .= $args[$i] . ' ' . $action . ' ';
                        } else {
                            $st .= $args[$i];
                        }
                }
                break; 
                default: 
                    echo "Неверное действие";                                               
        }

        echo "Результат: $st = $calculation  <br> \n";
    }

    function task3 (int $tr, int $td) {
        if (!is_int($tr)) {
            trigger_error("Первое значение не является числом.");
            return 0;
        }

        if (!is_int($td)) {
            trigger_error("Второе значение не является числом.");
            return 0;
        }

        if ($tr < 0 || $td < 0) {
            trigger_error("Передано неверное значение");
            return 0;
        }

        echo "<table  border='1' align='center'>";
            for ($i = 1; $i <= $tr; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $td; $j++) {
                    echo "<td width = '100' align = 'center'> " . $i * $j . "</td>\n";                          
                }
                echo "</tr>";
            }   
        echo "</table>";
        echo "<br><br> \n";

    }

    function task4 () {
        echo date('d.m.Y H:i') . "<br> \n";
    }

    function task5 () {
        echo strtotime('24.02.2016 00:00:00') . "<br> \n";
    }

    function task6 () {
        $str_1 = 'Карл у Клары украл Кораллы';
        echo str_replace('К', '', $str_1); 
    }

    function task7 () {
        $str = 'Две бутылки лимонада';
        echo str_replace('Две', 'Три', $str); 
    }

    function task8 (string $fileName = 'file.txt') {
        $text = "Hello again!";
        file_put_contents($fileName, $text);
    }

    function task9 (string $fileName) {
        if (file_exists($fileName)) {
            $fp = fopen($fileName, "r");
            $strFile = fgets($fp);
                echo "$strFile <br>";
                fclose($fp);
        } else {
            trigger_error("Файла $fileName не существует");
            return 0;
        }
    }
