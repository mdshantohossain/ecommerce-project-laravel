@extends('admin.layouts.master')

@section('title', 'App Credential')

@section('body')
    <div class="row">
        <div class="col-md-12">
           <div class="card">
               <div class="card-header">
                   <span class="h2">Application's All Credential</span>
               </div>
                   <div class="col-md-10 mx-auto">
                       <!-- Google Title Toggle -->
                       <div class="card-body">
                           <a class="h4 d-block mb-2" data-bs-toggle="collapse" href="#googleLoginCredential" role="button" aria-expanded="false" aria-controls="googleLoginCredential">
                               Google Login Credential
                           </a>

                           <div class="collapse" id="googleLoginCredential">
                               <form method="POST" action="{{ route('categories.store') }}">
                                   @csrf
                                   <div class="mb-3">
                                       <label class="form-label">Name <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Enter category name" />
                                       @error('name')
                                       <div class="text-danger">{{ $message }}</div>
                                       @enderror
                                   </div>
                                   <div>
                                       <button type="submit" class="btn btn-primary w-md">Create</button>
                                   </div>
                               </form>
                           </div>
                       </div>

                       <!-- Facebook Title Toggle (optional additional one) -->
                       <div class="card-body">
                           <a class="h4 d-block mb-2" data-bs-toggle="collapse" href="#facebookLoginCredential" role="button" aria-expanded="false" aria-controls="facebookLoginCredential">
                               Facebook Login Credential
                           </a>

                           <div class="collapse" id="facebookLoginCredential">
                               <!-- Another form or fields here -->
                               <form method="POST" action="{{ route('categories.store') }}">
                                   @csrf
                                   <div class="mb-3">
                                       <label class="form-label">Facebook App ID</label>
                                       <input type="text" class="form-control" name="facebook_app_id" />
                                   </div>
                                   <div>
                                       <button type="submit" class="btn btn-primary w-md">Save</button>
                                   </div>
                               </form>
                           </div>
                       </div>
               </div>
           </div>
        </div>
    </div>
@endsection
