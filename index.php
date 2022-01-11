<?php
$tab = [
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "décembre"
];

echo $tab[2]."<br>";
echo $tab[4]."<br><br>";
$tab[7]= "août";

$tabDepartment = [
    "59" => "Nord",
];

echo $tabDepartment["59"] ."<br><br>";
$tabDepartment["51"] = "Reims";

foreach ($tab as $values) {
    echo $values ."<br>";
}

echo "<br><br>";
foreach ($tabDepartment as $values) {
    echo $values ."<br>";
}

foreach ($tabDepartment as $key => $value) {
    echo "Le département $value a le numéro $key" ."<br>";
}


