<?php 
  $heading   = $fields['heading'];
  $faq_group = $fields['faqs_group'];
?>

<section class="module module-faq <?= !empty( $attributes['className'] ) ? $attributes['className'] : '' ?>">
  <div class="wrapper">
    <h2 class="module-title"><?= esc_html( $heading ) ?></h2>
    <div class="faq-group">
      <?php foreach( $faq_group as $faq ): ?>
        <div class="faq-group__item">
          <h3><?= esc_html( $faq['title'] ) ?></h3>

          <div class="faq-list">
            <?php foreach( $faq['faqs'] as $fq ): ?>
              <div class="faq-list__item">
                <h4 class="faq-question">
                  <span><?= esc_html( $fq['question'] ) ?></span>
                  <span class="faq-toggle">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADkElEQVR4nO2aS29NURTHf4L2ClG9LW2MdCgVfAm0HvGYlZqRmqimTD3GZSSR+BykmhJEgniWilCqI3QgmLltU3Jlxf8kK9zHed17D/FPTvrYa6+91tlrr9c+8B//LvLAPuA8MApMAV+BBT32+2uNGc1eoJWMIAccBq4DP4BixOc7MA70A82NUGAFcBKYdULNA7eA09qZjXrjy/W06n82dga4rTnB/I/AsF5OXbALmHECPAaOAC0xeK0BjgJPHL93QC81hL2py27Bp8D2FPn3AM8c/0u12J1OCW4LfAOOA0vTXoRfPE8ABbfbHWkx79J2F+V1NlF7bAbeaM1pyZAIax3DR0A79UMrcFdrz8gqYiHnzOk+sJL6YyXwwJlZrDNz2ZmTBbtGoc1ZhTmAyC42ONj1OBNhzkxBMpl3Cx3sgjhh3ikrGHKHP5SJnXJxohYuNi6WAc8lmylVEc1KFYx4G9nDTsk2W21X+p2HyCKWOE96sBLhDRFZ7pRVDEjGsXIEeaXV8zETwHoGygVgsZyc+6XpTbKPO5J1T6nBCxq0eiLrOCdZR0oNjmrQStAwmABeJMmBHIzHJPAwJH1gPVdLDb7VoFVxYTDpUpgkynSKh/GyeiQMukVvfYE/8EWDYfOqdcBLzbFcaD3R0eF4mFBhebRrzqdSgwsabIogSBJl4ioRBO6gT5CKInGVSaJEVUWimlZcZZIqERR8ZU0r6mGvdGjLOYAwNIkPe1T3G3Vn0tiJAAfE5woVAqI1z5Kg1FtPaydCBcR9GrQOYFL8LniaSlRNUVpd0mgdwDSVSVOJvEsaV5cjGtei1sYkxdRjMiUlDMck4zUq4JCIrBeb1cJqQjL2VQs0H0S4g+xht2R7H+YaYljEExlsPkxKtsEwE3Ku12sN5axg2MWn0JdCvZpUUHOs0dgKzEmmyFcZl9wbsLZlo7BWTTmT5WIcBjm1hYpqJDeiib1KVWNRP5uTvI0pd61gf9cLeeCeu45LfOHT5bbWzGwL9TkT01rTsvINaTHucGZWUO/V3GHaWCbvNOfMyTLqVJFzDqCohnJvihHbrjKCOBEc7Jrevfe4bQ+69gMxv2LIK3cK0o6iTCnN2+KquzPk0pmiMlJLr8+q79Qtt92kp02XRgdEc8f1CYK0Y7BRX0A0qys+phIg6icci6pM+xqlQCm0qNAZUQfQ6o/P7qMa+/2VytMR0ZatJ/6Dvxw/AWAJTkQsYaz2AAAAAElFTkSuQmCC">
                  </span>
                </h4>
                <div class="faq-answer"><?= $fq['answer'] ?></div>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>