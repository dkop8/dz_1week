<?php

    const PAINTING = 80;
    const MARKERS = 40;
    const PENCILS = 23;
    const PAINTS = PAINTING - MARKERS - PENCILS;


//    define("PAINTING", 80);
//    define("MARKERS", 23); 
//    define("PENCILS", 40); 
//    define("PAINTS", 17); 

    echo "На школьной выставке " . PAINTING . " рисунков, " . PAINTS . " выполненные красками <br> \n";

    echo "На школьной выставке " . PAINTING . " рисунков, " . MARKERS . " из них выполнены фломастерами, " . PENCILS . " карандашами. <br> \n";

