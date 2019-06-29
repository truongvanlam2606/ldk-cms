<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-default">
                <div class="container" style="max-width:100%">
                    <a class="navbar-brand" href="#">{{ __('Page Management') }}</a>
                    <div class="collapse navbar-collapse" id="navbar-default">
                        <div class="navbar-collapse-header">
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6 collapse-close">
                                    <button type="button" class="navbar-toggler" data-toggle="collapse"
                                        data-target="#navbar-default" aria-controls="navbar-default"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="{{ route('dashboard.page::create') }}">
                                    <i class="ni ni-fat-add"></i><span style="font-size:14px"> {{ __('Create') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="container-fluid mt--7">
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">{{ __('Page table') }}</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush" style="width:100%">
                        <thead class="thead-light">
                            <tr>
                                <th style="width:5%"><input type="checkbox"></th>
                                <th style="width:15%">{{ __('Status') }}</th>
                                <th style="width:25%">{{ __('Title') }}</th>
                                <th style="width:10%">{{ __('Description') }}</th>
                                <th style="width:15%">{{ __('Thumbnail') }}</th>
                                <th style="width:20%">{{ __('Template') }}</th>
                                <th style="width:10%">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($pages as $page)
                            <tr>
                                <td><input type="checkbox"></td>
                                <td scope="row">
                                    <span class="badge badge-dot mr-4">
                                        <i class="{{ $page->title ? 'bg-success' : 'bg-warning' }}"></i>{{ $page->title ? 'On' : 'Off' }}                                            
                                    </span>
                                </td>
                                <td>
                                    {{ $page->title }}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">{{ $page->title }}</span>
                                </td>
                                <td>
                                    <div class="avatar-group">
                                        {{ $page->thumbnail }}
                                    </div>
                                </td>
                                <td>
                                    {{ $page->template }}
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">{{ __('View') }}</a>
                                            <a class="dropdown-item" href="#">{{ __('Edit') }}</a>
                                            <a class="dropdown-item" href="#">{{ __('Delete') }}</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                            {{-- $pages->links() --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>