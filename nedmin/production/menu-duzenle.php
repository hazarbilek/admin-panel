<?php
 include 'header.php'; 

$menusor = $db->prepare("SELECT * FROM menu WHERE menu_id=:id");
$menusor->execute(array(
  'id' => $_GET['menu_id']
));

$menucek = $menusor->fetch(PDO::FETCH_ASSOC);


 ?>

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ayarlar</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
         
            
                  <div class="x_content">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>menu Düzenleme<small>

                      <?php 

                        if ($_GET['durum']=="ok") {?>
                          
                          <b style="color: green;">İşlem Başarılı...</b>

                          <?php } 
                          
                          elseif ($_GET['durum']=="no") {?>
                            
                            <b style="color: red;">İşlem Başarısız...</b>

                         <?php  }

                         ?>
                                       
                    </small></h2>
                     
                    <ul class="nav navbar-right panel_toolbox">

                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

        <div class="x_content">

        <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

 


               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Ad<span class="required">*</span>
                  </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name" required="required" value="<?php echo $menucek['menu_ad']; ?>" name="menu_ad" class="form-control col-md-7 col-xs-12">
                    </div>
               </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menü Detay <span class="required">*</span>
                  </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      
                      <textarea class="ckeditor" id="editor1" name="menu_detay"><?php echo $menucek['menu_detay']; ?></textarea>
                    </div>
               </div>

               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Url<span class="required">*</span>
                  </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name"  value="<?php echo $menucek['menu_url']; ?>" name="menu_url" class="form-control col-md-7 col-xs-12">
                    </div>
               </div>

               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Sıra<span class="required">*</span>
                  </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name" required="required" value="<?php echo $menucek['menu_sira']; ?>" name="menu_sira" class="form-control col-md-7 col-xs-12">
                    </div>
               </div>



              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">menu Durum<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="menu_durum" required>


            <option value="1" <?php echo $menucek['menu_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>
           <option value="0" <?php if ($menucek['menu_durum']==0) { echo 'selected=""'; } ?>>Pasif</option>

                 


                
                



                 </select>
               </div>
             </div>

               
             <input type="hidden" name="menu_id" value="<?php echo $menucek['menu_id']; ?>">
               


               <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="menuduzenlekaydet" class="btn btn-primary">Güncelle</button>
                </div>
          </form>
             
                  </div>
                </div>
              </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php include 'footer.php'; ?>