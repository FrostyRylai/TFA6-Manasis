<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS System - Users</title>
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
        .badge { background-color: #00bcd4; color: white; padding: 4px 12px; border-radius: 12px; font-size: 12px; font-weight: bold; display: inline-block; }
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
        <h2>User & Staff Accounts</h2>
        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['full_name'] }}</td>
                    <td><span class="badge">{{ $user['role'] }}</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>