<?php

//autor Nurul Fatimah E31190445 Golongan A

//merupakan sintax PHP yg memastikan tidak ada script secara langsung
defined('BASEPATH') OR exit('No direct script access allowed');

//pendeklarasian kelas yang bernama welcome
class Welcome extends CI_Controller {


		//pendeklarasian function dalam class
		public function index(){
			echo "Hellow World";
		}
	}


