<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/campaign.proto

namespace Google\Ads\GoogleAds\V0\Resources\Campaign;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The setting for Shopping campaigns. Defines the universe of products that
 * can be advertised by the campaign, and how this campaign interacts with
 * other Shopping campaigns.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.Campaign.ShoppingSetting</code>
 */
class ShoppingSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the Merchant Center account.
     * This field is required for create operations. This field is immutable for
     * campaigns of type AdvertisingChannelType.SHOPPING.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value merchant_id = 1;</code>
     */
    private $merchant_id = null;
    /**
     * Sales country of products to include in the campaign.
     * This field is required for create operations. This field is immutable.
     * This field must be set to 'ZZ' for campaigns of types other than
     * AdvertisingChannelType.SHOPPING.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue sales_country = 2;</code>
     */
    private $sales_country = null;
    /**
     * Priority of the campaign. Campaigns with numerically higher priorities
     * take precedence over those with lower priorities.
     * This field is required for create operations. Allowed values are between
     * 0 and 2, inclusive. This field must be set to 3 for campaigns of type
     * AdvertisingChannelSubType.SHOPPING_SMART_ADS.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value campaign_priority = 3;</code>
     */
    private $campaign_priority = null;
    /**
     * Enable local inventory ads.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_local = 4;</code>
     */
    private $enable_local = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $merchant_id
     *           ID of the Merchant Center account.
     *           This field is required for create operations. This field is immutable for
     *           campaigns of type AdvertisingChannelType.SHOPPING.
     *     @type \Google\Protobuf\StringValue $sales_country
     *           Sales country of products to include in the campaign.
     *           This field is required for create operations. This field is immutable.
     *           This field must be set to 'ZZ' for campaigns of types other than
     *           AdvertisingChannelType.SHOPPING.
     *     @type \Google\Protobuf\Int32Value $campaign_priority
     *           Priority of the campaign. Campaigns with numerically higher priorities
     *           take precedence over those with lower priorities.
     *           This field is required for create operations. Allowed values are between
     *           0 and 2, inclusive. This field must be set to 3 for campaigns of type
     *           AdvertisingChannelSubType.SHOPPING_SMART_ADS.
     *     @type \Google\Protobuf\BoolValue $enable_local
     *           Enable local inventory ads.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\Campaign::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of the Merchant Center account.
     * This field is required for create operations. This field is immutable for
     * campaigns of type AdvertisingChannelType.SHOPPING.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value merchant_id = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }

    /**
     * ID of the Merchant Center account.
     * This field is required for create operations. This field is immutable for
     * campaigns of type AdvertisingChannelType.SHOPPING.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value merchant_id = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setMerchantId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->merchant_id = $var;

        return $this;
    }

    /**
     * Sales country of products to include in the campaign.
     * This field is required for create operations. This field is immutable.
     * This field must be set to 'ZZ' for campaigns of types other than
     * AdvertisingChannelType.SHOPPING.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue sales_country = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getSalesCountry()
    {
        return $this->sales_country;
    }

    /**
     * Sales country of products to include in the campaign.
     * This field is required for create operations. This field is immutable.
     * This field must be set to 'ZZ' for campaigns of types other than
     * AdvertisingChannelType.SHOPPING.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue sales_country = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSalesCountry($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->sales_country = $var;

        return $this;
    }

    /**
     * Priority of the campaign. Campaigns with numerically higher priorities
     * take precedence over those with lower priorities.
     * This field is required for create operations. Allowed values are between
     * 0 and 2, inclusive. This field must be set to 3 for campaigns of type
     * AdvertisingChannelSubType.SHOPPING_SMART_ADS.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value campaign_priority = 3;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getCampaignPriority()
    {
        return $this->campaign_priority;
    }

    /**
     * Priority of the campaign. Campaigns with numerically higher priorities
     * take precedence over those with lower priorities.
     * This field is required for create operations. Allowed values are between
     * 0 and 2, inclusive. This field must be set to 3 for campaigns of type
     * AdvertisingChannelSubType.SHOPPING_SMART_ADS.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value campaign_priority = 3;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setCampaignPriority($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->campaign_priority = $var;

        return $this;
    }

    /**
     * Enable local inventory ads.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_local = 4;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getEnableLocal()
    {
        return $this->enable_local;
    }

    /**
     * Enable local inventory ads.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_local = 4;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setEnableLocal($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->enable_local = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ShoppingSetting::class, \Google\Ads\GoogleAds\V0\Resources\Campaign_ShoppingSetting::class);

