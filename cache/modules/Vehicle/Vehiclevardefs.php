<?php 
 $GLOBALS["dictionary"]["Vehicle"]=array (
  'table' => 'vehicle',
  'audited' => true,
  'duplicate_merge' => true,
  'acl' => true,
  'acl_class' => 'VehicleACL',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'len' => 36,
      'required' => true,
      'reportable' => true,
      'comment' => 'Primary key',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => 0,
      'reportable' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'varchar',
      'len' => 255,
      'required' => true,
    ),
    'model' => 
    array (
      'name' => 'model',
      'vname' => 'LBL_MODEL',
      'type' => 'varchar',
      'len' => 100,
      'required' => true,
    ),
    'color' => 
    array (
      'name' => 'color',
      'vname' => 'LBL_COLOR',
      'type' => 'varchar',
      'len' => 20,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
    ),
  ),
  'custom_fields' => false,
);