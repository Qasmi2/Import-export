@extends('layouts.app')
@include('flash')
@section('content')
	@if (session('status'))
       <div class="alert alert-success">
           {{ session('status') }}                   
        </div>
    @endif
<!------------------------------ From -------------------------------------------- -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    <div id="app">
    <div class="container">
    <a href="http://eventsdatabase.mwancloud.com/home" class="btn btn-default">HOME PAGE</a>
        <div class="text-center">
        <h1>ADD NEW RECORD</h1>
        </div>
        <hr>    
        <form method="POST"  action="{{ route('addrecord') }}" enctype="multipart/form-data" >
        {{ csrf_field() }}
        <div>
            <label>Please choose your Picture</label>
            <input type="file" name="cover_image" id="cover_image" class="btn btn-success"/>
                @if ($errors->has('cover_image'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('cover_image') }}</strong>
                    </span>
                @endif
            <br>
        </div>
        <!-- field set -->
    <fieldset class="col-md-12" style="background-color:#fff;">    	
        <legend>Personal Info</legend>
        <div class="col-md-12 col-lg-12 col-sm-12">    
            <div class="form-group row">
                <div class="col-md-3">
                    <label for="title" >{{ __('Title') }}</label>
                    <input id="title" type="text" placeholder="Enter Title " class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" >
                    <!-- <select class="form-control" name="title" id="title" >
                        <option value="">Select Title</option>
                        <option value="Capt.">Capt.</option>
                        <option value="Chef">Chef</option>
                        <option value="Col.">Col.</option>
                        <option value="Dr.">Dr.</option>
                        <option value="Eng.">Eng.</option>
                        <option value="Gov.">Gov.</option>
                        <option value="H.E">H.E</option>
                        <option value="H.H.">H.H.</option> 
                        <option value="H.R.H.">H.R.H.</option>
                        <option value="Hon.">Hon.</option>
                        <option value="Lt.">Lt.</option>
                        <option value="Maj.">Maj.</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Prof.">Prof.</option>
                        <option value="Sheikh">Sheikh</option>
                        <option value="Sheikha">Sheikha</option> 
                        <option value="Sir.">Sir.</option>
                        <option value="Brig.">Brig.</option>
                        <option value="Gen.">Gen.</option>
                        <option value="Adm.">Adm.</option>
                        <option value="Amb.">Amb.</option>
                        <option value="Amb.">Amb.</option>
                        <option value="Brig Gen.">Brig Gen.</option>
                    </select> -->
                    @if ($errors->has('title'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3 ">
                    <label for="title">{{ __('First Name') }}<span style="color:red;">**</span></label>
                    <input id="first_name" type="text" placeholder="Enter First Name " class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required>
                    @if ($errors->has('first_name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                </div>

               
                <div class="col-md-3">
                    <label for="title">{{ __('Surname') }}</label>
                    <input id="sur_name" type="text" placeholder="Enter Surname " class="form-control{{ $errors->has('sur_name') ? ' is-invalid' : '' }}" name="sur_name" value="{{ old('sur_name') }}" >
                    @if ($errors->has('sur_name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('sur_name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-3">
                    <label for="title">{{ __('Middle Name') }}</label>
                    <input id="middle_name" type="text" placeholder="Enter Middle Name " class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}" name="middle_name" value="{{ old('middle_name') }}" >
                    @if ($errors->has('middle_name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('middle_name') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
        </div>

        <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-4 ">
                    <label for="position">{{ __('Position') }}</label>
                    <input id="position" type="text" placeholder="Enter Position " class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ old('position') }}" >
                    @if ($errors->has('position'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('position') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-4">
                    <label for="company">{{ __('Company') }}</label>
                    <input id="company" type="text" placeholder="Enter Company " class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{ old('company') }}" >
                    @if ($errors->has('company'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('company') }}</strong>
                        </span>
                    @endif
                </div>

                 <div class="col-md-4">
                    <label for="department">{{ __('Department') }}</label>
                    <input id="department" type="text" placeholder="Enter department " class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" value="{{ old('department') }}" >
                    @if ($errors->has('department'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('department') }}</strong>
                        </span>
                    @endif
                </div>
               

            </div>
        </div>

        <div class="col-md-12 col-lg-12 col-sm-12">
         <div class="form-group row">
            <div class="col-md-3">
                    <label for="age_group">{{ __('AGE Group') }}</label>
                    <select class="form-control" name="age_group" id="age_group" >
                            <option value="">Select Age Group</option>
                            <option value="15-24">15-24</option>
                            <option value="25-34">25-34</option>
                            <option value="35-44">35-44</option>
                            <option value="45-54">45-54</option>
                            <option value="55-64">55-64</option>
                            <option value="65+">65+</option>
                    </select>
                    @if ($errors->has('age_group'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('age_group') }}</strong>
                        </span>
                    @endif
            </div> 
            <div class="col-md-3">
                    <label for="gender">{{ __('Gender') }}</label>
                    <select class="form-control" name="gender" id="gender" >
                            <option value="">Select Your Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                           
                    </select>
                    @if ($errors->has('gender'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                    @endif
            </div> 
            
                <div class="col-md-3">
                    <label for="nationality">{{ __('Nationality') }}</label>
                    <!-- <input id="nationality" type="text" placeholder="Enter Nationality " class="form-control{{ $errors->has('nationality') ? ' is-invalid' : '' }}" name="nationality" value="{{ old('nationality') }}" > -->
                    <select class="form-control" name="nationality" id="nationality" >
                        <option value="">Select Nationality</option>
                        <option value="Afghanistan">Afghanistan</option> 
                        <option value="Albania">Albania</option> 
                        <option value="Algeria">Algeria</option> 
                        <option value="American Samoa">American Samoa</option> 
                        <option value="Andorra">Andorra</option> 
                        <option value="Angola">Angola</option> 
                        <option value="Anguilla">Anguilla</option> 
                        <option value="Antarctica">Antarctica</option> 
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                        <option value="Argentina">Argentina</option> 
                        <option value="Armenia">Armenia</option> 
                        <option value="Aruba">Aruba</option> 
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
                        <option value="Bermuda">Bermuda</option> 
                        <option value="Bhutan">Bhutan</option> 
                        <option value="Bolivia">Bolivia</option> 
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                        <option value="Botswana">Botswana</option> 
                        <option value="Bouvet Island">Bouvet Island</option> 
                        <option value="Brazil">Brazil</option> 
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                        <option value="Brunei Darussalam">Brunei Darussalam</option> 
                        <option value="Bulgaria">Bulgaria</option> 
                        <option value="Burkina Faso">Burkina Faso</option> 
                        <option value="Burundi">Burundi</option> 
                        <option value="Cambodia">Cambodia</option> 
                        <option value="Cameroon">Cameroon</option> 
                        <option value="Canada">Canada</option> 
                        <option value="Cape Verde">Cape Verde</option> 
                        <option value="Cayman Islands">Cayman Islands</option> 
                        <option value="Central African Republic">Central African Republic</option> 
                        <option value="Chad">Chad</option> 
                        <option value="Chile">Chile</option> 
                        <option value="China">China</option> 
                        <option value="Christmas Island">Christmas Island</option> 
                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                        <option value="Colombia">Colombia</option> 
                        <option value="Comoros">Comoros</option> 
                        <option value="Congo">Congo</option> 
                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                        <option value="Cook Islands">Cook Islands</option> 
                        <option value="Costa Rica">Costa Rica</option> 
                        <option value="Cote D'ivoire">Cote D'ivoire</option> 
                        <option value="Croatia">Croatia</option> 
                        <option value="Cuba">Cuba</option> 
                        <option value="Cyprus">Cyprus</option> 
                        <option value="Czech Republic">Czech Republic</option> 
                        <option value="Denmark">Denmark</option> 
                        <option value="Djibouti">Djibouti</option> 
                        <option value="Dominica">Dominica</option> 
                        <option value="Dominican Republic">Dominican Republic</option> 
                        <option value="Ecuador">Ecuador</option> 
                        <option value="Egypt">Egypt</option> 
                        <option value="El Salvador">El Salvador</option> 
                        <option value="Equatorial Guinea">Equatorial Guinea</option> 
                        <option value="Eritrea">Eritrea</option> 
                        <option value="Estonia">Estonia</option> 
                        <option value="Ethiopia">Ethiopia</option> 
                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                        <option value="Faroe Islands">Faroe Islands</option> 
                        <option value="Fiji">Fiji</option> 
                        <option value="Finland">Finland</option> 
                        <option value="France">France</option> 
                        <option value="French Guiana">French Guiana</option> 
                        <option value="French Polynesia">French Polynesia</option> 
                        <option value="French Southern Territories">French Southern Territories</option> 
                        <option value="Gabon">Gabon</option> 
                        <option value="Gambia">Gambia</option> 
                        <option value="Georgia">Georgia</option> 
                        <option value="Germany">Germany</option> 
                        <option value="Ghana">Ghana</option> 
                        <option value="Gibraltar">Gibraltar</option> 
                        <option value="Greece">Greece</option> 
                        <option value="Greenland">Greenland</option> 
                        <option value="Grenada">Grenada</option> 
                        <option value="Guadeloupe">Guadeloupe</option> 
                        <option value="Guam">Guam</option> 
                        <option value="Guatemala">Guatemala</option> 
                        <option value="Guinea">Guinea</option> 
                        <option value="Guinea-bissau">Guinea-bissau</option> 
                        <option value="Guyana">Guyana</option> 
                        <option value="Haiti">Haiti</option> 
                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                        <option value="Honduras">Honduras</option> 
                        <option value="Hong Kong">Hong Kong</option> 
                        <option value="Hungary">Hungary</option> 
                        <option value="Iceland">Iceland</option> 
                        <option value="India">India</option> 
                        <option value="Indonesia">Indonesia</option> 
                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
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
                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                        <option value="Korea, Republic of">Korea, Republic of</option> 
                        <option value="Kuwait">Kuwait</option> 
                        <option value="Kyrgyzstan">Kyrgyzstan</option> 
                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                        <option value="Latvia">Latvia</option> 
                        <option value="Lebanon">Lebanon</option> 
                        <option value="Lesotho">Lesotho</option> 
                        <option value="Liberia">Liberia</option> 
                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                        <option value="Liechtenstein">Liechtenstein</option> 
                        <option value="Lithuania">Lithuania</option> 
                        <option value="Luxembourg">Luxembourg</option> 
                        <option value="Macao">Macao</option> 
                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                        <option value="Madagascar">Madagascar</option> 
                        <option value="Malawi">Malawi</option> 
                        <option value="Malaysia">Malaysia</option> 
                        <option value="Maldives">Maldives</option> 
                        <option value="Mali">Mali</option> 
                        <option value="Malta">Malta</option> 
                        <option value="Marshall Islands">Marshall Islands</option> 
                        <option value="Martinique">Martinique</option> 
                        <option value="Mauritania">Mauritania</option> 
                        <option value="Mauritius">Mauritius</option> 
                        <option value="Mayotte">Mayotte</option> 
                        <option value="Mexico">Mexico</option> 
                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                        <option value="Moldova, Republic of">Moldova, Republic of</option> 
                        <option value="Monaco">Monaco</option> 
                        <option value="Mongolia">Mongolia</option> 
                        <option value="Montserrat">Montserrat</option> 
                        <option value="Morocco">Morocco</option> 
                        <option value="Mozambique">Mozambique</option> 
                        <option value="Myanmar">Myanmar</option> 
                        <option value="Namibia">Namibia</option> 
                        <option value="Nauru">Nauru</option> 
                        <option value="Nepal">Nepal</option> 
                        <option value="Netherlands">Netherlands</option> 
                        <option value="Netherlands Antilles">Netherlands Antilles</option> 
                        <option value="New Caledonia">New Caledonia</option> 
                        <option value="New Zealand">New Zealand</option> 
                        <option value="Nicaragua">Nicaragua</option> 
                        <option value="Niger">Niger</option> 
                        <option value="Nigeria">Nigeria</option> 
                        <option value="Niue">Niue</option> 
                        <option value="Norfolk Island">Norfolk Island</option> 
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                        <option value="Norway">Norway</option> 
                        <option value="Oman">Oman</option> 
                        <option value="Pakistan">Pakistan</option> 
                        <option value="Palau">Palau</option> 
                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                        <option value="Panama">Panama</option> 
                        <option value="Papua New Guinea">Papua New Guinea</option> 
                        <option value="Paraguay">Paraguay</option> 
                        <option value="Peru">Peru</option> 
                        <option value="Philippines">Philippines</option> 
                        <option value="Pitcairn">Pitcairn</option> 
                        <option value="Poland">Poland</option> 
                        <option value="Portugal">Portugal</option> 
                        <option value="Puerto Rico">Puerto Rico</option> 
                        <option value="Qatar">Qatar</option> 
                        <option value="Reunion">Reunion</option> 
                        <option value="Romania">Romania</option> 
                        <option value="Russian Federation">Russian Federation</option> 
                        <option value="Rwanda">Rwanda</option> 
                        <option value="Saint Helena">Saint Helena</option> 
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                        <option value="Saint Lucia">Saint Lucia</option> 
                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                        <option value="Samoa">Samoa</option> 
                        <option value="San Marino">San Marino</option> 
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                        <option value="Saudi Arabia">Saudi Arabia</option> 
                        <option value="Senegal">Senegal</option> 
                        <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                        <option value="Seychelles">Seychelles</option> 
                        <option value="Sierra Leone">Sierra Leone</option> 
                        <option value="Singapore">Singapore</option> 
                        <option value="Slovakia">Slovakia</option> 
                        <option value="Slovenia">Slovenia</option> 
                        <option value="Solomon Islands">Solomon Islands</option> 
                        <option value="Somalia">Somalia</option> 
                        <option value="South Africa">South Africa</option> 
                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                        <option value="Spain">Spain</option> 
                        <option value="Sri Lanka">Sri Lanka</option> 
                        <option value="Sudan">Sudan</option> 
                        <option value="Suriname">Suriname</option> 
                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                        <option value="Swaziland">Swaziland</option> 
                        <option value="Sweden">Sweden</option> 
                        <option value="Switzerland">Switzerland</option> 
                        <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                        <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                        <option value="Tajikistan">Tajikistan</option> 
                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                        <option value="Thailand">Thailand</option> 
                        <option value="Timor-leste">Timor-leste</option> 
                        <option value="Togo">Togo</option> 
                        <option value="Tokelau">Tokelau</option> 
                        <option value="Tonga">Tonga</option> 
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                        <option value="Tunisia">Tunisia</option> 
                        <option value="Turkey">Turkey</option> 
                        <option value="Turkmenistan">Turkmenistan</option> 
                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                        <option value="Tuvalu">Tuvalu</option> 
                        <option value="Uganda">Uganda</option> 
                        <option value="Ukraine">Ukraine</option> 
                        <option value="United Arab Emirates">United Arab Emirates</option> 
                        <option value="United Kingdom">United Kingdom</option> 
                        <option value="United States">United States</option> 
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                        <option value="Uruguay">Uruguay</option> 
                        <option value="Uzbekistan">Uzbekistan</option> 
                        <option value="Vanuatu">Vanuatu</option> 
                        <option value="Venezuela">Venezuela</option> 
                        <option value="Viet Nam">Viet Nam</option> 
                        <option value="Virgin Islands, British">Virgin Islands, British</option> 
                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                        <option value="Wallis and Futuna">Wallis and Futuna</option> 
                        <option value="Western Sahara">Western Sahara</option> 
                        <option value="Yemen">Yemen</option> 
                        <option value="Zambia">Zambia</option> 
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                    @if ($errors->has('nationality'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('nationality') }}</strong>
                        </span>
                    @endif
                </div>

               
                <div class="col-md-3">
                    <label for="nature_of_business">{{ __('Nature Of Business') }}</label>
                    <!-- <input id="nature_of_business" type="text" placeholder="Enter Nature Of Business " class="form-control{{ $errors->has('nature_of_business') ? ' is-invalid' : '' }}" name="nature_of_business" value="{{ old('nature_of_business') }}" > -->
                    <select class="form-control" name="nature_of_business" id="nature_of_business">
                        <option value=""> Select Nature of Business </option>
                        <option value="Pharma">Pharma</option>
                        <option value="Cosmetics">Cosmetics</option>
                        <option value="medical Devises">medical Devises</option>
                        <option value="Supplements">Supplements</option>
                        <option value="FMCG">FMCG</option>
                        <option value="Healthcare Consulter">Healthcare Consulter</option>
                        <option value="Food ">Food </option>
                        <option value="Healthcare ">Healthcare </option>
                        <option value="Hospitals">Hospitals</option>
                        <option value="Investment ">Investment </option>
                        <option value="Association /Groups">Association /Groups</option> 
                        <option value="iT ">iT </option>
                        <option value="Blockchain ">Blockchain </option>
                        <option value="Finance">Finance </option>
                        
                        
                    </select>
                    @if ($errors->has('nature_of_business'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('nature_of_business') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- <div class="col-md-3">
                    <label for="category">{{ __('Category') }}</label>
                    <input id="category" type="text" placeholder="Enter category " class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{ old('category') }}" >
                    @if ($errors->has('category'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                    @endif
                </div> -->
               

            </div>
        </div>

    </fieldset>	
    <fieldset class="col-md-12" style="background-color:#fff; margin-top:20px;">    	
        <legend>Contact Info</legend>
        
        <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="address1">{{ __('Address1') }}</label>
                        <input id="address1" type="text" placeholder="Enter Address1 " class="form-control{{ $errors->has('address1') ? ' is-invalid' : '' }}" name="address1" value="{{ old('address1') }}" >
                        @if ($errors->has('address1'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('address1') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                
                    <div class="col-md-6 ">
                        <label for="address2">{{ __('Address2') }}</label>
                        <input id="address2" type="text" placeholder="Enter Address2 " class="form-control{{ $errors->has('address2') ? ' is-invalid' : '' }}" name="address2" value="{{ old('address2') }}" >
                        @if ($errors->has('address2'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('address2') }}</strong>
                            </span>
                        @endif
                    </div>
               </div>
            </div>

        <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-3 ">
                    <label for="city">{{ __('City') }}</label>
                    <input id="first_name" type="text" placeholder="Enter City " class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" >
                    @if ($errors->has('city'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                    @endif
                </div>

               
                <div class="col-md-3">
                    <label for="post_code">{{ __('Postcode') }}</label>
                    <input id="post_code" type="text" placeholder="Enter postcode " class="form-control{{ $errors->has('post_code') ? ' is-invalid' : '' }}" name="post_code" value="{{ old('post_code') }}" >
                    @if ($errors->has('post_code'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('post_code') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-3">
                    <label for="state">{{ __('State') }}</label>
                    <input id="state" type="text" placeholder="Enter state " class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" >
                    @if ($errors->has('state'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('state') }}</strong>
                        </span>
                    @endif
                </div>
               
                <div class="col-md-3">
                    <label for="country">{{ __('Country') }}</label>
                    <!-- <input id="country" type="text" placeholder="Enter country " class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" > -->
                    <select class="form-control" name="country" id="country" >   
                    <option value="" code="">Select Country</option>
                        <option value="Algeria" code="213">Algeria </option>
                        <option value="Andorra" code="376">Andorra </option>
                        <option value="Angola" code="244">Angola</option>
                        <option value="Anguilla" code="1264">Anguilla </option>
                        <option value="Antigua and Barbuda" code="1268">Antigua &amp; Barbuda </option>
                        <option value="Argentina" code="54">Argentina </option>
                        <option value="Armenia" code="374">Armenia </option>
                        <option value="Aruba" code="297">Aruba </option>
                        <option value="Australia" code="61">Australia </option>
                        <option value="AustriaAT" code="43">Austria</option>
                        <option value="Azerbaijan" code="994">Azerbaijan </option>
                        <option value="Bahamas" code="1242">Bahamas</option>
                        <option value="Bahrain" code="973">Bahrain</option>
                        <option value="Bangladesh" code="880">Bangladesh</option>
                        <option value="Barbados" code="1246">Barbados</option>
                        <option value="Belarus" code="375">Belarus</option>
                        <option value="Belgium" code="32">Belgium </option>
                        <option value="Belize" code="501">Belize </option>
                        <option value="Benin" code="229">Benin </option>
                        <option value="Bermuda" code="1441">Bermuda </option>
                        <option value="Bhutan" code="975">Bhutan </option>
                        <option value="Bolivia" code="591">Bolivia </option>
                        <option value="Bosnia Herzegovin" code="387">Bosnia Herzegovina </option>
                        <option value="Botswana" code="267">Botswana </option>
                        <option value="Brazil" code="55">Brazil </option>
                        <option value="Brunei" code="673">Brunei </option>
                        <option value="Bulgaria" code="359">Bulgaria </option>
                        <option value="Burkina Faso" code="226">Burkina Faso </option>
                        <option value="Burundi" code="257">Burundi </option>
                        <option value="Cambodia" code="855">Cambodia (</option>
                        <option value="Cameroon" code="237">Cameroon </option>
                        <option value="Canada" code="1">Canada </option>
                        <option value="Cape Verde Islands" code="238">Cape Verde Islands </option>
                        <option value="Cayman Islands" code="1345">Cayman Islands </option>
                        <option value="Central African Republic" code="236">Central African Republic </option>
                        <option value="Chile" code="56">Chile </option>
                        <option value="China" code="86">China </option>
                        <option value="Colombia" code="57">Colombia </option>
                        <option value="Comoros" code="269">Comoros </option>
                        <option value="Congo" code="242">Congo </option>
                        <option value="Cook Islands" code="682">Cook Islands </option>
                        <option value="Costa Rica" code="506">Costa Rica </option>
                        <option value="Croatia" code="385">Croatia </option>
                         <option value="Cuba" code="53">Cuba </option> 
                        <option value="Cyprus - North" code="90">Cyprus - North </option>
                        <option value="Cyprus - South" code="357">Cyprus - South </option>
                        <option value="Czech Republic" code="420">Czech Republic </option>
                        <option value="Denmark" code="45">Denmark </option>
                        <option value="Djibouti" code="253">Djibouti </option>
                        <option value="Dominica" code="1809">Dominica </option>
                        <option value="Dominican Republic" code="1809">Dominican Republic</option>
                        <option value="Ecuador" code="593">Ecuador </option>
                        <option value="Egypt" code="20">Egypt </option>
                        <option value="El Salvador" code="503">El Salvador </option>
                        <option value="Equatorial Guinea" code="240">Equatorial Guinea </option>
                        <option value="Eritrea" code="291">Eritrea </option>
                        <option value="EstoniaE" code="372">Estonia </option>
                        <option value="Ethiopia" code="251">Ethiopia </option>
                        <option value="Falkland Islands" code="500">Falkland Islands </option>
                        <option value="Faroe Islands" code="298">Faroe Islands </option>
                        <option value="Fiji" code="679">Fiji </option>
                        <option value="Finland" code="358">Finland </option>
                        <option value="France" code="33">France </option>
                        <option value="French Guiana" code="594">French Guiana </option>
                        <option value="French Polynesia" code="689">French Polynesia</option>
                        <option value="Gabon" code="241">Gabon </option>
                        <option value="Gambia" code="220">Gambia </option>
                        <option value="Georgia" code="7880">Georgia </option>
                        <option value="Germany" code="49">Germany </option>
                        <option value="Ghana" code="233">Ghana </option>
                        <option value="Gibraltar" code="350">Gibraltar </option>
                        <option value="Greece" code="30">Greece </option>
                        <option value="Greenland" code="299">Greenland </option>
                        <option value="Grenada" code="1473">Grenada </option>
                        <option value="Guadeloupe" code="590">Guadeloupe </option>
                        <option value="Guam" code="671">Guam </option>
                        <option value="Guatemala" code="502">Guatemala </option>
                        <option value="Guinea" code="224">Guinea</option>
                        <option value="Guinea - Bissau" code="245">Guinea - Bissau </option>
                        <option value="Guyana" code="592">Guyana </option>
                        <option value="Haiti" code="509">Haiti </option>
                        <option value="Honduras" code="504">Honduras </option>
                        <option value="Hong Kong" code="852">Hong Kong </option>
                        <option value="Hungary" code="36">Hungary </option>
                        <option value="Iceland" code="354">Iceland </option>
                        <option value="India" code="91">India </option>
                        <option value="Indonesia" code="62">Indonesia </option>
                        <option value="Iraq" code="964">Iraq </option>
                        <!-- <option value="Iran" code="98">Iran </option> -->
                        <option value="Ireland" code="353">Ireland </option>
                        <option value="Israel" code="972">Israel </option>
                        <option value="Italy" code="39">Italy </option>
                        <option value="Jamaica" code="1876">Jamaica </option>
                        <option value="Japan" code="81">Japan </option>
                        <option value="Jordan" code="962">Jordan</option>
                        <option value="Kazakhstan" code="7">Kazakhstan </option>
                        <option value="Kenya" code="254">Kenya </option>
                        <option value="Kiribati" code="686">Kiribati </option>
                        <option value="Korea - North" code="850">Korea - North </option> 
                        <option value="" code="82">Korea - South </option>
                        <option value="Kuwait" code="965">Kuwait </option>
                        <option value="Kyrgyzstan" code="996">Kyrgyzstan </option>
                        <option value="Laos" code="856">Laos </option>
                        <option value="Latvia" code="371">Latvia </option>
                        <option value="Lebanon" code="961">Lebanon </option>
                        <option value="Lesotho" code="266">Lesotho </option>
                        <option value="Liberia" code="231">Liberia </option>
                        <option value="Libya" code="218">Libya </option>
                        <option value="Liechtenstein" code="417">Liechtenstein </option>
                        <option value="Lithuania" code="370">Lithuania </option>
                        <option value="Luxembourg" code="352">Luxembourg </option>
                        <option value="Macao" code="853">Macao </option>
                        <option value="Macedonia" code="389">Macedonia </option>
                        <option value="Madagascar" code="261">Madagascar </option>
                        <option value="Malawi" code="265">Malawi </option>
                        <option value="Malaysia" code="60">Malaysia </option>
                        <option value="Maldives" code="960">Maldives </option>
                        <option value="Mali" code="223">Mali </option>
                        <option value="Malta" code="356">Malta </option>
                        <option value="Marshall Islands" code="692">Marshall Islands </option>
                        <option value="Martinique" code="596">Martinique </option>
                        <option value="Mauritania" code="222">Mauritania </option>
                        <option value="Mayotte" code="269">Mayotte </option>
                        <option value="Mexico" code="52">Mexico </option>
                        <option value="Micronesia" code="691">Micronesia </option>
                        <option value="Moldova" code="373">Moldova </option>
                        <option value="Monaco" code="377">Monaco </option>
                        <option value="Mongolia" code="976">Mongolia </option>
                        <option value="Montserrat" code="1664">Montserrat </option>
                        <option value="Morocco" code="212">Morocco </option>
                        <option value="Mozambique" code="258">Mozambique </option>
                        <option value="Myanmar" code="95">Myanmar </option>
                        <option value="Namibia" code="264">Namibia </option>
                        <option value="Nauru" code="674">Nauru </option>
                        <option value="Nepal" code="977">Nepal </option>
                        <option value="Netherlands" code="31">Netherlands </option>
                        <option value="New Caledonia" code="687">New Caledonia </option>
                        <option value="New Zealand" code="64">New Zealand </option>
                        <option value=">Nicaragua" code="505">Nicaragua </option>
                        <option value="Niger" code="227">Niger </option>
                        <option value="Nigeria" code="234">Nigeria </option>
                        <option value="Niue" code="683">Niue </option>
                        <option value="Norfolk Islands" code="672">Norfolk Islands </option>
                        <option value="Northern Marianas" code="670">Northern Marianas </option>
                        <option value="Norway" code="47">Norway </option>
                        <option value="Oman" code="968">Oman </option>
                        <option value="Pakistan" code="92">Pakistan </option>
                        <option value="Palau" code="680">Palau </option>
                        <option value="Panama" code="507">Panama </option>
                        <option value="Papua New Guinea" code="675">Papua New Guinea </option>
                        <option value="Paraguay" code="595">Paraguay </option>
                        <option value="Peru" code="51">Peru </option>
                        <option value="Philippines" code="63">Philippines </option>
                        <option value="Poland" code="48">Poland</option>
                        <option value="Portugal" code="351">Portugal </option>
                        <option value="Puerto Rico" code="1787">Puerto Rico </option>
                        <option value="Qatar" code="974">Qatar </option>
                        <option value="Reunion" code="262">Reunion </option>
                        <option value="Romania" code="40">Romania </option>
                        <option value="Russia" code="7">Russia </option>
                        <option value="Rwanda" code="250">Rwanda</option>
                        <option value="San Marino" code="378">San Marino </option>
                        <option value="Sao Tome and Principe" code="239">Sao Tome &amp; Principe </option>
                        <option value="Saudi Arabia" code="966">Saudi Arabia </option>
                        <option value="Senegal" code="221">Senegal </option>
                        <option value="Serbia" code="381">Serbia </option>
                        <option value="Seychelles" code="248">Seychelles </option>
                        <option value="Sierra Leone" code="232">Sierra Leone </option>
                        <option value="Singapore" code="65">Singapore </option>
                        <option value="Slovak Republic" code="421">Slovak Republic </option>
                        <option value="Slovenia" code="386">Slovenia </option>
                        <option value="Solomon Islands" code="677">Solomon Islands </option>
                        <option value="Somalia" code="252">Somalia </option>
                        <option value="South Africa" code="27">South Africa </option>
                        <option value="Spain" code="34">Spain </option>
                        <option value="Sri Lanka" code="94">Sri Lanka </option>
                        <option value="St. Helena" code="290">St. Helena </option>
                        <option value="St. Kitts" code="1869">St. Kitts </option>
                        <option value="St. Lucia" code="1758">St. Lucia </option>
                        <option value="Suriname" code="597">Suriname </option>
                        <option value="Sudan" code="249">Sudan </option>
                        <option value="Swaziland" code="268">Swaziland </option>
                        <option value="Sweden" code="46">Sweden </option>
                        <option value="Switzerland" code="41">Switzerland </option>
                        <option value="Syria" code="963">Syria </option>
                        <option value="Taiwan" code="886">Taiwan </option>
                        <option value="Tajikistan" code="992">Tajikistan </option>
                        <option value="Thailand" code="66">Thailand </option>
                        <option value="Togo" code="228">Togo </option>
                        <option value="Tonga" code="676">Tonga </option>
                        <option value="Trinidad and Tobago" code="1868">Trinidad &amp; Tobago </option>
                        <option value="Tunisia" code="216">Tunisia </option>
                        <option value="TurkeyR" code="90">Turkey </option>
                        <option value="Turkmenistan" code="993">Turkmenistan </option>
                        <option value="urks and Caicos Islands" code="1649">Turks &amp; Caicos Islands </option>
                        <option value="Tuvalu " code="688">Tuvalu </option>
                        <option value="Uganda" code="256">Uganda </option>
                        <option value="Ukraine" code="380">Ukraine </option>
                        <option value="United Arab Emirates" code="971">United Arab Emirates </option>
                        <option value="Uruguay" code="598">Uruguay </option>
                        <option value="Uzbekistan" code="998">Uzbekistan </option>
                        <option value="USA" code="1">USA </option>
                        <option value="UK" code="44">UK </option>
                        <option value="Vanuatu" code="678">Vanuatu </option>
                        <option value="Vatican City" code="379">Vatican City </option>
                        <option value="Venezuela" code="58">Venezuela </option>
                        <option value="Vietnam" code="84">Vietnam </option>
                        <option value="Virgin Islands - British" code="1">Virgin Islands - British </option>
                        <option value="Virgin Islands - US" code="1">Virgin Islands - US </option>
                        <option value="Wallis and Futuna" code="681">Wallis &amp; Futuna </option>
                        <option value="Yemen (North)" code="969">Yemen (North)</option>
                        <option value="Yemen (South)" code="967">Yemen (South)</option>
                        <option value="Zambia" code="260">Zambia </option>
                        <option value="Zimbabwe" code="263">Zimbabwe </option>
                    </select>
                    @if ($errors->has('country'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('country') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
        </div>

        <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-4 ">
                    <label for="telephone_country">{{ __('Country Code') }}</label>
                    <!-- <input id="telephone_country" type="text" placeholder="Enter Country Code " class="form-control{{ $errors->has('telephone_country') ? ' is-invalid' : '' }}" name="telephone_country" value="213" > -->
                    <select class="form-control" name="telephone_country" id="telephone_country" > 
                        <option value="">Select Country code</option>
                        <option valueTest="DZ" value="213">Algeria (+213)</option>
                        <option valueTest="AD" value="376">Andorra (+376)</option>
                        <option valueTest="AO" value="244">Angola (+244)</option>
                        <option valueTest="AI" value="1264">Anguilla (+1264)</option>
                        <option valueTest="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                        <option valueTest="AR" value="54">Argentina (+54)</option>
                        <option valueTest="AM" value="374">Armenia (+374)</option>
                        <option valueTest="AW" value="297">Aruba (+297)</option>
                        <option valueTest="AU" value="61">Australia (+61)</option>
                        <option valueTest="AT" value="43">Austria (+43)</option>
                        <option valueTest="AZ" value="994">Azerbaijan (+994)</option>
                        <option valueTest="BS" value="1242">Bahamas (+1242)</option>
                        <option valueTest="BH" value="973">Bahrain (+973)</option>
                        <option valueTest="BD" value="880">Bangladesh (+880)</option>
                        <option valueTest="BB" value="1246">Barbados (+1246)</option>
                        <option valueTest="BY" value="375">Belarus (+375)</option>
                        <option valueTest="BE" value="32">Belgium (+32)</option>
                        <option valueTest="BZ" value="501">Belize (+501)</option>
                        <option valueTest="BJ" value="229">Benin (+229)</option>
                        <option valueTest="BM" value="1441">Bermuda (+1441)</option>
                        <option valueTest="BT" value="975">Bhutan (+975)</option>
                        <option valueTest="BO" value="591">Bolivia (+591)</option>
                        <option valueTest="BA" value="387">Bosnia Herzegovina (+387)</option>
                        <option valueTest="BW" value="267">Botswana (+267)</option>
                        <option valueTest="BR" value="55">Brazil (+55)</option>
                        <option valueTest="BN" value="673">Brunei (+673)</option>
                        <option valueTest="BG" value="359">Bulgaria (+359)</option>
                        <option valueTest="BF" value="226">Burkina Faso (+226)</option>
                        <option valueTest="BI" value="257">Burundi (+257)</option>
                        <option valueTest="KH" value="855">Cambodia (+855)</option>
                        <option valueTest="CM" value="237">Cameroon (+237)</option>
                        <option valueTest="CA" value="1">Canada (+1)</option>
                        <option valueTest="CV" value="238">Cape Verde Islands (+238)</option>
                        <option valueTest="KY" value="1345">Cayman Islands (+1345)</option>
                        <option valueTest="CF" value="236">Central African Republic (+236)</option>
                        <option valueTest="CL" value="56">Chile (+56)</option>
                        <option valueTest="CN" value="86">China (+86)</option>
                        <option valueTest="CO" value="57">Colombia (+57)</option>
                        <option valueTest="KM" value="269">Comoros (+269)</option>
                        <option valueTest="CG" value="242">Congo (+242)</option>
                        <option valueTest="CK" value="682">Cook Islands (+682)</option>
                        <option valueTest="CR" value="506">Costa Rica (+506)</option>
                        <option valueTest="HR" value="385">Croatia (+385)</option>
                        <!-- <option valueTest="CU" value="53">Cuba (+53)</option> -->
                        <option valueTest="CY" value="90">Cyprus - North (+90)</option>
                        <option valueTest="CY" value="357">Cyprus - South (+357)</option>
                        <option valueTest="CZ" value="420">Czech Republic (+420)</option>
                        <option valueTest="DK" value="45">Denmark (+45)</option>
                        <option valueTest="DJ" value="253">Djibouti (+253)</option>
                        <option valueTest="DM" value="1809">Dominica (+1809)</option>
                        <option valueTest="DO" value="1809">Dominican Republic (+1809)</option>
                        <option valueTest="EC" value="593">Ecuador (+593)</option>
                        <option valueTest="EG" value="20">Egypt (+20)</option>
                        <option valueTest="SV" value="503">El Salvador (+503)</option>
                        <option valueTest="GQ" value="240">Equatorial Guinea (+240)</option>
                        <option valueTest="ER" value="291">Eritrea (+291)</option>
                        <option valueTest="EE" value="372">Estonia (+372)</option>
                        <option valueTest="ET" value="251">Ethiopia (+251)</option>
                        <option valueTest="FK" value="500">Falkland Islands (+500)</option>
                        <option valueTest="FO" value="298">Faroe Islands (+298)</option>
                        <option valueTest="FJ" value="679">Fiji (+679)</option>
                        <option valueTest="FI" value="358">Finland (+358)</option>
                        <option valueTest="FR" value="33">France (+33)</option>
                        <option valueTest="GF" value="594">French Guiana (+594)</option>
                        <option valueTest="PF" value="689">French Polynesia (+689)</option>
                        <option valueTest="GA" value="241">Gabon (+241)</option>
                        <option valueTest="GM" value="220">Gambia (+220)</option>
                        <option valueTest="GE" value="7880">Georgia (+7880)</option>
                        <option valueTest="DE" value="49">Germany (+49)</option>
                        <option valueTest="GH" value="233">Ghana (+233)</option>
                        <option valueTest="GI" value="350">Gibraltar (+350)</option>
                        <option valueTest="GR" value="30">Greece (+30)</option>
                        <option valueTest="GL" value="299">Greenland (+299)</option>
                        <option valueTest="GD" value="1473">Grenada (+1473)</option>
                        <option valueTest="GP" value="590">Guadeloupe (+590)</option>
                        <option valueTest="GU" value="671">Guam (+671)</option>
                        <option valueTest="GT" value="502">Guatemala (+502)</option>
                        <option valueTest="GN" value="224">Guinea (+224)</option>
                        <option valueTest="GW" value="245">Guinea - Bissau (+245)</option>
                        <option valueTest="GY" value="592">Guyana (+592)</option>
                        <option valueTest="HT" value="509">Haiti (+509)</option>
                        <option valueTest="HN" value="504">Honduras (+504)</option>
                        <option valueTest="HK" value="852">Hong Kong (+852)</option>
                        <option valueTest="HU" value="36">Hungary (+36)</option>
                        <option valueTest="IS" value="354">Iceland (+354)</option>
                        <option valueTest="IN" value="91">India (+91)</option>
                        <option valueTest="ID" value="62">Indonesia (+62)</option>
                        <option valueTest="IQ" value="964">Iraq (+964)</option>
                        <!-- <option valueTest="IR" value="98">Iran (+98)</option> -->
                        <option valueTest="IE" value="353">Ireland (+353)</option>
                        <option valueTest="IL" value="972">Israel (+972)</option>
                        <option valueTest="IT" value="39">Italy (+39)</option>
                        <option valueTest="JM" value="1876">Jamaica (+1876)</option>
                        <option valueTest="JP" value="81">Japan (+81)</option>
                        <option valueTest="JO" value="962">Jordan (+962)</option>
                        <option valueTest="KZ" value="7">Kazakhstan (+7)</option>
                        <option valueTest="KE" value="254">Kenya (+254)</option>
                        <option valueTest="KI" value="686">Kiribati (+686)</option>
                        <!-- <option valueTest="KP" value="850">Korea - North (+850)</option> -->
                        <option valueTest="KR" value="82">Korea - South (+82)</option>
                        <option valueTest="KW" value="965">Kuwait (+965)</option>
                        <option valueTest="KG" value="996">Kyrgyzstan (+996)</option>
                        <option valueTest="LA" value="856">Laos (+856)</option>
                        <option valueTest="LV" value="371">Latvia (+371)</option>
                        <option valueTest="LB" value="961">Lebanon (+961)</option>
                        <option valueTest="LS" value="266">Lesotho (+266)</option>
                        <option valueTest="LR" value="231">Liberia (+231)</option>
                        <option valueTest="LY" value="218">Libya (+218)</option>
                        <option valueTest="LI" value="417">Liechtenstein (+417)</option>
                        <option valueTest="LT" value="370">Lithuania (+370)</option>
                        <option valueTest="LU" value="352">Luxembourg (+352)</option>
                        <option valueTest="MO" value="853">Macao (+853)</option>
                        <option valueTest="MK" value="389">Macedonia (+389)</option>
                        <option valueTest="MG" value="261">Madagascar (+261)</option>
                        <option valueTest="MW" value="265">Malawi (+265)</option>
                        <option valueTest="MY" value="60">Malaysia (+60)</option>
                        <option valueTest="MV" value="960">Maldives (+960)</option>
                        <option valueTest="ML" value="223">Mali (+223)</option>
                        <option valueTest="MT" value="356">Malta (+356)</option>
                        <option valueTest="MH" value="692">Marshall Islands (+692)</option>
                        <option valueTest="MQ" value="596">Martinique (+596)</option>
                        <option valueTest="MR" value="222">Mauritania (+222)</option>
                        <option valueTest="YT" value="269">Mayotte (+269)</option>
                        <option valueTest="MX" value="52">Mexico (+52)</option>
                        <option valueTest="FM" value="691">Micronesia (+691)</option>
                        <option valueTest="MD" value="373">Moldova (+373)</option>
                        <option valueTest="MC" value="377">Monaco (+377)</option>
                        <option valueTest="MN" value="976">Mongolia (+976)</option>
                        <option valueTest="MS" value="1664">Montserrat (+1664)</option>
                        <option valueTest="MA" value="212">Morocco (+212)</option>
                        <option valueTest="MZ" value="258">Mozambique (+258)</option>
                        <option valueTest="MN" value="95">Myanmar (+95)</option>
                        <option valueTest="NA" value="264">Namibia (+264)</option>
                        <option valueTest="NR" value="674">Nauru (+674)</option>
                        <option valueTest="NP" value="977">Nepal (+977)</option>
                        <option valueTest="NL" value="31">Netherlands (+31)</option>
                        <option valueTest="NC" value="687">New Caledonia (+687)</option>
                        <option valueTest="NZ" value="64">New Zealand (+64)</option>
                        <option valueTest="NI" value="505">Nicaragua (+505)</option>
                        <option valueTest="NE" value="227">Niger (+227)</option>
                        <option valueTest="NG" value="234">Nigeria (+234)</option>
                        <option valueTest="NU" value="683">Niue (+683)</option>
                        <option valueTest="NF" value="672">Norfolk Islands (+672)</option>
                        <option valueTest="NP" value="670">Northern Marianas (+670)</option>
                        <option valueTest="NO" value="47">Norway (+47)</option>
                        <option valueTest="OM" value="968">Oman (+968)</option>
                        <option valueTest="PK" value="92">Pakistan (+92)</option>
                        <option valueTest="PW" value="680">Palau (+680)</option>
                        <option valueTest="PA" value="507">Panama (+507)</option>
                        <option valueTest="PG" value="675">Papua New Guinea (+675)</option>
                        <option valueTest="PY" value="595">Paraguay (+595)</option>
                        <option valueTest="PE" value="51">Peru (+51)</option>
                        <option valueTest="PH" value="63">Philippines (+63)</option>
                        <option valueTest="PL" value="48">Poland (+48)</option>
                        <option valueTest="PT" value="351">Portugal (+351)</option>
                        <option valueTest="PR" value="1787">Puerto Rico (+1787)</option>
                        <option valueTest="QA" value="974">Qatar (+974)</option>
                        <option valueTest="RE" value="262">Reunion (+262)</option>
                        <option valueTest="RO" value="40">Romania (+40)</option>
                        <option valueTest="RU" value="7">Russia (+7)</option>
                        <option valueTest="RW" value="250">Rwanda (+250)</option>
                        <option valueTest="SM" value="378">San Marino (+378)</option>
                        <option valueTest="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                        <option valueTest="SA" value="966">Saudi Arabia (+966)</option>
                        <option valueTest="SN" value="221">Senegal (+221)</option>
                        <option valueTest="CS" value="381">Serbia (+381)</option>
                        <option valueTest="SC" value="248">Seychelles (+248)</option>
                        <option valueTest="SL" value="232">Sierra Leone (+232)</option>
                        <option valueTest="SG" value="65">Singapore (+65)</option>
                        <option valueTest="SK" value="421">Slovak Republic (+421)</option>
                        <option valueTest="SI" value="386">Slovenia (+386)</option>
                        <option valueTest="SB" value="677">Solomon Islands (+677)</option>
                        <option valueTest="SO" value="252">Somalia (+252)</option>
                        <option valueTest="ZA" value="27">South Africa (+27)</option>
                        <option valueTest="ES" value="34">Spain (+34)</option>
                        <option valueTest="LK" value="94">Sri Lanka (+94)</option>
                        <option valueTest="SH" value="290">St. Helena (+290)</option>
                        <option valueTest="KN" value="1869">St. Kitts (+1869)</option>
                        <option valueTest="SC" value="1758">St. Lucia (+1758)</option>
                        <option valueTest="SR" value="597">Suriname (+597)</option>
                        <option valueTest="SD" value="249">Sudan (+249)</option>
                        <option valueTest="SZ" value="268">Swaziland (+268)</option>
                        <option valueTest="SE" value="46">Sweden (+46)</option>
                        <option valueTest="CH" value="41">Switzerland (+41)</option>
                        <option valueTest="SY" value="963">Syria (+963)</option>
                        <option valueTest="TW" value="886">Taiwan (+886)</option>
                        <option valueTest="TJ" value="992">Tajikistan (+992)</option>
                        <option valueTest="TH" value="66">Thailand (+66)</option>
                        <option valueTest="TG" value="228">Togo (+228)</option>
                        <option valueTest="TO" value="676">Tonga (+676)</option>
                        <option valueTest="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                        <option valueTest="TN" value="216">Tunisia (+216)</option>
                        <option valueTest="TR" value="90">Turkey (+90)</option>
                        <option valueTest="TM" value="993">Turkmenistan (+993)</option>
                        <option valueTest="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                        <option valueTest="TV" value="688">Tuvalu (+688)</option>
                        <option valueTest="UG" value="256">Uganda (+256)</option>
                        <option valueTest="UA" value="380">Ukraine (+380)</option>
                        <option valueTest="AE" value="971">United Arab Emirates (+971)</option>
                        <option valueTest="UY" value="598">Uruguay (+598)</option>
                        <option valueTest="UZ" value="998">Uzbekistan (+998)</option>
                        <option valueTest="US" value="1">USA (+1)</option>
                        <option valueTest="GB" value="44">UK (+44)</option>
                        <option valueTest="VU" value="678">Vanuatu (+678)</option>
                        <option valueTest="VA" value="379">Vatican City (+379)</option>
                        <option valueTest="VE" value="58">Venezuela (+58)</option>
                        <option valueTest="VN" value="84">Vietnam (+84)</option>
                        <option valueTest="VG" value="1">Virgin Islands - British (+1)</option>
                        <option valueTest="VI" value="1">Virgin Islands - US (+1)</option>
                        <option valueTest="WF" value="681">Wallis &amp; Futuna (+681)</option>
                        <option valueTest="YE" value="969">Yemen (North)(+969)</option>
                        <option valueTest="YE" value="967">Yemen (South)(+967)</option>
                        <option valueTest="ZM" value="260">Zambia (+260)</option>
                        <option valueTest="ZW" value="263">Zimbabwe (+263)</option>
                       
                    </select>
                    @if ($errors->has('telephone_country'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('telephone_country') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="telephone">{{ __('Telephone') }}</label>
                    <input id="telephone" type="text" placeholder="Enter telephone " class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}" >
                    @if ($errors->has('telephone'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('telephone') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="extention">{{ __('Extention') }}</label>
                    <input id="extention" type="text" placeholder="Enter extention " class="form-control{{ $errors->has('extention') ? ' is-invalid' : '' }}" name="extention" value="{{ old('extention') }}" >
                    @if ($errors->has('extention'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('extention') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-4 ">
                    <label for="telephone_country_2">{{ __('Country Code (2)') }}</label>
                        <!-- <input id="telephone_country_2" type="text" placeholder="Enter Country Code (2) " class="form-control{{ $errors->has('telephone_country_2') ? ' is-invalid' : '' }}" name="telephone_country_2" value="{{ old('telephone_country_2') }}" > -->
                        <select class="form-control" name="telephone_country_2" id="telephone_country_2" > 
                        <option value="">Select Country code</option>
                        <option valueTest="DZ" value="213">Algeria (+213)</option>
                        <option valueTest="AD" value="376">Andorra (+376)</option>
                        <option valueTest="AO" value="244">Angola (+244)</option>
                        <option valueTest="AI" value="1264">Anguilla (+1264)</option>
                        <option valueTest="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                        <option valueTest="AR" value="54">Argentina (+54)</option>
                        <option valueTest="AM" value="374">Armenia (+374)</option>
                        <option valueTest="AW" value="297">Aruba (+297)</option>
                        <option valueTest="AU" value="61">Australia (+61)</option>
                        <option valueTest="AT" value="43">Austria (+43)</option>
                        <option valueTest="AZ" value="994">Azerbaijan (+994)</option>
                        <option valueTest="BS" value="1242">Bahamas (+1242)</option>
                        <option valueTest="BH" value="973">Bahrain (+973)</option>
                        <option valueTest="BD" value="880">Bangladesh (+880)</option>
                        <option valueTest="BB" value="1246">Barbados (+1246)</option>
                        <option valueTest="BY" value="375">Belarus (+375)</option>
                        <option valueTest="BE" value="32">Belgium (+32)</option>
                        <option valueTest="BZ" value="501">Belize (+501)</option>
                        <option valueTest="BJ" value="229">Benin (+229)</option>
                        <option valueTest="BM" value="1441">Bermuda (+1441)</option>
                        <option valueTest="BT" value="975">Bhutan (+975)</option>
                        <option valueTest="BO" value="591">Bolivia (+591)</option>
                        <option valueTest="BA" value="387">Bosnia Herzegovina (+387)</option>
                        <option valueTest="BW" value="267">Botswana (+267)</option>
                        <option valueTest="BR" value="55">Brazil (+55)</option>
                        <option valueTest="BN" value="673">Brunei (+673)</option>
                        <option valueTest="BG" value="359">Bulgaria (+359)</option>
                        <option valueTest="BF" value="226">Burkina Faso (+226)</option>
                        <option valueTest="BI" value="257">Burundi (+257)</option>
                        <option valueTest="KH" value="855">Cambodia (+855)</option>
                        <option valueTest="CM" value="237">Cameroon (+237)</option>
                        <option valueTest="CA" value="1">Canada (+1)</option>
                        <option valueTest="CV" value="238">Cape Verde Islands (+238)</option>
                        <option valueTest="KY" value="1345">Cayman Islands (+1345)</option>
                        <option valueTest="CF" value="236">Central African Republic (+236)</option>
                        <option valueTest="CL" value="56">Chile (+56)</option>
                        <option valueTest="CN" value="86">China (+86)</option>
                        <option valueTest="CO" value="57">Colombia (+57)</option>
                        <option valueTest="KM" value="269">Comoros (+269)</option>
                        <option valueTest="CG" value="242">Congo (+242)</option>
                        <option valueTest="CK" value="682">Cook Islands (+682)</option>
                        <option valueTest="CR" value="506">Costa Rica (+506)</option>
                        <option valueTest="HR" value="385">Croatia (+385)</option>
                        <!-- <option valueTest="CU" value="53">Cuba (+53)</option> -->
                        <option valueTest="CY" value="90">Cyprus - North (+90)</option>
                        <option valueTest="CY" value="357">Cyprus - South (+357)</option>
                        <option valueTest="CZ" value="420">Czech Republic (+420)</option>
                        <option valueTest="DK" value="45">Denmark (+45)</option>
                        <option valueTest="DJ" value="253">Djibouti (+253)</option>
                        <option valueTest="DM" value="1809">Dominica (+1809)</option>
                        <option valueTest="DO" value="1809">Dominican Republic (+1809)</option>
                        <option valueTest="EC" value="593">Ecuador (+593)</option>
                        <option valueTest="EG" value="20">Egypt (+20)</option>
                        <option valueTest="SV" value="503">El Salvador (+503)</option>
                        <option valueTest="GQ" value="240">Equatorial Guinea (+240)</option>
                        <option valueTest="ER" value="291">Eritrea (+291)</option>
                        <option valueTest="EE" value="372">Estonia (+372)</option>
                        <option valueTest="ET" value="251">Ethiopia (+251)</option>
                        <option valueTest="FK" value="500">Falkland Islands (+500)</option>
                        <option valueTest="FO" value="298">Faroe Islands (+298)</option>
                        <option valueTest="FJ" value="679">Fiji (+679)</option>
                        <option valueTest="FI" value="358">Finland (+358)</option>
                        <option valueTest="FR" value="33">France (+33)</option>
                        <option valueTest="GF" value="594">French Guiana (+594)</option>
                        <option valueTest="PF" value="689">French Polynesia (+689)</option>
                        <option valueTest="GA" value="241">Gabon (+241)</option>
                        <option valueTest="GM" value="220">Gambia (+220)</option>
                        <option valueTest="GE" value="7880">Georgia (+7880)</option>
                        <option valueTest="DE" value="49">Germany (+49)</option>
                        <option valueTest="GH" value="233">Ghana (+233)</option>
                        <option valueTest="GI" value="350">Gibraltar (+350)</option>
                        <option valueTest="GR" value="30">Greece (+30)</option>
                        <option valueTest="GL" value="299">Greenland (+299)</option>
                        <option valueTest="GD" value="1473">Grenada (+1473)</option>
                        <option valueTest="GP" value="590">Guadeloupe (+590)</option>
                        <option valueTest="GU" value="671">Guam (+671)</option>
                        <option valueTest="GT" value="502">Guatemala (+502)</option>
                        <option valueTest="GN" value="224">Guinea (+224)</option>
                        <option valueTest="GW" value="245">Guinea - Bissau (+245)</option>
                        <option valueTest="GY" value="592">Guyana (+592)</option>
                        <option valueTest="HT" value="509">Haiti (+509)</option>
                        <option valueTest="HN" value="504">Honduras (+504)</option>
                        <option valueTest="HK" value="852">Hong Kong (+852)</option>
                        <option valueTest="HU" value="36">Hungary (+36)</option>
                        <option valueTest="IS" value="354">Iceland (+354)</option>
                        <option valueTest="IN" value="91">India (+91)</option>
                        <option valueTest="ID" value="62">Indonesia (+62)</option>
                        <option valueTest="IQ" value="964">Iraq (+964)</option>
                        <!-- <option valueTest="IR" value="98">Iran (+98)</option> -->
                        <option valueTest="IE" value="353">Ireland (+353)</option>
                        <option valueTest="IL" value="972">Israel (+972)</option>
                        <option valueTest="IT" value="39">Italy (+39)</option>
                        <option valueTest="JM" value="1876">Jamaica (+1876)</option>
                        <option valueTest="JP" value="81">Japan (+81)</option>
                        <option valueTest="JO" value="962">Jordan (+962)</option>
                        <option valueTest="KZ" value="7">Kazakhstan (+7)</option>
                        <option valueTest="KE" value="254">Kenya (+254)</option>
                        <option valueTest="KI" value="686">Kiribati (+686)</option>
                        <!-- <option valueTest="KP" value="850">Korea - North (+850)</option> -->
                        <option valueTest="KR" value="82">Korea - South (+82)</option>
                        <option valueTest="KW" value="965">Kuwait (+965)</option>
                        <option valueTest="KG" value="996">Kyrgyzstan (+996)</option>
                        <option valueTest="LA" value="856">Laos (+856)</option>
                        <option valueTest="LV" value="371">Latvia (+371)</option>
                        <option valueTest="LB" value="961">Lebanon (+961)</option>
                        <option valueTest="LS" value="266">Lesotho (+266)</option>
                        <option valueTest="LR" value="231">Liberia (+231)</option>
                        <option valueTest="LY" value="218">Libya (+218)</option>
                        <option valueTest="LI" value="417">Liechtenstein (+417)</option>
                        <option valueTest="LT" value="370">Lithuania (+370)</option>
                        <option valueTest="LU" value="352">Luxembourg (+352)</option>
                        <option valueTest="MO" value="853">Macao (+853)</option>
                        <option valueTest="MK" value="389">Macedonia (+389)</option>
                        <option valueTest="MG" value="261">Madagascar (+261)</option>
                        <option valueTest="MW" value="265">Malawi (+265)</option>
                        <option valueTest="MY" value="60">Malaysia (+60)</option>
                        <option valueTest="MV" value="960">Maldives (+960)</option>
                        <option valueTest="ML" value="223">Mali (+223)</option>
                        <option valueTest="MT" value="356">Malta (+356)</option>
                        <option valueTest="MH" value="692">Marshall Islands (+692)</option>
                        <option valueTest="MQ" value="596">Martinique (+596)</option>
                        <option valueTest="MR" value="222">Mauritania (+222)</option>
                        <option valueTest="YT" value="269">Mayotte (+269)</option>
                        <option valueTest="MX" value="52">Mexico (+52)</option>
                        <option valueTest="FM" value="691">Micronesia (+691)</option>
                        <option valueTest="MD" value="373">Moldova (+373)</option>
                        <option valueTest="MC" value="377">Monaco (+377)</option>
                        <option valueTest="MN" value="976">Mongolia (+976)</option>
                        <option valueTest="MS" value="1664">Montserrat (+1664)</option>
                        <option valueTest="MA" value="212">Morocco (+212)</option>
                        <option valueTest="MZ" value="258">Mozambique (+258)</option>
                        <option valueTest="MN" value="95">Myanmar (+95)</option>
                        <option valueTest="NA" value="264">Namibia (+264)</option>
                        <option valueTest="NR" value="674">Nauru (+674)</option>
                        <option valueTest="NP" value="977">Nepal (+977)</option>
                        <option valueTest="NL" value="31">Netherlands (+31)</option>
                        <option valueTest="NC" value="687">New Caledonia (+687)</option>
                        <option valueTest="NZ" value="64">New Zealand (+64)</option>
                        <option valueTest="NI" value="505">Nicaragua (+505)</option>
                        <option valueTest="NE" value="227">Niger (+227)</option>
                        <option valueTest="NG" value="234">Nigeria (+234)</option>
                        <option valueTest="NU" value="683">Niue (+683)</option>
                        <option valueTest="NF" value="672">Norfolk Islands (+672)</option>
                        <option valueTest="NP" value="670">Northern Marianas (+670)</option>
                        <option valueTest="NO" value="47">Norway (+47)</option>
                        <option valueTest="OM" value="968">Oman (+968)</option>
                        <option valueTest="PK" value="92">Pakistan (+92)</option>
                        <option valueTest="PW" value="680">Palau (+680)</option>
                        <option valueTest="PA" value="507">Panama (+507)</option>
                        <option valueTest="PG" value="675">Papua New Guinea (+675)</option>
                        <option valueTest="PY" value="595">Paraguay (+595)</option>
                        <option valueTest="PE" value="51">Peru (+51)</option>
                        <option valueTest="PH" value="63">Philippines (+63)</option>
                        <option valueTest="PL" value="48">Poland (+48)</option>
                        <option valueTest="PT" value="351">Portugal (+351)</option>
                        <option valueTest="PR" value="1787">Puerto Rico (+1787)</option>
                        <option valueTest="QA" value="974">Qatar (+974)</option>
                        <option valueTest="RE" value="262">Reunion (+262)</option>
                        <option valueTest="RO" value="40">Romania (+40)</option>
                        <option valueTest="RU" value="7">Russia (+7)</option>
                        <option valueTest="RW" value="250">Rwanda (+250)</option>
                        <option valueTest="SM" value="378">San Marino (+378)</option>
                        <option valueTest="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                        <option valueTest="SA" value="966">Saudi Arabia (+966)</option>
                        <option valueTest="SN" value="221">Senegal (+221)</option>
                        <option valueTest="CS" value="381">Serbia (+381)</option>
                        <option valueTest="SC" value="248">Seychelles (+248)</option>
                        <option valueTest="SL" value="232">Sierra Leone (+232)</option>
                        <option valueTest="SG" value="65">Singapore (+65)</option>
                        <option valueTest="SK" value="421">Slovak Republic (+421)</option>
                        <option valueTest="SI" value="386">Slovenia (+386)</option>
                        <option valueTest="SB" value="677">Solomon Islands (+677)</option>
                        <option valueTest="SO" value="252">Somalia (+252)</option>
                        <option valueTest="ZA" value="27">South Africa (+27)</option>
                        <option valueTest="ES" value="34">Spain (+34)</option>
                        <option valueTest="LK" value="94">Sri Lanka (+94)</option>
                        <option valueTest="SH" value="290">St. Helena (+290)</option>
                        <option valueTest="KN" value="1869">St. Kitts (+1869)</option>
                        <option valueTest="SC" value="1758">St. Lucia (+1758)</option>
                        <option valueTest="SR" value="597">Suriname (+597)</option>
                        <option valueTest="SD" value="249">Sudan (+249)</option>
                        <option valueTest="SZ" value="268">Swaziland (+268)</option>
                        <option valueTest="SE" value="46">Sweden (+46)</option>
                        <option valueTest="CH" value="41">Switzerland (+41)</option>
                        <option valueTest="SY" value="963">Syria (+963)</option>
                        <option valueTest="TW" value="886">Taiwan (+886)</option>
                        <option valueTest="TJ" value="992">Tajikistan (+992)</option>
                        <option valueTest="TH" value="66">Thailand (+66)</option>
                        <option valueTest="TG" value="228">Togo (+228)</option>
                        <option valueTest="TO" value="676">Tonga (+676)</option>
                        <option valueTest="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                        <option valueTest="TN" value="216">Tunisia (+216)</option>
                        <option valueTest="TR" value="90">Turkey (+90)</option>
                        <option valueTest="TM" value="993">Turkmenistan (+993)</option>
                        <option valueTest="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                        <option valueTest="TV" value="688">Tuvalu (+688)</option>
                        <option valueTest="UG" value="256">Uganda (+256)</option>
                        <option valueTest="UA" value="380">Ukraine (+380)</option>
                        <option valueTest="AE" value="971">United Arab Emirates (+971)</option>
                        <option valueTest="UY" value="598">Uruguay (+598)</option>
                        <option valueTest="UZ" value="998">Uzbekistan (+998)</option>
                        <option valueTest="US" value="1">USA (+1)</option>
                        <option valueTest="GB" value="44">UK (+44)</option>
                        <option valueTest="VU" value="678">Vanuatu (+678)</option>
                        <option valueTest="VA" value="379">Vatican City (+379)</option>
                        <option valueTest="VE" value="58">Venezuela (+58)</option>
                        <option valueTest="VN" value="84">Vietnam (+84)</option>
                        <option valueTest="VG" value="1">Virgin Islands - British (+1)</option>
                        <option valueTest="VI" value="1">Virgin Islands - US (+1)</option>
                        <option valueTest="WF" value="681">Wallis &amp; Futuna (+681)</option>
                        <option valueTest="YE" value="969">Yemen (North)(+969)</option>
                        <option valueTest="YE" value="967">Yemen (South)(+967)</option>
                        <option valueTest="ZM" value="260">Zambia (+260)</option>
                        <option valueTest="ZW" value="263">Zimbabwe (+263)</option>
                       
                    </select>
                        @if ($errors->has('telephone_country_2'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('telephone_country_2') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="col-md-4">
                        <label for="telephone_2">{{ __('Telephone (2)') }}</label>
                        <input id="telephone_2" type="text" placeholder="Enter telephone (2) " class="form-control{{ $errors->has('telephone_2') ? ' is-invalid' : '' }}" name="telephone_2" value="{{ old('telephone_2') }}" >
                        @if ($errors->has('telephone_2'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('telephone_2') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="col-md-4">
                        <label for="extention_2">{{ __('Extention (2)') }}</label>
                        <input id="extention_2" type="text" placeholder="Enter extention (2)" class="form-control{{ $errors->has('extention_2') ? ' is-invalid' : '' }}" name="extention_2" value="{{ old('extention_2') }}" >
                        @if ($errors->has('extention_2'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('extention_2') }}</strong>
                            </span>
                        @endif
                </div>

            </div>
        </div>

        <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="facsimile_country">{{ __('Fax Country Code') }}</label>
                        <!-- <input id="facsimile_country" type="text" placeholder="Fax Country Code " class="form-control{{ $errors->has('facsimile_country') ? ' is-invalid' : '' }}" name="facsimile_country" value="{{ old('facsimile_country') }}" > -->
                        <select class="form-control" name="facsimile_country" id="facsimile_country" > 
                        <option value="">Select Country code</option>
                        <option valueTest="DZ" value="213">Algeria (+213)</option>
                        <option valueTest="AD" value="376">Andorra (+376)</option>
                        <option valueTest="AO" value="244">Angola (+244)</option>
                        <option valueTest="AI" value="1264">Anguilla (+1264)</option>
                        <option valueTest="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                        <option valueTest="AR" value="54">Argentina (+54)</option>
                        <option valueTest="AM" value="374">Armenia (+374)</option>
                        <option valueTest="AW" value="297">Aruba (+297)</option>
                        <option valueTest="AU" value="61">Australia (+61)</option>
                        <option valueTest="AT" value="43">Austria (+43)</option>
                        <option valueTest="AZ" value="994">Azerbaijan (+994)</option>
                        <option valueTest="BS" value="1242">Bahamas (+1242)</option>
                        <option valueTest="BH" value="973">Bahrain (+973)</option>
                        <option valueTest="BD" value="880">Bangladesh (+880)</option>
                        <option valueTest="BB" value="1246">Barbados (+1246)</option>
                        <option valueTest="BY" value="375">Belarus (+375)</option>
                        <option valueTest="BE" value="32">Belgium (+32)</option>
                        <option valueTest="BZ" value="501">Belize (+501)</option>
                        <option valueTest="BJ" value="229">Benin (+229)</option>
                        <option valueTest="BM" value="1441">Bermuda (+1441)</option>
                        <option valueTest="BT" value="975">Bhutan (+975)</option>
                        <option valueTest="BO" value="591">Bolivia (+591)</option>
                        <option valueTest="BA" value="387">Bosnia Herzegovina (+387)</option>
                        <option valueTest="BW" value="267">Botswana (+267)</option>
                        <option valueTest="BR" value="55">Brazil (+55)</option>
                        <option valueTest="BN" value="673">Brunei (+673)</option>
                        <option valueTest="BG" value="359">Bulgaria (+359)</option>
                        <option valueTest="BF" value="226">Burkina Faso (+226)</option>
                        <option valueTest="BI" value="257">Burundi (+257)</option>
                        <option valueTest="KH" value="855">Cambodia (+855)</option>
                        <option valueTest="CM" value="237">Cameroon (+237)</option>
                        <option valueTest="CA" value="1">Canada (+1)</option>
                        <option valueTest="CV" value="238">Cape Verde Islands (+238)</option>
                        <option valueTest="KY" value="1345">Cayman Islands (+1345)</option>
                        <option valueTest="CF" value="236">Central African Republic (+236)</option>
                        <option valueTest="CL" value="56">Chile (+56)</option>
                        <option valueTest="CN" value="86">China (+86)</option>
                        <option valueTest="CO" value="57">Colombia (+57)</option>
                        <option valueTest="KM" value="269">Comoros (+269)</option>
                        <option valueTest="CG" value="242">Congo (+242)</option>
                        <option valueTest="CK" value="682">Cook Islands (+682)</option>
                        <option valueTest="CR" value="506">Costa Rica (+506)</option>
                        <option valueTest="HR" value="385">Croatia (+385)</option>
                        <!-- <option valueTest="CU" value="53">Cuba (+53)</option> -->
                        <option valueTest="CY" value="90">Cyprus - North (+90)</option>
                        <option valueTest="CY" value="357">Cyprus - South (+357)</option>
                        <option valueTest="CZ" value="420">Czech Republic (+420)</option>
                        <option valueTest="DK" value="45">Denmark (+45)</option>
                        <option valueTest="DJ" value="253">Djibouti (+253)</option>
                        <option valueTest="DM" value="1809">Dominica (+1809)</option>
                        <option valueTest="DO" value="1809">Dominican Republic (+1809)</option>
                        <option valueTest="EC" value="593">Ecuador (+593)</option>
                        <option valueTest="EG" value="20">Egypt (+20)</option>
                        <option valueTest="SV" value="503">El Salvador (+503)</option>
                        <option valueTest="GQ" value="240">Equatorial Guinea (+240)</option>
                        <option valueTest="ER" value="291">Eritrea (+291)</option>
                        <option valueTest="EE" value="372">Estonia (+372)</option>
                        <option valueTest="ET" value="251">Ethiopia (+251)</option>
                        <option valueTest="FK" value="500">Falkland Islands (+500)</option>
                        <option valueTest="FO" value="298">Faroe Islands (+298)</option>
                        <option valueTest="FJ" value="679">Fiji (+679)</option>
                        <option valueTest="FI" value="358">Finland (+358)</option>
                        <option valueTest="FR" value="33">France (+33)</option>
                        <option valueTest="GF" value="594">French Guiana (+594)</option>
                        <option valueTest="PF" value="689">French Polynesia (+689)</option>
                        <option valueTest="GA" value="241">Gabon (+241)</option>
                        <option valueTest="GM" value="220">Gambia (+220)</option>
                        <option valueTest="GE" value="7880">Georgia (+7880)</option>
                        <option valueTest="DE" value="49">Germany (+49)</option>
                        <option valueTest="GH" value="233">Ghana (+233)</option>
                        <option valueTest="GI" value="350">Gibraltar (+350)</option>
                        <option valueTest="GR" value="30">Greece (+30)</option>
                        <option valueTest="GL" value="299">Greenland (+299)</option>
                        <option valueTest="GD" value="1473">Grenada (+1473)</option>
                        <option valueTest="GP" value="590">Guadeloupe (+590)</option>
                        <option valueTest="GU" value="671">Guam (+671)</option>
                        <option valueTest="GT" value="502">Guatemala (+502)</option>
                        <option valueTest="GN" value="224">Guinea (+224)</option>
                        <option valueTest="GW" value="245">Guinea - Bissau (+245)</option>
                        <option valueTest="GY" value="592">Guyana (+592)</option>
                        <option valueTest="HT" value="509">Haiti (+509)</option>
                        <option valueTest="HN" value="504">Honduras (+504)</option>
                        <option valueTest="HK" value="852">Hong Kong (+852)</option>
                        <option valueTest="HU" value="36">Hungary (+36)</option>
                        <option valueTest="IS" value="354">Iceland (+354)</option>
                        <option valueTest="IN" value="91">India (+91)</option>
                        <option valueTest="ID" value="62">Indonesia (+62)</option>
                        <option valueTest="IQ" value="964">Iraq (+964)</option>
                        <!-- <option valueTest="IR" value="98">Iran (+98)</option> -->
                        <option valueTest="IE" value="353">Ireland (+353)</option>
                        <option valueTest="IL" value="972">Israel (+972)</option>
                        <option valueTest="IT" value="39">Italy (+39)</option>
                        <option valueTest="JM" value="1876">Jamaica (+1876)</option>
                        <option valueTest="JP" value="81">Japan (+81)</option>
                        <option valueTest="JO" value="962">Jordan (+962)</option>
                        <option valueTest="KZ" value="7">Kazakhstan (+7)</option>
                        <option valueTest="KE" value="254">Kenya (+254)</option>
                        <option valueTest="KI" value="686">Kiribati (+686)</option>
                        <!-- <option valueTest="KP" value="850">Korea - North (+850)</option> -->
                        <option valueTest="KR" value="82">Korea - South (+82)</option>
                        <option valueTest="KW" value="965">Kuwait (+965)</option>
                        <option valueTest="KG" value="996">Kyrgyzstan (+996)</option>
                        <option valueTest="LA" value="856">Laos (+856)</option>
                        <option valueTest="LV" value="371">Latvia (+371)</option>
                        <option valueTest="LB" value="961">Lebanon (+961)</option>
                        <option valueTest="LS" value="266">Lesotho (+266)</option>
                        <option valueTest="LR" value="231">Liberia (+231)</option>
                        <option valueTest="LY" value="218">Libya (+218)</option>
                        <option valueTest="LI" value="417">Liechtenstein (+417)</option>
                        <option valueTest="LT" value="370">Lithuania (+370)</option>
                        <option valueTest="LU" value="352">Luxembourg (+352)</option>
                        <option valueTest="MO" value="853">Macao (+853)</option>
                        <option valueTest="MK" value="389">Macedonia (+389)</option>
                        <option valueTest="MG" value="261">Madagascar (+261)</option>
                        <option valueTest="MW" value="265">Malawi (+265)</option>
                        <option valueTest="MY" value="60">Malaysia (+60)</option>
                        <option valueTest="MV" value="960">Maldives (+960)</option>
                        <option valueTest="ML" value="223">Mali (+223)</option>
                        <option valueTest="MT" value="356">Malta (+356)</option>
                        <option valueTest="MH" value="692">Marshall Islands (+692)</option>
                        <option valueTest="MQ" value="596">Martinique (+596)</option>
                        <option valueTest="MR" value="222">Mauritania (+222)</option>
                        <option valueTest="YT" value="269">Mayotte (+269)</option>
                        <option valueTest="MX" value="52">Mexico (+52)</option>
                        <option valueTest="FM" value="691">Micronesia (+691)</option>
                        <option valueTest="MD" value="373">Moldova (+373)</option>
                        <option valueTest="MC" value="377">Monaco (+377)</option>
                        <option valueTest="MN" value="976">Mongolia (+976)</option>
                        <option valueTest="MS" value="1664">Montserrat (+1664)</option>
                        <option valueTest="MA" value="212">Morocco (+212)</option>
                        <option valueTest="MZ" value="258">Mozambique (+258)</option>
                        <option valueTest="MN" value="95">Myanmar (+95)</option>
                        <option valueTest="NA" value="264">Namibia (+264)</option>
                        <option valueTest="NR" value="674">Nauru (+674)</option>
                        <option valueTest="NP" value="977">Nepal (+977)</option>
                        <option valueTest="NL" value="31">Netherlands (+31)</option>
                        <option valueTest="NC" value="687">New Caledonia (+687)</option>
                        <option valueTest="NZ" value="64">New Zealand (+64)</option>
                        <option valueTest="NI" value="505">Nicaragua (+505)</option>
                        <option valueTest="NE" value="227">Niger (+227)</option>
                        <option valueTest="NG" value="234">Nigeria (+234)</option>
                        <option valueTest="NU" value="683">Niue (+683)</option>
                        <option valueTest="NF" value="672">Norfolk Islands (+672)</option>
                        <option valueTest="NP" value="670">Northern Marianas (+670)</option>
                        <option valueTest="NO" value="47">Norway (+47)</option>
                        <option valueTest="OM" value="968">Oman (+968)</option>
                        <option valueTest="PK" value="92">Pakistan (+92)</option>
                        <option valueTest="PW" value="680">Palau (+680)</option>
                        <option valueTest="PA" value="507">Panama (+507)</option>
                        <option valueTest="PG" value="675">Papua New Guinea (+675)</option>
                        <option valueTest="PY" value="595">Paraguay (+595)</option>
                        <option valueTest="PE" value="51">Peru (+51)</option>
                        <option valueTest="PH" value="63">Philippines (+63)</option>
                        <option valueTest="PL" value="48">Poland (+48)</option>
                        <option valueTest="PT" value="351">Portugal (+351)</option>
                        <option valueTest="PR" value="1787">Puerto Rico (+1787)</option>
                        <option valueTest="QA" value="974">Qatar (+974)</option>
                        <option valueTest="RE" value="262">Reunion (+262)</option>
                        <option valueTest="RO" value="40">Romania (+40)</option>
                        <option valueTest="RU" value="7">Russia (+7)</option>
                        <option valueTest="RW" value="250">Rwanda (+250)</option>
                        <option valueTest="SM" value="378">San Marino (+378)</option>
                        <option valueTest="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                        <option valueTest="SA" value="966">Saudi Arabia (+966)</option>
                        <option valueTest="SN" value="221">Senegal (+221)</option>
                        <option valueTest="CS" value="381">Serbia (+381)</option>
                        <option valueTest="SC" value="248">Seychelles (+248)</option>
                        <option valueTest="SL" value="232">Sierra Leone (+232)</option>
                        <option valueTest="SG" value="65">Singapore (+65)</option>
                        <option valueTest="SK" value="421">Slovak Republic (+421)</option>
                        <option valueTest="SI" value="386">Slovenia (+386)</option>
                        <option valueTest="SB" value="677">Solomon Islands (+677)</option>
                        <option valueTest="SO" value="252">Somalia (+252)</option>
                        <option valueTest="ZA" value="27">South Africa (+27)</option>
                        <option valueTest="ES" value="34">Spain (+34)</option>
                        <option valueTest="LK" value="94">Sri Lanka (+94)</option>
                        <option valueTest="SH" value="290">St. Helena (+290)</option>
                        <option valueTest="KN" value="1869">St. Kitts (+1869)</option>
                        <option valueTest="SC" value="1758">St. Lucia (+1758)</option>
                        <option valueTest="SR" value="597">Suriname (+597)</option>
                        <option valueTest="SD" value="249">Sudan (+249)</option>
                        <option valueTest="SZ" value="268">Swaziland (+268)</option>
                        <option valueTest="SE" value="46">Sweden (+46)</option>
                        <option valueTest="CH" value="41">Switzerland (+41)</option>
                        <option valueTest="SY" value="963">Syria (+963)</option>
                        <option valueTest="TW" value="886">Taiwan (+886)</option>
                        <option valueTest="TJ" value="992">Tajikistan (+992)</option>
                        <option valueTest="TH" value="66">Thailand (+66)</option>
                        <option valueTest="TG" value="228">Togo (+228)</option>
                        <option valueTest="TO" value="676">Tonga (+676)</option>
                        <option valueTest="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                        <option valueTest="TN" value="216">Tunisia (+216)</option>
                        <option valueTest="TR" value="90">Turkey (+90)</option>
                        <option valueTest="TM" value="993">Turkmenistan (+993)</option>
                        <option valueTest="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                        <option valueTest="TV" value="688">Tuvalu (+688)</option>
                        <option valueTest="UG" value="256">Uganda (+256)</option>
                        <option valueTest="UA" value="380">Ukraine (+380)</option>
                        <option valueTest="AE" value="971">United Arab Emirates (+971)</option>
                        <option valueTest="UY" value="598">Uruguay (+598)</option>
                        <option valueTest="UZ" value="998">Uzbekistan (+998)</option>
                        <option valueTest="US" value="1">USA (+1)</option>
                        <option valueTest="GB" value="44">UK (+44)</option>
                        <option valueTest="VU" value="678">Vanuatu (+678)</option>
                        <option valueTest="VA" value="379">Vatican City (+379)</option>
                        <option valueTest="VE" value="58">Venezuela (+58)</option>
                        <option valueTest="VN" value="84">Vietnam (+84)</option>
                        <option valueTest="VG" value="1">Virgin Islands - British (+1)</option>
                        <option valueTest="VI" value="1">Virgin Islands - US (+1)</option>
                        <option valueTest="WF" value="681">Wallis &amp; Futuna (+681)</option>
                        <option valueTest="YE" value="969">Yemen (North)(+969)</option>
                        <option valueTest="YE" value="967">Yemen (South)(+967)</option>
                        <option valueTest="ZM" value="260">Zambia (+260)</option>
                        <option valueTest="ZW" value="263">Zimbabwe (+263)</option>
                       
                    </select>
                        @if ($errors->has('facsimile_country'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('facsimile_country') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                
                    <div class="col-md-6 ">
                        <label for="facsimile">{{ __('Fax No.') }}</label>
                        <input id="facsimile" type="text" placeholder="Enter Fax Number " class="form-control{{ $errors->has('facsimile') ? ' is-invalid' : '' }}" name="facsimile" value="{{ old('facsimile') }}" >
                        @if ($errors->has('facsimile'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('facsimile') }}</strong>
                            </span>
                        @endif
                    </div>
               </div>
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-2 ">
                    <label for="mobile_area">{{ __('Country Code') }}<span style="color:red;">**</span></label>
                    <!-- <input id="mobile_area" type="text" placeholder="Enter Country Code " class="form-control{{ $errors->has('mobile_area') ? ' is-invalid' : '' }}" name="mobile_area" value="{{ old('mobile_area') }}" required> -->
                    <select class="form-control" name="mobile_area" id="mobile_area" > 
                        <option value="">Select Country code</option>
                        <option valueTest="DZ" value="213">Algeria (+213)</option>
                        <option valueTest="AD" value="376">Andorra (+376)</option>
                        <option valueTest="AO" value="244">Angola (+244)</option>
                        <option valueTest="AI" value="1264">Anguilla (+1264)</option>
                        <option valueTest="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                        <option valueTest="AR" value="54">Argentina (+54)</option>
                        <option valueTest="AM" value="374">Armenia (+374)</option>
                        <option valueTest="AW" value="297">Aruba (+297)</option>
                        <option valueTest="AU" value="61">Australia (+61)</option>
                        <option valueTest="AT" value="43">Austria (+43)</option>
                        <option valueTest="AZ" value="994">Azerbaijan (+994)</option>
                        <option valueTest="BS" value="1242">Bahamas (+1242)</option>
                        <option valueTest="BH" value="973">Bahrain (+973)</option>
                        <option valueTest="BD" value="880">Bangladesh (+880)</option>
                        <option valueTest="BB" value="1246">Barbados (+1246)</option>
                        <option valueTest="BY" value="375">Belarus (+375)</option>
                        <option valueTest="BE" value="32">Belgium (+32)</option>
                        <option valueTest="BZ" value="501">Belize (+501)</option>
                        <option valueTest="BJ" value="229">Benin (+229)</option>
                        <option valueTest="BM" value="1441">Bermuda (+1441)</option>
                        <option valueTest="BT" value="975">Bhutan (+975)</option>
                        <option valueTest="BO" value="591">Bolivia (+591)</option>
                        <option valueTest="BA" value="387">Bosnia Herzegovina (+387)</option>
                        <option valueTest="BW" value="267">Botswana (+267)</option>
                        <option valueTest="BR" value="55">Brazil (+55)</option>
                        <option valueTest="BN" value="673">Brunei (+673)</option>
                        <option valueTest="BG" value="359">Bulgaria (+359)</option>
                        <option valueTest="BF" value="226">Burkina Faso (+226)</option>
                        <option valueTest="BI" value="257">Burundi (+257)</option>
                        <option valueTest="KH" value="855">Cambodia (+855)</option>
                        <option valueTest="CM" value="237">Cameroon (+237)</option>
                        <option valueTest="CA" value="1">Canada (+1)</option>
                        <option valueTest="CV" value="238">Cape Verde Islands (+238)</option>
                        <option valueTest="KY" value="1345">Cayman Islands (+1345)</option>
                        <option valueTest="CF" value="236">Central African Republic (+236)</option>
                        <option valueTest="CL" value="56">Chile (+56)</option>
                        <option valueTest="CN" value="86">China (+86)</option>
                        <option valueTest="CO" value="57">Colombia (+57)</option>
                        <option valueTest="KM" value="269">Comoros (+269)</option>
                        <option valueTest="CG" value="242">Congo (+242)</option>
                        <option valueTest="CK" value="682">Cook Islands (+682)</option>
                        <option valueTest="CR" value="506">Costa Rica (+506)</option>
                        <option valueTest="HR" value="385">Croatia (+385)</option>
                        <!-- <option valueTest="CU" value="53">Cuba (+53)</option> -->
                        <option valueTest="CY" value="90">Cyprus - North (+90)</option>
                        <option valueTest="CY" value="357">Cyprus - South (+357)</option>
                        <option valueTest="CZ" value="420">Czech Republic (+420)</option>
                        <option valueTest="DK" value="45">Denmark (+45)</option>
                        <option valueTest="DJ" value="253">Djibouti (+253)</option>
                        <option valueTest="DM" value="1809">Dominica (+1809)</option>
                        <option valueTest="DO" value="1809">Dominican Republic (+1809)</option>
                        <option valueTest="EC" value="593">Ecuador (+593)</option>
                        <option valueTest="EG" value="20">Egypt (+20)</option>
                        <option valueTest="SV" value="503">El Salvador (+503)</option>
                        <option valueTest="GQ" value="240">Equatorial Guinea (+240)</option>
                        <option valueTest="ER" value="291">Eritrea (+291)</option>
                        <option valueTest="EE" value="372">Estonia (+372)</option>
                        <option valueTest="ET" value="251">Ethiopia (+251)</option>
                        <option valueTest="FK" value="500">Falkland Islands (+500)</option>
                        <option valueTest="FO" value="298">Faroe Islands (+298)</option>
                        <option valueTest="FJ" value="679">Fiji (+679)</option>
                        <option valueTest="FI" value="358">Finland (+358)</option>
                        <option valueTest="FR" value="33">France (+33)</option>
                        <option valueTest="GF" value="594">French Guiana (+594)</option>
                        <option valueTest="PF" value="689">French Polynesia (+689)</option>
                        <option valueTest="GA" value="241">Gabon (+241)</option>
                        <option valueTest="GM" value="220">Gambia (+220)</option>
                        <option valueTest="GE" value="7880">Georgia (+7880)</option>
                        <option valueTest="DE" value="49">Germany (+49)</option>
                        <option valueTest="GH" value="233">Ghana (+233)</option>
                        <option valueTest="GI" value="350">Gibraltar (+350)</option>
                        <option valueTest="GR" value="30">Greece (+30)</option>
                        <option valueTest="GL" value="299">Greenland (+299)</option>
                        <option valueTest="GD" value="1473">Grenada (+1473)</option>
                        <option valueTest="GP" value="590">Guadeloupe (+590)</option>
                        <option valueTest="GU" value="671">Guam (+671)</option>
                        <option valueTest="GT" value="502">Guatemala (+502)</option>
                        <option valueTest="GN" value="224">Guinea (+224)</option>
                        <option valueTest="GW" value="245">Guinea - Bissau (+245)</option>
                        <option valueTest="GY" value="592">Guyana (+592)</option>
                        <option valueTest="HT" value="509">Haiti (+509)</option>
                        <option valueTest="HN" value="504">Honduras (+504)</option>
                        <option valueTest="HK" value="852">Hong Kong (+852)</option>
                        <option valueTest="HU" value="36">Hungary (+36)</option>
                        <option valueTest="IS" value="354">Iceland (+354)</option>
                        <option valueTest="IN" value="91">India (+91)</option>
                        <option valueTest="ID" value="62">Indonesia (+62)</option>
                        <option valueTest="IQ" value="964">Iraq (+964)</option>
                        <!-- <option valueTest="IR" value="98">Iran (+98)</option> -->
                        <option valueTest="IE" value="353">Ireland (+353)</option>
                        <option valueTest="IL" value="972">Israel (+972)</option>
                        <option valueTest="IT" value="39">Italy (+39)</option>
                        <option valueTest="JM" value="1876">Jamaica (+1876)</option>
                        <option valueTest="JP" value="81">Japan (+81)</option>
                        <option valueTest="JO" value="962">Jordan (+962)</option>
                        <option valueTest="KZ" value="7">Kazakhstan (+7)</option>
                        <option valueTest="KE" value="254">Kenya (+254)</option>
                        <option valueTest="KI" value="686">Kiribati (+686)</option>
                        <!-- <option valueTest="KP" value="850">Korea - North (+850)</option> -->
                        <option valueTest="KR" value="82">Korea - South (+82)</option>
                        <option valueTest="KW" value="965">Kuwait (+965)</option>
                        <option valueTest="KG" value="996">Kyrgyzstan (+996)</option>
                        <option valueTest="LA" value="856">Laos (+856)</option>
                        <option valueTest="LV" value="371">Latvia (+371)</option>
                        <option valueTest="LB" value="961">Lebanon (+961)</option>
                        <option valueTest="LS" value="266">Lesotho (+266)</option>
                        <option valueTest="LR" value="231">Liberia (+231)</option>
                        <option valueTest="LY" value="218">Libya (+218)</option>
                        <option valueTest="LI" value="417">Liechtenstein (+417)</option>
                        <option valueTest="LT" value="370">Lithuania (+370)</option>
                        <option valueTest="LU" value="352">Luxembourg (+352)</option>
                        <option valueTest="MO" value="853">Macao (+853)</option>
                        <option valueTest="MK" value="389">Macedonia (+389)</option>
                        <option valueTest="MG" value="261">Madagascar (+261)</option>
                        <option valueTest="MW" value="265">Malawi (+265)</option>
                        <option valueTest="MY" value="60">Malaysia (+60)</option>
                        <option valueTest="MV" value="960">Maldives (+960)</option>
                        <option valueTest="ML" value="223">Mali (+223)</option>
                        <option valueTest="MT" value="356">Malta (+356)</option>
                        <option valueTest="MH" value="692">Marshall Islands (+692)</option>
                        <option valueTest="MQ" value="596">Martinique (+596)</option>
                        <option valueTest="MR" value="222">Mauritania (+222)</option>
                        <option valueTest="YT" value="269">Mayotte (+269)</option>
                        <option valueTest="MX" value="52">Mexico (+52)</option>
                        <option valueTest="FM" value="691">Micronesia (+691)</option>
                        <option valueTest="MD" value="373">Moldova (+373)</option>
                        <option valueTest="MC" value="377">Monaco (+377)</option>
                        <option valueTest="MN" value="976">Mongolia (+976)</option>
                        <option valueTest="MS" value="1664">Montserrat (+1664)</option>
                        <option valueTest="MA" value="212">Morocco (+212)</option>
                        <option valueTest="MZ" value="258">Mozambique (+258)</option>
                        <option valueTest="MN" value="95">Myanmar (+95)</option>
                        <option valueTest="NA" value="264">Namibia (+264)</option>
                        <option valueTest="NR" value="674">Nauru (+674)</option>
                        <option valueTest="NP" value="977">Nepal (+977)</option>
                        <option valueTest="NL" value="31">Netherlands (+31)</option>
                        <option valueTest="NC" value="687">New Caledonia (+687)</option>
                        <option valueTest="NZ" value="64">New Zealand (+64)</option>
                        <option valueTest="NI" value="505">Nicaragua (+505)</option>
                        <option valueTest="NE" value="227">Niger (+227)</option>
                        <option valueTest="NG" value="234">Nigeria (+234)</option>
                        <option valueTest="NU" value="683">Niue (+683)</option>
                        <option valueTest="NF" value="672">Norfolk Islands (+672)</option>
                        <option valueTest="NP" value="670">Northern Marianas (+670)</option>
                        <option valueTest="NO" value="47">Norway (+47)</option>
                        <option valueTest="OM" value="968">Oman (+968)</option>
                        <option valueTest="PK" value="92">Pakistan (+92)</option>
                        <option valueTest="PW" value="680">Palau (+680)</option>
                        <option valueTest="PA" value="507">Panama (+507)</option>
                        <option valueTest="PG" value="675">Papua New Guinea (+675)</option>
                        <option valueTest="PY" value="595">Paraguay (+595)</option>
                        <option valueTest="PE" value="51">Peru (+51)</option>
                        <option valueTest="PH" value="63">Philippines (+63)</option>
                        <option valueTest="PL" value="48">Poland (+48)</option>
                        <option valueTest="PT" value="351">Portugal (+351)</option>
                        <option valueTest="PR" value="1787">Puerto Rico (+1787)</option>
                        <option valueTest="QA" value="974">Qatar (+974)</option>
                        <option valueTest="RE" value="262">Reunion (+262)</option>
                        <option valueTest="RO" value="40">Romania (+40)</option>
                        <option valueTest="RU" value="7">Russia (+7)</option>
                        <option valueTest="RW" value="250">Rwanda (+250)</option>
                        <option valueTest="SM" value="378">San Marino (+378)</option>
                        <option valueTest="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                        <option valueTest="SA" value="966">Saudi Arabia (+966)</option>
                        <option valueTest="SN" value="221">Senegal (+221)</option>
                        <option valueTest="CS" value="381">Serbia (+381)</option>
                        <option valueTest="SC" value="248">Seychelles (+248)</option>
                        <option valueTest="SL" value="232">Sierra Leone (+232)</option>
                        <option valueTest="SG" value="65">Singapore (+65)</option>
                        <option valueTest="SK" value="421">Slovak Republic (+421)</option>
                        <option valueTest="SI" value="386">Slovenia (+386)</option>
                        <option valueTest="SB" value="677">Solomon Islands (+677)</option>
                        <option valueTest="SO" value="252">Somalia (+252)</option>
                        <option valueTest="ZA" value="27">South Africa (+27)</option>
                        <option valueTest="ES" value="34">Spain (+34)</option>
                        <option valueTest="LK" value="94">Sri Lanka (+94)</option>
                        <option valueTest="SH" value="290">St. Helena (+290)</option>
                        <option valueTest="KN" value="1869">St. Kitts (+1869)</option>
                        <option valueTest="SC" value="1758">St. Lucia (+1758)</option>
                        <option valueTest="SR" value="597">Suriname (+597)</option>
                        <option valueTest="SD" value="249">Sudan (+249)</option>
                        <option valueTest="SZ" value="268">Swaziland (+268)</option>
                        <option valueTest="SE" value="46">Sweden (+46)</option>
                        <option valueTest="CH" value="41">Switzerland (+41)</option>
                        <option valueTest="SY" value="963">Syria (+963)</option>
                        <option valueTest="TW" value="886">Taiwan (+886)</option>
                        <option valueTest="TJ" value="992">Tajikistan (+992)</option>
                        <option valueTest="TH" value="66">Thailand (+66)</option>
                        <option valueTest="TG" value="228">Togo (+228)</option>
                        <option valueTest="TO" value="676">Tonga (+676)</option>
                        <option valueTest="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                        <option valueTest="TN" value="216">Tunisia (+216)</option>
                        <option valueTest="TR" value="90">Turkey (+90)</option>
                        <option valueTest="TM" value="993">Turkmenistan (+993)</option>
                        <option valueTest="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                        <option valueTest="TV" value="688">Tuvalu (+688)</option>
                        <option valueTest="UG" value="256">Uganda (+256)</option>
                        <option valueTest="UA" value="380">Ukraine (+380)</option>
                        <option valueTest="AE" value="971">United Arab Emirates (+971)</option>
                        <option valueTest="UY" value="598">Uruguay (+598)</option>
                        <option valueTest="UZ" value="998">Uzbekistan (+998)</option>
                        <option valueTest="US" value="1">USA (+1)</option>
                        <option valueTest="GB" value="44">UK (+44)</option>
                        <option valueTest="VU" value="678">Vanuatu (+678)</option>
                        <option valueTest="VA" value="379">Vatican City (+379)</option>
                        <option valueTest="VE" value="58">Venezuela (+58)</option>
                        <option valueTest="VN" value="84">Vietnam (+84)</option>
                        <option valueTest="VG" value="1">Virgin Islands - British (+1)</option>
                        <option valueTest="VI" value="1">Virgin Islands - US (+1)</option>
                        <option valueTest="WF" value="681">Wallis &amp; Futuna (+681)</option>
                        <option valueTest="YE" value="969">Yemen (North)(+969)</option>
                        <option valueTest="YE" value="967">Yemen (South)(+967)</option>
                        <option valueTest="ZM" value="260">Zambia (+260)</option>
                        <option valueTest="ZW" value="263">Zimbabwe (+263)</option>
                       
                    </select>   
                    @if ($errors->has('mobile_area'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('mobile_area') }}</strong>
                        </span>
                    @endif
                </div>

               
                <div class="col-md-4">
                    <label for="mobile_number">{{ __('Mobile Number') }}<span style="color:red;">**</span></label>
                    <input id="mobile_number" type="text" placeholder="Enter mobile_number " class="form-control{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}" name="mobile_number" value="{{ old('mobile_number') }}" required>
                    @if ($errors->has('mobile_number'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('mobile_number') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-2">
                    <label for="mobile_area_2">{{ __('Country Code (2)') }}</label>
                    <!-- <input id="mobile_area_2" type="text" placeholder="Enter Country Code " class="form-control{{ $errors->has('mobile_area_2') ? ' is-invalid' : '' }}" name="mobile_area_2" value="{{ old('mobile_area_2') }}" > -->
                    <select class="form-control" name="mobile_area_2" id="mobile_area_2" > 
                        <option value="">Select Country code</option>
                        <option valueTest="DZ" value="213">Algeria (+213)</option>
                        <option valueTest="AD" value="376">Andorra (+376)</option>
                        <option valueTest="AO" value="244">Angola (+244)</option>
                        <option valueTest="AI" value="1264">Anguilla (+1264)</option>
                        <option valueTest="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                        <option valueTest="AR" value="54">Argentina (+54)</option>
                        <option valueTest="AM" value="374">Armenia (+374)</option>
                        <option valueTest="AW" value="297">Aruba (+297)</option>
                        <option valueTest="AU" value="61">Australia (+61)</option>
                        <option valueTest="AT" value="43">Austria (+43)</option>
                        <option valueTest="AZ" value="994">Azerbaijan (+994)</option>
                        <option valueTest="BS" value="1242">Bahamas (+1242)</option>
                        <option valueTest="BH" value="973">Bahrain (+973)</option>
                        <option valueTest="BD" value="880">Bangladesh (+880)</option>
                        <option valueTest="BB" value="1246">Barbados (+1246)</option>
                        <option valueTest="BY" value="375">Belarus (+375)</option>
                        <option valueTest="BE" value="32">Belgium (+32)</option>
                        <option valueTest="BZ" value="501">Belize (+501)</option>
                        <option valueTest="BJ" value="229">Benin (+229)</option>
                        <option valueTest="BM" value="1441">Bermuda (+1441)</option>
                        <option valueTest="BT" value="975">Bhutan (+975)</option>
                        <option valueTest="BO" value="591">Bolivia (+591)</option>
                        <option valueTest="BA" value="387">Bosnia Herzegovina (+387)</option>
                        <option valueTest="BW" value="267">Botswana (+267)</option>
                        <option valueTest="BR" value="55">Brazil (+55)</option>
                        <option valueTest="BN" value="673">Brunei (+673)</option>
                        <option valueTest="BG" value="359">Bulgaria (+359)</option>
                        <option valueTest="BF" value="226">Burkina Faso (+226)</option>
                        <option valueTest="BI" value="257">Burundi (+257)</option>
                        <option valueTest="KH" value="855">Cambodia (+855)</option>
                        <option valueTest="CM" value="237">Cameroon (+237)</option>
                        <option valueTest="CA" value="1">Canada (+1)</option>
                        <option valueTest="CV" value="238">Cape Verde Islands (+238)</option>
                        <option valueTest="KY" value="1345">Cayman Islands (+1345)</option>
                        <option valueTest="CF" value="236">Central African Republic (+236)</option>
                        <option valueTest="CL" value="56">Chile (+56)</option>
                        <option valueTest="CN" value="86">China (+86)</option>
                        <option valueTest="CO" value="57">Colombia (+57)</option>
                        <option valueTest="KM" value="269">Comoros (+269)</option>
                        <option valueTest="CG" value="242">Congo (+242)</option>
                        <option valueTest="CK" value="682">Cook Islands (+682)</option>
                        <option valueTest="CR" value="506">Costa Rica (+506)</option>
                        <option valueTest="HR" value="385">Croatia (+385)</option>
                        <!-- <option valueTest="CU" value="53">Cuba (+53)</option> -->
                        <option valueTest="CY" value="90">Cyprus - North (+90)</option>
                        <option valueTest="CY" value="357">Cyprus - South (+357)</option>
                        <option valueTest="CZ" value="420">Czech Republic (+420)</option>
                        <option valueTest="DK" value="45">Denmark (+45)</option>
                        <option valueTest="DJ" value="253">Djibouti (+253)</option>
                        <option valueTest="DM" value="1809">Dominica (+1809)</option>
                        <option valueTest="DO" value="1809">Dominican Republic (+1809)</option>
                        <option valueTest="EC" value="593">Ecuador (+593)</option>
                        <option valueTest="EG" value="20">Egypt (+20)</option>
                        <option valueTest="SV" value="503">El Salvador (+503)</option>
                        <option valueTest="GQ" value="240">Equatorial Guinea (+240)</option>
                        <option valueTest="ER" value="291">Eritrea (+291)</option>
                        <option valueTest="EE" value="372">Estonia (+372)</option>
                        <option valueTest="ET" value="251">Ethiopia (+251)</option>
                        <option valueTest="FK" value="500">Falkland Islands (+500)</option>
                        <option valueTest="FO" value="298">Faroe Islands (+298)</option>
                        <option valueTest="FJ" value="679">Fiji (+679)</option>
                        <option valueTest="FI" value="358">Finland (+358)</option>
                        <option valueTest="FR" value="33">France (+33)</option>
                        <option valueTest="GF" value="594">French Guiana (+594)</option>
                        <option valueTest="PF" value="689">French Polynesia (+689)</option>
                        <option valueTest="GA" value="241">Gabon (+241)</option>
                        <option valueTest="GM" value="220">Gambia (+220)</option>
                        <option valueTest="GE" value="7880">Georgia (+7880)</option>
                        <option valueTest="DE" value="49">Germany (+49)</option>
                        <option valueTest="GH" value="233">Ghana (+233)</option>
                        <option valueTest="GI" value="350">Gibraltar (+350)</option>
                        <option valueTest="GR" value="30">Greece (+30)</option>
                        <option valueTest="GL" value="299">Greenland (+299)</option>
                        <option valueTest="GD" value="1473">Grenada (+1473)</option>
                        <option valueTest="GP" value="590">Guadeloupe (+590)</option>
                        <option valueTest="GU" value="671">Guam (+671)</option>
                        <option valueTest="GT" value="502">Guatemala (+502)</option>
                        <option valueTest="GN" value="224">Guinea (+224)</option>
                        <option valueTest="GW" value="245">Guinea - Bissau (+245)</option>
                        <option valueTest="GY" value="592">Guyana (+592)</option>
                        <option valueTest="HT" value="509">Haiti (+509)</option>
                        <option valueTest="HN" value="504">Honduras (+504)</option>
                        <option valueTest="HK" value="852">Hong Kong (+852)</option>
                        <option valueTest="HU" value="36">Hungary (+36)</option>
                        <option valueTest="IS" value="354">Iceland (+354)</option>
                        <option valueTest="IN" value="91">India (+91)</option>
                        <option valueTest="ID" value="62">Indonesia (+62)</option>
                        <option valueTest="IQ" value="964">Iraq (+964)</option>
                        <!-- <option valueTest="IR" value="98">Iran (+98)</option> -->
                        <option valueTest="IE" value="353">Ireland (+353)</option>
                        <option valueTest="IL" value="972">Israel (+972)</option>
                        <option valueTest="IT" value="39">Italy (+39)</option>
                        <option valueTest="JM" value="1876">Jamaica (+1876)</option>
                        <option valueTest="JP" value="81">Japan (+81)</option>
                        <option valueTest="JO" value="962">Jordan (+962)</option>
                        <option valueTest="KZ" value="7">Kazakhstan (+7)</option>
                        <option valueTest="KE" value="254">Kenya (+254)</option>
                        <option valueTest="KI" value="686">Kiribati (+686)</option>
                        <!-- <option valueTest="KP" value="850">Korea - North (+850)</option> -->
                        <option valueTest="KR" value="82">Korea - South (+82)</option>
                        <option valueTest="KW" value="965">Kuwait (+965)</option>
                        <option valueTest="KG" value="996">Kyrgyzstan (+996)</option>
                        <option valueTest="LA" value="856">Laos (+856)</option>
                        <option valueTest="LV" value="371">Latvia (+371)</option>
                        <option valueTest="LB" value="961">Lebanon (+961)</option>
                        <option valueTest="LS" value="266">Lesotho (+266)</option>
                        <option valueTest="LR" value="231">Liberia (+231)</option>
                        <option valueTest="LY" value="218">Libya (+218)</option>
                        <option valueTest="LI" value="417">Liechtenstein (+417)</option>
                        <option valueTest="LT" value="370">Lithuania (+370)</option>
                        <option valueTest="LU" value="352">Luxembourg (+352)</option>
                        <option valueTest="MO" value="853">Macao (+853)</option>
                        <option valueTest="MK" value="389">Macedonia (+389)</option>
                        <option valueTest="MG" value="261">Madagascar (+261)</option>
                        <option valueTest="MW" value="265">Malawi (+265)</option>
                        <option valueTest="MY" value="60">Malaysia (+60)</option>
                        <option valueTest="MV" value="960">Maldives (+960)</option>
                        <option valueTest="ML" value="223">Mali (+223)</option>
                        <option valueTest="MT" value="356">Malta (+356)</option>
                        <option valueTest="MH" value="692">Marshall Islands (+692)</option>
                        <option valueTest="MQ" value="596">Martinique (+596)</option>
                        <option valueTest="MR" value="222">Mauritania (+222)</option>
                        <option valueTest="YT" value="269">Mayotte (+269)</option>
                        <option valueTest="MX" value="52">Mexico (+52)</option>
                        <option valueTest="FM" value="691">Micronesia (+691)</option>
                        <option valueTest="MD" value="373">Moldova (+373)</option>
                        <option valueTest="MC" value="377">Monaco (+377)</option>
                        <option valueTest="MN" value="976">Mongolia (+976)</option>
                        <option valueTest="MS" value="1664">Montserrat (+1664)</option>
                        <option valueTest="MA" value="212">Morocco (+212)</option>
                        <option valueTest="MZ" value="258">Mozambique (+258)</option>
                        <option valueTest="MN" value="95">Myanmar (+95)</option>
                        <option valueTest="NA" value="264">Namibia (+264)</option>
                        <option valueTest="NR" value="674">Nauru (+674)</option>
                        <option valueTest="NP" value="977">Nepal (+977)</option>
                        <option valueTest="NL" value="31">Netherlands (+31)</option>
                        <option valueTest="NC" value="687">New Caledonia (+687)</option>
                        <option valueTest="NZ" value="64">New Zealand (+64)</option>
                        <option valueTest="NI" value="505">Nicaragua (+505)</option>
                        <option valueTest="NE" value="227">Niger (+227)</option>
                        <option valueTest="NG" value="234">Nigeria (+234)</option>
                        <option valueTest="NU" value="683">Niue (+683)</option>
                        <option valueTest="NF" value="672">Norfolk Islands (+672)</option>
                        <option valueTest="NP" value="670">Northern Marianas (+670)</option>
                        <option valueTest="NO" value="47">Norway (+47)</option>
                        <option valueTest="OM" value="968">Oman (+968)</option>
                        <option valueTest="PK" value="92">Pakistan (+92)</option>
                        <option valueTest="PW" value="680">Palau (+680)</option>
                        <option valueTest="PA" value="507">Panama (+507)</option>
                        <option valueTest="PG" value="675">Papua New Guinea (+675)</option>
                        <option valueTest="PY" value="595">Paraguay (+595)</option>
                        <option valueTest="PE" value="51">Peru (+51)</option>
                        <option valueTest="PH" value="63">Philippines (+63)</option>
                        <option valueTest="PL" value="48">Poland (+48)</option>
                        <option valueTest="PT" value="351">Portugal (+351)</option>
                        <option valueTest="PR" value="1787">Puerto Rico (+1787)</option>
                        <option valueTest="QA" value="974">Qatar (+974)</option>
                        <option valueTest="RE" value="262">Reunion (+262)</option>
                        <option valueTest="RO" value="40">Romania (+40)</option>
                        <option valueTest="RU" value="7">Russia (+7)</option>
                        <option valueTest="RW" value="250">Rwanda (+250)</option>
                        <option valueTest="SM" value="378">San Marino (+378)</option>
                        <option valueTest="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                        <option valueTest="SA" value="966">Saudi Arabia (+966)</option>
                        <option valueTest="SN" value="221">Senegal (+221)</option>
                        <option valueTest="CS" value="381">Serbia (+381)</option>
                        <option valueTest="SC" value="248">Seychelles (+248)</option>
                        <option valueTest="SL" value="232">Sierra Leone (+232)</option>
                        <option valueTest="SG" value="65">Singapore (+65)</option>
                        <option valueTest="SK" value="421">Slovak Republic (+421)</option>
                        <option valueTest="SI" value="386">Slovenia (+386)</option>
                        <option valueTest="SB" value="677">Solomon Islands (+677)</option>
                        <option valueTest="SO" value="252">Somalia (+252)</option>
                        <option valueTest="ZA" value="27">South Africa (+27)</option>
                        <option valueTest="ES" value="34">Spain (+34)</option>
                        <option valueTest="LK" value="94">Sri Lanka (+94)</option>
                        <option valueTest="SH" value="290">St. Helena (+290)</option>
                        <option valueTest="KN" value="1869">St. Kitts (+1869)</option>
                        <option valueTest="SC" value="1758">St. Lucia (+1758)</option>
                        <option valueTest="SR" value="597">Suriname (+597)</option>
                        <option valueTest="SD" value="249">Sudan (+249)</option>
                        <option valueTest="SZ" value="268">Swaziland (+268)</option>
                        <option valueTest="SE" value="46">Sweden (+46)</option>
                        <option valueTest="CH" value="41">Switzerland (+41)</option>
                        <option valueTest="SY" value="963">Syria (+963)</option>
                        <option valueTest="TW" value="886">Taiwan (+886)</option>
                        <option valueTest="TJ" value="992">Tajikistan (+992)</option>
                        <option valueTest="TH" value="66">Thailand (+66)</option>
                        <option valueTest="TG" value="228">Togo (+228)</option>
                        <option valueTest="TO" value="676">Tonga (+676)</option>
                        <option valueTest="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                        <option valueTest="TN" value="216">Tunisia (+216)</option>
                        <option valueTest="TR" value="90">Turkey (+90)</option>
                        <option valueTest="TM" value="993">Turkmenistan (+993)</option>
                        <option valueTest="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                        <option valueTest="TV" value="688">Tuvalu (+688)</option>
                        <option valueTest="UG" value="256">Uganda (+256)</option>
                        <option valueTest="UA" value="380">Ukraine (+380)</option>
                        <option valueTest="AE" value="971">United Arab Emirates (+971)</option>
                        <option valueTest="UY" value="598">Uruguay (+598)</option>
                        <option valueTest="UZ" value="998">Uzbekistan (+998)</option>
                        <option valueTest="US" value="1">USA (+1)</option>
                        <option valueTest="GB" value="44">UK (+44)</option>
                        <option valueTest="VU" value="678">Vanuatu (+678)</option>
                        <option valueTest="VA" value="379">Vatican City (+379)</option>
                        <option valueTest="VE" value="58">Venezuela (+58)</option>
                        <option valueTest="VN" value="84">Vietnam (+84)</option>
                        <option valueTest="VG" value="1">Virgin Islands - British (+1)</option>
                        <option valueTest="VI" value="1">Virgin Islands - US (+1)</option>
                        <option valueTest="WF" value="681">Wallis &amp; Futuna (+681)</option>
                        <option valueTest="YE" value="969">Yemen (North)(+969)</option>
                        <option valueTest="YE" value="967">Yemen (South)(+967)</option>
                        <option valueTest="ZM" value="260">Zambia (+260)</option>
                        <option valueTest="ZW" value="263">Zimbabwe (+263)</option>
                    </select>
                    @if ($errors->has('mobile_area_2'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('mobile_area_2') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="mobile_number_2">{{ __('Mobile Number (2)') }}</label>
                    <input id="mobile_number_2" type="text" placeholder="Enter Mobile Number (opt) " class="form-control{{ $errors->has('mobile_number_2') ? ' is-invalid' : '' }}" name="mobile_number_2" value="{{ old('mobile_number_2') }}" >
                    @if ($errors->has('mobile_number_2'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('mobile_number_2') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
        </div>

        <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-3 ">
                    <label for="email_work">{{ __('Email Work') }}<span style="color:red;">*</span></label>
                    <input id="email_work" type="text" placeholder="Enter Email Work " class="form-control{{ $errors->has('email_work') ? ' is-invalid' : '' }}" name="email_work" value="{{ old('email_work') }}" required>
                    @if ($errors->has('email_work'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email_work') }}</strong>
                        </span>
                    @endif
                </div>

               
                <div class="col-md-3">
                    <label for="email_private">{{ __('Private Email') }}</label>
                    <input id="email_private" type="text" placeholder="Enter Email Private " class="form-control{{ $errors->has('email_private') ? ' is-invalid' : '' }}" name="email_private" value="{{ old('email_private') }}" >
                    @if ($errors->has('email_private'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email_private') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-3">
                    <label for="email">{{ __('Email') }}</label>
                    <input id="email" type="text" placeholder="Enter email " class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <label for="company_website">{{ __('Company Website') }}</label>
                    <input id="company_website" type="text" placeholder="Enter Company Website " class="form-control{{ $errors->has('company_website') ? ' is-invalid' : '' }}" name="company_website" value="{{ old('company_website') }}" >
                    @if ($errors->has('company_website'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('company_website') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
        </div>

    </fieldset>	
    <fieldset class="col-md-12" style="background-color:#fff; margin-top:20px;">    	
        <legend>Event Info</legend>
        <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-3">
                    <label for="category">{{ __('Category') }}</label>
                    <!-- <input id="category" type="text" placeholder="Enter category " class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{ old('category') }}" > -->
                    <select class="form-control" name="category" id="category" >
                            <option value="">Select Category</option>
                            <option value="Delegate">Delegate</option>
                            <option value="Speaker">Speaker</option>
                            <option value="Guest">Guest</option>
                            <option value="Exhibitor">Exhibitor</option>
                            <option value="Media">Media</option>
                            <option value="Student">Student</option> 
                            <option value="Organiser">Organiser</option>
                            <option value="Sponsor">Sponsor</option>
                    </select>
                    @if ($errors->has('category'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                    @endif
                </div>
  
                
                <!-- <div class="col-md-3 ">
                    <label for="event_id">{{ __('Event ID') }}</label>
                    <!-- <input id="event_id" type="text" placeholder="Enter Event ID " class="form-control{{ $errors->has('event_id') ? ' is-invalid' : '' }}" name="event_id" value="{{ old('event_id') }}" > -->
                    <!-- <select class="form-control" name="event_id" id="event_id" >     
                        <option value="">Select Event ID</option>-->
                        <!-- @if(count($event_id ) > 0)
                            @foreach($event_id as $post)
                              
                                <option value="{{$post->event_id}}">{{$post->event_id}}</option>
                                
                                    @endforeach
                        @endif -->
                                                      
                    </select>
                    <!-- @if ($errors->has('event_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('event_id') }}</strong>
                        </span>
                    @endif 
                </div> -->
                <script>
                    window.onload=function() { 
                    document.getElementById("event_id").onchange=function() {
                        document.getElementById("event_name").value=this.options[this.selectedIndex].getAttribute("data-sync"); 
                        document.getElementById("event_date").value=this.options[this.selectedIndex].getAttribute("data-sync1");
                        document.getElementById("event_place").value=this.options[this.selectedIndex].getAttribute("data-sync2");

                    }
                    document.getElementById("country").onchange=function() {
                        document.getElementById("telephone_country").value=this.options[this.selectedIndex].getAttribute("code"); 
                        document.getElementById("telephone_country_2").value=this.options[this.selectedIndex].getAttribute("code");
                        document.getElementById("facsimile_country").value=this.options[this.selectedIndex].getAttribute("code");
                        document.getElementById("mobile_area").value=this.options[this.selectedIndex].getAttribute("code");
                        document.getElementById("mobile_area_2").value=this.options[this.selectedIndex].getAttribute("code");
                       
                    }
                    document.getElementById("event_id").onchange();
                    document.getElementById("country").onchange();
                     // trigger when loading
                    }
                </script>

                 
                <div class="col-md-3 ">
                    <label for="event_id">{{ __('Event ID') }}</label>
                   
                    <select class="form-control" name="event_id" id="event_id">    
                        <option value="" data-sync="" data-sync1="" data-sync2="">Select Event ID</option>
                        <option value="GCC-Dubai-17" data-sync="GCC Pharma Regulatory Summit 2017" data-sync1="10-11 April 2017" data-sync2="Dubai, UAE" >GCC-Dubai-17</option>
                        <option value="GCC-Dubai-18" data-sync="GCC Pharma Regulatory Summit 2018" data-sync1="14-15 March 2018" data-sync2="Dubai, UAE">GCC-Dubai-18</option> 
                        <option value="PRC-Cairo-17" data-sync="Egypt Pharma Regulatory Conference 2017" data-sync1="15-16 October 2017" data-sync2="Cairo, Egypt">PRC-Cairo-17 </option> 
                        <option value="PRC-Cairo-18" data-sync="Egypt Pharma Regulatory Conference 2018" data-sync1="15-16 October 2018" data-sync2="Cairo, Egypt">PRC-Cairo-18 </option> 
                        <option value="eCTD-Dubai-Apr17" data-sync="eCTD Training Dubai April 2017" data-sync1="9 April 2017" data-sync2="Dubai, UAE">eCTD-Dubai-Apr17 </option> 
                        <option value="eCTD-Dubai-Sep17" data-sync="eCTD Training, Dubai September 2017" data-sync1="27-28 September 2017" data-sync2="Dubai, UAE">eCTD-Dubai-Sep17</option> 
                        <option value="eCTD-Dubai-Mar18" data-sync="eCTD Training Dubai 2018" data-sync1="13 March 2018" data-sync2="Dubai, UAE">CTD-Dubai-Mar18</option> 
                        <option value="eCTD-Cairo-17" data-sync="eCTD Training Cairo 2017" data-sync1="17 October 2017" data-sync2="Dubai, UAE">eCTD-Cairo-17</option>
                        <option value="MSC-Dubai-18" data-sync="Medication Safety Conference 2018" data-sync1="11 March 2018" data-sync2="Dubai, UAE">MSC-Dubai-18</option> 
                        <option value="PV-Dubai-Apr17" data-sync="Pharmacovigilance training Dubai 2017" data-sync1="12-13 April 2017" data-sync2="Dubai, UAE">PV-Dubai-Apr17</option> 
                        <option value="PV-Dubai-Mar18" data-sync="Pharmacovigilance training Dubai 2018" data-sync1="12-13 March 2018" data-sync2="Dubai, UAE">PV-Dubai-Mar18</option> 
                                         
                    </select>
                    @if ($errors->has('event_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('event_id') }}</strong>
                        </span>
                    @endif
                </div>
               
               
                <div class="col-md-3 ">
                    <label for="event_name">{{ __('Event Name') }}</label>
                    <!-- <input id="event_name" type="text" placeholder="Enter Event Name " class="form-control{{ $errors->has('event_name') ? ' is-invalid' : '' }}" name="event_name" value="{{ old('event_name') }}" > -->
                    <select class="form-control" name="event_name" id="event_name" >    
                        <option value="" >Select Event Name</option>
                        <option value="GCC Pharma Regulatory Summit 2017">GCC Pharma Regulatory Summit 2017 </option>
                        <option value="GCC Pharma Regulatory Summit 2018"> GCC Pharma Regulatory Summit 2018 </option> 
                        <option value="Egypt Pharma Regulatory Conference 2017">Egypt Pharma Regulatory Conference 2017  </option> 
                        <option value="Egypt Pharma Regulatory Conference 2018">Egypt Pharma Regulatory Conference 2018  </option> 
                        <option value="eCTD Training Dubai April 2017">eCTD Training Dubai April 2017 </option> 
                        <option value="eCTD Training, Dubai September 2017">eCTD Training, Dubai September 2017 </option> 
                        <option value="eCTD Training Dubai 2018">eCTD Training Dubai 2018</option> 
                        <option value="eCTD Training Cairo 2017">eCTD Training Cairo 2017 </option> 
                        <option value="Medication Safety Conference 2018">Medication Safety Conference 2018</option> 
                        <option value="Pharmacovigilance training Dubai 2017">Pharmacovigilance training Dubai 2017</option> 
                        <option value="Pharmacovigilance training Dubai 2018">Pharmacovigilance training Dubai 2018 </option> 
                                         
                    </select>
                    @if ($errors->has('event_name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('event_name') }}</strong>
                        </span>
                    @endif
                </div>

                 <div class="col-md-3 ">
                    <label for="event_date">{{ __('Event Date') }}</label>
                    <!-- <input id="event_date" type="text" placeholder="dd/mm/yyyy " class="form-control{{ $errors->has('event_date') ? ' is-invalid' : '' }}" name="event_date" value="{{ old('event_date') }}" > -->
                    <select class="form-control" name="event_date" id="event_date">    
                        <option value="">Select Event Data</option>
                        <option value="10-11 April 2017" > 10-11 April 2017</option>
                        <option value="14-15 March 2018"> 14-15 March 2018 </option> 
                        <option value="15-16 October 2017">15-16 October 2017</option> 
                        <option value="15-16 October 2018"> 15-16 October 2018 </option> 
                        <option value="9 April 2017">9 April 2017 </option> 
                        <option value="27-28 September 2017">27-28 September 2017 </option> 
                        <option value="17 October 2017">17 October 2017  </option> 
                        <option value="13 March 2018">13 March 2018  </option> 
                        <option value="11 March 2018">11 March 2018 </option> 
                        <option value="12-13 April 2017"> 12-13 April 2017  </option> 
                        <option value="12-13 March 2018">12-13 March 2018 </option> 
                                         
                    </select>
                    @if ($errors->has('event_date'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('event_date') }}</strong>
                        </span>
                    @endif
                </div>
               

            </div>
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="form-group row">
                    <div class="col-md-3 ">
                        <label for="event_place">{{ __('Event Place') }}</label>
                        <!-- <input id="event_place" type="text" placeholder="Enter Event Place" class="form-control{{ $errors->has('event_place') ? ' is-invalid' : '' }}" name="event_place" value="{{ old('event_place') }}" > -->
                        <select class="form-control" name="event_place" id="event_place">    
                        <option value="">Select Event Place</option>
                        <option value="Dubai, UAE">Dubai, UAE</option>
                        <option value="Cairo, Egypt">Cairo, Egypt</option>
                        </select>
                        @if ($errors->has('event_place'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('event_place') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-1 " style="margin-top: 30px;">
                        <button type="button" id="text_value"class="btn btn-primary show_button">Add</button> 
                    </div>
                 
                    <div class="col-md-5 " >
                    <label for="history_mwan_events_attend">{{ __('Event History') }}</label>
                    <textarea rows="3" cols="125" name="history_mwan_events_attend" id="history_mwan_events_attend" class="form-control" style="height:60px !important; width:710px !important;" >
                    </textarea>

                    <script>
                      var event_history = [];
                $(document).ready(function() {
                    
                    // Function to get input value.
                    $('#text_value').click(function() {
                    var category = $("#category").val();
                    var event_id = $("#event_id").val();
                    var event_name = $("#event_name").val();
                    var event_date = $("#event_date").val();
                    var event_place = $("#event_place").val();

                    var categoryS = category.concat(" \t ");
                    var event_idS = event_id.concat(" \t ");
                    var event_nameS = event_name.concat(" \t ");
                    var event_dateS = event_date.concat(" \t ");
                    var event_placeS = event_place.concat(" \t ");

                    if(category =='' || event_id == '' ) {
                    alert("select Some Text In category or Event ID ");
                    }else{
                       
                        var event_history_detail  = categoryS.concat(event_idS,event_nameS,event_dateS,event_placeS);
                        var event_history_detail = event_history_detail.concat("\n");
                        event_history.push(event_history_detail);
                        

                    document.getElementById("history_mwan_events_attend").value= event_history;
                    console.log("\n");
                    }
                    // empty 
                    $("#category").val('');
                    $("#event_id").val('');
                    $("#event_name").val('');
                    $("#event_date").val('');
                    $("#event_place").val('');
                    console.log(event_history);
                    });
                  
                   



// To get value of textarea.
$('#textarea_value').click(function() {
var textarea_value = $("#textarea").val();
if(textarea_value=='') {
alert("Enter Some Text In Textarea");
}else{


}
});
$('#textarea_reset').click(function() {
$("textarea").val('');
});
});
                </script>
                        
                      
                    </div>

                      <!-- <div class="col-md-3 ">
                        <label for="history_mwan_events_attend">{{ __('Event History') }}</label>
                        <input id="history_mwan_events_attend" type="text" placeholder="Enter Event History" class="form-control{{ $errors->has('history_mwan_events_attend') ? ' is-invalid' : '' }}" name="history_mwan_events_attend" value="{{ old('history_mwan_events_attend') }}" >
                        
                        @if ($errors->has('history_mwan_events_attend'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('history_mwan_events_attend') }}</strong>
                            </span>
                        @endif
                    </div> -->
            </div>
        </div>

    </fieldset>
    <fieldset class="col-md-12" style="background-color:#fff; margin-top:20px;">    	
        <legend>Subscribes</legend>
         <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="form-group row">

                   <div class="col-md-6">
                    <label for="maretingoptns">{{ __('MARKETING OPT-INS') }}</label>
                    <input id="maretingoptns" type="text" placeholder="Enter MARKETING OPT-INS " class="form-control{{ $errors->has('maretingoptns') ? ' is-invalid' : '' }}" name="maretingoptns" value="{{ old('maretingoptns') }}" >
                    @if ($errors->has('maretingoptns'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('maretingoptns') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="unsubscribes">{{ __('Subscribes News') }}</label>
                    <!-- <input id="history_mwan_events_attend" type="text" placeholder="Enter history_mwan_events_attend " class="form-control{{ $errors->has('history_mwan_events_attend') ? ' is-invalid' : '' }}" name="history_mwan_events_attend" value="{{ old('history_mwan_events_attend') }}" > -->
                    <select class="form-control" name="unsubscribes" id="unsubscribes" >
                            <option value="">Select Title</option>
                            <option value="subscribes.">Subscribes</option>
                            <option value="unsubscribes">Unsubscribes</option>
                           
                    </select>
                    @if ($errors->has('unsubscribes'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('unsubscribes') }}</strong>
                        </span>
                    @endif
                </div> 
                    
                
                    
               </div>
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="form-group row">

                   <div class="col-md-4">
                    <label for="opt_in">{{ __('Date Opts-in') }}</label>
                    <input id="opt_in" type="text" placeholder="Enter  OPT-INS " class="form-control{{ $errors->has('opt_in') ? ' is-invalid' : '' }}" name="opt_in" value="{{ old('opt_in') }}" >
                    @if ($errors->has('opt_in'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('opt_in') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-md-4">
                    <label for="opt_out">{{ __('Date Opts-out') }}</label>
                    <input id="opt_out" type="text" placeholder="Enter opt-out " class="form-control{{ $errors->has('opt_out') ? ' is-invalid' : '' }}" name="opt_out" value="{{ old('opt_out') }}" >
                    
                    @if ($errors->has('opt_out'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('opt-out') }}</strong>
                        </span>
                    @endif
                </div> 

                  <div class="col-md-4">
                    <label for="neutral">{{ __('Date Neutral') }}</label>
                    <input id="neutral" type="text" placeholder="Enter neutral " class="form-control{{ $errors->has('neutral') ? ' is-invalid' : '' }}" name="neutral" value="{{ old('neutral') }}" >
                    
                    @if ($errors->has('neutral'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('neutral') }}</strong>
                        </span>
                    @endif
                </div> 
                    
                
                    
               </div>
        </div>

          <div class="col-md-12 col-lg-12 col-sm-12">
            
            <div class="form-group row">
                <div class="col-md-12 ">
                    <label for="comments">{{ __('Comments') }}</label>
                    <!-- <input id="comments" type="textarea" placeholder="Enter Comments " class="form-control{{ $errors->has('comments') ? ' is-invalid' : '' }}" name="comments" value="{{ old('comments') }}" > -->
                    ​<textarea id="comments" rows="5" cols="100" placeholder="Enter Comments " class="form-control{{ $errors->has('comments') ? ' is-invalid' : '' }}" name="comments" value="{{ old('comments') }}" ></textarea>
                    @if ($errors->has('comments'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('comments') }}</strong>
                        </span>
                    @endif
                </div>

            </div>
        </div>
        
    </fieldset>
       
        <div class="col-md-12 col-lg-12 col-sm-12" style="margin-top:20px;">
            <div class="form-group row mb-0">
                    <div class="col-md-6 ">
                        <button type="submit" class="btn btn-lg btn-success" style="float:right ">
                             {{ __('Submit') }}
                        </button>
                     </div>
            </div>
        </div>



        </form>
    </div>


<!---------------------------- End Form ------------------------------------------- -->
</div>
 @endsection
 