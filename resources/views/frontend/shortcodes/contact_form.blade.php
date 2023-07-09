<div role="form" class="wpcf7" id="wpcf7-f5-p461-o1" lang="en-US" dir="ltr">
  <div class="screen-reader-response">
    <p role="status" aria-live="polite" aria-atomic="true"></p>
    <ul></ul>
  </div>
  <div data-tag="form" action="/send-message" method="post" class="shotcode wpcf7-form init" novalidate="novalidate" data-status="init">
      @csrf
      <div style="display: none;">
        <input type="hidden" name="_wpcf7" value="5">
        <input type="hidden" name="_wpcf7_version" value="5.5.3">
        <input type="hidden" name="_wpcf7_locale" value="en_US">
        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5-p461-o1">
        <input type="hidden" name="_wpcf7_container_post" value="461">
        <input type="hidden" name="_wpcf7_posted_data_hash" value="">
      </div>
      <div class="mkdf-cf-custom-style">
        <span class="wpcf7-form-control-wrap your-message"><textarea name="message" cols="40" rows="6" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Nhập nội dung..."></textarea></span>
        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nhập tên của bạn"></span>
        <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Nhập Email của bạn"></span>
        <div class="mkdf-cf-custom-style-btn">
          <button type="submit" class="mkdf-btn mkdf-btn-simple">Gửi</button>
        </div>
      </div>
      <div class="wpcf7-response-output" aria-hidden="true"></div>
    </div> <!-- data-tag = form -->
</div>
<style>
  .suscess {padding:  15px;border: 1px solid #4caf50;margin-top: 15px;margin-bottom: 15px;color: #4caf50;font-weight: 600;}
</style>
<script>
  /** AJAX create category */
  if (jQuery('.shotcode[action="/send-message"] button').length !== 0)  {      
      jQuery('.shotcode[action="/send-message"] button').first().click(subcribe);
      function subcribe(e) {
        e.preventDefault();
        e.stopPropagation();
        console.log('ajax contact us');
          var email = document.querySelector('.shotcode input.wpcf7-email').value;
          var name = document.querySelector('.shotcode input[name="name"]').value;
          var message = document.querySelector('.shotcode .wpcf7-textarea').value;
          if (email && email !== '') {
              var data = { name: name, email: email , message: message };
              jQuery.ajax({
                  headers: {
                      'X-CSRF-TOKEN':  jQuery('.shotcode [name="_token"]').val()
                  },
                  type: "POST",
                  url: '{{ route("emails.send-message") }}',
                  data: data,
                  success: function (result) {
                    if (result.success) {
                        console.log('success',result);
                          var data = result.data;
                          document.querySelector('.shotcode input.wpcf7-email').value = '';
                          document.querySelector('.shotcode input[name="name"').value = '';
                          document.querySelector('.shotcode .wpcf7-textarea').value = '';
                          jQuery('.shotcode').append('<div class="suscess">Cảm ơn bạn đã đăng ký thành công!</div>')
                      } else {
                        if (jQuery('.shotcode .error').length === 0) {
                          jQuery('.shotcode .wpcf7-form-control-wrap.your-email').prepend('<div class="error">Email đã đăng ký</div>')
                        } else {
                          jQuery('.shotcode .wpcf7-form-control-wrap.your-email .error').text('Vui lòng chọn email khác. Email đã đăng ký')
                        }
                      }
                  }
              }) 
          } else alert('{{ __("app.The email field is required") }}');
      } /* testCreateCategory */
  }
  /** End AJAX create category */
</script>