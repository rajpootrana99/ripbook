@extends('layouts.app')

@section('content')

<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Memorial</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div>
                            <span class="float-right mb-3 mr-2">
                                <button type="button" class="btn btn-sm iq-bg-success mb-1" data-toggle="modal" data-target="#addNotice" id="addNoticeButton"><i class="ri-add-fill"><span class="pl-1">Add Notices</span></i>
                                </button>
                                <button type="button" class="btn btn-sm iq-bg-danger mb-1" data-toggle="modal" data-target="#addGallery" id="addGalleryButton"><i class="ri-add-fill"><span class="pl-1">Add Gallery</span></i>
                                </button>
                                <button type="button" class="btn btn-sm iq-bg-success mb-1" data-toggle="modal" data-target="#createMemorial" id="createMemorialButton"><i class="ri-add-fill"><span class="pl-1">Create Memorial</span></i>
                                </button>
                            </span>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Address</th>
                                            <th>Date of Birth</th>
                                            <th>Place of Birth</th>
                                            <th>Date of Death</th>
                                            <th>Residence</th>
                                            <th>Religon</th>
                                            <th>View</th>
                                            <th>Edit</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="createMemorial" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Memorial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="createMemorialForm" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group row align-items-center">
                        <div class="col-md-12">
                            <div class="profile-img-edit">
                                <img class="profile-pic" src="{{ asset('asset/admin/images/user/11.png')}}" width="150px" height="150px" alt="profile-pic">
                                <div class="p-image">
                                    <i class="ri-pencil-line upload-button"></i>
                                    <input class="file-upload" type="file" name="feature_image" id="feature_image" accept="image/*" />
                                </div>
                            </div>
                            <span class="text-danger feature_image_error"></span>
                        </div>
                    </div>
                    <div class=" row align-items-center">
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" style="height: 40px;" id="title" name="title" placeholder="Enter Title">
                            <span class="text-danger title_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" style="height: 40px;" id="address" name="address" placeholder="Enter Address">
                            <span class="text-danger address_error"></span>
                        </div>
                        <div class="form-group col-sm-12">
                            <textarea class="form-control" name="description" id="description" rows="3" style="line-height: 22px" placeholder="Write Description..."></textarea>
                            <span class="text-danger description_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" style="height: 40px;" id="dob" name="dob" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date of Birth">
                            <span class="text-danger dob_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" style="height: 40px;" id="pob" name="pob" placeholder="Place of Birth">
                            <span class="text-danger pob_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" style="height: 40px;" id="dod" name="dod" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date of Death">
                            <span class="text-danger dod_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" style="height: 40px;" id="pod" name="pod" placeholder="Place of Death">
                            <span class="text-danger pod_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="number" class="form-control" style="height: 40px;" id="age" name="age" placeholder="Enter Age">
                            <span class="text-danger age_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" style="height: 40px;" id="religion" name="religion" placeholder="Religion">
                            <span class="text-danger religion_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" style="height: 40px;" id="residence" name="residence" placeholder="Residence">
                            <span class="text-danger residence_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <select class="form-control" id="exampleFormControlSelect4" style="height: 40px;" name="visibility" id="visibility">
                                <option value="0">Public</option>
                                <option value="1">Private</option>
                            </select>
                            <span class="text-danger visibility_error"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editMemorial" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editMemorialLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editMemorialForm" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" id="memorial_id" name="memorial_id">
                    <div class="form-group row align-items-center">
                        <div class="col-md-12">
                            <div class="profile-img-edit">
                                <img class="profile-pic" src="{{ asset('asset/admin/images/user/11.png')}}" width="150px" height="150px" id="show_feature_image" alt="profile-pic">
                                <div class="p-image">
                                    <i class="ri-pencil-line upload-button"></i>
                                    <input class="file-upload" type="file" name="feature_image" id="edit_feature_image" accept="image/*" />
                                </div>
                            </div>
                            <span class="text-danger feature_image_update_error"></span>
                        </div>
                    </div>
                    <div class=" row align-items-center">
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" style="height: 40px;" id="edit_title" name="title" placeholder="Enter Title">
                            <span class="text-danger title_update_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" style="height: 40px;" id="edit_address" name="address" placeholder="Enter Address">
                            <span class="text-danger address_update_error"></span>
                        </div>
                        <div class="form-group col-sm-12">
                            <textarea class="form-control" name="description" id="edit_description" rows="3" style="line-height: 22px" placeholder="Write Description..."></textarea>
                            <span class="text-danger description_update_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" style="height: 40px;" id="edit_dob" name="dob" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date of Birth">
                            <span class="text-danger dob_update_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" style="height: 40px;" id="edit_pob" name="pob" placeholder="Place of Birth">
                            <span class="text-danger pob_update_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" style="height: 40px;" id="edit_dod" name="dod" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date of Death">
                            <span class="text-danger dod_update_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" style="height: 40px;" id="edit_pod" name="pod" placeholder="Place of Death">
                            <span class="text-danger pod_update_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="number" class="form-control" style="height: 40px;" id="edit_age" name="age" placeholder="Enter Age">
                            <span class="text-danger age_update_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" style="height: 40px;" id="edit_religion" name="religion" placeholder="Religion">
                            <span class="text-danger religion_update_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" style="height: 40px;" id="edit_residence" name="residence" placeholder="Residence">
                            <span class="text-danger residence_update_error"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <select class="form-control edit_visibility" style="height: 40px;" id="edit_visibility" name="visibility">
                                <option value="0">Public</option>
                                <option value="1">Private</option>
                            </select>
                            <span class="text-danger visibility_update_error"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="addGallery" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Gallery for Memorial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="addGalleryForm" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="memorial_id">Select Memorial</label>
                                <select class="form-control" id="gallery_memorial_id" name="memorial_id">
                                </select>
                                <span class="text-danger memorial_id_error"></span>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image[]" name="image[]" multiple>
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                                <span class="text-danger image_error"></span>
                            </div>
                        </div>
                    </div><!--end row-->
                </div><!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div><!--end modal-footer-->
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="addNotice" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Notice for Memorial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="addNoticeForm" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="memorial_id">Select Memorial</label>
                                <select class="form-control" id="notice_memorial_id" name="memorial_id">
                                </select>
                                <span class="text-danger memorial_id_error"></span>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="text" class="form-control" style="height: 40px;" id="notice" name="notice" placeholder="Notice of">
                            <span class="text-danger notice_error"></span>
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="text" class="form-control" style="height: 40px;" id="date" name="date" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date">
                            <span class="text-danger date_error"></span>
                        </div>
                        <div class="form-group col-sm-12">
                            <textarea class="form-control" name="description" id="description" rows="3" style="line-height: 22px" placeholder="Write Description..."></textarea>
                            <span class="text-danger description_error"></span>
                        </div>
                    </div><!--end row-->
                </div><!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div><!--end modal-footer-->
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteMemorial" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="deleteMemorialForm">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" id="memorial_id" name="memorial_id">
                        <p class="ml-3">Are you sure want to delete?</p>
                    </div><!--end row-->
                </div><!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div><!--end modal-footer-->
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        const x = document.getElementById("snackbar");

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        fetchMemorials();

        function fetchMemorials() {
            $.ajax({
                type: "GET",
                url: "fetchMemorials",
                dataType: "json",
                success: function(response) {
                    $('tbody').html("");
                    $.each(response.memorials, function(key, memorial) {
                        $('tbody').append('<tr>\
                            <td><img src="storage/' + memorial.feature_image + '" width="60px" class="rounded ml-3" alt="Responsive image"></td>\
                            <td>' + memorial.title + '</td>\
                            <td>' + memorial.address + '</td>\
                            <td>' + memorial.dob + '</td>\
                            <td>' + memorial.pob + '</td>\
                            <td>' + memorial.dod + '</td>\
                            <td>' + memorial.residence + '</td>\
                            <td>' + memorial.religion + '</td>\
                            <td><a href="memorial/' + memorial.id + '" style="border: none;" ><i class="fa fa-eye" style="font-size: 20px;"></i></a></td>\
                            <td><button value="' + memorial.id + '" style="border: none;" class="edit_btn"><i class="fa fa-edit" style="font-size: 20px;"></i></button></td>\
                            <td><button value="' + memorial.id + '" style="border: none;" class="delete_btn"><i class="fa fa-trash" style="font-size: 20px;"></i></button></td>\
                    </tr>');
                    });
                }
            });
        }
        $(document).on('click', '#createMemorialButton', function(e) {
            e.preventDefault();
            $(document).find('span.error-text').text('');
        });

        $(document).on('click', '#addNoticeButton', function(e) {
            e.preventDefault();
            $('#addNotice').modal('show');
            $(document).find('span.text-danger').text('');
            $.ajax({
                type: "GET",
                url: "fetchMemorials",
                dataType: "json",
                success: function(response) {
                    var memorial_id = $('#notice_memorial_id');
                    $('#notice_memorial_id').children().remove().end();
                    $.each(response.memorials, function(memorial) {
                        memorial_id.append($("<option />").val(response.memorials[memorial].id).text(response.memorials[memorial].id + ' - ' + response.memorials[memorial].title));
                    });
                }
            });
        });

        $(document).on('submit', '#addNoticeForm', function(e) {
            e.preventDefault();
            let formDate = new FormData($('#addNoticeForm')[0]);
            $.ajax({
                type: "post",
                url: "notice",
                data: formDate,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $(document).find('span.text-danger').text('');
                },
                success: function(response) {
                    if (response.status == 0) {
                        $('#addNotice').modal('show')
                        $.each(response.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    } else {
                        $('#addNoticeForm')[0].reset();
                        $('#addNotice').modal('hide');
                        x.innerHTML = response.message;
                        x.className = "show";
                        setTimeout(function() {
                            x.className = x.className.replace("show", "");
                        }, 3000);
                        fetchMemorials();
                    }
                },
                error: function(error) {
                    $('#addNotice').modal('show')
                }
            });
        });

        $(document).on('click', '#addGalleryButton', function(e) {
            e.preventDefault();
            $('#addGallery').modal('show');
            $(document).find('span.text-danger').text('');
            $.ajax({
                type: "GET",
                url: "fetchMemorials",
                dataType: "json",
                success: function(response) {
                    var memorial_id = $('#gallery_memorial_id');
                    $('#gallery_memorial_id').children().remove().end();
                    $.each(response.memorials, function(memorial) {
                        memorial_id.append($("<option />").val(response.memorials[memorial].id).text(response.memorials[memorial].id + ' - ' + response.memorials[memorial].title));
                    });
                }
            });
        });

        $(document).on('submit', '#addGalleryForm', function(e) {
            e.preventDefault();
            let formDate = new FormData($('#addGalleryForm')[0]);
            $.ajax({
                type: "post",
                url: "addGallery",
                data: formDate,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $(document).find('span.text-danger').text('');
                },
                success: function(response) {
                    if (response.status == 0) {
                        $('#addGallery').modal('show')
                        $.each(response.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    } else {
                        $('#addGalleryForm')[0].reset();
                        $('#addGallery').modal('hide');
                        x.innerHTML = response.message;
                        x.className = "show";
                        setTimeout(function() {
                            x.className = x.className.replace("show", "");
                        }, 3000);
                        fetchMemorials();
                    }
                },
                error: function(error) {
                    $('#addGallery').modal('show')
                }
            });
        });

        $(document).on('click', '.delete_btn', function(e) {
            e.preventDefault();
            var memorial_id = $(this).val();
            $('#deleteMemorial').modal('show');
            $('#memorial_id').val(memorial_id)
        });

        $(document).on('submit', '#deleteMemorialForm', function(e) {
            e.preventDefault();
            var memorial_id = $('#memorial_id').val();
            $.ajax({
                type: 'delete',
                url: 'memorial/' + memorial_id,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 0) {
                        x.text(response.message);
                        x.className = "show";
                        setTimeout(function() {
                            x.className = x.className.replace("show", "");
                        }, 3000);
                        $('#deleteMemorial').modal('hide');
                    } else {
                        $('#deleteMemorial').modal('hide');
                        x.innerHTML = response.message;
                        x.className = "show";
                        setTimeout(function() {
                            x.className = x.className.replace("show", "");
                        }, 3000);
                        fetchMemorials();
                    }
                }
            });
        });
        $(document).on('click', '.edit_btn', function(e) {
            e.preventDefault();
            var memorial_id = $(this).val();
            $('#editMemorial').modal('show');
            $(document).find('span.text-danger').text('');
            $.ajax({
                type: "GET",
                url: 'memorial/' + memorial_id + '/edit',
                success: function(response) {
                    if (response.status == 404) {
                        $('#editMemorial').modal('hide');
                    } else {
                        var visibility = 0;
                        $('#editMemorialLabel').text('Site ID ' + response.memorial.id);
                        $('#memorial_id').val(response.memorial.id);
                        $('#show_feature_image').attr('src', 'storage/' + response.memorial.feature_image);
                        $('#edit_title').val(response.memorial.title);
                        $('#edit_address').val(response.memorial.address);
                        $('#edit_description').text(response.memorial.description);
                        $('#edit_dob').val(response.memorial.dob);
                        $('#edit_pob').val(response.memorial.pob);
                        $('#edit_dod').val(response.memorial.dod);
                        $('#edit_pod').val(response.memorial.pod);
                        $('#edit_age').val(response.memorial.age);
                        $('#edit_residence').val(response.memorial.residence);
                        $('#edit_religion').val(response.memorial.religion);
                        if (response.memorial.visibility == "Private") {
                            visibility = 1;
                        }
                        $('.edit_visibility').val(visibility).change();
                    }
                }
            });
        });

        $(document).on('submit', '#editMemorialForm', function(e) {
            e.preventDefault();
            var memorial_id = $('#memorial_id').val();
            let EditFormData = new FormData($('#editMemorialForm')[0]);
            $.ajax({
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content'),
                    '_method': 'patch'
                },
                url: "memorial/" + memorial_id,
                data: EditFormData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $(document).find('span.text-danger').text('');
                },
                success: function(response) {
                    if (response.status == 0) {
                        $('#editMemorial').modal('show')
                        $.each(response.error, function(prefix, val) {
                            $('span.' + prefix + '_update_error').text(val[0]);
                        });
                    } else {
                        $('#editMemorialForm')[0].reset();
                        $('#editMemorial').modal('hide');
                        x.innerHTML = response.message;
                        x.className = "show";
                        setTimeout(function() {
                            x.className = x.className.replace("show", "");
                        }, 3000);
                        fetchMemorials();
                    }
                },
                error: function(error) {
                    console.log(error)
                    $('#editMemorial').modal('show');
                }
            });
        });

        $(document).on('submit', '#createMemorialForm', function(e) {
            e.preventDefault();
            let formDate = new FormData($('#createMemorialForm')[0]);
            $.ajax({
                type: "post",
                url: "memorial",
                data: formDate,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $(document).find('span.text-danger').text('');
                },
                success: function(response) {
                    if (response.status == 0) {
                        $('#addSite').modal('show')
                        $.each(response.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    } else {
                        $('#createMemorialForm')[0].reset();
                        $('#createMemorial').modal('hide');
                        x.innerHTML = response.message;
                        x.className = "show";
                        setTimeout(function() {
                            x.className = x.className.replace("show", "");
                        }, 3000);
                        fetchMemorials();
                    }
                },
                error: function(error) {
                    $('#createMemorial').modal('show')
                }
            });
        });
    });
</script>

@endsection