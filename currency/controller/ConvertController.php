<?php

class Convert{

    //private $currency_f;
    private $currency_t;
    private $convert;
    private $currency_rates=[
   'GHS'=>1.0,
   'NGN'=>1.9,
   'KSH'=>2.5,

    ];



    
    public function setCurrency($amount,$currency_from,$currency_to){
   

     //$this->currency_f=$currency_from;
     $this->currency_t=$currency_to;

     $rate=$amount/ $this->currency_rates[$currency_from];
 
     $this->convert=number_format($this->currency_rates[$currency_to] * $rate,2); 


      

    }

    public function getCurrency(){

        return ['value'=>$this->convert,'currency_to'=>$this->currency_t];
    }


}
