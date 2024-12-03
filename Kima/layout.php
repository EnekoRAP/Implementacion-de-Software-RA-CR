<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : "Mi Proyecto"; ?></title>
    <!-- Cargar CSS -->
    <link href="/Kima/assets/css/style.bundle.css" rel="stylesheet">
</head>

<body id="kt_app_body" class="app-default">
    <div id="kt_app_root" class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid">
            <!-- Sidebar -->
            <?php include 'layouts/sidebar.php'; ?>

            <!-- Contenido Principal -->
            <div id="kt_app_content" class="flex-column flex-row-fluid" style="margin-left: 250px; padding: 20px;">
                <?php
                if (isset($content)) {
                    include $content;
                } else {
                    echo "<div>No se encontró contenido.</div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>