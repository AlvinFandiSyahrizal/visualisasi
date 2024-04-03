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
            background-color: #837a7a;
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
            position: fixed;
            top: 10px;
            display: flex;
            align-items: center;
        }

        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            top: 50px;
            left: 0;
            background-color: #454242;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 20px;
            z-index: 3;
        }

        .menu-button {
            background-color: #454242;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            font-size: 17px;
            width: 100%;
            text-align: left;
            transition: background-color 0.3s;
            position: relative;
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

        /* Toggle switch container */
        .toggle-container {
            position: fixed;
            top: 10px;
            right: 10px;
            display: flex;
            align-items: center;
        }

        /* Toggle switch styling */
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .toggle-slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 34px;
        }

        .toggle-slider:before {
            content: "";
            position: absolute;
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 50%;
        }

        .toggle-switch input:checked + .toggle-slider {
            background-color: #2196F3;
        }

        .toggle-switch input:focus + .toggle-slider {
            box-shadow: 0 0 1px #2196F3;
        }

        .toggle-switch input:checked + .toggle-slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Style untuk lampu indikator */
        .flange-indicator {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #ffd700; /* Warna kuning */
            margin-right: 10px;
        }

        .non-flange-indicator {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #1786f5; /* Warna biru */
            margin-right: 10px;
        }

        /* Positioning for indicators */
        .indicators-container {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

        /* Style untuk teks flange dan non-flange */
        .indicator-text {
            color: #ffffff; /* Warna teks hitam */
            margin-right: 5px;
        }
    </style>
</head>
<body>

    <header>
        <span class="menu-icon" onclick="toggleSidebar()">&#9776; &#0001; PART NUMBER SEQUENCE</span>
        <center><h3> <span id="dateTime"></span> </h3></center>
    </header>

    <div class="sidebar" id="mySidebar">
        <button class="menu-button" onclick="navigateTo('/visualisasi/public/line2')">Line 2</button>
        <button class="menu-button" onclick="navigateTo('/visualisasi/public/line3')">Line 3</button>
        <button class="menu-button" onclick="navigateTo('/visualisasi/public/line4')">Line 4</button>
        <button class="menu-button" onclick="navigateTo('/visualisasi/public/visualisasi')">Visualizations</button>
        <!-- Tambahkan tombol untuk mengaktifkan/demokrat dark mode -->
        <div class="toggle-container">
            <!-- Indikator warna untuk flange -->
            <div class="indicators-container">
                <div class="flange-indicator"></div>
                <div class="indicator-text">Flange</div>
            </div>
            <!-- Indikator warna untuk non-flange -->
            <div class="indicators-container">
                <div class="non-flange-indicator"></div>
                <div class="indicator-text">Non-Flange</div>
            </div>
            <!-- Toggle switch -->
            <label class="toggle-switch">
                <input type="checkbox" id="darkModeToggle" onchange="toggleDarkMode()">
                <span class="toggle-slider"></span>
            </label>
            <span class="dark-mode-indicator"></span>
        </div>
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
            const darkModeToggle = document.getElementById("darkModeToggle");

            if (darkModeToggle.checked) {
                body.classList.toggle('dark-mode', true);
                body.classList.toggle('dark-mode-on', true);
            } else {
                body.classList.toggle('dark-mode', false);
                body.classList.toggle('dark-mode-on', false);
            }
        }

        function updateDateTime() {
            var currentDate = new Date();
            var optionsDate = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            var optionsTime = { hour: 'numeric', minute: 'numeric', second: 'numeric' };

            var formattedDate = currentDate.toLocaleDateString('en-US', optionsDate);
            var formattedTime = currentDate.toLocaleTimeString('en-US', optionsTime);

            document.getElementById('dateTime').textContent = formattedDate + ' ' + formattedTime;
        }

        updateDateTime();
        setInterval(updateDateTime, 1000); // Update time every second
        // fetchData();
        // setInterval(fetchData, 3000);
    </script>

</body>
</html>
