<?php

return array (
  '7842206cffcdc109a5b5e94031a5db84' => 
  array (
    'query' => 'SELECT created,checkindate FROM reservation {where}',
    'bind' => 
    array (
    ),
  ),
  '48f649eb1b6ef4b64552f96f933ee393' => 
  array (
    'query' => 'SELECT * FROM reservation WHERE property = :property and noshow = :noshow or noshow = :noshow0 ',
    'bind' => 
    array (
      'property' => '7932ygx7xw6us9z1',
      'noshow' => 1,
      'noshow0' => 2,
    ),
  ),
  '82d5acd86ac2937a58a0b45269d15470' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkedout = :checkedout ',
    'bind' => 
    array (
      'propertyid' => '',
      'checkedout' => '',
    ),
  ),
  'd13f3a5a0067210efeb08f09d8301b08' => 
  array (
    'query' => 'SELECT * FROM property WHERE propertyid = :propertyid ',
    'bind' => 
    array (
      'propertyid' => '7932ygx7xw6us9z1',
    ),
  ),
  '13d9781788cb22099b8571bd0e0bfa01' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout = :checkout ',
    'bind' => 
    array (
      'propertyid' => '7932ygx7xw6us9z1',
      'checkout' => 1623884400,
    ),
  ),
  'fbe2f7955874aa1c55754a15c7883ce8' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout < :checkout ',
    'bind' => 
    array (
      'propertyid' => '7932ygx7xw6us9z1',
      'checkout' => 1623907731,
    ),
  ),
  '2ab5e447ec0ae271f5929b84a27ea876' => 
  array (
    'query' => 'SELECT * FROM reviews WHERE property = :property ',
    'bind' => 
    array (
      'property' => '7932ygx7xw6us9z1',
    ),
  ),
  '4f949738ae3e8100c2a47346aa6130bb' => 
  array (
    'query' => 'SELECT * FROM reviews WHERE property = :property and created != :created ',
    'bind' => 
    array (
      'property' => '7932ygx7xw6us9z1',
      'created' => 0,
    ),
  ),
  'c787167d566d4007c9fc69afb4f1e7b1' => 
  array (
    'query' => 'SELECT * FROM room WHERE propertyid = :propertyid and status = :status ',
    'bind' => 
    array (
      'propertyid' => '7932ygx7xw6us9z1',
      'status' => 1,
    ),
  ),
  '3635aaadcf24234e7a817a8885053d47' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid AND checkedout = :checkedout ',
    'bind' => 
    array (
      'propertyid' => '7932ygx7xw6us9z1',
      'checkedout' => 0,
    ),
  ),
);
