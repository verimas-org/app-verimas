/*------------------------------------------
    contact.php
-------------------------------------------*/
$("#contact-form-main").submit(function () {
  const form = $("#contact-form-main")[0];
  $.ajax({
                    type: "POST",
                    data: $(form).serialize(),
                    url: $(form).attr('action'),
                    success: function (data) {
                        $("#loader").hide();
                        $("#success").slideDown("slow");
                        setTimeout(function () {
                            $("#success").slideUp("slow");
                        }, 3000);

                        if (data.indexOf("Error") != -1) {
                            alert('送信に失敗しました。\n' + data);
                        }
                        else{
                            alert('送信しました。\n' + 'このたび当社にお問い合わせいただきまして、ありがとうございます。');
                        }
                        form.reset();
                    },
                    error: function () {
                        $("#loader").hide();
                        $("#error").slideDown("slow");
                        setTimeout(function () {
                            $("#error").slideUp("slow");
                        }, 3000);
                    }
                });
                return false; // required to block normal submit since you used ajax
});
