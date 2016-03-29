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

    $message_replace = $this->cfg->get("message-replace");

    if(stripos($message, "@"))
    {

      if($message_replace === "on")
      {

        if(preg_match("/@.*/", $message, $matches))
        {

          if(in_array("@" . $player_name, $matches))
          {

            $message = str_replace("@" . $player_name, "", $message);

            $event->setMessage($message);

          }
          else
          {

            $tagged_player_name = str_replace("@", "", $message);

            foreach($this->server()->getOnlinePlayers() as $key => $value)
            {

              if($notifications === "on")
              {

                if($value === $tagged_player_name)
                {

                }

              }

            }

          }

        }

      }

    }

  }

?>
