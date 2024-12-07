<?php
$title = "Inicio"; // Título dinámico
include 'layout.php'; // Asegúrate de que la ruta sea correcta
?>
<html lang="en">

<body>
	<!--begin::Main-->
	<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
		<!--begin::Content wrapper-->
		<div class="d-flex flex-column flex-column-fluid">
			<!--begin::Toolbar-->
			<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
				<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
					<!--begin::Page title-->
					<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3"></div>
					<!--end::Page title-->
					<!--begin::Actions-->
					<div class="d-flex align-items-center gap-2 gap-lg-3">
						<a href="apps/projects/list.html" class="btn btn-sm fw-bold btn-secondary">Mis Proyectos</a>
						<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
							data-bs-target="#kt_modal_create_project">Nuevo Proyecto</a>
					</div>
					<!--end::Actions-->
				</div>
			</div>
			<!--end::Toolbar-->
			<!--begin::Content-->
			<div id="kt_app_content" class="app-content flex-column-fluid">
				<!--begin::Content container-->
				<div id="kt_app_content_container" class="app-container container-xxl">
					<!--begin::Row-->
					<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
						<!--begin::Col-->
						<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-15 mb-10">
							<!--begin::Card widget 16-->
							<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center border-0 h-md-50 mb-5 mb-xl-10"
								style="background-color: #080655">
								<!--begin::Header-->
								<div class="card-header pt-5">
									<!--begin::Title-->
									<div class="card-title d-flex flex-column">
										<!--begin::Amount-->
										<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">5</span>
										<!--end::Amount-->
										<!--begin::Subtitle-->
										<span class="text-white opacity-50 pt-1 fw-semibold fs-6">Proyectos
											Activos</span>
										<!--end::Subtitle-->
									</div>
									<!--end::Title-->
								</div>
								<!--end::Header-->
								<!--begin::Card body-->
								<div class="card-body d-flex align-items-end pt-0">
									<!--begin::Progress-->
									<div class="d-flex align-items-center flex-column mt-3 w-100">
										<div
											class="d-flex justify-content-between fw-bold fs-6 text-white opacity-50 w-100 mt-auto mb-2">
											<span>2 Pendientes</span>
											<span>72%</span>
										</div>
										<div class="h-8px mx-3 w-100 bg-light-danger rounded">
											<div class="bg-danger rounded h-8px" role="progressbar" style="width: 72%;"
												aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<!--end::Progress-->
								</div>
								<!--end::Card body-->
							</div>
							<!--begin::Card widget 7-->
							<!--begin::Card widget: Total de Tickets Cerrados del Mes-->
							<div class="card card-flush h-md-50 mb-5 mb-xl-10">
								<!--begin::Header-->
								<div class="card-header pt-5">
									<!--begin::Title-->
									<div class="card-title d-flex flex-column">
										<!--begin::Amount-->
										<span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">10</span>
										<!--end::Amount-->
										<!--begin::Subtitle-->
										<span class="text-gray-500 pt-1 fw-semibold fs-6">Tickets Cerrados en el
											Mes</span>
										<!--end::Subtitle-->
									</div>
									<!--end::Title-->
								</div>
								<!--end::Header-->
								<!--begin::Card body-->
								<div class="card-body d-flex flex-column justify-content-end pe-0">
									<!--begin::Title-->
									<span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Mes de Noviembre 2024</span>
									<!--end::Title-->
									<!--begin::Users group-->
									<div class="symbol-group symbol-hover flex-nowrap">
										<!--begin::User 1-->
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
											title="Usuario 1">
											<span class="symbol-label bg-primary text-inverse-primary fw-bold">U1</span>
										</div>
										<!--end::User 1-->
										<!--begin::User 2-->
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
											title="Usuario 2">
											<span class="symbol-label bg-success text-inverse-success fw-bold">U2</span>
										</div>
										<!--end::User 2-->
										<!--begin::User 3-->
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
											title="Usuario 3">
											<span class="symbol-label bg-warning text-inverse-warning fw-bold">U3</span>
										</div>
										<!--end::User 3-->
										<!--begin::User 4-->
										<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
											title="Usuario 4">
											<span class="symbol-label bg-danger text-inverse-danger fw-bold">U4</span>
										</div>
										<!--end::User 4-->
									</div>
									<!--end::Users group-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card widget-->


						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-lg-12 col-xl-12 col-xxl-6 mb-10 mb-xl-0">
							<div class="card h-md-100">
								<!--begin::Header-->
								<div class="card-header border-0 pt-5">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold text-gray-900">Notas Importantes</span>
										<span class="text-muted mt-1 fw-semibold fs-7">Actualizaciones clave</span>
									</h3>
									<!--begin::Actions-->
									<div class="card-toolbar">
										<!--begin::Button-->
										<button class="btn btn-icon btn-light btn-sm border-gray-300 shadow-sm"
											id="addNoteBtn" data-bs-toggle="modal" data-bs-target="#kt_modal_add_note"
											style="width: 32px; height: 32px; border-radius: 50%;" title="Agregar Nota">
											<i class="ki-duotone ki-plus fs-6 text-gray-600"></i>
										</button>
										<!--end::Button-->
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Header-->

								<!--begin::Body-->
								<div class="card-body pt-5" id="notesList">
									<!-- Notes will be dynamically added here -->
								</div>
								<!--end::Body-->
							</div>
						</div>

						<!-- Modal for Adding New Note -->
						<div class="modal fade" id="kt_modal_add_note" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Agregar Nueva Nota</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<form id="addNoteForm">
											<div class="mb-3">
												<label for="noteTitle" class="form-label">Título de la Nota</label>
												<input type="text" class="form-control" id="noteTitle" required>
											</div>
											<div class="mb-3">
												<label for="noteContent" class="form-label">Contenido de la Nota</label>
												<textarea class="form-control" id="noteContent" rows="4"
													required></textarea>
											</div>
											<button type="submit" class="btn btn-primary">Agregar Nota</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!--end::Col-->
					</div>
					<!--begin::Row-->
					<!--begin::Row-->
					<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
						<!--begin::Col Izquierdo-->
						<div class="col-xxl-6">
							<div class="card card-flush h-md-100">
								<!--begin::Header-->
								<div class="card-header pt-5">
									<h3 class="card-title d-flex flex-column">
										<span class="card-label fw-bold fs-3 mb-1">Clientes</span>
										<span class="text-muted fw-semibold fs-7">Top clientes con mayor cantidad de
											proyectos activos</span>
									</h3>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body">
									<!--begin::Gráfico de Clientes-->
									<div id="topClientsChart" style="height: 350px;"></div>
									<!--end::Gráfico de Clientes-->
								</div>
								<!--end::Body-->
							</div>
						</div>
						<!--end::Col Izquierdo-->
						<!--begin::Col Derecho-->
						<div class="col-xxl-6">
							<div class="card card-flush h-md-100">
								<!--begin::Header-->
								<div class="card-header pt-5">
									<h3 class="card-title d-flex flex-column">
										<span class="card-label fw-bold fs-3 mb-1">Distribución por Categorías</span>
										<span class="text-muted fw-semibold fs-7">Proporción de productos por
											categoría</span>
									</h3>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body">
									<!--begin::Gráfico de Categorías-->
									<div id="categoriesChart" style="height: 350px;"></div>
									<!--end::Gráfico de Categorías-->
								</div>
								<!--end::Body-->
							</div>
						</div>
						<!--end::Col Derecho-->
					</div>
					<!--end::Row-->
					<div class="card mb-5 mb-xl-8">
						<!--begin::Header-->
						<div class="card-header border-0 pt-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold fs-3 mb-1">Proyectos Asignados</span>
								<span class="text-muted mt-1 fw-semibold fs-7">Proyectos asociados al usuario
									actual</span>
							</h3>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-3">
							<!--begin::Table container-->
							<div class="table-responsive">
								<!--begin::Table-->
								<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
									<!--begin::Table head-->
									<thead>
										<tr class="fw-bold text-muted">
											<th class="min-w-50px">Ticket</th>
											<th class="min-w-150px">Nombre del Proyecto</th>
											<th class="min-w-150px">Cliente</th>
											<th class="min-w-125px">Categoría</th>
											<th class="min-w-125px">Estado</th>
											<th class="min-w-50px text-end">Ver</th>
										</tr>
									</thead>
									<!--end::Table head-->
									<!--begin::Table body-->
									<tbody id="assignedProjectsTable">
										<!-- Aquí se cargarán dinámicamente las filas con JavaScript -->
									</tbody>
									<!--end::Table body-->
								</table>
								<!--end::Table-->
							</div>
							<!--end::Table container-->
						</div>
						<!--end::Body-->
					</div>

				</div>
			</div>

		</div>
	</div>


	<!--end::Modal - Invite Friend-->
	<!--end::Modals-->
	<!--begin::Javascript-->
	<script>var hostUrl = "/Kima/assets/";</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="/Kima/assets/plugins/global/plugins.bundle.js"></script>
	<script src="/Kima/assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Vendors Javascript(used for this page only)-->
	<script src="/Kima/assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<script src="/Kima/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
	<!--end::Vendors Javascript-->
	<!--begin::Custom Javascript(used for this page only)-->
	<script src="/Kima/assets/js/charts-ra.js"></script>
	<script src="/Kima/assets/js/widgets.bundle.js"></script>
	<script src="/Kima/assets/js/custom/widgets.js"></script>
	<script src="/Kima/assets/js/custom/apps/chat/chat.js"></script>
	<script src="/Kima/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
	<script src="/Kima/assets/js/custom/utilities/modals/create-project/type.js"></script>
	<script src="/Kima/assets/js/custom/utilities/modals/create-project/budget.js"></script>
	<script src="/Kima/assets/js/custom/utilities/modals/create-project/settings.js"></script>
	<script src="/Kima/assets/js/custom/utilities/modals/create-project/team.js"></script>
	<script src="/Kima/assets/js/custom/utilities/modals/create-project/targets.js"></script>
	<script src="/Kima/assets/js/custom/utilities/modals/create-project/files.js"></script>
	<script src="/Kima/assets/js/custom/utilities/modals/create-project/complete.js"></script>
	<script src="/Kima/assets/js/custom/utilities/modals/create-project/main.js"></script>
	<script src="/Kima/assets/js/custom/utilities/modals/create-app.js"></script>
	<script src="/Kima/assets/js/custom/utilities/modals/new-address.js"></script>
	<script src="/Kima/assets/js/custom/utilities/modals/users-search.js"></script>

	<script>var hostUrl = "/Kima/assets/";</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="/Kima/assets/plugins/global/plugins.bundle.js"></script>
	<script src="/Kima/assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Vendors Javascript(used for this page only)-->
	<script src="/Kima/assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<!--end::Vendors Javascript-->
	<!--begin::Custom Javascript(used for this page only)-->
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