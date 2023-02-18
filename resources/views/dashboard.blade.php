
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
                           <form>
                              <div class="form-group row align-items-center">
                                 <div class="col-md-12">
                                    <div class="profile-img-edit">
                                       <img class="profile-pic" src="{{ asset('asset/admin/images/user/11.png')}}" alt="profile-pic">
                                       <div class="p-image">
                                          <i class="ri-pencil-line upload-button"></i>
                                          <input class="file-upload" type="file" accept="image/*"/>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class=" row align-items-center">
                                 <div class="form-group col-sm-6">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" value="{{ Auth::user()->email }}" disabled>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="phone">Phone:</label>
                                    <input type="number" class="form-control" id="phone" value="{{ Auth::user()->phone }}">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="street">Street Address:</label>
                                    <input type="text" class="form-control" id="street" placeholder="Street # 1">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="cname">City:</label>
                                    <input type="text" class="form-control" id="cname" placeholder="Colombo">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="pcode">City:</label>
                                    <input type="number" class="form-control" id="pcode" placeholder="60000">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label>Country:</label>
                                    <select class="form-control" id="exampleFormControlSelect3">
                                       <option>Caneda</option>
                                       <option>Noida</option>
                                       <option selected="">USA</option>
                                       <option>Sirilanka</option>
                                       <option>Africa</option>
                                    </select>
                                 </div>
                              </div>
                              <button type="submit" class="btn btn-primary mr-2">Submit</button>
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
                           <form>
                              <div class="form-group">
                                 <label for="cpass">Current Password:</label>
                                 <a href="javascripe:void();" class="float-right">Forgot Password</a>
                                    <input type="Password" class="form-control" id="cpass" value="">
                                 </div>
                              <div class="form-group">
                                 <label for="npass">New Password:</label>
                                 <input type="Password" class="form-control" id="npass" value="">
                              </div>
                              <div class="form-group">
                                 <label for="vpass">Verify Password:</label>
                                    <input type="Password" class="form-control" id="vpass" value="">
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
@endsection