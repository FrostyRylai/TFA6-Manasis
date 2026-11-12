<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS System - Home</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; background-color: #f9f9fb; color: #333; }
        .navbar { background-color: #d8839d; color: white; display: flex; justify-content: space-between; align-items: center; padding: 15px 40px; }
        .navbar .brand { font-size: 20px; font-weight: bold; }
        .navbar .nav-links a { color: white; text-decoration: none; margin-left: 25px; font-size: 16px; }
        .navbar .nav-links a:hover { font-weight: bold; }
        .container { padding: 40px; max-width: 1000px; margin: 0 auto; }
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
        <h2>Dashboard / Home</h2>
        <p>Welcome to the POS System management dashboard. Use the top navigation bar to manage customers and staff user accounts.</p>
    </div>
</body>
</html>