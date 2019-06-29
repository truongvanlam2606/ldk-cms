<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
    style="min-height: 600px; background-image: url(@asset('img/theme/profile-cover.jpg')); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    {{-- <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello {{ Auth::user()->name }}</h1>
                <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with
                    your work and manage your projects or assigned tasks</p>
                <button class="btn btn-info">Save & Exit</button>
            </div>
        </div>
    </div> --}}
</div>
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-3 order-xl-2 mb-5 mb-xl-0">
            <div class="card card-profile shadow">
                <div class="card-body pt-0 pt-md-4">
                    <div class="row">
                        <div class="col">
                            <div class="card-profile-stats d-flex justify-content-center">
                                <label for="fileupload" style="margin-right:0px !important">
                                <img src="@asset('img/theme/team-4-800x800.jpg')" class="rounded-circle" style="max-width:180px"></label>
                                <input type="file" id="fileupload" style="visibility: hidden;width:0px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">My account</h3>
                        </div>
                        <div class="col-4 text-right">
                            <button class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <h6 class="heading-small text-muted mb-4">Admin information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-username">Username</label>
                                        <input type="text" id="input-username"
                                            class="form-control form-control-alternative" placeholder="lucky.jesse">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Email address</label>
                                        <input type="email" id="input-email"
                                            class="form-control form-control-alternative"
                                            placeholder="jesse@example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-first-name">Phone</label>
                                        <input type="text" id="input-first-name"
                                            class="form-control form-control-alternative" placeholder="0766814542">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-last-name">Status</label>
                                        <select name="" id="input-last-name" class="form-control form-control-alternative">
                                            <option value="1">On</option>
                                            <option value="0">Off</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-first-name">Password</label>
                                        <input type="text" id="input-first-name"
                                            class="form-control form-control-alternative" placeholder="Hoang123@">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-last-name">Comfirm Password</label>
                                        <input type="text" id="input-last-name"
                                            class="form-control form-control-alternative" placeholder="Hoang123@">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-role">Role</label>
                                        <select name="" id="input-role" class="form-control form-control-alternative">
                                            <option value="1">Admin</option>
                                            <option value="0">Dev</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
