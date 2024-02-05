<div class="row my-5">
    <div class="col-sm-3">
        <label for="title">{{ $name }}</label>
    </div>
    <div class="col-sm-9">
        <p>@lang('role.do-you', ['plugin' => $name])</p>
        <div>
            <input type="checkbox" value="{{ $permission }}-manage" class="flat-red hasChildOptions" data-child_id="childOfManage{{ $permission }}"
                name="permissions[]" id="Manage{{ $permission }}" @if ($permissions[$permission.'-manage'] == 1) checked @endif>
            <label class="chk-label-margin mx-1" for="Manage{{ $permission }}">
                @lang('role.yes-allow', ['attribute' => $name])
            </label>
        </div>
    </div>
</div>
