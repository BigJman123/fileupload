<?php
    
    $people = '{"data":[
                    {"first_name":"jake","last_name":"bennett","age":31,"email":"jake@bennett.com","secret":"VXNlIHRoaXMgc2VjcmV0IHBocmFzZSBzb21ld2hlcmUgaW4geW91ciBjb2RlJ3MgY29tbWVudHM="},
                    {"first_name":"jordon","last_name":"brill","age":85,"email": "jordon@brill.com","secret":"YWxidXF1ZXJxdWUuIHNub3JrZWwu"}]}';
    
    $array = json_decode($people, true);
    
    $email = 'Email addresses:' . "\n" . "\n" . $array['data'][0]['email'] . ', ' . "\n" . $array['data'][1]['email'] . "\n";
    
    echo nl2br($email);
    
    $data = "\n" . 'Data: ' . "\n" . "\n" . 'Name:' . ' ' . $array['data'][1]['first_name'] . ' ' . $array['data'][1]['last_name'] . ', ' . "\n" .
    
                                     'Age:' . ' ' . $array['data'][1]['age'] . ', ' . "\n" . 'Secret:' . ' ' . $array['data'][1]['secret'] . "\n" . "\n" .
                              
                                     'Name:' . ' ' . $array['data'][0]['first_name'] . ' ' . $array['data'][0]['last_name'] . ', ' . "\n" .
                              
                                     'Age:' . ' ' . $array['data'][0]['age'] . ', ' . "\n" . 'Secret:' . ' ' . $array['data'][0]['secret'];
    
    echo nl2br($data);
    
?>