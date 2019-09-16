<?php
    $site_key = '6Lfv4GkUAAAAAAJBWrwsAHV1hIGFvfVGdaXkKVyD'; // Diisi dengan site_key API Google reCapthca yang sobat miliki
    $secret_key = '6Lfv4GkUAAAAAOLUOsr0yRuadbJcub6Vdba5-PfA'; // Diisi dengan secret_key API Google reCapthca yang sobat miliki

    if (isset($_POST['submit']))
    {
        if(isset($_POST['g-recaptcha-response'])){
            $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
            $response = @file_get_contents($api_url);
            $data = json_decode($response, true);

            if($data['success'])
            {
                $comment = $_POST['komentar'];
                // proses penyimpananan dan lain-lain disini
                $success = true;
            }
            else
            {
                $success = false;
            }
        }
        
        else
        {
            $success = false;
        }
    }
?>