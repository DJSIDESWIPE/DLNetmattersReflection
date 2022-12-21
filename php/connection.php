<?php
	
	$Servername = "localhost";
	$Username = "root";
	$Password = "";
	$DBname = "dlnetmattersreflectiondb";

	try{
        //creates a connection to the database
        $conn = new PDO("mysql:host=$Servername;dbname=$DBname", $Username, $Password);

        // tests if the connection works
        // $sql = $conn->query('SELECT * FROM enquires');
        // foreach($sql as $row) {
        //     print_r($row['Name']);
        // }
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    
//	echo "Connected successfully"; 
	
	
?>