<?php

include 'Session.php';
Session::checkSession();
?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP REST API MySQL AJAX jQuery CRUD</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css2?family=Fjalla+One:wght@400&amp;
        family=Libre+Franklin:wght@400;500">
    <link rel="stylesheet" href="./stylesheets/index.css">

    <script src="./js/index.js"></script>
</head>
<script>
    <?php
    if (!isset($_SESSION['uid'])) {
        echo ("let currentUID = -1;\n");
?>
</script>

<body>

    <div id="main-container">
        <div id="content-container">
            <h2>PHP REST API MySQL AJAX jQuery CRUD Web App</h2>

            <h3>Add a New Company</h3>
            <div class="input-group">
                <label>Company Name</label>
                <input type="text" id="name" name="name" value="">
            </div>
            <div class="input-group">
                <button class="btn" type="button" id="addNew">Save</button>
            </div>

            <table>
                <tr>
                    <th class="id-column">ID</th>
                    <th class="name-column">NAME</th>
                    <th class="actions-column">ACTIONS</th>
                </tr>
            </table>
            <div id="logout-btn-container">
                <a href="./logout.php" class="btn btn-default btn-flat">Sign out</a>
            </div>
            
        </div>
    </div>
<?php
    } else {
        echo ("var currentUID = " . $_SESSION['uid'] . ";\n");
    }
?>

</body>
</html>