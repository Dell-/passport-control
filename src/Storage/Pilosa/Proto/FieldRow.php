<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public.proto

namespace App\Storage\Pilosa\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FieldRow</code>
 */
class FieldRow extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Field = 1;</code>
     */
    protected $Field = '';
    /**
     * Generated from protobuf field <code>uint64 RowID = 2;</code>
     */
    protected $RowID = 0;
    /**
     * Generated from protobuf field <code>string RowKey = 3;</code>
     */
    protected $RowKey = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Field
     *     @type int|string $RowID
     *     @type string $RowKey
     * }
     */
    public function __construct($data = NULL) {
        \App\Storage\Pilosa\Proto\GPBMetadata\PBPublic::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Field = 1;</code>
     * @return string
     */
    public function getField()
    {
        return $this->Field;
    }

    /**
     * Generated from protobuf field <code>string Field = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->Field = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 RowID = 2;</code>
     * @return int|string
     */
    public function getRowID()
    {
        return $this->RowID;
    }

    /**
     * Generated from protobuf field <code>uint64 RowID = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRowID($var)
    {
        GPBUtil::checkUint64($var);
        $this->RowID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string RowKey = 3;</code>
     * @return string
     */
    public function getRowKey()
    {
        return $this->RowKey;
    }

    /**
     * Generated from protobuf field <code>string RowKey = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRowKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->RowKey = $var;

        return $this;
    }

}

