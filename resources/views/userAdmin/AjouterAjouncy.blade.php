<div class="inner1" style="display:none">
				<form action="/CreateAgencity" method="post"  enctype="multipart/form-data">
                    @csrf
					<h3>Ajouter Agency</h3>
					<label class="form-group">
						<input type="text" class="form-control"  required name="nom" placeholder="entre nom">
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control"  required name="adressemail" placeholder="entre adressemail">
						<span class="border"></span>
					</label>
                    <label class="form-group">
						<input type="text" class="form-control"   name="websit" placeholder="entre websit">
						<span class="border"></span>
					</label>
                    <label class="form-group">
						<input type="text" class="form-control"  required name="agency" placeholder="entre agency">
						<span class="border"></span>
					</label>
                    <label class="form-group">
						<input type="text" class="form-control"   name="lisencs" placeholder="entre lisencs">
						<span class="border"></span>
					</label>
                    <label class="form-group">
						<input type="text" class="form-control"  required  name="telephone" placeholder="entre telephone">
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control"  required  name="adresse" placeholder="entre adresse agence">
						<span class="border"></span>
					</label>
                    <label class="form-group">
						<input type="text" class="form-control"  required name="societe" placeholder="entre societe">
						<span class="border"></span>
					</label>
                    <label class="form-group">
						<input type="text" class="form-control"  required name="numberphoneS" placeholder="entre numberphoneS">
						<span class="border"></span>
					</label>
                    <label class="form-group">
						<input type="file" class="form-control"  required name="image" placeholder="entre image">
						<span class="border"></span>
					</label>
					<label class="form-group" >
						<textarea  id="" class="form-control" required name="description" placeholder="entre description"></textarea>
						<span class="border"></span>
					</label>
					<button id="button">Submit 
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>

            </div>