<?php 
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {
           if(file_exists('../controller/reply.json'))  
            {  
                    $current_data = file_get_contents('../controller/reply.json');  
                    $array_data = json_decode($current_data, true);  
                    $extra = array(  
                        'reply'               =>     $_POST['feedback']
                    );  
                    $array_data[] = $extra;  
                    $final_data = json_encode($array_data);  
                    if(file_put_contents('../controller/reply.json', $final_data))  
                    {  
                        $message = "<label class='text-success'>File Appended Success fully</p>";  
                    }  
            }  
           else  
            {  
                    $error = 'JSON File not exits';  
            }
 }
            

?>