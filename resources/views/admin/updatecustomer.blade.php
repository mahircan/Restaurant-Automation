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

        <form action="{{url('/updatecust',$data3->id)}}" method="post" enctype="multipart/form-data">

            @csrf

            <div>
                <label>Name</label>
                <input style="color: blue" type="text" name="name" value="{{$data3->name}}" required>
            </div>
            <div>
                <label>Surname</label>
                <input style="color: blue" type="text" name="surname" value="{{$data3->surname}}" required>
            </div>

            <div>
                <label>Price</label>
                <input style="color: blue" type="number" name="price" value="{{$data3->price}}" required>
            </div>

            <div>
                <label>Phone</label>
                <input style="color: blue" type="number" name="phone" value="{{$data3->phone}}" required>
            </div>

            <div>
                <label>Guest Number</label>
                <input style="color: blue" type="number" name="guestnumber" value="{{$data3->guestnumber}}" required>
            </div>

            <div>
                <label>Date</label>
                <input style="color: blue" type="date" name="date" value="{{$data3->date}}" required>
            </div>

            <div>
                <input style="color: black" type="submit" value="Update">
            </div>


        </form>

        <div>

</div>

@include("admin.adminscript")


</body>
</html>
