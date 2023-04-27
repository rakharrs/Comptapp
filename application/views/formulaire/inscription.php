<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/inscription.css" />
    <title>Registraion Form</title>
  </head>
  <body>
  <?php /*include(APPPATH . 'views/loader.php'); */?>

    <div class="container">
      <div class="form-container" >
        <form id="my-form" method="post" action="<?=base_url()?>test/insert" data-parsley-validate="" enctype="multipart/form-data" >
          <h1 class="text-center title"></h1>
          <!-- Progress bar -->
          <div class="progressbar">
            <div class="progress" id="progress"></div>
            
            <div
              class="progress-step progress-step-active"
              data-title=""></div>
            <div class="progress-step" data-title=""></div>
            <div class="progress-step" data-title=""></div>
            <div class="progress-step" data-title=""></div>
            <div class="progress-step" data-title=""></div>
          </div>
    
          <!-- Steps -->
          <div class="form-step form-step-active">
            <div class="input-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="username" value="Henry Fraise" required />
            </div>
            <div class="input-group">
              <label for="founder">Founder</label>
              <input type="text" name="founder" id="position" value="Fraise&co" required/>
            </div>
            <div class="input-group">
              <label for="headquarters">Siege</label>
              <input type="text" name="headquarters" id="position" value="Ankorondrano" required/>
            </div>
            <div class="">
              <a href="#" class="btn btn-next width-50 ml-auto">Continue</a>
            </div>
          </div>
          <div class="form-step">
            <div class="input-group">
              <label for="nif">NIF</label>
              <input type="text" value="MG-1998-0414-5678" required name="nif" >
            </div>
            <div class="input-group">
              <label for="nif_path">NIF-PATH</label>
              <input type="file" name="nif_path"    class="buttonDownload">
            </div>
            <div class="input-group">
              <label for="status">Status</label>
              <input type="file" name="status"  value="upload" required  class="buttonDownload">
            </div>
          <div class="btns-group">
            <a href="#" class="btn btn-prev">Back</a>
            <a href="#" class="btn btn-next">Continue</a>
          </div>
          </div>
          <div class="form-step">
            <div class="input-group">
              <label for="stat_num">NUMSTAT</label>
              <input type="text" value="NM-23455-MD-261"   required name="stat_num"  >
            </div>
            <div class="input-group">
              <label for="phone">Telephone</label>
              <input type="text" name="phone"  value="0342345678" required >
            </div>
            <div class="input-group">
              <label for="fax">Fax</label>
              <input type="text" name="fax" value="2204894" required  >
            </div>
          <div class="btns-group">
            <a href="#" class="btn btn-prev">Back</a>
            <a href="#" class="btn btn-next">Continue</a>
          </div>
          </div>
          <div class="form-step">
            <div class="input-group">
              <label for="description">Description</label>
              <textarea name="description" id="" cols="50" rows="2" placeholder="Your description here"></textarea>
            </div>
            <div class="input-group">
              <label for="creationDate">Date creation</label>
              <input type="date" value="2002-01-04" name="creationDate" required>
            </div>
            <div class="input-group">
              <label for="dateE">Date Exercice</label>
              <input type="date" value="2022-01-04" name="dateE" required>
            </div>
          <div class="btns-group">
            <a href="#" class="btn btn-prev">Back</a>
            <a href="#" class="btn btn-next">Continue</a>
          </div>
          </div>
          <div class="form-step">
            <div class="input-group">
              <label for="email" >Email</label>
              <input type="email" value="fraise@genius.com" name="email" data-parsley-validate="change" required />
            </div>
            <div class="input-group">
              <label for="password">Password</label>
              <input
              value="heart265!"
                type="password"
                name="password"
                id="password"
                required
              />
            </div>
            <div class="btns-group">
              <a href="#" class="btn btn-prev">Back</a>
              <input type="submit" value="Submit" class="btn submit" />
            </div>
          </div>
        </form>
      </div>
      <div class="svg-container" style="width: 40%;">
          <img style="width: 100%;" src="<?=base_url()?>assets/img/building.svg" alt="SVG Image">
          <div >
            <h1 class="completion-step" ></h1>
            <p>Already have an account ? <a href="<?=base_url()?>sign">Sign in </a></p>
          </div>
        </div>  

    </div>
  </body>
  <script src="<?php echo site_url("assets/js/spinner.js") ?>"></script>
  <script src="<?=base_url()?>assets/js/mutli-step-form.js"></script>
  <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/js/parsley.min.js"></script>
  <script type="text/javascript">
    $(function () {
        $('#my-form').parsley().on('field:validated', function() {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        })
            .on('form:submit', function() {

            });
    });
</script>
<style>
    ul{
        list-style: none;
    }
    li{
        color: red;
        font-size: 13px;
    }
</style>
</html>
