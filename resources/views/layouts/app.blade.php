<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dkriuk Fried Chicken</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            height: 100vh;
            padding: 20px;
            color: white;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 10px 0;
        }
        .sidebar .submenu a {
            margin-left: 20px;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Dkriuk</h2>
        <a href="{{ route('orders.index') }}">Orders</a>
        <a href="">Products</a>
        <div class="submenu">
            <a href="{{ route('products.index') }}">Products</a>
            <a href="{{ route('categories.index') }}">Category</a>
        </div>
        <a href="{{ route('customers.index') }}">Customers</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
