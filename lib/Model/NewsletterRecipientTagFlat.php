<?php
/**
 * NewsletterRecipientTagFlat
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Shopware Sales-Channel API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.18
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * NewsletterRecipientTagFlat Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NewsletterRecipientTagFlat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'newsletter_recipient_tag_flat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'newsletter_recipient_id' => 'string',
'tag_id' => 'string',
'newsletter_recipient' => '\Swagger\Client\Model\NewsletterRecipientFlat',
'tag' => '\Swagger\Client\Model\TagFlat'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'newsletter_recipient_id' => 'uuid',
'tag_id' => 'uuid',
'newsletter_recipient' => null,
'tag' => null    ];

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
        'id' => 'id',
'newsletter_recipient_id' => 'newsletterRecipientId',
'tag_id' => 'tagId',
'newsletter_recipient' => 'newsletterRecipient',
'tag' => 'tag'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'newsletter_recipient_id' => 'setNewsletterRecipientId',
'tag_id' => 'setTagId',
'newsletter_recipient' => 'setNewsletterRecipient',
'tag' => 'setTag'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'newsletter_recipient_id' => 'getNewsletterRecipientId',
'tag_id' => 'getTagId',
'newsletter_recipient' => 'getNewsletterRecipient',
'tag' => 'getTag'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['newsletter_recipient_id'] = isset($data['newsletter_recipient_id']) ? $data['newsletter_recipient_id'] : null;
        $this->container['tag_id'] = isset($data['tag_id']) ? $data['tag_id'] : null;
        $this->container['newsletter_recipient'] = isset($data['newsletter_recipient']) ? $data['newsletter_recipient'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['newsletter_recipient_id'] === null) {
            $invalidProperties[] = "'newsletter_recipient_id' can't be null";
        }
        if ($this->container['tag_id'] === null) {
            $invalidProperties[] = "'tag_id' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets newsletter_recipient_id
     *
     * @return string
     */
    public function getNewsletterRecipientId()
    {
        return $this->container['newsletter_recipient_id'];
    }

    /**
     * Sets newsletter_recipient_id
     *
     * @param string $newsletter_recipient_id newsletter_recipient_id
     *
     * @return $this
     */
    public function setNewsletterRecipientId($newsletter_recipient_id)
    {
        $this->container['newsletter_recipient_id'] = $newsletter_recipient_id;

        return $this;
    }

    /**
     * Gets tag_id
     *
     * @return string
     */
    public function getTagId()
    {
        return $this->container['tag_id'];
    }

    /**
     * Sets tag_id
     *
     * @param string $tag_id tag_id
     *
     * @return $this
     */
    public function setTagId($tag_id)
    {
        $this->container['tag_id'] = $tag_id;

        return $this;
    }

    /**
     * Gets newsletter_recipient
     *
     * @return \Swagger\Client\Model\NewsletterRecipientFlat
     */
    public function getNewsletterRecipient()
    {
        return $this->container['newsletter_recipient'];
    }

    /**
     * Sets newsletter_recipient
     *
     * @param \Swagger\Client\Model\NewsletterRecipientFlat $newsletter_recipient newsletter_recipient
     *
     * @return $this
     */
    public function setNewsletterRecipient($newsletter_recipient)
    {
        $this->container['newsletter_recipient'] = $newsletter_recipient;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return \Swagger\Client\Model\TagFlat
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param \Swagger\Client\Model\TagFlat $tag tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

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
