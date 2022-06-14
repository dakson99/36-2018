<?php
require_once '../config/db.php';

class StudentDAO {
	private $db;

	private $SELECT_STUDENT = "SELECT * FROM student WHERE prosek > ?";
	private $SELECT_PROSEK_SMER = "SELECT AVG(prosek) AS 'avg' FROM student WHERE smer = ?";


	
	public function __construct()
	{
		$this->db = DB::createInstance();
	}

    public function getVeciProsek($prosek)
	{		
		$statement = $this->db->prepare($this->SELECT_STUDENT);
		$statement->bindValue(1, $prosek);

		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}
    public function getProsekSmer($smer)
	{		
		$statement = $this->db->prepare($this->SELECT_PROSEK_SMER);
		$statement->bindValue(1, $smer);
		$statement->execute();
		
		$result = $statement->fetch();
		return $result;
	}





}
?>