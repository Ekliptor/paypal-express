<?php

/*
 * Paypal Express.
 *
 * LICENSE
 *
 * This source file is subject to the MIT license and the version 3 of the GPL3
 * license that are bundled with this package in the folder licences
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to richarddeloge@gmail.com so we can send you a copy immediately.
 *
 *
 * @copyright   Copyright (c) 2009-2020 Richard Déloge (richarddeloge@gmail.com)
 *
 * @link        http://teknoo.software/paypal Project website
 *
 * @license     http://teknoo.software/paypal/license/mit         MIT License
 *
 * @author      Richard Déloge <richarddeloge@gmail.com>
 */
namespace Acme\demo;

use Teknoo\Paypal\Express\Contract\ConsumerInterface;

/**
 * Class Consumer
 * Demo business class to represent a consumer.
 *
 *
 * @copyright   Copyright (c) 2009-2020 Richard Déloge (richarddeloge@gmail.com)
 *
 * @link        http://teknoo.software/paypal Project website
 *
 * @license     http://teknoo.software/paypal/license/mit         MIT License
 *
 * @author      Richard Déloge <richarddeloge@gmail.com>
 */
class Consumer implements ConsumerInterface
{
    public function getConsumerName(): string
    {
        return 'Richard Deloge';
    }

    public function getShippingAddress(): string
    {
        return '161 rue d\'Auge';
    }

    public function getShippingExtraAddress(): string
    {
        return 'Teknoo Software';
    }

    public function getShippingZip(): string
    {
        return '14000';
    }

    public function getShippingCity(): string
    {
        return 'Caen';
    }

    public function getShippingState(): string
    {
        return 'Normandy';
    }

    public function getShippingCountryCode(): string
    {
        return 'France';
    }

    public function getPhone(): string
    {
        return '0033123456789';
    }
}
