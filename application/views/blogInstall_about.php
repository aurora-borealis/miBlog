<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hakkında Sayfası Kurulum</title>
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
          <div class="gray2">Hakkında Sayfası Kurulumu</div>
        </div>
      </div> <!-- end .row -->

      <div class="row">
        <div class="well well-small span8 offset2">
          <a href="blogInstall.html" class="btn btn-info pull-left">
            <i class="icon-chevron-left icon-white"></i> 
            Geri
          </a>

          <a href="login.html" type="submit" class="btn btn-success pull-right">
            <i class="icon-ok icon-white"></i> 
            Bloğu Oluştur
          </a>
          
          <span class="buttonSideInfo gray2">Bu sayfayı boş bırakıp daha sonra da doldurabilirsiniz</span>
        </div> <!-- end .well -->
      </div> <!-- end .row -->

      <div class="row">
      	<form class="form-horizontal whiteTextShadow5">
      	  <fieldset>
      	  	<span class="wellOuterTitle offset2">TEMEL BİLGİLER</span>
      	  	<div class="wellOpposite wellOpposite-small span8 offset2">
      	  		<div class="mainInfos">
      	  			<div class="control-group">
      	  			  <label class="control-label bold gray3" for="input01">Adınız:</label>
      	  			  <div class="controls">
      	  			    <input type="text" class="span3" placeholder="Ömer Faruk" id="input01">
      	  			  </div>
      	  			</div> 
      	  			
      	  			<div class="control-group">
      	  			  <label class="control-label bold gray3" for="input01">Soyadınız:</label>
      	  			  <div class="controls">
      	  			    <input type="text" class="span3" placeholder="Demir" id="input01">
      	  			  </div>
      	  			</div> 
      	  			
      	  			<div class="control-group">
      	  			  <label class="control-label bold gray3" for="input01">Kısaca Hakkınızda:</label>
      	  			  <div class="controls">
      	  			    <textarea class="input-xlarge span3" id="textarea" rows="5"></textarea>
      	  			    <p class="help-block gray2">En fazla 160 karakter olmalı</p>
      	  			  </div>
      	  			</div>
      	  		</div> <!-- end .mainInfos -->
      	  		
      	  		<div class="mainInfosSeperator"></div>
      	  			
      	  		<div class="uploadAvatar">
      	  			<h6>PROFİL RESMİ</h6>
      	  			<img src="../../img/about.png" alt="" />
      	  			<span class="gray2">Avatarınızı miBlog / avatar kalsörüne atıp adını buraya yazın</span>
      	  			<div class="input-append">
	                <input id="appendedPrependedInput" placeholder="Dosya ismi" size="16" type="text"><a href="#" class="btn" type="button">Guncelle</a>
	              </div>
      	  		</div> <!-- end .uploadAvatar -->
      	  	</div>  <!-- end .wellOpposite -->
      	  </fieldset>
      	  
      	  <fieldset>
      	  	<span class="wellOuterTitle offset2">İLETİŞİM BİLGİLERİ</span>
      	  	<div class="wellOpposite wellOpposite-small span8 offset2">
      	  		<div class="contactInfos">
      	  			<div class="control-group">
      	  			  <label class="control-label bold gray3" for="input01">Mail Adresiniz:</label>
      	  			  <div class="controls">
      	  			    <input type="email" class="span3" id="input01">
      	  			  </div>
      	  			</div> 
      	  			
      	  			<div class="control-group">
      	  			  <label class="control-label bold gray3" for="input01">Facebook:</label>
      	  			  <div class="controls">
      	  			    <input type="text" class="span3" id="input01">
      	  			  </div>
      	  			</div> 
      	  			
      	  			<div class="control-group">
      	  			  <label class="control-label bold gray3" for="input01">Twitter:</label>
      	  			  <div class="controls">
      	  			    <input type="text" class="span3" id="input01">
      	  			  </div>
      	  			</div> 
      	  			
      	  			<div class="control-group">
      	  			  <label class="control-label bold gray3" for="input01">Linkedin:</label>
      	  			  <div class="controls">
      	  			    <input type="text" class="span3" id="input01">
      	  			  </div>
      	  			</div> 
      	  		</div> <!-- end .mainInfos -->
      	  	</div>  <!-- end .wellOpposite -->
      	  </fieldset>
      	  
      	  <div class="well well-small span8 offset2">
      	  	<a href="blogInstall.html" class="btn btn-info pull-left">
      	  	  <i class="icon-chevron-left icon-white"></i> 
      	  	  Geri
      	  	</a>
      	  	
            <a href="login.html" type="submit" class="btn btn-success pull-right">
              <i class="icon-ok icon-white"></i> 
              Bloğu Oluştur
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