<?php
/**
 * TranslationUpdateParameters
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
 * TranslationUpdateParameters Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TranslationUpdateParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'translation_update_parameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'branch' => 'string',
        'content' => 'string',
        'plural_suffix' => 'string',
        'unverified' => 'bool',
        'excluded' => 'bool',
        'autotranslate' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'branch' => null,
        'content' => null,
        'plural_suffix' => null,
        'unverified' => null,
        'excluded' => null,
        'autotranslate' => null
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
        'branch' => 'branch',
        'content' => 'content',
        'plural_suffix' => 'plural_suffix',
        'unverified' => 'unverified',
        'excluded' => 'excluded',
        'autotranslate' => 'autotranslate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'branch' => 'setBranch',
        'content' => 'setContent',
        'plural_suffix' => 'setPluralSuffix',
        'unverified' => 'setUnverified',
        'excluded' => 'setExcluded',
        'autotranslate' => 'setAutotranslate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'branch' => 'getBranch',
        'content' => 'getContent',
        'plural_suffix' => 'getPluralSuffix',
        'unverified' => 'getUnverified',
        'excluded' => 'getExcluded',
        'autotranslate' => 'getAutotranslate'
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
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['plural_suffix'] = isset($data['plural_suffix']) ? $data['plural_suffix'] : null;
        $this->container['unverified'] = isset($data['unverified']) ? $data['unverified'] : null;
        $this->container['excluded'] = isset($data['excluded']) ? $data['excluded'] : null;
        $this->container['autotranslate'] = isset($data['autotranslate']) ? $data['autotranslate'] : null;
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
     * Gets branch
     *
     * @return string|null
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param string|null $branch specify the branch to use
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content Translation content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets plural_suffix
     *
     * @return string|null
     */
    public function getPluralSuffix()
    {
        return $this->container['plural_suffix'];
    }

    /**
     * Sets plural_suffix
     *
     * @param string|null $plural_suffix Plural suffix. Can be one of: zero, one, two, few, many, other. Must be specified if the key associated to the translation is pluralized.
     *
     * @return $this
     */
    public function setPluralSuffix($plural_suffix)
    {
        $this->container['plural_suffix'] = $plural_suffix;

        return $this;
    }

    /**
     * Gets unverified
     *
     * @return bool|null
     */
    public function getUnverified()
    {
        return $this->container['unverified'];
    }

    /**
     * Sets unverified
     *
     * @param bool|null $unverified Indicates whether translation is unverified. Part of the <a href=\"https://support.phrase.com/hc/en-us/articles/5784094755484\" target=\"_blank\">Advanced Workflows</a> feature.
     *
     * @return $this
     */
    public function setUnverified($unverified)
    {
        $this->container['unverified'] = $unverified;

        return $this;
    }

    /**
     * Gets excluded
     *
     * @return bool|null
     */
    public function getExcluded()
    {
        return $this->container['excluded'];
    }

    /**
     * Sets excluded
     *
     * @param bool|null $excluded Indicates whether translation is excluded.
     *
     * @return $this
     */
    public function setExcluded($excluded)
    {
        $this->container['excluded'] = $excluded;

        return $this;
    }

    /**
     * Gets autotranslate
     *
     * @return bool|null
     */
    public function getAutotranslate()
    {
        return $this->container['autotranslate'];
    }

    /**
     * Sets autotranslate
     *
     * @param bool|null $autotranslate Indicates whether the translation should be auto-translated. Responses with status 422 if provided for translation within a non-default locale or the project does not have the Autopilot feature enabled.
     *
     * @return $this
     */
    public function setAutotranslate($autotranslate)
    {
        $this->container['autotranslate'] = $autotranslate;

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


