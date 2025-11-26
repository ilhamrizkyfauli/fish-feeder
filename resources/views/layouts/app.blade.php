<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Fish Feeder' }}</title>

    <!-- BOOTSTRAP + ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .sidebar {
            width: 240px;
            height: 100vh;
            position: fixed;
            background: #0d6efd;
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
        }

        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .content {
            margin-left: 240px;
            padding: 30px;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <h4 class="text-center mb-4">🐟 Fish Feeder</h4>

        <a href="/dashboard"><i class="bi bi-speedometer2"></i> Dashboard</a>
        <a href="#"><i class="bi bi-clock"></i> Schedule</a>
        <a href="#"><i class="bi bi-fish"></i> Fish Data</a>
        <a href="#"><i class="bi bi-gear"></i> Settings</a>

        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button class="btn btn-danger w-100">Logout</button>
        </form>
    </div>

    <div class="content">
        <h3>{{ $pageTitle ?? 'Dashboard' }}</h3>
        <hr>
        @yield('content')
    </div>

</body>

</html>
