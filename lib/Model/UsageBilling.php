<?php
/**
 * UsageBilling
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
 * UsageBilling Class Doc Comment
 *
 * @category Class
 * @description Usage that costs money on Pay as you go, Pro and Lifetime: what has been billed per unit this period, the budget (default $50), and whether sending is paused at 100% of it. Amounts are whole cents.
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 * @implements \ArrayAccess<string, mixed>
 */
class UsageBilling implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Usage_billing';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'per_document_minor' => 'int',
        'per_draft_minor' => 'int',
        'billable_documents' => 'int',
        'billable_drafts' => 'int',
        'unbilled_minor' => 'int',
        'budget_minor' => 'int',
        'percent_of_budget' => 'int',
        'paused' => 'bool',
        'currency' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'per_document_minor' => null,
        'per_draft_minor' => null,
        'billable_documents' => null,
        'billable_drafts' => null,
        'unbilled_minor' => null,
        'budget_minor' => null,
        'percent_of_budget' => null,
        'paused' => null,
        'currency' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'per_document_minor' => true,
        'per_draft_minor' => true,
        'billable_documents' => false,
        'billable_drafts' => false,
        'unbilled_minor' => false,
        'budget_minor' => false,
        'percent_of_budget' => false,
        'paused' => false,
        'currency' => false
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
        'per_document_minor' => 'perDocumentMinor',
        'per_draft_minor' => 'perDraftMinor',
        'billable_documents' => 'billableDocuments',
        'billable_drafts' => 'billableDrafts',
        'unbilled_minor' => 'unbilledMinor',
        'budget_minor' => 'budgetMinor',
        'percent_of_budget' => 'percentOfBudget',
        'paused' => 'paused',
        'currency' => 'currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'per_document_minor' => 'setPerDocumentMinor',
        'per_draft_minor' => 'setPerDraftMinor',
        'billable_documents' => 'setBillableDocuments',
        'billable_drafts' => 'setBillableDrafts',
        'unbilled_minor' => 'setUnbilledMinor',
        'budget_minor' => 'setBudgetMinor',
        'percent_of_budget' => 'setPercentOfBudget',
        'paused' => 'setPaused',
        'currency' => 'setCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'per_document_minor' => 'getPerDocumentMinor',
        'per_draft_minor' => 'getPerDraftMinor',
        'billable_documents' => 'getBillableDocuments',
        'billable_drafts' => 'getBillableDrafts',
        'unbilled_minor' => 'getUnbilledMinor',
        'budget_minor' => 'getBudgetMinor',
        'percent_of_budget' => 'getPercentOfBudget',
        'paused' => 'getPaused',
        'currency' => 'getCurrency'
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
        $this->setIfExists('per_document_minor', $data ?? [], null);
        $this->setIfExists('per_draft_minor', $data ?? [], null);
        $this->setIfExists('billable_documents', $data ?? [], null);
        $this->setIfExists('billable_drafts', $data ?? [], null);
        $this->setIfExists('unbilled_minor', $data ?? [], null);
        $this->setIfExists('budget_minor', $data ?? [], null);
        $this->setIfExists('percent_of_budget', $data ?? [], null);
        $this->setIfExists('paused', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
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

        if ($this->container['per_document_minor'] === null && !$this->isNullableSetToNull('per_document_minor')) {
            $invalidProperties[] = "'per_document_minor' is required";
        }
        if ($this->container['per_draft_minor'] === null && !$this->isNullableSetToNull('per_draft_minor')) {
            $invalidProperties[] = "'per_draft_minor' is required";
        }
        if ($this->container['billable_documents'] === null) {
            $invalidProperties[] = "'billable_documents' can't be null";
        }
        if ($this->container['billable_drafts'] === null) {
            $invalidProperties[] = "'billable_drafts' can't be null";
        }
        if ($this->container['unbilled_minor'] === null) {
            $invalidProperties[] = "'unbilled_minor' can't be null";
        }
        if ($this->container['budget_minor'] === null) {
            $invalidProperties[] = "'budget_minor' can't be null";
        }
        if ($this->container['percent_of_budget'] === null) {
            $invalidProperties[] = "'percent_of_budget' can't be null";
        }
        if ($this->container['paused'] === null) {
            $invalidProperties[] = "'paused' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
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
     * Gets billable_documents
     *
     * @return int
     */
    public function getBillableDocuments()
    {
        return $this->container['billable_documents'];
    }

    /**
     * Sets billable_documents
     *
     * @param int $billable_documents billable_documents
     *
     * @return self
     */
    public function setBillableDocuments($billable_documents)
    {
        if (is_null($billable_documents)) {
            throw new \InvalidArgumentException('non-nullable billable_documents cannot be null');
        }
        $this->container['billable_documents'] = $billable_documents;

        return $this;
    }

    /**
     * Gets billable_drafts
     *
     * @return int
     */
    public function getBillableDrafts()
    {
        return $this->container['billable_drafts'];
    }

    /**
     * Sets billable_drafts
     *
     * @param int $billable_drafts billable_drafts
     *
     * @return self
     */
    public function setBillableDrafts($billable_drafts)
    {
        if (is_null($billable_drafts)) {
            throw new \InvalidArgumentException('non-nullable billable_drafts cannot be null');
        }
        $this->container['billable_drafts'] = $billable_drafts;

        return $this;
    }

    /**
     * Gets unbilled_minor
     *
     * @return int
     */
    public function getUnbilledMinor()
    {
        return $this->container['unbilled_minor'];
    }

    /**
     * Sets unbilled_minor
     *
     * @param int $unbilled_minor unbilled_minor
     *
     * @return self
     */
    public function setUnbilledMinor($unbilled_minor)
    {
        if (is_null($unbilled_minor)) {
            throw new \InvalidArgumentException('non-nullable unbilled_minor cannot be null');
        }
        $this->container['unbilled_minor'] = $unbilled_minor;

        return $this;
    }

    /**
     * Gets budget_minor
     *
     * @return int
     */
    public function getBudgetMinor()
    {
        return $this->container['budget_minor'];
    }

    /**
     * Sets budget_minor
     *
     * @param int $budget_minor budget_minor
     *
     * @return self
     */
    public function setBudgetMinor($budget_minor)
    {
        if (is_null($budget_minor)) {
            throw new \InvalidArgumentException('non-nullable budget_minor cannot be null');
        }
        $this->container['budget_minor'] = $budget_minor;

        return $this;
    }

    /**
     * Gets percent_of_budget
     *
     * @return int
     */
    public function getPercentOfBudget()
    {
        return $this->container['percent_of_budget'];
    }

    /**
     * Sets percent_of_budget
     *
     * @param int $percent_of_budget percent_of_budget
     *
     * @return self
     */
    public function setPercentOfBudget($percent_of_budget)
    {
        if (is_null($percent_of_budget)) {
            throw new \InvalidArgumentException('non-nullable percent_of_budget cannot be null');
        }
        $this->container['percent_of_budget'] = $percent_of_budget;

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


