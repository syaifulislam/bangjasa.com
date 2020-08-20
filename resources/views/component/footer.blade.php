<?php 
$year_now = \Carbon\Carbon::now()->format('Y');
?>

<footer class="footer py-2 mt-4" style="background: rgb(214,255,9);
background: linear-gradient(45deg, rgba(214,255,9,1) 0%, rgba(214,255,9,1) 3%, rgba(15,123,206,1) 100%);">
    <div class="content has-text-right is-size-5-desktop is-size-7-mobile">
        BANGJASA.COM BY HYLARANA © {{$year_now}}
    </div>
</footer>