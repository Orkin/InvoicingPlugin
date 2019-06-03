<?php

declare(strict_types=1);

namespace Sylius\InvoicingPlugin\Converter;

use Sylius\Component\Core\Model\ChannelInterface;
use Sylius\Component\Core\Model\ShopBillingDataInterface;
use Sylius\InvoicingPlugin\Entity\InvoiceShopBillingDataInterface;

interface InvoiceShopBillingDataConverterInterface
{
    public function convert(ChannelInterface $channel): InvoiceShopBillingDataInterface;
}
