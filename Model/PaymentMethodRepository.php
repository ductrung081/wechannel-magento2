<?php

namespace Wechannel\Custom\Model;

class PaymentMethodRepository implements \Wechannel\Custom\Api\PaymentMethodRepositoryInterface
{
    /** @var \Magento\Payment\Helper\Data */
    private $paymentHelper;

    /**
     * PaymentMethodRepository constructor.
     *
     * @param \Magento\Payment\Helper\Data $paymentHelper
     */
    public function __construct(\Magento\Payment\Helper\Data $paymentHelper)
    {
        $this->paymentHelper = $paymentHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function getList()
    {
        $response = [];

        if (!$this->paymentHelper->getPaymentMethodList()) {
            return $response;
        }

        foreach ($this->paymentHelper->getPaymentMethodList() as $code => $name) {
            $model = new PaymentMethod;
            $model->setCode($code);
            $model->setName($name);

            $response[] = $model;
        }

        return $response;
    }
}