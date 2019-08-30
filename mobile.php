<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="themes/cust.min.css" />
    <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <style type="text/css">
        body, .ui-header{font-family: 'Corbel', arial !important;}

        #page3, #page4 {
            /* color:aliceblue; */
            /* background: url("images/leaf.jpeg");
            background-repeat:no-repeat;
            background-position:center center;
            background-attachment:scroll; */
            /* background-size:100% 100%; */
        }
        #page2 {
            background: url("images/yellow.jpg") !important;
            background-repeat:no-repeat;
            background-position:center center;
            background-attachment:scroll;
            /* background-size:100% 100%; */
        }

        .obs{
            display: block;
            background-color: rgba(255,255,255,0.2);
            text-align: left;
            padding-left: 10px;
            border: 1px solid white;
        }

        /* .ui-page {
            background: transparent;
        }
        .ui-content{
            background: transparent;
        } */
    </style>

    <script>
        function onSuccess(data, status){
            $("#result").html(data);
        }
        // function onSuccess2(data, status){
        //     $("#titre").html(data);
        // }
        function onError(data, status){
            alert("Le formulaire n'est pas correctement rempli.");
        }

        $(document).ready(function(){
            $("#formsubmit").click(function(){
                var formData = $("#appelAjax").serialize();
                alert(formData);
                $.ajax({
                    type:"POST",
                    url: 'http://localhost/JQueryMobile/connect.php',
                    data: formData,
                    cache: false,
                    success: onSuccess,
                    error: onError
                });                
                // $.ajax({
                //     type:"POST",
                //     url: 'http://localhost/JQueryMobile/form2.php',
                //     data: formData,
                //     cache: false,
                //     success: onSuccess2,
                //     error: onError
                // });
            });

            $(".ui-btn-icon-right").click(function() {
                if ($(".ui-btn-icon-right").hasClass(".ui-icon-minus")){
                    $(".ui-icon-minus").removeClass().addClass(".ui-icon-plus");
                } else {
                    $(".ui-icon-plus").removeClass().addClass(".ui-icon-minus");
                }
                $(".obs").toggle();
            });
        })
    </script>
	<title>JQuery Mobile</title>
</head>

<body>
<!--  ################################################################# 1 -->
<?php
    include ('connect.php');
 ?>
    <div data-role="page" id="page1" data-theme="a">
        <div data-role="header">
            <h1>FlorOnline</h1>
            <div data-role="navbar" data-type="horizontal" data-mini="true">
                <ul class="ui-btn-inner">
                    <li>
                        <a class="ui-btn-text ui-btn-icon-left ui-icon-home" href="#page1" data-transition="slidefade">Home</a>
                    </li>
                    <li>
                        <a class="ui-btn-text ui-btn-icon-left ui-icon-bars" href="#page4" data-transition="slidefade">My observations</a>
                    </li>                    
                    <li>
                        <a class="ui-btn-text ui-btn-icon-left ui-icon-camera" href="#page3" data-transition="slidefade">Add observation</a>
                    </li>
                    <li>
                        <a class="ui-btn-text ui-btn-icon-left ui-icon-gear" href="#page2" data-transition="flow">Settings</a>
                    </li>                  
                </ul>    
            </div>
        </div>
        <div data-role="content">
            <h2>Observations du jour</h2>

            <div mbsc-card class="md-icons" style="width: 100%; margin: auto;">
                <img src="https://img.mobiscroll.com/demos/card_5.png" style="width: 100%;">
                <div class="mbsc-card-content">
                    Explore the azure depths with a stay at the Manta Resort's underwater room.
                </div>
                <div class="mbsc-card-footer">
                    <button class="mbsc-ic mbsc-ic-material_menu mbsc-btn-flat" data-mini="true" style="width: 23%; display: inline">Details</button>
                    <button class="mbsc-ic mbsc-ic-star2 mbsc-btn-flat" data-mini="true" style="width: 20%; display: inline">Vote</button>
                </div>
            </div>
            <div class="ui-corner-all custom-corners" style="text-align:center;">
                <div class="ui-bar ui-bar-a ui-icon-minus ui-btn-icon-right">
                    <h3>Nom</h3>
                </div>
                <div class="ui-body ui-body-a obs" style="color:  #212f3d;">
                    <div style="width: 100px; height: 100px; overflow:hidden; margin:0;border-radius: 100px;">
                        <img src="images/fleur.jpg" style="height: 100%;">
                    </div>
                    <p> Nom: flora florae </p>
                    <p> Date de l'observation : 12/03/2018 </p>
                </div>
            </div>
        </div>
        <div data-role="footer" data-position="fixed">
            <h2>FlorOnline</h2>
        </div>
    </div>
    <!--  ################################################################# 2 -->
    <div data-role="page" id="page2" data-theme="b">
        <div data-role="header">
            <h1>FlorOnline</h1>
            <div data-role="navbar" class="ui-shadow ui-btn-up-c">
                <ul class="ui-btn-inner">
                    <li>
                        <a class="ui-btn-text ui-btn-icon-left ui-icon-home" href="#page1" data-transition="slidefade">Home</a>
                    </li>
                    <li>
                        <a class="ui-btn-text ui-btn-icon-left ui-icon-bars" href="#page4" data-transition="slidefade">My observations</a>
                    </li>                    
                    <li>
                        <a class="ui-btn-text ui-btn-icon-left ui-icon-camera" href="#page3" data-transition="slidefade">Add observation</a>
                    </li>
                    <li>
                        <a class="ui-btn-text ui-btn-icon-left ui-icon-gear" href="#page2" data-transition="flow">Settings</a>
                    </li>
                </ul>  
            </div>
        </div>     

        <div data-role="content">
            <h2>Settings</h2>
            <label for="slider-fill">Stored image resolution (Mo)</label>
            <input type="range" name="slider-fill" id="slider-fill" value="60" min="0" max="100" step="10" data-highlight="true">
            <br>
            <label for="slider-flip-m">Share your observations with community:</label>
            <select name="slider-flip-m" id="slider-flip-m" data-role="slider" data-mini="true">
                <option value="off">No</option>
                <option value="on" selected="">Yes</option>
            </select>

        </div>
        <div data-role="footer" data-position="fixed">
            <h2>FlorOnline</h2>
        </div>
    </div>
<!--  ################################################################# 3 -->
    <div data-role="page" id="page3" data-theme="a">
        <div data-role="header">
            <h1>FlorOnline</h1>
            <div data-role="navbar" data-type="horizontal" data-mini="true">
                <ul class="ui-btn-inner">
                    <li>
                        <a class="ui-btn-text ui-btn-icon-left ui-icon-home" href="#page1" data-transition="slidefade">Home</a>
                    </li>
                    <li>
                        <a class="ui-btn-text ui-btn-icon-left ui-icon-bars" href="#page4" data-transition="slidefade">My observations</a>
                    </li>
                    <li>
                        <a class="ui-btn-text ui-btn-icon-left ui-icon-camera" href="#page3" data-transition="slidefade">Add observation</a>
                    </li>
                    <li>
                        <a class="ui-btn-text ui-btn-icon-left ui-icon-gear" href="#page2" data-transition="flow">Settings</a>
                    </li>                  
                </ul>    
            </div>
        </div>

        <div data-role="content">
            <h2>Nouvelle observation</h2>
            
            <form id="appelAjax" method="POST" action="create.php">
                <!-- <div style="max-width:400px;">
                <label for="file">File:</label>
                <input type="file" name="file" id="file" value="">
                </div>-->
                <div class="ui-field-contain">
                    <label for="nom" style="width: 15%; margin: 0;">Nom :</label>
                    <input type="text" name="nom" id="nom" placeholder="Genre espèce">
                </div>
                <br>
                <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
                    <legend>Partie de la plante :</legend>
                        <input type="radio" name="organ" id="radio-choice-a" value="Fleur" checked="checked">
                            <label for="radio-choice-a">Fleur</label>
                        <input type="radio" name="organ" id="radio-choice-b" value="Feuille">
                            <label for="radio-choice-b">Feuille</label>
                        <input type="radio" name="organ" id="radio-choice-c" value="Fruit">
                            <label for="radio-choice-c">Fruit</label>
                        <input type="radio" name="organ" id="radio-choice-d" value="Ensemble">
                            <label for="radio-choice-d">Ensemble</label>
                </fieldset>
                <br>
                <!-- <div class="ui-field-contain">
                    <label for="date" style="width: 15%; margin: 0;">Date :</label>
                    <input type="date" name="date" id="date">
                </div> -->

                <br>
                    <label for="partage">Share your observations with community:</label>
                    <select name="partage" id="partage" data-role="slider" data-mini="true">
                        <option value="no">No</option>
                        <option value="yes" selected="">Yes</option>
                    </select>

                <div style="text-align: center; margin:auto;">
                    <a href="#page4" type="submit" data-role="button" class="ui-btn ui-shadow ui-btn-corner-all ui-btn-icon-left ui-icon-check" id="formsubmit" style="width: 60px;" data-mini="true">Save</a>
                </div>
            </form>
        </div>

        <div data-role="footer" data-position="fixed">
            <h2>FlorOnline</h2>
        </div>
    </div>
<!--  ################################################################# 4 -->
    <div data-role="page" id="page4" data-theme="a">
        <div data-role="header">
            <h1>FlorOnline</h1>
            <div data-role="navbar" data-type="horizontal" data-mini="true">
                <ul class="ui-btn-inner">
                    <li>
                        <a class="ui-btn-text ui-btn-icon-left ui-icon-home" href="#page1" data-transition="slidefade">Home</a>
                    </li>
                    <li>
                        <a class="ui-btn-text ui-btn-icon-left ui-icon-bars" href="#page4" data-transition="slidefade">My observations</a>
                    </li>                    
                    <li>
                        <a class="ui-btn-text ui-btn-icon-left ui-icon-camera" href="#page3" data-transition="slidefade">Add observation</a>
                    </li>
                    <li>
                        <a class="ui-btn-text ui-btn-icon-left ui-icon-gear" href="#page2" data-transition="flow">Settings</a>
                    </li>                  
                </ul>    
            </div>
        </div>

        <?php $request = $dbcon->prepare("SELECT * FROM observation");
            $request->execute();
        ?>
        <div data-role="content">
            <h2>Mes Observations</h2>
            <?php 
                while($row=$request->fetch(PDO::FETCH_ASSOC)){ //row est un tableau
                extract($row);
            ?>
                <div class="ui-corner-all custom-corners" style="text-align:center;">
                    <div class="ui-bar ui-bar-a ui-icon-minus ui-btn-icon-right">
                        <h3><?php echo($nom)?></h3>
                    </div>
                    <div class="ui-body ui-body-a obs">
                        <div style="width: 100px; height: 100px; overflow:hidden; margin:0;border-radius: 100px;">
                            <img src="images/pink.jpg" style="width: 100%;">
                        </div>
                        <p>
                            <?php
                                echo("Nom : ".$nom."<br>Date de l'observation : Pas encore supportée <br>Légende photo: ".$organ."<br> Partage avec la communauté : ".$partage.".<br>");
                            ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
        </div>
        <div data-role="footer" data-position="fixed">
            <h2>FlorOnline</h2>
        </div>
    </div>
</body>
</html>