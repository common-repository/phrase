<?php
/**
 * StyleguideDetails1
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
 * StyleguideDetails1 Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StyleguideDetails1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'styleguide_details_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'public_url' => 'string',
        'audience' => 'string',
        'target_audience' => 'string',
        'grammatical_person' => 'string',
        'vocabulary_type' => 'string',
        'business' => 'string',
        'company_branding' => 'string',
        'formatting' => 'string',
        'glossary_terms' => 'string',
        'grammar_consistency' => 'string',
        'literal_translation' => 'string',
        'overall_tone' => 'string',
        'samples' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'public_url' => null,
        'audience' => null,
        'target_audience' => null,
        'grammatical_person' => null,
        'vocabulary_type' => null,
        'business' => null,
        'company_branding' => null,
        'formatting' => null,
        'glossary_terms' => null,
        'grammar_consistency' => null,
        'literal_translation' => null,
        'overall_tone' => null,
        'samples' => null
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
        'public_url' => 'public_url',
        'audience' => 'audience',
        'target_audience' => 'target_audience',
        'grammatical_person' => 'grammatical_person',
        'vocabulary_type' => 'vocabulary_type',
        'business' => 'business',
        'company_branding' => 'company_branding',
        'formatting' => 'formatting',
        'glossary_terms' => 'glossary_terms',
        'grammar_consistency' => 'grammar_consistency',
        'literal_translation' => 'literal_translation',
        'overall_tone' => 'overall_tone',
        'samples' => 'samples'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'public_url' => 'setPublicUrl',
        'audience' => 'setAudience',
        'target_audience' => 'setTargetAudience',
        'grammatical_person' => 'setGrammaticalPerson',
        'vocabulary_type' => 'setVocabularyType',
        'business' => 'setBusiness',
        'company_branding' => 'setCompanyBranding',
        'formatting' => 'setFormatting',
        'glossary_terms' => 'setGlossaryTerms',
        'grammar_consistency' => 'setGrammarConsistency',
        'literal_translation' => 'setLiteralTranslation',
        'overall_tone' => 'setOverallTone',
        'samples' => 'setSamples'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'public_url' => 'getPublicUrl',
        'audience' => 'getAudience',
        'target_audience' => 'getTargetAudience',
        'grammatical_person' => 'getGrammaticalPerson',
        'vocabulary_type' => 'getVocabularyType',
        'business' => 'getBusiness',
        'company_branding' => 'getCompanyBranding',
        'formatting' => 'getFormatting',
        'glossary_terms' => 'getGlossaryTerms',
        'grammar_consistency' => 'getGrammarConsistency',
        'literal_translation' => 'getLiteralTranslation',
        'overall_tone' => 'getOverallTone',
        'samples' => 'getSamples'
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
        $this->container['public_url'] = isset($data['public_url']) ? $data['public_url'] : null;
        $this->container['audience'] = isset($data['audience']) ? $data['audience'] : null;
        $this->container['target_audience'] = isset($data['target_audience']) ? $data['target_audience'] : null;
        $this->container['grammatical_person'] = isset($data['grammatical_person']) ? $data['grammatical_person'] : null;
        $this->container['vocabulary_type'] = isset($data['vocabulary_type']) ? $data['vocabulary_type'] : null;
        $this->container['business'] = isset($data['business']) ? $data['business'] : null;
        $this->container['company_branding'] = isset($data['company_branding']) ? $data['company_branding'] : null;
        $this->container['formatting'] = isset($data['formatting']) ? $data['formatting'] : null;
        $this->container['glossary_terms'] = isset($data['glossary_terms']) ? $data['glossary_terms'] : null;
        $this->container['grammar_consistency'] = isset($data['grammar_consistency']) ? $data['grammar_consistency'] : null;
        $this->container['literal_translation'] = isset($data['literal_translation']) ? $data['literal_translation'] : null;
        $this->container['overall_tone'] = isset($data['overall_tone']) ? $data['overall_tone'] : null;
        $this->container['samples'] = isset($data['samples']) ? $data['samples'] : null;
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
     * Gets public_url
     *
     * @return string|null
     */
    public function getPublicUrl()
    {
        return $this->container['public_url'];
    }

    /**
     * Sets public_url
     *
     * @param string|null $public_url public_url
     *
     * @return $this
     */
    public function setPublicUrl($public_url)
    {
        $this->container['public_url'] = $public_url;

        return $this;
    }

    /**
     * Gets audience
     *
     * @return string|null
     */
    public function getAudience()
    {
        return $this->container['audience'];
    }

    /**
     * Sets audience
     *
     * @param string|null $audience audience
     *
     * @return $this
     */
    public function setAudience($audience)
    {
        $this->container['audience'] = $audience;

        return $this;
    }

    /**
     * Gets target_audience
     *
     * @return string|null
     */
    public function getTargetAudience()
    {
        return $this->container['target_audience'];
    }

    /**
     * Sets target_audience
     *
     * @param string|null $target_audience target_audience
     *
     * @return $this
     */
    public function setTargetAudience($target_audience)
    {
        $this->container['target_audience'] = $target_audience;

        return $this;
    }

    /**
     * Gets grammatical_person
     *
     * @return string|null
     */
    public function getGrammaticalPerson()
    {
        return $this->container['grammatical_person'];
    }

    /**
     * Sets grammatical_person
     *
     * @param string|null $grammatical_person grammatical_person
     *
     * @return $this
     */
    public function setGrammaticalPerson($grammatical_person)
    {
        $this->container['grammatical_person'] = $grammatical_person;

        return $this;
    }

    /**
     * Gets vocabulary_type
     *
     * @return string|null
     */
    public function getVocabularyType()
    {
        return $this->container['vocabulary_type'];
    }

    /**
     * Sets vocabulary_type
     *
     * @param string|null $vocabulary_type vocabulary_type
     *
     * @return $this
     */
    public function setVocabularyType($vocabulary_type)
    {
        $this->container['vocabulary_type'] = $vocabulary_type;

        return $this;
    }

    /**
     * Gets business
     *
     * @return string|null
     */
    public function getBusiness()
    {
        return $this->container['business'];
    }

    /**
     * Sets business
     *
     * @param string|null $business business
     *
     * @return $this
     */
    public function setBusiness($business)
    {
        $this->container['business'] = $business;

        return $this;
    }

    /**
     * Gets company_branding
     *
     * @return string|null
     */
    public function getCompanyBranding()
    {
        return $this->container['company_branding'];
    }

    /**
     * Sets company_branding
     *
     * @param string|null $company_branding company_branding
     *
     * @return $this
     */
    public function setCompanyBranding($company_branding)
    {
        $this->container['company_branding'] = $company_branding;

        return $this;
    }

    /**
     * Gets formatting
     *
     * @return string|null
     */
    public function getFormatting()
    {
        return $this->container['formatting'];
    }

    /**
     * Sets formatting
     *
     * @param string|null $formatting formatting
     *
     * @return $this
     */
    public function setFormatting($formatting)
    {
        $this->container['formatting'] = $formatting;

        return $this;
    }

    /**
     * Gets glossary_terms
     *
     * @return string|null
     */
    public function getGlossaryTerms()
    {
        return $this->container['glossary_terms'];
    }

    /**
     * Sets glossary_terms
     *
     * @param string|null $glossary_terms glossary_terms
     *
     * @return $this
     */
    public function setGlossaryTerms($glossary_terms)
    {
        $this->container['glossary_terms'] = $glossary_terms;

        return $this;
    }

    /**
     * Gets grammar_consistency
     *
     * @return string|null
     */
    public function getGrammarConsistency()
    {
        return $this->container['grammar_consistency'];
    }

    /**
     * Sets grammar_consistency
     *
     * @param string|null $grammar_consistency grammar_consistency
     *
     * @return $this
     */
    public function setGrammarConsistency($grammar_consistency)
    {
        $this->container['grammar_consistency'] = $grammar_consistency;

        return $this;
    }

    /**
     * Gets literal_translation
     *
     * @return string|null
     */
    public function getLiteralTranslation()
    {
        return $this->container['literal_translation'];
    }

    /**
     * Sets literal_translation
     *
     * @param string|null $literal_translation literal_translation
     *
     * @return $this
     */
    public function setLiteralTranslation($literal_translation)
    {
        $this->container['literal_translation'] = $literal_translation;

        return $this;
    }

    /**
     * Gets overall_tone
     *
     * @return string|null
     */
    public function getOverallTone()
    {
        return $this->container['overall_tone'];
    }

    /**
     * Sets overall_tone
     *
     * @param string|null $overall_tone overall_tone
     *
     * @return $this
     */
    public function setOverallTone($overall_tone)
    {
        $this->container['overall_tone'] = $overall_tone;

        return $this;
    }

    /**
     * Gets samples
     *
     * @return string|null
     */
    public function getSamples()
    {
        return $this->container['samples'];
    }

    /**
     * Sets samples
     *
     * @param string|null $samples samples
     *
     * @return $this
     */
    public function setSamples($samples)
    {
        $this->container['samples'] = $samples;

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


