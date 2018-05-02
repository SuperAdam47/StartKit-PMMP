<?php

namespace blugin\startkit\command\subcommands;

use pocketmine\command\CommandSender;
use blugin\startkit\StartKit as Plugin;
use blugin\startkit\command\{
  PoolCommand, SubCommand
};

class ResetSubCommand extends SubCommand{

    public function __construct(PoolCommand $owner){
        parent::__construct($owner, 'reset');
    }

    /**
     * @param CommandSender $sender
     * @param String[]      $args
     *
     * @return bool
     */
    public function onCommand(CommandSender $sender, array $args) : bool{
        $this->plugin->setSupplieds([]);
        $sender->sendMessage(Plugin::$prefix . $this->translate('success'));

        return true;
    }
}