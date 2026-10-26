<?php
/**
 * GetDraftSource200Response
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
 * GetDraftSource200Response Class Doc Comment
 *
 * @category Class
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 * @implements \ArrayAccess<string, mixed>
 */
class GetDraftSource200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'getDraftSource_200_response';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'id' => 'string',
        'state' => 'string',
        'title' => 'string',
        'source' => 'array<string,mixed>',
        'facts' => 'array<string,mixed>',
        'variable_values' => 'array<string,string>',
        'paper' => 'string',
        'roles' => 'mixed[]',
        'people' => 'mixed[]',
        'send_options' => 'array<string,mixed>'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'state' => null,
        'title' => null,
        'source' => null,
        'facts' => null,
        'variable_values' => null,
        'paper' => null,
        'roles' => null,
        'people' => null,
        'send_options' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'id' => false,
        'state' => false,
        'title' => false,
        'source' => false,
        'facts' => false,
        'variable_values' => true,
        'paper' => false,
        'roles' => false,
        'people' => false,
        'send_options' => false
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
        'id' => 'id',
        'state' => 'state',
        'title' => 'title',
        'source' => 'source',
        'facts' => 'facts',
        'variable_values' => 'variableValues',
        'paper' => 'paper',
        'roles' => 'roles',
        'people' => 'people',
        'send_options' => 'sendOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'state' => 'setState',
        'title' => 'setTitle',
        'source' => 'setSource',
        'facts' => 'setFacts',
        'variable_values' => 'setVariableValues',
        'paper' => 'setPaper',
        'roles' => 'setRoles',
        'people' => 'setPeople',
        'send_options' => 'setSendOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'state' => 'getState',
        'title' => 'getTitle',
        'source' => 'getSource',
        'facts' => 'getFacts',
        'variable_values' => 'getVariableValues',
        'paper' => 'getPaper',
        'roles' => 'getRoles',
        'people' => 'getPeople',
        'send_options' => 'getSendOptions'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('facts', $data ?? [], null);
        $this->setIfExists('variable_values', $data ?? [], null);
        $this->setIfExists('paper', $data ?? [], null);
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('people', $data ?? [], null);
        $this->setIfExists('send_options', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['facts'] === null) {
            $invalidProperties[] = "'facts' can't be null";
        }
        if ($this->container['variable_values'] === null && !$this->isNullableSetToNull('variable_values')) {
            $invalidProperties[] = "'variable_values' is required";
        }
        if ($this->container['paper'] === null) {
            $invalidProperties[] = "'paper' can't be null";
        }
        if ($this->container['roles'] === null) {
            $invalidProperties[] = "'roles' can't be null";
        }
        if ($this->container['people'] === null) {
            $invalidProperties[] = "'people' can't be null";
        }
        if ($this->container['send_options'] === null) {
            $invalidProperties[] = "'send_options' can't be null";
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
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

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
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets source
     *
     * @return array<string,mixed>
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param array<string,mixed> $source A written document: TipTap JSON `{type:\"doc\",content:[…]}`. Field tags (`fieldTag` with name, type, role, required, autofill, editable, placeholder, tooltip, locked, options, default…), merge chips (`variableChip`; `custom.<key>` chips are the template's questions), and headings with `audience: \"sender\"` (Sender only: in nothing a signer sees, signs or receives).
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets facts
     *
     * @return array<string,mixed>
     */
    public function getFacts()
    {
        return $this->container['facts'];
    }

    /**
     * Sets facts
     *
     * @param array<string,mixed> $facts facts
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
            array_push($this->openAPINullablesSetToNull, 'variable_values');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('variable_values', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['variable_values'] = $variable_values;

        return $this;
    }

    /**
     * Gets paper
     *
     * @return string
     */
    public function getPaper()
    {
        return $this->container['paper'];
    }

    /**
     * Sets paper
     *
     * @param string $paper paper
     *
     * @return self
     */
    public function setPaper($paper)
    {
        if (is_null($paper)) {
            throw new \InvalidArgumentException('non-nullable paper cannot be null');
        }
        $this->container['paper'] = $paper;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return mixed[]
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param mixed[] $roles roles
     *
     * @return self
     */
    public function setRoles($roles)
    {
        if (is_null($roles)) {
            throw new \InvalidArgumentException('non-nullable roles cannot be null');
        }
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets people
     *
     * @return mixed[]
     */
    public function getPeople()
    {
        return $this->container['people'];
    }

    /**
     * Sets people
     *
     * @param mixed[] $people people
     *
     * @return self
     */
    public function setPeople($people)
    {
        if (is_null($people)) {
            throw new \InvalidArgumentException('non-nullable people cannot be null');
        }
        $this->container['people'] = $people;

        return $this;
    }

    /**
     * Gets send_options
     *
     * @return array<string,mixed>
     */
    public function getSendOptions()
    {
        return $this->container['send_options'];
    }

    /**
     * Sets send_options
     *
     * @param array<string,mixed> $send_options send_options
     *
     * @return self
     */
    public function setSendOptions($send_options)
    {
        if (is_null($send_options)) {
            throw new \InvalidArgumentException('non-nullable send_options cannot be null');
        }
        $this->container['send_options'] = $send_options;

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


