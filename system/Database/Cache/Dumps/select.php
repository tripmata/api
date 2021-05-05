<?php

return array (
  '7842206cffcdc109a5b5e94031a5db84' => 
  array (
    'query' => 'SELECT created,checkindate FROM reservation {where}',
    'bind' => 
    array (
    ),
  ),
  'e31d9862580adf9b6b3da6af6c936b06' => 
  array (
    'query' => 'SELECT * FROM reservation WHERE property = :property and noshow = :noshow or noshow = :noshow0 ',
    'bind' => 
    array (
      'property' => '38v92sy54fnhqc33',
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
  '0e4771fbe2e6ea1a8d5719d6b4ef650a' => 
  array (
    'query' => 'SELECT * FROM property WHERE propertyid = :propertyid ',
    'bind' => 
    array (
      'propertyid' => '38v92sy54fnhqc33',
    ),
  ),
  '000fa58715b53c37dfca0f2791288f20' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout = :checkout ',
    'bind' => 
    array (
      'propertyid' => '38v92sy54fnhqc33',
      'checkout' => 1617231600,
    ),
  ),
  '08995a7fbda7f472a945c873776c830d' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout < :checkout ',
    'bind' => 
    array (
      'propertyid' => '38v92sy54fnhqc33',
      'checkout' => 1617254235,
    ),
  ),
  '337e026d80273ed4104641cd9e3e6fdf' => 
  array (
    'query' => 'SELECT * FROM reviews WHERE property = :property ',
    'bind' => 
    array (
      'property' => '38v92sy54fnhqc33',
    ),
  ),
  'a39a70ea68b318bd3336f58a56f343cd' => 
  array (
    'query' => 'SELECT * FROM reviews WHERE property = :property and created != :created ',
    'bind' => 
    array (
      'property' => '38v92sy54fnhqc33',
      'created' => 0,
    ),
  ),
  'e8f0c3b279850887adff088a95d7c1f2' => 
  array (
    'query' => 'SELECT * FROM room WHERE propertyid = :propertyid and status = :status ',
    'bind' => 
    array (
      'propertyid' => '38v92sy54fnhqc33',
      'status' => 1,
    ),
  ),
  'b4b29054cdfb1287b661b241bab0ed43' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid AND checkedout = :checkedout ',
    'bind' => 
    array (
      'propertyid' => '38v92sy54fnhqc33',
      'checkedout' => 0,
    ),
  ),
);
