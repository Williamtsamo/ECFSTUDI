<?php

function getavis(PDO $conn)
{

    $query = $conn->prepare("SELECT * FROM race");
    //$query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}



    


