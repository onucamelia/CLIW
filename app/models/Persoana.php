<?php
interface Ipersoana {
	public function description();

}


class Persoana  implements Ipersoana,IObservable{
	public $nume;
	public $prenume;
	public $tip;
	public $varsta;
	public $anInceput;
	

  	public function __construct($n='',$p='',$t='',$v='',$a='')
    {
        $this->nume = $n;
        $this->prenume = $p;
        $this->tip=$t;
        $this->varsta=$v;
        $this->anInceput=$a;
    }
 public function get()
    {
        return $this->nume . ' ' . $this->prenume;
    }
    function description(){
		echo "Eu sunt clasa "."<strong>".get_class($this)."</strong>"."</br>";
		 $methods = get_class_methods($this);
         echo "<strong>"."Urmatoarele metode sunt disponibile:"."</strong>"."</br>";
         print_r($methods);
         echo "</br>";
         $vars = get_class_vars("Persoana");
    	 echo "<strong>"."Urmatoarele proprietati sunt disponibile"."</strong>"."</br>";
   		 print_r($vars);
   		 echo "</br>";
	 }
 
    //OBSERVER 
    

    private $observers = array();

    private function notify()
    {
        foreach( $this->observers as $o )
            $o->onUserAdded( $this );
    }

    public function attach( IObserver $observer )
    {
      
        $this->observers []= $observer;
    }

    public function createUser( $userName )
    {
        notify($userName);
    }
	


}

class NewUser implements IObserver
{
    public function __construct() {
    }
    public function  onUserAdded(IObservable $observable ) 
    {
        echo "*** Am adaugat ***";
    }
}
class PersoanaFactory 
{
    public static function create($n,$p,$t,$v,$a)
    {
        return new Persoana($n,$p,$t,$v,$a);
    }
    /* SINGLETON */
     public static function Instance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = PersoanaFactory::create($n,$p,$t,$v,$a);
        }
        return $inst;
    }
    
}
 //OBSERVER 
interface IObserver
{
     function onUserAdded( IObservable $observable);
}

interface IObservable
{
    
    function attach(IObserver  $observer );
}
 


 //STRATEGY
 interface Strategy {
   function validate($nume);
}



class Validator { 
 var $error; 
 function Validator() { 
  $this->error = ""; 
 } 
  
 function validate() { 
 } 
  
 function setError( $error ) { 
  $this->error = $error; 
 } 
  
 function isValid() { 
  if ( !empty ( $this->error ) ) { 
     return false; 
    } else { 
     return true; 
    } 
 } 
  
 function getError() { 
  return $this->error; 
 } 
} 


class ValidateNume extends Validator implements Strategy { 
 var $nume; 
  
 function ValidateNume ( $name ) { 
  $this->nume = $name; 
    Validator::Validator(); 
 } 
  
 function validate($nume) { 
  if ( !$this->nume) { 
     $this->setError ( "User Name is a required field." ); 
     return; 
    } 
    if ( strlen ( $this->nume ) < 3 || strlen ( $this->nume > 20 ) ) { 
     $this->setError ( "User Name should be between 3 and 20 characters long." ); 
     return; 
    } 
  if ( !ereg ( "^[a-zA-Z0-9]+$", $this->nume ) ) { 
     $this->setError ( "Only letters and numbers are allowed in your username." ); 
     return; 
    } 
    
 } 
} 

class ValidatePrenume extends Validator implements Strategy { 
 var $prenume; 
  
 function ValidatePrenume( $lastname ) { 
  $this->prenume = $lastname; 
    Validator::Validator(); 
 } 
  
 function validate($prenume) { 
  if ( !$this->prenume ) { 
     $this->setError ( "Email is a required field." ); 
     return; 
    } 
    if (!ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $this->prenume)) { 
     $this->setError ( "Your email address is invalid. The format should be like this: 'user@host.com'" ); 
     return; 
    } 
    if ( strlen ( $this->prenume ) > 100 ) { 
     $this->setError ( "Your email address is too long." ); 
     return; 
    } 
    
 } 
} 
 class Context {
private $strategy;
   function __construct(Strategy $strategy){
      $this->strategy = $strategy;
   }

  function executeStrategy($nume){
     $this->strategy->validate($nume);
   }
}

?>