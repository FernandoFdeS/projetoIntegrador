<?php
    if(isset($_SESSION['flash-msg'])&&isset($_SESSION['flash-bg'])){
        echo'
        <div class="flash-msg container bg-'.$_SESSION['flash-bg'].' text-center rounded " style="position:absolute;margin-left: auto;
        margin-right: auto;left: 0;right: 0;z-index:1000;top:135px">
            <p class="text-white p-1 m-0">'.$_SESSION['flash-msg'].'</p>
        <div>';
        unset($_SESSION['flash-msg']);
        unset($_SESSION['flash-bg']);
    }
    echo'
    </body>
</html>';
?>