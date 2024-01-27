<?php

class Log extends Controller{


	protected function login(){
		$viewmodel = new LogModel();
		$this->returnView($viewmodel->login(), true);
	}
	protected function ForgetPass(){
		$viewmodel = new LogModel();
		$this->returnView($viewmodel->ForgetPass(), true);
	}
	protected function register(){
		$viewmodel = new LogModel();
		$this->returnView($viewmodel->register(), true);
	}
	protected function Resetpass(){
		$viewmodel = new LogModel();
		$this->returnView($viewmodel->Resetpass(), true);
	}
	protected function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();
		// Redirect
		header('Location: ' . ROOT_PATH);
	}
}

?>