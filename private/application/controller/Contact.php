<?php
namespace application\controller
{
	use nutshell\plugin\mvc\Controller;
	
	class Contact extends Controller
	{
		public function index()
		{
			$this->view->setTemplate('layout');
			$this->view->setVar('pageTitle','Sudocode -- Contact');
			$this->view->setVar('pageView','contact');
			$this->view->render();
		}
	}
}