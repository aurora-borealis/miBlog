<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>miBlog Kurulum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <?php foreach ($link as $i): ?>
    <?php echo link_tag($i); ?>
    <?php endforeach; ?>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="container">
      <div class="row">
        <div class="installationPageHeader">
          <div class="gray4">mi<span>Blog</span></div>
          <div class="seperator"></div>
          <div class="gray2">Kurulum Sayfası</div>
        </div>
      </div>
      <div class="row">
        <div class="well span6 offset3">	          
          <form class="form-horizontal">
            <fieldset>
              <legend class="gray2 formTitleFont bold">Kullanıcı Bilgileri</legend>
              <div class="control-group">
                <label class="control-label bold gray4" for="input01">Kullanıcı Adı:</label>
                <div class="controls">
                  <input type="text" class="input-xlarge span3" id="input01">
                  <p class="help-block gray2">Bloğunuza giriş yaparken kullanacağınız kullanıcı adı.</p>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label bold gray4" for="input01">Şifre:</label>
                <div class="controls">
                  <input type="text" class="input-xlarge span3" id="input01">
                  <p class="help-block gray2">En az 5 karakter, Türkçe karakterler yok.</p>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <legend class="gray2 formTitleFont bold">Blog Bilgileri</legend>
              <p class="fieldsetInfo gray3">İstemiyorsanız boş bırakın, sonra da ekleyip değiştirebilirsiniz.</p>

              <div class="control-group">
                <label class="control-label bold gray4" for="input01">Blog Başlığı:</label>
                <div class="controls">
                  <input type="text" class="input-xlarge span3" id="input01">
                  <p class="help-block gray2">En üst kısmında görünecek başlık.</p>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label bold gray4" for="input01">Kısa Not:</label>
                <div class="controls">
                  <textarea class="input-xlarge span3" id="textarea" rows="4"></textarea>
                  <p class="help-block gray2">Blog başlığının yanında gözükecek kısa yazı. <br> En fazla 160 karakter olmalı.</p>
                </div>
              </div>
            </fieldset>

            <div class="form-actions form-actions-paddingCorrect">
              <button type="submit" class="btn btn-info pull-right">
                Devam
                <i class="icon-chevron-right icon-white"></i>  
              </button>
            </div>
          </form>
        </div> <!-- end .formsContainer -->
      </div> <!-- end .row -->
    </div> <!-- end .container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
