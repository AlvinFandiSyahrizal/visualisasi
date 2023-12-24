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
            background-color: rgba(37, 144, 237, 0.9); /* Semi-transparent background */
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 20px;
            z-index: 3; /* Set z-index to a higher value */
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
            transition: background-color 0.3s; /* Efek transisi untuk perubahan warna latar belakang */
        }

        .menu-button:hover {
            background-color: #123b6f; /* Warna latar belakang saat di-hover */
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
    </style>
</head>
<body>

    <header>
        <span class="menu-icon" onclick="toggleSidebar()">&#9776;</span>
        Navbar
    </header>

    <div class="sidebar" id="mySidebar">
        <button class="menu-button" onclick="navigateTo('Chart2')">Line 2</button>
        <button class="menu-button" onclick="navigateTo('Chart3')">Line 3</button>
        <button class="menu-button" onclick="navigateTo('Chart4')">Line 4</button>
        <button class="menu-button" onclick="toggleSubmenu('chartsSubmenu')">
            Visualizations
        </button>
        <div id="chartsSubmenu" class="submenu">
            <button class="submenu-button" onclick="navigateTo('Chart2')">Line 2</button>
            <button class="submenu-button" onclick="navigateTo('Chart3')">Line 3</button>
            <button class="submenu-button" onclick="navigateTo('Chart4')">Line 4</button>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("mySidebar");
            sidebar.style.width = sidebar.style.width === "250px" ? "0" : "250px";
        }

        function toggleSubmenu(submenuId) {
            const submenu = document.getElementById(submenuId);
            submenu.style.display = submenu.style.display === "block" ? "none" : "block";
        }

        function navigateTo(page) {
            if (page === 'Chart2') {
                // Redirect to the desired route for Line 2
                window.location.href = '/visualisasi';
            } else if (page.startsWith('Chart')) {
                // Handle chart navigation logic here
                console.log("Navigating to chart", page);
            } else {
                // Redirect to the visualization route
                window.location.href = '/visualisasi';
            }
        }

    </script>

</body>
</html>