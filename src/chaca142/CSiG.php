<?php

namespace chaca142;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\Player;

class CSiG extends PluginBase implements Listener{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("§aCSiGが読み込まれました");
    }

    public function onDisable(){
        $this->getLogger()->info("§cCSiGを停止しました");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args):bool {
        switch(strtolower($command->getName())){

            case "cs":

                if(!$sender instanceof Player){
                    $this->getLogger()->info('§cコンソールからの実行はできません');
                }else{
                    if(!isset($args[0])) return false;
                    $this->getServer()->broadcastMessage("§d[Server] ".$args[0]."");
                }
        }
     return false;
    }
}