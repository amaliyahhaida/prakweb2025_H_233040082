<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
        }

        .navbar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar h1 {
            font-size: 24px;
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #667eea;
            font-weight: bold;
            font-size: 18px;
        }

        .logout-btn {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 1px solid white;
            padding: 8px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .logout-btn:hover {
            background: white;
            color: #667eea;
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .welcome-card {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .welcome-card h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .welcome-card p {
            color: #666;
            line-height: 1.6;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .stat-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-card h3 {
            color: #667eea;
            font-size: 36px;
            margin-bottom: 10px;
        }

        .stat-card p {
            color: #666;
        }

        .links {
            margin-top: 30px;
        }

        .link-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }

        .link-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            color: #333;
            transition: all 0.3s;
            text-align: center;
        }

        .link-card:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            transform: translateY(-3px);
        }

        .link-card h4 {
            color: #667eea;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <h1>Dashboard</h1>
        <div class="navbar-right">
            <div class="user-info">
                <div class="user-avatar">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <span>{{ Auth::user()->name }}</span>
            </div>
            <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="welcome-card">
            <h2>Selamat Datang, {{ Auth::user()->name }}! 👋</h2>
            <p>Anda berhasil login ke sistem. Ini adalah halaman dashboard Anda.</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <h3>0</h3>
                <p>Total Posts</p>
            </div>
            <div class="stat-card">
                <h3>0</h3>
                <p>Categories</p>
            </div>
            <div class="stat-card">
                <h3>1</h3>
                <p>Active Users</p>
            </div>
        </div>

        <div class="links">
            <div class="link-grid">
                <a href="{{ route('posts.index') }}" class="link-card">
                    <h4>📝 Posts</h4>
                    <p>Lihat semua posts</p>
                </a>
                <a href="{{ route('categories.index') }}" class="link-card">
                    <h4>📂 Categories</h4>
                    <p>Kelola kategori</p>
                </a>
                <a href="/" class="link-card">
                    <h4>🏠 Home</h4>
                    <p>Kembali ke home</p>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
