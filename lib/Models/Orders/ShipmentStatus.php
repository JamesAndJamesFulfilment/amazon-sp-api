<?php
/**
 * ShipmentStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  JJFulfilment\AmazonSPAPI
 * @author   Mikayel Margaryan JJ team
 * @link     https://github.com/JamesAndJamesFulfilment/amazon-sp-api
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.33
 */


namespace JJFulfilment\AmazonSPAPI\Models\Orders;
use \JJFulfilment\AmazonSPAPI\ObjectSerializer;
use \JJFulfilment\AmazonSPAPI\Models\ModelInterface;

/**
 * ShipmentStatus Class Doc Comment
 *
 * @category Class
 * @description the status of the shipment of the order to be updated
 * @package  JJFulfilment\AmazonSPAPI
 * @author   Mikayel Margaryan JJ team
 * @link     https://github.com/JamesAndJamesFulfilment/amazon-sp-api
 */
class ShipmentStatus
{
    /**
     * Possible values of this enum
     */
    const READY_FOR_PICKUP = 'ReadyForPickup';
const PICKED_UP = 'PickedUp';
const REFUSED_PICKUP = 'RefusedPickup';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::READY_FOR_PICKUP,
self::PICKED_UP,
self::REFUSED_PICKUP,        ];
    }
}
