<?php
/**
 * PreflightAnswerCost
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
 * PreflightAnswerCost Class Doc Comment
 *
 * @category Class
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 * @implements \ArrayAccess<string, mixed>
 */
class PreflightAnswerCost implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PreflightAnswer_cost';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'minor' => 'int',
        'currency' => 'string',
        'units' => 'float',
        'per_unit_minor' => 'float',
        'per' => 'string',
        'prorated' => 'bool',
        'fee_percent' => 'float'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'minor' => null,
        'currency' => null,
        'units' => null,
        'per_unit_minor' => null,
        'per' => null,
        'prorated' => null,
        'fee_percent' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'minor' => false,
        'currency' => false,
        'units' => false,
        'per_unit_minor' => true,
        'per' => true,
        'prorated' => false,
        'fee_percent' => false
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
        'minor' => 'minor',
        'currency' => 'currency',
        'units' => 'units',
        'per_unit_minor' => 'perUnitMinor',
        'per' => 'per',
        'prorated' => 'prorated',
        'fee_percent' => 'feePercent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'minor' => 'setMinor',
        'currency' => 'setCurrency',
        'units' => 'setUnits',
        'per_unit_minor' => 'setPerUnitMinor',
        'per' => 'setPer',
        'prorated' => 'setProrated',
        'fee_percent' => 'setFeePercent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'minor' => 'getMinor',
        'currency' => 'getCurrency',
        'units' => 'getUnits',
        'per_unit_minor' => 'getPerUnitMinor',
        'per' => 'getPer',
        'prorated' => 'getProrated',
        'fee_percent' => 'getFeePercent'
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
        $this->setIfExists('minor', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('units', $data ?? [], null);
        $this->setIfExists('per_unit_minor', $data ?? [], null);
        $this->setIfExists('per', $data ?? [], null);
        $this->setIfExists('prorated', $data ?? [], null);
        $this->setIfExists('fee_percent', $data ?? [], null);
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

        if ($this->container['minor'] === null) {
            $invalidProperties[] = "'minor' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['units'] === null) {
            $invalidProperties[] = "'units' can't be null";
        }
        if ($this->container['per_unit_minor'] === null && !$this->isNullableSetToNull('per_unit_minor')) {
            $invalidProperties[] = "'per_unit_minor' is required";
        }
        if ($this->container['per'] === null && !$this->isNullableSetToNull('per')) {
            $invalidProperties[] = "'per' is required";
        }
        if ($this->container['prorated'] === null) {
            $invalidProperties[] = "'prorated' can't be null";
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
     * Gets minor
     *
     * @return int
     */
    public function getMinor()
    {
        return $this->container['minor'];
    }

    /**
     * Sets minor
     *
     * @param int $minor minor
     *
     * @return self
     */
    public function setMinor($minor)
    {
        if (is_null($minor)) {
            throw new \InvalidArgumentException('non-nullable minor cannot be null');
        }
        $this->container['minor'] = $minor;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets units
     *
     * @return float
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param float $units units
     *
     * @return self
     */
    public function setUnits($units)
    {
        if (is_null($units)) {
            throw new \InvalidArgumentException('non-nullable units cannot be null');
        }
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets per_unit_minor
     *
     * @return float|null
     */
    public function getPerUnitMinor()
    {
        return $this->container['per_unit_minor'];
    }

    /**
     * Sets per_unit_minor
     *
     * @param float|null $per_unit_minor per_unit_minor
     *
     * @return self
     */
    public function setPerUnitMinor($per_unit_minor)
    {
        if (is_null($per_unit_minor)) {
            array_push($this->openAPINullablesSetToNull, 'per_unit_minor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('per_unit_minor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['per_unit_minor'] = $per_unit_minor;

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
     * @param string|null $per per
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
     * Gets prorated
     *
     * @return bool
     */
    public function getProrated()
    {
        return $this->container['prorated'];
    }

    /**
     * Sets prorated
     *
     * @param bool $prorated prorated
     *
     * @return self
     */
    public function setProrated($prorated)
    {
        if (is_null($prorated)) {
            throw new \InvalidArgumentException('non-nullable prorated cannot be null');
        }
        $this->container['prorated'] = $prorated;

        return $this;
    }

    /**
     * Gets fee_percent
     *
     * @return float|null
     */
    public function getFeePercent()
    {
        return $this->container['fee_percent'];
    }

    /**
     * Sets fee_percent
     *
     * @param float|null $fee_percent fee_percent
     *
     * @return self
     */
    public function setFeePercent($fee_percent)
    {
        if (is_null($fee_percent)) {
            throw new \InvalidArgumentException('non-nullable fee_percent cannot be null');
        }
        $this->container['fee_percent'] = $fee_percent;

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


