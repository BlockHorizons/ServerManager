<?php

namespace BlockHorizons\ServerManager\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginIdentifiableCommand;

use BlockHorizons\ServerManager\ServerManager;

abstract class BaseCommand extends Command implememts PluginIdentifiableCommand {
	/** @var ServerManager */
	private $plugin;
	
	public functionn __construct(ServerManager $plugin, string $name, string $description, string $usage, array $aliases = []) {
		parent::__construct($name, $description, $usage, $aliases);
		$this->plugin = $plugin;
	}
	
	public function getPlugin(): ServerManager {
		return $this->plugin;
	}
}
