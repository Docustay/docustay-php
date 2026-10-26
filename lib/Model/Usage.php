<?php
/**
 * Usage
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
 * Usage Class Doc Comment
 *
 * @category Class
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 * @implements \ArrayAccess<string, mixed>
 */
class Usage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Usage';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'plan' => 'string',
        'period' => '\Docustay\Model\UsagePeriod',
        'period_start' => 'string',
        'period_end' => 'string',
        'documents' => '\Docustay\Model\UsageDocuments',
        'limits' => '\Docustay\Model\UsageLimits',
        'drafts' => '\Docustay\Model\UsageDrafts',
        'billing' => '\Docustay\Model\UsageBilling',
        'emails' => '\Docustay\Model\UsageEmails',
        'templates' => '\Docustay\Model\UsageTemplates',
        'signers' => '\Docustay\Model\UsageSigners'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'plan' => null,
        'period' => null,
        'period_start' => null,
        'period_end' => null,
        'documents' => null,
        'limits' => null,
        'drafts' => null,
        'billing' => null,
        'emails' => null,
        'templates' => null,
        'signers' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'plan' => true,
        'period' => true,
        'period_start' => true,
        'period_end' => true,
        'documents' => true,
        'limits' => true,
        'drafts' => true,
        'billing' => true,
        'emails' => true,
        'templates' => true,
        'signers' => true
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
        'plan' => 'plan',
        'period' => 'period',
        'period_start' => 'periodStart',
        'period_end' => 'periodEnd',
        'documents' => 'documents',
        'limits' => 'limits',
        'drafts' => 'drafts',
        'billing' => 'billing',
        'emails' => 'emails',
        'templates' => 'templates',
        'signers' => 'signers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'plan' => 'setPlan',
        'period' => 'setPeriod',
        'period_start' => 'setPeriodStart',
        'period_end' => 'setPeriodEnd',
        'documents' => 'setDocuments',
        'limits' => 'setLimits',
        'drafts' => 'setDrafts',
        'billing' => 'setBilling',
        'emails' => 'setEmails',
        'templates' => 'setTemplates',
        'signers' => 'setSigners'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'plan' => 'getPlan',
        'period' => 'getPeriod',
        'period_start' => 'getPeriodStart',
        'period_end' => 'getPeriodEnd',
        'documents' => 'getDocuments',
        'limits' => 'getLimits',
        'drafts' => 'getDrafts',
        'billing' => 'getBilling',
        'emails' => 'getEmails',
        'templates' => 'getTemplates',
        'signers' => 'getSigners'
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
        $this->setIfExists('plan', $data ?? [], null);
        $this->setIfExists('period', $data ?? [], null);
        $this->setIfExists('period_start', $data ?? [], null);
        $this->setIfExists('period_end', $data ?? [], null);
        $this->setIfExists('documents', $data ?? [], null);
        $this->setIfExists('limits', $data ?? [], null);
        $this->setIfExists('drafts', $data ?? [], null);
        $this->setIfExists('billing', $data ?? [], null);
        $this->setIfExists('emails', $data ?? [], null);
        $this->setIfExists('templates', $data ?? [], null);
        $this->setIfExists('signers', $data ?? [], null);
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

        if ($this->container['plan'] === null && !$this->isNullableSetToNull('plan')) {
            $invalidProperties[] = "'plan' is required";
        }
        if ($this->container['period'] === null && !$this->isNullableSetToNull('period')) {
            $invalidProperties[] = "'period' is required";
        }
        if ($this->container['documents'] === null && !$this->isNullableSetToNull('documents')) {
            $invalidProperties[] = "'documents' is required";
        }
        if ($this->container['emails'] === null && !$this->isNullableSetToNull('emails')) {
            $invalidProperties[] = "'emails' is required";
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
     * Gets period
     *
     * @return \Docustay\Model\UsagePeriod|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param \Docustay\Model\UsagePeriod|null $period period
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
     * Gets period_start
     *
     * @return string|null
     */
    public function getPeriodStart()
    {
        return $this->container['period_start'];
    }

    /**
     * Sets period_start
     *
     * @param string|null $period_start When this allowance period began (ISO 8601, UTC): the start of the billing period on Pay as you go, Pro and Lifetime, the 1st of the month on Free.
     *
     * @return self
     */
    public function setPeriodStart($period_start)
    {
        if (is_null($period_start)) {
            array_push($this->openAPINullablesSetToNull, 'period_start');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('period_start', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['period_start'] = $period_start;

        return $this;
    }

    /**
     * Gets period_end
     *
     * @return string|null
     */
    public function getPeriodEnd()
    {
        return $this->container['period_end'];
    }

    /**
     * Sets period_end
     *
     * @param string|null $period_end When it ends and every count resets (ISO 8601, UTC); shown in the app as 'Resets Nov 19'.
     *
     * @return self
     */
    public function setPeriodEnd($period_end)
    {
        if (is_null($period_end)) {
            array_push($this->openAPINullablesSetToNull, 'period_end');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('period_end', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['period_end'] = $period_end;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \Docustay\Model\UsageDocuments|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \Docustay\Model\UsageDocuments|null $documents documents
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        if (is_null($documents)) {
            array_push($this->openAPINullablesSetToNull, 'documents');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('documents', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets limits
     *
     * @return \Docustay\Model\UsageLimits|null
     */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
     * Sets limits
     *
     * @param \Docustay\Model\UsageLimits|null $limits limits
     *
     * @return self
     */
    public function setLimits($limits)
    {
        if (is_null($limits)) {
            array_push($this->openAPINullablesSetToNull, 'limits');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('limits', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['limits'] = $limits;

        return $this;
    }

    /**
     * Gets drafts
     *
     * @return \Docustay\Model\UsageDrafts|null
     */
    public function getDrafts()
    {
        return $this->container['drafts'];
    }

    /**
     * Sets drafts
     *
     * @param \Docustay\Model\UsageDrafts|null $drafts drafts
     *
     * @return self
     */
    public function setDrafts($drafts)
    {
        if (is_null($drafts)) {
            array_push($this->openAPINullablesSetToNull, 'drafts');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('drafts', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['drafts'] = $drafts;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return \Docustay\Model\UsageBilling|null
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param \Docustay\Model\UsageBilling|null $billing billing
     *
     * @return self
     */
    public function setBilling($billing)
    {
        if (is_null($billing)) {
            array_push($this->openAPINullablesSetToNull, 'billing');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return \Docustay\Model\UsageEmails|null
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param \Docustay\Model\UsageEmails|null $emails emails
     *
     * @return self
     */
    public function setEmails($emails)
    {
        if (is_null($emails)) {
            array_push($this->openAPINullablesSetToNull, 'emails');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('emails', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets templates
     *
     * @return \Docustay\Model\UsageTemplates|null
     */
    public function getTemplates()
    {
        return $this->container['templates'];
    }

    /**
     * Sets templates
     *
     * @param \Docustay\Model\UsageTemplates|null $templates templates
     *
     * @return self
     */
    public function setTemplates($templates)
    {
        if (is_null($templates)) {
            array_push($this->openAPINullablesSetToNull, 'templates');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('templates', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['templates'] = $templates;

        return $this;
    }

    /**
     * Gets signers
     *
     * @return \Docustay\Model\UsageSigners|null
     */
    public function getSigners()
    {
        return $this->container['signers'];
    }

    /**
     * Sets signers
     *
     * @param \Docustay\Model\UsageSigners|null $signers signers
     *
     * @return self
     */
    public function setSigners($signers)
    {
        if (is_null($signers)) {
            array_push($this->openAPINullablesSetToNull, 'signers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('signers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['signers'] = $signers;

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


