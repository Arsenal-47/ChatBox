<html>
    <head>
        <title>Group chat</title>
        
        <link href="./main.css" rel="stylesheet" type="text/css"> 
        <link href="./vendors/grid.css" rel="stylesheet" type="text/css">
        <link href="./vendors/normalize.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav>
            <div class="naman">
                <img src="./Resources/paper-plane.png" class="logo">
                <h1>CHAT BOX</h1>
                <ul class="right">
                    <li><a href="/setting.html"><img src="./Resources/setting.png"></a></li>
                    <li><a href="/Index.html"><img src="./Resources/logout%202.0.png"></a></li>                   
                </ul>
            </div>            
        </nav>
        <div>
            <div class="col span-1-of-7 online">
                online
                            </div>
            <div class="col span-6-of-7 text-area">
            <div class="recived">
                <div class="recivemsgArea">
                    <p>Dasvidanya </p>
                </div> 
                <div>
                    <p class="date"><span>12PM</span></p>
                </div>
                
            </div>
            <div class="sent">
                <div class="totalMsgbody">
                    <div class="sentmsgArea">
                        <p>Bonjour!!</p>
                    </div> 
                    <div class="datediv">
                        <p class="date"><span>12PM</span></p>
                    </div>
                </div>
                
            </div>        
        </div>
        <footer>
            <div class="col span-1-of-7"></div>
            <div class="col span-6-of-7 send">
                <input type="text" id="msg" placeholder="Type a message">
                <ul class="attach">
                    <li  onclick="sendmsg()"><a href="#"><img src="./Resources/send.png"></a></li>
                    <li><a href="#" ><img src="./Resources/attachments.png"></a></li>
                </ul>
            </div>
        </footer>
        <script src="./js/main.js"> </script>
    </body>
</html>