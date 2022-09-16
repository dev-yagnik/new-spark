function dropDown() {
  const dropDowns = document.querySelectorAll(".dropdown");
    //loop through all dropdown element
    dropDowns.forEach((dropDown) => {
        //get inner elements from each dropdown
        const select = dropDown.querySelector(".select");
        const arrow = dropDown.querySelector(".arrow");
        const menu = dropDown.querySelector(".menu");
        const menuItems = dropDown.querySelectorAll(".menu li");
        const selectTitle = dropDown.querySelector(".select-title");

        //add a click event to the select element
        select.addEventListener("click", () => {
            //add the clicked select style to the select element
            // select.classList.toggle("select-clicked");
            //rotate arrow up
            arrow.classList.toggle("arrow-rotate");
            //add the open stye to the menu element
            menu.classList.toggle("menu-open");
        });

        // loop throught all item element
        menuItems.forEach((item) => {
            // add click event to item element
            item.addEventListener("click", () => {
                // change selected inner text to clicked item inner text
                selectTitle.innerText = item.innerText;
                //add the clicked select style to the select element
                select.classList.remove("select-clicked");
                // rotate arrow down
                arrow.classList.remove("arrow-rotate");
                //close the menu element
                menu.classList.remove("menu-open");
                //remove active class from all menuitems elements
                menuItems.forEach((item) => {
                    item.classList.remove("active");
                });
                //add active class to clicked item element
                item.classList.add("active");
            });
        });
    });
}

jQuery(document).ready(function() {
  dropDown()
});

 // client type
$(document).on("click", '.client_type_dropdown', function() {
    $('.client_type').val($(this).html());
});


/* Commercial milestones Table row show js Start */
$(document).ready(function() {
 
    $('.add_commerical_milestone').click(function() {
        var newrow = '<tr><td class="col-xs-3"><input type="text" name="addmain[]" class="form-control editable" /></td>' +
        '<td class="col-xs-3"><input type="text" name="addprefer[]" class="form-control editable" /></td>' +
        '<td class="col-xs-3"><input type="text" name="addcommon[]" class="form-control editable" /></td>' + 
        '<td class="col-xs-1 text-center"><a href="javascript:void(0)" class="RowDel">' +
        '<i class="fa fa-trash-o" aria-hidden="true"></a></td></tr>';        
        $(".commercial_milestone_list").after(newrow);
    });

    $('.add_technical_milestone').click(function() {
        var newrow = '<tr><td class="col-xs-3"><input type="text" name="addmain2[]" class="form-control editable" /></td>' +
        '<td class="col-xs-3"><input type="text" name="addprefer2[]" class="form-control editable" /></td>' +
        '<td class="col-xs-3"><input type="text" name="addcommon2[]" class="form-control editable" /></td>' + 
        '<td class="col-xs-1 text-center"><a href="javascript:void(0)" class="RowDel">' +
        '<i class="fa fa-trash-o" aria-hidden="true"></a></td></tr>';        
        $(".technical_milestone_list").after(newrow);
    });

    $('.add_salary').click(function() {
        var newrow = '<tr><td class="col-xs-3"><input type="text" name="salary_name[]" class="form-control editable" /></td>' +
        '<td class="col-xs-3"><input type="text" name="salary_ftpt[]" class="form-control editable" /></td>' +
        '<td class="col-xs-3"><input type="text" name="salary_functions[]" class="form-control editable" /></td>' +
        '<td class="col-xs-3"><input type="number" name="salary_months[]" class="form-control editable" /></td>' +
        '<td class="col-xs-3"><input type="number" name="salary_number[]" class="form-control editable" /></td>' +
        '<td class="col-xs-1 text-center"><a href="javascript:void(0)" class="RowDel">' +
        '<i class="fa fa-trash-o" aria-hidden="true"></a></td></tr>';        
        $(".salaries_list").after(newrow);
    });

    $(document).on("click", '.RowDel', function() {
        $(this).closest('tr').remove(); 
    });
   

    

});

/* value of director */
$(document).ready(function() {
    // function formatValueRows(addMain3, addCommon3) {
    //     return '<tr><td class="col-xs-3"><input type="text" name="addmain3[]" value="' + addMain3 + '" class="form-control editable" /></td>' +
    //         '<td class="col-xs-3"><input type="text" name="addcommon3[]" value="' + addCommon3 + '" class="form-control editable" /></td>' +
    //         '<td class="col-xs-1 text-center"><a href="javascript:void(0)" class="ValueRowDel">' +
    //         '<i class="fa fa-trash-o" aria-hidden="true"></a></td></tr>';
    // };
    $(document).on("click", '.ValueRowDel', function() {
        $(this).closest('tr').remove(); 
    });

    function addRowValue() {
        // var addMain3 = $('.addMain3').val();
        // var addCommon3 = $('.addCommon3').val();
        // $(formatValueRows(addMain3, addCommon3));
        // $(formatValueRows(addMain3, addCommon3)).insertAfter('#addRowValue');
        var newrow = '<tr><td class="col-xs-3"><input type="text" name="addmain3[]" class="form-control editable" /></td>' +
        '<td class="col-xs-3"><input type="number" name="addcommon3[]" class="form-control editable" /></td>' +
        '<td class="col-xs-1 text-center"><a href="javascript:void(0)" class="ValueRowDel">' +
        '<i class="fa fa-trash-o" aria-hidden="true"></a></td></tr>';        
        $(".addRowValue").after(newrow);
        // $('input').val('');
    }

    $('.addBtnValue').click(function() {
        addRowValue();
    });

});
/* Value of director */

$(document).on("keydown", "form", function(event) { 
  return event.key != "Enter";
});

/* ownership and management structure */
$(document).ready(function() {
    $(".table-add").click(function () {
        var lastRow = $(this).closest('table').find('tbody .ownership').last();
        let newRow = lastRow.clone(true, true);
        newRow.find('input').val('');
        newRow.insertAfter(lastRow);
    });
    $(".table-remove").click(function () {
        var rowCount = $(this).closest('table').find('tbody .ownership').length;
        if (rowCount > 1) {
            $(this).closest('tr').remove(); 
        }

    });
});
/* ownership and management structure */

/* Applicant Details */
$(document).ready(function() {
  var Glob_applicant_no = 1;
    var applicants_row = 1;
    var applicants_new_row = 1;
        
          function Applicant_new_section() {
            $(".jAddRow").click(function() {
          html = '<div id="applicants-new-row' + applicants_new_row + '"><table class="table-editable table-editable-data"><tr class="table-heder-hading"><th><div class="applicant_order_box">Applicant <span class="applicant_order">1</span></div></th>';
          html += '<td class="table-controls table-zapper colspan="3"><button class="jDeleteRow btn-delete-row" type="button" onclick="$(\'#applicants-new-row' + applicants_new_row + '\').remove();">&times</button></a></td></tr>';
          html += '<tr class="table-fotm--data"><td colspan="2"><div class="d-flex"><div class="form-group"><label for=" ">Name:</label><input type="text" name="name[]" class="form-control " id=" " placeholder="Name" pattern="[a-zA-Z\s]+"></div>';
          html += '<div class="form-group"><label for=" ">DOB:</label><input type="date" name="dob[]" class="form-control " id=" "></div>';
          html += '<div class="form-group"><label for=" ">Home address:</label><input type="text" name="home_address[]" class="form-control " id=" " placeholder="Address"></div>';
          html += '<div class="form-group"><label for=" ">Nationality:</label><select class="nationality_dropdown_" name="nationality[]">';
          html += '<option value="">Please select your nationality</option><option value="Afghanistan">Afghanistan</option><option value="Aland Islands">Aland Islands</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option>';
          html += '<option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option>';
          html += '<option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option>';
          html += '<option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option>';
          html += '<option value="Bolivia">Bolivia</option><option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option>';
          html += '<option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option>';
          html += '<option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option>';
          html += '<option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>';
          html += '<option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option>';
          html += '<option value="Cote D`Ivoire">Cote D`Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Curacao">Curacao</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option>';
          html += '<option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option>';
          html += '<option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option>';
          html += '<option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option>';
          html += '<option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option>';
          html += '<option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option>';
          html += '<option value="Haiti">Haiti</option><option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option><option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option>';
          html += '<option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option>';
          html += '<option value="Isle of Man">Isle of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option>';
          html += '<option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, Democratic People`s Republic of">Korea, Democratic People`s Republic of</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option>';
          html += '<option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People`s Democratic Republic">Lao People`s Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>';
          html += '<option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option><option value="Madagascar">Madagascar</option>';
          html += '<option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option>';
          html += '<option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova, Republic of">Moldova, Republic of</option>';
          html += '<option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option>';
          html += '<option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option>';
          html += '<option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option>';
          html += '<option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option>';
          html += '<option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option>';
          html += '<option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Barthelemy">Saint Barthelemy</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>';
          html += '<option value="Saint Lucia">Saint Lucia</option><option value="Saint Martin">Saint Martin</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option>';
          html += '<option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Serbia and Montenegro">Serbia and Montenegro</option>';
          html += '<option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Sint Maarten">Sint Maarten</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option>';
          html += '<option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="South Sudan">South Sudan</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option>';
          html += '<option value="Suriname">Suriname</option><option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option>';
          html += '<option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="Togo">Togo</option>';
          html += '<option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option>';
          html += '<option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option>';
          html += '<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Viet Nam">Viet Nam</option>';
          html += '<option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option><option value="Wallis and Futuna">Wallis and Futuna</option>';
          html += '<option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select></div>';
          html += '<div class="form-group"><label for=" ">Education qualifications:</label><input type="text" name="education_qualifications[]" class="form-control " id=" " placeholder="Enter Your Education qualifications"></div></div></td></tr>';
          html += '<tr class="table-heder-inner-hading"><th colspan="2"><div class="applicant_inner_order_box">Applicant <span class="applicant_order">1</span></div></th></tr><tr><td colspan="4" class="table-divider"></td></tr>';
          html += '<tr class="table-fotm--data"><td><div id="table" class="table-editable-items "><table class="table"><tr><th>Company name</th><th>Activity of company</th><th>Position</th><th>Shareholding</th><th></th></tr><tbody class="applicant_row"><tr class="applicant_count" id="applicants-row' + applicants_row + '">';
          html += '<td class="table_row"><input name="_company_name'+Glob_applicant_no+'[]" pattern="^[A-Za-z -]+$"class="form-control" type="text" /></td><td class="table_row"><input name="activity_of_company'+Glob_applicant_no+'[]" pattern="^[A-Za-z -]+$" class="form-control" type="text" /></td><td class="table_row"><input name="position'+Glob_applicant_no+'[]" pattern="^[A-Za-z -]+$" class="form-control" type="text" /></td><td class="table_row"><input name="shareholding'+Glob_applicant_no+'[]" pattern="^[A-Za-z -]+$" class="form-control" type="text" /></td>';
          html += '<td class="add-remove--button"><span class="table-remove applicant_row_remove glyphicon glyphicon-remove" disabled></span><span class="table-add applicant_row_add glyphicon glyphicon-plus"></span></td></tr></tbody></table></div></td></tr></table></div>';
          $('.table_applicant').append(html);
          refreshApplicantCounts();
          Applicant_section_row();
          Applicant_section_row_delete();
        });
      }
Applicant_new_section();
$('.main_image a').each(function() {
  var $main_image = $(this).clone();
  $(this).closest('.item').find('.item-content .bloc_image').append($main_image);
});
function Applicant_section_row() {
  $(".applicant_row_add").click(function(){
    var lastRow = $('.applicant_row_add').closest('table').find('tbody .applicant_count').last();
    let newRow = lastRow.clone(true, true);
    newRow.find('input').val('');
    newRow.insertAfter(lastRow);
  });
}
Applicant_section_row();

function Applicant_section_row_delete() {
  $(".applicant_row_remove").click(function(){
    var rowCount = $('.applicant_row_remove').closest('table').find('tbody .applicant_count').length;
    if (rowCount > 1) {
      $(this).closest('tr').remove(); 
  }
  });
}
Applicant_section_row_delete();
/* Manage Applicant's Counts */
function refreshApplicantCounts() {
  var applicants = $('.applicant_order_box .applicant_order');
  $.each(applicants, function (index) {
    $(applicants[index]).html(index + 1);
    $(applicants[index]).closest('tbody').find('.applicant_inner_order_box .applicant_order').html(index + 1);
    Glob_applicant_no = index+1;
  });
}
});

/* Applicant Details */


/* Company group structure */
$(document).ready(function(){
    $("#company-structure1").click(function(){
      if(this.checked) {
        $("#company-structure").show();
        $('#other_company_name').prop('required',true);
        $('#total_sales').prop('required',true);
        $('#total_emloyment_numbers').prop('required',true);
      } else {
        $("#company-structure").hide();
      }
    });
    $("#company-structure2").click(function(){
        $("#company-structure").hide();
        $('#other_company_name').prop('required',false);
          $('#total_sales').prop('required',false);
          $('#total_emloyment_numbers').prop('required',false);
    });
  });
/* Company group structure */

/* enterprise ireland */
$(document).ready(function(){
    $("#enterprise-ireland1").click(function(){
      $("#enterprise").show();
      $('#hpsu').prop('required',true);
        $('#csf').prop('required',true);
        $('#nf').prop('required',true);
        $('#name_d_a').prop('required',true);
    });
    $("#enterprise-ireland2").click(function(){
      $("#enterprise").hide();
      $('#hpsu').prop('required',false);
        $('#csf').prop('required',false);
        $('#nf').prop('required',false);
        $('#name_d_a').prop('required',false);
    });
  });
/* enterprise ireland */

/* legal */
$(document).ready(function(){
    $("#legal1").click(function(){
      $("#legal").show();
      $('#legal_more_detail').prop('required',true);
    });
    $("#legal2").click(function(){
      $("#legal").hide();
      $('#legal_more_detail').prop('required',false);
    });
  });
/* legal */

/* aware */
$(document).ready(function(){
    $("#aware1").click(function(){
      $("#aware").show();
      $('#aware_more_detail').prop('required',true);
    });
    $("#aware2").click(function(){
      $("#aware").hide();
      $('#aware_more_detail').prop('required',false);
    });
  });
/* aware */

/* promoters */
$(document).ready(function(){
  $("#promoters1").click(function(){
    $("#promoters").show();
    $('#promoters_more_detail').prop('required',true);
  });
    $("#promoters2").click(function(){
      $("#promoters").hide();
      $('#promoters_more_detail').prop('required',false);
    });
  });
  /* promoters */

const loginBtn = document.getElementById("do-call");

loginBtn.addEventListener('click', () => {
  // Show loader on button click
  loginBtn.classList.add("loading");
  // Hide loader after success/failure - here it will hide after 2seconds
  setTimeout(() => loginBtn.classList.remove("loading"), 3000);
});
