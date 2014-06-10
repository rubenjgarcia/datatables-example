<?php
$data = array(
        "data"=>array(
            array(
                "id"=>1,
                "name"=>"Peter",
                "lastname"=>"Griffin",
                "city"=>"Quahog",
                "gender"=>"male"
            ),
            array(
                "id"=>2,
                "name"=>"Homer",
                "lastname"=>"Simpson",
                "city"=>"Springfield",
                "gender"=>"male"
            ),
            array(
                "id"=>3,
                "name"=>"Turanga",
                "lastname"=>"Leela",
                "city"=>"New New York",
                "gender"=>"female"
            )
        )
);

header('Content-type: application/json');
echo json_encode($data);
?>
