<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/errors/query_error.proto

namespace Google\Ads\GoogleAds\V0\Errors\QueryErrorEnum;

/**
 * Enum describing possible query errors.
 *
 * Protobuf type <code>google.ads.googleads.v0.errors.QueryErrorEnum.QueryError</code>
 */
class QueryError
{
    /**
     * Name unspecified.
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
     * Returned if all other query error reasons are not applicable.
     *
     * Generated from protobuf enum <code>QUERY_ERROR = 50;</code>
     */
    const QUERY_ERROR = 50;
    /**
     * A condition used in the query references an invalid enum constant.
     *
     * Generated from protobuf enum <code>BAD_ENUM_CONSTANT = 18;</code>
     */
    const BAD_ENUM_CONSTANT = 18;
    /**
     * Query contains an invalid escape sequence.
     *
     * Generated from protobuf enum <code>BAD_ESCAPE_SEQUENCE = 7;</code>
     */
    const BAD_ESCAPE_SEQUENCE = 7;
    /**
     * Field name is invalid.
     *
     * Generated from protobuf enum <code>BAD_FIELD_NAME = 12;</code>
     */
    const BAD_FIELD_NAME = 12;
    /**
     * Limit value is invalid (i.e. not a number)
     *
     * Generated from protobuf enum <code>BAD_LIMIT_VALUE = 15;</code>
     */
    const BAD_LIMIT_VALUE = 15;
    /**
     * Encountered number can not be parsed.
     *
     * Generated from protobuf enum <code>BAD_NUMBER = 5;</code>
     */
    const BAD_NUMBER = 5;
    /**
     * Invalid operator encountered.
     *
     * Generated from protobuf enum <code>BAD_OPERATOR = 3;</code>
     */
    const BAD_OPERATOR = 3;
    /**
     * Invalid resource type was specified in the FROM clause.
     *
     * Generated from protobuf enum <code>BAD_RESOURCE_TYPE_IN_FROM_CLAUSE = 45;</code>
     */
    const BAD_RESOURCE_TYPE_IN_FROM_CLAUSE = 45;
    /**
     * Non-ASCII symbol encountered outside of strings.
     *
     * Generated from protobuf enum <code>BAD_SYMBOL = 2;</code>
     */
    const BAD_SYMBOL = 2;
    /**
     * Value is invalid.
     *
     * Generated from protobuf enum <code>BAD_VALUE = 4;</code>
     */
    const BAD_VALUE = 4;
    /**
     * Date filters fail to restrict date to a range smaller than 31 days.
     * Applicable if the query is segmented by date.
     *
     * Generated from protobuf enum <code>DATE_RANGE_TOO_WIDE = 36;</code>
     */
    const DATE_RANGE_TOO_WIDE = 36;
    /**
     * Expected AND between values with BETWEEN operator.
     *
     * Generated from protobuf enum <code>EXPECTED_AND = 30;</code>
     */
    const EXPECTED_AND = 30;
    /**
     * Expecting ORDER BY to have BY.
     *
     * Generated from protobuf enum <code>EXPECTED_BY = 14;</code>
     */
    const EXPECTED_BY = 14;
    /**
     * There was no dimension field selected.
     *
     * Generated from protobuf enum <code>EXPECTED_DIMENSION_FIELD_IN_SELECT_CLAUSE = 37;</code>
     */
    const EXPECTED_DIMENSION_FIELD_IN_SELECT_CLAUSE = 37;
    /**
     * Missing filters on date related fields.
     *
     * Generated from protobuf enum <code>EXPECTED_FILTERS_ON_DATE_RANGE = 55;</code>
     */
    const EXPECTED_FILTERS_ON_DATE_RANGE = 55;
    /**
     * Missing FROM clause.
     *
     * Generated from protobuf enum <code>EXPECTED_FROM = 44;</code>
     */
    const EXPECTED_FROM = 44;
    /**
     * The operator used in the conditions requires the value to be a list.
     *
     * Generated from protobuf enum <code>EXPECTED_LIST = 41;</code>
     */
    const EXPECTED_LIST = 41;
    /**
     * Fields used in WHERE or ORDER BY clauses are missing from the SELECT
     * clause.
     *
     * Generated from protobuf enum <code>EXPECTED_REFERENCED_FIELD_IN_SELECT_CLAUSE = 16;</code>
     */
    const EXPECTED_REFERENCED_FIELD_IN_SELECT_CLAUSE = 16;
    /**
     * SELECT is missing at the beginning of query.
     *
     * Generated from protobuf enum <code>EXPECTED_SELECT = 13;</code>
     */
    const EXPECTED_SELECT = 13;
    /**
     * A list was passed as a value to a condition whose operator expects a
     * single value.
     *
     * Generated from protobuf enum <code>EXPECTED_SINGLE_VALUE = 42;</code>
     */
    const EXPECTED_SINGLE_VALUE = 42;
    /**
     * Missing one or both values with BETWEEN operator.
     *
     * Generated from protobuf enum <code>EXPECTED_VALUE_WITH_BETWEEN_OPERATOR = 29;</code>
     */
    const EXPECTED_VALUE_WITH_BETWEEN_OPERATOR = 29;
    /**
     * Invalid date format. Expected 'YYYY-MM-DD'.
     *
     * Generated from protobuf enum <code>INVALID_DATE_FORMAT = 38;</code>
     */
    const INVALID_DATE_FORMAT = 38;
    /**
     * Value passed was not a string when it should have been. I.e., it was a
     * number or unquoted literal.
     *
     * Generated from protobuf enum <code>INVALID_STRING_VALUE = 57;</code>
     */
    const INVALID_STRING_VALUE = 57;
    /**
     * A String value passed to the BETWEEN operator does not parse as a date.
     *
     * Generated from protobuf enum <code>INVALID_VALUE_WITH_BETWEEN_OPERATOR = 26;</code>
     */
    const INVALID_VALUE_WITH_BETWEEN_OPERATOR = 26;
    /**
     * The value passed to the DURING operator is not a Date range literal
     *
     * Generated from protobuf enum <code>INVALID_VALUE_WITH_DURING_OPERATOR = 22;</code>
     */
    const INVALID_VALUE_WITH_DURING_OPERATOR = 22;
    /**
     * A non-string value was passed to the LIKE operator.
     *
     * Generated from protobuf enum <code>INVALID_VALUE_WITH_LIKE_OPERATOR = 56;</code>
     */
    const INVALID_VALUE_WITH_LIKE_OPERATOR = 56;
    /**
     * An operator was provided that is inapplicable to the field being
     * filtered.
     *
     * Generated from protobuf enum <code>OPERATOR_FIELD_MISMATCH = 35;</code>
     */
    const OPERATOR_FIELD_MISMATCH = 35;
    /**
     * A Condition was found with an empty list.
     *
     * Generated from protobuf enum <code>PROHIBITED_EMPTY_LIST_IN_CONDITION = 28;</code>
     */
    const PROHIBITED_EMPTY_LIST_IN_CONDITION = 28;
    /**
     * A condition used in the query references an unsupported enum constant.
     *
     * Generated from protobuf enum <code>PROHIBITED_ENUM_CONSTANT = 54;</code>
     */
    const PROHIBITED_ENUM_CONSTANT = 54;
    /**
     * Fields that are not allowed to be selected together were included in
     * the SELECT clause.
     *
     * Generated from protobuf enum <code>PROHIBITED_FIELD_COMBINATION_IN_SELECT_CLAUSE = 31;</code>
     */
    const PROHIBITED_FIELD_COMBINATION_IN_SELECT_CLAUSE = 31;
    /**
     * A field that is not orderable was included in the ORDER BY clause.
     *
     * Generated from protobuf enum <code>PROHIBITED_FIELD_IN_ORDER_BY_CLAUSE = 40;</code>
     */
    const PROHIBITED_FIELD_IN_ORDER_BY_CLAUSE = 40;
    /**
     * A field that is not selectable was included in the SELECT clause.
     *
     * Generated from protobuf enum <code>PROHIBITED_FIELD_IN_SELECT_CLAUSE = 23;</code>
     */
    const PROHIBITED_FIELD_IN_SELECT_CLAUSE = 23;
    /**
     * A field that is not filterable was included in the WHERE clause.
     *
     * Generated from protobuf enum <code>PROHIBITED_FIELD_IN_WHERE_CLAUSE = 24;</code>
     */
    const PROHIBITED_FIELD_IN_WHERE_CLAUSE = 24;
    /**
     * Resource type specified in the FROM clause is not supported by this
     * service.
     *
     * Generated from protobuf enum <code>PROHIBITED_RESOURCE_TYPE_IN_FROM_CLAUSE = 43;</code>
     */
    const PROHIBITED_RESOURCE_TYPE_IN_FROM_CLAUSE = 43;
    /**
     * A field that comes from an incompatible resource was included in the
     * SELECT clause.
     *
     * Generated from protobuf enum <code>PROHIBITED_RESOURCE_TYPE_IN_SELECT_CLAUSE = 48;</code>
     */
    const PROHIBITED_RESOURCE_TYPE_IN_SELECT_CLAUSE = 48;
    /**
     * A field that comes from an incompatible resource was included in the
     * WHERE clause.
     *
     * Generated from protobuf enum <code>PROHIBITED_RESOURCE_TYPE_IN_WHERE_CLAUSE = 58;</code>
     */
    const PROHIBITED_RESOURCE_TYPE_IN_WHERE_CLAUSE = 58;
    /**
     * A metric incompatible with the main resource or other selected
     * segmenting resources was included in the SELECT or WHERE clause.
     *
     * Generated from protobuf enum <code>PROHIBITED_METRIC_IN_SELECT_OR_WHERE_CLAUSE = 49;</code>
     */
    const PROHIBITED_METRIC_IN_SELECT_OR_WHERE_CLAUSE = 49;
    /**
     * A segment incompatible with the main resource or other selected
     * segmenting resources was included in the SELECT or WHERE clause.
     *
     * Generated from protobuf enum <code>PROHIBITED_SEGMENT_IN_SELECT_OR_WHERE_CLAUSE = 51;</code>
     */
    const PROHIBITED_SEGMENT_IN_SELECT_OR_WHERE_CLAUSE = 51;
    /**
     * A segment in the SELECT clause is incompatible with a metric in the
     * SELECT or WHERE clause.
     *
     * Generated from protobuf enum <code>PROHIBITED_SEGMENT_WITH_METRIC_IN_SELECT_OR_WHERE_CLAUSE = 53;</code>
     */
    const PROHIBITED_SEGMENT_WITH_METRIC_IN_SELECT_OR_WHERE_CLAUSE = 53;
    /**
     * The value passed to the limit clause is too low.
     *
     * Generated from protobuf enum <code>LIMIT_VALUE_TOO_LOW = 25;</code>
     */
    const LIMIT_VALUE_TOO_LOW = 25;
    /**
     * Query has a string containing a newline character.
     *
     * Generated from protobuf enum <code>PROHIBITED_NEWLINE_IN_STRING = 8;</code>
     */
    const PROHIBITED_NEWLINE_IN_STRING = 8;
    /**
     * List contains values of different types.
     *
     * Generated from protobuf enum <code>PROHIBITED_VALUE_COMBINATION_IN_LIST = 10;</code>
     */
    const PROHIBITED_VALUE_COMBINATION_IN_LIST = 10;
    /**
     * The values passed to the BETWEEN operator are not of the same type.
     *
     * Generated from protobuf enum <code>PROHIBITED_VALUE_COMBINATION_WITH_BETWEEN_OPERATOR = 21;</code>
     */
    const PROHIBITED_VALUE_COMBINATION_WITH_BETWEEN_OPERATOR = 21;
    /**
     * Query contains unterminated string.
     *
     * Generated from protobuf enum <code>STRING_NOT_TERMINATED = 6;</code>
     */
    const STRING_NOT_TERMINATED = 6;
    /**
     * Too many segments are specified in SELECT clause.
     *
     * Generated from protobuf enum <code>TOO_MANY_SEGMENTS = 34;</code>
     */
    const TOO_MANY_SEGMENTS = 34;
    /**
     * Query is incomplete and cannot be parsed.
     *
     * Generated from protobuf enum <code>UNEXPECTED_END_OF_QUERY = 9;</code>
     */
    const UNEXPECTED_END_OF_QUERY = 9;
    /**
     * FROM clause cannot be specified in this query.
     *
     * Generated from protobuf enum <code>UNEXPECTED_FROM_CLAUSE = 47;</code>
     */
    const UNEXPECTED_FROM_CLAUSE = 47;
    /**
     * Query contains one or more unrecognized fields.
     *
     * Generated from protobuf enum <code>UNRECOGNIZED_FIELD = 32;</code>
     */
    const UNRECOGNIZED_FIELD = 32;
    /**
     * Query has an unexpected extra part.
     *
     * Generated from protobuf enum <code>UNEXPECTED_INPUT = 11;</code>
     */
    const UNEXPECTED_INPUT = 11;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QueryError::class, \Google\Ads\GoogleAds\V0\Errors\QueryErrorEnum_QueryError::class);

