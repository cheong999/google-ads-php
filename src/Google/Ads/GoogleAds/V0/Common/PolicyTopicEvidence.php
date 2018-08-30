<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/common/policy.proto

namespace Google\Ads\GoogleAds\V0\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Additional information that explains a policy finding.
 * Next Id: 8
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.common.PolicyTopicEvidence</code>
 */
class PolicyTopicEvidence extends \Google\Protobuf\Internal\Message
{
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $http_code
     *           HTTP code returned when the final URL was crawled.
     *     @type \Google\Ads\GoogleAds\V0\Common\PolicyTopicEvidence\WebsiteList $website_list
     *           List of websites linked with this resource.
     *     @type \Google\Ads\GoogleAds\V0\Common\PolicyTopicEvidence\TextList $text_list
     *           List of evidence found in the text of a resource.
     *     @type string $language_code
     *           The language the resource was detected to be written in.
     *           This is an IETF language tag such as "en-US".
     *     @type \Google\Ads\GoogleAds\V0\Common\PolicyTopicEvidence\DestinationTextList $destination_text_list
     *           The text in the destination of the resource that is causing a policy
     *           finding.
     *     @type \Google\Ads\GoogleAds\V0\Common\PolicyTopicEvidence\DestinationMismatch $destination_mismatch
     *           Mismatch between the destinations of a resource's URLs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * HTTP code returned when the final URL was crawled.
     *
     * Generated from protobuf field <code>int32 http_code = 2;</code>
     * @return int
     */
    public function getHttpCode()
    {
        return $this->readOneof(2);
    }

    /**
     * HTTP code returned when the final URL was crawled.
     *
     * Generated from protobuf field <code>int32 http_code = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHttpCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * List of websites linked with this resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.PolicyTopicEvidence.WebsiteList website_list = 3;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\PolicyTopicEvidence\WebsiteList
     */
    public function getWebsiteList()
    {
        return $this->readOneof(3);
    }

    /**
     * List of websites linked with this resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.PolicyTopicEvidence.WebsiteList website_list = 3;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\PolicyTopicEvidence\WebsiteList $var
     * @return $this
     */
    public function setWebsiteList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\PolicyTopicEvidence_WebsiteList::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * List of evidence found in the text of a resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.PolicyTopicEvidence.TextList text_list = 4;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\PolicyTopicEvidence\TextList
     */
    public function getTextList()
    {
        return $this->readOneof(4);
    }

    /**
     * List of evidence found in the text of a resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.PolicyTopicEvidence.TextList text_list = 4;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\PolicyTopicEvidence\TextList $var
     * @return $this
     */
    public function setTextList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\PolicyTopicEvidence_TextList::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The language the resource was detected to be written in.
     * This is an IETF language tag such as "en-US".
     *
     * Generated from protobuf field <code>string language_code = 5;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->readOneof(5);
    }

    /**
     * The language the resource was detected to be written in.
     * This is an IETF language tag such as "en-US".
     *
     * Generated from protobuf field <code>string language_code = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The text in the destination of the resource that is causing a policy
     * finding.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.PolicyTopicEvidence.DestinationTextList destination_text_list = 6;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\PolicyTopicEvidence\DestinationTextList
     */
    public function getDestinationTextList()
    {
        return $this->readOneof(6);
    }

    /**
     * The text in the destination of the resource that is causing a policy
     * finding.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.PolicyTopicEvidence.DestinationTextList destination_text_list = 6;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\PolicyTopicEvidence\DestinationTextList $var
     * @return $this
     */
    public function setDestinationTextList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\PolicyTopicEvidence_DestinationTextList::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Mismatch between the destinations of a resource's URLs.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.PolicyTopicEvidence.DestinationMismatch destination_mismatch = 7;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\PolicyTopicEvidence\DestinationMismatch
     */
    public function getDestinationMismatch()
    {
        return $this->readOneof(7);
    }

    /**
     * Mismatch between the destinations of a resource's URLs.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.PolicyTopicEvidence.DestinationMismatch destination_mismatch = 7;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\PolicyTopicEvidence\DestinationMismatch $var
     * @return $this
     */
    public function setDestinationMismatch($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\PolicyTopicEvidence_DestinationMismatch::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}

