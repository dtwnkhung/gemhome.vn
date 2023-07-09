<div data-tag="form" action="/send-message" class="shotcode_subscribe wpcf7-form init cf7_custom_style_3"                                 novalidate="novalidate" data-status="init">
  @csrf
  <div class="mkdf-cf-custom-style mkdf-cf-custom-dark-style">
      <div>
        <span class="wpcf7-form-control-wrap your-email">
          <input
          type="email"
          name="email"
          value=""
          size="40"
          class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"  
          aria-required="true"
          aria-invalid="false" 
          placeholder="Gửi mail">
        </span>
        <button type="submit" class="arrow_carrot-right mkdf-btn mkdf-btn-simple mkdf-btn-subscribe"></button>                                     </div>
  </div>
  <div class="wpcf7-response-output" aria-hidden="true"></div>
</div><!-- data-tag = form -->

<style>
  .suscess {padding:  15px;border: 1px solid #4caf50;margin-top: 15px;margin-bottom: 15px;color: #4caf50;font-weight: 600;}
</style>
<script>
  /** AJAX create category */
  if (jQuery('.shotcode_subscribe[action="/send-message"] button').length !== 0)  {      
      jQuery('.shotcode_subscribe[action="/send-message"] button').first().click(subcribe);
      function subcribe(e) {
        e.preventDefault();
        e.stopPropagation();
        console.log('ajax contact us');
          var email = document.querySelector('.shotcode_subscribe input.wpcf7-email').value;
          if (email && email  !== '') {
              var data = { email: email , message: 'Subscribe user' };
              jQuery.ajax({
                  headers: {
                      'X-CSRF-TOKEN':  jQuery('.shotcode_subscribe [name="_token"]').val()
                  },
                  type: "POST",
                  url: '{{ route("emails.send-message") }}',
                  data: data,
                  success: function (result) {
                    if (result.success) {
                        console.log('success',result);
                        var data = result.data;
                        document.querySelector('.shotcode_subscribe input.wpcf7-email').value = '';
                        jQuery('.shotcode_subscribe').append('<div class="suscess">Cảm ơn bạn đã đăng ký thành công!</div>')
                      } else {
                        if (jQuery('.shotcode_subscribe .error').length === 0) {
                          jQuery('.shotcode_subscribe .wpcf7-form-control-wrap.your-email').prepend('<div class="error">Email đã đăng ký</div>')
                        } else {
                          jQuery('.shotcode_subscribe .wpcf7-form-control-wrap.your-email .error').text('Vui lòng chọn email khác. Email đã đăng ký')
                        }
                      }
                  }
              }) 
          } else alert('{{ __("app.The email field is required") }}');
      } /* testCreateCategory */
  }
  /** End AJAX create category */
</script>