<?php
include 'header.php';
?>


<section>
    <div class="w-100 pt-110 pb-90 black-layer opc4 position-relative bg-color2">
    </div>
</section>
<section>
    <div class="w-100 pt-110 pb-80 gray-layer opc9 position-relative">
        <div class="fixed-bg patern-bg" style="background-image: url(assets/images/patter-bg1.jpg);"></div>
        <div class="container">
            <div class="sec-title btm-icn mb-60 w-100 text-center">
                <div class="sec-title-inner d-inline-block">
                    <h2 class="mb-0">Honorary Committee
                    </h2>
                    <i class=""></i>
                </div>
            </div><!-- Sec Title -->
            <div class="packages-wrap w-100">
                <div class="row mrg60 res-caro">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <table class="tg">
                            <tbody>
                            <?php
                            include 'honorary-committee-sub.php';
                            ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div><!-- Packages Wrap -->
        </div>
    </div>
</section>


<?php
include 'footer.php';
?>
