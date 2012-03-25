<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Yönetici Sayfası</title>
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
      $('.dropdown-toggle').dropdown();
    </script>
  </head>

  <body>

    <div class="container">
      <div class="row">
        <div class="installationPageHeader">
          <div class="gray4">mi<span>Blog</span></div>
          <div class="seperator"></div>
          <div class="gray2">Yönetici Sayfası</div>
        </div>
      </div> <!-- end .row -->

      <div class="row">
        <div class="well well-small span8 offset2">
          <a href="#" class="btn btn-warning pull-left">
            <i class="icon-plus icon-white"></i> 
            Yeni Yazı Ekle
          </a>

          <div class="btn-group pull-right">
            <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
              Hesabım
              <i class="icon-chevron-down icon-white"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Blog Bilgileri</a></li>
              <li><a href="#">Hakkımda Sayfası</a></li>
              <li><a href="#">Şifre Değiştir</a></li>
              <li class="divider"></li>
              <li><a href="#">Çıkış Yap</a></li>
            </ul>
          </div>
        </div> <!-- end .well -->
      </div> <!-- end .row -->

      <div class="row">
        <span class="wellOuterTitle offset2">Haziran 2012</span>
        <div class="wellOpposite wellOpposite-small span8 offset2">
          <div class="entryListItemContainer whiteTextShadow5">
            <div class="entryListItemDay">
              <span>23</span>
              <div></div>
            </div>
            <div class="entryListItemContent">
              <span class="entryListItemCategory">
                <i class="icon-th-list"></i>
                <span>|</span>
                <a href="#">Kategori</a>
              </span>
              <a class="entryListItemTitle">Yazı Başlığı Gelecek Buraya ve Baya Uzun Olabilir</a>
              <div class="entryListItemTags">
                <span class="entryListItemTagsBegin">
                  <i class="icon-tag"></i>
                  <span>|</span>
                </span>
                <a href="">etiket</a>
                <span class="coma">, </span>
                <a href="">bunların</a>
                <span class="coma">, </span>
                <a href="">hepsi</a>
                <span class="coma">, </span>
                <a href="">böyle</a>
              </div>
            </div> <!-- end .entryListItemContent -->

            <div class="entryListItemButtons btn-group">
              <a href="#" title="Düzenle" class="btn btn-mini btn-info pull-left">
                <i class="icon-pencil icon-white"></i>
              </a>
              <a href="#" title="Sil" class="btn btn-mini btn-danger pull-left">
                <i class="icon-remove icon-white"></i>
              </a>
            </div>

            <div class="clearBoth"></div>
          </div> <!-- end .entryListItemContainer -->

          <div class="entryListItemSeperator"></div>

          <div class="entryListItemContainer whiteTextShadow5">
            <div class="entryListItemDay">
              <span>12</span>
              <div></div>
            </div>
            <div class="entryListItemContent">
              <span class="entryListItemCategory">
                <i class="icon-th-list"></i>
                <span>|</span>
                <a href="#">PHP Programlama</a>
              </span>
              <a class="entryListItemTitle">Birisi Codeigniter'ı İyi Öğrenmezse Yandık</a>
              <div class="entryListItemTags">
                <span class="entryListItemTagsBegin">
                  <i class="icon-tag"></i>
                  <span>|</span>
                </span>
                <a href="">size</a>
                <span class="coma">, </span>
                <a href="">bu</a>
                <span class="coma">, </span>
                <a href="">laflar</a>
              </div>
            </div> <!-- end .entryListItemContent -->

            <div class="entryListItemButtons btn-group">
              <a href="#" title="Düzenle" class="btn btn-mini btn-info pull-left">
                <i class="icon-pencil icon-white"></i>
              </a>
              <a href="#" title="Sil" class="btn btn-mini btn-danger pull-left">
                <i class="icon-remove icon-white"></i>
              </a>
            </div>

            <div class="clearBoth"></div>
          </div> <!-- end .entryListItemContainer -->
        </div>

        <div class="clearBoth"></div>

        <span class="wellOuterTitle offset2">Mayıs 2012</span>
        <div class="wellOpposite wellOpposite-small span8 offset2">
          <div class="entryListItemContainer whiteTextShadow5">
            <div class="entryListItemDay">
              <span>07</span>
              <div></div>
            </div>
            <div class="entryListItemContent">
              <span class="entryListItemCategory">
                <i class="icon-th-list"></i>
                <span>|</span>
                <a href="#">Kategori</a>
              </span>
              <a class="entryListItemTitle">Yazı Başlığı Gelecek Buraya ve Baya Uzun Olabilir Şimdi Onu Deneyelim Bakalım</a>
              <div class="entryListItemTags">
                <span class="entryListItemTagsBegin">
                  <i class="icon-tag"></i>
                  <span>|</span>
                </span>
                <a href="">etiket</a>
                <span class="coma">, </span>
                <a href="">bunların</a>
                <span class="coma">, </span>
                <a href="">hepsi</a>
                <span class="coma">, </span>
                <a href="">böyle</a>
                <span class="coma">, </span>
                <a href="">etiket</a>
                <span class="coma">, </span>
                <a href="">bunların</a>
                <span class="coma">, </span>
                <a href="">hepsi</a>
                <span class="coma">, </span>
                <a href="">böyle</a>
                <span class="coma">, </span>
                <a href="">etiket</a>
                <span class="coma">, </span>
                <a href="">bunların</a>
                <span class="coma">, </span>
                <a href="">hepsi</a>
                <span class="coma">, </span>
                <a href="">böyle</a>
                <span class="coma">, </span>
                <a href="">hepsi</a>
                <span class="coma">, </span>
                <a href="">böyle</a>
              </div>
            </div> <!-- end .entryListItemContent -->

            <div class="entryListItemButtons btn-group">
              <a href="#" title="Düzenle" class="btn btn-mini btn-info pull-left">
                <i class="icon-pencil icon-white"></i>
              </a>
              <a href="#" title="Sil" class="btn btn-mini btn-danger pull-left">
                <i class="icon-remove icon-white"></i>
              </a>
            </div>

            <div class="clearBoth"></div>
          </div> <!-- end .entryListItemContainer -->

          <div class="entryListItemSeperator"></div>

          <div class="entryListItemContainer whiteTextShadow5">
            <div class="entryListItemDay">
              <span>12</span>
              <div></div>
            </div>
            <div class="entryListItemContent">
              <span class="entryListItemCategory">
                <i class="icon-th-list"></i>
                <span>|</span>
                <a href="#">PHP Programlama</a>
              </span>
              <a class="entryListItemTitle">Birisi Codeigniter'ı İyi Öğrenmezse Yandık Heyoo Bu da Deneme Ama Çok Daha Uzun Bir Başlık Denemesi</a>
              <div class="entryListItemTags">
                <span class="entryListItemTagsBegin">
                  <i class="icon-tag"></i>
                  <span>|</span>
                </span>
                <a href="">size</a>
                <span class="coma">, </span>
                <a href="">bu</a>
                <span class="coma">, </span>
                <a href="">laflar</a>
              </div>
            </div> <!-- end .entryListItemContent -->

            <div class="entryListItemButtons btn-group">
              <a href="#" title="Düzenle" class="btn btn-mini btn-info pull-left">
                <i class="icon-pencil icon-white"></i>
              </a>
              <a href="#" title="Sil" class="btn btn-mini btn-danger pull-left">
                <i class="icon-remove icon-white"></i>
              </a>
            </div>

            <div class="clearBoth"></div>
          </div> <!-- end .entryListItemContainer -->

          <div class="entryListItemSeperator"></div>

          <div class="entryListItemContainer whiteTextShadow5">
            <div class="entryListItemDay">
              <span>12</span>
              <div></div>
            </div>
            <div class="entryListItemContent">
              <span class="entryListItemCategory">
                <i class="icon-th-list"></i>
                <span>|</span>
                <a href="#">PHP Programlama</a>
              </span>
              <a class="entryListItemTitle">Birisi Codeigniter'ı İyi Öğrenmezse Yandık</a>
              <div class="entryListItemTags">
                <span class="entryListItemTagsBegin">
                  <i class="icon-tag"></i>
                  <span>|</span>
                </span>
                <a href="">size</a>
                <span class="coma">, </span>
                <a href="">bu</a>
                <span class="coma">, </span>
                <a href="">laflar</a>
              </div>
            </div> <!-- end .entryListItemContent -->

            <div class="entryListItemButtons btn-group">
              <a href="#" title="Düzenle" class="btn btn-mini btn-info pull-left">
                <i class="icon-pencil icon-white"></i>
              </a>
              <a href="#" title="Sil" class="btn btn-mini btn-danger pull-left">
                <i class="icon-remove icon-white"></i>
              </a>
            </div>
          </div> <!-- end .entryListItemContainer -->
        </div>
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