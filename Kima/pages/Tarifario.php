<?php
$title = "Tarifario"; // Título dinámico
include '../layout.php'; // Asegúrate de que la ruta sea correcta
?>
<html lang="en">

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
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            Tarifario</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="index.html" class="text-muted text-hover-primary">Inicio</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Tarifario</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Primary button-->
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_service">
                            <i class="ki-duotone ki-plus fs-2"></i>Agregar Servicio</a>
                        <!--end::Primary button-->
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
                        <!--begin::Card header-->
                        <div class="card-header pt-8">
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"></i>
                                    <input type="text" class="form-control form-control-solid w-250px ps-15" placeholder="Buscar servicio" />
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
                                    <!--begin::Export-->
                                    <button type="button" class="btn btn-flex btn-light-primary me-3" id="kt_export_tarifario">
                                        <i class="ki-duotone ki-export fs-2"></i>Exportar</button>
                                    <!--end::Export-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Table-->
                            <table id="kt_tarifario_table" class="table align-middle table-row-dashed fs-6 gy-5">
                                <thead>
                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">#</th>
                                        <th class="min-w-250px">Nombre del Servicio</th>
                                        <th class="min-w-100px">Categoría</th>
                                        <th class="min-w-100px">Precio</th>
                                        <th class="min-w-125px">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    <!-- Sample row -->
                                    <tr>
                                        <td>1</td>
                                        <td>Servicio de Prueba</td>
                                        <td>Consultoría</td>
                                        <td>$500</td>
                                        <td class="text-end">
                                            <button class="btn btn-icon btn-light-primary me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_service">
                                                <i class="ki-duotone ki-edit fs-5"></i>
                                            </button>
                                            <button class="btn btn-icon btn-light-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_delete_service">
                                                <i class="ki-duotone ki-trash fs-5"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Content-->
        </div>
    </div>
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>var hostUrl = "/Kima/assets/";</script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="/Kima/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/Kima/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="/Kima/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="/Kima/assets/js/custom/apps/file-manager/list.js"></script>
    <script src="/Kima/assets/js/widgets.bundle.js"></script>
    <script src="/Kima/assets/js/custom/widgets.js"></script>
    <script src="/Kima/assets/js/custom/apps/chat/chat.js"></script>
    <script src="/Kima/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="/Kima/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="/Kima/assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>