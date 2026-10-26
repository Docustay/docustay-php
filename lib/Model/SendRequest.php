<?php
/**
 * SendRequest
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
 * SendRequest Class Doc Comment
 *
 * @category Class
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 * @implements \ArrayAccess<string, mixed>
 */
class SendRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SendRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'template_id' => 'string',
        'email' => '\Docustay\Model\EmailChoice',
        'metadata' => 'array<string,string>',
        'external_id' => 'string',
        'title' => 'string',
        'message' => 'string',
        'subject' => 'string',
        'expiry_days' => 'int',
        'signing_order' => 'string',
        'values' => 'array<string,string>',
        'embedded' => 'string[]',
        'parties' => '\Docustay\Model\SendRequestPartiesInner[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'template_id' => 'uuid',
        'email' => null,
        'metadata' => null,
        'external_id' => null,
        'title' => null,
        'message' => null,
        'subject' => null,
        'expiry_days' => null,
        'signing_order' => null,
        'values' => null,
        'embedded' => null,
        'parties' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'template_id' => false,
        'email' => false,
        'metadata' => false,
        'external_id' => false,
        'title' => false,
        'message' => true,
        'subject' => false,
        'expiry_days' => false,
        'signing_order' => false,
        'values' => false,
        'embedded' => false,
        'parties' => false
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
        'template_id' => 'templateId',
        'email' => 'email',
        'metadata' => 'metadata',
        'external_id' => 'externalId',
        'title' => 'title',
        'message' => 'message',
        'subject' => 'subject',
        'expiry_days' => 'expiryDays',
        'signing_order' => 'signingOrder',
        'values' => 'values',
        'embedded' => 'embedded',
        'parties' => 'parties'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'template_id' => 'setTemplateId',
        'email' => 'setEmail',
        'metadata' => 'setMetadata',
        'external_id' => 'setExternalId',
        'title' => 'setTitle',
        'message' => 'setMessage',
        'subject' => 'setSubject',
        'expiry_days' => 'setExpiryDays',
        'signing_order' => 'setSigningOrder',
        'values' => 'setValues',
        'embedded' => 'setEmbedded',
        'parties' => 'setParties'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'template_id' => 'getTemplateId',
        'email' => 'getEmail',
        'metadata' => 'getMetadata',
        'external_id' => 'getExternalId',
        'title' => 'getTitle',
        'message' => 'getMessage',
        'subject' => 'getSubject',
        'expiry_days' => 'getExpiryDays',
        'signing_order' => 'getSigningOrder',
        'values' => 'getValues',
        'embedded' => 'getEmbedded',
        'parties' => 'getParties'
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
        $this->setIfExists('template_id', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('expiry_days', $data ?? [], null);
        $this->setIfExists('signing_order', $data ?? [], null);
        $this->setIfExists('values', $data ?? [], null);
        $this->setIfExists('embedded', $data ?? [], null);
        $this->setIfExists('parties', $data ?? [], null);
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

        if ($this->container['template_id'] === null) {
            $invalidProperties[] = "'template_id' can't be null";
        }
        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) > 200)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 200)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 5000)) {
            $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 5000.";
        }

        if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 200)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['expiry_days']) && ($this->container['expiry_days'] > 365)) {
            $invalidProperties[] = "invalid value for 'expiry_days', must be smaller than or equal to 365.";
        }

        if (!is_null($this->container['expiry_days']) && ($this->container['expiry_days'] < 1)) {
            $invalidProperties[] = "invalid value for 'expiry_days', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getSigningOrderAllowableValues();
        if (!is_null($this->container['signing_order']) && !in_array($this->container['signing_order'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'signing_order', must be one of '%s'",
                $this->container['signing_order'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['parties'] === null) {
            $invalidProperties[] = "'parties' can't be null";
        }
        if ((count($this->container['parties']) < 1)) {
            $invalidProperties[] = "invalid value for 'parties', number of items must be greater than or equal to 1.";
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
     * Gets template_id
     *
     * @return string
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param string $template_id template_id
     *
     * @return self
     */
    public function setTemplateId($template_id)
    {
        if (is_null($template_id)) {
            throw new \InvalidArgumentException('non-nullable template_id cannot be null');
        }
        $this->container['template_id'] = $template_id;

        return $this;
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
            throw new \InvalidArgumentException('invalid length for $external_id when calling SendRequest., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($external_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling SendRequest., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $title when calling SendRequest., must be smaller than or equal to 200.');
        }

        $this->container['title'] = $title;

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
            array_push($this->openAPINullablesSetToNull, 'message');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('message', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($message) && (mb_strlen($message) > 5000)) {
            throw new \InvalidArgumentException('invalid length for $message when calling SendRequest., must be smaller than or equal to 5000.');
        }

        $this->container['message'] = $message;

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
            throw new \InvalidArgumentException('invalid length for $subject when calling SendRequest., must be smaller than or equal to 200.');
        }

        $this->container['subject'] = $subject;

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
            throw new \InvalidArgumentException('non-nullable expiry_days cannot be null');
        }
        if (($expiry_days > 365)) {
            throw new \InvalidArgumentException('invalid value for $expiry_days when calling SendRequest., must be smaller than or equal to 365.');
        }
        if (($expiry_days < 1)) {
            throw new \InvalidArgumentException('invalid value for $expiry_days when calling SendRequest., must be bigger than or equal to 1.');
        }

        $this->container['expiry_days'] = $expiry_days;

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
     * @param string|null $signing_order `sequential`: each seat signs in the template's seat order (signer_1 first), and an embedded seat gets its session only when it is that person's turn. Left out, the template's own setting.
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
     * Gets values
     *
     * @return array<string,string>|null
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param array<string,string>|null $values The boxes the sender fills in (\"Filled in by: Sender\") and the template's send-time amounts, by key: a box's label in lower case with underscores (\"Effective date\" → `effective_date`). A send that leaves one empty answers 400 naming it.
     *
     * @return self
     */
    public function setValues($values)
    {
        if (is_null($values)) {
            throw new \InvalidArgumentException('non-nullable values cannot be null');
        }
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets embedded
     *
     * @return string[]|null
     */
    public function getEmbedded()
    {
        return $this->container['embedded'];
    }

    /**
     * Sets embedded
     *
     * @param string[]|null $embedded Seats signed inside your own app instead of by emailed link (for example [\"signer_1\"]). Nobody is emailed for these seats: you ask for a session with POST /api/v1/documents/{id}/embed-session and show it on a website you listed under Settings → Developers → Embedding.
     *
     * @return self
     */
    public function setEmbedded($embedded)
    {
        if (is_null($embedded)) {
            throw new \InvalidArgumentException('non-nullable embedded cannot be null');
        }
        $this->container['embedded'] = $embedded;

        return $this;
    }

    /**
     * Gets parties
     *
     * @return \Docustay\Model\SendRequestPartiesInner[]
     */
    public function getParties()
    {
        return $this->container['parties'];
    }

    /**
     * Sets parties
     *
     * @param \Docustay\Model\SendRequestPartiesInner[] $parties One entry for each seat of the template (see GET /api/v1/documents/templates).
     *
     * @return self
     */
    public function setParties($parties)
    {
        if (is_null($parties)) {
            throw new \InvalidArgumentException('non-nullable parties cannot be null');
        }

        if ((count($parties) < 1)) {
            throw new \InvalidArgumentException('invalid length for $parties when calling SendRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['parties'] = $parties;

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


