<?php
/**
 * ModelRequest
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
 * ModelRequest Class Doc Comment
 *
 * @category Class
 * @package  FilippoToso\Rasa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ModelRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ModelRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'modelFile' => 'string',
        'modelServer' => '\FilippoToso\Rasa\Model\EndpointConfig',
        'remoteStorage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'modelFile' => null,
        'modelServer' => null,
        'remoteStorage' => null
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
        'modelFile' => 'model_file',
        'modelServer' => 'model_server',
        'remoteStorage' => 'remote_storage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'modelFile' => 'setModelFile',
        'modelServer' => 'setModelServer',
        'remoteStorage' => 'setRemoteStorage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'modelFile' => 'getModelFile',
        'modelServer' => 'getModelServer',
        'remoteStorage' => 'getRemoteStorage'
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

    const REMOTE_STORAGE_AWS = 'aws';
    const REMOTE_STORAGE_GCS = 'gcs';
    const REMOTE_STORAGE_AZURE = 'azure';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRemoteStorageAllowableValues()
    {
        return [
            self::REMOTE_STORAGE_AWS,
            self::REMOTE_STORAGE_GCS,
            self::REMOTE_STORAGE_AZURE,
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['modelFile'] = $data['modelFile'] ?? null;
        $this->container['modelServer'] = $data['modelServer'] ?? null;
        $this->container['remoteStorage'] = $data['remoteStorage'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRemoteStorageAllowableValues();
        if (!is_null($this->container['remoteStorage']) && !in_array($this->container['remoteStorage'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'remoteStorage', must be one of '%s'",
                $this->container['remoteStorage'],
                implode("', '", $allowedValues)
            );
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
     * Gets modelFile
     *
     * @return string|null
     */
    public function getModelFile()
    {
        return $this->container['modelFile'];
    }

    /**
     * Sets modelFile
     *
     * @param string|null $modelFile Path to model file
     *
     * @return self
     */
    public function setModelFile($modelFile)
    {
        $this->container['modelFile'] = $modelFile;

        return $this;
    }

    /**
     * Gets modelServer
     *
     * @return \FilippoToso\Rasa\Model\EndpointConfig|null
     */
    public function getModelServer()
    {
        return $this->container['modelServer'];
    }

    /**
     * Sets modelServer
     *
     * @param \FilippoToso\Rasa\Model\EndpointConfig|null $modelServer modelServer
     *
     * @return self
     */
    public function setModelServer($modelServer)
    {
        $this->container['modelServer'] = $modelServer;

        return $this;
    }

    /**
     * Gets remoteStorage
     *
     * @return string|null
     */
    public function getRemoteStorage()
    {
        return $this->container['remoteStorage'];
    }

    /**
     * Sets remoteStorage
     *
     * @param string|null $remoteStorage Name of remote storage system
     *
     * @return self
     */
    public function setRemoteStorage($remoteStorage)
    {
        $allowedValues = $this->getRemoteStorageAllowableValues();
        if (!is_null($remoteStorage) && !in_array($remoteStorage, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'remoteStorage', must be one of '%s'",
                    $remoteStorage,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['remoteStorage'] = $remoteStorage;

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


