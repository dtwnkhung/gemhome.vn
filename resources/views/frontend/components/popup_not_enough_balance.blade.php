<div class="modal fade" id="paymen_modal" tabindex="-1" role="dialog" aria-labelledby="paymen_modal_Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            {{ __('app.Not enough balance. Please charge') }} <a href="{{ route('appuser.payment-method') }}">{{ __('app.here') }}</a>.
        </div>
        <div class="modal-footer justify-content-around"> 
            <a href="{{ route('appuser.payment-method') }}" type="button" class="btn btn-primary">{{ __('app.Charge now') }}</a>
        </div>
    </div>
    </div>
</div>
<script>
    // data-toggle="modal" data-target="#paymen_modal"
    deferJquery(doScript);

    function deferJquery(method) {
        console.log('deferJquery');
        if (window.jQuery) {
            method();
        } else {
            setTimeout(function() { deferJquery(method) }, 50);
        }
    }

    function doScript() {
        console.log('doScript deferJquery');
        var btscript = document.querySelector('script[src*="bootstrap.min.js"]');
        if (!btscript) {
            var btj = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.0-2/js/bootstrap.min.js";
            var s = document.createElement("script");
            s.type = "text/javascript";
            s.src = btj;
            $("head").append(s);
        }
        $('a[href^="#popup_payment"]').click(function () {
            $('#paymen_modal').modal();
        });
    }

</script>