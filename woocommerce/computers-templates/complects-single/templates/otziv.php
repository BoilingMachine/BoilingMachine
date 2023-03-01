<section class='section-mg'>
    <div class="otziv-container">     
        <div class="bm-adaptive bm-margin bm">
            <div class='max-1080'>
                <div class="chairs-content-cooment">
                    <div class="add-new-comment">
                        <a class="uk-button uk-button-default link-add-comment" href="#modal-center" uk-toggle>Оставить отзыв</a>
                    </div>
                <?php
                    $args = array ('post_id' => $product->get_id() , 'status' => 'approve');
                    $comments = get_comments( $args );
                    wp_list_comments( array( 'callback' => 'woocommerce_comments' ), $comments);
                ?>
                </div>
            </div>    
        </div>      
    </div>
</section>

<div id="modal-center" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div id="reviews" class="woocommerce-Reviews">
            <?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->get_id() ) ) : ?>
                <div id="review_form_wrapper">
                    <div id="review_form">
                        <?php
                        $commenter    = wp_get_current_commenter();
                        $comment_form = array(
                            /* translators: %s is product title */
                            'title_reply'         => have_comments() ? esc_html__( 'Add a review', 'woocommerce' ) : sprintf( esc_html__( 'Be the first to review &ldquo;%s&rdquo;', 'woocommerce' ), get_the_title() ),
                            /* translators: %s is product title */
                            'title_reply_to'      => esc_html__( 'Leave a Reply to %s', 'woocommerce' ),
                            'title_reply_before'  => '<span id="reply-title" class="comment-reply-title">',
                            'title_reply_after'   => '</span>',
                            'comment_notes_after' => '',
                            'label_submit'        => esc_html__( 'Submit', 'woocommerce' ),
                            'logged_in_as'        => '',
                            'comment_field'       => '',
                        );

                        $name_email_required = (bool) get_option( 'require_name_email', 1 );
                        $fields              = array(
                            'author' => array(
                                'label'    => __( 'Name', 'woocommerce' ),
                                'type'     => 'text',
                                'value'    => $commenter['comment_author'],
                                'required' => $name_email_required,
                            ),
                            'email'  => array(
                                'label'    => __( 'Email', 'woocommerce' ),
                                'type'     => 'email',
                                'value'    => $commenter['comment_author_email'],
                                'required' => $name_email_required,
                            ),
                        );

                        $comment_form['fields'] = array();

                        foreach ( $fields as $key => $field ) {
                            $field_html  = '<p class="comment-form-' . esc_attr( $key ) . '">';
                            $field_html .= '<label for="' . esc_attr( $key ) . '">' . esc_html( $field['label'] );

                            if ( $field['required'] ) {
                                $field_html .= '&nbsp;<span class="required">*</span>';
                            }

                            $field_html .= '</label><input id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" type="' . esc_attr( $field['type'] ) . '" value="' . esc_attr( $field['value'] ) . '" size="30" ' . ( $field['required'] ? 'required' : '' ) . ' /></p>';

                            $comment_form['fields'][ $key ] = $field_html;
                        }

                        $account_page_url = wc_get_page_permalink( 'myaccount' );
                        if ( $account_page_url ) {
                            /* translators: %s opening and closing link tags respectively */
                            $comment_form['must_log_in'] = '<p class="must-log-in">' . sprintf( esc_html__( 'You must be %1$slogged in%2$s to post a review.', 'woocommerce' ), '<a href="' . esc_url( $account_page_url ) . '">', '</a>' ) . '</p>';
                        }

                        if ( wc_review_ratings_enabled() ) {
                            $comment_form['comment_field'] = '<div class="comment-form-rating"><label for="rating">' . esc_html__( 'Your rating', 'woocommerce' ) . ( wc_review_ratings_required() ? '&nbsp;<span class="required">*</span>' : '' ) . '</label><select name="rating" id="rating" required>
                                <option value="">' . esc_html__( 'Rate&hellip;', 'woocommerce' ) . '</option>
                                <option value="5">' . esc_html__( 'Perfect', 'woocommerce' ) . '</option>
                                <option value="4">' . esc_html__( 'Good', 'woocommerce' ) . '</option>
                                <option value="3">' . esc_html__( 'Average', 'woocommerce' ) . '</option>
                                <option value="2">' . esc_html__( 'Not that bad', 'woocommerce' ) . '</option>
                                <option value="1">' . esc_html__( 'Very poor', 'woocommerce' ) . '</option>
                            </select></div>';
                        }

                        $comment_form['comment_field'] .= '<p class="comment-form-comment"><label for="comment">' . esc_html__( 'Your review', 'woocommerce' ) . '&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" required></textarea></p>';

                        comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
                        ?>
                    </div>
                </div>
            <?php else : ?>
                <p class="woocommerce-verification-required"><?php esc_html_e( 'Only logged in customers who have purchased this product may leave a review.', 'woocommerce' ); ?></p>
            <?php endif; ?>

            <div class="clear"></div>
        </div>
    </div>
</div>

<style>
    #reply-title{display: none;}
    .comment-container{
        display: flex;
        grid-gap: 20px;
        align-items: center;
    }
    .comment-info .meta{margin-bottom: 10px;}
    .comment-container{margin-bottom: 25px;}
</style>