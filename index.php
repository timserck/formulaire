<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <title>Je veux ta voiture</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  -->
      <style type="text/css">
         /* Fix alignment issue of label on extra small devices in Bootstrap 3.2 */

.form-group.required legend:after {
  content:" *";
  color:red;
}

form{
    margin-bottom: 20px;
}

.panel{
    display: none;
}

small{

    text-align: center;
}

      </style>
   </head>
   <body>
 
      <div class="container">
         <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
               <header id="header" class="jumbotron">
                  <h1>Je veux ta voiture </h1>
                  <p>Pour faire un tour du monde</p>
               </header>
               <div class="demo-content bg-alt">
                  <form  method="get" action="index.php">
                     <fieldset class="form-group required">                   
                        <legend>Tu me verra plus peandant une année entiere</legend>
                        <label for="q_1_oui" class="radio-inline">
                        <input type="radio" name="question1" id="q_1_oui" value="oui" required  <?php if( isset($_GET['question1'])=='oui'){ echo 'checked="checked"';}?> >oui
                        </label>
                        <label for="q_1_non" class="radio-inline">
                        <input type="radio" name="question1" id="q_1_non" value="non" <?php if(isset($_GET['question1'])=='non'){ echo 'checked="checked"';} ?>>non
                        </label>
                     </fieldset>
                            <fieldset class="form-group required">
                        <legend>Je te ramenerais plein de souvenirs</legend>
                        <label for="q_2_oui" class="radio-inline">
                        <input type="radio" name="question2" id="q_2_oui" value="oui"  required  <?php if( isset($_GET['question2'])=='oui'){ echo 'checked="checked"';} ?> >oui
                        </label>
                        <label for="q_2_non" class="radio-inline">
                        <input type="radio" name="question2" id="q_2_non" value="non" <?php if( isset($_GET['question2'])=='non'){ echo 'checked="checked"';} ?>>non
                        </label>
                     </fieldset>
                          <fieldset class="form-group required">
                        <legend>La voiture est plus toute jeune</legend>
                        <label for="q_3_oui" class="radio-inline">
                        <input type="radio" name="question3" id="q_3_oui" value="oui"  required  <?php if( isset($_GET['question3'])=='oui'){ echo 'checked="checked"';} ?> >oui
                        </label>
                        <label for="q_3_non" class="radio-inline">
                        <input type="radio" name="question3" id="q_3_non" value="non" <?php if( isset($_GET['question3'])=='non'){ echo 'checked="checked"';} ?>>non
                        </label>
                     </fieldset>
                       <fieldset class="form-group required">
                        <legend>Tu pourras achéter la B?X de tes reve</legend>
                        <label for="q_4_oui" class="radio-inline">
                        <input type="radio" name="question4" id="q_4_oui" value="oui"  required <?php if( isset($_GET['question4'])=='oui'){ echo 'checked="checked"';} ?> >oui
                        </label>
                        <label for="q_4_non" class="radio-inline">
                        <input type="radio" name="question4" id="q_4_non" value="non" <?php if( isset($_GET['question4'])=='non'){ echo 'checked="checked"';} ?>>non
                        </label>
                     </fieldset>
                        <fieldset class="form-group required">
                        <legend>Je t'enverrais une carte postale</legend>
                        <label for="q_5_oui" class="radio-inline">
                        <input type="radio" name="question5" id="q_5_oui" value="oui"  required <?php if( isset($_GET['question5'])=='oui'){ echo 'checked="checked"';} ?> >oui
                        </label>
                        <label for="q_5_non" class="radio-inline">
                        <input type="radio" name="question5" id="q_5_non" value="non" <?php if( isset($_GET['question5'])=='non'){ echo 'checked="checked"';} ?>>non
                        </label>
                     </fieldset>
                      <fieldset class="form-group required">
                        <legend>Tu pourra utiliser ma chambre comme salle de musculation</legend>
                        <label for="q_6_oui" class="radio-inline">
                        <input type="radio" name="question6" id="q_6_oui" value="oui"  required <?php if( isset($_GET['question6'])=='oui'){ echo 'checked="checked"';} ?> >oui
                        </label>
                        <label for="q_6_non" class="radio-inline">
                        <input type="radio" name="question6" id="q_6_non" value="non" <?php if( isset($_GET['question6'])=='non'){ echo 'checked="checked"';} ?>>non
                        </label>
                     </fieldset>

                    
                     <button type="submit" class="btn btn-primary">Prete ta voiture</button>

                  </form>

                  <?php
                  function reponse_function($question1,$question2,$question3,$question4,$question5,$question6){

$reponse ="peut_etre";

if ($question1 == "oui") {
  $reponse ="oui";
}

else  {
  $reponse ="non";
  // header('Location: mapage.php/#header');   
}





    if ($reponse == "oui") {
        
        echo "
          <div  style='display:block' class='panel panel-success'>
      <div class='panel-heading'>
        <h3 class='panel-title'>oui</h3>
      </div>
      <div class='panel-body'>
      
       <figure>
       <img src='papimg.jpg' alt='voiture de papa'>
           <figcaption> Biensur mon chou</figcaption>
           
       </figure>
        
      </div>
    </div>
    "; 

    }



   else if ($reponse == "non") {
        
        echo "
          <div  style='display:block' class='panel panel-success'>
      <div class='panel-heading'>
        <h3 class='panel-title'>non</h3>
      </div>
      <div class='panel-body'>
       SAle puck
      </div>
    </div>
    "; 

    }


    else{
        
        echo "
          <div  style='display:block' class='panel panel-success'>
      <div class='panel-heading'>
        <h3 class='panel-title'>peut-etre</h3>
      </div>
      <div class='panel-body'>
        Panel content
        <img src='papimg.jpg' alt='voiture de papa'>
      </div>
    </div>
    "; 

    }


    
}



echo reponse_function(isset($_GET['question1']),isset($_GET['question2']),isset($_GET['question3']),isset($_GET['question4']),isset($_GET['question5']),isset($_GET['question6']));


foreach ($_GET as $key => $value) {
 echo $key." ".$value." ";
};
                   ?>


            </div>
            <div class="col-md-2">
             
            </div>
         </div>
      </div>
 
   </body>

</html>