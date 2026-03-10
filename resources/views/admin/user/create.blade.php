<x-backend.app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Add User</h4>

        <div class="card mb-4">

            <form class="card-body">

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Name</label>
                        <input type="text" id="multicol-username" name="name" value="{{ old('name') }}"
                            class="form-control" placeholder="Enter Your Name" />
                        @error('name')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-email">Email</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="multicol-email" name="email" value="{{ old('email') }}"
                                class="form-control" placeholder="Enter Your Email" aria-label="john.doe"
                                aria-describedby="multicol-email2" />
                            @error('email')
                                <p class="text-xs text-red-500">{{ $message }}</p>
                            @enderror

                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Phone No</label>
                        <input type="text" id="multicol-username"name="phone" value="{{ old('phone') }}"
                            class="form-control" placeholder="Enter Your Phone No" />
                        @error('phone')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-country">Roles</label>
                        <select id="multicol-country" class="select2 form-select" data-allow-clear="true" name="role_id"
                            id="">
                            <option value="">Select Roles</option>

                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="form-password-toggle">
                            <label class="form-label" for="multicol-password">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" name="password" value="" id="multicol-password"
                                    class="form-control"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="multicol-password2" />
                                @error('password')
                                    <p class="text-xs text-red-500">{{ $message }}</p>
                                @enderror
                                <span class="input-group-text cursor-pointer" id="multicol-password2"><i
                                        class="bx bx-hide"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-password-toggle">
                            <label class="form-label" for="multicol-confirm-password">Confirm Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" name="password_confirm" value=""
                                    id="multicol-confirm-password" class="form-control"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="multicol-confirm-password2" />
                                @error('password_confirm')
                                    <p class="text-xs text-red-500">{{ $message }}</p>
                                @enderror
                                <span class="input-group-text cursor-pointer" id="multicol-confirm-password2"><i
                                        class="bx bx-hide"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>


</x-backend.app-layout>
