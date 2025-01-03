<?php
$title = "Requisitos"; // Título dinámico
include '../layout.php'; // Asegúrate de que la ruta sea correcta
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <!-- Cargar CSS -->
    <link href="/Kima/assets/css/style.bundle.css" rel="stylesheet">
    
    <style>
        /* Ajuste de márgenes en el título */
        .page-heading {
            margin-top: 0px; /* Ajustar el margen superior del título */
        }
        
        /* Ajustar el margen superior de la barra de búsqueda */
        .card-header {
            margin-top: 5px; /* Ajustar el margen superior en la cabecera */
        }

        .app-container {
            padding-top: 10px; /* Ajuste del relleno superior en el contenedor principal */
        }

        /* Ajuste para la tabla de requisitos */
        #kt_requisito_list {
            margin-top: 10px; /* Reducir el espacio superior de la tabla */
        }

        /* Ajuste para los botones en la tabla */
        .card-body .btn {
            margin-top: 5px; /* Reducir el margen superior en los botones */
        }

        .modal-body {
            padding-top: 5px; /* Ajuste de margen en el modal */
        }
    </style>
</head>

<body>
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3" style="margin-top: 0; padding-top: 0;">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            Requisitos
                        </h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Agregar Requisito-->
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_requisito">
                            <i class="ki-duotone ki-user-plus fs-2"></i>Agregar Requisito
                        </a>
                        <!--end::Agregar Requisito-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Card-->
                    <div class="card card-flush">
                        <div class="card-header pt-4" style="margin-top: 0; padding-top: 5px;"> <!-- Ajuste aún más el margen superior -->
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"></i>
                                    <input type="text" data-kt-requisito-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Buscar requisito" />
                                </div>
                                <!--end::Search-->
                            </div>
                        </div>
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Requisitos Table-->
                            <table id="kt_requisito_list" class="table align-middle table-row-dashed fs-6 gy-5">
                                <thead>
                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">ID</th>
                                        <th class="min-w-150px">Descripción</th>
                                        <th class="w-125px">Categoría</th>
                                        <th class="w-125px">Prioridad</th>
                                        <th class="w-125px">Fecha</th>
                                        <th class="w-125px"></th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    <!-- Aquí se mostrarán los requisitos -->
                                    <?php
                                    // Datos de ejemplo para mostrar sin conexión a la base de datos
                                    $requisitos = [
                                        ['id' => 1, 'descripcion' => 'Requisito 1', 'categoria' => 'Funcional', 'prioridad' => 'Alta', 'fecha_creacion' => '2024-12-08'],
                                        ['id' => 2, 'descripcion' => 'Requisito 2', 'categoria' => 'No Funcional', 'prioridad' => 'Media', 'fecha_creacion' => '2024-12-07'],
                                        ['id' => 3, 'descripcion' => 'Requisito 3', 'categoria' => 'Requerimiento Legal', 'prioridad' => 'Baja', 'fecha_creacion' => '2024-12-06']
                                    ];
                                    
                                    // Mostrar los requisitos de ejemplo
                                    foreach ($requisitos as $row) {
                                        echo "<tr>";
                                        echo "<td>{$row['id']}</td>";
                                        echo "<td>{$row['descripcion']}</td>";
                                        echo "<td>{$row['categoria']}</td>";
                                        echo "<td>{$row['prioridad']}</td>";
                                        echo "<td>{$row['fecha_creacion']}</td>";
                                        echo "<td class='text-end'>
                                                <button class='btn btn-sm btn-icon btn-light btn-active-light-primary'>
                                                    <i class='ki-duotone ki-pencil fs-5'></i>Editar
                                                </button>
                                                <button class='btn btn-sm btn-icon btn-light btn-active-light-danger'>
                                                    <i class='ki-duotone ki-trash fs-5'></i>Eliminar
                                                </button>
                                              </td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <!--end::Requisitos Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>
    <!--end::Main-->

    <!--begin::Modal para Agregar Requisito-->
    <div class="modal fade" id="kt_modal_add_requisito" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="fw-bold">Agregar Nuevo Requisito</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="#">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoría</label>
                            <input type="text" class="form-control" id="categoria" name="categoria" required>
                        </div>
                        <div class="mb-3">
                            <label for="prioridad" class="form-label">Prioridad</label>
                            <select class="form-control" id="prioridad" name="prioridad" required>
                                <option value="Alta">Alta</option>
                                <option value="Media">Media</option>
                                <option value="Baja">Baja</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Requisito</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end::Modal-->

    <!--begin::Javascript-->
    <script src="/Kima/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/Kima/assets/js/scripts.bundle.js"></script>
    <script src="/Kima/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="/Kima/assets/js/custom/apps/file-manager/list.js"></script>
    <script src="/Kima/assets/js/widgets.bundle.js"></script>
    <script src="/Kima/assets/js/custom/widgets.js"></script>
    <script src="/Kima/assets/js/custom/apps/chat/chat.js"></script>
    <script src="/Kima/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="/Kima/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="/Kima/assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Javascript-->
</body>

</html>
