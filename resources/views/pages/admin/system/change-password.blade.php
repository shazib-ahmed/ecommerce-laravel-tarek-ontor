@extends('partials.admin.app')
@section('title')
{{ 'Change Password' }}
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col">
                <h6 class="mt-4">Settings</h6>
                <div class="nav-align-top mb-3">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal"
                                role="tab" aria-selected="true">
                                Change Password
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                            <form method="POST" action="{{ route('admin.update.password') }}">
                                @csrf
                                <input type="text" name="profile" value="yes" hidden>
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label class="form-label" for="formtabs-first-name">Old password</label>
                                        <input type="text" id="formtabs-first-name" class="form-control"
                                            name="old_password" />
                                        @error('old_password')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" for="formtabs-pwd">new password</label>
                                        <input type="text" id="formtabs-pwd" class="form-control" name="password" />
                                        @error('password')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" for="formtabs-cnf">Confirm password</label>
                                        <input type="text" id="formtabs-cnf" class="form-control" name="cnf_password" />
                                        @error('cnf_password')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="pt-4">
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-label-secondary">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
    
@endsection

@section('scripts')
    
@endsection