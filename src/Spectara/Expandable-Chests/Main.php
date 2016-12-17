<?php

namespace Spectara\Expandable-Chests;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener {
	
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this); // Must have!
		$this->getLogger()->warning(" Starting Expandable-Chests by SpectaraRZ");
	}
	
	//Commands time
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {
		switch(strtolower($cmd->getName())) { // tells the server that you're going to make command/call commands!
			
			case "chest":
				// code here!
				
				return true;
			break;
		} // closes switch
	} // closes Public Function
	
	public function onDisable() {
		// nothing to worry. This can remain nothing.
	}
	
} // closes the whole plugin.
