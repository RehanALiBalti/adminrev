<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">



</head>

<body>
    <?php include('includes/navigation.php'); ?>


<!-- Content   offers -->
<div class="main">
  
    <div class="containe mb-5">
        <br>
    <h2 class="mb-4">Add New Stories</h2>


<?php include('includes/alert-msgs.php'); ?>        
<!--  <form id="fileUploadForm" action="<?php echo base_url().'admin/addstorydata' ?>" method="post" enctype="multipart/form-data">-->
<!--    <div class="row my-5">-->
        <!-- First Column -->
<!--            <div class="col-6">-->
<!--                <div class="form-group">-->
<!--                <label class="label-ls" for="client">Story Type:</label>-->
<!--                <select class="form-control input-ls" name="story_type" id="story_type" required>-->
<!--                    <option value="carGarage">Car Garage</option>-->
<!--                    <option value="carModificationShop">Car Modification/Tuning Shop</option>-->
<!--                    <option value="carClub">Car Club</option>-->
<!--                    <option value="motorbikeEnthusiast">Motorbike Enthusiast</option>-->
<!--                    <option value="automotivePhotographerast">Automotive Photographer</option>-->
<!--                </select>-->
<!--            </div>-->
<!--            </div>-->
<!--            <div class="col-6">-->
<!--                <div class="form-group">-->
<!--                <label class="label-ls" for="make">Make:</label>-->
<!--                <select class="form-control input-ls" id="make" name="make" required>-->
<!--                    <option value="">Loading...</option>-->
<!--                </select>-->
<!--            </div>-->
<!--            </div> -->
<!--            <div class="col-6">-->
<!--                <div class="form-group" id="model-container">-->
<!--                <label class="label-ls" for="model">Select Model:</label>-->
<!--                <select class="form-control input-ls" id="model" name="model" required>-->
<!--                    <option value="">Select Model</option>-->
<!--                </select>-->
<!--            </div>-->
<!--            </div>-->
<!--            <div class="col-6">-->
<!--                <div class="form-group" id="generation-container">-->
<!--                <label class="label-ls" for="generation">Select Production Year Generation:</label>-->
<!--                <select class="form-control input-ls" id="generation" name="year" required>-->
<!--                    <option value="">Select Generation</option>-->
<!--                </select>-->
<!--            </div>-->
<!--            </div>-->
<!--            <div class="col-12">-->
<!--                <div class="form-group">-->
<!--                <label class="label-ls" for="story">What’s the story behind your car:</label>-->
<!--                <input type="text" name="story" class="form-control input-ls" required placeholder="Write here">-->
<!--            </div>-->
<!--            </div>-->
<!--             <div class="col-12">-->
<!--                <div class="form-group">-->
<!--                <label class="label-ls" for="modifications">Any awesome modifications or unique features you can share:</label>-->
<!--                <input type="text" name="modifications" class="form-control input-ls" required placeholder="Write here">-->
<!--            </div>-->
<!--            </div>-->
<!--             <div class="col-12">-->
<!--                <div class="form-group">-->
<!--                <label class="label-ls" for="memorable">Tell us the wildest or most unforgettable moment you’ve had with your car:</label>-->
<!--                <input type="text" name="memorable" class="form-control input-ls" required placeholder="Write here">-->
<!--            </div>-->
<!--            </div>-->
<!--             <div class="col-12">-->
<!--            <div class="form-group">-->
<!--                <label class="label-ls" for="advice">What advice would you give to someone starting their journey as a car enthusiast:</label>-->
<!--                <input type="text" name="advice" class="form-control input-ls" required placeholder="Write here">-->
<!--            </div>-->
<!--            </div>-->
<!--             <div class="col-6">-->
<!--                 <div class="form-group">-->
<!--                <label class="label-ls" for="story_name">What would your car story title be:</label>-->
<!--                <input type="text" name="story_name" class="form-control input-ls" required placeholder="Write here">-->
<!--            </div>-->
<!--            </div>-->
<!--             <div class="col-6">-->
<!--                 <div class="form-group">-->
<!--                <label class="label-ls" for="social_media">Add Instagram link:</label>-->
<!--                <input type="text" name="social_media" class="form-control input-ls" required placeholder="Write here">-->
<!--            </div>-->
<!--            </div>-->
<!--            <div class="col-12">-->
<!--               <div class="form-group">-->
<!--                    <label for="files">Upload Files (Max 8 files):</label>-->
<!--                    <input type="file" name="files[]" id="fileInput" class="form-control" multiple required>-->
<!--                    <small id="fileLimitError" class="text-danger" style="display:none;">You can select up to 8 files only.</small>-->
<!--                </div>-->
<!--            </div>-->
<!--    </div>-->


    <!-- Submit Button -->
<!--    <div class="row">-->
<!--        <div class="col-12 d-flex justify-content-end">-->
<!--            <button class="btn btn-success" id="submitButton" type="submit">Save Story</button>-->
<!--        </div>-->
<!--    </div>-->
<!--</form>-->
<form id="fileUploadForm" action="<?php echo base_url().'admin/addstorydata' ?>" method="post" enctype="multipart/form-data">
    <div class="row my-5">
        <!-- Story Type Selection -->
        <div class="col-12">
            <div class="form-group">
                <label class="label-ls" for="client">Story Type:</label>
                <select class="form-control input-ls" name="story_type" id="story_type" required>
                    <option value="carEnthusiast">Car Enthusiast</option>
                    <option value="carGarage">Car Garage</option>
                    <option value="carModificationShop">Car Modification/Tuning Shop</option>
                    <option value="carClub">Car Club</option>
                    <option value="motorbikeEnthusiast">Motorbike Enthusiast</option>
                    <option value="automotivePhotographerast">Automotive Photographer</option>
                </select>
            </div>
        </div>

        <!-- Conditional Fields -->
        <div class="col-4" id="make-container">
            <div class="form-group">
                <label class="label-ls" for="make">Make:</label>
                <select class="form-control input-ls" id="make" name="make">
                    <option value="">Loading...</option>
                </select>
            </div>
        </div>

        <div class="col-4" id="model-container">
            <div class="form-group">
                <label class="label-ls" for="model">Select Model:</label>
                <select class="form-control input-ls" id="model" name="model">
                    <option value="">Select Model</option>
                </select>
            </div>
        </div>

        <div class="col-4" id="generation-container">
            <div class="form-group">
                <label class="label-ls" for="generation">Select Production Year Generation:</label>
                <select class="form-control input-ls" id="generation" name="year">
                    <option value="">Select Generation</option>
                </select>
            </div>
        </div>

        <div class="col-6 d-none" id="country-container">
            <div class="form-group">
                <label class="label-ls" for="country">Country:</label>
                      <select id="country" name="country" class="form-select form-control form-input filter-select"
                    onchange="handleCountryChange(this)">
                    <option selected value="">Country</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Antigua and Barbuda">
                      Antigua and Barbuda
                    </option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">
                      Bosnia and Herzegovina
                    </option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cabo Verde">Cabo Verde</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Central African Republic">
                      Central African Republic
                    </option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">
                      Dominican Republic
                    </option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Eswatini">Eswatini</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Greece">Greece</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea, North">Korea, North</option>
                    <option value="Korea, South">Korea, South</option>
                    <option value="Kosovo">Kosovo</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Laos">Laos</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia">Micronesia</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="North Macedonia">North Macedonia</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Romania">Romania</option>
                    <option value="Russia">Russia</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Kitts and Nevis">
                      Saint Kitts and Nevis
                    </option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Vincent and the Grenadines">
                      Saint Vincent and the Grenadines
                    </option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">
                      Sao Tome and Principe
                    </option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Sudan">South Sudan</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syria">Syria</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Timor-Leste">Timor-Leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">
                      Trinidad and Tobago
                    </option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">
                      United Arab Emirates
                    </option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Vatican City">Vatican City</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                  </select>
            </div>
        </div>

        <div class="col-6 d-none" id="city-container">
            <div class="form-group">
                <label class="label-ls" for="city">City:</label>
               
<select id="city" name="city" class="form-select form-control form-input filter-select">
    <option selected value="">City</option>
    <!-- Cities will be populated here based on the selected country -->
</select>
            </div>
        </div>

           <div class="col-12">
                <div class="form-group">
                    <label class="label-ls" for="story" id="label-text">What’s the story behind your car?</label>
                    <input type="text" name="story" class="form-control input-ls" placeholder="Write here">
                </div>
            </div>
            <div class="col-12">
               <div class="form-group">
               <label class="label-ls" for="story_name" id="label-text1">What would your car story title be?</label>
               <input type="text" name="story_name" class="form-control input-ls" required placeholder="Write here">
               </div>
            </div>
            
        <!-- Car Enthusiast Specific Fields -->
        <div id="car-enthusiast-fields">
           
        
            <div class="col-12">
                <div class="form-group">
                    <label class="label-ls" for="modifications">Any awesome modifications or unique features you can share?</label>
                    <input type="text" name="modifications" class="form-control input-ls" placeholder="Write here">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="label-ls" for="memorable">Tell us the wildest or most unforgettable moment you’ve had with your car?</label>
                    <input type="text" name="memorable" class="form-control input-ls" placeholder="Write here">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="label-ls" for="advice">What advice would you give to someone starting their journey as a car enthusiast?</label>
                    <input type="text" name="advice" class="form-control input-ls" placeholder="Write here">
                </div>
            </div>
        </div>

        <!-- Car Garage Specific Fields -->
        <div id="car-garage-fields" class="d-none">
           <!--
            <div class="col-12">
                <div class="form-group">
                    <label class="label-ls" for="garage_story" id="label-text">Tell us your Garage story & how it all started?</label>
                    <input type="text" name="story" class="form-control input-ls" placeholder="Write here">
                </div>
            </div>
            -->
         
            <div class="col-12">
                <div class="form-group">
                    <label class="label-ls" for="adventure_story">Any unforgettable memory, event, or story you can share with us?</label>
                    <input type="text" name="adventure_story" class="form-control input-ls" placeholder="Write here">
                </div>
            </div>
        </div>

         <div class="col-12">
              <div class="form-group">
              <label class="label-ls" for="social_media">Add Instagram link:</label>
               <input type="text" name="social_media" class="form-control input-ls" required placeholder="Write here">
                </div>
        </div>        
            <div class="col-12">
               <div class="form-group">
                    <label for="files">Upload Files (Max 8 files):</label>
                    <input type="file" name="files[]" id="fileInput" class="form-control" multiple required>
                    <small id="fileLimitError" class="text-danger" style="display:none;">You can select up to 8 files only.</small>
                </div>
            </div>
    

    <!-- Submit Button -->
    <div class="col-12">
        <div class="col-12 d-flex justify-content-end">
            <button class="btn btn-success" id="submitButton" type="submit">Save Story</button>
        </div>
    </div>
</form>
<!-- Bootstrap Modals -->
<div class="modal fade" id="confirmCropModal" tabindex="-1" role="dialog" aria-labelledby="confirmCropModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmCropModalLabel">Do you want to crop this image?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="tempImage" src="" alt="Image for cropping" style="width: 100%;">
                <div class="mt-3 text-center">
                    <button id="yesButton" class="btn btn-primary">Yes</button>
                    <button id="noButton" class="btn btn-secondary">No</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="cropModal" tabindex="-1" role="dialog" aria-labelledby="cropModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cropModalLabel">Crop Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="cropperImage" src="" alt="Image for cropping" style="max-width: 100%;">
                <div class="mt-3 text-center">
                    <button id="cropButton" class="btn btn-primary">Crop and Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const fileInput = document.getElementById("fileInput");
    const fileLimitError = document.getElementById("fileLimitError");
    const confirmCropModal = new bootstrap.Modal(document.getElementById('confirmCropModal'));
    const cropModal = new bootstrap.Modal(document.getElementById('cropModal'));
    const tempImage = document.getElementById("tempImage");
    const cropperImage = document.getElementById("cropperImage");
    const imagePreview = document.getElementById("imagePreview");
    const imageNameDisplay = document.getElementById("images-name"); // Display for image names
    let cropper;
    let files = [];
    let croppingConfirmed = false;

    fileInput.addEventListener("change", function () {
        const newFiles = Array.from(fileInput.files);

        // Check if more than 8 files are selected
        if (files.length + newFiles.length > 8) {
            fileLimitError.style.display = "block";
            fileInput.value = ""; // Clear the input
        } else {
            fileLimitError.style.display = "none";
            files = [...files, ...newFiles]; // Add new files to the existing list
            updateImagePreview();
        }
    });

    function updateImagePreview() {
        imagePreview.innerHTML = ""; // Clear existing preview
        imageNameDisplay.innerHTML = ""; // Clear existing names
        files.forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function (e) {
                const imgWrapper = document.createElement("div");
                imgWrapper.style.position = "relative";
                imgWrapper.style.width = "100px";
                imgWrapper.style.height = "100px";

                const img = document.createElement("img");
                img.src = e.target.result;
                img.style.width = "100%";
                img.style.height = "100%";
                img.style.objectFit = "cover";
                imgWrapper.appendChild(img);

                if (file.cropped) {
                    const cropIndicator = document.createElement("div");
                    cropIndicator.style.position = "absolute";
                    cropIndicator.style.top = "0";
                    cropIndicator.style.right = "0";
                    cropIndicator.style.backgroundColor = "rgba(255, 0, 0, 0.7)";
                    cropIndicator.style.color = "#fff";
                    cropIndicator.style.padding = "2px 5px";
                    cropIndicator.style.fontSize = "12px";
                    cropIndicator.innerText = "CROPPED";
                    imgWrapper.appendChild(cropIndicator);
                }

                imagePreview.appendChild(imgWrapper);

                // Show the image name below the preview
                const fileNameDisplay = document.createElement("div");
                fileNameDisplay.textContent = file.name;
                imageNameDisplay.appendChild(fileNameDisplay);
            };
            reader.readAsDataURL(file);

            if (!file.cropped) {
                tempImage.src = URL.createObjectURL(file);
                confirmCropModal.show();
                document.getElementById("yesButton").onclick = function () {
                    croppingConfirmed = true;
                    confirmCropModal.hide();
                    cropModal.show();

                    cropperImage.src = URL.createObjectURL(file);
                    if (cropper) {
                        cropper.destroy();
                    }
                    cropper = new Cropper(cropperImage, {
                        aspectRatio: 1 / 1,
                        viewMode: 2,
                        autoCropArea: 0.5
                    });

                    document.getElementById("cropButton").onclick = function () {
                        const croppedCanvas = cropper.getCroppedCanvas();
                        file.cropped = true; // Mark the file as cropped
                        file.croppedDataUrl = croppedCanvas.toDataURL(); // Store cropped image data
                        cropModal.hide();
                        croppingConfirmed = false; // Reset cropping confirmation state
                        updateImagePreview();
                    };
                };

                document.getElementById("noButton").onclick = function () {
                    croppingConfirmed = false;
                    confirmCropModal.hide();
                    file.cropped = false; // Mark the file as uncropped
                    updateImagePreview();
                };
            }
        });
    }
});
</script>







<script>
    document.getElementById('story_type').addEventListener('change', function () {
        const storyType = this.value;
console.log(storyType)
    const labels = {
        'carGarage': 'Tell us your Garage story & how it all started?',
        'carClub': 'Tell us your Club story & how it all started?',
        'motorbikeEnthusiast': 'Tell us your Motor Bike story & how it all started?',
        'automotivePhotographerast': 'Tell us your Automotive Photography story & how it all started?',
        'carModificationShop': 'Tell us your shop story & how it all started?',
        'carEnthusiast':'What’s the story behind your car?'
    };
    const labels1={
      'carGarage': 'What is the name of your story that you would like to choose?',
        'carClub': 'What is the name of your story that you would like to choose?',
        'motorbikeEnthusiast': 'What is the name of your story that you would like to choose?',
        'automotivePhotographerast': 'What is the name of your story that you would like to choose?',
        'carModificationShop': 'What is the name of your story that you would like to choose?',
        'carEnthusiast':'What would your car story title be?'   
    }
    
    document.getElementById('label-text').innerText = labels[storyType] || 'dd';
     document.getElementById('label-text1').innerText = labels1[storyType] || 'dd';

        // Common elements
        const makeContainer = document.getElementById('make-container');
        const modelContainer = document.getElementById('model-container');
        const generationContainer = document.getElementById('generation-container');
        const countryContainer = document.getElementById('country-container');
        const cityContainer = document.getElementById('city-container');

        const carEnthusiastFields = document.getElementById('car-enthusiast-fields');
        const carGarageFields = document.getElementById('car-garage-fields');

        // Reset visibility
        makeContainer.classList.add('d-none');
        modelContainer.classList.add('d-none');
        generationContainer.classList.add('d-none');
        countryContainer.classList.add('d-none');
        cityContainer.classList.add('d-none');

        carEnthusiastFields.classList.add('d-none');
        carGarageFields.classList.add('d-none');

        if (storyType === 'carEnthusiast') {
            makeContainer.classList.remove('d-none');
            modelContainer.classList.remove('d-none');
            generationContainer.classList.remove('d-none');
            carEnthusiastFields.classList.remove('d-none');
        } else {
            countryContainer.classList.remove('d-none');
            cityContainer.classList.remove('d-none');
            carGarageFields.classList.remove('d-none');
        }
    });
</script>

    </div>
    
   


</div>





    <?php include('includes/footer.php'); ?>
    <?php include('includes/bottom_links.php'); ?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const makeSelect = document.getElementById('make');
    const modelContainer = document.getElementById('model-container');
    const modelSelect = document.getElementById('model');
    const generationContainer = document.getElementById('generation-container');
    const generationSelect = document.getElementById('generation');

    // Fetch Makes
    fetch('https://king-prawn-app-3rw3o.ondigitalocean.app/api/cars')
        .then(response => response.json())
        .then(data => {
            makeSelect.innerHTML = '<option value="">Select Make</option>';
            data.forEach(car => {
                const option = document.createElement('option');
                option.value = car.make;
                option.textContent = car.make;
                makeSelect.appendChild(option);
            });
        })
        .catch(error => {
            console.error("Error fetching makes:", error);
            makeSelect.innerHTML = '<option value="">Failed to load makes</option>';
        });

    // Fetch Models on Make Selection
    makeSelect.addEventListener('change', function () {
        const selectedMake = this.value;
        if (selectedMake) {
            fetch(`https://king-prawn-app-3rw3o.ondigitalocean.app/api/cars/models?make=${selectedMake}`)
                .then(response => response.json())
                .then(data => {
    //                modelContainer.style.display = 'block';
                    modelSelect.innerHTML = '<option value="">Select Model</option>';
                    data.forEach(model => {
                        const option = document.createElement('option');
                        option.value = model.model;
                        option.textContent = model.model;
                        modelSelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error("Error fetching models:", error);
                    modelSelect.innerHTML = '<option value="">Failed to load models</option>';
                });
        } else {
  //          modelContainer.style.display = 'none';
//            generationContainer.style.display = 'none';
        }
    });

    // Fetch Generations on Model Selection
    modelSelect.addEventListener('change', function () {
        const selectedMake = makeSelect.value;
        const selectedModel = this.value;
        console.log(selectedMake,selectedModel);        
        
        if (selectedMake && selectedModel) {
            fetch(`https://king-prawn-app-3rw3o.ondigitalocean.app/api/cars/generations?make=${selectedMake}&model=${selectedModel}`)
                .then(response => response.json())
                .then(data => {
                    console.log("output",data);
//                    generationContainer.style.display = 'block';
                    generationSelect.innerHTML = '<option value="">Select Generation</option>';
                    data.forEach(generation => {
                        const option = document.createElement('option');
                        option.value = generation.production_years;
                        option.textContent = generation.production_years;
                        generationSelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error("Error fetching generations:", error);
                    generationSelect.innerHTML = '<option value="">Failed to load generations</option>';
                });
        } else {
  //          generationContainer.style.display = 'none';
        }
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const fileInput = document.getElementById("fileInput");
    const fileLimitError = document.getElementById("fileLimitError");
    const submitButton = document.getElementById("submitButton");

    fileInput.addEventListener("change", function () {
        const files = fileInput.files;

        // Check if more than 8 files are selected
        if (files.length > 8) {
            fileLimitError.style.display = "block";
            submitButton.disabled = true;
            fileInput.value = ""; // Clear the input
        } else {
            fileLimitError.style.display = "none";
            submitButton.disabled = false;
        }
    });
});


function handleCountryChange(selectElement) {
    const country = selectElement.value;

    if (!country) return; // Exit if no country is selected

    // Set up the headers and request body
    const headers = new Headers();
    headers.append("Content-Type", "application/x-www-form-urlencoded");

    const requestBody = new URLSearchParams();
    requestBody.append("country", country);

    const requestOptions = {
        method: 'POST',
        headers: headers,
        body: requestBody,
        redirect: 'follow'
    };

    // Fetch cities based on the selected country
    fetch("https://countriesnow.space/api/v0.1/countries/cities", requestOptions)
        .then(response => response.json()) // Convert response to JSON
        .then(result => {
            if (result.data && result.data.length > 0) {
                populateCitySelect(result.data); // Update the city select element
            } else {
                populateCitySelect([]); // Clear cities if no data is found
            }
        })
        .catch(error => {
            console.error('Error fetching cities:', error);
            populateCitySelect([]); // Clear cities if an error occurs
        });
}

function populateCitySelect(cities) {
    const citySelect = document.getElementById('city');
    citySelect.innerHTML = ''; // Clear existing options

    const defaultOption = document.createElement('option');
    defaultOption.value = '';
    defaultOption.text = 'City';
    defaultOption.selected = true;
    citySelect.appendChild(defaultOption);

    cities.forEach(city => {
        const option = document.createElement('option');
        option.value = city;
        option.text = city;
        citySelect.appendChild(option);
    });
}

</script>
    
</body>

</html>