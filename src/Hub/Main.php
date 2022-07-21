<?php 

namespace Hub;

use pocketmine\Server;
use pocketmine\player\Player;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;


class Main extends PluginBase implements Listener {
    
    public function onEnable(): void {
        $this->getLogger()->info("El plugin se a Activado");
    }

    public function onDisable(): void {
        $this->getLogger()->info("El plugin se a Desactivado");
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args,) : bool {
        if($cmd->getName() === "test"){
              if($sender instanceof Player){
                  $sender->sendMessage("Hola player, este es un plugin de prueba");
                    } else {
                     $sender->sendMessage("Hola");   
                    }
    return true;
    } 

 } 
    }
 } 
    