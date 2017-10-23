<?php

include 'dbconnect.php';

class operation extends dbconnect 
{

	//Function to insert new student into database
	public function addUser($first_name, $last_name, $reg_number, $phone_number, $email,  $gender)
	{

		$query = "INSERT INTO students (first_name, last_name, reg_number, phone_number, email,  gender) VALUES (:first_name, :last_name, :reg_number, :phone_number, :email,  :gender)";
		$result = $this->db->prepare($query);
		$result->execute([
		    ":first_name" => $first_name,
		    ":last_name" => $last_name,
		    ":reg_number" => $reg_number,
		    ":phone_number" => $phone_number,
		    ":email" => $email,
		    ":gender" => $gender
	    ]);

	    return true;
	}

	//function to get student by phone_number
	public function getStudentByphone($phone_number) 
	{  
        $string = "Select * FROM students WHERE phone_number = '$phone_number' ";
        $query = $this->db->query($string);
        $result = $query->fetchall(PDO::FETCH_ASSOC);
        $count = count($result);
        $userInfo = ([
            "count" => $count,
            "info" => $result
        ]);  
        return $userInfo;    
    }

    //function to get student by email
	public function getStudentByemail($email) 
	{  
        $string = "Select * FROM students WHERE email = '$email' ";
        $query = $this->db->query($string);
        $result = $query->fetchall(PDO::FETCH_ASSOC);
        $count = count($result);
        $userInfo = ([
            "count" => $count,
            "info" => $result
        ]);  
        return $userInfo;    
    }

    //function to get student by email
	public function getStudentByreg_num($reg_number) 
	{  
        $string = "Select * FROM students WHERE reg_number = '$reg_number' ";
        $query = $this->db->query($string);
        $result = $query->fetchall(PDO::FETCH_ASSOC);
        $count = count($result);
        $userInfo = ([
            "count" => $count,
            "info" => $result
        ]);  
        return $userInfo;    
    }

}

?>