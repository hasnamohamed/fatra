@can('admin-perm', Auth::user())
{{ csrf_field() }}
<div class="row">
    <div class="col-md-3">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Title</label>
            <input type="text" class="form-control" value="{{isset($post) ? $post->title:''}}" name="title">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Post</label>
            <input type="text" value="{{isset($post) ? $post->post:''}}" class="form-control" name="post">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">User</label>
            <select name="user_id" class="form-control">
                @foreach ($users as $user)
                  <option style="background: #000" value="{{$user->id}}" {{isset($post)
                   && $post->user_id ==$user->id?'selected' :''
                  }}>{{$user->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
@endcan
