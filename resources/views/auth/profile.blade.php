@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="">
        <!--begin::Content-->
        <div class="card m-5">
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
                        <h2>{{ __('Update Profile') }}</h2>
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
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" id="profileForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}" disabled>
                        </div>

                        <div class="form-group">
                            <input type="text" name="role" id="role" class="form-control" value="{{ Auth::user()->role }}" hidden>
                        </div>

                        <div class="form-group">
                            <label for="address">{{ __('Street Address') }}</label>
                            <input type="text" name="street_address" id="street_address" class="form-control" value="{{ Auth::user()->street_address }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="address">{{ __('House Number') }}</label>
                            <input type="text" name="house_number" id="house_number" class="form-control" value="{{ Auth::user()->house_number }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="phone">{{ __('Phone') }}</label>
                            <input type="text" name="phone" id="phone" class="form-control" value="{{ Auth::user()->phone }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="altphone">{{ __('Alternative Phone') }}</label>
                            <input type="text" name="altphone" id="altphone" class="form-control" value="{{ Auth::user()->altphone }}" required>
                        </div>

                        <div class="form-group">
                            <label for="image">{{ __('Profile Image') }}</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">{{ __('Update Profile') }}</button>
                        </div>
                    </form>

                    @if (session('show_qr_button') && !Auth::user()->qrcode)
                        <form action="{{ route('resident.qrcode.generate') }}" method="POST" id="qrCodeForm">
                            @csrf
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success">{{ __('Generate QR Code') }}</button>
                            </div>
                        </form>
                    @endif
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Contacts-->
        </div>
        <!--end::Content-->
    </div>
</div>
@endsection