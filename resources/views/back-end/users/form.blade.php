@can('admin-perm', Auth::user())
{{ csrf_field() }}
<div class="row">
    <div class="col-md-3">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Username</label>
            <input type="text" class="form-control" value="{{ isset($user) ? $user->name : '' }}" name="name">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Email address</label>
            <input type="email" value="{{ isset($user) ? $user->email : '' }}" class="form-control" name="email">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Password</label>
            <input type="text" class="form-control" name="password">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">role</label>
            <select name="role" class="form-control">
                <option style="background: #000;" value="admin"
                    {{ isset($user) && $user->role == 'admin' ? 'selected' : '' }}>
                    admin</option>

                <option style="background: #000;" value="user"
                    {{ isset($user) && $user->role == 'user' ? 'selected' : '' }}>
                    user</option>
            </select>
        </div>
    </div>
</div>
@endcan
