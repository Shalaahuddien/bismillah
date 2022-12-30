<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TAILWIND CSS -->
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
           
        </main>

            <div class="container-scroller">

            @include("admin.adminscript")

                <div style="position: relative; top: 60px; right: 333px">

                    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

                    @csrf

                        <div>
                            <label for="">Title</label>
                            <input type="text" name="title" placeholder="Write a title" required>
                        </div>

                         <div>
                            <label for="">Price</label>
                            <input type="num" name="price" placeholder="price" required>
                        </div>

                         <div>
                            <label for="">Image</label>
                            <input type="file" name="image" required>
                        </div>

                         <div>
                            <label for="">Description</label>
                            <input type="text" name="description" placeholder="Description" required>
                        </div>

                         <div>
                            <input style="color: black" type="Submit" value="Save">
                        </div>

                    </form>

                    <br>

                        <div>


                        <table bgcolor="red">

                            <tr>
                                    <th style="padding: 30px">Food Name</th>
                                    <th style="padding: 30px">Price</th>                
                                    <th style="padding: 30px">Description</th>
                                    <th style="padding: 30px">Image</th> 
                                    <th style="padding: 30px">Action</th>
                                    <th style="padding: 30px">Action2</th>    
                                </tr>

                                @foreach($data as $data)
                                <tr align="center">
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->price}}</td>
                                    <td>{{$data->description}}</td>
                                    <td><img height="200" width="200" src="{{Storage::url($data->image)}}" alt=""></td>

                                    <td href=""><a href="{{route('deletemenu',$data->id)}}">Delete</a></td>

                                    <td href=""><a href="{{route('updateview',$data->id)}}">Update</a></td>

                                </tr>

                                @endforeach

                        </table>


                        </div>


                </div>
                
            </div>

             @include("admin.navbar")

    </div>
</body>
</html>