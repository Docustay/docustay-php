<?php
/**
 * CheckDocumentRequest
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
 * CheckDocumentRequest Class Doc Comment
 *
 * @category Class
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 * @implements \ArrayAccess<string, mixed>
 */
class CheckDocumentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'checkDocument_request';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'source' => 'array<string,mixed>',
        'facts' => 'array<string,string>',
        'people' => '\Docustay\Model\Person[]',
        'variable_values' => 'array<string,string>',
        'require_signature' => 'bool',
        'for_template' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'source' => null,
        'facts' => null,
        'people' => null,
        'variable_values' => null,
        'require_signature' => null,
        'for_template' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'source' => false,
        'facts' => false,
        'people' => false,
        'variable_values' => false,
        'require_signature' => false,
        'for_template' => false
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
        'source' => 'source',
        'facts' => 'facts',
        'people' => 'people',
        'variable_values' => 'variableValues',
        'require_signature' => 'requireSignature',
        'for_template' => 'forTemplate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'source' => 'setSource',
        'facts' => 'setFacts',
        'people' => 'setPeople',
        'variable_values' => 'setVariableValues',
        'require_signature' => 'setRequireSignature',
        'for_template' => 'setForTemplate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'source' => 'getSource',
        'facts' => 'getFacts',
        'people' => 'getPeople',
        'variable_values' => 'getVariableValues',
        'require_signature' => 'getRequireSignature',
        'for_template' => 'getForTemplate'
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
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('facts', $data ?? [], null);
        $this->setIfExists('people', $data ?? [], null);
        $this->setIfExists('variable_values', $data ?? [], null);
        $this->setIfExists('require_signature', $data ?? [], null);
        $this->setIfExists('for_template', $data ?? [], null);
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

        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if (!is_null($this->container['people']) && (count($this->container['people']) > 30)) {
            $invalidProperties[] = "invalid value for 'people', number of items must be less than or equal to 30.";
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
     * Gets people
     *
     * @return \Docustay\Model\Person[]|null
     */
    public function getPeople()
    {
        return $this->container['people'];
    }

    /**
     * Sets people
     *
     * @param \Docustay\Model\Person[]|null $people With people, each person's own merge text is known, as when the document is made.
     *
     * @return self
     */
    public function setPeople($people)
    {
        if (is_null($people)) {
            throw new \InvalidArgumentException('non-nullable people cannot be null');
        }
        if ((count($people) > 30)) {
            throw new \InvalidArgumentException('invalid value for $people when calling CheckDocumentRequest., number of items must be less than or equal to 30.');
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
     * Gets require_signature
     *
     * @return bool|null
     */
    public function getRequireSignature()
    {
        return $this->container['require_signature'];
    }

    /**
     * Sets require_signature
     *
     * @param bool|null $require_signature require_signature
     *
     * @return self
     */
    public function setRequireSignature($require_signature)
    {
        if (is_null($require_signature)) {
            throw new \InvalidArgumentException('non-nullable require_signature cannot be null');
        }
        $this->container['require_signature'] = $require_signature;

        return $this;
    }

    /**
     * Gets for_template
     *
     * @return bool|null
     */
    public function getForTemplate()
    {
        return $this->container['for_template'];
    }

    /**
     * Sets for_template
     *
     * @param bool|null $for_template for_template
     *
     * @return self
     */
    public function setForTemplate($for_template)
    {
        if (is_null($for_template)) {
            throw new \InvalidArgumentException('non-nullable for_template cannot be null');
        }
        $this->container['for_template'] = $for_template;

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


