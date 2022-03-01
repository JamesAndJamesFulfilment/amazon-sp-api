<?php
/**
 * ItemBuyerInfo
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

use \ArrayAccess;
use \JJFulfilment\AmazonSPAPI\ObjectSerializer;
use \JJFulfilment\AmazonSPAPI\Models\ModelInterface;

/**
 * ItemBuyerInfo Class Doc Comment
 *
 * @category Class
 * @description A single item&#x27;s buyer information.
 * @package  JJFulfilment\AmazonSPAPI
 * @author   Mikayel Margaryan JJ team
 * @link     https://github.com/JamesAndJamesFulfilment/amazon-sp-api
 */
class ItemBuyerInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemBuyerInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'buyer_customized_info' => '\JJFulfilment\AmazonSPAPI\Models\Orders\BuyerCustomizedInfoDetail',
'gift_wrap_price' => '\JJFulfilment\AmazonSPAPI\Models\Orders\Money',
'gift_wrap_tax' => '\JJFulfilment\AmazonSPAPI\Models\Orders\Money',
'gift_message_text' => 'string',
'gift_wrap_level' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'buyer_customized_info' => null,
'gift_wrap_price' => null,
'gift_wrap_tax' => null,
'gift_message_text' => null,
'gift_wrap_level' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'buyer_customized_info' => 'BuyerCustomizedInfo',
'gift_wrap_price' => 'GiftWrapPrice',
'gift_wrap_tax' => 'GiftWrapTax',
'gift_message_text' => 'GiftMessageText',
'gift_wrap_level' => 'GiftWrapLevel'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buyer_customized_info' => 'setBuyerCustomizedInfo',
'gift_wrap_price' => 'setGiftWrapPrice',
'gift_wrap_tax' => 'setGiftWrapTax',
'gift_message_text' => 'setGiftMessageText',
'gift_wrap_level' => 'setGiftWrapLevel'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buyer_customized_info' => 'getBuyerCustomizedInfo',
'gift_wrap_price' => 'getGiftWrapPrice',
'gift_wrap_tax' => 'getGiftWrapTax',
'gift_message_text' => 'getGiftMessageText',
'gift_wrap_level' => 'getGiftWrapLevel'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['buyer_customized_info'] = isset($data['buyer_customized_info']) ? $data['buyer_customized_info'] : null;
        $this->container['gift_wrap_price'] = isset($data['gift_wrap_price']) ? $data['gift_wrap_price'] : null;
        $this->container['gift_wrap_tax'] = isset($data['gift_wrap_tax']) ? $data['gift_wrap_tax'] : null;
        $this->container['gift_message_text'] = isset($data['gift_message_text']) ? $data['gift_message_text'] : null;
        $this->container['gift_wrap_level'] = isset($data['gift_wrap_level']) ? $data['gift_wrap_level'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets buyer_customized_info
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\BuyerCustomizedInfoDetail
     */
    public function getBuyerCustomizedInfo()
    {
        return $this->container['buyer_customized_info'];
    }

    /**
     * Sets buyer_customized_info
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\BuyerCustomizedInfoDetail $buyer_customized_info buyer_customized_info
     *
     * @return $this
     */
    public function setBuyerCustomizedInfo($buyer_customized_info)
    {
        $this->container['buyer_customized_info'] = $buyer_customized_info;

        return $this;
    }

    /**
     * Gets gift_wrap_price
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\Money
     */
    public function getGiftWrapPrice()
    {
        return $this->container['gift_wrap_price'];
    }

    /**
     * Sets gift_wrap_price
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\Money $gift_wrap_price gift_wrap_price
     *
     * @return $this
     */
    public function setGiftWrapPrice($gift_wrap_price)
    {
        $this->container['gift_wrap_price'] = $gift_wrap_price;

        return $this;
    }

    /**
     * Gets gift_wrap_tax
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\Money
     */
    public function getGiftWrapTax()
    {
        return $this->container['gift_wrap_tax'];
    }

    /**
     * Sets gift_wrap_tax
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\Money $gift_wrap_tax gift_wrap_tax
     *
     * @return $this
     */
    public function setGiftWrapTax($gift_wrap_tax)
    {
        $this->container['gift_wrap_tax'] = $gift_wrap_tax;

        return $this;
    }

    /**
     * Gets gift_message_text
     *
     * @return string
     */
    public function getGiftMessageText()
    {
        return $this->container['gift_message_text'];
    }

    /**
     * Sets gift_message_text
     *
     * @param string $gift_message_text A gift message provided by the buyer.
     *
     * @return $this
     */
    public function setGiftMessageText($gift_message_text)
    {
        $this->container['gift_message_text'] = $gift_message_text;

        return $this;
    }

    /**
     * Gets gift_wrap_level
     *
     * @return string
     */
    public function getGiftWrapLevel()
    {
        return $this->container['gift_wrap_level'];
    }

    /**
     * Sets gift_wrap_level
     *
     * @param string $gift_wrap_level The gift wrap level specified by the buyer.
     *
     * @return $this
     */
    public function setGiftWrapLevel($gift_wrap_level)
    {
        $this->container['gift_wrap_level'] = $gift_wrap_level;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}