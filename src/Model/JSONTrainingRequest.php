<?php
/**
 * JSONTrainingRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  FilippoToso\Rasa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Rasa - Server Endpoints
 *
 * The Rasa server provides endpoints to retrieve trackers of conversations as well as endpoints to modify them. Additionally, endpoints for training and testing models are provided.
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FilippoToso\Rasa\Model;

use \ArrayAccess;
use \FilippoToso\Rasa\ObjectSerializer;

/**
 * JSONTrainingRequest Class Doc Comment
 *
 * @category Class
 * @package  FilippoToso\Rasa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class JSONTrainingRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JSONTrainingRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'domain' => 'string',
        'config' => 'string',
        'nlu' => 'string',
        'responses' => 'string',
        'stories' => 'string',
        'force' => 'bool',
        'saveToDefaultModelDirectory' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'domain' => null,
        'config' => null,
        'nlu' => null,
        'responses' => null,
        'stories' => null,
        'force' => null,
        'saveToDefaultModelDirectory' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'domain' => 'domain',
        'config' => 'config',
        'nlu' => 'nlu',
        'responses' => 'responses',
        'stories' => 'stories',
        'force' => 'force',
        'saveToDefaultModelDirectory' => 'save_to_default_model_directory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain' => 'setDomain',
        'config' => 'setConfig',
        'nlu' => 'setNlu',
        'responses' => 'setResponses',
        'stories' => 'setStories',
        'force' => 'setForce',
        'saveToDefaultModelDirectory' => 'setSaveToDefaultModelDirectory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain' => 'getDomain',
        'config' => 'getConfig',
        'nlu' => 'getNlu',
        'responses' => 'getResponses',
        'stories' => 'getStories',
        'force' => 'getForce',
        'saveToDefaultModelDirectory' => 'getSaveToDefaultModelDirectory'
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['domain'] = $data['domain'] ?? null;
        $this->container['config'] = $data['config'] ?? null;
        $this->container['nlu'] = $data['nlu'] ?? null;
        $this->container['responses'] = $data['responses'] ?? null;
        $this->container['stories'] = $data['stories'] ?? null;
        $this->container['force'] = $data['force'] ?? null;
        $this->container['saveToDefaultModelDirectory'] = $data['saveToDefaultModelDirectory'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['config'] === null) {
            $invalidProperties[] = "'config' can't be null";
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
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain Rasa domain in plain text
     *
     * @return self
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets config
     *
     * @return string
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param string $config Rasa config in plain text
     *
     * @return self
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets nlu
     *
     * @return string|null
     */
    public function getNlu()
    {
        return $this->container['nlu'];
    }

    /**
     * Sets nlu
     *
     * @param string|null $nlu Rasa NLU training data in YAML format
     *
     * @return self
     */
    public function setNlu($nlu)
    {
        $this->container['nlu'] = $nlu;

        return $this;
    }

    /**
     * Gets responses
     *
     * @return string|null
     */
    public function getResponses()
    {
        return $this->container['responses'];
    }

    /**
     * Sets responses
     *
     * @param string|null $responses Rasa response texts for retrieval intents in YAML format
     *
     * @return self
     */
    public function setResponses($responses)
    {
        $this->container['responses'] = $responses;

        return $this;
    }

    /**
     * Gets stories
     *
     * @return string|null
     */
    public function getStories()
    {
        return $this->container['stories'];
    }

    /**
     * Sets stories
     *
     * @param string|null $stories Rasa Core stories in YAML format
     *
     * @return self
     */
    public function setStories($stories)
    {
        $this->container['stories'] = $stories;

        return $this;
    }

    /**
     * Gets force
     *
     * @return bool|null
     */
    public function getForce()
    {
        return $this->container['force'];
    }

    /**
     * Sets force
     *
     * @param bool|null $force Force a model training even if the data has not changed
     *
     * @return self
     */
    public function setForce($force)
    {
        $this->container['force'] = $force;

        return $this;
    }

    /**
     * Gets saveToDefaultModelDirectory
     *
     * @return bool|null
     */
    public function getSaveToDefaultModelDirectory()
    {
        return $this->container['saveToDefaultModelDirectory'];
    }

    /**
     * Sets saveToDefaultModelDirectory
     *
     * @param bool|null $saveToDefaultModelDirectory If `true` (default) the trained model will be saved in the default model directory, if `false` it will be saved in a temporary directory
     *
     * @return self
     */
    public function setSaveToDefaultModelDirectory($saveToDefaultModelDirectory)
    {
        $this->container['saveToDefaultModelDirectory'] = $saveToDefaultModelDirectory;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value)
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
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


