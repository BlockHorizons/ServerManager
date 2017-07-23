<?php

namespace BlockHorizons\ServerManager\data;

use BlockHorizons\ServerManager\ServerManager;

class Database {
	/** @var ServerManager */
	private $plugin;

	public function __construct(ServerManager $plugin) {
		$this->plugin = $plugin;
	}
	
	public function init() {
		
	}
}
