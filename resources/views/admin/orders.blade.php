<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TAILWIND CSS -->
    @include("admin.admincss")

    <!-- ALPINE JS -->

    @include("admin.adminscript")

    <title>Admin Coffea</title>
</head>
<body class="antialiased bg-gray-100">
    <div class="flex relative" x-data="{navOpen: false}">
        <!-- NAV -->
        @include("admin.navbar");
        <!-- END OF NAV -->

        <div class="container">

        <h1>Customers Orders</h1>


            <form action="{{url('/search')}}" method="get">

            @csrf

            <input type="text" name="search" style="color:blue;"> 
            <input type="submit" value="Search" class="btn btn-succes" >


            </form>


        <table>

        <tr align="center">

            <td style="padding: 30px;">Name</td>
            <td style="padding: 30px;">Phone</td>
            <td style="padding: 30px;">Address</td>
            <td style="padding: 30px;">FoodName</td>
            <td style="padding: 30px;">Price</td>
            <td style="padding: 30px;">Quantity</td>
            <td style="padding: 30px;">Total Price</td>

        </tr>

        @foreach($data as $data)

        <tr align="center" style="background-color: green;">

            <td>{{$data->name}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->foodname}}</td>
            <td>Rp.{{$data->price}}</td>
            <td>{{$data->quantity}}</td>
            <td>Rp.{{$data->price * $data->quantity}}</td>

        </tr>

        @endforeach

        </table>

        </div>

        <!-- PAGE CONTENT -->
        <main class="flex-1 h-screen overflow-y-scroll overflow-x-hidden">

            <div class="md:hidden justify-between items-center bg-black text-white flex">
                <h1 class="text-2xl font-bold px-4">Better Code</h1>
                <button @click="navOpen = !navOpen" class="btn p-4 focus:outline-none hover:bg-gray-800">
                    <svg class="w-6 h-6 fill-current" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>

        </main>
    </div>
</body>
</html>