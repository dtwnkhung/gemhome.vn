
<form class=""
    action="{{ route('appuser.update', $user->id) }}"
    method="POST"
    id="frm-info"
    enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-3 col-xs-12">
            <div class="row">
                <div id="ImgPreview" class="img">
                @isset($user->image)
                    <img src="{{ auth('appuser')->user()->image }}" alt="{{ auth('appuser')->user()->name }}">
                @else 
                    <img src="/images/avarta.svg" />
                @endisset</div>
            </div>
            <div class="row avatar-selector">
                <div class="form-group UploadAvatar">
                    <label for="Avatar" id="messageValidateImage" style="display: none;">Ảnh đại diện của bạn</label>
                    <input name="image" id="Avatar" class="file" type="file" accept="image/png,image/x-png,image/gif,image/jpeg,image/jpg" />
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="browse btn btn-primary input-sm" type="button" id="Upload-Ava" style="display: none;">Chọn ảnh</button>
                        </span>
                    </div>
                </div>
            </div>
            {{-- <div class="row user-balance">
                <div class="form-group balance">
                    <label for="balance" id="messageValidateImage">Tài khoản:</label>
                    <div>{{ $user->balance }}đ</div>
                </div>
            </div> --}}
        </div>
        <div class="col-md-9 col-xs-12">
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label for="name" class="required" aria-required="true">Họ và tên</label>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-8 col-xs-12">
                    <div class="form-group">
                        <span id="span-name" class="span-display" style="display: block;">{{ $user->name }}</span>
                        <input name="name" type="text" class="form-control is-required" value="{{ $user->name }}" id="name" autocomplete="family-name" aria-required="true" style="display: none;" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label for="date_of_birth">{{ __('app.Date of birth') }}</label>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-8 col-xs-12">
                    <div class="form-group">
                        <span id="span-birthday" class="span-display" style="display: block;">{{ $user->date_of_birth }}</span>
                        <input name="date_of_birth"
                            type="date"
                            id="date_of_birth"
                            value="{{ $user->date_of_birth }}"
                            class="form-control hasDatepicker"
                            placeholder="yyyy-mm-dd"
                            style="display: none;" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label for="phone" class="required" aria-required="true">Số điện thoại</label>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-8 col-xs-12">
                    <div class="form-group">
                        <span id="span-phone" class="span-display" style="display: block;">{{ $user->phone }}</span>
                        <input
                            name="phone"
                            type="text"
                            class="form-control is-required"
                            id="phone"
                            value="{{ $user->phone }}"
                            placeholder="Số điện thoại"
                            autocomplete="tel-national"
                            style="display: none;" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label for="EmailAddress" class="required" aria-required="true">Địa chỉ Email</label>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-8 col-xs-12">
                    <div class="form-group">
                        <span id="span-email" class="span-display" style="display: block;">{{ $user->email }}</span>
                        <input name="EmailAddress" type="email" disabled="" class="form-control" id="EmailAddress" value="{{ $user->email }}" placeholder="Địa chỉ Email" autocomplete="email" style="display: none;" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label for="address">{{ __('app.Address') }}</label>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-8 col-xs-12">
                    <div class="form-group">
                        <span id="span-address" class="span-display" style="display: block;">{{ $user->address }}</span>
                        <textarea
                        name="address"
                        type="text"
                        class="form-control"
                        id="address"
                        placeholder="{{__('app.Your address') }}"
                        style="display: none;">{{ $user->address }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label>Facebook</label>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-8 col-xs-12">
                    <div class="form-group">
                        <span id="span-facebook" class="span-display" style="display: block;" title="{{ $user->facebook }}">{{ $user->facebook }}</span>
                        <input type="text"
                        name="facebook"
                        class="form-control"
                        id="facebook"
                        value="{{ $user->facebook }}"
                        placeholder="Đường dẫn tới trang cá nhân của bạn" style="display: none;" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label>Mô tả bản thân</label>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-8 col-xs-12">
                    <div class="form-group">
                        <span id="span-description" class="span-display" style="display: block;">{{ $user->description }}</span>
                        <textarea
                            rows="5"
                            name="description"
                            type="text"
                            class="form-control"
                            id="description"
                            style="display: none;">{{ $user->description }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group pull-right">
                    <button class="btn btn-sm pull-right btn-save save-info-button" type="submit" id="btnSaveInfo" style="height: 35px; width: 104px; border-radius: 3px; line-height: inherit; display: none;">
                        Lưu
                    </button>
                    <button data-edit class="btn btn-sm pull-right btn-cancel openform" type="button" id="btnCancelInfo" style="height: 35px; width: 104px; border-radius: 3px; margin-right: 18px; line-height: inherit; display: none;">
                        Huỷ
                    </button>
                </div>
            </div>
        </div> 
    </div>
</form>    
<script type="text/javascript" >
    deferJquery(loadScriptFile);
    function deferJquery(method) {
        if (window.jQuery) {
            method();
        } else {
            setTimeout(function() { deferJquery(method) }, 250);
        }
    }
    function loadScriptFile() {
        $('button[data-edit]').click(toggleForm);
        function toggleForm() {
            var isFormOpen = $(this).hasClass('openform');
            if (!isFormOpen) {
                // $(this).addClass('openform');
                $('[data-edit]').addClass('openform');
                $('[data-edit]').text('{{ __("app.Cancel") }}');
                $('.form-group > span').hide();
                $('.form-group > input').show();
                $('.form-group > textarea').show();
                $('.form-group  .btn').show();
            } else {
                // $(this).removeClass('openform');
                $('[data-edit]').removeClass('openform');
                $('[data-edit]').text('{{ __("app.Edit") }}');
                $('.form-group > span').show();
                $('.form-group > input').hide();
                $('.form-group > textarea').hide();
                $('.form-group  .btn').hide();
            }
        }

        function loadFile(event) {
            var output = document.querySelector('#ImgPreview > img');
            output.src = URL.createObjectURL(event.target.files[0]);
            console.log('output', output.src);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        }
        var fileInput = $('#Avatar');
        fileInput.change(loadFile);
        $('#Upload-Ava').click(function () {
            if (fileInput.length > 0)
            fileInput.trigger('click');
        })
    }
</script>