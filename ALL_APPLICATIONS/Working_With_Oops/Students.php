<?php
class Students
{
	var $hostname="localhost";
    var $dbname="all_applications";
    var $dbuser="root";
    var $dbpass="";
    public function __construct()
    {
	  global $con;
	  $con=new mysqli($this->hostname,$this->dbuser,$this->dbpass,$this->dbname);	  
    }	
	public function select_data()
	{   
	    
	    global $con;
		$sql="SELECT * FROM students";
		$select=$con->query($sql);
		return $select;
	}
	public function get_student_details($student_id)
	{
		global $con;
		$query="SELECT * FROM students WHERE auto_id='$student_id'";
        $select=$con->query($query);	
        return $select;
	}
	public function update_student_details($stu_id)
	{
		ECHO $_GET['stu_id'];
	}
}
?>