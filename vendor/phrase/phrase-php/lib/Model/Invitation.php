<?php
/**
 * Invitation
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
 * Invitation Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Invitation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'invitation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'email' => 'string',
        'role' => 'string',
        'state' => 'string',
        'projects' => '\Phrase\Model\ProjectShort[]',
        'locales' => '\Phrase\Model\LocalePreview[]',
        'teams' => '\Phrase\Model\TeamShort[]',
        'default_locale_codes' => 'string[]',
        'permissions' => 'object',
        'locale_ids' => 'string[]',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'accepted_at' => '\DateTime',
        'spaces' => '\Phrase\Model\Space[]',
        'project_role' => '\Phrase\Model\MemberProjectDetailProjectRoles[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'email' => null,
        'role' => null,
        'state' => null,
        'projects' => null,
        'locales' => null,
        'teams' => null,
        'default_locale_codes' => null,
        'permissions' => null,
        'locale_ids' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'accepted_at' => 'date-time',
        'spaces' => null,
        'project_role' => null
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
        'id' => 'id',
        'email' => 'email',
        'role' => 'role',
        'state' => 'state',
        'projects' => 'projects',
        'locales' => 'locales',
        'teams' => 'teams',
        'default_locale_codes' => 'default_locale_codes',
        'permissions' => 'permissions',
        'locale_ids' => 'locale_ids',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'accepted_at' => 'accepted_at',
        'spaces' => 'spaces',
        'project_role' => 'project_role'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'email' => 'setEmail',
        'role' => 'setRole',
        'state' => 'setState',
        'projects' => 'setProjects',
        'locales' => 'setLocales',
        'teams' => 'setTeams',
        'default_locale_codes' => 'setDefaultLocaleCodes',
        'permissions' => 'setPermissions',
        'locale_ids' => 'setLocaleIds',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'accepted_at' => 'setAcceptedAt',
        'spaces' => 'setSpaces',
        'project_role' => 'setProjectRole'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'email' => 'getEmail',
        'role' => 'getRole',
        'state' => 'getState',
        'projects' => 'getProjects',
        'locales' => 'getLocales',
        'teams' => 'getTeams',
        'default_locale_codes' => 'getDefaultLocaleCodes',
        'permissions' => 'getPermissions',
        'locale_ids' => 'getLocaleIds',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'accepted_at' => 'getAcceptedAt',
        'spaces' => 'getSpaces',
        'project_role' => 'getProjectRole'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['projects'] = isset($data['projects']) ? $data['projects'] : null;
        $this->container['locales'] = isset($data['locales']) ? $data['locales'] : null;
        $this->container['teams'] = isset($data['teams']) ? $data['teams'] : null;
        $this->container['default_locale_codes'] = isset($data['default_locale_codes']) ? $data['default_locale_codes'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['locale_ids'] = isset($data['locale_ids']) ? $data['locale_ids'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['accepted_at'] = isset($data['accepted_at']) ? $data['accepted_at'] : null;
        $this->container['spaces'] = isset($data['spaces']) ? $data['spaces'] : null;
        $this->container['project_role'] = isset($data['project_role']) ? $data['project_role'] : null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string|null $role role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets projects
     *
     * @return \Phrase\Model\ProjectShort[]|null
     */
    public function getProjects()
    {
        return $this->container['projects'];
    }

    /**
     * Sets projects
     *
     * @param \Phrase\Model\ProjectShort[]|null $projects projects
     *
     * @return $this
     */
    public function setProjects($projects)
    {
        $this->container['projects'] = $projects;

        return $this;
    }

    /**
     * Gets locales
     *
     * @return \Phrase\Model\LocalePreview[]|null
     */
    public function getLocales()
    {
        return $this->container['locales'];
    }

    /**
     * Sets locales
     *
     * @param \Phrase\Model\LocalePreview[]|null $locales locales
     *
     * @return $this
     */
    public function setLocales($locales)
    {
        $this->container['locales'] = $locales;

        return $this;
    }

    /**
     * Gets teams
     *
     * @return \Phrase\Model\TeamShort[]|null
     */
    public function getTeams()
    {
        return $this->container['teams'];
    }

    /**
     * Sets teams
     *
     * @param \Phrase\Model\TeamShort[]|null $teams teams
     *
     * @return $this
     */
    public function setTeams($teams)
    {
        $this->container['teams'] = $teams;

        return $this;
    }

    /**
     * Gets default_locale_codes
     *
     * @return string[]|null
     */
    public function getDefaultLocaleCodes()
    {
        return $this->container['default_locale_codes'];
    }

    /**
     * Sets default_locale_codes
     *
     * @param string[]|null $default_locale_codes default_locale_codes
     *
     * @return $this
     */
    public function setDefaultLocaleCodes($default_locale_codes)
    {
        $this->container['default_locale_codes'] = $default_locale_codes;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return object|null
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param object|null $permissions permissions
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets locale_ids
     *
     * @return string[]|null
     */
    public function getLocaleIds()
    {
        return $this->container['locale_ids'];
    }

    /**
     * Sets locale_ids
     *
     * @param string[]|null $locale_ids locale_ids
     *
     * @return $this
     */
    public function setLocaleIds($locale_ids)
    {
        $this->container['locale_ids'] = $locale_ids;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets accepted_at
     *
     * @return \DateTime|null
     */
    public function getAcceptedAt()
    {
        return $this->container['accepted_at'];
    }

    /**
     * Sets accepted_at
     *
     * @param \DateTime|null $accepted_at accepted_at
     *
     * @return $this
     */
    public function setAcceptedAt($accepted_at)
    {
        $this->container['accepted_at'] = $accepted_at;

        return $this;
    }

    /**
     * Gets spaces
     *
     * @return \Phrase\Model\Space[]|null
     */
    public function getSpaces()
    {
        return $this->container['spaces'];
    }

    /**
     * Sets spaces
     *
     * @param \Phrase\Model\Space[]|null $spaces spaces
     *
     * @return $this
     */
    public function setSpaces($spaces)
    {
        $this->container['spaces'] = $spaces;

        return $this;
    }

    /**
     * Gets project_role
     *
     * @return \Phrase\Model\MemberProjectDetailProjectRoles[]|null
     */
    public function getProjectRole()
    {
        return $this->container['project_role'];
    }

    /**
     * Sets project_role
     *
     * @param \Phrase\Model\MemberProjectDetailProjectRoles[]|null $project_role project_role
     *
     * @return $this
     */
    public function setProjectRole($project_role)
    {
        $this->container['project_role'] = $project_role;

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

