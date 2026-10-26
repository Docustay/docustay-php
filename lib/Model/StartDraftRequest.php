<?php
/**
 * StartDraftRequest
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
 * StartDraftRequest Class Doc Comment
 *
 * @category Class
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 * @implements \ArrayAccess<string, mixed>
 */
class StartDraftRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'startDraft_request';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'template' => 'string',
        'title' => 'string',
        'people' => '\Docustay\Model\StartDraftRequestPeopleInner[]',
        'answers' => 'array<string,\Docustay\Model\StartDraftRequestAnswersValue>',
        'values' => 'array<string,string>',
        'use_defaults' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'template' => null,
        'title' => null,
        'people' => null,
        'answers' => null,
        'values' => null,
        'use_defaults' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'template' => false,
        'title' => false,
        'people' => false,
        'answers' => false,
        'values' => false,
        'use_defaults' => false
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
        'template' => 'template',
        'title' => 'title',
        'people' => 'people',
        'answers' => 'answers',
        'values' => 'values',
        'use_defaults' => 'useDefaults'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'template' => 'setTemplate',
        'title' => 'setTitle',
        'people' => 'setPeople',
        'answers' => 'setAnswers',
        'values' => 'setValues',
        'use_defaults' => 'setUseDefaults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'template' => 'getTemplate',
        'title' => 'getTitle',
        'people' => 'getPeople',
        'answers' => 'getAnswers',
        'values' => 'getValues',
        'use_defaults' => 'getUseDefaults'
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
        $this->setIfExists('template', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('people', $data ?? [], null);
        $this->setIfExists('answers', $data ?? [], null);
        $this->setIfExists('values', $data ?? [], null);
        $this->setIfExists('use_defaults', $data ?? [], null);
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

        if ($this->container['template'] === null) {
            $invalidProperties[] = "'template' can't be null";
        }
        if (!preg_match("/^[a-z][a-z0-9-]{1,60}$/", $this->container['template'])) {
            $invalidProperties[] = "invalid value for 'template', must be conform to the pattern /^[a-z][a-z0-9-]{1,60}$/.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 120)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 120.";
        }

        if ($this->container['people'] === null) {
            $invalidProperties[] = "'people' can't be null";
        }
        if ((count($this->container['people']) > 30)) {
            $invalidProperties[] = "invalid value for 'people', number of items must be less than or equal to 30.";
        }

        if ((count($this->container['people']) < 1)) {
            $invalidProperties[] = "invalid value for 'people', number of items must be greater than or equal to 1.";
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
     * Gets template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param string $template A library template's slug (see `GET /api/v1/templates/library`).
     *
     * @return self
     */
    public function setTemplate($template)
    {
        if (is_null($template)) {
            throw new \InvalidArgumentException('non-nullable template cannot be null');
        }

        if ((!preg_match("/^[a-z][a-z0-9-]{1,60}$/", ObjectSerializer::toString($template)))) {
            throw new \InvalidArgumentException("invalid value for \$template when calling StartDraftRequest., must conform to the pattern /^[a-z][a-z0-9-]{1,60}$/.");
        }

        $this->container['template'] = $template;

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
        if ((mb_strlen($title) > 120)) {
            throw new \InvalidArgumentException('invalid length for $title when calling StartDraftRequest., must be smaller than or equal to 120.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets people
     *
     * @return \Docustay\Model\StartDraftRequestPeopleInner[]
     */
    public function getPeople()
    {
        return $this->container['people'];
    }

    /**
     * Sets people
     *
     * @param \Docustay\Model\StartDraftRequestPeopleInner[] $people people
     *
     * @return self
     */
    public function setPeople($people)
    {
        if (is_null($people)) {
            throw new \InvalidArgumentException('non-nullable people cannot be null');
        }
        if ((count($people) > 30)) {
            throw new \InvalidArgumentException('invalid value for $people when calling StartDraftRequest., number of items must be less than or equal to 30.');
        }
        if ((count($people) < 1)) {
            throw new \InvalidArgumentException('invalid length for $people when calling StartDraftRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['people'] = $people;

        return $this;
    }

    /**
     * Gets answers
     *
     * @return array<string,\Docustay\Model\StartDraftRequestAnswersValue>|null
     */
    public function getAnswers()
    {
        return $this->container['answers'];
    }

    /**
     * Sets answers
     *
     * @param array<string,\Docustay\Model\StartDraftRequestAnswersValue>|null $answers answers
     *
     * @return self
     */
    public function setAnswers($answers)
    {
        if (is_null($answers)) {
            throw new \InvalidArgumentException('non-nullable answers cannot be null');
        }
        $this->container['answers'] = $answers;

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
     * @param array<string,string>|null $values Send-time amounts the template's words need, by key (a `needs_input` answer lists them under `values`), e.g. `{ \"deposit\": \"$500\" }`.
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
     * Gets use_defaults
     *
     * @return bool|null
     */
    public function getUseDefaults()
    {
        return $this->container['use_defaults'];
    }

    /**
     * Sets use_defaults
     *
     * @param bool|null $use_defaults use_defaults
     *
     * @return self
     */
    public function setUseDefaults($use_defaults)
    {
        if (is_null($use_defaults)) {
            throw new \InvalidArgumentException('non-nullable use_defaults cannot be null');
        }
        $this->container['use_defaults'] = $use_defaults;

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


