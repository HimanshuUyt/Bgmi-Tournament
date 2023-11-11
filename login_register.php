<?php

    require('connection.php');

    if(isset($_POST['submit']))
    {
        $user_exit_query="SELECT * FROM 'bgmimaster' WHERE 'bgmiusername'='$_post[bgmiusername]' OR 'bgmiuid'='$_post[bgmiuid]'";
        $result=mysqli_query($conn,$user_exit_query);
        
        if($result)
        {
            if(mysqli_num_rows($result)>0) #it will be executed if bgmiusername or bgmiuid is already taken
            {
                #if any user has already taken bgmiusername or bgmiuid 
                $result_fetch=mysqli_fetch_assoc($result);
                if($result_fetch['bgmiusername']==$_POST['bgmiusername'])
                {
                    #error for bgmiuser already taken
                    echo"
                        <script>
                            alert('$result_fetch[bgmiusername] - Username Already Taken');
                            window.location.herf='index.php';
                        </script>
                    ";
                }
                else
                {
                    #error for bgmiuser already taken
                    echo"
                        <script>
                            alert('$result_fetch[bgmiuid] - UID Already Taken');
                            window.location.herf='index.php';
                        </script>
                    ";
                }
            }
            else # it will be executed if no one has taken bgmiusername or bgmiuid before
            {
                $query="INSERT INTO 'bgmimaster'('bgmiuid','bgmiusername','phoneno','description') VALUES ('$_POST[bgmiuid]','$_POST[bgmiusername]','$_POST[phoneno]','$_POST[description]')";
                if(mysqli_query($conn,$query))
                {
                    #if data inserted successfully
                    echo"
                        <script>
                            alert('Resgistration Form Successfull');
                            window.location.herf='bgmithanks.php';
                        </script>
                    ";
                }
                else
                {
                    #if data cannot be insert
                    echo"
                        <script>
                            alert('Cannot Run Query');
                            window.location.herf='index.php';
                        </script>
                    ";
                }
            }
        }
        else
        {
            echo"
                <script>
                    alert('Cannot Run Query');
                    window.location.herf='index.php';
                </script>
            ";   
        }
    }



?>