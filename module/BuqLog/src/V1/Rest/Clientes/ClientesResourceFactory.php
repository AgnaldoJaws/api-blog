<?php
namespace BuqLog\V1\Rest\Clientes;

class ClientesResourceFactory
{
    public function __invoke($services)
    {
        return new ClientesResource();
    }
}
