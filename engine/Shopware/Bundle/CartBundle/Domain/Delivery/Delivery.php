<?php
declare(strict_types=1);
/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

namespace Shopware\Bundle\CartBundle\Domain\Delivery;

use Shopware\Bundle\CartBundle\Domain\Customer\Address;
use Shopware\Bundle\CartBundle\Domain\JsonSerializableTrait;

class Delivery implements \JsonSerializable
{
    use JsonSerializableTrait;

    /**
     * @var DeliveryPositionCollection
     */
    protected $positions;

    /**
     * @var Address
     */
    protected $address;

    /**
     * @var DeliveryDate
     */
    protected $deliveryDate;

    /**
     * @var DeliveryMethod
     */
    private $deliveryMethod;

    public function __construct(
        DeliveryPositionCollection $positions,
        DeliveryDate $deliveryDate,
        DeliveryMethod $deliveryMethod,
        Address $address
    ) {
        $this->address = $address;
        $this->positions = $positions;
        $this->deliveryDate = $deliveryDate;
        $this->deliveryMethod = $deliveryMethod;
    }

    public function getPositions(): DeliveryPositionCollection
    {
        return $this->positions;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function getDeliveryDate(): DeliveryDate
    {
        return $this->deliveryDate;
    }

    public function getDeliveryMethod(): DeliveryMethod
    {
        return $this->deliveryMethod;
    }
}
