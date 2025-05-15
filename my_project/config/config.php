<?php

 class Config{

private $HOST = "localhost";
private $USERNAME = "root";
private $PASSWORD = "";
private $DB_NAME = "exam";
private $connection;

public function initDB(){
    $this->connection = mysqli_connect($this->HOST, $this->USERNAME, $this->PASSWORD, $this->DB_NAME);

    return $this->connection;
}

// insert Data 
public function insertdata_train($train_name){
    $this->initDB();

    $query = "INSERT INTO train (train_name) VALUES('$train_name')";

    return mysqli_query($this->connection, $query);
}

public function fetchdata_train(){
    $this->initDB();

    $query = "SELECT * FROM train";

    return mysqli_query($this->connection, $query);
}

public function deletedata_train($id){
    $this->initDB();

    $query = "DELETE FROM train WHERE id=$id";

    return mysqli_query($this->connection, $query);
}

public function updatedata_train($train_name, $id){
    $this->initDB();

    $query = "UPDATE train SET train_name='$train_name' WHERE id=$id";

    return mysqli_query($this->connection, $query);
}

public function singledata_Train($id) {
    $this->initDB();

    $query = "SELECT * FROM train WHERE id=$id";    

    return mysqli_query($this->connection, $query);    
}


public function insertdata_Booking($p_name,)
    {
        $this->initDB();

        $query = "INSERT INTO bookings (p_name) VALUES ('$p_name')";
        
        return mysqli_query($this->connection,$query);
    }
    
    public function fetchdata_Bookings() {

        $this->initDB();

        $query = "SELECT * FROM bookings";

        return mysqli_query($this->connection, $query); 
    }

    public function deletedata_Bookings($id){

        $this->initDB();

        $query = "DELETE FROM bookings WHERE id=$id";

        return mysqli_query($this->connection,$query);
    }

    
    public function getSingledata_Booking($id) {

        $this->initDB();

        $query="SELECT * FROM bookings WHERE id = $id";

        return mysqli_query($this->connection,$query);  

    }

    public function updatedata_Booking($id,$name){

        $this->initDB();

        $query="UPDATE bookings SET p_name='$name' WHERE id=$id";

        return mysqli_query($this->connection,$query);
    }


}

?>
