<ul class="tab tab-clock">
    <li class ="tab-item">
        <a href="?" class="<?php if($page == 'home')
        {echo 'active';}
        else{echo "";} ?>
        ">Home</a>
    </li>
    <li class ="tab-item">
        <a href="?page=book" class="<?php if($page == 'book')
        {echo 'active';}
        else{echo "";} ?>">Books</a>
    </li>
    <li class ="tab-item">
        <a href="?page=cd" class="<?php if($page == 'cd')
        {echo 'active';}
        else{echo "";} ?>">CD</a>
    </li>
</ul>