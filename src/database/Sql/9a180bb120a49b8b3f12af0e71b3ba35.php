<?php

return array (
  'new-db' => 
  array (
    'property' => 
    array (
      '7c2828eacb53ffbe715b2fad0dbf7aa179f99c76849a32a97217b5077b181c531b1a9619' => 
      array (
        'query' => 'UPDATE property SET gallery = :gallery  WHERE id = :id ',
        'bind' => 
        array (
          'gallery' => '[\\"e4c70702fb9cac1bf485e09618589341.png\\",\\"0cb42d0af972b0afe9c0f42db4c624af.png\\"]',
          'id' => '2',
        ),
      ),
      '7c2828eacb53ffbe715b2fad0dbf7aa1bd3cde558792f48eda218aa36780ce8e488cee1a' => 
      array (
        'query' => 'UPDATE property SET gallery = :gallery  WHERE id = :id ',
        'bind' => 
        array (
          'gallery' => '["e4c70702fb9cac1bf485e09618589341.png","0cb42d0af972b0afe9c0f42db4c624af.png",""]',
          'id' => '2',
        ),
      ),
      '7c2828eacb53ffbe715b2fad0dbf7aa1ef0025795c77232af4404521425ecb8eeab69732' => 
      array (
        'query' => 'UPDATE property SET gallery = :gallery  WHERE id = :id ',
        'bind' => 
        array (
          'gallery' => '["e4c70702fb9cac1bf485e09618589341.png","0cb42d0af972b0afe9c0f42db4c624af.png","45fa6c7c00eb426427146769be047ed0.png"]',
          'id' => '2',
        ),
      ),
      '7c2828eacb53ffbe715b2fad0dbf7aa138c4f9543271ae3d32c402af3ef1179286f29950' => 
      array (
        'query' => 'UPDATE property SET gallery = :gallery  WHERE id = :id ',
        'bind' => 
        array (
          'gallery' => '["e4c70702fb9cac1bf485e09618589341.png","0cb42d0af972b0afe9c0f42db4c624af.png"]',
          'id' => '2',
        ),
      ),
      '7c2828eacb53ffbe715b2fad0dbf7aa10d77ea53d669b6a07a27fb6f460970dda3e946ad' => 
      array (
        'query' => 'UPDATE property SET gallery = :gallery  WHERE id = :id ',
        'bind' => 
        array (
          'gallery' => '{"1":"7d6fb32092b730fbb2ee3c87446cc30e.png","2":"1ed6c46a2b74d00ae0f2912a815780cb.png","3":"df00f0e45617c3c999ca4f8d3fca4537.png"}',
          'id' => '6',
        ),
      ),
      '7c2828eacb53ffbe715b2fad0dbf7aa1e64fe9bd7d8e3f853edb7cac1c80c4d7fa434030' => 
      array (
        'query' => 'UPDATE property SET gallery = :gallery  WHERE id = :id ',
        'bind' => 
        array (
          'gallery' => '["7d6fb32092b730fbb2ee3c87446cc30e.png","1ed6c46a2b74d00ae0f2912a815780cb.png","df00f0e45617c3c999ca4f8d3fca4537.png"]',
          'id' => '6',
        ),
      ),
      '7c2828eacb53ffbe715b2fad0dbf7aa16237316d03712ca1a729580c63a88de5e5d86bd3' => 
      array (
        'query' => 'UPDATE property SET gallery = :gallery  WHERE id = :id ',
        'bind' => 
        array (
          'gallery' => '{"1":"1ed6c46a2b74d00ae0f2912a815780cb.png","2":"df00f0e45617c3c999ca4f8d3fca4537.png"}',
          'id' => '6',
        ),
      ),
      '7c2828eacb53ffbe715b2fad0dbf7aa1098f71a5853ececa78a5c8ba675505def43f1cc2' => 
      array (
        'query' => 'UPDATE property SET gallery = :gallery  WHERE id = :id ',
        'bind' => 
        array (
          'gallery' => '["da6e83d48105a6d115b0be5100ab3281.png","df00f0e45617c3c999ca4f8d3fca4537.png"]',
          'id' => '6',
        ),
      ),
    ),
    'room_avaliability' => 
    array (
      '3babbea6e5607a12d4b48c4e2c5c2e53c6193365595b3df27bd872b9c548204872c5ca11' => 
      array (
        'query' => 'INSERT INTO room_avaliability (propertyid,year,calendar) VALUES (:propertyid0,:year0,:calendar0)',
        'bind' => 
        array (
          'propertyid0' => '38v92sy54fnhqc33',
          'year0' => 2021,
          'calendar0' => '[]',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b3b55d52b4f294940745478e55736e7cffb77c235' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Inventory\\":\\"1\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76bbbaf8fe7c358bb1acde95e27c51a574f858ae799' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Inventory\\":\\"3\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b0e76a0005f1c7c0ad31697652f3389c0c9867526' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b007d5722e9bc13937c36eaeffda958996f7b749d' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b88b12ca99f4f8c73874fbe86a03b4a9aeadb6081' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76bce109f61de822c77cbbaaaecbf1a4ca47acf251f' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b66a30591cc1d5e5ab6973a2d49d9054a1bf623bd' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76bc5aa8dfb685e19fa51407c9809c03a995d30ad60' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b1e6a23523e7169cd3426f1d6d2542eb2e504624a' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76ba367806562610f1273af16ff8562135703af19ca' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"10000\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76bb1014a832aef0ae0b60a1ca4dabd5023745126b5' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"10000\\"},\\"1622415600\\":{\\"Standard Rate (NGN)\\":\\"12000\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76ba5dfd481a46e962bbb083a323c65c035fd030691' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"10000\\"},\\"1622415600\\":{\\"Standard Rate (NGN)\\":\\"12000\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1623366000\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b39aa2c70451963bd5886e3cb3af7f0362de7a754' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"10000\\"},\\"1622415600\\":{\\"Standard Rate (NGN)\\":\\"12000\\"},\\"1623452400\\":{\\"Inventory\\":\\"0\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1623366000\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76ba8d216a3b3fbe116300918a09c598e5638e89392' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"10000\\"},\\"1622415600\\":{\\"Standard Rate (NGN)\\":\\"12000\\"},\\"1623452400\\":{\\"Inventory\\":\\"0\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1623366000\\":{\\"Availability\\":\\"false\\"},\\"1623020400\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76bba9fcd42da96f21c55401b04b1f865acc286f972' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"10000\\"},\\"1622415600\\":{\\"Standard Rate (NGN)\\":\\"12000\\"},\\"1623452400\\":{\\"Inventory\\":\\"0\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1623366000\\":{\\"Availability\\":\\"false\\"},\\"1623020400\\":{\\"Availability\\":\\"false\\"}},\\"14qmk79gp45wsy83\\":{\\"1622847600\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b11b5087a84c2a6dec1e4e0f1c59823a8384e2aa4' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"10000\\"},\\"1622415600\\":{\\"Standard Rate (NGN)\\":\\"12000\\"},\\"1623452400\\":{\\"Inventory\\":\\"0\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1623366000\\":{\\"Availability\\":\\"false\\"},\\"1623020400\\":{\\"Availability\\":\\"false\\"}},\\"14qmk79gp45wsy83\\":{\\"1622847600\\":{\\"Availability\\":\\"false\\"},\\"1622934000\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76be99e4016b2a45c2efb068bee42b1ad89b3fe3af9' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"57d8z73g52544729\\":{\\"1622242800\\":{\\"Standard Rate (NGN)\\":\\"4000\\",\\"Inventory\\":\\"3\\",\\"Availability\\":\\"false\\"},\\"1622502000\\":{\\"Inventory\\":\\"1\\",\\"Standard Rate (NGN)\\":\\"8000\\"},\\"1622415600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"10000\\"},\\"1622415600\\":{\\"Standard Rate (NGN)\\":\\"12000\\"},\\"1623452400\\":{\\"Inventory\\":\\"0\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1623366000\\":{\\"Availability\\":\\"false\\"},\\"1623020400\\":{\\"Availability\\":\\"false\\"}},\\"14qmk79gp45wsy83\\":{\\"1622847600\\":{\\"Availability\\":\\"false\\"},\\"1622934000\\":{\\"Availability\\":\\"false\\"},\\"1623020400\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b5212c655d3fb62a36493ddc71383559cc300e94e' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76ba9e99556d4a061d94f30b027cb567f63666ddc8e' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76bd74c368a6c15fa1f8f2144facc53e24cb1c51273' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76bde07d4c95160e4385d10b7aff0b137e7a4f8ec93' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76ba51159830bd50ebfbed45d1c71d18596f8a78e65' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\",\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b30adf2c0ad05676a4477c12f1be50a4a89a80f52' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\",\\"Availability\\":\\"false\\"}},\\"57d8z73g52544729\\":{\\"1622934000\\":{\\"Standard Rate (NGN)\\":\\"3000\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b3113032bab523d643f20046c9226ddc8059db0f5' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\",\\"Availability\\":\\"false\\"},\\"1622761200\\":{\\"Availability\\":\\"false\\"}},\\"57d8z73g52544729\\":{\\"1622934000\\":{\\"Standard Rate (NGN)\\":\\"3000\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b763ef93e56dc5de7416ca98a3b27d397a2538094' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\",\\"Availability\\":\\"false\\"},\\"1622761200\\":{\\"Availability\\":\\"false\\"}},\\"57d8z73g52544729\\":{\\"1622934000\\":{\\"Standard Rate (NGN)\\":\\"3000\\"},\\"1624662000\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76bc2ebcdb4c03a42259607a35fc43ac90af8cfbd48' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\",\\"Availability\\":\\"false\\"},\\"1622761200\\":{\\"Availability\\":\\"false\\"}},\\"57d8z73g52544729\\":{\\"1622934000\\":{\\"Standard Rate (NGN)\\":\\"3000\\"},\\"1624662000\\":{\\"Availability\\":\\"false\\"},\\"1622329200\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76be4cea3982307e5bb8402904a89072c910127211b' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\",\\"Availability\\":\\"false\\"},\\"1622761200\\":{\\"Availability\\":\\"false\\"}},\\"57d8z73g52544729\\":{\\"1622934000\\":{\\"Standard Rate (NGN)\\":\\"3000\\"},\\"1624662000\\":{\\"Availability\\":\\"false\\"},\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Inventory\\":\\"0\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b026c9e7a96de0ee267b281e79a3c066a4e75022d' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\",\\"Availability\\":\\"false\\"},\\"1622761200\\":{\\"Availability\\":\\"false\\"}},\\"57d8z73g52544729\\":{\\"1622934000\\":{\\"Standard Rate (NGN)\\":\\"3000\\"},\\"1624662000\\":{\\"Availability\\":\\"false\\"},\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Inventory\\":\\"0\\"},\\"1622847600\\":{\\"Inventory\\":\\"2\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b8841967279e7632b81f8fe8e957aecae2b2cea51' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"14qmk79gp45wsy83\\":{\\"1623279600\\":{\\"Availability\\":\\"false\\"}},\\"96o9g5g2v6zv8bp3\\":{\\"1624143600\\":{\\"Availability\\":\\"false\\"}},\\"35l723qwqnvfn854\\":{\\"1623020400\\":{\\"Availability\\":\\"false\\"},\\"1623452400\\":{\\"Standard Rate (NGN)\\":\\"10000\\",\\"Availability\\":\\"false\\"},\\"1622761200\\":{\\"Availability\\":\\"false\\"}},\\"57d8z73g52544729\\":{\\"1622934000\\":{\\"Standard Rate (NGN)\\":\\"3000\\"},\\"1624662000\\":{\\"Availability\\":\\"false\\"},\\"1622329200\\":{\\"Availability\\":\\"false\\",\\"Inventory\\":\\"1\\"},\\"1622847600\\":{\\"Inventory\\":\\"2\\"}}}',
          'avaliabilityid' => '1',
        ),
      ),
      '3babbea6e5607a12d4b48c4e2c5c2e53f1163cb16ee746a2568e63e011217ee7d59b8d1c' => 
      array (
        'query' => 'INSERT INTO room_avaliability (propertyid,year,calendar) VALUES (:propertyid0,:year0,:calendar0)',
        'bind' => 
        array (
          'propertyid0' => '662ptb4a86dw49t7',
          'year0' => 2021,
          'calendar0' => '[]',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b8a6ab034820d39675caa2a65358e02180eb3b277' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '2',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76ba99844d75ed99d004dd4dcee1220d7c61a631fc9' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"17000\\"}}}',
          'avaliabilityid' => '2',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76be35b76843f69eb5ed2960d98c65432af9ca9f875' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"17000\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '2',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76bd7755f5ccca8fb208cde6a13d3a10a7908ecfe40' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '2',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b2201ce7cdcef8217a1c9925e463294d54562ff86' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"false\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '2',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76bb1badbbcdec03d7fe7078d155f92c32e00652748' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"false\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '2',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b378975c70797905e17f0d53fa9124d9c6c5f493e' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"false\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '2',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76ba51812f5af2f39de95f0dc9bb43ddf5669da6d45' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '2',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76ba63da4f7f78f17baf6104a6a364b3cb2a9a17ea1' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"},\\"1622674800\\":{\\"Availability\\":\\"false\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '2',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76bd7292b0601222df6ea2b9687c3b0f616985655a2' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"},\\"1622674800\\":{\\"Availability\\":\\"true\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '2',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76baa04e05b408d8064d2456ea4b224ad596b1e2ef9' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"},\\"1622674800\\":{\\"Availability\\":\\"true\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"},\\"1622761200\\":{\\"Availability\\":\\"false\\"}}}',
          'avaliabilityid' => '2',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b4ec7bb1ecfa741f8ff58abbdbe742bf1522d6f0b' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"},\\"1622674800\\":{\\"Availability\\":\\"true\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"false\\"},\\"1622761200\\":{\\"Availability\\":\\"true\\"}}}',
          'avaliabilityid' => '2',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b16e9a11917eab28c0c824bc13a51c16d1041b643' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"},\\"1622674800\\":{\\"Availability\\":\\"true\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"true\\"},\\"1622761200\\":{\\"Availability\\":\\"true\\"}}}',
          'avaliabilityid' => '2',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b4328d0ed8defd5abcfe8fdb03037475de4e7bf73' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"},\\"1622674800\\":{\\"Availability\\":\\"true\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"true\\"},\\"1622761200\\":{\\"Availability\\":\\"true\\"}},\\"6n98x99g6l7gi6t1\\":{\\"1622674800\\":{\\"Inventory\\":\\"4\\"}}}',
          'avaliabilityid' => '2',
        ),
      ),
      'ba13d65dea73b1d1a12a02dfd5f9a76b967400041f392a6e81fb9f6a95d7042797cb173d' => 
      array (
        'query' => 'UPDATE room_avaliability SET calendar = :calendar  WHERE avaliabilityid = :avaliabilityid ',
        'bind' => 
        array (
          'calendar' => '{\\"66p1y9wk6wx1841h\\":{\\"1622588400\\":{\\"Availability\\":\\"true\\",\\"Standard Rate (NGN)\\":\\"17000\\"},\\"1622502000\\":{\\"Availability\\":\\"true\\"},\\"1622674800\\":{\\"Availability\\":\\"true\\"}},\\"ug1h5b4496zm22iw\\":{\\"1622674800\\":{\\"Availability\\":\\"true\\"},\\"1622761200\\":{\\"Availability\\":\\"true\\"}},\\"6n98x99g6l7gi6t1\\":{\\"1622674800\\":{\\"Inventory\\":\\"3\\"}}}',
          'avaliabilityid' => '2',
        ),
      ),
    ),
  ),
);

?>