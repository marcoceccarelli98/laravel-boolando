<?php

$data = '[
      {
        "name": "Relaxed Fit Tee Unisex",
        "brand": "Levi\'s",
        "image": "/img/1.webp",
        "imageAlt": "/img/1b.webp",
        "price": 29.99,
        "discount": 50,
        "sustainability": true,
        "like": false
      },
      {
        "name": "Roses Tee",
        "brand": "Guess",
        "image": "/img/2.webp",
        "imageAlt": "/img/2b.webp",
        "price": 29.99,
        "discount": 30,
        "sustainability": false,
        "like": true
      },
      {
        "name": "Voglia di colori pastello",
        "brand": "Come Zucchero Filato",
        "image": "/img/3.webp",
        "imageAlt": "/img/3b.webp",
        "price": 184.99,
        "discount": 30,
        "sustainability": false,
        "like": false
      },
      {
        "name": "Tee Unisex",
        "brand": "Levi\'s",
        "image": "/img/4.webp",
        "imageAlt": "/img/4b.webp",
        "price": 29.99,
        "discount": 50,
        "sustainability": false,
        "like": false
      },
      {
        "name": "Stripe Bodice",
        "brand": "Maya Deluxe",
        "image": "/img/5.webp",
        "imageAlt": "/img/5b.webp",
        "price": 99.99,
        "sustainability": false,
        "like": false
      },
      {
        "name": "Maglione - Black",
        "brand": "Esprit",
        "image": "/img/6.webp",
        "imageAlt": "/img/6b.webp",
        "price": 29.99,
        "sustainability": true,
        "like": false
      }
    ]';

return json_decode($data, true);
