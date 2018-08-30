<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/campaign_shared_set.proto

namespace Google\Ads\GoogleAds\V0\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CampaignSharedSets are used for managing the shared sets associated with a
 * campaign.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.CampaignSharedSet</code>
 */
class CampaignSharedSet extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the campaign shared set.
     * Campaign shared set resource names have the form:
     * `customers/{customer_id}/campaignSharedSets/{campaign_id}_{shared_set_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The campaign to which the campaign shared set belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 3;</code>
     */
    private $campaign = null;
    /**
     * The shared set associated with the campaign. This may be a negative keyword
     * shared set of another customer. This customer should be a manager of the
     * other customer, otherwise the campaign shared set will exist but have no
     * serving effect. Only negative keyword shared sets can be associated with
     * Shopping campaigns. Only negative placement shared sets can be associated
     * with Display mobile app campaigns.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue shared_set = 4;</code>
     */
    private $shared_set = null;
    /**
     * The status of this campaign shared set. Read only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.CampaignSharedSetStatusEnum.CampaignSharedSetStatus status = 2;</code>
     */
    private $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the campaign shared set.
     *           Campaign shared set resource names have the form:
     *           `customers/{customer_id}/campaignSharedSets/{campaign_id}_{shared_set_id}`
     *     @type \Google\Protobuf\StringValue $campaign
     *           The campaign to which the campaign shared set belongs.
     *     @type \Google\Protobuf\StringValue $shared_set
     *           The shared set associated with the campaign. This may be a negative keyword
     *           shared set of another customer. This customer should be a manager of the
     *           other customer, otherwise the campaign shared set will exist but have no
     *           serving effect. Only negative keyword shared sets can be associated with
     *           Shopping campaigns. Only negative placement shared sets can be associated
     *           with Display mobile app campaigns.
     *     @type int $status
     *           The status of this campaign shared set. Read only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\CampaignSharedSet::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the campaign shared set.
     * Campaign shared set resource names have the form:
     * `customers/{customer_id}/campaignSharedSets/{campaign_id}_{shared_set_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the campaign shared set.
     * Campaign shared set resource names have the form:
     * `customers/{customer_id}/campaignSharedSets/{campaign_id}_{shared_set_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The campaign to which the campaign shared set belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * The campaign to which the campaign shared set belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign = $var;

        return $this;
    }

    /**
     * The shared set associated with the campaign. This may be a negative keyword
     * shared set of another customer. This customer should be a manager of the
     * other customer, otherwise the campaign shared set will exist but have no
     * serving effect. Only negative keyword shared sets can be associated with
     * Shopping campaigns. Only negative placement shared sets can be associated
     * with Display mobile app campaigns.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue shared_set = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getSharedSet()
    {
        return $this->shared_set;
    }

    /**
     * The shared set associated with the campaign. This may be a negative keyword
     * shared set of another customer. This customer should be a manager of the
     * other customer, otherwise the campaign shared set will exist but have no
     * serving effect. Only negative keyword shared sets can be associated with
     * Shopping campaigns. Only negative placement shared sets can be associated
     * with Display mobile app campaigns.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue shared_set = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSharedSet($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->shared_set = $var;

        return $this;
    }

    /**
     * The status of this campaign shared set. Read only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.CampaignSharedSetStatusEnum.CampaignSharedSetStatus status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this campaign shared set. Read only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.CampaignSharedSetStatusEnum.CampaignSharedSetStatus status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\CampaignSharedSetStatusEnum_CampaignSharedSetStatus::class);
        $this->status = $var;

        return $this;
    }

}

