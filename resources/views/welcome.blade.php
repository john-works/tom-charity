<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bwabale Tom Charity Foundation</title>
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f9fafb, #e3f2fd);
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: #222;
      overflow: hidden;
    }

    .logo {
      font-size: 1.8rem;
      font-weight: 700;
      color: #0d47a1;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 10px;
      animation: fadeIn 2s ease-in-out;
    }

    .tagline {
      font-size: 1rem;
      color: #1565c0;
      margin-bottom: 30px;
      animation: fadeIn 2s ease-in-out 0.5s both;
    }

    .loader {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      border: 6px solid #bbdefb;
      border-top-color: #0d47a1;
      animation: spin 1.2s linear infinite;
    }

    .heart {
      color: #e53935;
      font-size: 2rem;
      margin-top: 20px;
      animation: pulse 1.5s infinite;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }

    @keyframes pulse {
      0%, 100% {
        transform: scale(1);
        opacity: 0.9;
      }
      50% {
        transform: scale(1.2);
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    footer {
      position: absolute;
      bottom: 20px;
      font-size: 0.85rem;
      color: #555;
    }

    footer a {
      color: #0d47a1;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="logo">Bwabale Tom Charity Foundation</div>
  <div class="tagline">"Empowering Communities, Changing Lives"</div>

  <div class="loader"></div>
  <div class="heart">❤️</div>

  <footer>
    &copy; <span id="year"></span> Bwabale Tom Charity Foundation. All rights reserved. |
    <a href="#">www.bwabalecharity.org</a>
  </footer>

  <script>
    // Auto-update the year
    document.getElementById('year').textContent = new Date().getFullYear();

    // Redirect to index page after 4 seconds
    setTimeout(() => {
      window.location.href = "{{ url('index') }}"; // change to index.php if needed
    }, 400);
  </script>
</body>
</html>
