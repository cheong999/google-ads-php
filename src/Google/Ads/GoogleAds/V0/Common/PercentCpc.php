<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/common/bidding.proto

namespace Google\Ads\GoogleAds\V0\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A bidding strategy where bids are a fraction of the advertised price for
 * some good or service.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.common.PercentCpc</code>
 */
class PercentCpc extends \Google\Protobuf\Internal\Message
{
    /**
     * Maximum bid limit that can be set by the bid strategy. This is
     * an optional field entered by the advertiser and specified in local micros.
     * Note: A zero value is interpreted in the same way as having bid_ceiling
     * undefined.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 1;</code>
     */
    private $cpc_bid_ceiling_micros = null;
    /**
     * Adjusts the bid for each auction upward or downward, depending on the
     * likelihood of a conversion. Individual bids may exceed
     * cpc_bid_ceiling_micros, but the average bid amount for a campaign should
     * not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enhanced_cpc_enabled = 2;</code>
     */
    private $enhanced_cpc_enabled = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $cpc_bid_ceiling_micros
     *           Maximum bid limit that can be set by the bid strategy. This is
     *           an optional field entered by the advertiser and specified in local micros.
     *           Note: A zero value is interpreted in the same way as having bid_ceiling
     *           undefined.
     *     @type \Google\Protobuf\BoolValue $enhanced_cpc_enabled
     *           Adjusts the bid for each auction upward or downward, depending on the
     *           likelihood of a conversion. Individual bids may exceed
     *           cpc_bid_ceiling_micros, but the average bid amount for a campaign should
     *           not.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\Bidding::initOnce();
        parent::__construct($data);
    }

    /**
     * Maximum bid limit that can be set by the bid strategy. This is
     * an optional field entered by the advertiser and specified in local micros.
     * Note: A zero value is interpreted in the same way as having bid_ceiling
     * undefined.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCpcBidCeilingMicros()
    {
        return $this->cpc_bid_ceiling_micros;
    }

    /**
     * Maximum bid limit that can be set by the bid strategy. This is
     * an optional field entered by the advertiser and specified in local micros.
     * Note: A zero value is interpreted in the same way as having bid_ceiling
     * undefined.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCpcBidCeilingMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->cpc_bid_ceiling_micros = $var;

        return $this;
    }

    /**
     * Adjusts the bid for each auction upward or downward, depending on the
     * likelihood of a conversion. Individual bids may exceed
     * cpc_bid_ceiling_micros, but the average bid amount for a campaign should
     * not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enhanced_cpc_enabled = 2;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getEnhancedCpcEnabled()
    {
        return $this->enhanced_cpc_enabled;
    }

    /**
     * Adjusts the bid for each auction upward or downward, depending on the
     * likelihood of a conversion. Individual bids may exceed
     * cpc_bid_ceiling_micros, but the average bid amount for a campaign should
     * not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enhanced_cpc_enabled = 2;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setEnhancedCpcEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->enhanced_cpc_enabled = $var;

        return $this;
    }

}

