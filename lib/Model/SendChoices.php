<?php
/**
 * SendChoices
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
 * SendChoices Class Doc Comment
 *
 * @category Class
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 * @implements \ArrayAccess<string, mixed>
 */
class SendChoices implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SendChoices';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'reply_to' => 'string',
        'sender_name' => 'string',
        'subject' => 'string',
        'message' => 'string',
        'expiry_days' => 'int',
        'reminder_days' => 'int[]',
        'signing_order' => 'string',
        'internal_note' => 'string',
        'require_decline_reason' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'reply_to' => 'email',
        'sender_name' => null,
        'subject' => null,
        'message' => null,
        'expiry_days' => null,
        'reminder_days' => null,
        'signing_order' => null,
        'internal_note' => null,
        'require_decline_reason' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'reply_to' => false,
        'sender_name' => false,
        'subject' => false,
        'message' => false,
        'expiry_days' => true,
        'reminder_days' => false,
        'signing_order' => false,
        'internal_note' => false,
        'require_decline_reason' => false
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
        'reply_to' => 'replyTo',
        'sender_name' => 'senderName',
        'subject' => 'subject',
        'message' => 'message',
        'expiry_days' => 'expiryDays',
        'reminder_days' => 'reminderDays',
        'signing_order' => 'signingOrder',
        'internal_note' => 'internalNote',
        'require_decline_reason' => 'requireDeclineReason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reply_to' => 'setReplyTo',
        'sender_name' => 'setSenderName',
        'subject' => 'setSubject',
        'message' => 'setMessage',
        'expiry_days' => 'setExpiryDays',
        'reminder_days' => 'setReminderDays',
        'signing_order' => 'setSigningOrder',
        'internal_note' => 'setInternalNote',
        'require_decline_reason' => 'setRequireDeclineReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reply_to' => 'getReplyTo',
        'sender_name' => 'getSenderName',
        'subject' => 'getSubject',
        'message' => 'getMessage',
        'expiry_days' => 'getExpiryDays',
        'reminder_days' => 'getReminderDays',
        'signing_order' => 'getSigningOrder',
        'internal_note' => 'getInternalNote',
        'require_decline_reason' => 'getRequireDeclineReason'
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

    public const SIGNING_ORDER_ANY = 'any';
    public const SIGNING_ORDER_SEQUENTIAL = 'sequential';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSigningOrderAllowableValues()
    {
        return [
            self::SIGNING_ORDER_ANY,
            self::SIGNING_ORDER_SEQUENTIAL,
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
        $this->setIfExists('reply_to', $data ?? [], null);
        $this->setIfExists('sender_name', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('expiry_days', $data ?? [], null);
        $this->setIfExists('reminder_days', $data ?? [], null);
        $this->setIfExists('signing_order', $data ?? [], null);
        $this->setIfExists('internal_note', $data ?? [], null);
        $this->setIfExists('require_decline_reason', $data ?? [], null);
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

        if (!is_null($this->container['sender_name']) && (mb_strlen($this->container['sender_name']) > 120)) {
            $invalidProperties[] = "invalid value for 'sender_name', the character length must be smaller than or equal to 120.";
        }

        if (!is_null($this->container['sender_name']) && (mb_strlen($this->container['sender_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'sender_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 200)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 4000)) {
            $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 4000.";
        }

        if (!is_null($this->container['expiry_days']) && ($this->container['expiry_days'] > 365)) {
            $invalidProperties[] = "invalid value for 'expiry_days', must be smaller than or equal to 365.";
        }

        if (!is_null($this->container['expiry_days']) && ($this->container['expiry_days'] < 0)) {
            $invalidProperties[] = "invalid value for 'expiry_days', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['reminder_days']) && (count($this->container['reminder_days']) > 3)) {
            $invalidProperties[] = "invalid value for 'reminder_days', number of items must be less than or equal to 3.";
        }

        $allowedValues = $this->getSigningOrderAllowableValues();
        if (!is_null($this->container['signing_order']) && !in_array($this->container['signing_order'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'signing_order', must be one of '%s'",
                $this->container['signing_order'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['internal_note']) && (mb_strlen($this->container['internal_note']) > 2000)) {
            $invalidProperties[] = "invalid value for 'internal_note', the character length must be smaller than or equal to 2000.";
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
     * Gets reply_to
     *
     * @return string|null
     */
    public function getReplyTo()
    {
        return $this->container['reply_to'];
    }

    /**
     * Sets reply_to
     *
     * @param string|null $reply_to reply_to
     *
     * @return self
     */
    public function setReplyTo($reply_to)
    {
        if (is_null($reply_to)) {
            throw new \InvalidArgumentException('non-nullable reply_to cannot be null');
        }
        $this->container['reply_to'] = $reply_to;

        return $this;
    }

    /**
     * Gets sender_name
     *
     * @return string|null
     */
    public function getSenderName()
    {
        return $this->container['sender_name'];
    }

    /**
     * Sets sender_name
     *
     * @param string|null $sender_name sender_name
     *
     * @return self
     */
    public function setSenderName($sender_name)
    {
        if (is_null($sender_name)) {
            throw new \InvalidArgumentException('non-nullable sender_name cannot be null');
        }
        if ((mb_strlen($sender_name) > 120)) {
            throw new \InvalidArgumentException('invalid length for $sender_name when calling SendChoices., must be smaller than or equal to 120.');
        }
        if ((mb_strlen($sender_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sender_name when calling SendChoices., must be bigger than or equal to 1.');
        }

        $this->container['sender_name'] = $sender_name;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }
        if ((mb_strlen($subject) > 200)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling SendChoices., must be smaller than or equal to 200.');
        }

        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        if ((mb_strlen($message) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $message when calling SendChoices., must be smaller than or equal to 4000.');
        }

        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets expiry_days
     *
     * @return int|null
     */
    public function getExpiryDays()
    {
        return $this->container['expiry_days'];
    }

    /**
     * Sets expiry_days
     *
     * @param int|null $expiry_days expiry_days
     *
     * @return self
     */
    public function setExpiryDays($expiry_days)
    {
        if (is_null($expiry_days)) {
            array_push($this->openAPINullablesSetToNull, 'expiry_days');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expiry_days', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($expiry_days) && ($expiry_days > 365)) {
            throw new \InvalidArgumentException('invalid value for $expiry_days when calling SendChoices., must be smaller than or equal to 365.');
        }
        if (!is_null($expiry_days) && ($expiry_days < 0)) {
            throw new \InvalidArgumentException('invalid value for $expiry_days when calling SendChoices., must be bigger than or equal to 0.');
        }

        $this->container['expiry_days'] = $expiry_days;

        return $this;
    }

    /**
     * Gets reminder_days
     *
     * @return int[]|null
     */
    public function getReminderDays()
    {
        return $this->container['reminder_days'];
    }

    /**
     * Sets reminder_days
     *
     * @param int[]|null $reminder_days reminder_days
     *
     * @return self
     */
    public function setReminderDays($reminder_days)
    {
        if (is_null($reminder_days)) {
            throw new \InvalidArgumentException('non-nullable reminder_days cannot be null');
        }
        if ((count($reminder_days) > 3)) {
            throw new \InvalidArgumentException('invalid value for $reminder_days when calling SendChoices., number of items must be less than or equal to 3.');
        }
        $this->container['reminder_days'] = $reminder_days;

        return $this;
    }

    /**
     * Gets signing_order
     *
     * @return string|null
     */
    public function getSigningOrder()
    {
        return $this->container['signing_order'];
    }

    /**
     * Sets signing_order
     *
     * @param string|null $signing_order signing_order
     *
     * @return self
     */
    public function setSigningOrder($signing_order)
    {
        if (is_null($signing_order)) {
            throw new \InvalidArgumentException('non-nullable signing_order cannot be null');
        }
        $allowedValues = $this->getSigningOrderAllowableValues();
        if (!in_array($signing_order, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'signing_order', must be one of '%s'",
                    $signing_order,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['signing_order'] = $signing_order;

        return $this;
    }

    /**
     * Gets internal_note
     *
     * @return string|null
     */
    public function getInternalNote()
    {
        return $this->container['internal_note'];
    }

    /**
     * Sets internal_note
     *
     * @param string|null $internal_note A note only the sender sees; never in anything a signer gets.
     *
     * @return self
     */
    public function setInternalNote($internal_note)
    {
        if (is_null($internal_note)) {
            throw new \InvalidArgumentException('non-nullable internal_note cannot be null');
        }
        if ((mb_strlen($internal_note) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $internal_note when calling SendChoices., must be smaller than or equal to 2000.');
        }

        $this->container['internal_note'] = $internal_note;

        return $this;
    }

    /**
     * Gets require_decline_reason
     *
     * @return bool|null
     */
    public function getRequireDeclineReason()
    {
        return $this->container['require_decline_reason'];
    }

    /**
     * Sets require_decline_reason
     *
     * @param bool|null $require_decline_reason require_decline_reason
     *
     * @return self
     */
    public function setRequireDeclineReason($require_decline_reason)
    {
        if (is_null($require_decline_reason)) {
            throw new \InvalidArgumentException('non-nullable require_decline_reason cannot be null');
        }
        $this->container['require_decline_reason'] = $require_decline_reason;

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


