@extends('layouts.admin')
@section('title', 'Settings')

@section('content')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<!-- Update Own Profile -->
<h5>Update My Profile</h5>
<form action="{{ route('admin.updateSelf') }}" method="POST" enctype="multipart/form-data" class="mb-4">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-2">
            <label>Full Name</label>
            <input type="text" name="fullName" value="{{ $admin->fullName }}" class="form-control" required>
        </div>

        <div class="col-md-6 mb-2">
            <label>Profile Image</label>
            <input type="file" name="profileImage" class="form-control">
        </div>

        <div class="col-md-6 mb-2">
            <label>New Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="col-md-6 mb-2">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>
    </div>
    <button class="btn btn-primary mt-2">Update Profile</button>
</form>

<hr>

<!-- Show Validation Errors -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Show Success Message -->
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<!-- Create New Admin -->
<h5>Create New Admin</h5>
<form action="{{ route('admin.create') }}" method="POST" enctype="multipart/form-data" class="mb-4">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-2">
            <label>Username <span class="text-danger">*</span></label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="col-md-6 mb-2">
            <label>Email <span class="text-danger">*</span></label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="col-md-6 mb-2">
            <label>Password <span class="text-danger">*</span></label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="col-md-6 mb-2">
            <label>Confirm Password <span class="text-danger">*</span></label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <div class="col-md-6 mb-2">
            <label>Full Name <span class="text-danger">*</span></label>
            <input type="text" name="fullName" class="form-control" required>
        </div>

        <div class="col-md-6 mb-2">
            <label>Role <span class="text-danger">*</span></label>
            <select name="role" class="form-control" required>
                <option value="">-- Select Role --</option>
                <option value="editor">Editor</option>
                <option value="superadmin">Superadmin</option>
            </select>
        </div>

        <div class="col-md-6 mb-2">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <div class="col-md-6 mb-2">
            <label>Profile Image</label>
            <input type="file" name="profileImage" class="form-control">
        </div>
    </div>

    <button type="submit" class="btn btn-success mt-2">Create Admin</button>
</form>


<hr>

<!-- List of Admins -->
<h5>All Admins</h5>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Profile</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($admins as $a)
            <tr>
                <td><img src="{{ $a->profileImage ?? 'https://via.placeholder.com/40' }}" width="40" class="rounded-circle"></td>
                <td>{{ $a->username }}</td>
                <td>{{ $a->fullName }}</td>
                <td>{{ $a->email }}</td>
                <td>{{ $a->role }}</td>
                <td>{{ $a->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <!-- Edit Button -->
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editAdminModal{{ $a->id }}">✏️</button>

                    <!-- Delete Form -->
                    <form action="{{ route('admin.delete', $a->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">🗑️</button>
                    </form>
                </td>
            </tr>

            <!-- Modal for Edit Admin -->
            <div class="modal fade" id="editAdminModal{{ $a->id }}" tabindex="-1" aria-labelledby="editAdminLabel{{ $a->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <form action="{{ route('admin.update', $a->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editAdminLabel{{ $a->id }}">Edit Admin - {{ $a->username }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body row">
                                <div class="col-md-6 mb-2">
                                    <label>Username</label>
                                    <input type="text" name="username" value="{{ $a->username }}" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label>Full Name</label>
                                    <input type="text" name="fullName" value="{{ $a->fullName }}" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label>Email</label>
                                    <input type="email" name="email" value="{{ $a->email }}" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="{{ $a->phone }}" class="form-control">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label>Role</label>
                                    <select name="role" class="form-control" required>
                                        <option value="editor" {{ $a->role == 'editor' ? 'selected' : '' }}>Editor</option>
                                        <option value="superadmin" {{ $a->role == 'superadmin' ? 'selected' : '' }}>Superadmin</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label>Profile Image</label>
                                    <input type="file" name="profileImage" class="form-control">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label>New Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label>Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success">Update</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </tbody>
</table>

@endsection
