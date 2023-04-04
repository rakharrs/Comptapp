<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>>/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/bootstrap/css/bootstrap.min.css">
    <title>sign in</title>
</head>
<body>
<section class="position-relative py-4 py-xl-5">
    <div class="container position-relative">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="card mb-5">
                    <div class="card-body p-sm-5">
                        <h2 class="text-center mb-4">Log in</h2>
                        <form method="post" action="traitement/log_in" id="log-in" data-parsley-validate="">

                            <input type="text" name="sign-up" value="signup" style="display: none">
                            <div class="mb-5">
                                <input class="form-control" type="email" id="email-2" value="colas@gmail.com" name="email" placeholder="Email..." data-parsley-trigger="change" required>
                            </div>
                            <div class="mb-5">
                                <input class="form-control" type="password" id="name-2" value="kazrt" name="password" placeholder="password..." required>
                            </div>
                            <div>
                                <button class="btn btn-dark d-block w-100 mb-3" type="submit" onclick="signin()">
                                    Signin
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo site_url("assets/js/jquery.min.js") ?>">
</script>
<script src="<?php echo site_url("assets/js/parsley.min.js") ?>">
</script>
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
    }
</style>
</body>
</html>
