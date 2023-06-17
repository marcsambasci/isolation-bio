<?php
//Template 1
class cards_multi_badge_skin extends \ElementorPro\Modules\Posts\Skins\Skin_Cards {
    protected function render_post() {
        $taxonomy = $this->get_instance_value( 'badge_taxonomy' );
        
        $terms = get_the_terms( get_the_ID(), $taxonomy );
        ?>
        
        
        <article class="elementor-post elementor-grid-item resources_post post-<?= get_the_ID();?> type-resource status-publish hentry category-publications tag-animal">
            <div class="elementor-post__card">
                <div class="elementor-post__text">
                    <?php 
                    if(is_array($terms)){
                    foreach( $terms as $term ) : ?>
                        <div class="elementor-post__badge"><?php echo $term->name; ?></div>
                    <?php endforeach;
                    }
                    ?>
                    <h3 class="elementor-post__title title-<?= get_the_ID();?>"><?= get_the_title();?></h3>
                </div>
            </div>
        </article>
<?php
    }

    public function get_id() {
        return 'custom_category_badge';
    }

    public function get_title() {
        return __( 'Custom Category Badge', 'elementor-pro' );
    }
}

//Template 2
class cards_multi_badge_skin_tags extends \ElementorPro\Modules\Posts\Skins\Skin_Cards {
    protected function render_post() {
        $taxonomy = $this->get_instance_value( 'badge_taxonomy' );
        
        $terms = get_the_terms( get_the_ID(), 'post_tag' );
        ?>
        
        
        <article class="elementor-post elementor-grid-item resources_post post-<?= get_the_ID();?> type-resource status-publish hentry category-publications tag-animal">
            <div class="elementor-post__card">
                <div class="elementor-post__text">
                    <?php 
                    if(is_array($terms)){
                    foreach( $terms as $term ) : ?>
                        <div class="elementor-post__badge"><?php echo $term->name; ?></div>
                    <?php endforeach;
                    }
                    ?>
                    <h3 class="elementor-post__title title-<?= get_the_ID();?>"><?= get_the_title();?></h3>
                </div>
            </div>
        </article>
<?php
    }

    public function get_id() {
        return 'custom_category_badge_tags';
    }

    public function get_title() {
        return __( 'Custom Category Badge Tags', 'elementor-pro' );
    }
}

//Template 3
class cards_multi_badge_skin_category extends \ElementorPro\Modules\Posts\Skins\Skin_Cards {
    protected function render_post() {
        $taxonomy = $this->get_instance_value( 'badge_taxonomy' );
        
        $terms = get_the_terms( get_the_ID(), 'category' );
        ?>
        
        
        <article class="elementor-post elementor-grid-item resources_post post-<?= get_the_ID();?> type-resource status-publish hentry category-publications tag-animal">
            <div class="elementor-post__card">
                <div class="elementor-post__text">
                    <?php 
                    if(is_array($terms)){
                    foreach( $terms as $term ) : ?>
                        <div class="elementor-post__badge"><?php echo $term->name; ?></div>
                    <?php endforeach;
                    }
                    ?>
                    <h3 class="elementor-post__title title-<?= get_the_ID();?>"><?= get_the_title();?></h3>
                </div>
            </div>
        </article>
<?php
    }

    public function get_id() {
        return 'custom_category_badge_category';
    }

    public function get_title() {
        return __( 'Custom Category Badge Category', 'elementor-pro' );
    }
}

//Template 4
class cards_multi_badge_skin_careers extends \ElementorPro\Modules\Posts\Skins\Skin_Cards {
    protected function render_post() {
        $taxonomy = $this->get_instance_value( 'badge_taxonomy' );
        
        $terms = get_the_terms( get_the_ID(), 'post_tag' );
        ?>
        
        
        <article class="elementor-post elementor-grid-item resources_post career_post post-<?= get_the_ID();?> type-resource status-publish hentry category-publications tag-animal">
            <div class="elementor-post__card">
                <div class="elementor-post__text">
                    <?php 
                    if(is_array($terms)){
                    foreach( $terms as $term ) : ?>
                        <div class="elementor-post__badge"><?php echo $term->name; ?></div>
                    <?php endforeach;
                    }
                    ?>
                    <h3 class="elementor-post__title title-<?= get_the_ID();?>"><a href="<?php the_field('career_job_url'); ?>" target="_blank"><?= get_the_title();?></a></h3>
                    <div class="elementor-post__badge"><?php the_field('career_job_location'); ?></div>
                    <div class="post__excerpt">
                        <p><?php the_excerpt() ?></p>
                    </div>
                </div>
            </div>
        </article>
<?php
    }

    public function get_id() {
        return 'custom_category_badge_careers';
    }

    public function get_title() {
        return __( 'Custom Category Badge Careers', 'elementor-pro' );
    }
}