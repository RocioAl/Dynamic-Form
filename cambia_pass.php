<?php
$server="localhost";
$username="";
$password="";
$db_name="";



$conn=mysqli_connect($server,$username,$password,$db_name);
if ($conn) {
    # code...
    echo "";
}else{
    echo "";
}
$select="SELECT* FROM usuarios where Cod_usuario=1";
$query=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=1";
              
               
                $query1=mysqli_query($conn,$update);
                if ($query1) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}
//
$select="SELECT* FROM usuarios where Cod_usuario=2";
$query2=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query2);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=2";
              
               
                $query2=mysqli_query($conn,$update);
                if ($query2) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=3";
$query3=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query3);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=3";
              
               
                $query3=mysqli_query($conn,$update);
                if ($query3) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=4";
$query4=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query4);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=4";
              
               
                $query4=mysqli_query($conn,$update);
                if ($query4) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=5";
$query5=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query5);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=5";
              
               
                $query5=mysqli_query($conn,$update);
                if ($query5) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=6";
$query6=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query6);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=6";
              
               
                $query6=mysqli_query($conn,$update);
                if ($query6) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=7";
$query7=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query7);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=7";
              
               
                $query7=mysqli_query($conn,$update);
                if ($qery7) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=8";
$query8=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query8);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=8";
              
               
                $query8=mysqli_query($conn,$update);
                if ($query8) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=9";
$query9=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query9);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=9";
              
               
                $query9=mysqli_query($conn,$update);
                if ($query9) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=10";
$query10=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query10);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=10";
              
               
                $query10=mysqli_query($conn,$update);
                if ($query10) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=11";
$query11=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query11);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=11";
              
               
                $query11=mysqli_query($conn,$update);
                if ($query11) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=12";
$query12=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query12);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=12";
              
               
                $query12=mysqli_query($conn,$update);
                if ($query12) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=13";
$query13=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query13);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=13";
              
               
                $query13=mysqli_query($conn,$update);
                if ($query13) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=14";
$query14=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query14);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=14";
              
               
                $query14=mysqli_query($conn,$update);
                if ($query14) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=15";
$query15=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query15);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=15";
              
               
                $query15=mysqli_query($conn,$update);
                if ($query15) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=16";
$query16=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query16);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=16";
              
               
                $query16=mysqli_query($conn,$update);
                if ($query16) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=17";
$query17=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query17);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=17";
              
               
                $query17=mysqli_query($conn,$update);
                if ($query17) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=18";
$query18=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query18);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=18";
              
               
                $query18=mysqli_query($conn,$update);
                if ($query18) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=19";
$query19=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query19);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=19";
              
               
                $query19=mysqli_query($conn,$update);
                if ($query19) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=20";
$query20=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query20);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=20";
              
               
                $query20=mysqli_query($conn,$update);
                if ($query20) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=21";
$query21=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query21);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=21";
              
               
                $query21=mysqli_query($conn,$update);
                if ($query21) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=22";
$query22=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query22);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=22";
              
               
                $query22=mysqli_query($conn,$update);
                if ($query22) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=23";
$query23=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query23);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=23";
              
               
                $query23=mysqli_query($conn,$update);
                if ($query23) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=24";
$query24=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query24);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=24";
              
               
                $query24=mysqli_query($conn,$update);
                if ($query24) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=25";
$query25=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query25);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=25";
              
               
                $query25=mysqli_query($conn,$update);
                if ($query25) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=26";
$query26=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query26);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=26";
              
               
                $query26=mysqli_query($conn,$update);
                if ($query26) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=27";
$query27=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query27);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=27";
              
               
                $query27=mysqli_query($conn,$update);
                if ($query27) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=28";
$query28=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query28);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=28";
              
               
                $query28=mysqli_query($conn,$update);
                if ($query28) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=29";
$query29=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query29);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=29";
              
               
                $query29=mysqli_query($conn,$update);
                if ($query29) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=30";
$query30=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query30);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=30";
              
               
                $query30=mysqli_query($conn,$update);
                if ($query30) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=31";
$query31=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query31);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=31";
              
               
                $query31=mysqli_query($conn,$update);
                if ($query31) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=32";
$query32=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query32);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=32";
              
               
                $query32=mysqli_query($conn,$update);
                if ($query32) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=33";
$query33=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query33);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=33";
              
               
                $query33=mysqli_query($conn,$update);
                if ($query33) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=34";
$query34=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query34);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=34";
              
               
                $query34=mysqli_query($conn,$update);
                if ($query34) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=35";
$query35=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query35);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=35";
              
               
                $query35=mysqli_query($conn,$update);
                if ($query35) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=36";
$query36=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query36);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=36";
              
               
                $query36=mysqli_query($conn,$update);
                if ($query36) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=37";
$query37=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query37);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=37";
              
               
                $query37=mysqli_query($conn,$update);
                if ($query37) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=38";
$query38=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query38);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=38";
              
               
                $query38=mysqli_query($conn,$update);
                if ($query38) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=39";
$query39=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query39);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=39";
              
               
                $query39=mysqli_query($conn,$update);
                if ($query39) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=40";
$query40=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query40);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=40";
              
               
                $query40=mysqli_query($conn,$update);
                if ($query40) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=41";
$query41=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query41);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=41";
              
               
                $query41=mysqli_query($conn,$update);
                if ($query41) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=42";
$query42=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query42);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=42";
              
               
                $query42=mysqli_query($conn,$update);
                if ($query42) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=43";
$query43=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query43);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=43";
              
               
                $query43=mysqli_query($conn,$update);
                if ($query43) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=44";
$query44=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query44);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=44";
              
               
                $query44=mysqli_query($conn,$update);
                if ($query44) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=45";
$query45=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query45);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=45";
              
               
                $query45=mysqli_query($conn,$update);
                if ($query45) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=46";
$query46=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query46);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=46";
              
               
                $query46=mysqli_query($conn,$update);
                if ($query46) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=47";
$query47=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query47);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=47";
              
               
                $query47=mysqli_query($conn,$update);
                if ($query47) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=48";
$query48=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query48);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=48";
              
               
                $query48=mysqli_query($conn,$update);
                if ($query48) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=49";
$query49=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query49);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=49";
              
               
                $query49=mysqli_query($conn,$update);
                if ($query49) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=50";
$query50=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query50);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=50";
              
               
                $query50=mysqli_query($conn,$update);
                if ($query50) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=51";
$query51=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query51);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=51";
              
               
                $query51=mysqli_query($conn,$update);
                if ($query51) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=52";
$query52=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query52);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=52";
              
               
                $query52=mysqli_query($conn,$update);
                if ($query52) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=53";
$query53=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query53);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=53";
              
               
                $query53=mysqli_query($conn,$update);
                if ($query53) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=54";
$query54=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query54);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=54";
              
               
                $query54=mysqli_query($conn,$update);
                if ($query54) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=55";
$query55=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query55);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=55";
              
               
                $query55=mysqli_query($conn,$update);
                if ($query55) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=56";
$query56=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query56);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=56";
              
               
                $query56=mysqli_query($conn,$update);
                if ($query56) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=57";
$query57=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query57);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=57";
              
               
                $query57=mysqli_query($conn,$update);
                if ($query57) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=58";
$query58=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query58);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=58";
              
               
                $query58=mysqli_query($conn,$update);
                if ($query58) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=59";
$query59=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query59);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=59";
              
               
                $query59=mysqli_query($conn,$update);
                if ($query59) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=60";
$query60=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query60);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=60";
              
               
                $query60=mysqli_query($conn,$update);
                if ($query60) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=61";
$query61=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query61);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=61";
              
               
                $query61=mysqli_query($conn,$update);
                if ($query61) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=62";
$query62=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query62);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=62";
              
               
                $query62=mysqli_query($conn,$update);
                if ($query62) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=63";
$query63=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query63);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=63";
              
               
                $query63=mysqli_query($conn,$update);
                if ($query63) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=64";
$query64=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query64);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=64";
              
               
                $query64=mysqli_query($conn,$update);
                if ($query64) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=65";
$query65=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query65);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=65";
              
               
                $query65=mysqli_query($conn,$update);
                if ($query65) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=66";
$query66=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query66);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=66";
              
               
                $query66=mysqli_query($conn,$update);
                if ($query66) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=67";
$query67=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query67);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=67";
              
               
                $query67=mysqli_query($conn,$update);
                if ($query67) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=68";
$query68=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query68);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=68";
              
               
                $query68=mysqli_query($conn,$update);
                if ($query68) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=69";
$query69=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query69);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=69";
              
               
                $query69=mysqli_query($conn,$update);
                if ($query69) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=70";
$query70=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query70);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=70";
              
               
                $query70=mysqli_query($conn,$update);
                if ($query70) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=71";
$query71=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query71);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=71";
              
               
                $query71=mysqli_query($conn,$update);
                if ($query71) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=72";
$query72=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query72);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=72";
              
               
                $query72=mysqli_query($conn,$update);
                if ($query72) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=73";
$query73=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query73);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=73";
              
               
                $query73=mysqli_query($conn,$update);
                if ($query73) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=74";
$query74=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query74);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=74";
              
               
                $query74=mysqli_query($conn,$update);
                if ($query74) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=75";
$query75=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query75);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=75";
              
               
                $query75=mysqli_query($conn,$update);
                if ($query75) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=76";
$query76=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query76);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=76";
              
               
                $query76=mysqli_query($conn,$update);
                if ($query76) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=77";
$query77=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query77);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=77";
              
               
                $query77=mysqli_query($conn,$update);
                if ($query77) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=78";
$query78=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query78);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=78";
              
               
                $query78=mysqli_query($conn,$update);
                if ($query78) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=79";
$query79=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query79);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=79";
              
               
                $query79=mysqli_query($conn,$update);
                if ($query79) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=80";
$query80=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query80);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=80";
              
               
                $query80=mysqli_query($conn,$update);
                if ($query80) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=81";
$query81=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query81);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=81";
              
               
                $query81=mysqli_query($conn,$update);
                if ($query81) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=82";
$query82=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query82);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=82";
              
               
                $query82=mysqli_query($conn,$update);
                if ($query82) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=83";
$query83=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query83);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=83";
              
               
                $query83=mysqli_query($conn,$update);
                if ($query83) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=84";
$query84=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query84);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=84";
              
               
                $query84=mysqli_query($conn,$update);
                if ($query84) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=85";
$query85=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query85);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=85";
              
               
                $query85=mysqli_query($conn,$update);
                if ($query85) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=86";
$query86=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query86);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=86";
              
               
                $query86=mysqli_query($conn,$update);
                if ($query86) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=87";
$query87=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query87);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=87";
              
               
                $query87=mysqli_query($conn,$update);
                if ($query87) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=88";
$query88=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query88);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=88";
              
               
                $query88=mysqli_query($conn,$update);
                if ($query88) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=89";
$query89=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query89);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=89";
              
               
                $query89=mysqli_query($conn,$update);
                if ($query89) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=90";
$query90=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query90);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=90";
              
               
                $query90=mysqli_query($conn,$update);
                if ($query90) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=91";
$query91=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query91);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=91";
              
               
                $query91=mysqli_query($conn,$update);
                if ($query91) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=92";
$query92=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query92);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=92";
              
               
                $query92=mysqli_query($conn,$update);
                if ($query92) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=93";
$query93=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query93);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=93";
              
               
                $query93=mysqli_query($conn,$update);
                if ($query93) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=94";
$query94=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query94);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=94";
              
               
                $query94=mysqli_query($conn,$update);
                if ($query94) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=95";
$query95=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query95);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=95";
              
               
                $query95=mysqli_query($conn,$update);
                if ($query95) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=96";
$query96=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query96);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=96";
              
               
                $query96=mysqli_query($conn,$update);
                if ($query96) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=97";
$query97=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query97);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=97";
              
               
                $query97=mysqli_query($conn,$update);
                if ($query97) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=98";
$query98=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query98);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=98";
              
               
                $query98=mysqli_query($conn,$update);
                if ($query98) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=99";
$query99=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query99);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=99";
              
               
                $query99=mysqli_query($conn,$update);
                if ($query99) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=100";
$query100=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query100);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=100";
              
               
                $query100=mysqli_query($conn,$update);
                if ($query100) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=101";
$query101=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query101);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=101";
              
               
                $query101=mysqli_query($conn,$update);
                if ($query101) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=102";
$query102=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query102);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=102";
              
               
                $query102=mysqli_query($conn,$update);
                if ($query102) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=103";
$query103=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query103);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=103";
              
               
                $query103=mysqli_query($conn,$update);
                if ($query103) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=104";
$query104=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query104);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=104";
              
               
                $query104=mysqli_query($conn,$update);
                if ($query104) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=105";
$query105=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query105);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=105";
              
               
                $query105=mysqli_query($conn,$update);
                if ($query105) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=106";
$query106=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query106);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=106";
              
               
                $query106=mysqli_query($conn,$update);
                if ($query106) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=107";
$query107=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query107);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=107";
              
               
                $query107=mysqli_query($conn,$update);
                if ($query107) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=108";
$query108=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query108);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=108";
              
               
                $query108=mysqli_query($conn,$update);
                if ($query108) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=109";
$query109=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query109);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=109";
              
               
                $query109=mysqli_query($conn,$update);
                if ($query109) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=110";
$query110=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query110);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=110";
              
               
                $query110=mysqli_query($conn,$update);
                if ($query110) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=111";
$query111=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query111);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=111";
              
               
                $query111=mysqli_query($conn,$update);
                if ($query111) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=112";
$query112=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query112);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=112";
              
               
                $query112=mysqli_query($conn,$update);
                if ($query112) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=113";
$query113=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query113);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=113";
              
               
                $query113=mysqli_query($conn,$update);
                if ($query113) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
$select="SELECT* FROM usuarios where Cod_usuario=114";
$query114=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query114);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=114";
              
               
                $query114=mysqli_query($conn,$update);
                if ($query114) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=115";
$query115=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query115);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=115";
              
               
                $query115=mysqli_query($conn,$update);
                if ($query115) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=116";
$query116=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query116);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=116";
              
               
                $query116=mysqli_query($conn,$update);
                if ($query116) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=117";
$query117=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query117);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=117";
              
               
                $query117=mysqli_query($conn,$update);
                if ($query117) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=118";
$query118=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query118);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=118";
              
               
                $query118=mysqli_query($conn,$update);
                if ($query118) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=119";
$query119=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query119);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=119";
              
               
                $query119=mysqli_query($conn,$update);
                if ($query119) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=120";
$query120=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query120);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=120";
              
               
                $query120=mysqli_query($conn,$update);
                if ($query120) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=121";
$query121=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query121);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=121";
              
               
                $query121=mysqli_query($conn,$update);
                if ($query121) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=122";
$query122=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query122);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=122";
              
               
                $query122=mysqli_query($conn,$update);
                if ($query122) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=123";
$query123=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query123);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=123";
              
               
                $query123=mysqli_query($conn,$update);
                if ($query123) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//

//
$select="SELECT* FROM usuarios where Cod_usuario=124";
$query124=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query124);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=124";
              
               
                $query124=mysqli_query($conn,$update);
                if ($query124) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//

//
$select="SELECT* FROM usuarios where Cod_usuario=125";
$query125=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query125);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=125";
              
               
                $query125=mysqli_query($conn,$update);
                if ($query125) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
//
$select="SELECT* FROM usuarios where Cod_usuario=126";
$query126=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query126);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=126";
              
               
                $query126=mysqli_query($conn,$update);
                if ($query126) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=127";
$query127=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query127);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=127";
              
               
                $query127=mysqli_query($conn,$update);
                if ($query127) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=128";
$query128=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query128);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=128";
              
               
                $query128=mysqli_query($conn,$update);
                if ($query128) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=129";
$query129=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query129);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=129";
              
               
                $query129=mysqli_query($conn,$update);
                if ($query129) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=130";
$query130=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query130);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=130";
              
               
                $query130=mysqli_query($conn,$update);
                if ($query130) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=131";
$query131=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query131);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=131";
              
               
                $query131=mysqli_query($conn,$update);
                if ($query131) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=132";
$query132=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query132);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=132";
              
               
                $query132=mysqli_query($conn,$update);
                if ($query132) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=133";
$query133=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query133);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=133";
              
               
                $query133=mysqli_query($conn,$update);
                if ($query133) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=134";
$query134=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query134);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=134";
              
               
                $query134=mysqli_query($conn,$update);
                if ($query134) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=135";
$query135=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query135);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=135";
              
               
                $query135=mysqli_query($conn,$update);
                if ($query135) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=136";
$query136=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query136);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=136";
              
               
                $query136=mysqli_query($conn,$update);
                if ($query136) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//
//
$select="SELECT* FROM usuarios where Cod_usuario=137";
$query137=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query137);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=137";
              
               
                $query137=mysqli_query($conn,$update);
                if ($query137) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//

//
$select="SELECT* FROM usuarios where Cod_usuario=138";
$query138=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query138);
$oldpwd=$data['Password'];
if(isset($_POST['save'])){
    $current=$_POST['agua'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    
    if($current==$oldpwd){
        
            if ($new==$confirm) {
                $update="update usuarios set Password ='$new' where Cod_usuario=138";
              
               
                $query138=mysqli_query($conn,$update);
                if ($query138) {
                echo "";
                
                }else{
                    echo "Your both password do not match";
                }
                }
                
        

    }
    
    else{
        echo "";
    }
}

//



?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>s</title>
  <link rel="shortcut icon" href="./img/icono.ico">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
  <!-- <script src="https://use.fontawesome.com/7873633050.js"></script> -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css"> 

  <!-- rocio -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<script>

// $(document).ready(function(){
//     $("#telefono").keyup(function(){
//       var le = $(this).val().length;
//       switch(le){
//         case 1:
//           $(this).val($(this).val() + "-");
//           break;
//         case 6:
//           $(this).val($(this).val() + "-");
//           break;
//       }
//     });
// })

// function valida(e){
//     tecla = (document.all) ? e.keyCode : e.which;

//     //Tecla de retroceso para borrar, siempre la permite
//     if (tecla==8){
//         return true;
//     }
        
//     // Patron de entrada, en este caso solo acepta numeros
//     patron =/[0-9]/;
    
//     tecla_final = String.fromCharCode(tecla);
//     return patron.test(tecla_final);
// }
// function validaNumericos(event) {
//     if(event.charCode >= 48 && event.charCode <= 57){
//       return true;
//      }
//      return false;        
// }


	</script>
	<style>
	.botonlg{
	    text-align:center;
	    margin-right:20px;
	    font-size: 80%;
	}
	.btn-secondary {background-color:#ff7800;line-height: 20px;}
.white {color:#ffffff;}

.error{
	background-color:#3B3B98;
	color:#ffffff
	
}
.principal{
margin-top:20px;	
	}
	#container{
		padding-top:2rem;
	}
	.hello {

	font-size: 20px;
}

.hello span {
	
	font-size: 20px;
	margin-top:2px;
}
.distancia{
	/* margin-bottom:20000px; */
 
}

	</style>
</head>
<body>
  <section>
    <div class="navbar-fixed" id="first">
        <nav>
            <div class="container">
              <div class="nav-wrapper">
                  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                
                <ul id="nav-mobile" class="right hide-on-med-and-down">
					
                    <li><a href="index.php">Inicia Sesión</a></li>
                  
                   
                
                
                  </ul>
              </div>
          </div>
        </nav>
      </div>
    <ul id="slide-out" class="side-nav">
		
        <li><a href="index.php" >Inicia Sesión</a></li>
   
  
       
    </ul>
  </section>
 
   
  <section id="about-me" class="box-info section scrollspy">
    <div class="container">
      <div class="row ">
  
        <div class="col s12 m6 smoo">
          <h3 id="about"><span>Cambiar</span> Contraseña</h3>
		  <div class="principal">

<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<div class="card">
		
				<div class="card-body">
					<div class="error" class="alert alert-danger" role="alert">
				Datos no válidos
			
					
					</div>

                    <!-- rocio -->


                    <!-- aqui -->
                    
					<form method="post" action="">
    <label>Contraseña </label>
    <input type="number" name="agua" placeholder="Contraseña anterior" placeholder="contraseña anterior" required class="form-control" pattern=".{8,}" title="Ingrese Nueve(8) caracteres" autoFocus maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">

    <label>Nueva Contraseña</label>
    <input type="number" name="new" placeholder="ingrese 8 números" required class="form-control" pattern=".{yy,}" title="Ingrese Nueve(8) caracteres" autoFocus maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
    <label>Confirmar Contraseña</label>
    <input type="number" name="confirm" placeholder="Vuelva ingresar 8 números" required class="form-control" pattern=".{8,}" title="Ingrese Nueve(8) caracteres" autoFocus maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">

    <input class="btn btn-secondary btn-lg btn-block"  type="submit" value="Cambiar Contraseña" name="save" class="botonlg" class="col text-center text-md-left" >
 
    </form>
			
			</div>
		</div>
	</div>

	</div>
        </div> 
      </div>
    </div>
  </section>
    <section id="contact"class="background-four section scrollspy">
    <div class="container smoo" id="container">
      <div class="row">
        <div class="col m12 col s12 center-align title-contact">
          <h1></h1>
        </div>
      </div>
      <div class="row">
        <div class="col m12 col s12 center-align contactme">
         
          <h4>Soporte</h4>
          <!--<h5>  Av. del Ejercito 250, oficina 501</h5>-->
          <!--<h5>Miraflores</h5>-->
          <!--<h5>Lima - Perú</h5>-->
          <!--<h5> Teléfono:950700995 </h5>-->
          <h5> WhatsApp: </h5>
          <a class="appWhatsapp" href="https://api.whatsapp.com/send?phone=+51950700995&text=Hola%20quiero%20info">
        <!--<img src="./img/icon-whatsapp.png"/>-->
    
        </a>
          <a href="mailto:"><i class="fa fa-envelope" aria-hidden="true"></i></a>
          
        </div>
      </div>
  
    </div>
  </section>
  <footer>
    <div class="container center-align">
      
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  <script type="text/javascript" src="js/lib/typed.js"></script>
  <script type="text/javascript" src="js/lib/particles.js"></script>
  <script type="text/javascript" src="js/lib/particulas.js"></script>
  <script type="text/javascript" src="js/lib/smoove.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>


