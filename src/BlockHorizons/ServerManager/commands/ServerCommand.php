<?php

namespace BlockHorizons\ServerManager\commands;

use pocketmine\command\CommandSender;

use BlockHorizons\ServerManager\ServerManager;

class BaseCommand extends BaseCommand {
	
	public function __construct(ServerManager $plugin) {
		parent::__construct($plugin, "server", "List or transfer to a server.", "/server [name]", ["servers"]);
	}
	
	public function execute(CommandSender $sender, $commandLabel, array $args) {
		if(empty($args)) {
			
			return true;
		}
	}
}
