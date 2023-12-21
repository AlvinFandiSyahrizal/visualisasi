
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        header {
            background-color: rgb(7, 110, 170);
            height: 50px;
            display: flex;
            align-items: center;
            padding: 0 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 2;
        }

        .blue-header {
            background-color: rgb(1, 140, 182);
            height: 50px;
            width: 212px;
            display: flex;
            align-items: center;
            padding: 0 19px;
            margin: 0;
            margin-right: 0;
            margin-left: 0;
        }

        .menu-icon {
            color: #ffffff;
            cursor: pointer;
            margin-right: 70px;
            margin-left: 20px;
        }
        .menu-button {
            background-color: #195a9d;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            font-size: 17px;
        }


    </style>
</head>
<body>
    <header>
        <span class="blue-header">
            ini namanya
            <button class="menu-button" onclick="toggleSidebar()">☰ Sidebar</button>

        </span>

        <span class="menu-icon" onclick="toggleSidebar()">&#9776;</span>
    </header>
    <div class="sub-header">
        Sub-Header Content
    </div>
</body>
</html>
