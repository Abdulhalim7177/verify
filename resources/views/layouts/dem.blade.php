<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <!-- Scripts -->
    {{-- <link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet"> --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    {{-- <a class="dropdown-item" href="{{ route('profile') }}">
                                        {{ __('Profile') }}
                                    </a> --}}
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>




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