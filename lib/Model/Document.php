<?php
/**
 * Document
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
 * Document Class Doc Comment
 *
 * @category Class
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 * @implements \ArrayAccess<string, mixed>
 */
class Document implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Document';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'external_id' => 'string',
        'metadata' => 'array<string,string>',
        'test' => 'bool',
        'id' => 'string',
        'title' => 'string',
        'state' => 'string',
        'sent_at' => 'string',
        'expires_at' => 'string',
        'executed_at' => 'string',
        'voided_at' => 'string',
        'void_reason' => 'string',
        'progress' => '\Docustay\Model\TestSign200ResponseProgress',
        'signed_copy_available' => 'bool',
        'parties' => '\Docustay\Model\Party[]',
        'payments' => '\Docustay\Model\Payment[]',
        'events' => '\Docustay\Model\DocumentEventsInner[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'external_id' => null,
        'metadata' => null,
        'test' => null,
        'id' => 'uuid',
        'title' => null,
        'state' => null,
        'sent_at' => null,
        'expires_at' => null,
        'executed_at' => null,
        'voided_at' => null,
        'void_reason' => null,
        'progress' => null,
        'signed_copy_available' => null,
        'parties' => null,
        'payments' => null,
        'events' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'external_id' => true,
        'metadata' => false,
        'test' => false,
        'id' => false,
        'title' => false,
        'state' => false,
        'sent_at' => true,
        'expires_at' => true,
        'executed_at' => true,
        'voided_at' => true,
        'void_reason' => true,
        'progress' => false,
        'signed_copy_available' => false,
        'parties' => false,
        'payments' => false,
        'events' => false
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
        'external_id' => 'externalId',
        'metadata' => 'metadata',
        'test' => 'test',
        'id' => 'id',
        'title' => 'title',
        'state' => 'state',
        'sent_at' => 'sentAt',
        'expires_at' => 'expiresAt',
        'executed_at' => 'executedAt',
        'voided_at' => 'voidedAt',
        'void_reason' => 'voidReason',
        'progress' => 'progress',
        'signed_copy_available' => 'signedCopyAvailable',
        'parties' => 'parties',
        'payments' => 'payments',
        'events' => 'events'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_id' => 'setExternalId',
        'metadata' => 'setMetadata',
        'test' => 'setTest',
        'id' => 'setId',
        'title' => 'setTitle',
        'state' => 'setState',
        'sent_at' => 'setSentAt',
        'expires_at' => 'setExpiresAt',
        'executed_at' => 'setExecutedAt',
        'voided_at' => 'setVoidedAt',
        'void_reason' => 'setVoidReason',
        'progress' => 'setProgress',
        'signed_copy_available' => 'setSignedCopyAvailable',
        'parties' => 'setParties',
        'payments' => 'setPayments',
        'events' => 'setEvents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_id' => 'getExternalId',
        'metadata' => 'getMetadata',
        'test' => 'getTest',
        'id' => 'getId',
        'title' => 'getTitle',
        'state' => 'getState',
        'sent_at' => 'getSentAt',
        'expires_at' => 'getExpiresAt',
        'executed_at' => 'getExecutedAt',
        'voided_at' => 'getVoidedAt',
        'void_reason' => 'getVoidReason',
        'progress' => 'getProgress',
        'signed_copy_available' => 'getSignedCopyAvailable',
        'parties' => 'getParties',
        'payments' => 'getPayments',
        'events' => 'getEvents'
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
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('test', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('sent_at', $data ?? [], null);
        $this->setIfExists('expires_at', $data ?? [], null);
        $this->setIfExists('executed_at', $data ?? [], null);
        $this->setIfExists('voided_at', $data ?? [], null);
        $this->setIfExists('void_reason', $data ?? [], null);
        $this->setIfExists('progress', $data ?? [], null);
        $this->setIfExists('signed_copy_available', $data ?? [], null);
        $this->setIfExists('parties', $data ?? [], null);
        $this->setIfExists('payments', $data ?? [], null);
        $this->setIfExists('events', $data ?? [], null);
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

        if ($this->container['external_id'] === null && !$this->isNullableSetToNull('external_id')) {
            $invalidProperties[] = "'external_id' is required";
        }
        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) > 200)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
        }
        if ($this->container['test'] === null) {
            $invalidProperties[] = "'test' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['sent_at'] === null && !$this->isNullableSetToNull('sent_at')) {
            $invalidProperties[] = "'sent_at' is required";
        }
        if ($this->container['expires_at'] === null && !$this->isNullableSetToNull('expires_at')) {
            $invalidProperties[] = "'expires_at' is required";
        }
        if ($this->container['executed_at'] === null && !$this->isNullableSetToNull('executed_at')) {
            $invalidProperties[] = "'executed_at' is required";
        }
        if ($this->container['voided_at'] === null && !$this->isNullableSetToNull('voided_at')) {
            $invalidProperties[] = "'voided_at' is required";
        }
        if ($this->container['void_reason'] === null && !$this->isNullableSetToNull('void_reason')) {
            $invalidProperties[] = "'void_reason' is required";
        }
        if ($this->container['progress'] === null) {
            $invalidProperties[] = "'progress' can't be null";
        }
        if ($this->container['signed_copy_available'] === null) {
            $invalidProperties[] = "'signed_copy_available' can't be null";
        }
        if ($this->container['parties'] === null) {
            $invalidProperties[] = "'parties' can't be null";
        }
        if ($this->container['payments'] === null) {
            $invalidProperties[] = "'payments' can't be null";
        }
        if ($this->container['events'] === null) {
            $invalidProperties[] = "'events' can't be null";
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
            array_push($this->openAPINullablesSetToNull, 'external_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('external_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($external_id) && (mb_strlen($external_id) > 200)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling Document., must be smaller than or equal to 200.');
        }
        if (!is_null($external_id) && (mb_strlen($external_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling Document., must be bigger than or equal to 1.');
        }

        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,string>
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string> $metadata Your own key-value text (up to 20 keys; keys 1–40 letters, digits, dot, dash or underscore; values up to 500 characters). Returned in every response and every webhook for this document; never shown to a signer.
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
     * Gets test
     *
     * @return bool
     */
    public function getTest()
    {
        return $this->container['test'];
    }

    /**
     * Sets test
     *
     * @param bool $test test
     *
     * @return self
     */
    public function setTest($test)
    {
        if (is_null($test)) {
            throw new \InvalidArgumentException('non-nullable test cannot be null');
        }
        $this->container['test'] = $test;

        return $this;
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
     * Gets sent_at
     *
     * @return string|null
     */
    public function getSentAt()
    {
        return $this->container['sent_at'];
    }

    /**
     * Sets sent_at
     *
     * @param string|null $sent_at sent_at
     *
     * @return self
     */
    public function setSentAt($sent_at)
    {
        if (is_null($sent_at)) {
            array_push($this->openAPINullablesSetToNull, 'sent_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sent_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sent_at'] = $sent_at;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return string|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param string|null $expires_at expires_at
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        if (is_null($expires_at)) {
            array_push($this->openAPINullablesSetToNull, 'expires_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expires_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets executed_at
     *
     * @return string|null
     */
    public function getExecutedAt()
    {
        return $this->container['executed_at'];
    }

    /**
     * Sets executed_at
     *
     * @param string|null $executed_at executed_at
     *
     * @return self
     */
    public function setExecutedAt($executed_at)
    {
        if (is_null($executed_at)) {
            array_push($this->openAPINullablesSetToNull, 'executed_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('executed_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['executed_at'] = $executed_at;

        return $this;
    }

    /**
     * Gets voided_at
     *
     * @return string|null
     */
    public function getVoidedAt()
    {
        return $this->container['voided_at'];
    }

    /**
     * Sets voided_at
     *
     * @param string|null $voided_at voided_at
     *
     * @return self
     */
    public function setVoidedAt($voided_at)
    {
        if (is_null($voided_at)) {
            array_push($this->openAPINullablesSetToNull, 'voided_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('voided_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['voided_at'] = $voided_at;

        return $this;
    }

    /**
     * Gets void_reason
     *
     * @return string|null
     */
    public function getVoidReason()
    {
        return $this->container['void_reason'];
    }

    /**
     * Sets void_reason
     *
     * @param string|null $void_reason void_reason
     *
     * @return self
     */
    public function setVoidReason($void_reason)
    {
        if (is_null($void_reason)) {
            array_push($this->openAPINullablesSetToNull, 'void_reason');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('void_reason', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['void_reason'] = $void_reason;

        return $this;
    }

    /**
     * Gets progress
     *
     * @return \Docustay\Model\TestSign200ResponseProgress
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     *
     * @param \Docustay\Model\TestSign200ResponseProgress $progress progress
     *
     * @return self
     */
    public function setProgress($progress)
    {
        if (is_null($progress)) {
            throw new \InvalidArgumentException('non-nullable progress cannot be null');
        }
        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets signed_copy_available
     *
     * @return bool
     */
    public function getSignedCopyAvailable()
    {
        return $this->container['signed_copy_available'];
    }

    /**
     * Sets signed_copy_available
     *
     * @param bool $signed_copy_available signed_copy_available
     *
     * @return self
     */
    public function setSignedCopyAvailable($signed_copy_available)
    {
        if (is_null($signed_copy_available)) {
            throw new \InvalidArgumentException('non-nullable signed_copy_available cannot be null');
        }
        $this->container['signed_copy_available'] = $signed_copy_available;

        return $this;
    }

    /**
     * Gets parties
     *
     * @return \Docustay\Model\Party[]
     */
    public function getParties()
    {
        return $this->container['parties'];
    }

    /**
     * Sets parties
     *
     * @param \Docustay\Model\Party[] $parties parties
     *
     * @return self
     */
    public function setParties($parties)
    {
        if (is_null($parties)) {
            throw new \InvalidArgumentException('non-nullable parties cannot be null');
        }
        $this->container['parties'] = $parties;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \Docustay\Model\Payment[]
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \Docustay\Model\Payment[] $payments Payments made through payment fields on this document (empty when it has none). A payment field's amount is one set amount (optionally paid as a deposit now), or an amount you give when you send the document — see the text tag setting `amount`.
     *
     * @return self
     */
    public function setPayments($payments)
    {
        if (is_null($payments)) {
            throw new \InvalidArgumentException('non-nullable payments cannot be null');
        }
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets events
     *
     * @return \Docustay\Model\DocumentEventsInner[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param \Docustay\Model\DocumentEventsInner[] $events events
     *
     * @return self
     */
    public function setEvents($events)
    {
        if (is_null($events)) {
            throw new \InvalidArgumentException('non-nullable events cannot be null');
        }
        $this->container['events'] = $events;

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


