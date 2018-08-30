<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V0\Services\ApplyRecommendationOperation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters to use when applying Target CPA recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.services.ApplyRecommendationOperation.TargetCpaOptInParameters</code>
 */
class TargetCpaOptInParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * Average CPA to use for Target CPA bidding strategy. This is a required
     * field.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value target_cpa_micros = 1;</code>
     */
    private $target_cpa_micros = null;
    /**
     * Optional, budget amount to set for the campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value new_campaign_budget_amount_micros = 2;</code>
     */
    private $new_campaign_budget_amount_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $target_cpa_micros
     *           Average CPA to use for Target CPA bidding strategy. This is a required
     *           field.
     *     @type \Google\Protobuf\Int64Value $new_campaign_budget_amount_micros
     *           Optional, budget amount to set for the campaign.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Services\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Average CPA to use for Target CPA bidding strategy. This is a required
     * field.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value target_cpa_micros = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getTargetCpaMicros()
    {
        return $this->target_cpa_micros;
    }

    /**
     * Average CPA to use for Target CPA bidding strategy. This is a required
     * field.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value target_cpa_micros = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setTargetCpaMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->target_cpa_micros = $var;

        return $this;
    }

    /**
     * Optional, budget amount to set for the campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value new_campaign_budget_amount_micros = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getNewCampaignBudgetAmountMicros()
    {
        return $this->new_campaign_budget_amount_micros;
    }

    /**
     * Optional, budget amount to set for the campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value new_campaign_budget_amount_micros = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setNewCampaignBudgetAmountMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->new_campaign_budget_amount_micros = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TargetCpaOptInParameters::class, \Google\Ads\GoogleAds\V0\Services\ApplyRecommendationOperation_TargetCpaOptInParameters::class);

