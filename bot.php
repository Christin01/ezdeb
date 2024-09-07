<?php
include('navbar.php');
include('login.php');
include('signup.php');

?>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
/**{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}html,body{
     */

    /*display: grid;
    height: 100%;  place-items: center;} */
   


::selection{
    color: #fff;
    background: #007bff;
}

::-webkit-scrollbar{
    width: 3px;
    border-radius: 25px;
}
::-webkit-scrollbar-track{
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb{
    background: #ddd;
}
::-webkit-scrollbar-thumb:hover{
    background: #ccc;
}

.bwrapper{
    width: 370px;
   background: #fff;
    border-radius: 8px;
    border: 2px solid black;
    border-top: 0px;

/*    box-shadow:0 8px 32px 0 rgba(119, 94, 108, 0.37);
    backdrop-filter:blur(7px);
    -webkit-backdrop-filter:blur(15px);*/
}
.bwrapper .btitle{
    background: #007bff;
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    line-height: 60px;
    text-align: center;
    border-bottom: 1px solid #006fe6;
    border-radius: 5px 5px 0 0;
}
.bwrapper .form{
    padding: 20px 15px;
    min-height: 400px;
    max-height: 400px;
    overflow-y: auto;
}
.bwrapper .form .inbox{
    width: 100%;
    display: flex;
    align-items: baseline;
}
.bwrapper .form .user-inbox{
    justify-content: flex-end;
    margin: 13px 0;
}
.bwrapper .form .inbox .icon{
    height: 40px;
    width: 40px;
    color: #fff;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    font-size: 18px;
    background: #007bff;
}
.bwrapper .form .inbox .msg-header{
    max-width: 53%;
    margin-left: 10px;
}
.form .inbox .msg-header p{
    color: #fff;
    background: #007bff;
    border-radius: 10px;
    padding: 8px 10px;
    font-size: 14px;
    word-break: break-all;
}
.form .user-inbox .msg-header p{
    color: #333;
    background: #efefef;
}
.bwrapper .typing-field{
    display: flex;
    height: 60px;
    width: 100%;
    align-items: center;
    justify-content: space-evenly;
    background: #efefef;
    border-top: 1px solid #d9d9d9;
    border-radius: 0 0 5px 5px;
}
.bwrapper .typing-field .input-data{
    height: 40px;
    width: 335px;
    position: relative;
}
.bwrapper .typing-field .input-data input{
    height: 100%;
    width: 100%;
    outline: none;
    border: 1px solid transparent;
    padding: 0 80px 0 15px;
    border-radius: 3px;
    font-size: 15px;
    background: #fff;
    transition: all 0.3s ease;
}
.typing-field .input-data input:focus{
    border-color: rgba(0,123,255,0.8);
}
.input-data input::placeholder{
    color: #999999;
    transition: all 0.3s ease;
}
.input-data input:focus::placeholder{
    color: #bfbfbf;
}
.bwrapper .typing-field .input-data button{
    position: absolute;
    right: 5px;
    top: 50%;
    height: 30px;
    width: 65px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    outline: none;
    opacity: 0;
    pointer-events: none;
    border-radius: 3px;
    background: #007bff;
    border: 1px solid #007bff;
    transform: translateY(-50%);
    transition: all 0.3s ease;
}
.bwrapper .typing-field .input-data input:valid ~ button{
    opacity: 1;
    pointer-events: auto;
}
.typing-field .input-data button:hover{
    background: #006fef;
}
</style>
<body background="https://wallpapers.com/images/featured/murjp1nk4lp1idlt.jpg">
   <div class="container">
   
    <br><br>
<div class="bwrapper mx-auto">
        <div class="btitle">EZ-DEB</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hi Iam IZZU,<br> how can I help you?</p>
                </div>
               
            </div>
        </div>
        <div class="typing-field ">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div >
    </div>
    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'bmessage.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
    
   <br>
   <br>
<?php
include('footer.php');
?>
