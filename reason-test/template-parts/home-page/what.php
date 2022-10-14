<div class="bg-brand-teal text-white p-8">
    <div class="container">
        <h2 class="text-3xl font-bold mb-5">What do we do?</h2>
        <p class="mb-5">Let us know who you are and what you're looking for, and we'll get you to the right place.</p> 
        <div class="grid grid-cols-4 gap-x-7">
            <?php 
            $cta_sections = [
                "Get online week",
                "Learn my way",
                "Make it click",
                "Digital you"
            ];
            foreach($cta_sections as $cta) : ?>
                <div class="bg-white p-8 text-center text-black">
                    <h3 class="text-xl leading-5 font-bold mb-4"><?= $cta ?></h3>
                    <p class="text-sm mb-4">Lorem ipsum</p>
                    <a
                        href="#"
                        class="border-2 border-black text-brand-red inline-block text-sm px-6 py-2 font-bold rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                        Read more
                    </a>
                </div>    
            <?php endforeach; ?>        
        </div>
        <div class="mt-10 text-center">
            <a
                href="#"
                class="bg-white text-brand-red hover:text-white hover:bg-brand-red inline-block text-sm px-6 py-2 font-bold rounded-full transition duration-150 ease-in-out">
                More about what we do
            </a>
        </div>
    </div>
</div>