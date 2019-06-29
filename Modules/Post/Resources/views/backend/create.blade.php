<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row">
                <div class="col-sm-12">
                    {{-- <nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-success">
                                    <div class="container">
                                        <h2>
                                            {{__('Create Post')}}
                    </h2>
                </div>
                </nav> --}}
            </div>
        </div>
    </div>
</div>
</div>

<div class="container-fluid mt--7">
    <div class="row white">
        <div class="col-sm-9 bg-white ">
            <div class="card shadow tabbable-custom">

                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">{{__('Create Post')}}</h3>
                        </div>
                        <div class="col text-right">
                            <a href="#!" class="btn btn-sm btn-primary">{{__('Back')}}</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-10">
                        <div class="card bg-secondary shadow border-0">
                            <div class="card-body px-lg-5 py-lg-5">

                                <form action="{{ route('dashboard.post::store') }}" method="Post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="title">{{__('Title')}}</label>
                                                <input type="text" class="form-control" id="title" name='title'>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="thumbnail">{{__('Thumbnail')}}</label>
                                                <input type="file" class="form-control-file" id="thumbnail"
                                                    name='thumbnail'>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="description">{{__('Description')}}</label>

                                        <textarea class="form-control" id="description" rows="3" name='description'
                                            placeholder="Write a large text here ..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="content">{{__('Content')}}</label>
                                        <textarea class="form-control ckeditor" id="content" rows="10" name='content'
                                            placeholder="Write a large text here ..."></textarea>

                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">

                                                <div class="container">
                                                    <button type="button" class="btn btn-success sm"
                                                        data-toggle="collapse" data-target="#author-pop">Add
                                                        Author</button>
                                                    <div id="author-pop" class="collapse">
                                                        <input type="select" name='author_id' class="form-control"
                                                            id="author">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="slug">{{__('Slug')}}</label>
                                                    <input type="text" class="form-control" id="slug" name='slug'>
                                                </div>
                                            </div>
                                            <div class="w-100"></div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="status">{{__('Status')}}</label>
                                                    <select id="status" class="form-control" name=status>
                                                        <option selected>Choose...</option>
                                                        <option value="0">Enable</option>
                                                        <option value="1">Disable</option>
                                                        <option value="2">Draft</option>
                                                        <option value="3">Protected Password</option>
                                                        <option value="4">Private</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label for="publish_at">{{__('Publish at')}}</label>
                                                    <div class="input-group input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ni ni-calendar-grid-58"></i></span>
                                                        </div>
                                                        <input data-provide="datepicker" class="form-control datepicker"
                                                            name='published_at' placeholder="Select date"
                                                            data-date-format="yyyy/mm/dd" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-default">{{__('Create')}}</button>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div style="    text-align: center;" class="col-sm-3 right-sidebar bg-light">
            <div class="section">
                <div class="widget-title">
                    <h4>
                        <span>Publish</span>
                    </h4>
                </div>
                <div class="widget-body">
                    <div class="btn-set">
                        <button type="submit" name="submit" value="save" class="btn btn-info btn-sm">
                            <i class="fa fa-save"></i> Save
                        </button>

                    </div>


                </div>
            </div>

            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4><label for="status" class="control-label required" aria-required="true">Status</label></h4>
                </div>
                <div class="widget-body">
                    <div class="ui-select-wrapper">
                        <select class="form-control ui-select ui-select" id="status" name="status">
                            <option value="0">Draft</option>
                            <option value="1">Published</option>
                            <option value="2">Pending</option>
                        </select>

                    </div>

                </div>
            </div>

            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4><label for="format_type" class="control-label required" aria-required="true">Format</label></h4>
                </div>

            </div>
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4><label for="image" class="control-label">Image</label></h4>
                </div>
                <div class="widget-body">
                    <div class="image-box">
                        <input type="hidden" name="image" value="" class="image-data">
                        <div class="preview-image-wrapper ">
                            <img src="https://cms.botble.com/vendor/core/images/placeholder.png" alt="preview image"
                                class="preview_image" width="150">
                            <a class="btn_remove_image" title="Remove image">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                        <div class="image-box-actions">
                            <a href="#" class="btn_gallery" data-result="image" data-action="select-image">
                                Choose image
                            </a>
                        </div>
                    </div>




                </div>
            </div>
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4><label for="tag" class="control-label">Tags</label></h4>
                </div>
                <div class="widget-body">
                    <div class="bootstrap-tagsinput"><input type="text" placeholder="Tags"></div><input
                        class="form-control" id="tags" data-role="tagsinput" placeholder="Tags" name="tag" type="text"
                        style="display: none;">
                    <div class="hidden" data-tag-route="https://cms.botble.com/admin/tags/all">
                        Tag route </div>




                </div>
            </div>



        </div>


    </div>
