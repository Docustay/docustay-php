<?php
/**
 * AiUsage
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
 * AiUsage Class Doc Comment
 *
 * @category Class
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 * @implements \ArrayAccess<string, mixed>
 */
class AiUsage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'AiUsage';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'mode' => 'string',
        'plan' => 'string',
        'allowance' => 'float',
        'used' => 'float',
        'remaining' => 'float',
        'percent' => 'float',
        'state' => 'string',
        'resets_at' => 'string',
        'by_feature' => 'array<string,\Docustay\Model\AiUsageByFeatureValue>',
        'paused' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'mode' => null,
        'plan' => null,
        'allowance' => null,
        'used' => null,
        'remaining' => null,
        'percent' => null,
        'state' => null,
        'resets_at' => null,
        'by_feature' => null,
        'paused' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'mode' => false,
        'plan' => true,
        'allowance' => true,
        'used' => true,
        'remaining' => true,
        'percent' => true,
        'state' => false,
        'resets_at' => true,
        'by_feature' => false,
        'paused' => false
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
        'mode' => 'mode',
        'plan' => 'plan',
        'allowance' => 'allowance',
        'used' => 'used',
        'remaining' => 'remaining',
        'percent' => 'percent',
        'state' => 'state',
        'resets_at' => 'resetsAt',
        'by_feature' => 'byFeature',
        'paused' => 'paused'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mode' => 'setMode',
        'plan' => 'setPlan',
        'allowance' => 'setAllowance',
        'used' => 'setUsed',
        'remaining' => 'setRemaining',
        'percent' => 'setPercent',
        'state' => 'setState',
        'resets_at' => 'setResetsAt',
        'by_feature' => 'setByFeature',
        'paused' => 'setPaused'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mode' => 'getMode',
        'plan' => 'getPlan',
        'allowance' => 'getAllowance',
        'used' => 'getUsed',
        'remaining' => 'getRemaining',
        'percent' => 'getPercent',
        'state' => 'getState',
        'resets_at' => 'getResetsAt',
        'by_feature' => 'getByFeature',
        'paused' => 'getPaused'
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

    public const MODE_HOSTED = 'hosted';
    public const MODE_OWN_KEY = 'own_key';
    public const MODE_UNMETERED = 'unmetered';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_HOSTED,
            self::MODE_OWN_KEY,
            self::MODE_UNMETERED,
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
        $this->setIfExists('mode', $data ?? [], null);
        $this->setIfExists('plan', $data ?? [], null);
        $this->setIfExists('allowance', $data ?? [], null);
        $this->setIfExists('used', $data ?? [], null);
        $this->setIfExists('remaining', $data ?? [], null);
        $this->setIfExists('percent', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('resets_at', $data ?? [], null);
        $this->setIfExists('by_feature', $data ?? [], null);
        $this->setIfExists('paused', $data ?? [], null);
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

        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mode', must be one of '%s'",
                $this->container['mode'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['plan'] === null && !$this->isNullableSetToNull('plan')) {
            $invalidProperties[] = "'plan' is required";
        }
        if ($this->container['allowance'] === null && !$this->isNullableSetToNull('allowance')) {
            $invalidProperties[] = "'allowance' is required";
        }
        if ($this->container['used'] === null && !$this->isNullableSetToNull('used')) {
            $invalidProperties[] = "'used' is required";
        }
        if ($this->container['remaining'] === null && !$this->isNullableSetToNull('remaining')) {
            $invalidProperties[] = "'remaining' is required";
        }
        if ($this->container['percent'] === null && !$this->isNullableSetToNull('percent')) {
            $invalidProperties[] = "'percent' is required";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['resets_at'] === null && !$this->isNullableSetToNull('resets_at')) {
            $invalidProperties[] = "'resets_at' is required";
        }
        if ($this->container['by_feature'] === null) {
            $invalidProperties[] = "'by_feature' can't be null";
        }
        if ($this->container['paused'] === null) {
            $invalidProperties[] = "'paused' can't be null";
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
     * Gets mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string $mode mode
     *
     * @return self
     */
    public function setMode($mode)
    {
        if (is_null($mode)) {
            throw new \InvalidArgumentException('non-nullable mode cannot be null');
        }
        $allowedValues = $this->getModeAllowableValues();
        if (!in_array($mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mode', must be one of '%s'",
                    $mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets plan
     *
     * @return string|null
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     *
     * @param string|null $plan plan
     *
     * @return self
     */
    public function setPlan($plan)
    {
        if (is_null($plan)) {
            array_push($this->openAPINullablesSetToNull, 'plan');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('plan', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['plan'] = $plan;

        return $this;
    }

    /**
     * Gets allowance
     *
     * @return float|null
     */
    public function getAllowance()
    {
        return $this->container['allowance'];
    }

    /**
     * Sets allowance
     *
     * @param float|null $allowance allowance
     *
     * @return self
     */
    public function setAllowance($allowance)
    {
        if (is_null($allowance)) {
            array_push($this->openAPINullablesSetToNull, 'allowance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('allowance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['allowance'] = $allowance;

        return $this;
    }

    /**
     * Gets used
     *
     * @return float|null
     */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
     * Sets used
     *
     * @param float|null $used used
     *
     * @return self
     */
    public function setUsed($used)
    {
        if (is_null($used)) {
            array_push($this->openAPINullablesSetToNull, 'used');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('used', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['used'] = $used;

        return $this;
    }

    /**
     * Gets remaining
     *
     * @return float|null
     */
    public function getRemaining()
    {
        return $this->container['remaining'];
    }

    /**
     * Sets remaining
     *
     * @param float|null $remaining remaining
     *
     * @return self
     */
    public function setRemaining($remaining)
    {
        if (is_null($remaining)) {
            array_push($this->openAPINullablesSetToNull, 'remaining');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('remaining', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['remaining'] = $remaining;

        return $this;
    }

    /**
     * Gets percent
     *
     * @return float|null
     */
    public function getPercent()
    {
        return $this->container['percent'];
    }

    /**
     * Sets percent
     *
     * @param float|null $percent percent
     *
     * @return self
     */
    public function setPercent($percent)
    {
        if (is_null($percent)) {
            array_push($this->openAPINullablesSetToNull, 'percent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('percent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['percent'] = $percent;

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
     * Gets resets_at
     *
     * @return string|null
     */
    public function getResetsAt()
    {
        return $this->container['resets_at'];
    }

    /**
     * Sets resets_at
     *
     * @param string|null $resets_at resets_at
     *
     * @return self
     */
    public function setResetsAt($resets_at)
    {
        if (is_null($resets_at)) {
            array_push($this->openAPINullablesSetToNull, 'resets_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('resets_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['resets_at'] = $resets_at;

        return $this;
    }

    /**
     * Gets by_feature
     *
     * @return array<string,\Docustay\Model\AiUsageByFeatureValue>
     */
    public function getByFeature()
    {
        return $this->container['by_feature'];
    }

    /**
     * Sets by_feature
     *
     * @param array<string,\Docustay\Model\AiUsageByFeatureValue> $by_feature by_feature
     *
     * @return self
     */
    public function setByFeature($by_feature)
    {
        if (is_null($by_feature)) {
            throw new \InvalidArgumentException('non-nullable by_feature cannot be null');
        }
        $this->container['by_feature'] = $by_feature;

        return $this;
    }

    /**
     * Gets paused
     *
     * @return bool
     */
    public function getPaused()
    {
        return $this->container['paused'];
    }

    /**
     * Sets paused
     *
     * @param bool $paused paused
     *
     * @return self
     */
    public function setPaused($paused)
    {
        if (is_null($paused)) {
            throw new \InvalidArgumentException('non-nullable paused cannot be null');
        }
        $this->container['paused'] = $paused;

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


