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
                                <button type="button" class="btn btn-sm iq-bg-success mb-1" data-toggle="modal" data-target=".bd-example-modal-sm"><i
                                    class="ri-add-fill"><span class="pl-1">Add Notices</span></i>
                                </button>
                                <button type="button" class="btn btn-sm iq-bg-danger mb-1" data-toggle="modal" data-target=".bd-example-modal-sm"><i
                                    class="ri-add-fill"><span class="pl-1">Add Gallery</span></i>
                                </button>
                                <button type="button" class="btn btn-sm iq-bg-success mb-1" data-toggle="modal" data-target="#createMemorial" id="createMemorialButton"><i
                                    class="ri-add-fill"><span class="pl-1">Create Memorial</span></i>
                                </button>
                           </span>
                           <table class="table table-bordered table-responsive-md text-center">
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

    <div class="modal fade" id="createMemorial" tabindex="-1" role="dialog"  aria-hidden="true">
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
                                    <img class="profile-pic" src="{{ asset('asset/admin/images/user/11.png')}}" alt="profile-pic">
                                    <div class="p-image">
                                        <i class="ri-pencil-line upload-button"></i>
                                        <input class="file-upload" type="file" name="feature_image" id="feature_image" accept="image/*"/>
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
                                <textarea
                                class="form-control"
                                name="description"
                                id="description"
                                rows="3"
                                style="line-height: 22px"
                                placeholder="Write Description..."
                                ></textarea>
                                <span class="text-danger description_error"></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <input type="text" class="form-control" style="height: 40px;" id="dob" name="dob" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date of Birth">
                                <span class="text-danger dob_error"></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <input type="text" class="form-control" style="height: 40px;" id="pob" name="pob" placeholder="Place of Birth">
                                <span class="text-danger pob_error"></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <input type="text" class="form-control" style="height: 40px;" id="dod" name="dod" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date of Death">
                                <span class="text-danger dod_error"></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <input type="text" class="form-control" style="height: 40px;" id="pod" name="pod" placeholder="Place of Death">
                                <span class="text-danger pod_error"></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <input type="number" class="form-control" style="height: 40px;" id="age" name="age"  placeholder="Enter Age">
                                <span class="text-danger age_error"></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <input type="text" class="form-control" style="height: 40px;" id="religion" name="religion"  placeholder="Religion">
                                <span class="text-danger religion_error"></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <input type="text" class="form-control" style="height: 40px;" id="residence" name="residence"  placeholder="Residence">
                                <span class="text-danger residence_error"></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <select class="form-control" id="exampleFormControlSelect4" name="visibility" id="visibility">
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

    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
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
                            <td><img src="storage/'+memorial.feature_image+'" width="60px" class="rounded ml-3" alt="Responsive image"></td>\
                            <td>' + memorial.title + '</td>\
                            <td>' + memorial.address + '</td>\
                            <td>' + memorial.dob + '</td>\
                            <td>' + memorial.pob + '</td>\
                            <td>' + memorial.dod + '</td>\
                            <td>' + memorial.residence + '</td>\
                            <td>' + memorial.religion + '</td>\
                            <td><button value="' + memorial.id + '" style="border: none; background-color: #fff" class="view_btn"><i class="fa fa-eye"></i></button></td>\
                            <td><button value="' + memorial.id + '" style="border: none; background-color: #fff" class="edit_btn"><i class="fa fa-edit"></i></button></td>\
                            <td><button value="' + memorial.id + '" style="border: none; background-color: #fff" class="delete_btn"><i class="fa fa-trash"></i></button></td>\
                    </tr>');
                    });
                }
            });
        }
        $(document).on('click', '#createMemorialButton', function(e) {
            e.preventDefault();
            $(document).find('span.error-text').text('');
        });
        $(document).on('click', '.delete_btn', function(e) {
            e.preventDefault();
            var site_id = $(this).val();
            $('#deleteSite').modal('show');
            $('#site_id').val(site_id)
        });
        $(document).on('submit', '#deleteSiteForm', function(e) {
            e.preventDefault();
            var site_id = $('#site_id').val();
            $.ajax({
                type: 'delete',
                url: 'site/' + site_id,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 0) {
                        $('#deleteSite').modal('hide');
                    } else {
                        fetchMemorials();
                        $('#deleteSite').modal('hide');
                    }
                }
            });
        });
        $(document).on('click', '.edit_btn', function(e) {
            e.preventDefault();
            var site_id = $(this).val();
            $('#editSite').modal('show');
            $(document).find('span.error-text').text('');
            $.ajax({
                type: "GET",
                url: 'site/' + site_id + '/edit',
                success: function(response) {
                    if (response.status == 404) {
                        $('#editSite').modal('hide');
                    } else {
                        $('#editSiteLabel').text('Site ID ' + response.site.id);
                        $('#site_id').val(response.site.id);
                        $('#edit_site').val(response.site.site);
                    }
                }
            });
        });
        $(document).on('submit', '#editSiteForm', function(e) {
            e.preventDefault();
            var site_id = $('#site_id').val();
            let EditFormData = new FormData($('#editSiteForm')[0]);
            $.ajax({
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content'),
                    '_method': 'patch'
                },
                url: "site/" + site_id,
                data: EditFormData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $(document).find('span.error-text').text('');
                },
                success: function(response) {
                    if (response.status == 0) {
                        $('#editSite').modal('show')
                        $.each(response.error, function(prefix, val) {
                            $('span.' + prefix + '_update_error').text(val[0]);
                        });
                    } else {
                        $('#editSiteForm')[0].reset();
                        $('#editSite').modal('hide');
                        fetchMemorials();
                    }
                },
                error: function(error) {
                    console.log(error)
                    $('#editSite').modal('show');
                }
            });
        })
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
                    $(document).find('span.error-text').text('');
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