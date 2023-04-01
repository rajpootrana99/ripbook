@extends('layouts.app')

@section('content')
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="iq-card">
               <div class="iq-card-body p-0">
                  <div class="iq-edit-list">
                     <ul class="iq-edit-profile d-flex nav nav-pills">
                        <li class="col-md-6 p-0">
                           <a class="nav-link active" data-toggle="pill" href="#personal-information">
                              Personal Information
                           </a>
                        </li>
                        <li class="col-md-6 p-0">
                           <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                              Change Password
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="iq-edit-list-data">
               <div class="tab-content">
                  <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Personal Information</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form id="updateUserProfile" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group row align-items-center">
                                 <div class="col-md-12">
                                    <div class="profile-img-edit">
                                       @if(Auth::user()->image)
                                       <img class="profile-pic" src="{{ asset('storage/'.Auth::user()->image) }}" width="150px" height="150px" alt="profile-pic">
                                       @else
                                       <img class="profile-pic" src="{{ asset('asset/admin/images/user/11.png')}}" width="150px" height="150px" alt="profile-pic">
                                       @endif
                                       <div class="p-image">
                                          <i class="ri-pencil-line upload-button"></i>
                                          <input class="file-upload" type="file" name="image" accept="image/*" />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class=" row align-items-center">
                                 <div class="form-group col-sm-6">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}">
                                    <span class="text-danger name_error error-text"></span>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}">
                                    <span class="text-danger email_error error-text"></span>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="phone">Phone:</label>
                                    <input type="number" class="form-control" name="phone" id="phone" value="{{ Auth::user()->phone }}">
                                    <span class="text-danger phone_error error-text"></span>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="street">Street Address:</label>
                                    <input type="text" class="form-control" id="street" name="street" placeholder="Please Enter Street Address" value="{{ Auth::user()->street }}">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="cname">City:</label>
                                    <input type="text" class="form-control" name="city" id="city" placeholder="Please Enter City" value="{{ Auth::user()->city }}">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="pcode">Postal Code:</label>
                                    <input type="number" class="form-control" name="pcode" id="pcode" placeholder="Please Enter Post Code" value="{{ Auth::user()->pcode }}">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="Contry">Country:</label>
                                    <input type="text" class="form-control" name="country" id="country" placeholder="Please Enter Country" value="{{ Auth::user()->country }}">
                                 </div>
                              </div>
                              <button type="submit" class="btn btn-primary mr-2">Save</button>
                              <button type="reset" class="btn iq-bg-danger">Cancle</button>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Change Password</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form id="changePassword">
                              @csrf
                              @method('PUT')
                              <div class="form-group">
                                 <label for="current_password">Current Password:</label>
                                 <input type="Password" class="form-control" name="current_password" id="current_password">
                                 <span class="text-danger current_password_error error-text"></span>
                              </div>
                              <div class="form-group">
                                 <label for="password">New Password:</label>
                                 <input type="Password" class="form-control" name="password" id="password">
                                 <span class="text-danger password_error error-text"></span>
                              </div>
                              <div class="form-group">
                                 <label for="password_confirmation">Verify Password:</label>
                                 <input type="Password" class="form-control" name="password_confirmation" id="password_confirmation">
                                 <span class="text-danger password_confirmation_error error-text"></span>
                              </div>
                              <button type="submit" class="btn btn-primary mr-2">Submit</button>
                              <button type="reset" class="btn iq-bg-danger">Cancle</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
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

      $(document).on('submit', '#updateUserProfile', function(e) {
         e.preventDefault();
         let formData = new FormData($('#updateUserProfile')[0]);
         $.ajax({
            type: "post",
            url: "updateUser",
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function() {
               $(document).find('span.error-text').text('');
            },
            success: function(response) {
               if (response.status == 0) {
                  $.each(response.error, function(prefix, val) {
                     $('span.' + prefix + '_error').text(val[0]);
                  });
               } else {
                  $('#updateUserProfile')[0].reset();
                  x.innerHTML = response.message;
                  x.className = "show";
                  setTimeout(function() {
                     x.className = x.className.replace("show", "");
                  }, 3000);
                  location.reload();
               }
            },
         });
      });

      $(document).on('submit', '#changePassword', function(e) {
         e.preventDefault();
         let formData = new FormData($('#changePassword')[0]);
         console.log(formData)
         $.ajax({
            type: "post",
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content'),
               '_method': 'put'
            },
            url: "password",
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function() {
               $(document).find('span.error-text').text('');
            },
            success: function(response) {
               if (response.status == 0) {
                  $.each(response.error, function(prefix, val) {
                     $('span.' + prefix + '_error').text(val[0]);
                  });
               } else {
                  $('#changePassword')[0].reset();
                  $(document).find('span.error-text').text('');
                  x.innerHTML = response.message;
                  x.className = "show";
                  setTimeout(function() {
                     x.className = x.className.replace("show", "");
                  }, 3000);
               }
            },
         });
      });
   });
</script>
@endsection