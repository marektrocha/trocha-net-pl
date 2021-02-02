<?php get_header(); ?>

<div class="distance"></div>

<div class="container">

    <!-- About-->
    <section class="about-section text-left" id="about">
        <div class="container">
            <img class="img-fluid" src="wp-content/themes/marek-trocha/images/marek_trocha_01.png">
            <h1><?php the_field('my-title'); ?></h1>
            <?php the_field('my-content'); ?>
        </div>
    </section>

    </br></br>

    <!-- Projects-->
    <section class="projects-section" id="projects">

    <h1>Przykładowe projekty</h1>

        <?php $projekty = get_field('id_pages');   
        
        foreach( (array) $projekty as $projekt): ?> 
        
            <div class="d-flex flex-wrap">
                    <div class="showCar">
                        <img src="<?php echo get_field('project-screen', $projekt)['url']; ?>"> 
                        <div class="contentProject p-3">
                            <h2><?php the_field('project-name', $projekt); ?></h2>
                            <?php the_field('project-content', $projekt); ?></br></br>

                                <?php $relationships = get_field('relationship', $projekt);
                                foreach($relationships as $relationship): ?>
                                    <div class="skillsTag">
                                        <?php echo $relationship->post_title; ?>
                                    </div>
                                <?php endforeach; ?></br>

                            <a class="float-right button button--dark js-scroll-trigger" href="<?php the_field('project-url', $projekt); ?>" target="_blank">Zobacz więcej</a>
                        <div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
        
    </section>

    <!-- Signup-->
    <section class="signup-section" id="signup">
       
        <h1>Napisz lub zadzwoń</h1>

        <div class="container">
            <div class="contactMail">
                <img style="float:right;"src="wp-content/themes/marek-trocha/images/icon-contact.png">
            </div>
            <h1>&#9990; 693 877 101</br>
            <a class="links" href="mailto:marek@trocha.net.pl">marek@trocha.net.pl</a></h1>
            <?php echo do_shortcode('[contact-form-7 id="117" title="Contact"]'); ?>
        </div>
        
    </section>
    
</div>

<!-- Contact-->
<section class="contact-section bg-black">
        <div class="container">
      
            <div class="d-flex justify-content-center p-5">
                <a href="https://www.facebook.com/marek.trocha.3/" target="_blank"><img 
                    src="wp-content/themes/marek-trocha/images/icon_facebook.png" 
                    onmouseover='this.src="wp-content/themes/marek-trocha/images/icon_facebook2.png"'
                    onmouseout='this.src="wp-content/themes/marek-trocha/images/icon_facebook.png"'>
                </a> | 
                    
                
                <a href="https://www.linkedin.com/in/marektrocha/" target="_blank"><img 
                    src="wp-content/themes/marek-trocha/images/icon_linkedin.png" 
                    onmouseover='this.src="wp-content/themes/marek-trocha/images/icon_linkedin2.png"'
                    onmouseout='this.src="wp-content/themes/marek-trocha/images/icon_linkedin.png"'>
                </a> | 

                
                <a href="https://github.com/marektrocha" target="_blank"><img 
                    src="wp-content/themes/marek-trocha/images/icon_github.png" 
                    onmouseover='this.src="wp-content/themes/marek-trocha/images/icon_github2.png"'
                    onmouseout='this.src="wp-content/themes/marek-trocha/images/icon_github.png"'>
                </a>
            </div>
            
        </div>
    </section>

<?php get_footer(); ?>