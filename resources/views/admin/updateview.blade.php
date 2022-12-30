<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TAILWIND CSS -->

    <base href="/public">

    @include("admin.admincss")

    <!-- ALPINE JS -->

    
    <title>Admin Coffea</title>
</head>
<body class="antialiased bg-gray-100">
    <div class="flex relative" x-data="{navOpen: false}">
        <!-- NAV -->
        <!-- END OF NAV -->
        
        
        
        <!-- PAGE CONTENT -->
        <main class="flex-1 h-screen overflow-y-scroll overflow-x-hidden">
            
            <div class="md:hidden justify-between items-center bg-black text-white flex">
                <h1 class="text-2xl font-bold px-4">Better Code</h1>
                <button @click="navOpen = !navOpen" class="btn p-4 focus:outline-none hover:bg-gray-800">
                    <svg class="w-6 h-6 fill-current" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
            
            @include("admin.navbar")
        </main>
        
    
            <div style="position: relative; top: 60px; right: 333px">
    
                    <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
    
                    @csrf
    
                        <div>
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{$data->title}}" required>
                        </div>
    
                         <div>
                            <label for="">Price</label>
                            <input type="num" name="price" value="{{$data->price}}" required>
                        </div>
    
                         <div>
                            <label for="">Description</label>
                            <input type="text" name="description" value="{{$data->description}}" required>
                        </div>
    
                        
                          <div>
                            <label for="">Old Image</label>
                            <img height="200" width="200" src="{{Storage::url($data->image)}}" alt="">
                        </div>
                        
                        <div>
                            <label for="">New Image</label>
                            <input type="file" name="image" required>
                        </div> 
    
                         <div>
                            <input style="color: black" type="Submit" value="Save">
                        </div>
    
                    </form>
    
                    <br>
    
                        <div>
    
    
    
        @include("admin.adminscript")
        </div>

</body>
</html>