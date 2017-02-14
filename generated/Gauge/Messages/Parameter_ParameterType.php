<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: spec.proto

namespace Gauge\Messages;

/**
 * <pre>
 *&#47; Enum representing types of Parameter.
 * </pre>
 *
 * Protobuf enum <code>gauge.messages.Parameter.ParameterType</code>
 */
class Parameter_ParameterType
{
    /**
     * <pre>
     * Static parameter. The value of the parameter is defined at the Step.
     * </pre>
     *
     * <code>Static = 0;</code>
     */
    const Static = 0;
    /**
     * <pre>
     * Dynamic parameter. This is a parameter placeholder, and the actual value is injected at runtime, depending on the context of the call.
     * </pre>
     *
     * <code>Dynamic = 1;</code>
     */
    const Dynamic = 1;
    /**
     * <pre>
     * Special paramter, taking a string value. Special paramters are read from a file.
     * </pre>
     *
     * <code>Special_String = 2;</code>
     */
    const Special_String = 2;
    /**
     * <pre>
     * Special paramter, taking a Table value. This parameter is read from a csv file.
     * </pre>
     *
     * <code>Special_Table = 3;</code>
     */
    const Special_Table = 3;
    /**
     * <pre>
     * A table parameter, used for data driven execution.
     * </pre>
     *
     * <code>Table = 4;</code>
     */
    const Table = 4;
}
