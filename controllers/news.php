<?php

class News extends Controller{
	protected function Index(){
		$viewmodel = new NewsModel();
		$this->returnView($viewmodel->Index(), true);
	}
	protected function Detail(){
		$viewmodel = new NewsModel();
		$this->returnView($viewmodel->Detail(), true);
	}
	protected function Posts(){
		$viewmodel = new NewsModel();
		$this->returnView($viewmodel->Posts(), true);
	}
	
}

?>