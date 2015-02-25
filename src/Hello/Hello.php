<?php

namespace Destroyer;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class MyPlugin extends PluginBase{

    public function onEnable(){
        $this->getLogger()->info("onEnable() has been called!");
    }
	
	public function onLoad(){
		
	}

    public function onDisable(){
        $this->getLogger()->info("onDisable() has been called!");
    }
}



public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    if(strtolower($command->getName()) === "hello"){
        sender->sendMeassage("hello there".sender->getName()"!");
        return true;
    }

    return false;
}