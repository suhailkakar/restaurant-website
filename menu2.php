<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="css/menu.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   </head>
   <body>
      <div id="wrapper">
         <div class="cart-icon-top">
         </div>
         <div class="cart-icon-bottom">
         </div>
         <button onclick="checkut()"  id="checkout">
            CHECKOUT
         </button>
               <div id="header">
            <ul>
               <li><a href="index.php">Home</a></li>
               <li><a href="about.php">About Us</a></li>
               <li><a href="gallery.php">Gallery</a></li>
               <li><a href="contact.php">Contact Us</a></li>
               <li><a href="login.php">Login</a></li>
               <li><a href="https://www.google.com/maps/place/Thaliastra%C3%9Fe+125,+1160+Wien,+Austria/data=!4m2!3m1!1s0x476d080eefd80691:0x8cb77ef32297826a?sa=X&ved=2ahUKEwj8z7i3x5bvAhUK_3MBHdM5ASAQ8gEwAHoECAIQAQ">Location</a></li>
            </ul>
         </div>
         <div id="sidebar">
            <div id="checkout">
               CHECKOUT
            </div>
            <h3>CART </h3>
            <div id="cart">
               <span class="empty">No items in cart.</span>
            </div>
         </div>
         <!-- The Modal -->

         <div id="grid-selector">
            <div id="grid-menu">
               View:
               <ul>
                  <li class="largeGrid"><a href=""></a></li>
                  <li class="smallGrid"><a class="active" href=""></a></li>
               </ul>
            </div>
         </div>
         <div id="grid">
            <div class="product">
               <div class="info-large">
                  <h4>Veg Burger</h4>
                  <div class="sku">
                     Meal Type: <strong>Fast Food</strong>
                  </div>
                  <div class="price-big">
                     <span>$49</span>
                  </div>
                  <h3>DESCRIPTION</h3>
                  <div class="colors-large">
                     <p style="color: #a6aab3">ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                  </div>
                  <h3>PLATE</h3>
                  <div class="sizes-large">
                     <span>1</span>
                     <span>2</span>
                     <span>3</span>
                     <span>4</span>
                     <span>5</span>
                     <span>6+</span>
                  </div>
                  <button class="add-cart-large">Add To Cart</button>
               </div>
               <div class="make3D">
                  <div class="product-front">
                     <div class="shadow"></div>
                     <img src="https://i.ibb.co/gV8qzXX/Untitled-design-6.png" alt="" />
                     <div class="image_overlay"></div>
                     <div class="add_to_cart">Add to cart</div>
                     <div class="view_gallery">View gallery</div>
                     <div class="stats">
                        <div class="stats-container">
                           <span class="product_price">$49</span>
                           <span class="product_name">Veg Burger</span>
                           <p>Fast Food</p>
                           <br>
                           <div class="product-options">
                              <strong>PLATE</strong>
                              <span>1,2,3,4,5,6+</span>
                              <strong>DESCRIPTION</strong>
                              <div class="colors">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore <br> et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                              </div>
                              <br>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="product-back">
                     <div class="shadow"></div>
                     <div class="carousel">
                        <ul class="carousel-container">
                           <li><img src="https://i.ibb.co/gV8qzXX/Untitled-design-6.png" alt="" /></li>
                           <li><img src="https://i.ibb.co/TWg7rgL/Untitled-design-7.png" alt="" /></li>
                           <li><img src="https://i.ibb.co/026gMmc/Untitled-design-9.png" alt="" /></li>
                        </ul>
                        <div class="arrows-perspective">
                           <div class="carouselPrev">
                              <div class="y"></div>
                              <div class="x"></div>
                           </div>
                           <div class="carouselNext">
                              <div class="y"></div>
                              <div class="x"></div>
                           </div>
                        </div>
                     </div>
                     <div class="flip-back">
                        <div class="cy"></div>
                        <div class="cx"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="product">
               <div class="info-large">
                  <h4>Fried Chicken</h4>
                  <div class="sku">
                     Meal Type: <strong>Meat</strong>
                  </div>
                  <div class="price-big">
                     <span>$100</span>
                  </div>
                  <h3>DESCRIPTION</h3>
                  <div class="colors-large">
                     <p style="color: #a6aab3">ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                  </div>
                  <h3>PLATE</h3>
                  <div class="sizes-large">
                     <span>1</span>
                     <span>2</span>
                     <span>3</span>
                     <span>4</span>
                     <span>5</span>
                     <span>6+</span>
                  </div>
                  <button class="add-cart-large">Add To Cart</button>
               </div>
               <div class="make3D">
                  <div class="product-front">
                     <div class="shadow"></div>
                     <img src="https://i.ibb.co/vkmNCTz/Untitled-design-11.png" alt="" />
                     <div class="image_overlay"></div>
                     <div class="add_to_cart">Add to cart</div>
                     <div class="view_gallery">View gallery</div>
                     <div class="stats">
                        <div class="stats-container">
                           <span class="product_price">$100</span>
                           <span class="product_name">Fried chicken</span>
                           <p>Meat</p>
                           <br>
                           <div class="product-options">
                              <strong>PLATE</strong>
                              <span>1,2,3,4,5,6+</span>
                              <strong>DESCRIPTION</strong>
                              <div class="colors">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore <br> et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                              </div>
                              <br>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="product-back">
                     <div class="shadow"></div>
                     <div class="carousel">
                        <ul class="carousel-container">
                           <li><img src="https://i.ibb.co/vkmNCTz/Untitled-design-11.png" alt="" /></li>
                           <li><img src="https://i.ibb.co/26tyzzn/li-img-src-https-i-ibb-co-vkm-NCTz-Untitled-design-11-png-alt-li.png" alt="" /></li>
                           <li><img src="https://i.ibb.co/sV475g0/Untitled-design-10.png" alt="" /></li>
                        </ul>
                        <div class="arrows-perspective">
                           <div class="carouselPrev">
                              <div class="y"></div>
                              <div class="x"></div>
                           </div>
                           <div class="carouselNext">
                              <div class="y"></div>
                              <div class="x"></div>
                           </div>
                        </div>
                     </div>
                     <div class="flip-back">
                        <div class="cy"></div>
                        <div class="cx"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="product">
               <div class="info-large">
                  <h4>Veg Pizza</h4>
                  <div class="sku">
                     Meal Type: <strong>Fast Food</strong>
                  </div>
                  <div class="price-big">
                     <span>$150</span>
                  </div>
                  <h3>DESCRIPTION</h3>
                  <div class="colors-large">
                     <p style="color: #a6aab3">ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                  </div>
                  <h3>Size</h3>
                  <div class="sizes-large">
                     <span>Small</span>
                     <span>Medium</span>
                     <span>Large</span>
                  </div>
                  <button class="add-cart-large">Add To Cart</button>
               </div>
               <div class="make3D">
                  <div class="product-front">
                     <div class="shadow"></div>
                     <img src="https://i.ibb.co/nRhZjYn/li-img-src-https-i-ibb-co-vkm-NCTz-Untitled-design-11-png-alt-li-1.png" alt="" />
                     <div class="image_overlay"></div>
                     <div class="add_to_cart">Add to cart</div>
                     <div class="view_gallery">View gallery</div>
                     <div class="stats">
                        <div class="stats-container">
                           <span class="product_price">$150</span>
                           <span class="product_name">Veg Pizza</span>
                           <p>Fast Food</p>
                           <br>
                           <div class="product-options">
                              <strong>Size</strong>
                              <span>Small,Medium,Large</span>
                              <strong>DESCRIPTION</strong>
                              <div class="colors">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore <br> et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                              </div>
                              <br>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="product-back">
                     <div class="shadow"></div>
                     <div class="carousel">
                        <ul class="carousel-container">
                           <li><img src="https://i.ibb.co/nRhZjYn/li-img-src-https-i-ibb-co-vkm-NCTz-Untitled-design-11-png-alt-li-1.png" alt="" /></li>
                           <li><img src="https://i.ibb.co/2n7fM9n/li-img-src-https-i-ibb-co-vkm-NCTz-Untitled-design-11-png-alt-li-3.png" alt="" /></li>
                           <li><img src="https://i.ibb.co/Hxs1243/li-img-src-https-i-ibb-co-vkm-NCTz-Untitled-design-11-png-alt-li-4.png" alt="" /></li>
                        </ul>
                        <div class="arrows-perspective">
                           <div class="carouselPrev">
                              <div class="y"></div>
                              <div class="x"></div>
                           </div>
                           <div class="carouselNext">
                              <div class="y"></div>
                              <div class="x"></div>
                           </div>
                        </div>
                     </div>
                     <div class="flip-back">
                        <div class="cy"></div>
                        <div class="cx"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script type="text/javascript">
      $(document).ready(function(){

           $(".largeGrid").click(function(){
           $(this).find('a').addClass('active');
           $('.smallGrid a').removeClass('active');

           $('.product').addClass('large').each(function(){
           });
           setTimeout(function(){
             $('.info-large').show();
           }, 200);
           setTimeout(function(){

             $('.view_gallery').trigger("click");
           }, 400);

           return false;
           });

           $(".smallGrid").click(function(){
           $(this).find('a').addClass('active');
           $('.largeGrid a').removeClass('active');

           $('div.product').removeClass('large');
           $(".make3D").removeClass('animate');
           $('.info-large').fadeOut("fast");
           setTimeout(function(){
               $('div.flip-back').trigger("click");
           }, 400);
           return false;
           });

           $(".smallGrid").click(function(){
           $('.product').removeClass('large');
           return false;
           });

           $('.colors-large a').click(function(){return false;});


           $('.product').each(function(i, el){

           // Lift card and show stats on Mouseover
           $(el).find('.make3D').hover(function(){
               $(this).parent().css('z-index', "20");
               $(this).addClass('animate');
               $(this).find('div.carouselNext, div.carouselPrev').addClass('visible');
              }, function(){
               $(this).removeClass('animate');
               $(this).parent().css('z-index', "1");
               $(this).find('div.carouselNext, div.carouselPrev').removeClass('visible');
           });

           // Flip card to the back side
           $(el).find('.view_gallery').click(function(){

             $(el).find('div.carouselNext, div.carouselPrev').removeClass('visible');
             $(el).find('.make3D').addClass('flip-10');
             setTimeout(function(){
             $(el).find('.make3D').removeClass('flip-10').addClass('flip90').find('div.shadow').show().fadeTo( 80 , 1, function(){
                 $(el).find('.product-front, .product-front div.shadow').hide();
               });
             }, 50);

             setTimeout(function(){
               $(el).find('.make3D').removeClass('flip90').addClass('flip190');
               $(el).find('.product-back').show().find('div.shadow').show().fadeTo( 90 , 0);
               setTimeout(function(){
                 $(el).find('.make3D').removeClass('flip190').addClass('flip180').find('div.shadow').hide();
                 setTimeout(function(){
                   $(el).find('.make3D').css('transition', '100ms ease-out');
                   $(el).find('.cx, .cy').addClass('s1');
                   setTimeout(function(){$(el).find('.cx, .cy').addClass('s2');}, 100);
                   setTimeout(function(){$(el).find('.cx, .cy').addClass('s3');}, 200);
                   $(el).find('div.carouselNext, div.carouselPrev').addClass('visible');
                 }, 100);
               }, 100);
             }, 150);
           });

           // Flip card back to the front side
           $(el).find('.flip-back').click(function(){

             $(el).find('.make3D').removeClass('flip180').addClass('flip190');
             setTimeout(function(){
               $(el).find('.make3D').removeClass('flip190').addClass('flip90');

               $(el).find('.product-back div.shadow').css('opacity', 0).fadeTo( 100 , 1, function(){
                 $(el).find('.product-back, .product-back div.shadow').hide();
                 $(el).find('.product-front, .product-front div.shadow').show();
               });
             }, 50);

             setTimeout(function(){
               $(el).find('.make3D').removeClass('flip90').addClass('flip-10');
               $(el).find('.product-front div.shadow').show().fadeTo( 100 , 0);
               setTimeout(function(){
                 $(el).find('.product-front div.shadow').hide();
                 $(el).find('.make3D').removeClass('flip-10').css('transition', '100ms ease-out');
                 $(el).find('.cx, .cy').removeClass('s1 s2 s3');
               }, 100);
             }, 150);

           });

           makeCarousel(el);
           });

           $('.add-cart-large').each(function(i, el){

           $(el).click(function(){
             var carousel = $(this).parent().parent().find(".carousel-container");
             var img = carousel.find('img').eq(carousel.attr("rel"))[0];
             var position = $(img).offset();

             var productName = $(this).parent().find('h4').get(0).innerHTML;
             var productPrice = $(this).parent().find('span').get(0).innerHTML;

             $("body").append('<div class="floating-cart"></div>');
             var cart = $('div.floating-cart');
             $("<img src='"+img.src+"' class='floating-image-large' />").appendTo(cart);

             $(cart).css({'top' : position.top + 'px', "left" : position.left + 'px'}).fadeIn("slow").addClass('moveToCart');
             setTimeout(function(){$("body").addClass("MakeFloatingCart");}, 800);

             setTimeout(function(){
             $('div.floating-cart').remove();
             $("body").removeClass("MakeFloatingCart");


             var cartItem = "<div class='cart-item'><div class='img-wrap'><img src='"+img.src+"' alt='' /></div><span>"+productName+"</span><br><strong>"+productPrice+"</strong><div class='cart-item-border'></div><div class='delete-item'></div></div>";

             $("#cart .empty").hide();
             $("#cart").append(cartItem);
             $("#checkout").fadeIn(500);

             $("#cartmain").append(cartItem);

             $("#cart .cart-item").last()
               .addClass("flash")
               .find(".delete-item").click(function(){
                 $(this).parent().fadeOut(300, function(){
                   $(this).remove();
                   if($("#cart .cart-item").size() == 0){
                     $("#cart .empty").fadeIn(500);
                     $("#checkout").fadeOut(500);
                   }
                 })
               });
               setTimeout(function(){
               $("#cart .cart-item").last().removeClass("flash");
             }, 10 );

           }, 1000);


           });
           })

           /* ----  Image Gallery Carousel   ---- */
           function makeCarousel(el){


           var carousel = $(el).find('.carousel ul');
           var carouselSlideWidth = 315;
           var carouselWidth = 0;
           var isAnimating = false;
           var currSlide = 0;
           $(carousel).attr('rel', currSlide);

           // building the width of the casousel
           $(carousel).find('li').each(function(){
             carouselWidth += carouselSlideWidth;
           });
           $(carousel).css('width', carouselWidth);

           // Load Next Image
           $(el).find('div.carouselNext').on('click', function(){
             var currentLeft = Math.abs(parseInt($(carousel).css("left")));
             var newLeft = currentLeft + carouselSlideWidth;
             if(newLeft == carouselWidth || isAnimating === true){return;}
             $(carousel).css({'left': "-" + newLeft + "px",
                          "transition": "300ms ease-out"
                        });
             isAnimating = true;
             currSlide++;
             $(carousel).attr('rel', currSlide);
             setTimeout(function(){isAnimating = false;}, 300);
           });

           // Load Previous Image
           $(el).find('div.carouselPrev').on('click', function(){
             var currentLeft = Math.abs(parseInt($(carousel).css("left")));
             var newLeft = currentLeft - carouselSlideWidth;
             if(newLeft < 0  || isAnimating === true){return;}
             $(carousel).css({'left': "-" + newLeft + "px",
                          "transition": "300ms ease-out"
                        });
             isAnimating = true;
             currSlide--;
             $(carousel).attr('rel', currSlide);
             setTimeout(function(){isAnimating = false;}, 300);
           });
           }

           $('.sizes a span, .categories a span').each(function(i, el){
           $(el).append('<span class="x"></span><span class="y"></span>');

           $(el).parent().on('click', function(){
             if($(this).hasClass('checked')){
               $(el).find('.y').removeClass('animate');
               setTimeout(function(){
                 $(el).find('.x').removeClass('animate');
               }, 50);
               $(this).removeClass('checked');
               return false;
             }

             $(el).find('.x').addClass('animate');
             setTimeout(function(){
               $(el).find('.y').addClass('animate');
             }, 100);
             $(this).addClass('checked');
             return false;
           });
           });

           $('.add_to_cart').click(function(){
           var productCard = $(this).parent();
           var position = productCard.offset();
           var productImage = $(productCard).find('img').get(0).src;
           var productName = $(productCard).find('.product_name').get(0).innerHTML;
           var productPrice = $(productCard).find('.product_price').get(0).innerHTML;


           $("body").append('<div class="floating-cart"></div>');
           var cart = $('div.floating-cart');
           productCard.clone().appendTo(cart);
           $(cart).css({'top' : position.top + 'px', "left" : position.left + 'px'}).fadeIn("slow").addClass('moveToCart');
           setTimeout(function(){$("body").addClass("MakeFloatingCart");}, 800);
           setTimeout(function(){
             $('div.floating-cart').remove();
             $("body").removeClass("MakeFloatingCart");


             var cartItem = "<div class='cart-item'><div class='img-wrap'><img src='"+productImage+"' alt='' /></div><span>"+productName+"</span><br><strong>"+productPrice+"</strong><div class='cart-item-border'></div><div class='delete-item'></div></div>";

             $("#cart .empty").hide();
             $("#cart").append(cartItem);
             $("#cartmain").append(cartItem);
             $("#checkout").fadeIn(500);

             $("#cart .cart-item").last()
               .addClass("flash")
               .find(".delete-item").click(function(){
                 $(this).parent().fadeOut(300, function(){
                   $(this).remove();
                   if($("#cart .cart-item").size() == 0){
                     $("#cart .empty").fadeIn(500);
                     $("#checkout").fadeOut(500);
                   }
                 })
               });
               setTimeout(function(){
               $("#cart .cart-item").last().removeClass("flash");
             }, 10 );

           }, 1000);
           });
           });
      </script>
      <script type="text/javascript">
        function checkut() {
         console.log("asda")
         let timerInterval
         Swal.fire({
           title: 'Please Wait !',
           html: 'Your will be redirected in a few seconds',
           timer: 3000,
           timerProgressBar: false,
           didOpen: () => {
             Swal.showLoading()
             timerInterval = setInterval(() => {
               const content = Swal.getContent()
               if (content) {
                 const b = content.querySelector('b')
                 if (b) {
                   b.textContent = Swal.getTimerLeft()
                 }
               }
             }, 100)
           },
           willClose: () => {
             clearInterval(timerInterval)
           }
         }).then((result) => {
           /* Read more about handling dismissals below */
           window.location.href = "payment.html";

           if (result.dismiss === Swal.DismissReason.timer) {
             console.log('I was closed by the timer')
           }
         })
}

      </script>

   </body>
</html>
