<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- fontawesome cdn For Icons -->
    <link rel="stylesheet" href="assests/style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>ChatSphere Forum Community</title>

</head>

<body>
    <?php include "partials/_dbconnect.php"; ?>
     <?php include "partials/_header.php"; ?> 
    <?php
        $id = $_GET['catid'];
        $sql = "select * from categories where category_id=$id";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $catname = $row['category_name'];
            $desc = $row['description'];
             }
    ?>
    <?php
        $method = $_SERVER['REQUEST_METHOD'];
        $showalert = false;
        if ($method == 'POST') {
            //INSERT THREAD INTO DB
            $thread_title = $_POST['title'];
            $thread_desc = $_POST['desc'];
            $sno = $_POST['sno'];
            $sql = "INSERT INTO threadlist (thread_title,thread_desc,thread_cat_id,thread_user_id, created)VALUES('$thread_title','$thread_desc','$id','$sno',current_timestamp())";
            $result = mysqli_query($conn, $sql);
            $showalert = true;
            if ($showalert) {
                echo "<script>alert('Your thread has been posted');</script>";
            }
        }
    ?>
    <div class="contain">
        <h1 class="my-4" style="font-size: 50px; padding-top: 45px;">Welcome to <?php echo $catname ?> forum!</h1>
        <p class="welcome-msg"><?php echo $desc ?></p>
     </div>
    <div class="container2">
        <div class="thread">
            <h1 class="browse-qn">Browse Questions</h1>
            <?php
                $id = $_GET['catid'];
                $sql = "select * from threadlist where thread_cat_id=$id";
                $result = mysqli_query($conn, $sql);
                $noResult = true;
                while ($row = mysqli_fetch_assoc($result)) {
                    $noResult = false;
                    $title = $row['thread_title'];
                    $desc = $row['thread_desc'];
                    $thread_time = $row['created'];
                    $id = $row['thread_id'];
                    $thread_user_id = $row['thread_user_id'];
                    $sql2 = "select user_email from users where sno='$thread_user_id'";
                    $result2 = mysqli_query($conn, $sql2);
                    $row2 = mysqli_fetch_assoc($result2);
                    $user_email=$row2['user_email'];
                    echo '<div class="my-4">
                            <img src="assests/images/user.png" width="40px" class="mr-3" alt="...">
                            <div class="question">
                                <p class="font-weight-bold my-1">' . $user_email . ' at ' .$thread_time.'  </p>
                                <h2 style="color:black;"> <a style="color:#3e536a;" href="comments.php?threadid=' . $id . '">' . $title . '</a></h2>
                                <div class="answer"><p>' . $desc . '</p>  
                                <a href="comments.php?threadid=' . $id . '"><button class="read-more-button">Read More</button></a>
                                </div>
                            </div>
                          </div>';
                }
                if ($noResult) {
                    echo "Please be the first to initiate the conversation by posing a question";
                }
            ?>
        </div>
        
        <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
      echo '<div class="question">
                <h1>Ask a question</h1>
                <div class="flex-box">
                    <div class="row2">
                        <div class="col">'; ?>
                            <button type="button" onclick="f1()" class="shadow-sm btn btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Bold Text">Bold</button>

                            <button type="button" onclick="f2()" class="shadow-sm btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="Italic Text">Italic</button>

                            <button type="button" onclick="f3()" class=" shadow-sm btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Left Align">

                                <i class="fas fa-align-left"></i></button>

                            <button type="button" onclick="f4()" class="btn shadow-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Center Align">

                                <i class="fas fa-align-center"></i></button>

                            <button type="button" onclick="f5()" class="btn shadow-sm btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Right Align">

                                <i class="fas fa-align-right"></i></button>

                            <button type="button" onclick="f6()" class="btn shadow-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Uppercase Text">Upper Case</button>

                            <button type="button" onclick="f7()" class="btn shadow-sm btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Lowercase Text">Lower Case</button>

                            <button type="button" onclick="f8()" class="btn shadow-sm btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Capitalize Text">Capitalize</button>

                            <button type="button" onclick="f9()" class="btn shadow-sm btn-outline-primary side" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Clear Text</button>

                        <?php echo    '</div>

                        </div>

                    </div>

                    <br>
            </div>
        <form action="'. $_SERVER["REQUEST_URI"].'" method="post">
                
                <h6 class="qn">Thread Title</h6>
                <input type="text" class="form-control quest" name="title" id="textarea1" placeholder=" Enter Title of your Question" autofocus required>
                <br>
                <h6 class="qn">Elaborate your query:</h6> <br>
                <textarea class="form-control" name="desc" id="textarea2" style="height: 100px"  placeholder=" Describe your Query" autofocus required></textarea>
                <input type="hidden" name="sno" value="'.$_SESSION["sno"].'">
                <div class="xyz">
                    <button type="submit" id="postquestion">Post your query</button>
                </div>
                
        </form>
    </div>';
    }

  else{
   echo '<div class="container">
    <p class="lead">Please Log in to start a discussion</p>
    </div>';
  }
  ?>
    </div>
    <script>
        let isBold = false;
function f1() { 
    const textarea = document.getElementById("textarea1");
    const textarea2 = document.getElementById("textarea2");
    if (isBold) {
        textarea.style.fontWeight = "normal";
        textarea2.style.fontWeight = "normal";
    } else {
        textarea.style.fontWeight = "bold";
        textarea2.style.fontWeight = "normal";
    }
    isBold = !isBold;
} 
function f2() { 
    document.getElementById("textarea1").style.fontStyle = "italic"; 
    document.getElementById("textarea2").style.fontStyle = "italic"; 
} 
function f3() { 
    document.getElementById("textarea1").style.textAlign = "left";
    document.getElementById("textarea2").style.textAlign = "left"; 
} 
function f4() { 
    document.getElementById("textarea1").style.textAlign = "center";
    document.getElementById("textarea2").style.textAlign = "center"; 
} 
function f5() { 
    document.getElementById("textarea1").style.textAlign = "right";
    document.getElementById("textarea2").style.textAlign = "right"; 
} 
function f6() { 
    document.getElementById("textarea1").style.textTransform = "uppercase";
    document.getElementById("textarea2").style.textTransform = "uppercase"; 
} 
function f7() { 
    document.getElementById("textarea1").style.textTransform = "lowercase"; 
    document.getElementById("textarea2").style.textTransform = "lowercase";
} 
function f8() { 
    document.getElementById("textarea1").style.textTransform = "capitalize"; 
    document.getElementById("textarea2").style.textTransform = "capitalize"; 
} 
function f9() { 
    document.getElementById("textarea1").style.fontWeight = "normal"; 
    document.getElementById("textarea2").style.fontWeight = "normal";

    document.getElementById("textarea1").style.textAlign = "left"; 
    document.getElementById("textarea2").style.textAlign = "left";

    document.getElementById("textarea1").style.fontStyle = "normal"; 
    document.getElementById("textarea2").style.fontStyle = "normal";

    document.getElementById("textarea1").style.textTransform = "capitalize"; 
    document.getElementById("textarea2").style.textTransform = "capitalize";

    document.getElementById("textarea1").value = " "; 
    document.getElementById("textarea2").value = " "; 
}

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/assests/app.js"></script>
</body>

</html>