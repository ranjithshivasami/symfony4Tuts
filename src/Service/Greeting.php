<?php
namespace App\Service;

class Greeting
{
    private $logger;

    public function __construct(LoggerInterface $logger){
        $this->logger = $logger;
    }
    public function greet( string $name):string {
        $this->logger->info("Greeted $name");
        return "Hello $name";
    }
}