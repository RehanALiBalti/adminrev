<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container w-50 my-5">
        <h3>Questions for Students</h3>
        <form action="<?php echo base_url().'Site/adddata' ?>" method="post">
   
            <div class="my-3">
                <label for="fullname" class="form-label">Wie heisst du mit vollem Namen?</label>
                <input type="text" class="form-control" name="fullname" id="fullname" required="required"></input>
            </div>
            <div class="my-3">
                <label for="nickname" class="form-label">Wie ist dein Spitzname?</label>
                <input type="text" class="form-control" name="nickname" id="nickname" required="required"></input>
            </div>
            <div class="my-3">
                <label for="dob" class="form-label">Was ist dein Geburtsdatum?</label>
                <input type="date" class="form-control" name="dob" id="dob" required="required"></input>
            </div>
            <div class="my-3">
                <label for="animal" class="form-label">Als Tier wäre ich ein?.</label>
                <input type="text" class="form-control" name="animal" id="animal" required="required"></input>
            </div>
            <div class="my-3">
                <label for="q5" class="form-label">Was ist dein Berufswunsch?</label>
                <input type="text" class="form-control" name="q5" id="q5" required="required"></input>
            </div>
            <div class="my-3">
                <label for="q6" class="form-label">Wenn ich im Lotto gewinne, werde ich?</label>
                <input type="text" class="form-control" name="q6" id="q6" required="required"></input>
            </div>
            <div class="my-3">
                <label for="q7" class="form-label">Meine bisher grösste Herausforderung war?</label>
                <input type="text" class="form-control" name="q7" id="q7" required="required"></input>
            </div>
            <div class="my-3">
                <label for="q8" class="form-label">Meine Lieblingserinnerung in dieser Klasse?</label>
                <input type="text" class="form-control" name="q8" id="q8" required="required"></input>
            </div>
            <div class="my-3">
                <label for="q9" class="form-label">Ich wünsche meinen Klassenkameraden?</label>
                <input type="text" class="form-control" name="q9" id="q9" required="required"></input>
            </div>
            <div class="my-3">
                <label for="q10" class="form-label">Mein Spruch/Motto/Zitat:</label>
                <textarea class="form-control" name="q10" id="q10" rows="2" required="required"></textarea>
            </div>
             <div class="my-3">
                 <label for="ersterAuswanderer" class="form-label">Erste*r Auswanderer*in:</label>
                 <input type="text" class="form-control" name="ersterAuswanderer" id="ersterAuswanderer" required="required"></input>
               
             </div>
              <div class="my-3">
                  <label for="q10" class="form-label">Labertasche:</label>
                  <input type="text" class="form-control" name="labertasche" id="labertasche" required="required"></input>
                  
              </div>
              <div class="my-3">
                  <label for="q10" class="form-label">Philosoph*in:</label>
                  <input type="text" class="form-control" name="philosoph" id="philosoph" required="required"></input>
                  
              </div>
              <div class="my-3">
                  <label for="q10" class="form-label">Stand Up Comedian:</label>
                  <input type="text" class="form-control" name="comedian" id="comedian" required="required"></input>
                
              </div>
              <div class="my-3">
                  <label for="q10" class="form-label">Träumer*in:</label>
                  <input type="text" class="form-control" name="traumer" id="traumer" required="required"></input>
                  
              </div>
              <div class="my-3">
                  <label for="q10" class="form-label">Minimalist*in:</label>
                  <input type="text" class="form-control" name="minimalist" id="minimalist" required="required"></input>
                
              </div>
              <div class="my-3">
                  <label for="q10" class="form-label">Sportfanatiker*in:</label>
                  <input type="text" class="form-control" name="sportfanatiker" id="sportfanatiker" required="required"></input>
 
              </div>
              <div class="my-3">
                  <label for="q10" class="form-label">Wird später berühmt:</label>
                  <input type="text" class="form-control" name="wird" id="wird" required="required"></input>
              </div>
              <div class="mt-5 text-center">
                  <button type="submit" class="btn btn-primary"  id="submit">Submit</button>
              </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>