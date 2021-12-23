<?php

namespace Wax\XXWAXX;

use pocketmine\plugin\XXWAXX;

class main extends Jobs{
  /**
     * @var Config
     */
    public $Metier;

    public function onEnable()
    {
        $this->Metier = new Config(fille: $this->getDataFloder() . 'db.yml', type:CONFIG::YAML); //Base de donnée !
    }
 
    public function onCommand(CommandSender $sender, Command $Command, string $label, array $args): bool
    {
        $commandName = strtolwer($command->getName());
        if($sender instanceof Player){
 
         switch ($commandName){
             case 'Jobs':
                 $playerName = $sender->getName();
               self $player = $sender->getName('...');
                 }
   
}