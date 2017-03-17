

<div class="container">
	<p class="h3">Ajout d'un étudiant</p>
	<div class="row">
		<div class="col-md-6">
			<form>
				<div class="form-group">

					<label for="exampleInputFirstName">Prénom</label>
					<input type="text" class="form-control" id="exampleInputFirstName" name="stu_firstname" placeholder="Veuillez saisir votre Prénom svp">

					<br>

					<label for="exampleInputSurName">Nom</label>
					<input type="text" class="form-control" id="exampleInputSurName" name="stu_firstname" placeholder="Veuillez saisir votre NOM svp">

					<br>

					<label for="exampleInputBirthDate">Date de Naissance</label>
					<input type="date" class="form-control" id="exampleInputBirthDate" name="stu_birthdate" placeholder="dd/mm/yyyy">

					<br>

					<label for="exampleInputEmail">Adresse email</label>
					<input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Veuillez saisir votre email svp">
				
				</div>
			</form>
		</div>	

			
		<div class="col-md-6">
			<form>
				<div class="form-group">

					<label for="exampleInputFriendliness">Sympathie</label>
					<select type="text" class="form-control" id="exampleInputFriendliness" name="stu_friendliness" placeholder="Veuillez choisir une note de sympathie svp">
						<option selected>Choisir un niveau de sympathie</option>
					    <option value="1">Anthipatique</option>
    					<option value="2">Normal</option>
    					<option value="3">Sympa</option>
    					<option value="4">Très sympa</option>
    					<option value="5">Génial</option>
    				</select>		
					<br>

					<label for="exampleInputCity">Ville</label>
					<select type="text" class="form-control" id="exampleInputCity" name="city_cit_id" placeholder="Veuillez choisir une ville">
						<option selected>Choisir une ville</option>
						<?php foreach ($cityList as $key=>$cityInfo) : ?>
					    <option value="<?= $cityInfo['cit_id'] ?>"><?= $cityInfo['cit_name'] ?></option>
						<?php endforeach; ?>
    					<option value="<?= $cityList[1]['cit_id'] ?>"><?= $cityList[1]['cit_name'] ?></option>
    					<option value="<?= $cityList[2]['cit_id'] ?>"><?= $cityList[2]['cit_name'] ?></option>
    					<option value="<?= $cityList[3]['cit_id'] ?>"><?= $cityList[3]['cit_name'] ?></option>
    					<option value="<?= $cityList[4]['cit_id'] ?>"><?= $cityList[4]['cit_name'] ?></option>
    				</select>		
					<br>

					<label for="exampleSession">Session</label>

					<select type="text" class="form-control" id="exampleInputSession" name="ses_id" placeholder="Veuillez choisir une session">
						<option selected>Choisir une session</option>

						<?php foreach ($sessionList as $key=>$sessionInfo) : ?>
					    <option value="<?= $sessionInfo['ses_number'] ?>"><?= $sessionInfo['tra_name'] ?> Session N° <?= $sessionInfo['ses_number'] ?></option>
						<?php endforeach; ?>	

					    <option value="<?= $sessionList[0]['ses_number'] ?>"><?= $sessionList[0]['tra_name'] ?> Session N° <?= $sessionList[0]['ses_number'] ?></option>

    					<option value="<?= $sessionList[1]['ses_number'] ?>"><?= $sessionList[1]['tra_name']?> Session N° <?= $sessionList[1]['ses_number'] ?></option>

    					<option value="<?= $sessionList[2]['ses_number'] ?>"><?= $sessionList[2]['tra_name']?> Session N° <?= $sessionList[2]['ses_number'] ?></option>

    					<option value="<?= $sessionList[3]['ses_number'] ?>"><?= $sessionList[3]['tra_name']?> Session N° <?= $sessionList[3]['ses_number'] ?></option>

    					<option value="<?= $sessionList[4]['ses_number'] ?>"><?= $sessionList[4]['tra_name']?> Session N° <?= $sessionList[4]['ses_number'] ?></option>
    			
					<br>
				
				</div>
			</form>
		</div>	
</div>	