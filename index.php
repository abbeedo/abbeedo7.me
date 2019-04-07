<? require_once 'inc/header.php'; ?>
<? require_once 'inc/navbar.php'; ?>
<?php


    $msg = null;


    if(isset($_POST['submit'])){
        if(empty($_POST['url']) || !filter_var($_POST['url'] , FILTER_VALIDATE_URL)){
            $msg = 'الرجاء ادخال رابط التطبيق المراد توقيعه';
        }else{$fullPlistPath = __DIR__ . "/installer/" ;
            require 'installer.php';
        }
    }




if (strpos($_SERVER['HTTP_USER_AGENT'], 'OS 11' ) !== false) {
    $version = "اصدار النظام 11";
}elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'OS 10' ) !== false) {
    $version = "اصدار النظام 10";
}elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'OS 9' ) !== false) {
    $version = "اصدار النظام 9";
}elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'OS 8' ) !== false) {
    $version = "اصدار النظام 8";
}else {
    $version = "معلومات جهازك";
}

?>



   <div class="container">

  <div class="stepwizard">
      <div class="stepwizard-row setup-panel">
          <div class="stepwizard-step">
            <!-- href="هنا ضع رابط حسابك" -->
              <a href="" type="button" class="btn btn-success btn-circle">
                  <i class="fa fa-whatsapp" aria-hidden="true" style="font-size:28px"></i>
              </a>
              <p>واتس</p>
          </div>
          <div class="stepwizard-step">
              <!-- href="هنا ضع رابط حسابك" -->
              <a href="" type="button" class="btn btn-primary btn-circle">

                <i class="fa fa-twitter" aria-hidden="true" style="font-size:28px"></i>
              </a>
              <p>تويتر</p>
          </div>
          <div class="stepwizard-step">
              <!-- href="هنا ضع رابط حسابك" -->
              <a href="" type="button"  class="btn btn-warning btn-circle">
                <i class="fa fa-snapchat-ghost" aria-hidden="true" style="font-size:28px"></i>
              </a>

              <p>سناب</p>
          </div>
      </div>
  </div>

      <div class="row">
          <div class="col-xs-12">
                <div class="col-md-12">
                   <br/>
                    <div class="form-horizontal col-xs-12 col-sm-12 col-md-12">
                        <form  role="form" method="POST" action="">
                            <fieldset>
                              <legend class="text-center">موقع لتثبيت التطبيقات</legend>
                              <br/>
                              <div class="form-group ">
                                  <div class="input-group textp-right">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
                                      <input type="url"  class="form-control" style="border-radius:0px" name="url" placeholder="الرجاء ضع الرابط هنا">

                                  </div>
                                  <?php if($msg !== NULL):?>
                                  <div class="text-danger text-right"><?=$msg?></div>
                                <?php endif;?>
                              </div>

                              <div class="form-group">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-phone" aria-hidden="true"></i></span>
                                      <input id="login-username" type="text" class="form-control" style="border-radius:0px" value="<?php echo $version; ?>" placeholder="معلومات جهازك" readonly>
                                  </div>
                              </div>

                              <button class='form-control btn btn-primary submit-button' type='submit' value="Submit" name="submit" style="margin-bottom: 10px;">تثبيت التطبيق → </button>

                            </fieldset>
                        </form>
                        <br/>
                        <fieldset>
                        <legend class="text-center"> <img src="img/cs.svg"> معلومات مهمة </legend>
                            <div class="row">
                                <div class="col-md-12 cta-contents text-right">
                                    <div class="cta-desc">
                                        <a href="#" class="btn btn-block btn-default" data-toggle="modal" data-target="#exampleModal">تعليمات التثبيت <i class="glyphicon glyphicon-eye-open"></i></a>
                                        <a href="https://www.youtube.com/embed/bCJjiCq-c6g" class="btn btn-block btn-default">شرح التثبيت <i class="glyphicon glyphicon-hand-left"></i></a>
                                        <a href="#" class="btn btn-block btn-default" data-toggle="modal" data-target="#exampleModal1">مواقع تهمك <i class="glyphicon glyphicon-hand-left"></i></a>
                                    </div>
                                </div>
                              </div>
                        </fieldset>
                    </div>
                  </div>
              </div>
          </div>
      </div>


      <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">تعليمات التثبيت</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-center">
              <p> يجب ان يكون الرابط مباشر بهذه الطريقة 1</p>
                <p>https://nawaf.net/snapchat.ipa</p>
                  <p>2- اذا لم يكن لديك جيلبريك استخدم البرامج المجانية</p>
                    <p>3- appsync اذا لديك جيلبريك استخدم اداة </p>
                    <p> تثبيت البرامج بدون شهادة Appsync Unified وظيفة</p>
                    <p>لتثبيت السورس والاداة</p>

                    <a  href="cydia://package/net.angelxwind.appsyncunified" class="btn btn-primary">تثبيت الاداة</a>
                    <a  href="cydia://url/https://cydia.saurik.com/api/share#?source=https://cydia.angelxwind.net/" class="btn btn-primary">تثبيت السورس</a>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">إغلاق</button>

              </div>
            </div>
          </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">مواقع تهمك</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h4 class="text-center">مواقع لتحميل البرامج</h4><hr />
                <h5 class="text-center">فقط لاصحاب الجيلبريك</h5>
                <h5 class="text-center">للتحميل من اي موقع</h5>
                <h5 class="text-center">Appsync Unified استخدم جيلبريك واداة</h5>
                <a class='form-control btn btn-primary' href="https://arab-dev.net/" style="margin-bottom: 10px;"><i class='fa fa-cloud-download'></i> موقع عرب ديف</a>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">إغلاق</button>
              </div>
            </div>
          </div>
        </div>


<? require_once 'inc/footer.php'; ?>
