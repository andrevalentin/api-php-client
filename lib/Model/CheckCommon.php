<?php
/**
 * CheckCommon
 *
 * PHP version 5
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Onfido API
 *
 * The Onfido API is used to submit check requests.
 *
 * The version of the OpenAPI document: 2.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Onfido\Model;

use \ArrayAccess;
use \Onfido\ObjectSerializer;

/**
 * CheckCommon Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CheckCommon implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'check_common';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'href' => 'string',
        'status' => 'string',
        'result' => 'string',
        'download_uri' => 'string',
        'form_uri' => 'string',
        'redirect_uri' => 'string',
        'results_uri' => 'string',
        'type' => 'string',
        'report_type_groups' => 'string[]',
        'privacy_notices_read_consent_given' => 'bool',
        'tags' => 'string[]',
        'suppress_form_emails' => 'bool',
        'charge_applicant_for_check' => 'bool',
        'brand_id' => 'string',
        'asynchronous' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_at' => 'date-time',
        'href' => null,
        'status' => null,
        'result' => null,
        'download_uri' => null,
        'form_uri' => null,
        'redirect_uri' => null,
        'results_uri' => null,
        'type' => null,
        'report_type_groups' => null,
        'privacy_notices_read_consent_given' => null,
        'tags' => null,
        'suppress_form_emails' => null,
        'charge_applicant_for_check' => null,
        'brand_id' => null,
        'asynchronous' => null
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
        'id' => 'id',
        'created_at' => 'created_at',
        'href' => 'href',
        'status' => 'status',
        'result' => 'result',
        'download_uri' => 'download_uri',
        'form_uri' => 'form_uri',
        'redirect_uri' => 'redirect_uri',
        'results_uri' => 'results_uri',
        'type' => 'type',
        'report_type_groups' => 'report_type_groups',
        'privacy_notices_read_consent_given' => 'privacy_notices_read_consent_given',
        'tags' => 'tags',
        'suppress_form_emails' => 'suppress_form_emails',
        'charge_applicant_for_check' => 'charge_applicant_for_check',
        'brand_id' => 'brand_id',
        'asynchronous' => 'asynchronous'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'href' => 'setHref',
        'status' => 'setStatus',
        'result' => 'setResult',
        'download_uri' => 'setDownloadUri',
        'form_uri' => 'setFormUri',
        'redirect_uri' => 'setRedirectUri',
        'results_uri' => 'setResultsUri',
        'type' => 'setType',
        'report_type_groups' => 'setReportTypeGroups',
        'privacy_notices_read_consent_given' => 'setPrivacyNoticesReadConsentGiven',
        'tags' => 'setTags',
        'suppress_form_emails' => 'setSuppressFormEmails',
        'charge_applicant_for_check' => 'setChargeApplicantForCheck',
        'brand_id' => 'setBrandId',
        'asynchronous' => 'setAsynchronous'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'href' => 'getHref',
        'status' => 'getStatus',
        'result' => 'getResult',
        'download_uri' => 'getDownloadUri',
        'form_uri' => 'getFormUri',
        'redirect_uri' => 'getRedirectUri',
        'results_uri' => 'getResultsUri',
        'type' => 'getType',
        'report_type_groups' => 'getReportTypeGroups',
        'privacy_notices_read_consent_given' => 'getPrivacyNoticesReadConsentGiven',
        'tags' => 'getTags',
        'suppress_form_emails' => 'getSuppressFormEmails',
        'charge_applicant_for_check' => 'getChargeApplicantForCheck',
        'brand_id' => 'getBrandId',
        'asynchronous' => 'getAsynchronous'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['download_uri'] = isset($data['download_uri']) ? $data['download_uri'] : null;
        $this->container['form_uri'] = isset($data['form_uri']) ? $data['form_uri'] : null;
        $this->container['redirect_uri'] = isset($data['redirect_uri']) ? $data['redirect_uri'] : null;
        $this->container['results_uri'] = isset($data['results_uri']) ? $data['results_uri'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['report_type_groups'] = isset($data['report_type_groups']) ? $data['report_type_groups'] : null;
        $this->container['privacy_notices_read_consent_given'] = isset($data['privacy_notices_read_consent_given']) ? $data['privacy_notices_read_consent_given'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['suppress_form_emails'] = isset($data['suppress_form_emails']) ? $data['suppress_form_emails'] : null;
        $this->container['charge_applicant_for_check'] = isset($data['charge_applicant_for_check']) ? $data['charge_applicant_for_check'] : null;
        $this->container['brand_id'] = isset($data['brand_id']) ? $data['brand_id'] : null;
        $this->container['asynchronous'] = isset($data['asynchronous']) ? $data['asynchronous'] : null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The unique identifier for the check. Read-only.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at The date and time when this check was created. Read-only.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets href
     *
     * @return string|null
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string|null $href The uri of this resource. Read-only.
     *
     * @return $this
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The current state of the check in the checking process. Read-only.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets result
     *
     * @return string|null
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param string|null $result The overall result of the check, based on the results of the constituent reports. Read-only.
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets download_uri
     *
     * @return string|null
     */
    public function getDownloadUri()
    {
        return $this->container['download_uri'];
    }

    /**
     * Sets download_uri
     *
     * @param string|null $download_uri A link to a PDF output of the check results. Append `.pdf` to get the pdf file. Read-only.
     *
     * @return $this
     */
    public function setDownloadUri($download_uri)
    {
        $this->container['download_uri'] = $download_uri;

        return $this;
    }

    /**
     * Gets form_uri
     *
     * @return string|null
     */
    public function getFormUri()
    {
        return $this->container['form_uri'];
    }

    /**
     * Sets form_uri
     *
     * @param string|null $form_uri A link to the applicant form, if the check is of type `standard`. Read-only.
     *
     * @return $this
     */
    public function setFormUri($form_uri)
    {
        $this->container['form_uri'] = $form_uri;

        return $this;
    }

    /**
     * Gets redirect_uri
     *
     * @return string|null
     */
    public function getRedirectUri()
    {
        return $this->container['redirect_uri'];
    }

    /**
     * Sets redirect_uri
     *
     * @param string|null $redirect_uri For `standard` checks, redirect to this URI when the applicant has submitted their data. Read-only.
     *
     * @return $this
     */
    public function setRedirectUri($redirect_uri)
    {
        $this->container['redirect_uri'] = $redirect_uri;

        return $this;
    }

    /**
     * Gets results_uri
     *
     * @return string|null
     */
    public function getResultsUri()
    {
        return $this->container['results_uri'];
    }

    /**
     * Sets results_uri
     *
     * @param string|null $results_uri A link to the corresponding results page on the Onfido dashboard.
     *
     * @return $this
     */
    public function setResultsUri($results_uri)
    {
        $this->container['results_uri'] = $results_uri;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of the check, `standard` or `express`.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets report_type_groups
     *
     * @return string[]|null
     */
    public function getReportTypeGroups()
    {
        return $this->container['report_type_groups'];
    }

    /**
     * Sets report_type_groups
     *
     * @param string[]|null $report_type_groups Array containing ids of the Report type groups being requested for. Write-only.
     *
     * @return $this
     */
    public function setReportTypeGroups($report_type_groups)
    {
        $this->container['report_type_groups'] = $report_type_groups;

        return $this;
    }

    /**
     * Gets privacy_notices_read_consent_given
     *
     * @return bool|null
     */
    public function getPrivacyNoticesReadConsentGiven()
    {
        return $this->container['privacy_notices_read_consent_given'];
    }

    /**
     * Sets privacy_notices_read_consent_given
     *
     * @param bool|null $privacy_notices_read_consent_given Indicates whether the privacy notices and terms of service have been read and, where specific laws require, that consent has been given for Onfido.
     *
     * @return $this
     */
    public function setPrivacyNoticesReadConsentGiven($privacy_notices_read_consent_given)
    {
        $this->container['privacy_notices_read_consent_given'] = $privacy_notices_read_consent_given;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags Array of tags being assigned to this check.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets suppress_form_emails
     *
     * @return bool|null
     */
    public function getSuppressFormEmails()
    {
        return $this->container['suppress_form_emails'];
    }

    /**
     * Sets suppress_form_emails
     *
     * @param bool|null $suppress_form_emails For standard checks, applicant form will not be automatically sent if this is set to true. You can manually send the form at any time after the check has been created, using the link found in the form_uri attribute of the check object. Write-only. Defaults to false.
     *
     * @return $this
     */
    public function setSuppressFormEmails($suppress_form_emails)
    {
        $this->container['suppress_form_emails'] = $suppress_form_emails;

        return $this;
    }

    /**
     * Gets charge_applicant_for_check
     *
     * @return bool|null
     */
    public function getChargeApplicantForCheck()
    {
        return $this->container['charge_applicant_for_check'];
    }

    /**
     * Sets charge_applicant_for_check
     *
     * @param bool|null $charge_applicant_for_check For standard checks, applicants will be presented with a mandatory payment screen before they can submit the applicant form, if this is set to true. In this case, your account will not be charged. Write-only. Defaults to false.
     *
     * @return $this
     */
    public function setChargeApplicantForCheck($charge_applicant_for_check)
    {
        $this->container['charge_applicant_for_check'] = $charge_applicant_for_check;

        return $this;
    }

    /**
     * Gets brand_id
     *
     * @return string|null
     */
    public function getBrandId()
    {
        return $this->container['brand_id'];
    }

    /**
     * Sets brand_id
     *
     * @param string|null $brand_id ID of the brand under which the check should be conducted. Write-only.
     *
     * @return $this
     */
    public function setBrandId($brand_id)
    {
        $this->container['brand_id'] = $brand_id;

        return $this;
    }

    /**
     * Gets asynchronous
     *
     * @return bool|null
     */
    public function getAsynchronous()
    {
        return $this->container['asynchronous'];
    }

    /**
     * Sets asynchronous
     *
     * @param bool|null $asynchronous If this is set to true, we will queue checks for processing and return a response immediately. You can configure webhooks to notify you when the report is complete. Write-only. Defaults to false.
     *
     * @return $this
     */
    public function setAsynchronous($asynchronous)
    {
        $this->container['asynchronous'] = $asynchronous;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
}


