<?php

namespace EquipeBS\Repository\PDO;

use PDO;

class ConnectionFactory {
	
	private static $conn;

	public static function getConnection() {
		if(static::$conn == null) {
			static::$conn = new PDO("sqlite:" . APPLICATION_PATH . "/data/db.sq3");
		}

		return static::$conn;
	}

}