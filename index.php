<?php
    include 'component.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sanatan Library</title>

    <!-- slider css  -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" >

    <!-- font awesome links -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    
    <!-- bootsdtrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- main css file  -->

    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- header section start -->

    <!-- top nav bar  -->
    <header class="header">
        <div class="header1">
            <a href="#" class="logo"><i class="fas fa-book"></i> Sanatan Library</a>
            <form action="" class="search-form">
                <input type="search" name="" placeholder="search your book ..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>
            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="" class="fas fa-heart"></a>
                <a href="#buy" class="fas fa-shopping-cart"></a>
                <div id="login-btn" class="fas fa-user"></div>
            </div>
        </div>
        <div class="header2">
            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#features">Features</a>
                <a href="#books">Books</a>
                <a href="#deal">Deal</a>
                <a href="#buy">buy</a>
                <a href="#reviews">Reviews</a>
            </nav>
        </div>
    </header>
    <!-- top nav bar end  -->

    <!-- bottom navbar  -->
    <nav class="bottom-navbar">
                <a href="#index" class="fas fa-home"></a>
                <a href="#read" class="fa-brands fa-readme"></a>
                <a href="#books" class="fas fa-book"></a>
                <a href="#buy" class="fas fa-tags"></a>
    </nav>
    <!-- bottom nav bar ends  -->

    <!-- header section end  -->

    <!-- login section start  -->
    <div class="login-form-container">
        <div id="close-login-btn" class="fas fa-times"></div>

            <form action="">
                <h3>Sign In</h3>
                <span>Username</span>
                <input type="email" name="" placeholder="enter your email" class="box" id="db">
                <span>Password</span>
                <input type="password" name="" placeholder="enter your password" class="box" id="dj">
                <div class="checkbox">
                    <input type="checkbox" name="" id="remember-me">
                    <label for="remember-me">remember me</label>
                </div>
                <input type="submit" value="Sign In" class="btn">
                <p>Forget password ? <a href="#">click here</a></p>
                <p>Don't have an account ? <a href="#">Create Account</a></p>
            </form>
        
    </div>
    <!-- login section end  -->

    <!-- home section start  -->
    <section class="home" id="home">
        <div class="row">

            <div class="content">
                <h3>Sanatan Library</h3>
                <p>Read your favourite books online and buy them at affordable prices!
                    <br>
                Know your religion and culture better with us.
                </p>
                <a href="#books" class="btn">Read now</a>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide"><img src="itihaas/mahabharat.jpg" alt="mabhabharat"></a>
                    <a href="#" class="swiper-slide"><img src="itihaas/ramayan.jpeg" alt="ramayan"></a>
                    <a href="#" class="swiper-slide"><img src="itihaas/bhagwatgeeta.jpg" alt="bhagwatgeeta"></a>
                    <a href="#" class="swiper-slide"><img src="puraan/shivpuran.webp" alt="shivpuran"></a>
                    <a href="#" class="swiper-slide"><img src="puraan/garudpuran.webp" alt="garudpuran"></a>
                    <a href="#" class="swiper-slide"><img src="puraan/bhavishyapuran.jpeg" alt="bhavishyapuran"></a>
                </div>
                <img src="vedas\standd.png" class="stand" alt="book shelf">
            </div>

        </div>
    </section>
    <!-- home section end  -->

    <!-- icon section start  -->
    <section class="icons-container" id="features">

        <div class="icons">
                <a href="#"><i class="fas fa-plane"></i></a>
                <div class="content">
                <h3>Free Shipping</h3>
                <p>order over Rs100</p>
                </div>
        </div>
        <div class="icons">
                <a href="#"><i class="fas fa-lock"></i></a>
                <div class="content">
                <h3>Secure Payment</h3>
                <p>100% secure payment</p>
                </div>
        </div>
        <div class="icons">
                <a href="#"><i class="fas fa-redo-alt"></i></a>
                <div class="content">
                <h3>easy returns</h3>
                <p>10 days returns</p>
                </div>
        </div>
        <div class="icons">
                <a href="#"><i class="fas fa-headset"></i></a>
                <div class="content">
                <h3>24/7 support</h3>
                <p>call us anytime</p>
                </div>
        </div>
    </section>
    <!-- icon section ends  -->


    <!-- books section Start -->
    <section class="read" id="books">
        <h1 class="heading"><span>Puran</span></h1>
        <div class="swiper book-slider bookc">
            <div class="swiper-wrapper">
            <?php
            echo component("https://drive.google.com/file/d/16SaYn-idX8kv4v3527j6SAoNLEwI1f1V/view?usp=drivesdk", "puraan/vishnupuran.jpg", "Vishnu Puran", "in");
            echo component("https://drive.google.com/file/d/16lGGhfdGSXU9qgYRR-dBYcY5IblhDBzI/view?usp=drivesdk", "puraan/matasyapuran.jpg", "Matasya Puran", "in");
            echo component("https://drive.google.com/file/d/16tXFB4_YEgwFdpXC8E2sbUnbaZLobpAM/view?usp=drivesdk", "puraan/kurmupuran.jpeg", "Kurma Puran", "in");
            echo component("https://drive.google.com/file/d/16fovoWWUOgIJXgcBZNi5HrNGipohxdea/view?usp=drivesdk", "puraan/varahpuran.jpeg", "Varaha Puran", "in");
            echo component("https://drive.google.com/file/d/15q-Utf6AzERLWfd1jHr46zgLxH9UZdw6/view?usp=drivesdk", "puraan/vamanpuran.jpeg", "Vamana Puran", "in");
            echo component("https://drive.google.com/file/d/171D8Te6XwGyRODCJ90QTK8j-k7T7CNqE/view?usp=drivesdk", "puraan/bhavishyapuran.jpeg", "Bhavishya Puran", "in");
            echo component("https://drive.google.com/file/d/15XZt0n6zU4TdpVe7QsxOcazU0La32e0a/view?usp=drivesdk", "puraan/shivpuran.webp", "Shiv Puran", "in");
            ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
   
    <!-- <section class="read">
        <h1 class="heading"><span>Vedas</span></h1>
        <div class="swiper book-slider bookc">
            <div class="swiper-wrapper">
            <?php
            echo component("", "", "", "in");
            echo component("", "", "", "in");
            echo component("", "", "", "in");
            echo component("", "", "", "in");
            echo component("", "", "", "in");
            echo component("", "", "", "in");
            echo component("", "", "", "in");
            ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section> -->



    <!-- Book Section ends  -->

    <!-- deal section starts -->
    <section class="deal" id="deal">
        
            <div class="content">
                <h3>deal of the day</h3>
                <h1>upto 58% off</h1>
                <p>buy the holy book stand and give books, the respect they deserve.  </p>
                <a  href="https://dl.flipkart.com/s/ElRUbzNNNN" class="btn" target="_blank">shop now</a>
            </div>
            <div class="image">
                <img src="php/stand1.png" alt="stand">
            </div>
        
    </section>
    <!-- deal section ends  -->
    <!-- cart section starts -->

    <!-- <section class="buy" id="buy">
        <div class="container">
            <header class="cart">
                <h1>Shopping Cart</h1>
                <div class="shopping">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="quantity">0</span>
                </div>
            </header>

            <div class="list">
            
            </div>
        </div>
        <div class="card">
            <h1>Card</h1>
            <ul class="listCard">
            </ul>
            <div class="checkOut">
                <div class="total">0</div>
                <div class="closeShopping">Close</div>
            </div>
        </div>

    </section> -->
    <!-- cart section ends -->
    
    <!-- newsletter section starts -->

    <section class="newsletter">
        <form action="">
            <h3>Subscribe For Later Updates</h31>
            <input type="email" name="" placeholder="enter your email" id="23424" class="box">
            <input type="submit" value="subscribe" class="btn">
        </form>
    </section>        



    <!-- newsletter section ends  -->
    <!-- review section starts  -->
    <section class="reviews" id="reviews">
        <h1 class="heading"><span> Client's Reviews</span></h1>
        <div class="swiper review-slider view">
            <div class="swiper-wrapper">
                <div class="swiper-slides box">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQFuET1-lTXjegu13KHNMBL9dGseiwN2iUUA&usqp=CAU" alt="">
                    <h3>Ayush Sharma</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et optio veritatis ipsum, aliquid placeat aut dolorum reprehenderit dolore! Dolor, error?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slides box">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRN3M4V6-NRVvbpbWUCOdIlkLQEelTqL5Nl4g&usqp=CAU" alt="">
                    <h3>july roy</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ea atque at, fugiat accusamus autem quibusdam fugit iste maiores exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slides box">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEURhShsAArs6R8167q2DmI8brxZPMW8eV2g&usqp=CAU" alt="">
                    <h3>Ayush Bisht</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dicta repellat odio inventore assumenda reprehenderit officia necessitatibus, enim officiis quae?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slides box">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUVX_pp49HR3yU3qfUc8BW84ZWMIx8WDHPnw&usqp=CAU" alt="">
                    <h3>Aviraj Singh</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo accusamus iste fugit totam deleniti magnam autem dignissimos illum eaque fuga.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slides box">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9yZyF373WSegLRC8Oo6ugxmprvSOEgF07Og&usqp=CAU" alt="">
                    <h3>Anushka</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi nobis officiis ex dolorum facilis? Quo nihil eligendi architecto ipsa blanditiis.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slides box">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS20Y8ey-KpwhT6yewd8Q3TxGyozYQp45iADA&usqp=CAU" alt="">
                    <h3>Kanishka</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos commodi recusandae voluptas ea, amet corporis dolores adipisci minus architecto aliquam?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- review section ends  -->

    <!-- footer section starts  -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>our locations</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i>india</a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i>USA</a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i>russia</a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i>france</a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i>japan</a>
            </div>
            <div class="box">
                <h3>Quick Links</h3>
                <a href="#home"> <i class="fas fa-arrow-right"></i>home</a>
                <a href="#features"> <i class="fas fa-arrow-right"></i>Features</a>
                <a href="#books"> <i class="fas fa-arrow-right"></i>Books</a>
                <a href="#deal"> <i class="fas fa-arrow-right"></i>Deal of the day</a>
                <a href="#reviews"> <i class="fas fa-arrow-right"></i>reviews</a>
            </div>
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i>account info</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>ordered items</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>privacy policy</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>payment method</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>our services</a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +91 8171868079</a>
                <a href="#"> <i class="fas fa-phone"></i> +91 7302989667</a>
                <a href="#"> <i class="fas fa-envelope"></i>Shashvat.sanatanlibrary@gmai.com</a>
                <img src="php/wmap.png" class="map" alt="">
            </div>
        </div>
        <div class="share">
            <a href="https://www.instagram.com/sanatanlibrary02?igsh=ZjAzbmNma3Y3M3Ex" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-pinterest"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
        <div class="credit"> applied <span>terms and conditions</span>| all rights reserved<i class="fa-regular fa-registered"></i></div>
    </section>

    <!-- footer section ends  -->

    <!-- loader section starts  -->

    <div class="loader-container">
        <img src="https://media.tenor.com/tTb12zYpYboAAAAj/om-sign.gif" alt="">
    </div>

    <!-- loader section ends  -->

    <!-- slider js  -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- booystrap js links  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- custom js file  -->
    <script>
        searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
}
let loginForm = document.querySelector('.login-form-container');
document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
}
document.querySelector('#close-login-btn').onclick = () =>{
    loginForm.classList.remove('active');
}








window.onscroll = () =>{
    if(window.scrollY > 80){
        document.querySelector('.header .header2').classList.add('active');
    }
    else{
    document.querySelector('.header .header2').classList.remove('active');
    }
}
window.onload = () =>{
    if(window.scrollY > 80){
        document.querySelector('.header .header2').classList.add('active');
    }
    else{
    document.querySelector('.header .header2').classList.remove('active');
    }

    fadeOut();

}

function fadeOut(){
    setTimeout(() =>{
        let loader = document.querySelector('.loader-container');
        loader.classList.add('fade-out');
    }, 300)
}

var swiper = new Swiper(".book-slider", {
    loop:true,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });

  var swiper = new Swiper(".bookc", {
    spaceBetween: 7,
    loop:true,
    
    centeredSlides: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      450: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
    },
  });

  var swiper = new Swiper(".view", {
    spaceBetween: 50,
    loop: true,
    grabCursor: true,
    centeredSlides: true,
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
  

  let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'Mahabharat',
        image: 'mahabharat.jpg',
        price: 1200
    },
    {
        id: 2,
        name: 'Bhagwat Geeta',
        image: 'bhagwatgeeta.jpg',
        price: 2000
    },
    {
        id: 3,
        name: 'varaha puran',
        image: 'varahpuran.jpeg',
        price: 2200
    },
    {
        id: 4,
        name: 'vishnu puran',
        image: 'vishnupuran.jpg',
        price: 3000
    },
    {
        id: 5,
        name: 'vayu puran',
        image: 'vayupuran.jpg',
        price: 3200
    },
    {
        id: 6,
        name: 'kurma puran',
        image: 'kurmupuran.jpeg',
        price: 1200
    }
];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="php/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="php/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}
// code for smooth scrolling 
// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();

    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});
  
    </script>

  </body>
</html>