<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>miBlog Kurulum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <?php foreach ($miBlogConfig['css'] as $css): ?>
    <?php echo link_tag($css); ?>
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

    <script type="text/javascript">
    	
    </script>
  </head>

  <body>

    <div class="container">
      <div class="row">
        <div class="installationPageHeader">
          <div class="gray4">mi<span>Blog</span></div>
          <div class="seperator"></div>
          <div class="gray2">Kurulum Sayfası</div>
        </div>
      </div> <!-- end .row -->

      <div class="row">
      	<form class="form-horizontal whiteTextShadow5">
      	  <fieldset>
      	  	<span class="wellOuterTitle offset2">KULLANICI BİLGİLERİ</span>
      	  	<div class="wellOpposite wellOpposite-small span8 offset2">
      	  		<div class="mainInfos">
      	  			<div class="control-group">
      	  			  <label class="control-label bold gray3" for="input01">Kullanıcı Adı:</label>
      	  			  <div class="controls">
      	  			    <input type="text" class="span3" placeholder="omerfaruk" id="input01">
      	  			    <p class="help-block gray2">Bloğunuza giriş yaparken kullanacağınız ad, esas adınız ve soyadınız olmak zorunda değil.</p>
      	  			  </div>
      	  			</div> 
      	  			
      	  			<div class="control-group">
      	  			  <label class="control-label bold gray3" for="input01">Şifre:</label>
      	  			  <div class="controls">
      	  			    <input type="password" class="span3" id="input01">
      	  			    <p class="help-block gray2">En az 5 basamaklı olmalı; İngilizce harfler, sayı ve noktalama işaretleri kullanılabilir.</p>
      	  			  </div>
      	  			</div> 
      	  		</div> <!-- end .mainInfos -->
      	  	</div>  <!-- end .wellOpposite -->
      	  </fieldset>
      	  
      	  <fieldset>
      	  	<span class="wellOuterTitle offset2">BLOG BİLGİLERİ
      	  		<div class="wellOuterTitleHelper">
      	  			<div class="seperator"></div>
      	  			<span>Opsiyonel alan, daha sonra da doldurabilirsiniz</span>
      	  		</div>
      	  	</span>
      	  	<div class="wellOpposite wellOpposite-small span8 offset2">
      	  		<div class="mainInfos">
      	  			<div class="control-group">
      	  			  <label class="control-label bold gray3" for="input01">Blog Başlığı:</label>
      	  			  <div class="controls">
      	  			    <input type="text" class="span3" id="input01">
      	  			    <p class="help-block gray2">En üst kısmında gözükecek başlık.</p>
      	  			  </div>
      	  			</div> 
      	  			
      	  			<div class="control-group">
      	  			  <label class="control-label bold gray3" for="input01">Blog Hakkında:</label>
      	  			  <div class="controls">
      	  			    <textarea class="input-xlarge span3" id="textarea" rows="4"></textarea>
      	  			    <p class="help-block gray2">Blog başlığının yanında gözükecek kısa not. En fazla 160 karakter olabilir.</p>
      	  			  </div>
      	  			</div> 
      	  		</div> <!-- end .mainInfos -->
      	  	</div>  <!-- end .wellOpposite -->
      	  </fieldset>
      	  
      	  <div class="well well-small span8 offset2">
            <a href="aboutInstall.html" type="submit" class="btn btn-success pull-right">
              Devam
              <i class="icon-chevron-right icon-white"></i> 
            </a>
          </div> <!-- end .well -->
      	</form>
        
        <div class="clearBoth"></div>
      </div> <!-- end .row -->

      <div class="emptyFooter"></div>
    </div> <!-- end .container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>