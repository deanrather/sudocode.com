<?php
namespace
{
	use sudocode\Sudocode;
	
	/**
	 * Nutshell bootsrapper.
	 * 
	 * The bootstrapper simply includes the main application
	 * file (../private/application/Sudocode.php) and initates
	 * it. The application file will handle everything from that
	 * point on.
	 */
	function bootstrap()
	{
		define('PUBLIC_DIR', __DIR__.DIRECTORY_SEPARATOR);
		
		//Include the Connect application.
		include('../private/application/Sudocode.php');

		$GLOBALS['SUDOCODE'] = new Sudocode();
	}
	
	/* By including nutshell below, the framework will
	 * auto-initiate. Nutshell will detect our custom bootstrap
	 * and execute it.
	 */
	require('../private/nutshell/Nutshell.php');
}