<?php

declare(strict_types=1);

namespace App\Processor;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use function var_dump;

class BookProcessor implements ProcessorInterface
{

    public function process($data, Operation $operation, array $uriVariables = [], array $context = [])
    {
        var_dump($data);
        exit;
    }
}