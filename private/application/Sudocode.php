<?php
namespace sudocode
{
	use nutshell\Nutshell;
	
	/**
	 * Sudocode.com
	 * @author Dean Rather <dean@sudocode.com>
	 */
	class Sudocode
	{
		public function __construct()
		{
			//Set the application path.
			Nutshell::setAppPath(__DIR__);
			
			//get the nutshell instance (create nutshell).
			$nutshell = Nutshell::getInstance();

			//Initiate the MVC.
			$nutshell->plugin->Mvc();
		}
	}
}