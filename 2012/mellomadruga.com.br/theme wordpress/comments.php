<?php



/**



 * @package WordPress



 * @subpackage Default_Theme



 */







// Do not delete these lines



	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))



		die ('Please do not load this page directly. Thanks!');







	if (post_password_required()) {

    ?>



    <p class="nocomments"><?php _e('Este post é protegido por senha. Digite a senha para ver comentários.', 'localization'); ?></p>



    <?php

    return;

}







global $id;



$id = $post->ID;

?>







<!-- You can start editing here. -->



<div class="comment-area">



<?php if (have_comments()) : ?>



<h3 class="comment-h3" style="margin-top:30px; line-height: 27px;" id="n_comments"><?php comments_number(__('Sem Comentários', 'localization'), __('Um Comentário', 'localization'), __('% Comentários', 'localization') );?> <?php _e('para', 'localization'); ?> "<?php the_title(); ?>"</h3>









    <ul id="comments" class="commentlist unstyled">



        <?php wp_list_comments('avatar_size=80&style=ol&callback=rm_comments'); ?>



    </ul>









<?php else : // this is displayed if there are no comments so far ?>







    <?php if (comments_open()) : ?>



        <!-- If comments are open, but there are no comments. -->







    <?php else : // comments are closed ?>



        <!-- If comments are closed. -->



        <p class="nocomments"><?php _e('Os comentários estão fechados.', 'localization'); ?></p>



    <?php endif; ?>



<?php endif; ?>











<?php if (comments_open()) : ?>

           



            

      

 





    <div class="clearfix">

       

         

        <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>



        <p><?php _e('Você deve estar', 'localization'); ?> <a href="<?php echo wp_login_url(get_permalink()); ?>"><?php _e('logado', 'localization'); ?></a> <?php _e('para postar um comentário.', 'localization'); ?></p>



        <?php else : ?>



            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">



                <?php if (is_user_logged_in()) : ?>



                <p><?php _e('Logado como', 'localization'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Sair de sua conta"><?php _e('Sair', 'localization'); ?> &raquo;</a></p>



                <?php else : ?>

                

              </div>

                    

        <div id="comment-form">

            

        

            

               <h3><?php comment_form_title(__('Deixe um Comentário', 'localization'), __('Deixe uma resposta para %s', 'localization') ); ?></h3>

            

 

        

  

        <div class="cancel-comment-reply">

            

            



            <small><?php cancel_comment_reply_link(); ?></small>



        </div>



                      <div>



                          <span><?php _e('Nome', 'localization'); ?> <?php if ($req) echo "*"; ?>: </span>



                        <input class="short" type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="40" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />





                        <span><?php _e('E-mail', 'localization'); ?> <?php if ($req) echo "*"; ?>: <em><?php _e('não será publicado', 'localization'); ?></em></span>



                                    <input class="short" type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="40" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />



                                    <span for="url"><?php _e('Website:', 'localization'); ?></span>

                        

                        <input class="short" type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="40" tabindex="3" />



                    

                      </div>



                <?php endif; ?>



        <!--<p><small><strong>XHTML:</strong> Você pode usar essas tags: <code><?php echo allowed_tags(); ?></code></small></p>-->



   

            <?php if (is_user_logged_in()) : ?>



            <div id="comment-form">

                

      

            

               <h3><?php comment_form_title(__('Deixe um Comentário', 'localization'), __('Deixe uma resposta para %s', 'localization') ); ?></h3>

            



        

  

        <div class="cancel-comment-reply">

            

            



            <small><?php cancel_comment_reply_link(); ?></small>



        </div>

            

                <?php else : ?>



                      <div>

                          

                      <?php endif; ?>

                          

                          <span for="comment"><?php _e('Comentário', 'localization'); ?>*:</span>



                          <div id="respond"></div>

                    <textarea name="comment" id="comment" style="width: 565px;" cols="61" rows="10" tabindex="4"></textarea></p>



                      <input name="submit" type="submit" class="button-big salmon rounded3" style="margin: 5px 0; border: none;" id="submit" tabindex="5" value="<?php _e('Enviar', 'localization'); ?>" />



                      

                    <?php

                    comment_id_fields();

                    ?>



                </p>       



        <?php do_action('comment_form', $post->ID); ?>



            </form>

            

</div>

        

        </div>



    <?php endif; // If registration required and not logged in  ?>



    </div>



<?php endif; // if you delete this the sky will fall on your head  ?>



