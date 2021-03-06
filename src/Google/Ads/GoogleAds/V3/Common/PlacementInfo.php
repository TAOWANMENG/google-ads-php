<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/common/criteria.proto

namespace Google\Ads\GoogleAds\V3\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A placement criterion. This can be used to modify bids for sites when
 * targeting the content network.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.common.PlacementInfo</code>
 */
class PlacementInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * URL of the placement.
     * For example, "http://www.domain.com".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 1;</code>
     */
    protected $url = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $url
     *           URL of the placement.
     *           For example, "http://www.domain.com".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * URL of the placement.
     * For example, "http://www.domain.com".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Returns the unboxed value from <code>getUrl()</code>

     * URL of the placement.
     * For example, "http://www.domain.com".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 1;</code>
     * @return string|null
     */
    public function getUrlUnwrapped()
    {
        return $this->readWrapperValue("url");
    }

    /**
     * URL of the placement.
     * For example, "http://www.domain.com".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * URL of the placement.
     * For example, "http://www.domain.com".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setUrlUnwrapped($var)
    {
        $this->writeWrapperValue("url", $var);
        return $this;}

}

