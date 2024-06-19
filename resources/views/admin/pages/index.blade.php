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
											<h2 class="mb-2">New Page Modal </h2>
											<a href="#" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add New Page</a>
											<!--end::Action-->
										</div>
										<!--end::Heading-->
									</div>
									<hr>

									<div class="card-body pt-0">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
											<!--begin::Table head-->
											<thead>
												<!--begin::Table row-->
												<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
													<th class="min-w-125px text-dark">Page Title</th>
													<th class="min-w-125px text-dark">Page Slug</th>
													<th class="min-w-125px text-dark">Content</th>
													<th class="min-w-125px text-dark">Status</th>
													<th class="text-end min-w-100px text-dark">Actions</th>
												</tr>
												<!--end::Table row-->
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody class="fw-bold text-gray-600">
												@foreach($pages as $page)
												<tr>
													<td>{{ $page->title }}</td>
													<td>{{ $page->slug }}</td>
													<td>{{ $page->content }}</td>
													<td>
													    <div class="form-check form-switch">
													        <input class="form-check-input checkpage bg-dark border-dark" type="checkbox" data-id="{{ $page->id }}" id="flexSwitchCheck{{ $loop->iteration }}" {{ $page->active ? 'checked' : '' }}>
													    </div>
													</td>
													<td class="text-end">
														<button class="btn btn-primary m-1 p-5 editpage" data-id="{{ $page->id }}">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</button>
														<button class="btn btn-danger m-1 p-5 deletepage" data-id="{{ $page->id }}">
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
								<!--begin::Modal - New Target-->
								<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content rounded">
											<!--begin::Modal header-->
											<div class="modal-header pb-0 border-0 justify-content-end">
												<!--begin::Close-->
												<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Close-->
											</div>
											<!--begin::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
												<!--begin:Form-->
												<form id="createForm" class="form" method="POST">
													@csrf
												    <div class="mb-13 text-center">
												        <h1 class="mb-3">Create Page</h1>
												    </div>
												    <div id="successMessage text-success"></div>
													<input type="hidden" id="pageId" name="page_id" value="">

												    <!-- Page Title -->
												    <div class="d-flex flex-column mb-8 fv-row">
												        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
												            <span class="required">Page Title</span>
												            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
												        </label>
												        <input type="text" class="form-control form-control-solid" placeholder="Enter Page Title" name="pageTitle" id="pageTitle" required />
												    </div>

												    <!-- Page Content -->
												    <div class="d-flex flex-column mb-8 fv-row">
												        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
												            <span class="required">Page Content</span>
												            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify content for the page"></i>
												        </label>
												        <textarea class="form-control form-control-solid" placeholder="Enter Page Content" name="pageContent" id="pageContent" required></textarea>
												    </div>

												    <!-- Page Slug -->
												    <div class="d-flex flex-column mb-8 fv-row">
												        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
												            <span class="required">Page Slug</span>
												            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a unique slug for URL"></i>
												        </label>
												        <input type="text" class="form-control form-control-solid" placeholder="Enter Page Slug" name="pageSlug" id="pageSlug" required />
												    </div>

												    <!-- Page Status -->
												    <div class="d-flex flex-stack mb-8">
												        <div class="me-5">
												            <label class="fs-6 fw-bold">Page Status</label>
												        </div>
												        <label class="form-check form-switch form-check-custom form-check-solid">
												            <input class="form-check-input bg-dark border-dark" type="checkbox" name="status" id="status" value="1" checked="checked" />
												            <span class="form-check-label fw-bold text-muted">Active</span>
												        </label>
												    </div>

												    <!-- Actions -->
												    <div class="text-center">
												        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-danger me-3">Cancel</button>
												        <button type="submit" id="submitButton" value="" class="btn btn-dark">Submit</button>
												    </div>
												</form>

												<!--end:Form-->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - New Target-->
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
// Handle Edit and Create actions in a single form
$(document).ready(function() {
    $('.editpage').on('click', function() {
        var page_id = $(this).data('id');
        $.ajax({
            type: 'GET',
            url: '{{ route("editpage", ["page_id" => "__page_id__"]) }}'.replace('__page_id__', page_id),
            success: function(response) {
                if (response.status === 'success') {
                    // Populate the form fields
                    $('#pageTitle').val(response.data.title);
                    $('#pageContent').val(response.data.content);
                    $('#pageSlug').val(response.data.slug);
                    $('#pageId').val(response.data.id);
                    if (response.data.active === 1) {
                        $('#status').prop('checked', true);
                    } else {
                        $('#status').prop('checked', false);
                    }
                    $('#submitButton').text('Update');
                    $('#createForm').attr('action', '{{ route("updatepage", ["page_id" => "__page_id__"]) }}'.replace('__page_id__', page_id));
                    $('#createForm').attr('method', 'POST');
                    $('#kt_modal_new_target').modal('show');
                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function(xhr) {
                alert('Error: ' + xhr.responseText);
                console.error(xhr.responseText);
            }
        });
    });

    // Handle form submission for both create and update
    $('#createForm').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        var pageId = $('#pageId').val();

        var method = pageId ? 'PUT' : 'POST';
        var url = pageId ? '{{ route("updatepage", ["page_id" => "__page_id__"]) }}'.replace('__page_id__', pageId) : '{{ route("createpage") }}';

        $.ajax({
            type: method,
            url: url,
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
			success: function(response) {
                $('#successMessage').text(response.message);
				$('#kt_modal_new_target').modal('hide');
                $('#successModal').modal('show'); 
                setTimeout(function() {
                    $('#successModal').modal('hide');
                    location.reload();
                }, 2000); 
            },
            error: function(xhr) {
                alert('Error: ' + xhr.responseText);
            }
        });
    });
});




// Update Status
$(document).ready(function(){
    $('.checkpage').change(function(){
        var status = $(this).prop('checked') ? 'active' : 'inactive';
        var page_id = $(this).data('id');
        $.ajax({
            url: '{{ route("pages.updateStatus") }}',
            type: 'PUT',
            data: {
            	 _token : '{{ csrf_token() }}',
                status: status,
                page_id: page_id
            },
            success: function(response) {
                $('#successMessage').text(response.message);
                $('#successModal').modal('show'); 
                setTimeout(function() {
                    $('#successModal').modal('hide');
                    location.reload();
                }, 2000); 
            },
            error: function(xhr) {
                alert('Error: ' + xhr.responseText);
            }
        });
    });
});



// Delete Page
$(document).ready(function(){
    $('.deletepage').click(function(){
        var page_id = $(this).data('id');
        $.ajax({
            url: '{{ route("deletepage", ["page_id" => "__page_id__"]) }}'.replace('__page_id__', page_id),
            type: 'DELETE',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                $('#successMessage').text(response.message);
                $('#successModal').modal('show'); 
                setTimeout(function() {
                    $('#successModal').modal('hide');
                }, 2000); 
            },
            error: function(xhr) {
                alert('Error: ' + xhr.responseText);
            }
        });
    });
});



</script>
