<style>
    .sidebar {
        height: 100%;
        width: 0;
        position: fixed;
        top: 50px;
        left: 0;
        background-color: #2590ed;
        overflow-x: hidden;
        transition: 0.5s;
    }

    .sidebar-content {
        padding: 16px;
        color: rgb(8, 0, 0);
    }


    .menu-button {
        background-color: #195a9d;
        color: #ffffff;
        padding: 10px;
        margin: 0;
        text-align: left;
        cursor: pointer;
        width: 100%;
        font-size: 17px;
    }

    .submenu-button:hover, .submenu-button.active {
        border: 2px solid #ffffff;
    }

    .submenu {
        display: none;
        padding-left: 10px;
    }

    .submenu-button {
        display: block;
        background-color: #195a9d;
        color: #ffffff;
        padding: 10px;
        margin: 0;
        text-align: left;
        border: none;
        cursor: pointer;
        width: 100%;
    }
    .submenu-icon-right {
        float: right;
        margin-left: 10px;
    }
</style>
</head>
<body>

    <header>
        <span class="blue-header"></span>
        <span class="menu-icon" onclick="toggleSidebar()">&#9776;</span>
    </header>
    <div class="sidebar" id="mySidebar">
        <div class="sidebar-content">
            <button class="menu-button" onclick="navigateTo('Dashboard')">Dashboard</button>
            <button class="menu-button" onclick="navigateTo('Module')">Module</button>
            <button class="menu-button" onclick="navigateTo('Forms-Crud')">Forms-Crud</button>
            <button class="menu-button" onclick="navigateTo('Data Tables')">Data Tables</button>
            <button class="menu-button" onclick="toggleSubmenu('chartsSubmenu')">
                Charts <span id="submenu-icon" class="submenu-icon-right">◀</span>
            </button>
            <div id="chartsSubmenu" class="submenu">
                <button class="submenu-button" onclick="navigateTo('Chart1')">Line1</button>
                <button class="submenu-button" onclick="navigateTo('Chart2')">Line2</button>
                <button class="submenu-button" onclick="navigateTo('Chart3')">Line3</button>
                <button class="submenu-button" onclick="navigateTo('Chart4')">Line4</button>
            </div>
            <button class="menu-button" onclick="navigateTo('Menu')">Menu</button>
        </div>
    </div>
    </div>
    <script>
        let sidebarOpen = false;
        let originalContent = document.getElementById("content-under-header").innerHTML;

        function toggleSidebar() {
            if (sidebarOpen) {
                document.getElementById("mySidebar").style.width = "0";
                sidebarOpen = false;
                document.getElementById("content-under-header").innerHTML = originalContent;
            } else {
                document.getElementById("mySidebar").style.width = "250px";
                sidebarOpen = true;
                document.getElementById("content-under-header").innerHTML = "";
            }
        }

        function toggleSubmenu(submenuId) {
            const submenu = document.getElementById(submenuId);
            const submenuIcon = document.getElementById("submenu-icon");
            const submenuButton = document.querySelector(".menu-button.active");

            if (submenu.style.display === "block") {
                submenu.style.display = "none";
                submenuIcon.innerHTML = "◀";
                submenuButton.classList.remove("active");
            } else {
                submenu.style.display = "block";
                submenuIcon.innerHTML = "▼";
                submenuButton.classList.add("active");
            }
        }

        function navigateTo(page) {
            function navigateTo(page) {
                if (page === 'Dashboard') {
                    window.location.href = 'dashboard.blade.php';
                } else if (page === 'Module') {
                    window.location.href = 'module.html';
                } else if (page === 'Forms-Crud') {
                    window.location.href = 'forms-crud.html';
                } else if (page === 'Data Tables') {
                    window.location.href = 'data-tables.html';
                } else if (page === 'Chart1') {
                    window.location.href = 'chart1.html';
                } else if (page === 'Chart2') {window.location.href = 'chart2.html';
            } else if (page === 'Chart3') {
                 window.location.href = 'chart3.html';
                } else if (page === 'Chart4') {
                     window.location.href = 'chart4.html';
                    } else if (page === 'Menu') {
                        window.location.href = 'menu.html';
                    }
                }
            }
    </script>
</body>
</html>
