<?php
    include 'config.php';

    //fetch table rows from mysql db
    $sql = "SELECT *
	FROM wisata;";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    //echo json_encode($emparray);
    
	 //write to json file
    $fp = fopen('data/wisata.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
	
    //close the db connection
    mysqli_close($connection);
?>