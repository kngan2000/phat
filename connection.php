<?php
    $conn = pg_connect("postgres://pqmtsvbimmtaed:a23095fe6cb5d1a41618e747fa56f7547bfc7573028b15153df0c72029a39404@ec2-23-23-181-251.compute-1.amazonaws.com:5432/dhivcuv70ia8j");
    //$conn = pg_connect("postgresql://postgres:322001@localhost:5432/postgres");
    if(!$conn){
        die("Can not connect database");
    } 
?>