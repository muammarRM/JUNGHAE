<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beranda</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="src/output.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <div class="home-bg">

      <section class="home">

         <div class="swiper home-slider">

            <div class="swiper-wrapper">

               <div class="swiper-slide slide">
                  <div class="image">
                     <img src="images/home-img-1.png" alt="">
                  </div>
                  <div class="content">
                     <span>Selamat datang di</span>
                     <h3>Jung-Hae Laundry</h3>
                     <a href="shop.php" class="btn">Lihat Lainnya</a>
                  </div>
               </div>

               <div class="swiper-slide slide">
                  <div class="image">
                     <img src="images/home-img-2.png" alt="">
                  </div>
                  <div class="content">
                     <span>Jung-Hae Laundry</span>
                     <h3>Wangi Tahan Lama</h3>
                     <a href="shop.php" class="btn">Beli Sekarang</a>
                  </div>
               </div>

               <div class="swiper-slide slide">
                  <div class="image">
                     <img src="images/home-img-3.png" alt="">
                  </div>
                  <div class="content">
                     <span>Jung-Hae Laundry</span>
                     <h3>Percayakan Cucian Anda Bersama Kami!</h3>
                     <a href="shop.php" class="btn">Beli Sekarang</a>
                  </div>
               </div>

            </div>

            <div class="swiper-pagination"></div>

         </div>

      </section>

   </div>

</section> 
   <section id="tentang">
      <section class="about">

         <div class="row">

            <div class="image">
               <!-- <img src="images/about-img.mp4" alt=""> -->
               <video id="myVideo" width="320" height="240" autoplay muted>
                  <source src="images/about-img.mp4" type="video/mp4">
                  Your browser does not support the video tag.
               </video>
             </div>

            <div class="content">
               <h3 style="font-weight: bold;">Mengapa Laundry Jung-Hae?</h3>
               <p>Sejak 2023, Jung-Hae laundry hadir untuk melayani anda dengan sepenuh hati. Kami percaya dibalik pakaian yang bernoda tersembunyi kenangan yang berharga. Kami membawa kesegaran baru dalam dunia laundry dengan komitmen untuk menjadikan setiap cucian sebagai bagian dari perjalanan cerita Anda.</p>
               <a href="https://kireiwash.com/about-us/" class="btn">Hubungi Kami</a>
            </div>

         </div>

      </section>

      <section class="reviews">

         <h1 class="heading" style="font-weight: 600;">Ulasan Pelanggan</h1>

         <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

               <div class="swiper-slide slide">
                  <img src="images/pic-1.jpeg" alt="">
                  <p>Staff Junghae Laundry sangat ramah dan membantu. Proses penerimaan dan pengambilan laundry pun cepat dan efisien.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <h3>Ely Rositiani</h3>
               </div>

               <div class="swiper-slide slide">
                  <img src="images/pic-2.jpeg" alt="">
                  <p>Harga yang ditawarkan Junghae Laundry menurut saya cukup sesuai dengan kualitas pelayanan dan hasil laundry.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <h3>Salsa Anindya Putri</h3>
               </div>

               <div class="swiper-slide slide">
                  <img src="images/pic-3.jpeg" alt="">
                  <p>Pakaian saya selalu bersih dan terawat dengan baik setelah dicuci di Junghae Laundry. Mereka juga sigap menangani noda membandel.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <h3>Muthia Nashiroh Ramadhani</h3>
               </div>

               <div class="swiper-slide slide">
                  <img src="images/pic-4.jpeg" alt="">
                  <p>Junghae Laundry juga menawarkan layanan laundry kilat yang sangat membantu saya saat sayaw sedang sibuk.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <h3>Dayana Khoiriyah Harahap</h3>
               </div>

               <div class="swiper-slide slide">
                  <img src="images/pic-6.jpeg" alt="">
                  <p>Harga yang ditawarkan Junghae Laundry menurut saya cukup sesuai dengan kualitas pelayanan dan hasil laundry.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <h3>Syakillah Nachwa</h3>
               </div>

            </div>

            <div class="swiper-pagination"></div>

         </div>

      </section>

      <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

      <script src="js/script.js"></script>

      <script>
         var swiper = new Swiper(".reviews-slider", {
            loop: true,
            spaceBetween: 20,
            pagination: {
               el: ".swiper-pagination",
               clickable: true,
            },
            breakpoints: {
               0: {
                  slidesPerView: 1,
               },
               768: {
                  slidesPerView: 2,
               },
               991: {
                  slidesPerView: 3,
               },
            },
         });
      </script>
   </section>
   <section class="home-products">

      <h1 class="heading" style="font-weight: 600;">Layanan yang Tersedia</h1>

      <div class="swiper products-slider">

         <div class="swiper-wrapper">

            <?php
            $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
            $select_products->execute();
            if ($select_products->rowCount() > 0) {
               while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
            ?>
                  <form action="" method="post" class="swiper-slide slide">
                     <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
                     <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
                     <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
                     <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
                     <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
                     <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
                     <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
                     <div class="name"><?= $fetch_product['name']; ?></div>
                     <div class="flex">
                        <div class="price"><span>Rp</span><?= $fetch_product['price']; ?><span>/-</span></div>
                        <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
                     </div>
                     <input type="submit" value="Tambahkan Ke keranjang" class="btn" name="add_to_cart">
                  </form>
            <?php
               }
            } else {
               echo '<p class="empty">belum ada produk yang ditambahkan!</p>';
            }
            ?>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".home-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
      });

      var swiper = new Swiper(".category-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 2,
            },
            650: {
               slidesPerView: 3,
            },
            768: {
               slidesPerView: 4,
            },
            1024: {
               slidesPerView: 5,
            },
         },
      });

      var swiper = new Swiper(".products-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         autoplay: {
            delay: 5000,
            disableOnInteraction: false,
         },
         breakpoints: {
            550: {
               slidesPerView: 2,
            },
            768: {
               slidesPerView: 2,
            },
            1024: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>