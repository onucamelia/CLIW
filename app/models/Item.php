<?php
class Item{
//IMAGE
    public $IMAGE;
    public $NAME;
    public $NSN;

//IDENTIFICATION
    public $FIIG;
    public $INC;
    public $CRITICALY;
    public $TYPE_II;
    public $DEMIL;
    public $DATE;
    public $ESD;
    public $PMIC;
    public $ADPEC;
    public $HMIC;
    public $HCC;
    public $ENAC;

//REFERENCE
    public $SUPPLIER;
    public $CAGE;
    public $PART_NUMBER;
    public $STAT;
    public $RNCC;
    public $RNVC;
    public $DAC;
    public $RNAAC;
    public $SADC;
    public $MSDS;

//MANAGEMENT
    public $MOE;
    public $USC;
    public $AAC;
    public $SOS;
    public $UI;
    public $UNIT_PRICE;
    public $QUP;
    public $CIIC;
    public $SLC;
    public $MGT_CTRL;
    public $REP;

//CHARACTERISTICS
    public $SUPPLY_PACKAGE_TYPE;
    public $SPECIAL_FEATURES;

//CROSS REFERENCE
    public $DEFINITION;



	

  	public function __construct($image='',$name='', $nsn='', $fiig='', $inc='', $criticaly='', $type_II='', $demil='', $date='', $esd='', $pmic='', $adpec='', $hmic='', $hcc='', $enac='', $supplier='', $cage='', $part_number='', 
                                $stat='', $rncc='', $rnvc='', $dac='', $rnaac='', $sadc='', $msds='', $moe='', $usc='', $aac='', $sos='', $ui='', $unit_price='', $qup='', $ciic='', $slc='', $mgt_ctrl='',
                                $rep='', $supply_package_type='', $special_features='', $definition=''  )
    {
        $this->IMAGE=$image;
        $this->NAME=$name;
        $this->NSN=$nsn;
        $this->FIIG=$fiig;
        $this->INC=$inc;
        $this->CRITICALY=$criticaly;
        $this->TYPE_II=$type_II;
        $this->DEMIL=$demil;
        $this->DATE=$date;
        $this->ESD=$esd;
        $this->PMIC=$pmic;
        $this->ADPEC=$adpec;
        $this->HMIC=$hmic;
        $this->HCC=$hcc;
        $this->ENAC=$enac;
        $this->SUPPLIER=$supplier;
        $this->CAGE=$cage;
        $this->PART_NUMBER=$part_number;
        $this->STAT=$stat;
        $this->RNCC=$rncc;
        $this->RNVC=$rnvc;
        $this->DAC=$dac;
        $this->RNAAC=$rnaac;
        $this->SADC=$sadc;
        $this->MSDS=$msds;
        $this->MOE=$moe;
        $this->USC=$usc;
        $this->AAC=$aac;
        $this->SOS=$sos;
        $this->UI=$ui;
        $this->UNIT_PRICE=$unit_price;
        $this->QUP=$qup;
        $this->CIIC=$ciic;
        $this->SLC=$slc;
        $this->MGT_CTRL=$mgt_ctrl;
        $this->REP=$rep;
        $this->SUPPLY_PACKAGE_TYPE=$supply_package_type;
        $this->SPECIAL_FEATURES=$special_features;
        $this->DEFINITION=$definition;

}
}
?>