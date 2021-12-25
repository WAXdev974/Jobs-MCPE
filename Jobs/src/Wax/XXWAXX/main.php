<?php

namespace Wax_Dev\Jobs;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\evnt\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

  public function onEnable(){
    $this->getserver()->getPluginManager()->registerEvent($this, $this);
    $this->getLogger()->info("Metier a level up");
  }
  public function onCommand(CommandSender $sender, Command $cmd, String $Label array $args) : bool {

    switch($cmd->getName()){
      case "jobs ui 1"
      if($sender instanceof Player){
        $this->openMyForm($sender);
        //menu jobs//
      }else {
        $sender->sendMessage("Metier a level up");
      }
    }
    return true;
  }
  public function openMyForm($Player){
    $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
    $form = $api->CreateSimpleForm(function (Player $player, int $data = null){
      $result = $data;
      if($result === null){
        return true;
      }
      switch($result){
        case 0:
          //Boutton Metier//
          $player->senderMessage("vous avez équiper le metier Mineur ! ");
          break;

          case 1:
             //Boutton Metier//
          $player->senderMessage("vous avez équiper le metier Assassin ! ");
            break

            case 2:
               //Boutton Metier//
          $player->senderMessage("vous avez équiper le metier Farmeur ! ");
              break
      }
    });
    $form->setTitle("Menu des Metier");
    $form->setContent("Clique sur un Metier pour l'équiper");
    $form->addButton("Minage");
    $form->addButton("Assassin ");
    $form->addButton("Farmeur");
    $form->sendToPlayer($player);
    return form;

    //sauvegarde Metier / Jobs//
  }
}