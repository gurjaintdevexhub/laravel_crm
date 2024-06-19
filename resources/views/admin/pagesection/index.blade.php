@extends('layouts.adminlayout')
@section('title', 'Admin Dashboard')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Card-->
								<div class="card">
									<!--begin::Card body-->
									<div class="card-body pb-0">
										<!--begin::Heading-->
										<div class="card-px d-flex justify-content-between">
											<!--begin::Title-->
											<h2 class="mb-2">ADD Page Section </h2>
											<!-- <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add New Page</a> -->
											<!--end::Action-->
										</div>
										<!--end::Heading-->
									</div>
									<hr>

									<div class="card-body pt-0">
										<div class="card-body pb-0">
										<form id="createsection" class="form" method="POST" enctype="multipart/form-data">
													@csrf
										<div class="mb-3">
										  <select class="form-select" aria-label="Default select example" name="pageId" id="pageId" required>
											  <option selected>Select Page</option>
											  @foreach($pages as $page)
											   <option value="{{ $page->id }}">{{ $page->title }}</option>
											  @endforeach
											</select>
										</div>
										<div class="mb-3">
										  <select class="form-select" aria-label="Default select example" name="type" id="type" required>
											  <option selected>Section Type</option>
											  <option value="content">Center Content</option>
											  <option value="contentwithbg">Center Content with background Image</option>
											  <option value="leftcontent">left Content Right Image</option>
											  <option value="rightcontent">Right Content with Left Image</option>
											  <option value="form">Form</option>
											</select>
										</div>
										<div class="mb-3">
										  <label for="exampleFormControlInput1" class="form-label">Section Heading</label>
										  <input type="text" id="heading" name="heading" class="form-control" placeholder="Section Heading" required />
										</div>
										<div class="mb-3">
										  <label for="exampleFormControlInput1" class="form-label">Content</label>
										  <textarea id="content" name="content" class="form-control" required></textarea>
										</div>
										<div class="mb-3">
										  <label for="exampleFormControlInput1" class="form-label">Section Status</label>
										  <label class="form-check form-switch form-check-custom form-check-solid">
												            <input class="form-check-input bg-dark border-dark" type="checkbox" name="status" id="status" value="1" checked="checked" />
												            <span class="form-check-label fw-bold text-muted">Active</span>
												        </label>
										</div>
										<div id="formFields" class="mb-3" style="display: none;">
											<label class="form-label">Form Fields</label>
											<div id="formFieldsContainer">
												<!-- Form Fields will be appended here -->
											</div>
											<button type="button" class="btn btn-secondary" id="addFormField">Add Form Field</button>
										</div>
										<div class="mb-3">
										  <label for="exampleFormControlTextarea1" class="form-label">Background Image</label>
										  <input type="file" class="form-control" id="background_image" name="background_image" >
										</div>

										<div class="mb-3">
										  <label for="exampleColorInput" class="form-label">Background Color</label>
										  <input type="color" class="form-control form-control-color" id="exampleColorInput" name="exampleColorInput" value="#563d7c" title="Choose your color">
										</div>
										<input type="submit" class="btn btn-dark" value="ADD Section">
									</form>
									</div>
									</div>

									<hr>
									<div class="card-body pt-0">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
											<!--begin::Table head-->
											<thead>
												<!--begin::Table row-->
												<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
													<th class="min-w-125px text-dark">Page</th>
													<th class="min-w-125px text-dark">Section Heading</th>
													<th class="min-w-125px text-dark">Section Content</th>
													<th class="min-w-125px text-dark">Status</th>
													<th class="text-end min-w-100px text-dark">Actions</th>
												</tr>
												<!--end::Table row-->
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody class="fw-bold text-gray-600">
												@foreach($pagesections as $pagesection)
												<tr>
													<td>{{ $pagesection->page->title }}</td>
													<td>{{ $pagesection->heading }}</td>
													<td>{{ $pagesection->content }}</td>
													<td>
													    <div class="form-check form-switch">
													        <input class="form-check-input checkpage bg-dark border-dark " type="checkbox" data-id="{{ $pagesection->id }}" id="flexSwitchCheck{{ $loop->iteration }}" {{ $pagesection->status ? 'checked' : '' }}>
													    </div>
													</td>
													<td class="text-end">
														<button class="btn btn-primary m-1 p-5 editpage" data-id="{{ $pagesection->id }}">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</button>
														<button class="btn btn-danger m-1 p-5 deletepage" data-id="{{ $pagesection->id }}">
															<i class="fa fa-trash-o " aria-hidden="true"></i>
														</button>
													</td>
													<!--end::Action=-->
												</tr>
												@endforeach
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>


									<!--end::Card body-->
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>



					<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header bg-success text-center">
					        <h5 class="modal-title text-light" id="successModalLabel">Success</h5>
					      </div>
					      <div class="modal-body">
					        <div class="text-center" id="successMessage">oooooooooooooo!</div>
					      </div>
					    </div>
					  </div>
					</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#type').change(function() {
        var selectedType = $(this).val();
        if (selectedType === 'form') {
            $('#formFields').show();
        } else {
            $('#formFields').hide();
        }
    });

    // Add new form field
    $('#addFormField').click(function() {
        var formFieldHtml = `
            <div class="form-group row">
                <div class="col-md-5">
                    <input type="text" class="form-control field-name" placeholder="Field Name" required>
                </div>
                <div class="col-md-5">
                    <select class="form-control field-type" required>
                        <option value="text">Text</option>
                        <option value="email">Email</option>
                        <option value="number">Number</option>
                        <option value="checkbox">Checkbox</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger removeField">Remove</button>
                </div>
            </div>`;
        $('#formFieldsContainer').append(formFieldHtml);
    });

    // Remove form field
    $(document).on('click', '.removeField', function() {
        $(this).closest('.form-group').remove();
    });

    $('#createsection').on('submit', function(e) {
        e.preventDefault();
        
        var formData = new FormData(this);
        var formFields = [];

        // Collect form fields
        $('#formFieldsContainer .form-group').each(function(index) {
            var fieldName = $(this).find('.field-name').val();
            var fieldType = $(this).find('.field-type').val();
            
            if (fieldName && fieldType) {
                formFields.push({
                    name: fieldName,
                    type: fieldType
                });
            }
        });

        // Append JSON stringified formFields array to formData
        formData.append('formFields', JSON.stringify(formFields));
        
        $.ajax({
            type: 'POST',
            url: '{{ route("createpagesection") }}',
            data: formData,
            processData: false, 
            contentType: false, 
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                $('#successMessage').text(response.message); 
                $('#successModal').modal('show'); 
                setTimeout(function() {
                    $('#successModal').modal('hide');
                }, 2000); 
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                $('#successMessage').text('Error occurred: ' + xhr.responseText);
            }
        });
    });
});

</script>

