<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/user_interest.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A user interest: a particular interest-based vertical to be targeted.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.UserInterest</code>
 */
class UserInterest extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the user interest.
     * User interest resource names have the form:
     * `customers/{customer_id}/userInterests/{user_interest_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. Taxonomy type of the user interest.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.UserInterestTaxonomyTypeEnum.UserInterestTaxonomyType taxonomy_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $taxonomy_type = 0;
    /**
     * Output only. The ID of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value user_interest_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $user_interest_id = null;
    /**
     * Output only. The name of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = null;
    /**
     * Output only. The parent of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_interest_parent = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $user_interest_parent = null;
    /**
     * Output only. True if the user interest is launched to all channels and locales.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue launched_to_all = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $launched_to_all = null;
    /**
     * Output only. Availability information of the user interest.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.CriterionCategoryAvailability availabilities = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $availabilities;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the user interest.
     *           User interest resource names have the form:
     *           `customers/{customer_id}/userInterests/{user_interest_id}`
     *     @type int $taxonomy_type
     *           Output only. Taxonomy type of the user interest.
     *     @type \Google\Protobuf\Int64Value $user_interest_id
     *           Output only. The ID of the user interest.
     *     @type \Google\Protobuf\StringValue $name
     *           Output only. The name of the user interest.
     *     @type \Google\Protobuf\StringValue $user_interest_parent
     *           Output only. The parent of the user interest.
     *     @type \Google\Protobuf\BoolValue $launched_to_all
     *           Output only. True if the user interest is launched to all channels and locales.
     *     @type \Google\Ads\GoogleAds\V3\Common\CriterionCategoryAvailability[]|\Google\Protobuf\Internal\RepeatedField $availabilities
     *           Output only. Availability information of the user interest.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\UserInterest::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the user interest.
     * User interest resource names have the form:
     * `customers/{customer_id}/userInterests/{user_interest_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the user interest.
     * User interest resource names have the form:
     * `customers/{customer_id}/userInterests/{user_interest_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. Taxonomy type of the user interest.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.UserInterestTaxonomyTypeEnum.UserInterestTaxonomyType taxonomy_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getTaxonomyType()
    {
        return $this->taxonomy_type;
    }

    /**
     * Output only. Taxonomy type of the user interest.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.UserInterestTaxonomyTypeEnum.UserInterestTaxonomyType taxonomy_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setTaxonomyType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\UserInterestTaxonomyTypeEnum_UserInterestTaxonomyType::class);
        $this->taxonomy_type = $var;

        return $this;
    }

    /**
     * Output only. The ID of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value user_interest_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getUserInterestId()
    {
        return $this->user_interest_id;
    }

    /**
     * Returns the unboxed value from <code>getUserInterestId()</code>

     * Output only. The ID of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value user_interest_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getUserInterestIdUnwrapped()
    {
        return $this->readWrapperValue("user_interest_id");
    }

    /**
     * Output only. The ID of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value user_interest_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setUserInterestId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->user_interest_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The ID of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value user_interest_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setUserInterestIdUnwrapped($var)
    {
        $this->writeWrapperValue("user_interest_id", $var);
        return $this;}

    /**
     * Output only. The name of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * Output only. The name of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        return $this->readWrapperValue("name");
    }

    /**
     * Output only. The name of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The name of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $this->writeWrapperValue("name", $var);
        return $this;}

    /**
     * Output only. The parent of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_interest_parent = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getUserInterestParent()
    {
        return $this->user_interest_parent;
    }

    /**
     * Returns the unboxed value from <code>getUserInterestParent()</code>

     * Output only. The parent of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_interest_parent = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getUserInterestParentUnwrapped()
    {
        return $this->readWrapperValue("user_interest_parent");
    }

    /**
     * Output only. The parent of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_interest_parent = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setUserInterestParent($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->user_interest_parent = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The parent of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_interest_parent = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setUserInterestParentUnwrapped($var)
    {
        $this->writeWrapperValue("user_interest_parent", $var);
        return $this;}

    /**
     * Output only. True if the user interest is launched to all channels and locales.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue launched_to_all = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getLaunchedToAll()
    {
        return $this->launched_to_all;
    }

    /**
     * Returns the unboxed value from <code>getLaunchedToAll()</code>

     * Output only. True if the user interest is launched to all channels and locales.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue launched_to_all = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool|null
     */
    public function getLaunchedToAllUnwrapped()
    {
        return $this->readWrapperValue("launched_to_all");
    }

    /**
     * Output only. True if the user interest is launched to all channels and locales.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue launched_to_all = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setLaunchedToAll($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->launched_to_all = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Output only. True if the user interest is launched to all channels and locales.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue launched_to_all = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setLaunchedToAllUnwrapped($var)
    {
        $this->writeWrapperValue("launched_to_all", $var);
        return $this;}

    /**
     * Output only. Availability information of the user interest.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.CriterionCategoryAvailability availabilities = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvailabilities()
    {
        return $this->availabilities;
    }

    /**
     * Output only. Availability information of the user interest.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.CriterionCategoryAvailability availabilities = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V3\Common\CriterionCategoryAvailability[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvailabilities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V3\Common\CriterionCategoryAvailability::class);
        $this->availabilities = $arr;

        return $this;
    }

}

