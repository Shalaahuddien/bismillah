<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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

                    <a href="{{url('/showcart',Auth::user()->id)}}">

                    Cart{{$count}}

                    </a>
                
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

        <div id="top">

        <table style="position: absolute; down: 77; top: 333px; left: 555px; right: 555px;" align="center" bgcolor="yellow">

            <!-- style="position: absolute; down: 77; top: 333px; left: 555px; right: 11px;" -->

                <tr>

                        <th style="padding: 30px;">Food Name</th>
                        <th style="padding: 30px;">Price</th>
                        <th style="padding: 30px;">Quantity</th>
                        <th style="padding: 30px;">Action</th>

                </tr>

                <form action="{{url('orderconfirm')}}" method="post">

                    @csrf

                @foreach($data as $data)

                <tr align="center">

                        <td>
                            <input type="text" name="foodname[]" value="{{$data->title}}" hidden="">
                            {{$data->title}}
                        </td>

                        <td>
                            <input type="text" name="price[]" value="{{$data->price}}" hidden="">
                            {{$data->price}}
                        </td>

                        <td>
                            <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">
                            {{$data->quantity}}
                        </td>
                        
                </tr>

                @endforeach

                @foreach($data2 as $data2)

                    <tr style="position: relative; top: -55px; right: -369px;">

                    <td><a href="{{url('/remove',$data2->id)}}" class="btn btn-warning">Remove</a></td>

                    </tr>

                @endforeach

            </table>

            <div style="position: absolute; down: 33; top: 533px; left: 555px; right: 555px; padding: 10px" align="center">

                <button class="btn btn-primary dropdown" type="buttom" id="order">Order Now</button>

            </div>

            <div @click="open = !open" x-data="{open:false}" id="appear" align="center" style="display: ; position: absolute; down: 33; top: 555px; left: 555px; right: 555px; padding: 10px;" class="dropdown-toggle from-select">

                    <div style="padding: 10px;">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Name">
                    </div>

                    <div style="padding: 10px;">
                        <label for="">Phone</label>
                        <input type="number" name="phone" placeholder="Phone Number">
                    </div>

                    <div style="padding: 10px;">
                        <label for="">Address</label>
                        <input type="text" name="address" placeholder="Address">
                    </div>

                    <div style="padding: 10px;">
                        <input class="btn btn-succes" type="submit" value="Order Confirm">

                        <!-- <button id="close" class="btn btn-danger">Close</button> -->
                    </div>

            </div>

        </form>

            <script type="text/javascript">

            </script>

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

              $("#order").click(

                    function()
                    {
                        $("appear").show();
                    }
                );

                $("#close").click(

                    function()
                    {
                        $("appear").hide();
                    }
                );

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