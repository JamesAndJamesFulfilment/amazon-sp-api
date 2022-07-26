<?php
/**
 * OrderItem
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
 * OrderItem Class Doc Comment
 *
 * @category Class
 * @description A single order item.
 * @package  JJFulfilment\AmazonSPAPI
 * @author   Mikayel Margaryan JJ team
 * @link     https://github.com/JamesAndJamesFulfilment/amazon-sp-api
 */
class OrderItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'asin' => 'string',
'seller_sku' => 'string',
'order_item_id' => 'string',
'title' => 'string',
'quantity_ordered' => 'int',
'quantity_shipped' => 'int',
'product_info' => '\JJFulfilment\AmazonSPAPI\Models\Orders\ProductInfoDetail',
'points_granted' => '\JJFulfilment\AmazonSPAPI\Models\Orders\PointsGrantedDetail',
'item_price' => '\JJFulfilment\AmazonSPAPI\Models\Orders\Money',
'shipping_price' => '\JJFulfilment\AmazonSPAPI\Models\Orders\Money',
'item_tax' => '\JJFulfilment\AmazonSPAPI\Models\Orders\Money',
'shipping_tax' => '\JJFulfilment\AmazonSPAPI\Models\Orders\Money',
'shipping_discount' => '\JJFulfilment\AmazonSPAPI\Models\Orders\Money',
'shipping_discount_tax' => '\JJFulfilment\AmazonSPAPI\Models\Orders\Money',
'promotion_discount' => '\JJFulfilment\AmazonSPAPI\Models\Orders\Money',
'promotion_discount_tax' => '\JJFulfilment\AmazonSPAPI\Models\Orders\Money',
'promotion_ids' => '\JJFulfilment\AmazonSPAPI\Models\Orders\PromotionIdList',
'cod_fee' => '\JJFulfilment\AmazonSPAPI\Models\Orders\Money',
'cod_fee_discount' => '\JJFulfilment\AmazonSPAPI\Models\Orders\Money',
'is_gift' => 'bool',
'condition_note' => 'string',
'condition_id' => 'string',
'condition_subtype_id' => 'string',
'scheduled_delivery_start_date' => 'string',
'scheduled_delivery_end_date' => 'string',
'price_designation' => 'string',
'tax_collection' => '\JJFulfilment\AmazonSPAPI\Models\Orders\TaxCollection',
'serial_number_required' => 'bool',
'is_transparency' => 'bool',
'ioss_number' => 'string',
'store_chain_store_id' => 'string',
'deemed_reseller_category' => 'string',
'buyer_info' => '\JJFulfilment\AmazonSPAPI\Models\Orders\ItemBuyerInfo'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'asin' => null,
'seller_sku' => null,
'order_item_id' => null,
'title' => null,
'quantity_ordered' => null,
'quantity_shipped' => null,
'product_info' => null,
'points_granted' => null,
'item_price' => null,
'shipping_price' => null,
'item_tax' => null,
'shipping_tax' => null,
'shipping_discount' => null,
'shipping_discount_tax' => null,
'promotion_discount' => null,
'promotion_discount_tax' => null,
'promotion_ids' => null,
'cod_fee' => null,
'cod_fee_discount' => null,
'is_gift' => null,
'condition_note' => null,
'condition_id' => null,
'condition_subtype_id' => null,
'scheduled_delivery_start_date' => null,
'scheduled_delivery_end_date' => null,
'price_designation' => null,
'tax_collection' => null,
'serial_number_required' => null,
'is_transparency' => null,
'ioss_number' => null,
'store_chain_store_id' => null,
'deemed_reseller_category' => null,
'buyer_info' => null    ];

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
        'asin' => 'ASIN',
'seller_sku' => 'SellerSKU',
'order_item_id' => 'OrderItemId',
'title' => 'Title',
'quantity_ordered' => 'QuantityOrdered',
'quantity_shipped' => 'QuantityShipped',
'product_info' => 'ProductInfo',
'points_granted' => 'PointsGranted',
'item_price' => 'ItemPrice',
'shipping_price' => 'ShippingPrice',
'item_tax' => 'ItemTax',
'shipping_tax' => 'ShippingTax',
'shipping_discount' => 'ShippingDiscount',
'shipping_discount_tax' => 'ShippingDiscountTax',
'promotion_discount' => 'PromotionDiscount',
'promotion_discount_tax' => 'PromotionDiscountTax',
'promotion_ids' => 'PromotionIds',
'cod_fee' => 'CODFee',
'cod_fee_discount' => 'CODFeeDiscount',
'is_gift' => 'IsGift',
'condition_note' => 'ConditionNote',
'condition_id' => 'ConditionId',
'condition_subtype_id' => 'ConditionSubtypeId',
'scheduled_delivery_start_date' => 'ScheduledDeliveryStartDate',
'scheduled_delivery_end_date' => 'ScheduledDeliveryEndDate',
'price_designation' => 'PriceDesignation',
'tax_collection' => 'TaxCollection',
'serial_number_required' => 'SerialNumberRequired',
'is_transparency' => 'IsTransparency',
'ioss_number' => 'IossNumber',
'store_chain_store_id' => 'StoreChainStoreId',
'deemed_reseller_category' => 'DeemedResellerCategory',
'buyer_info' => 'BuyerInfo'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
'seller_sku' => 'setSellerSku',
'order_item_id' => 'setOrderItemId',
'title' => 'setTitle',
'quantity_ordered' => 'setQuantityOrdered',
'quantity_shipped' => 'setQuantityShipped',
'product_info' => 'setProductInfo',
'points_granted' => 'setPointsGranted',
'item_price' => 'setItemPrice',
'shipping_price' => 'setShippingPrice',
'item_tax' => 'setItemTax',
'shipping_tax' => 'setShippingTax',
'shipping_discount' => 'setShippingDiscount',
'shipping_discount_tax' => 'setShippingDiscountTax',
'promotion_discount' => 'setPromotionDiscount',
'promotion_discount_tax' => 'setPromotionDiscountTax',
'promotion_ids' => 'setPromotionIds',
'cod_fee' => 'setCodFee',
'cod_fee_discount' => 'setCodFeeDiscount',
'is_gift' => 'setIsGift',
'condition_note' => 'setConditionNote',
'condition_id' => 'setConditionId',
'condition_subtype_id' => 'setConditionSubtypeId',
'scheduled_delivery_start_date' => 'setScheduledDeliveryStartDate',
'scheduled_delivery_end_date' => 'setScheduledDeliveryEndDate',
'price_designation' => 'setPriceDesignation',
'tax_collection' => 'setTaxCollection',
'serial_number_required' => 'setSerialNumberRequired',
'is_transparency' => 'setIsTransparency',
'ioss_number' => 'setIossNumber',
'store_chain_store_id' => 'setStoreChainStoreId',
'deemed_reseller_category' => 'setDeemedResellerCategory',
'buyer_info' => 'setBuyerInfo'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
'seller_sku' => 'getSellerSku',
'order_item_id' => 'getOrderItemId',
'title' => 'getTitle',
'quantity_ordered' => 'getQuantityOrdered',
'quantity_shipped' => 'getQuantityShipped',
'product_info' => 'getProductInfo',
'points_granted' => 'getPointsGranted',
'item_price' => 'getItemPrice',
'shipping_price' => 'getShippingPrice',
'item_tax' => 'getItemTax',
'shipping_tax' => 'getShippingTax',
'shipping_discount' => 'getShippingDiscount',
'shipping_discount_tax' => 'getShippingDiscountTax',
'promotion_discount' => 'getPromotionDiscount',
'promotion_discount_tax' => 'getPromotionDiscountTax',
'promotion_ids' => 'getPromotionIds',
'cod_fee' => 'getCodFee',
'cod_fee_discount' => 'getCodFeeDiscount',
'is_gift' => 'getIsGift',
'condition_note' => 'getConditionNote',
'condition_id' => 'getConditionId',
'condition_subtype_id' => 'getConditionSubtypeId',
'scheduled_delivery_start_date' => 'getScheduledDeliveryStartDate',
'scheduled_delivery_end_date' => 'getScheduledDeliveryEndDate',
'price_designation' => 'getPriceDesignation',
'tax_collection' => 'getTaxCollection',
'serial_number_required' => 'getSerialNumberRequired',
'is_transparency' => 'getIsTransparency',
'ioss_number' => 'getIossNumber',
'store_chain_store_id' => 'getStoreChainStoreId',
'deemed_reseller_category' => 'getDeemedResellerCategory',
'buyer_info' => 'getBuyerInfo'    ];

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

    const DEEMED_RESELLER_CATEGORY_IOSS = 'IOSS';
    const DEEMED_RESELLER_CATEGORY_UOSS = 'UOSS';
    const DEEMED_RESELLER_CATEGORY_GB_VOEC = 'GB_VOEC';
    const DEEMED_RESELLER_CATEGORY_NO_VOEC = 'NO_VOEC';
    const DEEMED_RESELLER_CATEGORY_CA_MPF  = 'CA_MPF';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeemedResellerCategoryAllowableValues()
    {
        return [
            self::DEEMED_RESELLER_CATEGORY_IOSS,
            self::DEEMED_RESELLER_CATEGORY_UOSS,
            self::DEEMED_RESELLER_CATEGORY_GB_VOEC,
            self::DEEMED_RESELLER_CATEGORY_NO_VOEC,
            self::DEEMED_RESELLER_CATEGORY_CA_MPF,
        ];
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
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['seller_sku'] = isset($data['seller_sku']) ? $data['seller_sku'] : null;
        $this->container['order_item_id'] = isset($data['order_item_id']) ? $data['order_item_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['quantity_ordered'] = isset($data['quantity_ordered']) ? $data['quantity_ordered'] : null;
        $this->container['quantity_shipped'] = isset($data['quantity_shipped']) ? $data['quantity_shipped'] : null;
        $this->container['product_info'] = isset($data['product_info']) ? $data['product_info'] : null;
        $this->container['points_granted'] = isset($data['points_granted']) ? $data['points_granted'] : null;
        $this->container['item_price'] = isset($data['item_price']) ? $data['item_price'] : null;
        $this->container['shipping_price'] = isset($data['shipping_price']) ? $data['shipping_price'] : null;
        $this->container['item_tax'] = isset($data['item_tax']) ? $data['item_tax'] : null;
        $this->container['shipping_tax'] = isset($data['shipping_tax']) ? $data['shipping_tax'] : null;
        $this->container['shipping_discount'] = isset($data['shipping_discount']) ? $data['shipping_discount'] : null;
        $this->container['shipping_discount_tax'] = isset($data['shipping_discount_tax']) ? $data['shipping_discount_tax'] : null;
        $this->container['promotion_discount'] = isset($data['promotion_discount']) ? $data['promotion_discount'] : null;
        $this->container['promotion_discount_tax'] = isset($data['promotion_discount_tax']) ? $data['promotion_discount_tax'] : null;
        $this->container['promotion_ids'] = isset($data['promotion_ids']) ? $data['promotion_ids'] : null;
        $this->container['cod_fee'] = isset($data['cod_fee']) ? $data['cod_fee'] : null;
        $this->container['cod_fee_discount'] = isset($data['cod_fee_discount']) ? $data['cod_fee_discount'] : null;
        $this->container['is_gift'] = isset($data['is_gift']) ? $data['is_gift'] : null;
        $this->container['condition_note'] = isset($data['condition_note']) ? $data['condition_note'] : null;
        $this->container['condition_id'] = isset($data['condition_id']) ? $data['condition_id'] : null;
        $this->container['condition_subtype_id'] = isset($data['condition_subtype_id']) ? $data['condition_subtype_id'] : null;
        $this->container['scheduled_delivery_start_date'] = isset($data['scheduled_delivery_start_date']) ? $data['scheduled_delivery_start_date'] : null;
        $this->container['scheduled_delivery_end_date'] = isset($data['scheduled_delivery_end_date']) ? $data['scheduled_delivery_end_date'] : null;
        $this->container['price_designation'] = isset($data['price_designation']) ? $data['price_designation'] : null;
        $this->container['tax_collection'] = isset($data['tax_collection']) ? $data['tax_collection'] : null;
        $this->container['serial_number_required'] = isset($data['serial_number_required']) ? $data['serial_number_required'] : null;
        $this->container['is_transparency'] = isset($data['is_transparency']) ? $data['is_transparency'] : null;
        $this->container['ioss_number'] = isset($data['ioss_number']) ? $data['ioss_number'] : null;
        $this->container['store_chain_store_id'] = isset($data['store_chain_store_id']) ? $data['store_chain_store_id'] : null;
        $this->container['deemed_reseller_category'] = isset($data['deemed_reseller_category']) ? $data['deemed_reseller_category'] : null;
        $this->container['buyer_info'] = isset($data['buyer_info']) ? $data['buyer_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['asin'] === null) {
            $invalidProperties[] = "'asin' can't be null";
        }
        if ($this->container['order_item_id'] === null) {
            $invalidProperties[] = "'order_item_id' can't be null";
        }
        if ($this->container['quantity_ordered'] === null) {
            $invalidProperties[] = "'quantity_ordered' can't be null";
        }
        $allowedValues = $this->getDeemedResellerCategoryAllowableValues();
        if (!is_null($this->container['deemed_reseller_category']) && !in_array($this->container['deemed_reseller_category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'deemed_reseller_category', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets asin
     *
     * @return string
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets seller_sku
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku
     *
     * @param string $seller_sku The seller stock keeping unit (SKU) of the item.
     *
     * @return $this
     */
    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets order_item_id
     *
     * @return string
     */
    public function getOrderItemId()
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id
     *
     * @param string $order_item_id An Amazon-defined order item identifier.
     *
     * @return $this
     */
    public function setOrderItemId($order_item_id)
    {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The name of the item.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets quantity_ordered
     *
     * @return int
     */
    public function getQuantityOrdered()
    {
        return $this->container['quantity_ordered'];
    }

    /**
     * Sets quantity_ordered
     *
     * @param int $quantity_ordered The number of items in the order.
     *
     * @return $this
     */
    public function setQuantityOrdered($quantity_ordered)
    {
        $this->container['quantity_ordered'] = $quantity_ordered;

        return $this;
    }

    /**
     * Gets quantity_shipped
     *
     * @return int
     */
    public function getQuantityShipped()
    {
        return $this->container['quantity_shipped'];
    }

    /**
     * Sets quantity_shipped
     *
     * @param int $quantity_shipped The number of items shipped.
     *
     * @return $this
     */
    public function setQuantityShipped($quantity_shipped)
    {
        $this->container['quantity_shipped'] = $quantity_shipped;

        return $this;
    }

    /**
     * Gets product_info
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\ProductInfoDetail
     */
    public function getProductInfo()
    {
        return $this->container['product_info'];
    }

    /**
     * Sets product_info
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\ProductInfoDetail $product_info product_info
     *
     * @return $this
     */
    public function setProductInfo($product_info)
    {
        $this->container['product_info'] = $product_info;

        return $this;
    }

    /**
     * Gets points_granted
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\PointsGrantedDetail
     */
    public function getPointsGranted()
    {
        return $this->container['points_granted'];
    }

    /**
     * Sets points_granted
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\PointsGrantedDetail $points_granted points_granted
     *
     * @return $this
     */
    public function setPointsGranted($points_granted)
    {
        $this->container['points_granted'] = $points_granted;

        return $this;
    }

    /**
     * Gets item_price
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\Money
     */
    public function getItemPrice()
    {
        return $this->container['item_price'];
    }

    /**
     * Sets item_price
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\Money $item_price item_price
     *
     * @return $this
     */
    public function setItemPrice($item_price)
    {
        $this->container['item_price'] = $item_price;

        return $this;
    }

    /**
     * Gets shipping_price
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\Money
     */
    public function getShippingPrice()
    {
        return $this->container['shipping_price'];
    }

    /**
     * Sets shipping_price
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\Money $shipping_price shipping_price
     *
     * @return $this
     */
    public function setShippingPrice($shipping_price)
    {
        $this->container['shipping_price'] = $shipping_price;

        return $this;
    }

    /**
     * Gets item_tax
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\Money
     */
    public function getItemTax()
    {
        return $this->container['item_tax'];
    }

    /**
     * Sets item_tax
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\Money $item_tax item_tax
     *
     * @return $this
     */
    public function setItemTax($item_tax)
    {
        $this->container['item_tax'] = $item_tax;

        return $this;
    }

    /**
     * Gets shipping_tax
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\Money
     */
    public function getShippingTax()
    {
        return $this->container['shipping_tax'];
    }

    /**
     * Sets shipping_tax
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\Money $shipping_tax shipping_tax
     *
     * @return $this
     */
    public function setShippingTax($shipping_tax)
    {
        $this->container['shipping_tax'] = $shipping_tax;

        return $this;
    }

    /**
     * Gets shipping_discount
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\Money
     */
    public function getShippingDiscount()
    {
        return $this->container['shipping_discount'];
    }

    /**
     * Sets shipping_discount
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\Money $shipping_discount shipping_discount
     *
     * @return $this
     */
    public function setShippingDiscount($shipping_discount)
    {
        $this->container['shipping_discount'] = $shipping_discount;

        return $this;
    }

    /**
     * Gets shipping_discount_tax
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\Money
     */
    public function getShippingDiscountTax()
    {
        return $this->container['shipping_discount_tax'];
    }

    /**
     * Sets shipping_discount_tax
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\Money $shipping_discount_tax shipping_discount_tax
     *
     * @return $this
     */
    public function setShippingDiscountTax($shipping_discount_tax)
    {
        $this->container['shipping_discount_tax'] = $shipping_discount_tax;

        return $this;
    }

    /**
     * Gets promotion_discount
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\Money
     */
    public function getPromotionDiscount()
    {
        return $this->container['promotion_discount'];
    }

    /**
     * Sets promotion_discount
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\Money $promotion_discount promotion_discount
     *
     * @return $this
     */
    public function setPromotionDiscount($promotion_discount)
    {
        $this->container['promotion_discount'] = $promotion_discount;

        return $this;
    }

    /**
     * Gets promotion_discount_tax
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\Money
     */
    public function getPromotionDiscountTax()
    {
        return $this->container['promotion_discount_tax'];
    }

    /**
     * Sets promotion_discount_tax
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\Money $promotion_discount_tax promotion_discount_tax
     *
     * @return $this
     */
    public function setPromotionDiscountTax($promotion_discount_tax)
    {
        $this->container['promotion_discount_tax'] = $promotion_discount_tax;

        return $this;
    }

    /**
     * Gets promotion_ids
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\PromotionIdList
     */
    public function getPromotionIds()
    {
        return $this->container['promotion_ids'];
    }

    /**
     * Sets promotion_ids
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\PromotionIdList $promotion_ids promotion_ids
     *
     * @return $this
     */
    public function setPromotionIds($promotion_ids)
    {
        $this->container['promotion_ids'] = $promotion_ids;

        return $this;
    }

    /**
     * Gets cod_fee
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\Money
     */
    public function getCodFee()
    {
        return $this->container['cod_fee'];
    }

    /**
     * Sets cod_fee
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\Money $cod_fee cod_fee
     *
     * @return $this
     */
    public function setCodFee($cod_fee)
    {
        $this->container['cod_fee'] = $cod_fee;

        return $this;
    }

    /**
     * Gets cod_fee_discount
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\Money
     */
    public function getCodFeeDiscount()
    {
        return $this->container['cod_fee_discount'];
    }

    /**
     * Sets cod_fee_discount
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\Money $cod_fee_discount cod_fee_discount
     *
     * @return $this
     */
    public function setCodFeeDiscount($cod_fee_discount)
    {
        $this->container['cod_fee_discount'] = $cod_fee_discount;

        return $this;
    }

    /**
     * Gets is_gift
     *
     * @return bool
     */
    public function getIsGift()
    {
        return $this->container['is_gift'];
    }

    /**
     * Sets is_gift
     *
     * @param bool $is_gift When true, the item is a gift.
     *
     * @return $this
     */
    public function setIsGift($is_gift)
    {
        $this->container['is_gift'] = $is_gift;

        return $this;
    }

    /**
     * Gets condition_note
     *
     * @return string
     */
    public function getConditionNote()
    {
        return $this->container['condition_note'];
    }

    /**
     * Sets condition_note
     *
     * @param string $condition_note The condition of the item as described by the seller.
     *
     * @return $this
     */
    public function setConditionNote($condition_note)
    {
        $this->container['condition_note'] = $condition_note;

        return $this;
    }

    /**
     * Gets condition_id
     *
     * @return string
     */
    public function getConditionId()
    {
        return $this->container['condition_id'];
    }

    /**
     * Sets condition_id
     *
     * @param string $condition_id The condition of the item.  Possible values: New, Used, Collectible, Refurbished, Preorder, Club.
     *
     * @return $this
     */
    public function setConditionId($condition_id)
    {
        $this->container['condition_id'] = $condition_id;

        return $this;
    }

    /**
     * Gets condition_subtype_id
     *
     * @return string
     */
    public function getConditionSubtypeId()
    {
        return $this->container['condition_subtype_id'];
    }

    /**
     * Sets condition_subtype_id
     *
     * @param string $condition_subtype_id The subcondition of the item.  Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, Any, Other.
     *
     * @return $this
     */
    public function setConditionSubtypeId($condition_subtype_id)
    {
        $this->container['condition_subtype_id'] = $condition_subtype_id;

        return $this;
    }

    /**
     * Gets scheduled_delivery_start_date
     *
     * @return string
     */
    public function getScheduledDeliveryStartDate()
    {
        return $this->container['scheduled_delivery_start_date'];
    }

    /**
     * Sets scheduled_delivery_start_date
     *
     * @param string $scheduled_delivery_start_date The start date of the scheduled delivery window in the time zone of the order destination. In ISO 8601 date time format.
     *
     * @return $this
     */
    public function setScheduledDeliveryStartDate($scheduled_delivery_start_date)
    {
        $this->container['scheduled_delivery_start_date'] = $scheduled_delivery_start_date;

        return $this;
    }

    /**
     * Gets scheduled_delivery_end_date
     *
     * @return string
     */
    public function getScheduledDeliveryEndDate()
    {
        return $this->container['scheduled_delivery_end_date'];
    }

    /**
     * Sets scheduled_delivery_end_date
     *
     * @param string $scheduled_delivery_end_date The end date of the scheduled delivery window in the time zone of the order destination. In ISO 8601 date time format.
     *
     * @return $this
     */
    public function setScheduledDeliveryEndDate($scheduled_delivery_end_date)
    {
        $this->container['scheduled_delivery_end_date'] = $scheduled_delivery_end_date;

        return $this;
    }

    /**
     * Gets price_designation
     *
     * @return string
     */
    public function getPriceDesignation()
    {
        return $this->container['price_designation'];
    }

    /**
     * Sets price_designation
     *
     * @param string $price_designation Indicates that the selling price is a special price that is available only for Amazon Business orders. For more information about the Amazon Business Seller Program, see the [Amazon Business website](https://www.amazon.com/b2b/info/amazon-business).   Possible values: BusinessPrice - A special price that is available only for Amazon Business orders.
     *
     * @return $this
     */
    public function setPriceDesignation($price_designation)
    {
        $this->container['price_designation'] = $price_designation;

        return $this;
    }

    /**
     * Gets tax_collection
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\TaxCollection
     */
    public function getTaxCollection()
    {
        return $this->container['tax_collection'];
    }

    /**
     * Sets tax_collection
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\TaxCollection $tax_collection tax_collection
     *
     * @return $this
     */
    public function setTaxCollection($tax_collection)
    {
        $this->container['tax_collection'] = $tax_collection;

        return $this;
    }

    /**
     * Gets serial_number_required
     *
     * @return bool
     */
    public function getSerialNumberRequired()
    {
        return $this->container['serial_number_required'];
    }

    /**
     * Sets serial_number_required
     *
     * @param bool $serial_number_required When true, the product type for this item has a serial number.  Returned only for Amazon Easy Ship orders.
     *
     * @return $this
     */
    public function setSerialNumberRequired($serial_number_required)
    {
        $this->container['serial_number_required'] = $serial_number_required;

        return $this;
    }

    /**
     * Gets is_transparency
     *
     * @return bool
     */
    public function getIsTransparency()
    {
        return $this->container['is_transparency'];
    }

    /**
     * Sets is_transparency
     *
     * @param bool $is_transparency When true, transparency codes are required.
     *
     * @return $this
     */
    public function setIsTransparency($is_transparency)
    {
        $this->container['is_transparency'] = $is_transparency;

        return $this;
    }

    /**
     * Gets ioss_number
     *
     * @return string
     */
    public function getIossNumber()
    {
        return $this->container['ioss_number'];
    }

    /**
     * Sets ioss_number
     *
     * @param string $ioss_number The IOSS number for the marketplace. Sellers shipping to the European Union (EU) from outside of the EU must provide this IOSS number to their carrier when Amazon has collected the VAT on the sale.
     *
     * @return $this
     */
    public function setIossNumber($ioss_number)
    {
        $this->container['ioss_number'] = $ioss_number;

        return $this;
    }

    /**
     * Gets store_chain_store_id
     *
     * @return string
     */
    public function getStoreChainStoreId()
    {
        return $this->container['store_chain_store_id'];
    }

    /**
     * Sets store_chain_store_id
     *
     * @param string $store_chain_store_id The store chain store identifier. Linked to a specific store in a store chain.
     *
     * @return $this
     */
    public function setStoreChainStoreId($store_chain_store_id)
    {
        $this->container['store_chain_store_id'] = $store_chain_store_id;

        return $this;
    }

    /**
     * Gets deemed_reseller_category
     *
     * @return string
     */
    public function getDeemedResellerCategory()
    {
        return $this->container['deemed_reseller_category'];
    }

    /**
     * Sets deemed_reseller_category
     *
     * @param string $deemed_reseller_category The category of deemed reseller. This applies to selling partners that are not based in the EU and is used to help them meet the VAT Deemed Reseller tax laws in the EU and UK.
     *
     * @return $this
     */
    public function setDeemedResellerCategory($deemed_reseller_category)
    {
        $allowedValues = $this->getDeemedResellerCategoryAllowableValues();
        if (!is_null($deemed_reseller_category) && !in_array($deemed_reseller_category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'deemed_reseller_category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deemed_reseller_category'] = $deemed_reseller_category;

        return $this;
    }

    /**
     * Gets buyer_info
     *
     * @return \JJFulfilment\AmazonSPAPI\Models\Orders\ItemBuyerInfo
     */
    public function getBuyerInfo()
    {
        return $this->container['buyer_info'];
    }

    /**
     * Sets buyer_info
     *
     * @param \JJFulfilment\AmazonSPAPI\Models\Orders\ItemBuyerInfo $buyer_info buyer_info
     *
     * @return $this
     */
    public function setBuyerInfo($buyer_info)
    {
        $this->container['buyer_info'] = $buyer_info;

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
