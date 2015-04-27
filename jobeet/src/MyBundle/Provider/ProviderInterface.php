<?php

namespace MyBundle\Provider;

use Doctrine\Entity;

interface ProviderInterface
{
    /**
     * @return Entity[]
     */
    public function provide();
}