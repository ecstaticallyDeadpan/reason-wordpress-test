<div class="bg-brand-teal text-white p-8">
    <div class="container">
        <h2 class="text-3xl font-bold mb-5">Events</h2>
        <p class="mb-5">Here is a list of our events</p> 
        <div class="grid grid-cols-3 gap-x-7">
            <?php 
            $query = new WP_Query([
                'post_type' => 'events',
                'posts_per_page' => -1
            ]);
            if($query->have_posts()) :
                while($query->have_posts()) : $query->the_post(); ?>
                    <div class="bg-white p-8 text-center text-black">
                        <h3 class="text-xl leading-5 font-bold mb-4"><?php the_title(); ?></h3>
                        <p class="text-sm mb-4">Date: <?php the_field('date_time'); ?></p>
                        <p class="text-sm mb-4">Location: <?php the_field('location'); ?></p>
                        <a
                            href="<?php the_permalink(); ?>"
                            class="border-2 border-black text-brand-red inline-block text-sm px-6 py-2 font-bold rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                            Read more
                        </a>
                    </div>
                <?php endwhile; 
            endif; ?>
        </div>
    </div>
</div>

