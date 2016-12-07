<?php
namespace BuqLog\V1\Rpc\Sum;

class SumControllerFactory
{
    public function __invoke($controllers)
    {
        return new SumController();
    }
}
