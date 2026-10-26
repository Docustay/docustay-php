<?php
/**
 * PreflightAnswer
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
 * PreflightAnswer Class Doc Comment
 *
 * @category Class
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 * @implements \ArrayAccess<string, mixed>
 */
class PreflightAnswer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PreflightAnswer';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'action' => 'string',
        'allowed' => 'bool',
        'plan' => '\Docustay\Model\PreflightAnswerPlan',
        'period' => '\Docustay\Model\PreflightAnswerPeriod',
        'meter' => 'array<string,mixed>',
        'cost' => '\Docustay\Model\PreflightAnswerCost',
        'after_this' => 'array<string,mixed>',
        'severity' => 'string',
        'reason' => 'string',
        'options' => '\Docustay\Model\PreflightOption[]',
        'message' => 'string',
        'allowed_count' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'action' => null,
        'allowed' => null,
        'plan' => null,
        'period' => null,
        'meter' => null,
        'cost' => null,
        'after_this' => null,
        'severity' => null,
        'reason' => null,
        'options' => null,
        'message' => null,
        'allowed_count' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'action' => false,
        'allowed' => false,
        'plan' => true,
        'period' => true,
        'meter' => true,
        'cost' => false,
        'after_this' => true,
        'severity' => false,
        'reason' => true,
        'options' => false,
        'message' => false,
        'allowed_count' => false
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
        'action' => 'action',
        'allowed' => 'allowed',
        'plan' => 'plan',
        'period' => 'period',
        'meter' => 'meter',
        'cost' => 'cost',
        'after_this' => 'afterThis',
        'severity' => 'severity',
        'reason' => 'reason',
        'options' => 'options',
        'message' => 'message',
        'allowed_count' => 'allowedCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'allowed' => 'setAllowed',
        'plan' => 'setPlan',
        'period' => 'setPeriod',
        'meter' => 'setMeter',
        'cost' => 'setCost',
        'after_this' => 'setAfterThis',
        'severity' => 'setSeverity',
        'reason' => 'setReason',
        'options' => 'setOptions',
        'message' => 'setMessage',
        'allowed_count' => 'setAllowedCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'allowed' => 'getAllowed',
        'plan' => 'getPlan',
        'period' => 'getPeriod',
        'meter' => 'getMeter',
        'cost' => 'getCost',
        'after_this' => 'getAfterThis',
        'severity' => 'getSeverity',
        'reason' => 'getReason',
        'options' => 'getOptions',
        'message' => 'getMessage',
        'allowed_count' => 'getAllowedCount'
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

    public const SEVERITY_NONE = 'none';
    public const SEVERITY_INFO = 'info';
    public const SEVERITY_WARN = 'warn';
    public const SEVERITY_LIMIT = 'limit';
    public const SEVERITY_BLOCKED = 'blocked';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_NONE,
            self::SEVERITY_INFO,
            self::SEVERITY_WARN,
            self::SEVERITY_LIMIT,
            self::SEVERITY_BLOCKED,
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
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('allowed', $data ?? [], null);
        $this->setIfExists('plan', $data ?? [], null);
        $this->setIfExists('period', $data ?? [], null);
        $this->setIfExists('meter', $data ?? [], null);
        $this->setIfExists('cost', $data ?? [], null);
        $this->setIfExists('after_this', $data ?? [], null);
        $this->setIfExists('severity', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('allowed_count', $data ?? [], null);
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

        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['allowed'] === null) {
            $invalidProperties[] = "'allowed' can't be null";
        }
        if ($this->container['plan'] === null && !$this->isNullableSetToNull('plan')) {
            $invalidProperties[] = "'plan' is required";
        }
        if ($this->container['period'] === null && !$this->isNullableSetToNull('period')) {
            $invalidProperties[] = "'period' is required";
        }
        if ($this->container['meter'] === null && !$this->isNullableSetToNull('meter')) {
            $invalidProperties[] = "'meter' is required";
        }
        if ($this->container['cost'] === null) {
            $invalidProperties[] = "'cost' can't be null";
        }
        if ($this->container['after_this'] === null && !$this->isNullableSetToNull('after_this')) {
            $invalidProperties[] = "'after_this' is required";
        }
        if ($this->container['severity'] === null) {
            $invalidProperties[] = "'severity' can't be null";
        }
        $allowedValues = $this->getSeverityAllowableValues();
        if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'severity', must be one of '%s'",
                $this->container['severity'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['reason'] === null && !$this->isNullableSetToNull('reason')) {
            $invalidProperties[] = "'reason' is required";
        }
        if ($this->container['options'] === null) {
            $invalidProperties[] = "'options' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
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
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action action
     *
     * @return self
     */
    public function setAction($action)
    {
        if (is_null($action)) {
            throw new \InvalidArgumentException('non-nullable action cannot be null');
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets allowed
     *
     * @return bool
     */
    public function getAllowed()
    {
        return $this->container['allowed'];
    }

    /**
     * Sets allowed
     *
     * @param bool $allowed allowed
     *
     * @return self
     */
    public function setAllowed($allowed)
    {
        if (is_null($allowed)) {
            throw new \InvalidArgumentException('non-nullable allowed cannot be null');
        }
        $this->container['allowed'] = $allowed;

        return $this;
    }

    /**
     * Gets plan
     *
     * @return \Docustay\Model\PreflightAnswerPlan|null
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     *
     * @param \Docustay\Model\PreflightAnswerPlan|null $plan plan
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
     * Gets period
     *
     * @return \Docustay\Model\PreflightAnswerPeriod|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param \Docustay\Model\PreflightAnswerPeriod|null $period period
     *
     * @return self
     */
    public function setPeriod($period)
    {
        if (is_null($period)) {
            array_push($this->openAPINullablesSetToNull, 'period');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('period', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets meter
     *
     * @return array<string,mixed>|null
     */
    public function getMeter()
    {
        return $this->container['meter'];
    }

    /**
     * Sets meter
     *
     * @param array<string,mixed>|null $meter meter
     *
     * @return self
     */
    public function setMeter($meter)
    {
        if (is_null($meter)) {
            array_push($this->openAPINullablesSetToNull, 'meter');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('meter', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['meter'] = $meter;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return \Docustay\Model\PreflightAnswerCost
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param \Docustay\Model\PreflightAnswerCost $cost cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        if (is_null($cost)) {
            throw new \InvalidArgumentException('non-nullable cost cannot be null');
        }
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets after_this
     *
     * @return array<string,mixed>|null
     */
    public function getAfterThis()
    {
        return $this->container['after_this'];
    }

    /**
     * Sets after_this
     *
     * @param array<string,mixed>|null $after_this after_this
     *
     * @return self
     */
    public function setAfterThis($after_this)
    {
        if (is_null($after_this)) {
            array_push($this->openAPINullablesSetToNull, 'after_this');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('after_this', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['after_this'] = $after_this;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return string
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string $severity severity
     *
     * @return self
     */
    public function setSeverity($severity)
    {
        if (is_null($severity)) {
            throw new \InvalidArgumentException('non-nullable severity cannot be null');
        }
        $allowedValues = $this->getSeverityAllowableValues();
        if (!in_array($severity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'severity', must be one of '%s'",
                    $severity,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['severity'] = $severity;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason reason
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            array_push($this->openAPINullablesSetToNull, 'reason');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reason', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Docustay\Model\PreflightOption[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Docustay\Model\PreflightOption[] $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        if (is_null($options)) {
            throw new \InvalidArgumentException('non-nullable options cannot be null');
        }
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets allowed_count
     *
     * @return int|null
     */
    public function getAllowedCount()
    {
        return $this->container['allowed_count'];
    }

    /**
     * Sets allowed_count
     *
     * @param int|null $allowed_count For `bulk_send` on a limit: how many of the rows can go now.
     *
     * @return self
     */
    public function setAllowedCount($allowed_count)
    {
        if (is_null($allowed_count)) {
            throw new \InvalidArgumentException('non-nullable allowed_count cannot be null');
        }
        $this->container['allowed_count'] = $allowed_count;

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


