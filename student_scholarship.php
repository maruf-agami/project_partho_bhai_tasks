<!-- <?php include_once "sessioncheck.php" ?> -->
<!doctype html>
<html lang="en">

<head>
	<!-- <?php include_once dirname(dirname(__FILE__)) . "/shared/layout/header.php"; ?> -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

	<script type="text/javascript" src="../js/select_elem_data_load.js"></script>
	<script type="text/javascript" src="../js/basic_crud_type_1.js"></script>
</head>

<body>
	<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
		<!-- <?php include_once("navbar.php"); ?> -->

		<div class="app-main">
			<!-- <?php include_once("sidebar.php"); ?> -->

			<div class="app-main__outer">
				<div class="app-main__inner">

					<!-- STUDENT SCHOLARSHIP CARD -->
					<div id="student_scholarship_card" class="card mb-3">
						<div class="card-header justify-content-between">
							<h5 class="font-weight-bold">Student Scholarship</h5>
							<button class="add_button btn btn-primary btn-sm rounded-pill px-3 custom_shadow" type="button">
								<i class="fa fa-plus-circle mr-1"></i> Add
							</button>
						</div>
						<div class="card-body">
							<form class="filter_form">
								<fieldset class="custom_fieldset pb-0">
									<legend class="legend-label">Student Scholarship Filter Form</legend>

									<div class="row">
										<div class="col-md-6 col-xl-4">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text shadow-sm">Limit</span>
												</div>
												<select name="limit" class="form-control shadow-sm">
													<option value="10">10</option>
													<option value="25">25</option>
													<option value="50">50</option>
												</select>
											</div>
										</div>

										<div class="col-md-6 col-xl-4">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text shadow-sm">Scholarship</span>
												</div>
												<select name="scholarshipno" class="form-control shadow-sm" required>
													<option value="-1">All...</option>
												</select>
											</div>
										</div>

										<div class="col-md-6 col-xl-4">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text shadow-sm">Course Level</span>
												</div>
												<select name="courselevelno" class="form-control shadow-sm">
													<option value="-1">All...</option>
												</select>
											</div>
										</div>

										<div class="col-md-6 col-xl-4">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text shadow-sm">Group</span>
												</div>
												<select name="groupno" class="form-control shadow-sm">
													<option value="-1">All...</option>
												</select>
											</div>
										</div>

										<div class="col-md-6 col-xl-4">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text shadow-sm">Academic Year</span>
												</div>
												<input name="academicyear" class="form-control shadow-sm" type="text" placeholder="Academic Year...">
											</div>
										</div>

										<div class="col-md-6 col-xl-4">
											<div class="d-flex flex-wrap justify-content-end mb-3">
												<button class="btn btn-primary font-weight-bold rounded-pill px-4 custom_shadow mx-1" type="submit">
													<i class="fa fa-search mr-1"></i> Search
												</button>
												<button class="btn btn-warning font-weight-bold rounded-pill px-4 custom_shadow mx-1" type="reset">
													<i class="fa fa-history mr-1"></i> Reset
												</button>
											</div>
										</div>
									</div>
								</fieldset>
							</form>

							<div class="table-responsive shadow-sm rounded my-3">
								<table class="table table-sm table-striped table-bordered table-hover text-center mb-0">
									<thead class="table-primary">
										<tr>
											<th>SL No</th>
											<th>Student</th>
											<th>Scholarship</th>
											<th>Start Date</th>
											<th>Duration (Month)</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody id="student_scholarship_tbody"> </tbody>
								</table>
							</div>

							<div class="card rounded-pill">
								<div class="card-body p-1" style="font-size:24px">
									<div class="d-flex justify-content-between">
										<div class="previous_page pagination-button rounded-pill">
											<i class="fa fa-arrow-left mb-2"></i>
										</div>
										<div class="pagination-pageno rounded-pill">
											<div class="pageno_div font-weight-bold mt-2" style="font-size:16px;">Page: 1</div>
											<input class="pageno_input text-primary text-center form-control rounded-pill p-0 m-0 border-0" style="display:none;font-size:16px;" type="text" value="1" placeholder="Enter Page No">
										</div>
										<div class="next_page pagination-button rounded-pill">
											<i class="fa fa-arrow-right mb-2"></i>
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

	<!-- MODAL -->

	<!-- STUDENT SCHOLARSHIP MODAL -->
	<div id="student_scholarship_modal" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form class="setup_form">
					<div class="modal-header">
						<h5 class="modal-title">Setup Student Scholarship</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label class="d-block mb-0">
								Student <span class="text-danger">*</span>
								<div class="mt-2"></div>
								<select name="stdno" class="form-control shadow-sm" required></select>
							</label>
						</div>

						<div class="form-group">
							<label class="d-block mb-0">
								Scholarship <span class="text-danger">*</span>
								<select name="scholarshipno" class="form-control shadow-sm mt-2" required></select>
							</label>
						</div>

						<div class="form-group">
							<label class="d-block mb-0">
								Start Date <span class="text-danger">*</span>
								<input name="startdate" class="form-control shadow-sm mt-2" type="date" required>
							</label>
						</div>

						<div class="form-group">
							<label class="d-block mb-0">
								Duration (Month)
								<input name="duration" class="form-control shadow-sm mt-2" type="text" placeholder="Duration (Month)...">
							</label>
						</div>
					</div>
					<div class="modal-footer py-2">
						<button type="submit" class="btn btn-primary rounded-pill px-4 custom_shadow">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-----------------------
	// STUDENT SCHOLARSHIP //
	------------------------>
	<script>
		$(function() {
			$(`#student_scholarship_modal .setup_form [name="stdno"]`)
				.select2({
					placeholder: "Select Student...",
					allowClear: true,
					width: `100%`,
					ajax: {
						url: "php/ui/studentscholarship/list_studentnames.php",
						dataType: 'json',
						type: "POST",
						data: function(params) {
							return {
								search_key: params.term,
								pageno: params.page || 1
							};
						},
						cache: false
					}
				})
				.val(null)
				.trigger("change");

			const scholarshipsLoad = new SelectElemDataLoad({
				readURL: `php/ui/studentscholarship/get_all_scholarships.php`,
				targets: [{
					selectElem: `#student_scholarship_card .filter_form [name="scholarshipno"]`,
					defaultOptionText: `All...`,
					defaultOptionValue: `-1`
				}, {
					selectElem: `#student_scholarship_modal .setup_form [name="scholarshipno"]`
				}],
				optionText: `title`,
				optionValue: `scholarshipno`
			});

			const cousrelevelsLoad = new SelectElemDataLoad({
				readURL: `php/ui/courselevel/get_all_cousrelevels.php`,
				targets: [{
					selectElem: `#student_scholarship_card .filter_form [name="courselevelno"]`,
					defaultOptionText: `All...`,
					defaultOptionValue: `-1`
				}],
				optionText: `courseleveltitle`,
				optionValue: `courselevelno`
			});

			const groupsLoad = new SelectElemDataLoad({
				readURL: `php/ui/group/get_all_groups.php`,
				targets: [{
					selectElem: `#student_scholarship_card .filter_form [name="groupno"]`,
					defaultOptionText: `All...`,
					defaultOptionValue: `-1`
				}],
				optionText: `grouptitle`,
				optionValue: `groupno`
			});

			class StudentScholarship extends BasicCRUD {
				show(data) {
					let thisObj = this;
					let limit = $(`[name="limit"]`, this.filterForm).val();
					let slno = (Number(this.pageno) - 1) * Number(limit) + 1;

					$.each(data, (index, value) => {
						let template = $(`<tr class="${(value.isactive == 1) ? `table-success` : `table-danger`}">
								<td>${slno + index}</td>
								<td>${value.name}</td>
								<td>${value.scholarshiptitle}</td>
								<td>${value.startdate}</td>
								<td>${value.duration}</td>
								<td>
									${(value.isactive == 1) ?
										`<div class="badge badge-success mb-2">Active</div>
										<button class="activation_button btn btn-sm btn-danger font-weight-bold rounded-pill px-3 custom_shadow" type="button">Deactivate</button>` :
										`<div class="badge badge-danger mb-2">Inactive</div>
										<button class="activation_button btn btn-sm btn-success font-weight-bold rounded-pill px-3 custom_shadow" type="button">Activate</button>`
									}
								</td>
								<td>
									<div class="d-flex justify-content-center p-0">
										<button class="edit_button btn btn-sm btn-info rounded-circle custom_shadow m-1" type="button" title="Edit ${this.topic}">
											<i class="fas fa-edit"></i>
										</button>
										<button class="delete_button btn btn-sm btn-danger rounded-circle custom_shadow m-1" type="button" title="Delete ${this.topic}">
											<i class="fas fa-trash"></i>
										</button>
									</div>
								</td>
							</tr>`)
							.data(value)
							.appendTo(this.targetContainer);

						(function($) {
							$(`.activation_button`, template).click((e) => {
								if (confirm("Are you sure you want to change this status?")) {
									update_activation_status_student_scholarship({
										skipno: value.skipno,
										isactive: (value.isactive == 1) ? 0 : 1
									});
								}
							});

							$(`.edit_button`, template).click((e) => {
								thisObj.setupModal.modal(`show`).find(`.modal-title`).html(`Update ${thisObj.topic}`);
								thisObj.setupForm.data(thisObj.tablePK, value[thisObj.tablePK]);

								$(`[name]`, thisObj.setupForm).each((i, elem) => {
									let elementName = $(elem).attr("name");
									if (value[elementName] != null) {
										$(elem).val(value[elementName]);
									}
								});

								let stdSelect = $(`[name="stdno"]`, thisObj.setupForm);

								if (stdSelect.find(`option[value='${value.stdno}']`).length == 0) {
									stdSelect.append(new Option(value.name, value.stdno, true, true));
								}
								stdSelect.val(value.stdno).trigger("change");
							});

							thisObj.deleteButtonTrigger(template, value);
						})(jQuery);
					});
				}
			}

			const studentScholarship = new StudentScholarship({
				readURL: `php/ui/studentscholarship/get_studentscholarship_info.php`,
				createURL: `php/ui/studentscholarship/setup_studentscholarship.php`,
				updateURL: `php/ui/studentscholarship/setup_studentscholarship.php`,
				deleteURL: `php/ui/studentscholarship/remove_studentscholarship.php`,
				targetCard: `#student_scholarship_card`,
				targetContainer: `#student_scholarship_tbody`,
				pagination: true,
				setupModal: `#student_scholarship_modal`,
				topic: `Student Scholarship`,
				tablePK: `skipno`
			});

			studentScholarship.get();

			function update_activation_status_student_scholarship(json) {
				$.post(`php/ui/studentscholarship/toggle_studentscholarship_status.php`, json, resp => {
					if (resp.error) {
						toastr.error(resp.message);
					} else {
						toastr.success(resp.message);
						studentScholarship.get();
					}
				}, `json`);
			}
		});
	</script>

</body>

</html>