<?php
namespace application\controller
{
	use nutshell\plugin\mvc\Controller;
	
	class Projects extends Controller
	{
		public function index()
		{
			$this->view->setTemplate('layout');
			$this->view->setVar('pageTitle','Sudocode -- Projects');
			$this->view->setVar('pageView','projects');
			$this->view->render();
		}
		
		public function odus()
		{
			$this->view->setTemplate('layout');
			$this->view->setVar('pageTitle','Sudocode -- Projects -- Odus');
			$this->view->setVar('pageView','projects/odus');
			$this->view->render();
		}
		
		public function sudocode()
		{
			$this->view->setTemplate('layout');
			$this->view->setVar('pageTitle','Sudocode -- Projects -- Sudocode.com');
			$this->view->setVar('pageView','projects/sudocode');
			$this->view->render();
		}
	}
}