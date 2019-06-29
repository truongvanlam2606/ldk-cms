<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
    style="min-height: 600px; background-image: url(@asset('img/theme/profile-cover.jpg')); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello {{ Auth::user()->getName() }}</h1>
                <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with
                    your work and manage your projects or assigned tasks</p>
                <button class="btn btn-info">Save & Exit</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--7">
    <form action="">
        <div class="row">
            <div class="col-xl-4 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="card-body pt-0 pt-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-email">Name</label>
                            <input type="email" id="input-email"
                                class="form-control form-control-alternative"
                                placeholder="Admin">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Permissions</h3>
                            </div>
                            <div class="col-4 text-right">
                                <button class="btn btn-sm btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="heading-small text-muted mb-4">Admin Permissions</h6>
                        <ul class="list-unstyled">
                            <li>
                                <input type="checkbox" id="post">
                                <label for="post">Admin</label>
                                <ul style="list-style: none;">
                                    <li>
                                        <input type="checkbox" id="Createpost" value="CA">
                                        <label for="Createpost">Create</label>
                                        <input type="checkbox" id="Editpost"  value="EA">
                                        <label for="Editpost">Edit</label>
                                        <input type="checkbox" id="Deletepost"  value="DA">
                                        <label for="Deletepost">Delete</label>
                                        <input type="checkbox" id="Viewpost"  value="VA">
                                        <label for="Viewpost">View</label>
                                    </li>
                                </ul>
                            </li>
                            <hr class="my-4">
                            <li>
                                <input type="checkbox" id="post">
                                <label for="post">User</label>
                                <ul style="list-style: none;">
                                    <li>
                                        <input type="checkbox" id="Createpost" value="CU">
                                        <label for="Createpost">Create</label>
                                        <input type="checkbox" id="Editpost" value="EU">
                                        <label for="Editpost">Edit</label>
                                        <input type="checkbox" id="Deletepost" value="DU">
                                        <label for="Deletepost">Delete</label>
                                        <input type="checkbox" id="Viewpost" value="VU">
                                        <label for="Viewpost">View</label>
                                    </li>
                                </ul>
                            </li>
                            <hr class="my-4">
                            <li>
                                <input type="checkbox" id="post">
                                <label for="post">Post</label>
                                <ul style="list-style: none;">
                                    <li>
                                        <input type="checkbox" id="Createpost" value="CP">
                                        <label for="Createpost">Create</label>
                                        <input type="checkbox" id="Editpost" value="EP">
                                        <label for="Editpost">Edit</label>
                                        <input type="checkbox" id="Deletepost" value="DP">
                                        <label for="Deletepost">Delete</label>
                                        <input type="checkbox" id="Viewpost" value="VP">
                                        <label for="Viewpost">View</label>
                                    </li>
                                </ul>
                            </li>
                            <hr class="my-4">
                            <li>
                                <input type="checkbox" id="post">
                                <label for="post">Menu</label>
                                <ul style="list-style: none;">
                                    <li>
                                        <input type="checkbox" id="Createpost" value="CM">
                                        <label for="Createpost">Create</label>
                                        <input type="checkbox" id="Editpost" value="EM">
                                        <label for="Editpost">Edit</label>
                                        <input type="checkbox" id="Deletepost" value="DM">
                                        <label for="Deletepost">Delete</label>
                                        <input type="checkbox" id="Viewpost" value="VM">
                                        <label for="Viewpost">View</label>
                                    </li>
                                </ul>
                            </li>
                            <hr class="my-4">
                            <li>
                                <input type="checkbox" id="post">
                                <label for="post">Theme</label>
                                <ul style="list-style: none;">
                                    <li>
                                        <input type="checkbox" id="Createpost" value="CT">
                                        <label for="Createpost">Create</label>
                                        <input type="checkbox" id="Editpost" value="ET">
                                        <label for="Editpost">Edit</label>
                                        <input type="checkbox" id="Deletepost" value="DT">
                                        <label for="Deletepost">Delete</label>
                                        <input type="checkbox" id="Viewpost" value="VT">
                                        <label for="Viewpost">View</label>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Footer -->
    <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                    © 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative
                        Tim</a>
                </div>
            </div>
            <div class="col-xl-6">
                <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About
                            Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md"
                            class="nav-link" target="_blank">MIT License</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
