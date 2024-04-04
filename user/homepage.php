<?php
if (isset($_SESSION["login"]) == true) {
?>
<section id="carosul_section">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/img (8).jpg" height="450px" alt="First slide">
  </div>
</section>

<section id="second_section">
<div class="container">
      <div class="row">
          <div class="col-md-3">
              <div class="second_tem">
                  <span id="imgcustom"><img src="images/img2.jpg" height="200px" width="250px"></span>
                  <h4>CBC Test.</h4>
                  <p>A complete blood count (CBC) is a blood test used to evaluate your overall health and detect a wide range of disorders, including anemia, infection and leukemia.A complete blood count test measures several components and features of your blood, including:
						Red blood cells, which carry oxygen
					    White blood cells, which fight infection
					    Hemoglobin, the oxygen-carrying protein in red blood cells
					    Hematocrit, the proportion of red blood cells to the fluid component, or plasma, in your blood
					    Platelets, which help with blood clotting.
					</p>
              </div>
          </div>

          <div class="col-md-3">
          <div class="second_tem">
                  <span id="imgcustom"><img src="images/img3.jpg" height="200px" width="250px"></span>
                  <h4> Hemoglobin Test </h4>
                  <p>A hemoglobin test measures the amount of hemoglobin in your blood.
				  Hemoglobin is a protein in your red blood cells that carries oxygen to your body's organs and tissues and transports carbon dioxide from your organs and tissues back to your lungs. 
				  If a hemoglobin test reveals that your hemoglobin level is lower than normal, it means you have a low red blood cell count (anemia). Anemia can have many different causes, including vitamin deficiencies, bleeding and chronic diseases.</p>
              </div>
          </div>

          <div class="col-md-3">
          <div class="second_tem">
                  <span id="imgcustom"><img src="images/img4.jpg" height="200px" width="250px"></span>
                  <h4>Blood Glucose Test.</h4>
                  <p>A blood glucose test measures the amount of glucose in your blood. Glucose, a type of simple sugar, is your body’s main source of energy. Your body converts the carbohydrates you eat into glucose.
					Glucose testing is primarily done to check for type 1 diabetes, type 2 diabetes, and gestational diabetes. Diabetes is a condition that causes your blood glucose level to rise.
					The amount of sugar in your blood is usually controlled by a hormone called insulin. However, if you have diabetes, your body either doesn’t make.</p>
              </div>
          </div>

          <div class="col-md-3">
            <div class="second_tem">
                  <span><img src="images/img1.jpg" height="200px" width="250px"></span>
                  <h4>Liver Function Test.</h4>
                  <p>Liver function tests help determine the health of your liver by measuring the levels of proteins, liver enzymes, or bilirubin in your blood.A liver function test is often given in the following situations:
				    to screen for liver infections, such as hepatitis C
				    to monitor the side effects of certain medications known to affect the liver
				    if you already have a liver disease, to monitor the disease and how well a particular treatment is working
				    to measure the degree of scarring (cirrhosis) on the liver
				    if you’re experiencing.</p>
              </div>
          </div>
      </div>
  </div>

</section>

<section id="footer_section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
              <div class="first_ft">
                <h4>Address</h4>
                <ul>
                  <li>Dayal Nagar</li>
                  <li>Gundlav </li>
                  <li>Valsad ,Gujarat</li>
                  <li>India-396035</li>
                </ul>
              </div>
          </div>
		  <div class="col-md-4">
               <div class="first_ft">
                <h4>Conact Us</h4>
                <ul>
                  <li>Mail: dayalnagar3@gmail.com</li>
                  <li>Contact: 9712332728 </li>
                </ul>
              </div>
          </div>
          </div>
        </div>
      </div>
</section>
<?php
} else {
    header("Location: login.php");
}
?>
