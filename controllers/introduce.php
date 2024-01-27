<?php

class Introduce extends Controller{
	protected function Index(){
		$viewmodel = new IntroduceModel();
		$this->returnView($viewmodel->Index(), true);
	}
	
}

?>