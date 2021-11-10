<div id="contact">
        <h1 class="text-center">Be a donor</h1>
        <form  method="POST" name="donor" action='index.php?controller=demande&action=edited'>
            <div class="row justify-content-center">
                <div class="col-4 m-2">
                <?php echo $demande->getEmail(); ?>
                    <label class="form-label">email</label>
                    <input type="text" class="form-control" placeholder="email" name="email" value=<?php echo $demande->getemail(); ?>>
                </div>
                <div class="col-4 m-2">
                    <label class="form-label">CIN</label>
                  <input type="text" class="form-control" placeholder="CIN" name="cin" value=<?php echo $demande->getCin(); ?>>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4 m-2">
                    <label class="form-label">telephone</label>
                  <input type="text" class="form-control" placeholder="telephone" name="tel" value=<?php echo $demande->getTel(); ?>>
                </div>
                <div class="col-4 m-2">
                    <label class="form-label">type</label>
                  <input type="text" class="form-control" placeholder="type" name="type" value=<?php echo $demande->getType(); ?>>
                </div>
            </div>

            <center>
                <button class="btn btn-light my-4" type="submit">Submit</button>
            </center>
        </form>
    </div>