<?php
namespace application\controller
{
	use nutshell\plugin\mvc\Controller;
	
	class About extends Controller
	{
		public function index()
		{
			$this->view->setTemplate('layout');
			$this->view->setVar('pageTitle','Sudocode -- About');
			$this->view->setVar('pageView','about');
			$this->view->render();
		}
	}
}