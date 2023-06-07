<?php

namespace Wechannel\Custom\Api;

interface PaymentMethodRepositoryInterface
{
    /**
     * Get a list of all payment methods.
     *
     * @return \Wechannel\Custom\Api\Data\PaymentMethodInterface[]
     */
    public function getList();
}