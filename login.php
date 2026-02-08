<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --gold: #ffcc00;
            --purple: #764ba2;
        }

        
      .logo img {
          width: 40px;
          height: 40px;
          vertical-align: middle;
          margin-right: 10px;
      }
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 25px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), transparent);
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 30px;
            font-weight: bold;
            font-size: 14px;
            transition: 0.3s;
            border-bottom: 2px solid transparent;
        }

        .nav-links a:hover {
            color: var(--gold);
            border-bottom: 2px solid var(--gold);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #ffcc00 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .login-container h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 5px rgba(102, 126, 234, 0.1);
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .remember-forgot a {
            color: #667eea;
            text-decoration: none;
        }

        .remember-forgot a:hover {
            text-decoration: underline;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        .signup-link {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 14px;
        }

        .signup-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>


    <nav><div class="logo"><img src="smk.png" alt="M7 Logo">SMKN 1 GARUT</div>
        <div class="nav-links">
            <a href="index.html">Home</a>
            <a href="index.html#teams">Teams</a>
            <a href="index.html#schedule">Schedule</a>
            <a href="index.html#shop">Tickets & Food</a>
            <a href="login.html">Login</a>
        </div>
    </nav>


    <div class="login-container">
        <h1>Login</h1>
        <form id="loginForm">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
            </div>

            <div class="remember-forgot">
                <label>
                    <input type="checkbox" name="remember"> Ingat saya
                </label>
                <a href="#">Lupa password?</a>
            </div>

            <button type="submit" class="login-btn">Masuk</button>
        </form>

        <div class="signup-link">
            Belum punya akun? <a href="#">Daftar di sini</a>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Contoh validasi sederhana
            if (email && password) {
                alert('Login berhasil! \nEmail: ' + email);
                // Di sini Anda bisa menambahkan logika untuk mengirim data ke server
            } else {
                alert('Silakan isi semua field');
            }
        });
    </script>
</body>

</html>