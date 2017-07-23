<?php

namespace BlockHorizons\ServerManager;

use pocketmine\plugin\PluginBase;

use BlockHorizons\ServerManager\entity\Server;
use BlockHorizons\ServerManager\command\ServerCommand;

class ServerManager extends PluginBase {
	/** @var ServerManager */
	private static $instance;
	
	/** @var Server[] */
	private $servers = [];
	
	public function onLoad() {
		self::$instance = $this;
	}
	
	public function onEnable() {
		$this->saveDefaultConfig();
		$this->loadCommands();
		$this->loadServers();
	}
	
	private function loadCommands() {
		$this->getServer()->getCommandMap()->registerAll("servermanager", [
			new ServerCommand($this)
		]);
	}
	
	private function loadServers() {
		foreach($this->getConfig()->get("servers") as $name => $data) {
			if(!isset($data["address"])) {
				throw new \RuntimeException("Server \"$name\" does not have an address specified!");
			}
			$this->addServer(new Server($name, $data["address"], ($data["restricted"] ?? false)));
		}
	}

	public function addServer(Server $server) {
		$this->servers[$server->getName()] = $server;
	}
	
	public function getServerByName(string $name) {
		return $this->servers[$name] ?? null;
	}

	public function getServers(): array {
		return $this->servers;
	}
}
