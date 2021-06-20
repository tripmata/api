<?php

return array (
  'c8744752c6accc1ffb115c48d2d87d7b' => 
  array (
    'query' => 'SELECT checkindate,checkoutdate,rooms,booking,checkedin FROM reservation {where}',
    'bind' => 
    array (
    ),
  ),
  '10a4de631c1dccad207d0f2cf3c83160' => 
  array (
    'query' => 'SELECT booking,checkin,checkout,checkincount,checkedout,rooms FROM lodging {where}',
    'bind' => 
    array (
    ),
  ),
  '54c0598d68cc8dda47918b51e33cafea' => 
  array (
    'query' => 'SELECT checkin,checkout,checkincount,checkedout,rooms FROM lodging {where}',
    'bind' => 
    array (
    ),
  ),
  '32d02822321b4d7cdf26e19e1363bce8' => 
  array (
    'query' => 'SELECT `number`,roomid,propertyid FROM room {where}',
    'bind' => 
    array (
    ),
  ),
  'dad0f01431190f06a546aaa494616fa3' => 
  array (
    'query' => 'SELECT * FROM reservation WHERE property = :property and created >= :created and created <= :created0 ',
    'bind' => 
    array (
      'property' => '',
      'created' => '',
      'created0' => '',
    ),
  ),
  '7842206cffcdc109a5b5e94031a5db84' => 
  array (
    'query' => 'SELECT created,checkindate FROM reservation {where}',
    'bind' => 
    array (
    ),
  ),
  '2686a06bbd391f6b1520682c21882a05' => 
  array (
    'query' => 'SELECT * FROM reservation WHERE property = :property and noshow = :noshow or noshow = :noshow1 ',
    'bind' => 
    array (
      'property' => '7pn398ik87w6t3v9',
      'noshow' => 1,
      'noshow1' => 2,
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
  '65c26d351fc13a437e7b3ce26471ae25' => 
  array (
    'query' => 'SELECT * FROM property WHERE propertyid = :propertyid ',
    'bind' => 
    array (
      'propertyid' => '7pn398ik87w6t3v9',
    ),
  ),
  '70eba3157dddf4430868ae2c270e018c' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout = :checkout ',
    'bind' => 
    array (
      'propertyid' => '7pn398ik87w6t3v9',
      'checkout' => 1624057200,
    ),
  ),
  '76b639c2dc270849cd7d21bca8b235d3' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout < :checkout ',
    'bind' => 
    array (
      'propertyid' => '7pn398ik87w6t3v9',
      'checkout' => 1624094337,
    ),
  ),
  'a05a3c90a32e7850c693ffd0884e2f08' => 
  array (
    'query' => 'SELECT * FROM reviews WHERE property = :property ',
    'bind' => 
    array (
      'property' => '7pn398ik87w6t3v9',
    ),
  ),
  'ac004b4cc2ae86981bc9c46821ee05f6' => 
  array (
    'query' => 'SELECT * FROM reviews WHERE property = :property and created != :created ',
    'bind' => 
    array (
      'property' => '7pn398ik87w6t3v9',
      'created' => 0,
    ),
  ),
  '5e9f69c057558ca5d20497e3821c01f8' => 
  array (
    'query' => 'SELECT * FROM room WHERE propertyid = :propertyid and status = :status ',
    'bind' => 
    array (
      'propertyid' => '7pn398ik87w6t3v9',
      'status' => 1,
    ),
  ),
  '2f4c2053a92b9c380d34588f8c85eb16' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid AND checkedout = :checkedout ',
    'bind' => 
    array (
      'propertyid' => '7pn398ik87w6t3v9',
      'checkedout' => 0,
    ),
  ),
);
