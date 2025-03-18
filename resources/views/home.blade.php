{{-- <!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../"/>
		<title>KN Dalda Dashboard</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="aside-enabled">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Aside Toolbarl-->
					<div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
						<!--begin::Aside user-->
						<!--begin::User-->
						<div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
							<!--begin::Symbol-->
							<div class="symbol symbol-50px">
								<img src="assets/media/avatars/300-1.jpg" alt="" />
							</div>
							<!--end::Symbol-->
							<!--begin::Wrapper-->
							<div class="aside-user-info flex-row-fluid flex-wrap ms-5">
								<!--begin::Section-->
								<div class="d-flex">
									<!--begin::Info-->
									<div class="flex-grow-1 me-2">
										<!--begin::Username-->
										<a href="#" class="text-white text-hover-primary fs-6 fw-bold">Paul Melone</a>
										<!--end::Username-->
										<!--begin::Description-->
										<span class="text-gray-600 fw-semibold d-block fs-8 mb-1">Python Dev</span>
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
											<i class="ki-duotone ki-setting-2 text-muted fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</a>
										<!--begin::User account menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img alt="Logo" src="assets/media/avatars/300-1.jpg" />
													</div>
													<!--end::Avatar-->
													<!--begin::Username-->
													<div class="d-flex flex-column">
														<div class="fw-bold d-flex align-items-center fs-5">Max Smith
														<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
														<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
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
												<a href="../../demo8/dist/apps/projects/list.html" class="menu-link px-5">
													<span class="menu-text">My Projects</span>
													<span class="menu-badge">
														<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
													</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" data-kt-menu-offset="-15px, 0">
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
														<span class="ms-2" data-bs-toggle="tooltip" title="View your statements">
															<i class="ki-duotone ki-information fs-7">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></a>
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
											<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" data-kt-menu-offset="-15px, 0">
												<a href="#" class="menu-link px-5">
													<span class="menu-title position-relative">Language
													<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
													<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo8/dist/account/settings.html" class="menu-link d-flex px-5 active">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
														</span>English</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo8/dist/account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
														</span>Spanish</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo8/dist/account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
														</span>German</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo8/dist/account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
														</span>Japanese</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo8/dist/account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
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
												<a href="../../demo8/dist/authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::User account menu-->
										<!--end::Action-->
									</div>
									<!--end::User menu-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::User-->
						<!--begin::Aside search-->
						<div class="aside-search py-5">
							<!--begin::Search-->
							<div id="kt_header_search" class="header-search d-flex align-items-center w-100" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="false" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
								<!--begin::Form-->
								<form data-kt-search-element="form" class="w-100 position-relative" autocomplete="off">
									<!--begin::Hidden input(Added to disable form autocomplete)-->
									<input type="hidden" />
									<!--end::Hidden input-->
									<!--begin::Icon-->
									<i class="ki-duotone ki-magnifier fs-2 search-icon position-absolute top-50 translate-middle-y ms-4">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
									<!--end::Icon-->
									<!--begin::Input-->
									<input type="text" class="search-input form-control ps-13 fs-7 h-40px" name="search" value="" placeholder="Quick Search" data-kt-search-element="input" />
									<!--end::Input-->
									<!--begin::Spinner-->
									<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
										<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
									</span>
									<!--end::Spinner-->
									<!--begin::Reset-->
									<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
										<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span>
									<!--end::Reset-->
								</form>
								<!--end::Form-->
								<!--begin::Menu-->
								<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
									<!--begin::Wrapper-->
									<div data-kt-search-element="wrapper">
										<!--begin::Recently viewed-->
										<div data-kt-search-element="results" class="d-none">
											<!--begin::Items-->
											<div class="scroll-y mh-200px mh-lg-350px">
												<!--begin::Category title-->
												<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
												<!--end::Category title-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-6.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Karina Clark</span>
														<span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-2.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Olivia Bold</span>
														<span class="fs-7 fw-semibold text-muted">Software Engineer</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-9.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Ana Clark</span>
														<span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-14.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Nick Pitola</span>
														<span class="fs-7 fw-semibold text-muted">Art Director</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-11.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Edward Kulnic</span>
														<span class="fs-7 fw-semibold text-muted">System Administrator</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Category title-->
												<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
												<!--end::Category title-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Company Rbranding</span>
														<span class="fs-7 fw-semibold text-muted">UI Design</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Company Re-branding</span>
														<span class="fs-7 fw-semibold text-muted">Web Development</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Business Analytics App</span>
														<span class="fs-7 fw-semibold text-muted">Administration</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
														<span class="fs-7 fw-semibold text-muted">Marketing</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-semibold">
														<span class="fs-6 fw-semibold">Tower Group Website</span>
														<span class="fs-7 fw-semibold text-muted">Google Adwords</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Category title-->
												<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
												<!--end::Category title-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-notepad fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
														<span class="fs-7 fw-semibold text-muted">#45670</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-frame fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
														<span class="fs-7 fw-semibold text-muted">#45690</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-message-text-2 fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
														<span class="fs-7 fw-semibold text-muted">#21090</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-profile-circle fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
														<span class="fs-7 fw-semibold text-muted">#34560</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
											</div>
											<!--end::Items-->
										</div>
										<!--end::Recently viewed-->
										<!--begin::Recently viewed-->
										<div class="" data-kt-search-element="main">
											<!--begin::Heading-->
											<div class="d-flex flex-stack fw-semibold mb-4">
												<!--begin::Label-->
												<span class="text-muted fs-6 me-2">Recently Searched:</span>
												<!--end::Label-->
												<!--begin::Toolbar-->
												<div class="d-flex" data-kt-search-element="toolbar">
													<!--begin::Preferences toggle-->
													<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
														<i class="ki-duotone ki-setting-2 fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Preferences toggle-->
													<!--begin::Advanced search toggle-->
													<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
														<i class="ki-duotone ki-down fs-2"></i>
													</div>
													<!--end::Advanced search toggle-->
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Heading-->
											<!--begin::Items-->
											<div class="scroll-y mh-200px mh-lg-325px">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-laptop fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
														<span class="fs-7 text-muted fw-semibold">#45789</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-chart-simple fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
														<span class="fs-7 text-muted fw-semibold">#84050</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-chart fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
														<span class="fs-7 text-muted fw-semibold">#84250</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
														<span class="fs-7 text-muted fw-semibold">#67945</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-sms fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
														<span class="fs-7 text-muted fw-semibold">#84250</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-bank fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
														<span class="fs-7 text-muted fw-semibold">#45690</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
														<span class="fs-7 text-muted fw-semibold">#24005</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
										</div>
										<!--end::Recently viewed-->
										<!--begin::Empty-->
										<div data-kt-search-element="empty" class="text-center d-none">
											<!--begin::Icon-->
											<div class="pt-10 pb-10">
												<i class="ki-duotone ki-search-list fs-4x opacity-50">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</div>
											<!--end::Icon-->
											<!--begin::Message-->
											<div class="pb-15 fw-semibold">
												<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
												<div class="text-muted fs-7">Please try again with a different query</div>
											</div>
											<!--end::Message-->
										</div>
										<!--end::Empty-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Preferences-->
									<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
										<!--begin::Heading-->
										<h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="mb-5">
											<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<!--begin::Radio group-->
											<div class="nav-group nav-group-fluid">
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="users" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="orders" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="projects" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
												</label>
												<!--end::Option-->
											</div>
											<!--end::Radio group-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<!--begin::Radio group-->
											<div class="nav-group nav-group-fluid">
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="attachment" value="any" />
													<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
												</label>
												<!--end::Option-->
											</div>
											<!--end::Radio group-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
												<option value="next">Within the next</option>
												<option value="last">Within the last</option>
												<option value="between">Between</option>
												<option value="on">On</option>
											</select>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-8">
											<!--begin::Col-->
											<div class="col-6">
												<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-6">
												<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
													<option value="days">Days</option>
													<option value="weeks">Weeks</option>
													<option value="months">Months</option>
													<option value="years">Years</option>
												</select>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
											<a href="../../demo8/dist/pages/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
										</div>
										<!--end::Actions-->
									</form>
									<!--end::Preferences-->
									<!--begin::Preferences-->
									<form data-kt-search-element="preferences" class="pt-1 d-none">
										<!--begin::Heading-->
										<h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="pb-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
												<input class="form-check-input" type="checkbox" value="1" checked="checked" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
												<input class="form-check-input" type="checkbox" value="1" checked="checked" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
												<input class="form-check-input" type="checkbox" value="1" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
												<input class="form-check-input" type="checkbox" value="1" checked="checked" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
												<input class="form-check-input" type="checkbox" value="1" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end pt-7">
											<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
											<button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
										</div>
										<!--end::Actions-->
									</form>
									<!--end::Preferences-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Search-->
						</div>
						<!--end::Aside search-->
						<!--end::Aside user-->
					</div>
					<!--end::Aside Toolbarl-->
					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid">
						<!--begin::Aside Menu-->
						<div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
							<!--begin::Menu-->
							<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-element-11 fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
											</i>
										</span>
										<span class="menu-title">Dashboards</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/index.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Default</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/dashboards/ecommerce.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">eCommerce</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/dashboards/projects.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Projects</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/dashboards/online-courses.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Online Courses</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/dashboards/marketing.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Marketing</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_dashboards_collapse">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo8/dist/dashboards/bidding.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Bidding</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo8/dist/dashboards/pos.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">POS System</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo8/dist/dashboards/call-center.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Call Center</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo8/dist/dashboards/logistics.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Logistics</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo8/dist/dashboards/website-analytics.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Website Analytics</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo8/dist/dashboards/finance-performance.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Finance Performance</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo8/dist/dashboards/store-analytics.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Store Analytics</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo8/dist/dashboards/social.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Social</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo8/dist/dashboards/delivery.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Delivery</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo8/dist/dashboards/crypto.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Crypto</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo8/dist/dashboards/school.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">School</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo8/dist/dashboards/podcast.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Podcast</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo8/dist/landing.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Landing</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<div class="menu-item">
											<div class="menu-content">
												<a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse" data-kt-toggle-text="Show Less">
													<span data-kt-toggle-text-target="true">Show 12 More</span>
													<i class="ki-duotone ki-minus-square toggle-on fs-2 me-0">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<i class="ki-duotone ki-plus-square toggle-off fs-2 me-0">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</a>
											</div>
										</div>
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item pt-5">
									<!--begin:Menu content-->
									<div class="menu-content">
										<span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
									</div>
									<!--end:Menu content-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-address-book fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
										<span class="menu-title">User Profile</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/user-profile/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/user-profile/projects.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Projects</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/user-profile/campaigns.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Campaigns</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/user-profile/documents.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Documents</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/user-profile/followers.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Followers</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/user-profile/activity.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Activity</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-element-plus fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
												<span class="path5"></span>
											</i>
										</span>
										<span class="menu-title">Account</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/account/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/account/settings.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Settings</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/account/security.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Security</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/account/activity.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Activity</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/account/billing.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Billing</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/account/statements.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Statements</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/account/referrals.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Referrals</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/account/api-keys.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">API Keys</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/account/logs.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Logs</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-user fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
										<span class="menu-title">Authentication</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Corporate Layout</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/corporate/sign-in.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Sign-in</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/corporate/sign-up.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Sign-up</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/corporate/two-factor.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Two-Factor</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/corporate/reset-password.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Reset Password</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/corporate/new-password.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">New Password</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overlay Layout</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/overlay/sign-in.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Sign-in</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/overlay/sign-up.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Sign-up</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/overlay/two-factor.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Two-Factor</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/overlay/reset-password.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Reset Password</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/overlay/new-password.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">New Password</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Creative Layout</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/creative/sign-in.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Sign-in</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/creative/sign-up.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Sign-up</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/creative/two-factor.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Two-Factor</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/creative/reset-password.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Reset Password</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/creative/new-password.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">New Password</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Fancy Layout</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/fancy/sign-in.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Sign-in</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/fancy/sign-up.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Sign-up</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/fancy/two-factor.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Two-Factor</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/fancy/reset-password.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Reset Password</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/layouts/fancy/new-password.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">New Password</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Email Templates</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/email/welcome-message.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Welcome Message</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/email/reset-password.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Reset Password</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/email/subscription-confirmed.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Subscription Confirmed</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/email/card-declined.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Credit Card Declined</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/email/promo-1.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Promo 1</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/email/promo-2.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Promo 2</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/authentication/email/promo-3.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Promo 3</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/authentication/extended/multi-steps-sign-up.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Multi-steps Sign-up</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/authentication/general/welcome.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Welcome Message</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/authentication/general/verify-email.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Verify Email</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/authentication/general/coming-soon.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Coming Soon</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/authentication/general/password-confirmation.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Password Confirmation</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/authentication/general/account-deactivated.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Account Deactivation</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/authentication/general/error-404.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Error 404</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/authentication/general/error-500.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Error 500</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-file fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
										<span class="menu-title">Corporate</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/about.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">About</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/team.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Our Team</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/contact.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Contact Us</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/licenses.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Licenses</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/sitemap.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Sitemap</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-abstract-39 fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
										<span class="menu-title">Social</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/social/feeds.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Feeds</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/social/activity.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Activty</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/social/followers.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Followers</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/social/settings.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Settings</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-bank fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
										<span class="menu-title">Blog</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/blog/home.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Blog Home</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/blog/post.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Blog Post</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-chart-pie-3 fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
										<span class="menu-title">FAQ</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/faq/classic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">FAQ Classic</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/faq/extended.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">FAQ Extended</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-bucket fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
											</i>
										</span>
										<span class="menu-title">Pricing</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/pricing/column.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Column Pricing</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/pricing/table.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Table Pricing</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-call fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
												<span class="path5"></span>
												<span class="path6"></span>
												<span class="path7"></span>
												<span class="path8"></span>
											</i>
										</span>
										<span class="menu-title">Careers</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/careers/list.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Careers List</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/pages/careers/apply.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Careers Apply</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-color-swatch fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
												<span class="path5"></span>
												<span class="path6"></span>
												<span class="path7"></span>
												<span class="path8"></span>
												<span class="path9"></span>
												<span class="path10"></span>
												<span class="path11"></span>
												<span class="path12"></span>
												<span class="path13"></span>
												<span class="path14"></span>
												<span class="path15"></span>
												<span class="path16"></span>
												<span class="path17"></span>
												<span class="path18"></span>
												<span class="path19"></span>
												<span class="path20"></span>
												<span class="path21"></span>
											</i>
										</span>
										<span class="menu-title">Utilities</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Modals</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">General</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/general/invite-friends.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Invite Friends</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/general/view-users.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">View Users</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/general/select-users.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Select Users</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/general/upgrade-plan.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Upgrade Plan</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/general/share-earn.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Share & Earn</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Forms</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/forms/new-target.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">New Target</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/forms/new-card.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">New Card</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/forms/new-address.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">New Address</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/forms/create-api-key.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Create API Key</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/forms/bidding.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Bidding</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Wizards</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/wizards/create-app.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Create App</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/wizards/create-campaign.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Create Campaign</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/wizards/create-account.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Create Business Acc</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/wizards/create-project.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Create Project</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/wizards/top-up-wallet.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Top Up Wallet</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/wizards/offer-a-deal.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Offer a Deal</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/wizards/two-factor-authentication.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Two Factor Auth</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Search</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/search/users.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Users</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../../demo8/dist/utilities/modals/search/select-location.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Select Location</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Search</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/utilities/search/horizontal.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Horizontal</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/utilities/search/vertical.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Vertical</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/utilities/search/users.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Users</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/utilities/search/select-location.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Location</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Wizards</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/utilities/wizards/horizontal.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Horizontal</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/utilities/wizards/vertical.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Vertical</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/utilities/wizards/two-factor-authentication.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Two Factor Auth</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/utilities/wizards/create-app.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Create App</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/utilities/wizards/create-campaign.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Create Campaign</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/utilities/wizards/create-account.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Create Account</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/utilities/wizards/create-project.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Create Project</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/utilities/modals/wizards/top-up-wallet.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Top Up Wallet</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/utilities/wizards/offer-a-deal.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Offer a Deal</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-element-7 fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
										<span class="menu-title">Widgets</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/widgets/lists.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Lists</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/widgets/statistics.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Statistics</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/widgets/charts.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Charts</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/widgets/mixed.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Mixed</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/widgets/tables.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Tables</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/widgets/feeds.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Feeds</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item pt-5">
									<!--begin:Menu content-->
									<div class="menu-content">
										<span class="menu-heading fw-bold text-uppercase fs-7">Apps</span>
									</div>
									<!--end:Menu content-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-abstract-41 fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
										<span class="menu-title">Projects</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/projects/list.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">My Projects</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/projects/project.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View Project</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/projects/targets.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Targets</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/projects/budget.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Budget</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/projects/users.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Users</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/projects/files.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Files</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/projects/activity.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Activity</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/projects/settings.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Settings</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-basket fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
											</i>
										</span>
										<span class="menu-title">eCommerce</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Catalog</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/ecommerce/catalog/products.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Products</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/ecommerce/catalog/categories.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Categories</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/ecommerce/catalog/add-product.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Add Product</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/ecommerce/catalog/edit-product.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Edit Product</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/ecommerce/catalog/add-category.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Add Category</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/ecommerce/catalog/edit-category.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Edit Category</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Sales</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/ecommerce/sales/listing.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Orders Listing</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/ecommerce/sales/details.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Order Details</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/ecommerce/sales/add-order.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Add Order</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/ecommerce/sales/edit-order.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Edit Order</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Customers</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/ecommerce/customers/listing.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Customer Listing</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/ecommerce/customers/details.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Customer Details</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Reports</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/ecommerce/reports/view.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Products Viewed</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/ecommerce/reports/sales.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Sales</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/ecommerce/reports/returns.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Returns</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/ecommerce/reports/customer-orders.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Customer Orders</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/ecommerce/reports/shipping.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Shipping</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/ecommerce/settings.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Settings</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-abstract-25 fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
										<span class="menu-title">Contacts</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/contacts/getting-started.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Getting Started</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/contacts/add-contact.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Add Contact</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/contacts/edit-contact.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Edit Contact</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link active" href="../../demo8/dist/apps/contacts/view-contact.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View Contact</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-chart fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
										<span class="menu-title">Support Center</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/support-center/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Tickets</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/support-center/tickets/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Tickets List</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/support-center/tickets/view.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View Ticket</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Tutorials</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/support-center/tutorials/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Tutorials List</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/support-center/tutorials/post.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Tutorial Post</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/support-center/faq.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">FAQ</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/support-center/licenses.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Licenses</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/support-center/contact.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Contact Us</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-abstract-28 fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
										<span class="menu-title">User Management</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Users</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/user-management/users/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Users List</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/user-management/users/view.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View User</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Roles</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/user-management/roles/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Roles List</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/user-management/roles/view.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View Role</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/user-management/permissions.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Permissions</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-abstract-38 fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
										<span class="menu-title">Customers</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/customers/getting-started.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Getting Started</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/customers/list.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Customer Listing</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/customers/view.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Customer Details</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-map fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
										<span class="menu-title">Subscription</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/subscriptions/getting-started.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Getting Started</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/subscriptions/list.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Subscription List</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/subscriptions/add.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Add Subscription</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/subscriptions/view.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View Subscription</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="ki-duotone ki-credit-cart fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
										<span class="menu-title">Invoice Manager</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View Invoices</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/invoices/view/invoice-1.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Invoice 1</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/invoices/view/invoice-2.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Invoice 2</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo8/dist/apps/invoices/view/invoice-3.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Invoice 3</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../../demo8/dist/apps/invoices/create.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Create Invoice</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
							



                                
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="../../demo8/dist/apps/calendar.html">
										<span class="menu-icon">
											<i class="ki-duotone ki-calendar-8 fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
												<span class="path5"></span>
												<span class="path6"></span>
											</i>
										</span>
										<span class="menu-title">Calendar</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo8/layout-builder.html">
										<span class="menu-icon">
											<i class="ki-duotone ki-abstract-13 fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
										<span class="menu-title">Layout Builder</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank">
										<span class="menu-icon">
											<i class="ki-duotone ki-abstract-26 fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
										<span class="menu-title">Documentation</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank">
										<span class="menu-icon">
											<i class="ki-duotone ki-code fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
											</i>
										</span>
										<span class="menu-title">Changelog v8.1.8</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Aside Menu-->
					</div>
					<!--end::Aside menu-->
					<!--begin::Footer-->
					<div class="aside-footer flex-column-auto py-5" id="kt_aside_footer">
						<a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-flex btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
							<span class="btn-label">Docs & Components</span>
							<i class="ki-duotone ki-document ms-2 fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</a>
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" style="" class="header align-items-stretch">
						<!--begin::Brand-->
						<div class="header-brand">
							<!--begin::Logo-->
							<a href="../../demo8/dist/index.html">
								<img alt="Logo" src="assets/media/logos/default-dark.svg" class="h-25px h-lg-25px" />
							</a>
							<!--end::Logo-->
							<!--begin::Aside minimize-->
							<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
								<i class="ki-duotone ki-entrance-right fs-1 me-n1 minimize-default">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
								<i class="ki-duotone ki-entrance-left fs-1 minimize-active">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
							<!--end::Aside minimize-->
							<!--begin::Aside toggle-->
							<div class="d-flex align-items-center d-lg-none me-n2" title="Show aside menu">
								<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
									<i class="ki-duotone ki-abstract-14 fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
							</div>
							<!--end::Aside toggle-->
						</div>
						<!--end::Brand-->
						<!--begin::Toolbar-->
						<div class="toolbar d-flex align-items-stretch">
							<!--begin::Toolbar container-->
							<div class="container-xxl py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
								<!--begin::Page title-->
								<div class="page-title d-flex justify-content-center flex-column me-5">
									<!--begin::Title-->
									<h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">View Contact</h1>
									<!--end::Title-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="../../demo8/dist/index.html" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Contacts</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark">View Contact</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Action group-->
								<div class="d-flex align-items-stretch overflow-auto pt-3 pt-lg-0">
									<!--begin::Action wrapper-->
							
									<!--end::Action wrapper-->
									<!--begin::Theme mode-->
									<div class="d-flex align-items-center">
										<!--begin::Menu toggle-->
										<a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<i class="ki-duotone ki-night-day theme-light-show fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
												<span class="path5"></span>
												<span class="path6"></span>
												<span class="path7"></span>
												<span class="path8"></span>
												<span class="path9"></span>
												<span class="path10"></span>
											</i>
											<i class="ki-duotone ki-moon theme-dark-show fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</a>
										<!--begin::Menu toggle-->
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-night-day fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
															<span class="path6"></span>
															<span class="path7"></span>
															<span class="path8"></span>
															<span class="path9"></span>
															<span class="path10"></span>
														</i>
													</span>
													<span class="menu-title">Light</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-moon fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Dark</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-screen fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
													<span class="menu-title">System</span>
												</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Theme mode-->
								</div>
								<!--end::Action group-->
							</div>
							<!--end::Toolbar container-->
						</div>
						<!--end::Toolbar-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Contacts App- View Contact-->
								<div class="row g-7">
									<!--begin::Contact groups-->
									<div class="col-lg-6 col-xl-3">
										<!--begin::Contact group wrapper-->
										<div class="card card-flush">
											<!--begin::Card header-->
											<div class="card-header pt-7" id="kt_chat_contacts_header">
												<!--begin::Card title-->
												<div class="card-title">
													<h2>Groups</h2>
												</div>
												<!--end::Card title-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-5">
												<!--begin::Contact groups-->
												<div class="d-flex flex-column gap-5">
													<!--begin::Contact group-->
													<div class="d-flex flex-stack">
														<a href="../../demo8/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary active">All Contacts</a>
														<div class="badge badge-light-primary">9</div>
													</div>
													<!--begin::Contact group-->
													<!--begin::Contact group-->
													<div class="d-flex flex-stack">
														<a href="../../demo8/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Subscribed</a>
														<div class="badge badge-light-primary">3</div>
													</div>
													<!--begin::Contact group-->
													<!--begin::Contact group-->
													<div class="d-flex flex-stack">
														<a href="../../demo8/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Tier 1 Member</a>
														<div class="badge badge-light-primary">1</div>
													</div>
													<!--begin::Contact group-->
													<!--begin::Contact group-->
													<div class="d-flex flex-stack">
														<a href="../../demo8/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Pending Approval</a>
														<div class="badge badge-light-primary">3</div>
													</div>
													<!--begin::Contact group-->
													<!--begin::Contact group-->
													<div class="d-flex flex-stack">
														<a href="../../demo8/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-danger text-hover-primary">Blocked</a>
														<div class="badge badge-light-danger">2</div>
													</div>
													<!--begin::Contact group-->
												</div>
												<!--end::Contact groups-->
												<!--begin::Separator-->
												<div class="separator my-7"></div>
												<!--begin::Separator-->
												<!--begin::Add contact group-->
												<label class="fs-6 fw-semibold form-label">Add new group</label>
												<div class="input-group">
													<input type="text" class="form-control form-control-solid" placeholder="Group name" />
													<button type="button" class="btn btn-icon btn-light">
														<i class="ki-duotone ki-plus-square fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</button>
												</div>
												<!--end::Add contact group-->
												<!--begin::Separator-->
												<div class="separator my-7"></div>
												<!--begin::Separator-->
												<!--begin::Add new contact-->
												<a href="../../demo8/dist/apps/contacts/add-contact.html" class="btn btn-primary w-100">
												<i class="ki-duotone ki-badge fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
												</i>Add new contact</a>
												<!--end::Add new contact-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Contact group wrapper-->
									</div>
									<!--end::Contact groups-->
									<!--begin::Search-->
									<div class="col-lg-6 col-xl-3">
										<!--begin::Contacts-->
										<div class="card card-flush" id="kt_contacts_list">
											<!--begin::Card header-->
											<div class="card-header pt-7" id="kt_contacts_list_header">
												<!--begin::Form-->
												<form class="d-flex align-items-center position-relative w-100 m-0" autocomplete="off">
													<!--begin::Icon-->
													<i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<!--end::Icon-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid ps-13" name="search" value="" placeholder="Search contacts" />
													<!--end::Input-->
												</form>
												<!--end::Form-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-5" id="kt_contacts_list_body">
												<!--begin::List-->
												<div class="scroll-y me-n5 pe-5 h-300px h-xl-auto" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_contacts_list_header" data-kt-scroll-wrappers="#kt_content, #kt_contacts_list_body" data-kt-scroll-stretch="#kt_contacts_list, #kt_contacts_main" data-kt-scroll-offset="5px">
													<!--begin::User-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-40px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
																<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-4">
																<a href="../../demo8/dist/apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
																<div class="fw-semibold fs-7 text-muted">smith@kpmg.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::User-->
													<!--begin::Separator-->
													<div class="separator separator-dashed d-none"></div>
													<!--end::Separator-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-40px symbol-circle">
																<span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">M</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-4">
																<a href="../../demo8/dist/apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
																<div class="fw-semibold fs-7 text-muted">melody@altbox.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::User-->
													<!--begin::Separator-->
													<div class="separator separator-dashed d-none"></div>
													<!--end::Separator-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-40px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-4">
																<a href="../../demo8/dist/apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
																<div class="fw-semibold fs-7 text-muted">max@kt.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::User-->
													<!--begin::Separator-->
													<div class="separator separator-dashed d-none"></div>
													<!--end::Separator-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-40px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
																<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-4">
																<a href="../../demo8/dist/apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
																<div class="fw-semibold fs-7 text-muted">sean@dellito.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::User-->
													<!--begin::Separator-->
													<div class="separator separator-dashed d-none"></div>
													<!--end::Separator-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-40px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
																<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-4">
																<a href="../../demo8/dist/apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
																<div class="fw-semibold fs-7 text-muted">brian@exchange.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::User-->
													<!--begin::Separator-->
													<div class="separator separator-dashed d-none"></div>
													<!--end::Separator-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-40px symbol-circle">
																<span class="symbol-label bg-light-warning text-warning fs-6 fw-bolder">C</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-4">
																<a href="../../demo8/dist/apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
																<div class="fw-semibold fs-7 text-muted">mik@pex.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::User-->
													<!--begin::Separator-->
													<div class="separator separator-dashed d-none"></div>
													<!--end::Separator-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-40px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-4">
																<a href="../../demo8/dist/apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
																<div class="fw-semibold fs-7 text-muted">f.mit@kpmg.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::User-->
													<!--begin::Separator-->
													<div class="separator separator-dashed d-none"></div>
													<!--end::Separator-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-40px symbol-circle">
																<span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">O</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-4">
																<a href="../../demo8/dist/apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
																<div class="fw-semibold fs-7 text-muted">olivia@corpmail.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::User-->
													<!--begin::Separator-->
													<div class="separator separator-dashed d-none"></div>
													<!--end::Separator-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-40px symbol-circle">
																<span class="symbol-label bg-light-primary text-primary fs-6 fw-bolder">N</span>
																<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-4">
																<a href="../../demo8/dist/apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
																<div class="fw-semibold fs-7 text-muted">owen.neil@gmail.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::User-->
													<!--begin::Separator-->
													<div class="separator separator-dashed d-none"></div>
													<!--end::Separator-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-40px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-4">
																<a href="../../demo8/dist/apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
																<div class="fw-semibold fs-7 text-muted">dam@consilting.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::User-->
													<!--begin::Separator-->
													<div class="separator separator-dashed d-none"></div>
													<!--end::Separator-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-40px symbol-circle">
																<span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">E</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-4">
																<a href="../../demo8/dist/apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
																<div class="fw-semibold fs-7 text-muted">emma@intenso.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::User-->
													<!--begin::Separator-->
													<div class="separator separator-dashed d-none"></div>
													<!--end::Separator-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-40px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-4">
																<a href="../../demo8/dist/apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
																<div class="fw-semibold fs-7 text-muted">ana.cf@limtel.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::User-->
													<!--begin::Separator-->
													<div class="separator separator-dashed d-none"></div>
													<!--end::Separator-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-40px symbol-circle">
																<span class="symbol-label bg-light-info text-info fs-6 fw-bolder">A</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-4">
																<a href="../../demo8/dist/apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
																<div class="fw-semibold fs-7 text-muted">robert@benko.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::User-->
													<!--begin::Separator-->
													<div class="separator separator-dashed d-none"></div>
													<!--end::Separator-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-40px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-4">
																<a href="../../demo8/dist/apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
																<div class="fw-semibold fs-7 text-muted">miller@mapple.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::User-->
													<!--begin::Separator-->
													<div class="separator separator-dashed d-none"></div>
													<!--end::Separator-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-40px symbol-circle">
																<span class="symbol-label bg-light-success text-success fs-6 fw-bolder">L</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-4">
																<a href="../../demo8/dist/apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
																<div class="fw-semibold fs-7 text-muted">lucy.m@fentech.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::User-->
													<!--begin::Separator-->
													<div class="separator separator-dashed d-none"></div>
													<!--end::Separator-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-40px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-4">
																<a href="../../demo8/dist/apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
																<div class="fw-semibold fs-7 text-muted">ethan@loop.com.au</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::User-->
												</div>
												<!--end::List-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Contacts-->
									</div>
									<!--end::Search-->
									<!--begin::Content-->
									<div class="col-xl-6">
										<!--begin::Contacts-->
										<div class="card card-flush h-lg-100" id="kt_contacts_main">
											<!--begin::Card header-->
											<div class="card-header pt-7" id="kt_chat_contacts_header">
												<!--begin::Card title-->
												<div class="card-title">
													<i class="ki-duotone ki-badge fs-1 me-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
													</i>
													<h2>Contact Details</h2>
												</div>
												<!--end::Card title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar gap-3">
													<!--begin::Chat-->
													<button class="btn btn-sm btn-light btn-active-light-primary" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">
													<i class="ki-duotone ki-message-text-2 fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>Chat</button>
													<!--end::Chat-->
													<!--begin::Chat-->
													<a href="../../demo8/dist/apps/inbox/reply.html" class="btn btn-sm btn-light btn-active-light-primary">
													<i class="ki-duotone ki-messages fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
													</i>Message</a>
													<!--end::Chat-->
													<!--begin::Action menu-->
													<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<i class="ki-duotone ki-dots-square fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="../../demo8/dist/apps/contacts/edit-contact.html" class="menu-link px-3">Edit</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3" id="kt_contact_delete" data-kt-redirect="../../demo8/dist/apps/contacts/getting-started.html">Delete</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
													<!--end::Action menu-->
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-5">
												<!--begin::Profile-->
												<div class="d-flex gap-7 align-items-center">
													<!--begin::Avatar-->
													<div class="symbol symbol-circle symbol-100px">
														<img src="assets/media/avatars/300-6.jpg" alt="image" />
													</div>
													<!--end::Avatar-->
													<!--begin::Contact details-->
													<div class="d-flex flex-column gap-2">
														<!--begin::Name-->
														<h3 class="mb-0">Emma Smith</h3>
														<!--end::Name-->
														<!--begin::Email-->
														<div class="d-flex align-items-center gap-2">
															<i class="ki-duotone ki-sms fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
															<a href="#" class="text-muted text-hover-primary">smith@kpmg.com</a>
														</div>
														<!--end::Email-->
														<!--begin::Phone-->
														<div class="d-flex align-items-center gap-2">
															<i class="ki-duotone ki-phone fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
															<a href="#" class="text-muted text-hover-primary">+6141 234 567</a>
														</div>
														<!--end::Phone-->
													</div>
													<!--end::Contact details-->
												</div>
												<!--end::Profile-->
												<!--begin:::Tabs-->
												<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x fs-6 fw-semibold mt-6 mb-8 gap-2">
													<!--begin:::Tab item-->
													<li class="nav-item">
														<a class="nav-link text-active-primary d-flex align-items-center pb-4 active" data-bs-toggle="tab" href="#kt_contact_view_general">
														<i class="ki-duotone ki-home fs-4 me-1"></i>General</a>
													</li>
													<!--end:::Tab item-->
													<!--begin:::Tab item-->
													<li class="nav-item">
														<a class="nav-link text-active-primary d-flex align-items-center pb-4" data-bs-toggle="tab" href="#kt_contact_view_meetings">
														<i class="ki-duotone ki-calendar-8 fs-4 me-1">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
															<span class="path6"></span>
														</i>Meetings</a>
													</li>
													<!--end:::Tab item-->
													<!--begin:::Tab item-->
													<li class="nav-item">
														<a class="nav-link text-active-primary d-flex align-items-center pb-4" data-bs-toggle="tab" href="#kt_contact_view_activity">
														<i class="ki-duotone ki-save-2 fs-4 me-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>Activity</a>
													</li>
													<!--end:::Tab item-->
												</ul>
												<!--end:::Tabs-->
												<!--begin::Tab content-->
												<div class="tab-content" id="">
													<!--begin:::Tab pane-->
													<div class="tab-pane fade show active" id="kt_contact_view_general" role="tabpanel">
														<!--begin::Additional details-->
														<div class="d-flex flex-column gap-5 mt-7">
															<!--begin::Company name-->
															<div class="d-flex flex-column gap-1">
																<div class="fw-bold text-muted">Company Name</div>
																<div class="fw-bold fs-5">Keenthemes Inc</div>
															</div>
															<!--end::Company name-->
															<!--begin::City-->
															<div class="d-flex flex-column gap-1">
																<div class="fw-bold text-muted">City</div>
																<div class="fw-bold fs-5">Melbourne</div>
															</div>
															<!--end::City-->
															<!--begin::Country-->
															<div class="d-flex flex-column gap-1">
																<div class="fw-bold text-muted">Country</div>
																<div class="fw-bold fs-5">Australia</div>
															</div>
															<!--end::Country-->
															<!--begin::Notes-->
															<div class="d-flex flex-column gap-1">
																<div class="fw-bold text-muted">Notes</div>
																<p>Emma Smith joined the team on September 2019 as a junior associate. She soon showcased her expertise and experience in knowledge and skill in the field, which was very valuable to the company. She was promptly promoted to senior associate on July 2020.
																<br />
																<br />Emma Smith now heads a team of 5 associates and leads the company's sales growth by 7%.</p>
															</div>
															<!--end::Notes-->
														</div>
														<!--end::Additional details-->
													</div>
													<!--end:::Tab pane-->
													<!--begin:::Tab pane-->
													<div class="tab-pane fade" id="kt_contact_view_meetings" role="tabpanel">
														<!--begin::Dates-->
														<ul class="nav nav-pills d-flex flex-stack flex-nowrap hover-scroll-x">
															<!--begin::Date-->
															<li class="nav-item me-1">
																<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_0">
																	<span class="opacity-50 fs-7 fw-semibold">Su</span>
																	<span class="fs-6 fw-bold">22</span>
																</a>
															</li>
															<!--end::Date-->
															<!--begin::Date-->
															<li class="nav-item me-1">
																<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1">
																	<span class="opacity-50 fs-7 fw-semibold">Mo</span>
																	<span class="fs-6 fw-bold">23</span>
																</a>
															</li>
															<!--end::Date-->
															<!--begin::Date-->
															<li class="nav-item me-1">
																<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2">
																	<span class="opacity-50 fs-7 fw-semibold">Tu</span>
																	<span class="fs-6 fw-bold">24</span>
																</a>
															</li>
															<!--end::Date-->
															<!--begin::Date-->
															<li class="nav-item me-1">
																<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3">
																	<span class="opacity-50 fs-7 fw-semibold">We</span>
																	<span class="fs-6 fw-bold">25</span>
																</a>
															</li>
															<!--end::Date-->
															<!--begin::Date-->
															<li class="nav-item me-1">
																<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4">
																	<span class="opacity-50 fs-7 fw-semibold">Th</span>
																	<span class="fs-6 fw-bold">26</span>
																</a>
															</li>
															<!--end::Date-->
															<!--begin::Date-->
															<li class="nav-item me-1">
																<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_5">
																	<span class="opacity-50 fs-7 fw-semibold">Fr</span>
																	<span class="fs-6 fw-bold">27</span>
																</a>
															</li>
															<!--end::Date-->
															<!--begin::Date-->
															<li class="nav-item me-1">
																<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_6">
																	<span class="opacity-50 fs-7 fw-semibold">Sa</span>
																	<span class="fs-6 fw-bold">28</span>
																</a>
															</li>
															<!--end::Date-->
															<!--begin::Date-->
															<li class="nav-item me-1">
																<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_7">
																	<span class="opacity-50 fs-7 fw-semibold">Su</span>
																	<span class="fs-6 fw-bold">29</span>
																</a>
															</li>
															<!--end::Date-->
															<!--begin::Date-->
															<li class="nav-item me-1">
																<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_8">
																	<span class="opacity-50 fs-7 fw-semibold">Mo</span>
																	<span class="fs-6 fw-bold">30</span>
																</a>
															</li>
															<!--end::Date-->
															<!--begin::Date-->
															<li class="nav-item me-1">
																<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_9">
																	<span class="opacity-50 fs-7 fw-semibold">Tu</span>
																	<span class="fs-6 fw-bold">31</span>
																</a>
															</li>
															<!--end::Date-->
														</ul>
														<!--end::Dates-->
														<!--begin::Tab Content-->
														<div class="tab-content">
															<!--begin::Day-->
															<div id="kt_schedule_day_0" class="tab-pane fade show">
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">14:30 - 15:30
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Naomi Hayabusa</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">11:00 - 11:45
																		<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Yannis Gloverson</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">16:30 - 17:30
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Mark Randall</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
															</div>
															<!--end::Day-->
															<!--begin::Day-->
															<div id="kt_schedule_day_1" class="tab-pane fade show active">
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">9:00 - 10:00
																		<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Kendell Trevor</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">14:30 - 15:30
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Yannis Gloverson</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">14:30 - 15:30
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Naomi Hayabusa</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
															</div>
															<!--end::Day-->
															<!--begin::Day-->
															<div id="kt_schedule_day_2" class="tab-pane fade show">
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">10:00 - 11:00
																		<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Walter White</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">12:00 - 13:00
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Kendell Trevor</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">11:00 - 11:45
																		<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Caleb Donaldson</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
															</div>
															<!--end::Day-->
															<!--begin::Day-->
															<div id="kt_schedule_day_3" class="tab-pane fade show">
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">12:00 - 13:00
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Yannis Gloverson</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">9:00 - 10:00
																		<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Mark Randall</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">12:00 - 13:00
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Caleb Donaldson</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
															</div>
															<!--end::Day-->
															<!--begin::Day-->
															<div id="kt_schedule_day_4" class="tab-pane fade show">
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">16:30 - 17:30
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Terry Robins</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">11:00 - 11:45
																		<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Walter White</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">10:00 - 11:00
																		<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Walter White</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
															</div>
															<!--end::Day-->
															<!--begin::Day-->
															<div id="kt_schedule_day_5" class="tab-pane fade show">
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">14:30 - 15:30
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Kendell Trevor</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">12:00 - 13:00
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Terry Robins</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">13:00 - 14:00
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Terry Robins</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
															</div>
															<!--end::Day-->
															<!--begin::Day-->
															<div id="kt_schedule_day_6" class="tab-pane fade show">
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">16:30 - 17:30
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Sean Bean</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">14:30 - 15:30
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Mark Randall</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">14:30 - 15:30
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Peter Marcus</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
															</div>
															<!--end::Day-->
															<!--begin::Day-->
															<div id="kt_schedule_day_7" class="tab-pane fade show">
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">12:00 - 13:00
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Sean Bean</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">13:00 - 14:00
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Mark Randall</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">12:00 - 13:00
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Kendell Trevor</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
															</div>
															<!--end::Day-->
															<!--begin::Day-->
															<div id="kt_schedule_day_8" class="tab-pane fade show">
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">10:00 - 11:00
																		<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Karina Clarke</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">14:30 - 15:30
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Kendell Trevor</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">13:00 - 14:00
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Walter White</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
															</div>
															<!--end::Day-->
															<!--begin::Day-->
															<div id="kt_schedule_day_9" class="tab-pane fade show">
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">14:30 - 15:30
																		<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Karina Clarke</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">9:00 - 10:00
																		<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Yannis Gloverson</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
																<!--begin::Time-->
																<div class="d-flex flex-stack position-relative mt-8">
																	<!--begin::Bar-->
																	<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
																	<!--end::Bar-->
																	<!--begin::Info-->
																	<div class="fw-semibold ms-5 text-gray-600">
																		<!--begin::Time-->
																		<div class="fs-5">9:00 - 10:00
																		<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																		<!--end::Time-->
																		<!--begin::Title-->
																		<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																		<!--end::Title-->
																		<!--begin::User-->
																		<div class="text-gray-400">Lead by
																		<a href="#">Bob Harris</a></div>
																		<!--end::User-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																	<!--end::Action-->
																</div>
																<!--end::Time-->
															</div>
															<!--end::Day-->
														</div>
														<!--end::Tab Content-->
													</div>
													<!--end:::Tab pane-->
													<!--begin:::Tab pane-->
													<div class="tab-pane fade" id="kt_contact_view_activity" role="tabpanel">
														<!--begin::Timeline-->
														<div class="timeline-label">
															<!--begin::Item-->
															<div class="timeline-item">
																<!--begin::Label-->
																<div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
																<!--end::Label-->
																<!--begin::Badge-->
																<div class="timeline-badge">
																	<i class="ki-duotone ki-abstract-8 text-warning fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</div>
																<!--end::Badge-->
																<!--begin::Text-->
																<div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And keep structure</div>
																<!--end::Text-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="timeline-item">
																<!--begin::Label-->
																<div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
																<!--end::Label-->
																<!--begin::Badge-->
																<div class="timeline-badge">
																	<i class="ki-duotone ki-abstract-8 text-success fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</div>
																<!--end::Badge-->
																<!--begin::Content-->
																<div class="timeline-content d-flex">
																	<span class="fw-bold text-gray-800 ps-3">AEOL meeting</span>
																</div>
																<!--end::Content-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="timeline-item">
																<!--begin::Label-->
																<div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
																<!--end::Label-->
																<!--begin::Badge-->
																<div class="timeline-badge">
																	<i class="ki-duotone ki-abstract-8 text-danger fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</div>
																<!--end::Badge-->
																<!--begin::Desc-->
																<div class="timeline-content fw-bold text-gray-800 ps-3">Make deposit
																<a href="#" class="text-primary">USD 700</a>. to ESL</div>
																<!--end::Desc-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="timeline-item">
																<!--begin::Label-->
																<div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
																<!--end::Label-->
																<!--begin::Badge-->
																<div class="timeline-badge">
																	<i class="ki-duotone ki-abstract-8 text-primary fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</div>
																<!--end::Badge-->
																<!--begin::Text-->
																<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
																<!--end::Text-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="timeline-item">
																<!--begin::Label-->
																<div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
																<!--end::Label-->
																<!--begin::Badge-->
																<div class="timeline-badge">
																	<i class="ki-duotone ki-abstract-8 text-danger fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</div>
																<!--end::Badge-->
																<!--begin::Desc-->
																<div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
																<a href="#" class="text-primary">#XF-2356</a>.</div>
																<!--end::Desc-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="timeline-item">
																<!--begin::Label-->
																<div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
																<!--end::Label-->
																<!--begin::Badge-->
																<div class="timeline-badge">
																	<i class="ki-duotone ki-abstract-8 text-primary fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</div>
																<!--end::Badge-->
																<!--begin::Text-->
																<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
																<!--end::Text-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="timeline-item">
																<!--begin::Label-->
																<div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
																<!--end::Label-->
																<!--begin::Badge-->
																<div class="timeline-badge">
																	<i class="ki-duotone ki-abstract-8 text-danger fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</div>
																<!--end::Badge-->
																<!--begin::Desc-->
																<div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
																<a href="#" class="text-primary">#XF-2356</a>.</div>
																<!--end::Desc-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="timeline-item">
																<!--begin::Label-->
																<div class="timeline-label fw-bold text-gray-800 fs-6">10:30</div>
																<!--end::Label-->
																<!--begin::Badge-->
																<div class="timeline-badge">
																	<i class="ki-duotone ki-abstract-8 text-success fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</div>
																<!--end::Badge-->
																<!--begin::Text-->
																<div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch preparion meeting</div>
																<!--end::Text-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Timeline-->
													</div>
													<!--end:::Tab pane-->
												</div>
												<!--end::Tab content-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Contacts-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Contacts App- View Contact-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-semibold me-1">2023&copy;</span>
								<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Drawers-->
		<!--begin::Activities drawer-->
		<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
			<div class="card shadow-none border-0 rounded-0">
				<!--begin::Header-->
				<div class="card-header" id="kt_activities_header">
					<h3 class="card-title fw-bold text-dark">Activity Logs</h3>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body position-relative" id="kt_activities_body">
					<!--begin::Content-->
					<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
						<!--begin::Timeline items-->
						<div class="timeline">
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px me-4">
									<div class="symbol-label bg-light">
										<i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
											<!--begin::Title-->
											<a href="../../demo8/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px pe-2">
												<span class="badge badge-light text-muted">Application Design</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-2.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-14.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px pe-2">
												<span class="badge badge-light-primary">In Progress</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="../../demo8/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
											<!--begin::Title-->
											<a href="../../demo8/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px">
												<span class="badge badge-light text-muted">CRM System Development</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-20.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px">
												<span class="badge badge-light-success">Completed</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="../../demo8/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<i class="ki-duotone ki-flag fs-2 text-gray-500">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n2">
									<!--begin::Timeline heading-->
									<div class="overflow-auto pe-3">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
												<img src="assets/media/avatars/300-1.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<i class="ki-duotone ki-disconnect fs-2 text-gray-500">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
											<span class="path5"></span>
										</i>
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="mb-5 pe-3">
										<!--begin::Title-->
										<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
												<img src="assets/media/avatars/300-23.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="../../demo8/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">1.9mb</div>
													<!--end::Number-->
												</div>
												<!--begin::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="../../demo8/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">18kb</div>
													<!--end::Number-->
												</div>
												<!--end::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center">
												<!--begin::Icon-->
												<img alt="../../demo8/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">20mb</div>
													<!--end::Number-->
												</div>
												<!--end::Icon-->
											</div>
											<!--end::Item-->
										</div>
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">Task
										<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
										<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<i class="ki-duotone ki-pencil fs-2 text-gray-500">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
												<img src="assets/media/avatars/300-2.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
											<!--begin::Item-->
											<div class="overlay me-10">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="overlay me-10">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="overlay">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
										</div>
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<i class="ki-duotone ki-sms fs-2 text-gray-500">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">New case
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="overflow-auto pb-5">
											<!--begin::Wrapper-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
												<!--end::User-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<i class="ki-duotone ki-pencil fs-2 text-gray-500">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
												<img src="assets/media/avatars/300-4.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Notice-->
										<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
											<!--begin::Icon-->
											<i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
											<!--end::Icon-->
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
												<!--begin::Content-->
												<div class="mb-3 mb-md-0 fw-semibold">
													<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
													<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
												</div>
												<!--end::Content-->
												<!--begin::Action-->
												<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
												<!--end::Action-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Notice-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<i class="ki-duotone ki-basket fs-2 text-gray-500">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
										</i>
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">New order
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
						</div>
						<!--end::Timeline items-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
				<!--begin::Footer-->
				<div class="card-footer py-5 text-center" id="kt_activities_footer">
					<a href="../../demo8/dist/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
					<i class="ki-duotone ki-arrow-right fs-3 text-primary">
						<span class="path1"></span>
						<span class="path2"></span>
					</i></a>
				</div>
				<!--end::Footer-->
			</div>
		</div>
		<!--end::Activities drawer-->
		<!--begin::Chat drawer-->
		<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
			<!--begin::Messenger-->
			<div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
				<!--begin::Card header-->
				<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
					<!--begin::Title-->
					<div class="card-title">
						<!--begin::User-->
						<div class="d-flex justify-content-center flex-column me-3">
							<a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
							<!--begin::Info-->
							<div class="mb-0 lh-1">
								<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
								<span class="fs-7 fw-semibold text-muted">Active</span>
							</div>
							<!--end::Info-->
						</div>
						<!--end::User-->
					</div>
					<!--end::Title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Menu-->
						<div class="me-0">
							<button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<i class="ki-duotone ki-dots-square fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</button>
							<!--begin::Menu 3-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
								<!--begin::Heading-->
								<div class="menu-item px-3">
									<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
								</div>
								<!--end::Heading-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
									<span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
										<i class="ki-duotone ki-information fs-7">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span></a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
									<a href="#" class="menu-link px-3">
										<span class="menu-title">Groups</span>
										<span class="menu-arrow"></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3 my-1">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu 3-->
						</div>
						<!--end::Menu-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
							<i class="ki-duotone ki-cross-square fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body" id="kt_drawer_chat_messenger_body">
					<!--begin::Messages-->
					<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">2 mins</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">5 mins</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">1 Hour</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">2 Hours</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">3 Hours</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
								<a href="https://keenthemes.com">Keenthemes.com</a></div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">4 Hours</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">5 Hours</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(template for out)-->
						<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">Just now</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(template for out)-->
						<!--begin::Message(template for in)-->
						<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">Just now</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(template for in)-->
					</div>
					<!--end::Messages-->
				</div>
				<!--end::Card body-->
				<!--begin::Card footer-->
				<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
					<!--begin::Input-->
					<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
					<!--end::Input-->
					<!--begin:Toolbar-->
					<div class="d-flex flex-stack">
						<!--begin::Actions-->
						<div class="d-flex align-items-center me-2">
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
								<i class="ki-duotone ki-paper-clip fs-3"></i>
							</button>
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
								<i class="ki-duotone ki-cloud-add fs-3">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</button>
						</div>
						<!--end::Actions-->
						<!--begin::Send-->
						<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
						<!--end::Send-->
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Card footer-->
			</div>
			<!--end::Messenger-->
		</div>
		<!--end::Chat drawer-->
		<!--begin::Chat drawer-->
		<div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">
			<!--begin::Messenger-->
			<div class="card card-flush w-100 rounded-0">
				<!--begin::Card header-->
				<div class="card-header">
					<!--begin::Title-->
					<h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
					<!--end::Title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
							<i class="ki-duotone ki-cross fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body hover-scroll-overlay-y h-400px pt-5">
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="../../demo8/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
								<span class="text-gray-400 fw-semibold d-block">The best kitchen gadget in 2022</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 350</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">5</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-1.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="../../demo8/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
								<span class="text-gray-400 fw-semibold d-block">Smart tool for cooking</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 650</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">4</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-3.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="../../demo8/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
								<span class="text-gray-400 fw-semibold d-block">Professional camera for edge</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 150</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">3</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-8.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="../../demo8/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
								<span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 1450</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-26.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="../../demo8/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
								<span class="text-gray-400 fw-semibold d-block">Perfect animation tool</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 650</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-21.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="../../demo8/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
								<span class="text-gray-400 fw-semibold d-block">Profile info,Timeline etc</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 720</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">6</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-34.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="../../demo8/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
								<span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 430</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">8</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-27.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
				</div>
				<!--end::Card body-->
				<!--begin::Card footer-->
				<div class="card-footer">
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<span class="fw-bold text-gray-600">Total</span>
						<span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<span class="fw-bold text-gray-600">Sub total</span>
						<span class="text-primary fw-bolder fs-5">$ 246.35</span>
					</div>
					<!--end::Item-->
					<!--end::Action-->
					<div class="d-flex justify-content-end mt-9">
						<a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
					</div>
					<!--end::Action-->
				</div>
				<!--end::Card footer-->
			</div>
			<!--end::Messenger-->
		</div>
		<!--end::Chat drawer-->
		<!--end::Drawers-->
		<!--end::Main-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->
		<!--begin::Modals-->
		<!--begin::Modal - Invite Friends-->
		<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Heading-->
						<div class="text-center mb-13">
							<!--begin::Title-->
							<h1 class="mb-3">Invite a Friend</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="text-muted fw-semibold fs-5">If you need more info, please check out
							<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Google Contacts Invite-->
						<div class="btn btn-light-primary fw-bold w-100 mb-8">
						<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts</div>
						<!--end::Google Contacts Invite-->
						<!--begin::Separator-->
						<div class="separator d-flex flex-center mb-8">
							<span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
						</div>
						<!--end::Separator-->
						<!--begin::Textarea-->
						<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
						<!--end::Textarea-->
						<!--begin::Users-->
						<div class="mb-10">
							<!--begin::Heading-->
							<div class="fs-6 fw-semibold mb-2">Your Invitations</div>
							<!--end::Heading-->
							<!--begin::List-->
							<div class="mh-300px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
											<div class="fw-semibold text-muted">melody@altbox.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
											<div class="fw-semibold text-muted">max@kt.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
											<div class="fw-semibold text-muted">sean@dellito.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
											<div class="fw-semibold text-muted">brian@exchange.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
											<div class="fw-semibold text-muted">mik@pex.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
											<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
											<div class="fw-semibold text-muted">olivia@corpmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
											<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
											<div class="fw-semibold text-muted">dam@consilting.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
											<div class="fw-semibold text-muted">emma@intenso.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
											<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
											<div class="fw-semibold text-muted">robert@benko.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
											<div class="fw-semibold text-muted">miller@mapple.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
											<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
											<div class="fw-semibold text-muted">ethan@loop.com.au</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
											<div class="fw-semibold text-muted">melody@altbox.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
							</div>
							<!--end::List-->
						</div>
						<!--end::Users-->
						<!--begin::Notice-->
						<div class="d-flex flex-stack">
							<!--begin::Label-->
							<div class="me-5 fw-semibold">
								<label class="fs-6">Adding Users by Team Members</label>
								<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
							</div>
							<!--end::Label-->
							<!--begin::Switch-->
							<label class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" checked="checked" />
								<span class="form-check-label fw-semibold text-muted">Allowed</span>
							</label>
							<!--end::Switch-->
						</div>
						<!--end::Notice-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Invite Friend-->
		<!--begin::Modal - Users Search-->
		<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Content-->
						<div class="text-center mb-13">
							<h1 class="mb-3">Search Users</h1>
							<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
						</div>
						<!--end::Content-->
						<!--begin::Search-->
						<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
							<!--begin::Form-->
							<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
								<!--begin::Hidden input(Added to disable form autocomplete)-->
								<input type="hidden" />
								<!--end::Hidden input-->
								<!--begin::Icon-->
								<i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
								<!--end::Icon-->
								<!--begin::Input-->
								<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
								<!--end::Input-->
								<!--begin::Spinner-->
								<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
								</span>
								<!--end::Spinner-->
								<!--begin::Reset-->
								<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
									<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<!--end::Reset-->
							</form>
							<!--end::Form-->
							<!--begin::Wrapper-->
							<div class="py-5">
								<!--begin::Suggestions-->
								<div data-kt-search-element="suggestions">
									<!--begin::Heading-->
									<h3 class="fw-semibold mb-5">Recently searched:</h3>
									<!--end::Heading-->
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
												<span class="badge badge-light">Art Director</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
												<span class="badge badge-light">Marketing Analytic</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Max Smith</span>
												<span class="badge badge-light">Software Enginer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
												<span class="badge badge-light">Web Developer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
												<span class="badge badge-light">UI/UX Designer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
									</div>
									<!--end::Users-->
								</div>
								<!--end::Suggestions-->
								<!--begin::Results(add d-none to below element to hide the users list by default)-->
								<div data-kt-search-element="results" class="d-none">
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
													<div class="fw-semibold text-muted">smith@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
													<div class="fw-semibold text-muted">melody@altbox.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
													<div class="fw-semibold text-muted">max@kt.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
													<div class="fw-semibold text-muted">sean@dellito.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
													<div class="fw-semibold text-muted">brian@exchange.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
													<div class="fw-semibold text-muted">mik@pex.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
													<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
													<div class="fw-semibold text-muted">olivia@corpmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
													<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
													<div class="fw-semibold text-muted">dam@consilting.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
													<div class="fw-semibold text-muted">emma@intenso.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
													<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
													<div class="fw-semibold text-muted">robert@benko.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
													<div class="fw-semibold text-muted">miller@mapple.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
													<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
													<div class="fw-semibold text-muted">ethan@loop.com.au</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
													<div class="fw-semibold text-muted">smith@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
									</div>
									<!--end::Users-->
									<!--begin::Actions-->
									<div class="d-flex flex-center mt-15">
										<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
										<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Results-->
								<!--begin::Empty-->
								<div data-kt-search-element="empty" class="text-center d-none">
									<!--begin::Message-->
									<div class="fw-semibold py-10">
										<div class="text-gray-600 fs-3 mb-2">No users found</div>
										<div class="text-muted fs-6">Try to search by username, full name or email...</div>
									</div>
									<!--end::Message-->
									<!--begin::Illustration-->
									<div class="text-center px-5">
										<img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
									</div>
									<!--end::Illustration-->
								</div>
								<!--end::Empty-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Search-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Users Search-->
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
		<script src="assets/js/custom/apps/contacts/view-contact.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html> --}}



@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="">
			<!--begin::Content-->
			<div class="">
				<!--begin::Contacts-->
				<div class="card card-flush h-lg-100" id="kt_contacts_main">
					<!--begin::Card header-->
					<div class="card-header pt-7" id="kt_chat_contacts_header">
						<!--begin::Card title-->
						<div class="card-title">
							<i class="ki-duotone ki-badge fs-1 me-2">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
								<span class="path4"></span>
								<span class="path5"></span>
							</i>
							<h2>User Details</h2>
						</div>
						<!--end::Card title-->
						<!--begin::Card toolbar-->
						<div class="card-toolbar gap-3">
							<!--begin::Chat-->
							<button class="btn btn-sm btn-light btn-active-light-primary" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">
							<i class="ki-duotone ki-message-text-2 fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
							</i>Chat</button>
							<!--end::Chat-->
							<!--begin::Chat-->
							<a href="../../demo8/dist/apps/inbox/reply.html" class="btn btn-sm btn-light btn-active-light-primary">
							<i class="ki-duotone ki-messages fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
								<span class="path4"></span>
								<span class="path5"></span>
							</i>Message</a>
							<!--end::Chat-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="../../demo8/dist/apps/contacts/edit-contact.html" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" id="kt_contact_delete" data-kt-redirect="../../demo8/dist/apps/contacts/getting-started.html">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
							<!--end::Action menu-->
						</div>
						<!--end::Card toolbar-->
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body pt-5">
						<!--begin::Profile-->
						<div class="d-flex gap-7 align-items-center">
							<!--begin::Avatar-->
							<div class="symbol symbol-circle symbol-100px"> <img src="{{ asset('storage/profile_images/' . Auth::user()->image) }}"
								alt="" />
							</div>
							<!--end::Avatar-->
							<!--begin::Contact details-->
							<div class="d-flex flex-column gap-2">
								<!--begin::Name-->
								<h3 class="mb-0">{{ Auth::user()->name }}</h3>
								<!--end::Name-->
								<!--begin::Email-->
								<div class="d-flex align-items-center gap-2">
									<i class="ki-duotone ki-sms fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
									<a href="#" class="text-muted text-hover-primary">{{ Auth::user()->email }}</a>
								</div>
								<!--end::Email-->
								<!--begin::Phone-->
								<div class="d-flex align-items-center gap-2">
									<i class="ki-duotone ki-phone fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
									<a href="#" class="text-muted text-hover-primary">{{ Auth::user()->phone }}</a>
								</div>
								<!--end::Phone-->
								<!--begin::Phone-->
								<div class="d-flex align-items-center gap-2">
									<i class="ki-duotone ki-phone fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
									<a href="#" class="text-muted text-hover-primary">{{ Auth::user()->altphone }}</a>
								</div>
								<!--end::Phone-->
							</div>
							<!--end::Contact details-->
						</div>
						<!--end::Profile-->
						<!--begin:::Tabs-->
						<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x fs-6 fw-semibold mt-6 mb-8 gap-2">
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary d-flex align-items-center pb-4 active" data-bs-toggle="tab" href="#kt_contact_view_general">
								<i class="ki-duotone ki-home fs-4 me-1"></i>General</a>
							</li>
							<!--end:::Tab item-->
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary d-flex align-items-center pb-4" data-bs-toggle="tab" href="#kt_contact_view_meetings">
								<i class="ki-duotone ki-calendar-8 fs-4 me-1">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
									<span class="path5"></span>
									<span class="path6"></span>
								</i>Meetings</a>
							</li>
							<!--end:::Tab item-->
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary d-flex align-items-center pb-4" data-bs-toggle="tab" href="#kt_contact_view_activity">
								<i class="ki-duotone ki-save-2 fs-4 me-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>Activity</a>
							</li>
							<!--end:::Tab item-->
						</ul>
						<!--end:::Tabs-->
						<!--begin::Tab content-->
						<div class="tab-content" id="">
							<!--begin:::Tab pane-->
							<div class="tab-pane fade show active" id="kt_contact_view_general" role="tabpanel">
								<!--begin::Additional details-->
								<div class="d-flex flex-column gap-5 mt-7">
									<!--begin::Company name-->
									<div class="d-flex flex-column gap-1">
										<div class="fw-bold text-muted">Company Name</div>
										<div class="fw-bold fs-5">Keenthemes Inc</div>
									</div>
									<!--end::Company name-->
									<!--begin::City-->
									<div class="d-flex flex-column gap-1">
										<div class="fw-bold text-muted">City</div>
										<div class="fw-bold fs-5">Melbourne</div>
									</div>
									<!--end::City-->
									<!--begin::Country-->
									<div class="d-flex flex-column gap-1">
										<div class="fw-bold text-muted">Country</div>
										<div class="fw-bold fs-5">Australia</div>
									</div>
									<!--end::Country-->
									<!--begin::Notes-->
									<div class="d-flex flex-column gap-1">
										<div class="fw-bold text-muted">Notes</div>
										<p>Emma Smith joined the team on September 2019 as a junior associate. She soon showcased her expertise and experience in knowledge and skill in the field, which was very valuable to the company. She was promptly promoted to senior associate on July 2020.
										<br />
										<br />Emma Smith now heads a team of 5 associates and leads the company's sales growth by 7%.</p>
									</div>
									<!--end::Notes-->
								</div>
								<!--end::Additional details-->
							</div>
							<!--end:::Tab pane-->
							<!--begin:::Tab pane-->
							<div class="tab-pane fade" id="kt_contact_view_meetings" role="tabpanel">
								<!--begin::Dates-->
								<ul class="nav nav-pills d-flex flex-stack flex-nowrap hover-scroll-x">
									<!--begin::Date-->
									<li class="nav-item me-1">
										<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_0">
											<span class="opacity-50 fs-7 fw-semibold">Su</span>
											<span class="fs-6 fw-bold">22</span>
										</a>
									</li>
									<!--end::Date-->
									<!--begin::Date-->
									<li class="nav-item me-1">
										<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1">
											<span class="opacity-50 fs-7 fw-semibold">Mo</span>
											<span class="fs-6 fw-bold">23</span>
										</a>
									</li>
									<!--end::Date-->
									<!--begin::Date-->
									<li class="nav-item me-1">
										<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2">
											<span class="opacity-50 fs-7 fw-semibold">Tu</span>
											<span class="fs-6 fw-bold">24</span>
										</a>
									</li>
									<!--end::Date-->
									<!--begin::Date-->
									<li class="nav-item me-1">
										<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3">
											<span class="opacity-50 fs-7 fw-semibold">We</span>
											<span class="fs-6 fw-bold">25</span>
										</a>
									</li>
									<!--end::Date-->
									<!--begin::Date-->
									<li class="nav-item me-1">
										<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4">
											<span class="opacity-50 fs-7 fw-semibold">Th</span>
											<span class="fs-6 fw-bold">26</span>
										</a>
									</li>
									<!--end::Date-->
									<!--begin::Date-->
									<li class="nav-item me-1">
										<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_5">
											<span class="opacity-50 fs-7 fw-semibold">Fr</span>
											<span class="fs-6 fw-bold">27</span>
										</a>
									</li>
									<!--end::Date-->
									<!--begin::Date-->
									<li class="nav-item me-1">
										<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_6">
											<span class="opacity-50 fs-7 fw-semibold">Sa</span>
											<span class="fs-6 fw-bold">28</span>
										</a>
									</li>
									<!--end::Date-->
									<!--begin::Date-->
									<li class="nav-item me-1">
										<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_7">
											<span class="opacity-50 fs-7 fw-semibold">Su</span>
											<span class="fs-6 fw-bold">29</span>
										</a>
									</li>
									<!--end::Date-->
									<!--begin::Date-->
									<li class="nav-item me-1">
										<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_8">
											<span class="opacity-50 fs-7 fw-semibold">Mo</span>
											<span class="fs-6 fw-bold">30</span>
										</a>
									</li>
									<!--end::Date-->
									<!--begin::Date-->
									<li class="nav-item me-1">
										<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_9">
											<span class="opacity-50 fs-7 fw-semibold">Tu</span>
											<span class="fs-6 fw-bold">31</span>
										</a>
									</li>
									<!--end::Date-->
								</ul>
								<!--end::Dates-->
								<!--begin::Tab Content-->
								<div class="tab-content">
									<!--begin::Day-->
									<div id="kt_schedule_day_0" class="tab-pane fade show">
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">14:30 - 15:30
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Naomi Hayabusa</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">11:00 - 11:45
												<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Yannis Gloverson</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">16:30 - 17:30
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Mark Randall</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
									</div>
									<!--end::Day-->
									<!--begin::Day-->
									<div id="kt_schedule_day_1" class="tab-pane fade show active">
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">9:00 - 10:00
												<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Kendell Trevor</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">14:30 - 15:30
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Yannis Gloverson</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">14:30 - 15:30
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Naomi Hayabusa</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
									</div>
									<!--end::Day-->
									<!--begin::Day-->
									<div id="kt_schedule_day_2" class="tab-pane fade show">
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">10:00 - 11:00
												<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Walter White</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">12:00 - 13:00
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Kendell Trevor</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">11:00 - 11:45
												<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Caleb Donaldson</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
									</div>
									<!--end::Day-->
									<!--begin::Day-->
									<div id="kt_schedule_day_3" class="tab-pane fade show">
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">12:00 - 13:00
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Yannis Gloverson</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">9:00 - 10:00
												<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Mark Randall</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">12:00 - 13:00
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Caleb Donaldson</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
									</div>
									<!--end::Day-->
									<!--begin::Day-->
									<div id="kt_schedule_day_4" class="tab-pane fade show">
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">16:30 - 17:30
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Terry Robins</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">11:00 - 11:45
												<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Walter White</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">10:00 - 11:00
												<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Walter White</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
									</div>
									<!--end::Day-->
									<!--begin::Day-->
									<div id="kt_schedule_day_5" class="tab-pane fade show">
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">14:30 - 15:30
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Kendell Trevor</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">12:00 - 13:00
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Terry Robins</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">13:00 - 14:00
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Terry Robins</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
									</div>
									<!--end::Day-->
									<!--begin::Day-->
									<div id="kt_schedule_day_6" class="tab-pane fade show">
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">16:30 - 17:30
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Sean Bean</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">14:30 - 15:30
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Mark Randall</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">14:30 - 15:30
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Peter Marcus</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
									</div>
									<!--end::Day-->
									<!--begin::Day-->
									<div id="kt_schedule_day_7" class="tab-pane fade show">
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">12:00 - 13:00
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Sean Bean</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">13:00 - 14:00
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Mark Randall</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">12:00 - 13:00
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Kendell Trevor</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
									</div>
									<!--end::Day-->
									<!--begin::Day-->
									<div id="kt_schedule_day_8" class="tab-pane fade show">
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">10:00 - 11:00
												<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Karina Clarke</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">14:30 - 15:30
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Kendell Trevor</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">13:00 - 14:00
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Walter White</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
									</div>
									<!--end::Day-->
									<!--begin::Day-->
									<div id="kt_schedule_day_9" class="tab-pane fade show">
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">14:30 - 15:30
												<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Karina Clarke</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">9:00 - 10:00
												<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Yannis Gloverson</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
										<!--begin::Time-->
										<div class="d-flex flex-stack position-relative mt-8">
											<!--begin::Bar-->
											<div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
											<!--end::Bar-->
											<!--begin::Info-->
											<div class="fw-semibold ms-5 text-gray-600">
												<!--begin::Time-->
												<div class="fs-5">9:00 - 10:00
												<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
												<!--end::Time-->
												<!--begin::Title-->
												<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
												<!--end::Title-->
												<!--begin::User-->
												<div class="text-gray-400">Lead by
												<a href="#">Bob Harris</a></div>
												<!--end::User-->
											</div>
											<!--end::Info-->
											<!--begin::Action-->
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
											<!--end::Action-->
										</div>
										<!--end::Time-->
									</div>
									<!--end::Day-->
								</div>
								<!--end::Tab Content-->
							</div>
							<!--end:::Tab pane-->
							<!--begin:::Tab pane-->
							<div class="tab-pane fade" id="kt_contact_view_activity" role="tabpanel">
								<!--begin::Timeline-->
								<div class="timeline-label">
									<!--begin::Item-->
									<div class="timeline-item">
										<!--begin::Label-->
										<div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
										<!--end::Label-->
										<!--begin::Badge-->
										<div class="timeline-badge">
											<i class="ki-duotone ki-abstract-8 text-warning fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Badge-->
										<!--begin::Text-->
										<div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And keep structure</div>
										<!--end::Text-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="timeline-item">
										<!--begin::Label-->
										<div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
										<!--end::Label-->
										<!--begin::Badge-->
										<div class="timeline-badge">
											<i class="ki-duotone ki-abstract-8 text-success fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Badge-->
										<!--begin::Content-->
										<div class="timeline-content d-flex">
											<span class="fw-bold text-gray-800 ps-3">AEOL meeting</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="timeline-item">
										<!--begin::Label-->
										<div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
										<!--end::Label-->
										<!--begin::Badge-->
										<div class="timeline-badge">
											<i class="ki-duotone ki-abstract-8 text-danger fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Badge-->
										<!--begin::Desc-->
										<div class="timeline-content fw-bold text-gray-800 ps-3">Make deposit
										<a href="#" class="text-primary">USD 700</a>. to ESL</div>
										<!--end::Desc-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="timeline-item">
										<!--begin::Label-->
										<div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
										<!--end::Label-->
										<!--begin::Badge-->
										<div class="timeline-badge">
											<i class="ki-duotone ki-abstract-8 text-primary fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Badge-->
										<!--begin::Text-->
										<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
										<!--end::Text-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="timeline-item">
										<!--begin::Label-->
										<div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
										<!--end::Label-->
										<!--begin::Badge-->
										<div class="timeline-badge">
											<i class="ki-duotone ki-abstract-8 text-danger fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Badge-->
										<!--begin::Desc-->
										<div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
										<a href="#" class="text-primary">#XF-2356</a>.</div>
										<!--end::Desc-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="timeline-item">
										<!--begin::Label-->
										<div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
										<!--end::Label-->
										<!--begin::Badge-->
										<div class="timeline-badge">
											<i class="ki-duotone ki-abstract-8 text-primary fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Badge-->
										<!--begin::Text-->
										<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
										<!--end::Text-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="timeline-item">
										<!--begin::Label-->
										<div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
										<!--end::Label-->
										<!--begin::Badge-->
										<div class="timeline-badge">
											<i class="ki-duotone ki-abstract-8 text-danger fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Badge-->
										<!--begin::Desc-->
										<div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
										<a href="#" class="text-primary">#XF-2356</a>.</div>
										<!--end::Desc-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="timeline-item">
										<!--begin::Label-->
										<div class="timeline-label fw-bold text-gray-800 fs-6">10:30</div>
										<!--end::Label-->
										<!--begin::Badge-->
										<div class="timeline-badge">
											<i class="ki-duotone ki-abstract-8 text-success fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Badge-->
										<!--begin::Text-->
										<div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch preparion meeting</div>
										<!--end::Text-->
									</div>
									<!--end::Item-->
								</div>
								<!--end::Timeline-->
							</div>
							<!--end:::Tab pane-->
						</div>
						<!--end::Tab content-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Contacts-->
			</div>
			<!--end::Content-->
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>{{ __('Profile Information') }}</h4>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>{{ __('Name:') }}</strong> {{ Auth::user()->name }}
                        </li>
                        <li class="list-group-item">
                            <strong>{{ __('Email:') }}</strong> {{ Auth::user()->email }}
                        </li>

                        @if (Auth::user()->role)
                            <li class="list-group-item">
                                <strong>{{ __('Role:') }}</strong> {{ Auth::user()->role }}
                            </li>
                        @endif
                        
                        @if (Auth::user()->address)
                            <li class="list-group-item">
                                <strong>{{ __('Address:') }}</strong> {{ Auth::user()->address }}
                            </li>
                        @endif
                        
                        @if (Auth::user()->phone)
                            <li class="list-group-item">
                                <strong>{{ __('Phone:') }}</strong> {{ Auth::user()->phone }}
                            </li>
                        @endif

                        @if (Auth::user()->altphone)
                            <li class="list-group-item">
                                <strong>{{ __('Alternative Phone:') }}</strong> {{ Auth::user()->altphone }}
                            </li>
                        @endif

                        @if (Auth::user()->qrcode)
                            <li class="list-group-item">
                                <strong>{{ __('QR Code:') }}</strong> 
                                <div>
                                    <img src="{{ asset('storage/' . Auth::user()->qrcode) }}" alt="QR Code" class="img-thumbnail" width="200">
                                </div>
                            </li>
                        @endif

                        @if (Auth::user()->image)
                            <li class="list-group-item">
                                <strong>{{ __('Profile Image:') }}</strong> 
                                <img src="{{ asset('storage/profile_images/' . Auth::user()->image) }}" alt="Profile Image" class="img-thumbnail" width="100">
                            </li>
                        @endif
                    </ul>

                    <div class="mt-3">
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">{{ __('Update Profile') }}</a>
                    </div>
                    <a href="{{ route('invitations.create') }}" class="btn btn-primary float-right">{{ __('Create New Invitation') }}</a>
    
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection