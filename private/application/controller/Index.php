<?php
namespace application\controller
{
	use nutshell\plugin\mvc\Controller;
	
	class Index extends Controller
	{
		public function index()
		{
			$this->view->setTemplate('layout');
			$this->view->setVar('pageTitle','Sudocode.com');
			$this->view->setVar('pageView','home');
			$this->view->render();
		}
	}
}