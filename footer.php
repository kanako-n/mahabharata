    <section class="section-contents">
      <div class="container">
        <div class="schedule">
          <h2 class="content-title">SCHEDULE</h2>
          <ol class="schedule__list">
<?php
  $schedule = SCF::get( 'schedule' );
  foreach ( $schedule as $fields ):
?>
            <li class="schedule__item">
              <?php echo $fields['date']; ?>
              <?php echo $fields['time']; ?>開演
              &nbsp;
              <?php echo $fields['place']; ?>
              &nbsp;
<?php
if ( $fields['reservation'] === true ):
?>
                <span><a>チケット予約受付中</a></span>
            
<?php else: ?>
                <span>チケット完売</span>
<?php endif; ?>
                </li>
<?php
  endforeach;
?>
            </ol>
            </div>
            <!-- /.schedule -->
            <div class="schedule__btn-area">
                <a class="schedule__btn btn--large btn--broun" href="#">お問い合わせはこちら</a>
                <a class="schedule__btn btn--large btn--red" href="#">チケット予約サイトへ</a>
            </div>
            <!-- /.schedule__btn-area -->
        </div>
        <!-- /.container -->
    </section>
    <footer class="footer">
        <p class=footer-copyright><samll>Copyright &copy 2019 完全版マハーバーラタ All Rights Reserved.</small></p>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>