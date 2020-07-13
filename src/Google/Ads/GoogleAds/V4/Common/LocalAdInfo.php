<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A local ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.LocalAdInfo</code>
 */
class LocalAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * List of text assets for headlines. When the ad serves the headlines will
     * be selected from this list. At least 1 and at most 5 headlines must be
     * specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdTextAsset headlines = 1;</code>
     */
    private $headlines;
    /**
     * List of text assets for descriptions. When the ad serves the descriptions
     * will be selected from this list. At least 1 and at most 5 descriptions must
     * be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdTextAsset descriptions = 2;</code>
     */
    private $descriptions;
    /**
     * List of text assets for call-to-actions. When the ad serves the
     * call-to-actions will be selected from this list. Call-to-actions are
     * optional and at most 5 can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdTextAsset call_to_actions = 3;</code>
     */
    private $call_to_actions;
    /**
     * List of marketing image assets that may be displayed with the ad. The
     * images must be 314x600 pixels or 320x320 pixels. At least 1 and at most
     * 20 image assets must be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdImageAsset marketing_images = 4;</code>
     */
    private $marketing_images;
    /**
     * List of logo image assets that may be displayed with the ad. The images
     * must be 128x128 pixels and not larger than 120KB. At least 1 and at most 5
     * image assets must be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdImageAsset logo_images = 5;</code>
     */
    private $logo_images;
    /**
     * List of YouTube video assets that may be displayed with the ad. Videos
     * are optional and at most 20 can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdVideoAsset videos = 6;</code>
     */
    private $videos;
    /**
     * First part of optional text that may appear appended to the url displayed
     * in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path1 = 7;</code>
     */
    protected $path1 = null;
    /**
     * Second part of optional text that may appear appended to the url displayed
     * in the ad. This field can only be set when path1 is also set.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path2 = 8;</code>
     */
    protected $path2 = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V4\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $headlines
     *           List of text assets for headlines. When the ad serves the headlines will
     *           be selected from this list. At least 1 and at most 5 headlines must be
     *           specified.
     *     @type \Google\Ads\GoogleAds\V4\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $descriptions
     *           List of text assets for descriptions. When the ad serves the descriptions
     *           will be selected from this list. At least 1 and at most 5 descriptions must
     *           be specified.
     *     @type \Google\Ads\GoogleAds\V4\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $call_to_actions
     *           List of text assets for call-to-actions. When the ad serves the
     *           call-to-actions will be selected from this list. Call-to-actions are
     *           optional and at most 5 can be specified.
     *     @type \Google\Ads\GoogleAds\V4\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $marketing_images
     *           List of marketing image assets that may be displayed with the ad. The
     *           images must be 314x600 pixels or 320x320 pixels. At least 1 and at most
     *           20 image assets must be specified.
     *     @type \Google\Ads\GoogleAds\V4\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $logo_images
     *           List of logo image assets that may be displayed with the ad. The images
     *           must be 128x128 pixels and not larger than 120KB. At least 1 and at most 5
     *           image assets must be specified.
     *     @type \Google\Ads\GoogleAds\V4\Common\AdVideoAsset[]|\Google\Protobuf\Internal\RepeatedField $videos
     *           List of YouTube video assets that may be displayed with the ad. Videos
     *           are optional and at most 20 can be specified.
     *     @type \Google\Protobuf\StringValue $path1
     *           First part of optional text that may appear appended to the url displayed
     *           in the ad.
     *     @type \Google\Protobuf\StringValue $path2
     *           Second part of optional text that may appear appended to the url displayed
     *           in the ad. This field can only be set when path1 is also set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * List of text assets for headlines. When the ad serves the headlines will
     * be selected from this list. At least 1 and at most 5 headlines must be
     * specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdTextAsset headlines = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeadlines()
    {
        return $this->headlines;
    }

    /**
     * List of text assets for headlines. When the ad serves the headlines will
     * be selected from this list. At least 1 and at most 5 headlines must be
     * specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdTextAsset headlines = 1;</code>
     * @param \Google\Ads\GoogleAds\V4\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeadlines($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V4\Common\AdTextAsset::class);
        $this->headlines = $arr;

        return $this;
    }

    /**
     * List of text assets for descriptions. When the ad serves the descriptions
     * will be selected from this list. At least 1 and at most 5 descriptions must
     * be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdTextAsset descriptions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * List of text assets for descriptions. When the ad serves the descriptions
     * will be selected from this list. At least 1 and at most 5 descriptions must
     * be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdTextAsset descriptions = 2;</code>
     * @param \Google\Ads\GoogleAds\V4\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDescriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V4\Common\AdTextAsset::class);
        $this->descriptions = $arr;

        return $this;
    }

    /**
     * List of text assets for call-to-actions. When the ad serves the
     * call-to-actions will be selected from this list. Call-to-actions are
     * optional and at most 5 can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdTextAsset call_to_actions = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCallToActions()
    {
        return $this->call_to_actions;
    }

    /**
     * List of text assets for call-to-actions. When the ad serves the
     * call-to-actions will be selected from this list. Call-to-actions are
     * optional and at most 5 can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdTextAsset call_to_actions = 3;</code>
     * @param \Google\Ads\GoogleAds\V4\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCallToActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V4\Common\AdTextAsset::class);
        $this->call_to_actions = $arr;

        return $this;
    }

    /**
     * List of marketing image assets that may be displayed with the ad. The
     * images must be 314x600 pixels or 320x320 pixels. At least 1 and at most
     * 20 image assets must be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdImageAsset marketing_images = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMarketingImages()
    {
        return $this->marketing_images;
    }

    /**
     * List of marketing image assets that may be displayed with the ad. The
     * images must be 314x600 pixels or 320x320 pixels. At least 1 and at most
     * 20 image assets must be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdImageAsset marketing_images = 4;</code>
     * @param \Google\Ads\GoogleAds\V4\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMarketingImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V4\Common\AdImageAsset::class);
        $this->marketing_images = $arr;

        return $this;
    }

    /**
     * List of logo image assets that may be displayed with the ad. The images
     * must be 128x128 pixels and not larger than 120KB. At least 1 and at most 5
     * image assets must be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdImageAsset logo_images = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogoImages()
    {
        return $this->logo_images;
    }

    /**
     * List of logo image assets that may be displayed with the ad. The images
     * must be 128x128 pixels and not larger than 120KB. At least 1 and at most 5
     * image assets must be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdImageAsset logo_images = 5;</code>
     * @param \Google\Ads\GoogleAds\V4\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogoImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V4\Common\AdImageAsset::class);
        $this->logo_images = $arr;

        return $this;
    }

    /**
     * List of YouTube video assets that may be displayed with the ad. Videos
     * are optional and at most 20 can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdVideoAsset videos = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * List of YouTube video assets that may be displayed with the ad. Videos
     * are optional and at most 20 can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.AdVideoAsset videos = 6;</code>
     * @param \Google\Ads\GoogleAds\V4\Common\AdVideoAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVideos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V4\Common\AdVideoAsset::class);
        $this->videos = $arr;

        return $this;
    }

    /**
     * First part of optional text that may appear appended to the url displayed
     * in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path1 = 7;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPath1()
    {
        return $this->path1;
    }

    /**
     * Returns the unboxed value from <code>getPath1()</code>

     * First part of optional text that may appear appended to the url displayed
     * in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path1 = 7;</code>
     * @return string|null
     */
    public function getPath1Unwrapped()
    {
        return $this->readWrapperValue("path1");
    }

    /**
     * First part of optional text that may appear appended to the url displayed
     * in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path1 = 7;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPath1($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->path1 = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * First part of optional text that may appear appended to the url displayed
     * in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path1 = 7;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPath1Unwrapped($var)
    {
        $this->writeWrapperValue("path1", $var);
        return $this;}

    /**
     * Second part of optional text that may appear appended to the url displayed
     * in the ad. This field can only be set when path1 is also set.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path2 = 8;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPath2()
    {
        return $this->path2;
    }

    /**
     * Returns the unboxed value from <code>getPath2()</code>

     * Second part of optional text that may appear appended to the url displayed
     * in the ad. This field can only be set when path1 is also set.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path2 = 8;</code>
     * @return string|null
     */
    public function getPath2Unwrapped()
    {
        return $this->readWrapperValue("path2");
    }

    /**
     * Second part of optional text that may appear appended to the url displayed
     * in the ad. This field can only be set when path1 is also set.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path2 = 8;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPath2($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->path2 = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Second part of optional text that may appear appended to the url displayed
     * in the ad. This field can only be set when path1 is also set.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path2 = 8;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPath2Unwrapped($var)
    {
        $this->writeWrapperValue("path2", $var);
        return $this;}

}
