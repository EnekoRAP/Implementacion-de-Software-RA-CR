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
				<div id="kt_app_content_container" class="app-container container-xxl">
					<!--begin::Row-->
					<div class="row gx-5 gx-xl-10 justify-content-center mb-xl-10">
						<!--begin::Col-->
						<div class="col-md-6 col-lg-4 mb-10">
							<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center border-0 h-md-50"
								style="background-color: #080655;">
								<div class="card-header pt-5">
									<div class="card-title d-flex flex-column">
										<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">5</span>
										<span class="text-white opacity-50 pt-1 fw-semibold fs-6">Proyectos
											Activos</span>
									</div>
								</div>
								<div class="card-body d-flex align-items-end pt-0">
									<div class="d-flex align-items-center flex-column mt-3 w-100">
										<div
											class="d-flex justify-content-between fw-bold fs-6 text-white opacity-50 w-100 mt-auto mb-2">
											<span>2 Pendientes</span>
											<span>72%</span>
										</div>
										<div class="h-8px mx-3 w-100 bg-light-danger rounded">
											<div class="bg-danger rounded h-8px" role="progressbar" style="width: 72%;"
												aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 col-lg-20">
							<div class="card card-flush h-md-50 mb-5 mb-xl-10">
								<div class="card-header pt-5">
									<div class="card-title d-flex flex-column">
										<h3 class="card-title text-gray-800 fw-bold">Notas Importantes</h3>
										<span class="text-gray-500 pt-1 fw-semibold fs-6">Actualizaciones clave</span>
									</div>
								</div>
								<div class="card-body pt-5">
									<!--begin::Item-->
									<div class="d-flex align-items-start mb-5">
										<i class="ki-duotone ki-information fs-3 text-primary me-3"></i>
										<div class="d-flex flex-column">
											<span class="fw-bold text-gray-700 fs-6">Actualización en proceso de
												aprobación</span>
											<span class="text-gray-500 fs-7">El cliente "ABC Corp" necesita revisar el
												documento actualizado para el registro de producto.</span>
										</div>
									</div>
									<div class="separator separator-dashed my-4"></div>
									<!--end::Separator-->
									<div class="d-flex align-items-start mb-5">
										<i class="ki-duotone ki-warning-circle fs-3 text-danger me-3"></i>
										<div class="d-flex flex-column">
											<span class="fw-bold text-gray-700 fs-6">Proyecto con retraso</span>
											<span class="text-gray-500 fs-7">El proyecto "Certificación ISO" para "XYZ
												Ltd." tiene un retraso de 2 semanas.</span>
										</div>
									</div>
									<div class="separator separator-dashed my-4"></div>
									<!--end::Separator-->
									<div class="d-flex align-items-start">
										<i class="ki-duotone ki-calendar fs-3 text-success me-3"></i>
										<div class="d-flex flex-column">
											<span class="fw-bold text-gray-700 fs-6">Próximos vencimientos</span>
											<span class="text-gray-500 fs-7">Renovación de permisos para "DEF Inc."
												vence el 15 de diciembre.</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end::Col-->
					</div>
				</div>
			</div>
			<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
				<!--begin::Content wrapper-->
				<div class="d-flex flex-column flex-column-fluid">
					<div id="kt_app_content" class="app-content flex-column-fluid">
						<div id="kt_app_content_container" class="app-container container-xxl">
							<!--begin::Row-->
							<div class="row g-5 gx-xl-8 justify-content-center mb-xl-10">
								<!--begin::Col-->
								<div class="col-xl-6">
									<!--begin::Charts Widget: Distribución de Proyectos por Estado-->
									<div class="card card-xl-stretch mb-5">
										<div class="card-header border-0 pt-5">
											<h3 class="card-title fw-bold fs-3 mb-1">Distribución de Proyectos</h3>
											<span class="text-muted fw-semibold fs-7">Estado actual de los
												proyectos</span>
										</div>
										<div class="card-body">
											<div id="projectStatusChart" style="height: 350px"></div>
										</div>
									</div>
									<!--end::Charts Widget-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-6">
									<!--begin::Charts Widget: Tendencias Recientes-->
									<div class="card card-xl-stretch mb-5">
										<div class="card-header border-0 pt-5">
											<h3 class="card-title fw-bold fs-3 mb-1">Tendencias Recientes</h3>
											<span class="text-muted fw-semibold fs-7">Proyectos y tareas en
												progreso</span>
										</div>
										<div class="card-body">
											<div id="recentTrendsChart" style="height: 350px"></div>
										</div>
									</div>
									<!--end::Charts Widget-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
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