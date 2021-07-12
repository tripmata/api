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
  'b453eed2eb16fca11d7c0fbab28c3566' => 
  array (
    'query' => 'SELECT `name`,roomcategoryid,price FROM roomcategory {where}',
    'bind' => 
    array (
    ),
  ),
  '734ab44da4c59cdb19f8ed0a9a411243' => 
  array (
    'query' => 'SELECT calendar FROM room_avaliability {where}',
    'bind' => 
    array (
    ),
  ),
  '787944e9e1efff6719318979aae32a62' => 
  array (
    'query' => 'SELECT calendar, avaliabilityid FROM room_avaliability {where}',
    'bind' => 
    array (
    ),
  ),
  '1e72783a70e9af7a32043c801ec94005' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Inventory\\":\\"1\\"}}}',
    ),
  ),
  '4caac481523115acaf674b57a2c6f8a6' => 
  array (
    'query' => 'SELECT avaliabilityid FROM room_avaliability {where}',
    'bind' => 
    array (
    ),
  ),
  '4833ce2b24f84b28d7be4d3f837f9738' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Inventory\\":\\"3\\"}}}',
    ),
  ),
  '6a5247fcc07a9aabeb36dee23c7aff78' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\"}}}',
    ),
  ),
  '8c3f324bbb43e8af6953068fd5de64eb' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\"}}}',
    ),
  ),
  'e15cc017e7c15b8890baf47cd0a416b6' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\"}}}',
    ),
  ),
  'f33b1900dbf700625219c4dd5e87a16b' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"}}}',
    ),
  ),
  '575ba12a77e540d3b9a1397bc924ddd8' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"}}}',
    ),
  ),
  'b99ca41d2ce7bf4061fe3b3d5bac8a73' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  '0dc52bbe49375c5505e06936648742b2' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  '8a99ad9bacfe7775d39333932b01fb96' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"10000\\"}}}',
    ),
  ),
  '067a28ef941b89cad1925e085ad6fc63' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"10000\\"},\\"1622415600\\":{\\"Standard Rate (NGN)\\":\\"12000\\"}}}',
    ),
  ),
  'b6073a88f04460b7d0b30fbe1ef385d2' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"10000\\"},\\"1622415600\\":{\\"Standard Rate (NGN)\\":\\"12000\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1623366000\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  'fea5594f47a9779d91e5ad46794653fa' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"10000\\"},\\"1622415600\\":{\\"Standard Rate (NGN)\\":\\"12000\\"},\\"1623452400\\":{\\"Inventory\\":\\"0\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1623366000\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  '73aeb0f7e41b06804aa311272247d9b4' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"10000\\"},\\"1622415600\\":{\\"Standard Rate (NGN)\\":\\"12000\\"},\\"1623452400\\":{\\"Inventory\\":\\"0\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1623366000\\":{\\"Availability\\":\\"false\\"},\\"1623020400\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  'ab721fac5b6961c69741926d1b11f0a1' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"10000\\"},\\"1622415600\\":{\\"Standard Rate (NGN)\\":\\"12000\\"},\\"1623452400\\":{\\"Inventory\\":\\"0\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1623366000\\":{\\"Availability\\":\\"false\\"},\\"1623020400\\":{\\"Availability\\":\\"false\\"}},\\"14qmk79gp45wsy83\\":{\\"1622847600\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  'ec7e2ffcd99f9c5cf55246cbdbb7ae68' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"10000\\"},\\"1622415600\\":{\\"Standard Rate (NGN)\\":\\"12000\\"},\\"1623452400\\":{\\"Inventory\\":\\"0\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1623366000\\":{\\"Availability\\":\\"false\\"},\\"1623020400\\":{\\"Availability\\":\\"false\\"}},\\"14qmk79gp45wsy83\\":{\\"1622847600\\":{\\"Availability\\":\\"false\\"},\\"1622934000\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  '6a437c7b34449941c2a1f1f7496242ca' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"10000\\"},\\"1622415600\\":{\\"Standard Rate (NGN)\\":\\"12000\\"},\\"1623452400\\":{\\"Inventory\\":\\"0\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1623366000\\":{\\"Availability\\":\\"false\\"},\\"1623020400\\":{\\"Availability\\":\\"false\\"}},\\"14qmk79gp45wsy83\\":{\\"1622847600\\":{\\"Availability\\":\\"false\\"},\\"1622934000\\":{\\"Availability\\":\\"false\\"},\\"1623020400\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  'd4ae5834c6a3df010312e8a410de27fb' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  '3198400d2c7c66c6629aca16c0a4d0a3' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  '44fee36354c13b9dd4b95556315dba63' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  'ccceb6b48dfae90634c483ffb8e9a996' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\"}}}',
    ),
  ),
  'b63dbd71b51b2440d4e17094a9d3c523' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\",\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  'de738bb24d23c039f186818bb534ea33' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\",\\"Availability\\":\\"false\\"}},\\"57d8z73g52544729\\":{\\"1622934000\\":{\\"Standard Rate (NGN)\\":\\"3000\\"}}}',
    ),
  ),
  'c7a38e669d33f970064538a4272a403b' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\",\\"Availability\\":\\"false\\"},\\"1622761200\\":{\\"Availability\\":\\"false\\"}},\\"57d8z73g52544729\\":{\\"1622934000\\":{\\"Standard Rate (NGN)\\":\\"3000\\"}}}',
    ),
  ),
  '0fe722cb1925275fcf99b8c24cc05bd3' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\",\\"Availability\\":\\"false\\"},\\"1622761200\\":{\\"Availability\\":\\"false\\"}},\\"57d8z73g52544729\\":{\\"1622934000\\":{\\"Standard Rate (NGN)\\":\\"3000\\"},\\"1624662000\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  '5e170178cff534555cefa6f99f6e746a' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\",\\"Availability\\":\\"false\\"},\\"1622761200\\":{\\"Availability\\":\\"false\\"}},\\"57d8z73g52544729\\":{\\"1622934000\\":{\\"Standard Rate (NGN)\\":\\"3000\\"},\\"1624662000\\":{\\"Availability\\":\\"false\\"},\\"1622329200\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  '8305a3dc4c96a0648e61185d5b218237' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\",\\"Availability\\":\\"false\\"},\\"1622761200\\":{\\"Availability\\":\\"false\\"}},\\"57d8z73g52544729\\":{\\"1622934000\\":{\\"Standard Rate (NGN)\\":\\"3000\\"},\\"1624662000\\":{\\"Availability\\":\\"false\\"},\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Inventory\\":\\"0\\"}}}',
    ),
  ),
  '7973d77932138796bb6e9e8b147f66a0' => 
  array (
    'query' => 'SELECT id FROM room {where}',
    'bind' => 
    array (
    ),
  ),
  'a2db477e9cb177b90d3ef7574cab0274' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\",\\"Availability\\":\\"false\\"},\\"1622761200\\":{\\"Availability\\":\\"false\\"}},\\"57d8z73g52544729\\":{\\"1622934000\\":{\\"Standard Rate (NGN)\\":\\"3000\\"},\\"1624662000\\":{\\"Availability\\":\\"false\\"},\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Inventory\\":\\"0\\"},\\"1622847600\\":{\\"Inventory\\":\\"2\\"}}}',
    ),
  ),
  '233b1234a4ddacab1f287133828a6feb' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\",\\"Availability\\":\\"false\\"},\\"1622761200\\":{\\"Availability\\":\\"false\\"}},\\"57d8z73g52544729\\":{\\"1622934000\\":{\\"Standard Rate (NGN)\\":\\"3000\\"},\\"1624662000\\":{\\"Availability\\":\\"false\\"},\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Inventory\\":\\"1\\"},\\"1622847600\\":{\\"Inventory\\":\\"2\\"}}}',
    ),
  ),
  '3ba1914aa8489c06263ce1ce1378c51e' => 
  array (
    'query' => 'SELECT `number`,roomid FROM room {where}',
    'bind' => 
    array (
    ),
  ),
  '8877d6d22af4fdd01ca2b5abb2a3807f' => 
  array (
    'query' => 'SELECT checkindate,checkoutdate,rooms,booking FROM reservation {where}',
    'bind' => 
    array (
    ),
  ),
  'e391ff58e4624ddde08d0310871d517e' => 
  array (
    'query' => 'SELECT checkin,checkout,propertyid,booking,checkedout FROM lodging {where}',
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
  '65c26d351fc13a437e7b3ce26471ae25' => 
  array (
    'query' => 'SELECT * FROM property WHERE propertyid = :propertyid ',
    'bind' => 
    array (
      'propertyid' => '7pn398ik87w6t3v9',
    ),
  ),
  '0acd5275a27fdf896b3ef26632cbebc9' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout = :checkout ',
    'bind' => 
    array (
      'propertyid' => '7pn398ik87w6t3v9',
      'checkout' => 1622588400,
    ),
  ),
  '2398e69641dc98ed79acc43857a9c65b' => 
  array (
    'query' => 'SELECT * FROM lodging WHERE propertyid = :propertyid and checkout < :checkout ',
    'bind' => 
    array (
      'propertyid' => '7pn398ik87w6t3v9',
      'checkout' => 1622637104,
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
  '528bc4a9983e2f5fa59e0936264a176c' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  '76fcd97cfe2d8e515116c54f1a922c8f' => 
  array (
    'query' => 'SELECT property_discount FROM `system` {where}',
    'bind' => 
    array (
    ),
  ),
  '184da703edf1c509e2d0f5cdaaa93869' => 
  array (
    'query' => 'SELECT discount,commisson_discount FROM property {where}',
    'bind' => 
    array (
    ),
  ),
  'd021d7cb957b8cf23c6bc2f3ad47ef57' => 
  array (
    'query' => 'SELECT name,value,booking,fromdate,todate,peiodic,paymentmode,paymentCollection,onlineorder FROM discount {where}',
    'bind' => 
    array (
    ),
  ),
  '4e8be44c3825e824f120dc83db5d1580' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"17000\\"}}}',
    ),
  ),
  'd03d87092f06d54e0282ce8232e415da' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"17000\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  'c3909419cbe6d265fe394fa25bc8b544' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  'aed1d6591eed5eb402db1e1496a94d8d' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"false\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  '19a806789addaeda6852610a41b8704d' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"false\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  '5ce7d3e6ce3b664e72cd91879147c888' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  'f02de8ed64b3c4e94819ee4ca59f6951' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  '1243d5cd7f63065aa74d9116e641ac0e' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"},\\"1622674800\\":{\\"Availability\\":\\"false\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  '80eecd782462297b8ff3d392d0513e61' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"},\\"1622674800\\":{\\"Availability\\":\\"true\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  '6bb7090a041c05435ec771d411481a50' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"},\\"1622674800\\":{\\"Availability\\":\\"true\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"},\\"1622761200\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  'ccc1c1ab28cdfe91fdffa8bd32b48d21' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"},\\"1622674800\\":{\\"Availability\\":\\"true\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"},\\"1622761200\\":{\\"Availability\\":\\"true\\"}}}',
    ),
  ),
  '5bcabcca9852efb605766dba5ebec741' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"},\\"1622674800\\":{\\"Availability\\":\\"true\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"true\\"},\\"1622761200\\":{\\"Availability\\":\\"true\\"}}}',
    ),
  ),
  '0a05b494d6c8a327f454b8a275726292' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"},\\"1622674800\\":{\\"Availability\\":\\"true\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"true\\"},\\"1622761200\\":{\\"Availability\\":\\"true\\"}},\\"6n98x99g6l7gi6t1\\":{\\"1622674800\\":{\\"Inventory\\":\\"4\\"}}}',
    ),
  ),
  'ed8d2407a85c5610f5b725b2d7a4e07c' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"},\\"1622674800\\":{\\"Availability\\":\\"true\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"true\\"},\\"1622761200\\":{\\"Availability\\":\\"true\\"}},\\"6n98x99g6l7gi6t1\\":{\\"1622674800\\":{\\"Inventory\\":\\"3\\"}}}',
    ),
  ),
  '3a0322a07a74db538aaf6b97688faa0b' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"v35kemg1dw53o2f1\\":{\\"1625698800\\":{\\"Standard Rate (NGN)\\":\\"15000\\"}}}',
    ),
  ),
  'f7a13662c368c3798c2c2ad7e1c3cddf' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"v35kemg1dw53o2f1\\":{\\"1625698800\\":{\\"Standard Rate (NGN)\\":\\"15000\\"}},\\"x2d3995wfc615fi1\\":{\\"1627167600\\":{\\"Availability\\":\\"false\\"}}}',
    ),
  ),
  '5eacac2852fe323894404c6774fa0779' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"v35kemg1dw53o2f1\\":{\\"1625698800\\":{\\"Standard Rate (NGN)\\":\\"15000\\"}},\\"x2d3995wfc615fi1\\":{\\"1627167600\\":{\\"Availability\\":\\"true\\"}}}',
    ),
  ),
  'b3393e9f34cd15762870570d9b0a4788' => 
  array (
    'query' => 'UPDATE room_avaliability SET calendar = :calendar  {where}',
    'bind' => 
    array (
      'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"},\\"1622674800\\":{\\"Availability\\":\\"true\\"},\\"1625871600\\":{\\"Standard Rate (NGN)\\":\\"15000\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"true\\"},\\"1622761200\\":{\\"Availability\\":\\"true\\"}},\\"6n98x99g6l7gi6t1\\":{\\"1622674800\\":{\\"Inventory\\":\\"3\\"}}}',
    ),
  ),
);
