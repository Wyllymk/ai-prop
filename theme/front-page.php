<?php
/**
 * The template for displaying Front Page
 *
 * This is the template that displays front page by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ai_Prop
 */
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="relative flex min-h-screen flex-col justify-between bg-black text-white">
    <main class="size-full">

        <!-- Menu Navigation -->
        <?php get_template_part( 'template-parts/content/content', 'header' ); ?>

        <!-- Sidebar Navigation -->
        <div id="navMenu"
            class="bg-black fixed top-0 z-51 h-full w-60 -translate-x-full transform p-4 shadow-lg transition-all duration-300 ease-in-out pointer-events-none md:hidden">
            <!-- Overlay (darkens the image) -->
            <div class="absolute z-52 bg-black"></div>
            <!-- Your navigation items here -->
            <?php get_template_part( 'template-parts/content/content', 'aside' ); ?>
        </div>

        <!-- Overlay for Sidebar -->
        <div id="overlay" class="fixed inset-0 z-50 hidden h-screen bg-black/90"></div>

        <!-- Hero Section -->
        <section id="home"
            class="hero rounded-2xl mx-5 -mt-16 mb-10 md:mb-20 relative flex flex-wrap lg:flex-nowrap align-center justify-center z-10 p-4 min-h-screen bg-hero bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
            <div
                class="z-22 md:p-8 mt-30 lg:mt-0 flex flex-col lg:w-2/3 xl:w-1/2 items-start justify-center space-y-6 xl:space-y-10">
                <!-- Hero Content -->

                <a href="https://www.trustpilot.com/review/aeonfunded.com"
                    class="flex items-center space-x-4 px-4 py-1 rounded-full bg-black/90 hover:drop-shadow-aeon-yellow border border-aeon-yellow/50">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="Star"
                        class="md:h-4 lg:h-6">
                    <p class="text-sm">
                        <?php esc_html_e( "Rated 10/10 From 800+ Verified Reviews", 'aeon' ); ?>
                    </p>
                </a>
                <h1 class="text-4xl font-bold leading-tight md:text-6xl">
                    <?php esc_html_e( 'Launch Your', 'aeon' ); ?>
                    <span class="text-aeon-yellow">
                        <?php esc_html_e( 'Success', 'aeon' ); ?>
                    </span>
                    <?php esc_html_e( 'with Our Simulated or Demo Capital', 'aeon' ); ?>
                </h1>
                <p class="text-lg xl:w-2/3">
                    <?php esc_html_e( "Trade with our simulated capital, keep up to 95% of the rewards, and maximize your earnings with zero risk to your funds!", 'aeon' ); ?>
                </p>
                <div class="flex items-center space-x-4">
                    <a href="http://dashboard.aeonfunded.com"
                        class="rounded-full text-xs md:text-lg bg-white px-3 md:px-6 py-2 text-black hover:drop-shadow-white-glow transition duration-300 ease-in-out">
                        <?php esc_html_e( 'Get Funded', 'aeon' ); ?>
                    </a>
                </div>

            </div>
            <div class="z-22 flex w-full md:w-1/2 flex-col items-start justify-center space-y-6 mt-10 lg:mt-0">
                <div class="relative flex mx-auto">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cubic.png" alt="cubic"
                        class="w-full animate-gentle-bounce">
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 flex mx-auto">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/texture.png" alt="texture"
                    class="w-full image">
            </div>
        </section>

        <!-- Why Us Section -->
        <section
            class="flex flex-col items-center py-10 md:py-20 p-4 min-h-fit space-y-6 w-full bg-why bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
            <div class="w-fit">
                <div class="rounded-full text-xs bg-transparent border border-gray-600 px-2 py-1 text-white">
                    <?php esc_html_e( 'Why Us', 'aeon' ); ?>
                </div>
            </div>
            <div class="relative w-fit flex flex-col items-center space-y-4">
                <!-- Text Content -->
                <h2 class="relative z-9 text-2xl md:text-4xl text-center font-semibold">
                    <?php esc_html_e( 'Why Trade with ', 'aeon' ); ?>
                    <span class="text-aeon-yellow -mr-2">
                        <?php esc_html_e( 'A', 'aeon' ); ?>
                    </span><?php esc_html_e( 'EON?', 'aeon' ); ?>
                </h2>
                <p class="text-base w-full md:w-2/3 text-center">
                    <?php esc_html_e( "Trade with our simulated capital, keep up to 95% of the rewards, and maximize your earnings with zero risk to your funds!", 'aeon' ); ?>
                </p>
            </div>

            <div
                class="flex justify-center items-stretch mt-6 lg:mt-10 flex-wrap lg:flex-nowrap space-y-6 lg:space-y-0 lg:space-x-6 w-full max-w-6xl">
                <div
                    class="plan-item w-full md:w-2/5 lg:w-2/5 bg-black/50 hover:drop-shadow-aeon-yellow/50 border border-black/50 rounded-xl p-2 overflow-hidden">
                    <div class="w-full rounded-xl md:me-6 space-y-3 p-6 border border-aeon-yellow/50 overflow-hidden">
                        <div class="w-fit">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbs-up.png"
                                alt="thumbs up" class="w-full">
                        </div>
                        <h3 class="relative z-9 text-xl">
                            <?php esc_html_e( 'Your skill, our risk', 'aeon' ); ?>
                        </h3>
                        <p class="text-base">
                            <?php esc_html_e( 'Trade you with our simulated capital without being liable from any losses.', 'aeon' ); ?>
                        </p>
                        <a href="http://dashboard.aeonfunded.com"
                            class="flex items-center space-x-4 px-4 py-1 rounded-full bg-black hover:drop-shadow-white-glow transition duration-300 ease-in-out border border-gray-600 w-fit">
                            <p class="text-base">
                                <?php esc_html_e( "Learn More", 'aeon' ); ?>
                            </p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png"
                                alt="arrow-right" class="h-5">
                        </a>
                    </div>
                </div>
                <div
                    class="plan-item w-full md:w-2/5 lg:w-2/5 bg-black/50 border hover:drop-shadow-aeon-yellow/50 border-black/50 rounded-xl p-2 overflow-hidden">
                    <div class="w-full rounded-xl md:me-6 space-y-3 p-6 border border-aeon-yellow/50 overflow-hidden">
                        <div class="w-fit">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rocket.png" alt="rocket"
                                class="w-full">
                        </div>
                        <h3 class="relative z-9 text-xl">
                            <?php esc_html_e( 'Fast & Reliable Payouts', 'aeon' ); ?>
                        </h3>
                        <p class="text-base">
                            <?php esc_html_e( 'Receive Payouts with a High Reward Split, Protected by our Reward Promise.', 'aeon' ); ?>
                        </p>
                        <a href="http://dashboard.aeonfunded.com"
                            class="flex items-center space-x-4 px-4 py-1 rounded-full bg-black hover:drop-shadow-white-glow transition duration-300 ease-in-out border border-gray-600 w-fit">
                            <p class="text-base">
                                <?php esc_html_e( "Learn More", 'aeon' ); ?>
                            </p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png"
                                alt="arrow-right" class="h-5">
                        </a>
                    </div>
                </div>
                <div
                    class="plan-item w-full md:w-2/5 lg:w-2/5 bg-black/50 hover:drop-shadow-aeon-yellow/50 border border-black/50 rounded-xl p-2 overflow-hidden">
                    <div class="w-full rounded-xl md:me-6 space-y-3 p-6 border border-aeon-yellow/50 overflow-hidden">
                        <div class="w-fit">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/headphones.png"
                                alt="headphones" class="w-full">
                        </div>
                        <h3 class="relative z-9 text-xl">
                            <?php esc_html_e( '24/7 Support', 'aeon' ); ?>
                        </h3>
                        <p class="text-base">
                            <?php esc_html_e( 'Our Dedicated Support team is always here to help.', 'aeon' ); ?>
                        </p>
                        <a href="http://dashboard.aeonfunded.com"
                            class="flex items-center space-x-4 px-4 py-1 rounded-full bg-black hover:drop-shadow-white-glow transition duration-300 ease-in-out border border-gray-600 w-fit">
                            <p class="text-base">
                                <?php esc_html_e( "Learn More", 'aeon' ); ?>
                            </p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png"
                                alt="arrow-right" class="h-5">
                        </a>
                    </div>
                </div>
            </div>

        </section>

        <!-- Success Section -->
        <section
            class="hidden flex-col items-center p-4 min-h-fit space-y-6 w-full py-10 md:py-20 bg-success bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto"
            id="evaluation">
            <div class="w-fit">
                <div class="rounded-full text-xs bg-black border border-gray-600 px-2 py-1 text-white">
                    <?php esc_html_e( 'Success', 'aeon' ); ?>
                </div>
            </div>
            <div class="relative w-fit flex flex-col items-center space-y-4">
                <!-- Text Content -->
                <h2 class="relative z-9 text-2xl md:text-4xl text-center font-semibold">
                    <?php esc_html_e( 'Trading ', 'aeon' ); ?>
                    <span class="text-aeon-yellow">
                        <?php esc_html_e( 'Success', 'aeon' ); ?>
                    </span><?php esc_html_e( 'With Numbers', 'aeon' ); ?>
                </h2>
                <p class="text-base w-full md:w-2/3 text-center">
                    <?php esc_html_e( "A dynamic community where traders grow, earn, and succeed. See real results and take your trading journey to the next level.", 'aeon' ); ?>
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6 lg:mt-10 w-full max-w-6xl">
                <div class="evaluation-left w-full bg-black/50 border border-black/50 rounded-xl p-2 overflow-hidden">
                    <div
                        class="flex flex-col h-full md:h-106 rounded-xl border border-aeon-yellow/50 space-x-4 md:space-x-0 space-y-2 md:space-y-4 bg-bg bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
                        <div class="w-fit p-3 md:px-6 md:pt-6">
                            <div
                                class="rounded-full text-xs bg-transparent border border-gray-600 px-2 py-1 text-white">
                                <?php esc_html_e( 'Total Payouts', 'aeon' ); ?>
                            </div>
                        </div>
                        <div class="flex flex-col justify-around space-y-4 px-3 md:px-6">
                            <div class="space-y-2 flex justify-center flex-col">
                                <h4 class="text-4xl font-bold">
                                    <?php esc_html_e( '$1,240,000+', 'aeon' ); ?>
                                </h4>
                                <p class="text-sm">
                                    <?php esc_html_e( 'The total amount of money paid out to traders over time, showcasing overall earnings.', 'aeon' ); ?>
                                </p>
                            </div>
                        </div>
                        <div class="w-fit flex flex-row items-center space-x-4 px-3 md:px-6">
                            <div
                                class="rounded-full text-xs bg-transparent border border-gray-600 px-2 py-1 text-white">
                                <?php esc_html_e( 'Average Payout: 2521$', 'aeon' ); ?>
                            </div>
                            <div
                                class="rounded-full text-xs bg-aeon-yellow/30 border border-aeon-yellow/70 px-2 py-1 text-aeon-yellow">
                                <?php esc_html_e( 'Total Paid out: $1.24M', 'aeon' ); ?>
                            </div>
                        </div>
                        <div class="w-fit pb-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/graph.png" alt="graph"
                                class="w-full">
                        </div>
                    </div>
                </div>

                <div class="evaluation-right grid grid-rows-2 gap-6">
                    <div class="w-full bg-black/50 border border-black/50 rounded-xl p-2 overflow-hidden">
                        <div
                            class="flex flex-row h-full md:h-48 rounded-xl space-x-4 border border-aeon-yellow/50 bg-highest bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
                            <div class="flex flex-col w-fit p-3 md:p-6 space-y-4">
                                <div class="w-fit">
                                    <div
                                        class="rounded-full text-xs bg-transparent border border-gray-600 px-2 py-1 text-white">
                                        <?php esc_html_e( 'Highest Paid Trader', 'aeon' ); ?>
                                    </div>
                                </div>
                                <div class="space-y-2 flex justify-center flex-col">
                                    <h4 class="text-4xl font-bold">
                                        <?php esc_html_e( '$18,821', 'aeon' ); ?>
                                    </h4>
                                    <p class="text-sm">
                                        <?php esc_html_e( 'The trader with the highest earnings, setting a benchmark for success.', 'aeon' ); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="w-fit flex flex-col items-center justify-center pe-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/10k.png" alt="10k"
                                    class="w-full">
                            </div>
                        </div>
                    </div>
                    <div class="w-full bg-black/50 border border-black/50 rounded-xl p-2 overflow-hidden">
                        <div
                            class="flex flex-row h-full md:h-48 rounded-xl space-x-4 border border-aeon-yellow/50 bg-highest bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
                            <div class="flex flex-col w-fit p-3 md:p-6 space-y-4">
                                <div class="w-fit">
                                    <div
                                        class="rounded-full text-xs bg-transparent border border-gray-600 px-2 py-1 text-white">
                                        <?php esc_html_e( 'Traders Worldwide', 'aeon' ); ?>
                                    </div>
                                </div>
                                <div class="space-y-2 flex justify-center flex-col">
                                    <h4 class="text-4xl font-bold">
                                        <?php esc_html_e( '18,000+', 'aeon' ); ?>
                                    </h4>
                                    <p class="text-sm">
                                        <?php esc_html_e( 'The total number of active traders across different countries, highlighting global reach.', 'aeon' ); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="w-fit flex flex-col items-end justify-end">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/World.png" alt="World"
                                    class="w-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How it works Section -->
        <section
            class="flex flex-col items-center pt-20 md:pt-40 pb-10 md:pb-20 p-4 min-h-fit space-y-6 w-full bg-how bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
            <div class="flex flex-col md:flex-row justify-between items-center w-full max-w-6xl">
                <div class="w-full space-y-4 flex flex-col items-center md:items-start justify-center">
                    <div class="w-fit flex">
                        <div class="rounded-full text-xs bg-transparent border border-gray-600 px-2 py-1 text-white">
                            <?php esc_html_e( 'How it works', 'aeon' ); ?>
                        </div>
                    </div>
                    <div class="relative w-fit flex flex-col items-center md:items-start space-y-4">
                        <!-- Text Content -->
                        <h2 class="relative z-9 text-2xl md:text-4xl text-center font-semibold">
                            <?php esc_html_e( 'Trading made ', 'aeon' ); ?>
                            <span class="text-aeon-yellow -mr-2">
                                <?php esc_html_e( 'easy', 'aeon' ); ?>
                            </span><?php esc_html_e( ', For You.', 'aeon' ); ?>
                        </h2>
                        <p class="text-base w-full text-center md:text-start">
                            <?php esc_html_e( "Your Skills with Our Risk. You're not liable for any losses.", 'aeon' ); ?>
                        </p>
                    </div>
                    <div class="flex space-x-4 items-center justify-center">
                        <div class="flex items-center space-x-4">
                            <a href="http://dashboard.aeonfunded.com"
                                class="rounded-full text-xs md:text-lg bg-white px-3 md:px-6 py-1 text-black hover:drop-shadow-white-glow transition duration-300 ease-in-out">
                                <?php esc_html_e( 'Get Funded', 'aeon' ); ?>
                            </a>
                        </div>
                        <a href="http://dashboard.aeonfunded.com"
                            class="flex items-center space-x-4 px-4 py-1 rounded-full bg-black hover:drop-shadow-white-glow transition duration-300 ease-in-out border border-gray-600 w-fit">
                            <p class="text-base">
                                <?php esc_html_e( "Learn More", 'aeon' ); ?>
                            </p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png"
                                alt="arrow-right" class="h-5">
                        </a>
                    </div>
                </div>
                <div class="w-full relative mt-30 md:mt-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dashboard.png" alt="dashboard"
                        class="w-full">
                    <div class="absolute -top-20 right-0 flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/will.png" alt="will"
                            class="w-full h-50 animate-gentle-bounce">
                    </div>
                </div>
            </div>


            <div
                class="flex justify-center items-stretch mt-6 lg:mt-10 flex-wrap lg:flex-nowrap space-y-6 lg:space-y-0 lg:space-x-6 w-full max-w-6xl">
                <div
                    class="work-item w-full md:w-2/5 lg:w-2/5 bg-black/50 hover:drop-shadow-aeon-yellow/50 border border-black/50 rounded-xl p-2 overflow-hidden">
                    <div class="w-full rounded-xl md:me-6 space-y-3 p-6 border border-aeon-yellow/50 overflow-hidden">
                        <div class="flex items-center justify-between">
                            <div class="w-fit">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/target.png"
                                    alt="target" class="w-full">
                            </div>
                            <div class="w-fit">
                                <div
                                    class="rounded-full text-xs bg-transparent border border-gray-600 px-2 py-1 text-white">
                                    <?php esc_html_e( '1 step', 'aeon' ); ?>
                                </div>
                            </div>
                        </div>
                        <h3 class="relative z-9 text-xl font-semibold">
                            <?php esc_html_e( 'Take a Challenge', 'aeon' ); ?>
                        </h3>
                        <p class="text-base">
                            <?php esc_html_e( 'Trade you with our simulated capital without being liable for any losses.', 'aeon' ); ?>
                        </p>
                    </div>
                </div>
                <div
                    class="work-item w-full md:w-2/5 lg:w-2/5 bg-black/50 hover:drop-shadow-aeon-yellow/50 border border-black/50 rounded-xl p-2 overflow-hidden">
                    <div class="w-full rounded-xl md:me-6 space-y-3 p-6 border border-aeon-yellow/50 overflow-hidden">
                        <div class="flex items-center justify-between">
                            <div class="w-fit">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/capital.png"
                                    alt="capital" class="w-full">
                            </div>
                            <div class="w-fit">
                                <div
                                    class="rounded-full text-xs bg-transparent border border-gray-600 px-2 py-1 text-white">
                                    <?php esc_html_e( '2 step', 'aeon' ); ?>
                                </div>
                            </div>
                        </div>
                        <h3 class="relative z-9 text-xl font-semibold">
                            <?php esc_html_e( 'Unlock Capital', 'aeon' ); ?>
                        </h3>
                        <p class="text-base">
                            <?php esc_html_e( 'Receive Payouts with a High Reward Split, Protected by our Reward Promise.', 'aeon' ); ?>
                        </p>
                    </div>
                </div>
                <div
                    class="work-item w-full md:w-2/5 lg:w-2/5 bg-black/50 hover:drop-shadow-aeon-yellow/50 border border-black/50 rounded-xl p-2 overflow-hidden">
                    <div class="w-full rounded-xl md:me-6 space-y-3 p-6 border border-aeon-yellow/50 overflow-hidden">
                        <div class="flex items-center justify-between">
                            <div class="w-fit">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paid.png" alt="paid"
                                    class="w-full">
                            </div>
                            <div class="w-fit">
                                <div
                                    class="rounded-full text-xs bg-transparent border border-gray-600 px-2 py-1 text-white">
                                    <?php esc_html_e( '3 step', 'aeon' ); ?>
                                </div>
                            </div>
                        </div>
                        <h3 class="relative z-9 text-xl font-semibold">
                            <?php esc_html_e( 'Trade & Get Paid', 'aeon' ); ?>
                        </h3>
                        <p class="text-base">
                            <?php esc_html_e( 'Our Dedicated Support team is always here to help.', 'aeon' ); ?>
                        </p>
                    </div>
                </div>
            </div>

        </section>

        <!-- Planning Section -->
        <section
            class="flex flex-col items-center p-4 my-10 md:my-20 space-y-6 w-full bg-challenge bg-cover bg-center bg-no-repeat overflow-hidden"
            id="plans">
            <div class="px-1 py-6 md:py-12 md:px-10 min-h-96 w-full flex flex-col items-center space-y-4">
                <div class="w-fit">
                    <div class="rounded-full text-xs bg-transparent border border-gray-600 px-2 py-1 text-white">
                        <?php esc_html_e( 'Planning', 'aeon' ); ?>
                    </div>
                </div>
                <div class="relative w-fit flex flex-col items-center space-y-4 md:w-5/6 ">
                    <!-- Text Content -->
                    <h2 class="relative z-9 text-2xl md:text-4xl text-center font-semibold">
                        <?php esc_html_e( 'Pricing Plan', 'aeon' ); ?>
                    </h2>
                    <p class="text-base w-full md:w-2/3 text-center">
                        <?php esc_html_e( "We appreciate that every trader and trading style is different. With that in mind we offer the opportunity to customize your trading accounts at the checkout.", 'aeon' ); ?>
                    </p>
                    </p>
                </div>

                <!-- Plans Section -->
                <div class="w-full flex flex-col mt-10 items-center space-y-5" x-data="plans" x-init="init()">

                    <!-- Plan Type Selection -->
                    <div class="flex space-x-4 items-center justify-center">
                        <button @click="setActive(1, 'one-step')" :class="{
                        'bg-white text-black hover:drop-shadow-white-glow': !isActive(1, 'one-step'),
                        'bg-aeon-yellow text-black hover:drop-shadow-aeon-yellow shadow-lg': isActive(1, 'one-step'),
                        'opacity-50 cursor-not-allowed': isDisabled('one-step')
                    }" class="cursor-pointer rounded-full text-xs md:text-lg px-3 md:px-6 py-1 md:py-2 transition duration-300 ease-in-out"
                            :disabled="isDisabled('one-step')">
                            <?php esc_html_e( '1 Step', 'aeon' ); ?>
                        </button>

                        <button @click="setActive(1, 'two-step')" :class="{
                        'bg-white text-black hover:drop-shadow-white-glow': !isActive(1, 'two-step'),
                        'bg-aeon-yellow text-black hover:drop-shadow-aeon-yellow shadow-lg': isActive(1, 'two-step'),
                        'opacity-50 cursor-not-allowed': isDisabled('two-step')
                    }" class="cursor-pointer rounded-full text-xs md:text-lg px-3 md:px-6 py-1 md:py-2 transition duration-300 ease-in-out"
                            :disabled="isDisabled('two-step')">
                            <?php esc_html_e( '2 Step', 'aeon' ); ?>
                        </button>

                        <button @click="setActive(1, 'instant')" :class="{
                        'bg-white text-black hover:drop-shadow-white-glow': !isActive(1, 'instant'),
                        'bg-aeon-yellow text-black hover:drop-shadow-aeon-yellow shadow-lg': isActive(1, 'instant'),
                        'opacity-50 cursor-not-allowed': isDisabled('instant')
                    }" class="cursor-pointer rounded-full text-xs md:text-lg px-3 md:px-6 py-1 md:py-2 transition duration-300 ease-in-out"
                            :disabled="isDisabled('instant')">
                            <?php esc_html_e( 'Instant', 'aeon' ); ?>
                        </button>
                    </div>

                    <!-- Plan Variant Selection -->
                    <div class="flex space-x-4 mt-4 items-center justify-center">
                        <button @click="setActive(2, 'classic')" :class="{
                        'bg-white text-black hover:drop-shadow-white-glow': !isActive(2, 'classic'),
                        'bg-aeon-yellow text-black hover:drop-shadow-aeon-yellow shadow-lg': isActive(2, 'classic'),
                        'opacity-50 cursor-not-allowed': isDisabled('classic')
                    }" class="cursor-pointer rounded-full text-xs md:text-lg px-3 md:px-6 py-1 md:py-2 transition duration-300 ease-in-out"
                            :disabled="isDisabled('classic')">
                            <?php esc_html_e( 'Classic', 'aeon' ); ?>
                        </button>

                        <button @click="setActive(2, 'plus')" :class="{
                        'bg-white text-black hover:drop-shadow-white-glow': !isActive(2, 'plus'),
                        'bg-aeon-yellow text-black hover:drop-shadow-aeon-yellow shadow-lg': isActive(2, 'plus'),
                        'opacity-50 cursor-not-allowed': isDisabled('plus')
                    }" class="cursor-pointer rounded-full text-xs md:text-lg px-3 md:px-6 py-1 md:py-2 transition duration-300 ease-in-out"
                            :disabled="isDisabled('plus')">
                            <?php esc_html_e( 'Plus', 'aeon' ); ?>
                        </button>
                    </div>

                    <!-- Main Content Container -->
                    <div
                        class="bg-black/70 max-w-5xl w-full space-y-10 pb-10 rounded-2xl flex flex-col items-center justify-center">

                        <!-- Amount Selection Buttons -->
                        <div
                            class="mt-10 max-w-5xl flex text-white items-center justify-around space-x-1 md:space-x-2 h-fit px-1 py-1 w-full">
                            <template
                                x-for="amount in ['$5,000', '$10,000', '$25,000', '$50,000', '$100,000', '$200,000']"
                                :key="amount">
                                <div class="w-full" x-show="isAmountVisible(amount)">
                                    <button @click="activeAmount = amount"
                                        class="relative py-1 shadow-lg cursor-pointer text-xs border border-white/10 md:text-lg rounded-3xl w-full hover:bg-aeon-yellow/50"
                                        :class="{'bg-aeon-yellow/50 hover:drop-shadow-aeon-yellow': activeAmount === amount, 'bg-transparent': activeAmount !== amount}">
                                        <span x-text="amount.replace(',000', 'k').replace(',', '')"></span>
                                        <span x-show="amount === '$100,000' && activeGroup1 !== 'instant'"
                                            class="absolute -top-2 -right-2 bg-aeon-yellow text-black text-[10px] md:text-xs font-bold px-2 py-0.5 rounded-full whitespace-nowrap transform rotate-12">
                                            <?php esc_html_e( 'POPULAR', 'aeon' ); ?>
                                        </span>
                                    </button>
                                </div>
                            </template>
                        </div>

                        <!-- Dynamic Plan Columns -->
                        <div
                            class="flex flex-col md:flex-row space-y-4 space-x-0 md:space-x-4 items-stretch justify-center h-fit backdrop-blur-lg duration-300 max-w-5xl ease-in-out p-1 md:p-3 w-fit md:w-full">
                            <template x-for="column in getColumnsToDisplay()" :key="column">
                                <div
                                    class="space-y-4 h-fit w-full md:w-1/3 backdrop-blur-md p-6 rounded-xl border border-aeon-yellow/10">
                                    <h3 x-text="column.charAt(0).toUpperCase() + column.slice(1)"></h3>
                                    <template x-for="[key, value] in Object.entries(getColumnData(column))">
                                        <div class="flex flex-col space-y-2">
                                            <div class="flex space-x-2 items-center justify-between">
                                                <div class="flex space-x-2 items-center">
                                                    <div class="w-fit">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check-circle.png"
                                                            alt="check-circle" class="w-full">
                                                    </div>
                                                    <h3 class="text-base" x-text="key"></h3>
                                                </div>
                                                <div class="flex space-x-2 items-center">
                                                    <h3 class="text-base" x-text="value"></h3>
                                                </div>
                                            </div>
                                            <hr class="border-t-2 border-dotted border-gray-600">
                                        </div>
                                    </template>
                                </div>
                            </template>
                        </div>

                        <!-- Checkout Button -->
                        <div class="flex items-center justify-center space-x-2">
                            <a :href="getCurrentLink()"
                                class="bg-aeon-yellow/20 hover:shadow-lg shadow-[#ffd221] hover:bg-aeon-yellow/50 px-4 md:px-6 py-2 md:py-3 space-x-4 text-lg flex items-center rounded-full justify-center transition duration-300 ease-in-out">
                                <h6 class="text-xs md:text-base">
                                    <?php esc_html_e( 'Start trading now', 'aeon' ); ?>
                                </h6>
                                <h3 class="text-3xl md:text-4xl font-semibold" x-text="getCurrentPrice()"></h3>
                                <p class="text-xs md:text-base">
                                    <?php esc_html_e( 'one time fee', 'aeon' ); ?>
                                </p>
                            </a>
                        </div>

                        <!-- Plan Features Footer -->
                        <div
                            class="w-full flex md:flex-row space-y-2 md:space-y-0 flex-col items-center py-4 px-3 border border-aeon-yellow/20 rounded-xl bg-foot bg-cover bg-center bg-no-repeat overflow-hidden">
                            <div
                                class="flex flex-col md:flex-row items-start md:items-center justify-around space-x-2 w-full border-b border-dashed border-aeon-yellow/20 pb-2">
                                <div class="flex space-x-2 items-center">
                                    <div class="w-fit">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check-circle.png"
                                            alt="check-circle" class="w-full">
                                    </div>
                                    <h3 class="text-base md:text-lg">
                                        <?php esc_html_e( '10 days payout', 'aeon' ); ?>
                                    </h3>
                                </div>
                                <div class="flex space-x-2 items-center">
                                    <div class="w-fit">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check-circle.png"
                                            alt="check-circle" class="w-full">
                                    </div>
                                    <h3 class="text-base md:text-lg">
                                        <?php esc_html_e( 'Reward split up to 95%', 'aeon' ); ?>
                                    </h3>
                                </div>
                                <div class="flex space-x-2 items-center">
                                    <div class="w-fit">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check-circle.png"
                                            alt="check-circle" class="w-full">
                                    </div>
                                    <h3 class="text-base md:text-lg">
                                        <?php esc_html_e( 'Max Drawdown up to 12%', 'aeon' ); ?>
                                    </h3>
                                </div>
                                <div class="flex space-x-2 items-center">
                                    <div class="w-fit">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check-circle.png"
                                            alt="check-circle" class="w-full">
                                    </div>
                                    <h3 class="text-base md:text-lg">
                                        <?php esc_html_e( 'Reset discount', 'aeon' ); ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                document.addEventListener('alpine:init', () => {
                    Alpine.data('plans', () => ({
                        // Active selections
                        activeGroup1: 'two-step',
                        activeGroup2: 'classic',
                        activeAmount: '$100,000',

                        // Initialize component
                        init() {
                            this.activeGroup1 = 'two-step';
                            this.activeGroup2 = 'classic';
                            this.activeAmount = '$100,000';
                        },

                        // Complete plan data structure
                        planData: {
                            'two-step': {
                                classic: {
                                    '$5,000': {
                                        price: '$49',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '20%',
                                            },
                                            step2: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '5%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '-',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$10,000': {
                                        price: '$99',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '20%',
                                            },
                                            step2: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '5%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '-',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$25,000': {
                                        price: '$199',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '20%',
                                            },
                                            step2: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '5%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '-',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$50,000': {
                                        price: '$349',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '20%',
                                            },
                                            step2: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '5%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '-',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$100,000': {
                                        price: '$499',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '20%',
                                            },
                                            step2: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '5%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '-',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$200,000': {
                                        price: '$999',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '20%',
                                            },
                                            step2: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '5%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '-',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                },
                                plus: {
                                    '$5,000': {
                                        price: '$99',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '1 day',
                                                'Reward Target': '10%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '20%',
                                            },
                                            step2: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '5%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '-',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$10,000': {
                                        price: '$149',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '1 day',
                                                'Reward Target': '10%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '20%',
                                            },
                                            step2: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '5%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '-',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$25,000': {
                                        price: '$299',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '1 day',
                                                'Reward Target': '10%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '20%',
                                            },
                                            step2: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '5%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '-',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$50,000': {
                                        price: '$449',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '1 day',
                                                'Reward Target': '10%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '20%',
                                            },
                                            step2: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '5%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '-',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$100,000': {
                                        price: '$599',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '1 day',
                                                'Reward Target': '10%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '20%',
                                            },
                                            step2: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '5%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '-',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$200,000': {
                                        price: '$1199',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '1 day',
                                                'Reward Target': '10%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '20%',
                                            },
                                            step2: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '5%',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '8%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '-',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                },
                            },
                            'one-step': {
                                classic: {
                                    '$5,000': {
                                        price: '$69',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '3%',
                                                'Max Drawdown': '5%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '10%',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$10,000': {
                                        price: '$119',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '3%',
                                                'Max Drawdown': '5%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '10%',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$25,000': {
                                        price: '$219',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '3%',
                                                'Max Drawdown': '5%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '10%',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$50,000': {
                                        price: '$379',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '3%',
                                                'Max Drawdown': '5%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '10%',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$100,000': {
                                        price: '$519',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '3%',
                                                'Max Drawdown': '5%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '10%',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$200,000': {
                                        price: '$1019',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '3%',
                                                'Max Drawdown': '5%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '10%',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                },
                                plus: {
                                    '$5,000': {
                                        price: '$59',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '3%',
                                                'Max Drawdown': '5%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '10%',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$10,000': {
                                        price: '$99',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '3%',
                                                'Max Drawdown': '5%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '10%',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$25,000': {
                                        price: '$199',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '3%',
                                                'Max Drawdown': '5%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '10%',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$50,000': {
                                        price: '$349',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '3%',
                                                'Max Drawdown': '5%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '10%',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$100,000': {
                                        price: '$499',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '3%',
                                                'Max Drawdown': '5%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '10%',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                    '$200,000': {
                                        price: '$999',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            step1: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '8%',
                                                'Daily Drawdown': '3%',
                                                'Max Drawdown': '5%',
                                                Leverage: '1:100',
                                                'Trade Through news': 'No',
                                                'Reward Split': '-',
                                                'Reset Discount': '10%',
                                            },
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '5%',
                                                'Max Drawdown': '10%',
                                                Leverage: '1:50',
                                                'Trade Through news': 'No',
                                                'Reward Split': '80%-95%',
                                                'First Reward': '10 trading days then Bi-weekly',
                                            },
                                        },
                                    },
                                },
                            },
                            instant: {
                                classic: {
                                    '$5,000': {
                                        price: '$199',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '3%',
                                                'Max Drawdown': '5%',
                                                Leverage: '1:30',
                                                'Trade Through News': '5 min rules',
                                                'Reward Split': '55% up to 95%',
                                                'Reset Discount': '-',
                                            },
                                        },
                                    },
                                    '$10,000': {
                                        price: '$399',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '3%',
                                                'Max Drawdown': '5%',
                                                Leverage: '1:30',
                                                'Trade Through News': '5 min rules',
                                                'Reward Split': '55% up to 95%',
                                                'Reset Discount': '-',
                                            },
                                        },
                                    },
                                    '$25,000': {
                                        price: '$999',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '3%',
                                                'Max Drawdown': '5%',
                                                Leverage: '1:30',
                                                'Trade Through News': '5 min rules',
                                                'Reward Split': '55% up to 95%',
                                                'Reset Discount': '-',
                                            },
                                        },
                                    },
                                    '$50,000': {
                                        price: '$1999',
                                        link: 'https://checkout.aeonfunded.com/',
                                        data: {
                                            funded: {
                                                'Minimum Trading Days': '3 days',
                                                'Reward Target': '-',
                                                'Daily Drawdown': '3%',
                                                'Max Drawdown': '5%',
                                                Leverage: '1:30',
                                                'Trade Through News': '5 min rules',
                                                'Reward Split': '55% up to 95%',
                                                'Reset Discount': '-',
                                            },
                                        },
                                    },
                                },
                            },
                        },

                        // Methods
                        setActive(group, id) {
                            if (group === 1) {
                                this.activeGroup1 = id;
                                if (id === 'instant') this.activeGroup2 = 'classic';
                            } else {
                                this.activeGroup2 = id;
                            }

                            const amounts = this.getAvailableAmounts();
                            if (amounts.length > 0 && !amounts.includes(this.activeAmount)) {
                                this.activeAmount = amounts[0];
                            }
                        },

                        isActive(group, id) {
                            return group === 1 ?
                                this.activeGroup1 === id :
                                this.activeGroup2 === id;
                        },

                        isDisabled(id) {
                            return (
                                this.activeGroup1 === 'instant' &&
                                (id === 'classic' || id === 'plus')
                            );
                        },

                        getCurrentPrice() {
                            const plan =
                                this.planData[this.activeGroup1]?. [this.activeGroup2]?. [
                                    this.activeAmount
                                ];
                            return plan?.price || '$0';
                        },

                        getCurrentLink() {
                            const plan =
                                this.planData[this.activeGroup1]?. [this.activeGroup2]?. [
                                    this.activeAmount
                                ];
                            return plan?.link || '#';
                        },

                        getColumnData(columnType) {
                            const plan =
                                this.planData[this.activeGroup1]?. [this.activeGroup2]?. [
                                    this.activeAmount
                                ];
                            return plan?.data?. [columnType] || {};
                        },

                        getAvailableAmounts() {
                            if (
                                !this.planData[this.activeGroup1] ||
                                !this.planData[this.activeGroup1][this.activeGroup2]
                            ) {
                                return [];
                            }
                            return Object.keys(
                                this.planData[this.activeGroup1][this.activeGroup2]
                            );
                        },

                        isAmountVisible(amount) {
                            return this.getAvailableAmounts().includes(amount);
                        },

                        getColumnsToDisplay() {
                            if (this.activeGroup1 === 'instant') return ['funded'];
                            if (this.activeGroup1 === 'one-step') return ['step1', 'funded'];
                            return ['step1', 'step2', 'funded'];
                        },
                    }));
                });
                </script>
            </div>
        </section>

        <!-- Secure Section -->
        <section
            class="flex flex-col items-center p-4 min-h-fit space-y-6 w-full py-10 md:py-20 bg-success bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
            <div class="w-fit">
                <div class="rounded-full text-xs bg-black border border-gray-600 px-2 py-1 text-white">
                    <?php esc_html_e( 'Secure', 'aeon' ); ?>
                </div>
            </div>
            <div class="relative w-fit flex flex-col items-center space-y-4">
                <!-- Text Content -->
                <h2 class="relative z-9 text-2xl md:text-4xl text-center font-semibold">
                    <?php esc_html_e( 'Instant and Secure Payouts', 'aeon' ); ?>
                </h2>
                <p class="text-base w-full md:w-2/3 text-center">
                    <?php esc_html_e( "Get paid quickly and securely with a smooth and reliable payout process.", 'aeon' ); ?>
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6 lg:mt-10 w-full max-w-6xl">
                <div class="secure-left w-full bg-black/50 border border-black/50 rounded-xl p-2 overflow-hidden">
                    <div
                        class="flex flex-col items-center justify-center h-full md:h-106 border border-aeon-yellow/50 rounded-xl space-x-4 md:space-x-0 space-y-2 md:space-y-4 bg-bg bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
                        <div class="flex flex-col items-center justify-around space-y-4 px-3 md:px-6 pt-6 md:pt-12">
                            <div class="space-y-2 flex justify-center items-center flex-col">
                                <h4 class="text-xl font-semibold">
                                    <?php esc_html_e( 'Rewards Promise with AEON', 'aeon' ); ?>
                                </h4>
                                <p class="text-sm text-center">
                                    <?php esc_html_e( 'AEON ensures secure, timely payouts—trusted by traders with guaranteed withdrawals and smooth reward splits, no hidden delays', 'aeon' ); ?>
                                </p>
                            </div>
                        </div>
                        <div class="w-fit h-fit">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guarantee.png"
                                alt="guarantee" class="w-70">
                        </div>
                    </div>
                </div>
                <div class="secure-right w-full bg-black/50 border border-black/50 rounded-xl p-2 overflow-hidden">
                    <div
                        class="flex flex-col items-center justify-around h-full md:h-106 border border-aeon-yellow/50 rounded-xl space-x-4 md:space-x-0 space-y-2 md:space-y-4 bg-bg bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
                        <div class="flex flex-col items-center justify-around space-y-4 px-3 md:px-6 pt-6 md:pt-12">
                            <div class="space-y-2 flex justify-center items-center flex-col">
                                <h4 class="text-xl font-semibold">
                                    <?php esc_html_e( 'Fast Reliable Payouts', 'aeon' ); ?>
                                </h4>
                                <p class="text-sm text-center">
                                    <?php esc_html_e( 'Enjoy swift, dependable payouts with AEON—processed efficiently and securely, backed by our trusted reward promise.', 'aeon' ); ?>
                                </p>
                            </div>
                        </div>
                        <div class="w-fit flex space-x-2 md:space-x-4 mb-2">
                            <div
                                class="flex flex-col items-start justify-around h-46 space-y-2 px-2 md:px-6 pt-3 hover:bg-aeon-yellow/30 transition duration-300 ease-in-out border border-aeon-yellow/20 rounded-3xl overflow-hidden will-change-auto">
                                <div class="w-fit">
                                    <div
                                        class="rounded-full text-xs bg-black/20 border border-gray-600 px-2 py-1 text-white">
                                        <?php esc_html_e( 'Standard', 'aeon' ); ?>
                                    </div>
                                </div>
                                <div class="space-y-2 flex flex-col">
                                    <div class="flex space-x-2 items-center">
                                        <div class="w-fit">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check-circle.png"
                                                alt="check-circle" class="w-full">
                                        </div>
                                        <h3 class="text-sm md:text-base">
                                            <?php esc_html_e( '90% Reward Split', 'aeon' ); ?>
                                        </h3>
                                    </div>
                                    <hr class="border-t-2 border-dotted border-aeon-yellow/20">
                                    <div class="flex space-x-2 items-center">
                                        <div class="w-fit">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check-circle.png"
                                                alt="check-circle" class="w-full">
                                        </div>
                                        <h3 class="text-sm md:text-base">
                                            <?php esc_html_e( 'Bi-Weekly Reward Cycles', 'aeon' ); ?>
                                        </h3>
                                    </div>
                                    <hr class="border-t-2 border-dotted border-aeon-yellow/20">
                                </div>
                            </div>
                            <div
                                class="flex flex-col items-start justify-around h-46 space-y-2 px-2 md:px-6 pt-3 hover:bg-aeon-yellow/30 border border-aeon-yellow/20 bg-aeon-yellow/20 rounded-3xl overflow-hidden will-change-auto">
                                <div class="w-fit">
                                    <div
                                        class="rounded-full text-xs bg-black/20 border border-gray-900 px-2 py-1 text-white">
                                        <?php esc_html_e( 'Upgrades', 'aeon' ); ?>
                                    </div>
                                </div>
                                <div class="space-y-2 flex flex-col">
                                    <div class="flex space-x-2 items-center">
                                        <div class="w-fit">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check-circle.png"
                                                alt="check-circle" class="w-full">
                                        </div>
                                        <h3 class="text-sm md:text-base">
                                            <?php esc_html_e( '90% Reward Split', 'aeon' ); ?>
                                        </h3>
                                    </div>
                                    <hr class="border-t-2 border-dotted border-aeon-yellow/20">
                                    <div class="flex space-x-2 items-center">
                                        <div class="w-fit">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check-circle.png"
                                                alt="check-circle" class="w-full">
                                        </div>
                                        <h3 class="text-sm md:text-base">
                                            <?php esc_html_e( 'Bi-Weekly Reward Cycles', 'aeon' ); ?>
                                        </h3>
                                    </div>
                                    <hr class="border-t-2 border-dotted border-aeon-yellow/20">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex space-x-4">
                <div class="flex items-center space-x-4">
                    <a href="http://dashboard.aeonfunded.com"
                        class="rounded-full text-xs md:text-lg bg-white px-3 md:px-6 py-2 text-black hover:drop-shadow-white-glow transition duration-300 ease-in-out">
                        <?php esc_html_e( 'Get Funded', 'aeon' ); ?>
                    </a>
                </div>
                <a href="<?php echo esc_url( site_url( '/payouts/' ) ); ?>"
                    class="flex items-center space-x-4 px-4 py-1 rounded-full bg-black hover:drop-shadow-white-glow transition duration-300 ease-in-out border border-gray-600 w-fit">
                    <p class="text-base">
                        <?php esc_html_e( "More Payouts", 'aeon' ); ?>
                    </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png" alt="arrow-right"
                        class="h-5">
                </a>
            </div>
        </section>

        <!-- Benefit Section -->
        <section
            class="flex flex-col items-center py-10 md:py-20 p-4 min-h-fit space-y-6 w-full bg-benefit bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
            <div class="w-fit">
                <div class="rounded-full text-xs bg-transparent border border-gray-600 px-2 py-1 text-white">
                    <?php esc_html_e( 'Benefit', 'aeon' ); ?>
                </div>
            </div>
            <div class="relative w-fit flex flex-col items-center space-y-4">
                <!-- Text Content -->
                <h2 class="relative z-9 text-2xl md:text-4xl text-center font-semibold">
                    <?php esc_html_e( 'Why Traders love ', 'aeon' ); ?>
                    <span class="text-aeon-yellow -mr-2">
                        <?php esc_html_e( 'A', 'aeon' ); ?>
                    </span><?php esc_html_e( 'EON?', 'aeon' ); ?>
                </h2>
                <p class="text-base w-full md:w-2/3 text-center">
                    <?php esc_html_e( "Get paid quickly and securely with a smooth and reliable payout process.", 'aeon' ); ?>
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6 lg:mt-10 w-full max-w-6xl">
                <div
                    class="benefit-item w-full bg-black/50 border border-black/50 rounded-xl p-2 overflow-hidden hover:drop-shadow-aeon-yellow/50">
                    <div
                        class="w-full h-full rounded-xl md:me-6 space-y-3 p-6 border border-aeon-yellow/50 bg-bg bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
                        <div class="w-fit flex space-x-4 items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1.png" alt="1"
                                class="h-15">
                            <h3 class="relative z-9 text-xl font-semibold">
                                <?php esc_html_e( 'Reward Promise ', 'aeon' ); ?>
                            </h3>
                        </div>
                        <p class="text-base">
                            <?php esc_html_e( 'Get Paid in 48 Hours or We Pay 100% Reward Split', 'aeon' ); ?>
                        </p>
                        <p class="text-sm">
                            <?php esc_html_e( 'Our commitment to timely payouts sets us apart in the industry.', 'aeon' ); ?>
                        </p>
                    </div>
                </div>

                <div
                    class="benefit-item w-full bg-black/50 border border-black/50 rounded-xl p-2 overflow-hidden hover:drop-shadow-aeon-yellow/50">
                    <div
                        class="w-full h-full rounded-xl md:me-6 space-y-3 p-6 border border-aeon-yellow/50 bg-bg bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
                        <div class="w-fit flex space-x-4 items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2.png" alt="2"
                                class="h-15">
                            <h3 class="relative z-9 text-xl font-semibold">
                                <?php esc_html_e( 'Easy To Achieve', 'aeon' ); ?>
                            </h3>
                        </div>
                        <p class="text-base">
                            <?php esc_html_e( '5-10% Reward Targets', 'aeon' ); ?>
                        </p>
                        <p class="text-sm">
                            <?php esc_html_e( 'Realistic and achievable Reward Targets designed for consistent growth.', 'aeon' ); ?>
                        </p>
                    </div>
                </div>
                <div
                    class="benefit-item w-full bg-black/50 border border-black/50 rounded-xl p-2 overflow-hidden hover:drop-shadow-aeon-yellow/50">
                    <div
                        class="w-full h-full rounded-xl md:me-6 space-y-3 p-6 border border-aeon-yellow/50 bg-bg bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
                        <div class="w-fit flex space-x-4 items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/3.png" alt="3"
                                class="h-15">
                            <h3 class="relative z-9 text-xl font-semibold">
                                <?php esc_html_e( 'Bi-Weekly Reward Cycles', 'aeon' ); ?>
                            </h3>
                        </div>
                        <p class="text-base">
                            <?php esc_html_e( 'Upgrade to First Payout in 7 Days', 'aeon' ); ?>
                        </p>
                        <p class="text-sm">
                            <?php esc_html_e( 'Regular payouts to keep your trading momentum going.', 'aeon' ); ?>
                        </p>
                    </div>
                </div>
                <div
                    class="benefit-item w-full bg-black/50 border border-black/50 rounded-xl p-2 overflow-hidden hover:drop-shadow-aeon-yellow/50">
                    <div
                        class="w-full h-full rounded-xl md:me-6 space-y-3 p-6 border border-aeon-yellow/50 bg-bg bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
                        <div class="w-fit flex space-x-4 items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/4.png" alt="4"
                                class="h-15">
                            <h3 class="relative z-9 text-xl font-semibold">
                                <?php esc_html_e( 'Scaled Demo Capital', 'aeon' ); ?>
                            </h3>
                        </div>
                        <p class="text-base">
                            <?php esc_html_e( 'Up To $2M In Scaled Demo Capital', 'aeon' ); ?>
                        </p>
                        <p class="text-sm">
                            <?php esc_html_e( 'Grow your trading capacity with our scaling program.', 'aeon' ); ?>
                        </p>
                    </div>
                </div>
                <div
                    class="benefit-item w-full bg-black/50 border border-black/50 rounded-xl p-2 overflow-hidden hover:drop-shadow-aeon-yellow/50">
                    <div
                        class="w-full h-full rounded-xl md:me-6 space-y-3 p-6 border border-aeon-yellow/50 bg-bg bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
                        <div class="w-fit flex space-x-4 items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/5.png" alt="5"
                                class="h-15">
                            <h3 class="relative z-9 text-xl font-semibold">
                                <?php esc_html_e( 'Generous Reward Split', 'aeon' ); ?>
                            </h3>
                        </div>
                        <p class="text-base">
                            <?php esc_html_e( 'Up to 95% Reward Split', 'aeon' ); ?>
                        </p>
                        <p class="text-sm">
                            <?php esc_html_e( 'Industry-leading profit-sharing structure with maximum returns and transparency.', 'aeon' ); ?>
                        </p>
                    </div>
                </div>
                <div
                    class="benefit-item w-full bg-black/50 border border-black/50 rounded-xl p-2 overflow-hidden hover:drop-shadow-aeon-yellow/50">
                    <div
                        class="w-full h-full rounded-xl md:me-6 space-y-3 p-6 border border-aeon-yellow/50 bg-bg bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
                        <div class="w-fit flex space-x-4 items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/6.png" alt="6"
                                class="h-15">
                            <h3 class="relative z-9 text-xl font-semibold">
                                <?php esc_html_e( 'Trade Without Pressure', 'aeon' ); ?>
                            </h3>
                        </div>
                        <p class="text-base">
                            <?php esc_html_e( 'No Time Limits on Challenges', 'aeon' ); ?>
                        </p>
                        <p class="text-sm">
                            <?php esc_html_e( 'Take your time to prove your trading skills. Unlike other prop firms.', 'aeon' ); ?>
                        </p>
                    </div>
                </div>
            </div>

        </section>

        <!-- Reviews Section -->
        <?php get_template_part( 'template-parts/content/content', 'reviews' ); ?>

        <!-- FAQ Section -->
        <?php get_template_part( 'template-parts/content/content', 'faq' ); ?>

        <!-- Discord section -->
        <?php get_template_part( 'template-parts/content/content', 'discord' ); ?>

    </main>

    <?php get_template_part( 'template-parts/content/content', 'footer' ); ?>

</div>

<?php
get_footer();