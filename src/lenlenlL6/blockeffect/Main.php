<?php

namespace lenlenlL6\blockeffect;

use pocketmine\utils\Config;
use pocketmine\plugin\PluginBase;
use lenlenlL6\blockeffect\EventListener;

final class Main extends PluginBase{
  
  public Config $config;
  
  public function onEnable() : void{
         $this->saveDefaultConfig();
         $this->config = $this->getConfig();
         $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
       }
     }
