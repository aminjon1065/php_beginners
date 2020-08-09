<?php
require 'confirm/connection.php';
$statement = $pdo->prepare("SELECT * FROM taskeight WHERE id=:id");
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$fetchs = $statement->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу
    </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="../css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="../css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="../css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="../css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="../css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="../css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="../css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="../css/fa-regular.css">
</head>
<body class="mod-bg-1 mod-nav-link ">
<main id="js-page-content" role="main" class="page-content">

    <div class="col-md-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Задание 8
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse"
                            data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen"
                            data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <p>Обычная таблица-изменить
                        <a href="task_8.php" class="float-right btn btn-primary">Назад</a>
                    </p>
                    <div class="panel-content">
                        <div class="bg-warning-100 border border-warning rounded">
                            <form action="update.php?id=<?=$fetchs['id'];?>" method="post">
                                <div class="form-group">
                                    <input type="text" name="firstname" class="form-control" value="<?= $fetchs['firstname'];?>">
                                </div>

                                <div class="form-group">
                                    <input name="lastname" class="form-control" value="<?= $fetchs['lastname']; ?>">
                                </div>
                                <div class="form-group">
                                    <input name="username" class="form-control"value="<?= $fetchs['username'];?>">
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-warning float-left" type="submit">Submit</button>
                                </div>
                            </form>
                            <div class="filter-message js-filter-message mt-0 fs-sm"></div>

                        </div>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script src="../js/vendors.bundle.js"></script>
<script src="../js/app.bundle.js"></script>
<script>
    // default list filter
    initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
    // custom response message
    initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
</script>
</body>
</html>
