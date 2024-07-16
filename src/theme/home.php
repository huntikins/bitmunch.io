<?php
/**
 * The Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bitmunch.io
 */

get_header();
?>

<main id="primary" class="site-main bg-dark">
    <section class="relative h-dvh">
        <div class="absolute top-0 left-0 w-dvw h-dvh max-w-screen-2xl">
            <!-- The post image -->
            <img class="block object-cover object-left w-full h-full"
                src="https://plus.unsplash.com/premium_photo-1661761629601-bf9436d058d2?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="test">
        </div>
        <div
            class="absolute top-0 left-0 w-dvw h-dvh max-w-screen-2xl bg-gradient-to-b from-dark-primary from-10% via-dark-primary/80 via-40% to-dark-primary/80">
        </div>
        <div class="absolute top-0 left-0 p-6 pt-20 sm:p-12 sm:pt-20 text-light-primary w-dvw h-dvh max-w-screen-2xl">
            <div class="flex flex-col items-center justify-center w-full h-full">
                <div class="flex flex-col justify-end w-full h-1/2">
                    <h1 class="text-5xl uppercase">New post</h1>
                    <p class="w-full sm:max-w-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta
                        consectetur et
                        quia ducimus
                        quaerat
                        dolorum saepe accusamus fugiat laudantium. Recusandae dolores enim nisi ipsum animi consectetur
                        nostrum
                        est minus perspiciatis?</p>
                </div>
                <div class="flex items-end w-full h-1/2 ">
                    <ul
                        class="flex items-center justify-between w-full pb-4 border-b-2 sm:w-3/4 border-dark-secondary/60">
                        <li>Tags</li>
                        <li>date</li>
                        <li>author</li>
                    </ul>
                    <button class="w-24 h-24 p-4 ml-auto text-center bg-brand-primary">DOWN ANGLED ARROW HERE</button>
                </div>
            </div>
        </div>
    </section>
    <div class="p-6 sm:p-12 bg-brand-primary">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat delectus, veniam aliquid beatae assumenda
            quasi modi nisi aperiam voluptas quisquam fugiat sed a maxime voluptatum ullam nostrum commodi in. Soluta.
        </p>
    </div>
</main><!-- #main -->

<?php
get_footer();
