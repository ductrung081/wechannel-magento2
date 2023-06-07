<?php

namespace Wechannel\Custom\Api;

interface ShippingMethodRepositoryInterface
{
    /**
     * Get a list of all shipping methods.
     *
     * @return \Wechannel\Custom\Api\Data\ShippingMethodInterface[]
     */
    public function getList();
}