<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','Formularz Opinii');
$smarty->assign('content','

<div align="center">
    <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Formularz opinii</p>

                <form class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c">Imie</label>
					  <input type="text" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c">Nazwisko</label>
                    </div>
                  </div>

                  
				
				  
				  <div class="form-outline">

				  <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
				  <label class="form-label" for="textAreaExample">Opnia użytkownika</label>
				</div>
					
					</p>
						
						
						<input class="form-control" type="file" id="formFileMultiple" multiple />
						<label for="formFileMultiple" class="form-label">Prześlij plik</label>
					</p>
					
                  

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                    />
                    <label class="form-check-label" for="form2Example3">
                      Potwierdzam że chce wysłać opinie 
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" class="btn btn-primary btn-lg">Wyślij</button>
                  </div>

                </form>

              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</section>
    </div>




');
$smarty->display('homepage.tpl');

?>
