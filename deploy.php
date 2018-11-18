<?php
/**
 * GIT DEPLOYMENT SCRIPT
 *
 * Used for automatically deploying websites via github or bitbucket, more deets here:
 *
 * https://gist.github.com/1809044
 */
// The commands
$commands = array(
    'echo $PWD',
    'whoami',
    'git pull origin master',
    'git status',
    'git submodule sync',
    'git submodule update',
    'git submodule status',
);
// Run the commands for output
$output = array();
foreach($commands AS $key=>$command){
    // Run it
    $tmp = shell_exec($command);
    $output[$key] = $tmp;
}
$output = json_encode($output);
printf("%s", $output);


?>
