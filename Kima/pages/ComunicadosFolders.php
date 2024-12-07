<?php
$title = "Comunicados"; // Título dinámico
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
                        <h1
                            class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 mt-10">
                            Comunicados Emitidos</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="index.html" class="text-muted text-hover-primary">Ministerio de Salud</a>
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Card-->
                    <div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10"
                        style="background-size: auto calc(100% + 10rem); background-position-x: 100%; background-image: url('/Kima/assets/media/illustrations/sketchy-1/4.png')">
                        <!--begin::Card header-->
                        <div class="card-header pt-10">
                            <div class="d-flex align-items-center">
                                <!--begin::Icon-->
                                <div class="symbol symbol-circle me-5">
                                    <div
                                        class="symbol-label bg-transparent text-primary border border-secondary border-dashed">
                                        <i class="ki-duotone ki-abstract-47 fs-2x text-primary">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <div class="d-flex flex-column">
                                    <h2 class="mb-1">Gestión de Carpetas</h2>
                                    <div class="text-muted fw-bold">
                                        <span class="mx-3"></span>5.9 GB
                                        <span class="mx-3">|</span>10 items
                                    </div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pb-0">
                            <!--begin::Navs-->
                            <div class="d-flex overflow-auto h-55px">
                                <ul
                                    class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-semibold flex-nowrap">
                                    <!--begin::Nav item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary me-6"
                                            href="pages/Comunicados.php">Archivos</a>
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary me-6 active"
                                            href="pages/ComunicadosFolders.php">Carpetas</a>
                                    </li>
                                    <!--end::Nav item-->
                                </ul>
                            </div>
                            <!--begin::Navs-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header pt-8">
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <input type="text" data-kt-filemanager-table-filter="search"
                                        class="form-control form-control-solid w-300px ps-15"
                                        placeholder="Buscar Archivos & Carpetas" />
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
                                    <!--begin::Back to folders-->
                                    <a href="apps/file-manager/folders.html"
                                        class="btn btn-icon btn-light-primary me-3">
                                        <i class="ki-duotone ki-exit-up fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                    <!--end::Back to folders-->
                                    <!--begin::Export-->
                                    <button type="button" class="btn btn-flex btn-light-primary me-3"
                                        id="kt_file_manager_new_folder">
                                        <i class="ki-duotone ki-add-folder fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Nueva Carpeta</button>
                                    <!--end::Export-->
                                    <!--begin::Add customer-->
                                    <button type="button" class="btn btn-flex btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_upload">
                                        <i class="ki-duotone ki-folder-up fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Subir Archivo</button>
                                    <!--end::Add customer-->
                                </div>
                                <!--end::Toolbar-->

                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body">
                                <!--begin::Table-->
                                <table id="kt_file_manager_list" data-kt-filemanager-table="folders"
                                    class="table align-middle table-row-dashed fs-6 gy-5">
                                    <thead>
                                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                        data-kt-check-target="#kt_file_manager_list .form-check-input"
                                                        value="1" />
                                                </div>
                                            </th>
                                            <th class="min-w-250px">Nombre</th>
                                            <th class="min-w-10px">Tamaño</th>
                                            <th class="min-w-125px">Ultima Vez Modificado</th>
                                            <th class="w-125px"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600">
                                        <tr>
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td data-order="Enero">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon-wrapper">
                                                        <i class="ki-duotone ki-folder fs-2x text-primary me-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <a href="apps/file-manager/files/.html"
                                                        class="text-gray-800 text-hover-primary">Enero</a>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Share link-->
                                                    <div class="ms-2" data-kt-filemanger-table="copy_link">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-fasten fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                            data-kt-menu="true">
                                                            <!--begin::Card-->
                                                            <div class="card card-flush">
                                                                <div class="card-body p-5">
                                                                    <!--begin::Loader-->
                                                                    <div class="d-flex"
                                                                        data-kt-filemanger-table="copy_link_generator">
                                                                        <!--begin::Spinner-->
                                                                        <div class="me-5" data-kt-indicator="on">
                                                                            <span class="indicator-progress">
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Spinner-->
                                                                        <!--begin::Label-->
                                                                        <div class="fs-6 text-gray-900">Generating Share
                                                                            Link...
                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Loader-->
                                                                    <!--begin::Link-->
                                                                    <div class="d-flex flex-column text-start d-none"
                                                                        data-kt-filemanger-table="copy_link_result">
                                                                        <div class="d-flex mb-3">
                                                                            <i
                                                                                class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                            <div class="fs-6 text-gray-900">Share Link
                                                                                Generated
                                                                            </div>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="https://path/to/file/or/folder/" />
                                                                        <div
                                                                            class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                            Read
                                                                            only.
                                                                            <a href="apps/file-manager/settings/.html"
                                                                                class="ms-2">Change permissions</a>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Link-->
                                                                </div>
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::Share link-->
                                                    </div>
                                                    <!--begin::More-->
                                                    <div class="ms-2">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="apps/file-manager/files.html"
                                                                    class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table="rename">Rename</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Download Folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table-filter="move_row"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_move_to_folder">Move to
                                                                    folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link text-danger px-3"
                                                                    data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::More-->
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td data-order="apps">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon-wrapper">
                                                        <i class="ki-duotone ki-folder fs-2x text-primary me-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <a href="apps/file-manager/files/.html"
                                                        class="text-gray-800 text-hover-primary">Febrero</a>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Share link-->
                                                    <div class="ms-2" data-kt-filemanger-table="copy_link">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-fasten fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                            data-kt-menu="true">
                                                            <!--begin::Card-->
                                                            <div class="card card-flush">
                                                                <div class="card-body p-5">
                                                                    <!--begin::Loader-->
                                                                    <div class="d-flex"
                                                                        data-kt-filemanger-table="copy_link_generator">
                                                                        <!--begin::Spinner-->
                                                                        <div class="me-5" data-kt-indicator="on">
                                                                            <span class="indicator-progress">
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Spinner-->
                                                                        <!--begin::Label-->
                                                                        <div class="fs-6 text-gray-900">Generating Share
                                                                            Link...
                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Loader-->
                                                                    <!--begin::Link-->
                                                                    <div class="d-flex flex-column text-start d-none"
                                                                        data-kt-filemanger-table="copy_link_result">
                                                                        <div class="d-flex mb-3">
                                                                            <i
                                                                                class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                            <div class="fs-6 text-gray-900">Share Link
                                                                                Generated
                                                                            </div>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="https://path/to/file/or/folder/" />
                                                                        <div
                                                                            class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                            Read
                                                                            only.
                                                                            <a href="apps/file-manager/settings/.html"
                                                                                class="ms-2">Change permissions</a>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Link-->
                                                                </div>
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::Share link-->
                                                    </div>
                                                    <!--begin::More-->
                                                    <div class="ms-2">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="apps/file-manager/files.html"
                                                                    class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table="rename">Rename</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Download Folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table-filter="move_row"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_move_to_folder">Move to
                                                                    folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link text-danger px-3"
                                                                    data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::More-->
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td data-order="widgets">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon-wrapper">
                                                        <i class="ki-duotone ki-folder fs-2x text-primary me-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <a href="apps/file-manager/files/.html"
                                                        class="text-gray-800 text-hover-primary">Marzo</a>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Share link-->
                                                    <div class="ms-2" data-kt-filemanger-table="copy_link">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-fasten fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                            data-kt-menu="true">
                                                            <!--begin::Card-->
                                                            <div class="card card-flush">
                                                                <div class="card-body p-5">
                                                                    <!--begin::Loader-->
                                                                    <div class="d-flex"
                                                                        data-kt-filemanger-table="copy_link_generator">
                                                                        <!--begin::Spinner-->
                                                                        <div class="me-5" data-kt-indicator="on">
                                                                            <span class="indicator-progress">
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Spinner-->
                                                                        <!--begin::Label-->
                                                                        <div class="fs-6 text-gray-900">Generating Share
                                                                            Link...
                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Loader-->
                                                                    <!--begin::Link-->
                                                                    <div class="d-flex flex-column text-start d-none"
                                                                        data-kt-filemanger-table="copy_link_result">
                                                                        <div class="d-flex mb-3">
                                                                            <i
                                                                                class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                            <div class="fs-6 text-gray-900">Share Link
                                                                                Generated
                                                                            </div>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="https://path/to/file/or/folder/" />
                                                                        <div
                                                                            class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                            Read
                                                                            only.
                                                                            <a href="apps/file-manager/settings/.html"
                                                                                class="ms-2">Change permissions</a>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Link-->
                                                                </div>
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::Share link-->
                                                    </div>
                                                    <!--begin::More-->
                                                    <div class="ms-2">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="apps/file-manager/files.html"
                                                                    class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table="rename">Rename</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Download Folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table-filter="move_row"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_move_to_folder">Move to
                                                                    folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link text-danger px-3"
                                                                    data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::More-->
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td data-order="assets">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon-wrapper">
                                                        <i class="ki-duotone ki-folder fs-2x text-primary me-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <a href="apps/file-manager/files/.html"
                                                        class="text-gray-800 text-hover-primary">Abril</a>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Share link-->
                                                    <div class="ms-2" data-kt-filemanger-table="copy_link">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-fasten fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                            data-kt-menu="true">
                                                            <!--begin::Card-->
                                                            <div class="card card-flush">
                                                                <div class="card-body p-5">
                                                                    <!--begin::Loader-->
                                                                    <div class="d-flex"
                                                                        data-kt-filemanger-table="copy_link_generator">
                                                                        <!--begin::Spinner-->
                                                                        <div class="me-5" data-kt-indicator="on">
                                                                            <span class="indicator-progress">
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Spinner-->
                                                                        <!--begin::Label-->
                                                                        <div class="fs-6 text-gray-900">Generating Share
                                                                            Link...
                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Loader-->
                                                                    <!--begin::Link-->
                                                                    <div class="d-flex flex-column text-start d-none"
                                                                        data-kt-filemanger-table="copy_link_result">
                                                                        <div class="d-flex mb-3">
                                                                            <i
                                                                                class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                            <div class="fs-6 text-gray-900">Share Link
                                                                                Generated
                                                                            </div>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="https://path/to/file/or/folder/" />
                                                                        <div
                                                                            class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                            Read
                                                                            only.
                                                                            <a href="apps/file-manager/settings/.html"
                                                                                class="ms-2">Change permissions</a>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Link-->
                                                                </div>
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::Share link-->
                                                    </div>
                                                    <!--begin::More-->
                                                    <div class="ms-2">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="apps/file-manager/files.html"
                                                                    class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table="rename">Rename</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Download Folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table-filter="move_row"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_move_to_folder">Move to
                                                                    folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link text-danger px-3"
                                                                    data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::More-->
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td data-order="layouts">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon-wrapper">
                                                        <i class="ki-duotone ki-folder fs-2x text-primary me-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <a href="apps/file-manager/files/.html"
                                                        class="text-gray-800 text-hover-primary">Mayo</a>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Share link-->
                                                    <div class="ms-2" data-kt-filemanger-table="copy_link">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-fasten fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                            data-kt-menu="true">
                                                            <!--begin::Card-->
                                                            <div class="card card-flush">
                                                                <div class="card-body p-5">
                                                                    <!--begin::Loader-->
                                                                    <div class="d-flex"
                                                                        data-kt-filemanger-table="copy_link_generator">
                                                                        <!--begin::Spinner-->
                                                                        <div class="me-5" data-kt-indicator="on">
                                                                            <span class="indicator-progress">
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Spinner-->
                                                                        <!--begin::Label-->
                                                                        <div class="fs-6 text-gray-900">Generating Share
                                                                            Link...
                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Loader-->
                                                                    <!--begin::Link-->
                                                                    <div class="d-flex flex-column text-start d-none"
                                                                        data-kt-filemanger-table="copy_link_result">
                                                                        <div class="d-flex mb-3">
                                                                            <i
                                                                                class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                            <div class="fs-6 text-gray-900">Share Link
                                                                                Generated
                                                                            </div>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="https://path/to/file/or/folder/" />
                                                                        <div
                                                                            class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                            Read
                                                                            only.
                                                                            <a href="apps/file-manager/settings/.html"
                                                                                class="ms-2">Change permissions</a>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Link-->
                                                                </div>
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::Share link-->
                                                    </div>
                                                    <!--begin::More-->
                                                    <div class="ms-2">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="apps/file-manager/files.html"
                                                                    class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table="rename">Rename</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Download Folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table-filter="move_row"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_move_to_folder">Move to
                                                                    folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link text-danger px-3"
                                                                    data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::More-->
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td data-order="modals">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon-wrapper">
                                                        <i class="ki-duotone ki-folder fs-2x text-primary me-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <a href="apps/file-manager/files/.html"
                                                        class="text-gray-800 text-hover-primary">Junio</a>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Share link-->
                                                    <div class="ms-2" data-kt-filemanger-table="copy_link">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-fasten fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                            data-kt-menu="true">
                                                            <!--begin::Card-->
                                                            <div class="card card-flush">
                                                                <div class="card-body p-5">
                                                                    <!--begin::Loader-->
                                                                    <div class="d-flex"
                                                                        data-kt-filemanger-table="copy_link_generator">
                                                                        <!--begin::Spinner-->
                                                                        <div class="me-5" data-kt-indicator="on">
                                                                            <span class="indicator-progress">
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Spinner-->
                                                                        <!--begin::Label-->
                                                                        <div class="fs-6 text-gray-900">Generating Share
                                                                            Link...
                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Loader-->
                                                                    <!--begin::Link-->
                                                                    <div class="d-flex flex-column text-start d-none"
                                                                        data-kt-filemanger-table="copy_link_result">
                                                                        <div class="d-flex mb-3">
                                                                            <i
                                                                                class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                            <div class="fs-6 text-gray-900">Share Link
                                                                                Generated
                                                                            </div>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="https://path/to/file/or/folder/" />
                                                                        <div
                                                                            class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                            Read
                                                                            only.
                                                                            <a href="apps/file-manager/settings/.html"
                                                                                class="ms-2">Change permissions</a>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Link-->
                                                                </div>
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::Share link-->
                                                    </div>
                                                    <!--begin::More-->
                                                    <div class="ms-2">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="apps/file-manager/files.html"
                                                                    class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table="rename">Rename</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Download Folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table-filter="move_row"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_move_to_folder">Move to
                                                                    folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link text-danger px-3"
                                                                    data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::More-->
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td data-order="authentication">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon-wrapper">
                                                        <i class="ki-duotone ki-folder fs-2x text-primary me-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <a href="apps/file-manager/files/.html"
                                                        class="text-gray-800 text-hover-primary">Julio</a>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Share link-->
                                                    <div class="ms-2" data-kt-filemanger-table="copy_link">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-fasten fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                            data-kt-menu="true">
                                                            <!--begin::Card-->
                                                            <div class="card card-flush">
                                                                <div class="card-body p-5">
                                                                    <!--begin::Loader-->
                                                                    <div class="d-flex"
                                                                        data-kt-filemanger-table="copy_link_generator">
                                                                        <!--begin::Spinner-->
                                                                        <div class="me-5" data-kt-indicator="on">
                                                                            <span class="indicator-progress">
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Spinner-->
                                                                        <!--begin::Label-->
                                                                        <div class="fs-6 text-gray-900">Generating Share
                                                                            Link...
                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Loader-->
                                                                    <!--begin::Link-->
                                                                    <div class="d-flex flex-column text-start d-none"
                                                                        data-kt-filemanger-table="copy_link_result">
                                                                        <div class="d-flex mb-3">
                                                                            <i
                                                                                class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                            <div class="fs-6 text-gray-900">Share Link
                                                                                Generated
                                                                            </div>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="https://path/to/file/or/folder/" />
                                                                        <div
                                                                            class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                            Read
                                                                            only.
                                                                            <a href="apps/file-manager/settings/.html"
                                                                                class="ms-2">Change permissions</a>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Link-->
                                                                </div>
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::Share link-->
                                                    </div>
                                                    <!--begin::More-->
                                                    <div class="ms-2">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="apps/file-manager/files.html"
                                                                    class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table="rename">Rename</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Download Folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table-filter="move_row"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_move_to_folder">Move to
                                                                    folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link text-danger px-3"
                                                                    data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::More-->
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td data-order="dashboards">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon-wrapper">
                                                        <i class="ki-duotone ki-folder fs-2x text-primary me-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <a href="apps/file-manager/files/.html"
                                                        class="text-gray-800 text-hover-primary">Agosto</a>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Share link-->
                                                    <div class="ms-2" data-kt-filemanger-table="copy_link">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-fasten fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                            data-kt-menu="true">
                                                            <!--begin::Card-->
                                                            <div class="card card-flush">
                                                                <div class="card-body p-5">
                                                                    <!--begin::Loader-->
                                                                    <div class="d-flex"
                                                                        data-kt-filemanger-table="copy_link_generator">
                                                                        <!--begin::Spinner-->
                                                                        <div class="me-5" data-kt-indicator="on">
                                                                            <span class="indicator-progress">
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Spinner-->
                                                                        <!--begin::Label-->
                                                                        <div class="fs-6 text-gray-900">Generating Share
                                                                            Link...
                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Loader-->
                                                                    <!--begin::Link-->
                                                                    <div class="d-flex flex-column text-start d-none"
                                                                        data-kt-filemanger-table="copy_link_result">
                                                                        <div class="d-flex mb-3">
                                                                            <i
                                                                                class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                            <div class="fs-6 text-gray-900">Share Link
                                                                                Generated
                                                                            </div>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="https://path/to/file/or/folder/" />
                                                                        <div
                                                                            class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                            Read
                                                                            only.
                                                                            <a href="apps/file-manager/settings/.html"
                                                                                class="ms-2">Change permissions</a>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Link-->
                                                                </div>
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::Share link-->
                                                    </div>
                                                    <!--begin::More-->
                                                    <div class="ms-2">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="apps/file-manager/files.html"
                                                                    class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table="rename">Rename</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Download Folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table-filter="move_row"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_move_to_folder">Move to
                                                                    folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link text-danger px-3"
                                                                    data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::More-->
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td data-order="media">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon-wrapper">
                                                        <i class="ki-duotone ki-folder fs-2x text-primary me-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <a href="apps/file-manager/files/.html"
                                                        class="text-gray-800 text-hover-primary">Septiembre</a>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Share link-->
                                                    <div class="ms-2" data-kt-filemanger-table="copy_link">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-fasten fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                            data-kt-menu="true">
                                                            <!--begin::Card-->
                                                            <div class="card card-flush">
                                                                <div class="card-body p-5">
                                                                    <!--begin::Loader-->
                                                                    <div class="d-flex"
                                                                        data-kt-filemanger-table="copy_link_generator">
                                                                        <!--begin::Spinner-->
                                                                        <div class="me-5" data-kt-indicator="on">
                                                                            <span class="indicator-progress">
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Spinner-->
                                                                        <!--begin::Label-->
                                                                        <div class="fs-6 text-gray-900">Generating Share
                                                                            Link...
                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Loader-->
                                                                    <!--begin::Link-->
                                                                    <div class="d-flex flex-column text-start d-none"
                                                                        data-kt-filemanger-table="copy_link_result">
                                                                        <div class="d-flex mb-3">
                                                                            <i
                                                                                class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                            <div class="fs-6 text-gray-900">Share Link
                                                                                Generated
                                                                            </div>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="https://path/to/file/or/folder/" />
                                                                        <div
                                                                            class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                            Read
                                                                            only.
                                                                            <a href="apps/file-manager/settings/.html"
                                                                                class="ms-2">Change permissions</a>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Link-->
                                                                </div>
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::Share link-->
                                                    </div>
                                                    <!--begin::More-->
                                                    <div class="ms-2">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="apps/file-manager/files.html"
                                                                    class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table="rename">Rename</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Download Folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table-filter="move_row"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_move_to_folder">Move to
                                                                    folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link text-danger px-3"
                                                                    data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::More-->
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td data-order="customers">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon-wrapper">
                                                        <i class="ki-duotone ki-folder fs-2x text-primary me-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <a href="apps/file-manager/files/.html"
                                                        class="text-gray-800 text-hover-primary">Octubre</a>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Share link-->
                                                    <div class="ms-2" data-kt-filemanger-table="copy_link">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-fasten fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                            data-kt-menu="true">
                                                            <!--begin::Card-->
                                                            <div class="card card-flush">
                                                                <div class="card-body p-5">
                                                                    <!--begin::Loader-->
                                                                    <div class="d-flex"
                                                                        data-kt-filemanger-table="copy_link_generator">
                                                                        <!--begin::Spinner-->
                                                                        <div class="me-5" data-kt-indicator="on">
                                                                            <span class="indicator-progress">
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Spinner-->
                                                                        <!--begin::Label-->
                                                                        <div class="fs-6 text-gray-900">Generating Share
                                                                            Link...
                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Loader-->
                                                                    <!--begin::Link-->
                                                                    <div class="d-flex flex-column text-start d-none"
                                                                        data-kt-filemanger-table="copy_link_result">
                                                                        <div class="d-flex mb-3">
                                                                            <i
                                                                                class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                            <div class="fs-6 text-gray-900">Share Link
                                                                                Generated
                                                                            </div>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="https://path/to/file/or/folder/" />
                                                                        <div
                                                                            class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                            Read
                                                                            only.
                                                                            <a href="apps/file-manager/settings/.html"
                                                                                class="ms-2">Change permissions</a>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Link-->
                                                                </div>
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::Share link-->
                                                    </div>
                                                    <!--begin::More-->
                                                    <div class="ms-2">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="apps/file-manager/files.html"
                                                                    class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table="rename">Rename</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Download Folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table-filter="move_row"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_move_to_folder">Move to
                                                                    folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link text-danger px-3"
                                                                    data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::More-->
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td data-order="user-management">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon-wrapper">
                                                        <i class="ki-duotone ki-folder fs-2x text-primary me-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <a href="apps/file-manager/files/.html"
                                                        class="text-gray-800 text-hover-primary">Noviembre</a>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Share link-->
                                                    <div class="ms-2" data-kt-filemanger-table="copy_link">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-fasten fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                            data-kt-menu="true">
                                                            <!--begin::Card-->
                                                            <div class="card card-flush">
                                                                <div class="card-body p-5">
                                                                    <!--begin::Loader-->
                                                                    <div class="d-flex"
                                                                        data-kt-filemanger-table="copy_link_generator">
                                                                        <!--begin::Spinner-->
                                                                        <div class="me-5" data-kt-indicator="on">
                                                                            <span class="indicator-progress">
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Spinner-->
                                                                        <!--begin::Label-->
                                                                        <div class="fs-6 text-gray-900">Generating Share
                                                                            Link...
                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Loader-->
                                                                    <!--begin::Link-->
                                                                    <div class="d-flex flex-column text-start d-none"
                                                                        data-kt-filemanger-table="copy_link_result">
                                                                        <div class="d-flex mb-3">
                                                                            <i
                                                                                class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                            <div class="fs-6 text-gray-900">Share Link
                                                                                Generated
                                                                            </div>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="https://path/to/file/or/folder/" />
                                                                        <div
                                                                            class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                            Read
                                                                            only.
                                                                            <a href="apps/file-manager/settings/.html"
                                                                                class="ms-2">Change permissions</a>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Link-->
                                                                </div>
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::Share link-->
                                                    </div>
                                                    <!--begin::More-->
                                                    <div class="ms-2">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="apps/file-manager/files.html"
                                                                    class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table="rename">Rename</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Download Folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table-filter="move_row"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_move_to_folder">Move to
                                                                    folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link text-danger px-3"
                                                                    data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::More-->
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td data-order="subscriptions">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon-wrapper">
                                                        <i class="ki-duotone ki-folder fs-2x text-primary me-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <a href="apps/file-manager/files/.html"
                                                        class="text-gray-800 text-hover-primary">Diciembre</a>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Share link-->
                                                    <div class="ms-2" data-kt-filemanger-table="copy_link">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-fasten fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                            data-kt-menu="true">
                                                            <!--begin::Card-->
                                                            <div class="card card-flush">
                                                                <div class="card-body p-5">
                                                                    <!--begin::Loader-->
                                                                    <div class="d-flex"
                                                                        data-kt-filemanger-table="copy_link_generator">
                                                                        <!--begin::Spinner-->
                                                                        <div class="me-5" data-kt-indicator="on">
                                                                            <span class="indicator-progress">
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Spinner-->
                                                                        <!--begin::Label-->
                                                                        <div class="fs-6 text-gray-900">Generating Share
                                                                            Link...
                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Loader-->
                                                                    <!--begin::Link-->
                                                                    <div class="d-flex flex-column text-start d-none"
                                                                        data-kt-filemanger-table="copy_link_result">
                                                                        <div class="d-flex mb-3">
                                                                            <i
                                                                                class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                            <div class="fs-6 text-gray-900">Share Link
                                                                                Generated
                                                                            </div>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="https://path/to/file/or/folder/" />
                                                                        <div
                                                                            class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                            Read
                                                                            only.
                                                                            <a href="apps/file-manager/settings/.html"
                                                                                class="ms-2">Change permissions</a>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Link-->
                                                                </div>
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::Share link-->
                                                    </div>
                                                    <!--begin::More-->
                                                    <div class="ms-2">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="apps/file-manager/files.html"
                                                                    class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table="rename">Rename</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Download Folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table-filter="move_row"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_move_to_folder">Move to
                                                                    folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link text-danger px-3"
                                                                    data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::More-->
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td data-order="forms">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon-wrapper">
                                                        <i class="ki-duotone ki-folder fs-2x text-primary me-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <a href="apps/file-manager/files/.html"
                                                        class="text-gray-800 text-hover-primary">2023</a>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Share link-->
                                                    <div class="ms-2" data-kt-filemanger-table="copy_link">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-fasten fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                            data-kt-menu="true">
                                                            <!--begin::Card-->
                                                            <div class="card card-flush">
                                                                <div class="card-body p-5">
                                                                    <!--begin::Loader-->
                                                                    <div class="d-flex"
                                                                        data-kt-filemanger-table="copy_link_generator">
                                                                        <!--begin::Spinner-->
                                                                        <div class="me-5" data-kt-indicator="on">
                                                                            <span class="indicator-progress">
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Spinner-->
                                                                        <!--begin::Label-->
                                                                        <div class="fs-6 text-gray-900">Generating Share
                                                                            Link...
                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Loader-->
                                                                    <!--begin::Link-->
                                                                    <div class="d-flex flex-column text-start d-none"
                                                                        data-kt-filemanger-table="copy_link_result">
                                                                        <div class="d-flex mb-3">
                                                                            <i
                                                                                class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                            <div class="fs-6 text-gray-900">Share Link
                                                                                Generated
                                                                            </div>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="https://path/to/file/or/folder/" />
                                                                        <div
                                                                            class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                            Read
                                                                            only.
                                                                            <a href="apps/file-manager/settings/.html"
                                                                                class="ms-2">Change permissions</a>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Link-->
                                                                </div>
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::Share link-->
                                                    </div>
                                                    <!--begin::More-->
                                                    <div class="ms-2">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="apps/file-manager/files.html"
                                                                    class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table="rename">Rename</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Download Folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table-filter="move_row"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_move_to_folder">Move to
                                                                    folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link text-danger px-3"
                                                                    data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::More-->
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td data-order="datatables">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon-wrapper">
                                                        <i class="ki-duotone ki-folder fs-2x text-primary me-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <a href="apps/file-manager/files/.html"
                                                        class="text-gray-800 text-hover-primary">2022</a>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Share link-->
                                                    <div class="ms-2" data-kt-filemanger-table="copy_link">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-fasten fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                            data-kt-menu="true">
                                                            <!--begin::Card-->
                                                            <div class="card card-flush">
                                                                <div class="card-body p-5">
                                                                    <!--begin::Loader-->
                                                                    <div class="d-flex"
                                                                        data-kt-filemanger-table="copy_link_generator">
                                                                        <!--begin::Spinner-->
                                                                        <div class="me-5" data-kt-indicator="on">
                                                                            <span class="indicator-progress">
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Spinner-->
                                                                        <!--begin::Label-->
                                                                        <div class="fs-6 text-gray-900">Generating Share
                                                                            Link...
                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Loader-->
                                                                    <!--begin::Link-->
                                                                    <div class="d-flex flex-column text-start d-none"
                                                                        data-kt-filemanger-table="copy_link_result">
                                                                        <div class="d-flex mb-3">
                                                                            <i
                                                                                class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                            <div class="fs-6 text-gray-900">Share Link
                                                                                Generated
                                                                            </div>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="https://path/to/file/or/folder/" />
                                                                        <div
                                                                            class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                            Read
                                                                            only.
                                                                            <a href="apps/file-manager/settings/.html"
                                                                                class="ms-2">Change permissions</a>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Link-->
                                                                </div>
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::Share link-->
                                                    </div>
                                                    <div class="ms-2">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="apps/file-manager/files.html"
                                                                    class="menu-link px-3">View</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table="rename">Rename</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Download Folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-filemanager-table-filter="move_row"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_move_to_folder">Move to
                                                                    folder</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link text-danger px-3"
                                                                    data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::More-->
                                                    </div>

                                                </div>
                                                <!--end::Content container-->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
                    </div>
                    <!--end:::Main-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::App-->

    </div>
    <!--end::Modal - Invite Friend-->
    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>var hostUrl = "assets/";</script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/apps/file-manager/list.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>