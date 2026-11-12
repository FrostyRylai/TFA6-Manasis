<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS System - Customers</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; background-color: #f9f9fb; color: #333; }
        .navbar { background-color: #d8839d; color: white; display: flex; justify-content: space-between; align-items: center; padding: 15px 40px; }
        .navbar .brand { font-size: 20px; font-weight: bold; }
        .navbar .nav-links a { color: white; text-decoration: none; margin-left: 25px; font-size: 16px; }
        .navbar .nav-links a:hover { font-weight: bold; }
        .container { padding: 40px; max-width: 1000px; margin: 0 auto; }
        table { width: 100%; border-collapse: collapse; background-color: white; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        th { background-color: #f7a8b8; color: white; text-align: left; padding: 14px 16px; }
        td { padding: 14px 16px; border-bottom: 1px solid #eee; color: #444; }
        tr:nth-child(even) { background-color: #fcfcfc; }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="brand">POS System</div>
        <div class="nav-links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/customers') }}">Customers</a>
            <a href="{{ url('/users') }}">Users</a>
        </div>
    </div>

    <div class="container">
        <h2>Customer Accounts</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer['id'] }}</td>
                    <td>{{ $customer['name'] }}</td>
                    <td>{{ $customer['email'] }}</td>
                    <td>{{ $customer['phone'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>