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

    $this->server()->getPluginManager()->registerEvents($this, $this);

    @mkdir($this->dataPath());

    $this->cfg = new Config($this->dataPath() . "config.yml", Config::YAML, array("notifications" => "off", "message-replace" => "on"));

  }

  public function onChat(PlayerChatEvent $event)
  {

    $player = $event->getPlayer();

    $player_name = $player->getName();

    $message = $event->getMessage();

    $notifications = $this->cfg->get("notifications");

    if(stripos($message, "@"))
    {

      

    }

  }

?>
