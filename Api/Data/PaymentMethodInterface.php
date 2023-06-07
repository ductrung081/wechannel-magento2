<?php

namespace Wechannel\Custom\Api\Data;

interface PaymentMethodInterface
{
    /**
     * @return string
     */
    public function getCode();

    /**
     * @param string $code
     * @return \Wechannel\Custom\Api\Data\PaymentMethodInterface
     */
    public function setCode($code);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return \Wechannel\Custom\Api\Data\PaymentMethodInterface
     */
    public function setName($name);
}
