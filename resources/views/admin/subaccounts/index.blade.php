@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>All Sub-Accounts</h2>
    </div>

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Card-->
                <div class="card">
                    <div class="card-body py-4">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_subaccounts">
                                <thead>
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-200px">Name</th>
                                        <th class="min-w-150px">Email</th>
                                        <th class="min-w-150px">Relationship</th>
                                        <th class="min-w-150px">Owner</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 fw-semibold">
                                    @forelse ($subAccounts as $sub)
                                    <tr>
                                        <td>{{ $sub->name }}</td>
                                        <td>{{ $sub->email }}</td>
                                        <td>{{ ucfirst($sub->relationship) }}</td>
                                        <td>{{ $sub->user->name }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted">No sub-accounts found.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
