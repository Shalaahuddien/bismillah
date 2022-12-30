<section>
    <div id="menu" class="parallax-window" data-parallax="scroll" data-image-src="img/antique-cafe-bg-02.jpg">
        <div class="container mx-auto tm-container py-24 sm:py-48">
            <div class="text-center mb-16">
                <h2 class="bg-white tm-text-brown py-6 px-12 text-4xl font-medium inline-block rounded-md">Our Cafe Menu</h2>
            </div>            

            <!-- //akan dijadikan di database -->

            @foreach($data as $data)

            <div class="flex flex-col lg:flex-row justify-around items-center">
                <div class="flex-1 m-5 rounded-xl px-4 py-6 sm:px-8 sm:py-10 tm-bg-brown tm-item-container">
                    <div class="flex items-start mb-6 tm-menu-item">
                        <img src="{{Storage::url($data->image)}}" height="111" width="111" alt="Image" class="rounded-md">
                        <div class="ml-3 sm:ml-6">
                            <h3 class="title">{{$data->title}}</h3>
                            <p class="description">{{$data->description}}</p>
                            <div class="price">{{$data->price}}</div>
                        </div>                    
                    </div>
                                                            
                    @endforeach

            </div>
        </div>        
    </div>
</section>