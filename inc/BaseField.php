<?php

require_once dirname(__FILE__).'/WPBaseField.php';
class BaseField extends WPBaseField
{

   
   public function __construct()
   {
   	   $this->name = 'base-field';
   	   $this->version = '1.0';
   	   $this->acro = 'BS';
   	   parent::__construct();
   }


    public function widget()
    {

    }

    public function shortcode()
    {
    	
    }


}


