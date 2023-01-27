<?php
// Piss
header('Content-type:application/json;charset=utf-8');
error_reporting(E_ERROR);

// Configuration
$TOKENS = ["DsGs3myz", "XnLs5tCt"]; // Passwords for 'secret'
$DIRECTORY = "images/"; // File directory
$IMAGE_LENGTH = 7; //Length of file name

// Proper random string function
function random_string($LENGTH)
{
    $CHARACTERS = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $RANDOM_STRING = '';
  
    for ($i = 0; $i < $LENGTH; $i++)
    {
        $INDEX = rand(0, strlen($CHARACTERS) - 1);
        $RANDOM_STRING .= $CHARACTERS[$INDEX];
    }
  
    return $RANDOM_STRING;
}

// Validate
if (isset($_POST['secret']))
{
    // Exists?
    if (in_array($_POST['secret'], $TOKENS))
    {
        // Prepares for upload
        $FILENAME = random_string($IMAGE_LENGTH);
        $TARGET = $_FILES["sharex"]["name"];
        $FILETYPE = pathinfo($TARGET, PATHINFO_EXTENSION);
        
        // Accepts and moves to directory
        if (move_uploaded_file($_FILES["sharex"]["tmp_name"], $DIRECTORY . $FILENAME . '.' . $FILETYPE))
        {
            // Sends info
            $JSON = ['status' => 'OK', 'errormsg' => '', 'url' => $FILENAME . '.' . $FILETYPE];
        }
        else
        {
           // Error
           $JSON = ['status' => 'ERROR','errormsg' => '','url' => 'File upload failed. Does the folder exist and did you CHMOD the folder?'];
        }  
    }
    else
    {
        // Invalid
        $JSON = ['status' => 'ERROR','errormsg' => '','url' => 'Invalid secret key.'];
    }
}
else
{
    //Warning if no uploaded data
    $JSON = ['status' => 'ERROR', 'errormsg' => '', 'url' => 'No POST data recieved.'];
}

// Give it out
echo(json_encode($JSON));

?>
