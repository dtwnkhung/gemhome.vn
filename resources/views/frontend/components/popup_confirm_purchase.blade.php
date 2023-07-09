<div class="modal fade" id="paymen_modal_pack_{{ $pack->id }}" tabindex="-1" role="dialog" aria-labelledby="paymen_modal_Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body text-center">
            {{ __('app.Confirm purchase') }} {{ __('app.packages') }}: {{ $pack->name }}.
        </div>
        <div class="modal-footer justify-content-around"> 
            <form
                action="{{ route('appuser.upgrade', ['package_id'=>$pack->id])}}"
                method="post"
                >    
                    @csrf 
                    <button type="submit" href="#{{ route('appuser.upgrade', ['package_id'=>$pack->id])}}"
                    class="btn btn-primary btn-block">{{ __('app.Purchase')}}</button>
            </form> 
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