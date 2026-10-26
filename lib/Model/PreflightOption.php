<?php
/**
 * PreflightOption
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
 * PreflightOption Class Doc Comment
 *
 * @category Class
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 * @implements \ArrayAccess<string, mixed>
 */
class PreflightOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PreflightOption';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'key' => 'string',
        'label' => 'string',
        'price_minor' => 'int',
        'per' => 'string',
        'founders' => 'bool',
        'unlocks' => 'string[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'key' => null,
        'label' => null,
        'price_minor' => null,
        'per' => null,
        'founders' => null,
        'unlocks' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'key' => false,
        'label' => false,
        'price_minor' => true,
        'per' => true,
        'founders' => false,
        'unlocks' => false
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
        'key' => 'key',
        'label' => 'label',
        'price_minor' => 'priceMinor',
        'per' => 'per',
        'founders' => 'founders',
        'unlocks' => 'unlocks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'key' => 'setKey',
        'label' => 'setLabel',
        'price_minor' => 'setPriceMinor',
        'per' => 'setPer',
        'founders' => 'setFounders',
        'unlocks' => 'setUnlocks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'key' => 'getKey',
        'label' => 'getLabel',
        'price_minor' => 'getPriceMinor',
        'per' => 'getPer',
        'founders' => 'getFounders',
        'unlocks' => 'getUnlocks'
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

    public const KEY_PAYG = 'payg';
    public const KEY_PRO = 'pro';
    public const KEY_LIFETIME = 'lifetime';
    public const KEY_RAISE_BUDGET = 'raise_budget';
    public const KEY_WAIT = 'wait';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKeyAllowableValues()
    {
        return [
            self::KEY_PAYG,
            self::KEY_PRO,
            self::KEY_LIFETIME,
            self::KEY_RAISE_BUDGET,
            self::KEY_WAIT,
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('price_minor', $data ?? [], null);
        $this->setIfExists('per', $data ?? [], null);
        $this->setIfExists('founders', $data ?? [], null);
        $this->setIfExists('unlocks', $data ?? [], null);
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

        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        $allowedValues = $this->getKeyAllowableValues();
        if (!is_null($this->container['key']) && !in_array($this->container['key'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'key', must be one of '%s'",
                $this->container['key'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['price_minor'] === null && !$this->isNullableSetToNull('price_minor')) {
            $invalidProperties[] = "'price_minor' is required";
        }
        if ($this->container['per'] === null && !$this->isNullableSetToNull('per')) {
            $invalidProperties[] = "'per' is required";
        }
        if ($this->container['unlocks'] === null) {
            $invalidProperties[] = "'unlocks' can't be null";
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
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key key
     *
     * @return self
     */
    public function setKey($key)
    {
        if (is_null($key)) {
            throw new \InvalidArgumentException('non-nullable key cannot be null');
        }
        $allowedValues = $this->getKeyAllowableValues();
        if (!in_array($key, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'key', must be one of '%s'",
                    $key,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets price_minor
     *
     * @return int|null
     */
    public function getPriceMinor()
    {
        return $this->container['price_minor'];
    }

    /**
     * Sets price_minor
     *
     * @param int|null $price_minor Whole cents; null when the option has no price of its own (raising the budget).
     *
     * @return self
     */
    public function setPriceMinor($price_minor)
    {
        if (is_null($price_minor)) {
            array_push($this->openAPINullablesSetToNull, 'price_minor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('price_minor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['price_minor'] = $price_minor;

        return $this;
    }

    /**
     * Gets per
     *
     * @return string|null
     */
    public function getPer()
    {
        return $this->container['per'];
    }

    /**
     * Sets per
     *
     * @param string|null $per `team member a month`, `month`, `once` or null.
     *
     * @return self
     */
    public function setPer($per)
    {
        if (is_null($per)) {
            array_push($this->openAPINullablesSetToNull, 'per');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('per', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['per'] = $per;

        return $this;
    }

    /**
     * Gets founders
     *
     * @return bool|null
     * @deprecated
     */
    public function getFounders()
    {
        return $this->container['founders'];
    }

    /**
     * Sets founders
     *
     * @param bool|null $founders Deprecated. Always false: there is one Pro price. Kept so existing clients keep working.
     *
     * @return self
     * @deprecated
     */
    public function setFounders($founders)
    {
        if (is_null($founders)) {
            throw new \InvalidArgumentException('non-nullable founders cannot be null');
        }
        $this->container['founders'] = $founders;

        return $this;
    }

    /**
     * Gets unlocks
     *
     * @return string[]
     */
    public function getUnlocks()
    {
        return $this->container['unlocks'];
    }

    /**
     * Sets unlocks
     *
     * @param string[] $unlocks unlocks
     *
     * @return self
     */
    public function setUnlocks($unlocks)
    {
        if (is_null($unlocks)) {
            throw new \InvalidArgumentException('non-nullable unlocks cannot be null');
        }
        $this->container['unlocks'] = $unlocks;

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


