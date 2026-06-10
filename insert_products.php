<?php
include "db.php";

$categories = [
    "electronique" => 1,
    "mode" => 2,
    "maison" => 3,
    "local" => 4
];

$products = [
  // ELECTRONIQUE
  
    [
        "name" => "Casque Audio",
        "description"=>"",
        "price" => 6700,
        "category" => "electronique",
        "img" => "https://i.pinimg.com/originals/4e/a5/c8/4ea5c8c480625906a692bafa65ba7aad.jpg",
        "colors" => ["black","red","white"]
    ],
    [
        "name" => "Smartphone",
        "description"=>"",
        "price" => 75000,
        "category" => "electronique",
        "img" => "https://i.pinimg.com/1200x/26/be/56/26be56634ad9773c9d8f6315cac2cba7.jpg",
        "colors" => ["black","white"]
    ],
  [           
        "name"=>"Smart Watch",
        "description"=>"",
        "price"=>8500,
        "category"=>"electronique",
        "img"=>"https://i.pinimg.com/1200x/58/01/02/580102109d76a8aa631cc584069916c4.jpg",
        "colors"=>["black","white","Beige"]
   ],
  [
        "name"=>"Tablette", 
        "description"=>"",
        "price"=>20000, 
        "category"=>"electronique",
        "img"=>"https://i.pinimg.com/1200x/6c/d1/68/6cd1685634855a383af76e5ce6c5c810.jpg",
        "colors"=>["black","white"]
  ],
  [
        "name"=>"Écouteurs sans fil",
        "description"=>"",
        "price"=>"4500",
        "category"=>"electronique",
        "img"=>"https://i.pinimg.com/1200x/11/5c/83/115c83229e8787d01aa5b01dc4d5de5e.jpg",
        "colors"=>["white","black"]
  ],
    [
        "name" => "Clé USB",
        "description"=>"",
        "price" => 1500,
        "category" => "electronique",
        "img" => "https://i.pinimg.com/1200x/19/51/05/195105875f07c215e67031f89a7ec0a9.jpg",
        "colors" => ["black","Blue","red"]
    ],
    [
        "name" => "Disque dur externe",
        "description"=>"",
        "price" => 8000,
        "category" => "electronique",
        "img" => "https://i.pinimg.com/1200x/7c/39/ab/7c39aba179313d41bcc19afa0202b6af.jpg",
        "colors" => ["black","gray"]
    ],
    [
        "name" => "Projecteur",
        "description"=>"",
        "price" => 22000,
        "category" => "electronique",
        "img" => "https://i.pinimg.com/1200x/01/c1/1e/01c11e5917a12fd5c82e240d21ce1fe9.jpg",
        "colors" => ["black","white"]
    ],
    [
        "name" => "Imprimante",
        "description"=>"",
        "price" => 12000,
        "category" => "electronique",
        "img" => "https://i.pinimg.com/1200x/19/0e/b1/190eb110ac5601954538ebccb28e62bb.jpg",
        "colors" => ["white","black","pink"]
    ],
    [
        "name" => "Clavier Gaming",
        "description"=>"",
        "price" => 6000,
        "category" => "electronique",
        "img" => "https://i.pinimg.com/1200x/29/be/a3/29bea3ef66b27411f8a6311c7764b4d2.jpg",
        "colors" => ["black","white"]
    ],

  [
        "name" => "Souris Sans Fil",
        "description"=>"",
        "price" => 2500,
        "category" => "electronique",
        "img" => "https://i.pinimg.com/1200x/ab/5f/35/ab5f35ce0aae81315287161945f47f84.jpg",
        "colors" => ["black","white"]
    ],
    [
        "name" => "Écran PC",
        "description"=>"",
        "price" => 30000,
        "category" => "electronique",
        "img" => "https://i.pinimg.com/1200x/d2/0b/e3/d20be35826c1c8c309c00e2727ccca80.jpg",
        "colors" => ["black"]
    ],
    [
        "name" => "Webcam HD",
        "description"=>"",
        "price" => 5000,
        "category" => "electronique",
        "img" => "https://i.pinimg.com/1200x/18/75/97/187597202bd6b9391873080cfcd4c264.jpg",
        "colors" => ["black","white"]
    ],
  // MODE

   [
        "name" => "Robe",
        "description"=>"",
        "price" => 6000,
        "category" => "mode",
        "img" => "https://i.pinimg.com/1200x/ac/30/fd/ac30fd9b169dd30243e1d6814bfdff54.jpg",
        "colors" => ["black","pink","#87CEEB"]
    ],
    [
        "name" => "Chaussures",
        "description"=>"",
        "price" => 7000,
        "category" => "mode",
        "img" => "https://i.pinimg.com/1200x/5f/68/08/5f68082684948718592a7a15f8842e3e.jpg",
        "colors" => ["black","brown","white"]
    ],
    [
        "name" => "Jupe",
        "description"=>"",
        "price" => 9000,
        "category" => "mode",
        "img" => "https://i.pinimg.com/1200x/07/c6/1d/07c61deb732a3c8a8afdcbaf702b10be.jpg",
        "colors" => ["black","red","green"]
    ],
    [
        "name" => "Veste",
        "description"=>"",
        "price" => 9000,
        "category" => "mode",
        "img" => "https://i.pinimg.com/1200x/35/e1/02/35e1028a9969825f6fffbc6e2147205f.jpg",
        "colors" => ["black","green","Blue"]
    ],
    [
        "name" => "Casquette",
        "description"=>"",
        "price" => 1200,
        "category" => "mode",
        "img" => "https://i.pinimg.com/1200x/b6/60/2d/b6602da4af097227dee6180574977f4b.jpg",
        "colors" => ["black","brown","white"]
    ],
  [
        "name" => "Lunettes de soleil",
        "description"=>"",
        "price" => 3500,
        "category" => "mode",
        "img" => "https://i.pinimg.com/1200x/32/53/d5/3253d54f4a83ac73b186da5dcb88cbd0.jpg",
        "colors" => ["black","brown"]
    ],
    [
        "name" => "Sac à dos",
        "description"=>"",
        "price" => 5000,
        "category" => "mode",
        "img" => "https://i.pinimg.com/1200x/70/14/f1/7014f15d8e639c16de236e5cb42cd535.jpg",
        "colors" => ["black","pink","white","brown"]
    ],
    [
        "name" => "Ceinture",
        "description"=>"",
        "price" => 2000,
        "category" => "mode",
        "img" => "https://i.pinimg.com/1200x/a5/4a/e2/a54ae2d1381b8c23c97dd1cb09610ec8.jpg",
        "colors" => ["black","brown"]
    ],
    [
        "name" => "Pantalon",
        "description"=>"",
        "price" => 4500,
        "category" => "mode",
        "img" => "https://i.pinimg.com/1200x/3e/d2/74/3ed274d57b4d26e55abf407c782901ea.jpg",
        "colors" => ["brown","Beige"]
    ],
    [
        "name" => "Montre Classique",
        "description"=>"",
        "price" => 8000,
        "category" => "mode",
        "img" => "https://i.pinimg.com/1200x/8a/07/cf/8a07cf632a349743815af939d6465d43.jpg",
        "colors" => ["#FFD700","silver"]
    ],
  
 [
        "name" => "Pull Hiver",
        "description"=>"",
        "price" => 5500,
        "category" => "mode",
        "img" => "https://i.pinimg.com/1200x/bd/d0/28/bdd028ed696dc01fab1526b7501b172b.jpg",
        "colors" => ["red","Beige","gray"]
    ],
    [
        "name" => "accessoires",
        "description"=>"",
        "price" => 2500,
        "category" => "mode",
        "img" => "https://i.pinimg.com/1200x/0e/03/8d/0e038dbe85d8a10bc278a550eb8a6bb8.jpg",
        "colors" => ["Blue","pink"]
    ],
    [
        "name" => "Sandales",
        "description"=>"",
        "price" => 3000,
        "category" => "mode",
        "img" => "https://i.pinimg.com/1200x/cc/7c/5c/cc7c5c3e6bba6d579165b54a27aa99c5.jpg",
        "colors" => ["white","Beige","green"]
    ],
    [
        "name" => "Sac à main",
        "description"=>"",
        "price" => 7500,
        "category" => "mode",
        "img" => "https://i.pinimg.com/1200x/e3/0e/c7/e30ec78ce1e73c6ab0f04d6bc2e38e3f.jpg",
        "colors" => ["black","red","brown","Beige"]
    ],
  // MAISON
  [
        "name" => "Chaise",
        "description"=>"",
        "price" => 4000,
        "category" => "maison",
        "img" => "https://i.pinimg.com/1200x/ec/4b/9f/ec4b9f7f4739dcaf0c0587b9f90ab192.jpg",
        "colors" => ["brown","Beige"]
    ],
    [
        "name" => "Table",
        "description"=>"",
        "price" => 12000,
        "category" => "maison",
        "img" => "https://i.pinimg.com/1200x/cf/4c/c5/cf4cc557092f8f4eddbef464e51563db.jpg",
        "colors" => ["#654321","white"]
    ],
    [
        "name" => "Lampe",
        "description"=>"",
        "price" => 3000,
        "category" => "maison",
        "img" => "https://i.pinimg.com/1200x/d7/09/14/d709148b6f24ed6600edbb57d3696a4f.jpg",
        "colors" => ["white","pink"]
    ],
    [
        "name" => "Canapé",
        "description"=>"",
        "price" => 25000,
        "category" => "maison",
        "img" => "https://i.pinimg.com/originals/b1/69/b4/b169b4ae0dddad96d921640727d1c817.jpg",
        "colors" => ["gray","Beige","white"]
    ],
    [
        "name" => "Commode",
        "description"=>"",
        "price" => 18000,
        "category" => "maison",
        "img" => "https://i.pinimg.com/1200x/38/9a/a8/389aa80275eb7e59d91a841093ef616b.jpg",
        "colors" => ["#654321","white"]
    ],
  [
        "name" => "Bibliothèque",
        "description"=>"",
        "price" => 15000,
        "category" => "maison",
        "img" => "https://i.pinimg.com/1200x/5c/6f/8e/5c6f8e0b6446784cbd83231eb554074e.jpg",
        "colors" => ["#654321","brown"]
    ],
    [
        "name" => "Tapis",
        "description"=>"",
        "price" => 4000,
        "category" => "maison",
        "img" => "https://i.pinimg.com/1200x/73/f7/00/73f7006f293d3149f304f54865b77dbe.jpg",
        "colors" => ["Beige","gray"]
    ],
    [
        "name" => "Rideaux",
        "description"=>"",
        "price" => 2500,
        "category" => "maison",
        "img" => "https://i.pinimg.com/1200x/ae/1b/2d/ae1b2d3d65ab37a90ba5be970904f495.jpg",
        "colors" => ["white","Beige","gray"]
    ],
    [
        "name" => "Miroir",
        "description"=>"",
        "price" => 3500,
        "category" => "maison",
        "img" => "https://i.pinimg.com/1200x/40/20/0a/40200aade6932a8939f1a6a89fc36f29.jpg",
        "colors" => [] // إذا لم توجد ألوان محددة
    ],
    [
        "name" => "Horloge murale",
        "description"=>"",
        "price" => 2000,
        "category" => "maison",
        "img" => "https://i.pinimg.com/1200x/32/7f/a0/327fa0a4b9342429aca3fad7a654ae8a.jpg",
        "colors" => ["black","Beige"]
    ],
  [
        "name" => "Lit Double",
        "description"=>"",
        "price" => 45000,
        "category" => "maison",
        "img" => "https://i.pinimg.com/1200x/d6/aa/82/d6aa823a8a2669fb3bf095bceb48ea4b.jpg",
        "colors" => ["white","Beige","gray"]
    ],
    [
        "name" => "Oreiller",
        "description"=>"",
        "price" => 1500,
        "category" => "maison",
        "img" => "https://i.pinimg.com/1200x/93/13/16/9313161398995797f3c68cc99d862c8f.jpg",
        "colors" => ["white","brown","black"]
    ],
    [
        "name" => "Ventilateur",
        "description"=>"",
        "price" => 6500,
        "category" => "maison",
        "img" => "https://i.pinimg.com/1200x/16/27/8d/16278d7a09989b0bde803dbdf82aa9a4.jpg",
        "colors" => [] // لا توجد ألوان محددة
    ],
    [
        "name" => "Climatiseur",
        "description"=>"",
        "price" => 55000,
        "category" => "maison",
        "img" => "https://i.pinimg.com/1200x/4e/1d/d9/4e1dd95e3ec2b7c12d6c570f8b7c1b97.jpg",
        "colors" => ["white","gray"]
    ],

  // LOCAL
  [
        "name" => "Miel Naturel",
        "description"=>"",
        "price" => 3000,
        "category" => "local",
        "img" => "https://images.unsplash.com/photo-1587049352851-8d4e89133924?auto=format&fit=crop&w=400&q=80",
        "colors" => [] // لا توجد ألوان
    ],
    [
        "name" => "Huile d'olive",
        "description"=>"",
        "price" => 2500,
        "category" => "local",
        "img" => "https://i.pinimg.com/1200x/ca/bc/d0/cabcd0ed8e45efef204b36d4c91c8181.jpg",
        "colors" => []
    ],
    [
        "name" => "Fromage artisanal",
        "description"=>"",
        "price" => 4000,
        "category" => "local",
        "img" => "https://i.pinimg.com/1200x/81/b0/ad/81b0ad19c993b88a5e3c83abf8bed0ca.jpg",
        "colors" => []
    ],
    [
        "name" => "Confiture maison",
        "description"=>"",
        "price" => 2000,
        "category" => "local",
        "img" => "https://i.pinimg.com/1200x/d7/72/68/d77268e6e093253bee694c50a8562ef2.jpg",
        "colors" => []
    ],
    [
        "name" => "Yaourt local",
        "description"=>"",
        "price" => 1500,
        "category" => "local",
        "img" => "https://i.pinimg.com/1200x/aa/d1/98/aad19815bfb84e91926be4c44cdf59de.jpg",
        "colors" => []
    ],
    [
        "name" => "Pain artisanal",
        "description"=>"",
        "price" => 3000,
        "category" => "local",
        "img" => "https://i.pinimg.com/1200x/74/f4/da/74f4da7c1f464a307a59cce69d404b46.jpg", 
        "colors" => []
    ],
  
   [
        "name" => "Beurre frais",
        "description"=>"",
        "price" => 2000,
        "category" => "local",
        "img" => "https://i.pinimg.com/1200x/29/04/2d/29042d83e6e1f5d39e69f049c7c67077.jpg",
        "colors" => []
    ],
    [
        "name" => "Jus naturel",
        "description"=>"",
        "price" => 1800,
        "category" => "local",
        "img" => "https://i.pinimg.com/1200x/28/65/13/286513dec274fcb5258ca76c15325ae0.jpg",
        "colors" => []
    ],
    [
        "name" => "Épices locales",
        "description"=>"",
        "price" => 2200,
        "category" => "local",
        "img" => "https://i.pinimg.com/1200x/8a/b8/62/8ab8621a0f0d8786a4d6939c1afff269.jpg",
        "colors" => []
    ],
    [
        "name" => "Chocolat artisanal",
        "description"=>"",
        "price" => 3500,
        "category" => "local",
        "img" => "https://i.pinimg.com/1200x/dc/dc/c1/dcdcc15ac6a67d088083fb5bb520a231.jpg",
        "colors" => ["brown","black"]
    ],
  [
        "name" => "Dattes Deglet Nour",
        "description"=>"",
        "price" => 1800,
        "category" => "local",
        "img" => "https://i.pinimg.com/1200x/ff/53/f0/ff53f08cd72b630c084c9866c7aec80a.jpg",
        "colors" => []
    ],
    [
        "name" => "Couscous artisanal",
        "description"=>"",
        "price" => 2200,
        "category" => "local",
        "img" => "https://i.pinimg.com/1200x/e5/07/9e/e5079ef7c043fae438a607ce68bfd28a.jpg",
        "colors" => []
    ],
    [
        "name" => "Figue sèche",
        "description"=>"",
        "price" => 2000,
        "category" => "local",
        "img" => "https://i.pinimg.com/1200x/cb/dc/21/cbdc2169772b470752bb1daeb07d6f47.jpg",
        "colors" => []
    ],
    [
        "name" => "Olives locales",
        "description"=>"",
        "price" => 1600,
        "category" => "local",
        "img" => "https://i.pinimg.com/1200x/6a/4e/d8/6a4ed8136caf31f458ca00491a7f2010.jpg",
        "colors" => []
    ]
];

// تحضير statement لإدخال البيانات
$stmt = $conn->prepare("INSERT INTO products (name, description, price, stock, category_id, image, colors) VALUES (?, ?, ?, ?, ?, ?, ?)");

// تحقق من نجاح التحضير
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

// إدخال المنتجات
foreach ($products as $p) {
    $name = $p['name'];
    $description = isset($p['description']) ? $p['description'] : '';
    $price = $p['price'];
    $stock = isset($p['stock']) ? $p['stock'] : 10;
    $category_id = $categories[$p['category']];
    $image = $p['img'];
    $colors = isset($p['colors']) ? json_encode($p['colors']) : NULL; // تخزين الألوان كـ JSON

    $stmt->bind_param("ssdiiss", $name, $description, $price, $stock, $category_id, $image, $colors);
    $stmt->execute();
}

echo "All products inserted safely!";
?>