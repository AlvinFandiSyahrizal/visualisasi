<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            transition: background-color 0.5s;
        }

        header {
            background-color: #195a9d;
            color: #fff;
            height: 50px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 2;
        }

        .menu-icon {
            color: #fff;
            cursor: pointer;
            font-size: 20px;
            margin-right: 20px;
        }

        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            top: 50px;
            left: 0;
            background-color: rgba(37, 144, 237, 0.9);
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 20px;
            z-index: 3;
        }

        .menu-button {
            background-color: #195a9d;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            font-size: 17px;
            width: 100%;
            text-align: left;
            transition: background-color 0.3s;
        }

        .menu-button:hover {
            background-color: #123b6f;
        }

        .submenu {
            display: none;
            padding-left: 20px;
        }

        .submenu-button {
            background-color: #195a9d;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            font-size: 15px;
            width: 100%;
            text-align: left;
        }

        .active {
            border: 2px solid #fff;
        }

        /* Gaya untuk dark mode */
        body.dark-mode {
            background-color: #1a1a1a;
            color: #fff;
        }

        .dark-mode header {
            background-color: #333;
        }

        .dark-mode .sidebar {
            background-color: #2c2c2c;
        }

        .dark-mode .menu-button {
            background-color: #333;
        }

        .dark-mode .menu-button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

    <header>
        <span class="menu-icon" onclick="toggleSidebar()">&#9776;</span>
        PART NUMBER SEQUENCE
    </header>

    <div class="sidebar" id="mySidebar">
        <button class="menu-button" onclick="navigateTo('/belajar/public/line2')">Line 2</button>
        <button class="menu-button" onclick="navigateTo('/belajar/public/line3')">Line 3</button>
        <button class="menu-button" onclick="navigateTo('/belajar/public/line4')">Line 4</button>
        <button class="menu-button" onclick="navigateTo('/belajar/public/visualisasi')">Visualizations</button>
        <!-- Tambahkan tombol untuk mengaktifkan/demokrat dark mode -->
        <button class="menu-button" onclick="toggleDarkMode()">Dark Mode</button>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("mySidebar");
            sidebar.style.width = sidebar.style.width === "250px" ? "0" : "250px";
        }

        function navigateTo(url) {
            window.open(url, '_blank');
        }

        // Fungsi untuk mengaktifkan/demokrat dark mode
        function toggleDarkMode() {
            const body = document.body;
            body.classList.toggle('dark-mode');
        }
    </script>

</body>
</html>
