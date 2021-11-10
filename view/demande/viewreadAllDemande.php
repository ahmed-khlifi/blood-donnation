
    <h1 class="text-center my-4">People that needs <span class="red">blood</span> !</h1>
    <div class="container d-flex justify-content-start flex-wrap">
    <?php
        foreach($demandes as $demande){
            echo '
        <div class="card m-2">
            <div>
                <span class="red">#Donor</span>
                <hr>
                        <p>Email <span class="red">'.$demande->getEmail().'</span></p>
                        <p>CIN <span class="red">'.$demande->getCin().'</span></p>
                        <p>Phone <span class="red">'.$demande->getTel().'</span></p>
                        <p>Type <span class="red">'.$demande->getType().'</span></p>';
                        if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'admin'){
                        echo '
                        <a href="index.php?controller=demande&action=delete&cin='.$demande->getCin().'"><button class="btn btn-dark">Suprimer</button></a>
                        <a href="index.php?controller=demande&action=edite&cin='.$demande->getCin().'"><button class="btn btn-dark">Modifer</button></a>';
                    };
         echo ' </div> </div>';
        ;  }
        ?>
    </div>