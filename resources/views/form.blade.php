`<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<div class="container-lg my-5">
						<div class="text-center">
							<h2>Think your beach is missing?</h2>		
							<p class="lead">Add it here, just fill out this form!</p>			
						</div>
						<div class="row justify-content-center my-5">
							
							<div class="col-lg-6">
								<form>
									<!-- email -->
									<label for="email" class="form-label"><strong>Email address:</strong> </label>
									<input type="text" class="form-control mb-4" id="name" placeholder="e.g john@example.com">

									<!-- name -->
									<label for="name" class="form-label"><strong>First name</strong></label>
									<input type="text" class="form-control mb-4" id="name" placeholder="e.g John">

									<!-- reccommend select -->
									<label for="reccomendation" class="form-label"><strong>Would you reccommend our app to a friend or colleague?</strong></label>
									<select  class="form-select mb-4" id="reccomendation">
										<option value="yes">Yes</option>
										<option value="no">No</option>
										<option value="maybe">Maybe</option>
										
									</select>

									<!-- star -->
									<label for="reccomendation" class="form-label"><strong>App satisfaction <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
									  </svg></strong></label>
									<select  class="form-select mb-4" id="satisfaction">
										<option value="1">One star</option>
										<option value="2">Two stars</option>
										<option value="3">Three stars</option>
										<option value="4">Four stars</option>
										<option value="5">Five star</option>
										
									</select>

									

									<!-- review box -->
									<label for="review" class="form-label mt-4"> <strong>Enter your review below.</strong></label>
									<textarea name="review" id="review" class="form-control mb-4" style="height:200px" placeholder="Enter review here..."></textarea>


									<!-- tick box -->
									<div class="mb-3 form-check">
										<input type="checkbox" class="form-check-input" id="consent">
										<label class="form-check-label" for="consent">I understand this info may be displayed on the website</label>
									  </div>

									 <!-- button -->
										<div class="d-grid gap-2">
											<button class="btn bg-primary btn-primary" type="button">Submit</button>
										
									  	</div>
								</form>
							</div>

						</div>

			
			</div>
</body>
</html>