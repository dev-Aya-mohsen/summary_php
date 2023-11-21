<?php
    if(isset($_POST['submit'])){
        $pic= $_FILES['fileToUpload'];
        $picname=$pic['name'];
        $pictemp=$pic['temp_name'];
        include 'connect.php';
        $insert= "INSERT INTO `upload` (`file_name`) VALUES ('$picname')";
        $query=mysqli_query($conn,$insert);
        if($query){
            mkdir("Attachments");
            move_uploaded_file($pictemp,"Attachments/".$picname);
            echo "<script>alert('File Uploaded Successfully!');window.location='index.html'</script>";
        }

      
    }





?>