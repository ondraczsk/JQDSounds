<?php

namespace Sounds;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\utils\TextFormat as C;
use pocketmine\Player;
use pocketmine\entity\Entity;
use pocketmine\level\Position;
use pocketmine\level\sound\EndermanTeleportSound;
use pocketmine\level\sound\AnvilFallSound;
use pocketmine\level\sound\Sound;
use pocketmine\level\sound\PopSound;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener {
	
	public function onEnable(){
		$this->getLogger()->info(C::GREEN."Activated!");
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
	}
	public function onDisable(){
		$this->getLogger()->info(C::RED."Deactivated");
	}
	public function onJoin(PlayerJoinEvent $event){
		$pl = $event->getPlayer();
		$level = $pl->getLevel();
		$player->getlevel()->addSound(new PopSound($pl));
	}
	public function onDeath(PlayerDeathEvent $event){
		$pl = $event->getPlayer();
		$level = $pl->getLevel();
		$player->getlevel()->addSound(new AnvilFallSound($pl));
	}
	public function onQuit(PlayerQuitEvent $event){
		$pl = $event->getPlayer();
		$level = $pl->getLevel();
		$player->getlevel()->addSound(new EndermanTeleportSound($pl));
	}
}
