<? require_once 'inc/header.php'; ?>
<? require_once 'inc/navbar.php'; ?>
   <div class="container">
  <div class="row">
      <div class="col-xs-12">
            <div class="col-md-12">
               <br/>
                <div class="form-horizontal col-xs-12 col-sm-12 col-md-12">


            <legend class="text-center" style="margin-top:40px;">تم الحصول على الرابط</legend>
            <br/>
            <h4 class="text-center">الرجاء اضغط على تثبيت</h4>
        <?php

if(isset($_POST['submit'])){
  $url = $_POST['url'];

  $rand = 'q1w2e3r4t5y6u7i7o8p9asdf7g5h7j8k7l5z4x6cv8b8n9m';
  $rand2= substr(str_shuffle($rand),1,5);
$plist = "
<!DOCTYPE plist PUBLIC \"-//Apple//DTD PLIST 1.0//EN\" \"http://www.apple.com/DTDs/PropertyList-1.0.dtd\">
<plist version=\"1.0\">
<dict>
<!-- array of downloads. -->
	<key>items</key>
	<array>
		<dict>
			<!-- an array of assets to download -->
				<key>assets</key>
				<array>
					<dict>
						<!-- required. the asset kind. -->
						<key>kind</key>
						<string>software-package</string>
						<key>url</key>
						<string>$url</string>
					</dict>
					<dict>
						<key>kind</key>
						<string>display-image</string>
						<key>needs-shine</key>
						<true/>
						<key>url</key>
						<string>https://nawafmansour/img/logo.png</string>
					</dict>
					<dict>
						<key>kind</key>
						<string>full-size-image</string>
						<key>needs-shine</key>
						<true/>
						<key>url</key>
						<string>https://nawafmansour/img/logo.png</string>
					</dict>
				</array>
				<key>metadata</key>
			<dict>
				<key>bundle-identifier</key>
				<string>me.$rand2.installer</string>
				<key>bundle-version</key>
				<string>5.4</string>
				<key>kind</key>
				<string>software</string>
				<key>title</key>
				<string>
ابوناصر لتثبيت التطبيقات 

تابعني على السنابشات @Abbeedo.2017

شكرا لك لتثبيت التطبيق من موقعنا
				</string>
			</dict>
		</dict>
	</array>
</dict>
</plist>

";
// يتم انشاء ملف البلست تلقائي installer هنا
  file_put_contents(__DIR__.'/installer/'.$rand2.".plist",$plist);
 $pathinstall = "http://abbeedo.2host.me/installapp-master/installapp/index.php"."/installer/$rand2".".plist";
 // الى مسار رابط موقعك localhost/installapp غير


?>

<div class="form-group">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-check" aria-hidden="true"></i></span>
        <input  type="text" class="form-control" style="border-radius:0px;" value='<?php echo $url; ?>' readonly>
    </div>
</div>
<?
$action ="itms-services://?action=download-manifest&url=";
$goplist= "<center ><a class='form-control btn btn-primary' style='margin-bottom: 10px;'>" .
"<span class='downapp' style='color:#fff;' onclick=\"window.location='$action$pathinstall'\">" . "
تثبيت التطبيق  <i class='fa fa-cloud-download'></i></a> " . "</span></center>";

echo $goplist;
?>

<a href="index.php" class='form-control btn btn-danger' name="submit" style="margin-bottom: 10px;">توقيع جديد  → </a>
<hr />
<fieldset>
<legend class="text-center"> <img src="img/cs.svg"> للإبلاغ عن مشكلة </legend>

    <div class="row">
        <div class="col-md-12 cta-contents ">
          <div class="stepwizard-step2 text-center">
              <!-- href="هنا ضع رابط حسابك" -->
              <a href="http://twitter.com/abbeedo" type="button" class="btn btn-primary btn-circle" >

                <i class="fa fa-twitter" aria-hidden="true" style="font-size:28px"></i>
              </a>
              <p>تويتر</p>
          </div>

        </div>
      </div>
</fieldset>
</div>
</div>
</div>
</div>

<? require_once 'inc/footer.php'; ?>
</div>
<?

die();
}
?>
