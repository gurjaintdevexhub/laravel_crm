	<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Aside Toolbarl-->
					<div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
						<!--begin::User-->
						<div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
							<!--begin::Symbol-->
							<div class="symbol symbol-50px">
								<img src="{{ asset('assets/media/avatars/150-26.jpg') }}" alt="" />
							</div>
							<!--end::Symbol-->
							<!--begin::Wrapper-->
							<div class="aside-user-info flex-row-fluid flex-wrap ms-5">
								<!--begin::Section-->
								<div class="d-flex">
									<!--begin::Info-->
									<div class="flex-grow-1 me-2">
										<!--begin::Username-->
										<a href="#" class="text-white text-hover-primary fs-6 fw-bold">{{ $user->name}}</a>
										<!--end::Username-->
										<!--begin::Description-->
										<span class="text-gray-600 fw-bold d-block fs-8 mb-1">{{ $user->email }}</span>
										<!--end::Description-->
										<!--begin::Label-->
										<div class="d-flex align-items-center text-success fs-9">
										<span class="bullet bullet-dot bg-success me-1"></span>online</div>
										<!--end::Label-->
									</div>
									<!--end::Info-->
									<!--begin::User menu-->
									<div class="me-n2">
										<!--begin::Action-->
										<a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
											<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
											<span class="svg-icon svg-icon-muted svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
													<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img alt="Logo" src="{{ asset('assets/media/avatars/150-26.jpg') }}" />
													</div>
													<!--end::Avatar-->
													<!--begin::Username-->
													<div class="d-flex flex-column">
														<div class="fw-bolder d-flex align-items-center fs-5">Max Smith
														<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
														<a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
													</div>
													<!--end::Username-->
												</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="../../demo8/dist/account/overview.html" class="menu-link px-5">My Profile</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="../../demo8/dist/pages/projects/list.html" class="menu-link px-5">
													<span class="menu-text">My Projects</span>
													<span class="menu-badge">
														<span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
													</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
												<a href="#" class="menu-link px-5">
													<span class="menu-title">My Subscription</span>
													<span class="menu-arrow"></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo8/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo8/dist/account/billing.html" class="menu-link px-5">Billing</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo8/dist/account/statements.html" class="menu-link px-5">Payments</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo8/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator my-2"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3">
															<label class="form-check form-switch form-check-custom form-check-solid">
																<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																<span class="form-check-label text-muted fs-7">Notifications</span>
															</label>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="../../demo8/dist/account/statements.html" class="menu-link px-5">My Statements</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
												<a href="#" class="menu-link px-5">
													<span class="menu-title position-relative">Language
													<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
													<img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('assets/media/flags/united-states.svg') }}" alt="" /></span></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo8/dist/account/settings.html" class="menu-link d-flex px-5 active">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="{{ asset('assets/media/flags/united-states.svg') }}" alt="" />
														</span>English</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo8/dist/account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="{{ asset('assets/media/flags/spain.svg') }}" alt="" />
														</span>Spanish</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo8/dist/account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="{{ asset('assets/media/flags/germany.svg') }}" alt="" />
														</span>German</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo8/dist/account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="{{ asset('assets/media/flags/japan.svg') }}" alt="" />
														</span>Japanese</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo8/dist/account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="{{ asset('assets/media/flags/france.svg') }}" alt="" />
														</span>French</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5 my-1">
												<a href="../../demo8/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="../../demo8/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<div class="menu-content px-5">
													<label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo8/dist/index.html" />
														<span class="pulse-ring ms-n1"></span>
														<span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
													</label>
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
										<!--end::Action-->
									</div>
									<!--end::User menu-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::User-->
						<!--end::Aside user-->
					</div>
					<!--end::Aside Toolbarl-->
					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid">
						<!--begin::Aside Menu-->
						<div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
							<!--begin::Menu-->
							<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
								<div class="menu-item">
									<div class="menu-content pb-5">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link active" href="{{ route('admin.dashboard') }}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Home</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="{{ route('pages') }}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="black" />
													<path d="M19 10.4C19 10.3 19 10.2 19 10C19 8.9 18.1 8 17 8H16.9C15.6 6.2 14.6 4.29995 13.9 2.19995C13.3 2.09995 12.6 2 12 2C11.9 2 11.8 2 11.7 2C12.4 4.6 13.5 7.10005 15.1 9.30005C15 9.50005 15 9.7 15 10C15 11.1 15.9 12 17 12C17.1 12 17.3 12 17.4 11.9C18.6 13 19.9 14 21.4 14.8C21.4 14.8 21.5 14.8 21.5 14.9C21.7 14.2 21.8 13.5 21.9 12.7C20.9 12.1 19.9 11.3 19 10.4Z" fill="black" />
													<path d="M12 15C11 13.1 10.2 11.2 9.60001 9.19995C9.90001 8.89995 10 8.4 10 8C10 7.1 9.40001 6.39998 8.70001 6.09998C8.40001 4.99998 8.20001 3.90005 8.00001 2.80005C7.30001 3.10005 6.70001 3.40002 6.20001 3.90002C6.40001 4.80002 6.50001 5.6 6.80001 6.5C6.40001 6.9 6.10001 7.4 6.10001 8C6.10001 9 6.80001 9.8 7.80001 10C8.30001 11.6 9.00001 13.2 9.70001 14.7C7.10001 13.2 4.70001 11.5 2.40001 9.5C2.20001 10.3 2.10001 11.1 2.10001 11.9C4.60001 13.9 7.30001 15.7 10.1 17.2C10.2 18.2 11 19 12 19C12.6 20 13.2 20.9 13.9 21.8C14.6 21.7 15.3 21.5 15.9 21.2C15.4 20.5 14.9 19.8 14.4 19.1C15.5 19.5 16.5 19.9 17.6 20.2C18.3 19.8 18.9 19.2 19.4 18.6C17.6 18.1 15.7 17.5 14 16.7C13.9 15.8 13.1 15 12 15Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Pages</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="{{ route('pagesection') }}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="black" />
													<path d="M19 10.4C19 10.3 19 10.2 19 10C19 8.9 18.1 8 17 8H16.9C15.6 6.2 14.6 4.29995 13.9 2.19995C13.3 2.09995 12.6 2 12 2C11.9 2 11.8 2 11.7 2C12.4 4.6 13.5 7.10005 15.1 9.30005C15 9.50005 15 9.7 15 10C15 11.1 15.9 12 17 12C17.1 12 17.3 12 17.4 11.9C18.6 13 19.9 14 21.4 14.8C21.4 14.8 21.5 14.8 21.5 14.9C21.7 14.2 21.8 13.5 21.9 12.7C20.9 12.1 19.9 11.3 19 10.4Z" fill="black" />
													<path d="M12 15C11 13.1 10.2 11.2 9.60001 9.19995C9.90001 8.89995 10 8.4 10 8C10 7.1 9.40001 6.39998 8.70001 6.09998C8.40001 4.99998 8.20001 3.90005 8.00001 2.80005C7.30001 3.10005 6.70001 3.40002 6.20001 3.90002C6.40001 4.80002 6.50001 5.6 6.80001 6.5C6.40001 6.9 6.10001 7.4 6.10001 8C6.10001 9 6.80001 9.8 7.80001 10C8.30001 11.6 9.00001 13.2 9.70001 14.7C7.10001 13.2 4.70001 11.5 2.40001 9.5C2.20001 10.3 2.10001 11.1 2.10001 11.9C4.60001 13.9 7.30001 15.7 10.1 17.2C10.2 18.2 11 19 12 19C12.6 20 13.2 20.9 13.9 21.8C14.6 21.7 15.3 21.5 15.9 21.2C15.4 20.5 14.9 19.8 14.4 19.1C15.5 19.5 16.5 19.9 17.6 20.2C18.3 19.8 18.9 19.2 19.4 18.6C17.6 18.1 15.7 17.5 14 16.7C13.9 15.8 13.1 15 12 15Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Page Sections</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="{{ route('forms') }}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="black" />
													<path d="M19 10.4C19 10.3 19 10.2 19 10C19 8.9 18.1 8 17 8H16.9C15.6 6.2 14.6 4.29995 13.9 2.19995C13.3 2.09995 12.6 2 12 2C11.9 2 11.8 2 11.7 2C12.4 4.6 13.5 7.10005 15.1 9.30005C15 9.50005 15 9.7 15 10C15 11.1 15.9 12 17 12C17.1 12 17.3 12 17.4 11.9C18.6 13 19.9 14 21.4 14.8C21.4 14.8 21.5 14.8 21.5 14.9C21.7 14.2 21.8 13.5 21.9 12.7C20.9 12.1 19.9 11.3 19 10.4Z" fill="black" />
													<path d="M12 15C11 13.1 10.2 11.2 9.60001 9.19995C9.90001 8.89995 10 8.4 10 8C10 7.1 9.40001 6.39998 8.70001 6.09998C8.40001 4.99998 8.20001 3.90005 8.00001 2.80005C7.30001 3.10005 6.70001 3.40002 6.20001 3.90002C6.40001 4.80002 6.50001 5.6 6.80001 6.5C6.40001 6.9 6.10001 7.4 6.10001 8C6.10001 9 6.80001 9.8 7.80001 10C8.30001 11.6 9.00001 13.2 9.70001 14.7C7.10001 13.2 4.70001 11.5 2.40001 9.5C2.20001 10.3 2.10001 11.1 2.10001 11.9C4.60001 13.9 7.30001 15.7 10.1 17.2C10.2 18.2 11 19 12 19C12.6 20 13.2 20.9 13.9 21.8C14.6 21.7 15.3 21.5 15.9 21.2C15.4 20.5 14.9 19.8 14.4 19.1C15.5 19.5 16.5 19.9 17.6 20.2C18.3 19.8 18.9 19.2 19.4 18.6C17.6 18.1 15.7 17.5 14 16.7C13.9 15.8 13.1 15 12 15Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Add Forms</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="{{ route('pageBuilder.index') }}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="black" />
													<path d="M19 10.4C19 10.3 19 10.2 19 10C19 8.9 18.1 8 17 8H16.9C15.6 6.2 14.6 4.29995 13.9 2.19995C13.3 2.09995 12.6 2 12 2C11.9 2 11.8 2 11.7 2C12.4 4.6 13.5 7.10005 15.1 9.30005C15 9.50005 15 9.7 15 10C15 11.1 15.9 12 17 12C17.1 12 17.3 12 17.4 11.9C18.6 13 19.9 14 21.4 14.8C21.4 14.8 21.5 14.8 21.5 14.9C21.7 14.2 21.8 13.5 21.9 12.7C20.9 12.1 19.9 11.3 19 10.4Z" fill="black" />
													<path d="M12 15C11 13.1 10.2 11.2 9.60001 9.19995C9.90001 8.89995 10 8.4 10 8C10 7.1 9.40001 6.39998 8.70001 6.09998C8.40001 4.99998 8.20001 3.90005 8.00001 2.80005C7.30001 3.10005 6.70001 3.40002 6.20001 3.90002C6.40001 4.80002 6.50001 5.6 6.80001 6.5C6.40001 6.9 6.10001 7.4 6.10001 8C6.10001 9 6.80001 9.8 7.80001 10C8.30001 11.6 9.00001 13.2 9.70001 14.7C7.10001 13.2 4.70001 11.5 2.40001 9.5C2.20001 10.3 2.10001 11.1 2.10001 11.9C4.60001 13.9 7.30001 15.7 10.1 17.2C10.2 18.2 11 19 12 19C12.6 20 13.2 20.9 13.9 21.8C14.6 21.7 15.3 21.5 15.9 21.2C15.4 20.5 14.9 19.8 14.4 19.1C15.5 19.5 16.5 19.9 17.6 20.2C18.3 19.8 18.9 19.2 19.4 18.6C17.6 18.1 15.7 17.5 14 16.7C13.9 15.8 13.1 15 12 15Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Build Page</span>
									</a>
								</div>
								<div class="menu-item">
									<div class="menu-content pt-8 pb-2">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">Crafted</span>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="black" />
													<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="black" />
													<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="black" />
													<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Pages</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion menu-active-bg">

											@foreach($pages as $page)
											   <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{ $page->title }}</span>
												<span class="menu-arrow"></span>
											</span>
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<div class="menu-item">
													<a class="menu-link" href="{{ route('previewpage', ['page_id' => $page->id]) }}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Preview</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="{{ route('editpagesection', ['page_id' => $page->id]) }}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Sections</span>
													</a>
												</div>
												<!-- <div class="menu-item">
													<a class="menu-link" href="../../demo8/dist/pages/profile/campaigns.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Campaigns</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo8/dist/pages/profile/documents.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Documents</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo8/dist/pages/profile/connections.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Connections</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo8/dist/pages/profile/activity.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Activity</span>
													</a>
												</div> -->
											</div>
										</div>
											  @endforeach
									</div>
								</div>
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Aside Menu-->
					</div>
					<!--end::Aside menu-->
				</div>

