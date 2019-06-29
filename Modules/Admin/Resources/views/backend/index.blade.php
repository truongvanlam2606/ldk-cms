<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-default">
                <div class="container" style="max-width:100%">
                    <a class="navbar-brand" href="#">{{ __('Administrator management') }}</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default"
                        aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-default">
                        <div class="navbar-collapse-header">
                            <div class="row">
                                <div class="col-6 collapse-brand">
                                    <a href="#">
                                        <img src="../../assets/img/brand/blue.png">
                                    </a>
                                </div>
                                <div class="col-6 collapse-close">
                                    <button type="button" class="navbar-toggler" data-toggle="collapse"
                                        data-target="#navbar-default" aria-controls="navbar-default"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="{{ route('dashboard.admin::create') }}">
                                    <i class="ni ni-fat-add"></i><span> Create</span>
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
                    <h3 class="mb-0">{{ __('List of Administrators') }}</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush" style="width:100%">
                        <thead class="thead-light">
                            <tr>
                                <th style="width:5%"><input type="checkbox"></th>
                                <th style="width:25%">{{ __('Name') }}</th>
                                <th style="width:10%">{{ __('Role') }}</th>
                                <th style="width:15%">{{ __('Status') }}</th>
                                <th style="width:15%">{{ __('Ip') }}</th>
                                <th style="width:20%">{{ __('Last login') }}</th>
                                <th style="width:10%">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <td><input type="checkbox"></td>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                        <span class="mb-0 text-sm">{{ $admin->getName() }}</span>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="{{ $admin->getStatusAsClass() }}"></i>{{ $admin->getStatusAsLabel() }}
                                    </span>
                                </td>
                                <td>192.152.144.15</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2">60%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="{{ route('dashboard.admin::edit', $admin) }}">{{ __('Edit') }}</a>
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
                            {{-- $admins->links() --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
