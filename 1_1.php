{source}

<?php
$user =& JFactory::getUser();
$usr_id = $user->get('id');


//echo $usr_id;
$user = JFactory::getUser($usr_id);
echo "<p style='font-size:20px'>This user's name is {$user->username}, email is {$user->email}, and username is {$user->username}</p>";
?>
{/source}