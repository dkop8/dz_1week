<?php
    function task1 (array $mas, bool $fl = false) {
        if ($fl) {
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
        switch ($action) {
            case '+' : 
                for ($i = 0; $i < count($args); $i++) {
                        if ($i != count($args) - 1) {
                            $st .= $args[$i] . ' ' . $action . ' ';
                        } else {
                            $st .= $args[$i];
                        }
                    $calculation  = array_sum($args);
                }
                break;
            case '-' : 
                for ($i = 0; $i < count($args); $i++) {
                    if ($i != count($args) - 1) {
                        $st .= $args[$i] . ' ' . $action . ' ';
                    } else {
                        $st .= $args[$i];
                    }
                }
                $calculation  = array_shift($args) - array_sum($args); 
                break;
            case '*' : 
                for ($i = 0; $i < count($args); $i++) {
                    if ($i != count($args) - 1) {
                        $st .= $args[$i] . ' ' . $action . ' ';
                    } else {
                        $st .= $args[$i];
                    }
                }
                $calculation = array_product($args); 
                break; 
            case '/' : 
                    $calculation = $args[0];
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
        $delChar = 'К';
        echo str_replace($delChar, '', $str_1); 
    }

    function task7 () {
        $str = 'Две бутылки лимонада';
        $s1 = 'Две';
        $s2 = 'Три';
        echo str_replace($s1, $s2, $str); 

    }

    function task8 (string $name_file = 'file.txt') {
            $text = "Hello again!";
            $fp = fopen($name_file, "w");
            fwrite($fp, $text);
            
            fclose($fp);
    }

    function task9 (string $name_fl_r) {
        if (file_exists($name_fl_r)) {
            $fp = fopen($name_fl_r, "r");
            $str_file = fgets($fp);
                echo "$str_file <br>";
        } else {
            echo "Файла $name_fl_r не сущесвует ";
        }
    }
