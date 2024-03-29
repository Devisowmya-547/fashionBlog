<html>
<head>
<style>
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}
.heading ul {
display: flex;
}
.heading ul li {
list-style: none;
}
.heading ul li a {
margin: 5px;
text-decoration: none;
color: black;
font-weight: 500;
position: relative;
color: white;
margin: 2px 14px;
font-size: 18px;
transition-duration: 1s;
}
.heading ul li a:active {
color: red;
}
.heading ul li a:hover {
color: rgb(243, 168, 7);
transition-duration: 1s;
}

.heading ul li a::before {
content: "";
height: 2px;
width: 0px;
position: absolute;
left: 0;
bottom: 0;
background-color: white;
transition-duration: 1s;
}
.heading ul li a:hover::before {
width: 100%;
transition-duration: 1s;
background-color: rgb(243, 168, 7);
}
ion-icon {
width: 30px;
height: 30px;
background-color: white;
color: black;
}
ion-icon:hover {
cursor: pointer;
}
.img-slider img {
height: 720px;
width: 1080px;
}
.heading1 {
opacity: 0;
}
.section2 .container {
display: flex;
width: 100%;
height: max-content;
flex-wrap: wrap;
justify-content: center;
margin: 10px auto;
}
.section2 .container .items {
margin: 10px;
width: 200px;
height: 300px;
background-color: white;
border: 2.5px solid black;
border-radius: 12px;
}
.section2 .container .items .name {
text-align: center;
background-color: rgb(240, 197, 6);
height: 25px;
padding-top: 4px;
color: white;
margin: 0;
}
.section2 .container .items .price {
float: left;
padding-left: 10px;
display: block;
width: 100%;
color: rgb(255, 0, 0);
font-weight: 650;
}
.section2 .container .items .info {
padding-left: 10px;
color: rgb(243, 168, 7);
}
.section2 .container .items .img img {
width: 200px;
height: 200px;
margin: 0;
padding: 0;
border-radius: 12px;
transition-duration: 0.8s;
}
.section2 .container .items .img {
overflow: hidden;
margin: 0;
}
.section2 .container .items:hover .img img {
transform: scale(1.2);
transition-duration: 0.8s;
border-radius: 12px;
}
.social-media {
display: flex;
justify-content: center;
color: white;
flex-wrap: wrap;
}
.social-media a {
color: white;
margin: 20px;
border-radius: 5px;
margin-top: 10px;
color: white;
}
.social-media a ion-icon {
color: white;
background-color: black;
}
.social-media a:hover ion-icon {
color: red;
transform: translateY(5px);
}

.heading1 .ham:active {
color: red;
}
.items {
overflow: hidden;
}

@media screen and (max-width: 1250px) {
.heading ul li {
display: none;
}

.items {
transform: scale(0.9);
}
.img-slider img {
height: 60vw;
width: 80vw;
}
.heading1 {
opacity: 1;
position: relative;
bottom: 8px;
}
.heading1 .ham {
background-color: black;
color: white;
}
}
@media screen and (max-width: 550px) {
.heading ul li {
display: none;
}
.heading1 {
opacity: 1;
bottom: 8px;
}
}
</style>
<body>
<div id="section2" class="section2">
<div class="container">

<?php 
require_once 'dbConfig.php'; 
 
$result = $db->query("SELECT * FROM images ORDER BY id DESC"); 
?>

<?php if($result->num_rows > 0){ ?> 
        <?php while($row = $result->fetch_assoc()){ ?>
            <div class="items">
                <div class="img img1"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"></div>
                <div class="info"><p><?php echo $row['description']?></p></div>    
            </div> 
        <?php }} ?> 

<div class="items">
<div class="img img1"><img src="https://images.pexels.com/photos/1464625/pexels-photo-1464625.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></div>
<div class="name">MEN FOOTWEAR</div>
<div class="price">Rs.450</div>
<div class="info">Lorem ipsum dolor sit amet consectetur.</div>
</div>
<div class="items">
<div class="img img2"><img src="https://images.pexels.com/photos/3649765/pexels-photo-3649765.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
<div class="name">MEN's T-SHIRT</div>
<div class="price">Rs.650</div>
<div class="info">Lorem ipsum dolor sit.</div>
</div>
<div class="items">
<div class="img img3"><img src="https://media.istockphoto.com/photos/folded-blue-jeans-on-a-white-background-modern-casual-clothing-flat-picture-id1281304280" alt=""></div>
<div class="name">JEANS</div>
<div class="price">Rs.800</div>
<div class="info">Lorem ipsum dolor sit amet.</div>
</div>
<div class="items">
<div class="img img1"><img src="https://images.pexels.com/photos/8839887/pexels-photo-8839887.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></div>
<div class="name">WATCH</div>
<div class="price">Rs.834</div>
<div class="info">Lorem ipsum dolor sit.</div>
</div>
<div class="items">
<div class="img img1"><img src="https://www.complexions.com/wp-content/uploads/2018/07/beauty-brushes-makeup-626178.jpg" alt=""></div>
<div class="name">BEAUTY TOOLS</div>
<div class="price">Rs.500</div>
<div class="info">Lorem ipsum dolor sit.</div>
</div>
<div class="items">
<div class="img img1"><img src="https://i.pinimg.com/originals/38/67/9b/38679bd3946962646df5a030554e876f.png" alt=""></div>
<div class="name">DRESS</div>
<div class="price">Rs.550</div>
<div class="info">Lorem ipsum dolor sit amet consectetur.</div>
</div>
<div class="items">
<div class="img img1"><img src="https://images.pexels.com/photos/4295985/pexels-photo-4295985.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
<div class="name">HOODIES</div>
<div class="price">$6.7</div>
<div class="info">Lorem ipsum dolor sit.</div>
</div>
<div class="items">
<div class="img img1"><img src="https://img.kwcdn.com/product/1dab9ade78/cf40a504-1c3a-459c-82f2-21ecc2007fcb_800x800.jpeg.a.jpeg?imageView2/2/w/800/q/70" alt=""></div>
<div class="name">JEWELLERY</div>
<div class="price">Rs.250</div>
<div class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
</div>
<div class="items">
<div class="img img1"><img src="https://th.bing.com/th/id/OIP.X7a8QraMA656AVA3Py-7UwHaHa?pid=ImgDet&w=640&h=640&rs=1" alt=""></div>
<div class="name">GIRLS KIDS DRESS</div>
<div class="price">Rs.550</div>
<div class="info">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
</div>
<div class="items">
<div class="img img1"><img src="https://i.pinimg.com/736x/c7/16/8f/c7168f518c025e293e8b1579ad47806e.jpg" alt=""></div>
<div class="name">BOYS KIDS DRESS</div>
<div class="price">Rs.600</div>
<div class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</div>
</div>
<div class="items">
<div class="img img1"><img src="https://i.pinimg.com/originals/07/be/7f/07be7f8478e3ca850f0929d44c9a5248.png" alt=""></div>
<div class="name">WOMEN FOOTWEAR</div>
<div class="price">Rs.800</div>
<div class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</div>
</div>
<div class="items">
<div class="img img1"><img src="https://th.bing.com/th/id/R.25790d20ebe64ab0ce3c563b45ab6055?rik=NlxsLPDdNwHf0Q&riu=http%3a%2f%2fwww.getdatgadget.com%2fwp-content%2fuploads%2f2014%2f10%2fSeyvr-Wallet-3.jpg&ehk=bg79wc%2fog5vgLx0ABoFmDGhkZIfLjrk%2fTxu8AFGVS80%3d&risl=&pid=ImgRaw&r=0" alt=""></div>
<div class="name">WALLETS</div>
<div class="price">Rs.350</div>
<div class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</div>
</div>
<div class="items">
<div class="img img1"><img src="https://images.immediate.co.uk/production/volatile/sites/28/2018/03/composite-footwear-8351de2.jpg?quality=90&resize=620%2C413" alt=""></div>
<div class="name">KIDS FOOTWEAR</div>
<div class="price">RS.550</div>
<div class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</div>
</div>
<div class="items">
<div class="img img1"><img src="https://images.pexels.com/photos/4339598/pexels-photo-4339598.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></div>
<div class="name">BAG</div>
<div class="price">Rs.300</div>
<div class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</div>
</div>
<div class="items">
<div class="img img1"><img src="https://media.istockphoto.com/photos/hand-of-a-lady-selecting-yellow-colored-saree-in-a-shop-picture-id1301740530" alt=""></div>
<div class="name">SAREES</div>
<div class="price">Rs.1000</div>
<div class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</div>
</div>
</div>
</section>
</body>
</html>