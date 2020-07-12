<?php

    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');
 
    if ( post_password_required() ) { ?>
        <p class="nocomments">Este artigo está protegido por senha. Insira-a para ver os comentários.</p>
    <?php
        return;
    }
?>
 
<div id="comments">
    <h3><?php comments_number('0 Comentários', '1 Comentário', '% Comentários' );?></h3>
    <br>
    <br>
 
    <?php if ( have_comments() ) : ?>
 
        <ol class="commentlist" style="list-style:none">
            <?php wp_list_comments('avatar_size=64&type=comment'); ?>
        </ol>
 
        <?php if ($wp_query->max_num_pages > 1) : ?>
        <div class="pagination">
        <ul style="list-style:none" >
            <li class="older"><?php previous_comments_link('Anteriores'); ?></li>
            <li class="newer"><?php next_comments_link('Novos'); ?></li>
        </ul>
    </div>
    <?php endif; ?>
 
    <?php endif; ?>
 
    <?php if ( comments_open() ) : ?>
 
    <div id="respond">
            <h3>Deixe o seu comentário!</h3>

            <span class="fa fa-minus blue"></span>
            <br>
            <br>
 
            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
            <fieldset class="comment-box">
                <?php if ( $user_ID ) : ?>
 
                <p>Logado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(); ?>" title="Sair desta conta">Sair desta conta &raquo;</a></p>
                <br>
                <?php else : ?>
 
                <input placeholder="Nome" required type="text" name="author" id="author" value="<?php echo $comment_author; ?>" />

                <input placeholder="Email" required type="email" name="email" id="email" value="<?php echo $comment_author_email; ?>" />
 
                <input placeholder="Site" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" />
 
                <?php endif; ?>

                <textarea placeholder="Comentário" required name="comment" id="comment" rows="" cols=""></textarea>
                
                <div class="row">
                    <button type="submit">Enviar</button>
                    <?php cancel_comment_reply_link('<button id="cancel-comment">Cancelar resposta</button>'); ?>
                </div>

 
                <?php comment_id_fields(); ?>
                <?php do_action('comment_form', $post->ID); ?>
            </fieldset>
        </form>
        </div>
     <?php else : ?>
        <h3>Os comentários estão fechados.</h3>
<?php endif; ?>
</div>