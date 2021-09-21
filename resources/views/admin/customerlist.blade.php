<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
<head>

    <base href="/public">

    @include("admin.admincss")
</head>
<body>

<div class="container-scroller">

    @include("admin.navbar")

    <div style="position: relative; top: 60px; right: -150px">

        <form action="{{url('/uploadcustomer')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div>
                <label>Name</label>
                <input style="color: blue" type="text" name="name" placeholder="Write a Title" required>
            </div>
            <div>
                <label>Surname</label>
                <input style="color: blue" type="text" name="surname" placeholder="Write a Title" required>
            </div>

            <div>
                <label>Price</label>
                <input style="color: blue" type="number" name="price" placeholder="price" required>
            </div>

            <div>
                <label>Phone</label>
                <input style="color: blue" type="number" name="phone" placeholder="Phone" required>
            </div>

            <div>
                <label>Guest Number</label>
                <input style="color: blue" type="number" name="guestnumber" placeholder="Guest Number" required>
            </div>

            <div>
                <label>Date</label>
                <input style="color: blue" type="date" name="date" placeholder="Data(.../..../....)" required>
            </div>

            <div>
                <input style="color: black" type="submit" value="Save">
            </div>


        </form>

        <div>

            <table bgcolor="black">
                <tr>
                    <th style="padding: 30px" >Name</th>
                    <th style="padding: 30px" >Surname</th>
                    <th style="padding: 30px" >Price</th>
                    <th style="padding: 30px" >Phone</th>
                    <th style="padding: 30px" >Guest Number</th>
                    <th style="padding: 30px" >Date</th>
                    <th style="padding: 30px" >Action</th>
                    <th style="padding: 30px" >Action2</th>
                </tr>

                @foreach($data3 as $data3)
                    <tr align="center">
                        <td>{{$data3->name}}</td>
                        <td>{{$data3->surname}}</td>
                        <td>{{$data3->price}}TL</td>
                        <td>{{$data3->phone}}</td>
                        <td>{{$data3->guestnumber}}</td>
                        <td>{{$data3->date}}</td>

                        <td><a href="{{url('/deletecustomer',$data3->id)}}">Delete</a></td>
                        <td><a href="{{url('/updatecustomer',$data3->id)}}">Update</a></td>
                    </tr>
                @endforeach
            </table>

        </div>



    </div>


</div>

@include("admin.adminscript")


</body>
</html>
