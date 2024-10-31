<?php
/**
 * TagWithStats1Statistics
 *
 * PHP version 5
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Phrase Strings API Reference
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: support@phrase.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Phrase\Model;

use \ArrayAccess;
use \Phrase\ObjectSerializer;

/**
 * TagWithStats1Statistics Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TagWithStats1Statistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'tag_with_stats_1_statistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'keys_total_count' => 'int',
        'translations_completed_count' => 'int',
        'translations_unverified_count' => 'int',
        'keys_untranslated_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'keys_total_count' => null,
        'translations_completed_count' => null,
        'translations_unverified_count' => null,
        'keys_untranslated_count' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'keys_total_count' => 'keys_total_count',
        'translations_completed_count' => 'translations_completed_count',
        'translations_unverified_count' => 'translations_unverified_count',
        'keys_untranslated_count' => 'keys_untranslated_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'keys_total_count' => 'setKeysTotalCount',
        'translations_completed_count' => 'setTranslationsCompletedCount',
        'translations_unverified_count' => 'setTranslationsUnverifiedCount',
        'keys_untranslated_count' => 'setKeysUntranslatedCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'keys_total_count' => 'getKeysTotalCount',
        'translations_completed_count' => 'getTranslationsCompletedCount',
        'translations_unverified_count' => 'getTranslationsUnverifiedCount',
        'keys_untranslated_count' => 'getKeysUntranslatedCount'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['keys_total_count'] = isset($data['keys_total_count']) ? $data['keys_total_count'] : null;
        $this->container['translations_completed_count'] = isset($data['translations_completed_count']) ? $data['translations_completed_count'] : null;
        $this->container['translations_unverified_count'] = isset($data['translations_unverified_count']) ? $data['translations_unverified_count'] : null;
        $this->container['keys_untranslated_count'] = isset($data['keys_untranslated_count']) ? $data['keys_untranslated_count'] : null;
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
     * Gets keys_total_count
     *
     * @return int|null
     */
    public function getKeysTotalCount()
    {
        return $this->container['keys_total_count'];
    }

    /**
     * Sets keys_total_count
     *
     * @param int|null $keys_total_count keys_total_count
     *
     * @return $this
     */
    public function setKeysTotalCount($keys_total_count)
    {
        $this->container['keys_total_count'] = $keys_total_count;

        return $this;
    }

    /**
     * Gets translations_completed_count
     *
     * @return int|null
     */
    public function getTranslationsCompletedCount()
    {
        return $this->container['translations_completed_count'];
    }

    /**
     * Sets translations_completed_count
     *
     * @param int|null $translations_completed_count translations_completed_count
     *
     * @return $this
     */
    public function setTranslationsCompletedCount($translations_completed_count)
    {
        $this->container['translations_completed_count'] = $translations_completed_count;

        return $this;
    }

    /**
     * Gets translations_unverified_count
     *
     * @return int|null
     */
    public function getTranslationsUnverifiedCount()
    {
        return $this->container['translations_unverified_count'];
    }

    /**
     * Sets translations_unverified_count
     *
     * @param int|null $translations_unverified_count translations_unverified_count
     *
     * @return $this
     */
    public function setTranslationsUnverifiedCount($translations_unverified_count)
    {
        $this->container['translations_unverified_count'] = $translations_unverified_count;

        return $this;
    }

    /**
     * Gets keys_untranslated_count
     *
     * @return int|null
     */
    public function getKeysUntranslatedCount()
    {
        return $this->container['keys_untranslated_count'];
    }

    /**
     * Sets keys_untranslated_count
     *
     * @param int|null $keys_untranslated_count keys_untranslated_count
     *
     * @return $this
     */
    public function setKeysUntranslatedCount($keys_untranslated_count)
    {
        $this->container['keys_untranslated_count'] = $keys_untranslated_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

