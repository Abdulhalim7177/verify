@extends('layouts.admin')

@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search user" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <!--begin::Add user-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUserModal">
                                <i class="ki-duotone ki-plus fs-2 d-none d-md-inline-block me-2"></i>Add Account</button>
                            <!--end::Add user-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                            <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-50px pe-0 d-none d-md-table-cell">Id</th>
                                    <th class="min-w-200px">Name</th>
                                    <th class="min-w-125px d-none d-md-table-cell">Email</th>
                                    <th class="min-w-125px d-none d-lg-table-cell">Address</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold">
                                @foreach($users as $user)
                                <tr>
                                    <td class="pe-0 d-none d-md-table-cell">
                                        {{ $user->id }}
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="#">
                                                    <div class="symbol-label">
                                                        <img src="assets/media/avatars/300-6.jpg" alt="User Avatar" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::User details-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ $user->name }}</a>
                                                <div class="d-md-none text-muted">{{ $user->email }}</div>
                                                <span>{{ $user->role }}</span>
                                            </div>
                                            <!--begin::User details-->
                                        </div>
                                    </td>
                                    <td class="d-none d-md-table-cell">{{ $user->email }}</td>
                                    <td class="d-none d-lg-table-cell">
                                        <div class="badge badge-light fw-bold">{{ $user->phone }}</div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm btn-icon me-1" data-bs-toggle="modal" data-bs-target="#viewUserModal{{ $user->id }}" title="View">
                                            <i class="fas fa-eye"></i>
                                        
                                        </a>
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm btn-icon me-1" data-bs-toggle="modal" data-bs-target="#updateUserModal{{ $user->id }}" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#deleteUserModal{{ $user->id }}" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <!--end::Menu-->
                                    </td>
                                </tr>


                                <!-- modals  -->
                                <!-- View User Modal -->
                                <div class="modal fade" id="viewUserModal{{ $user->id }}" tabindex="-1" aria-labelledby="viewUserModalLabel{{ $user->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewUserModalLabel{{ $user->id }}">User Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-center mb-5">
                                                    <div class="symbol symbol-100px symbol-circle mb-3">
                                                        <img src="{{ asset('storage/profile_images/' . $user->image) }}" alt="User Image" onerror="this.src='assets/media/avatars/blank.png'">
                                                    </div>
                                                    <h2>{{ $user->name }}</h2>
                                                    <span class="badge badge-light-primary">{{ $user->role }}</span>
                                                </div>
                                                <div class="d-flex flex-column px-5">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="text-muted">ID:</span>
                                                        <span class="fw-bold">{{ $user->id }}</span>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="text-muted">Email:</span>
                                                        <span class="fw-bold text-end">{{ $user->email }}</span>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="text-muted">Address:</span>
                                                        <span class="fw-bold text-end">{{ $user->address }}</span>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="text-muted">Phone:</span>
                                                        <span class="fw-bold text-end">{{ $user->phone }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Update User Modal -->
                                <div class="modal fade" id="updateUserModal{{ $user->id }}" tabindex="-1" aria-labelledby="updateUserModalLabel{{ $user->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="updateUserModalLabel{{ $user->id }}">Update User</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="name{{ $user->id }}" class="form-label">Name</label>
                                                        <input type="text" class="form-control" id="name{{ $user->id }}" name="name" value="{{ $user->name }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email{{ $user->id }}" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="email{{ $user->id }}" name="email" value="{{ $user->email }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="address{{ $user->id }}" class="form-label">Address</label>
                                                        <input type="text" class="form-control" id="address{{ $user->id }}" name="address" value="{{ $user->address }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image{{ $user->id }}" class="form-label">Profile Image</label>
                                                        <input type="file" class="form-control" id="image{{ $user->id }}" name="image">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Delete User Modal -->
                                <div class="modal fade" id="deleteUserModal{{ $user->id }}" tabindex="-1" aria-labelledby="deleteUserModalLabel{{ $user->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteUserModalLabel{{ $user->id }}">Confirm Delete</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete user <strong>{{ $user->name }}</strong>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
                <!-- Pagination will be inserted here by JavaScript -->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->

<!-- Create User Modal -->
<div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createUserModalLabel">Create New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Profile Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create User</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
// Document ready function
document.addEventListener('DOMContentLoaded', function() {
    // Initialize variables
    const userTable = document.querySelector('#kt_table_users');
    const searchInput = document.querySelector('[data-kt-user-table-filter="search"]');
    const tableBody = userTable.querySelector('tbody');
    const rows = Array.from(tableBody.querySelectorAll('tr'));
    
    // Pagination settings
    const rowsPerPage = 10;
    let currentPage = 1;
    let filteredRows = [...rows];
    
    // Create pagination container
    const paginationContainer = document.createElement('div');
    paginationContainer.className = 'card-footer d-flex justify-content-between align-items-center';
    userTable.parentNode.insertAdjacentElement('afterend', paginationContainer);
    
    // Initialize the table
    initTable();
    
    // Search functionality
    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase().trim();
            
            // Filter rows based on search term
            filteredRows = rows.filter(row => {
                const name = row.querySelector('a.text-gray-800').textContent.toLowerCase();
                const email = row.querySelector('td:nth-child(3)') ? 
                    row.querySelector('td:nth-child(3)').textContent.toLowerCase() : '';
                const phone = row.querySelector('.badge') ? 
                    row.querySelector('.badge').textContent.toLowerCase() : '';
                
                return name.includes(searchTerm) || 
                       email.includes(searchTerm) || 
                       phone.includes(searchTerm);
            });
            
            // Reset to first page when searching
            currentPage = 1;
            
            // Update the table
            updateTable();
        });
    }
    
    // Initialize the table and pagination
    function initTable() {
        updateTable();
    }
    
    // Update the table based on current filters and pagination
    function updateTable() {
        // Clear table body
        tableBody.innerHTML = '';
        
        // Calculate pagination
        const startIndex = (currentPage - 1) * rowsPerPage;
        const endIndex = startIndex + rowsPerPage;
        const paginatedRows = filteredRows.slice(startIndex, endIndex);
        
        // No results message
        if (paginatedRows.length === 0) {
            const noResultsRow = document.createElement('tr');
            noResultsRow.innerHTML = `<td colspan="5" class="text-center py-10">No matching records found</td>`;
            tableBody.appendChild(noResultsRow);
        } else {
            // Add rows to the table
            paginatedRows.forEach(row => {
                tableBody.appendChild(row.cloneNode(true));
            });
        }
        
        // Update pagination UI
        updatePagination();
    }
    
    // Update pagination controls
    function updatePagination() {
        const totalPages = Math.ceil(filteredRows.length / rowsPerPage);
        
        // Create pagination HTML
        let paginationHTML = `
            <div class="fs-6 fw-semibold text-gray-700">
                Showing ${filteredRows.length > 0 ? (currentPage - 1) * rowsPerPage + 1 : 0} 
                to ${Math.min(currentPage * rowsPerPage, filteredRows.length)} 
                of ${filteredRows.length} entries
            </div>
            <ul class="pagination">
                <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                    <a href="#" class="page-link" data-page="prev">
                        <i class="fas fa-angle-left"></i>
                    </a>
                </li>
        `;
        
        // Generate page numbers
        const maxVisiblePages = 5;
        let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
        let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);
        
        // Adjust if we're at the edge of the page range
        if (endPage - startPage + 1 < maxVisiblePages && startPage > 1) {
            startPage = Math.max(1, endPage - maxVisiblePages + 1);
        }
        
        for (let i = startPage; i <= endPage; i++) {
            paginationHTML += `
                <li class="page-item ${currentPage === i ? 'active' : ''}">
                    <a href="#" class="page-link" data-page="${i}">${i}</a>
                </li>
            `;
        }
        
        paginationHTML += `
                <li class="page-item ${currentPage === totalPages || totalPages === 0 ? 'disabled' : ''}">
                    <a href="#" class="page-link" data-page="next">
                        <i class="fas fa-angle-right"></i>
                    </a>
                </li>
            </ul>
        `;
        
        // Update the pagination container
        paginationContainer.innerHTML = paginationHTML;
        
        // Add event listeners to pagination controls
        document.querySelectorAll('.page-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                const page = this.getAttribute('data-page');
                
                if (page === 'prev') {
                    if (currentPage > 1) currentPage--;
                } else if (page === 'next') {
                    if (currentPage < totalPages) currentPage++;
                } else {
                    currentPage = parseInt(page);
                }
                
                updateTable();
            });
        });
    }
    
    // Initialize modals to work with dynamically loaded content
    document.addEventListener('click', function(e) {
        // Find closest button that triggers a modal
        const button = e.target.closest('[data-bs-toggle="modal"]');
        if (button) {
            const targetModal = button.getAttribute('data-bs-target');
            const modalElement = document.querySelector(targetModal);
            
            // Make sure modals are properly initialized after rows are changed
            if (modalElement && !modalElement._bsModal) {
                new bootstrap.Modal(modalElement);
            }
        }
    });
});
</script>
@endsection