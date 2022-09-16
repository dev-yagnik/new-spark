<?PHP
// error_reporting(E_ALL); ini_set('display_errors', 1);
ob_start();
 include_once 'function.php';
 include 'webhook_function.php';

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 use PHPMailer\PHPMailer\SMTP;

 require_once './PHPMailer/src/PHPMailer.php';
 require_once './PHPMailer/src/Exception.php';
 require_once './PHPMailer/src/SMTP.php';

if(!isset($_SESSION['username'])) {
	header('Location:login');
}
$conn=conme();
if (isset($_REQUEST["submit_btn"])) {
    // echo "kem  cho ";
    // echo "<pre> ";
    // print_r(count($_POST['home_address']));
    
    $client_type = $_POST['client_type'];
    $company_name = $_POST['company_name'];
    $trading_name = $_POST['trading_name'];
    $date_incorporation = $_POST['date_incorporation'];
    $c_i_a = $_POST['company_information_address'];
    $telephone = $_POST['company_information_telephone'];
    $web_address = $_POST['company_information_web_address'];
    $radio_group = $_POST['company_group_structure'];
    $other_company_name = $_POST['other_company_name'];
    $total_sales = $_POST['total_sales'];
    $total_emloyment_numbers = $_POST['total_emloyment_numbers'];
    $year_trading = $_POST['year_trading'];
    $company_profile_address = $_POST['company_profile_address'];
    $product_service_date = $_POST['product_service_date'];
    $ownership_shareholder = $_POST['ownership_shareholder'];
    $ownership_investor_type = $_POST['ownership_investor_type'];
    $ownership_of_shares = $_POST['ownership_of_shares'];
    $promoter_job_title = $_POST['promoter_job_title'];
    $promoter_name = $_POST['promoter_name'];
    $promoter_email = $_POST['promoter_email'];
    $promoter_telephone = $_POST['promoter_telephone'];
    $linkedIn_profile_url = $_POST['linkedIn_profile_url'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $nationality = $_POST['nationality'];
    $education_qualifications = $_POST['education_qualifications'];
    $home_address = $_POST['home_address'];
    $_company_name = $_POST['_company_name'];
    $activity_of_company = $_POST['activity_of_company'];
    $position = $_POST['position'];
    $shareholding = $_POST['shareholding'];
    $state_sector = $_POST['state_sector'];
    $support_programmes = $_POST['support_programmes'];
    $elclient = $_POST['elclient'];
    $enterprise_status = $_POST['enterprise_status'];
    $name_d_a = $_POST['name_d_a'];
    $ei_funding_commitment = $_POST['ei_funding_commitment'];
    $ei_funding_radio = $_POST['ei_funding_radio'];
    $ei_funding_date = $_POST['ei_funding_date'];
    $legal_radio = $_POST['legal_radio'];
    $legal_more_detail = $_POST['legal_more_detail'];
    $aware_radio = $_POST['aware_radio'];
    $aware_more_detail = $_POST['aware_more_detail'];
    $promoters_radio = $_POST['promoters_radio'];
    $promoters_more_detail = $_POST['promoters_more_detail'];
    $ei_funding_product = $_POST['ei_funding_product'];
    $development_stage = $_POST['development_stage'];
    $operations = $_POST['operations'];
    $ambition = $_POST['ambition'];
    $accessible_market = $_POST['accessible_market'];
    $research = $_POST['research'];
    $competitors = $_POST['competitors'];
    $innovation = $_POST['innovation'];
    $technical_roadmap = $_POST['technical_roadmap'];
    $intellectual_property = $_POST['intellectual_property'];
    $track_record = $_POST['track_record'];
    $other_advisors = $_POST['other_advisors'];
    $skills_gap = $_POST['skills_gap'];
    $addmain = $_POST['addmain'];
    $addprefer = $_POST['addprefer'];
    $addcommon = $_POST['addcommon'];
    $addmain2 = $_POST['addmain2'];
    $addprefer2 = $_POST['addprefer2'];
    $addcommon2 = $_POST['addcommon2'];
    $costs_solution = $_POST['costs_solution'];
    $salary_name = $_POST['salary_name'];
    $salary_ftpt = $_POST['salary_ftpt'];
    $salary_functions = $_POST['salary_functions'];
    $salary_months = $_POST['salary_months'];
    $salary_number = $_POST['salary_number'];
    // $salary_tot = $salary_number + 
    // echo "<pre>";
    // print_r($salary_number);die;
    // $salary_total = $_POST['salary_total'];
    $addmain3 = $_POST['addmain3'];
    $addcommon3 = $_POST['addcommon3'];
    $start_date = $_POST['start_date'];
    $company_financial_year_end_date = $_POST['company_financial_year_end_date'];
    $ye_last_fiscal_yr = $_POST['ye_last_fiscal_yr'];
    $ye_current_fiscal_yr = $_POST['ye_current_fiscal_yr'];
    $ye_current_fiscal_yr1 = $_POST['ye_current_fiscal_yr1'];
    $ye_current_fiscal_yr2 = $_POST['ye_current_fiscal_yr2'];
    $ye_current_fiscal_yr3 = $_POST['ye_current_fiscal_yr3'];
    $s_last_fiscal_yr = $_POST['s_last_fiscal_yr'];
    $s_current_fiscal_yr = $_POST['s_current_fiscal_yr'];
    $s_current_fiscal_yr1 = $_POST['s_current_fiscal_yr1'];
    $s_current_fiscal_yr2 = $_POST['s_current_fiscal_yr2'];
    $s_current_fiscal_yr3 = $_POST['s_current_fiscal_yr3'];
    $c_last_fiscal_yr = $_POST['c_last_fiscal_yr'];
    $c_current_fiscal_yr = $_POST['c_current_fiscal_yr'];
    $c_current_fiscal_yr1 = $_POST['c_current_fiscal_yr1'];
    $c_current_fiscal_yr2 = $_POST['c_current_fiscal_yr2'];
    $c_current_fiscal_yr3 = $_POST['c_current_fiscal_yr3'];
    $np_last_fiscal_yr = $_POST['np_last_fiscal_yr'];
    $np_current_fiscal_yr = $_POST['np_current_fiscal_yr'];
    $np_current_fiscal_yr1 = $_POST['np_current_fiscal_yr1'];
    $np_current_fiscal_yr2 = $_POST['np_current_fiscal_yr2'];
    $np_current_fiscal_yr3 = $_POST['np_current_fiscal_yr3'];
    $ec_last_fiscal_yr = $_POST['ec_last_fiscal_yr'];
    $ec_current_fiscal_yr = $_POST['ec_current_fiscal_yr'];
    $ec_current_fiscal_yr1 = $_POST['ec_current_fiscal_yr1'];
    $ec_current_fiscal_yr2 = $_POST['ec_current_fiscal_yr2'];
    $ec_current_fiscal_yr3 = $_POST['ec_current_fiscal_yr3'];
    $m_r_v = $_POST['m_r_v'];
    $v_f_r = $_POST['v_f_r'];
    $valuation_of_the_business = $_POST['valuation_of_the_business'];
    $minimum_return = $_POST['minimum_return'];
    $approximately_what_net_profit = $_POST['approximately_what_net_profit'];
    $currently_in_the_business = $_POST['currently_in_the_business'];
    $please_provide_debt_details = $_POST['please_provide_debt_details'];
    $cash_in_the_bank = $_POST['cash_in_the_bank'];
    $average_monthly_cash = $_POST['average_monthly_cash'];
    $state_which_firms = $_POST['state_which_firms'];
    // $state_which_f = $_POST['state_which_firms'];
    // $state_impload = implode(', ', $state_which_f);
    // $state_which_firms = $state_impload;
    $seeking_raise_round = $_POST['seeking_raise_round'];
    $seeking_raise_round_time = $_POST['seeking_raise_round_time'];
    $funds = $_POST['funds'];
    $f_i_round = $_POST['f_i_round'];
    $funding_commitments = $_POST['funding_commitments'];
    $previous_funding_commitments = $_POST['previous_funding_commitments'];
    $p_f_c_details = $_POST['p_f_c_details'];
    $p_f_c_valuation = $_POST['p_f_c_valuation'];
    $p_f_c_more_details = $_POST['p_f_c_more_details'];
    $share_capital = $_POST['share_capital'];
    $investment = $_POST['investment'];
    $htmlOwneship = '';
    foreach($ownership_shareholder as $key => $val) {
        $htmlOwneship .= '<tr>
                        <td style="border:1px solid #5898fa;padding: 12px;font-size: 16px;">'.$val.'</td>
                        <td style="border:1px solid #5898fa;padding: 12px;font-size: 16px;">'.$ownership_investor_type[$key].'</td>
                        <td style="border:1px solid #5898fa;padding: 12px;font-size: 16px;">'.$ownership_of_shares[$key].'</td>
                    </tr>';                          
    }
    $htmlTechnical = '';
    foreach($addmain2 as $key => $val) {
        $htmlTechnical .= '<tr>
        <td style="border:1px solid #5898fa;width: 33.33%;padding: 12px;font-size: 16px;">'.$val.'</td>
        <td style="border:1px solid #5898fa;width: 33.33;padding: 12px;font-size: 16px;">'.$addprefer2[$key].'</td>
        <td style="border:1px solid #5898fa;width: 33.33;padding: 12px;font-size: 16px;">'.$addcommon2[$key].'</td>
    </tr>';                          
    }
    $htmlValue_director = '';
    foreach($addmain3 as $key => $val) {
        $htmlValue_director .= '<tr>
        <td style="border:1px solid #5898fa;width: 50%;padding: 12px;font-size: 16px;">'.$val.'</td>
        <td style="border:1px solid #5898fa;width: 50%;padding: 12px;font-size: 16px;">'.$addcommon3[$key].'</td>
    </tr>';                          
    }

    $htmlApplicant1 = '';
    $j=0;
    $ap  = 1;

    foreach($name as $key => $val) {
        $htmlApplicant1 .= '
        <tr>
            <td style="padding:15px;"></td>
        </tr><tr>
        <th colspan="12" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Applicant '.$ap.'</th>
            </tr>
        <tr>
        <td colspan="3" style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">
            Name:
        </td>
        <td colspan="3" style="border:1px solid #5898fa;width:30%;padding: 5px 10px;font-size: 16px;">
        '.$val.'</td>
        <td colspan="3" style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">
            DoB:
        </td>
        <td colspan="3" style="border:1px solid #5898fa;width:30%;padding: 5px 10px;font-size: 16px;">
        '.$dob[$key].'</td>
    </tr>
    <tr>
        <td colspan="3" style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">
            Home address:
        </td>
        <td colspan="3" style="border:1px solid #5898fa;width:30%;padding: 5px 10px;font-size: 16px;">
        '.$home_address[$key].'</td>
        <td colspan="3" style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">
            Nationality:
        </td>
        <td colspan="3" style="border:1px solid #5898fa;width:30%;padding: 5px 10px;font-size: 16px;">
        '.$nationality[$key].'</td>
    </tr>
    <tr>
        <td colspan="3" style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">
            Education qualifications:
        </td>
        <td colspan="9" style="border:1px solid #5898fa;width:80%;padding: 5px 10px;font-size: 16px;">
        '.$education_qualifications[$key].'</td>
    </tr>
    <tr>
        <th colspan="12" style="color:#000000;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Applicant '.$ap.'</th>
    </tr>
    <tr>
        <td colspan="3" style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">
            Company name
        </td>
        <td colspan="3" style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">
            Activity of company
        </td>
        <td colspan="3" style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">
            Position
        </td>
        <td colspan="3" style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">
            Shareholding
        </td>
    </tr>';
    for($i=0;$i<count($_POST["_company_name".($j)]);$i++)
    {
        $htmlApplicant1 .= '<tr>
        <td colspan="3" style="border:1px solid #5898fa;padding: 12px;font-size: 16px;">'.$_POST["_company_name".($j)][$i].'</td>
        <br>
        <td colspan="3" style="border:1px solid #5898fa;padding: 12px;font-size: 16px;">'.$_POST["activity_of_company".($j)][$i].'</td>
        <br>
        <td colspan="3" style="border:1px solid #5898fa;padding: 12px;font-size: 16px;">'.$_POST["position".($j)][$i].'</td>
        <br>
        <td colspan="3" style="border:1px solid #5898fa;padding: 12px;font-size: 16px;">'.$_POST["shareholding".($j)][$i].'</td>
        <br>
    </tr>';
    }$j++;$ap++;
    }
    $htmlCommercial_milestones = '';
    foreach($addmain as $key => $val) {
        $htmlCommercial_milestones .= '<tr>
        <td style="border:1px solid #5898fa;width: 33.33%;padding: 12px;font-size: 16px;">'.$val.'</td>
        <td style="border:1px solid #5898fa;width: 33.33;padding: 12px;font-size: 16px;">'.$addprefer[$key].'</td>
        <td style="border:1px solid #5898fa;width: 33.33;padding: 12px;font-size: 16px;">'.$addcommon[$key].'</td>
    </tr>';                          
    }
    $htmlSalary = '';
    $salary_cost_total = 0;
    $data = array();
    foreach($salary_name as $key => $val) {
        $salary_cost_total = $salary_cost_total + floatval($salary_number[$key]);
        $htmlSalary .= '<tr>
        <td style="border:1px solid #5898fa;width: 25%;padding: 12px;font-size: 16px;">'.$val.'</td>
        <td style="border:1px solid #5898fa;width: 10%;padding: 12px;font-size: 16px;">'.$salary_ftpt[$key].'</td>
        <td style="border:1px solid #5898fa;width: 20%;padding: 12px;font-size: 16px;">'.$salary_functions[$key].'</td>
        <td style="border:1px solid #5898fa;width: 20%;padding: 12px;font-size: 16px;">'.$salary_months[$key].'</td>
        <td style="border:1px solid #5898fa;width: 20%;padding: 12px;font-size: 16px;">'.$salary_number[$key].'</td>
    </tr>';
    }


    require_once __DIR__ . '/mpdf/vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML('<div style="width:100%; max-width:700px; margin: 0 auto; padding:15px 0">
    <!-- Product/Service and Market Opportunity Start -->
    <table style="border-collapse: collapse;width: 100%; font-family: Arial, Helvetica, sans-serif;">
        <tbody>
            <tr>
                <th colspan="2" style="font-family: Arial, Helvetica, sans-serif;font-size:24px;padding-bottom: 18px;padding-top: 50px;font-weight: 600;">
                    Campaign Application Form
                </th>
            </tr>
            <tr>
    
                <th style="font-family: Arial, Helvetica, sans-serif;font-size:24px;padding-bottom: 40px;padding-top: 20px;font-weight: 600;">
                    Spark CrowdFunding
                </th>
            </tr>
            <tr>
                <td style="padding-bottom:40px">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Applicant Details:</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;width:30%;">
                                    Company Name:
                                </td>
                                <td style="border:1px solid #5898fa;;width: 50%;padding: 5px 10px;font-size: 16px;width:70%;"></td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;width:30%;">
                                    CRO #:
                                </td>
                                <td style="border:1px solid #5898fa;;width: 50%;padding: 5px 10px;font-size: 16px;width:70%;"></td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;width:30%;">
                                    Promoter Name:
                                </td>
                                <td style="border:1px solid #5898fa;;width: 50%;padding: 5px 10px;font-size: 16px;width:70%;"></td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;width:30%;">
                                    Contact Email:
                                </td>
                                <td style="border:1px solid #5898fa;;width: 50%;padding: 5px 10px;font-size: 16px;width:70%;"></td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;width:30%;">
                                    Contact mobile#:
                                </td>
                                <td style="border:1px solid #5898fa;;width: 50%;padding: 5px 10px;font-size: 16px;width:70%;"></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- Product/Service and Market Opportunity End -->
    <!-- Company Profile Start -->
    <table style="border-collapse: collapse;width: 100%; font-family: Arial, Helvetica, sans-serif;">
        <tbody>
            <tr>
                <th style="text-align:start; font-family: Arial, Helvetica, sans-serif;color:#5898fa;padding-bottom: 30px; text-decoration-line: underline; text-decoration-style: double;">
                    Company Profile
                </th>
            </tr>
            <!-- Client type Start -->
            <tr>
                <td>
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Client type:</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    Individual / Company / Partnership?
                                </td>
                                <td style="border:1px solid #5898fa;;width: 50%;padding: 5px 10px;font-size: 16px;">'.$client_type.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Client type End -->
            <!-- Company details Start -->
            <tr>
                <td style="padding-top: 30px">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Company details:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    Registered company name:
                                </td>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">'.$company_name.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    Trading name (if different):
                                </td>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">'.$trading_name.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    Date of incorporation:
                                </td>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">'.$date_incorporation.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Company details End -->
            <!-- Basic company information Start -->
            <tr>
                <td style="padding-top: 30px">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Basic company information:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 30%;padding: 5px 10px;font-size: 16px;height:100px;vertical-align: text-top;">
                                    Address:
                                </td>
                                <td style="border:1px solid #5898fa;width: 70%;padding: 5px 10px;font-size: 16px;">'.$c_i_a.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 30%;padding: 5px 10px;font-size: 16px;">
                                    Telephone #:
                                </td>
                                <td style="border:1px solid #5898fa;width: 70%;padding: 5px 10px;font-size: 16px;">'.$telephone.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 30%;padding: 5px 10px;font-size: 16px;">
                                    Web address:
                                </td>
                                <td style="border:1px solid #5898fa;width: 70%;padding: 5px 10px;font-size: 16px;">'.$web_address.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Basic company information End -->
            <!-- Company group structure Start -->
            <tr>
                <td style="padding-top: 30px">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Company group structure:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    Is the company part of a group structure (Y/N)?
                                </td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$radio_group.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    If yes, please provide details of the group structure and associated companies<br><small>(including names of other group companies, total sales and total employment numbers)</small>
                                </td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$other_company_name.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 30%;padding: 5px 10px;font-size: 16px;">
                                    Total Sales:
                                </td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$total_sales.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 30%;padding: 5px 10px;font-size: 16px;">
                                    Total Employment Numbers:
                                </td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$total_emloyment_numbers.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Company group structure End -->
            <!-- Company profile and history Start -->
            <tr>
                <td style="padding-top: 30px">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Company profile and history:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    Year trading commenced:
                                </td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$year_trading.'</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    Please provide an overview of the companys trading history:<br><small>(If pre-revenue / an individual, provide details of personal qualifications, previous work history and other relevant details)</small>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;height: 100px;">'.$company_profile_address.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Company profile and history End -->
            <!-- Product or service offering Start -->
            <tr>
                <td style="padding-top: 30px">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Product or service offering:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2" style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    Highlight achievements to-date in Ireland and international markets:
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;height: 100px;">'.$product_service_date.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Product or service offering End -->
            <!-- Ownership and management structure Start -->
            <tr>
                <td style="padding-top: 30px">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Ownership and management structure:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 20px 0 0 0">
                                    <table style="border-collapse: collapse; width:100%;">
                                        <thead>
                                            <tr>
                                                <th style="color:#ffffff;background-color:#5898fa;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Name of shareholder</th>
                                                <th style="color:#ffffff;background-color:#5898fa;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Investor type</th>
                                                <th style="color:#ffffff;background-color:#5898fa;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">% of shares</th>
                                            </tr>
                                        </thead>
                                        <tbody>'.$htmlOwneship.'
                                            
                                            
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Ownership and management structure End -->
            <!-- Promoter contact details Start -->
            <tr>
                <td style="padding-top: 30px">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Promoter contact details:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 40%;padding: 5px 10px;font-size: 16px;">
                                    Name:
                                </td>
                                <td style="border:1px solid #5898fa;width: 60%;padding: 5px 10px;font-size: 16px;">
                                '.$promoter_name.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 40%;padding: 5px 10px;font-size: 16px;">
                                    Job title:
                                </td>
                                <td style="border:1px solid #5898fa;width: 60%;padding: 5px 10px;font-size: 16px;">
                                '.$promoter_job_title.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 40%;padding: 5px 10px;font-size: 16px;">
                                    Email address:
                                </td>
                                <td style="border:1px solid #5898fa;width: 60%;padding: 5px 10px;font-size: 16px;">
                                '.$promoter_email.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 40%;padding: 5px 10px;font-size: 16px;">
                                    Telephone #:
                                </td>
                                <td style="border:1px solid #5898fa;width: 60%;padding: 5px 10px;font-size: 16px;">
                                '.$promoter_telephone.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 40%;padding: 5px 10px;font-size: 16px;">
                                    LinkedIn profile (full URL):
                                </td>
                                <td style="border:1px solid #5898fa;width: 60%;padding: 5px 10px;font-size: 16px;">
                                '.$linkedIn_profile_url.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Promoter contact details End -->
            <!-- Details of directorships (past and present) Start -->
            <tr>
                <td style="padding-top: 30px">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Details of directorships (past and present):</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2" style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    Due diligence is undertaken on all applicants.<br>The following information is required for all founders and directors<br><small>Note: Your application may be deemed ineligible if the information supplied at the time of application is incorrect or incomplete. i.e. Information not supplied on all founders / directors and all directorships.</small>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;height: 100px;"></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Details of directorships (past and present) End -->
            <!-- Applicant 1 Start -->
            <tr>
                <td style="padding-top: 30px">
                    <table style="overflow: wrap; border-collapse: collapse; width:100%;">
                        
                        <tbody>'.$htmlApplicant1.'
                            
                        <tr>
                            <td style="padding:15px;"></td>
                        </tr>
                        </tbody>
                        
                    </table>
                </td>
            </tr>
            <!-- Applicant 1 End -->
            <!-- Data protection Start -->
            <tr>
                <td style="padding-top: 30px">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Data protection:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2" style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;line-height: 1.4;">
                                    Any personal information which you provide to Spark CrowdFunding will be obtained and processed in compliance with the Data Protection Acts 2018. <br>The information in Application Forms will be used by Spark CrowdFunding
                                    in the processing of your application and for ongoing administrative purposes between you and Spark CrowdFunding.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Data protection End -->
            <!-- Business sector Start -->
            <tr>
                <td style="padding-top: 30px">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Business sector:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 60%;padding: 5px 10px;font-size: 16px;line-height: 1.4;">
                                    State sector/vertical in which your company operates:
                                </td>
                                <td style="border:1px solid #5898fa;width: 40%;padding: 5px 10px;font-size: 16px;line-height: 1.4;">
                                '.$state_sector.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Business sector End -->
            <!-- Support programmes Start -->
            <tr>
                <td style="padding-top: 30px">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Support programmes:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 60%;padding: 5px 10px;font-size: 16px;line-height: 1.4;">
                                    List any entrepreneur support programmes you have participated in (e.g. Accelerators. Incubators etc.), please provide weblinks.
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;height: 100px;">'.$support_programmes.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Support programmes End -->
            <!-- Enterprise Ireland Start -->
            <tr>
                <td style="padding-top: 30px">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Enterprise Ireland:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 40%;padding: 5px 10px;font-size: 16px;line-height: 1.4;">
                                    Are you an EI client?
                                </td>
                                <td style="border:1px solid #5898fa;width: 60%;padding: 5px 10px;font-size: 16px;">'.$elclient.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 40%;padding: 5px 10px;font-size: 16px;line-height: 1.4;">
                                    If yes, what status are you?<br><small>e.g. HPSU / CSF / NF</small>
                                </td>
                                <td style="border:1px solid #5898fa;width: 60%;padding: 5px 10px;font-size: 16px;">'.$enterprise_status.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 40%;padding: 5px 10px;font-size: 16px;line-height: 1.4;">
                                    Name of DA (Development Advisor)
                                </td>
                                <td style="border:1px solid #5898fa;width: 60%;padding: 5px 10px;font-size: 16px;">'.$name_d_a.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Enterprise Ireland End -->
            <!-- Legal Start -->
            <tr>
                <td style="padding-top: 30px">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Legal:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;line-height: 1.4;">
                                    Is the Company involved in any Legal Actions at the moment?
                                </td>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">'.$legal_radio.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;line-height: 1.4;">
                                    If yes, please explain in more detail:
                                </td>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">'.$legal_more_detail.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;line-height: 1.4;">
                                    Is the Company aware of any potential Legal Actions that may be taken against the company in the future?
                                </td>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">'.$aware_radio.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;line-height: 1.4;">
                                    If yes, please explain in more detail:
                                </td>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">'.$aware_more_detail.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;line-height: 1.4;">
                                    Have any of the promoters, either individually or collectively, or any shareholder owning more than 20% of the shares in the company, entered into any private arrangements or side deals in relation to the sale or transfer of any of their shares or options?
                                </td>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">'.$promoters_radio.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;line-height: 1.4;">
                                    If yes, please explain in more detail:
                                </td>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">'.$promoters_more_detail.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Legal Start -->
        </tbody>
    </table>
    <!-- Company Profile End -->
    <!-- Product/Service and Market Opportunity Start -->
    <table style="border-collapse: collapse;width: 100%; font-family: Arial, Helvetica, sans-serif;">
        <tbody>
            <tr>
                <th style="text-align:start; font-family: Arial, Helvetica, sans-serif;color:#5898fa;padding-bottom: 18px;padding-top: 50px; text-decoration-line: underline; text-decoration-style: double;">
                    Product/Service and Market Opportunity
                </th>
            </tr>
            <!-- Product / Service Start -->
            <tr>
                <td>
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Product / Service:</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    What is your product / service? What problem are you solving and for who?
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;height:100px">'.$ei_funding_product.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Product / Service End -->
            <!-- Development stage Start -->
            <tr>
                <td style="padding-top: 30px;">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Development stage:</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    At what stage of development is the solution? e.g. at concept stage, at design stage, at beta stage or live and generating revenues.
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;height:100px">'.$development_stage.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Development stage End -->
            <!-- Operations Start -->
            <tr>
                <td style="padding-top: 30px;">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Operations:</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    If it is proposed to outsource the manufacturing or the software development to a 3rd party, please give details to whom, for how long and for what.
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;height:100px">'.$operations.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Operations End -->
            <!-- Ambition Start -->
            <tr>
                <td style="padding-top: 30px;">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Ambition:</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    What is your longer-term vision for the company? (e.g. 3-5 years).
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;height:100px">'.$ambition.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Ambition End -->
            <!-- Accessible market Start -->
            <tr>
                <td style="padding-top: 30px;">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Accessible market:</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    How big is the accessible market? Where is it? Why is it an attractive market for a start-up?
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;height:100px">'.$accessible_market.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Accessible market End -->
            <!-- Research Start -->
            <tr>
                <td style="padding-top: 30px;">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Research</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    Detail any research you have conducted to validate the market and opportunity, particularly from business customers and consumers.
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;height:100px">'.$research.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Research End -->
            <!-- Competitors Start -->
            <tr>
                <td style="padding-top: 30px;">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Research</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    Who are your main competitors? Why is your solution better? What will stop them copying or matching your solution?
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;height:100px">'.$competitors.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Competitors End -->
        </tbody>
    </table>
    <!-- Product/Service and Market Opportunity End -->
    <!-- Innovation Start -->
    <table style="border-collapse: collapse;width: 100%; font-family: Arial, Helvetica, sans-serif;">
        <tbody>
            <tr>
                <th style="text-align:start; font-family: Arial, Helvetica, sans-serif;color:#5898fa;padding-bottom: 18px;padding-top: 50px; text-decoration-line: underline; text-decoration-style: double;">
                    Innovation
                </th>
            </tr>
            <!-- Innovation Start -->
            <tr>
                <td>
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Innovation</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    What is unique about your solution?
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;height:100px">'.$innovation.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Innovation End -->
            <!-- Technical roadmap Start -->
            <tr>
                <td style="padding-top: 30px;">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Technical roadmap</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    Do you have / need a technical roadmap? If so, please describe.
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;height:100px">'.$technical_roadmap.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Technical roadmap End -->
            <!-- Intellectual Property Start -->
            <tr>
                <td style="padding-top: 30px;">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Intellectual Property</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    Is there any Intellectual Property associated with this project? If yes, please provide details,i.e. licences or patents etc.
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;height:100px">'.$intellectual_property.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Intellectual Property End -->
        </tbody>
    </table>
    <!-- Innovation End -->
    <!-- Founders / Team Start -->
    <table style="border-collapse: collapse;width: 100%; font-family: Arial, Helvetica, sans-serif;">
        <tbody>
            <tr>
                <th style="text-align:start; font-family: Arial, Helvetica, sans-serif;color:#5898fa;padding-bottom: 18px;padding-top: 50px; text-decoration-line: underline; text-decoration-style: double;">
                    Founders / Team
                </th>
            </tr>
            <!-- Founder(s)/team track record and sector knowledge Start -->
            <tr>
                <td>
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Founder(s)/team track record and sector knowledge</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    Outline the founder(s)/team track record and sector knowledge relevant to this project (include links to LinkedIn, Twitter etc., where appropriate)
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;height:100px">'.$track_record.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Founder(s)/team track record and sector knowledge End -->
            <!-- Other Advisors / influencers related to the project Start -->
            <tr>
                <td style="padding-top: 30px;">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Other Advisors / influencers related to the project</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    Outline any other advisors / influencers related to the project and outline their time commitment to the project.
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;height:100px">'.$other_advisors.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Other Advisors / influencers related to the project End -->
            <!-- Skills gap Start -->
            <tr>
                <td style="padding-top: 30px;">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Skills gap</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">
                                    What gaps exist in your team?
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;height:100px">'.$skills_gap.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Skills gap End -->
        </tbody>
    </table>
    <!-- Founders / Team End -->
    <!-- Key Milestones Start -->
    <table style="border-collapse: collapse;width: 100%; font-family: Arial, Helvetica, sans-serif;">
        <tbody>
            <tr>
                <th style="text-align:start; font-family: Arial, Helvetica, sans-serif;color:#5898fa;padding-bottom: 15px;padding-top: 50px; text-decoration-line: underline; text-decoration-style: double;">
                    Key Milestones
                </th>
            </tr>
            <tr>
                <th style="text-align:start;font-weight:500;padding-bottom:30px;">Outline the key Commercial and Technical milestones that this early-stage funding will allow you to achieve over the duration of the business plan outlined in this application (e.g. 12 months) and will get you to a positionwhere the
                    company can attract the next stage of funding.</th>
            </tr>
            <!-- Commercial milestones Start -->
            <tr>
                <td style="padding-bottom:10px;">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Commercial milestones</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
    
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:33.33%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Description of commercial objective</th>
                                <th style="color:#ffffff;background-color:#5898fa;width:33.33%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Outcome/milestone to be achieved</th>
                                <th style="color:#ffffff;background-color:#5898fa;width:33.33%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Date to be achieved</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>'.$htmlCommercial_milestones.'

                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Commercial milestones End -->
            <!-- Technical milestones -->
            <tr>
                <td style="padding-bottom:10px;padding-top: 40px;">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Technical milestones</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
    
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:33.33%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Description of commercial objective</th>
                                <th style="color:#ffffff;background-color:#5898fa;width:33.33%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Outcome/milestone to be achieved</th>
                                <th style="color:#ffffff;background-color:#5898fa;width:33.33%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Date to be achieved</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>'.$htmlTechnical.'
                            
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Technical milestones End -->
        </tbody>
    </table>
    <!-- Key Milestones End -->
    <!-- Cost of Plan Start -->
    <table style="border-collapse: collapse;width: 100%; font-family: Arial, Helvetica, sans-serif;">
        <tbody>
            <tr>
                <th style="text-align:start; font-family: Arial, Helvetica, sans-serif;color:#5898fa;padding-bottom: 18px;padding-top: 50px; text-decoration-line: underline; text-decoration-style: double;">
                    Cost of Plan
                </th>
            </tr>
            <!-- Proposed business plan implementation costs Start -->
            <tr>
                <td>
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Proposed business plan implementation costs</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 75%;padding: 5px 10px;font-size: 16px;">
                                    What is the proposed duration of the business plan outlined in this application?
                                </td>
                                <td style="border:1px solid #5898fa;width: 25%;padding: 5px 10px;font-size: 16px;">'.$costs_solution.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Proposed business plan implementation costs End -->
            <!-- Salaries Start -->
            <tr>
                <td style="padding-bottom:10px;padding-top: 40px;">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Salaries</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:25%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Name</th>
                                <th style="color:#ffffff;background-color:#5898fa;width:10%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">FT/PT</th>
                                <th style="color:#ffffff;background-color:#5898fa;width:25%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Function</th>
                                <th style="color:#ffffff;background-color:#5898fa;width:20%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">No. of months</th>
                                <th style="color:#ffffff;background-color:#5898fa;width:20%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Cost</th>
                            </tr>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>'.$htmlSalary.'
                            
                            <tr>
                                <td colspan="3" style="border:0px solid #5898fa;padding: 12px;font-size: 16px;"></td>
                                <td style="border:1px solid #5898fa;width: 20%;padding: 5px 10px;font-size: 16px;">Total:</td>
                                <td style="border:1px solid #5898fa;width: 20%;padding: 5px 10px;font-size: 16px;">'.$salary_cost_total.'</td>
                            </tr>
    
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Salaries End -->
            <!-- Value of director/shareholder/related-party loans in place at time of application (€): Start -->
            <tr>
                <td style="padding-bottom:10px;padding-top: 40px;">
                    <table style="border-collapse: collapse; width:100%;border:1px solid #5898fa;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Value of director/shareholder/related-party loans in place at time of application (€):</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th colspan="2" style="text-align:start;font-weight:500;padding: 5px 10px;">
                                    (Please note the value of directors loans will be added to the amount of equity investment outlined in the Cap. Table in the company profile page. In line with the eligibility criteria, the total must not exceed €100k) If the loans are from more than
                                    one individual, please list them by name/value.
                                </th>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">Name:</td>
                                <td style="border:1px solid #5898fa;width: 50%;padding: 5px 10px;font-size: 16px;">Value:</td>
                            </tr>
                            '.$htmlValue_director.'
                            <tr>
                                <th colspan="2" style="text-align:start;font-weight:500;padding: 5px 10px;">
                                    Note: If successful, Spark Crowdfunding will require that these loans are subordinated (i.e. locked into the business) for the duration of the business plan.
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Value of director/shareholder/related-party loans in place at time of application (€): End -->
            <!-- Start date: Start -->
            <tr>
                <td style="padding-bottom:10px;padding-top: 40px;">
                    <table style="border-collapse: collapse; width:100%;border:1px solid #5898fa;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Start date:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:50%;">
                                    Business plan expenditure start date:
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:50%;">
                                '.$start_date.'</td>
                            </tr>
    
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Start date: End -->
        </tbody>
    </table>
    <!-- Cost of Plan End -->
    <!-- Financial Information Start -->
    <table style="border-collapse: collapse;width: 100%; font-family: Arial, Helvetica, sans-serif;">
        <tbody>
            <tr>
                <th style="text-align:start; font-family: Arial, Helvetica, sans-serif;color:#5898fa;padding-bottom: 18px;padding-top: 50px; text-decoration-line: underline; text-decoration-style: double;">
                    Financial Information
                </th>
            </tr>
            <!-- Start date: Start -->
            <tr>
                <td style="padding-bottom:10px;">
                    <table style="border-collapse: collapse; width:100%;border:1px solid #5898fa;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Financial year end</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;">
                                    What is the company’s financial year end date?
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$company_financial_year_end_date.'</td>
                            </tr>
    
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Start date: End -->
            <!-- Financial and employment details Start -->
            <tr>
                <td style="padding-bottom:10px;padding-top: 40px;">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Financial and employment details</th>
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th style="color:#ffffff;background-color:#5898fa;text-align: start;width:25%;padding: 5px 10px;border:1px solid #5898fa;"></th>
                                <th style="color:#ffffff;background-color:#5898fa;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Last fiscal yr <small>(actual)</small></th>
                                <th style="color:#ffffff;background-color:#5898fa;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Current fiscal yr <small>(projected)</small></th>
                                <th style="color:#ffffff;background-color:#5898fa;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Current fiscal yr +1 <small>(projected)</small></th>
                                <th style="color:#ffffff;background-color:#5898fa;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Current fiscal yr +2 <small>(projected)</small></th>
                                <th style="color:#ffffff;background-color:#5898fa;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Current fiscal yr +3 <small>(projected)</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">Year ending</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$ye_last_fiscal_yr.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$ye_current_fiscal_yr.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$ye_current_fiscal_yr1.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$ye_current_fiscal_yr2.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$ye_current_fiscal_yr3.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">Sales</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$s_last_fiscal_yr.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$s_current_fiscal_yr.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$s_current_fiscal_yr1.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$s_current_fiscal_yr2.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$s_current_fiscal_yr3.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">Costs</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$c_last_fiscal_yr.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$c_current_fiscal_yr.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$c_current_fiscal_yr1.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$c_current_fiscal_yr2.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$c_current_fiscal_yr3.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">Net Profit</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$np_last_fiscal_yr.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$np_current_fiscal_yr.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$np_current_fiscal_yr1.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$np_current_fiscal_yr2.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$np_current_fiscal_yr3.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">Employee count</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$ec_last_fiscal_yr.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$ec_current_fiscal_yr.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$ec_current_fiscal_yr1.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$ec_current_fiscal_yr2.'</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;">'.$ec_current_fiscal_yr3.'</td>
                            </tr>
    
    
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Financial and employment details End -->
            <!-- Other financial information: Start -->
            <tr>
                <td style="padding-top:30px;">
                    <table style="border-collapse: collapse; width:100%;border:1px solid #5898fa;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Other financial information:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;">
                                    Most recent valuation:
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$m_r_v.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;">
                                    Valuation at this funding round?
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$v_f_r.'</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;">
                                    What is the basis for your justification of the valuation of the business?Please outline the methodology and the assumptions you are using to arrive at your valuation. Valuations of companies in similar industries at a similar stage of development are
                                    useful guides in formulating your valuation. (This is the most important section of this document).
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;height: 150px;">
                                '.$valuation_of_the_business.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;">
                                    Do you believe that someone investing today at your proposed valuation will make a minimum return of 5x on their investment in the next 5 years?
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$minimum_return.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;">
                                    Approximately what Net Profit would you need to be making to justify this 5x return after 5 years?
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$approximately_what_net_profit.'</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;">
                                    What debt is currently in the business?
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;height: 50px;">
                                '.$currently_in_the_business.'</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;">
                                    Please provide debt details.
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;height: 150px;">
                                '.$please_provide_debt_details.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Other financial information: End -->
            <!-- Cash Start -->
            <tr>
                <td style="padding-top:30px;">
                    <table style="border-collapse: collapse; width:100%;border:1px solid #5898fa;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Cash</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;">
                                    What was the cash in the bank at the end of last month?
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$cash_in_the_bank.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;">
                                    What was the average monthly cash burn rate (income less expenses) over the last 3 months?
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$average_monthly_cash.'</td>
                            </tr>
    
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Cash End -->
            <!-- Professional services: Start -->
            <tr>
                <td style="padding-bottom:10px;padding-top: 40px;">
                    <table style="border-collapse: collapse; width:100%;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Professional services</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;width:30%">Please state which firms you use:</td>
                                <td style="border:1px solid #5898fa;padding: 5px 10px;font-size: 16px;width:70%">'.$state_which_firms.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Professional services: End -->
        </tbody>
    </table>
    <!-- Financial Information End -->
    <!-- Funding Start -->
    <table style="border-collapse: collapse;width: 100%; font-family: Arial, Helvetica, sans-serif;">
        <tbody>
            <tr>
                <th style="text-align:start; font-family: Arial, Helvetica, sans-serif;color:#5898fa;padding-bottom: 18px;padding-top: 50px; text-decoration-line: underline; text-decoration-style: double;">
                    Funding
                </th>
            </tr>
            <!-- Funding information: Start -->
            <tr>
                <td style="padding-bottom:10px;">
                    <table style="border-collapse: collapse; width:100%;border:1px solid #5898fa;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Funding information:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;">
                                    How much are you seeking to raise in this round?
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$seeking_raise_round.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;">
                                    How much would you like to raise on the Spark Crowdfunding platform at this time?
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$seeking_raise_round_time.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;">
                                    Is this the full amount that you are raising at this time, or are you also bringing in funds from alternative sources?
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$funds.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;">
                                    If you have alternative sources, please provide a breakdown on the other sources being used at this time.
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$f_i_round.'</td>
                            </tr>
    
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Funding information: End -->
            <!-- Funding commitments: Start -->
            <tr>
                <td style="padding-bottom:10px;padding-top: 20px;">
                    <table style="border-collapse: collapse; width:100%;border:1px solid #5898fa;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Funding commitments:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;">
                                    What is the total amount of investment commitments that you have pre-secured for this investment round?
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$funding_commitments.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Funding commitments: End -->
            <!-- Previous funding commitments: Start -->
            <tr>
                <td style="padding-bottom:10px;padding-top: 20px;">
                    <table style="border-collapse: collapse; width:100%;border:1px solid #5898fa;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Previous funding commitments:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;">
                                    What investment have the promoters invested into the business?
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$previous_funding_commitments.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;height:50px;vertical-align: initial;">
                                    Details:
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$p_f_c_details.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;">
                                    What commitments have been made at this valuation?
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$p_f_c_valuation.'</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;height:50px;vertical-align: initial;">
                                    Details:
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$p_f_c_more_details.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Previous funding commitments: End -->
            <!-- Share capital Start -->
            <tr>
                <td style="padding-bottom:10px;padding-top: 20px;">
                    <table style="border-collapse: collapse; width:100%;border:1px solid #5898fa;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">Share capital</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;">
                                    What is the issued share capital of the co?<br><br><b>Note: This Share Capital figure should reconcile with the number of shares that have been issued in the company to date, according to your filings at Companies House, your Cap Table and your most recent Balance Sheet.  (Please contact us before submitting this Application if you are unsure of where to find this figure.  This is an important figure and is essential in order for us to be able to assess this application.)</b>
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$share_capital.'</td>
                            </tr>
    
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- Share capital End -->
            <!-- EIIS – Employment and Investment Initiative Scheme: Start -->
            <tr>
                <td style="padding-bottom:10px;padding-top: 20px;">
                    <table style="border-collapse: collapse; width:100%;border:1px solid #5898fa;">
                        <thead>
                            <tr>
                                <th colspan="2" style="color:#ffffff;background-color:#5898fa;width:100%;text-align: start;padding: 5px 10px;border:1px solid #5898fa;">EIIS – Employment and Investment Initiative Scheme:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:70%;">
                                    Do you have approval or are you self-assessed for EIIS?
                                </td>
                                <td style="border:1px solid #5898fa;text-align:start;font-weight:500;padding: 5px 10px;width:30%;">
                                '.$investment.'</td>
                            </tr>
    
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- EIIS – Employment and Investment Initiative Scheme: End -->
            <!-- Data Protection Start -->
            <!-- Key Milestones Start -->
            <table style="border-collapse: collapse;width: 100%; font-family: Arial, Helvetica, sans-serif;">
                <tbody>
                    <tr>
                        <th style="text-align:start; font-family: Arial, Helvetica, sans-serif;color:#5898fa;padding-bottom: 15px;padding-top: 50px; text-decoration-line: underline; text-decoration-style: double;">
                            Data Protection
                        </th>
                    </tr>
            <tr>
                <th style="text-align:start;font-weight:500;padding-bottom:30px;">Any personal information which you provide to Spark CrowdFunding will be obtained and processed in compliance with the Data Protection Acts 2018. The information in this Application Form will only be used by Spark CrowdFunding in the processing of your
                application and for ongoing administrative purposes between you and Spark CrowdFunding</th>
            </tr>
            </table>
            <!-- Data Protection End -->
            <tr>
                <th style="text-align:start;font-weight:500;width:30%;padding-top: 30px;line-height: 1.4;">
                    SUBMITTING YOUR PITCH AND DETAILS OF INVESTEE COMPANY TO SPARK CROWDFUNDING CONFIRMS YOUR ACCEPTANCE OF OUR INVESTEE TERMS <a href=" https://www.sparkcrowdfunding.com/investee_terms" style="color:#5898fa">(https://www.sparkcrowdfunding.com/investee_terms)</a>.
                    <br> If you do not understand any of the terms set out in this Agreement or have any queries, please obtain independent advice before proceeding.
    
                </th>
            </tr>
            
        </tbody>
    </table>
    <!-- Funding End -->
    <!-- Funding Start -->
    <table style="border-collapse: collapse;width: 100%; font-family: Arial, Helvetica, sans-serif; ">
        <tbody>
            <tr>
                <th style="text-align:start; font-family: Arial, Helvetica, sans-serif;color:#5898fa;padding-bottom: 18px;padding-top: 50px; text-decoration-line: underline; text-decoration-style: double; ">
                    Declaration
                </th>
            </tr>
            <tr>
                <td style="text-align:start; font-family: Arial, Helvetica, sans-serif;padding-bottom: 18px; ">
                    Declaration by applicant:
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:start; font-family: Arial, Helvetica, sans-serif;padding-bottom: 18px;padding-top: 15px; ">
                    I confirm that;
                    <ul>
                        <li>Neither I nor any of the other persons mentioned in this application have ever been convicted of an offence (other than road traffic offences) in the last 10 years.</li>
                        <li>Neither I nor any of the promoters has had a judgment made against him or her, which judgment remains unsatisfied.</li>
                        <li>All the information presented in this application is correct.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="width:50%;padding-top: 30px;">
                    <table style="width:100%;">
                        <tr>
                            <td>Signed:</td>
                        </tr>
                        <tr>
                            <td style="width:100%;height:100px;text-align: start;vertical-align: bottom;">
                                <hr style="width:70%;height:1px;background-color: #000000;margin: 0;border:none;margin-right: auto;">
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width:50%;padding-top: 30px;">
                    <table style="width:100%;">
                        <tr>
                            <td>Name:</td>
                        </tr>
                        <tr>
                            <td style="width:100%;height:100px;text-align: start;vertical-align: bottom;">
                                <hr style="width:70%;height:1px;background-color: #000000;margin: 0;border:none;margin-right: auto;">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="width:50%;padding-top: 30px;">
                    <table style="width:100%;">
                        <tr>
                            <td>Date:</td>
                        </tr>
                        <tr>
                            <td style="width:100%;height:100px;text-align: start;vertical-align: bottom;">
                                <hr style="width:70%;height:1px;background-color: #000000;margin: 0;border:none;margin-right: auto;">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <th colspan="2" style="padding:30px 0;color:#818181;">~~~~~~~~~~~~~~~~~~~~~~~~~</th>
            </tr>
            <tr>
                <th colspan="2" style="padding-top:30px;font-weight:500;text-align: start;">N.B.</th>
            </tr>
            <tr>
                <th colspan="2" style="padding-top:10px;font-weight:500;text-align: start;">Please save the file in the following format and return to <a style="color:#5898fa;text-decoration: underline;">info@sparkcrowdfunding.com :</a></th>
            </tr>
            <tr>
                <th colspan="2" style="padding-top:30px;font-weight:500;text-align: start;">AF1-{Date[YYYYMMDD]}-{Your Company Name}</th>
            </tr>
            <tr>
                <th colspan="2" style="padding-top:30px;font-weight:500;text-align: start;">e.g. AF1-20210501-Spark Crowdfunding</th>
            </tr>
    
        </tbody>
    </table>
    <!-- Funding End -->
    </div>');
    // $mpdf->Output();
    $content = $mpdf->Output('', 'S');
     $mail = new PHPMailer(true); 
     try {
     $mail->IsSMTP(); // enable SMTP
     // $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
     $mail->SMTPAuth = true; // authentication enabled
     $mail->SMTPSecure = 'tsl'; // secure transfer enabled REQUIRED for Gmail
     $mail->Host = "smtp.office365.com";
     $mail->Port = 587; // or 587
     $mail->IsHTML(true);
     $mail->Username = 'spark@sparkcrowdfunding.com';
     $mail->Password = 'Soc13983';
     $mail->SetFrom("spark@sparkcrowdfunding.com");

     $mail->Subject = "Investee Details Form";
     
     $mail->addStringAttachment($content, 'document.pdf');
     $mail->Body = <<<EOS
     <html>
         <body>
             <div class="container">
                 <div class="row">					
                     <div class="col-md-12 text-center">
                         <p class="mb-4">Form Successfully Submited</p>
                         <p class="">Have a great day!</p>
                     </div>
                 </div>
             </div>
         </body>
     </html>
    EOS;
    // $email = "yagniks.coderkube@gmail.com";
     $mail->AddAddress($promoter_email);
     if(!$mail->Send()) {
         $data['msg'] = 'error';
         set_flashdata('error','Oops! Something went wrong');
         header('Location: insert_investee_detail.php');
         exit;
     } else {
     // SEND TO ADMINISTRTORE.
     $mail->ClearAllRecipients();
     $mail->Subject = "New Contact From " . $email;
     $mail->Body    = "PFA";
    //  $mail->Body = ' <p class="mb-4"> Visitor Email : '.$email.'</p>
    //                      <p class="mb-4"> Visitor Subject : '.$subject.'</p>
    //                      <p class="mb-4"> Visitor Message : <i>'.$msg.'</i></p>';
    //  $mail->AddAddress("info@sparkcrowdfunding.com");
     $mail->AddAddress("nawaz.coderkube@gmail.com");
    //  $mail->AddAddress("yagniks.coderkube@gmail.com");
     $mail->Send();
      $data['msg'] = 'success';
      set_flashdata('success','Thank you very much for contacting us. We will get back to you shortly.');
         header('Location: investee_detail.php');
         exit;
     }
    } 
    catch (Exception $e) {
        $data['msg'] = 'error';
        set_flashdata('error','Oops! Something went wrong from our side');
        header('Location: investee_detail.php');
        exit;
    }
 }
?>