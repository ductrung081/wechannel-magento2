<?php

namespace Wechannel\Custom\Api\Data;

interface ShippingMethodInterface
{
    /**
     * @return string
     */
    public function getCode();

    /**
     * @param string $code
     * @return \Wechannel\Custom\Api\Data\ShippingMethodInterface
     */
    public function setCode($code);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return \Wechannel\Custom\Api\Data\ShippingMethodInterface
     */
    public function setName($name);
}
