@extends('admin.master')

@section('title')
   Admin Dashboard | Team Members
@endsection

@section('body')
<section class="content py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Team Management</h3>
                        <div class="card-tools">
                            <a href="{{ route('team.create') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus-square"></i> Add New Member
                            </a>
                        </div>
                    </div>

                    <div class="card-body p-0 mb-0">
                        <div class="table-responsive">
                            <table id="example1" class="table table-sm table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th width="20">SL</th>
                                        <th width="100">Action</th>
                                        <th width="80">Image</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Company</th>
                                        <th width="80">Order</th>
                                        <th width="100">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = (($teamMembers->currentPage() - 1) * $teamMembers->perPage() + 1); @endphp
                                    @forelse($teamMembers as $member)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>
                                            <div class="dropdown show">
                                                <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" id="dropdownMenuLink{{ $member->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink{{ $member->id }}">
                                                    <a class="dropdown-item" href="{{ route('team.edit', $member->id) }}">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    
                                                    <form action="{{ route('team.destroy', $member->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{ route('imagecache', ['template' => 'ppxs', 'filename' => $member->fiName()]) }}" alt="" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                                        </td>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->designation }}</td>
                                        <td>{{ $member->company }}</td>
                                        <td>{{ $member->order }}</td>
                                        <td>
                                            @if($member->status)
                                                <span class="badge badge-primary">Active</span>
                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center">No team members found.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="card-footer clearfix">
                        <div class="float-right">
                            {!! $teamMembers->render() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
