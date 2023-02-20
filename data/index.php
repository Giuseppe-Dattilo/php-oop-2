<?php

include_once __DIR__ . '/../models/Bed.php';
include_once __DIR__ . '/../models/Categories.php';
include_once __DIR__ . '/../models/Food.php';
include_once __DIR__ . '/../models/Game.php';
include_once __DIR__ . '/../models/Product.php';

// Categories
$dog = new Categories ('cane');
$cat = new Categories ('gatto');

// Dogs
$dog_food = new Food ('CROCCHETTE CON MANZO', $dog, '28€','https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dw6a54d5b2/idt/109985-1.jpg?sw=800&sh=800', 'manzo', '10kg', 'Miglior Cane');
$dog_bed = new Bed ('LETTO MORBIDO', $dog, '19€','https://shop-cdn-m.mediazs.com/bilder/rivestimento/ferplast/sof/prestige/antracite/0/800/84503_ferplast_sofa_anthrazit_mit_siesta_deluxe_0.jpg', '1m', '3kg' );
$dog_game = new Game ('OSSO GIOCATTOLO', $dog, '5€','https://www.loradeglianimali.it/54196-large_default/camon-gioco-crunchy-bone-osso-in-gomma-da-14-cm.jpg', 'gomma', '300g');

// Cats
$cat_food = new Food ('CROCCANTINI PER GATTO ADULTO', $cat, '9€','https://shop-cdn-m.mediazs.com/bilder/purina/one/sterilcat/crocchette/con/manzo/per/gatto/7/400/324705_pla_nestle_purinaone_sterilcat_rind_750g_hs_01_7.jpg', 'manzo', '800g', 'Purina ONE');
$cat_bed = new Bed ('CUSCINO COMODO', $cat, '14€','https://shop-cdn-m.mediazs.com/bilder/letto/cozy/kingdom/4/800/48523_PLA_Cozy_Kuschelbett_Kingdom_FG_11_63_4.jpg', '50cm', '2kg' );
$cat_game = new Game ('ROLLERBALL', $cat, '6€','https://cdn.geapetshop.it/uploads/2020/09/4132.jpg', 'plastica', '50g');

//Arrays
$foods = [$dog_food, $cat_food];
$beds = [$dog_bed, $cat_bed];
$games = [$dog_game, $cat_game];

?>