<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sendsms_helper extends CI_Controller
{
    /*Start sendsms_helper.php file */

    // ---------Sending sms----------
    function sendsms($mobileno, $message)
    {

        // $message = urlencode($message);
        // $sender = 'SkyWebSoftIndia'; 
        // $apikey = 'bW5teTk1NjQ6SUtTV3BoT2s=';
        // $baseurl = 'https://rest-api.d7networks.com/secure/send?apikey='.$apikey;

        // $url = $baseurl.'&sender='.$sender.'&to='.$mobileno.'&message='.$message;    
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_POST, false);
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // curl_close($ch);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://rest-api.d7networks.com/secure/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\n\t\"to\":\"6392452633\",\n\t\"content\":\"Welcome to D7 sms , we will help you to talk with your customer effectively\",\n\t\"from\":\"SMSINFO\",\n\t\"dlr\":\"yes\",\n\t\"dlr-method\":\"GET\", \n\t\"dlr-level\":\"2\", \n\t\"dlr-url\":\"http://yourcustompostbackurl.com\"\n}",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencoded",
                "Authorization: Basic bW5teTk1NjQ6SUtTV3BoT2s="
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

        // Use file get contents when CURL is not installed on server.
        // if (!$response) {
        //     $response = file_get_contents($url);
        //     $this->session->set_flashdata('success', $response);
        // } else {
        //     $err = curl_error($url);
        //     $this->session->set_flashdata('error', $err);
        // }
    }
}
    

/*     * End sendsms_helper.php file     */
