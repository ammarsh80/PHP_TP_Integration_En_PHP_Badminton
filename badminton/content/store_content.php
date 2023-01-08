<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">planing</span>
                        <span class="section-heading-lower">Jeu Libre</span>
                    </h2>
                    <?php

                    setlocale(LC_TIME, 'fr');
                    $today = strftime('%A');

                    if (!isset($day) || !isset($hours)) {
                        include 'content/error.php';
                        die;
                    } else {
                        foreach ($array as $day => $hours) : ?>
                            <ul class="list-unstyled list-hours  text-left mx-auto" style="text-transform: capitalize;">
                                <li class="list-unstyled-item list-hours-item d-flex" <?php
                                                                                        if ($day == $today) {
                                                                                            echo 'style="color: orange; font-weight: bold;"';
                                                                                        } else {
                                                                                            echo 'style="color: black; font-weight: normal;"';
                                                                                        } ?>>
                                    <?php echo $day; ?>
                                    <span class="ms-auto"><?php echo $hours; ?></span>
                                </li>
                            </ul>
                    <?php endforeach;
                    } ?>
                    <br>
                    <p class="address mb-5">
                        <em>
                            <strong>Gymnase Jean Mermoz</strong>
                            <br />
                            717 Av. Jean Mermoz, 34000 Montpellier
                        </em>
                    </p>

                    <!-- <article class="article6_contact"> -->
                    <iframe class="myIframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.793051366231!2d3.88855525096192!3d43.61085037902028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6af75e22f7f97%3A0xa311207f5c128449!2s717%20Av.%20Jean%20Mermoz%2C%2034000%20Montpellier!5e0!3m2!1sfr!2sfr!4v1667977898358!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <p class="mb-0">
                        <small><em>Contact</em></small>
                        <br />
                        (+33) 6.45.78.32.45
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'content/about_content.php';
?>