<?php
/**
 * PreflightRequest
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
 * PreflightRequest Class Doc Comment
 *
 * @category Class
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 * @implements \ArrayAccess<string, mixed>
 */
class PreflightRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PreflightRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'action' => 'string',
        'documents' => 'int',
        'people' => 'int',
        'recipients' => 'string[]',
        'bytes' => 'int',
        'item' => 'string'
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
        'documents' => null,
        'people' => null,
        'recipients' => null,
        'bytes' => null,
        'item' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'action' => false,
        'documents' => false,
        'people' => false,
        'recipients' => false,
        'bytes' => false,
        'item' => false
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
        'documents' => 'documents',
        'people' => 'people',
        'recipients' => 'recipients',
        'bytes' => 'bytes',
        'item' => 'item'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'documents' => 'setDocuments',
        'people' => 'setPeople',
        'recipients' => 'setRecipients',
        'bytes' => 'setBytes',
        'item' => 'setItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'documents' => 'getDocuments',
        'people' => 'getPeople',
        'recipients' => 'getRecipients',
        'bytes' => 'getBytes',
        'item' => 'getItem'
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

    public const ACTION_SEND_DOCUMENT = 'send_document';
    public const ACTION_BULK_SEND = 'bulk_send';
    public const ACTION_INVITE_PERSON = 'invite_person';
    public const ACTION_REMOVE_PERSON = 'remove_person';
    public const ACTION_AI_DRAFT = 'ai_draft';
    public const ACTION_AI_EDIT = 'ai_edit';
    public const ACTION_AI_READ_FILE = 'ai_read_file';
    public const ACTION_CREATE_TEMPLATE = 'create_template';
    public const ACTION_UPLOAD = 'upload';
    public const ACTION_USE_FEATURE = 'use_feature';
    public const ACTION_CONNECT_PAYMENTS = 'connect_payments';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_SEND_DOCUMENT,
            self::ACTION_BULK_SEND,
            self::ACTION_INVITE_PERSON,
            self::ACTION_REMOVE_PERSON,
            self::ACTION_AI_DRAFT,
            self::ACTION_AI_EDIT,
            self::ACTION_AI_READ_FILE,
            self::ACTION_CREATE_TEMPLATE,
            self::ACTION_UPLOAD,
            self::ACTION_USE_FEATURE,
            self::ACTION_CONNECT_PAYMENTS,
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
        $this->setIfExists('documents', $data ?? [], null);
        $this->setIfExists('people', $data ?? [], null);
        $this->setIfExists('recipients', $data ?? [], null);
        $this->setIfExists('bytes', $data ?? [], null);
        $this->setIfExists('item', $data ?? [], null);
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
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'action', must be one of '%s'",
                $this->container['action'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['documents']) && ($this->container['documents'] > 100000)) {
            $invalidProperties[] = "invalid value for 'documents', must be smaller than or equal to 100000.";
        }

        if (!is_null($this->container['documents']) && ($this->container['documents'] < 1)) {
            $invalidProperties[] = "invalid value for 'documents', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['people']) && ($this->container['people'] > 1000)) {
            $invalidProperties[] = "invalid value for 'people', must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['people']) && ($this->container['people'] < 1)) {
            $invalidProperties[] = "invalid value for 'people', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['recipients']) && (count($this->container['recipients']) > 1000)) {
            $invalidProperties[] = "invalid value for 'recipients', number of items must be less than or equal to 1000.";
        }

        if (!is_null($this->container['bytes']) && ($this->container['bytes'] < 0)) {
            $invalidProperties[] = "invalid value for 'bytes', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['item']) && (mb_strlen($this->container['item']) > 60)) {
            $invalidProperties[] = "invalid value for 'item', the character length must be smaller than or equal to 60.";
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
     * @param string $action What you are about to do: `send_document`, `bulk_send` (with `documents`), `invite_person` or `remove_person` (with `people`), `ai_draft`, `ai_edit`, `ai_read_file`, `create_template`, `upload` (with `bytes`), `use_feature` (with `item`) or `connect_payments`.
     *
     * @return self
     */
    public function setAction($action)
    {
        if (is_null($action)) {
            throw new \InvalidArgumentException('non-nullable action cannot be null');
        }
        $allowedValues = $this->getActionAllowableValues();
        if (!in_array($action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'action', must be one of '%s'",
                    $action,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return int|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param int|null $documents documents
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        if (is_null($documents)) {
            throw new \InvalidArgumentException('non-nullable documents cannot be null');
        }
        if (($documents > 100000)) {
            throw new \InvalidArgumentException('invalid value for $documents when calling PreflightRequest., must be smaller than or equal to 100000.');
        }
        if (($documents < 1)) {
            throw new \InvalidArgumentException('invalid value for $documents when calling PreflightRequest., must be bigger than or equal to 1.');
        }

        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets people
     *
     * @return int|null
     */
    public function getPeople()
    {
        return $this->container['people'];
    }

    /**
     * Sets people
     *
     * @param int|null $people people
     *
     * @return self
     */
    public function setPeople($people)
    {
        if (is_null($people)) {
            throw new \InvalidArgumentException('non-nullable people cannot be null');
        }
        if (($people > 1000)) {
            throw new \InvalidArgumentException('invalid value for $people when calling PreflightRequest., must be smaller than or equal to 1000.');
        }
        if (($people < 1)) {
            throw new \InvalidArgumentException('invalid value for $people when calling PreflightRequest., must be bigger than or equal to 1.');
        }

        $this->container['people'] = $people;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return string[]|null
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param string[]|null $recipients For `send_document`: the email addresses you are about to send to, so a Free workspace is told how many of them are new signers this month (anyone already sent to this month, and your own team, do not count).
     *
     * @return self
     */
    public function setRecipients($recipients)
    {
        if (is_null($recipients)) {
            throw new \InvalidArgumentException('non-nullable recipients cannot be null');
        }
        if ((count($recipients) > 1000)) {
            throw new \InvalidArgumentException('invalid value for $recipients when calling PreflightRequest., number of items must be less than or equal to 1000.');
        }
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets bytes
     *
     * @return int|null
     */
    public function getBytes()
    {
        return $this->container['bytes'];
    }

    /**
     * Sets bytes
     *
     * @param int|null $bytes bytes
     *
     * @return self
     */
    public function setBytes($bytes)
    {
        if (is_null($bytes)) {
            throw new \InvalidArgumentException('non-nullable bytes cannot be null');
        }
        if (($bytes < 0)) {
            throw new \InvalidArgumentException('invalid value for $bytes when calling PreflightRequest., must be bigger than or equal to 0.');
        }

        $this->container['bytes'] = $bytes;

        return $this;
    }

    /**
     * Gets item
     *
     * @return string|null
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param string|null $item For `use_feature`: the item to ask about, one of `unlimited_documents`, `hide_footer`, `auto_reminders`, `bulk_send`, `team_roles`, `signing_groups`, `scribe_actions`, `ai_bulk`, `custom_plays` (your own plays and playbooks), `plays_api`. Any other name is a 400 `unknown_item`.
     *
     * @return self
     */
    public function setItem($item)
    {
        if (is_null($item)) {
            throw new \InvalidArgumentException('non-nullable item cannot be null');
        }
        if ((mb_strlen($item) > 60)) {
            throw new \InvalidArgumentException('invalid length for $item when calling PreflightRequest., must be smaller than or equal to 60.');
        }

        $this->container['item'] = $item;

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


