<?php

declare(strict_types = 1);

namespace DANIHEX\touchlight;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\block\Block;

class Main extends PluginBase implements Listener {

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onPlayerInteract(PlayerInteractEvent $ev){
        $block = $ev->getBlock();
        if($ev->getAction() === PlayerInteractEvent::RIGHT_CLICK_BLOCK){
            switch($block->getId()){
                case 123:
                    $block->getLevel()->setBlock($block->asVector3(), Block::get(124));
                break;
                case 124:
                    $block->getLevel()->setBlock($block->asVector3(), Block::get(123));
                break;
            }
        }
    }

}








