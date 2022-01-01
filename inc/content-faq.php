<div class="faq-container">
    <div class="container">
        <div class="row g-0">
            <header class="d-flex flex-column position-relative align-items-start align-items-sm-center justify-content-center ps-3 pe-3">
                <div class="faq-header">
                        <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'faq_section_heading' ) ) ):
                            $faq_section_heading = carbon_get_post_meta( get_the_ID(), 'faq_section_heading' );?>
                            <h2><?php echo $faq_section_heading; ?></h2>
                        <?php endif; ?>
                    <div class="faq-heading text-start text-sm-end">
                        <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'faq_section_subheading' ) ) ):
                            $faq_section_subheading = carbon_get_post_meta( get_the_ID(), 'faq_section_subheading' );?>
                            <p class="text-uppercase"><?php echo $faq_section_subheading; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <div class="row faq-items g-0">
        <div class="col-12 col-md-6">
                <div class="faq-col-left">
                    <div class="accordion" id="accordionExampleX">
                        <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'faq_items' ) ) ):
                            $faq_items = carbon_get_post_meta(get_the_ID(), 'faq_items');
                            $count = 1;
                            foreach ($faq_items as $faq_item) { ?>
                              <div class="accordion-item">
                                <h3 class="accordion-header ps-md-3 pe-md-3" id="heading<?php echo $count ?>">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count ?>" aria-expanded="false" aria-controls="collapse<?php echo $count ?>">
                                      <?php echo $faq_item['career_faq_question']; ?>
                                  </button>
                                </h3>
                                <div id="collapse<?php echo $count ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $count ?>" data-bs-parent="#accordionExampleX">
                                  <div class="accordion-body">
                                    <?php echo $faq_item['career_faq_answer']?>
                                  </div>
                                </div>
                              </div>
                            <?php $count++; }
                        endif; ?>
                    </div>
                </div>
            </div>
        <div class="col-12 col-md-6">
                <div class="faq-col-right">
                    <div class="accordion" id="accordionExampleY">
                        <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'faq_items_right' ) ) ):
                            $faq_items_right = carbon_get_post_meta(get_the_ID(), 'faq_items_right');
                            foreach ($faq_items_right as $faq_item_right) { ?>

                                <div class="accordion-item">
                                  <h3 class="accordion-header ps-md-3 pe-md-3" id="heading<?php echo $count ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count ?>" aria-expanded="false" aria-controls="collapse<?php echo $count ?>">
                                        <?php echo $faq_item_right['career_faq_question_right']; ?>
                                    </button>
                                  </h3>
                                  <div id="collapse<?php echo $count ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $count ?>" data-bs-parent="#accordionExampleX">
                                    <div class="accordion-body">
                                      <?php echo $faq_item_right['career_faq_answer_right']?>
                                    </div>
                                  </div>
                                </div>

                            <?php $count++; }
                        endif; ?>

                    </div>
                </div>
            </div>
    </div>

</div>
