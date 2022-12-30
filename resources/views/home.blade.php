<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antique Bakery Cafe</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="stylesheet" href="css/tooplate-antique-cafe.css">
</head>

<body>    
    <div id="intro" class="parallax-window" data-parallax="scroll" data-image-src="img/antique-cafe-bg-01.jpg">
        <!-- //tadi ada di id ada tm-nav nyambung js yg di bawah jadi di hapus -->
        <nav id="" class="fixed w-full">
            <div class="tm-container mx-auto px-2 md:py-6 text-right">

                <button class="md:hidden py-2 px-2" id="menu-toggle">

            <i class="fas fa-2x fa-bars tm-text-gold"></i>

                </button>

                <ul class="mb-3 md:mb-0 text-2xl font-normal flex justify-end flex-col md:flex-row">

                    <li class="inline-block mb-4 mx-4">
                        <a href="#intro" class="tm-text-gold py-1 md:py-3 px-4">Intro</a>
                    </li>

                    <li class="inline-block mb-4 mx-4"><a href="#menu" class="tm-text-gold py-1 md:py-3 px-4">Menu</a>
                    </li>

                    <li class="inline-block mb-4 mx-4"><a href="#about" class="tm-text-gold py-1 md:py-3 px-4">About</a>
                    </li>

                    <li class="inline-block mb-4 mx-4"><a href="#contact" class="tm-text-gold py-1 md:py-3 px-4">Contact</a>
                    </li>

                    <li class="scroll-to-section" style="background-color: red;"><a href="">
                        
                    @auth

                    Cart{{$count}}
                
                    @endauth

                    @guest

                        Cart[0]

                    @endguest

                    </a></li>

                 <li>

                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth

                       <!-- <li> <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a></li> -->
                    @else

                            <!-- <a href="{{route('login')}}">login</a> -->

                       <li> <a href="{{route('login')}}" class="tm-text-gold py-1 md:py-3 px-4  underline">Log in</a></li>

                        <br>

                        @if (Route::has('register'))
                          <li><a href="{{route('register')}}" class="tm-text-gold underline">Register</a></li>
                        @endif

                    @endauth
                </div>
            @endif

                    </li>

                </ul>
            </div>            
        </nav>

        <div class="container mx-auto px-2 tm-intro-width">

            <div class="sm:pb-60 sm:pt-48 py-20">

                <div class="bg-black bg-opacity-70 p-12 mb-5 text-center">

                    <h1 class="text-white text-5xl tm-logo-font mb-5">Antique Cafe</h1>

                    <p class="tm-text-gold tm-text-2xl">your daily energy booster</p>

                </div>    

                <div class="bg-black bg-opacity-70 p-10 mb-5">

                    <p class="text-white leading-8 text-sm font-light">

                        This is a coffee shop template named Antique Cafe which is a parallax HTML5 template with a good responsiveness.
                        Feel free to use this layout for your cafe.
                    	If you have any question, please <a rel="nofollow" href="https://www.tooplate.com/contact" target="_parent">send us a message</a>.
                     </p>
                </div>

                <div class="text-center">
                    <div class="inline-block">
                        <a href="#menu" class="flex justify-center items-center bg-black bg-opacity-70 py-6 px-8 rounded-lg font-semibold tm-text-2xl tm-text-gold hover:text-gray-200 transition">
                            <i class="fas fa-coffee mr-3"></i>
                            <span>Let's explore...</span>                        
                        </a>
                    </div>                    
                </div>                
            </div>
        </div>        
    </div>

    <!-- //in here -->

        @include("food")

    <!-- //end here -->

    <div id="about" class="parallax-window" data-parallax="scroll" data-image-src="img/antique-cafe-bg-03.jpg">
        <div class="container mx-auto tm-container py-24 sm:py-48">
            <div class="tm-item-container sm:ml-auto sm:mr-12 mx-auto sm:px-0 px-4">
                <div class="bg-white bg-opacity-80 p-12 pb-14 rounded-xl mb-5">
                    <h2 class="mb-6 tm-text-green text-4xl font-medium">About our cafe</h2>
                    <p class="mb-6 text-base leading-8">
                        Images are taken from Pexels, a great stock photo website.You may modify Antique Cafe template in any way you prefer and use it for your website.
                  </p>
                    <p class="text-base leading-8">
                        If you wish to <a rel="nofollow" href="https://www.tooplate.com/contact" target="_parent">support us</a>, please make a little donation via PayPal. That would be
                    very helpful. Another way is to tell your friends about Tooplate website. Thank you. </p>
                </div>

                <a href="#contact" class="inline-block tm-bg-green transition text-white text-xl pt-3 pb-4 px-8 rounded-md">
                    <i class="far fa-comments mr-4"></i>
                    Contact
                </a>
            </div>           
        </div>        
    </div>

    <div id="contact" class="parallax-window relative" data-parallax="scroll" data-image-src="img/antique-cafe-bg-04.jpg">
        <div class="container mx-auto tm-container pt-24 pb-48 sm:py-48">
            <div class="flex flex-col lg:flex-row justify-around items-center lg:items-stretch">
                <div class="flex-1 rounded-xl px-10 py-12 m-5 bg-white bg-opacity-80 tm-item-container">
                    <h2 class="text-3xl mb-6 tm-text-green">Contact Us</h2>
                    <p class="mb-6 text-lg leading-8">
                        Praesent tellus magna, consectetur sit amet volutpat eu, pulvinar vitae sem.
                        Sed ultrices. bg white 80% alpha. btn #066    
                    </p>

                    
                    <p class="mb-10 text-lg">
                        <span class="block mb-2">Tel: <a href="tel:0100200340" class="hover:text-yellow-600 transition">010-020-0340</a></span>
                        <span class="block">Email: <a href="mailto:info@company.com" class="hover:text-yellow-600 transition">info@company.com</a></span>                        
                    </p>

                    <div class="text-center">
                        <a href="https://www.google.com/maps" class="inline-block text-white text-2xl pl-10 pr-12 py-6 rounded-lg transition tm-bg-green">
                            <i class="fas fa-map-marked-alt mr-8"></i>
                            Open Maps
                        </a>
                    </div>                    
                </div>
                
                @include("critic")

            <footer class="absolute bottom-0 left-0 w-full">
                <div class="text-white container mx-auto tm-container p-8 text-lg flex flex-col md:flex-row justify-between">
                    <span>Copyright 2022 Antique Cafe. All rights reserved.</span>
                    <span class="mt-5 md:mt-0">Design: <a href="https://www.tooplate.com" target="_parent">Tooplate</a></span>
                </div>                
            </footer>
        </div>        
    </div>    

    <!-- <div class="h-screen bg-white">
        <a href="{{route('login')}}">login</a>
    </div> -->

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script>

        function checkAndShowHideMenu() {
            if(window.innerWidth < 768) {
                $('#tm-nav ul').addClass('hidden');                
            } else {
                $('#tm-nav ul').removeClass('hidden');
            }
        }

        $(function(){
            var tmNav = $('#tm-nav');
            tmNav.singlePageNav();

            checkAndShowHideMenu();
            window.addEventListener('resize', checkAndShowHideMenu);

            $('#menu-toggle').click(function(){
                $('#tm-nav ul').toggleClass('hidden');
            });

            $('#tm-nav ul li').click(function(){
                if(window.innerWidth < 768) {
                    $('#tm-nav ul').addClass('hidden');
                }                
            });

            $(document).scroll(function() {
                var distanceFromTop = $(document).scrollTop();

                if(distanceFromTop > 100) {
                    tmNav.addClass('scroll');
                } else {
                    tmNav.removeClass('scroll');
                }
            });
            
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>
</html>