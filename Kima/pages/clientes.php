<?php
$title = "Clientes"; // Título dinámico
include '../layout.php'; // Asegúrate de que la ruta sea correcta
?>
<html lang="en">

<body>

	<!--begin::Content-->
	<div id="kt_app_content" class="app-content flex-column-fluid">
		<!--begin::Content container-->
		<div id="kt_app_content_container" class="app-container container-xxl">
			<!--begin::Layout-->
			<div class="d-flex flex-column flex-xl-row">
				<!--begin::Sidebar-->
				<div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
					<!--begin::Card-->
					<div class="card mb-5 mb-xl-8">
						<!--begin::Card body-->
						<div class="card-body pt-15">
							<!--begin::Summary-->
							<div class="d-flex flex-center flex-column mb-5">
								<!--begin::Avatar-->
								<div class="symbol symbol-150px symbol-circle mb-7">
									<img src="assets/media/avatars/300-1.jpg" alt="image">
								</div>
								<!--end::Avatar-->
								<!--begin::Name-->
								<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">Max
									Smith</a>
								<!--end::Name-->
								<!--begin::Email-->
								<a href="#" class="fs-5 fw-semibold text-muted text-hover-primary mb-6">max@kt.com</a>
								<!--end::Email-->
							</div>
							<!--end::Summary-->
							<!--begin::Details toggle-->
							<div class="d-flex flex-stack fs-4 py-3">
								<div class="fw-bold">Perfil del Cliente</div>
								<!--begin::Badge-->

								<!--begin::Badge-->
							</div>
							<!--end::Details toggle-->
							<div class="separator separator-dashed my-3"></div>
							<!--begin::Details content-->
							<div class="pb-5 fs-6">
								<!--begin::Details item-->
								<div class="fw-bold mt-5">Cédula</div>
								<div class="text-gray-600">ID-45453423</div>
								<!--begin::Details item-->
								<!--begin::Details item-->
								<div class="fw-bold mt-5">Correo de Contacto</div>
								<div class="text-gray-600">
									<a href="#" class="text-gray-600 text-hover-primary">info@keenthemes.com</a>
								</div>
								<!--begin::Details item-->
								<!--begin::Details item-->
								<div class="fw-bold mt-5">Direccion</div>
								<div class="text-gray-600">101 Collin Street,
									<br>Melbourne 3000 VIC
									<br>Australia
								</div>
								<!--begin::Details item-->
								<!--begin::Details item-->


								<!--begin::Details item-->
								<!--begin::Details item-->


								<!--begin::Details item-->
							</div>
							<!--end::Details content-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Sidebar-->
				<!--begin::Content-->
				<div class="flex-lg-row-fluid ms-lg-15">
					<!--begin:::Tabs-->
					<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8"
						role="tablist">
						<!--begin:::Tab item-->
						<li class="nav-item" role="presentation">
							<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
								href="#kt_ecommerce_customer_overview" aria-selected="true" role="tab">General</a>
						</li>
						<!--end:::Tab item-->
						<!--begin:::Tab item-->
						<li class="nav-item" role="presentation">
							<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
								href="#kt_ecommerce_customer_general" aria-selected="false" role="tab"
								tabindex="-1">Ajustes Generales</a>
						</li>
						<!--end:::Tab item-->
						<!--begin:::Tab item-->
						<li class="nav-item" role="presentation">
							<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
								href="#kt_ecommerce_customer_advanced" aria-selected="false" role="tab"
								tabindex="-1">Ajustes Avanzados</a>
						</li>
						<li class="nav-item" role="presentation">
							<a href="/Kima/pages/ListaClientes.php" class="boton-gris">Visualizar lista clientes</a>


							<style>
								.boton-gris {
									display: inline-block;
									padding: 10px 20px;
									font-size: 16px;
									color: white;
									background-color: gray;
									border: none;
									border-radius: 5px;
									text-decoration: none;
									text-align: center;
									cursor: pointer;
									transition: background-color 0.3s ease;
								}

								.boton-gris:hover {
									background-color: darkgray;
								}
							</style>
						</li>
						<!--end:::Tab item-->
					</ul>
					<!--end:::Tabs-->
					<!--begin:::Tab content-->
					<div class="tab-content" id="myTabContent">
						<!--begin:::Tab pane-->
						<div class="tab-pane fade" id="kt_ecommerce_customer_overview" role="tabpanel">

							<!--begin::Card-->
							<div class="card pt-4 mb-6 mb-xl-9">
								<!--begin::Card header-->
								<div class="card-header border-0">
									<!--begin::Card title-->
									<div class="card-title">
										<h2>Historial</h2>
									</div>
									<!--end::Card title-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body pt-0 pb-5">
									<!--begin::Table-->
									<div id="kt_table_customers_payment_wrapper"
										class="dt-container dt-bootstrap5 dt-empty-footer">
										<div id="" class="table-responsive">
											<table class="table align-middle table-row-dashed gy-5 dataTable"
												id="kt_table_customers_payment" style="width: 100%;">
												<colgroup>
													<col data-dt-column="0" style="width: 115.891px;">
													<col data-dt-column="1" style="width: 91.9531px;">
													<col data-dt-column="3" style="width: 40.9219px;">
												</colgroup>
												<thead class="border-bottom border-gray-200 fs-7 fw-bold">
													<tr class="text-start text-muted text-uppercase gs-0">
														<th class="min-w-100px dt-orderable-asc dt-orderable-desc"
															data-dt-column="0" rowspan="1" colspan="1"
															aria-label="order No.: Activate to sort" tabindex="0"><span
																class="dt-column-title" role="button">Número de
																Orden</span><span class="dt-column-order"></span></th>
														<th data-dt-column="1" rowspan="1" colspan="1"
															class="dt-orderable-asc dt-orderable-desc"
															aria-label="Status: Activate to sort" tabindex="0"><span
																class="dt-column-title" role="button">Estado</span><span
																class="dt-column-order"></span></th>
														<th class="min-w-100px dt-orderable-none" data-dt-column="4"
															rowspan="1" colspan="1" aria-label="Date"><span
																class="dt-column-title">Date</span><span
																class="dt-column-order"></span></th>
													</tr>
												</thead>
												<tbody class="fs-6 fw-semibold text-gray-600">
													<tr>
														<td>
															<a href="apps/ecommerce/sales/details.html"
																class="text-gray-600 text-hover-primary mb-1">#15819</a>
														</td>
														<td>
															<span class="badge badge-light-success">Completado</span>
														</td>


														<td>14 Dec 2020, 8:43 pm</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/sales/details.html"
																class="text-gray-600 text-hover-primary mb-1">#15533</a>
														</td>
														<td>
															<span class="badge badge-light-success">Completado</span>
														</td>


														<td>01 Dec 2020, 10:12 am</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/sales/details.html"
																class="text-gray-600 text-hover-primary mb-1">#14806</a>
														</td>
														<td>
															<span class="badge badge-light-success">Completado</span>
														</td>


														<td>12 Nov 2020, 2:01 pm</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/sales/details.html"
																class="text-gray-600 text-hover-primary mb-1">#15887</a>
														</td>
														<td>
															<span class="badge badge-light-warning">En
																Proceso</span>
														</td>


														<td>21 Oct 2020, 5:54 pm</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/sales/details.html"
																class="text-gray-600 text-hover-primary mb-1">#15476</a>
														</td>
														<td>
															<span class="badge badge-light-success">Completado</span>
														</td>


														<td>19 Oct 2020, 7:32 am</td>
													</tr>
												</tbody>
												<tfoot></tfoot>
											</table>
										</div>
										<div id="" class="row">
											<div id=""
												class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar">
											</div>
											<div id=""
												class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
												<div class="dt-paging paging_simple_numbers">
													<nav aria-label="pagination">
														<ul class="pagination">
															<li class="dt-paging-button page-item disabled">
																<button class="page-link previous" role="link"
																	type="button"
																	aria-controls="kt_table_customers_payment"
																	aria-disabled="true" aria-label="Previous"
																	data-dt-idx="previous" tabindex="-1"><i
																		class="previous"></i></button>
															</li>
															<li class="dt-paging-button page-item active">
																<button class="page-link" role="link" type="button"
																	aria-controls="kt_table_customers_payment"
																	aria-current="page" data-dt-idx="0">1</button>
															</li>
															<li class="dt-paging-button page-item">
																<button class="page-link" role="link" type="button"
																	aria-controls="kt_table_customers_payment"
																	data-dt-idx="1">2</button>
															</li>
															<li class="dt-paging-button page-item">
																<button class="page-link next" role="link" type="button"
																	aria-controls="kt_table_customers_payment"
																	aria-label="Next" data-dt-idx="next"><i
																		class="next"></i></button>
															</li>
														</ul>
													</nav>
												</div>
											</div>
										</div>
									</div>
									<!--end::Table-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end:::Tab pane-->
						<!--begin:::Tab pane-->
						<div class="tab-pane fade" id="kt_ecommerce_customer_general" role="tabpanel">
							<!--begin::Card-->
							<div class="card pt-4 mb-6 mb-xl-9">
								<!--begin::Card header-->
								<div class="card-header border-0">
									<!--begin::Card title-->
									<div class="card-title">
										<h2>Perfil</h2>
									</div>
									<!--end::Card title-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body pt-0 pb-5">
									<!--begin::Form-->
									<form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#"
										id="kt_ecommerce_customer_profile">
										<!--begin::Input group-->
										<div class="mb-7">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">
												<span>Actualizar Foto del Cliente</span>
												<span class="ms-1" data-bs-toggle="tooltip"
													aria-label="Allowed file types: png, jpg, jpeg."
													data-bs-original-title="Allowed file types: png, jpg, jpeg."
													data-kt-initialized="1">
													<i class="ki-duotone ki-information fs-7">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
											<!--begin::Image input wrapper-->
											<div class="mt-1">
												<!--begin::Image input placeholder-->
												<style>
													.image-input-placeholder {
														background-image: url('assets/media/svg/files/blank-image.svg');
													}

													[data-bs-theme="dark"] .image-input-placeholder {
														background-image: url('assets/media/svg/files/blank-image-dark.svg');
													}
												</style>
												<!--end::Image input placeholder-->
												<!--begin::Image input-->
												<div class="image-input image-input-outline image-input-placeholder"
													data-kt-image-input="true">
													<!--begin::Preview existing avatar-->
													<div class="image-input-wrapper w-125px h-125px"
														style="background-image: url(assets/media/avatars/300-1.jpg)">
													</div>
													<!--end::Preview existing avatar-->
													<!--begin::Edit-->
													<label
														class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
														data-kt-image-input-action="change" data-bs-toggle="tooltip"
														aria-label="Change avatar"
														data-bs-original-title="Change avatar" data-kt-initialized="1">
														<i class="ki-duotone ki-pencil fs-7">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<!--begin::Inputs-->
														<input type="file" name="avatar" accept=".png, .jpg, .jpeg">
														<input type="hidden" name="avatar_remove">
														<!--end::Inputs-->
													</label>
													<!--end::Edit-->
													<!--begin::Cancel-->
													<span
														class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
														data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
														aria-label="Cancel avatar"
														data-bs-original-title="Cancel avatar" data-kt-initialized="1">
														<i class="ki-duotone ki-cross fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<!--end::Cancel-->
													<!--begin::Remove-->
													<span
														class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
														data-kt-image-input-action="remove" data-bs-toggle="tooltip"
														aria-label="Remove avatar"
														data-bs-original-title="Remove avatar" data-kt-initialized="1">
														<i class="ki-duotone ki-cross fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<!--end::Remove-->
												</div>
												<!--end::Image input-->
											</div>
											<!--end::Image input wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-7 fv-plugins-icon-container">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2 required">Nombre del
												Cliente</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" placeholder=""
												name="name" value="Max Smith">
											<!--end::Input-->
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
										</div>
										<!--end::Input group-->
										<!--begin::Row-->
										<div class="row row-cols-1 row-cols-md-2">
											<!--begin::Col-->
											<div class="col">
												<!--begin::Input group-->
												<div class="fv-row mb-7 fv-plugins-icon-container">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold mb-2">
														<span class="required">Correo</span>
														<span class="ms-1" data-bs-toggle="tooltip"
															aria-label="Email address must be active"
															data-bs-original-title="Email address must be active"
															data-kt-initialized="1">
															<i class="ki-duotone ki-information fs-7">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="email" class="form-control form-control-solid"
														placeholder="" name="gen_email" value="max@kt.com">
													<!--end::Input-->
													<div
														class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
													</div>
													<div
														class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
													</div>
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col">
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold mb-2">
														<span>Verificacion de Correo</span>
														<span class="ms-1" data-bs-toggle="tooltip"
															aria-label="Recuerde cumplir con el formato del correo colocando una (@)"
															data-bs-original-title="Recuerde cumplir con el formato del correo colocando una (@)"
															data-kt-initialized="1">
															<i class="ki-duotone ki-information fs-7">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="email" class="form-control form-control-solid"
														placeholder="" name="bill_email" value="info@keenthemes.com">
													<!--end::Input-->
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
										<div class="d-flex justify-content-end">
											<!--begin::Button-->
											<button type="submit" id="kt_ecommerce_customer_profile_submit"
												class="btn btn-light-primary">
												<span class="indicator-label">Guardar</span>
												<span class="indicator-progress">Por favor espere...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
											<!--end::Button-->
										</div>
									</form>
									<!--end::Form-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
							<!--begin::Card-->
							<div class="card pt-4 mb-6 mb-xl-9">
								<!--begin::Card header-->
								<div class="card-header border-0">
									<!--begin::Card title-->
									<div class="card-title">
										<h2>Registro de Direccion</h2>
									</div>
									<!--end::Card title-->
									<!--begin::Card toolbar-->
									<div class="card-toolbar">
										<a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal"
											data-bs-target="#kt_modal_add_address">
											<i class="ki-duotone ki-plus-square fs-3">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>Añada la nueva Direccion</a>
									</div>
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div id="kt_ecommerce_customer_addresses" class="card-body pt-0 pb-5">
									<div class="accordion accordion-icon-toggle"
										id="kt_ecommerce_customer_addresses_accordion">
										<!--begin::Addresses-->
										<!--begin::Address-->
										<div class="py-0">
											<!--begin::Header-->
											<div class="py-3 d-flex flex-stack flex-wrap">
												<!--begin::Toggle-->
												<div class="accordion-header d-flex align-items-center collapsible collapsed rotate"
													data-bs-toggle="collapse" href="#kt_ecommerce_customer_addresses_1"
													role="button" aria-expanded="false"
													aria-controls="kt_customer_view_payment_method_1">
													<!--begin::Arrow-->
													<div class="accordion-icon me-3">
														<i class="ki-duotone ki-right fs-4"></i>
													</div>
													<!--end::Arrow-->
													<!--begin::Summary-->
													<div class="me-3">
														<div class="d-flex align-items-center">
															<div class="fs-4 fw-bold">Calle de
																residencia</div>
															<div class="badge badge-light-primary ms-5">
																Correo por defecto</div>
														</div>
														<div class="text-muted">101 Collin Street
														</div>
													</div>
													<!--end::Summary-->
												</div>
												<!--end::Toggle-->
												<!--begin::Toolbar-->
												<div class="d-flex my-3 ms-9">
													<!--begin::Edit-->
													<a href="#"
														class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
														data-bs-toggle="modal"
														data-bs-target="#kt_modal_update_address">
														<span data-bs-toggle="tooltip" data-bs-trigger="hover"
															aria-label="Edit" data-bs-original-title="Edit"
															data-kt-initialized="1">
															<i class="ki-duotone ki-pencil fs-3">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</a>
													<!--end::Edit-->
													<!--begin::Delete-->
													<a href="#"
														class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
														data-bs-toggle="tooltip"
														data-kt-customer-payment-method="delete" aria-label="Delete"
														data-bs-original-title="Delete" data-kt-initialized="1">
														<i class="ki-duotone ki-trash fs-3">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
														</i>
													</a>
													<!--end::Delete-->
													<!--begin::More-->
													<a href="#"
														class="btn btn-icon btn-active-light-primary w-30px h-30px"
														data-bs-toggle="tooltip" data-kt-menu-trigger="click"
														data-kt-menu-placement="bottom-end" aria-label="More Options"
														data-bs-original-title="More Options" data-kt-initialized="1">
														<i class="ki-duotone ki-setting-3 fs-3">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
														</i>
													</a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-200px py-3"
														data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3"
																data-kt-payment-mehtod-action="set_as_default">Set
																as default address</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
													<!--end::More-->
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div id="kt_ecommerce_customer_addresses_1" class="collapse fs-6 ps-9"
												data-bs-parent="#kt_ecommerce_customer_addresses_accordion">
												<!--begin::Details-->
												<div class="d-flex flex-column pb-5">
													<div class="fw-bold text-gray-600">Max Smith
													</div>
													<div class="text-muted">101 Collin Street,
														<br>Melbourne, VIC 3000,
														<br>Australia
													</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Address-->
										<!--begin::Address-->
										<div class="py-0">
											<!--begin::Header-->
											<div class="py-3 d-flex flex-stack flex-wrap">
												<!--begin::Toggle-->
												<div class="accordion-header d-flex align-items-center collapsible collapsed rotate"
													data-bs-toggle="collapse" href="#kt_ecommerce_customer_addresses_2"
													role="button" aria-expanded="false"
													aria-controls="kt_customer_view_payment_method_2">
													<!--begin::Arrow-->
													<div class="accordion-icon me-3">
														<i class="ki-duotone ki-right fs-4"></i>
													</div>
													<!--end::Arrow-->
													<!--begin::Summary-->
													<div class="me-3">
														<div class="d-flex align-items-center">
															<div class="fs-4 fw-bold">Direccion del
																lugar de trabajo</div>
														</div>
														<div class="text-muted">54 Spring Street
														</div>
													</div>
													<!--end::Summary-->
												</div>
												<!--end::Toggle-->
												<!--begin::Toolbar-->
												<div class="d-flex my-3 ms-9">
													<!--begin::Edit-->
													<a href="#"
														class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
														data-bs-toggle="modal"
														data-bs-target="#kt_modal_update_address">
														<span data-bs-toggle="tooltip" data-bs-trigger="hover"
															aria-label="Edit" data-bs-original-title="Edit"
															data-kt-initialized="1">
															<i class="ki-duotone ki-pencil fs-3">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</a>
													<!--end::Edit-->
													<!--begin::Delete-->
													<a href="#"
														class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
														data-bs-toggle="tooltip"
														data-kt-customer-payment-method="delete" aria-label="Delete"
														data-bs-original-title="Delete" data-kt-initialized="1">
														<i class="ki-duotone ki-trash fs-3">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
														</i>
													</a>
													<!--end::Delete-->
													<!--begin::More-->
													<a href="#"
														class="btn btn-icon btn-active-light-primary w-30px h-30px"
														data-bs-toggle="tooltip" data-kt-menu-trigger="click"
														data-kt-menu-placement="bottom-end" aria-label="More Options"
														data-bs-original-title="More Options" data-kt-initialized="1">
														<i class="ki-duotone ki-setting-3 fs-3">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
														</i>
													</a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-200px py-3"
														data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3"
																data-kt-payment-mehtod-action="set_as_default">Set
																as default address</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
													<!--end::More-->
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div id="kt_ecommerce_customer_addresses_2" class="collapse fs-6 ps-9"
												data-bs-parent="#kt_ecommerce_customer_addresses_accordion">
												<!--begin::Details-->
												<div class="d-flex flex-column pb-5">
													<div class="fw-bold text-gray-600">Max Smith
													</div>
													<div class="text-muted">54 Spring Street,
														<br>Melbourne, VIC 3000,
														<br>Australia
													</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Address-->
										<!--begin::Address-->
										<div class="py-0">
											<!--begin::Header-->

											<!--end::Header-->
											<!--begin::Body-->
											<div id="kt_ecommerce_customer_addresses_3" class="collapse fs-6 ps-9"
												data-bs-parent="#kt_ecommerce_customer_addresses_accordion">
												<!--begin::Details-->
												<div class="d-flex flex-column pb-5">
													<div class="fw-bold text-gray-600">Francis
														Mitcham</div>
													<div class="text-muted">1521 Broadway,
														<br>New York,
														<br>Melbourne, NY 10036,
														<br>United States
													</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Address-->
										<!--end::Addresses-->
									</div>
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end:::Tab pane-->
						<!--begin:::Tab pane-->
						<div class="tab-pane fade active show" id="kt_ecommerce_customer_advanced" role="tabpanel">
							<!--begin::Card-->
							<div class="card pt-4 mb-6 mb-xl-9">
								<!--begin::Card header-->
								<div class="card-header border-0">
									<!--begin::Card title-->
									<div class="card-title">
										<h2>Seguridad de la cuenta del cliente</h2>
									</div>
									<!--end::Card title-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body pt-0 pb-5">
									<!--begin::Table wrapper-->
									<div class="table-responsive">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed gy-5"
											id="kt_table_users_login_session">
											<!--begin::Table body-->
											<tbody class="fs-6 fw-semibold text-gray-600">
												<tr>
													<td>Teléfono</td>
													<td>+6141 234 567</td>
													<td class="text-end">
														<button type="button"
															class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
															data-bs-toggle="modal"
															data-bs-target="#kt_modal_update_phone">
															<i class="ki-duotone ki-pencil fs-3">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</button>
													</td>
												</tr>
												<tr>
													<td>Contraseña</td>
													<td>******</td>
													<td class="text-end">
														<button type="button"
															class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
															data-bs-toggle="modal"
															data-bs-target="#kt_modal_update_password">
															<i class="ki-duotone ki-pencil fs-3">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</button>
													</td>
												</tr>
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
									<!--end::Table wrapper-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
							<!--begin::Card-->

							<!--end::Card-->
							<!--begin::Card-->

							<!--end::Card-->
						</div>
						<!--end:::Tab pane-->
					</div>
					<!--end:::Tab content-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Layout-->
			<!--begin::Modals-->
			<!--begin::Modal - New Address-->
			<div class="modal fade" id="kt_modal_update_address" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Form-->
						<form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#"
							id="kt_modal_update_address_form">
							<!--begin::Modal header-->
							<div class="modal-header" id="kt_modal_update_address_header">
								<!--begin::Modal title-->
								<h2 class="fw-bold">Actualizar Direccion</h2>
								<!--end::Modal title-->
								<!--begin::Close-->
								<div id="kt_modal_update_address_close"
									class="btn btn-icon btn-sm btn-active-icon-primary">
									<i class="ki-duotone ki-cross fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
								<!--end::Close-->
							</div>
							<!--end::Modal header-->
							<!--begin::Modal body-->
							<div class="modal-body py-10 px-lg-17">
								<!--begin::Scroll-->
								<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_address_scroll"
									data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
									data-kt-scroll-max-height="auto"
									data-kt-scroll-dependencies="#kt_modal_update_address_header"
									data-kt-scroll-wrappers="#kt_modal_update_address_scroll"
									data-kt-scroll-offset="300px" style="max-height: 656px;">
									<!--begin::Billing toggle-->

									<!--end::Billing toggle-->
									<!--begin::Billing form-->
									<div id="kt_modal_update_address_billing_info" class="collapse show">
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2 required">Direccion
												1</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control form-control-solid" placeholder=""
												name="address1" value="101, Collins Street">
											<!--end::Input-->
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Address Line
												2</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control form-control-solid" placeholder=""
												name="address2">
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2 required">City /
												Town</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control form-control-solid" placeholder="" name="city"
												value="Melbourne">
											<!--end::Input-->
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-7">
											<!--begin::Col-->
											<div class="col-md-6 fv-row fv-plugins-icon-container">
												<!--begin::Label-->
												<label class="fs-6 fw-semibold mb-2 required">State
													/ Province</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input class="form-control form-control-solid" placeholder=""
													name="state" value="Victoria">
												<!--end::Input-->
												<div
													class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
												</div>
												<div
													class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
												</div>
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-6 fv-row fv-plugins-icon-container">
												<!--begin::Label-->
												<label class="fs-6 fw-semibold mb-2 required">Post
													Code</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input class="form-control form-control-solid" placeholder=""
													name="postcode" value="3000">
												<!--end::Input-->
												<div
													class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
												</div>
												<div
													class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
												</div>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">
												<span class="required">Country</span>
												<span class="ms-1" data-bs-toggle="tooltip"
													aria-label="Country of origination"
													data-bs-original-title="Country of origination"
													data-kt-initialized="1">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<select name="country" aria-label="Select a Country" data-control="select2"
												data-placeholder="Select a Country..."
												data-dropdown-parent="#kt_modal_update_address"
												class="form-select form-select-solid fw-bold select2-hidden-accessible"
												data-select2-id="select2-data-9-uvw3" tabindex="-1" aria-hidden="true"
												data-kt-initialized="1">
												<option value="">Select a Country...</option>
												<option value="AF">Afghanistan</option>
												<option value="AX">Aland Islands</option>
												<option value="AL">Albania</option>
												<option value="DZ">Algeria</option>
												<option value="AS">American Samoa</option>
												<option value="AD">Andorra</option>
												<option value="AO">Angola</option>
												<option value="AI">Anguilla</option>
												<option value="AG">Antigua and Barbuda</option>
												<option value="AR">Argentina</option>
												<option value="AM">Armenia</option>
												<option value="AW">Aruba</option>
												<option value="AU" selected="selected"
													data-select2-id="select2-data-11-6lku">Australia
												</option>
												<option value="AT">Austria</option>
												<option value="AZ">Azerbaijan</option>
												<option value="BS">Bahamas</option>
												<option value="BH">Bahrain</option>
												<option value="BD">Bangladesh</option>
												<option value="BB">Barbados</option>
												<option value="BY">Belarus</option>
												<option value="BE">Belgium</option>
												<option value="BZ">Belize</option>
												<option value="BJ">Benin</option>
												<option value="BM">Bermuda</option>
												<option value="BT">Bhutan</option>
												<option value="BO">Bolivia, Plurinational State of
												</option>
												<option value="BQ">Bonaire, Sint Eustatius and Saba
												</option>
												<option value="BA">Bosnia and Herzegovina</option>
												<option value="BW">Botswana</option>
												<option value="BR">Brazil</option>
												<option value="IO">British Indian Ocean Territory
												</option>
												<option value="BN">Brunei Darussalam</option>
												<option value="BG">Bulgaria</option>
												<option value="BF">Burkina Faso</option>
												<option value="BI">Burundi</option>
												<option value="KH">Cambodia</option>
												<option value="CM">Cameroon</option>
												<option value="CA">Canada</option>
												<option value="CV">Cape Verde</option>
												<option value="KY">Cayman Islands</option>
												<option value="CF">Central African Republic</option>
												<option value="TD">Chad</option>
												<option value="CL">Chile</option>
												<option value="CN">China</option>
												<option value="CX">Christmas Island</option>
												<option value="CC">Cocos (Keeling) Islands</option>
												<option value="CO">Colombia</option>
												<option value="KM">Comoros</option>
												<option value="CK">Cook Islands</option>
												<option value="CR">Costa Rica</option>
												<option value="CI">Côte d'Ivoire</option>
												<option value="HR">Croatia</option>
												<option value="CU">Cuba</option>
												<option value="CW">Curaçao</option>
												<option value="CZ">Czech Republic</option>
												<option value="DK">Denmark</option>
												<option value="DJ">Djibouti</option>
												<option value="DM">Dominica</option>
												<option value="DO">Dominican Republic</option>
												<option value="EC">Ecuador</option>
												<option value="EG">Egypt</option>
												<option value="SV">El Salvador</option>
												<option value="GQ">Equatorial Guinea</option>
												<option value="ER">Eritrea</option>
												<option value="EE">Estonia</option>
												<option value="ET">Ethiopia</option>
												<option value="FK">Falkland Islands (Malvinas)
												</option>
												<option value="FJ">Fiji</option>
												<option value="FI">Finland</option>
												<option value="FR">France</option>
												<option value="PF">French Polynesia</option>
												<option value="GA">Gabon</option>
												<option value="GM">Gambia</option>
												<option value="GE">Georgia</option>
												<option value="DE">Germany</option>
												<option value="GH">Ghana</option>
												<option value="GI">Gibraltar</option>
												<option value="GR">Greece</option>
												<option value="GL">Greenland</option>
												<option value="GD">Grenada</option>
												<option value="GU">Guam</option>
												<option value="GT">Guatemala</option>
												<option value="GG">Guernsey</option>
												<option value="GN">Guinea</option>
												<option value="GW">Guinea-Bissau</option>
												<option value="HT">Haiti</option>
												<option value="VA">Holy See (Vatican City State)
												</option>
												<option value="HN">Honduras</option>
												<option value="HK">Hong Kong</option>
												<option value="HU">Hungary</option>
												<option value="IS">Iceland</option>
												<option value="IN">India</option>
												<option value="ID">Indonesia</option>
												<option value="IR">Iran, Islamic Republic of
												</option>
												<option value="IQ">Iraq</option>
												<option value="IE">Ireland</option>
												<option value="IM">Isle of Man</option>
												<option value="IL">Israel</option>
												<option value="IT">Italy</option>
												<option value="JM">Jamaica</option>
												<option value="JP">Japan</option>
												<option value="JE">Jersey</option>
												<option value="JO">Jordan</option>
												<option value="KZ">Kazakhstan</option>
												<option value="KE">Kenya</option>
												<option value="KI">Kiribati</option>
												<option value="KP">Korea, Democratic People's
													Republic of</option>
												<option value="KW">Kuwait</option>
												<option value="KG">Kyrgyzstan</option>
												<option value="LA">Lao People's Democratic Republic
												</option>
												<option value="LV">Latvia</option>
												<option value="LB">Lebanon</option>
												<option value="LS">Lesotho</option>
												<option value="LR">Liberia</option>
												<option value="LY">Libya</option>
												<option value="LI">Liechtenstein</option>
												<option value="LT">Lithuania</option>
												<option value="LU">Luxembourg</option>
												<option value="MO">Macao</option>
												<option value="MG">Madagascar</option>
												<option value="MW">Malawi</option>
												<option value="MY">Malaysia</option>
												<option value="MV">Maldives</option>
												<option value="ML">Mali</option>
												<option value="MT">Malta</option>
												<option value="MH">Marshall Islands</option>
												<option value="MQ">Martinique</option>
												<option value="MR">Mauritania</option>
												<option value="MU">Mauritius</option>
												<option value="MX">Mexico</option>
												<option value="FM">Micronesia, Federated States of
												</option>
												<option value="MD">Moldova, Republic of</option>
												<option value="MC">Monaco</option>
												<option value="MN">Mongolia</option>
												<option value="ME">Montenegro</option>
												<option value="MS">Montserrat</option>
												<option value="MA">Morocco</option>
												<option value="MZ">Mozambique</option>
												<option value="MM">Myanmar</option>
												<option value="NA">Namibia</option>
												<option value="NR">Nauru</option>
												<option value="NP">Nepal</option>
												<option value="NL">Netherlands</option>
												<option value="NZ">New Zealand</option>
												<option value="NI">Nicaragua</option>
												<option value="NE">Niger</option>
												<option value="NG">Nigeria</option>
												<option value="NU">Niue</option>
												<option value="NF">Norfolk Island</option>
												<option value="MP">Northern Mariana Islands</option>
												<option value="NO">Norway</option>
												<option value="OM">Oman</option>
												<option value="PK">Pakistan</option>
												<option value="PW">Palau</option>
												<option value="PS">Palestinian Territory, Occupied
												</option>
												<option value="PA">Panama</option>
												<option value="PG">Papua New Guinea</option>
												<option value="PY">Paraguay</option>
												<option value="PE">Peru</option>
												<option value="PH">Philippines</option>
												<option value="PL">Poland</option>
												<option value="PT">Portugal</option>
												<option value="PR">Puerto Rico</option>
												<option value="QA">Qatar</option>
												<option value="RO">Romania</option>
												<option value="RU">Russian Federation</option>
												<option value="RW">Rwanda</option>
												<option value="BL">Saint Barthélemy</option>
												<option value="KN">Saint Kitts and Nevis</option>
												<option value="LC">Saint Lucia</option>
												<option value="MF">Saint Martin (French part)
												</option>
												<option value="VC">Saint Vincent and the Grenadines
												</option>
												<option value="WS">Samoa</option>
												<option value="SM">San Marino</option>
												<option value="ST">Sao Tome and Principe</option>
												<option value="SA">Saudi Arabia</option>
												<option value="SN">Senegal</option>
												<option value="RS">Serbia</option>
												<option value="SC">Seychelles</option>
												<option value="SL">Sierra Leone</option>
												<option value="SG">Singapore</option>
												<option value="SX">Sint Maarten (Dutch part)
												</option>
												<option value="SK">Slovakia</option>
												<option value="SI">Slovenia</option>
												<option value="SB">Solomon Islands</option>
												<option value="SO">Somalia</option>
												<option value="ZA">South Africa</option>
												<option value="KR">South Korea</option>
												<option value="SS">South Sudan</option>
												<option value="ES">Spain</option>
												<option value="LK">Sri Lanka</option>
												<option value="SD">Sudan</option>
												<option value="SR">Suriname</option>
												<option value="SZ">Swaziland</option>
												<option value="SE">Sweden</option>
												<option value="CH">Switzerland</option>
												<option value="SY">Syrian Arab Republic</option>
												<option value="TW">Taiwan, Province of China
												</option>
												<option value="TJ">Tajikistan</option>
												<option value="TZ">Tanzania, United Republic of
												</option>
												<option value="TH">Thailand</option>
												<option value="TG">Togo</option>
												<option value="TK">Tokelau</option>
												<option value="TO">Tonga</option>
												<option value="TT">Trinidad and Tobago</option>
												<option value="TN">Tunisia</option>
												<option value="TR">Turkey</option>
												<option value="TM">Turkmenistan</option>
												<option value="TC">Turks and Caicos Islands</option>
												<option value="TV">Tuvalu</option>
												<option value="UG">Uganda</option>
												<option value="UA">Ukraine</option>
												<option value="AE">United Arab Emirates</option>
												<option value="GB">United Kingdom</option>
												<option value="US">United States</option>
												<option value="UY">Uruguay</option>
												<option value="UZ">Uzbekistan</option>
												<option value="VU">Vanuatu</option>
												<option value="VE">Venezuela, Bolivarian Republic of
												</option>
												<option value="VN">Vietnam</option>
												<option value="VI">Virgin Islands</option>
												<option value="YE">Yemen</option>
												<option value="ZM">Zambia</option>
												<option value="ZW">Zimbabwe</option>
											</select><span
												class="select2 select2-container select2-container--bootstrap5"
												dir="ltr" data-select2-id="select2-data-10-enos"
												style="width: 100%;"><span class="selection"><span
														class="select2-selection select2-selection--single form-select form-select-solid fw-bold"
														role="combobox" aria-haspopup="true" aria-expanded="false"
														tabindex="0" aria-disabled="false"
														aria-labelledby="select2-country-px-container"
														aria-controls="select2-country-px-container"><span
															class="select2-selection__rendered"
															id="select2-country-px-container" role="textbox"
															aria-readonly="true" title="Australia">Australia</span><span
															class="select2-selection__arrow" role="presentation"><b
																role="presentation"></b></span></span></span><span
													class="dropdown-wrapper" aria-hidden="true"></span></span>
											<!--end::Input-->
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Billing form-->
								</div>
								<!--end::Scroll-->
							</div>
							<!--end::Modal body-->
							<!--begin::Modal footer-->
							<div class="modal-footer flex-center">
								<!--begin::Button-->
								<button type="reset" id="kt_modal_update_address_cancel"
									class="btn btn-light me-3">Discard</button>
								<!--end::Button-->
								<!--begin::Button-->
								<button type="submit" id="kt_modal_update_address_submit" class="btn btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
								<!--end::Button-->
							</div>
							<!--end::Modal footer-->
						</form>
						<!--end::Form-->
					</div>
				</div>
			</div>
			<!--end::Modal - New Address-->
			<!--begin::Modal - Update password-->
			<div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bold">Update Password</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
								<i class="ki-duotone ki-cross fs-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
							<!--begin::Form-->
							<form id="kt_modal_update_password_form"
								class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
								<!--begin::Input group=-->
								<div class="fv-row mb-10 fv-plugins-icon-container">
									<label class="required form-label fs-6 mb-2">Current
										Password</label>
									<input class="form-control form-control-lg form-control-solid" type="password"
										placeholder="" name="current_password" autocomplete="off">
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
								</div>
								<!--end::Input group=-->
								<!--begin::Input group-->
								<div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
									<!--begin::Wrapper-->
									<div class="mb-1">
										<!--begin::Label-->
										<label class="form-label fw-semibold fs-6 mb-2">New
											Password</label>
										<!--end::Label-->
										<!--begin::Input wrapper-->
										<div class="position-relative mb-3">
											<input class="form-control form-control-lg form-control-solid"
												type="password" placeholder="" name="new_password" autocomplete="off">
											<span
												class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
												data-kt-password-meter-control="visibility">
												<i class="ki-duotone ki-eye-slash fs-1">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
												<i class="ki-duotone ki-eye d-none fs-1">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
										</div>
										<!--end::Input wrapper-->
										<!--begin::Meter-->
										<div class="d-flex align-items-center mb-3"
											data-kt-password-meter-control="highlight">
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
											</div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
											</div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
											</div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px">
											</div>
										</div>
										<!--end::Meter-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Hint-->
									<div class="text-muted">Use 8 or more characters with a mix of
										letters, numbers &amp; symbols.</div>
									<!--end::Hint-->
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
								</div>
								<!--end::Input group=-->
								<!--begin::Input group=-->
								<div class="fv-row mb-10 fv-plugins-icon-container">
									<label class="form-label fw-semibold fs-6 mb-2">Confirm New
										Password</label>
									<input class="form-control form-control-lg form-control-solid" type="password"
										placeholder="" name="confirm_password" autocomplete="off">
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
								</div>
								<!--end::Input group=-->
								<!--begin::Actions-->
								<div class="text-center pt-15">
									<button type="reset" class="btn btn-light me-3"
										data-kt-users-modal-action="cancel">Discard</button>
									<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
										<span class="indicator-label">Submit</span>
										<span class="indicator-progress">Please wait...
											<span
												class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Modal body-->
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - Update password-->
			<!--begin::Modal - Update email-->
			<div class="modal fade" id="kt_modal_update_phone" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bold">Update Phone Number</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
								<i class="ki-duotone ki-cross fs-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
							<!--begin::Form-->
							<form id="kt_modal_update_phone_form"
								class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
								<!--begin::Notice-->
								<!--begin::Notice-->
								<div
									class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
									<!--begin::Icon-->
									<i class="ki-duotone ki-information fs-2tx text-primary me-4">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>
									<!--end::Icon-->
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack flex-grow-1">
										<!--begin::Content-->
										<div class="fw-semibold">
											<div class="fs-6 text-gray-700">Please note that a valid
												phone number may be required for order or shipping
												rescheduling.</div>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Notice-->
								<!--end::Notice-->
								<!--begin::Input group-->
								<div class="fv-row mb-7 fv-plugins-icon-container">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold form-label mb-2">
										<span class="required">Phone</span>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-solid" placeholder="" name="profile_phone"
										value="+6141 234 567">
									<!--end::Input-->
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="text-center pt-15">
									<button type="reset" class="btn btn-light me-3"
										data-kt-users-modal-action="cancel">Discard</button>
									<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
										<span class="indicator-label">Submit</span>
										<span class="indicator-progress">Please wait...
											<span
												class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Modal body-->
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - Update email-->
			<!--begin::Modal - New Address-->
			<div class="modal fade" id="kt_modal_add_address" tabindex="-1" style="display: none;" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Form-->
						<form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#"
							id="kt_modal_add_address_form">
							<!--begin::Modal header-->
							<div class="modal-header" id="kt_modal_add_address_header">
								<!--begin::Modal title-->
								<h2 class="fw-bold">Add New Address</h2>
								<!--end::Modal title-->
								<!--begin::Close-->
								<div id="kt_modal_add_address_close"
									class="btn btn-icon btn-sm btn-active-icon-primary">
									<i class="ki-duotone ki-cross fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
								<!--end::Close-->
							</div>
							<!--end::Modal header-->
							<!--begin::Modal body-->
							<div class="modal-body py-10 px-lg-17">
								<!--begin::Scroll-->
								<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_address_scroll"
									data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
									data-kt-scroll-max-height="auto"
									data-kt-scroll-dependencies="#kt_modal_add_address_header"
									data-kt-scroll-wrappers="#kt_modal_add_address_scroll" data-kt-scroll-offset="300px"
									style="max-height: 656px;">
									<!--begin::Billing toggle-->
									<div class="fw-bold fs-3 rotate collapsible collapsed mb-7"
										data-bs-toggle="collapse" href="#kt_modal_add_address_billing_info"
										role="button" aria-expanded="false"
										aria-controls="kt_modal_add_address_billing_info">Shipping
										Information
										<span class="ms-2 rotate-180">
											<i class="ki-duotone ki-down fs-3"></i>
										</span>
									</div>
									<!--end::Billing toggle-->
									<!--begin::Billing form-->
									<div id="kt_modal_add_address_billing_info" class="collapse show">
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2 required">Address
												Name</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control form-control-solid" placeholder="" name="name"
												value="">
											<!--end::Input-->
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2 required">Address
												Line 1</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control form-control-solid" placeholder=""
												name="address1" value="">
											<!--end::Input-->
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Address Line
												2</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control form-control-solid" placeholder=""
												name="address2">
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2 required">City /
												Town</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control form-control-solid" placeholder="" name="city"
												value="">
											<!--end::Input-->
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-7">
											<!--begin::Col-->
											<div class="col-md-6 fv-row fv-plugins-icon-container">
												<!--begin::Label-->
												<label class="fs-6 fw-semibold mb-2 required">State
													/ Province</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input class="form-control form-control-solid" placeholder=""
													name="state" value="">
												<!--end::Input-->
												<div
													class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
												</div>
												<div
													class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
												</div>
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-6 fv-row fv-plugins-icon-container">
												<!--begin::Label-->
												<label class="fs-6 fw-semibold mb-2 required">Post
													Code</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input class="form-control form-control-solid" placeholder=""
													name="postcode" value="">
												<!--end::Input-->
												<div
													class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
												</div>
												<div
													class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
												</div>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">
												<span class="required">Country</span>
												<span class="ms-1" data-bs-toggle="tooltip"
													aria-label="Country of origination"
													data-bs-original-title="Country of origination"
													data-kt-initialized="1">
													<i class="ki-duotone ki-information fs-7">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<select name="country" aria-label="Select a Country" data-control="select2"
												data-placeholder="Select a Country..."
												data-dropdown-parent="#kt_modal_add_address"
												class="form-select form-select-solid fw-bold select2-hidden-accessible"
												data-select2-id="select2-data-12-q2xj" tabindex="-1" aria-hidden="true"
												data-kt-initialized="1">
												<option value="" data-select2-id="select2-data-14-by7v">Select a
													Country...</option>
												<option value="AF">Afghanistan</option>
												<option value="AX">Aland Islands</option>
												<option value="AL">Albania</option>
												<option value="DZ">Algeria</option>
												<option value="AS">American Samoa</option>
												<option value="AD">Andorra</option>
												<option value="AO">Angola</option>
												<option value="AI">Anguilla</option>
												<option value="AG">Antigua and Barbuda</option>
												<option value="AR">Argentina</option>
												<option value="AM">Armenia</option>
												<option value="AW">Aruba</option>
												<option value="AU">Australia</option>
												<option value="AT">Austria</option>
												<option value="AZ">Azerbaijan</option>
												<option value="BS">Bahamas</option>
												<option value="BH">Bahrain</option>
												<option value="BD">Bangladesh</option>
												<option value="BB">Barbados</option>
												<option value="BY">Belarus</option>
												<option value="BE">Belgium</option>
												<option value="BZ">Belize</option>
												<option value="BJ">Benin</option>
												<option value="BM">Bermuda</option>
												<option value="BT">Bhutan</option>
												<option value="BO">Bolivia, Plurinational State of
												</option>
												<option value="BQ">Bonaire, Sint Eustatius and Saba
												</option>
												<option value="BA">Bosnia and Herzegovina</option>
												<option value="BW">Botswana</option>
												<option value="BR">Brazil</option>
												<option value="IO">British Indian Ocean Territory
												</option>
												<option value="BN">Brunei Darussalam</option>
												<option value="BG">Bulgaria</option>
												<option value="BF">Burkina Faso</option>
												<option value="BI">Burundi</option>
												<option value="KH">Cambodia</option>
												<option value="CM">Cameroon</option>
												<option value="CA">Canada</option>
												<option value="CV">Cape Verde</option>
												<option value="KY">Cayman Islands</option>
												<option value="CF">Central African Republic</option>
												<option value="TD">Chad</option>
												<option value="CL">Chile</option>
												<option value="CN">China</option>
												<option value="CX">Christmas Island</option>
												<option value="CC">Cocos (Keeling) Islands</option>
												<option value="CO">Colombia</option>
												<option value="KM">Comoros</option>
												<option value="CK">Cook Islands</option>
												<option value="CR">Costa Rica</option>
												<option value="CI">Côte d'Ivoire</option>
												<option value="HR">Croatia</option>
												<option value="CU">Cuba</option>
												<option value="CW">Curaçao</option>
												<option value="CZ">Czech Republic</option>
												<option value="DK">Denmark</option>
												<option value="DJ">Djibouti</option>
												<option value="DM">Dominica</option>
												<option value="DO">Dominican Republic</option>
												<option value="EC">Ecuador</option>
												<option value="EG">Egypt</option>
												<option value="SV">El Salvador</option>
												<option value="GQ">Equatorial Guinea</option>
												<option value="ER">Eritrea</option>
												<option value="EE">Estonia</option>
												<option value="ET">Ethiopia</option>
												<option value="FK">Falkland Islands (Malvinas)
												</option>
												<option value="FJ">Fiji</option>
												<option value="FI">Finland</option>
												<option value="FR">France</option>
												<option value="PF">French Polynesia</option>
												<option value="GA">Gabon</option>
												<option value="GM">Gambia</option>
												<option value="GE">Georgia</option>
												<option value="DE">Germany</option>
												<option value="GH">Ghana</option>
												<option value="GI">Gibraltar</option>
												<option value="GR">Greece</option>
												<option value="GL">Greenland</option>
												<option value="GD">Grenada</option>
												<option value="GU">Guam</option>
												<option value="GT">Guatemala</option>
												<option value="GG">Guernsey</option>
												<option value="GN">Guinea</option>
												<option value="GW">Guinea-Bissau</option>
												<option value="HT">Haiti</option>
												<option value="VA">Holy See (Vatican City State)
												</option>
												<option value="HN">Honduras</option>
												<option value="HK">Hong Kong</option>
												<option value="HU">Hungary</option>
												<option value="IS">Iceland</option>
												<option value="IN">India</option>
												<option value="ID">Indonesia</option>
												<option value="IR">Iran, Islamic Republic of
												</option>
												<option value="IQ">Iraq</option>
												<option value="IE">Ireland</option>
												<option value="IM">Isle of Man</option>
												<option value="IL">Israel</option>
												<option value="IT">Italy</option>
												<option value="JM">Jamaica</option>
												<option value="JP">Japan</option>
												<option value="JE">Jersey</option>
												<option value="JO">Jordan</option>
												<option value="KZ">Kazakhstan</option>
												<option value="KE">Kenya</option>
												<option value="KI">Kiribati</option>
												<option value="KP">Korea, Democratic People's
													Republic of</option>
												<option value="KW">Kuwait</option>
												<option value="KG">Kyrgyzstan</option>
												<option value="LA">Lao People's Democratic Republic
												</option>
												<option value="LV">Latvia</option>
												<option value="LB">Lebanon</option>
												<option value="LS">Lesotho</option>
												<option value="LR">Liberia</option>
												<option value="LY">Libya</option>
												<option value="LI">Liechtenstein</option>
												<option value="LT">Lithuania</option>
												<option value="LU">Luxembourg</option>
												<option value="MO">Macao</option>
												<option value="MG">Madagascar</option>
												<option value="MW">Malawi</option>
												<option value="MY">Malaysia</option>
												<option value="MV">Maldives</option>
												<option value="ML">Mali</option>
												<option value="MT">Malta</option>
												<option value="MH">Marshall Islands</option>
												<option value="MQ">Martinique</option>
												<option value="MR">Mauritania</option>
												<option value="MU">Mauritius</option>
												<option value="MX">Mexico</option>
												<option value="FM">Micronesia, Federated States of
												</option>
												<option value="MD">Moldova, Republic of</option>
												<option value="MC">Monaco</option>
												<option value="MN">Mongolia</option>
												<option value="ME">Montenegro</option>
												<option value="MS">Montserrat</option>
												<option value="MA">Morocco</option>
												<option value="MZ">Mozambique</option>
												<option value="MM">Myanmar</option>
												<option value="NA">Namibia</option>
												<option value="NR">Nauru</option>
												<option value="NP">Nepal</option>
												<option value="NL">Netherlands</option>
												<option value="NZ">New Zealand</option>
												<option value="NI">Nicaragua</option>
												<option value="NE">Niger</option>
												<option value="NG">Nigeria</option>
												<option value="NU">Niue</option>
												<option value="NF">Norfolk Island</option>
												<option value="MP">Northern Mariana Islands</option>
												<option value="NO">Norway</option>
												<option value="OM">Oman</option>
												<option value="PK">Pakistan</option>
												<option value="PW">Palau</option>
												<option value="PS">Palestinian Territory, Occupied
												</option>
												<option value="PA">Panama</option>
												<option value="PG">Papua New Guinea</option>
												<option value="PY">Paraguay</option>
												<option value="PE">Peru</option>
												<option value="PH">Philippines</option>
												<option value="PL">Poland</option>
												<option value="PT">Portugal</option>
												<option value="PR">Puerto Rico</option>
												<option value="QA">Qatar</option>
												<option value="RO">Romania</option>
												<option value="RU">Russian Federation</option>
												<option value="RW">Rwanda</option>
												<option value="BL">Saint Barthélemy</option>
												<option value="KN">Saint Kitts and Nevis</option>
												<option value="LC">Saint Lucia</option>
												<option value="MF">Saint Martin (French part)
												</option>
												<option value="VC">Saint Vincent and the Grenadines
												</option>
												<option value="WS">Samoa</option>
												<option value="SM">San Marino</option>
												<option value="ST">Sao Tome and Principe</option>
												<option value="SA">Saudi Arabia</option>
												<option value="SN">Senegal</option>
												<option value="RS">Serbia</option>
												<option value="SC">Seychelles</option>
												<option value="SL">Sierra Leone</option>
												<option value="SG">Singapore</option>
												<option value="SX">Sint Maarten (Dutch part)
												</option>
												<option value="SK">Slovakia</option>
												<option value="SI">Slovenia</option>
												<option value="SB">Solomon Islands</option>
												<option value="SO">Somalia</option>
												<option value="ZA">South Africa</option>
												<option value="KR">South Korea</option>
												<option value="SS">South Sudan</option>
												<option value="ES">Spain</option>
												<option value="LK">Sri Lanka</option>
												<option value="SD">Sudan</option>
												<option value="SR">Suriname</option>
												<option value="SZ">Swaziland</option>
												<option value="SE">Sweden</option>
												<option value="CH">Switzerland</option>
												<option value="SY">Syrian Arab Republic</option>
												<option value="TW">Taiwan, Province of China
												</option>
												<option value="TJ">Tajikistan</option>
												<option value="TZ">Tanzania, United Republic of
												</option>
												<option value="TH">Thailand</option>
												<option value="TG">Togo</option>
												<option value="TK">Tokelau</option>
												<option value="TO">Tonga</option>
												<option value="TT">Trinidad and Tobago</option>
												<option value="TN">Tunisia</option>
												<option value="TR">Turkey</option>
												<option value="TM">Turkmenistan</option>
												<option value="TC">Turks and Caicos Islands</option>
												<option value="TV">Tuvalu</option>
												<option value="UG">Uganda</option>
												<option value="UA">Ukraine</option>
												<option value="AE">United Arab Emirates</option>
												<option value="GB">United Kingdom</option>
												<option value="US">United States</option>
												<option value="UY">Uruguay</option>
												<option value="UZ">Uzbekistan</option>
												<option value="VU">Vanuatu</option>
												<option value="VE">Venezuela, Bolivarian Republic of
												</option>
												<option value="VN">Vietnam</option>
												<option value="VI">Virgin Islands</option>
												<option value="YE">Yemen</option>
												<option value="ZM">Zambia</option>
												<option value="ZW">Zimbabwe</option>
											</select><span
												class="select2 select2-container select2-container--bootstrap5"
												dir="ltr" data-select2-id="select2-data-13-6yw1"
												style="width: 100%;"><span class="selection"><span
														class="select2-selection select2-selection--single form-select form-select-solid fw-bold"
														role="combobox" aria-haspopup="true" aria-expanded="false"
														tabindex="0" aria-disabled="false"
														aria-labelledby="select2-country-aa-container"
														aria-controls="select2-country-aa-container"><span
															class="select2-selection__rendered"
															id="select2-country-aa-container" role="textbox"
															aria-readonly="true" title="Select a Country..."><span
																class="select2-selection__placeholder">Select
																a Country...</span></span><span
															class="select2-selection__arrow" role="presentation"><b
																role="presentation"></b></span></span></span><span
													class="dropdown-wrapper" aria-hidden="true"></span></span>
											<!--end::Input-->
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-7">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold">Use as a billing
														address?</label>
													<!--end::Label-->
													<!--begin::Input-->
													<div class="fs-7 fw-semibold text-muted">If you
														need more info, please check budget planning
													</div>
													<!--end::Input-->
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label
													class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox"
														value="1" id="kt_modal_add_address_billing" checked="checked">
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-semibold text-muted"
														for="kt_modal_add_address_billing">Yes</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--begin::Wrapper-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Billing form-->
								</div>
								<!--end::Scroll-->
							</div>
							<!--end::Modal body-->
							<!--begin::Modal footer-->
							<div class="modal-footer flex-center">
								<!--begin::Button-->
								<button type="reset" id="kt_modal_add_address_cancel"
									class="btn btn-light me-3">Discard</button>
								<!--end::Button-->
								<!--begin::Button-->
								<button type="submit" id="kt_modal_add_address_submit" class="btn btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
								<!--end::Button-->
							</div>
							<!--end::Modal footer-->
						</form>
						<!--end::Form-->
					</div>
				</div>
			</div>
			<!--end::Modal - New Address-->
			<!--begin::Modal - Add task-->
			<div class="modal fade" id="kt_modal_add_auth_app" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bold">Add Authenticator App</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
								<i class="ki-duotone ki-cross fs-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
							<!--begin::Content-->
							<div class="fw-bold d-flex flex-column justify-content-center mb-5">
								<!--begin::Label-->
								<div class="text-center mb-5" data-kt-add-auth-action="qr-code-label">Download the
									<a href="#">Authenticator app</a>, add a new account, then scan
									this barcode to set up your account.
								</div>
								<div class="text-center mb-5 d-none" data-kt-add-auth-action="text-code-label">Download
									the
									<a href="#">Authenticator app</a>, add a new account, then enter
									this code to set up your account.
								</div>
								<!--end::Label-->
								<!--begin::QR code-->
								<div class="d-flex flex-center" data-kt-add-auth-action="qr-code">
									<img src="assets/media/misc/qr.png" alt="Scan this QR code">
								</div>
								<!--end::QR code-->
								<!--begin::Text code-->
								<div class="border rounded p-5 d-flex flex-center d-none"
									data-kt-add-auth-action="text-code">
									<div class="fs-1">gi2kdnb54is709j</div>
								</div>
								<!--end::Text code-->
							</div>
							<!--end::Content-->
							<!--begin::Action-->
							<div class="d-flex flex-center">
								<div class="btn btn-light-primary" data-kt-add-auth-action="text-code-button">Enter code
									manually
								</div>
								<div class="btn btn-light-primary d-none" data-kt-add-auth-action="qr-code-button">Scan
									barcode instead
								</div>
							</div>
							<!--end::Action-->
						</div>
						<!--end::Modal body-->
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - Add task-->
			<!--begin::Modal - Add task-->
			<div class="modal fade" id="kt_modal_add_one_time_password" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bold">Enable One Time Password</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
								<i class="ki-duotone ki-cross fs-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
							<!--begin::Form-->
							<form class="form fv-plugins-bootstrap5 fv-plugins-framework"
								id="kt_modal_add_one_time_password_form">
								<!--begin::Label-->
								<div class="fw-bold mb-9">Enter the new phone number to receive an
									SMS to when you log in.</div>
								<!--end::Label-->
								<!--begin::Input group-->
								<div class="fv-row mb-7 fv-plugins-icon-container">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold form-label mb-2">
										<span class="required">Mobile number</span>
										<span class="ms-1" data-bs-toggle="tooltip"
											aria-label="A valid mobile number is required to receive the one-time password to validate your account login."
											data-bs-original-title="A valid mobile number is required to receive the one-time password to validate your account login."
											data-kt-initialized="1">
											<i class="ki-duotone ki-information fs-7">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" name="otp_mobile_number"
										placeholder="+6123 456 789" value="">
									<!--end::Input-->
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
								</div>
								<!--end::Input group-->
								<!--begin::Separator-->
								<div class="separator saperator-dashed my-5"></div>
								<!--end::Separator-->
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold form-label mb-2">
										<span class="required">Email</span>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="email" class="form-control form-control-solid" name="otp_email"
										value="smith@kpmg.com" readonly="readonly">
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-7 fv-plugins-icon-container">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold form-label mb-2">
										<span class="required">Confirm password</span>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="password" class="form-control form-control-solid"
										name="otp_confirm_password" value="">
									<!--end::Input-->
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="text-center pt-15">
									<button type="reset" class="btn btn-light me-3"
										data-kt-users-modal-action="cancel">Cancel</button>
									<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
										<span class="indicator-label">Submit</span>
										<span class="indicator-progress">Please wait...
											<span
												class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Modal body-->
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - Add task-->
			<!--end::Modals-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
	</div>
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