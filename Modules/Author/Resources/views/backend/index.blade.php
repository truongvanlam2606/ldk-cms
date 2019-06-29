
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-danger">
                            <div class="container">
                                <a class="navbar-brand" href="#">Default Color</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbar-default">
                                    <div class="navbar-collapse-header">
                                        <div class="row">
                                            <div class="col-6 collapse-brand">
                                                <a href="../../index.html">
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
                                            <a class="nav-link nav-link-icon" href="#">
                                                <i class="ni ni-favourite-28"></i>
                                                <span class="nav-link-inner--text d-lg-none">Discover</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link nav-link-icon" href="#">
                                                <i class="ni ni-notification-70"></i>
                                                <span class="nav-link-inner--text d-lg-none">Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="ni ni-settings-gear-65"></i>
                                                <span class="nav-link-inner--text d-lg-none">Settings</span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="navbar-default_dropdown_1">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </li>
                                    </ul>
    
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-sm-12">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Page visits</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th >Name <i class="fas fa-sort-alpha-down "></i> <i class="fas fa-sort-alpha-down-alt"></i></th>
                                    <th scope="col">Address <i class="fas fa-sort-alpha-down "></i> <i class="fas fa-sort-alpha-down-alt"></i></th>
                                    
                                    <th scope="col">Numberphone <i class="fas fa-sort-amount-down-alt"> </i><i class="fas fa-sort-amount-down"></i></th>
                                    <th scope="col">Status <i class="fas fa-sort-alpha-down "></i> <i class="fas fa-sort-alpha-down-alt"></i></th>      
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($posts as $post)
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="../../assets/img/theme/bootstrap.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{$post->getTitle()}}</span>
                                            </div>
                                        </div>
                                    </th>
    
                            
                                    <td>
                                      
                                    </td>
                                   
                                    <td>
                                        {{$post->published_at}}
                                    </td>
                                    <td>
                                        {{$post->author_id}}
                                    </td>
                                    <td>
                                        {{$post->view}}
                                    </td>
                                    <td>
                                        {{$post->status}}
                                    </td>
    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
    
                    </div>
    
                  
    
                </div>
            </div>
        </div>
    </div>
    
