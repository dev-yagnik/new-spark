<?PHP include('function.php');?>
<?PHP
if (!isset($_SESSION['username'])) {
    header('Location:login');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaign Application Form</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('reports/assets/css/form.css') ?>" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="assets/images/icons8_form_64px.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="https://unpkg.com/@popperjs/core@2"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>

<body>
<?php $success = get_flashdata('success') ?>
<?php $error = get_flashdata('error') ?>
<?php if (!empty($success)) : ?>
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <?= $success ?>
    </div>
<?php endif; ?>
    <main>
    <div class="site-brand">
			<a href="https://new.sparkcrowdfunding.com/"><img src="https://new.sparkcrowdfunding.com/images/spark-internal.png" alt="" style="max-width: 250px;"></a>
    </div>
    <form method="POST" id="submit_form" onkeydown="return event.key != 'Enter';" action="insert_investee_detail.php">
        <div class="ca__form--items">
            <div class="container">
                <div class="col-sm-6 accordion_one" class="animate-bottom">
                    <div class="panel-group" id="accordionFourLeft">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftone" aria-expanded="false" class="collapsed ca__form--data">Company Profile</a>
                                </h4>
                            </div>
                            <div id="collapseFiveLeftone" class="panel-collapse collapse show" aria-expanded="false" role="tablist">
                                <div class="ca__company-data ">
                                        <!-- Client type Strat -->
                                        <div class="client-type mb-15 ">
                                            <h4>Client type:</h4>
                                            <div class="dropdown ">
                                                <div class="select ">
                                                    <span class="select-title ">Select</span>
                                                    <div class="arrow "></div>
                                                </div>
                                                <ul class="menu ">
                                                    <input type="hidden" name="client_type" class="client_type" value="">
                                                    <li class="client_type_dropdown">Individual</li>
                                                    <li class="client_type_dropdown">Company</li>
                                                    <li class="client_type_dropdown">Partnership</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Client type End -->
                                        <!-- Company details Start -->
                                        <h4>Company details</h4>
                                        <div class="company-details mb-15 d-flex">
                                            <div class="form-group ">
                                                <label for=" ">Registered company name:</label>
                                                <input type="text " name="company_name" class="form-control " id=" " placeholder="Company name " pattern="[a-zA-Z\s]+">
                                            </div>
                                            <div class="form-group ">
                                                <label for=" ">Trading name (if different):</label>
                                                <input type="text " name="trading_name" class="form-control " id=" " placeholder="Trading name" pattern="[a-zA-Z\s]+">
                                            </div>
                                            <div class="form-group ">
                                                <label for=" ">Date of incorporation:</label>
                                                <input type="date" name="date_incorporation" class="form-control " id=" ">
                                            </div>
                                        </div>
                                        <!-- Company details End -->
                                        <h4>Basic company information</h4>
                                        <div class="company-info mb-15 d-flex">
                                            <div class="form-group ">
                                                <label for=" ">Address:</label>
                                                <textarea name="company_information_address" id="" cols="10" rows="5"></textarea>

                                            </div>
                                            <div class="telephone-data">
                                                <div class="form-group ">
                                                    <label for=" ">Telephone #:</label>
                                                    <input type="tel" name="company_information_telephone" class="form-control " id=" " placeholder="Enter telephone number" pattern="[0-9]{11}" maxlength="11">
                                                </div>
                                                <div class="form-group ">
                                                    <label for=" ">Web address:</label>
                                                    <input type="url" name="company_information_web_address" class="form-control " id=" " placeholder="Web address">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Company group structure Start -->
                                        <h4>Company group structure</h4>
                                        <div class="company-group-structure mb-15 d-flex">
                                            <div class="form-group">
                                                <div class="d-flex mb-15 ea__data--radio-items">
                                                    <label for=" ">Is the company part of a group structure (Y/N)?</label>
                                                    <div class="ca__radio--custome d-flex">
                                                        <p>
                                                            <input type="radio" value="yes" id="company-structure1" name="company_group_structure">
                                                            <label for="test1">Yes</label>
                                                        </p>
                                                        <p>
                                                            <input type="radio" value="no" id="company-structure2" name="company_group_structure">
                                                            <label for="test2">No</label>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div style="display:none;" id="company-structure" class="company-structure-items" >
                                                    <label for=" " class="mb-10 company-structure-items-label">If yes, Please provide details of the group structure and associated companies</label>
                                                    <div class="d-flex">
                                                        <div class="form-group ">
                                                            <label for=" " class="mb-10">Including names of other group companies</label>
                                                            <input type="text" name="other_company_name" class="form-control " id="other_company_name" placeholder="Company name" pattern="[a-zA-Z\s]+">
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for=" " class="mb-10">Total sales</label>
                                                            <input type="number" name="total_sales" class="form-control " id="total_sales" placeholder=" ">
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for=" " class="mb-10">Total employment numbers</label>
                                                            <input type="number" name="total_emloyment_numbers" class="form-control " min="0" id="total_emloyment_numbers" placeholder=" ">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Company group structure End -->
                                        <h4>Company profile and history</h4>
                                        <div class="Company-profile-history mb-15">
                                            <div class="form-group mb-15">
                                                <label for=" ">Year trading commenced:</label>
                                                <!-- <input type="number" step="1900" max="2050" name="year_trading" class="form-control " id=" "> -->
                                                <input type="date" name="year_trading" class="form-control " id=" ">
                                                <!-- <input type="year" name="year_trading" class="form-control " id=" " pattern="\d{4}" maxlength="4"> -->
                                            </div>
                                            <div class="form-group mb-15">
                                                <label for=" ">Please provide an overview of the company's trading history:</label>
                                                <span class="note--span">(If pre-revenue / an individual, provide details of personal qualifications, previous work history and other relevant details)</span>
                                                <textarea name="company_profile_address" id="" cols="10" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <!-- Product or service offering Start -->
                                        <h4>Product or service offering</h4>
                                        <div class="product--service-offering d-flex mb-15">
                                            <div class="form-group mb-15">
                                                <label for=" ">Highlight achievements to-date in Ireland and international markets:</label>
                                                <input type="text" name="product_service_date" class="form-control " id=" ">
                                                <!-- <input type="date" name="product_service_date" class="form-control " id=" "> -->
                                            </div>
                                        </div>
                                        <!-- Product or service offering End -->
                                        <!-- Ownership and management structure Start -->
                                        <h4>Ownership and management structure</h4>
                                        <div class="ownership-management-structure  mb-15">
                                            <!-- Editable table -->
                                            <div class="ownership-table-data">
                                                <div id="table" class="table-editable">
                                                    <div class="table__data mb-10">
                                                        <table class="table table-data">
                                                            <tr>
                                                                <th>Name of shareholder</th>
                                                                <th>Investor type</th>
                                                                <th>% of shares</th>
                                                                <th></th>
                                                            </tr>
                                                            <!-- This is our clonable table line -->
                                                            <tr class="ownership">
                                                                <td class="table_row">
                                                                    <input name="ownership_shareholder[]" class="form-control ownership_shareholder" type="text" />
                                                                </td>
                                                                <td class="table_row">
                                                                    <input name="ownership_investor_type[]" class="form-control ownership_investor_type" type="text" />
                                                                </td>
                                                                <td class="table_row">
                                                                    <input name="ownership_of_shares[]" class="form-control ownership_of_shares" type="text" />
                                                                </td>
                                                                <td class="add-remove--button">
                                                                    <span class="table-remove glyphicon glyphicon-remove"></span>
                                                                    <span class="table-add glyphicon glyphicon-plus"></span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <!-- <div class="table__data--save">
                                                        <button type="submit">Save</button>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <!-- Editable table -->
                                        </div>
                                        <!-- Ownership and management structure End -->
                                        <!-- Promoter contact details Start -->
                                        <h4>Promoter contact details:</h4>
                                        <div class="promoter-contact-details d-flex mb-15">
                                            <div class="form-group mb-15">
                                                <label for=" ">Name</label>
                                                <input type="text" name="promoter_name" class="form-control " id=" " placeholder="Name" pattern="[a-zA-Z\s]+">
                                            </div>
                                            <div class="form-group mb-15">
                                                <label for=" ">Job title</label>
                                                <input type="text" name="promoter_job_title" class="form-control " id=" " placeholder="Job title" pattern="[a-zA-Z\s]+">
                                            </div>
                                            <div class="form-group mb-15">
                                                <label for=" ">Email address</label>
                                                <input type="email" name="promoter_email" class="form-control " id=" " aria-describedby="emailHelp " placeholder="Email address">
                                            </div>
                                            <div class="form-group mb-15">
                                                <label for=" ">Telephone</label>
                                                <input type="tel" name="promoter_telephone" class="form-control " id=" " placeholder="Telephone" pattern="[0-9]{11}" maxlength="11">
                                            </div>
                                            <div class="form-group mb-15">
                                                <label for=" ">LinkedIn profile (full URL)</label>
                                                <input type="url" name="linkedIn_profile_url" class="form-control " id=" " placeholder="LinkedIn profile (full URL)">
                                            </div>
                                        </div>
                                        <!-- Promoter contact details End -->
                                        <!-- Details of directorships (past and present) Start -->
                                        <h4>Details of directorships (past and present):</h4>
                                        <h5>Due diligence is undertaken on all applicants. <span>The following information is required for all founders and directors</span></h5>
                                        <span class="note--span">Note: Your application may be deemed ineligible if the information supplied at the time of application is incorrect or incomplete. i.e. Information not supplied on all founders / directors and all directorships.</span>
                                        <div class="details-directorships-data  mb-15">
                                            <!-- Editable table -->
                                            <table class="table-editable table-editable-data">
                                                <tbody class="table_applicant">
                                                    <tr class="table-heder-hading">
                                                        <th><div class="applicant_order_box">Applicant <span class="applicant_order">1</span></div></th>
                                                        <td class="table-controls table-zapper" colspan="3"><button class="jDeleteRow btn-delete-row" type="button" disabled>&times;</a></td>
                                                    </tr>
                                                    <tr class="table-fotm--data">
                                                        <td colspan="2">
                                                            <div class="d-flex">
                                                                <div class="form-group">
                                                                    <label for=" ">Name:</label>
                                                                    <input type="text" name="name[]" class="form-control " id=" " placeholder="Name" pattern="[a-zA-Z\s]+">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for=" ">DOB:</label>
                                                                    <input type="date" name="dob[]" class="form-control " id=" ">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for=" ">Home address:</label>
                                                                    <input type="text" name="home_address[]" class="form-control " id=" " placeholder="Address">
                                                                </div>
                                                                <div class="form-group">
                                                                <label for=" ">Nationality:</label>
                                                                <select class="nationality_dropdown_" name="nationality[]">
                                                                    <option value="">Please select your nationality</option>
                                                                    <option value="Afghanistan">Afghanistan</option>
                                                                    <option value="Aland Islands">Aland Islands</option>
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
                                                                    <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
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
                                                                    <option value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo</option>
                                                                    <option value="Cook Islands">Cook Islands</option>
                                                                    <option value="Costa Rica">Costa Rica</option>
                                                                    <option value="Cote D`Ivoire">Cote D`Ivoire</option>
                                                                    <option value="Croatia">Croatia</option>
                                                                    <option value="Cuba">Cuba</option>
                                                                    <option value="Curacao">Curacao</option>
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
                                                                    <option value="Greenland">Greenland</option>
                                                                    <option value="Grenada">Grenada</option>
                                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                                    <option value="Guam">Guam</option>
                                                                    <option value="Guatemala">Guatemala</option>
                                                                    <option value="Guernsey">Guernsey</option>
                                                                    <option value="Guinea">Guinea</option>
                                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
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
                                                                    <option value="Isle of Man">Isle of Man</option>
                                                                    <option value="Israel">Israel</option>
                                                                    <option value="Italy">Italy</option>
                                                                    <option value="Jamaica">Jamaica</option>
                                                                    <option value="Japan">Japan</option>
                                                                    <option value="Jersey">Jersey</option>
                                                                    <option value="Jordan">Jordan</option>
                                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                                    <option value="Kenya">Kenya</option>
                                                                    <option value="Kiribati">Kiribati</option>
                                                                    <option value="Korea, Democratic People`s Republic of">Korea, Democratic People`s Republic of</option>
                                                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                                                    <option value="Kosovo">Kosovo</option>
                                                                    <option value="Kuwait">Kuwait</option>
                                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                    <option value="Lao People`s Democratic Republic">Lao People`s Democratic Republic</option>
                                                                    <option value="Latvia">Latvia</option>
                                                                    <option value="Lebanon">Lebanon</option>
                                                                    <option value="Lesotho">Lesotho</option>
                                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                                    <option value="Lithuania">Lithuania</option>
                                                                    <option value="Luxembourg">Luxembourg</option>
                                                                    <option value="Macao">Macao</option>
                                                                    <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
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
                                                                    <option value="Montenegro">Montenegro</option>
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
                                                                    <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                                    <option value="Saint Helena">Saint Helena</option>
                                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                                    <option value="Saint Martin">Saint Martin</option>
                                                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                                    <option value="Samoa">Samoa</option>
                                                                    <option value="San Marino">San Marino</option>
                                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                                    <option value="Senegal">Senegal</option>
                                                                    <option value="Serbia">Serbia</option>
                                                                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                                                    <option value="Seychelles">Seychelles</option>
                                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                                    <option value="Singapore">Singapore</option>
                                                                    <option value="Sint Maarten">Sint Maarten</option>
                                                                    <option value="Slovakia">Slovakia</option>
                                                                    <option value="Slovenia">Slovenia</option>
                                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                                    <option value="Somalia">Somalia</option>
                                                                    <option value="South Africa">South Africa</option>
                                                                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                                    <option value="South Sudan">South Sudan</option>
                                                                    <option value="Spain">Spain</option>
                                                                    <option value="Sri Lanka">Sri Lanka</option>
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
                                                                    <option value="Timor-Leste">Timor-Leste</option>
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
                                                                    <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                                    <option value="Western Sahara">Western Sahara</option>
                                                                    <option value="Yemen">Yemen</option>
                                                                    <option value="Zambia">Zambia</option>
                                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                                </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for=" ">Education qualifications:</label>
                                                                    <input type="text" name="education_qualifications[]" class="form-control " id=" " placeholder="Enter Your Education qualifications">
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-heder-inner-hading">
                                                        <th colspan="2"><div class="applicant_inner_order_box">Applicant <span class="applicant_order">1</span></div></th>
                                                    </tr>

                                                    <tr>
                                                    <td colspan="4" class="table-divider"></td>
                                                  </tr>
                                                  <tr class="table-fotm--data">
                                                        <td>
                                                            <div id="table" class="table-editable-items ">
                                                                <table class="table">
                                                                  <tr>
                                                                    <th>Company name</th>
                                                                    <th>Activity of company</th>
                                                                    <th>Position</th>
                                                                    <th>Shareholding</th>
                                                                    <th></th>
                                                                  </tr>
                                                                  <tbody class="applicant_row">
                                                                    <tr class="applicant_count">
                                                                        <td class="table_row">
                                                                            <input name="_company_name0[]" id="_company_name1" class="form-control" type="text" />
                                                                        </td>
                                                                        <td class="table_row">
                                                                            <input name="activity_of_company0[]" id="activity_of_company1" class="form-control" type="text" />
                                                                        </td>
                                                                        <td class="table_row">
                                                                            <input name="position0[]" id="position1" class="form-control" type="text" />
                                                                        </td>
                                                                        <td class="table_row">
                                                                            <input name="shareholding0[]" id="shareholding1" class="form-control" type="text" />
                                                                        </td>
                                                                        <td class="add-remove--button">
                                                                            <span class="table-remove applicant_row_remove glyphicon glyphicon-remove"></span>
                                                                            <span class="table-add applicant_row_add glyphicon glyphicon-plus"></span>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                              </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="4" class="table-submit">
                                                            <button type="button" class="jAddRow btn">Add Row</button>
                                                        </td>
                                                    </tr>
                                                    </tfoot>
                                            </table>
                                            <!-- Editable table -->

                                        </div>
                                        <!-- Details of directorships (past and present) END -->
                                        <!-- Business sector Start -->
                                        <h4>Business sector</h4>
                                        <div class="data--protection d-flex">
                                            <div class="form-group mb-15">
                                                <label for=" ">State sector/vertical in which your company operates:</label>
                                                <input type="text" name="state_sector" class="form-control " id=" " placeholder="State sector" pattern="[a-zA-Z0-9\s]+">
                                            </div>
                                        </div>
                                        <!-- Business sector End -->
                                        <!-- Support programmes Start -->
                                        <h4>Support programmes</h4>
                                        <div class="support-programmes company-group-structure d-flex">
                                            <div class="form-group mb-15 ">
                                                <label class="mb-0" for=" ">List any entrepreneur support programmes you have participated in</label>
                                                <span class="note--span">(e.g. Accelerators. Incubators etc.), please provide weblinks.</span>
                                                <!-- <input type="text" class="form-control " id=" " aria-describedby="emailHelp " placeholder="State sector"> -->
                                                <textarea name="support_programmes" id="" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <!-- Support programmes End -->
                                        <!-- Enterprise Ireland  Start -->
                                        <h4>Enterprise Ireland</h4>
                                        <div class="enterprise-ireland d-flex company-group-structure mb-15">
                                            <div class="form-group">
                                                <div class="d-flex mb-15 ea__data--radio-items">
                                                    <label class="mb-0" for=" ">Are you an EI client?</label>
                                                    <div class="ca__radio--custome d-flex">
                                                        <p>
                                                            <input type="radio" id="enterprise-ireland1" value="yes" class="scope-test" name="elclient">
                                                            <label for="elclient">Yes</label>
                                                        </p>
                                                        <p>
                                                            <input type="radio" id="enterprise-ireland2" value="no" name="elclient" class="scope-test1">
                                                            <label for="elclient">No</label>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div style="display:none;" id="enterprise" class="selectt company-group-structure">
                                                    <div class="form-group mb-10">
                                                        <label class="mb-5" for=" ">If yes, what status are you?</label>
                                                        <div class="ca__radio--custome d-flex">
                                                            <p>
                                                                <input type="radio" class="scope-test" id="hpsu" value="hpsu" name="enterprise_status">
                                                                <label for="elclient1">HPSU</label>
                                                            </p>
                                                            <p>
                                                                <input type="radio" value="csf" id="csf" name="enterprise_status" class="scope-test1">
                                                                <label for="elclient1">CSF</label>
                                                            </p>
                                                            <p>
                                                                <input type="radio" value="nf" id="nf" name="enterprise_status" class="scope-test1">
                                                                <label for="elclient1">NF</label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mb-0" for=" ">Name of DA (Development Advisor)</label>
                                                        <input type="text" name="name_d_a" class="form-control " id="name_d_a" placeholder="State sector">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Enterprise Ireland  End -->
                                        <!-- EI Funding  Start -->
                                        <h4>EI Funding</h4>
                                        <div class="ei-funding company-group-structure d-flex mb-15">
                                            <div class="form-group selectt">
                                                <label for=" ">If HPSU, what level of commitment (€) has EI given you?</label>
                                                <input type="text" name="ei_funding_commitment" class="form-control " id=" " pattern="[a-zA-Z0-9\s]+">
                                            </div>
                                            <div class="form-group">
                                                <div class="ei-radio-button ea__data--radio-items">
                                                    <label for=" ">Has this been drawn down?</label>
                                                    <div class="ca__radio--custome d-flex">
                                                        <p>
                                                            <input type="radio" id="test3" value="yes" class="scope-test" name="ei_funding_radio">
                                                            <label for="test1">Yes</label>
                                                        </p>
                                                        <p>
                                                            <input type="radio" id="test3" value="no" name="ei_funding_radio" class="scope-test1">
                                                            <label for="test1">No</label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for=" ">When was it drawn down?</label>
                                                <input type="date" name="ei_funding_date" class="form-control " id=" ">
                                            </div>
                                        </div>
                                        <!-- EI Funding  End -->
                                        <!-- Legal  Start -->
                                        <h4>Legal</h4>
                                        <div class="Legal d-flex company-group-structure mb-15">
                                            <div class="form-group">
                                                <div class="d-flex mb-10 legal-data-items ea__data--radio-items">
                                                    <label class="mb-0" for=" ">Is the Company involved in any Legal Actions at the moment?</label>
                                                    <div class="ca__radio--custome d-flex">
                                                        <p>
                                                            <input type="radio" value="yes" id="legal1" class="scope-test" name="legal_radio">
                                                            <label for="test1">Yes</label>
                                                        </p>
                                                        <p>
                                                            <input type="radio" value="no" id="legal2" name="legal_radio" class="scope-test1">
                                                            <label for="test1">No</label>
                                                        </p>
                                                    </div>

                                                </div>
                                                <div style="display:none;" id="legal" class="company-group-structure selectt">
                                                    <label class="mb-5" for=" ">If yes, please explain in more detail:</label>
                                                    <input type="text" name="legal_more_detail" class="form-control " id="legal_more_detail" pattern="[a-zA-Z0-9\s]+">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="d-flex mb-10 legal-data-items ea__data--radio-items">
                                                    <label class="mb-0" for=" ">Is the Company aware of any potential Legal Actions that may be taken against the company in the future?</label>
                                                    <div class="ca__radio--custome d-flex">
                                                        <p>
                                                            <input type="radio" id="aware1" value="yes" class="scope-test" name="aware_radio">
                                                            <label for="test1">Yes</label>
                                                        </p>
                                                        <p>
                                                            <input type="radio" id="aware2" value="no" name="aware_radio" class="scope-test1">
                                                            <label for="test1">No</label>
                                                        </p>
                                                    </div>

                                                </div>
                                                <div style="display:none;" id="aware" class="company-group-structure selectt">
                                                    <label class="mb-5" for=" ">If yes, please explain in more detail:</label>
                                                    <input type="text" name="aware_more_detail" class="form-control " id="aware_more_detail" pattern="[a-zA-Z0-9\s]+">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="d-flex mb-10 legal-data-items ea__data--radio-items">
                                                    <label class="mb-0" for=" ">Have any of the promoters, either individually or collectively, or any shareholder owning more than 20% of the shares in the company, entered into any private arrangements or side deals in relation to the sale or transfer of any of their shares or options?</label>
                                                    <div class="ca__radio--custome d-flex">
                                                        <p>
                                                            <input type="radio" id="promoters1" value="yes" class="scope-test" name="promoters_radio">
                                                            <label for="test1">Yes</label>
                                                        </p>
                                                        <p>
                                                            <input type="radio" id="promoters2" value="no" name="promoters_radio" class="scope-test1">
                                                            <label for="test1">No</label>
                                                        </p>
                                                    </div>

                                                </div>
                                                <div style="display:none;" id="promoters" class="company-group-structure selectt">
                                                    <label class="mb-5" for=" ">If yes, please explain in more detail:</label>
                                                    <input type="text" name="promoters_more_detail" class="form-control " id="promoters_more_detail" placeholder=" " pattern="[a-zA-Z0-9\s]+">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Legal  End -->
                                    <!-- </form> -->
                                </div>
                            </div>
                            <!-- end of panel-body -->
                        </div>
                    </div>
                    <!-- /.panel-default -->
                    <div class="panel panel-default ">
                        <div class="panel-heading ">
                            <h4 class="panel-title ">
                                <a class="collapsed ca__form--data" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftTwo" aria-expanded="false ">Product/Service and Market Opportunity</a>
                            </h4>
                        </div>
                        <div id="collapseFiveLeftTwo" class="panel-collapse collapse" aria-expanded="false " role="tablist ">
                            <div class="ca__company-data">
                                <!-- <form> -->
                                    <!-- Product / Service Start  -->
                                    <h4>Product/Service</h4>
                                    <div class="product-service d-flex company-group-structure mb-15">
                                        <div class="form-group ">
                                            <label for=" ">What is your product / service? What problem are you solving and for who?</label>
                                            <!-- <input type="text " class="form-control " id=" " aria-describedby="emailHelp " placeholder="Company name "> -->
                                            <textarea name="ei_funding_product" id="" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <!-- Product / Service End  -->
                                    <!-- Development stage Start  -->
                                    <h4>Development stage</h4>
                                    <div class="development-stage d-flex company-group-structure mb-15">
                                        <div class="form-group ">
                                            <label class="mb-0" for=" ">At what stage of development is the solution?</label>
                                            <span class="note--span">e.g. at concept stage, at design stage, at beta stage or live and generating revenues.</span>
                                            <!-- <input type="text " class="form-control " id=" " aria-describedby="emailHelp " placeholder="Company name "> -->
                                            <textarea name="development_stage" id="" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <!-- Development stage End  -->
                                    <!-- Operations Start  -->
                                    <h4>Operations</h4>
                                    <div class="operations d-flex company-group-structure mb-15">
                                        <div class="form-group ">
                                            <label class="" for=" ">If it is proposed to outsource the manufacturing or the software development to a 3rd party, please give details to whom, for how long and for what.</label>
                                            <textarea name="operations" id="" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <!-- Operations End  -->
                                    <!-- Ambition Start  -->
                                    <h4>Ambition</h4>
                                    <div class="ambition d-flex company-group-structure mb-15">
                                        <div class="form-group ">
                                            <label class="" for=" ">What is your longer-term vision for the company?</label>
                                            <!-- <textarea name="" id="" cols="30" rows="5"></textarea> -->
                                            <input type="text" name="ambition" class="form-control " id=" " placeholder="(e.g. 3-5 years)">
                                        </div>
                                    </div>
                                    <!-- Ambition End  -->
                                    <!-- Accessible market Start  -->
                                    <h4>Accessible market</h4>
                                    <div class="accessible-market d-flex company-group-structure mb-15">
                                        <div class="form-group ">
                                            <label class="" for=" ">How big is the accessible market? Where is it? Why is it an attractive market for a start-up?</label>
                                            <textarea name="accessible_market" id="" cols="30" rows="5"></textarea>
                                            <!-- <input type="text" class="form-control " id=" " aria-describedby="emailHelp " placeholder="(e.g. 3-5 years)"> -->
                                        </div>
                                    </div>
                                    <!-- Accessible market End  -->
                                    <!-- Research Start  -->
                                    <h4>Research</h4>
                                    <div class="Research d-flex company-group-structure mb-15">
                                        <div class="form-group ">
                                            <label class="" for=" ">Detail any research you have conducted to validate the market and opportunity, particularly from business customers and consumers.</label>
                                            <textarea name="research" id="" cols="30" rows="5"></textarea>
                                            <!-- <input type="text" class="form-control " id=" " aria-describedby="emailHelp " placeholder="(e.g. 3-5 years)"> -->
                                        </div>
                                    </div>
                                    <!-- Research End  -->
                                    <!-- Competitors Start  -->
                                    <h4>Competitors</h4>
                                    <div class="Competitors d-flex company-group-structure mb-15">
                                        <div class="form-group ">
                                            <label class="" for=" ">Who are your main competitors? Why is your solution better? What will stop them copying or matching your solution?</label>
                                            <textarea name="competitors" id="" cols="30" rows="5"></textarea>
                                            <!-- <input type="text" class="form-control " id=" " aria-describedby="emailHelp " placeholder="(e.g. 3-5 years)"> -->
                                        </div>
                                    </div>
                                    <!-- Competitors End  -->
                                <!-- </form> -->
                            </div>
                        </div>
                        <!-- /.panel-default -->
                        <div class="panel panel-default ">
                            <div class="panel-heading ">
                                <h4 class="panel-title ">
                                    <a class="collapsed ca__form--data" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftThree" aria-expanded="false ">Innovation</a>
                                </h4>
                            </div>
                            <div id="collapseFiveLeftThree" class="panel-collapse collapse" aria-expanded="false " role="tablist ">
                                <div class="ca__company-data">
                                    <!-- <form> -->
                                        <!-- Innovation Start  -->
                                        <h4>Innovation</h4>
                                        <div class="product-service d-flex company-group-structure mb-15">
                                            <div class="form-group ">
                                                <label for=" ">What is unique about your solution?</label>
                                                <!-- <input type="text " class="form-control " id=" " aria-describedby="emailHelp " placeholder="Company name "> -->
                                                <textarea name="innovation" id="" cols="30" rows="5" ></textarea>
                                            </div>
                                        </div>
                                        <!-- Innovation End  -->
                                        <!-- Technical roadmap Start  -->
                                        <h4>Technical roadmap</h4>
                                        <div class="technical-roadmap d-flex company-group-structure mb-15">
                                            <div class="form-group ">
                                                <label for=" ">Do you have / need a technical roadmap? If so, please describe.</label>
                                                <!-- <input type="text " class="form-control " id=" " aria-describedby="emailHelp " placeholder="Company name "> -->
                                                <textarea name="technical_roadmap" id="" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <!-- Technical roadmap End  -->
                                        <!-- Intellectual Property Start  -->
                                        <h4>Intellectual Property</h4>
                                        <div class="technical-roadmap d-flex company-group-structure mb-15">
                                            <div class="form-group ">
                                                <label for=" ">Is there any Intellectual Property associated with this project? If yes, please provide details, i.e. licences or patents, etc.</label>
                                                <!-- <input type="text " class="form-control " id=" " aria-describedby="emailHelp " placeholder="Company name "> -->
                                                <textarea name="intellectual_property" id="" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <!-- Intellectual Property End  -->
                                    <!-- </form> -->
                                </div>
                                <!-- end of panel-body -->
                            </div>
                        </div>
                        <!-- /.panel-default -->
                    </div>
                    <div class="panel panel-default ">
                        <div class="panel-heading ">
                            <h4 class="panel-title ">
                                <a class="collapsed ca__form--data" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftFour" aria-expanded="false ">Founders / Team</a>
                            </h4>
                        </div>
                        <div id="collapseFiveLeftFour" class="panel-collapse collapse" aria-expanded="false" role="tablist ">
                            <div class="ca__company-data">
                                <!-- <form> -->
                                    <!-- Founder(s)/team track record and sector knowledge Start  -->
                                    <h4>Founder(s)/team track record and sector knowledge</h4>
                                    <div class="founder-team d-flex company-group-structure mb-15">
                                        <div class="form-group ">
                                            <label for=" ">Outline the founder(s)/team track record and sector knowledge relevant to this project (include links to LinkedIn, Twitter etc., where appropriate)</label>
                                            <!-- <input type="text " class="form-control " id=" " aria-describedby="emailHelp " placeholder="Company name "> -->
                                            <textarea name="track_record" id="" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <!-- Founder(s)/team track record and sector knowledge End  -->
                                    <!-- Other Advisors / influencers related to the project Start  -->
                                    <h4>Other Advisors / influencers related to the project</h4>
                                    <div class="other-advisors d-flex company-group-structure mb-15">
                                        <div class="form-group ">
                                            <label class="mb-0" for=" ">Outline any other advisors / influencers related to the project and outline their time commitment to the project.</label>
                                            <!-- <span class="note--span">e.g. at concept stage, at design stage, at beta stage or live and generating revenues.</span> -->
                                            <!-- <input type="text " class="form-control " id=" " aria-describedby="emailHelp " placeholder="Company name "> -->
                                            <textarea name="other_advisors" id="" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <!-- Other Advisors / influencers related to the project End  -->
                                    <!--Skills gap Start  -->
                                    <h4>Skills gap</h4>
                                    <div class="skills-gap d-flex company-group-structure mb-15">
                                        <div class="form-group ">
                                            <label class="" for=" ">What gaps exist in your team?</label>
                                            <textarea name="skills_gap" id="" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <!--Skills gap End  -->

                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    <!-- Key Milestones Start -->
                    <div class="panel panel-default ">
                        <div class="panel-heading ">
                            <h4 class="panel-title ">
                                <a class="collapsed ca__form--data" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftFive" aria-expanded="false ">Key Milestones</a>
                            </h4>
                        </div>
                        <div id="collapseFiveLeftFive" class="panel-collapse collapse" aria-expanded="false" role="tablist ">
                            <div class="ca__company-data">
                                <!-- <form> -->
                                    <!-- Commercial milestones Start  -->
                                    <h4>Commercial milestones</h4>
                                    <div class="commercial-milestones company-group-structure mb-15 table--data--items">
                                        <div class="col-md-12">
                                            <div class="table__data mb-10">
                                                <table class="table-data ca_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Description of commercial objective</th>
                                                            <th>Outcome/milestone to be achieved</th>
                                                            <th colspan="2">Date to be achieved</th>
                                                            <!-- <th></th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="4" class="add-row"><span class="add_commerical_milestone"><i class="fa fa-plus"></i></span></td>
                                                        </tr>
                                                        <tr class="commercial_milestone_list">
                                                            <td class="col-xs-3">
                                                                <input name="addmain[]" class="form-control addMain" pattern="[a-zA-Z\s]+" type="text" />
                                                            </td>

                                                            <td class="col-xs-3">
                                                                <input name="addprefer[]" class="form-control addPrefer" pattern="[a-zA-Z\s]+" type="text" />
                                                            </td>
                                                            <td class="col-xs-5" colspan="2">
                                                                <input name="addcommon[]" class="form-control addCommon" type="date" />
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- <div class="table__data--save">
                                                <button type="submit">Save</button>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- Commercial milestones End  -->
                                    <!-- Technical milestones milestones Start  -->
                                    <h4>Technical milestones milestones</h4>
                                    <div class="technical-milestones company-group-structure mb-15 table--data--items">
                                        <div class="col-md-12">
                                            <div class="table__data mb-10">
                                                <table class="table-data">
                                                    <thead>
                                                        <tr>
                                                            <th>Description of Technical milestones objective</th>
                                                            <th>Outcome/milestone to be achieved</th>
                                                            <th colspan="2">Date to be achieved</th>
                                                            <!-- <th></th> -->
                                                        </tr>
                                                    </thead>
                                                        <tr>
                                                            <td colspan="4" class="add-row"><span class="add_technical_milestone"><i class="fa fa-plus"></i></span></td>
                                                        </tr>
                                                        <tr class="technical_milestone_list">
                                                            <td class="col-xs-3">
                                                                <input name="addmain2[]" class="form-control t_m_table addMain2" pattern="[a-zA-Z\s]+" type="text" />
                                                            </td>

                                                            <td class="col-xs-3">
                                                                <input name="addprefer2[]" class="form-control t_m_table addPrefer2" pattern="[a-zA-Z\s]+" type="text" />
                                                            </td>
                                                            <td class="col-xs-5" colspan="2">
                                                                <input name="addcommon2[]" class="form-control t_m_table addCommon2" type="date" />
                                                            </td>
                                                        </tr>
                                                </table>
                                            </div>
                                            <!-- <div class="table__data--save">
                                                <button type="submit">Save</button>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- Technical milestones milestones End  -->
                                <!-- </form> -->
                            </div>
                            <!-- end of panel-body -->
                        </div>
                    </div>
                    <!-- Key Milestones End -->
                    <!-- Cost of Plan Start -->
                    <div class="panel panel-default ">
                        <div class="panel-heading ">
                            <h4 class="panel-title ">
                                <a class="collapsed ca__form--data" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftSix" aria-expanded="false ">Cost of Plan</a>
                            </h4>
                        </div>
                        <div id="collapseFiveLeftSix" class="panel-collapse collapse" aria-expanded="false" role="tablist ">
                            <div class="ca__company-data">
                                <!-- <form> -->
                                    <!--Proposed business plan implementation costs Start  -->
                                    <h4>What is the proposed duration of the business plan outlined in this application?</h4>
                                    <div class="proposed-business company-group-structure d-flex mb-15 table--data--items">
                                        <div class="form-group ">
                                            <label for=" ">What is unique about your solution?</label>
                                            <input type="text " name="costs_solution" class="form-control " id=" " pattern="[a-zA-Z\s]+" placeholder="Company name ">
                                            <!-- <textarea name="" id="" cols="30" rows="5"></textarea> -->
                                        </div>
                                    </div>
                                    <!--Proposed business plan implementation costs End  -->
                                    <!-- Salaries Start  -->
                                    <h4>Salaries</h4>
                                    <div class="salaries company-group-structure mb-15 table--data--items">
                                        <div class="col-md-12">
                                            <div class="table__data mb-10">
                                                <table class="table-data">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>FT/PT</th>
                                                            <th>Function</th>
                                                            <th>No. of months</th>
                                                            <th colspan="2">Cost</th>
                                                            <!-- <th></th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="6" class="add-row"><span class="add_salary"><i class="fa fa-plus"></i></span></td>
                                                        </tr>
                                                        <tr class="salaries_list">
                                                            <td>
                                                                <input name="salary_name[]" class="form-control name " type="text" />
                                                            </td>

                                                            <td>
                                                                <input name="salary_ftpt[]" class="form-control ftpt " type="text" />
                                                            </td>
                                                            <td>
                                                                <input name="salary_functions[]" class="form-control functions " type="text" />
                                                            </td>
                                                            <td>
                                                                <input name="salary_months[]" min="0" class="form-control months " type="number" />
                                                            </td>
                                                            <td colspan="2">
                                                                <input name="salary_number[]" min="0" class="form-control cost " type="number" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" class="total__data--row"></td>
                                                            <td style="text-align: center"><span>Total:</span></td>
                                                            <td>
                                                                <input readonly name="salary_total" class="form-control" type="number" />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- <div class="table__data--save">
                                                <button type="submit">Save</button>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- Salaries End  -->
                                    <!-- Value of director/shareholder/related-party loans in place at time of application (€): Start  -->
                                    <h4 class="mb-0">Value of director/shareholder/related-party loans in place at time of application (€):</h4>
                                    <span class="note--span mb-10">(Please note the value of directors' loans will be added to the amount of equity investment outlined in the Cap. Table in the company profile page. In line with the eligibility criteria, the total must not exceed €100k) If the loans are from more than one individual, please list them by name/value.</span>
                                    <div class="related-party company-group-structure mb-5 table--data--items">
                                        <div class="col-md-12">
                                            <div class="table__data mb-10">
                                                <table class="table-data">
                                                    <thead>
                                                        <tr style="border:none">
                                                            <td colspan="3" class="add-row"><span class="addBtnValue"><i class="fa fa-plus"></i></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Name:</th>
                                                            <th colspan="2">Value:</th>
                                                            <!-- <th></th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="addRowValue">
                                                            <td>
                                                                <input name="addmain3[]" class="form-control addMain3 " type="text" pattern="[a-zA-Z\s]+" />
                                                            </td>
                                                            <td colspan="2">
                                                                <input name="addcommon3[]" class="form-control addCommon3 " min="0" type="number" />
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- <div class="table__data--save">
                                                <button type="submit">Save</button>
                                            </div> -->
                                        </div>
                                    </div>
                                    <span class="note--span mb-15">Note: If successful, Spark Crowdfunding will require that these loans are subordinated (i.e. locked into the business) for the duration of the business plan.</span>
                                    <!-- Value of director/shareholder/related-party loans in place at time of application (€): End  -->
                                    <!--Start date: Start  -->
                                    <h4>Start date:</h4>
                                    <div class="start-date company-group-structure d-flex mb-15 table--data--items">
                                        <div class="form-group ">
                                            <label for=" ">Business plan expenditure start date:</label>
                                            <input type="date" name="start_date" class="form-control " id=" ">
                                            <!-- <textarea name="" id="" cols="30" rows="5"></textarea> -->
                                        </div>
                                    </div>
                                    <!--Start date: End  -->
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    <!-- Cost of Plan End -->
                    <!-- Financial Information Start -->
                    <div class="panel panel-default ">
                        <div class="panel-heading ">
                            <h4 class="panel-title ">
                                <a class="collapsed ca__form--data" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftSeven" aria-expanded="false ">Financial Information</a>
                            </h4>
                        </div>
                        <div id="collapseFiveLeftSeven" class="panel-collapse collapse" aria-expanded="false" role="tablist ">
                            <div class="ca__company-data">
                                <!-- <form> -->
                                    <!--Financial year end Start  -->
                                    <h4>Financial year end</h4>
                                    <div class="financial-year company-group-structure d-flex mb-15 table--data--items">
                                        <div class="form-group ">
                                            <label for=" ">What is the company’s financial year end date?</label>
                                            <input type="date" name="company_financial_year_end_date" class="form-control " id=" " placeholder="Company name ">
                                            <!-- <textarea name="" id="" cols="30" rows="5"></textarea> -->
                                        </div>
                                    </div>
                                    <!--Financial year end End  -->
                                    <!-- Financial and employment details Start  -->
                                    <h4>Financial and employment details</h4>
                                    <div class="financial-employment  company-group-structure mb-15 table--data--items">
                                        <div class="col-md-12">
                                            <div class="table__data mb-10">
                                                <table class="table-data">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Last fiscal yr <small>(actual)</small></th>
                                                            <th>Current fiscal yr <small>(projected)</small></th>
                                                            <th>Current fiscal yr +1 <small>(projected)</small></th>
                                                            <th>Current fiscal yr +2 <small>(projected)</small></th>
                                                            <th>Current fiscal yr +3 <small>(projected)</small></th>
                                                            <!-- <th></th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <span>Year ending</span>
                                                            </td>

                                                            <td>
                                                                <input name="ye_last_fiscal_yr" class="form-control" type="text" />
                                                            </td>
                                                            <td>
                                                                <input name="ye_current_fiscal_yr" class="form-control" type="text" />
                                                            </td>
                                                            <td>
                                                                <input name="ye_current_fiscal_yr1" min="0" class="form-control" type="number" />
                                                            </td>
                                                            <td>
                                                                <input name="ye_current_fiscal_yr2" min="0" class="form-control" type="number" />
                                                            </td>
                                                            <td>
                                                                <input name="ye_current_fiscal_yr3" min="0" class="form-control" type="number" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span>Sales</span>
                                                            </td>

                                                            <td>
                                                                <input name="s_last_fiscal_yr" class="form-control" type="text" />
                                                            </td>
                                                            <td>
                                                                <input name="s_current_fiscal_yr" class="form-control" type="text" />
                                                            </td>
                                                            <td>
                                                                <input name="s_current_fiscal_yr1" min="0" class="form-control" type="number" />
                                                            </td>
                                                            <td>
                                                                <input name="s_current_fiscal_yr2" min="0" class="form-control" type="number" />
                                                            </td>
                                                            <td>
                                                                <input name="s_current_fiscal_yr3" min="0" class="form-control" type="number" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span>Costs</span>
                                                            </td>

                                                            <td>
                                                                <input name="c_last_fiscal_yr" class="form-control" type="text" />
                                                            </td>
                                                            <td>
                                                                <input name="c_current_fiscal_yr" class="form-control" type="text" />
                                                            </td>
                                                            <td>
                                                                <input name="c_current_fiscal_yr1" min="0" class="form-control" type="number" />
                                                            </td>
                                                            <td>
                                                                <input name="c_current_fiscal_yr2" min="0" class="form-control" type="number" />
                                                            </td>
                                                            <td>
                                                                <input name="c_current_fiscal_yr3" min="0" class="form-control" type="number" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span>Net Profit</span>
                                                            </td>

                                                            <td>
                                                                <input name="np_last_fiscal_yr" class="form-control" type="text" />
                                                            </td>
                                                            <td>
                                                                <input name="np_current_fiscal_yr" class="form-control" type="text" />
                                                            </td>
                                                            <td>
                                                                <input name="np_current_fiscal_yr1" min="0" class="form-control" type="number" />
                                                            </td>
                                                            <td>
                                                                <input name="np_current_fiscal_yr2" min="0" class="form-control" type="number" />
                                                            </td>
                                                            <td>
                                                                <input name="np_current_fiscal_yr3" min="0" class="form-control" type="number" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span>Employee count</span>
                                                            </td>

                                                            <td>
                                                                <input name="ec_last_fiscal_yr" class="form-control" type="text" />
                                                            </td>
                                                            <td>
                                                                <input name="ec_current_fiscal_yr" class="form-control" type="text" />
                                                            </td>
                                                            <td>
                                                                <input name="ec_current_fiscal_yr1" min="0" class="form-control" type="number" />
                                                            </td>
                                                            <td>
                                                                <input name="ec_current_fiscal_yr2" min="0" class="form-control" type="number" />
                                                            </td>
                                                            <td>
                                                                <input name="ec_current_fiscal_yr3" min="0" class="form-control" type="number" />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- <div class="table__data--save">
                                                <button type="submit">Save</button>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- Financial and employment details End  -->
                                    <!--Other financial information: Start  -->
                                    <h4>Other financial information:</h4>
                                    <div class="other-financial-information  d-flex mb-15 table--data--items">
                                        <div class="form-group ">
                                            <label for=" ">Most recent valuation:</label>
                                            <input type="number" name="m_r_v" class="form-control " id=" " min="0" placeholder="Most recent valuation">
                                            <!-- <textarea name="" id="" cols="30" rows="5"></textarea> -->
                                        </div>
                                        <div class="form-group ">
                                            <label for=" ">Valuation at this funding round?</label>
                                            <input type="number" name="v_f_r" class="form-control " id=" " min="0" placeholder="Valuation at this funding round?">
                                            <!-- <textarea name="" id="" cols="30" rows="5"></textarea> -->
                                        </div>
                                        <div class="form-group ">
                                            <label for=" ">What is the basis for your justification of the valuation of the business? Please outline the methodology and the assumptions you are using to arrive at your valuation. Valuations of companies in similar industries at a similar stage of development are useful guides in formulating your valuation. (This is the most important section of this document).</label>
                                            <!-- <input type="number" class="form-control " id=" " aria-describedby="emailHelp " placeholder="   "> -->
                                            <textarea id="" name="valuation_of_the_business" cols="30" rows="5" placeholder="What is the basis for your justification of the valuation of the business?  "></textarea>
                                        </div>
                                        <div class="form-group ">
                                            <label for=" ">Do you believe that someone investing today at your proposed valuation will make a minimum return of 5x on their investment in the next 5 years?</label>
                                            <input type="number" name="minimum_return" min="0" class="form-control " id=" " placeholder="minimum return ">
                                            <!-- <textarea name="" id="" cols="30" rows="5" placeholder=""></textarea> -->
                                        </div>
                                        <div class="form-group ">
                                            <label for=" ">Approximately what Net Profit would you need to be making to justify this 5x return after 5 years?</label>
                                            <input type="number" name="approximately_what_net_profit" class="form-control " min="0" id=" "placeholder="Approximately what Net Profit">
                                            <!-- <textarea name="" id="" cols="30" rows="5" placeholder=""></textarea> -->
                                        </div>
                                        <div class="form-group ">
                                            <label for=" ">What debt is currently in the business?</label>
                                            <input type="number" name="currently_in_the_business" class="form-control " id=" " min="0" placeholder="currently in the business">
                                            <!-- <textarea name="" id="" cols="30" rows="5" placeholder=""></textarea> -->
                                        </div>
                                        <div class="form-group ">
                                            <label for=" ">Please provide debt details:</label>
                                            <!-- <input type="number" class="form-control " id=" " aria-describedby="emailHelp " placeholder="Please provide debt details"> -->
                                            <textarea name="please_provide_debt_details" id="" cols="30" rows="5" placeholder="Please provide debt details"></textarea>
                                        </div>
                                    </div>
                                    <!--Other financial information: End  -->
                                    <!--Cash Start  -->
                                    <h4>Cash</h4>
                                    <div class="Cash  d-flex mb-15 table--data--items">
                                        <div class="form-group data--set-height">
                                            <label for=" ">What was the cash in the bank at the end of last month?</label>
                                            <input type="number" name="cash_in_the_bank" class="form-control " min="0" id=" ">
                                            <!-- <textarea name="" id="" cols="30" rows="5"></textarea> -->
                                        </div>
                                        <div class="form-group ">
                                            <label for=" ">What was the average monthly cash burn rate (income less expenses) over the last 3 months?</label>
                                            <input type="number" name="average_monthly_cash" class="form-control " min="0" id=" ">
                                            <!-- <textarea name="" id="" cols="30" rows="5"></textarea> -->
                                        </div>

                                    </div>
                                    <!--Cash End  -->
                                    <!--Professional services Start  -->
                                    <h4>Professional services:</h4>
                                    <div class="professional-services company-group-structure d-flex mb-15 table--data--items">
                                        <div class="form-group ">
                                            <label class="mb-10" for=" ">Please state which firms you use:</label>
                                            <input type="text" name="state_which_firms" class="form-control " id=" ">
                                        </div>
                                    </div>
                                    <!--Professional services End  -->
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    <!-- Financial Information End -->
                    <!-- Funding Start -->
                    <div class="panel panel-default ">
                        <div class="panel-heading ">
                            <h4 class="panel-title ">
                                <a class="collapsed ca__form--data" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftEight" aria-expanded="false ">Funding</a>
                            </h4>
                        </div>
                        <div id="collapseFiveLeftEight" class="panel-collapse collapse" aria-expanded="false" role="tablist ">
                            <div class="ca__company-data">
                                <!-- <form> -->
                                    <!--Financial year end Start  -->
                                    <h4>Funding information:</h4>
                                    <div class="funding-information d-flex mb-15 table--data--items">
                                        <div class="form-group data--set-height">
                                            <label for=" ">How much are you seeking to raise in this round?</label>
                                            <input type="number" name="seeking_raise_round" min="0" class="form-control " id=" " placeholder="How much are you seeking to raise in this round?">
                                            <!-- <textarea name="" id="" cols="30" rows="5"></textarea> -->
                                        </div>
                                        <div class="form-group ">
                                            <label for=" ">How much would you like to raise on the Spark Crowdfunding platform at this time?</label>
                                            <input type="text" name="seeking_raise_round_time" class="form-control " id=" ">
                                            <!-- <input type="time" name="seeking_raise_round_time" class="form-control " id=" "> -->
                                            <!-- <textarea name="" id="" cols="30" rows="5"></textarea> -->
                                        </div>
                                        <div class="form-group form-group data--set-height">
                                            <label class="mb-5" for=" ">Is this the full amount that you are raising at this time, or are you also bringing in funds from alternative sources?</label>
                                            <div class="radio--button">
                                                <div class="ca__radio--custome d-flex">
                                                    <p>
                                                        <input type="radio" id="funds" value="full_amount" class="scope-test" name="funds">
                                                        <label for="test1">Full amount</label>
                                                    </p>
                                                    <p>
                                                        <input type="radio" id="funds" value="plus_alternative" name="funds" class="scope-test1">
                                                        <label for="test1">Plus alternative</label>
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group ">
                                            <label for=" ">If you have alternative sources, please provide a breakdown on the other sources being used at this time.</label>
                                            <input type="text" name="f_i_round" class="form-control " id=" ">
                                            <!-- <input type="time" name="f_i_round" class="form-control " id=" "> -->
                                            <!-- <textarea name="" id="" cols="30" rows="5"></textarea> -->
                                        </div>
                                    </div>
                                    <!--Financial year end End  -->
                                    <!--Funding commitments Start  -->
                                    <h4>Funding commitments:</h4>
                                    <div class="funding-commitments d-flex mb-15 table--data--items">
                                        <div class="form-group data--set-height">
                                            <label for=" ">What is the total amount of investment commitments that you have pre-secured for this investment round?</label>
                                            <input type="number" name="funding_commitments" class="form-control " id=" " min="0" placeholder="total amount of investment commitments">
                                            <!-- <textarea name="" id="" cols="30" rows="5"></textarea> -->
                                        </div>
                                    </div>
                                    <!--Funding commitments End  -->
                                    <!--Previous funding commitments: Start  -->
                                    <h4>Previous funding commitments:</h4>
                                    <div class="previous-funding-commitments d-flex mb-15 table--data--items">
                                        <div class="form-group data--set-height">
                                            <label for=" ">What investment have the promoters invested into the business?</label>
                                            <input type="number" name="previous_funding_commitments" class="form-control " min="0" id=" " placeholder="total amount of investment commitments">
                                            <!-- <textarea name="" id="" cols="30" rows="5"></textarea> -->
                                        </div>
                                        <div class="form-group data--set-height">
                                            <label for=" ">Details</label>
                                            <!-- <input type="number" class="form-control " id=" " aria-describedby="emailHelp " placeholder="total amount of investment commitments"> -->
                                            <textarea name="p_f_c_details" id="" cols="30" rows="5"></textarea>
                                        </div>
                                        <div class="form-group data--set-height">
                                            <label for=" ">What commitments have been made at this valuation?</label>
                                            <input type="number" name="p_f_c_valuation" class="form-control " min="0" id=" " placeholder="commitments have been made at this valuation">
                                            <!-- <textarea name="" id="" cols="30" rows="5"></textarea> -->
                                        </div>
                                        <div class="form-group data--set-height">
                                            <label for=" ">Details</label>
                                            <!-- <input type="number" class="form-control " id=" " aria-describedby="emailHelp " placeholder="total amount of investment commitments"> -->
                                            <textarea name="p_f_c_more_details" id="" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <!--Previous funding commitments: End  -->
                                    <!--Share capital Start  -->
                                    <h4>Share capital</h4>
                                    <div class="share-capital company-group-structure d-flex mb-15 table--data--items">
                                        <div class="form-group data--set-height">
                                            <label for=" ">What is the issued share capital of the co?</label>
                                            <span class="note--span">Note: This Share Capital figure should reconcile with the number of shares that have been issued in the company to date, according to your filings at Companies House, your Cap Table and your most recent Balance Sheet.  (Please contact us before submitting this Application if you are unsure of where to find this figure.  This is an important figure and is essential in order for us to be able to assess this application.)</span>
                                            <input type="number" name="share_capital" class="form-control " min="0" id=" " placeholder="issued share capital of the co?">
                                            <!-- <textarea name="" id="" cols="30" rows="5"></textarea> -->
                                        </div>
                                    </div>
                                    <!--Share capital End  -->
                                    <!--EIIS – Employment and Investment Initiative Scheme: Start  -->
                                    <h4>EIIS – Employment and Investment Initiative Scheme:</h4>
                                    <div class="employment-investment company-group-structure d-flex mb-15 table--data--items">
                                        <div class="form-group data--set-height">
                                            <label for=" ">Do you have approval or are you self-assessed for EIIS?</label>
                                            <div class="radio--button">
                                                <div class="ca__radio--custome d-flex">
                                                    <p>
                                                        <input type="radio" value="yes" id="investment" class="scope-test" name="investment">
                                                        <label for="test1">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input type="radio" value="no" id="investment" name="investment" class="scope-test1">
                                                        <label for="test1">No</label>
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--Share capital End  -->
                                    <!-- Data protection Start -->
                                    <div class="data--protection mb-15">
                                        <h4>Data protection</h4>
                                        <h5>Any personal information which you provide to Spark CrowdFunding will be obtained and processed in compliance with the Data Protection Acts 2018. The information in Application Forms will be used by Spark CrowdFunding
                                            in the processing of your application and for ongoing administrative purposes between you and Spark CrowdFunding.
                                        </h5>
                                    </div>
                                    <!-- Data protection End -->
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    <!-- Funding End -->
                    <div class="submit--button">
                        <!-- <input type="submit" id="submit_btn" name="submit_btn" value="Submit"> -->
                        <button type="submit" id="do-call" class="submit_btn" name="submit_btn" value="Submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </main>




    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js "></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js "></script>
    <script src="https://www.sparkcrowdfunding.com/libs/bootstrap/js/bootstrap.min.js "></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="js/custome.js "></script>
</body>

</html>
<?php 

?>