@extends('layouts.admin')
@section('title', 'Career Listings')

@section('content')
    <h4>All Career Posts</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('careers.create') }}" class="btn btn-success mb-3">+ Add New Career</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Location</th>
                <th>Type</th>
                <th>Email</th>
                <th>Contact No</th>
                <th>Deadline</th>
                <th>Posted By</th>
                <th>Post Image</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($careers as $career)
                <tr>
                    <td>{{ $career->title }}</td>
                    <td>{{ $career->location }}</td>
                    <td>{{ $career->job_type }}</td>
                    <td>{{ $career->email }}</td>
                    <td>{{ $career->contact_no }}</td>
                    <td>{{ $career->deadline }}</td>
                    @if($career->image)
                    <td>
                        <img src="{{ asset($career->image) }}" width="80" class="rounded" alt="career image">
                    </td>
                @else
                    <td>—</td>
                @endif
                    <td>{{ $career->admin->fullName ?? 'N/A' }}</td>
                    <td>
                        <!-- Edit Button -->
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $career->id }}">
                            ✏️
                        </button>

                        <!-- Delete Form -->
                        <form action="{{ route('careers.delete', $career->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this post?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">🗑️</button>
                        </form>
                    </td>
                </tr>

                <!-- ✅ Move the modal inside this loop -->
                <div class="modal fade" id="editModal{{ $career->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $career->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        
                        <form action="{{ route('careers.update', $career->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')
                            
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Career - {{ $career->title }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                

                                <div class="modal-body">
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <label>Optional Image</label>
                                            <input type="file" name="image" class="form-control">
                                            @if($career->image)
                                                <small>Current: <a href="{{ asset($career->image) }}" target="_blank">View Image</a></small>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label>Job Title</label>
                                            <input type="text" name="title" class="form-control" value="{{ $career->title }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Location</label>
                                            <input type="text" name="location" class="form-control" value="{{ $career->location }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Job Type</label>
                                            <select name="job_type" class="form-control" required>
                                                <option value="Full-time" {{ $career->job_type == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                                                <option value="Part-time" {{ $career->job_type == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                                                <option value="Contract" {{ $career->job_type == 'Contract' ? 'selected' : '' }}>Contract</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Deadline</label>
                                            <input type="date" name="deadline" class="form-control" value="{{ $career->deadline }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" value="{{ $career->email }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Contact No</label>
                                            <input type="text" name="contact_no" class="form-control" value="{{ $career->contact_no }}" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" rows="4" required>{{ $career->description }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-primary">Update Career</button>
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
