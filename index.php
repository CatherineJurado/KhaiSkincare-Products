<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF‑8">
<meta name="viewport" content="width=device‑width, initial‑scale=1.0">
<title>KhaiSkincare | Premium Luxury Skincare</title>
<style>
*{margin:0;padding:0;box‑sizing:border‑box;font‑family:'Segoe UI',sans‑serif;}
body{background:linear‑gradient(135deg,#cce5ff 0%,#e6f2ff 100%);min‑height:100vh;padding:30px 15px;}
.header‑box{text‑align:center;margin‑bottom:40px;}
h1{color:#003366;font‑size:32px;letter‑spacing:2px;}
.tagline{color:#0059b3;font‑size:16px;margin‑top:8px;font‑style:italic;}
.container{max‑width:900px;margin:0 auto;display:grid;grid‑template‑columns:1fr;gap:24px;}
@media(min‑width:600px){.container{grid‑template‑columns:1fr 1fr;}}
.premium‑card{background:rgba(255,255,255,0.85);border‑radius:18px;padding:24px;box‑shadow:0 6px 16px rgba(0,77,153,0.15);border‑left:5px solid #0066cc;transition:transform 0.3s ease;}
.premium‑card:hover{transform:translateY(-6px);}
.product‑name{color:#00264d;font‑size:19px;margin‑bottom:10px;}
.benefit{color:#004080;font‑size:15px;line‑height:1.5;margin‑bottom:12px;}
.price‑tag{font‑weight:bold;color:#b35900;font‑size:17px;}
footer{text‑align:center;margin‑top:50px;color:#004080;font‑size:14px;}
</style>
</head>
<body>
<div class="header‑box">
<h1>✨ KhaiSkincare ✨</h1>
<p class="tagline">Premium Luxury Skincare Collection • For Radiant, Salon‑Quality Skin</p>
</div>
<div class="container">
<?php
$products=[
["name"=>"Lumière Renewal Serum","benefit"=>"Deep skin repair, reduces fine lines & boosts natural glow","price"=>"₱1,890"],
["name"=>"Aqua‑Luxe Barrier Toner","benefit"=>"Strengthens sensitive skin, locks‑in long‑lasting hydration","price"=>"₱1,450"],
["name"=>"Velvet Glow Sleeping Mask","benefit"=>"Overnight brightening, evens skin tone while you rest","price"=>"₱1,620"],
["name"=>"Crystal Shield UV Defense","benefit"=>"High‑grade daily sun protection, prevents dark spots","price"=>"₱1,280"],
["name"=>"Pure Radiance Exfoliant","benefit"=>"Gentle deep exfoliation, clears blemishes & dull skin","price"=>"₱1,360"],
["name"=>"Sapphire Hydra‑Cream","benefit"=>"Rich moisture for dry skin, softens & smoothes texture","price"=>"₱1,740"],
["name"=>"Eclat Brightening Concentrate","benefit"=>"Targeted brightening for uneven tone & post‑acne marks","price"=>"₱1,980"],
["name"=>"Marine Collagen Boost Lotion","benefit"=>"Improves skin elasticity, keeps skin plump & youthful‑looking","price"=>"₱1,530"]
];
foreach($products as $item){
echo "<div class='premium‑card'><h3 class='product‑name'>{$item[0]}</h3><p class='benefit'>✨ Benefit: {$item[1]}</p><p class='price‑tag'>Price: {$item[2]}</p></div>";
}
?>
</div>
<footer>© 2026 KhaiSkincare — Premium Online Shop</footer>
</body>
</html>
