
<form class=""
    action="{{ route('appuser.changepassword', $user->id) }}"
    method="POST"
    id="frm-info"
    enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label for="old_password" class="required" aria-required="true">{{ __('auth.Old password') }}</label>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-8 col-xs-12">
                    <div class="form-group">
                        <input name="old_password" type="password" class="form-control is-required" id="old_password" aria-required="true" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label for="password" class="required" aria-required="true">{{ __('auth.New password') }}</label>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-8 col-xs-12">
                    <div class="form-group">
                        <input name="password" type="password" class="form-control is-required" id="password" aria-required="true" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label for="password_confirmation" class="required" aria-required="true">{{ __('auth.Confirm password') }}</label>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-8 col-xs-12">
                    <div class="form-group">
                        <input name="password_confirmation" type="password" class="form-control is-required" id="password_confirmation" aria-required="true" />
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="form-group pull-right">
                    <button class="btn btn-sm pull-right btn-save save-info-button" type="submit" id="btnSaveInfo" style="height: 35px; width: 104px; border-radius: 3px; line-height: inherit;">
                        Lưu
                    </button>
                    <button data-edit class="btn btn-sm pull-right btn-cancel openform" type="button" id="btnCancelInfo" style="height: 35px; width: 104px; border-radius: 3px; margin-right: 18px; line-height: inherit;">
                        Huỷ
                    </button>
                </div>
            </div>
        </div> 
    </div>
</form>   