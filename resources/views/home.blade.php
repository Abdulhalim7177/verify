@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="">
		@if ($isActive)
    <div class="alert alert-success">
        You have an active subscription.
        @if ($subAccount)
            <span class="badge bg-info">Access via {{ $subAccount->user->name }}</span>
        @endif
    </div>
@else
    <div class="alert alert-warning">
        You do not have an active subscription.
    </div>
@endif

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
							<a href="{{ route('profile.edit') }}" class="btn btn-sm btn-light btn-active-light-primary">
							<i class="ki-duotone ki-messages fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
								<span class="path4"></span>
								<span class="path5"></span>
							</i>{{ __('Update Profile') }}</a>
							<!--end::Chat-->
							<!--end::Action menu-->
						</div>
						<!--end::Card toolbar-->
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body pt-5">
						@if(Auth::user()->name || Auth::user()->email || Auth::user()->phone || Auth::user()->role || Auth::user()->address || Auth::user()->altphone || Auth::user()->qrcode || Auth::user()->image)
							<!--begin::Profile-->
							<div class="d-flex gap-7 align-items-center">
								<!--begin::Avatar-->
								@if(Auth::user()->image)
									<div class="symbol symbol-circle symbol-100px"> 
										<img src="{{ asset('storage/profile_images/' . Auth::user()->image) }}" alt="" />
									</div>
								@endif
								<!--end::Avatar-->
								<!--begin::Contact details-->
								<div class="d-flex flex-column gap-2">
									<!--begin::Name-->
									@if(Auth::user()->name)
										<h3 class="mb-0">{{ Auth::user()->name }}</h3>
									@endif
									<!--end::Name-->
									<!--begin::Email-->
									@if(Auth::user()->email)
										<div class="d-flex align-items-center gap-2">
											<i class="ki-duotone ki-sms fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
											<a href="#" class="text-muted text-hover-primary">{{ Auth::user()->email }}</a>
										</div>
									@endif
									<!--end::Email-->
									<!--begin::Phone-->
									@if(Auth::user()->phone)
										<div class="d-flex align-items-center gap-2">
											<i class="ki-duotone ki-phone fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
											<a href="#" class="text-muted text-hover-primary">{{ Auth::user()->phone }}</a>
										</div>
									@endif
									<!--end::Phone-->
									
									<!--begin::Role-->
									@if(Auth::user()->role)
										<div class="d-flex align-items-center gap-2">
											<i class="ki-duotone ki-phone fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
											<a href="#" class="text-muted text-hover-primary">{{ Auth::user()->role }}</a>
										</div>
									@endif
									<!--end::Role-->
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
									</i>Invitations</a>
								</li>
								<!--end:::Tab item-->
								<!--begin:::Tab item-->
								<li class="nav-item">
									<a class="nav-link text-active-primary d-flex align-items-center pb-4" data-bs-toggle="tab" href="#kt_contact_view_activity">
									<i class="ki-duotone ki-save-2 fs-4 me-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>View Qr Code</a>
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
										@if(Auth::user()->name)
											<div class="d-flex flex-column gap-1">
												<div class="fw-bold text-muted">User Name</div>
												<div class="fw-bold fs-5">{{Auth::user()->name}}</div>
											</div>
										@endif
										<!--end::Company name-->
										<!--begin::Phone-->
										@if(Auth::user()->phone)
											<div class="d-flex flex-column gap-1">
												<div class="fw-bold text-muted">Phone</div>
												<div class="fw-bold fs-5">{{Auth::user()->phone}}</div>
											</div>
										@endif
										<!--end::Phone-->
										<!--begin::Alternative Phone-->
										@if(Auth::user()->altphone)
											<div class="d-flex flex-column gap-1">
												<div class="fw-bold text-muted">Alternative Phone</div>
												<div class="fw-bold fs-5">{{Auth::user()->altphone}}</div>
											</div>
										@endif
										<!--end::Alternative Phone-->
										<!--begin::Address-->
										@if(Auth::user()->address)
											<div class="d-flex flex-column gap-1">
												<div class="fw-bold text-muted">Address</div>
												<p>{{Auth::user()->address}}
												<br />
											</div>
										@endif
										<!--end::Address-->
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
								</div>
								<!--end:::Tab pane-->
								<!--begin:::Tab pane-->
								<div class="tab-pane fade" id="kt_contact_view_activity" role="tabpanel">
									<div class="d-flex justify-content-center">
										@if(Auth::user()->qrcode)
											<img src="{{ asset('storage/' . Auth::user()->qrcode) }}" alt="QR Code" class="img-thumbnail" width="300">
										@endif
									</div>
								</div>
								<!--end:::Tab pane-->
							</div>
							<!--end::Tab content-->
						@else
							<div class="d-flex justify-content-center">
								<a href="{{ route('profile.edit') }}" class="btn btn-primary">{{ __('Update Profile') }}</a>
							</div>
						@endif
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

<hr class="my-4">
<h4>My Sub-Accounts</h4>

<!-- Add Family Member Button -->
<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#subAccountModal">
    Add Family Member
</button>

<!-- Sub-Accounts Table -->
<table class="table">
    <thead><tr><th>Name</th><th>Email</th><th>Relationship</th><th>Action</th></tr></thead>
    <tbody>
        @forelse ($subAccounts as $sub)
            <tr>
                <td>{{ $sub->name }}</td>
                <td>{{ $sub->email ?? '—' }}</td>
                <td>{{ ucfirst($sub->relationship) }}</td>
                <td>
                    <form method="POST" action="{{ route('subaccounts.destroy', $sub) }}">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Remove sub-account?')">Remove</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="4">No sub-accounts yet.</td></tr>
        @endforelse
    </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="subAccountModal" tabindex="-1" aria-labelledby="subAccountModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="{{ route('subaccounts.store') }}" class="modal-content">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title">Add Family Sub-Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email (optional)</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label>Relationship</label>
            <select name="relationship" class="form-select" required>
                <option value="child">Child</option>
                <option value="spouse">Spouse</option>
                <option value="sibling">Sibling</option>
                <option value="parent">Parent</option>
                <option value="other" selected>Other</option>
            </select>
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Save Sub-Account</button>
      </div>
    </form>
  </div>
</div>

@endsection