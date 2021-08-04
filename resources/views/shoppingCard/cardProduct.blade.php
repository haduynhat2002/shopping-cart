<!DOCTYPE html>
<html lang="en">
<head>
    <title>List Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('https://www.w3schools.com/w3css/4/w3.css')}}">
    <link rel="stylesheet" href="{{url('https://pro.fontawesome.com/releases/v5.10.0/css/all.css')}}"/>
    <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>
    <script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}}"></script>
</head>
<body>

<div>

    <table class="table">

        <thead>
        @if(session('message'))
            <div class="w3-panel w3-green w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-large w3-display-topright">&times;</span>
                <h3>Success!</h3>
                <p>{{session('message')}}</p>
            </div>
        @endif
        @if(session('remove'))
            <div class="w3-panel w3-green w3-display-container">
                <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>
                <h3>Success!</h3>
                <p>{{session('remove')}}</p>
            </div>
        @endif
        <tr>

            <th>Id</th>
            <th>Name</th>
            <th>Thumbnail</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($shoppingCart as $products)
            <form action="{{route('nhat')}}" method="get">
                <input type="hidden" name="cartAction" value="update">
                <input type="hidden" name="productId" value="{{$products->id}}">
                <tr>
                    <td>{{$products->id}}</td>
                    <td>{{$products->name}}</td>
                    <td><img src="{{$products->thumbnail}}" style="width: 100px"></td>
                    <td>{{$products->price}}đ</td>
                    <td><input type="number" min="1" name="productQuantity" value="{{$products->quantity}}"></td>
                    <th>
                        <button class="btn btn-primary" style="font-size: 15px"> Update
                        </button>
                        <a class="btn btn-danger m-2" href="/shopping/remove?productId={{$products->id}}"
                           onclick="return confirm('Ban co muon xoa?')">Remove
                        </a>
                    </th>
                </tr>
            </form>
        @endforeach
        </tbody>
    </table>
    <div class="w3-container row">
        <div class="col-5">
            <div class="w3-card-4">
                <div class="w3-container w3-dark">
                    <h2>Form Order</h2>
                </div>

                <form class="w3-container" method="post" action="/shopping/save">
                    @csrf
                    <div class="m-0 mt-3">
                        <label>Ship Name</label>
                        <input class="w3-input" type="text" name="shipName">

                    </div>
                    <div class="m-0">
                        <label>Address</label>
                        <input class="w3-input" type="text" name="shipAddress">
                    </div>
                    <div class="m-0">
                        <label>Phone</label>
                        <input class="w3-input" type="text" name="shipPhone">
                    </div>
                    <div class="mb-3">
                        <label>Note</label>
                        <input class="w3-input" type="text" name="note">
                    </div>
                    <div class="row ml-1">
                        <button class="btn btn-dark mb-3 mr-3">Submit Order</button>
                        <div id="paypal-button"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
