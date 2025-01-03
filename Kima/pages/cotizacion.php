<?php
$title = "Cotizacion"; // Título dinámico
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
                            Cotizaciones</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Agregar Cotización-->
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_quote">
                            <i class="ki-duotone ki-user-plus fs-2"></i>Agregar Cotización
                        </a>
                        <!--end::Agregar Cotización-->
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
                        <div class="card-header pt-8">
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"></i>
                                    <input type="text" data-kt-quote-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Buscar cotización" />
                                </div>
                                <!--end::Search-->
                            </div>
                        </div>
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Cotización Table-->
                            <table id="kt_quote_list" class="table align-middle table-row-dashed fs-6 gy-5">
                                <thead>
                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">ID</th>
                                        <th class="min-w-150px">Cliente</th>
                                        <th class="min-w-150px">Descripción</th>
                                        <th class="w-125px">Monto</th>
                                        <th class="w-125px">Fecha</th>
                                        <th class="w-125px"></th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    <!-- Aquí se mostrarán las cotizaciones -->
                                    <tr>
                                        <td>1</td>
                                        <td>Juan Pérez</td>
                                        <td>Cotización para desarrollo de software</td>
                                        <td>$1000</td>
                                        <td>2024-12-08</td>
                                        <td class='text-end'>
                                            <button class='btn btn-sm btn-icon btn-light btn-active-light-primary'>
                                                <i class='ki-duotone ki-pencil fs-5'></i>Editar
                                            </button>
                                            <button class='btn btn-sm btn-icon btn-light btn-active-light-danger'>
                                                <i class='ki-duotone ki-trash fs-5'></i>Eliminar
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Ana Gómez</td>
                                        <td>Cotización para consultoría empresarial</td>
                                        <td>$1500</td>
                                        <td>2024-12-09</td>
                                        <td class='text-end'>
                                            <button class='btn btn-sm btn-icon btn-light btn-active-light-primary'>
                                                <i class='ki-duotone ki-pencil fs-5'></i>Editar
                                            </button>
                                            <button class='btn btn-sm btn-icon btn-light btn-active-light-danger'>
                                                <i class='ki-duotone ki-trash fs-5'></i>Eliminar
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end::Cotización Table-->
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

    <!--begin::Modal para Agregar Cotización-->
    <div class="modal fade" id="kt_modal_add_quote" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="fw-bold">Agregar Nueva Cotización</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="create_quote.php">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nombre_cliente" class="form-label">Nombre del Cliente</label>
                            <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" required>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="monto" class="form-label">Monto</label>
                            <input type="number" class="form-control" id="monto" name="monto" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cotización</button>
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
