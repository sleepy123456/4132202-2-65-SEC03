$con = ssh2_connect('10.133.0.191', 2222);
ssh2_auth_password($con, 'root', 'root');
$stream = ssh2_exec($con, 'telnet 10.133.0.191');
$stream = ssh2_exec($con, 'touch test2.txt');