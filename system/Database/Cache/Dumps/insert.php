<?php

return array (
  'b453eed2eb16fca11d7c0fbab28c3566' => 
  array (
    'query' => 'SELECT `name`,roomcategoryid,price FROM roomcategory {where}',
    'bind' => 
    array (
    ),
  ),
  '4caac481523115acaf674b57a2c6f8a6' => 
  array (
    'query' => 'SELECT avaliabilityid FROM room_avaliability {where}',
    'bind' => 
    array (
    ),
  ),
  '5135351d374dcae39dbe4d4bac4da0ab' => 
  array (
    'query' => 'INSERT INTO room_avaliability (propertyid,year,calendar) VALUES (:propertyid0,:year0,:calendar0)',
    'bind' => 
    array (
      'propertyid0' => '38v92sy54fnhqc33',
      'year0' => 2021,
      'calendar0' => '[]',
    ),
  ),
  '9179583efbd22826644de708869ecd33' => 
  array (
    'query' => 'INSERT INTO room_avaliability (propertyid,year,calendar) VALUES (:propertyid0,:year0,:calendar0)',
    'bind' => 
    array (
      'propertyid0' => '662ptb4a86dw49t7',
      'year0' => 2021,
      'calendar0' => '[]',
    ),
  ),
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
  '691eea50b0c2de8060c8db840b36442e' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout = :checkout ',
    'bind' => 
    array (
      'propertyid' => '7932ygx7xw6us9z1',
      'checkout' => 1625698800,
    ),
  ),
  '884b9b86b99c45718a31b0afc625daa1' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout < :checkout ',
    'bind' => 
    array (
      'propertyid' => '7932ygx7xw6us9z1',
      'checkout' => 1625701047,
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
  '00d60e6013b20ce8c6f00c47535b4bfb' => 
  array (
    'query' => 'INSERT INTO room_avaliability (propertyid,year,calendar) VALUES (:propertyid0,:year0,:calendar0)',
    'bind' => 
    array (
      'propertyid0' => '7932ygx7xw6us9z1',
      'year0' => 2021,
      'calendar0' => '[]',
    ),
  ),
);
