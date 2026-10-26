<?php
/**
 * UsageLimits
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
 * UsageLimits Class Doc Comment
 *
 * @category Class
 * @description The plan&#39;s limits and prices in one place (whole cents; null &#x3D; no limit or no price): documents, AI drafts, new templates and different signers per period, what each extra document and draft costs, team members, the Pay as you go price per team member a month, the largest upload in MB, emails a day, the most rows in one list on Free, and the fee on payments in percent.
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 * @implements \ArrayAccess<string, mixed>
 */
class UsageLimits implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Usage_limits';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'documents_per_period' => 'int',
        'per_document_minor' => 'int',
        'drafts_per_period' => 'int',
        'per_draft_minor' => 'int',
        'templates_per_period' => 'int',
        'signers_per_period' => 'int',
        'people' => 'int',
        'person_monthly_minor' => 'int',
        'upload_mb' => 'int',
        'emails_per_day' => 'int',
        'bulk_send_max' => 'int',
        'payments_fee_percent' => 'float'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'documents_per_period' => null,
        'per_document_minor' => null,
        'drafts_per_period' => null,
        'per_draft_minor' => null,
        'templates_per_period' => null,
        'signers_per_period' => null,
        'people' => null,
        'person_monthly_minor' => null,
        'upload_mb' => null,
        'emails_per_day' => null,
        'bulk_send_max' => null,
        'payments_fee_percent' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'documents_per_period' => true,
        'per_document_minor' => true,
        'drafts_per_period' => true,
        'per_draft_minor' => true,
        'templates_per_period' => true,
        'signers_per_period' => true,
        'people' => true,
        'person_monthly_minor' => true,
        'upload_mb' => true,
        'emails_per_day' => true,
        'bulk_send_max' => true,
        'payments_fee_percent' => false
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
        'documents_per_period' => 'documentsPerPeriod',
        'per_document_minor' => 'perDocumentMinor',
        'drafts_per_period' => 'draftsPerPeriod',
        'per_draft_minor' => 'perDraftMinor',
        'templates_per_period' => 'templatesPerPeriod',
        'signers_per_period' => 'signersPerPeriod',
        'people' => 'people',
        'person_monthly_minor' => 'personMonthlyMinor',
        'upload_mb' => 'uploadMb',
        'emails_per_day' => 'emailsPerDay',
        'bulk_send_max' => 'bulkSendMax',
        'payments_fee_percent' => 'paymentsFeePercent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'documents_per_period' => 'setDocumentsPerPeriod',
        'per_document_minor' => 'setPerDocumentMinor',
        'drafts_per_period' => 'setDraftsPerPeriod',
        'per_draft_minor' => 'setPerDraftMinor',
        'templates_per_period' => 'setTemplatesPerPeriod',
        'signers_per_period' => 'setSignersPerPeriod',
        'people' => 'setPeople',
        'person_monthly_minor' => 'setPersonMonthlyMinor',
        'upload_mb' => 'setUploadMb',
        'emails_per_day' => 'setEmailsPerDay',
        'bulk_send_max' => 'setBulkSendMax',
        'payments_fee_percent' => 'setPaymentsFeePercent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'documents_per_period' => 'getDocumentsPerPeriod',
        'per_document_minor' => 'getPerDocumentMinor',
        'drafts_per_period' => 'getDraftsPerPeriod',
        'per_draft_minor' => 'getPerDraftMinor',
        'templates_per_period' => 'getTemplatesPerPeriod',
        'signers_per_period' => 'getSignersPerPeriod',
        'people' => 'getPeople',
        'person_monthly_minor' => 'getPersonMonthlyMinor',
        'upload_mb' => 'getUploadMb',
        'emails_per_day' => 'getEmailsPerDay',
        'bulk_send_max' => 'getBulkSendMax',
        'payments_fee_percent' => 'getPaymentsFeePercent'
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
        $this->setIfExists('documents_per_period', $data ?? [], null);
        $this->setIfExists('per_document_minor', $data ?? [], null);
        $this->setIfExists('drafts_per_period', $data ?? [], null);
        $this->setIfExists('per_draft_minor', $data ?? [], null);
        $this->setIfExists('templates_per_period', $data ?? [], null);
        $this->setIfExists('signers_per_period', $data ?? [], null);
        $this->setIfExists('people', $data ?? [], null);
        $this->setIfExists('person_monthly_minor', $data ?? [], null);
        $this->setIfExists('upload_mb', $data ?? [], null);
        $this->setIfExists('emails_per_day', $data ?? [], null);
        $this->setIfExists('bulk_send_max', $data ?? [], null);
        $this->setIfExists('payments_fee_percent', $data ?? [], null);
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

        if ($this->container['documents_per_period'] === null && !$this->isNullableSetToNull('documents_per_period')) {
            $invalidProperties[] = "'documents_per_period' is required";
        }
        if ($this->container['per_document_minor'] === null && !$this->isNullableSetToNull('per_document_minor')) {
            $invalidProperties[] = "'per_document_minor' is required";
        }
        if ($this->container['drafts_per_period'] === null && !$this->isNullableSetToNull('drafts_per_period')) {
            $invalidProperties[] = "'drafts_per_period' is required";
        }
        if ($this->container['per_draft_minor'] === null && !$this->isNullableSetToNull('per_draft_minor')) {
            $invalidProperties[] = "'per_draft_minor' is required";
        }
        if ($this->container['templates_per_period'] === null && !$this->isNullableSetToNull('templates_per_period')) {
            $invalidProperties[] = "'templates_per_period' is required";
        }
        if ($this->container['signers_per_period'] === null && !$this->isNullableSetToNull('signers_per_period')) {
            $invalidProperties[] = "'signers_per_period' is required";
        }
        if ($this->container['people'] === null && !$this->isNullableSetToNull('people')) {
            $invalidProperties[] = "'people' is required";
        }
        if ($this->container['person_monthly_minor'] === null && !$this->isNullableSetToNull('person_monthly_minor')) {
            $invalidProperties[] = "'person_monthly_minor' is required";
        }
        if ($this->container['upload_mb'] === null && !$this->isNullableSetToNull('upload_mb')) {
            $invalidProperties[] = "'upload_mb' is required";
        }
        if ($this->container['emails_per_day'] === null && !$this->isNullableSetToNull('emails_per_day')) {
            $invalidProperties[] = "'emails_per_day' is required";
        }
        if ($this->container['bulk_send_max'] === null && !$this->isNullableSetToNull('bulk_send_max')) {
            $invalidProperties[] = "'bulk_send_max' is required";
        }
        if ($this->container['payments_fee_percent'] === null) {
            $invalidProperties[] = "'payments_fee_percent' can't be null";
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
     * Gets documents_per_period
     *
     * @return int|null
     */
    public function getDocumentsPerPeriod()
    {
        return $this->container['documents_per_period'];
    }

    /**
     * Sets documents_per_period
     *
     * @param int|null $documents_per_period documents_per_period
     *
     * @return self
     */
    public function setDocumentsPerPeriod($documents_per_period)
    {
        if (is_null($documents_per_period)) {
            array_push($this->openAPINullablesSetToNull, 'documents_per_period');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('documents_per_period', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['documents_per_period'] = $documents_per_period;

        return $this;
    }

    /**
     * Gets per_document_minor
     *
     * @return int|null
     */
    public function getPerDocumentMinor()
    {
        return $this->container['per_document_minor'];
    }

    /**
     * Sets per_document_minor
     *
     * @param int|null $per_document_minor per_document_minor
     *
     * @return self
     */
    public function setPerDocumentMinor($per_document_minor)
    {
        if (is_null($per_document_minor)) {
            array_push($this->openAPINullablesSetToNull, 'per_document_minor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('per_document_minor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['per_document_minor'] = $per_document_minor;

        return $this;
    }

    /**
     * Gets drafts_per_period
     *
     * @return int|null
     */
    public function getDraftsPerPeriod()
    {
        return $this->container['drafts_per_period'];
    }

    /**
     * Sets drafts_per_period
     *
     * @param int|null $drafts_per_period drafts_per_period
     *
     * @return self
     */
    public function setDraftsPerPeriod($drafts_per_period)
    {
        if (is_null($drafts_per_period)) {
            array_push($this->openAPINullablesSetToNull, 'drafts_per_period');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('drafts_per_period', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['drafts_per_period'] = $drafts_per_period;

        return $this;
    }

    /**
     * Gets per_draft_minor
     *
     * @return int|null
     */
    public function getPerDraftMinor()
    {
        return $this->container['per_draft_minor'];
    }

    /**
     * Sets per_draft_minor
     *
     * @param int|null $per_draft_minor per_draft_minor
     *
     * @return self
     */
    public function setPerDraftMinor($per_draft_minor)
    {
        if (is_null($per_draft_minor)) {
            array_push($this->openAPINullablesSetToNull, 'per_draft_minor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('per_draft_minor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['per_draft_minor'] = $per_draft_minor;

        return $this;
    }

    /**
     * Gets templates_per_period
     *
     * @return int|null
     */
    public function getTemplatesPerPeriod()
    {
        return $this->container['templates_per_period'];
    }

    /**
     * Sets templates_per_period
     *
     * @param int|null $templates_per_period templates_per_period
     *
     * @return self
     */
    public function setTemplatesPerPeriod($templates_per_period)
    {
        if (is_null($templates_per_period)) {
            array_push($this->openAPINullablesSetToNull, 'templates_per_period');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('templates_per_period', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['templates_per_period'] = $templates_per_period;

        return $this;
    }

    /**
     * Gets signers_per_period
     *
     * @return int|null
     */
    public function getSignersPerPeriod()
    {
        return $this->container['signers_per_period'];
    }

    /**
     * Sets signers_per_period
     *
     * @param int|null $signers_per_period signers_per_period
     *
     * @return self
     */
    public function setSignersPerPeriod($signers_per_period)
    {
        if (is_null($signers_per_period)) {
            array_push($this->openAPINullablesSetToNull, 'signers_per_period');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('signers_per_period', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['signers_per_period'] = $signers_per_period;

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
            array_push($this->openAPINullablesSetToNull, 'people');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('people', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['people'] = $people;

        return $this;
    }

    /**
     * Gets person_monthly_minor
     *
     * @return int|null
     */
    public function getPersonMonthlyMinor()
    {
        return $this->container['person_monthly_minor'];
    }

    /**
     * Sets person_monthly_minor
     *
     * @param int|null $person_monthly_minor person_monthly_minor
     *
     * @return self
     */
    public function setPersonMonthlyMinor($person_monthly_minor)
    {
        if (is_null($person_monthly_minor)) {
            array_push($this->openAPINullablesSetToNull, 'person_monthly_minor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('person_monthly_minor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['person_monthly_minor'] = $person_monthly_minor;

        return $this;
    }

    /**
     * Gets upload_mb
     *
     * @return int|null
     */
    public function getUploadMb()
    {
        return $this->container['upload_mb'];
    }

    /**
     * Sets upload_mb
     *
     * @param int|null $upload_mb upload_mb
     *
     * @return self
     */
    public function setUploadMb($upload_mb)
    {
        if (is_null($upload_mb)) {
            array_push($this->openAPINullablesSetToNull, 'upload_mb');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('upload_mb', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['upload_mb'] = $upload_mb;

        return $this;
    }

    /**
     * Gets emails_per_day
     *
     * @return int|null
     */
    public function getEmailsPerDay()
    {
        return $this->container['emails_per_day'];
    }

    /**
     * Sets emails_per_day
     *
     * @param int|null $emails_per_day The plan's daily email limit. Today's actual limit is emails.limitPerDay, which is lower in a workspace's first 7 days.
     *
     * @return self
     */
    public function setEmailsPerDay($emails_per_day)
    {
        if (is_null($emails_per_day)) {
            array_push($this->openAPINullablesSetToNull, 'emails_per_day');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('emails_per_day', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['emails_per_day'] = $emails_per_day;

        return $this;
    }

    /**
     * Gets bulk_send_max
     *
     * @return int|null
     */
    public function getBulkSendMax()
    {
        return $this->container['bulk_send_max'];
    }

    /**
     * Sets bulk_send_max
     *
     * @param int|null $bulk_send_max bulk_send_max
     *
     * @return self
     */
    public function setBulkSendMax($bulk_send_max)
    {
        if (is_null($bulk_send_max)) {
            array_push($this->openAPINullablesSetToNull, 'bulk_send_max');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bulk_send_max', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bulk_send_max'] = $bulk_send_max;

        return $this;
    }

    /**
     * Gets payments_fee_percent
     *
     * @return float
     */
    public function getPaymentsFeePercent()
    {
        return $this->container['payments_fee_percent'];
    }

    /**
     * Sets payments_fee_percent
     *
     * @param float $payments_fee_percent payments_fee_percent
     *
     * @return self
     */
    public function setPaymentsFeePercent($payments_fee_percent)
    {
        if (is_null($payments_fee_percent)) {
            throw new \InvalidArgumentException('non-nullable payments_fee_percent cannot be null');
        }
        $this->container['payments_fee_percent'] = $payments_fee_percent;

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


