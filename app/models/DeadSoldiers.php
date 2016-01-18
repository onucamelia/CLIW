<?php
	public $NAME;
	public $IMAGE;
	public $SERVICE_NUMBER;
	public $RANK;
	public $UNIT;
	public $DATE_OF_BIRTH;
	public $NATIONALITY;
	public $BRANCH; 
	public $CAUSE;
	public $PLACE_OF_DEATH;
	public $DIED_IN;

	 		public function __construct($name='', $image='', $service_number='',$rank='', $unit='', $date_of_birth='', $nationality='', $branch='', $cause='', 
	 			$place_of_death='', $died_in='')
		{
		$this->NAME=$name;
		$this->IMAGE=$image;
		$this->SERVICE_NUMBER=$service_number;
		$this->RANK=$rank;
		$this->UNIT=$unit;
		$this->DATE_OF_BIRTH=$date_of_birth;
		$this->NATIONALITY=$nationality;
		$this->BRANCH=$branch;
		$this->CAUSE=$cause;
		$this->PLACE_OF_DEATH=$place_of_death;
		$this->DIED_IN=$died_in;

	}
?>