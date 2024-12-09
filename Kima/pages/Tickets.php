<?php
$title = "Tickets"; // Título dinámico
include '../layout.php'; // Asegúrate de que la ruta sea correcta
?>
<html lang="en">

<body>
	<!--begin::Item-->
    <li class="breadcrumb-item text-muted">Tickets</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->

								<!--end::Actions-->
							</div>
							<!--end::Toolbar container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Content-->
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-xxl">
								<!--begin::Hero card-->
								<div class="card mb-12">
									<!--begin::Hero body-->
									<div class="card-body flex-column p-5">
										<!--begin::Hero content-->

										<!--end::Hero content-->
										<!--begin::Hero nav-->
										<div class="card-rounded bg-light d-flex flex-stack flex-wrap p-5">
											<!--begin::Nav-->

											<!--end::Nav-->
											<!--begin::Action-->
											<a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_new_ticket"
												class="btn btn-primary fw-bold fs-8 fs-lg-base">Crear Ticket</a>
											<!--end::Action-->
										</div>
										<!--end::Hero nav-->
									</div>
									<!--end::Hero body-->
								</div>
								<!--end::Hero card-->
								<!--begin::Card-->
								<div class="card">
									<!--begin::Card body-->
									<!-- Historial de Tickets -->
									<div class="card">
										<div class="card-body">
											<h1 class="text-gray-900 mb-10">Historial de Tickets</h1>
											<div id="ticket-list">
												<p class="text-muted">No hay tickets creados aún.</p>
											</div>
										</div>
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
								<!--begin::Modal - Support Center - Create Ticket-->
								<div class="modal fade" id="kt_modal_new_ticket" tabindex="-1" style="display: none;"
									data-select2-id="select2-data-kt_modal_new_ticket" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-750px">
										<!--begin::Modal content-->
										<div class="modal-content rounded">
											<!--begin::Modal header-->
											<div class="modal-header pb-0 border-0 justify-content-end">
												<!--begin::Close-->
												<div class="btn btn-sm btn-icon btn-active-color-primary"
													data-bs-dismiss="modal">
													<i class="ki-duotone ki-cross fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Close-->
											</div>
											<!--begin::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15"
												data-select2-id="select2-data-78-17mw">
												<!--begin:Form-->
												<form id="kt_modal_new_ticket_form"
													class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#"
													data-select2-id="select2-data-kt_modal_new_ticket_form">
													<!--begin::Heading-->
													<div class="mb-13 text-center">
														<!--begin::Title-->
														<h1 class="mb-3">Crear Ticket</h1>
														<!--end::Title-->
														<!--begin::Description-->
														<!--end::Description-->
													</div>
													<!--end::Heading-->
													<!--begin::Input group-->
													<div
														class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
														<!--begin::Label-->
														<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
															<span class="required">ID Ticket</span>
															<span class="ms-2" data-bs-toggle="tooltip"
																aria-label="Specify a subject for your issue"
																data-bs-original-title="Specify a subject for your issue"
																data-kt-initialized="1">
																<i class="ki-duotone ki-information fs-7">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</label>
														<!--end::Label-->
														<input type="text" class="form-control form-control-solid"
															placeholder="Introduce el ID del Ticket" name="subject">
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
													<div class="row g-9 mb-8" data-select2-id="select2-data-77-3pi0">
														<!--begin::Col-->
														<div class="col-md-6 fv-row"
															data-select2-id="select2-data-84-unrx">
															<label class="required fs-6 fw-semibold mb-2">Tipo de
																Producto</label>
															<select
																class="form-select form-select-solid select2-hidden-accessible"
																data-control="select2" data-hide-search="true"
																data-placeholder="Selección del Producto" name="product"
																data-select2-id="select2-data-9-r3ao" tabindex="-1"
																aria-hidden="true" data-kt-initialized="1">
																<option value="" data-select2-id="select2-data-11-828k">
																	Select a product...</option>
																<option value="1"
																	data-select2-id="select2-data-71-clfk">Sedal
																</option>
																<option value="1"
																	data-select2-id="select2-data-72-t9lm">Dove</option>
																<option value="1"
																	data-select2-id="select2-data-73-29pg">Head and
																	Shoulders</option>
															</select><span
																class="select2 select2-container select2-container--bootstrap5 select2-container--below"
																dir="ltr" data-select2-id="select2-data-1-g8qf"
																style="width: 100%;"><span class="selection"><span
																		class="select2-selection select2-selection--single form-select form-select-solid"
																		role="combobox" aria-haspopup="true"
																		aria-expanded="false" tabindex="-1"
																		aria-disabled="false"
																		aria-labelledby="select2-product-3b-container"
																		aria-controls="select2-product-3b-container"><span
																			class="select2-selection__rendered"
																			id="select2-product-3b-container"
																			role="textbox" aria-readonly="true"
																			title="Selección del Producto"><span
																				class="select2-selection__placeholder">Selección
																				del Producto</span></span><span
																			class="select2-selection__arrow"
																			role="presentation"><b
																				role="presentation"></b></span></span></span><span
																	class="dropdown-wrapper"
																	aria-hidden="true"></span></span>
														</div>
														<div class="col-md-6 fv-row fv-plugins-icon-container"
															data-select2-id="select2-data-86-d10d">
															<label
																class="required fs-6 fw-semibold mb-2">Responsable</label>
															<select
																class="form-select form-select-solid select2-hidden-accessible"
																data-control="select2" data-hide-search="true"
																data-placeholder="Select a Team Member" name="user"
																data-select2-id="select2-data-12-bxcy" tabindex="-1"
																aria-hidden="true" data-kt-initialized="1">
																<option value="" data-select2-id="select2-data-14-d06i">
																	Select a user...</option>
																<option value="1"
																	data-select2-id="select2-data-87-7hlq">Karina Clark
																</option>
																<option value="2"
																	data-select2-id="select2-data-88-s3r9">Robert Doe
																</option>
																<option value="3"
																	data-select2-id="select2-data-89-ewdx">Niel Owen
																</option>
																<option value="4"
																	data-select2-id="select2-data-90-jzqp">Olivia Wild
																</option>
																<option value="5"
																	data-select2-id="select2-data-91-1y82">Sean Bean
																</option>
															</select><span
																class="select2 select2-container select2-container--bootstrap5 select2-container--below"
																dir="ltr" data-select2-id="select2-data-2-a20z"
																style="width: 100%;"><span class="selection"><span
																		class="select2-selection select2-selection--single form-select form-select-solid"
																		role="combobox" aria-haspopup="true"
																		aria-expanded="false" tabindex="-1"
																		aria-disabled="false"
																		aria-labelledby="select2-user-9b-container"
																		aria-controls="select2-user-9b-container"><span
																			class="select2-selection__rendered"
																			id="select2-user-9b-container"
																			role="textbox" aria-readonly="true"
																			title="Select a Team Member"><span
																				class="select2-selection__placeholder">Select
																				a Team Member</span></span><span
																			class="select2-selection__arrow"
																			role="presentation"><b
																				role="presentation"></b></span></span></span><span
																	class="dropdown-wrapper"
																	aria-hidden="true"></span></span>
															<div
																class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
															</div>
														</div>
														<div class="col-md-6 fv-row"
															data-select2-id="select2-data-76-ruob">
															<label class="required fs-6 fw-semibold mb-2">Estado del
																Ticket</label>
															<select
																class="form-select form-select-solid select2-hidden-accessible"
																data-control="select2" data-placeholder="Open"
																data-hide-search="true"
																data-select2-id="select2-data-15-xdir" tabindex="-1"
																aria-hidden="true" data-kt-initialized="1">
																<option value="" data-select2-id="select2-data-79-rjhu">
																</option>
																<option value="1" selected="selected"
																	data-select2-id="select2-data-17-bp7z">Open</option>
																<option value="2"
																	data-select2-id="select2-data-80-kgrl">Pending
																</option>
																<option value="3"
																	data-select2-id="select2-data-81-60r4">Resolved
																</option>
																<option value="4"
																	data-select2-id="select2-data-82-bj0a">Closed
																</option>
															</select><span
																class="select2 select2-container select2-container--bootstrap5 select2-container--below"
																dir="ltr" data-select2-id="select2-data-3-kt8s"
																style="width: 100%;"><span class="selection"><span
																		class="select2-selection select2-selection--single form-select form-select-solid select2-selection--clearable"
																		role="combobox" aria-haspopup="true"
																		aria-expanded="false" tabindex="-1"
																		aria-disabled="false"
																		aria-labelledby="select2-9hgj-container"
																		aria-controls="select2-9hgj-container"><button
																			type="button"
																			class="select2-selection__clear"
																			tabindex="-1" title="Remove all items"
																			aria-label="Remove all items"
																			aria-describedby="select2-9hgj-container"
																			data-select2-id="select2-data-4-4znl"><span
																				aria-hidden="true">×</span></button><span
																			class="select2-selection__rendered"
																			id="select2-9hgj-container" role="textbox"
																			aria-readonly="true"
																			title="Open">Open</span><span
																			class="select2-selection__arrow"
																			role="presentation"><b
																				role="presentation"></b></span></span></span><span
																	class="dropdown-wrapper"
																	aria-hidden="true"></span></span>
														</div>

														<!-- Scripts -->
														<script
															src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
														<script
															src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
														<link
															href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css"
															rel="stylesheet">

														<script>
															$(document).ready(function () {
																// Inicializar Select2 en los selectores que lo requieran
																$('[data-control="select2"]').select2({
																	placeholder: function () {
																		return $(this).data('placeholder');
																	},
																	minimumResultsForSearch: Infinity,
																	allowClear: true
																});

																// Manejar el envío del formulario para agregar tickets al historial
																$('#kt_modal_new_ticket_form').on('submit', function (e) {
																	e.preventDefault();

																	// Obtener datos del formulario
																	const id = $('#ticket-id').val();
																	const product = $('#ticket-product').val();
																	const responsible = $('#ticket-responsible').val();
																	const status = $('#ticket-status').val();
																	const date = $('#ticket-date').val();
																	const description = $('#ticket-description').val();

																	// Limpiar mensaje predeterminado
																	const ticketList = $('#ticket-list');
																	if (ticketList.find('.text-muted').length) {
																		ticketList.html('');
																	}

																	// Crear un nuevo ticket en el historial
																	const ticket = `
			                                                    	<div class="border rounded p-4 mb-4 bg-light">
					                                                <h4 class="text-primary mb-2">ID: ${id}</h4>
					                                                <p><strong>Producto:</strong> ${product}</p>
					                                                <p><strong>Responsable:</strong> ${responsible}</p>
					                                                <p><strong>Estado:</strong> ${status}</p>
					                                                <p><strong>Fecha:</strong> ${date}</p>
					                                                 <p><strong>Descripción:</strong> ${description}</p>
				                                                    </div>
			                                                           `;
																	ticketList.append(ticket);

																	// Cerrar el modal y resetear formulario
																	$('#kt_modal_new_ticket').modal('hide');
																	this.reset();
																});
															});
														</script>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-md-6 fv-row fv-plugins-icon-container">
														<label class="required fs-6 fw-semibold mb-2">Fecha de
															realización</label>
														<!--begin::Input-->
														<div class="position-relative d-flex align-items-center">
															<!--begin::Icon-->
															<div class="symbol symbol-20px me-4 position-absolute ms-4">
																<span class="symbol-label bg-secondary">
																	<i class="ki-duotone ki-element-11">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</span>
															</div>
															<!--end::Icon-->
															<!--begin::Datepicker-->
															<input
																class="form-control form-control-solid ps-12 flatpickr-input"
																placeholder="Seleccionar Fecha" name="due_date"
																type="text" readonly="readonly">
															<!--end::Datepicker-->
														</div>
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
													</div>
													<!--end::Col-->
												</form>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
												<label class="fs-6 fw-semibold mb-2">Descripcion del
													Ticket</label>
												<textarea class="form-control form-control-solid" rows="4"
													name="description"
													placeholder="Realiza una descripción del Ticket"></textarea>
												<div
													class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
												</div>
												<div
													class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
												</div>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<label class="fs-6 fw-semibold mb-2">Subir documento</label>
												<!--begin::Dropzone-->
												<div class="dropzone dz-clickable"
													id="kt_modal_create_ticket_attachments">
													<!--begin::Message-->
													<div class="dz-message needsclick align-items-center">
														<!--begin::Icon-->
														<i class="ki-duotone ki-file-up fs-3hx text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<!--end::Icon-->
														<!--begin::Info-->
														<div class="ms-4">
															<h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop
																files here or click to upload.</h3>
															<span class="fw-semibold fs-7 text-gray-500">Upload
																up to 10 files</span>
														</div>
														<!--end::Info-->
													</div>
												</div>
												<!--end::Dropzone-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->

											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="text-center">
												<button type="reset" id="kt_modal_new_ticket_cancel"
													class="btn btn-light me-3">Cancelar</button>
												<button type="submit" id="kt_modal_new_ticket_submit"
													class="btn btn-primary">
													<span class="indicator-label">Confirmar</span>
													<span class="indicator-progress">Por favor espere...
														<span
															class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
											</div>
											<!--end::Actions-->

											<!--end:Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Support Center - Create Ticket-->
						</div>
						<!--end::Content container-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Content wrapper-->
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