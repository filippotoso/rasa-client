<?php
/**
 * ResponseSelectorTestError
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
 * ResponseSelectorTestError Class Doc Comment
 *
 * @category Class
 * @description Error during response prediction which was made during testing
 * @package  FilippoToso\Rasa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ResponseSelectorTestError implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResponseSelectorTestError';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'text' => 'string',
        'intentResponseKeyTarget' => 'string',
        'intentResponseKeyPrediction' => '\FilippoToso\Rasa\Model\Intent'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'text' => null,
        'intentResponseKeyTarget' => null,
        'intentResponseKeyPrediction' => null
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
        'text' => 'text',
        'intentResponseKeyTarget' => 'intent_response_key_target',
        'intentResponseKeyPrediction' => 'intent_response_key_prediction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText',
        'intentResponseKeyTarget' => 'setIntentResponseKeyTarget',
        'intentResponseKeyPrediction' => 'setIntentResponseKeyPrediction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText',
        'intentResponseKeyTarget' => 'getIntentResponseKeyTarget',
        'intentResponseKeyPrediction' => 'getIntentResponseKeyPrediction'
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
        $this->container['text'] = $data['text'] ?? null;
        $this->container['intentResponseKeyTarget'] = $data['intentResponseKeyTarget'] ?? null;
        $this->container['intentResponseKeyPrediction'] = $data['intentResponseKeyPrediction'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text Test message
     *
     * @return self
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets intentResponseKeyTarget
     *
     * @return string|null
     */
    public function getIntentResponseKeyTarget()
    {
        return $this->container['intentResponseKeyTarget'];
    }

    /**
     * Sets intentResponseKeyTarget
     *
     * @param string|null $intentResponseKeyTarget Expected retrieval intent
     *
     * @return self
     */
    public function setIntentResponseKeyTarget($intentResponseKeyTarget)
    {
        $this->container['intentResponseKeyTarget'] = $intentResponseKeyTarget;

        return $this;
    }

    /**
     * Gets intentResponseKeyPrediction
     *
     * @return \FilippoToso\Rasa\Model\Intent|null
     */
    public function getIntentResponseKeyPrediction()
    {
        return $this->container['intentResponseKeyPrediction'];
    }

    /**
     * Sets intentResponseKeyPrediction
     *
     * @param \FilippoToso\Rasa\Model\Intent|null $intentResponseKeyPrediction intentResponseKeyPrediction
     *
     * @return self
     */
    public function setIntentResponseKeyPrediction($intentResponseKeyPrediction)
    {
        $this->container['intentResponseKeyPrediction'] = $intentResponseKeyPrediction;

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

