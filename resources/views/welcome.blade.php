@extends('templates.master')

@section('titre')
    Projet TRADESKILL
@endsection

@section('contenu')
        <div class="jumbotron">            
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-3 indigo col-md-12" style="background:inherit;background:green" role="tablist">
                <li class="nav-item col-md-6">
                    <a class="nav-link" data-toggle="tab" href="#panel2" role="tab"><i class="fa fa-user"></i> Creer votre profil</a>
                </li>
                <li class="nav-item col-md-6">
                    <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab"><i class="fa fa-commenting" aria-hidden="true"></i> Poster un service</a>
                </li>
            </ul>

            <!-- Tab panels -->
            <div class="tab-content">

                <!--Panel 1-->
                <div class="tab-pane fade" id="panel1" role="tabpanel">
                    <br>

                    <h2 class="text-center">Libérons le travail</h2>
                    <h2>Les meilleurs freelances. Disponibles maintenant. En toute sécurité.</h2>
                    <p>Vous cherchez des Services disponibles ?.</p>
                    <input type="text" class="first" name="search" placeholder="Vous cherchez ? ...">

                    <!--Right-->
                    <div class="md-form input-group">
                        <input type="text" class="form-control" placeholder="Vous cherchez ? ...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-lg" type="button">Trouve Le!</button>
                        </span>
                    </div>

                </div>
                <!--/.Panel 1-->

                <!--Panel 2-->
                <div class="tab-pane fade in active" id="panel2" role="tabpanel">
                    <br>                    
                    <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizardProfile">
		                    <form action="" method="">
		                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        	   Créer Votre Profil
		                        	</h3>
									<h5>Ces informations nous permettront de vous recommandez à nos partenaires.</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#vous" data-toggle="tab">Vous</a></li>
			                            <li><a href="#compte" data-toggle="tab">Compte</a></li>
			                            <li><a href="#adresse" data-toggle="tab">Adresse</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="vous">
		                              <div class="row">
		                                	<h4 class="info-text"> Commencons par vos informations personnels</h4>
		                                	<div class="col-sm-4 col-sm-offset-1">
		                                    	<div class="picture-container">
		                                        	<div class="picture">
                                        				<img src="{{URL::asset('assets/img/default-avatar.png')}}" class="picture-src" id="wizardPicturePreview" title=""/>
		                                            	<input type="file" id="wizard-picture">
		                                        	</div>
		                                        	<h6>Choisis une photo</h6>
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Nom <small>(Obligatoire)</small></label>
			                                          <input name="firstname" type="text" class="form-control">
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">record_voice_over</i>
													</span>
													<div class="form-group label-floating">
													  <label class="control-label">Prenom <small>(Obligatoire)</small></label>
													  <input name="lastname" type="text" class="form-control">
													</div>
												</div>
		                                	</div>
		                                	<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
													<div class="form-group label-floating">
			                                            <label class="control-label">Email <small>(Obligatoire)</small></label>
			                                            <input name="email" type="email" class="form-control">
			                                        </div>
												</div>
		                                	</div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="compte">
		                                <h4 class="info-text"> Choisir votre type de compte </h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-radio">
		                                                <input type="radio" name="jobb" value="Job">
		                                                <div class="icon">
		                                                    <i class="fa fa-briefcase"></i>
		                                                </div>
		                                                <h6>Job</h6>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-radio">
		                                                <input type="radio" name="jobb" value="Service">
		                                                <div class="icon">
		                                                    <i class="fa fa-code"></i>
		                                                </div>
		                                                <h6>Service</h6>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-radio">
		                                                <input type="radio" name="jobb" value="Develop">
		                                                <div class="icon">
		                                                    <i class="fa fa-user"></i>
		                                                </div>
		                                                <h6>Recruteur</h6>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="adresse">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h4 class="info-text"> Vous vivez dans un quartier agréable ? </h4>
		                                    </div>
		                                    <div class="col-sm-4 col-sm-offset-1">
	                                        	<div class="form-group label-floating">
	                                        		<label class="control-label">Quartier</label>
	                                    			<input type="text" class="form-control">
	                                        	</div>
		                                    </div>
                                            <div class="col-sm-3">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Telephone</label>
		                                            <input type="text" class="form-control">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-3">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Ville</label>
		                                            <input type="text" class="form-control">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Continent</label>
		                                            <select name="country" class="form-control">
														<option disabled="" selected=""></option>
	                                                	<option value="Afghanistan"> Afrique </option>
	                                                	<option value="Albania"> Europe </option>
	                                                	<option value="Algeria"> Amerique </option>
	                                                	<option value="American Samoa"> Asie </option>
	                                                	<option value="Andorra"> Oceanie </option>
	                                            	</select>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Pays</label>
	                                            	<select name="country" data-live-search="true" class="form-control selectpicker">
                                                        <option value="" selected=""></option>
                                                        <option value="AFG">Afghanistan</option>
                                                        <option value="ALA">Åland Islands</option>
                                                        <option value="ALB">Albania</option>
                                                        <option value="DZA">Algeria</option>
                                                        <option value="ASM">American Samoa</option>
                                                        <option value="AND">Andorra</option>
                                                        <option value="AGO">Angola</option>
                                                        <option value="AIA">Anguilla</option>
                                                        <option value="ATA">Antarctica</option>
                                                        <option value="ATG">Antigua and Barbuda</option>
                                                        <option value="ARG">Argentina</option>
                                                        <option value="ARM">Armenia</option>
                                                        <option value="ABW">Aruba</option>
                                                        <option value="AUS">Australia</option>
                                                        <option value="AUT">Austria</option>
                                                        <option value="AZE">Azerbaijan</option>
                                                        <option value="BHS">Bahamas</option>
                                                        <option value="BHR">Bahrain</option>
                                                        <option value="BGD">Bangladesh</option>
                                                        <option value="BRB">Barbados</option>
                                                        <option value="BLR">Belarus</option>
                                                        <option value="BEL">Belgium</option>
                                                        <option value="BLZ">Belize</option>
                                                        <option value="BEN">Benin</option>
                                                        <option value="BMU">Bermuda</option>
                                                        <option value="BTN">Bhutan</option>
                                                        <option value="BOL">Bolivia, Plurinational State of</option>
                                                        <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="BIH">Bosnia and Herzegovina</option>
                                                        <option value="BWA">Botswana</option>
                                                        <option value="BVT">Bouvet Island</option>
                                                        <option value="BRA">Brazil</option>
                                                        <option value="IOT">British Indian Ocean Territory</option>
                                                        <option value="BRN">Brunei Darussalam</option>
                                                        <option value="BGR">Bulgaria</option>
                                                        <option value="BFA">Burkina Faso</option>
                                                        <option value="BDI">Burundi</option>
                                                        <option value="KHM">Cambodia</option>
                                                        <option value="CMR">Cameroon</option>
                                                        <option value="CAN">Canada</option>
                                                        <option value="CPV">Cape Verde</option>
                                                        <option value="CYM">Cayman Islands</option>
                                                        <option value="CAF">Central African Republic</option>
                                                        <option value="TCD">Chad</option>
                                                        <option value="CHL">Chile</option>
                                                        <option value="CHN">China</option>
                                                        <option value="CXR">Christmas Island</option>
                                                        <option value="CCK">Cocos (Keeling) Islands</option>
                                                        <option value="COL">Colombia</option>
                                                        <option value="COM">Comoros</option>
                                                        <option value="COG">Congo</option>
                                                        <option value="COD">Congo, the Democratic Republic of the</option>
                                                        <option value="COK">Cook Islands</option>
                                                        <option value="CRI">Costa Rica</option>
                                                        <option value="CIV">Côte d'Ivoire</option>
                                                        <option value="HRV">Croatia</option>
                                                        <option value="CUB">Cuba</option>
                                                        <option value="CUW">Curaçao</option>
                                                        <option value="CYP">Cyprus</option>
                                                        <option value="CZE">Czech Republic</option>
                                                        <option value="DNK">Denmark</option>
                                                        <option value="DJI">Djibouti</option>
                                                        <option value="DMA">Dominica</option>
                                                        <option value="DOM">Dominican Republic</option>
                                                        <option value="ECU">Ecuador</option>
                                                        <option value="EGY">Egypt</option>
                                                        <option value="SLV">El Salvador</option>
                                                        <option value="GNQ">Equatorial Guinea</option>
                                                        <option value="ERI">Eritrea</option>
                                                        <option value="EST">Estonia</option>
                                                        <option value="ETH">Ethiopia</option>
                                                        <option value="FLK">Falkland Islands (Malvinas)</option>
                                                        <option value="FRO">Faroe Islands</option>
                                                        <option value="FJI">Fiji</option>
                                                        <option value="FIN">Finland</option>
                                                        <option value="FRA">France</option>
                                                        <option value="GUF">French Guiana</option>
                                                        <option value="PYF">French Polynesia</option>
                                                        <option value="ATF">French Southern Territories</option>
                                                        <option value="GAB">Gabon</option>
                                                        <option value="GMB">Gambia</option>
                                                        <option value="GEO">Georgia</option>
                                                        <option value="DEU">Germany</option>
                                                        <option value="GHA">Ghana</option>
                                                        <option value="GIB">Gibraltar</option>
                                                        <option value="GRC">Greece</option>
                                                        <option value="GRL">Greenland</option>
                                                        <option value="GRD">Grenada</option>
                                                        <option value="GLP">Guadeloupe</option>
                                                        <option value="GUM">Guam</option>
                                                        <option value="GTM">Guatemala</option>
                                                        <option value="GGY">Guernsey</option>
                                                        <option value="GIN">Guinea</option>
                                                        <option value="GNB">Guinea-Bissau</option>
                                                        <option value="GUY">Guyana</option>
                                                        <option value="HTI">Haiti</option>
                                                        <option value="HMD">Heard Island and McDonald Islands</option>
                                                        <option value="VAT">Holy See (Vatican City State)</option>
                                                        <option value="HND">Honduras</option>
                                                        <option value="HKG">Hong Kong</option>
                                                        <option value="HUN">Hungary</option>
                                                        <option value="ISL">Iceland</option>
                                                        <option value="IND">India</option>
                                                        <option value="IDN">Indonesia</option>
                                                        <option value="IRN">Iran, Islamic Republic of</option>
                                                        <option value="IRQ">Iraq</option>
                                                        <option value="IRL">Ireland</option>
                                                        <option value="IMN">Isle of Man</option>
                                                        <option value="ISR">Israel</option>
                                                        <option value="ITA">Italy</option>
                                                        <option value="JAM">Jamaica</option>
                                                        <option value="JPN">Japan</option>
                                                        <option value="JEY">Jersey</option>
                                                        <option value="JOR">Jordan</option>
                                                        <option value="KAZ">Kazakhstan</option>
                                                        <option value="KEN">Kenya</option>
                                                        <option value="KIR">Kiribati</option>
                                                        <option value="PRK">Korea, Democratic People's Republic of</option>
                                                        <option value="KOR">Korea, Republic of</option>
                                                        <option value="KWT">Kuwait</option>
                                                        <option value="KGZ">Kyrgyzstan</option>
                                                        <option value="LAO">Lao People's Democratic Republic</option>
                                                        <option value="LVA">Latvia</option>
                                                        <option value="LBN">Lebanon</option>
                                                        <option value="LSO">Lesotho</option>
                                                        <option value="LBR">Liberia</option>
                                                        <option value="LBY">Libya</option>
                                                        <option value="LIE">Liechtenstein</option>
                                                        <option value="LTU">Lithuania</option>
                                                        <option value="LUX">Luxembourg</option>
                                                        <option value="MAC">Macao</option>
                                                        <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                                        <option value="MDG">Madagascar</option>
                                                        <option value="MWI">Malawi</option>
                                                        <option value="MYS">Malaysia</option>
                                                        <option value="MDV">Maldives</option>
                                                        <option value="MLI">Mali</option>
                                                        <option value="MLT">Malta</option>
                                                        <option value="MHL">Marshall Islands</option>
                                                        <option value="MTQ">Martinique</option>
                                                        <option value="MRT">Mauritania</option>
                                                        <option value="MUS">Mauritius</option>
                                                        <option value="MYT">Mayotte</option>
                                                        <option value="MEX">Mexico</option>
                                                        <option value="FSM">Micronesia, Federated States of</option>
                                                        <option value="MDA">Moldova, Republic of</option>
                                                        <option value="MCO">Monaco</option>
                                                        <option value="MNG">Mongolia</option>
                                                        <option value="MNE">Montenegro</option>
                                                        <option value="MSR">Montserrat</option>
                                                        <option value="MAR">Morocco</option>
                                                        <option value="MOZ">Mozambique</option>
                                                        <option value="MMR">Myanmar</option>
                                                        <option value="NAM">Namibia</option>
                                                        <option value="NRU">Nauru</option>
                                                        <option value="NPL">Nepal</option>
                                                        <option value="NLD">Netherlands</option>
                                                        <option value="NCL">New Caledonia</option>
                                                        <option value="NZL">New Zealand</option>
                                                        <option value="NIC">Nicaragua</option>
                                                        <option value="NER">Niger</option>
                                                        <option value="NGA">Nigeria</option>
                                                        <option value="NIU">Niue</option>
                                                        <option value="NFK">Norfolk Island</option>
                                                        <option value="MNP">Northern Mariana Islands</option>
                                                        <option value="NOR">Norway</option>
                                                        <option value="OMN">Oman</option>
                                                        <option value="PAK">Pakistan</option>
                                                        <option value="PLW">Palau</option>
                                                        <option value="PSE">Palestinian Territory, Occupied</option>
                                                        <option value="PAN">Panama</option>
                                                        <option value="PNG">Papua New Guinea</option>
                                                        <option value="PRY">Paraguay</option>
                                                        <option value="PER">Peru</option>
                                                        <option value="PHL">Philippines</option>
                                                        <option value="PCN">Pitcairn</option>
                                                        <option value="POL">Poland</option>
                                                        <option value="PRT">Portugal</option>
                                                        <option value="PRI">Puerto Rico</option>
                                                        <option value="QAT">Qatar</option>
                                                        <option value="REU">Réunion</option>
                                                        <option value="ROU">Romania</option>
                                                        <option value="RUS">Russian Federation</option>
                                                        <option value="RWA">Rwanda</option>
                                                        <option value="BLM">Saint Barthélemy</option>
                                                        <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                                                        <option value="KNA">Saint Kitts and Nevis</option>
                                                        <option value="LCA">Saint Lucia</option>
                                                        <option value="MAF">Saint Martin (French part)</option>
                                                        <option value="SPM">Saint Pierre and Miquelon</option>
                                                        <option value="VCT">Saint Vincent and the Grenadines</option>
                                                        <option value="WSM">Samoa</option>
                                                        <option value="SMR">San Marino</option>
                                                        <option value="STP">Sao Tome and Principe</option>
                                                        <option value="SAU">Saudi Arabia</option>
                                                        <option value="SEN">Senegal</option>
                                                        <option value="SRB">Serbia</option>
                                                        <option value="SYC">Seychelles</option>
                                                        <option value="SLE">Sierra Leone</option>
                                                        <option value="SGP">Singapore</option>
                                                        <option value="SXM">Sint Maarten (Dutch part)</option>
                                                        <option value="SVK">Slovakia</option>
                                                        <option value="SVN">Slovenia</option>
                                                        <option value="SLB">Solomon Islands</option>
                                                        <option value="SOM">Somalia</option>
                                                        <option value="ZAF">South Africa</option>
                                                        <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                                        <option value="SSD">South Sudan</option>
                                                        <option value="ESP">Spain</option>
                                                        <option value="LKA">Sri Lanka</option>
                                                        <option value="SDN">Sudan</option>
                                                        <option value="SUR">Suriname</option>
                                                        <option value="SJM">Svalbard and Jan Mayen</option>
                                                        <option value="SWZ">Swaziland</option>
                                                        <option value="SWE">Sweden</option>
                                                        <option value="CHE">Switzerland</option>
                                                        <option value="SYR">Syrian Arab Republic</option>
                                                        <option value="TWN">Taiwan, Province of China</option>
                                                        <option value="TJK">Tajikistan</option>
                                                        <option value="TZA">Tanzania, United Republic of</option>
                                                        <option value="THA">Thailand</option>
                                                        <option value="TLS">Timor-Leste</option>
                                                        <option value="TGO">Togo</option>
                                                        <option value="TKL">Tokelau</option>
                                                        <option value="TON">Tonga</option>
                                                        <option value="TTO">Trinidad and Tobago</option>
                                                        <option value="TUN">Tunisia</option>
                                                        <option value="TUR">Turkey</option>
                                                        <option value="TKM">Turkmenistan</option>
                                                        <option value="TCA">Turks and Caicos Islands</option>
                                                        <option value="TUV">Tuvalu</option>
                                                        <option value="UGA">Uganda</option>
                                                        <option value="UKR">Ukraine</option>
                                                        <option value="ARE">United Arab Emirates</option>
                                                        <option value="GBR">United Kingdom</option>
                                                        <option value="USA">United States</option>
                                                        <option value="UMI">United States Minor Outlying Islands</option>
                                                        <option value="URY">Uruguay</option>
                                                        <option value="UZB">Uzbekistan</option>
                                                        <option value="VUT">Vanuatu</option>
                                                        <option value="VEN">Venezuela, Bolivarian Republic of</option>
                                                        <option value="VNM">Viet Nam</option>
                                                        <option value="VGB">Virgin Islands, British</option>
                                                        <option value="VIR">Virgin Islands, U.S.</option>
                                                        <option value="WLF">Wallis and Futuna</option>
                                                        <option value="ESH">Western Sahara</option>
                                                        <option value="YEM">Yemen</option>
                                                        <option value="ZMB">Zambia</option>
                                                        <option value="ZWE">Zimbabwe</option>
                                                    </select>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Suivant' />
		                                <input type='button' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Fin' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Precedent' />
                                        <div class="footer-checkbox">
											<div class="col-sm-12">
											  <div class="checkbox">
												  <label>
													  <input type="checkbox" name="optionsCheckboxes">
												  </label>
												  Souscrivez-vous à notre Bulletin pour recevoir par courrier électronique toutes les offres et nouveautés
											  </div>
										  </div>
										</div>
		                            </div>
                                        
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
                </div>
                <!--/.Panel 2-->

            </div>
        </div>
        
        <div class="jumbotron">
            <h1>TRADESKILL PROJECT</h1>
              <h2>Le travail en freelance, un nouveau modèle économique ?</h2>
            <p>En marge du modèle de l’emploi salarié, de nouvelles formes de travail émergent. Parmi elles, le travail en freelance se développe fortement. Et ce n’est qu’un début. Les raisons sont simples et multiples :de profondes mutations structurelles, conjoncturelles et culturelles sont à l’oeuvre en ce moment, elles contribuent toutes les trois à encourager le travail indépendant.</p>
        </div>
        <div class="jumbotron">
            <h2>PARTENAIRES TRADESKILL PROJECT</h2>
        </div>
@endsection