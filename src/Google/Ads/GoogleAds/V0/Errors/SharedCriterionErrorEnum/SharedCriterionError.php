<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/errors/shared_criterion_error.proto

namespace Google\Ads\GoogleAds\V0\Errors\SharedCriterionErrorEnum;

/**
 * Enum describing possible shared criterion errors.
 *
 * Protobuf type <code>google.ads.googleads.v0.errors.SharedCriterionErrorEnum.SharedCriterionError</code>
 */
class SharedCriterionError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The criterion is not appropriate for the shared set type.
     *
     * Generated from protobuf enum <code>CRITERION_TYPE_NOT_ALLOWED_FOR_SHARED_SET_TYPE = 2;</code>
     */
    const CRITERION_TYPE_NOT_ALLOWED_FOR_SHARED_SET_TYPE = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SharedCriterionError::class, \Google\Ads\GoogleAds\V0\Errors\SharedCriterionErrorEnum_SharedCriterionError::class);

