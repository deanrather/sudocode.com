<?php
namespace application\controller
{
	use nutshell\plugin\mvc\Controller;
	
	class Index extends Controller
	{
		public function index()
		{
			$this->view->setTemplate('index');
			$this->view->setVar('text','Hello World');
			$this->view->render();
		}
	}
}