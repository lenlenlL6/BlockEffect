<?php

namespace lenlenlL6\blockeffect;

use lenlenlL6\blockeffect\Main;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\data\bedrock\EffectIdMap;
use pocketmine\entity\effect\EffectInstance;
use pocketmine\block\BlockFactory;
use pocketmine\block\UnknownBlock;

final class EventListener implements Listener{
  
  private Main $main;
  
  public function __construct(Main $main){
         $this->main = $main;
  }
  
  public function onMove(PlayerMoveEvent $event) : void{
         $player = $event->getPlayer();
         $blocks = [];
         foreach($this->main->config->get("blocks") as $data){
         $explode = explode("|", $data);
                if(isset($explode[4])){
                if(is_numeric($explode[0]) && is_numeric($explode[1]) && is_numeric($explode[2]) && is_numeric($explode[3]) && is_numeric($explode[4])){
                       if(!(BlockFactory::getInstance()->get((int)$explode[0], (int)$explode[1]) instanceof UnknownBlock)){
                       if(EffectIdMap::getInstance()->fromId((int)$explode[2]) !== null){
                               if((int)$explode[3] > 0 && (int)$explode[4] > 0){
                               $blocks[$explode[0] . "|" . $explode[1]] = $explode[2] . "|" . $explode[3] . "|" . $explode[4];
                               }
                       }
                }
           }
      }
  }
         if(isset($blocks[($player->getWorld()->getBlock($player->getLocation()->asVector3()->add(0, -1, 0))->getId() . "|" . $player->getWorld()->getBlock($player->getLocation()->asVector3()->add(0, -1, 0))->getMeta())])){
                $explode = explode("|", $blocks[($player->getWorld()->getBlock($player->getLocation()->asVector3()->add(0, -1, 0))->getId() . "|" . $player->getWorld()->getBlock($player->getLocation()->asVector3()->add(0, -1, 0))->getMeta())]);
                $player->getEffects()->add(new EffectInstance(EffectIdMap::getInstance()->fromId((int)$explode[0]), ((int)$explode[1]*20), ((int)$explode[2] - 1)));
          }
     }
}
