<?php
$title = "ListaClientes"; // Título dinámico
include '../layout.php'; // Asegúrate de que la ruta sea correcta
?>
<html lang="en">

<body>
	<!--begin::Content-->
	<div id="kt_app_content" class="app-content flex-column-fluid" data-select2-id="select2-data-kt_app_content">
		<!--begin::Content container-->
		<div id="kt_app_content_container" class="app-container container-xxl"
			data-select2-id="select2-data-kt_app_content_container">
			<!--begin::Card-->
			<div class="card" data-select2-id="select2-data-51-cgee">
				<!--begin::Card header-->
				<div class="card-header border-0 pt-6" data-select2-id="select2-data-50-goah">
					<!--begin::Card title-->
					<div class="card-title">
						<!--begin::Search-->
						<div class="d-flex align-items-center position-relative my-1">
							<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
							<input type="text" data-kt-customer-table-filter="search"
								class="form-control form-control-solid w-250px ps-13" placeholder="Buscar Cliente">
						</div>
						<!--end::Search-->
					</div>
					<!--begin::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar" data-select2-id="select2-data-40-bk0z">
						<!--begin::Toolbar-->
						<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base"
							data-select2-id="select2-data-49-m3ah">
							<!--begin::Filter-->
							<div class="w-150px me-3" data-select2-id="select2-data-48-ctbb">
								<!-- Select2 Dropdown -->
								<select class="form-select form-select-solid select2-hidden-accessible"
									data-control="select2" data-hide-search="true" data-placeholder="Status"
									data-kt-ecommerce-order-filter="status" tabindex="-1" aria-hidden="true"
									data-select2-id="select2-data-44-4x18" data-kt-initialized="1">
									<option value="" disabled="" selected="" data-select2-id="select2-data-46-q3pv">
										Status</option>
									<option value="all" data-select2-id="select2-data-53-56ut">All
									</option>
									<option value="active" data-select2-id="select2-data-54-1oou">
										Active</option>
									<option value="locked" data-select2-id="select2-data-55-iv80">
										Locked</option>
								</select>
							</div>

							<script>
								document.addEventListener("DOMContentLoaded", function () {

									$('[data-control="select2"]').select2({
										placeholder: function () {
											return $(this).data('placeholder');
										},
										minimumResultsForSearch: Infinity
									});
								});
							</script>
							<script>
								$(document).on('change', '[data-control="select2"]', function () {
									var selectedValue = $(this).val();
									console.log("Valor seleccionado:", selectedValue);

								});
							</script>

							<!--end::Filter-->
							<!--begin::Export-->
							<button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
								data-bs-target="#kt_customers_export_modal">
								<i class="ki-duotone ki-exit-up fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>Exportar</button>
							<!--end::Export-->
							<!--begin::Add customer-->
							<button type="button" class="btn btn-primary" data-bs-toggle="modal"
								data-bs-target="#kt_modal_add_customer">Añadir clientes</button>
							<!--end::Add customer-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Group actions-->
						<div class="d-flex justify-content-end align-items-center d-none"
							data-kt-customer-table-toolbar="selected">
							<div class="fw-bold me-5">
								<span class="me-2" data-kt-customer-table-select="selected_count">10</span>Seleccionar
							</div>
							<button type="button" class="btn btn-danger"
								data-kt-customer-table-select="delete_selected">Eliminar
								Seleccion</button>
						</div>
						<!--end::Group actions-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body pt-0">
					<!--begin::Table-->
					<div id="kt_customers_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
						<div id="" class="table-responsive">
							<div id="kt_customers_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
								<div id="" class="table-responsive">
									<div id="kt_customers_table_wrapper"
										class="dt-container dt-bootstrap5 dt-empty-footer">
										<div id="" class="table-responsive">
											<div id="kt_customers_table_wrapper"
												class="dt-container dt-bootstrap5 dt-empty-footer">
												<div id="" class="table-responsive">
													<div id="kt_customers_table_wrapper"
														class="dt-container dt-bootstrap5 dt-empty-footer">
														<div id="" class="table-responsive">
															<div id="kt_customers_table_wrapper"
																class="dt-container dt-bootstrap5 dt-empty-footer">
																<div id="" class="table-responsive">
																	<table
																		class="table align-middle table-row-dashed fs-6 gy-5 dataTable"
																		id="kt_customers_table" style="width: 100%;">
																		<colgroup>
																			<col data-dt-column="0"
																				style="width: 36.3906px;">
																			<col data-dt-column="1"
																				style="width: 165.219px;">
																			<col data-dt-column="2"
																				style="width: 178.641px;">
																			<col data-dt-column="3"
																				style="width: 142.156px;">
																			<col data-dt-column="4"
																				style="width: 142.156px;">
																			<col data-dt-column="5"
																				style="width: 194.812px;">
																			<col data-dt-column="6"
																				style="width: 11.125px;">
																		</colgroup>
																		<colgroup>
																			<col data-dt-column="0"
																				style="width: 36.3906px;">
																			<col data-dt-column="1"
																				style="width: 165.219px;">
																			<col data-dt-column="2"
																				style="width: 178.641px;">
																			<col data-dt-column="3"
																				style="width: 142.156px;">
																			<col data-dt-column="4"
																				style="width: 142.156px;">
																			<col data-dt-column="5"
																				style="width: 194.812px;">
																			<col data-dt-column="6"
																				style="width: 11.125px;">
																		</colgroup>
																		<colgroup>
																			<col data-dt-column="0"
																				style="width: 36.3906px;">
																			<col data-dt-column="1"
																				style="width: 165.219px;">
																			<col data-dt-column="2"
																				style="width: 178.641px;">
																			<col data-dt-column="3"
																				style="width: 142.156px;">
																			<col data-dt-column="4"
																				style="width: 142.156px;">
																			<col data-dt-column="5"
																				style="width: 194.812px;">
																			<col data-dt-column="6"
																				style="width: 11.125px;">
																		</colgroup>
																		<colgroup>
																			<col data-dt-column="0"
																				style="width: 36.3906px;">
																			<col data-dt-column="1"
																				style="width: 165.219px;">
																			<col data-dt-column="2"
																				style="width: 178.641px;">
																			<col data-dt-column="3"
																				style="width: 142.156px;">
																			<col data-dt-column="4"
																				style="width: 142.156px;">
																			<col data-dt-column="5"
																				style="width: 194.812px;">
																			<col data-dt-column="6"
																				style="width: 11.125px;">
																		</colgroup>
																		<colgroup>
																			<col data-dt-column="0"
																				style="width: 36.3906px;">
																			<col data-dt-column="1"
																				style="width: 141.578px;">
																			<col data-dt-column="2"
																				style="width: 177.906px;">
																			<col data-dt-column="3"
																				style="width: 141.578px;">
																			<col data-dt-column="4"
																				style="width: 141.578px;">
																			<col data-dt-column="5"
																				style="width: 194.016px;">
																			<col data-dt-column="6"
																				style="width: 37.4531px;">
																		</colgroup>
																		<colgroup>
																			<col data-dt-column="0"
																				style="width: 36.3906px;">
																			<col data-dt-column="1"
																				style="width: 128.953px;">
																			<col data-dt-column="2"
																				style="width: 162.047px;">
																			<col data-dt-column="3"
																				style="width: 128.953px;">
																			<col data-dt-column="4"
																				style="width: 128.953px;">
																			<col data-dt-column="5"
																				style="width: 176.703px;">
																			<col data-dt-column="6"
																				style="width: 108.5px;">
																		</colgroup>
																		<thead>
																			<tr
																				class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
																				<th class="w-10px pe-2 dt-orderable-none"
																					data-dt-column="0" rowspan="1"
																					colspan="1" aria-label="
																
																	
																
															"><span class="dt-column-title">
																						<div
																							class="form-check form-check-sm form-check-custom form-check-solid me-3">
																							<input
																								class="form-check-input"
																								type="checkbox"
																								data-kt-check="true"
																								data-kt-check-target="#kt_customers_table .form-check-input"
																								value="1">
																						</div>
																					</span><span
																						class="dt-column-order"></span>
																				</th>
																				<th class="min-w-125px dt-orderable-asc dt-orderable-desc"
																					data-dt-column="1" rowspan="1"
																					colspan="1"
																					aria-label="Customer Name: Activate to sort: Activate to sort: Activate to sort: Activate to sort: Activate to sort: Activate to sort"
																					tabindex="0"><span
																						class="dt-column-title"
																						role="button">Nombre
																						del
																						Cliente</span><span
																						class="dt-column-order"></span>
																				</th>
																				<th class="min-w-125px dt-orderable-asc dt-orderable-desc"
																					data-dt-column="2" rowspan="1"
																					colspan="1"
																					aria-label="Email: Activate to sort: Activate to sort: Activate to sort: Activate to sort: Activate to sort: Activate to sort"
																					tabindex="0"><span
																						class="dt-column-title"
																						role="button">Correo</span><span
																						class="dt-column-order"></span>
																				</th>
																				<th class="min-w-125px dt-orderable-asc dt-orderable-desc"
																					data-dt-column="3" rowspan="1"
																					colspan="1"
																					aria-label="Status: Activate to sort: Activate to sort: Activate to sort: Activate to sort: Activate to sort: Activate to sort"
																					tabindex="0"><span
																						class="dt-column-title"
																						role="button">Estado</span><span
																						class="dt-column-order"></span>
																				</th>
																				<th class="min-w-125px dt-orderable-asc dt-orderable-desc"
																					data-dt-column="4" rowspan="1"
																					colspan="1"
																					aria-label="IP Address: Activate to sort: Activate to sort: Activate to sort: Activate to sort: Activate to sort: Activate to sort"
																					tabindex="0">
																					<span class="dt-column-title"
																						role="button">Direccion
																						IP</span><span
																						class="dt-column-order"></span>
																				</th>
																				<th class="min-w-125px dt-orderable-asc dt-orderable-desc"
																					data-dt-column="5" rowspan="1"
																					colspan="1"
																					aria-label="Created Date: Activate to sort: Activate to sort: Activate to sort: Activate to sort: Activate to sort: Activate to sort"
																					tabindex="0"><span
																						class="dt-column-title"
																						role="button">Fecha
																						de
																						Creacion</span><span
																						class="dt-column-order"></span>
																				</th>
																				<th data-dt-column="6" rowspan="1"
																					colspan="1"
																					class="dt-orderable-none"
																					aria-label="
																					"><span class="dt-column-title"></span><span class="dt-column-order"></span>
																				</th>
																			</tr>
																		</thead>
																		<tbody class="fw-semibold text-gray-600">
																			<tr>
																				<td>
																					<div
																						class="form-check form-check-sm form-check-custom form-check-solid">
																						<input class="form-check-input"
																							type="checkbox" value="1">
																					</div>
																				</td>
																				<td>
																					<a href="apps/ecommerce/customers/details.html"
																						class="text-gray-800 text-hover-primary mb-1">Emma
																						Smith</a>
																				</td>
																				<td>
																					<a href="#"
																						class="text-gray-600 text-hover-primary mb-1">smith@kpmg.com</a>
																				</td>
																				<td>
																					<!--begin::Badges-->
																					<div
																						class="badge badge-light-danger">
																						Locked
																					</div>
																					<!--end::Badges-->
																				</td>
																				<td>220.54.89.213</td>
																				<td
																					data-order="2024-06-24T00:00:00-06:00">
																					24 Jun
																					2024,
																					10:30 am</td>

																				<td></td>
																			</tr>
																			<tr>
																				<td>
																					<div
																						class="form-check form-check-sm form-check-custom form-check-solid">
																						<input class="form-check-input"
																							type="checkbox" value="1">
																					</div>
																				</td>
																				<td>
																					<a href="apps/ecommerce/customers/details.html"
																						class="text-gray-800 text-hover-primary mb-1">Max
																						Smith</a>
																				</td>

																				<td>
																					<a href="#"
																						class="text-gray-600 text-hover-primary mb-1">max@kt.com</a>
																				</td>
																				<td>
																					<!--begin::Badges-->
																					<div
																						class="badge badge-light-danger">
																						Locked
																					</div>
																					<!--end::Badges-->
																				</td>
																				<td>103.64.23.220</td>
																				<td data-order="Invalid date">
																					24 Jun
																					2024, 6:43
																					am</td>

																				<td></td>
																			</tr>
																			<tr>
																				<td>
																					<div
																						class="form-check form-check-sm form-check-custom form-check-solid">
																						<input class="form-check-input"
																							type="checkbox" value="1">
																					</div>
																				</td>
																				<td>
																					<a href="apps/ecommerce/customers/details.html"
																						class="text-gray-800 text-hover-primary mb-1">Brian
																						Cox</a>
																				</td>
																				<td>
																					<a href="#"
																						class="text-gray-600 text-hover-primary mb-1">brian@exchange.com</a>
																				</td>
																				<td>
																					<!--begin::Badges-->
																					<div
																						class="badge badge-light-danger">
																						Locked
																					</div>
																					<!--end::Badges-->
																				</td>
																				<td>107.78.86.126</td>
																				<td
																					data-order="2024-12-20T00:00:00-06:00">
																					20 Dec
																					2024,
																					10:30 am</td>

																				<td></td>
																			</tr>
																			<tr>
																				<td>
																					<div
																						class="form-check form-check-sm form-check-custom form-check-solid">
																						<input class="form-check-input"
																							type="checkbox" value="1">
																					</div>
																				</td>
																				<td>
																					<a href="apps/ecommerce/customers/details.html"
																						class="text-gray-800 text-hover-primary mb-1">Francis
																						Mitcham</a>
																				</td>
																				<td>
																					<a href="#"
																						class="text-gray-600 text-hover-primary mb-1">f.mit@kpmg.com</a>
																				</td>
																				<td>
																					<!--begin::Badges-->
																					<div
																						class="badge badge-light-danger">
																						Locked
																					</div>
																					<!--end::Badges-->
																				</td>
																				<td>136.64.21.159</td>
																				<td data-order="Invalid date">
																					15 Apr
																					2024, 2:40
																					pm</td>

																				<td></td>
																			</tr>
																			<tr>
																				<td>
																					<div
																						class="form-check form-check-sm form-check-custom form-check-solid">
																						<input class="form-check-input"
																							type="checkbox" value="1">
																					</div>
																				</td>
																				<td>
																					<a href="apps/ecommerce/customers/details.html"
																						class="text-gray-800 text-hover-primary mb-1">Neil
																						Owen</a>
																				</td>
																				<td>
																					<a href="#"
																						class="text-gray-600 text-hover-primary mb-1">owen.neil@gmail.com</a>
																				</td>
																				<td>
																					<!--begin::Badges-->
																					<div
																						class="badge badge-light-danger">
																						Locked
																					</div>
																					<!--end::Badges-->
																				</td>
																				<td>149.66.87.157</td>
																				<td
																					data-order="2024-12-20T00:00:00-06:00">
																					20 Dec
																					2024,
																					10:10 pm</td>

																				<td></td>
																			</tr>
																			<tr>
																				<td>
																					<div
																						class="form-check form-check-sm form-check-custom form-check-solid">
																						<input class="form-check-input"
																							type="checkbox" value="1">
																					</div>
																				</td>
																				<td>
																					<a href="apps/ecommerce/customers/details.html"
																						class="text-gray-800 text-hover-primary mb-1">Dan
																						Wilson</a>
																				</td>
																				<td>
																					<a href="#"
																						class="text-gray-600 text-hover-primary mb-1">dam@consilting.com</a>
																				</td>
																				<td>
																					<!--begin::Badges-->
																					<div
																						class="badge badge-light-danger">
																						Locked
																					</div>
																					<!--end::Badges-->
																				</td>
																				<td>212.74.47.217</td>
																				<td
																					data-order="0005-11-10T20:00:00-05:36">
																					10 Nov
																					2024, 5:20
																					pm</td>

																				<td>



																				</td>



																			</tr>

																			<tr>
																				<td>
																					<div
																						class="form-check form-check-sm form-check-custom form-check-solid">
																						<input class="form-check-input"
																							type="checkbox" value="1">
																					</div>
																				</td>
																				<td>
																					<a href="apps/ecommerce/customers/details.html"
																						class="text-gray-800 text-hover-primary mb-1">Olivia
																						Wild</a>
																				</td>
																				<td>
																					<a href="#"
																						class="text-gray-600 text-hover-primary mb-1">olivia@corpmail.com</a>
																				</td>
																				<td>
																					<!--begin::Badges-->
																					<div
																						class="badge badge-light-success">
																						Active
																					</div>
																					<!--end::Badges-->
																				</td>
																				<td>195.57.46.239</td>
																				<td
																					data-order="2024-08-19T00:00:00-06:00">
																					19 Aug
																					2024,
																					10:30 am</td>

																				<td></td>
																			</tr>


																		</tbody>
																		<!--end::Table body-->
																		<tfoot></tfoot>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div id="" class="row">
							<div id=""
								class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar">
								<div><select name="kt_customers_table_length" aria-controls="kt_customers_table"
										class="form-select form-select-solid form-select-sm" id="dt-length-0">
										<option value="10">10</option>
										<option value="25">25</option>
										<option value="50">50</option>
										<option value="100">100</option>
									</select><label for="dt-length-0"></label></div>
							</div>
							<div id=""
								class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
								<div class="dt-paging paging_simple_numbers">
									<nav aria-label="pagination">
										<ul class="pagination">
											<li class="dt-paging-button page-item disabled"><button
													class="page-link previous" role="link" type="button"
													aria-controls="kt_customers_table" aria-disabled="true"
													aria-label="Previous" data-dt-idx="previous" tabindex="-1"><i
														class="previous"></i></button></li>
											<li class="dt-paging-button page-item active"><button class="page-link"
													role="link" type="button" aria-controls="kt_customers_table"
													aria-current="page" data-dt-idx="0">1</button>
											</li>
											<li class="dt-paging-button page-item"><button class="page-link" role="link"
													type="button" aria-controls="kt_customers_table"
													data-dt-idx="1">2</button></li>
											<li class="dt-paging-button page-item"><button class="page-link" role="link"
													type="button" aria-controls="kt_customers_table"
													data-dt-idx="2">3</button></li>
											<li class="dt-paging-button page-item"><button class="page-link" role="link"
													type="button" aria-controls="kt_customers_table"
													data-dt-idx="3">4</button></li>
											<li class="dt-paging-button page-item"><button class="page-link next"
													role="link" type="button" aria-controls="kt_customers_table"
													aria-label="Next" data-dt-idx="next"><i class="next"></i></button>
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
			<!--begin::Modals-->
			<!--begin::Modal - Customers - Add-->
			<div class="modal fade" id="kt_modal_add_customer" tabindex="-1" style="display: none;" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Form-->
						<form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#"
							id="kt_modal_add_customer_form" data-kt-redirect="apps/customers/list.html">
							<!--begin::Modal header-->
							<div class="modal-header" id="kt_modal_add_customer_header">
								<!--begin::Modal title-->
								<h2 class="fw-bold">Añadir Cliente</h2>
								<!--end::Modal title-->
								<!--begin::Close-->
								<div id="kt_modal_add_customer_close"
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
								<div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true"
									data-kt-scroll-activate="{default: false, lg: true}"
									data-kt-scroll-max-height="auto"
									data-kt-scroll-dependencies="#kt_modal_add_customer_header"
									data-kt-scroll-wrappers="#kt_modal_add_customer_scroll"
									data-kt-scroll-offset="300px" style="max-height: 656px;">
									<!--begin::Input group-->
									<div class="fv-row mb-7 fv-plugins-icon-container">
										<!--begin::Label-->
										<label class="required fs-6 fw-semibold mb-2">Nombre</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-solid" placeholder=""
											name="name" value="Sean Bean">
										<!--end::Input-->
										<div
											class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
										</div>
										<div
											class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
										</div>
										<div
											class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
										</div>
										<div
											class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
										</div>
										<div
											class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
										</div>
										<div
											class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-7 fv-plugins-icon-container">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold mb-2">
											<span class="required">Correo</span>
											<span class="ms-1" data-bs-toggle="tooltip"
												aria-label="Email address must be active"
												data-bs-original-title="Email address must be active"
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
										<input type="email" class="form-control form-control-solid" placeholder=""
											name="email" value="sean@dellito.com">
										<!--end::Input-->
										<div
											class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
										</div>
										<div
											class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
										</div>
										<div
											class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
										</div>
										<div
											class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
										</div>
										<div
											class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
										</div>
										<div
											class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-15">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold mb-2">Descripcion</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-solid" placeholder=""
											name="description">
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Billing toggle-->
									<div class="fw-bold fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
										href="#kt_modal_add_customer_billing_info" role="button" aria-expanded="false"
										aria-controls="kt_customer_view_details">Shipping
										Information
										<span class="ms-2 rotate-180">
											<i class="ki-duotone ki-down fs-3"></i>
										</span>
									</div>
									<!--end::Billing toggle-->
									<!--begin::Billing form-->
									<div id="kt_modal_add_customer_billing_info" class="collapse show">
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
											<!--begin::Label-->
											<label class="required fs-6 fw-semibold mb-2">Linea de Direccion 1</label>
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
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
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
											<label class="fs-6 fw-semibold mb-2">Linea de Direccion 2
												2</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control form-control-solid" placeholder=""
												name="address2" value="">
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
											<!--begin::Label-->
											<label class="required fs-6 fw-semibold mb-2">Ciudad</label>
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
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
											<div
												class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
											</div>
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
												<label class="required fs-6 fw-semibold mb-2">Provincia</label>
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
												<div
													class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
												</div>
												<div
													class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
												</div>
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
												<label class="required fs-6 fw-semibold mb-2">Codigo Postal</label>
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
												<div
													class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
												</div>
												<div
													class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
												</div>
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
												<span class="required">País</span>
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
												data-dropdown-parent="#kt_modal_add_customer"
												class="form-select form-select-solid fw-bold select2-hidden-accessible"
												data-select2-id="select2-data-12-s2ly" tabindex="-1" aria-hidden="true"
												data-kt-initialized="1">
												<option value="">Selecciona un País...</option>
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
												<option value="US" selected="selected"
													data-select2-id="select2-data-14-5bwk">United
													States</option>
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
												dir="ltr" data-select2-id="select2-data-2-8i5a"
												style="width: 100%;"><span class="selection"><span
														class="select2-selection select2-selection--single form-select form-select-solid fw-bold"
														role="combobox" aria-haspopup="true" aria-expanded="false"
														tabindex="-1" aria-disabled="false"
														aria-labelledby="select2-country-2h-container"
														aria-controls="select2-country-2h-container"><span
															class="select2-selection__rendered"
															id="select2-country-2h-container" role="textbox"
															aria-readonly="true" title="United
																		States">United
															States
															<!--end::Input-->
															<div
																class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
															</div>
															<div
																class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
															</div>
															<div
																class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
															</div>
															<div
																class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
															</div>
															<div
																class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
															</div>
															<div
																class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
															</div>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
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
								<button type="reset" id="kt_modal_add_customer_cancel"
									class="btn btn-light me-3">Descartar</button>
								<!--end::Button-->
								<!--begin::Button-->
								<button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
									<span class="indicator-label">Confirmar</span>
									<span class="indicator-progress">Por favor espere...
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
			<!--end::Modal - Customers - Add-->
			<!--begin::Modal - Adjust Balance-->
			<div class="modal fade" id="kt_customers_export_modal" tabindex="-1" style="display: none;"
				aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bold">Exportar Clientes</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div id="kt_customers_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
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
							<form id="kt_customers_export_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
								action="#">
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Label-->

									<!--end::Label-->
									<!--begin::Input-->
									<div class="fv-row mb-5">
										<label class="fs-5 fw-semibold form-label mb-5">Seleccionar el tipo de
											formato:</label>
										<select id="format" name="format" class="form-select form-select-solid"
											aria-label="Select export format">
											<option value="excel">Excel</option>
											<option value="pdf">PDF</option>
											<option value="csv">CSV</option>
											<option value="zip">ZIP</option>
										</select>
									</div><span class="select2 select2-container select2-container--bootstrap5"
										dir="ltr" data-select2-id="select2-data-16-qpgi" style="width: 100%;"><span
											class="selection"></span><span class="dropdown-wrapper"
											aria-hidden="true"></span></span>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
									<!--begin::Label-->
									<label class="fs-5 fw-semibold form-label mb-5">Seleccionar Fecha:</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-solid flatpickr-input"
										placeholder="Pick a date" name="date" type="hidden" value=""><input
										class="form-control form-control-solid flatpickr-input form-control input"
										placeholder="Pick a date" tabindex="0" type="text" readonly="readonly">

									<!--end::Input-->
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
									<div
										class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
									</div>
								</div>
								<!--end::Input group-->
								<!--begin::Row-->

								<!--end::Row-->
								<!--begin::Actions-->
								<div class="text-center">
									<button type="reset" id="kt_customers_export_cancel"
										class="btn btn-light me-3">Descartar</button>
									<button type="submit" id="kt_customers_export_submit" class="btn btn-primary"
										onclick="redirectToListClient();">
										<span class="indicator-label">Confirmar</span>
										<span class="indicator-progress">Por favor espere...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
										</span>
									</button>
								</div>

								<script>
									
									function redirectToListClient() {
									
										window.location.href = 'ListClient.php'; 
									}
								</script>
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
			<!--end::Modal - New Card-->
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