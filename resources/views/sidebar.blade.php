<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('styles')
</head>
<body>

    <div class="container">
    <div class="sidebar">
            <h2><img src="{{asset('./images/dashboard.png')}}" alt="Dashboard Icon" style="height: 20px;">Dashboard</h2>
            <ul>
                <li><img src="{{asset('./images/skincare.png')}}" alt="Product Image" style="height: 20px;">
                <a href="{{ route('Item.index') }}">Products</a>
                    <ul class="dropdown">
                        <li><a href="{{ route('Item.create') }}">Add product</a></li>
                        <!-- <li><a href="#">Product 2</a></li>
                        <li><a href="#">Product 3</a></li> -->
                    </ul>
                </li>
                <li><img src="{{asset('./images/order.png')}}" alt="Order Image" style="height: 20px;"><a href="#">Orders</a></li>
                <li><img src="{{asset('./images/statistic.png')}}" alt="Statistics Image" style="height: 20px;"><a href="#">Statistics</a></li>
                <li><img src="{{asset('./images/customer.png')}}" alt="Customer Image" style="height: 20px;"><a href="#">Customers</a></li>
                <li><img src="{{asset('./images/setting.png')}}" alt="Product Image" style="height: 20px;"><a href="#">Settings</a></li>
            </ul>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>

</body>
</html>
