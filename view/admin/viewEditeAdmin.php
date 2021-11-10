<div id="contact">
        <h1 class="text-center">Modifer votre info</h1>
        <form  method="POST" name="donor" action='index.php?controller=admin&action=edited'>
            <div class="row justify-content-center">
                <div class="col-4 m-2">
                    <label class="form-label">Email</label>
                    
                    <input ?type="text" class="form-control" placeholder="Nom" name="email" Value=<?php  echo $admin->getEmail(); ?> readonly>
                </div>
                <div class="col-4 m-2">
                    <label class="form-label">Mot de pass</label>
                  <input type="password" class="form-control" placeholder="Modifer modps" name="password"  >
                </div>
            </div>
            <center>
                <button class="btn btn-light my-4" type="submit">Submit</button> 
            </center>
        </form>
    </div>