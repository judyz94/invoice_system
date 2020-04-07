@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title mb-0"><strong>{{ __('Users') }}  <i class="fas fa-paw"></i></strong></h3>
                    </div>

                    <nav class="navbar navbar-light bg-light">
                        <a href="{{ route('register') }}" class="btn button"><i class="fas fa-plus"></i>
                            {{ __('Create a new user') }}</a>
                    </nav>

                    <!-- Users list -->
                    <div class="table-responsive-lg">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('E-Mail') }}</th>
                            <th>{{ __('Role') }}</th>
                            <th>{{ __('Permissions') }}</th>
                            <th class="text-right">{{ __('Actions') }}</th>
                        </tr>
                        </thead>

                        <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td></td>
                                <td></td>
                                <td class="text-right">
                                    <div class="btn-group btn-group-sm" role="group" aria-label="{{ __('Actions') }}">
                                        <a href="{{ route('users.show', $user) }}" class="btn btn-link"
                                           title="{{ __('Show Details') }}">
                                            <i class="fas fa-eye" style="color:black"></i>
                                        </a>
                                        <a href="{{ route('users.edit', $user) }}" class="btn btn-link"
                                           title="{{ __('Edit User') }}">
                                            <i class="fas fa-edit" style="color:black"></i>
                                        </a>
                                        <button type="button" class="btn btn-link text-danger"
                                                data-route="{{ route('users.destroy', $user) }}"
                                                data-toggle="modal"
                                                data-target="#confirmDeleteModal"
                                                title="{{ __('Delete User') }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <p class="alert alert-secondary text-center">
                                    {{ __('No users were found') }}
                                </p>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                        <!-- Pagination -->
                        <ul class="pagination justify-content-center">
                            {{ $users->links() }}
                        </ul>

                    </div>
                </div>
        </div>
        </div>
    </div>
@endsection

@push('modals')
    @include('partials.__confirm_delete_modal')
@endpush
@push('scripts')
    <script src="{{ asset(mix('js/delete-modal.js')) }}"></script>
@endpush

