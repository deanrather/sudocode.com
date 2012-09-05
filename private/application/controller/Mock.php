<?php
namespace application\controller
{
	use nutshell\plugin\mvc\Controller;
	
	class Mock extends Controller
	{
		public function index()
		{
			echo file_get_contents(PUBLIC_DIR.'/index.html');
			exit;
		}
	}
}