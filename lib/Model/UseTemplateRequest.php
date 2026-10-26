<?php
/**
 * UseTemplateRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 */

/**
 * Docustay API 2026-10-07
 * https://docustay.app. MIT licence.
 */
/**
 * NOTE: This class is generated from the Docustay OpenAPI file.
 * https://docustay.app
 * Do not edit the class manually.
 */

namespace Docustay\Model;

use \ArrayAccess;
use \Docustay\ObjectSerializer;

/**
 * UseTemplateRequest Class Doc Comment
 *
 * @category Class
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 * @implements \ArrayAccess<string, mixed>
 */
class UseTemplateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'useTemplate_request';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'email' => '\Docustay\Model\EmailChoice',
        'metadata' => 'array<string,string>',
        'external_id' => 'string',
        'title' => 'string',
        'people' => '\Docustay\Model\Person[]',
        'variable_values' => 'array<string,string>',
        'facts' => 'array<string,string>',
        'send' => '\Docustay\Model\SendChoices',
        'send_now' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'email' => null,
        'metadata' => null,
        'external_id' => null,
        'title' => null,
        'people' => null,
        'variable_values' => null,
        'facts' => null,
        'send' => null,
        'send_now' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'email' => false,
        'metadata' => false,
        'external_id' => false,
        'title' => false,
        'people' => false,
        'variable_values' => false,
        'facts' => false,
        'send' => false,
        'send_now' => false
    ];

    /**
     * If a nullable field gets set to null, insert it here
     *
     * @var boolean[]
     */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'email' => 'email',
        'metadata' => 'metadata',
        'external_id' => 'externalId',
        'title' => 'title',
        'people' => 'people',
        'variable_values' => 'variableValues',
        'facts' => 'facts',
        'send' => 'send',
        'send_now' => 'sendNow'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'metadata' => 'setMetadata',
        'external_id' => 'setExternalId',
        'title' => 'setTitle',
        'people' => 'setPeople',
        'variable_values' => 'setVariableValues',
        'facts' => 'setFacts',
        'send' => 'setSend',
        'send_now' => 'setSendNow'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'metadata' => 'getMetadata',
        'external_id' => 'getExternalId',
        'title' => 'getTitle',
        'people' => 'getPeople',
        'variable_values' => 'getVariableValues',
        'facts' => 'getFacts',
        'send' => 'getSend',
        'send_now' => 'getSendNow'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('people', $data ?? [], null);
        $this->setIfExists('variable_values', $data ?? [], null);
        $this->setIfExists('facts', $data ?? [], null);
        $this->setIfExists('send', $data ?? [], null);
        $this->setIfExists('send_now', $data ?? [], null);
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array
     *
     * @param string $variableName
     * @param array  $fields
     * @param mixed  $defaultValue
     */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) > 200)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 200)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['people'] === null) {
            $invalidProperties[] = "'people' can't be null";
        }
        if ((count($this->container['people']) > 30)) {
            $invalidProperties[] = "invalid value for 'people', number of items must be less than or equal to 30.";
        }

        if ((count($this->container['people']) < 1)) {
            $invalidProperties[] = "invalid value for 'people', number of items must be greater than or equal to 1.";
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
     * Gets email
     *
     * @return \Docustay\Model\EmailChoice|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param \Docustay\Model\EmailChoice|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,string>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string>|null $metadata Your own key-value text (up to 20 keys; keys 1–40 letters, digits, dot, dash or underscore; values up to 500 characters). Returned in every response and every webhook for this document; never shown to a signer.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id Your own id for this thing, so you can match it to your records. Filter lists with `externalId=`.
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        if ((mb_strlen($external_id) > 200)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling UseTemplateRequest., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($external_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling UseTemplateRequest., must be bigger than or equal to 1.');
        }

        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        if ((mb_strlen($title) > 200)) {
            throw new \InvalidArgumentException('invalid length for $title when calling UseTemplateRequest., must be smaller than or equal to 200.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets people
     *
     * @return \Docustay\Model\Person[]
     */
    public function getPeople()
    {
        return $this->container['people'];
    }

    /**
     * Sets people
     *
     * @param \Docustay\Model\Person[] $people people
     *
     * @return self
     */
    public function setPeople($people)
    {
        if (is_null($people)) {
            throw new \InvalidArgumentException('non-nullable people cannot be null');
        }
        if ((count($people) > 30)) {
            throw new \InvalidArgumentException('invalid value for $people when calling UseTemplateRequest., number of items must be less than or equal to 30.');
        }
        if ((count($people) < 1)) {
            throw new \InvalidArgumentException('invalid length for $people when calling UseTemplateRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['people'] = $people;

        return $this;
    }

    /**
     * Gets variable_values
     *
     * @return array<string,string>|null
     */
    public function getVariableValues()
    {
        return $this->container['variable_values'];
    }

    /**
     * Sets variable_values
     *
     * @param array<string,string>|null $variable_values variable_values
     *
     * @return self
     */
    public function setVariableValues($variable_values)
    {
        if (is_null($variable_values)) {
            throw new \InvalidArgumentException('non-nullable variable_values cannot be null');
        }
        $this->container['variable_values'] = $variable_values;

        return $this;
    }

    /**
     * Gets facts
     *
     * @return array<string,string>|null
     */
    public function getFacts()
    {
        return $this->container['facts'];
    }

    /**
     * Sets facts
     *
     * @param array<string,string>|null $facts facts
     *
     * @return self
     */
    public function setFacts($facts)
    {
        if (is_null($facts)) {
            throw new \InvalidArgumentException('non-nullable facts cannot be null');
        }
        $this->container['facts'] = $facts;

        return $this;
    }

    /**
     * Gets send
     *
     * @return \Docustay\Model\SendChoices|null
     */
    public function getSend()
    {
        return $this->container['send'];
    }

    /**
     * Sets send
     *
     * @param \Docustay\Model\SendChoices|null $send send
     *
     * @return self
     */
    public function setSend($send)
    {
        if (is_null($send)) {
            throw new \InvalidArgumentException('non-nullable send cannot be null');
        }
        $this->container['send'] = $send;

        return $this;
    }

    /**
     * Gets send_now
     *
     * @return bool|null
     */
    public function getSendNow()
    {
        return $this->container['send_now'];
    }

    /**
     * Sets send_now
     *
     * @param bool|null $send_now send_now
     *
     * @return self
     */
    public function setSendNow($send_now)
    {
        if (is_null($send_now)) {
            throw new \InvalidArgumentException('non-nullable send_now cannot be null');
        }
        $this->container['send_now'] = $send_now;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer|string $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer|string $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet(mixed $offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
     * @param integer|string $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


