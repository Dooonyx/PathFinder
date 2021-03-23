<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- Include JQuery 3.4.1 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

<?php
        $link = new PDO('mysql:host=localhost:3306;dbname=danypereira','Donyx','Aur3loinSul1&',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        $sql = "SELECT bloc_missions, bloc_qualities, job_id_explications, id_job, question_wage, question_studies, question_status FROM explications, job WHERE job_id_explications = '2' AND explications.job_id_explications = job.id_job";    
        $req = $link -> prepare($sql);
        $req -> execute();
?>

        <div class="text-db1 hidden">
            <div id="affichage-graphist" class="explications-graphist show"></div>

            <div id="wage-graphist" class="wage-graphist show"></div>
            <div id="studies-graphist" class="studies-graphist show"></div>
            <div id="status-graphist" class="status-graphist show"></div>

            <div class="choix">
                <button id="choice" class="choix1 show">Salaire</button>
                <button id="choice" class="choix2 show">Études requises</button>
                <button id="choice" class="choix3 show">Statut</button>
                <button id="choice" class="choix4">Revenir au début</button>
            </div>
        </div>
    
    <?php
        while($data=$req -> fetch()){
    ?>
    
    <script type="text/javascript">        
        $(document).ready(function () {
            $(".wage-graphist").removeClass("show");
            $(".studies-graphist").removeClass("show");
            $(".status-graphist").removeClass("show");

            var missions = "<?php echo $data['bloc_missions'].'<br> <br>'.$data['bloc_qualities'] ;?> ";
            document.getElementById("affichage-graphist").innerHTML = missions;

            var wage = "<?php echo $data['question_wage'] ;?> ";
            document.getElementById("wage-graphist").innerHTML = wage;
            var studies = "<?php echo $data['question_studies'] ;?> ";
            document.getElementById("studies-graphist").innerHTML = studies;
            var status = "<?php echo $data['question_status'] ;?> ";
            document.getElementById("status-graphist").innerHTML = status;

                $('[class*="choix1"]').on("click", function() {
                        $(".explications-graphist").removeClass("show");
                        $(".wage-graphist").toggleClass("show");
                        $(".studies-graphist").removeClass("show");
                        $(".status-graphist").removeClass("show");
                        $(".choix1").removeClass("show");
                });

                $('[class*="choix2"]').on("click", function() {
                        $(".explications-graphist").removeClass("show");
                        $(".studies-graphist").toggleClass("show");
                        $(".wage-graphist").removeClass("show");
                        $(".status-graphist").removeClass("show");
                        $(".choix2").removeClass("show");
                });

                $('[class*="choix3"]').on("click", function() {
                        $(".explications-graphist").removeClass("show");
                        $(".status-graphist").toggleClass("show");
                        $(".wage-graphist").removeClass("show");
                        $(".studies-graphist").removeClass("show");
                        $(".choix3").removeClass("show");
                });

                $('[class*="choix4"]').on("click", function() {
                    $(".explications-graphist").toggleClass("show");
                    $('[class*="choix1"]').toggleClass("show");
                    $('[class*="choix2"]').toggleClass("show");
                    $('[class*="choix3"]').toggleClass("show");
                    $(".status-graphist").removeClass("show");
                    $(".wage-graphist").removeClass("show");
                    $(".studies-graphist").removeClass("show");
                    $('[class*="choix4"]').removeClass("show");
                });
        });

        
    </script>

    <?php
        }
        $req = null;
    ?>

    <?php
        $link = new PDO('mysql:host=localhost:3306;dbname=danypereira','Donyx','Aur3loinSul1&',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        
        $sql = "SELECT bloc_missions, bloc_qualities, job_id_explications, id_job, question_wage, question_studies, question_status FROM explications, job WHERE job_id_explications = '4' AND explications.job_id_explications = job.id_job";
    
        $req = $link -> prepare($sql);
        $req -> execute();

    ?>

        <div class="text-db2 hidden">
            <div id="affichage-motionDesigner" class="explications-motionDesigner show"></div>

            <div id="wage-motionDesigner" class="wage-motionDesigner show"></div>
            <div id="studies-motionDesigner" class="studies-motionDesigner show"></div>
            <div id="status-motionDesigner" class="status-motionDesigner show"></div>

            <div class="choix">
                <button id="choice" class="choix1 show">Salaire</button>
                <button id="choice" class="choix2 show">Études requises</button>
                <button id="choice" class="choix3 show">Statut</button>
                <button id="choice" class="choix4">Revenir au début</button>
            </div>
        </div>
    

    <?php
        while($data=$req -> fetch()){
    ?>
    
    <script type="text/javascript">        
        $(document).ready(function () {
            $(".wage-motionDesigner").removeClass("show");
            $(".studies-motionDesigner").removeClass("show");
            $(".status-motionDesigner").removeClass("show");

            var missions = "<?php echo $data['bloc_missions'].'<br> <br>'.$data['bloc_qualities'] ;?> ";
            document.getElementById("affichage-motionDesigner").innerHTML = missions;

            var wage = "<?php echo $data['question_wage'] ;?> ";
            document.getElementById("wage-motionDesigner").innerHTML = wage;
            var studies = "<?php echo $data['question_studies'] ;?> ";
            document.getElementById("studies-motionDesigner").innerHTML = studies;
            var status = "<?php echo $data['question_status'] ;?> ";
            document.getElementById("status-motionDesigner").innerHTML = status;

                $('[class*="choix1"]').on("click", function() {
                        $(".explications-motionDesigner").removeClass("show");
                        $(".wage-motionDesigner").toggleClass("show");
                        $(".studies-motionDesigner").removeClass("show");
                        $(".status-motionDesigner").removeClass("show");
                        $(".choix1").removeClass("show");
                });

                $('[class*="choix2"]').on("click", function() {
                        $(".explications-motionDesigner").removeClass("show");
                        $(".studies-motionDesigner").toggleClass("show");
                        $(".wage-motionDesigner").removeClass("show");
                        $(".status-motionDesigner").removeClass("show");
                        $(".choix2").removeClass("show");
                });

                $('[class*="choix3"]').on("click", function() {
                        $(".explications-motionDesigner").removeClass("show");
                        $(".status-motionDesigner").toggleClass("show");
                        $(".wage-motionDesigner").removeClass("show");
                        $(".studies-motionDesigner").removeClass("show");
                        $(".choix3").removeClass("show");
                });

                $('[class*="choix4"]').on("click", function() {
                    $(".explications-motionDesigner").toggleClass("show");
                    $('[class*="choix1"]').toggleClass("show");
                    $('[class*="choix2"]').toggleClass("show");
                    $('[class*="choix3"]').toggleClass("show");
                    $(".status-motionDesigner").removeClass("show");
                    $(".wage-motionDesigner").removeClass("show");
                    $(".studies-motionDesigner").removeClass("show");
                    $('[class*="choix4"]').removeClass("show");
                });
        });

        
    </script>

    <?php
        }
        $req = null;
    ?>

    <?php
        $link = new PDO('mysql:host=localhost:3306;dbname=danypereira','Donyx','Aur3loinSul1&',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        
        $sql = "SELECT bloc_missions, bloc_qualities, job_id_explications, id_job, question_wage, question_studies, question_status FROM explications, job WHERE job_id_explications = '6' AND explications.job_id_explications = job.id_job";
    
        $req = $link -> prepare($sql);
        $req -> execute();

    ?>

        <div class="text-db3 hidden">
            <div id="affichage-UIUXDesigner" class="explications-UIUXDesigner show"></div>

            <div id="wage-UIUXDesigner" class="wage-UIUXDesigner show"></div>
            <div id="studies-UIUXDesigner" class="studies-UIUXDesigner show"></div>
            <div id="status-UIUXDesigner" class="status-UIUXDesigner show"></div>

            <div class="choix">
                <button id="choice" class="choix1 show">Salaire</button>
                <button id="choice" class="choix2 show">Études requises</button>
                <button id="choice" class="choix3 show">Statut</button>
                <button id="choice" class="choix4">Revenir au début</button>
            </div>
        </div>
    

    <?php
        while($data=$req -> fetch()){
    ?>
    
    <script type="text/javascript">        
        $(document).ready(function () {
            $(".wage-UIUXDesigner").removeClass("show");
            $(".studies-UIUXDesigner").removeClass("show");
            $(".status-UIUXDesigner").removeClass("show");

            var missions = "<?php echo $data['bloc_missions'].'<br> <br>'.$data['bloc_qualities'] ;?> ";
            document.getElementById("affichage-UIUXDesigner").innerHTML = missions;

            var wage = "<?php echo $data['question_wage'] ;?> ";
            document.getElementById("wage-UIUXDesigner").innerHTML = wage;
            var studies = "<?php echo $data['question_studies'] ;?> ";
            document.getElementById("studies-UIUXDesigner").innerHTML = studies;
            var status = "<?php echo $data['question_status'] ;?> ";
            document.getElementById("status-UIUXDesigner").innerHTML = status;

                $('[class*="choix1"]').on("click", function() {
                        $(".explications-UIUXDesigner").removeClass("show");
                        $(".wage-UIUXDesigner").toggleClass("show");
                        $(".studies-UIUXDesigner").removeClass("show");
                        $(".status-UIUXDesigner").removeClass("show");
                        $(".choix1").removeClass("show");
                });

                $('[class*="choix2"]').on("click", function() {
                        $(".explications-UIUXDesigner").removeClass("show");
                        $(".studies-UIUXDesigner").toggleClass("show");
                        $(".wage-UIUXDesigner").removeClass("show");
                        $(".status-UIUXDesigner").removeClass("show");
                        $(".choix2").removeClass("show");
                });

                $('[class*="choix3"]').on("click", function() {
                        $(".explications-UIUXDesigner").removeClass("show");
                        $(".status-UIUXDesigner").toggleClass("show");
                        $(".wage-UIUXDesigner").removeClass("show");
                        $(".studies-UIUXDesigner").removeClass("show");
                        $(".choix3").removeClass("show");
                });

                $('[class*="choix4"]').on("click", function() {
                    $(".explications-UIUXDesigner").toggleClass("show");
                    $('[class*="choix1"]').toggleClass("show");
                    $('[class*="choix2"]').toggleClass("show");
                    $('[class*="choix3"]').toggleClass("show");
                    $(".status-UIUXDesigner").removeClass("show");
                    $(".wage-UIUXDesigner").removeClass("show");
                    $(".studies-UIUXDesigner").removeClass("show");
                    $('[class*="choix4"]').removeClass("show");
                });
        });

        
    </script>

    <?php
        }
        $req = null;
    ?>

    <?php
        $link = new PDO('mysql:host=localhost:3306;dbname=danypereira','Donyx','Aur3loinSul1&',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        
        $sql = "SELECT bloc_missions, bloc_qualities, job_id_explications, id_job, question_wage, question_studies, question_status FROM explications, job WHERE job_id_explications = '8' AND explications.job_id_explications = job.id_job";
    
        $req = $link -> prepare($sql);
        $req -> execute();

    ?>

        <div class="text-db4 hidden">
            <div id="affichage-integrateurWeb" class="explications-integrateurWeb show"></div>

            <div id="wage-integrateurWeb" class="wage-integrateurWeb show"></div>
            <div id="studies-integrateurWeb" class="studies-integrateurWeb show"></div>
            <div id="status-integrateurWeb" class="status-integrateurWeb show"></div>

            <div class="choix">
                <button id="choice" class="choix1 show">Salaire</button>
                <button id="choice" class="choix2 show">Études requises</button>
                <button id="choice" class="choix3 show">Statut</button>
                <button id="choice" class="choix4">Revenir au début</button>
            </div>
        </div>
    

    <?php
        while($data=$req -> fetch()){
    ?>
    
    <script type="text/javascript">        
        $(document).ready(function () {
            $(".wage-integrateurWeb").removeClass("show");
            $(".studies-integrateurWeb").removeClass("show");
            $(".status-integrateurWeb").removeClass("show");

            var missions = "<?php echo $data['bloc_missions'].'<br> <br>'.$data['bloc_qualities'] ;?> ";
            document.getElementById("affichage-integrateurWeb").innerHTML = missions;

            var wage = "<?php echo $data['question_wage'] ;?> ";
            document.getElementById("wage-integrateurWeb").innerHTML = wage;
            var studies = "<?php echo $data['question_studies'] ;?> ";
            document.getElementById("studies-integrateurWeb").innerHTML = studies;
            var status = "<?php echo $data['question_status'] ;?> ";
            document.getElementById("status-integrateurWeb").innerHTML = status;

                $('[class*="choix1"]').on("click", function() {
                        $(".explications-integrateurWeb").removeClass("show");
                        $(".wage-integrateurWeb").toggleClass("show");
                        $(".studies-integrateurWeb").removeClass("show");
                        $(".status-integrateurWeb").removeClass("show");
                        $(".choix1").removeClass("show");
                });

                $('[class*="choix2"]').on("click", function() {
                        $(".explications-integrateurWeb").removeClass("show");
                        $(".studies-integrateurWeb").toggleClass("show");
                        $(".wage-integrateurWeb").removeClass("show");
                        $(".status-integrateurWeb").removeClass("show");
                        $(".choix2").removeClass("show");
                });

                $('[class*="choix3"]').on("click", function() {
                        $(".explications-integrateurWeb").removeClass("show");
                        $(".status-integrateurWeb").toggleClass("show");
                        $(".wage-integrateurWeb").removeClass("show");
                        $(".studies-integrateurWeb").removeClass("show");
                        $(".choix3").removeClass("show");
                });

                $('[class*="choix4"]').on("click", function() {
                    $(".explications-integrateurWeb").toggleClass("show");
                    $('[class*="choix1"]').toggleClass("show");
                    $('[class*="choix2"]').toggleClass("show");
                    $('[class*="choix3"]').toggleClass("show");
                    $(".status-integrateurWeb").removeClass("show");
                    $(".wage-integrateurWeb").removeClass("show");
                    $(".studies-integrateurWeb").removeClass("show");
                    $('[class*="choix4"]').removeClass("show");
                });
        });

        
    </script>

    <?php
        }
        $req = null;
    ?>

    <?php
        $link = new PDO('mysql:host=localhost:3306;dbname=danypereira','Donyx','Aur3loinSul1&',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        
        $sql = "SELECT bloc_missions, bloc_qualities, job_id_explications, id_job, question_wage, question_studies, question_status FROM explications, job WHERE job_id_explications = '10' AND explications.job_id_explications = job.id_job";
    
        $req = $link -> prepare($sql);
        $req -> execute();

    ?>

        <div class="text-db5 hidden">
            <div id="affichage-developpeurWeb" class="explications-developpeurWeb show"></div>

            <div id="wage-developpeurWeb" class="wage-developpeurWeb show"></div>
            <div id="studies-developpeurWeb" class="studies-developpeurWeb show"></div>
            <div id="status-developpeurWeb" class="status-developpeurWeb show"></div>

            <div class="choix">
                <button id="choice" class="choix1 show">Salaire</button>
                <button id="choice" class="choix2 show">Études requises</button>
                <button id="choice" class="choix3 show">Statut</button>
                <button id="choice" class="choix4">Revenir au début</button>
            </div>
        </div>
    

    <?php
        while($data=$req -> fetch()){
    ?>
    
    <script type="text/javascript">        
        $(document).ready(function () {
            $(".wage-developpeurWeb").removeClass("show");
            $(".studies-developpeurWeb").removeClass("show");
            $(".status-developpeurWeb").removeClass("show");

            var missions = "<?php echo $data['bloc_missions'].'<br> <br>'.$data['bloc_qualities'] ;?> ";
            document.getElementById("affichage-developpeurWeb").innerHTML = missions;

            var wage = "<?php echo $data['question_wage'] ;?> ";
            document.getElementById("wage-developpeurWeb").innerHTML = wage;
            var studies = "<?php echo $data['question_studies'] ;?> ";
            document.getElementById("studies-developpeurWeb").innerHTML = studies;
            var status = "<?php echo $data['question_status'] ;?> ";
            document.getElementById("status-developpeurWeb").innerHTML = status;

                $('[class*="choix1"]').on("click", function() {
                        $(".explications-developpeurWeb").removeClass("show");
                        $(".wage-developpeurWeb").toggleClass("show");
                        $(".studies-developpeurWeb").removeClass("show");
                        $(".status-developpeurWeb").removeClass("show");
                        $(".choix1").removeClass("show");
                });

                $('[class*="choix2"]').on("click", function() {
                        $(".explications-developpeurWeb").removeClass("show");
                        $(".studies-developpeurWeb").toggleClass("show");
                        $(".wage-developpeurWeb").removeClass("show");
                        $(".status-developpeurWeb").removeClass("show");
                        $(".choix2").removeClass("show");
                });

                $('[class*="choix3"]').on("click", function() {
                        $(".explications-developpeurWeb").removeClass("show");
                        $(".status-developpeurWeb").toggleClass("show");
                        $(".wage-developpeurWeb").removeClass("show");
                        $(".studies-developpeurWeb").removeClass("show");
                        $(".choix3").removeClass("show");
                });

                $('[class*="choix4"]').on("click", function() {
                    $(".explications-developpeurWeb").toggleClass("show");
                    $('[class*="choix1"]').toggleClass("show");
                    $('[class*="choix2"]').toggleClass("show");
                    $('[class*="choix3"]').toggleClass("show");
                    $(".status-developpeurWeb").removeClass("show");
                    $(".wage-developpeurWeb").removeClass("show");
                    $(".studies-developpeurWeb").removeClass("show");
                    $('[class*="choix4"]').removeClass("show");
                });
        });

        
    </script>

    <?php
        }
        $req = null;
    ?>
    
    <?php
        $link = new PDO('mysql:host=localhost:3306;dbname=danypereira','Donyx','Aur3loinSul1&',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        
        $sql = "SELECT bloc_missions, bloc_qualities, job_id_explications, id_job, question_wage, question_studies, question_status FROM explications, job WHERE job_id_explications = '12' AND explications.job_id_explications = job.id_job";
    
        $req = $link -> prepare($sql);
        $req -> execute();

    ?>

        <div class="text-db6 hidden">
            <div id="affichage-webMaster" class="explications-webMaster show"></div>

            <div id="wage-webMaster" class="wage-webMaster show"></div>
            <div id="studies-webMaster" class="studies-webMaster show"></div>
            <div id="status-webMaster" class="status-webMaster show"></div>

            <div class="choix">
                <button id="choice" class="choix1 show">Salaire</button>
                <button id="choice" class="choix2 show">Études requises</button>
                <button id="choice" class="choix3 show">Statut</button>
                <button id="choice" class="choix4">Revenir au début</button>
            </div>
        </div>
    

    <?php
        while($data=$req -> fetch()){
    ?>
    
    <script type="text/javascript">        
        $(document).ready(function () {
            $(".wage-webMaster").removeClass("show");
            $(".studies-webMaster").removeClass("show");
            $(".status-webMaster").removeClass("show");

            var missions = "<?php echo $data['bloc_missions'].'<br> <br>'.$data['bloc_qualities'] ;?> ";
            document.getElementById("affichage-webMaster").innerHTML = missions;

            var wage = "<?php echo $data['question_wage'] ;?> ";
            document.getElementById("wage-webMaster").innerHTML = wage;
            var studies = "<?php echo $data['question_studies'] ;?> ";
            document.getElementById("studies-webMaster").innerHTML = studies;
            var status = "<?php echo $data['question_status'] ;?> ";
            document.getElementById("status-webMaster").innerHTML = status;

                $('[class*="choix1"]').on("click", function() {
                        $(".explications-webMaster").removeClass("show");
                        $(".wage-webMaster").toggleClass("show");
                        $(".studies-webMaster").removeClass("show");
                        $(".status-webMaster").removeClass("show");
                        $(".choix1").removeClass("show");
                });

                $('[class*="choix2"]').on("click", function() {
                        $(".explications-webMaster").removeClass("show");
                        $(".studies-webMaster").toggleClass("show");
                        $(".wage-webMaster").removeClass("show");
                        $(".status-webMaster").removeClass("show");
                        $(".choix2").removeClass("show");
                });

                $('[class*="choix3"]').on("click", function() {
                        $(".explications-webMaster").removeClass("show");
                        $(".status-webMaster").toggleClass("show");
                        $(".wage-webMaster").removeClass("show");
                        $(".studies-webMaster").removeClass("show");
                        $(".choix3").removeClass("show");
                });

                $('[class*="choix4"]').on("click", function() {
                    $(".explications-webMaster").toggleClass("show");
                    $('[class*="choix1"]').toggleClass("show");
                    $('[class*="choix2"]').toggleClass("show");
                    $('[class*="choix3"]').toggleClass("show");
                    $(".status-webMaster").removeClass("show");
                    $(".wage-webMaster").removeClass("show");
                    $(".studies-webMaster").removeClass("show");
                    $('[class*="choix4"]').removeClass("show");
                });
        });

        
    </script>

    <?php
        }
        $req = null;
    ?>

<?php
        $link = new PDO('mysql:host=localhost:3306;dbname=danypereira','Donyx','Aur3loinSul1&',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        
        $sql = "SELECT bloc_missions, bloc_qualities, job_id_explications, id_job, question_wage, question_studies, question_status FROM explications, job WHERE job_id_explications = '14' AND explications.job_id_explications = job.id_job";
    
        $req = $link -> prepare($sql);
        $req -> execute();

    ?>

        <div class="text-db7 hidden">
            <div id="affichage-architectReseau" class="explications-architectReseau show"></div>

            <div id="wage-architectReseau" class="wage-architectReseau show"></div>
            <div id="studies-architectReseau" class="studies-architectReseau show"></div>
            <div id="status-architectReseau" class="status-architectReseau show"></div>

            <div class="choix">
                <button id="choice" class="choix1 show">Salaire</button>
                <button id="choice" class="choix2 show">Études requises</button>
                <button id="choice" class="choix3 show">Statut</button>
                <button id="choice" class="choix4">Revenir au début</button>
            </div>
        </div>
    
    <?php
        while($data=$req -> fetch()){
    ?>
    
    <script type="text/javascript">        
        $(document).ready(function () {
            $(".wage-architectReseau").removeClass("show");
            $(".studies-architectReseau").removeClass("show");
            $(".status-architectReseau").removeClass("show");

            var missions = "<?php echo $data['bloc_missions'].'<br> <br>'.$data['bloc_qualities'] ;?> ";
            document.getElementById("affichage-architectReseau").innerHTML = missions;

            var wage = "<?php echo $data['question_wage'] ;?> ";
            document.getElementById("wage-architectReseau").innerHTML = wage;
            var studies = "<?php echo $data['question_studies'] ;?> ";
            document.getElementById("studies-architectReseau").innerHTML = studies;
            var status = "<?php echo $data['question_status'] ;?> ";
            document.getElementById("status-architectReseau").innerHTML = status;

                $('[class*="choix1"]').on("click", function() {
                        $(".explications-architectReseau").removeClass("show");
                        $(".wage-architectReseau").toggleClass("show");
                        $(".studies-architectReseau").removeClass("show");
                        $(".status-architectReseau").removeClass("show");
                        $(".choix1").removeClass("show");
                });

                $('[class*="choix2"]').on("click", function() {
                        $(".explications-architectReseau").removeClass("show");
                        $(".studies-architectReseau").toggleClass("show");
                        $(".wage-architectReseau").removeClass("show");
                        $(".status-architectReseau").removeClass("show");
                        $(".choix2").removeClass("show");
                });

                $('[class*="choix3"]').on("click", function() {
                        $(".explications-architectReseau").removeClass("show");
                        $(".status-architectReseau").toggleClass("show");
                        $(".wage-architectReseau").removeClass("show");
                        $(".studies-architectReseau").removeClass("show");
                        $(".choix3").removeClass("show");
                });

                $('[class*="choix4"]').on("click", function() {
                    $(".explications-architectReseau").toggleClass("show");
                    $('[class*="choix1"]').toggleClass("show");
                    $('[class*="choix2"]').toggleClass("show");
                    $('[class*="choix3"]').toggleClass("show");
                    $(".status-architectReseau").removeClass("show");
                    $(".wage-architectReseau").removeClass("show");
                    $(".studies-architectReseau").removeClass("show");
                    $('[class*="choix4"]').removeClass("show");
                });
        });

        
    </script>

    <?php
        }
        $req = null;
    ?>

<?php
        $link = new PDO('mysql:host=localhost:3306;dbname=danypereira','Donyx','Aur3loinSul1&',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        
        $sql = "SELECT bloc_missions, bloc_qualities, job_id_explications, id_job, question_wage, question_studies, question_status FROM explications, job WHERE job_id_explications = '16' AND explications.job_id_explications = job.id_job";
    
        $req = $link -> prepare($sql);
        $req -> execute();

    ?>

        <div class="text-db8 hidden">
            <div id="affichage-chefProjet" class="explications-chefProjet show"></div>

            <div id="wage-chefProjet" class="wage-chefProjet show"></div>
            <div id="studies-chefProjet" class="studies-chefProjet show"></div>
            <div id="status-chefProjet" class="status-chefProjet show"></div>

            <div class="choix">
                <button id="choice" class="choix1 show">Salaire</button>
                <button id="choice" class="choix2 show">Études requises</button>
                <button id="choice" class="choix3 show">Statut</button>
                <button id="choice" class="choix4">Revenir au début</button>
            </div>
        </div>
    

    <?php
        while($data=$req -> fetch()){
    ?>
    
    <script type="text/javascript">        
        $(document).ready(function () {
            $(".wage-chefProjet").removeClass("show");
            $(".studies-chefProjet").removeClass("show");
            $(".status-chefProjet").removeClass("show");

            var missions = "<?php echo $data['bloc_missions'].'<br> <br>'.$data['bloc_qualities'] ;?> ";
            document.getElementById("affichage-chefProjet").innerHTML = missions;

            var wage = "<?php echo $data['question_wage'] ;?> ";
            document.getElementById("wage-chefProjet").innerHTML = wage;
            var studies = "<?php echo $data['question_studies'] ;?> ";
            document.getElementById("studies-chefProjet").innerHTML = studies;
            var status = "<?php echo $data['question_status'] ;?> ";
            document.getElementById("status-chefProjet").innerHTML = status;

                $('[class*="choix1"]').on("click", function() {
                        $(".explications-chefProjet").removeClass("show");
                        $(".wage-chefProjet").toggleClass("show");
                        $(".studies-chefProjet").removeClass("show");
                        $(".status-chefProjet").removeClass("show");
                        $(".choix1").removeClass("show");
                });

                $('[class*="choix2"]').on("click", function() {
                        $(".explications-chefProjet").removeClass("show");
                        $(".studies-chefProjet").toggleClass("show");
                        $(".wage-chefProjet").removeClass("show");
                        $(".status-chefProjet").removeClass("show");
                        $(".choix2").removeClass("show");
                });

                $('[class*="choix3"]').on("click", function() {
                        $(".explications-chefProjet").removeClass("show");
                        $(".status-chefProjet").toggleClass("show");
                        $(".wage-chefProjet").removeClass("show");
                        $(".studies-chefProjet").removeClass("show");
                        $(".choix3").removeClass("show");
                });

                $('[class*="choix4"]').on("click", function() {
                    $(".explications-chefProjet").toggleClass("show");
                    $('[class*="choix1"]').toggleClass("show");
                    $('[class*="choix2"]').toggleClass("show");
                    $('[class*="choix3"]').toggleClass("show");
                    $(".status-chefProjet").removeClass("show");
                    $(".wage-chefProjet").removeClass("show");
                    $(".studies-chefProjet").removeClass("show");
                    $('[class*="choix4"]').removeClass("show");
                });
        });

        
    </script>

    <?php
        }
        $req = null;
    ?>
    
    <?php
        $link = new PDO('mysql:host=localhost:3306;dbname=danypereira','Donyx','Aur3loinSul1&',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        
        $sql = "SELECT bloc_missions, bloc_qualities, job_id_explications, id_job, question_wage, question_studies, question_status FROM explications, job WHERE job_id_explications = '18' AND explications.job_id_explications = job.id_job";
    
        $req = $link -> prepare($sql);
        $req -> execute();

    ?>

        <div class="text-db9 hidden">
            <div id="affichage-communityManager" class="explications-communityManager show"></div>

            <div id="wage-communityManager" class="wage-communityManager show"></div>
            <div id="studies-communityManager" class="studies-communityManager show"></div>
            <div id="status-communityManager" class="status-communityManager show"></div>

            <div class="choix">
                <button id="choice" class="choix1 show">Salaire</button>
                <button id="choice" class="choix2 show">Études requises</button>
                <button id="choice" class="choix3 show">Statut</button>
                <button id="choice" class="choix4">Revenir au début</button>
            </div>
        </div>
    

    <?php
        while($data=$req -> fetch()){
    ?>
    
    <script type="text/javascript">        
        $(document).ready(function () {
            $(".wage-communityManager").removeClass("show");
            $(".studies-communityManager").removeClass("show");
            $(".status-communityManager").removeClass("show");

            var missions = "<?php echo $data['bloc_missions'].'<br> <br>'.$data['bloc_qualities'] ;?> ";
            document.getElementById("affichage-communityManager").innerHTML = missions;

            var wage = "<?php echo $data['question_wage'] ;?> ";
            document.getElementById("wage-communityManager").innerHTML = wage;
            var studies = "<?php echo $data['question_studies'] ;?> ";
            document.getElementById("studies-communityManager").innerHTML = studies;
            var status = "<?php echo $data['question_status'] ;?> ";
            document.getElementById("status-communityManager").innerHTML = status;

                $('[class*="choix1"]').on("click", function() {
                        $(".explications-communityManager").removeClass("show");
                        $(".wage-communityManager").toggleClass("show");
                        $(".studies-communityManager").removeClass("show");
                        $(".status-communityManager").removeClass("show");
                        $(".choix1").removeClass("show");
                });

                $('[class*="choix2"]').on("click", function() {
                        $(".explications-communityManager").removeClass("show");
                        $(".studies-communityManager").toggleClass("show");
                        $(".wage-communityManager").removeClass("show");
                        $(".status-communityManager").removeClass("show");
                        $(".choix2").removeClass("show");
                });

                $('[class*="choix3"]').on("click", function() {
                        $(".explications-communityManager").removeClass("show");
                        $(".status-communityManager").toggleClass("show");
                        $(".wage-communityManager").removeClass("show");
                        $(".studies-communityManager").removeClass("show");
                        $(".choix3").removeClass("show");
                });

                $('[class*="choix4"]').on("click", function() {
                    $(".explications-communityManager").toggleClass("show");
                    $('[class*="choix1"]').toggleClass("show");
                    $('[class*="choix2"]').toggleClass("show");
                    $('[class*="choix3"]').toggleClass("show");
                    $(".status-communityManager").removeClass("show");
                    $(".wage-communityManager").removeClass("show");
                    $(".studies-communityManager").removeClass("show");
                    $('[class*="choix4"]').removeClass("show");
                });
        });

        
    </script>

    <?php
        }
        $req = null;
    ?>

<?php
        $link = new PDO('mysql:host=localhost:3306;dbname=danypereira','Donyx','Aur3loinSul1&',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        
        $sql = "SELECT bloc_missions, bloc_qualities, job_id_explications, id_job, question_wage, question_studies, question_status FROM explications, job WHERE job_id_explications = '20' AND explications.job_id_explications = job.id_job";
    
        $req = $link -> prepare($sql);
        $req -> execute();

    ?>

        <div class="text-db10 hidden">
            <div id="affichage-webMarketeur" class="explications-webMarketeur show"></div>

            <div id="wage-webMarketeur" class="wage-webMarketeur show"></div>
            <div id="studies-webMarketeur" class="studies-webMarketeur show"></div>
            <div id="status-webMarketeur" class="status-webMarketeur show"></div>

            <div class="choix">
                <button id="choice" class="choix1 show">Salaire</button>
                <button id="choice" class="choix2 show">Études requises</button>
                <button id="choice" class="choix3 show">Statut</button>
                <button id="choice" class="choix4">Revenir au début</button>
            </div>
        </div>
    

    <?php
        while($data=$req -> fetch()){
    ?>
    
    <script type="text/javascript">        
        $(document).ready(function () {
            $(".wage-webMarketeur").removeClass("show");
            $(".studies-webMarketeur").removeClass("show");
            $(".status-webMarketeur").removeClass("show");

            var missions = "<?php echo $data['bloc_missions'].'<br> <br>'.$data['bloc_qualities'] ;?> ";
            document.getElementById("affichage-webMarketeur").innerHTML = missions;

            var wage = "<?php echo $data['question_wage'] ;?> ";
            document.getElementById("wage-webMarketeur").innerHTML = wage;
            var studies = "<?php echo $data['question_studies'] ;?> ";
            document.getElementById("studies-webMarketeur").innerHTML = studies;
            var status = "<?php echo $data['question_status'] ;?> ";
            document.getElementById("status-webMarketeur").innerHTML = status;

                $('[class*="choix1"]').on("click", function() {
                        $(".explications-webMarketeur").removeClass("show");
                        $(".wage-webMarketeur").toggleClass("show");
                        $(".studies-webMarketeur").removeClass("show");
                        $(".status-webMarketeur").removeClass("show");
                        $(".choix1").removeClass("show");
                });

                $('[class*="choix2"]').on("click", function() {
                        $(".explications-webMarketeur").removeClass("show");
                        $(".studies-webMarketeur").toggleClass("show");
                        $(".wage-webMarketeur").removeClass("show");
                        $(".status-webMarketeur").removeClass("show");
                        $(".choix2").removeClass("show");
                });

                $('[class*="choix3"]').on("click", function() {
                        $(".explications-webMarketeur").removeClass("show");
                        $(".status-webMarketeur").toggleClass("show");
                        $(".wage-webMarketeur").removeClass("show");
                        $(".studies-webMarketeur").removeClass("show");
                        $(".choix3").removeClass("show");
                });

                $('[class*="choix4"]').on("click", function() {
                    $(".explications-webMarketeur").toggleClass("show");
                    $('[class*="choix1"]').toggleClass("show");
                    $('[class*="choix2"]').toggleClass("show");
                    $('[class*="choix3"]').toggleClass("show");
                    $(".status-webMarketeur").removeClass("show");
                    $(".wage-webMarketeur").removeClass("show");
                    $(".studies-webMarketeur").removeClass("show");
                    $('[class*="choix4"]').removeClass("show");
                });
        });

        
    </script>

    <?php
        }
        $req = null;
    ?>

<?php
        $link = new PDO('mysql:host=localhost:3306;dbname=danypereira','Donyx','Aur3loinSul1&',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        
        $sql = "SELECT bloc_missions, bloc_qualities, job_id_explications, id_job, question_wage, question_studies, question_status FROM explications, job WHERE job_id_explications = '22' AND explications.job_id_explications = job.id_job";
    
        $req = $link -> prepare($sql);
        $req -> execute();

    ?>

        <div class="text-db11 hidden">
            <div id="affichage-realisateurMultimedia" class="explications-realisateurMultimedia show"></div>

            <div id="wage-realisateurMultimedia" class="wage-realisateurMultimedia show"></div>
            <div id="studies-realisateurMultimedia" class="studies-realisateurMultimedia show"></div>
            <div id="status-realisateurMultimedia" class="status-realisateurMultimedia show"></div>

            <div class="choix">
                <button id="choice" class="choix1 show">Salaire</button>
                <button id="choice" class="choix2 show">Études requises</button>
                <button id="choice" class="choix3 show">Statut</button>
                <button id="choice" class="choix4">Revenir au début</button>
            </div>
        </div>
    

    <?php
        while($data=$req -> fetch()){
    ?>
    
    <script type="text/javascript">        
        $(document).ready(function () {
            $(".wage-realisateurMultimedia").removeClass("show");
            $(".studies-realisateurMultimedia").removeClass("show");
            $(".status-realisateurMultimedia").removeClass("show");

            var missions = "<?php echo $data['bloc_missions'].'<br> <br>'.$data['bloc_qualities'] ;?> ";
            document.getElementById("affichage-realisateurMultimedia").innerHTML = missions;

            var wage = "<?php echo $data['question_wage'] ;?> ";
            document.getElementById("wage-realisateurMultimedia").innerHTML = wage;
            var studies = "<?php echo $data['question_studies'] ;?> ";
            document.getElementById("studies-realisateurMultimedia").innerHTML = studies;
            var status = "<?php echo $data['question_status'] ;?> ";
            document.getElementById("status-realisateurMultimedia").innerHTML = status;

                $('[class*="choix1"]').on("click", function() {
                        $(".explications-realisateurMultimedia").removeClass("show");
                        $(".wage-realisateurMultimedia").toggleClass("show");
                        $(".studies-realisateurMultimedia").removeClass("show");
                        $(".status-realisateurMultimedia").removeClass("show");
                        $(".choix1").removeClass("show");
                });

                $('[class*="choix2"]').on("click", function() {
                        $(".explications-realisateurMultimedia").removeClass("show");
                        $(".studies-realisateurMultimedia").toggleClass("show");
                        $(".wage-realisateurMultimedia").removeClass("show");
                        $(".status-realisateurMultimedia").removeClass("show");
                        $(".choix2").removeClass("show");
                });

                $('[class*="choix3"]').on("click", function() {
                        $(".explications-realisateurMultimedia").removeClass("show");
                        $(".status-realisateurMultimedia").toggleClass("show");
                        $(".wage-realisateurMultimedia").removeClass("show");
                        $(".studies-realisateurMultimedia").removeClass("show");
                        $(".choix3").removeClass("show");
                });

                $('[class*="choix4"]').on("click", function() {
                    $(".explications-realisateurMultimedia").toggleClass("show");
                    $('[class*="choix1"]').toggleClass("show");
                    $('[class*="choix2"]').toggleClass("show");
                    $('[class*="choix3"]').toggleClass("show");
                    $(".status-realisateurMultimedia").removeClass("show");
                    $(".wage-realisateurMultimedia").removeClass("show");
                    $(".studies-realisateurMultimedia").removeClass("show");
                    $('[class*="choix4"]').removeClass("show");
                });
        });

        
    </script>

    <?php
        }
        $req = null;
    ?>

<?php
        $link = new PDO('mysql:host=localhost:3306;dbname=danypereira','Donyx','Aur3loinSul1&',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        
        $sql = "SELECT bloc_missions, bloc_qualities, job_id_explications, id_job, question_wage, question_studies, question_status FROM explications, job WHERE job_id_explications = '24' AND explications.job_id_explications = job.id_job";
    
        $req = $link -> prepare($sql);
        $req -> execute();

    ?>

        <div class="text-db12 hidden">
            <div id="affichage-videaste" class="explications-realisateurMultimedia show"></div>

            <div id="wage-videaste" class="wage-videaste show"></div>
            <div id="studies-videaste" class="studies-videaste show"></div>
            <div id="status-videaste" class="status-videaste show"></div>

            <div class="choix">
                <button id="choice" class="choix1 show">Salaire</button>
                <button id="choice" class="choix2 show">Études requises</button>
                <button id="choice" class="choix3 show">Statut</button>
                <button id="choice" class="choix4">Revenir au début</button>
            </div>
        </div>
    

    <?php
        while($data=$req -> fetch()){
    ?>
    
    <script type="text/javascript">        
        $(document).ready(function () {
            $(".wage-videaste").removeClass("show");
            $(".studies-videaste").removeClass("show");
            $(".status-videaste").removeClass("show");

            var missions = "<?php echo $data['bloc_missions'].'<br> <br>'.$data['bloc_qualities'] ;?> ";
            document.getElementById("affichage-videaste").innerHTML = missions;

            var wage = "<?php echo $data['question_wage'] ;?> ";
            document.getElementById("wage-videaste").innerHTML = wage;
            var studies = "<?php echo $data['question_studies'] ;?> ";
            document.getElementById("studies-videaste").innerHTML = studies;
            var status = "<?php echo $data['question_status'] ;?> ";
            document.getElementById("status-videaste").innerHTML = status;

                $('[class*="choix1"]').on("click", function() {
                        $(".explications-videaste").removeClass("show");
                        $(".wage-videaste").toggleClass("show");
                        $(".studies-videaste").removeClass("show");
                        $(".status-videaste").removeClass("show");
                        $(".choix1").removeClass("show");
                });

                $('[class*="choix2"]').on("click", function() {
                        $(".explications-videaste").removeClass("show");
                        $(".studies-videaste").toggleClass("show");
                        $(".wage-videaste").removeClass("show");
                        $(".status-videaste").removeClass("show");
                        $(".choix2").removeClass("show");
                });

                $('[class*="choix3"]').on("click", function() {
                        $(".explications-videaste").removeClass("show");
                        $(".status-videaste").toggleClass("show");
                        $(".wage-videaste").removeClass("show");
                        $(".studies-videaste").removeClass("show");
                        $(".choix3").removeClass("show");
                });

                $('[class*="choix4"]').on("click", function() {
                    $(".explications-videaste").toggleClass("show");
                    $('[class*="choix1"]').toggleClass("show");
                    $('[class*="choix2"]').toggleClass("show");
                    $('[class*="choix3"]').toggleClass("show");
                    $(".status-videaste").removeClass("show");
                    $(".wage-videaste").removeClass("show");
                    $(".studies-videaste").removeClass("show");
                    $('[class*="choix4"]').removeClass("show");
                });
        });      
    </script>

    <?php
        }
        $req = null;
    ?>
</script>
    <script src="lib/phaser3.js"></script>
    <script type="text/javascript">

window.onload = function() {
var config = {
    type: Phaser.AUTO,
    width: 31 * 32,
    height: 20 * 32,
    physics: {
        default: 'arcade',
        arcade: {
            gravity: { y: 900 },
            debug: false
        }
    },
    scene: [selectWorld, niveau1, niveau2, niveau3, niveau4, niveau5, niveau6, niveau7, niveau8, niveau9, niveau10, niveau11, niveau12, niveau13, maison1, maison2, maison3, maison4, maison5, maison6, maison7, maison8, maison9, maison10, maison11, maison12]
};
var game = new Phaser.Game(config);
game.scene.start("selectWorld");
}
var player;
var goingRight = false;
var through;
var platforms;
var spikes;
var collide;
var cursors;
var jumpButton;
var playerX = 300;
var playerY = 400;
var door1;
var door2;
var door3;
var door4;
var pnj;
var name;
var travers = false;
var sexe = 'H';
if (sexe == 'H') {
    var link = 'assets/dude.png';
} else if (sexe == 'F') {
    var link = 'assets/dudes.png';
}

class selectWorld extends Phaser.Scene{

    constructor(){
        super({key: 'selectWorld' });
    }

    preload () {
        this.load.image('background', 'assets/background1-8.png');
        this.load.image('game-tiles', 'assets/planche.png');
        this.load.image('game-deco', 'assets/layerUp.png');
        this.load.spritesheet('perso', link, {frameWidth: 32, frameHeight: 60 });
        this.load.image('coll', 'assets/collision.png');
        this.load.image('wall', 'assets/walls.png');
        this.load.image('bloc', 'assets/blocs.png');
        this.load.image('door', 'assets/doors.png');
        this.load.image('porte', 'assets/portehautes.png');
        this.load.image('pnj1', 'assets/pnj1.png');
        this.load.image('pnj2', 'assets/pnj2.png');
        this.load.image('pnj3', 'assets/pnj3.png');
        this.load.image('pnj4', 'assets/pnj4.png');
        this.load.image('pnj5', 'assets/pnj5.png');
        this.load.image('pnj6', 'assets/pnj6.png');
        this.load.image('pnj7', 'assets/pnj7.png');
        this.load.image('pnj8', 'assets/pnj8.png');
        this.load.image('pnj9', 'assets/pnj9.png');
        this.load.image('pnj10', 'assets/pnj10.png');
        this.load.image('pnj11', 'assets/pnj11.png');
        this.load.image('pnj12', 'assets/pnj12.png');
        this.load.image('pnjBackground', 'assets/fond-maison.png')
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();
        
        //map
        this.add.image(496, 320, 'background')
        var level = [
            [20,20,20,20,20,20,20,20,20,20, 4, 5, 6, 7, 4, 5, 2, 3,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20, 4, 6, 4, 1, 6,19,19,55,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20, 4, 2,19, 4, 4,13, 6, 7,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,16, 6, 4, 5, 6, 7, 3,20,20,20,20,20,20,20,20,20,20,20],
            [25,26,27,20,20,20,20,20,20,20,20,20,20, 4, 1, 6, 3, 0, 2,11,20,20,20,20,20,20,20,20,25,26,27],
            [28,24,36,20,20,20,20,20,20,20,20,20,20, 3,19, 0,18,16,18,11,20,20,20,20,20,20,20,20,28,24,36],
            [33,32,35,20,20,20,20,20,20,20,20,20,20, 8, 6,19, 4,13, 6,19,20,20,20,20,20,20,20,20,33,32,35],
            [ 4,13,13,13, 6,20,20,20,20,20,20,20,20,19, 4, 6, 4, 5, 5, 6,20,20,20,20,20,20, 6,13,13,13, 4],
            [ 4, 1, 6, 4, 6,20,20,20,20,20,20, 4,13,12, 5, 6, 4,13, 6,7,20,20,20,20,20,20, 6, 4, 6, 1, 4],
            [ 3,19, 0, 2,20,20,20,20,20,20,20, 4, 6, 3, 7, 0, 5, 3, 4, 2,20,20,20,20,20,20,20, 3, 0,19, 3],
            [19, 7,16,18,20,20,20,20,20,20,20, 4, 6,19, 4,18, 4, 9, 6,19,20,20,20,20,20,20,20,19,16, 7,19],
            [ 4, 6, 2,20,20,20,20,20,20,20,20, 4, 5, 6, 4, 6, 7,19, 3, 3,20,20,20,20,20,20,20,20, 2, 4, 6],
            [ 0, 6,19,20,20,20,20,20,20,20,20,25,26,27, 7, 4, 5, 6,19,11,20,20,20,20,20,20,20,20,19, 6, 0],
            [11,7,20,20,20,20,20,20,20,20,20,28,24,36, 3, 3, 4,13, 6,11,20,20,20,20,20,20,20,20,20, 7,11],
            [19,20,20,20,20,20,20,20,20,20,20,33,32,35,19,16, 6, 4, 6,19,20,20,20,20,20,20,20,20,20,20,19],
            [20,20,20,20,20,20,7,13,13, 6, 4,13, 2, 4,13,13, 6, 4,13, 6, 4, 6, 4,13, 6,20,20,20,20,20,20],
            [20,20,20,20,20,20,20, 4, 5, 2, 0, 6,19, 0, 5, 6, 0, 1, 6, 3, 3, 3, 0, 6,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20, 7,11,11, 9, 7,11, 0, 2, 8,10, 7,11,19,11,19,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,19,16, 6,17,19,16,18,16,17, 6,16, 5,18,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20]
        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,30,31,31,31,30,28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,14,14,14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0,39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,14,14,14, 0, 0, 0, 0, 0, 0, 0, 0,39, 0, 0, 0],
            [ 8,14,14,14,13,27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,27,10,14,14,14,14],
            [ 0, 0, 0, 0, 0, 0,27,27,27,27,29,30,31,31,31,30,10,14,14, 9,28,27,27,27,27, 0, 0, 0, 0, 0, 0],
            [ 0, 0,14,14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,14,14, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,14,14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 8, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,14,14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 8],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0,31,28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,14,14,14, 0, 0, 0, 0, 0, 0, 0, 0, 0,31,31, 0],
            [ 0, 0, 0,27,27, 0, 0, 0, 0, 0,39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,27,27, 0, 0, 0],
            [ 0, 0, 0, 0, 0,29,12,14,14,14,14,14,14,14,14,14,14,14,14,14,14,14,14,14,11,28, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1],
            [ 4, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 5],
            [ 4, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 1, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3]
        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite(48, 193, 'door')
        door2 = this.add.sprite(944, 193, 'door')
        door3 = this.add.sprite((13+0.5)*32, -31, 'porte')
        door4 = this.add.sprite((12+0.5)*32, 14*32, 'door')

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        this.anims.create({
            key: 'left',
            frames: this.anims.generateFrameNumbers('perso', { start: 1, end: 4 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({
            key: 'turnleft',
            frames: [ { key: 'perso', frame: 5 } ],
            frameRate: 20
        });
        this.anims.create({
            key: 'turnright',
            frames: [ { key: 'perso', frame: 6 } ],
            frameRate: 20
        });
        this.anims.create({
            key: 'jumpleft',
            frames: [ { key: 'perso', frame: 0 } ],
            frameRate: 20
        });
        this.anims.create({
            key: 'jumpright',
            frames: [ { key: 'perso', frame: 11 } ],
            frameRate: 20
        });
        this.anims.create({
            key: 'right',
            frames: this.anims.generateFrameNumbers('perso', { start: 8, end: 10 }),
            frameRate: 10,
            repeat: -1
        });
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }

        if (checkOverlap(player, door3)) {
            this.scene.start("niveau1");
            travers = false;
            playerX = player.x
            playerY = 550
        } 
        if (cursors.up.isDown) {
            if (checkOverlap(player, door1)) {
                this.scene.start("niveau5");
                travers = false;
                playerX = 112
                playerY = 32
            }
            if (checkOverlap(player, door2)) {
                travers = false;
                this.scene.start("niveau7");
                travers = false;
                playerX = 1*32;
                playerY = 18*32;
            }
            if (checkOverlap(player, door4)) {
                travers = false;
                this.scene.start("niveau10");
                travers = false;
                playerX = 12*32;
                playerY = 16*32;
            }
        }
        
    }
}

class niveau1 extends Phaser.Scene{
    constructor(){
         super({
            key: 'niveau1'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(496, 320, 'background')
        var level = [
            [-1,-1,-1,-1,-1,-1,-1,-1,60,62,4,5,5,5,5,6,0,2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,60,61,62,0,6,3,4,2,4,17,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,11,4,17,6,11,3,4,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,16,6,4,6,19,19,7,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,0,5,6,3,4,6,4,10,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,4,2,16,2,7,3,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,6,19,7,19,4,10,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,25,26,27],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3,0,2,4,5,6,19,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,28,24,36],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,8,10,4,6,4,1,2,4,6,-1,-1,-1,-1,-1,-1,-1,-1,33,32,35],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3,16,18,3,7,3,16,18,4,5,5,6,-1,-1,-1,-1,20,4,5,5,6],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,16,2,0,18,4,17,6,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,2,3],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3,19,19,7,4,5,2,11,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,11],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,4,6,0,2,3,19,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19],
            [-1,-1,-1,-1,-1,-1,-1,-1,4,6,4,2,3,16,18,11,4,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,60,61,58,59,7,19,19,3,3,19,3,7,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,60,61,62,75,75,4,6,4,18,11,4,17,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,0,2,7,4,18,0,6,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,10,4,6,4,18,4,10,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,16,18,4,5,5,6,7,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [48,48,48,48,48,48,48,48,48,48,4,5,5,5,5,5,5,6,48,48,48,48,48,48,48,48,48,48,48,48,48],

        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,8,14,16,11,12,13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0,20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,8,9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,41, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,30,30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,41, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,30,30, 0,33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,10,9, 0, 0, 0,8,9,24,25,26, 0, 0,39,24,25,26, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,13,12,16,11,27,27,27,27,27,9,8,16,13],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,33, 0, 0, 0,40, 0, 0, 0, 0, 0, 0, 0,27,27, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,30,30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,27,27, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0,10,13, 0, 0, 0, 0, 0, 0,11,10, 0, 0,27,27,27, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0,34, 0, 0, 0, 0, 0, 0, 0, 0,41, 0,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0,29,31, 0, 0, 0, 0,30,30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,13,12, 0,20, 0,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,8,17,17,17,17,17,17,9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],

        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0 ,0 , 1, 1, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0,0 ,0 ,0 , 1, 1, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0,34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 1, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3]
        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+1)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite((13+0.5)*32, -31, 'porte')
        door2 = this.add.sprite(944, 256, 'door')

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }
        if (checkOverlap(player, door1)) {
            this.scene.start("niveau2");
            travers = false;
            playerX = player.x;
            playerY = 17*32;
        }
        if (cursors.up.isDown) {
            if (checkOverlap(player, door2)) {
                this.scene.start("maison1");
                travers = false;
                playerX = 250;
                playerY = 272;
            }
        }
    }
}

class niveau2 extends Phaser.Scene{
    constructor(){
         super({
            key: 'niveau2'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(496, 320, 'background')
        var level = [
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,6],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,6,-1,-1,-1,-1,-1,4,6,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,7,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,0,2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,59,60,61,61,62,-1,-1,-1,16,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [76,56,62,75,60,61,62,4,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [76,75,56,61,61,62,59,60,58,-1,-1,-1,-1,-1,-1,-1,0,6,4,2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [76,76,75,25,26,27,67,59,75,-1,-1,-1,-1,-1,-1,3,19,14,14,19,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [4,6,59,28,24,36,75,72,62,-1,-1,-1,-1,-1,-1,19,3,14,14,3,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [63,59,67,33,32,35,60,61,62,-1,-1,-1,-1,-1,-1,-1,16,6,4,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [60,74,75,4,5,5,5,5,6,-1,-1,56,62,60,58,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,6],
            [56,62,-1,-1,-1,-1,-1,-1,-1,-1,-1,75,60,62,67,59,-1,-1,-1,-1,-1,-1,-1,-1,-1,20,20,20,-1,-1,63],
            [75,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,63,60,62,75,72,58,-1,-1,-1,-1,-1,-1,-1,-1,4,5,6,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,60,61,58,56,68,62,75,60,57,62,4,6,-1,-1,-1,60,58,59,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,59,56,58,67,75,56,62,60,62,75,-1,-1,-1,-1,-1,-1,-1,67,67,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,67,72,74,75,60,74,60,57,58,-1,-1,-1,-1,-1,-1,-1,-1,75,67,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,60,74,4,5,5,5,5,6,72,74,-1,-1,-1,-1,-1,-1,-1,-1,-1,75,-1,-1,-1],

        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,24,25,26],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,27,27,27,27,14,9],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,9,-1,-1,-1,-1,-1,12,11,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,16,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,12,9,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,14,9,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,41,-1,-1,33,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [8,9,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,30,30,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,39,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,27,27,21,21,21,27,27,-1,-1,-1],
            [-1,-1,-1,8,11,12,14,12,11,28,-1,-1,30,30,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,17,9],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,29,31,31,30,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,12,9,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,30,30,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,17,16,11,17,9,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],

        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1, 1, 1, 1, 1],
            [4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1, 5],
            [4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [4,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [4,-1,-1, 1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1, 1, 1,-1,-1, 5],
            [4,-1,-1, 1, 1, 1, 1, 1, 1, 1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1],
            [4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1, 1, 1,-1,-1, 5],
            [4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3],

        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+1)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite(1000, 32, 'door')
        door2 = this.add.sprite(142 ,383, 'door')

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }
        if (checkOverlap(player, door1)) {
            this.scene.start("niveau3");
            travers = false;
            playerX = 48;
            playerY = player.y-10;
        }
        if (cursors.up.isDown && checkOverlap(player, door2)) {
            this.scene.start("maison2");
                travers = false;
                playerX = 250;
                playerY = 272;
        }
    }
}

class niveau3 extends Phaser.Scene{
    constructor(){
         super({
            key: 'niveau3'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(496, 320, 'background')
        var level = [
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,11],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19],
            [13,12,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3],
            [11,-1,-1,-1,-1,4,5,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19],
            [19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3],
            [3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19],
            [16,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,2],
            [0,2,4,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3,11],
            [8,9,2,3,4,5,5,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,19],
            [16,17,18,11,7,4,6,3,4,5,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,2],
            [4,5,6,19,4,2,4,18,4,6,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3,19],
            [4,2,4,5,6,16,6,4,5,6,19,7,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,11,3],
            [14,16,5,6,3,4,6,4,5,5,5,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,19],
            [14,14,14,14,16,5,6,4,2,3,4,5,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,6],
            [25,26,27,14,14,14,14,14,19,16,5,6,16,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,42,43,-1,-1,-1,0,6,3],
            [28,24,36,14,14,14,14,14,14,14,14,14,14,14,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,0,18,3,11],
            [33,32,35,14,14,14,14,14,14,14,14,14,14,14,-1,-1,-1,-1,40,41,-1,-1,-1,-1,-1,-1,-1,19,4,10,19],
            [4,5,5,5,5,6,-1,-1,-1,-1,-1,4,5,6,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3,0,2,3,19,3],
            [7,4,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,5,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,18,16,18,16,17,18]
        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,41],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [13,12,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40],
            [-1,-1,-1,-1,-1,8,14,9,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,32],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,23,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [32,-1,8,9,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1],
            [-1,-1,-1,-1,16,17,18,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,32,-1,-1,16,17,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [41,-1,-1,40,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,22,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,32],
            [-1,-1,-1,-1,-1,32,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,33,-1,41,-1,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,54,55,-1,-1,-1,-1,13,12],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,23,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,52,53,-1,-1,-1,-1,-1,-1,-1,41,-1,-1,-1],
            [-1,-1,-1,39,24,25,26,-1,-1,-1,24,25,26,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40],
            [15,19,16,17,18,9,27,27,27,27,27,8,11,10,9,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,33,-1,-1,41,-1,-1],
            [-1,-1,-1,48,48,48,48,48,48,48,48,48,-1,-1,-1,48,48,48,48,48,48,48,48,48,32,-1,-1,-1,-1,-1,-1]

        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 4, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 2, 0, 0, 0, 0, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 2, 2, 2, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 2, 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5],
            [ 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3]

        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite(992, 416, 'door')
        door2 = this.add.sprite(48, 544, 'door')

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }

        if (checkOverlap(player, door1)) {
            this.scene.start("niveau4");
            travers = false;
            playerX = 48;
            playerY = player.y-10;
        }

        if (cursors.up.isDown && checkOverlap(player, door2)) {
            this.scene.start("maison3");
            travers = false;
            playerX = 250;
            playerY = 272;
        }    
    }
}

class niveau4 extends Phaser.Scene{
    constructor(){
         super({
            key: 'niveau4'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(496, 320, 'background')
        var level = [
            [25,26,27,3,4,2,3,3,0,6,0,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [28,24,36,11,3,19,11,11,19,4,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [33,32,35,19,11,4,18,19,3,7,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [ 4, 5, 5, 6,11, 4, 6, 4,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [ 3, 3, 7, 3,19, 4, 6, 4, 5, 6, 4, 6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [11,16,2,8,5,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [19,7,19,19,4,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [3,4,5,6,4,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [11,4,5,6,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [19,0,1,2,11,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [7,16,17,18,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [0,2,4,5,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [8,10,4,5,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [16,18,3,7,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,3,-1,-1,3],
            [4,6,16,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,6,0,18],
            [3,4,5,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3,4,1,6,56,57,20,20,20,58,56,4,18,3,19,3],
            [11,7,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,6,19,3,64,65,66,64,65,66,64,4,2,8,6,11],
            [19,3,11,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,11,4,6,11,72,73,74,72,73,74,72,3,11,19,3,19],
            [3,11,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3,19,0,6,16,6,57,58,56,57,58,3,11,19,3,16,2],
            [19,16,6,49,49,49,49,49,49,49,49,49,49,49,19,4,18,4,5,6,65,66,64,65,66,19,19,4,17,6,19]
        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [-1,-1,-1,-1,-1,-1,41,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,21,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,39,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [15,15,15,15,-1,-1,-1,-1,-1,-1,24,25,26,-1,-1,-1,43,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,41,-1,13,12,-1,-1,-1,-1,-1,31,31,31,31,31,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,33,-1,-1,17,9,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,14,11,10,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [12,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,8,16,13,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,33,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,17,-1,-1,-1,-1,-1,-1,-1,-1,-1,17,-1,-1,17],
            [10,9,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,17,-1,43,-1,-1,-1,-1,-1,-1,-1,45,-1,17,14,40],
            [41,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,17,32,-1,17,-1,-1,-1,-1,-1,-1,-1,17,-1,-1,18,-1],
            [-1,33,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,33,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,43,-1,-1,-1,-1,-1,45,32,-1,-1,-1,-1],
            [-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,17,-1,41,-1,-1,17,-1,-1,-1,-1,-1,17,-1,-1,-1,-1,41],
            [40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,41,-1,-1,-1]
        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 1, 1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4, 1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1, 1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1, 2],
            [ 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2, 2, 2, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1, 2,-1,-1,-1,-1, 5],
            [ 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3]


        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite(48, 32, 'door')
        door2 = this.add.sprite((22+0.5)*32, 19*32, 'porte')

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }

        if (checkOverlap(player, door2)) {
            this.scene.start("niveau5");
            travers = false;
            playerX = 112;
            playerY = 32;
        }

        if (cursors.up.isDown && checkOverlap(player, door1)) {
            this.scene.start("maison4");
            travers = false;
            playerX = 250;
            playerY = 272;
        }    
    }
}

class niveau5 extends Phaser.Scene{
    constructor(){
         super({
            key: 'niveau5'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(496, 320, 'background')
        var level = [
            [ 3, 3,56,57,58,56,57,58,56,57, 3, 0, 1, 2, 3, 0, 6, 0, 6, 3, 3, 0, 1, 2, 4, 5, 5, 6, 3, 0, 2],
            [11,19,64,65,66,64,65,66,64,65,19, 8, 9,10,19,11, 0,18, 3,11,11, 8, 9,10, 0, 6, 4, 5,18,16,18],
            [19, 3,72,73,74,72,73,74,72, 0, 2,16,17,18, 3,19,19, 4,18,11,19,16,17,18,11, 0, 6, 3, 0, 5, 2],
            [ 7,11,56,57,58,56,57,58,56,16,18, 4, 6, 4,17, 6, 4, 5, 5,18, 4, 5, 6, 7,19,19, 4,18,19, 3,19],
            [ 3,11,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65, 4,17, 6],
            [11,19,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72, 3],
            [ 8, 6,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,19],
            [19, 3,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64, 3],
            [ 4,18,72,73,74,72,73,74, 3,73,74,72,73,74,72,73,74, 3, 3, 4, 2, 4, 5, 6, 4, 6,72,73,74,72,11],
            [ 3, 4, 5, 6, 3, 0, 6, 3, 8, 6,58,56, 7, 7,56,57, 0,18,16, 2,16, 6, 3, 0, 1, 2,56,57,58,56,19],
            [ 8, 6, 0, 6,11,19, 4,10,11, 4, 6,64,65,66,64, 3,19, 3, 7,16, 6, 0,18, 8, 9,18,64,65,66,64, 7],
            [19, 3,11, 4,18, 0, 2,11,11, 4, 2, 0, 5, 6, 4,17, 6,19, 0, 6, 3,19, 7,16,18,74,72,73,74,72, 3],
            [ 4,18,19,57,58,16,18,19,19, 7,11,11, 0, 1, 2, 0, 2, 3,11, 4,17, 6,58,56,57,58,56,57,58,56,11],
            [ 3, 3,64,65,66,64,65, 4, 6, 3,19,11, 8, 9,10,16,18,11,19,66,64,65,66,64,65,66,64,65, 0, 2,11],
            [19,11,72,73,74,72,73,74, 4,17, 6,19,16,17,18, 4, 5,18,73,74,72,73,74,72,73,74, 0, 6,16,18,19],
            [ 3,19,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,19, 4, 5, 6,3 ],
            [16, 6,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,25,26,27,19],
            [ 0, 2,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,28,24,36, 3],
            [ 8,10,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,33,32,35,11],
            [16,18,64,65, 4, 5, 6, 4, 6, 4, 6, 7, 4, 5, 5, 6, 4, 5, 6, 4, 5, 6, 4, 5, 5, 5, 5, 5, 5, 6,19]
        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,32,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,32,-1,-1,-1,40,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,23,-1,-1,-1,-1,15,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,22,-1,-1,-1],
            [33,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,17,19,15,-1,15,-1,-1,-1,-1,17,-1,-1,41,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,23],
            [-1,-1,-1,-1,-1,-1,20,20,20,20,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,33,-1,-1,-1,-1,20,20,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,40,20,20,20,20,20,20,10,48,-1,-1,-1,-1,-1,-1,48,-1,-1,-1,-1,-1,-1,-1,-1,23,-1,-1,-1,51,-1],
            [-1,-1,15,15,15,15,15,15,-1,-1,48,-1,12, 9,-1,48,-1,-1,-1,-1,-1,-1,-1,23,-1,40,-1,-1,-1,51,-1],
            [-1,-1,41, 9,-1,-1,-1,-1,-1,-1,-1,48,48,48,48,-1,-1,-1,-1,-1,19,-1,-1,-1,-1,20,-1,-1,-1,51,-1],
            [-1,-1,-1,-1,-1,19,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,33,-1,40,20,20,-1,-1,51,-1],
            [-1,-1,-1,49,49,-1,-1,-1,-1,33,-1,-1,-1,-1,-1,23,13,-1,-1,23,-1,-1,20,20,20,20,20,-1,-1,51,-1],
            [-1,-1,49,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,20,20,15,15,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,41,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,23,15,20,20,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,49,49,49,-1,-1,-1,-1,49,49,49,-1,-1,-1,-1,-1,-1,-1,-1,20,20,20,20,22],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,20,20,20,-1],
            [19,15,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,20,20,20,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,48,48,-1,-1,-1,-1,39,20,20,20,-1],
            [-1,-1,-1,-1,22,-1,-1,23,18,-1,-1,41,-1,-1,-1,-1,14,23,-1,-1,-1,-1,-1,-1,-1,15,17,15,14,15,-1]
        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2,-1,-1],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2, 2, 2],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2],
            [-1, 2,-1,-1,-1,-1,-1,-1, 2, 3,-1,-1,-1,-1,-1,-1, 3, 2, 2, 2, 2, 2, 2, 2, 2, 2,-1,-1,-1, 3, 2],
            [-1,-1, 2, 2, 2, 2, 2, 2,-1, 2, 3,-1, 2, 2,-1, 3, 2,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1, 3, 2],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2, 3, 3, 3, 3, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1, 3, 2],
            [-1,-1,-1, 2, 2,-1,-1,-1,-1,-1,-1, 2, 2, 2, 2,-1,-1,-1,-1,-1,-1,-1, 2, 2, 2,-1,-1,-1,-1, 3, 2],
            [-1,-1, 2, 3, 3, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2, 2, 2,-1,-1,-1,-1,-1,-1,-1, 3, 2],
            [-1, 2, 3,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2, 2,-1],
            [-1, 2,-1,-1,-1,-1,-1,-1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1, 2, 2,-1,-1,-1],
            [-1, 2,-1,-1,-1,-1,-1,-1, 3, 3, 3,-1,-1,-1,-1, 3, 3, 3,-1,-1,-1,-1,-1,-1,-1,-1, 2, 2, 2, 2,-1],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 3, 3,-1,-1,-1,-1,-1,-1,-1,-1, 2],
            [-1, 2,-1,-1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2,-1]


        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite(96, 640, 'door')
        door2 = this.add.sprite((28+0.5)*32, 18*32, 'door')

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }

        if (checkOverlap(player, door1)) {
            this.scene.start("niveau6");
            travers = false;
            playerX = player.x-16;
            playerY = 0;
        }

        if (cursors.up.isDown && checkOverlap(player, door2)) {
            this.scene.start("maison5");
            travers = false;
            playerX = 250;
            playerY = 272;
        }    
    }
}

class niveau6 extends Phaser.Scene{
    constructor(){
         super({
            key: 'niveau6'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(496, 320, 'background')
        var level = [
            [0,2,56,57,3,4,5,2,0,2,3,4,6,7,4,5,6,3,4,5,5,6,4,5,5,5,6,57,58,56,57],
            [8,10,64,65,8,6,7,19,16,18,19,4,5,6,4,5,5,18,4,1,6,65,66,64,65,66,64,65,66,64,65],
            [16,18,72,73,19,72,73,74,72,73,74,72,73,74,72,73,74,72,73,19,72,73,74,72,73,74,72,73,74,72,73],
            [3,3,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57],
            [11,19,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,4,5,5,6],
            [19,3,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,4,6,73,74,72,73],
            [3,11,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,4,5,6,58,56,57,58,56,57],
            [11,19,4,5,5,5,6,66,64,65,66,64,65,66,64,65,66,64,65,66,4,6,66,64,65,66,64,65,66,64,65],
            [16,6,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73],
            [3,7,56,57,58,56,57,58,56,57,58,56,57,58,56,57,4,6,57,58,56,57,58,56,57,58,56,57,58,56,57],
            [8,6,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65],
            [19,3,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,4,5,5,6,74,72,73,74,72,73,74,72,73],
            [4,18,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,4,6,56,57,0,1,1],
            [0,2,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,0,9,9,9],
            [16,18,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,8,25,26,27],
            [0,2,56,57,58,56,57,58,56,57,58,4,5,6,56,57,58,56,57,58,56,57,58,56,57,58,56,8,28,24,36],
            [8,10,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,16,33,32,35],
            [8,10,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,4,5,6,73,74,72,4,5,5,6],
            [8,10,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,7,3],
            [16,18,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,4,6,66,64,65,66,64,65,66,64,65,66,64,19]

        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [41,-1,-1,-1,-1,32,-1,-1,-1,-1,40,-1,-1,33,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,41,-1,-1,-1,-1,-1,-1,-1,32,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,18,19,23],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,23,18,-1,-1,-1,-1],
            [32,-1,-1,-1,-1,24,25,26,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,24,25,26,16,17,18,-1,-1,-1,-1,-1,-1],
            [-1,-1,8,17,19,18,9,27,27,27,66,66,66,66,66,66,66,27,27,27,8,13,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,33,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,11,10,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,10,14,18,23,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,16,-1,-1,32,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1],
            [41,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,23,11,12,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,39,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,12,14,9,-1,-1,-1,23,13,12,14],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,41,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,15,14,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40]

        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [-1, 2,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2, 2, 2, 2, 2, 2,-1,-1,-1, 5],
            [-1, 2,-1,-1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [-1, 2,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1, 1, 1],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1, 5],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1, 1,-1,-1,-1,-1,-1, 5],
            [-1, 2, 1, 1, 1, 1, 1, 1, 1, 1,-1,-1,-1,-1,-1,-1,-1, 1, 1, 1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1, 5],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1, 1],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1, 1,-1,-1,-1, 2, 2, 2, 2],
            [-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2, 2],
            [-1, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 1, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3]



        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+1)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite((30+0.5)*32, 3*32, 'door')
        door2 = this.add.sprite((29+0.5)*32, 16*32, 'door')

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }

        if (checkOverlap(player, door1)) {
            this.scene.start("niveau7");
            travers = false;
            playerX = 1*32;
            playerY = 18*32;
        }

        if (cursors.up.isDown && checkOverlap(player, door2)) {
            this.scene.start("maison6");
            travers = false;
            playerX = 250;
            playerY = 272;
        }    
    }
}

class niveau7 extends Phaser.Scene{
    constructor(){
         super({
            key: 'niveau7'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(496, 320, 'background')
        var level = [
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,0,2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,16,18,-1,-1,-1,-1,-1,-1,4,1,1,1,6,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,17,18,-1,-1,-1,-1,-1,4,1,6,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,20,-1,-1,-1,-1,-1,-1,-1,19,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [42,41,43,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,40,42,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,42,43,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,20,20,20,-1,-1,-1,-1,-1,-1],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,41,20,20,-1,40,41,42,20,20,20,25,26,27],
            [0,1,2,3,4,6,3,7,3,4,5,6,4,5,5,6,57,58,56,57,58,56,57,58,56,57,58,56,28,24,36],
            [8,9,10,8,6,4,17,6,8,5,6,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,33,32,35],
            [16,17,18,19,73,74,72,73,19,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,4,5,5,5,6],
            [0,5,6,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,4,5,6,56,57,58,56,57,58,56],
            [11,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,7,65,66,64,65,66,64,65,66,64,65,66,64],
            [19,73,74,72,73,74,72,73,74,72,73,74,72,73,74,7,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72],
            [56,57,58,56,57,58,56,57,58,56,57,4,6,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56],
            [64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64,65,66,64],
            [72,73,74,72,73,74,72,4,6,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72,73,74,72],
            [4,5,5,5,6,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56,57,58,56]


        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,41,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,41,-1,-1,-1,33,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,15,15,15,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [54,53,55,52,54,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [58,58,58,58,42,58,58,52,54,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,58,58,58,58,54,55,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,58,58,58,58,58,52,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,58,58,58,53,-1,-1,-1,52,53,54,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,58,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [16,15,15,16,16,17,15,16,15,17,16,14,15,15,16,15,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,40,-1,-1,32,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,39,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,10,16,17,18,11],
            [32,-1,33,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,19,9,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,23,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,22,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,9,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,13,12,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [8,22,17,14,13,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1]

        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1, 1, 1, 1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1, 1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 1, 1, 1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1,-1,-1,-1, 1, 1, 1,-1,-1,-1, 1, 1, 1],
            [ 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1, 2, 2, 2, 2,-1, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1, 2,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1, 1, 1, 1],
            [ 4, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1, 1,-1,-1,-1,-1,-1,-1, 5],
            [ 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3]




        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+1)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite((0+0.5)*32, 4*32, 'door')
        door2 = this.add.sprite((29+0.5)*32, 11*32, 'door')

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }

        if (checkOverlap(player, door1)) {
            this.scene.start("niveau8");
            travers = false;
            playerX = (30+0.5)*32;
            playerY = 3*32;
        }

        if (cursors.up.isDown && checkOverlap(player, door2)) {
            this.scene.start("maison7");
            travers = false;
            playerX = 250;
            playerY = 272;
        }    
    }
}

class niveau8 extends Phaser.Scene{
    constructor(){
         super({
            key: 'niveau8'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(496, 320, 'background')
        var level = [
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,41,42,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,11,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,5,6,-1,-1,-1,11,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,-1,-1,-1,-1,-1,-1,-1,40,41,42,43,41],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,4,5,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,16,6,0,1,2,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,0,1,2,-1,-1,-1,8,9,10,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [4,2,-1,-1,-1,-1,-1,-1,-1,7,-1,-1,-1,16,17,18,-1,-1,-1,16,17,18,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,0,2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,16,18,20,-1,-1,-1,-1,-1,-1,25,26,27,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,3,-1,-1,-1,-1,28,24,36,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,16,2,-1,-1,-1,33,32,35,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,5,2,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,19,-1,-1,4,5,1,5,6,-1,-1,-1,0,6,-1,-1,-1,-1,-1,19,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,-1,-1,-1,-1,4,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1]



        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,38,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,17,13,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,52,53,54,55,53],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,52,52,52,52,52],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,32,-1,-1,-1,43,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,17,18,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,8,16,23,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,10,18,13,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [8,11,-1,-1,-1,-1,-1,-1,-1,22,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,12,23,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,22,-1,-1,-1,-1,-1,-1,39,-1,-1,-1,-1,-1,-1,-1,-1,14,18,9,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,16,17,18,9,-1,-1,-1,13,12,-1,-1,-1,-1,-1,40,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,41,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1]


        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1, 1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1, 2, 2, 2, 2, 2],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1, 2, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2, 2, 2, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2, 2, 2,-1,-1,-1, 2,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 2, 2,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1, 2, 2, 2,-1,-1,-1, 2, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2, 2, 2,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1, 2, 2, 2, 2, 2,-1,-1,-1, 2, 2,-1,-1,-1,-1,-1, 2,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3]





        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite((13+0.5)*32, 0*32, 'door')
        door2 = this.add.sprite((13+0.5)*32, 14*32, 'door')

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }

        if (checkOverlap(player, door1)) {
            this.scene.start("niveau9");
            travers = false;
            playerX = player.x;
            playerY = 17*32;
        }

        if (cursors.up.isDown && checkOverlap(player, door2)) {
            this.scene.start("maison8");
            travers = false;
            playerX = 250;
            playerY = 272;
        }    
    }
}

class niveau9 extends Phaser.Scene{
    constructor(){
         super({
            key: 'niveau9'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(496, 320, 'background')
        var level = [
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,0,1,2,3,3,4,2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,9,10,11,16,6,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,16,17,18,16,5,5,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,5,5,5,5,5,5,5,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3,4,2,3,0,2,4,5,6,42,43,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,6,19,19,16,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,4,5,2,7,-1,-1,-1,-1,-1,-1,-1,40,41,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,7,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,6,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,0,5,6,-1,-1,-1,-1,-1,4,6,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,0,1,2,-1,-1,19,-1,-1,-1,-1,7,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,8,9,10,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,4,6,16,17,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,25,26,27,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [3,-1,28,24,36,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [11,-1,33,32,35,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [19,-1,4,1,5,6,-1,-1,4,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,19,-1,-1,-1,-1,-1,-1,-1,-1,40,41,42,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1]



        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,23,17,17,16,22,14,18,13,54,55,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,41,-1,32,-1,41,-1,32,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,40,-1,40,-1,-1,-1,-1,-1,-1,52,53,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,33,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,12,13,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,17,14,-1,-1,-1,-1,-1,13,12,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,22,14,9,-1,-1,-1,-1,-1,-1,-1,23,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,13,12,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [23,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [40,-1,14,19,15,11,-1,-1,9,8,-1,-1,52,53,54,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1]



        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2, 2, 2, 2, 2, 2, 2, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1,-1, 2, 2, 2, 2, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2, 2, 2, 2, 2,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2, 2,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2, 2, 2,-1,-1,-1,-1,-1, 2, 2,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1, 2, 2, 2,-1,-1, 2,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1, 2, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1, 2, 2, 2, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1, 1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 2,-1, 2, 2, 2, 2,-1,-1, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3]






        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+1)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite((13+0.5)*32, 0*32, 'door')
        door2 = this.add.sprite((3+0.5)*32, 17*32, 'door')

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }

        if (checkOverlap(player, door1)) {
            this.scene.start("niveau10");
            travers = false;
            playerX = 15*32;
            playerY = 16*32;
        }

        if (cursors.up.isDown && checkOverlap(player, door2)) {
            this.scene.start("maison9");
            travers = false;
            playerX = 250;
            playerY = 272;
        }    
    }
}

class niveau10 extends Phaser.Scene{
    constructor(){
         super({
            key: 'niveau10'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(496, 320, 'background')
        var level = [
            [-1,-1,-1,-1,-1,-1,4,5,5,5,5,5,5,5,5,5,5,5,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,4,5,1,2,3,4,5,6,4,2,0,2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,16,18,11,4,6,4,2,11,8,18,3,-1,80,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,18,0,1,2,19,19,19,3,11,80,80,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,9,10,4,6,7,11,11,80,-1,-1,42,43,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,16,17,18,3,4,6,19,19,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,0,5,6,8,6,7,0,2,19,-1,-1,-1,-1,-1,40,41,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,0,6,19,4,2,16,18,-1,-1,42,43,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3,11,0,5,2,11,4,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,19,11,7,11,19,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3,4,6,16,5,18,3,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,42,43,-1,3,11,4,2,0,1,2,16,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,40,41,-1,-1,-1,-1,-1,19,11,3,11,19,3,19,0,2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,11,19,4,17,6,8,10,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [40,41,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,16,6,4,5,6,16,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,0,1,2,3,25,26,27,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,42,43,-1,-1,-1,-1,-1,-1,-1,8,9,10,11,28,24,36,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,40,41,-1,-1,-1,16,17,18,16,33,32,35,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,5,5,5,5,5,5,5,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3,4,2,3,0,2,4,5,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1]




        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [-1,-1,-1,-1,-1,-1,8,14,9,8,11,10,13,12,22,19,16,17,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,41,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,31,31,-1,-1,-1,-1,-1,-1,80,80,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,32,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,54,55,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,31,31,-1,-1,30,28,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,41,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,52,53,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,54,55,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,32,-1,-1,-1,31,31,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,31,-1,-1,32,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,54,55,-1,-1,40,31,31,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,52,53,-1,-1,-1,-1,-1,32,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,40,-1,41,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [52,53,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,54,55,-1,-1,-1,-1,-1,-1,-1,41,-1,-1,32,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,52,53,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,23,17,17,16,22,14,18,13,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,41,-1,32,-1,41,-1,32,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1]




        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 4,-1,-1,-1,-1,-1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1, 1, 1,-1,-1, 1, 1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,2, 2, 2, 2, 2, 2, 2, 2, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3],







        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+1)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite((13+0.5)*32, 0*32, 'porte')
        door2 = this.add.sprite((17+0.5)*32, 17*32, 'door')

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }

        if (checkOverlap(player, door1)) {
            this.scene.start("niveau11");
            travers = false;
            playerX = player.x;
            playerY = 500;
        }

        if (cursors.up.isDown && checkOverlap(player, door2)) {
            this.scene.start("maison10");
            travers = false;
            playerX = 250;
            playerY = 272;
        }    
    }
}

class niveau11 extends Phaser.Scene{
    constructor(){
         super({
            key: 'niveau11'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(496, 320, 'background')
        var level = [
            [-1,-1,-1,-1,-1,-1,-1,-1,4,5,5,5,5,5,5,5,5,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,3,4,2,0,2,0,5,6,0,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,16,6,19,8,10,19,9,9,19,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,0,1,2,16,18,3,7,3,4,10,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,25,26,27],
            [-1,-1,-1,-1,-1,-1,-1,-1,8,9,10,9,9,11,4,17,6,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,28,24,36],
            [-1,-1,-1,-1,-1,-1,-1,-1,16,17,18,4,2,19,9,9,0,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,33,32,35],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,4,5,2,16,6,4,6,11,48,-1,-1,-1,-1,-1,-1,-1,-1,40,42,41,42,43],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,4,5,5,6,19,-1,40,41,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,2,0,6,-1,-1,-1,-1,-1,-1,-1,42,43,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,41,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,3,40,41,-1,-1,-1,-1,-1,-1,3,48,48,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,42,43,-1,16,5,6,-1,-1,-1,-1,42,43,11,40,41,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,0,1,2,3,-1,-1,-1,-1,3,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,40,41,-1,-1,-1,8,9,10,8,6,40,41,4,18,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,16,17,18,19,3,0,5,2,0,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [42,43,-1,-1,-1,-1,-1,-1,3,0,6,3,11,19,3,19,19,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,11,19,4,10,19,0,18,0,6,11,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,40,41,-1,-1,-1,16,5,6,16,6,19,4,18,4,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,4,5,5,5,5,5,5,5,5,5,5,5,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1]





        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [-1,-1,-1,-1,-1,-1,-1,-1,8,18,22,14,13,12,11,10,17,9,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,41,-1,32,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,30,30,-1,32,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,32,-1,-1,-1,-1,-1,33,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,30,30,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,41,-1,40,30,30,41,-1,-1,-1,-1,-1,-1,-1,-1,-1,54,55,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,32,-1,-1,-1,52,53,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,54,55,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,41,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,52,53,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,52,53,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,54,55,-1,-1,-1,-1,-1,-1,-1,-1,54,55,-1,52,53,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,52,53,-1,-1,-1,32,-1,-1,-1,-1,52,53,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,33,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [54,55,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,32,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,41,-1,-1,-1,-1,-1,-1,-1,-1,41,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,52,53,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,32,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,8,14,9,8,11,10,13,12,22,19,16,17,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1]




        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,1,1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,1,1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,1,1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1, 1, 1, 1],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,1,1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,1,1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,1,1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,1,1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,1,1,-1,-1,-1,-1,-1,-1,-1,-1,1,1,-1,1,1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,1,1,-1,-1,-1,-1,-1,-1,-1,-1,1,1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [1,1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3]







        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+1)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite((13+0.5)*32, 0*32, 'porte')
        door2 = this.add.sprite((29+0.5)*32, 5*32, 'door')

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }

        if (checkOverlap(player, door1)) {
            this.scene.start("niveau12");
            travers = false;
            playerX = player.x;
            playerY = 500;
        }

        if (cursors.up.isDown && checkOverlap(player, door2)) {
            this.scene.start("maison11");
            travers = false;
            playerX = 250;
            playerY = 272;
        }    
    }
}

class niveau12 extends Phaser.Scene{
    constructor(){
         super({
            key: 'niveau12'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(496, 320, 'background')
        var level = [
            [-1,-1,-1,-1,-1,-1,-1,-1,20,20,20,20,20,20,20,20,20,20,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,20,20,20,20,20,56,3,20,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,20,20,20,20,20,64,8,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,20,20,20,20,20,56,65,11,3,20,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,3,4,2],
            [-1,-1,-1,-1,-1,-1,-1,-1,20,20,20,20,20,64, 4,18,11,20,-1,-1,-1,-1,-1,-1,-1,7,4,2,8,6,11],
            [-1,-1,-1,-1,-1,-1,-1,-1,20,20,20,20,20,64, 3, 0,18,20,-1,-1,-1,-1,-1,-1,-1,4,2,11,19,3,19],
            [-1,-1,-1,-1,-1,-1,-1,-1,20,20,20,20,56,65,11,11,3,20,-1,-1,-1,-1,-1,-1,-1,-1,11,19,4,17,6],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,20,20,20,64,4,18,19,11,20,-1,-1,-1,42,43,-1,-1,-1,19,0,5,5,2],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,20,20,56,65,0,1,2,11,20,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,0,2,19],
            [-1,-1,-1,-1,-1,-1,-1,-1,20,20,56,65,3,8,9,10,19,20,40,41,-1,-1,-1,-1,-1,-1,-1,3,8,10,3],
            [-1,-1,-1,-1,-1,-1,-1,-1,20,56,65,4,10,16,17,18,3,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,11,8,10,11],
            [-1,-1,-1,-1,-1,-1,-1,20,20,64,0,2,19,4,1,6,11,-1,-1,-1,-1,-1,42,43,-1,-1,-1,19,16,18,19],
            [-1,-1,-1,-1,-1,-1,-1,20,20,72,16,18,0,2,19,3,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,4,1,1,6],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,0,1,2,8,10,4,17,6,-1,-1,40,41,-1,-1,-1,-1,-1,-1,-1,8,18,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,8,9,10,16,18,4,1,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,16,17,18,0,1,2,19,59,20,-1,-1,-1,-1,-1,42,43,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,0,6,7,25,26,27,57,65,58,20,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,19,7,3,28,24,36,73,65,66,-1,40,41,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,7,4,18,33,32,35,6,72,74,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,4,5,5,5,5,5,5,5,5,6,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1]


        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,22,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,23,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,32,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,12,14,15],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,14,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,17,11,-1,33,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,32,40,-1,-1,-1,-1,-1,-1,-1,-1,32,-1,-1,-1,-1,40],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,32,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,8,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,41,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,16,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,18,-1,-1,-1,-1,32,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,19,-1,-1,41,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,32,-1,-1,41,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,32,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,14,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,33,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,32,-1,33,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,33,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,33,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,8,18,22,14,13,12,11,10,17,9,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1]




        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,2,2,2],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,2,2,2,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,2,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,2,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,1,1,-1,-1,-1,2,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,2,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,1,1,-1,-1,-1,-1,-1,-1,-1,2,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,2,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,1,1,-1,-1,-1,2,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,2,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,1,1,-1,-1,-1,-1,-1,-1,-1,2,2,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,2,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,1,1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [ 3, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3]







        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+1)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite((30+0.5)*32, 2*32, 'door')
        door2 = this.add.sprite((13+0.5)*32, 18*32, 'door')

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }

        if (checkOverlap(player, door1)) {
            this.scene.start("niveau13");
            travers = false;
            playerX = 64;
            playerY = 0;
        }

        if (cursors.up.isDown && checkOverlap(player, door2)) {
            this.scene.start("maison12");
            travers = false;
            playerX = 250;
            playerY = 272;
        }    
    }
}

class niveau13 extends Phaser.Scene{
    constructor(){
         super({
            key: 'niveau13'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(496, 320, 'background')
        var level = [
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [4,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,6,-1,-1,-1,-1,-1,-1,-1],
            [3,7,4,2,0,6,4,5,5,6,4,6,3,4,5,2,4,2,3,7,3,0,6,-1,-1,-1,-1,-1,-1,-1,-1],
            [16,5,6,11,19,3,3,4,2,0,2,0,18,0,6,8,6,19,16,5,18,19,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [4,5,6,19,4,10,8,6,11,8,10,19,4,18,4,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [0,1,2,0,2,19,19,4,18,16,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [8,9,10,16,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [16,17,18,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [0,2,-1,3,-1,-1,-1,3,-1,0,5,5,6,-1,0,5,5,-1,-1,0,5,5,6,-1,4,1,6,-1,-1,3,-1],
            [8,18,-1,8,6,-1,4,10,-1,11,-1,-1,-1,-1,11,-1,-1,3,-1,11,-1,-1,-1,-1,-1,11,-1,-1,-1,11,-1],
            [19,-1,-1,11,-1,7,-1,11,-1,8,5,6,-1,-1,11,81,81,19,-1,11,-1,-1,-1,-1,-1,11,-1,-1,-1,19,-1],
            [-1,-1,-1,11,-1,-1,-1,11,-1,11,50,50,-1,-1,8,5,6,81,-1,11,-1,-1,-1,-1,-1,11,-1,-1,-1,-1,-1],
            [-1,-1,-1,19,-1,-1,-1,19,-1,16,5,5,6,-1,19,49,49,7,-1,16,5,5,6,-1,4,17,6,-1,-1,7,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,4,2,4,5,6,0,2,4,5,5,6,3,0,1,2,3,4,5,5,6,0,2,7,5,6,0,6,-1],
            [-1,-1,-1,-1,16,2,4,2,16,10,0,1,2,0,18,8,9,10,16,2,0,1,2,8,18,0,6,0,18,-1,-1],
            [-1,-1,-1,-1,-1,16,2,11,3,18,8,9,10,19,3,16,17,18,3,19,8,9,10,19,3,11,0,18,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,19,19,16,6,16,17,18,4,17,6,7,4,17,6,16,17,18,4,18,19,19,-1,-1,-1,-1]



        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [15,15,9,8,23,17,16,18,11,12,16,19,17,17,13,12,15,15,11,10,18,19,14,13,-1,-1,-1,-1,-1,-1,-1],
            [-1,33,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,32,33,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,32,-1,-1,-1,-1,-1,-1,-1,41,-1,-1,40,-1,-1,34,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,32,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [41,-1,-1,41,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [32,-1,-1,19,-1,-1,-1,19,-1,8,13,10,15,-1,16,17,18,-1,-1,8,17,18,9,-1,16,17,15,-1,-1,23,-1],
            [-1,40,-1,-1,23,-1,23,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,23,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,22,-1,-1,-1,-1,9,8,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,11,10,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,18,23,15,-1,-1,-1,-1,19,-1,-1,15,15,15,-1,9,-1,8,-1,-1,19,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,-1],
            [-1,-1,-1,-1,-1,-1,32,-1,-1,-1,41,-1,-1,-1,-1,-1,-1,-1,-1,-1,41,-1,-1,-1,-1,41,-1,-1,40,-1,-1],
            [-1,-1,-1,-1,-1,-1,40,-1,32,-1,-1,-1,40,-1,41,-1,-1,-1,41,-1,-1,-1,40,-1,32,-1,-1,40,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,33,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1]
        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,2,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,2,2,2,2,2,2,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,2,2,2,2,2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,-1,-1,2,2,2,2,2,2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,2,2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,2,-1,2,-1,-1,-1,2,-1,2,2,2,2,-1,2,2,2,-1,-1,2,2,2,2,-1,2,2,2,-1,-1,2, 5],
            [ 4,2,-1,2,2,-1,2,2,-1,2,-1,-1,-1,-1,2,-1,-1,2,-1,2,-1,-1,-1,-1,-1,2,-1,-1,-1,2, 5],
            [2,-1,-1,2,-1,2,-1,2,-1,2,2,2,-1,-1,2,-1,-1,2,-1,2,-1,-1,-1,-1,-1,2,-1,-1,-1,2, 5],
            [ 4,-1,-1,2,-1,-1,-1,2,-1,2,-1,-1,-1,-1,2,2,2,-1,-1,2,-1,-1,-1,-1,-1,2,-1,-1,-1,-1, 5],
            [ 4,-1,-1,2,-1,-1,-1,2,-1,2,2,2,2,-1,2,-1,-1,2,-1,2,2,2,2,-1,2,2,2,-1,-1,2, 5],
            [ 4,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 5],
            [ 4,-1,-1,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2, 5],
            [ 4,-1,-1,-1,2,-1,-1,-1,-1,-1,-1,-1,2,2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,2,-1, 5],
            [ 4,-1,-1,-1,-1,2,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,2,-1,-1, 5],
            [ 4,-1,-1,-1,-1,-1,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,-1,-1,-1, 5]

        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+1)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        } 
    }
}


//maisons

class maison1 extends Phaser.Scene{
    constructor(){
         super({
            key: 'maison1'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(320, 175, "pnjBackground").setScale(0.5)
        var level = [
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20]
        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.15)*32, (i)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite(250, 272, 'door')
        pnj = this.add.sprite(450, 274, 'pnj1')
        name = this.add.text(3*32, 11*32, "Graphiste", {fontSize: '32px', fill: '#ffffff'});

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }
        if (cursors.up.isDown && checkOverlap(player, pnj)) {
            $(".text-db1").removeClass("hidden");
        }
        if (cursors.up.isDown && checkOverlap(player, door1)) {
            this.scene.start("niveau1");
            travers = false;
            playerX = 944;
            playerY = 256;
            $(".explications-graphist").addClass("show");
            $(".choix1").addClass("show");
            $(".choix2").addClass("show");
            $(".choix3").addClass("show");
            $(".status-graphist").removeClass("show");
            $(".wage-graphist").removeClass("show");
            $(".studies-graphist").removeClass("show");
            $(".choix4").removeClass("show");
            $(".text-db1").addClass("hidden");
        }
    }
}
class maison2 extends Phaser.Scene{
    constructor(){
         super({
            key: 'maison2'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(320, 175, "pnjBackground").setScale(0.5)
        var level = [
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20]
        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.15)*32, (i)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite(250, 272, 'door')
        pnj = this.add.sprite(450, 274, 'pnj2')
        name = this.add.text(3*32, 11*32, "Motion designer", {fontSize: '32px', fill: '#ffffff'});

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }
        if (cursors.up.isDown && checkOverlap(player, pnj)) {
            $(".text-db2").removeClass("hidden");
        }
        if (cursors.up.isDown && checkOverlap(player, door1)) {
            this.scene.start("niveau2");
            travers = false;
            playerX = 142;
            playerY = 383;
            $(".explications-motionDesigner").addClass("show");
            $(".choix1").addClass("show");
            $(".choix2").addClass("show");
            $(".choix3").addClass("show");
            $(".status-motionDesigner").removeClass("show");
            $(".wage-motionDesigner").removeClass("show");
            $(".studies-motionDesigner").removeClass("show");
            $(".choix4").removeClass("show");
            $(".text-db2").addClass("hidden");
        }    
    }
}
class maison3 extends Phaser.Scene{
    constructor(){
         super({
            key: 'maison3'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(320, 175, "pnjBackground").setScale(0.5)
        var level = [
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20]
        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.15)*32, (i)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite(250, 272, 'door')
        pnj = this.add.sprite(450, 274, 'pnj3')
        name = this.add.text(3*32, 11*32, "UI-UX Designer", {fontSize: '32px', fill: '#ffffff'});

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }
        if (cursors.up.isDown && checkOverlap(player, pnj)) {
            $(".text-db3").removeClass("hidden");
        }
        if (cursors.up.isDown && checkOverlap(player, door1)) {
            this.scene.start("niveau3");
            travers = false;
            playerX = (2+0.5)*32;
            playerY = 17*32;
            $(".explications-UIUXDesigner").addClass("show");
            $(".choix1").addClass("show");
            $(".choix2").addClass("show");
            $(".choix3").addClass("show");
            $(".status-UIUXDesigner").removeClass("show");
            $(".wage-UIUXDesigner").removeClass("show");
            $(".studies-UIUXDesigner").removeClass("show");
            $(".choix4").removeClass("show");
            $(".text-db3").addClass("hidden");
        }    
    }
}
class maison4 extends Phaser.Scene{
    constructor(){
         super({
            key: 'maison4'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(320, 175, "pnjBackground").setScale(0.5)
        var level = [
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20]
        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.15)*32, (i)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite(250, 272, 'door')
        pnj = this.add.sprite(450, 274, 'pnj4')
        name = this.add.text(3*32, 11*32, "Integrateur Web", {fontSize: '32px', fill: '#ffffff'});

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }
        if (cursors.up.isDown && checkOverlap(player, pnj)) {
            $(".text-db4").removeClass("hidden");
        }
        if (cursors.up.isDown && checkOverlap(player, door1)) {
            this.scene.start("niveau4");
            travers = false;
            playerX = 48;
            playerY = 32;
            $(".explications-integrateurWeb").addClass("show");
            $(".choix1").addClass("show");
            $(".choix2").addClass("show");
            $(".choix3").addClass("show");
            $(".status-integrateurWeb").removeClass("show");
            $(".wage-integrateurWeb").removeClass("show");
            $(".studies-integrateurWeb").removeClass("show");
            $(".choix4").removeClass("show");
            $(".text-db4").addClass("hidden");
        }    
    }
}
class maison5 extends Phaser.Scene{
    constructor(){
         super({
            key: 'maison5'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(320, 175, "pnjBackground").setScale(0.5)
        var level = [
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20]
        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.15)*32, (i)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite(250, 272, 'door')
        pnj = this.add.sprite(450, 274, 'pnj5')
        name = this.add.text(3*32, 11*32, "Developpeur Web", {fontSize: '32px', fill: '#ffffff'});

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }
        if (cursors.up.isDown && checkOverlap(player, pnj)) {
            $(".text-db5").removeClass("hidden");
        }
        if (cursors.up.isDown && checkOverlap(player, door1)) {
            this.scene.start("niveau5");
            travers = false;
            playerX = (28+0.5)*32;
            playerY = 18*32;
            $(".explications-developpeurWeb").addClass("show");
            $(".choix1").addClass("show");
            $(".choix2").addClass("show");
            $(".choix3").addClass("show");
            $(".status-developpeurWeb").removeClass("show");
            $(".wage-developpeurWeb").removeClass("show");
            $(".studies-developpeurWeb").removeClass("show");
            $(".choix4").removeClass("show");
            $(".text-db5").addClass("hidden");
        }    
    }
}
class maison6 extends Phaser.Scene{
    constructor(){
         super({
            key: 'maison6'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(320, 175, "pnjBackground").setScale(0.5)
        var level = [
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20]
        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.15)*32, (i)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite(250, 272, 'door')
        pnj = this.add.sprite(450, 274, 'pnj6')
        name = this.add.text(3*32, 11*32, "Web master", {fontSize: '32px', fill: '#ffffff'});

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }
        if (cursors.up.isDown && checkOverlap(player, pnj)) {
            $(".text-db6").removeClass("hidden");
        }
        if (cursors.up.isDown && checkOverlap(player, door1)) {
            this.scene.start("niveau6");
            travers = false;
            playerX = (29+0.5)*32;
            playerY = 16*32;
            $(".explications-webMaster").addClass("show");
            $(".choix1").addClass("show");
            $(".choix2").addClass("show");
            $(".choix3").addClass("show");
            $(".status-webMaster").removeClass("show");
            $(".wage-webMaster").removeClass("show");
            $(".studies-webMaster").removeClass("show");
            $(".choix4").removeClass("show");
            $(".text-db6").addClass("hidden");
        }    
    }
}
class maison7 extends Phaser.Scene{
    constructor(){
         super({
            key: 'maison7'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(320, 175, "pnjBackground").setScale(0.5)
        var level = [
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20]
        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.15)*32, (i)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite(250, 272, 'door')
        pnj = this.add.sprite(450, 274, 'pnj7')
        name = this.add.text(3*32, 11*32, "Architect réseau", {fontSize: '32px', fill: '#ffffff'});

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }
        if (cursors.up.isDown && checkOverlap(player, pnj)) {
            $(".text-db7").removeClass("hidden");
        }
        if (cursors.up.isDown && checkOverlap(player, door1)) {
            this.scene.start("niveau7");
            travers = false;
            playerX = (29+0.5)*32;
            playerY = 11*32;
            $(".explications-architectReseau").addClass("show");
            $(".choix1").addClass("show");
            $(".choix2").addClass("show");
            $(".choix3").addClass("show");
            $(".status-architectReseau").removeClass("show");
            $(".wage-architectReseau").removeClass("show");
            $(".studies-architectReseau").removeClass("show");
            $(".choix4").removeClass("show");
            $(".text-db7").addClass("hidden");
        }    
    }
}
class maison8 extends Phaser.Scene{
    constructor(){
         super({
            key: 'maison8'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(320, 175, "pnjBackground").setScale(0.5)
        var level = [
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20]
        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.15)*32, (i)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite(250, 272, 'door')
        pnj = this.add.sprite(450, 274, 'pnj8')
        name = this.add.text(3*32, 11*32, "Chef Projet", {fontSize: '32px', fill: '#ffffff'});
        

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }
        if (cursors.up.isDown && checkOverlap(player, pnj)) {
            $(".text-db8").removeClass("hidden");
        }
        if (cursors.up.isDown && checkOverlap(player, door1)) {
            this.scene.start("niveau8");
            travers = false;
            playerX = (13+0.5)*32;
            playerY = 14*32;
            $(".explications-chefProjet").addClass("show");
            $(".choix1").addClass("show");
            $(".choix2").addClass("show");
            $(".choix3").addClass("show");
            $(".status-chefProjet").removeClass("show");
            $(".wage-chefProjet").removeClass("show");
            $(".studies-chefProjet").removeClass("show");
            $(".choix4").removeClass("show");
            $(".text-db8").addClass("hidden");
        }    
    }
}
class maison9 extends Phaser.Scene{
    constructor(){
         super({
            key: 'maison9'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(320, 175, "pnjBackground").setScale(0.5)
        var level = [
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20]
        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.15)*32, (i)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite(250, 272, 'door')
        pnj = this.add.sprite(450, 274, 'pnj9')
        name = this.add.text(3*32, 11*32, "Community manager", {fontSize: '32px', fill: '#ffffff'});

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }
        if (cursors.up.isDown && checkOverlap(player, pnj)) {
            $(".text-db9").removeClass("hidden");
        }
        if (cursors.up.isDown && checkOverlap(player, door1)) {
            this.scene.start("niveau9");
            travers = false;
            playerX = (3+0.5)*32;
            playerY = 17*32;
            $(".explications-communityManager").addClass("show");
            $(".choix1").addClass("show");
            $(".choix2").addClass("show");
            $(".choix3").addClass("show");
            $(".status-communityManager").removeClass("show");
            $(".wage-communityManager").removeClass("show");
            $(".studies-communityManager").removeClass("show");
            $(".choix4").removeClass("show");
            $(".text-db9").addClass("hidden");
        }    
    }
}
class maison10 extends Phaser.Scene{
    constructor(){
         super({
            key: 'maison10'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(320, 175, "pnjBackground").setScale(0.5)
        var level = [
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20]
        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.15)*32, (i)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite(250, 272, 'door')
        pnj = this.add.sprite(450, 274, 'pnj10')
        name = this.add.text(3*32, 11*32, "Web marketeur", {fontSize: '32px', fill: '#ffffff'});
        

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }
        if (cursors.up.isDown && checkOverlap(player, pnj)) {
            $(".text-db10").removeClass("hidden");
        }
        if (cursors.up.isDown && checkOverlap(player, door1)) {
            this.scene.start("niveau10");
            travers = false;
            playerX = (17+0.5)*32;
            playerY = 17*32-10;
            $(".explications-webMarketeur").addClass("show");
            $(".choix1").addClass("show");
            $(".choix2").addClass("show");
            $(".choix3").addClass("show");
            $(".status-webMarketeur").removeClass("show");
            $(".wage-webMarketeur").removeClass("show");
            $(".studies-webMarketeur").removeClass("show");
            $(".choix4").removeClass("show");
            $(".text-db10").addClass("hidden");
        }    
    }
}
class maison11 extends Phaser.Scene{
    constructor(){
         super({
            key: 'maison11'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(320, 175, "pnjBackground").setScale(0.5)
        var level = [
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20]
        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.15)*32, (i)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite(250, 272, 'door')
        pnj = this.add.sprite(450, 274, 'pnj11')
        name = this.add.text(3*32, 11*32, "Réalisateur multimedia", {fontSize: '32px', fill: '#ffffff'});
        

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }
        if (cursors.up.isDown && checkOverlap(player, pnj)) {
            $(".text-db11").removeClass("hidden");
        }
        if (cursors.up.isDown && checkOverlap(player, door1)) {
            this.scene.start("niveau11");
            travers = false;
            playerX = (29+0.5)*32;
            playerY = 5*32-10;
            $(".explications-realisateurMultimedia").addClass("show");
            $(".choix1").addClass("show");
            $(".choix2").addClass("show");
            $(".choix3").addClass("show");
            $(".status-realisateurMultimedia").removeClass("show");
            $(".wage-realisateurMultimedia").removeClass("show");
            $(".studies-realisateurMultimedia").removeClass("show");
            $(".choix4").removeClass("show");
            $(".text-db11").addClass("hidden");
        }    
    }
}
class maison12 extends Phaser.Scene{
    constructor(){
         super({
            key: 'maison12'
        });
    }

    create () {

        //init
        through = this.physics.add.staticGroup();
        platforms = this.physics.add.staticGroup();
        spikes = this.physics.add.staticGroup();

        //map
        this.add.image(320, 175, "pnjBackground").setScale(0.5)
        var level = [
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20],
            [20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20]
        ]
        var map = this.make.tilemap({ data: level, tileWidth: 32, tileHeight: 32 });
        var tiles = map.addTilesetImage('game-tiles');
        var layer = map.createStaticLayer(0, tiles, 0, 0);
        var deco = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var carte = this.make.tilemap({ data: deco, tileWidth: 32, tileHeight: 32 });
        var tiles = carte.addTilesetImage('game-deco');
        var layer = carte.createStaticLayer(0, tiles, 0, 0);
        var collid = [
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
        var i = 0
        var j = 0
        while (i <= 19) {
            while (j <= 30) {
                if (collid[i][j] == 1) {
                    through.create((j+0.5)*32, (i)*32, 'coll');
                } else if (collid[i][j] == 2) {
                    platforms.create((j+0.15)*32, (i)*32, 'bloc');
                } else if (collid[i][j] == 3) {
                    spikes.create((j+0.5)*32, (i+0.5)*32, 'bloc');
                } else if (collid[i][j] == 4) {
                    platforms.create(j, (i+0.5)*32, 'wall')
                } else if (collid[i][j] == 5) {
                    platforms.create((j+1)*32, (i+0.5)*32, 'wall')
                }
                j++
            }
        j = 0
        i++
        }

        //doors
        door1 = this.add.sprite(250, 272, 'door')
        pnj = this.add.sprite(450, 274, 'pnj12')
        name = this.add.text(3*32, 11*32, "Vidéaste", {fontSize: '32px', fill: '#ffffff'});

        //player
        player = this.physics.add.sprite(playerX, playerY, 'perso');
        this.physics.add.collider(player, platforms);
        this.physics.add.overlap(player, spikes, Death)
        
        //controls
        cursors = this.input.keyboard.createCursorKeys();
        jumpButton = this.input.keyboard.addKey(32);
    }

    update () {
        if (cursors.left.isDown)  {
            player.setVelocityX(-160);
            if (goingRight == true) {
                goingRight = false;
            }
            if (player.body.touching.down) {
                player.anims.play('left', true);
            }
        }
        else if (cursors.right.isDown) {
            player.setVelocityX(160);
            if (goingRight == false) {
                goingRight = true;
            }
            if (player.body.touching.down) {
                player.anims.play('right', true);
            }
        }
        else  {
            if (goingRight == true && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnright');
            } else if (goingRight == false && player.body.touching.down) {
                player.setVelocityX(0);
                player.anims.play('turnleft');
            } else if (goingRight == true) {
                player.setVelocityX(0);
                player.anims.play('jumpright');
            } else if (goingRight == false) {
                player.setVelocityX(0);
                player.anims.play('jumpleft');
            }
            
        }
        if (jumpButton.isDown && player.body.touching.down) {
            player.setVelocityY(-430);
        }
        if (cursors.down.isDown) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y <= -1) {
            this.physics.world.removeCollider(collide);
            travers = false;
        }
        if (player.body.velocity.y >= 60) {
            if (!cursors.down.isDown) {
                if (travers == false) {
                    collide = this.physics.add.collider(player, through)
                    travers = true;
                }
            }
        }
        if (cursors.up.isDown && checkOverlap(player, pnj)) {
            $(".text-db12").removeClass("hidden");
        }
        if (cursors.up.isDown && checkOverlap(player, door1)) {
            this.scene.start("niveau12");
            travers = false;
            playerX = (13+0.5)*32;
            playerY =  18*32-10;
            $(".explications-videaste").addClass("show");
            $(".choix1").addClass("show");
            $(".choix2").addClass("show");
            $(".choix3").addClass("show");
            $(".status-videaste").removeClass("show");
            $(".wage-videaste").removeClass("show");
            $(".studies-videaste").removeClass("show");
            $(".choix4").removeClass("show");
            $(".text-db12").addClass("hidden");
        }
    }
}


function checkOverlap(spriteA, spriteB) {
   var boundsA = spriteA.getBounds();
    var boundsB = spriteB.getBounds();
    var result = Phaser.Geom.Rectangle.Intersection(boundsA, boundsB);
    return (result.width !=0 || result.height!=0 )
}

function Death() {
    player.x = playerX
    player.y = playerY
    player.setVelocityX(0)
    player.setVelocityY(0)
}
/*
var level = [
            [3,3,20,20,20,20,20,20,20,20,3,0,1,2,3,0,6,0,6,3,3,0,1,2,4,5,5,6,3,0,2],
            [11,19,20,20,20,20,20,20,20,20,19,8,9,10,19,11,0,18,3,11,11,8,9,10,0,6,4,5,18,16,18],
            [19,3,20,20,20,20,20,20,20,0,2,16,17,18,3,19,19,4,18,11,19,16,17,18,11,0,6,3,0,5,2],
            [7,11,20,20,20,20,20,20,20,16,18,4,6,4,17,6,4,5,5,18,4,5,6,7,19,19,4,18,19,3,19],
            [3,11,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,4,17,6],
            [11,19,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,3],
            [8,6,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,19],
            [19,3,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,3],
            [4,18,54,54,54,54,54,55,3,20,20,20,20,20,20,20,20,3,3,4,2,4,5,6,4,6,20,20,20,20,11],
            [3,4,5,6,3,0,6,3,8,6,20,20,7,7,20,20,0,18,16,2,16,6,3,0,1,2,20,20,20,20,19],
            [8,6,0,6,11,19,4,10,11,4,6,20,20,20,20,3,19,3,7,16,6,0,18,8,9,18,20,20,20,20,7],
            [19,3,11,4,18,0,2,11,11,4,2,0,5,6,4,17,6,19,0,6,3,19,7,16,18,20,20,20,20,20,3],
            [4,18,19,20,20,16,18,19,19,7,11,11,0,1,2,0,2,3,11,4,17,6,20,20,20,20,20,20,20,20,11],
            [3,3,20,20,20,20,20,4,6,3,19,11,8,9,10,16,18,11,19,20,20,20,20,20,20,20,20,20,0,2,11],
            [19,11,20,20,20,20,20,20,4,17,6,19,16,17,18,4,5,18,20,20,20,20,20,20,20,20,0,6,16,18,19],
            [3,19,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,19,4,5,6,3],
            [16,6,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,25,26,27,19],
            [0,2,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,28,24,36,3],
            [8,10,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,33,32,35,11],
            [16,18,20,20,4,5,6,4,6,4,6,7,4,5,5,6,4,5,6,4,5,6,4,5,5,5,5,5,5,6,19]
        ]
var deco = [
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,32,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,32,-1,-1,-1,40,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,23,-1,-1,-1,-1,15,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,22,-1,-1,-1],
            [33,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,17,19,15,-1,15,-1,-1,-1,-1,17,-1,-1,41,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,23],
            [-1,-1,-1,-1,-1,-1,20,20,20,20,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,33,-1,-1,-1,-1,20,20,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],
            [-1,40,76,76,76,76,76,76,10,48,-1,-1,-1,-1,-1,-1,48,-1,-1,-1,-1,-1,-1,-1,-1,23,-1,-1,-1,48,-1],
            [-1,-1,15,15,15,15,15,15,-1,-1,48,-1,12,9,-1,48,-1,-1,-1,-1,-1,-1,-1,23,-1,40,-1,-1,-1,48,-1],
            [-1,-1,41,9,-1,-1,-1,-1,-1,-1,-1,48,48,48,48,-1,-1,-1,-1,-1,19,-1,-1,-1,-1,20,-1,-1,-1,48,-1],
            [-1,-1,-1,-1,-1,19,19,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,33,-1,40,20,20,-1,-1,48,-1],
            [-1,-1,-1,48,48,-1,-1,-1,-1,33,-1,-1,-1,-1,-1,23,13,-1,-1,23,-1,-1,20,20,20,20,20,-1,-1,48,-1],
            [-1,-1,48,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,20,20,15,15,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,41,-1,-1,40,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,23,15,20,20,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,48,48,48,-1,-1,-1,-1,48,48,48,-1,-1,-1,-1,-1,-1,-1,-1,20,20,20,20,22],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,20,20,20,-1],
            [19,15,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,20,20,20,-1],
            [-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,48,48,-1,-1,-1,-1,-1,-1,48,48,-1,-1,-1,-1,39,20,20,20,-1],
            [-1,-1,-1,-1,22,-1,-1,23,18,-1,-1,41,-1,-1,-1,-1,14,23,-1,-1,-1,-1,-1,-1,-1,15,17,15,14,15,-1]
        ]*/
</script>
</body>
</html>