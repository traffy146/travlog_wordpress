<div>
    <img src="<?php echo get_template_directory_uri() ?>src/images/objects/1.png" alt="" />
    <section class="pt-10 md:pt-20 px-4">
        <div class="container mx-auto flex flex-col lg:flex-row items-center justify-center text-center lg:text-left">

            <!-- Image Container -->
            <div class="w-full lg:w-2/3 pl-0 lg:pl-12 mb-8 lg:mb-0 order-first mt-10 lg:order-last flex justify-center">
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/cover/1.png"
                    class="rounded-lg w-full h-auto" />

            </div>

            <!-- Content Container -->
            <div class="w-full lg:w-1/3 order-last lg:order-first flex flex-col items-center lg:items-start">
                <div class="flex items-center lg:justify-start md:justify-center sm:justify-center p-4 mb-6 md:mb-10">
                    <div
                        class="md:w-50 px-4 md:px-8 py-3 md:py-5 drop-shadow-lg bg-white text-pink rounded-full flex items-center justify-center">
                        <span className="text-sm md:text-base font-bold mr-2 md:mr-5">
                            Explore the World!
                        </span>

                        <img src="<?php echo get_template_directory_uri() ?>/src/images/cake/1.png" alt=""
                            class="w-4 h-4 md:w-6 md:h-6" />

                    </div>
                </div>

                <h1 class="text-6xl font-bold mb-8 md:mb-16">
                    Travel <span class="text-pink">top destination</span> of the
                    world
                </h1>

                <p class="text-base lg:text-start lg:w-full md:w-1/2 sm:w-1/2  md:text-lg text-gray-600 mb-6 md:mb-8">
                    We always make our customer happy by providing as many choices
                    as possible
                </p>

                <div class="flex flex-col sm:flex-row lg:gap-1 md:gap-3 w-full sm:justify-center lg:justify-start">
                    <button
                        class="w-full  sm:w-auto px-6 md:px-8 py-2 md:py-3 drop-shadow-lg font-bold bg-violet text-white rounded-full">
                        Get Started
                    </button>
                    <button
                        class="w-full sm:w-auto px-6 md:px-8 py-2 md:py-3 flex justify-center items-center border rounded-full hover:bg-gray-100">
                        <img src="<?php echo get_template_directory_uri() ?>/src/images/play/1.png" alt="" class="mr-2"
                            width="24" height="24" />

                        <span>Watch Demo</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 px-4">
        <div class="max-w-6xl mx-auto">
            <div
                class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 md:gap-12 items-center justify-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/logos/3.png" alt="Sponsor 1"
                    width="120" height="32" class="w-24 md:w-32 lg:w-auto h-auto" />
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/logos/2.png" alt="Sponsor 2"
                    width="120" height="32" class="w-24 md:w-32 lg:w-auto h-auto" />
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/logos/1.png" alt="Sponsor 3"
                    width="120" height="32" class="w-24 md:w-32 lg:w-auto h-auto" />
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/logos/4.png" alt="Sponsor 4"
                    width="120" height="32" class="w-24 md:w-32 lg:w-auto h-auto" />
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/logos/5.png" alt="Sponsor 5"
                    width="120" height="32" class="w-24 md:w-32 lg:w-auto h-auto" />
            </div>
        </div>
    </section>

    <section>
        <?php
        while (have_posts()):
            the_post();

            get_template_part('template-parts/content', 'page');

        endwhile; // End of the loop.
        ?>
    </section>
    <section class="py-16  mb-8 ">
        <div class="rounded-3xl py-8 md:py-12 lg:py-16" style="background-color:rgba(250, 205, 73, 0.08)">
            <div class="max-w-6xl mx-auto px-4 md:px-6">
                <div class="text-center mb-6 md:mb-8">
                    <h2 class="text-lg md:text-xl tracking-[.25em] mb-2 md:mb-3 font-bold text-pink">
                        SUBSCRIBE TO OUR NEWSLETTER
                    </h2>
                    <h3 class="text-3xl md:text-5xl lg:text-6xl">
                        Prepare yourself &amp; let&apos;s explore the beauty of the world
                    </h3>
                </div>

                <form class="max-w-md mx-auto">
                    <div class="flex items-center flex-col sm:flex-row gap-3">
                        <div class="relative flex-1">

                            <input type="email" placeholder="Your Email"
                                class="w-full pl-12 pr-4 py-3 bg-white rounded-full border border-gray-200 focus:outline-none focus:border-violet" />
                        </div>
                        <button type="submit"
                            class="px-8 py-3 bg-violet text-white rounded-full hover:bg-violet/90 transition-colors">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>