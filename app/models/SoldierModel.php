<?php	

class Soldier{
	public $NAME;
	public $IMAGE;
	public $SERVICE_NUMBER;
	public $RANK;
	public $UNIT;
	public $DATE_OF_BIRTH;
	public $NATIONALITY;
	public $BRANCH; 

		public function __construct($name='', $image='', $service_number='', $rank='', $unit='', $date_of_birth='', $nationality='', $branch='')
		{
		$this->NAME=$name;
		$this->IMAGE=$image;
		$this->SERVICE_NUMBER=$service_number;
		$this->RANK=$rank;
		$this->UNIT=$unit;
		$this->DATE_OF_BIRTH=$date_of_birth;
		$this->NATIONALITY=$nationality;
		$this->BRANCH=$branch;
	}

}
?>