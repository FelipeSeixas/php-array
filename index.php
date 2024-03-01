<?php 

echo "Start of software to pratice arrays and convert/export to JSON file...\n\n";

//SINTAXE ---->  Key => values
$array_v1 = array(
    "foo"=>"bar",
    "bar"=>"foo"
);

//echo $array_v1;
//var_dump($array_v1);

$array_v2 = array(
    1,
    2,
    3,
    4,
    5

);

//var_dump($array_v2);

$array_v3 = array(
    555,
    2,
    6 => 7,
    8,
    9,
    "Mecao" => "Campeão do Nordeste"
);

//var_dump($array_v3);

//var_dump($array_v3[0]);

//var_dump($array_v3["Mecao"]);

$array_v4 = array(
    "PHP" => "Server side",
    "Java" => array("Backend", "Mobile", "API",
                        "IoT" => array(
                            "cars" => "urban",
                            "Home" => "Dishes"
                        )), 
);

//var_dump($array_v4);
/*
var_dump($array_v4["PHP"]);
var_dump($array_v4["Java"]);
var_dump($array_v4["Java"][0]);
var_dump($array_v4["Java"][2]);
var_dump($array_v4["Java"]["IoT"]["Home"]);
*/
//var_dump($array_v4["PHP"]);

foreach ($array_v1 as $key => $value){
    var_dump($key); 
    var_dump($value);
}

foreach ($array_v2 as $key => $value){
    var_dump($key);
    var_dump($value);
}

foreach ($array_v3 as $key => $value){
    var_dump($key);
    var_dump($value);
}

//https://www.php.net/manual/en/language.types.array.php
//e o arquivo já existir, seu conteúdo será sobrescrito. Se você quiser adicionar ao arquivo existente, use a flag FILE_APPEND. Por exemplo, file_put_contents('meu_arquivo.json', $json, FILE_APPEND);.

?>