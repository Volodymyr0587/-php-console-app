<?php

namespace Volodymyr\ConsoleApp\Commands;

use Volodymyr\ConsoleApp\CommandInterface;

class Subtraction implements CommandInterface
{
    private static string $name = 'math:subtraction';

    public function execute(array $args = []): int
    {
        $total =  $args[0] - $args[1];

        echo "The total is: {$total}" . PHP_EOL;

        return 0;        
    }

    public static function getName(): string
    {
        return static::$name;
    }
}
