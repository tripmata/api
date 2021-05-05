<?php

return array (
  '18401997937837ef3d81e33341d40efe' => 
  array (
    'query' => 'UPDATE property SET gallery = :gallery  WHERE id = :id ',
    'bind' => 
    array (
      'gallery' => '["e4c70702fb9cac1bf485e09618589341.png","0cb42d0af972b0afe9c0f42db4c624af.png"]',
      'id' => '2',
    ),
  ),
  '7842206cffcdc109a5b5e94031a5db84' => 
  array (
    'query' => 'SELECT created,checkindate FROM reservation {where}',
    'bind' => 
    array (
    ),
  ),
  'c773daf8c2efd7bad92b071372583afc' => 
  array (
    'query' => 'SELECT * FROM reservation WHERE property = :property and noshow = :noshow or noshow = :noshow0 ',
    'bind' => 
    array (
      'property' => 'nfnygrvm162h8tck',
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
  '25c117183e9b568284d52cedb537de54' => 
  array (
    'query' => 'SELECT * FROM property WHERE propertyid = :propertyid ',
    'bind' => 
    array (
      'propertyid' => 'nfnygrvm162h8tck',
    ),
  ),
  '18a392cb8b1de38d5903e9dc9a11677b' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout = :checkout ',
    'bind' => 
    array (
      'propertyid' => 'nfnygrvm162h8tck',
      'checkout' => 1614553200,
    ),
  ),
  '4877b2a20b3b0e34294d199553d1d7e5' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout < :checkout ',
    'bind' => 
    array (
      'propertyid' => 'nfnygrvm162h8tck',
      'checkout' => 1614578462,
    ),
  ),
  '505742c12db1f25b630fc368c4515b5b' => 
  array (
    'query' => 'SELECT * FROM reviews WHERE property = :property ',
    'bind' => 
    array (
      'property' => 'nfnygrvm162h8tck',
    ),
  ),
  'e3972e14845df6de7394394e27238ef6' => 
  array (
    'query' => 'SELECT * FROM reviews WHERE property = :property and created != :created ',
    'bind' => 
    array (
      'property' => 'nfnygrvm162h8tck',
      'created' => 0,
    ),
  ),
  'eb15969127e279a39db0d623b7608a62' => 
  array (
    'query' => 'SELECT * FROM room WHERE propertyid = :propertyid and status = :status ',
    'bind' => 
    array (
      'propertyid' => 'nfnygrvm162h8tck',
      'status' => 1,
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
  'daea1a284eb82e28d356315a96ce427e' => 
  array (
    'query' => 'SELECT * FROM property WHERE propertyid = :propertyid ',
    'bind' => 
    array (
      'propertyid' => 'nfnygrvm162h8tck',
    ),
  ),
  'ec55107121e7a42ff14fa00d01a270a3' => 
  array (
    'query' => 'UPDATE property SET gallery = :gallery  WHERE id = :id ',
    'bind' => 
    array (
      'gallery' => '{"1":"7d6fb32092b730fbb2ee3c87446cc30e.png","2":"1ed6c46a2b74d00ae0f2912a815780cb.png","3":"df00f0e45617c3c999ca4f8d3fca4537.png"}',
      'id' => '6',
    ),
  ),
  '52794b341d9fe403ef157ed18b2ec5f0' => 
  array (
    'query' => 'UPDATE property SET gallery = :gallery  WHERE id = :id ',
    'bind' => 
    array (
      'gallery' => '["7d6fb32092b730fbb2ee3c87446cc30e.png","1ed6c46a2b74d00ae0f2912a815780cb.png","df00f0e45617c3c999ca4f8d3fca4537.png"]',
      'id' => '6',
    ),
  ),
  'd3233f93bdf0d9ab654546c7ea00cb72' => 
  array (
    'query' => 'UPDATE property SET gallery = :gallery  WHERE id = :id ',
    'bind' => 
    array (
      'gallery' => '{"1":"1ed6c46a2b74d00ae0f2912a815780cb.png","2":"df00f0e45617c3c999ca4f8d3fca4537.png"}',
      'id' => '6',
    ),
  ),
  '3d8dfe64782b4b1ac8d6dc2f9fbc99a2' => 
  array (
    'query' => 'UPDATE property SET gallery = :gallery  WHERE id = :id ',
    'bind' => 
    array (
      'gallery' => '["da6e83d48105a6d115b0be5100ab3281.png","df00f0e45617c3c999ca4f8d3fca4537.png"]',
      'id' => '6',
    ),
  ),
);
