<div class="container col-md-10 offset-md-2">
    <div class="header p-3 d-flex justify-content-around">
        <div class="status">
        <h1 class="display align-self-center display-6">Balance des comptes</h1><br>
        <p class="display display-6">Status: <span style="color:red;"> <?=$status[0]['status']?></span></p>
        </div>
        <div class="periode">
            Periode du : 03/01/2023
            <br>
            au : 03/04/2023
            <br>
            Tenu de compte : Ariary
        </div>
    </div>

    <div class="column col-md-12 header">
        <div class="row d-flex justify-content-between">
            <div class="col-md-2 text-center border-right">
                <p class="">N° Compte</p>
            </div>
        <div class="col-md-2 text-center border-right">
            <p class="">Libelle</p>
        </div>
        <div class="col-md-4 text-center border-right">
            <p class="">Mouvements</p>
            <div class="row">
                <div class="col-md-6">
                    <p>Debit</p>
                </div>
                <div class="col-md-6">
                    <p>Crédit</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <p class="">Solde</p>
            <div class="row">
                <div class="col-md-6">
                    <p>Debit</p>
                </div>
                <div class="col-md-6">
                    <p>Credit</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="content col-md-12 header mt-3">
        <?php foreach ($balance as $b): ?>
        <div class="row d-flex justify-content-between">
            <div class="col-md-2 text-center border-right">
                <p class=""><?=$b['numero_compte']?></p>
            </div>
            <div class="col-md-2 text-center border-right">
                <p class=""><?=$b['intitule']?></p>
            </div>
            <div class="col-md-4 text-center border-right">
                <div class="row">
                    <div class="col-md-6">
                        <p><?=$b['total_debit_mv']?></p>
                    </div>
                    <div class="col-md-6">
                        <p><?=$b['total_credit_mv']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="row">
                    <div class="col-md-6">
                        <p><?=$b['solde_debit']?></p>
                    </div>
                    <div class="col-md-6">
                        <p><?=$b['solde_credit']?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>
<style>
    .header{
        border:solid 1px black;
    }
    .border-right {
      border-right: 1px solid black;
    }
</style>