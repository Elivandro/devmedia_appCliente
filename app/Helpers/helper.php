<?php

    function formatDateTime($dateTime)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $dateTime)->format('d/m/Y - H:i');
    }

    function formatPhoneNumber($phoneNumber)
    {
        $celPhone  = 11;
        $phone      = preg_replace("/\D/", "", $phoneNumber);

        if(strlen($phone) === $celPhone){
            return preg_replace("/(\d{2})(\d{1})(\d{4})(\d{2})/", "(\$1) \$2 \$3-\$4", $phone);
        }

        return preg_replace("/(\d{2})(\d{2})(\d{2})/", "(\$1) \$2\$3-", $phone);
    }