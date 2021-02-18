<?php
 include 'header.php'; 


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
                    <h2>Menü Ekleme<small>
                                       
                    </small></h2>
                     
                    <div class="clearfix"></div>
                  </div>

        <div class="x_content">

        <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

 


               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Ad<span class="required">*</span>
                  </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name" required="required" name="menu_ad" placeholder="Menü Adını Giriniz" class="form-control col-md-7 col-xs-12">
                    </div>
               </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menü Detay <span class="required">*</span>
                  </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      
                      <textarea class="ckeditor" id="editor1" name="menu_detay"></textarea>
                    </div>
               </div>

               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Url<span class="required">*</span>
                  </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name"  name="menu_url" placeholder="Menü url Giriniz" class="form-control col-md-7 col-xs-12">
                    </div>
               </div>

               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Sıra<span class="required">*</span>
                  </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name" required="required" name="menu_sira" placeholder="Menü Sırasını Giriniz" class="form-control col-md-7 col-xs-12">
                    </div>
               </div>



              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">menu Durum<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="menu_durum" required>


            <option value="1">Aktif</option>
           <option value="0" >Pasif</option>

                 


                
                



                 </select>
               </div>
             </div>

               
             <input type="hidden" name="menu_id" value="<?php echo $menucek['menu_id']; ?>">
               


               <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="menukaydet" class="btn btn-primary">Kaydet</button>
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