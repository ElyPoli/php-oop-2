<?php
require_once __DIR__ . '/../models/product/Food.php';

// Creo un array con la lista dei cibi
$rawFoodsList = [
    [
        'name' => 'Smilla',
        'img' => 'https://shop-cdn-m.mediazs.com/bilder/gratis/kg/smilla/adult/sterilised/crocchette/per/gatto/9/400/66884_pla_smilla_sterilised_poultry_10kg_9.jpg',
        'price' => 12,
        'category' => 'cat',
        'typology' => 'secco',
        'allergens' => 'senza cereali',
        'expiration' => new DateTime('2023-12-31'),
    ],
    [
        'name' => 'Felix',
        'img' => 'https://shop-cdn-m.mediazs.com/bilder/felix/le/ghiottonerie/doppia/delizia/x/g/alimento/umido/per/gatti/3/400/171496_nestlegermaindc_felix_doppeltlecker_sogut_pouches_12x85g_hs_02_3.jpg',
        'price' => 8,
        'category' => 'cat',
        'typology' => 'umido',
        'allergens' => 'senza coloranti',
        'expiration' => new DateTime('2023-10-15'),
    ],
    [
        'name' => 'Wild Freedom',
        'img' => 'https://shop-cdn-m.mediazs.com/bilder/kg/kg/gratis/kg/wild/freedom/sterilised/crocchette/per/gatti/4/400/wildfreedom_wildhills_sterilised_front_6_5kg_1000x1000_4.jpg',
        'price' => 15,
        'category' => 'cat',
        'typology' => 'secco',
        'allergens' => 'senza glutine',
        'expiration' => new DateTime('2023-11-30'),
    ],
    [
        'name' => 'Catessy',
        'img' => 'https://shop-cdn-m.mediazs.com/bilder/catessy/pat/con/pollo/e/uovo/sbattuto/7/400/81079_pla_catessy_pate_tray_chicken_egg_85g_7.jpg',
        'price' => 10,
        'category' => 'cat',
        'typology' => 'umido',
        'allergens' => 'senza lattosio',
        'expiration' => new DateTime('2023-09-30'),
    ],
    [
        'name' => 'Wolf of Wilderness',
        'img' => 'https://shop-cdn-m.mediazs.com/bilder/wolf/of/wilderness/crocchette/per/cani/5/400/jetzt_testen_probierpaket_1000x1000_it_18_1__5.jpg',
        'price' => 25,
        'category' => 'dog',
        'typology' => 'secco',
        'allergens' => 'senza glutine',
        'expiration' => new DateTime('2023-12-31'),
    ],
    [
        'name' => 'Lukullus',
        'img' => 'https://shop-cdn-m.mediazs.com/bilder/di/sconto/x/g/lukullus/alimento/umido/per/cane/6/400/lukullus_entekalb_800g_1000x1000_6.jpg',
        'price' => 18,
        'category' => 'dog',
        'typology' => 'umido',
        'allergens' => 'senza conservanti',
        'expiration' => new DateTime('2023-10-15'),
    ],
    [
        'name' => 'Purizon',
        'img' => 'https://shop-cdn-m.mediazs.com/bilder/di/sconto/kg/purizon/crocchette/senza/cereali/per/cani/4/400/purizon_dog_lamb_1kg_1000x1000_4.jpg',
        'price' => 30,
        'category' => 'dog',
        'typology' => 'secco',
        'allergens' => 'senza glutine',
        'expiration' => new DateTime('2023-11-30'),
    ],
];