<?php

  namespace Tag;

  use pocketmine\plugin\PluginBase;
  use pocketmine\event\Listener;
  use pocketmine\event\player\PlayerChatEvent;
  use pocketmine\utils\TextFormat as TF;
  use pocketmine\utils\Config;

  public function server()
  {

    return $this->getServer();

  }

  public function dataPath()
  {

    return $this->getDataFolder();

  }

  public function onEnable()
  {

  }

  public function onChat(PlayerChatEvent $event)
  {

  }

?>
