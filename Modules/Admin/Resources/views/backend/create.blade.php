<div class="header py-8">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1 class="display-2 text-white">{{ __('Create Admin Account') }}</h1>
            </div>
        </div>
    </div>
</div>
<form action="{{ route('dashboard.admin::store') }}" method="POST">
    @csrf
    @method('POST')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-3 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <!-- <div class="card-profile-stats d-flex justify-content-center">
                                    <label for="fileupload" style="margin-right:0px !important">
                                    <img src="@asset('img/theme/team-4-800x800.jpg')" class="rounded-circle" style="max-width:180px"></label>
                                    <input type="file" id="fileupload" style="visibility: hidden;width:0px">
                                </div> -->
                                @include('components.selects.standard', [
                                    'name' => 'status',
                                    'label' => __('Status'),
                                    'isRequired' => true,
                                    'default' => '1',
                                    'options' => ['0' => 'Off', '1' => 'On']
                                ])
                                @include('components.selects.standard', [
                                    'name' => 'role',
                                    'label' => __('Role'),
                                    'isRequired' => true,
                                    'default' => '1',
                                    'options' => ['0' => 'Dev', '1' => 'Admin']
                                ])
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
                                <h3 class="mb-0">{{ __('Admin account') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <button class="btn btn-sm btn-primary">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="heading-small text-muted mb-4">{{ __('Admin information') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    @include('components.inputs.text', 
                                        ['name' => 'name', 
                                        'placeholder' => __('Jesse'), 
                                        'label' => __('Username'), 
                                        'default' => '',
                                        'isRequired' => true]) 
                                </div>
                                <div class="col-lg-6">
                                    @include('components.inputs.email', 
                                        ['name' => 'email', 
                                        'placeholder' => __('jesse@example.com'), 
                                        'label' => __('Email address'), 
                                        'default' => '',
                                        'isRequired' => true])
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    @include('components.inputs.text', 
                                        ['name' => 'phone', 
                                        'placeholder' => __('(+84) 0906-428-940'), 
                                        'default' => '',
                                        'label' => __('Phone')])
                                </div>                                
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    @include('components.inputs.password', 
                                        ['name' => 'password', 
                                        'placeholder' => __('Secret'), 
                                        'label' => __('Password'),
                                        'isRequired' => true])
                                </div>
                                <div class="col-lg-6">
                                    @include('components.inputs.password', 
                                        ['name' => 'password_confirmation', 
                                        'placeholder' => __('Re-enter your password'), 
                                        'label' => __('Confirm Password'),
                                        'isRequired' => true])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</form>
<footer></footer>