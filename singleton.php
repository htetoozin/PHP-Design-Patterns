<?php 

class Logger
{
	private static $logger;

	private function __construct()
	{
		//no access in public
	}

	//Access in public
	public static function getLogger()
	{
		if (self::$logger == null) {
			echo "Logger <br />";
			self::$logger = new Logger();
		}
		return self::$logger;
	}
}

$logger1 = Logger::getLogger();
$logger2 = Logger::getLogger();
var_dump($logger1 == $logger2);