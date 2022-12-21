<?php

    include "./php/connection.php";

    $name = $companyname = $email = $telephone = $subject = $message = "";
    $checkbox = null;
    $Error = false;


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["Name"])) {
			$Error = true;
            alert("Name is required");
		} else {
			$name = test_input($_POST["Name"]);
		}

        if (empty($_POST["CompanyName"])) {
            $companyname = "";
		} else {
			$companyname = test_input($_POST["CompanyName"]);
		}

        if (empty($_POST["Email"])) {
			$Error = true;
            alert("Email is required");
		} else {
			$email = test_input($_POST["Email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                alert("invalid Email");
				$Error = true;
			}
		}

        if (empty($_POST["Telephone"])) {
			$Error = true;
            alert("Telephone number is required");
		} else {
			$telephone = test_input($_POST["Telephone"]);
            $temp_number = str_replace(" ", "",$telephone);
			if(!preg_match('/^[0-9]{11}+$/', $temp_number)){
				$Error = true;
                alert("invalid Telephone number");
                $temp_number = null;
			} else {
                $temp_number = null;
            }
            
		}

        if (empty($_POST["Subject"])) {
            $Error = true;
            alert("Subject is required");
        } else {
            $subject = test_input($_POST["Subject"]);
            
        }
    
        if (empty($_POST["Message"])) {
            $Error = true;
            alert("Message is required");
        } else {
            $message = test_input($_POST["Message"]);
        }

        $checkbox = isset($_POST['MarketingInfo']) ? 1 : 0;
        
    }
    if(!$Error){
        if($name != "" || $email != "" || $telephone != "" || $subject != "" || $message != "") {
            try{
                $sql = "INSERT INTO enquires (Name,CompanyName,Email,Telephone,Subject,Message,RecieveMarketingInfo)
			    VALUES ('$name','$companyname','$email','$telephone','$subject','$message','$checkbox')";
            
                if ($conn->query($sql)) {
                    alert( "Form Submitted");
                    // if the data is sent to the database then it will clear the form so the user doesn't accidentally enter data twice
                    $name = $companyname = $email = $telephone = $subject = $message = "";
                    $checkbox = 0;
                    $Error = false;
                } else {
                    alert( "Error: " . $sql . "<br>" . $conn->errorInfo());
                    
                }
                $conn = null;
            } catch(PDOException $e){
                echo $e;
            }
			
		}
    }

    function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
?>