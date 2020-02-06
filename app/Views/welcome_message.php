<?php

/*
function discordmsg($msg, $webhook) {
    if($webhook != "") {
        $ch = curl_init($webhook);
        $msg = "payload_json=" . urlencode(json_encode($msg))."";

        if(isset($ch)) {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $msg);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
        }
    }
}

$msg = json_decode('
{
    "username":"BOTNAME",
    "content":"The message the BOTNAME posts.",
    "embeds": [{
        "title":"The Link Title",
        "description":"The Link Description",
        "color":"14177041",
        "fields":[
            {
                "name":"LISTITEM1",
                "value":"LISTVALUE1",
                "inline":true
            },
            {
                "name":"LISTITEM2",
                "value":"LISTVALUE2",
                "inline":true
            },
            {
                "name":"LISTITEM3",
                "value":"LISTVALUE3",
                "inline":true
            }]
    }]
}
', true);

discordmsg($msg, $webhookurl);
*/
?>
