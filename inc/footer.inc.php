<footer class="footer mt-auto bg-primary">
  <div class="container">
    <span class="text-white">Cours PHP 7 - &copy  Baroude NTSIBA <?php echo date('Y'); ?> | <?php
                            setlocale(LC_ALL, 'fr_FR');

                            echo strftime("%A %e %B %Y");
                            echo(' - ');
                            date_default_timezone_set("Europe/Berlin");
                            echo date('H:i:s');
                            ?></span>
  </div>
</footer>
<!-- ============================================================== -->
<!-- https://www.php.net/manual/fr/timezones.europe.php -->
<!-- ============================================================== -->