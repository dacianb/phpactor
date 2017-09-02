<?php

namespace Phpactor\UserInterface\Console\Command\Handler;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;

class FilesystemHandler
{
    public static function configure(Command $command, string $default)
    {
        $command->addOption('filesystem', null, InputOption::VALUE_REQUIRED, 'Filesystem (informs scope of changes)', $default);
    }
}
