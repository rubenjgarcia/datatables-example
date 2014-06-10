<?php
$action = $_POST['action'];

if ($action == 'remove')
{
    $id= $_POST['id'][0];

    //Remove code

    echo '{}';
}
elseif ($action == 'edit')
{
    $id= $_POST['id'];
    $data = $_POST['data'];

    //Edit code

    echo '{}';
}
elseif ($action == 'create')
{
    $data = $_POST['data'];

    //Create code

    echo '{}';
}
?>
