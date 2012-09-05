<?php
namespace application\controller
{
	use nutshell\plugin\mvc\Controller;
	
	class Blog extends Controller
	{
		public function index()
		{
			$this->view->setTemplate('layout');
			$this->view->setVar('pageTitle','Sudocode -- Blog');
			$this->view->setVar('pageView','blog');
			$this->view->render();
		}
	}
}