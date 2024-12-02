<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : "Mi Proyecto"; ?></title>
    <!-- Cargar CSS -->
    <link href="assets/css/style.bundle.css" rel="stylesheet">
</head>
<body id="kt_app_body" class="app-default">
    <div id="kt_app_root">
        <!-- Sidebar -->
        <?php include 'layouts/sidebar.php'; ?>

        <!-- Contenido Principal -->
        <div id="kt_app_content">
            <?php
            // Cargar contenido dinámico
            if (isset($content)) {
                include $content;
            } else {
                
            }
            ?>
        </div>
    </div>

    <!-- Cargar JS -->
    <script src="assets/js/scripts.bundle.js"></script>
</body>
</html>
