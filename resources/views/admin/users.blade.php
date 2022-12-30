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

        <div>

         @include("admin.adminscript")

        <div style="position: relative; top: 60px; right: 333px;">

            <table bgcolor="grey" border="3px">

                    <tr>
                        <th style="padding: 30px">Name</th>
                        <th style="padding: 30px">Email</th>
                        <th style="padding: 30px">Action</th>
                    </tr>

                    @foreach($data as $data)
                    <tr align="center">
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>

                        @if($data->usertype=="0")
                        <td><a href="{{url('/deleteuser', $data->id)}}">delete</a></td>
                        @else
                        <td><a>Not Allowed</a></td>

                        @endif

                    </tr>

                    @endforeach

            </table>

        </div>

        </div>

        @include("admin.navbar");

    </div>
</body>
</html>